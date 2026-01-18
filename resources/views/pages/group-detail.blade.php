<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | Group Buy Details</title>
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
<aside class="w-72 bg-white border-r border-koopa-border flex flex-col px-6 py-8">
<div class="flex items-center gap-3 mb-8">
<div class="h-10 w-10 rounded-xl bg-koopa-teal flex items-center justify-center text-white font-bold">K</div>
<div>
<p class="text-sm font-bold">Koopa</p>
<p class="text-[10px] uppercase tracking-widest text-koopa-muted">SME Procurement</p>
</div>
</div>
<nav class="space-y-2">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/groups">
<span class="material-symbols-outlined">group</span>
My Groups
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/group-members">
<span class="material-symbols-outlined">group_add</span>
Members
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-[#e8f3f3] text-koopa-teal font-semibold" href="/marketplace">
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
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/orders">
<span class="material-symbols-outlined">shopping_bag</span>
Orders
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/invoices">
<span class="material-symbols-outlined">receipt_long</span>
Invoices
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/escrow-payments">
<span class="material-symbols-outlined">account_balance</span>
Escrow
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
<div class="h-full bg-[#f6b73c]" style="width: 72%"></div>
</div>
</div>
<a class="w-full bg-koopa-teal text-white py-3 rounded-xl font-semibold text-center" href="/marketplace">Browse Groups</a>
</div>
</aside>
<main class="flex-1">
<header class="bg-white border-b border-koopa-border px-8 py-4 flex items-center justify-between">
<div class="relative w-[420px]">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-koopa-muted">search</span>
<input class="w-full pl-12 pr-4 py-2.5 rounded-full border border-koopa-border bg-koopa-surface" placeholder="Search materials..."/>
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
<p class="text-sm font-semibold">Luigi's Bistro</p>
<p class="text-[10px] uppercase tracking-widest text-koopa-muted">Premium Tier</p>
</div>
<div class="h-10 w-10 rounded-full bg-koopa-teal text-white flex items-center justify-center">LB</div>
</div>
</div>
</header>
<div class="max-w-6xl mx-auto px-8 py-8">
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<div class="lg:col-span-2 space-y-6">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
<div class="bg-white border border-koopa-border rounded-xl overflow-hidden shadow-card">
<div class="h-52 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&w=1200&q=80');"></div>
<div class="p-5">
<h1 class="text-xl font-bold">Premium Arabica Coffee Beans (Bulk)</h1>
<p class="text-sm text-koopa-muted">Origin: Ethiopia | Shelf Life: 12 Months</p>
<p class="text-sm text-koopa-muted">Packaging: 25kg Vacuum Bags | Processing: Washed</p>
</div>
</div>
<div class="space-y-4">
<div class="bg-[#0f1f22] text-white rounded-xl p-5 shadow-card">
<p class="text-xs uppercase tracking-widest text-white/70">Time Remaining</p>
<div class="flex gap-3 mt-3">
<div class="bg-white/10 rounded-lg px-4 py-3 text-center">
<p class="text-lg font-bold">01</p>
<p class="text-[10px] uppercase text-white/60">Day</p>
</div>
<div class="bg-white/10 rounded-lg px-4 py-3 text-center">
<p class="text-lg font-bold">12</p>
<p class="text-[10px] uppercase text-white/60">Hrs</p>
</div>
<div class="bg-white/10 rounded-lg px-4 py-3 text-center">
<p class="text-lg font-bold">45</p>
<p class="text-[10px] uppercase text-white/60">Min</p>
</div>
<div class="bg-white/10 rounded-lg px-4 py-3 text-center">
<p class="text-lg font-bold">22</p>
<p class="text-[10px] uppercase text-white/60">Sec</p>
</div>
</div>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-5 shadow-card">
<p class="text-xs uppercase tracking-widest text-koopa-muted">Current Progress</p>
<div class="flex items-center justify-between mt-2">
<p class="text-2xl font-bold">740 <span class="text-sm text-koopa-muted">/ 1000 kg</span></p>
<span class="text-xs bg-[#e6f6f6] text-koopa-teal px-3 py-1 rounded-full">Tier 2 Active</span>
</div>
<div class="h-2 bg-koopa-border rounded-full mt-3 overflow-hidden">
<div class="h-full bg-koopa-teal" style="width: 74%"></div>
</div>
<div class="mt-4 space-y-2 text-sm">
<div class="flex items-center justify-between border border-koopa-border rounded-lg px-3 py-2">
<span>0 - 250 kg</span>
<span class="line-through text-koopa-muted">$10.00/kg</span>
</div>
<div class="flex items-center justify-between border border-koopa-teal rounded-lg px-3 py-2 text-koopa-teal font-semibold">
<span>251 - 750 kg (Current)</span>
<span>$8.50/kg</span>
</div>
<div class="flex items-center justify-between border border-koopa-border rounded-lg px-3 py-2">
<span>751 - 1500 kg</span>
<span>$7.25/kg</span>
</div>
<div class="flex items-center justify-between border border-koopa-border rounded-lg px-3 py-2">
<span>1500+ kg</span>
<span>$6.50/kg</span>
</div>
</div>
</div>
</div>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-5 shadow-card">
<p class="text-xs uppercase tracking-widest text-koopa-muted">Supplier Credentials</p>
<div class="flex items-center gap-3 mt-3">
<div class="h-12 w-12 rounded-xl bg-koopa-teal text-white flex items-center justify-center">AG</div>
<div>
<p class="font-semibold">Atlas Global Sourcing</p>
<p class="text-xs text-koopa-muted">4.9 (142 orders)</p>
</div>
</div>
<div class="flex items-center justify-between mt-4 text-sm">
<span class="text-koopa-muted">Success Rate</span>
<span class="font-semibold">100%</span>
</div>
<div class="flex items-center justify-between text-sm mt-2">
<span class="text-koopa-muted">Group Buys Completed</span>
<span class="font-semibold">28</span>
</div>
</div>
</div>
<div class="space-y-6">
<div class="bg-white border border-koopa-border rounded-xl p-5 shadow-card">
<h2 class="font-semibold">Join This Group Buy</h2>
<label class="block text-xs text-koopa-muted mt-4">Order Quantity (kg)</label>
<div class="flex items-center gap-2 mt-2">
<input class="w-full rounded-xl border border-koopa-border bg-koopa-surface" value="100"/>
<span class="text-sm text-koopa-muted">kg</span>
</div>
<div class="border-t border-koopa-border mt-4 pt-4 text-sm space-y-2">
<div class="flex items-center justify-between">
<span class="text-koopa-muted">Current Price</span>
<span class="font-semibold">$8.50</span>
</div>
<div class="flex items-center justify-between">
<span class="text-koopa-muted">Potential (Tier 3)</span>
<span class="font-semibold text-green-600">$7.25</span>
</div>
<div class="flex items-center justify-between">
<span class="text-koopa-muted">Est. Total</span>
<span class="font-semibold">$850.00</span>
</div>
</div>
<a class="mt-4 w-full bg-koopa-teal text-white py-3 rounded-xl font-semibold text-center block" href="/orders">Join Group Buy</a>
</div>
<div class="bg-[#fff4df] border border-[#ffd9a1] rounded-xl p-5">
<p class="text-xs uppercase tracking-widest text-koopa-muted">Collective Savings</p>
<p class="text-lg font-semibold mt-2">$1,110.00 saved so far</p>
</div>
</div>
</div>
</div>
<footer class="bg-white border-t border-koopa-border py-8 mt-10">
<div class="max-w-6xl mx-auto px-8 grid grid-cols-1 md:grid-cols-3 gap-6 text-sm text-koopa-muted">
<div>
<p class="font-semibold text-koopa-text">Koopa</p>
<p>The collective procurement engine for modern food and beverage businesses.</p>
</div>
<div>
<p class="font-semibold text-koopa-text">Platform</p>
<ul class="space-y-1">
<li>Marketplace</li>
<li>Supplier Portal</li>
<li>API Documentation</li>
</ul>
</div>
<div>
<p class="font-semibold text-koopa-text">Legal</p>
<ul class="space-y-1">
<li>Privacy Policy</li>
<li>Terms of Service</li>
<li>Wholesale Agreement</li>
</ul>
</div>
</div>
</footer>
</main>
</div>
</body>
</html>
