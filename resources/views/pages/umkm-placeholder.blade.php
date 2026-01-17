<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | {{ $title ?? 'Page' }}</title>
<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500;600&display=swap" rel="stylesheet"/>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    "koopa-teal": "#0f7b83",
                    "koopa-teal-dark": "#0a5c62",
                    "koopa-surface": "#f5f9f8",
                    "koopa-border": "#d9e7e8",
                    "koopa-text": "#1f2933",
                    "koopa-muted": "#6b7c85",
                    "koopa-accent": "#f6b73c",
                },
                fontFamily: {
                    sans: ["Inter", "sans-serif"],
                },
                boxShadow: {
                    card: "0 8px 24px rgba(15, 123, 131, 0.08)",
                },
                borderRadius: {
                    xl: "20px",
                }
            }
        }
    }
</script>
</head>
<body class="bg-koopa-surface text-koopa-text font-sans">
<div class="flex min-h-screen">
<aside class="w-72 bg-white border-r border-koopa-border flex flex-col px-6 py-8">
<div class="flex items-center gap-3 mb-8">
<div class="h-10 w-10 rounded-xl bg-koopa-teal flex items-center justify-center text-white font-bold">K</div>
<div>
<p class="text-sm font-bold">Koopa</p>
<p class="text-[10px] uppercase tracking-widest text-koopa-muted">SME Procurement</p>
</div>
</div>
<nav class="space-y-2">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/dashboard/qday">
<span class="material-symbols-outlined">group</span>
My Groups
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/marketplace">
<span class="material-symbols-outlined">storefront</span>
Marketplace
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/group-dynamics">
<span class="material-symbols-outlined">hub</span>
Group Dynamics
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/saved-lists">
<span class="material-symbols-outlined">bookmark</span>
Saved Lists
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/drop-points">
<span class="material-symbols-outlined">local_shipping</span>
Drop Points
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/invoices">
<span class="material-symbols-outlined">receipt_long</span>
Invoices
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/preferences">
<span class="material-symbols-outlined">tune</span>
Preferences
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/settings">
<span class="material-symbols-outlined">settings</span>
Settings
</a>
</nav>
<div class="mt-auto space-y-4">
<div class="border border-koopa-border rounded-xl p-4">
<p class="text-xs text-koopa-muted">Current Tier</p>
<p class="text-sm font-bold">Gold Member</p>
<div class="h-2 bg-koopa-border rounded-full mt-3 overflow-hidden">
<div class="h-full bg-koopa-accent" style="width: 72%"></div>
</div>
</div>
<a class="w-full bg-koopa-teal text-white py-3 rounded-xl font-semibold text-center" href="/marketplace">Browse Groups</a>
</div>
</aside>
<main class="flex-1">
<header class="bg-white border-b border-koopa-border px-8 py-4 flex items-center justify-between">
<div class="relative w-[420px]">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-koopa-muted">search</span>
<input class="w-full pl-12 pr-4 py-2.5 rounded-full border border-koopa-border bg-koopa-surface" placeholder="Search orders, invoices..."/>
</div>
<div class="flex items-center gap-4">
<button class="h-10 w-10 rounded-full border border-koopa-border flex items-center justify-center text-koopa-muted">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="h-10 w-10 rounded-full border border-koopa-border flex items-center justify-center text-koopa-muted">
<span class="material-symbols-outlined">help</span>
</button>
<div class="flex items-center gap-3 pl-3 border-l border-koopa-border">
<div class="text-right">
<p class="text-sm font-semibold">Bistro Serenity</p>
<p class="text-[10px] uppercase tracking-widest text-koopa-muted">SME Owner</p>
</div>
<div class="h-10 w-10 rounded-full bg-koopa-teal text-white flex items-center justify-center">BS</div>
</div>
</div>
</header>
<div class="p-8 max-w-6xl">
<div class="bg-white border border-koopa-border rounded-2xl p-8 shadow-card">
<div class="flex items-center gap-3 mb-3">
<div class="h-12 w-12 rounded-xl bg-[#e8f3f3] text-koopa-teal flex items-center justify-center">
<span class="material-symbols-outlined">workspaces</span>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">{{ $eyebrow ?? 'Koopa' }}</p>
<h1 class="text-2xl font-bold">{{ $title ?? 'Page' }}</h1>
</div>
</div>
<p class="text-sm text-koopa-muted">{{ $description ?? 'Content will appear here.' }}</p>
<div class="mt-6 flex gap-3">
<a class="px-4 py-2 rounded-xl bg-koopa-teal text-white text-sm font-semibold" href="/dashboard/qday">Back to My Groups</a>
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold text-koopa-text" href="/marketplace">Browse Marketplace</a>
</div>
</div>
</div>
</main>
</div>
</body>
</html>
