<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ $title ?? 'Koopa Owner' }}</title>
<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500;600&display=swap" rel="stylesheet"/>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    "primary-teal": "#00BFA5",
                    "brand-purple": "#7C4DFF",
                    "alert-orange": "#FF9100",
                    "bg-sidebar": "#F3F4F6",
                    "bg-main": "#F9FAFB",
                    "border-color": "#E5E7EB",
                    "text-main": "#1F2937",
                    "text-muted": "#6B7280",
                    "koopa-teal": "#0f7b83",
                    "koopa-teal-dark": "#0a5c62",
                    "koopa-surface": "#f5f9f8",
                    "koopa-border": "#d9e7e8",
                    "koopa-text": "#1f2933",
                    "koopa-muted": "#6b7c85",
                },
                fontFamily: {
                    sans: ["Inter", "sans-serif"],
                },
                boxShadow: {
                    "soft-premium": "0 4px 12px 0 rgba(0, 0, 0, 0.04)",
                    card: "0 8px 24px rgba(15, 123, 131, 0.08)",
                },
                borderRadius: {
                    "card": "16px",
                    xl: "20px",
                }
            }
        }
    }
</script>
<style type="text/tailwindcss">
    @layer base {
        body { @apply bg-bg-main text-text-main antialiased; }
    }
    .sidebar-active {
        @apply bg-primary-teal text-white shadow-md shadow-primary-teal/20;
    }
    .standard-card {
        @apply bg-white border border-border-color rounded-card shadow-soft-premium transition-all duration-300;
    }
    .pixel-heart {
        image-rendering: pixelated;
        width: 18px;
        height: 18px;
        background-color: #EF4444;
        clip-path: polygon(10% 30%, 10% 10%, 30% 10%, 30% 30%, 50% 30%, 50% 10%, 70% 10%, 70% 30%, 90% 30%, 90% 60%, 70% 60%, 70% 80%, 50% 80%, 50% 100%, 30% 100%, 30% 80%, 10% 80%, 10% 60%);
        display: inline-block;
    }
</style>
</head>
<body class="bg-bg-main text-text-main font-sans">
@php($authUser = Auth::user())
<div class="flex min-h-screen">
<aside class="w-72 bg-white border-r border-border-color px-6 py-8">
<div class="flex items-center gap-3 mb-8">
<div class="h-10 w-10 rounded-xl bg-koopa-teal text-white flex items-center justify-center">O</div>
<div>
<p class="text-sm font-bold">Koopa Owner</p>
<p class="text-[10px] uppercase tracking-widest text-koopa-muted">Control Center</p>
</div>
</div>
<nav class="space-y-2 text-sm">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:bg-bg-sidebar" href="{{ route('dashboard.owner') }}">
<span class="material-symbols-outlined">dashboard</span>
Dashboard
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:bg-bg-sidebar" href="{{ route('owner.groups.index') }}">
<span class="material-symbols-outlined">inventory_2</span>
Groups
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:bg-bg-sidebar" href="/price-ladder">
<span class="material-symbols-outlined">stacked_line_chart</span>
Price Ladder
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:bg-bg-sidebar" href="/escrow-fees">
<span class="material-symbols-outlined">account_balance</span>
Escrow
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:bg-bg-sidebar" href="{{ route('owner.users.index') }}">
<span class="material-symbols-outlined">group</span>
User Management
</a>
</nav>
</aside>
<main class="flex-1">
<header class="bg-white border-b border-border-color px-8 py-4 flex items-center justify-between">
<div class="text-sm text-text-muted">Owner Console</div>
<div class="flex items-center gap-3">
<div class="text-right">
<p class="text-sm font-semibold">{{ $authUser?->display_name ?? $authUser?->name ?? 'Owner' }}</p>
<p class="text-[10px] uppercase tracking-widest text-text-muted">Executive</p>
</div>
@if ($authUser?->profile_image_url)
<div class="h-10 w-10 rounded-full bg-cover bg-center" style="background-image: url('{{ $authUser->profile_image_url }}');"></div>
@else
<div class="h-10 w-10 rounded-full bg-koopa-teal text-white flex items-center justify-center">
{{ strtoupper(substr($authUser?->display_name ?? $authUser?->name ?? 'O', 0, 2)) }}
</div>
@endif
<form method="POST" action="{{ route('logout') }}">
@csrf
<button class="text-xs font-semibold text-text-muted hover:text-brand-purple" type="submit">Logout</button>
</form>
</div>
</header>
<div class="p-8 max-w-6xl">
@yield('content')
</div>
</main>
</div>
</body>
</html>
