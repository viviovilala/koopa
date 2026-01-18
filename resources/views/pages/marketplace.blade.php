<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | Marketplace</title>
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
<header class="bg-white border-b border-koopa-border px-8 py-4 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="h-10 w-10 rounded-xl bg-koopa-teal text-white flex items-center justify-center font-bold">K</div>
<span class="font-semibold">Koopa</span>
<nav class="hidden md:flex items-center gap-6 ml-8 text-sm text-koopa-muted">
<a href="/marketplace" class="hover:text-koopa-teal">Marketplace</a>
<a href="/groups" class="hover:text-koopa-teal">Active Groups</a>
<a href="/orders" class="hover:text-koopa-teal">My Orders</a>
<a href="/supplier-products" class="hover:text-koopa-teal">Suppliers</a>
</nav>
</div>
<div class="flex items-center gap-4">
<div class="relative w-[420px]">
<input class="w-full pl-12 pr-4 py-2.5 rounded-full border border-koopa-border bg-koopa-surface" placeholder="Search bulk raw materials, flour, dairy..."/>
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-koopa-muted">search</span>
</div>
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
<div class="flex">
<aside class="w-72 bg-white border-r border-koopa-border px-6 py-8">
<p class="text-xs uppercase tracking-widest text-koopa-muted">Main Menu</p>
<nav class="mt-4 space-y-2">
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
</nav>
<p class="text-xs uppercase tracking-widest text-koopa-muted mt-8">Operations</p>
<nav class="mt-4 space-y-2">
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
<div class="mt-10 border border-koopa-border rounded-xl p-4">
<p class="text-sm font-semibold">Need Help?</p>
<p class="text-xs text-koopa-muted">Talk to our wholesale concierge.</p>
<button class="mt-3 w-full bg-koopa-teal text-white py-2 rounded-xl text-sm font-semibold">Chat Now</button>
</div>
</aside>
<main class="flex-1 p-8">
<div class="flex items-center gap-3 flex-wrap">
<span class="text-sm font-semibold px-4 py-2 rounded-full bg-koopa-teal text-white">All Categories</span>
<span class="text-sm font-semibold px-4 py-2 rounded-full bg-white border border-koopa-border">Dairy & Eggs</span>
<span class="text-sm font-semibold px-4 py-2 rounded-full bg-white border border-koopa-border">Grains & Flour</span>
<span class="text-sm font-semibold px-4 py-2 rounded-full bg-white border border-koopa-border">Coffee & Tea</span>
<span class="text-sm font-semibold px-4 py-2 rounded-full bg-white border border-koopa-border">Eco Packaging</span>
<span class="text-sm font-semibold px-4 py-2 rounded-full bg-white border border-koopa-border">Oils & Vinegars</span>
</div>
<div class="mt-6">
<h1 class="text-2xl font-bold">Active Group Deals</h1>
<p class="text-sm text-koopa-muted">Unlock lower tiers by joining forces with nearby F&B owners.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
<div class="bg-white border border-koopa-border rounded-xl overflow-hidden shadow-card">
<div class="h-40 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1481391032119-d89fee407e44?auto=format&fit=crop&w=900&q=80');"></div>
<div class="p-5">
<p class="text-xs text-koopa-muted">Global Grain Co.</p>
<h3 class="font-semibold">Organic Oat Milk 1L (Case)</h3>
<div class="flex items-center justify-between text-sm mt-3">
<span class="text-koopa-muted">Current Price</span>
<span class="font-semibold">$4.50/unit</span>
</div>
<div class="flex items-center justify-between text-sm mt-1">
<span class="text-koopa-muted">Next Tier Target</span>
<span class="font-semibold text-koopa-accent">$4.10/unit</span>
</div>
<div class="mt-3 text-xs text-koopa-muted">450 / 500 units</div>
<div class="h-2 bg-koopa-border rounded-full mt-2 overflow-hidden">
<div class="h-full bg-koopa-teal" style="width: 90%"></div>
</div>
<div class="flex items-center justify-between mt-4">
<span class="text-xs text-koopa-muted">14h 22m left</span>
<a class="bg-koopa-teal text-white px-4 py-2 rounded-xl text-sm font-semibold" href="/group-detail">Join Group</a>
</div>
</div>
</div>
<div class="bg-white border border-koopa-border rounded-xl overflow-hidden shadow-card">
<div class="h-40 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=900&q=80');"></div>
<div class="p-5">
<p class="text-xs text-koopa-muted">RoastMaster Wholesale</p>
<h3 class="font-semibold">Premium Espresso Beans 5kg</h3>
<div class="flex items-center justify-between text-sm mt-3">
<span class="text-koopa-muted">Current Price</span>
<span class="font-semibold">$102.00/bag</span>
</div>
<div class="flex items-center justify-between text-sm mt-1">
<span class="text-koopa-muted">Next Tier Target</span>
<span class="font-semibold text-koopa-accent">$94.50/bag</span>
</div>
<div class="mt-3 text-xs text-koopa-muted">12 / 20 bags</div>
<div class="h-2 bg-koopa-border rounded-full mt-2 overflow-hidden">
<div class="h-full bg-koopa-teal" style="width: 60%"></div>
</div>
<div class="flex items-center justify-between mt-4">
<span class="text-xs text-koopa-muted">2d 08h left</span>
<a class="bg-koopa-teal text-white px-4 py-2 rounded-xl text-sm font-semibold" href="/group-detail">Join Group</a>
</div>
</div>
</div>
<div class="bg-white border border-koopa-border rounded-xl overflow-hidden shadow-card">
<div class="h-40 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1523293182086-7651a899d37f?auto=format&fit=crop&w=900&q=80');"></div>
<div class="p-5">
<p class="text-xs text-koopa-muted">EcoPack Solutions</p>
<h3 class="font-semibold">Biodegradable Takeout Boxes</h3>
<div class="flex items-center justify-between text-sm mt-3">
<span class="text-koopa-muted">Current Price</span>
<span class="font-semibold">$34.00/ctn</span>
</div>
<div class="flex items-center justify-between text-sm mt-1">
<span class="text-koopa-muted">Next Tier Target</span>
<span class="font-semibold text-koopa-accent">$28.00/ctn</span>
</div>
<div class="mt-3 text-xs text-koopa-muted">88 / 100 cartons</div>
<div class="h-2 bg-koopa-border rounded-full mt-2 overflow-hidden">
<div class="h-full bg-koopa-teal" style="width: 88%"></div>
</div>
<div class="flex items-center justify-between mt-4">
<span class="text-xs text-red-500">3h 45m left</span>
<a class="bg-koopa-teal text-white px-4 py-2 rounded-xl text-sm font-semibold" href="/group-detail">Join Group</a>
</div>
</div>
</div>
</div>
</main>
</div>
</body>
</html>
