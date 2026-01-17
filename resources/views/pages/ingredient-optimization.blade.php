<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | Supplier Catalog v3</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#00a390",
                        "secondary": "#f59e0b",
                        "accent": "#8b5cf6",
                        "background-light": "#f8fafb",
                        "background-dark": "#0f1717",
                        "card-light": "#ffffff",
                        "border-light": "#e2e8f0"
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "2xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        @layer base {
            body { @apply bg-background-light dark:bg-background-dark font-display text-[#1e293b] dark:text-slate-200; }
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .bg-mesh {
            background-image: radial-gradient(at 0% 0%, hsla(172,67%,90%,0.2) 0, transparent 50%), 
                              radial-gradient(at 100% 0%, hsla(260,50%,92%,0.2) 0, transparent 50%);
        }
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        .quest-card-gradient {
            background: linear-gradient(135deg, rgba(0, 163, 144, 0.05) 0%, rgba(139, 92, 246, 0.05) 100%);
        }
    </style>
</head>
<body class="min-h-screen">
<div class="flex h-screen overflow-hidden">
<aside class="w-64 flex-shrink-0 border-r border-border-light dark:border-white/10 bg-white dark:bg-background-dark flex flex-col justify-between p-6">
<div class="flex flex-col gap-8">
<div class="flex items-center gap-3">
<div class="bg-primary size-10 rounded-xl flex items-center justify-center text-white shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-2xl">rocket_launch</span>
</div>
<div class="flex flex-col">
<h1 class="text-[#0f172a] dark:text-white text-lg font-extrabold leading-none tracking-tight">Koopa</h1>
<p class="text-primary text-[10px] font-bold uppercase tracking-[0.2em]">Collective Purchase with Price &amp; Supply Certainty</p>
</div>
</div>
<nav class="flex flex-col gap-1.5">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-500 hover:bg-slate-50 dark:hover:bg-white/5 transition-all group" href="#">
<span class="material-symbols-outlined transition-colors group-hover:text-primary">dashboard</span>
<span class="text-sm font-semibold">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-primary/10 text-primary shadow-sm transition-all" href="#">
<span class="material-symbols-outlined">skillet</span>
<span class="text-sm font-bold">Ingredients</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-500 hover:bg-slate-50 dark:hover:bg-white/5 transition-all group" href="#">
<span class="material-symbols-outlined transition-colors group-hover:text-primary">architecture</span>
<span class="text-sm font-semibold">Menu Intelligence</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-500 hover:bg-slate-50 dark:hover:bg-white/5 transition-all group" href="#">
<span class="material-symbols-outlined transition-colors group-hover:text-primary">local_shipping</span>
<span class="text-sm font-semibold">Suppliers</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-500 hover:bg-slate-50 dark:hover:bg-white/5 transition-all group" href="#">
<span class="material-symbols-outlined transition-colors group-hover:text-primary">analytics</span>
<span class="text-sm font-semibold">Profit Reports</span>
</a>
</nav>
</div>
<div class="flex flex-col gap-4">
<div class="p-4 bg-slate-50 dark:bg-white/5 rounded-2xl border border-border-light dark:border-white/10">
<div class="flex items-center justify-between mb-2">
<p class="text-[10px] font-bold text-slate-400 tracking-widest uppercase">XP Progress</p>
<span class="text-[10px] font-bold text-accent">Lvl 14</span>
</div>
<div class="h-1.5 w-full bg-slate-200 dark:bg-white/10 rounded-full overflow-hidden">
<div class="h-full bg-accent" style="width: 75%"></div>
</div>
</div>
<button class="w-full flex items-center justify-center gap-2 bg-[#1e293b] dark:bg-white text-white dark:text-[#1e293b] font-bold py-3.5 rounded-xl shadow-lg hover:translate-y-[-1px] transition-all">
<span class="material-symbols-outlined text-sm">add_circle</span>
<span>New Group</span>
</button>
</div>
</aside>
<main class="flex-1 overflow-y-auto bg-mesh custom-scrollbar">
<header class="sticky top-0 z-20 flex items-center justify-between px-8 py-5 bg-white/70 dark:bg-background-dark/70 backdrop-blur-xl border-b border-border-light dark:border-white/10">
<div class="flex items-center gap-6">
<h2 class="text-[#0f172a] dark:text-white text-xl font-extrabold tracking-tight">Supplier Catalog</h2>
<div class="h-5 w-px bg-slate-200 dark:bg-white/10"></div>
<nav class="flex items-center gap-6">
<a class="text-sm font-bold text-primary relative after:absolute after:-bottom-5 after:left-0 after:right-0 after:h-0.5 after:bg-primary" href="#">Products</a>
<a class="text-sm font-semibold text-slate-500 hover:text-primary transition-colors" href="#">Escrow Status</a>
<a class="text-sm font-semibold text-slate-500 hover:text-primary transition-colors" href="#">Supplier Notes</a>
</nav>
</div>
<div class="flex items-center gap-4">
<div class="relative group">
<span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-lg group-focus-within:text-primary transition-colors">search</span>
<input class="pl-11 pr-4 py-2.5 bg-slate-100 dark:bg-white/5 border-transparent focus:bg-white dark:focus:bg-white/10 focus:ring-2 focus:ring-primary/20 focus:border-primary/30 rounded-xl text-sm w-72 transition-all placeholder:text-slate-400" placeholder="Search items..." type="text"/>
</div>
<div class="flex items-center gap-2 border-l border-slate-200 dark:border-white/10 ml-2 pl-6">
<button class="size-10 flex items-center justify-center rounded-xl bg-slate-100 dark:bg-white/5 text-slate-500 hover:bg-slate-200 transition-all relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2.5 right-2.5 size-2 bg-secondary rounded-full ring-2 ring-white dark:ring-background-dark"></span>
</button>
<div class="size-10 rounded-xl bg-cover bg-center ring-2 ring-primary/20 hover:ring-primary transition-all cursor-pointer" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDgOqpEyS4IkEXIq7x74zt9elBCqGruINDXlg7-4Z-CpXFL9wRfBML6413RUjaZmZaGoKw5u73izX1ecP1olvUXgdAqZoQ8knMAiRwJ2HYuBFLnTsc0kSyW2p947jl5D7amOhu22KdRPj7di9F-6VdVmu5UsOn4Q8l_BoeGbJ1a1uj8x9SiqSYo7w-ZmCW7vYjBWVGY-9raY_3BxLbZ6IjEHYSDYJYqR8cqhFTHKVxq71EZqQiUJoctFgbxfWGP72VBihRIdLGJGUj3')"></div>
</div>
</div>
</header>
<div class="p-8 max-w-[1600px] mx-auto space-y-8">
<div class="grid grid-cols-4 gap-6">
<div class="bg-white dark:bg-white/5 p-6 rounded-2xl border border-border-light dark:border-white/10 shadow-sm">
<div class="flex items-center justify-between mb-2">
<span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Savings Potential</span>
<div class="size-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-xl">savings</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<h3 class="text-2xl font-extrabold text-[#0f172a] dark:text-white">$1,240.50</h3>
<span class="text-primary text-xs font-bold">+12.4%</span>
</div>
</div>
<div class="bg-white dark:bg-white/5 p-6 rounded-2xl border border-border-light dark:border-white/10 shadow-sm">
<div class="flex items-center justify-between mb-2">
<span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Cut-off Alerts</span>
<div class="size-8 rounded-lg bg-secondary/10 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-xl">warning</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<h3 class="text-2xl font-extrabold text-[#0f172a] dark:text-white">12 Items</h3>
<span class="text-secondary text-xs font-bold">Action Needed</span>
</div>
</div>
<div class="bg-white dark:bg-white/5 p-6 rounded-2xl border border-border-light dark:border-white/10 shadow-sm">
<div class="flex items-center justify-between mb-2">
<span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Delivery Confidence</span>
<div class="size-8 rounded-lg bg-accent/10 flex items-center justify-center text-accent">
<span class="material-symbols-outlined text-xl">bolt</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<h3 class="text-2xl font-extrabold text-[#0f172a] dark:text-white">94.2%</h3>
<span class="text-accent text-xs font-bold">Optimal</span>
</div>
</div>
<div class="bg-[#1e293b] p-6 rounded-2xl shadow-xl relative overflow-hidden group">
<div class="absolute -right-4 -top-4 size-24 bg-primary/20 rounded-full blur-2xl transition-all group-hover:bg-accent/20"></div>
<div class="relative z-10">
<span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Risk Control</span>
<div class="flex items-center gap-3 mt-1">
<h3 class="text-2xl font-extrabold text-white tracking-tight">Master Tier</h3>
<span class="material-symbols-outlined text-primary">verified</span>
</div>
<p class="text-[10px] text-slate-400 mt-2 font-bold">Top 5% of Global Kitchens</p>
</div>
</div>
</div>
<div class="grid grid-cols-12 gap-8 items-start">
<div class="col-span-8 space-y-6">
<div class="bg-white dark:bg-white/5 rounded-3xl border border-border-light dark:border-white/10 shadow-xl shadow-slate-200/40 dark:shadow-none overflow-hidden">
<div class="px-8 py-6 border-b border-border-light dark:border-white/10 flex items-center justify-between bg-white dark:bg-transparent">
<div>
<h2 class="text-xl font-extrabold text-[#0f172a] dark:text-white">Product & Ladder Tracking</h2>
<p class="text-sm font-medium text-slate-500">Live efficiency tracking across 124 ingredients</p>
</div>
<div class="flex gap-2">
<button class="px-5 py-2.5 rounded-xl bg-slate-50 dark:bg-white/5 border border-border-light dark:border-white/10 text-xs font-bold hover:bg-slate-100 transition-all flex items-center gap-2">
<span class="material-symbols-outlined text-lg">tune</span>
                                    Filter Products
                                </button>
<button class="px-5 py-2.5 rounded-xl bg-primary text-white text-xs font-bold hover:bg-primary-dark transition-all shadow-md shadow-primary/20">
                                    Export Summary
                                </button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50/50 dark:bg-white/5">
<th class="px-8 py-4 text-[11px] font-bold uppercase tracking-widest text-slate-400">Ingredient Name</th>
<th class="px-8 py-4 text-[11px] font-bold uppercase tracking-widest text-slate-400 text-center">Cost Variance</th>
<th class="px-8 py-4 text-[11px] font-bold uppercase tracking-widest text-slate-400">Usage Efficiency</th>
<th class="px-8 py-4 text-[11px] font-bold uppercase tracking-widest text-slate-400">Status</th>
<th class="px-8 py-4 text-[11px] font-bold uppercase tracking-widest text-slate-400">Market Price</th>
<th class="px-8 py-4 text-[11px] font-bold uppercase tracking-widest text-slate-400 text-right">Update</th>
</tr>
</thead>
<tbody class="divide-y divide-border-light dark:divide-white/10">
<tr class="hover:bg-slate-50/50 dark:hover:bg-white/5 transition-all">
<td class="px-8 py-5">
<div class="flex items-center gap-4">
<div class="size-12 rounded-2xl bg-slate-100 dark:bg-white/5 flex items-center justify-center text-slate-500">
<span class="material-symbols-outlined">set_meal</span>
</div>
<div class="flex flex-col">
<span class="font-bold text-sm text-[#0f172a] dark:text-white">Wagyu Beef A5</span>
<span class="text-[10px] text-slate-400 font-bold uppercase tracking-wide">Premium Proteins</span>
</div>
</div>
</td>
<td class="px-8 py-5">
<div class="flex items-center justify-center gap-1.5 text-secondary font-bold text-sm">
<span class="material-symbols-outlined text-base">trending_up</span>
                                                +12.5%
                                            </div>
</td>
<td class="px-8 py-5">
<div class="flex flex-col gap-2 min-w-[120px]">
<div class="flex justify-between text-[10px] font-extrabold uppercase tracking-tighter">
<span class="text-slate-500">22% Utilization</span>
<span class="text-secondary">Low</span>
</div>
<div class="h-1.5 w-full bg-slate-100 dark:bg-white/10 rounded-full overflow-hidden">
<div class="h-full bg-secondary rounded-full" style="width: 22%"></div>
</div>
</div>
</td>
<td class="px-8 py-5">
<span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-extrabold bg-secondary/10 text-secondary border border-secondary/20 uppercase tracking-tight">
                                                Excess Stock
                                            </span>
</td>
<td class="px-8 py-5">
<div class="relative group/input max-w-[120px]">
<span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-sm font-bold text-slate-400">$</span>
<input class="w-full pl-7 pr-3 py-2.5 bg-slate-50 dark:bg-white/5 border border-border-light dark:border-white/10 rounded-xl text-sm font-bold focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none" type="text" value="120.00"/>
</div>
</td>
<td class="px-8 py-5 text-right">
<button class="p-2.5 bg-primary/10 hover:bg-primary text-primary hover:text-white rounded-xl transition-all">
<span class="material-symbols-outlined text-lg leading-none">sync</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-white/5 transition-all">
<td class="px-8 py-5">
<div class="flex items-center gap-4">
<div class="size-12 rounded-2xl bg-slate-100 dark:bg-white/5 flex items-center justify-center text-slate-500">
<span class="material-symbols-outlined">liquor</span>
</div>
<div class="flex flex-col">
<span class="font-bold text-sm text-[#0f172a] dark:text-white">Organic Truffle Oil</span>
<span class="text-[10px] text-slate-400 font-bold uppercase tracking-wide">Oils &amp; Condiments</span>
</div>
</div>
</td>
<td class="px-8 py-5">
<div class="flex items-center justify-center gap-1.5 text-accent font-bold text-sm">
<span class="material-symbols-outlined text-base">horizontal_rule</span>
                                                0.0%
                                            </div>
</td>
<td class="px-8 py-5">
<div class="flex flex-col gap-2 min-w-[120px]">
<div class="flex justify-between text-[10px] font-extrabold uppercase tracking-tighter">
<span class="text-slate-500">88% Utilization</span>
<span class="text-primary">Efficient</span>
</div>
<div class="h-1.5 w-full bg-slate-100 dark:bg-white/10 rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full" style="width: 88%"></div>
</div>
</div>
</td>
<td class="px-8 py-5">
<span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-extrabold bg-primary/10 text-primary border border-primary/20 uppercase tracking-tight">
                                                Optimal
                                            </span>
</td>
<td class="px-8 py-5">
<div class="relative group/input max-w-[120px]">
<span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-sm font-bold text-slate-400">$</span>
<input class="w-full pl-7 pr-3 py-2.5 bg-slate-50 dark:bg-white/5 border border-border-light dark:border-white/10 rounded-xl text-sm font-bold focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none" type="text" value="85.00"/>
</div>
</td>
<td class="px-8 py-5 text-right">
<button class="p-2.5 bg-primary/10 hover:bg-primary text-primary hover:text-white rounded-xl transition-all">
<span class="material-symbols-outlined text-lg leading-none">sync</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-white/5 transition-all">
<td class="px-8 py-5">
<div class="flex items-center gap-4">
<div class="size-12 rounded-2xl bg-slate-100 dark:bg-white/5 flex items-center justify-center text-slate-500">
<span class="material-symbols-outlined">grain</span>
</div>
<div class="flex flex-col">
<span class="font-bold text-sm text-[#0f172a] dark:text-white">Saffron Threads</span>
<span class="text-[10px] text-slate-400 font-bold uppercase tracking-wide">Spices</span>
</div>
</div>
</td>
<td class="px-8 py-5">
<div class="flex items-center justify-center gap-1.5 text-primary font-bold text-sm">
<span class="material-symbols-outlined text-base">trending_down</span>
                                                -5.2%
                                            </div>
</td>
<td class="px-8 py-5">
<div class="flex flex-col gap-2 min-w-[120px]">
<div class="flex justify-between text-[10px] font-extrabold uppercase tracking-tighter">
<span class="text-slate-500">5% Utilization</span>
<span class="text-accent">Dormant</span>
</div>
<div class="h-1.5 w-full bg-slate-100 dark:bg-white/10 rounded-full overflow-hidden">
<div class="h-full bg-accent rounded-full" style="width: 5%"></div>
</div>
</div>
</td>
<td class="px-8 py-5">
<span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-extrabold bg-accent/10 text-accent border border-accent/20 uppercase tracking-tight">
                                                Underused
                                            </span>
</td>
<td class="px-8 py-5">
<div class="relative group/input max-w-[120px]">
<span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-sm font-bold text-slate-400">$</span>
<input class="w-full pl-7 pr-3 py-2.5 bg-slate-50 dark:bg-white/5 border border-border-light dark:border-white/10 rounded-xl text-sm font-bold focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none" type="text" value="45.00"/>
</div>
</td>
<td class="px-8 py-5 text-right">
<button class="p-2.5 bg-primary/10 hover:bg-primary text-primary hover:text-white rounded-xl transition-all">
<span class="material-symbols-outlined text-lg leading-none">sync</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="px-8 py-5 bg-slate-50/30 dark:bg-white/5 border-t border-border-light dark:border-white/10 flex items-center justify-between">
<span class="text-xs font-semibold text-slate-500 tracking-wide">Showing 3 of 124 Ingredients</span>
<button class="text-xs font-extrabold text-primary hover:text-primary-dark transition-all flex items-center gap-1 uppercase tracking-widest">
                                Expand Catalog <span class="material-symbols-outlined text-sm">expand_more</span>
</button>
</div>
</div>
</div>
<div class="col-span-4 space-y-6">
<div class="flex items-center justify-between px-2">
<h2 class="text-lg font-extrabold tracking-tight">Operational Tasks</h2>
<span class="text-[10px] font-bold px-3 py-1 bg-secondary/10 text-secondary rounded-full border border-secondary/20">3 AVAILABLE</span>
</div>
<div class="space-y-4">
<div class="group relative bg-white dark:bg-slate-900 border border-border-light dark:border-white/10 p-6 rounded-3xl transition-all hover:shadow-2xl hover:shadow-primary/10 overflow-hidden">
<div class="absolute top-0 right-0 w-32 h-32 quest-card-gradient rounded-full blur-3xl -mr-16 -mt-16 transition-all group-hover:scale-150"></div>
<div class="relative z-10">
<div class="flex items-start justify-between mb-4">
<div class="size-12 bg-primary/10 rounded-2xl flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-2xl">auto_awesome</span>
</div>
<div class="flex flex-col items-end">
<span class="text-[10px] font-extrabold text-primary bg-primary/10 px-2.5 py-1 rounded-full uppercase tracking-wider mb-1">PROFIT BOOST</span>
<span class="text-[10px] font-bold text-slate-400">EXPIRES IN 4H</span>
</div>
</div>
<h4 class="text-base font-extrabold text-[#0f172a] dark:text-white mb-2 leading-snug">The Wagyu Bento Strategy</h4>
<p class="text-sm text-slate-500 leading-relaxed mb-6">
                                    Convert excess <span class="text-primary font-bold">Wagyu A5</span> stock into lunch specials to reduce waste variance by <span class="text-accent font-bold">14%</span>.
                                </p>
<div class="flex items-center justify-between pt-5 border-t border-slate-100 dark:border-white/5">
<div>
<p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Reward Potential</p>
<div class="flex items-center gap-1.5">
<span class="text-lg font-extrabold text-primary">+$320.00</span>
<span class="text-[10px] font-bold text-accent">+500 XP</span>
</div>
</div>
<button class="bg-primary hover:bg-primary-dark text-white px-6 py-2.5 rounded-xl text-xs font-bold transition-all shadow-lg shadow-primary/20 active:scale-95">
                                        Accept Quest
                                    </button>
</div>
</div>
</div>
<div class="group relative bg-white dark:bg-slate-900 border border-border-light dark:border-white/10 p-6 rounded-3xl transition-all hover:shadow-2xl hover:shadow-secondary/10 overflow-hidden">
<div class="absolute top-0 right-0 w-32 h-32 bg-secondary/5 rounded-full blur-3xl -mr-16 -mt-16 transition-all group-hover:scale-150"></div>
<div class="relative z-10">
<div class="flex items-start justify-between mb-4">
<div class="size-12 bg-secondary/10 rounded-2xl flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-2xl">trending_up</span>
</div>
<div class="flex flex-col items-end">
<span class="text-[10px] font-extrabold text-secondary bg-secondary/10 px-2.5 py-1 rounded-full uppercase tracking-wider mb-1">PRICE ALERT</span>
<span class="text-[10px] font-bold text-slate-400">CRITICAL</span>
</div>
</div>
<h4 class="text-base font-extrabold text-[#0f172a] dark:text-white mb-2 leading-snug">Supplier Re-Optimization</h4>
<p class="text-sm text-slate-500 leading-relaxed mb-6">
                                    Global Foods increased <span class="font-bold">Truffle Oil</span> prices by 12%. Transitioning to <span class="text-secondary font-bold">Local Farms</span> restores margins.
                                </p>
<div class="flex items-center justify-between pt-5 border-t border-slate-100 dark:border-white/5">
<div>
<p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Monthly Saving</p>
<div class="flex items-center gap-1.5">
<span class="text-lg font-extrabold text-secondary">-$156.00</span>
<span class="text-[10px] font-bold text-accent">+250 XP</span>
</div>
</div>
<button class="bg-secondary hover:bg-orange-600 text-white px-6 py-2.5 rounded-xl text-xs font-bold transition-all shadow-lg shadow-secondary/20 active:scale-95">
                                        Review Offer
                                    </button>
</div>
</div>
</div>
<div class="bg-accent p-6 rounded-3xl shadow-xl relative overflow-hidden">
<div class="absolute bottom-0 right-0 opacity-10 -mr-4 -mb-4">
<span class="material-symbols-outlined text-[120px] text-white">trophy</span>
</div>
<div class="relative z-10">
<div class="flex items-center gap-2 mb-2">
<span class="material-symbols-outlined text-white text-sm">stars</span>
<span class="text-[10px] font-bold text-white/80 uppercase tracking-widest">Efficiency Goal</span>
</div>
<h4 class="text-white font-extrabold text-lg mb-1">Kitchen Waste Master</h4>
<p class="text-white/70 text-xs mb-4">Keep variance below 5% for 7 days</p>
<div class="space-y-3">
<div class="flex items-end justify-between text-white">
<span class="text-2xl font-black">4.2%</span>
<span class="text-[10px] font-bold uppercase">5/7 Days</span>
</div>
<div class="h-2 w-full bg-white/20 rounded-full overflow-hidden">
<div class="h-full bg-white" style="width: 71%"></div>
</div>
</div>
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




