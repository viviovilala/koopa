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
            'temperature' => 'sometimes|numeric|min:0|max:1',
        ]);

        $apiKey = config('services.openai.key');
        if (!$apiKey) {
            return response()->json([
                'error' => 'OpenAI API key not configured.',
            ], 500);
        }

        $model = $data['model'] ?? config('services.openai.model', 'gpt-4o-mini');
        $timeout = (int) config('services.openai.timeout', 30);
        $maxOutput = (int) config('services.openai.max_output_tokens', 600);
        $temperature = isset($data['temperature']) ? (float) $data['temperature'] : 0.3;

        $instructions = 'You are Koopa AI, a concise assistant for collective purchasing in food and beverage businesses. '
            . 'Explain pricing, group progress, escrow safety, and pickup steps in simple Indonesian. '
            . 'Do not provide legal or financial advice. Keep responses under 6 sentences.';

        $response = Http::withToken($apiKey)
            ->acceptJson()
            ->timeout($timeout)
            ->retry(2, 200)
            ->post('https://api.openai.com/v1/responses', [
                'model' => $model,
                'temperature' => $temperature,
                'max_output_tokens' => $maxOutput,
                'input' => [
                    [
                        'role' => 'system',
                        'content' => [
                            [
                                'type' => 'input_text',
                                'text' => $instructions,
                            ],
                        ],
                    ],
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
            'model' => $model,
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
