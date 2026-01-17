<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>{{ $title ?? 'Koopa Supplier' }}</title>
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
<aside class="w-72 bg-white border-r border-koopa-border px-6 py-8">
<div class="flex items-center gap-3 mb-8">
<div class="h-10 w-10 rounded-xl bg-koopa-teal text-white flex items-center justify-center">S</div>
<div>
<p class="text-sm font-bold">Koopa Supplier</p>
<p class="text-[10px] uppercase tracking-widest text-koopa-muted">Wholesale Partner</p>
</div>
</div>
<nav class="space-y-2">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/supplier-dashboard">
<span class="material-symbols-outlined">dashboard</span>
Dashboard
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl {{ ($active ?? '') === 'products' ? 'bg-[#e8f3f3] text-koopa-teal font-semibold' : 'text-koopa-muted hover:bg-koopa-surface' }}" href="{{ route('supplier.products.index') }}">
<span class="material-symbols-outlined">inventory_2</span>
My Products
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/supplier-orders">
<span class="material-symbols-outlined">shopping_bag</span>
Orders
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/supplier-analytics">
<span class="material-symbols-outlined">analytics</span>
Analytics
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/supplier-settings">
<span class="material-symbols-outlined">settings</span>
Settings
</a>
</nav>
<div class="mt-auto">
<button class="w-full bg-koopa-teal text-white py-3 rounded-xl font-semibold">Support Center</button>
</div>
</aside>
<main class="flex-1">
<header class="bg-white border-b border-koopa-border px-8 py-4 flex items-center justify-between">
<div class="relative w-[520px]">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-koopa-muted">search</span>
<input class="w-full pl-12 pr-4 py-2.5 rounded-full border border-koopa-border bg-koopa-surface" placeholder="Search catalog..."/>
</div>
<div class="flex items-center gap-4">
<button class="h-10 w-10 rounded-full border border-koopa-border flex items-center justify-center text-koopa-muted">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="flex items-center gap-3 pl-3 border-l border-koopa-border">
<div class="text-right">
<p class="text-sm font-semibold">Alex Chen</p>
<p class="text-[10px] uppercase tracking-widest text-koopa-muted">Supplier Admin</p>
</div>
<div class="h-10 w-10 rounded-full bg-koopa-teal text-white flex items-center justify-center">AC</div>
</div>
</div>
</header>
<div class="p-8 max-w-6xl">
@yield('content')
</div>
</main>
</div>
</body>
</html>
