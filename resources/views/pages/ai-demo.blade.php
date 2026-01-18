<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | AI Lab</title>
<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet"/>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    "ink": "#0f172a",
                    "accent": "#00BFA5",
                    "surface": "#f8fafc",
                },
                fontFamily: {
                    "display": ["Space Grotesk", "sans-serif"],
                },
            },
        },
    }
</script>
</head>
<body class="bg-surface text-ink font-display min-h-screen">
<div class="max-w-4xl mx-auto px-6 py-10">
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-3xl font-bold">AI Lab</h1>
<p class="text-sm text-slate-500">Test the OpenAI chat endpoint (supporting only, not transactional).</p>
</div>
<a class="text-sm font-bold text-accent" href="/">Back to Dashboard</a>
</div>
<div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
<form id="aiForm" class="space-y-4">
<div>
<label class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2">Prompt</label>
<textarea class="w-full rounded-xl border-slate-200 focus:ring-accent focus:border-accent" rows="5" name="message" placeholder="Ask about margin, pricing, or anything..."></textarea>
</div>
<div class="flex items-center gap-3">
<input class="w-48 rounded-xl border-slate-200 focus:ring-accent focus:border-accent" name="model" placeholder="gpt-4o-mini"/>
<input class="w-28 rounded-xl border-slate-200 focus:ring-accent focus:border-accent" name="temperature" placeholder="0.3"/>
<button class="px-5 py-2.5 bg-accent text-white rounded-xl font-bold" type="submit">Send</button>
</div>
</form>
<div class="mt-6">
<p class="text-[10px] font-bold uppercase tracking-widest text-slate-400">Response</p>
<pre id="aiOutput" class="mt-2 p-4 rounded-xl bg-slate-900 text-slate-100 text-sm whitespace-pre-wrap">Waiting...</pre>
</div>
</div>
</div>
<script>
    const form = document.getElementById('aiForm');
    const output = document.getElementById('aiOutput');

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        output.textContent = 'Loading...';
        const formData = new FormData(form);
        const payload = {
            message: formData.get('message'),
            model: formData.get('model') || 'gpt-4o-mini',
            temperature: formData.get('temperature') || 0.3,
        };

        try {
            const response = await fetch('/api/ai/chat', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(payload),
            });
            const data = await response.json();
            if (!response.ok) {
                output.textContent = `Error ${response.status}\n${JSON.stringify(data, null, 2)}`;
                return;
            }
            output.textContent = data.output || 'No output.';
        } catch (error) {
            output.textContent = 'Request failed. Check API key and server logs.';
        }
    });
</script>
</body>
</html>


