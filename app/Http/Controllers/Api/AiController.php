<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AiController extends Controller
{
    public function chat(Request $request)
    {
        $data = $request->validate([
            'message' => 'required|string|max:4000',
            'model' => 'sometimes|string|max:100',
        ]);

        $apiKey = config('services.openai.key');
        if (!$apiKey) {
            return response()->json([
                'error' => 'OpenAI API key not configured.',
            ], 500);
        }

        $model = $data['model'] ?? 'gpt-4o-mini';

        $response = Http::withToken($apiKey)
            ->timeout(30)
            ->post('https://api.openai.com/v1/responses', [
                'model' => $model,
                'input' => [
                    [
                        'role' => 'user',
                        'content' => [
                            [
                                'type' => 'input_text',
                                'text' => $data['message'],
                            ],
                        ],
                    ],
                ],
            ]);

        if (!$response->successful()) {
            return response()->json([
                'error' => 'OpenAI request failed.',
                'status' => $response->status(),
                'details' => $response->json(),
            ], 502);
        }

        $payload = $response->json();

        return response()->json([
            'output' => $this->extractText($payload),
            'raw' => $payload,
        ]);
    }

    private function extractText(array $payload): string
    {
        $chunks = [];

        foreach ($payload['output'] ?? [] as $item) {
            foreach ($item['content'] ?? [] as $content) {
                if (($content['type'] ?? '') === 'output_text') {
                    $chunks[] = $content['text'] ?? '';
                }
            }
        }

        return trim(implode("\n", $chunks));
    }
}
