<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | Supplier Products</title>
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
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-[#e8f3f3] text-koopa-teal font-semibold" href="/supplier-products">
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
<p class="text-[10px] text-koopa-muted">Supplier Admin</p>
</div>
<div class="h-10 w-10 rounded-full bg-koopa-teal text-white flex items-center justify-center">AC</div>
</div>
</div>
</header>
<div class="p-8 max-w-6xl">
<div class="flex items-center justify-between">
<div>
<h1 class="text-2xl font-bold">Product Management</h1>
<p class="text-sm text-koopa-muted">Manage your wholesale catalog and tier-pricing ladders</p>
</div>
<div class="flex items-center gap-3">
<button class="px-4 py-2 rounded-xl border border-koopa-border bg-white">Export CSV</button>
<button class="px-4 py-2 rounded-xl bg-koopa-teal text-white">Create New Listing</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
<div class="bg-white border border-koopa-border rounded-xl p-5 shadow-card">
<p class="text-sm text-koopa-muted">Active Listings</p>
<p class="text-2xl font-bold">12</p>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-5 shadow-card">
<p class="text-sm text-koopa-muted">Total Monthly Orders</p>
<p class="text-2xl font-bold">486</p>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-5 shadow-card">
<p class="text-sm text-koopa-muted">Avg. Order Value</p>
<p class="text-2xl font-bold">$1,240</p>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
<div class="bg-white border border-koopa-border rounded-xl p-6 shadow-card">
<h2 class="font-semibold">Product Details</h2>
<p class="text-xs text-koopa-muted">Create a new bulk purchase listing</p>
<div class="mt-4 space-y-3 text-sm">
<label class="block">
<span class="text-xs text-koopa-muted">Product Name</span>
<input class="mt-1 w-full rounded-xl border border-koopa-border" placeholder="e.g. Premium Thai Jasmine Rice"/>
</label>
<div class="grid grid-cols-2 gap-3">
<label>
<span class="text-xs text-koopa-muted">Category</span>
<input class="mt-1 w-full rounded-xl border border-koopa-border" placeholder="Grains & Pulse"/>
</label>
<label>
<span class="text-xs text-koopa-muted">MOQ (kg/unit)</span>
<input class="mt-1 w-full rounded-xl border border-koopa-border" placeholder="100"/>
</label>
</div>
<label class="block">
<span class="text-xs text-koopa-muted">Service Area</span>
<input class="mt-1 w-full rounded-xl border border-koopa-border" placeholder="Singapore, JB, Malaysia"/>
</label>
<div class="mt-3">
<p class="text-xs text-koopa-muted">Price Ladder (Tiered)</p>
<div class="mt-2 space-y-2">
<div class="flex items-center gap-2">
<input class="w-20 rounded-xl border border-koopa-border" placeholder="100"/>
<span class="text-xs text-koopa-muted">kg</span>
<input class="flex-1 rounded-xl border border-koopa-border" placeholder="$3.50/kg"/>
</div>
<div class="flex items-center gap-2">
<input class="w-20 rounded-xl border border-koopa-border" placeholder="500"/>
<span class="text-xs text-koopa-muted">kg</span>
<input class="flex-1 rounded-xl border border-koopa-border" placeholder="$3.10/kg"/>
</div>
<div class="flex items-center gap-2">
<input class="w-20 rounded-xl border border-koopa-border" placeholder="1000"/>
<span class="text-xs text-koopa-muted">kg</span>
<input class="flex-1 rounded-xl border border-koopa-border" placeholder="$2.80/kg"/>
</div>
</div>
</div>
<div class="flex items-center gap-3 mt-4">
<button class="flex-1 bg-koopa-teal text-white py-2 rounded-xl">Publish Listing</button>
<button class="flex-1 border border-koopa-border py-2 rounded-xl">Draft</button>
</div>
</div>
</div>
<div class="lg:col-span-2 bg-white border border-koopa-border rounded-xl p-6 shadow-card">
<div class="flex items-center justify-between">
<h2 class="font-semibold">Active Catalog</h2>
<button class="text-koopa-muted">Filter</button>
</div>
<table class="w-full mt-4 text-sm">
<thead>
<tr class="text-left text-koopa-muted">
<th class="py-2">Product</th>
<th class="py-2">Category</th>
<th class="py-2">MOQ</th>
<th class="py-2">Price Ladder</th>
<th class="py-2">Status</th>
</tr>
</thead>
<tbody>
<tr class="border-t border-koopa-border">
<td class="py-3 font-semibold">Jasmine Rice AAA</td>
<td class="py-3">Grains</td>
<td class="py-3">100 kg</td>
<td class="py-3">3 Tiers</td>
<td class="py-3"><span class="text-xs bg-[#e6f6f6] text-koopa-teal px-2 py-1 rounded-full">Active</span></td>
</tr>
<tr class="border-t border-koopa-border">
<td class="py-3 font-semibold">Refined Palm Oil</td>
<td class="py-3">Oils & Fats</td>
<td class="py-3">200 L</td>
<td class="py-3">2 Tiers</td>
<td class="py-3"><span class="text-xs bg-[#fff4df] text-koopa-muted px-2 py-1 rounded-full">Draft</span></td>
</tr>
<tr class="border-t border-koopa-border">
<td class="py-3 font-semibold">Organic Turmeric Powder</td>
<td class="py-3">Spices</td>
<td class="py-3">50 kg</td>
<td class="py-3">4 Tiers</td>
<td class="py-3"><span class="text-xs bg-[#e6f6f6] text-koopa-teal px-2 py-1 rounded-full">Active</span></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</main>
</div>
</body>
</html>
