<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | Group Performance Matrix</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#4c2673",
                        "teal-brand": "#2dd4bf",
                        "purple-brand": "#7c3aed",
                        "accent": "#F2D126",
                        "background-light": "#f8fafc",
                        "background-dark": "#0f172a",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "2xl": "1rem", "3xl": "1.5rem", "full": "9999px"},
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .matrix-bg {
            background-image: radial-gradient(#e2e8f0 1px, transparent 1px);
            background-size: 24px 24px;
        }
        .quest-card {
            @apply bg-white dark:bg-slate-900 border-2 border-slate-100 dark:border-slate-800 rounded-3xl p-5 transition-all hover:border-teal-brand/50 hover:shadow-xl hover:shadow-teal-brand/5;
        }
        .sidebar-item-active {
            @apply bg-primary text-white shadow-lg shadow-primary/20;
        }
        .sidebar-item-inactive {
            @apply text-slate-600 dark:text-slate-400 hover:bg-white dark:hover:bg-slate-800 transition-all;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
<header class="sticky top-0 z-50 w-full bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 px-6 py-3">
<div class="max-w-[1440px] mx-auto flex items-center justify-between">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3">
<div class="bg-primary p-1.5 rounded-lg text-white">
<span class="material-symbols-outlined text-2xl">rocket_launch</span>
</div>
<h2 class="text-xl font-black tracking-tight text-primary dark:text-white uppercase">Koopa</h2>
</div>
<nav class="hidden md:flex items-center gap-6">
<a class="text-sm font-semibold text-slate-500 hover:text-primary transition-colors" href="#">Groups</a>
<a class="text-sm font-bold text-primary border-b-2 border-primary pb-1" href="#">Matrix</a>
<a class="text-sm font-semibold text-slate-500 hover:text-primary transition-colors" href="#">Price Ladder</a>
<a class="text-sm font-semibold text-slate-500 hover:text-primary transition-colors" href="#">Escrow</a>
</nav>
</div>
<div class="flex items-center gap-4">
<div class="hidden lg:flex items-center gap-2 bg-primary/10 px-4 py-2 rounded-full border border-primary/20">
<span class="text-xs font-bold text-primary uppercase">Risk Control Score</span>
<div class="w-24 h-2 bg-slate-200 rounded-full overflow-hidden">
<div class="w-[82%] h-full bg-primary"></div>
</div>
<span class="text-sm font-black text-primary">82%</span>
</div>
<div class="flex items-center gap-3 pl-4 border-l border-slate-200 dark:border-slate-700">
<div class="text-right hidden sm:block">
<p class="text-xs font-bold">Group Ops</p>
<p class="text-[10px] text-slate-500 uppercase">Koopa Control</p>
</div>
<div class="size-10 rounded-full bg-slate-200 border-2 border-white shadow-sm overflow-hidden">
<img alt="Profile" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJi1v5CacHKWahylIN4N-_AOtLom7jDrY67nzpcJmVaznBKo9h46GCAFAYEevysqgOQViyI2NtXJWHMKyjkH-73QDjiGc6BFkOrMAABeTXr58NoGIq49sb3In9Ey3mQWbtSbKN__WGoo1rMH9ksOPCIQrkIYOAcS3P9mhHvdTtu5Fzpav2auz6hevoxsnBwDcg9JzvCFzZUUVUVgEnseAdlq7V2yv2OqfqImKyLblpXIvUKBCvJKzB8_Hs9JDJ0YyaUvI3Yx1JzJHe"/>
</div>
</div>
</div>
</div>
</header>
<main class="max-w-[1440px] mx-auto flex gap-8 p-6">
<aside class="w-64 shrink-0 hidden xl:flex flex-col gap-8">
<div class="flex flex-col gap-2">
<p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest px-3">Core Menu</p>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl sidebar-item-inactive" href="#">
<span class="material-symbols-outlined">grid_view</span>
<span class="text-sm font-semibold">Overview</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl sidebar-item-active" href="#">
<span class="material-symbols-outlined">bubble_chart</span>
<span class="text-sm font-semibold">Group Matrix</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl sidebar-item-inactive" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-semibold">UMKM Status</span>
</a>
</div>
<div class="quest-card border-teal-brand/20 bg-gradient-to-br from-white to-teal-50/30">
<div class="flex items-center justify-between mb-3">
<div class="bg-teal-brand/10 text-teal-600 p-2 rounded-xl">
<span class="material-symbols-outlined text-lg">verified</span>
</div>
<span class="bg-teal-brand text-slate-900 text-[9px] font-black px-2 py-0.5 rounded-full uppercase">Active Group</span>
</div>
<h4 class="font-bold text-sm mb-1">Cooking Oil 18L</h4>
<p class="text-[11px] leading-relaxed text-slate-600 dark:text-slate-400 mb-4">
                Volume is at <span class="font-bold text-slate-900">62%</span>. Tier 2 in 3 more joins.
            </p>
<div class="flex items-center justify-between mt-auto">
<span class="text-[10px] font-bold text-teal-600">Cut-off 3h 12m</span>
<button class="px-3 py-1.5 bg-slate-900 text-white text-[9px] font-black uppercase rounded-lg hover:bg-black transition-colors">Review</button>
</div>
</div>
</aside>
<div class="flex-1 flex flex-col gap-6">
<div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
<div class="flex flex-col gap-1">
<div class="flex items-center gap-2 text-xs font-medium text-slate-400 uppercase tracking-wider">
<span>Koopa</span>
<span class="material-symbols-outlined text-sm">chevron_right</span>
<span class="text-primary font-bold">Group Matrix</span>
</div>
<h1 class="text-3xl font-black tracking-tight dark:text-white">Controlled Risk Matrix</h1>
</div>
<div class="flex gap-2">
<button class="flex items-center gap-2 px-4 py-2.5 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl text-xs font-bold hover:bg-slate-50 transition-all">
<span class="material-symbols-outlined text-lg">calendar_today</span>
                    Last 30 Days
                </button>
<button class="flex items-center gap-2 px-4 py-2.5 bg-primary text-white rounded-xl text-xs font-bold hover:bg-primary/90 shadow-md">
<span class="material-symbols-outlined text-lg">download</span>
                    Export Data
                </button>
</div>
</div>
<div class="grid grid-cols-12 gap-6">
<div class="col-span-12 lg:col-span-8 bg-white dark:bg-slate-900 rounded-3xl p-6 shadow-sm border border-slate-200 dark:border-slate-800">
<div class="flex justify-between items-center mb-8">
<div>
<h3 class="font-bold text-lg">Price Tier vs. Volume</h3>
<p class="text-xs text-slate-400 uppercase tracking-tighter">Group buying risk control</p>
</div>
<div class="flex gap-2">
<span class="flex items-center gap-1 text-[10px] font-bold px-3 py-1.5 bg-purple-brand/10 text-purple-brand rounded-full uppercase">Locked</span>
<span class="flex items-center gap-1 text-[10px] font-bold px-3 py-1.5 bg-teal-brand/10 text-teal-600 rounded-full uppercase">On Track</span>
<span class="flex items-center gap-1 text-[10px] font-bold px-3 py-1.5 bg-slate-100 text-slate-600 rounded-full uppercase">At Risk</span>
</div>
</div>
<div class="relative w-full h-[420px] matrix-bg rounded-2xl border border-slate-100 dark:border-slate-800">
<div class="absolute top-4 left-4 text-[10px] font-black text-slate-300 uppercase tracking-widest">High Volume / Low Risk</div>
<div class="absolute top-4 right-4 text-[10px] font-black text-slate-300 uppercase tracking-widest text-right">High Volume / Locked</div>
<div class="absolute bottom-4 left-4 text-[10px] font-black text-slate-300 uppercase tracking-widest">Low Volume / At Risk</div>
<div class="absolute bottom-4 right-4 text-[10px] font-black text-slate-300 uppercase tracking-widest text-right">Low Volume / Needs Push</div>
<div class="absolute inset-0 flex items-center justify-center pointer-events-none">
<div class="w-px h-full bg-slate-200 dark:bg-slate-700"></div>
<div class="h-px w-full bg-slate-200 dark:bg-slate-700"></div>
</div>
<div class="absolute top-[20%] right-[15%] group cursor-help">
<div class="size-14 bg-purple-brand rounded-full flex items-center justify-center text-white font-bold text-xs ring-8 ring-purple-brand/10 shadow-lg shadow-purple-brand/20">G1</div>
</div>
<div class="absolute top-[30%] left-[25%] group cursor-help">
<div class="size-10 bg-slate-400 rounded-full flex items-center justify-center text-white font-bold text-xs ring-8 ring-slate-400/10">G2</div>
</div>
<div class="absolute bottom-[20%] right-[30%] group cursor-help">
<div class="size-16 bg-teal-brand rounded-full flex items-center justify-center text-slate-900 font-bold text-xs ring-8 ring-teal-brand/10 shadow-lg shadow-teal-brand/20">G3</div>
</div>
<div class="absolute bottom-[10%] left-[10%] group cursor-help">
<div class="size-8 bg-slate-200 rounded-full flex items-center justify-center text-slate-500 font-bold text-[10px]">G4</div>
</div>
</div>
</div>
<div class="col-span-12 lg:col-span-4 flex flex-col gap-4">
<div class="flex items-center justify-between px-2">
<h3 class="font-black text-sm uppercase tracking-widest flex items-center gap-2">
<span class="material-symbols-outlined text-teal-brand text-xl">assignment_turned_in</span>
                        Group Actions
                    </h3>
<span class="text-[10px] font-bold text-slate-400 uppercase">2 Recommended</span>
</div>
<div class="quest-card">
<div class="flex items-start justify-between mb-3">
<div class="bg-purple-brand/10 text-purple-brand p-2 rounded-xl">
<span class="material-symbols-outlined text-lg">auto_awesome</span>
</div>
<span class="bg-slate-100 dark:bg-slate-800 text-slate-500 text-[10px] font-bold px-2 py-1 rounded">LOCKED</span>
</div>
<h4 class="font-bold text-sm mb-1">Rice 25kg</h4>
<p class="text-xs text-slate-500 leading-relaxed mb-4">Price locked at Tier 3. Awaiting escrow confirmations.</p>
<div class="flex items-center justify-between">
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-teal-brand text-sm">bolt</span>
<span class="text-[10px] font-bold text-slate-400 uppercase">Low Risk</span>
</div>
<button class="bg-teal-brand hover:bg-teal-brand/90 text-slate-900 text-[10px] font-black px-4 py-2 rounded-xl uppercase transition-colors">Track</button>
</div>
</div>
<div class="quest-card">
<div class="flex items-start justify-between mb-3">
<div class="bg-teal-brand/10 text-teal-600 p-2 rounded-xl">
<span class="material-symbols-outlined text-lg">trending_down</span>
</div>
<span class="bg-slate-100 dark:bg-slate-800 text-slate-500 text-[10px] font-bold px-2 py-1 rounded">AT RISK</span>
</div>
<h4 class="font-bold text-sm mb-1">Chicken Breast</h4>
<p class="text-xs text-slate-500 leading-relaxed mb-4">Volume is low. Push joiners before cut-off.</p>
<div class="flex items-center justify-between">
<span class="text-[10px] font-bold text-teal-600 uppercase">Cut-off 5h</span>
<button class="bg-slate-900 dark:bg-slate-800 hover:bg-black text-white text-[10px] font-black px-4 py-2 rounded-xl uppercase transition-colors">Invite UMKM</button>
</div>
</div>
</div>
<div class="col-span-12 lg:col-span-8 bg-white dark:bg-slate-900 rounded-3xl p-6 shadow-sm border border-slate-200 dark:border-slate-800">
<div class="flex justify-between items-center mb-8">
<h3 class="font-bold text-sm flex items-center gap-2">
<span class="material-symbols-outlined text-purple-brand">query_stats</span>
                        Volume &amp; Escrow Distribution
                    </h3>
<div class="flex items-center gap-4">
<div class="flex items-center gap-2">
<div class="size-2.5 rounded-full bg-purple-brand"></div>
<span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">Volume</span>
</div>
<div class="flex items-center gap-2">
<div class="size-2.5 rounded-full bg-teal-brand"></div>
<span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">Escrow Paid</span>
</div>
</div>
</div>
<div class="flex items-end justify-between h-48 gap-4 px-2">
<div class="flex-1 flex flex-col items-center gap-2">
<div class="w-full flex flex-col justify-end gap-1 h-32">
<div class="w-full bg-purple-brand/20 rounded-t-lg h-[40%]"></div>
<div class="w-full bg-teal-brand/20 rounded-t-lg h-[30%]"></div>
</div>
<span class="text-[10px] font-bold text-slate-400">Mon</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2">
<div class="w-full flex flex-col justify-end gap-1 h-32">
<div class="w-full bg-purple-brand rounded-t-lg h-[85%]"></div>
<div class="w-full bg-teal-brand rounded-t-lg h-[65%]"></div>
</div>
<span class="text-[10px] font-bold text-slate-400">Tue</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2">
<div class="w-full flex flex-col justify-end gap-1 h-32">
<div class="w-full bg-purple-brand rounded-t-lg h-[95%]"></div>
<div class="w-full bg-teal-brand rounded-t-lg h-[75%]"></div>
</div>
<span class="text-[10px] font-bold text-slate-900">Wed</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2">
<div class="w-full flex flex-col justify-end gap-1 h-32">
<div class="w-full bg-purple-brand rounded-t-lg h-[70%]"></div>
<div class="w-full bg-teal-brand rounded-t-lg h-[50%]"></div>
</div>
<span class="text-[10px] font-bold text-slate-400">Thu</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2 relative">
<div class="w-full flex flex-col justify-end gap-1 h-32">
<div class="w-full bg-purple-brand rounded-t-lg h-[100%] shadow-[0_-8px_16px_rgba(124,58,237,0.2)]"></div>
<div class="w-full bg-teal-brand rounded-t-lg h-[85%] shadow-[0_-8px_16px_rgba(45,212,191,0.2)]"></div>
</div>
<span class="text-[10px] font-bold text-slate-900">Fri</span>
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-slate-900 text-white text-[8px] font-black px-2 py-1 rounded-md uppercase whitespace-nowrap">Peak</div>
</div>
<div class="flex-1 flex flex-col items-center gap-2">
<div class="w-full flex flex-col justify-end gap-1 h-32">
<div class="w-full bg-purple-brand/80 rounded-t-lg h-[60%]"></div>
<div class="w-full bg-teal-brand/80 rounded-t-lg h-[45%]"></div>
</div>
<span class="text-[10px] font-bold text-slate-400">Sat</span>
</div>
<div class="flex-1 flex flex-col items-center gap-2">
<div class="w-full flex flex-col justify-end gap-1 h-32">
<div class="w-full bg-purple-brand/90 rounded-t-lg h-[80%]"></div>
<div class="w-full bg-teal-brand/90 rounded-t-lg h-[70%]"></div>
</div>
<span class="text-[10px] font-bold text-slate-400">Sun</span>
</div>
</div>
</div>
<div class="col-span-12 bg-white dark:bg-slate-900 rounded-3xl overflow-hidden shadow-sm border border-slate-200 dark:border-slate-800">
<div class="p-6 border-b border-slate-100 dark:border-slate-800 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-slate-50/50 dark:bg-slate-800/20">
<div>
<h3 class="font-bold text-base">Detailed Group Performance</h3>
<p class="text-[10px] text-slate-400 uppercase tracking-widest mt-0.5">Live volume and escrow status</p>
</div>
<div class="flex gap-2 w-full sm:w-auto">
<div class="relative flex-1 sm:flex-initial">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
<input class="pl-10 pr-4 py-2 bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-xl text-xs w-full sm:w-64 focus:ring-2 focus:ring-teal-brand/30 transition-all" placeholder="Search groups..." type="text"/>
</div>
<button class="p-2 border border-slate-200 dark:border-slate-700 rounded-xl bg-white dark:bg-slate-800 hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined text-lg text-slate-500">filter_list</span>
</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 text-[10px] font-black uppercase tracking-[0.15em] text-slate-400 border-b border-slate-100 dark:border-slate-800">
<th class="px-6 py-5">Group</th>
<th class="px-6 py-5">Supplier</th>
<th class="px-6 py-5">Volume</th>
<th class="px-6 py-5">Price Tier</th>
<th class="px-6 py-5">Escrow</th>
<th class="px-6 py-5 text-right">Status</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-teal-50/20 dark:hover:bg-slate-800/50 transition-colors group">
<td class="px-6 py-4">
<div>
<span class="text-sm font-bold block">Cooking Oil 18L</span>
<span class="text-[10px] text-slate-400">Drop Point: Pasar Timur</span>
</div>
</td>
<td class="px-6 py-4">
<span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 rounded text-[10px] font-bold text-slate-500 uppercase">Supplier A</span>
</td>
<td class="px-6 py-4">
<div class="flex flex-col gap-0.5">
<span class="text-sm font-black text-slate-700 dark:text-slate-200">620 kg</span>
<span class="text-[9px] text-emerald-500 font-bold flex items-center gap-0.5"><span class="material-symbols-outlined text-[10px]">trending_up</span> 12%</span>
</div>
</td>
<td class="px-6 py-4">
<div class="flex flex-col gap-0.5">
<span class="text-sm font-black text-emerald-600">Tier 2</span>
<span class="text-[9px] text-slate-400 font-medium">Rp205.000</span>
</div>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-24 h-2 bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="w-[80%] h-full bg-gradient-to-r from-teal-400 to-teal-brand"></div>
</div>
<span class="text-[10px] font-bold text-slate-400">80%</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<span class="px-3 py-1 bg-purple-brand/10 text-purple-brand text-[9px] font-black rounded-full uppercase tracking-wider">On Track</span>
</td>
</tr>
<tr class="hover:bg-teal-50/20 dark:hover:bg-slate-800/50 transition-colors group">
<td class="px-6 py-4">
<div>
<span class="text-sm font-bold block">Chicken Breast 20kg</span>
<span class="text-[10px] text-slate-400">Drop Point: Ruko Serbaguna</span>
</div>
</td>
<td class="px-6 py-4">
<span class="px-2 py-1 bg-slate-100 dark:bg-slate-800 rounded text-[10px] font-bold text-slate-500 uppercase">Supplier B</span>
</td>
<td class="px-6 py-4">
<div class="flex flex-col gap-0.5">
<span class="text-sm font-black text-slate-700 dark:text-slate-200">320 kg</span>
<span class="text-[9px] text-amber-500 font-bold flex items-center gap-0.5"><span class="material-symbols-outlined text-[10px]">trending_down</span> 4%</span>
</div>
</td>
<td class="px-6 py-4">
<div class="flex flex-col gap-0.5">
<span class="text-sm font-black text-amber-600">Tier 1</span>
<span class="text-[9px] text-slate-400 font-medium">Rp9.500</span>
</div>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-24 h-2 bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
<div class="w-[45%] h-full bg-gradient-to-r from-amber-400 to-amber-500"></div>
</div>
<span class="text-[10px] font-bold text-slate-400">45%</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<span class="px-3 py-1 bg-teal-brand/10 text-teal-700 text-[9px] font-black rounded-full uppercase tracking-wider">At Risk</span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 bg-slate-50/50 dark:bg-slate-800/30 text-center border-t border-slate-100 dark:border-slate-800">
<button class="text-[10px] font-black uppercase tracking-widest text-slate-500 hover:text-primary flex items-center gap-2 mx-auto transition-colors">
                        Expand Dataset <span class="material-symbols-outlined text-base">expand_more</span>
</button>
</div>
</div>
</div>
</div>
</main>
<footer class="max-w-[1440px] mx-auto p-8 mt-12 border-t border-slate-200 dark:border-slate-800 flex flex-col sm:flex-row justify-between items-center gap-4 text-slate-400">
<div class="flex items-center gap-4">
<p class="text-[10px] font-black uppercase tracking-widest">(c) 2024 Koopa Systems</p>
</div>
<div class="flex gap-6">
<a class="text-[10px] font-black uppercase tracking-widest hover:text-teal-brand transition-colors" href="#">Support Docs</a>
<a class="text-[10px] font-black uppercase tracking-widest hover:text-teal-brand transition-colors" href="#">System Status</a>
<a class="text-[10px] font-black uppercase tracking-widest hover:text-teal-brand transition-colors" href="#">API</a>
</div>
</footer>
</body>
</html>
