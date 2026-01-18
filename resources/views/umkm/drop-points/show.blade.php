<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa Ops | Batch Fulfillment</title>
<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500;600&display=swap" rel="stylesheet"/>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    "koopa-teal": "#0f7b83",
                    "koopa-surface": "#f6faf9",
                    "koopa-border": "#d9e7e8",
                    "koopa-text": "#1f2933",
                    "koopa-muted": "#6b7c85",
                },
                fontFamily: {
                    sans: ["Inter", "sans-serif"],
                },
                boxShadow: {
                    card: "0 10px 24px rgba(15, 123, 131, 0.08)",
                },
                borderRadius: {
                    xl: "20px",
                }
            }
        }
    }
</script>
</head>
<body class="bg-koopa-surface text-koopa-text font-sans min-h-screen">
<div class="flex min-h-screen">
<aside class="w-64 bg-white border-r border-koopa-border px-6 py-8 space-y-6">
<div class="flex items-center gap-3">
<div class="h-10 w-10 rounded-xl bg-koopa-teal text-white flex items-center justify-center font-bold">K</div>
<div>
<p class="font-bold">SembakoHub</p>
<p class="text-[10px] uppercase tracking-widest text-koopa-muted">Drop Point Ops</p>
</div>
</div>
<nav class="space-y-2 text-sm">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-[#e8f3f3] text-koopa-teal font-semibold" href="/drop-points/{{ $dropPoint->id }}">
<span class="material-symbols-outlined">inventory_2</span>
Current Batch
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/orders">
<span class="material-symbols-outlined">history</span>
Order History
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/group-members">
<span class="material-symbols-outlined">group</span>
Member Directory
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-koopa-muted hover:bg-koopa-surface" href="/dashboard/profitquest">
<span class="material-symbols-outlined">monitoring</span>
Analytics
</a>
</nav>
<div class="border-t border-koopa-border pt-4 text-sm text-koopa-muted space-y-2">
<a class="flex items-center gap-3 hover:text-koopa-teal" href="/settings">
<span class="material-symbols-outlined">settings</span>
Settings
</a>
<a class="flex items-center gap-3 hover:text-koopa-teal" href="/help-center">
<span class="material-symbols-outlined">help</span>
Help Center
</a>
</div>
<div class="mt-auto bg-white border border-koopa-border rounded-xl p-4 text-xs text-koopa-muted">
<p class="font-semibold text-koopa-text">Physical Drop Point A</p>
<p>Central Jakarta, Jl. Thamrin 12</p>
<button class="mt-3 w-full bg-koopa-teal text-white py-2 rounded-xl text-xs font-semibold">Switch Point</button>
</div>
</aside>

<main class="flex-1">
<header class="bg-white border-b border-koopa-border px-8 py-4 flex items-center justify-between">
<div class="relative w-[360px]">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-koopa-muted">search</span>
<input class="w-full pl-12 pr-4 py-2.5 rounded-full border border-koopa-border bg-koopa-surface" placeholder="Search members or items"/>
</div>
<div class="flex items-center gap-6 text-sm">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Current Batch</p>
<p class="font-semibold">#42: Weekly Flour &amp; Oil</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Supplier</p>
<p class="font-semibold">Bogasari &amp; Bimoli</p>
</div>
<button class="h-9 w-9 rounded-full border border-koopa-border flex items-center justify-center text-koopa-muted">
<span class="material-symbols-outlined text-base">notifications</span>
</button>
<div class="h-9 w-9 rounded-full bg-koopa-teal text-white flex items-center justify-center">A</div>
</div>
</header>

<div class="p-8 space-y-6">
<div class="flex items-center justify-between">
<div>
<div class="text-xs uppercase tracking-widest text-koopa-muted">In Progress</div>
<h1 class="text-2xl font-bold">Batch #42 Fulfillment</h1>
<p class="text-sm text-koopa-muted">Managing 1,200kg for 20 SME members.</p>
</div>
<div class="flex gap-3">
<button class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold">Refresh</button>
<button class="px-4 py-2 rounded-xl bg-koopa-teal text-white text-sm font-semibold">Print Manifest</button>
</div>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<div class="flex items-center justify-between mb-2 text-sm">
<span class="font-semibold">Overall Pickup Completion</span>
<span class="text-koopa-teal font-semibold">65%</span>
</div>
<div class="h-2 bg-koopa-border rounded-full overflow-hidden">
<div class="h-full bg-koopa-teal" style="width: 65%"></div>
</div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-[1.4fr_0.8fr] gap-6">
<div class="space-y-6">
<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2 text-sm font-semibold">
<span class="material-symbols-outlined text-koopa-teal">local_shipping</span>
Supplier Delivery Verification
</div>
<span class="text-xs uppercase tracking-widest text-koopa-muted">Required step</span>
</div>
<div class="mt-6 grid grid-cols-1 md:grid-cols-[160px_1fr] gap-6 items-center">
<div class="h-36 border-2 border-dashed border-koopa-border rounded-xl flex items-center justify-center text-xs text-koopa-muted">
Upload Photo
</div>
<div>
<p class="font-semibold">Confirm Bulk Arrival</p>
<p class="text-sm text-koopa-muted">Verify 1,200kg flour and 500L oil arrival before pickups.</p>
<div class="mt-4 flex gap-3">
<button class="px-4 py-2 rounded-xl bg-koopa-teal text-white text-sm font-semibold">Verify &amp; Open Pickups</button>
<button class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold">Report Issue</button>
</div>
</div>
</div>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<div class="flex items-center justify-between">
<h3 class="font-semibold">Member Pickup Checklist</h3>
<div class="text-xs text-koopa-muted">Pending (8)</div>
</div>
<div class="mt-4 divide-y divide-koopa-border text-sm">
<div class="py-4 flex items-center justify-between">
<div>
<p class="font-semibold">Budi's Kitchen</p>
<p class="text-xs text-koopa-muted">4x Flour (25kg), 2x Oil (20L)</p>
</div>
<span class="text-xs bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full">Picked Up</span>
</div>
<div class="py-4 flex items-center justify-between">
<div>
<p class="font-semibold">Sari Martabak</p>
<p class="text-xs text-koopa-muted">10x Flour (25kg)</p>
</div>
<button class="px-3 py-1.5 rounded-xl bg-koopa-teal text-white text-xs font-semibold">Mark Pickup</button>
</div>
<div class="py-4 flex items-center justify-between">
<div>
<p class="font-semibold">Donut Galore</p>
<p class="text-xs text-koopa-muted">2x Flour (25kg), 1x Sugar (50kg)</p>
</div>
<span class="text-xs bg-amber-100 text-amber-700 px-3 py-1 rounded-full">Waiting</span>
</div>
</div>
</div>
</div>

<div class="space-y-6">
<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<h3 class="font-semibold mb-4">Live Activity Log</h3>
<div class="space-y-4 text-sm text-koopa-muted">
<div>
<p class="text-koopa-text font-semibold">Pickup Confirmed</p>
<p>Budi's Kitchen picked up 140kg of materials.</p>
<p class="text-xs">5 mins ago</p>
</div>
<div>
<p class="text-koopa-text font-semibold">Member Arrived</p>
<p>Sari Martabak arrived at drop point.</p>
<p class="text-xs">12 mins ago</p>
</div>
<div>
<p class="text-koopa-text font-semibold">System Alert</p>
<p>Supplier truck delayed by 15 mins.</p>
<p class="text-xs">45 mins ago</p>
</div>
</div>
</div>

<div class="bg-gradient-to-br from-koopa-teal to-[#0b5e64] text-white rounded-2xl p-6 shadow-card">
<div class="flex items-center justify-between">
<div>
<p class="text-xs uppercase tracking-widest opacity-80">Location Context</p>
<p class="text-lg font-semibold">Physical Drop Point A - Central Jakarta</p>
</div>
<div class="h-10 w-10 rounded-full bg-white/20 flex items-center justify-center">
<span class="material-symbols-outlined text-lg">location_on</span>
</div>
</div>
<div class="mt-6 grid grid-cols-2 gap-4 text-sm">
<div>
<p class="text-xs uppercase tracking-widest opacity-70">Storage Capacity</p>
<p class="text-xl font-semibold">85% Full</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest opacity-70">Temp Control</p>
<p class="text-xl font-semibold">24C</p>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body>
</html>
