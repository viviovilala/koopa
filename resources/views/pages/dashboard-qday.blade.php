<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | My Groups</title>
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
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-[#e8f3f3] text-koopa-teal font-semibold" href="/dashboard/qday">
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
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white border border-koopa-border rounded-xl p-6 shadow-card flex items-center justify-between">
<div>
<p class="text-sm text-koopa-muted">Total Savings This Month</p>
<p class="text-2xl font-bold">$1,240.50</p>
</div>
<div class="h-12 w-12 rounded-xl bg-[#fff4df] flex items-center justify-center text-koopa-accent">
<span class="material-symbols-outlined">trending_up</span>
</div>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-6 shadow-card flex items-center justify-between">
<div>
<p class="text-sm text-koopa-muted">Active Participations</p>
<p class="text-2xl font-bold">8</p>
</div>
<div class="h-12 w-12 rounded-xl bg-[#e6f6f6] flex items-center justify-center text-koopa-teal">
<span class="material-symbols-outlined">shopping_cart</span>
</div>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-6 shadow-card flex items-center justify-between">
<div>
<p class="text-sm text-koopa-muted">Pending Actions</p>
<p class="text-2xl font-bold">2</p>
</div>
<div class="h-12 w-12 rounded-xl bg-[#ffecec] flex items-center justify-center text-red-500">
<span class="material-symbols-outlined">error</span>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">
<div class="lg:col-span-2 space-y-6">
<div>
<div class="flex items-center justify-between mb-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-koopa-teal">hourglass_top</span>
<h2 class="text-lg font-semibold">Active Groups</h2>
</div>
<span class="text-xs text-koopa-muted px-3 py-1 rounded-full border border-koopa-border">Waiting for Volume</span>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-6 shadow-card">
<div class="flex items-center justify-between">
<div>
<h3 class="font-semibold">Premium Jasmine Rice (Bulk)</h3>
<p class="text-xs text-koopa-muted">SKU: RICE-JAS-001 - 500kg pledged</p>
</div>
<span class="text-xs font-semibold bg-[#fff4df] text-koopa-accent px-3 py-1 rounded-full">Est. Savings: 22%</span>
</div>
<div class="mt-4">
<div class="flex items-center justify-between text-xs text-koopa-muted">
<span>Volume Progress</span>
<span>850 / 1000 kg</span>
</div>
<div class="h-2 bg-koopa-border rounded-full mt-2 overflow-hidden">
<div class="h-full bg-koopa-teal" style="width: 85%"></div>
</div>
<div class="flex items-center justify-between mt-3 text-xs text-koopa-muted">
<span>Ends in 4 days</span>
<span class="text-koopa-teal font-semibold">$1.15/kg</span>
</div>
</div>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-6 shadow-card">
<div class="flex items-center justify-between">
<div>
<h3 class="font-semibold">Refined Sunflower Oil</h3>
<p class="text-xs text-koopa-muted">SKU: OIL-SUN-45 - 200L pledged</p>
</div>
<span class="text-xs font-semibold bg-[#fff4df] text-koopa-accent px-3 py-1 rounded-full">Est. Savings: 15%</span>
</div>
<div class="mt-4">
<div class="flex items-center justify-between text-xs text-koopa-muted">
<span>Volume Progress</span>
<span>45 / 200 L</span>
</div>
<div class="h-2 bg-koopa-border rounded-full mt-2 overflow-hidden">
<div class="h-full bg-koopa-teal" style="width: 22%"></div>
</div>
<div class="flex items-center justify-between mt-3 text-xs text-koopa-muted">
<span>Ends in 12 days</span>
<span class="text-koopa-teal font-semibold">$2.40/L</span>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="bg-white border border-koopa-border rounded-xl p-6 shadow-card">
<div class="flex items-center justify-between">
<h3 class="font-semibold">In Delivery</h3>
<span class="text-xs bg-[#e6f6f6] text-koopa-teal px-3 py-1 rounded-full">On Track</span>
</div>
<p class="text-sm mt-3">Canned Tomato Paste (Industrial)</p>
<p class="text-xs text-koopa-muted">Payment secured in escrow</p>
<div class="flex items-center justify-between mt-6 text-xs text-koopa-muted">
<span>Current Location: Industrial Port Sector 4</span>
<span>ETA: Tomorrow, 10:00 AM</span>
</div>
</div>
<div class="bg-koopa-teal text-white rounded-xl p-6 shadow-card">
<div class="flex items-center justify-between">
<h3 class="font-semibold">Ready for Pickup</h3>
<span class="text-xs bg-white/20 px-3 py-1 rounded-full">ID: #99402</span>
</div>
<p class="text-sm mt-3">Roasted Coffee Beans (Arabica)</p>
<p class="text-xs text-white/80">50kg - Pickup Point: Warehouse District 7</p>
<div class="bg-white text-koopa-teal rounded-xl mt-6 p-3 text-center font-semibold">Confirm Receipt</div>
</div>
</div>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-6 shadow-card">
<div class="flex items-center justify-between">
<h3 class="font-semibold">Pending Payment</h3>
<span class="text-xs bg-[#ffecec] text-red-500 px-3 py-1 rounded-full">Urgent</span>
</div>
<div class="mt-4 border border-[#ffdede] rounded-xl p-4">
<h4 class="font-semibold">Organic Wheat Flour</h4>
<p class="text-xs text-koopa-muted">Target reached. Final price: $0.85/kg</p>
<div class="grid grid-cols-2 gap-3 mt-4">
<div class="border border-koopa-border rounded-xl p-3">
<p class="text-xs text-koopa-muted">Your Total</p>
<p class="font-semibold">$425.00</p>
</div>
<div class="border border-koopa-border rounded-xl p-3">
<p class="text-xs text-koopa-muted">Savings</p>
<p class="font-semibold text-green-600">+$112.00</p>
</div>
</div>
<button class="mt-4 w-full bg-koopa-teal text-white py-3 rounded-xl font-semibold">Pay to Escrow Now</button>
</div>
</div>
</div>
</div>
</main>
</div>
</body>
</html>
