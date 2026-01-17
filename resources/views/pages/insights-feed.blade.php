<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | Risk &amp; Audit Insights v3</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f9f506",
                        "background-light": "#f4f4f2",
                        "sidebar-gray": "#f8f8f7",
                        "card-light": "#ffffff",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.75rem",
                        "lg": "1rem",
                        "xl": "1.25rem",
                        "full": "9999px"
                    },
                    boxShadow: {
                        "stats": "0 2px 12px -2px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.02)"
                    }
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        @layer base {
            body {
                font-family: "Spline Sans", sans-serif;
            }
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }
            .filled-icon {
                font-variation-settings: 'FILL' 1;
            }
        }
        .custom-scrollbar::-webkit-scrollbar {
            height: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #8c8b5f44;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-white text-[#181811] min-h-screen">
<div class="layout-container flex flex-col min-h-screen">
<header class="flex items-center justify-between whitespace-nowrap border-b border-[#181811]/5 bg-white px-6 lg:px-10 py-3 sticky top-0 z-50">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3">
<div class="size-9 bg-primary rounded-lg flex items-center justify-center shadow-[0_4px_10px_rgba(249,245,6,0.3)]">
<span class="material-symbols-outlined text-black font-bold text-xl">rocket_launch</span>
</div>
<h2 class="text-lg font-black leading-tight tracking-tighter uppercase">Koopa</h2>
</div>
<label class="hidden md:flex flex-col min-w-80 h-10">
<div class="flex w-full flex-1 items-stretch rounded-full h-full bg-sidebar-gray px-4 border border-transparent focus-within:border-primary/30 transition-all">
<div class="flex items-center justify-center pr-2">
<span class="material-symbols-outlined text-[#8c8b5f] text-xl">search</span>
</div>
<input class="form-input w-full border-none bg-transparent focus:ring-0 text-sm font-normal placeholder:text-[#8c8b5f]" placeholder="Search insights..."/>
</div>
</label>
</div>
<div class="flex items-center gap-6">
<nav class="hidden lg:flex items-center gap-8">
<a class="text-xs font-black uppercase tracking-widest border-b-2 border-primary py-1" href="#">Insights</a>
<a class="text-xs font-black uppercase tracking-widest text-[#8c8b5f] hover:text-[#181811] transition-colors" href="#">Groups</a>
<a class="text-xs font-black uppercase tracking-widest text-[#8c8b5f] hover:text-[#181811] transition-colors" href="#">Escrow</a>
</nav>
<div class="flex gap-3">
<button class="relative flex size-10 items-center justify-center rounded-full bg-sidebar-gray hover:bg-primary/10 transition-colors">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2.5 right-2.5 size-2 bg-red-500 rounded-full border-2 border-white"></span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAIsD1bYphYvK67n_LL5-Hgr9Ci0SR7aX3NhydYMdyWI9SO4wMrRyPAR1duV54EYkYueEivZdPhrJ6WMuwXrM9iHTH7Lr_C1OcX4J13jSmt5zRrvLNn9CbqDBLYOkj6IGuVCevSqVuMhaPqv6xUVhuk5CN_V4ZFWzhbwriNH_tQ3Y3-AVIGRUV15I0gEdz3Q24iDLnQykfrUUbz_W5YoF-oUHg5_DndYb3RhfLTgrJrpvACjTbO5P41_I247OL8r21UmEn-JAQj4Ujq");'></div>
</div>
</div>
</header>
<div class="flex flex-1 max-w-[1440px] mx-auto w-full">
<aside class="hidden xl:flex flex-col w-64 bg-sidebar-gray border-r border-[#181811]/5 p-6 gap-8 shrink-0">
<div>
<div class="flex items-center gap-3 mb-4">
<div class="flex flex-col">
<h1 class="text-sm font-bold">Chef Marco</h1>
<p class="text-[#8c8b5f] text-[10px] uppercase tracking-widest font-black">Lvl 24 Tavern Master</p>
</div>
</div>
<div class="w-full bg-gray-200 h-1.5 rounded-full overflow-hidden mb-2">
<div class="bg-primary h-full w-[72%]"></div>
</div>
<p class="text-[9px] text-right text-[#8c8b5f] font-bold">1,450 / 2,000 XP</p>
</div>
<nav class="flex flex-col gap-1">
<div class="flex items-center gap-3 px-4 py-2.5 rounded-lg bg-white shadow-sm border border-[#181811]/5 text-black font-bold cursor-pointer">
<span class="material-symbols-outlined text-xl filled-icon">insights</span>
<span class="text-sm">Risk Insights</span>
</div>
<div class="flex items-center gap-3 px-4 py-2.5 rounded-lg hover:bg-white/50 cursor-pointer transition-colors group">
<span class="material-symbols-outlined text-xl text-[#8c8b5f] group-hover:text-black">swords</span>
<span class="text-sm font-bold text-[#8c8b5f] group-hover:text-black">Active Groups</span>
</div>
<div class="flex items-center gap-3 px-4 py-2.5 rounded-lg hover:bg-white/50 cursor-pointer transition-colors group">
<span class="material-symbols-outlined text-xl text-[#8c8b5f] group-hover:text-black">trophy</span>
<span class="text-sm font-bold text-[#8c8b5f] group-hover:text-black">Leaderboard</span>
</div>
<div class="flex items-center gap-3 px-4 py-2.5 rounded-lg hover:bg-white/50 cursor-pointer transition-colors group">
<span class="material-symbols-outlined text-xl text-[#8c8b5f] group-hover:text-black">settings</span>
<span class="text-sm font-bold text-[#8c8b5f] group-hover:text-black">Koopa Rules</span>
</div>
</nav>
<div class="mt-auto">
<div class="bg-black text-white p-5 rounded-xl relative overflow-hidden">
<p class="text-[10px] font-black text-primary tracking-widest uppercase mb-2">Profit Boost</p>
<p class="text-xs font-bold leading-tight mb-3">Groups Sync active for 12 more hours.</p>
<div class="w-full bg-white/20 h-1 rounded-full">
<div class="bg-primary h-full w-2/3"></div>
</div>
</div>
</div>
</aside>
<main class="flex-1 flex flex-row px-8 py-8 gap-8 overflow-y-auto">
<div class="flex-1 flex flex-col gap-8">
<div class="flex gap-2 overflow-x-auto pb-2 custom-scrollbar">
<button class="h-9 shrink-0 px-5 rounded-full bg-primary text-black font-black text-[10px] uppercase tracking-widest shadow-sm">
                        All Intel
                    </button>
<button class="h-9 shrink-0 px-5 rounded-full bg-white border border-[#181811]/5 text-[10px] font-black uppercase tracking-widest flex items-center gap-2 hover:bg-sidebar-gray transition-all">
<span class="material-symbols-outlined text-lg">bolt</span> Quick Actions
                    </button>
<button class="h-9 shrink-0 px-5 rounded-full bg-white border border-[#181811]/5 text-[10px] font-black uppercase tracking-widest flex items-center gap-2 hover:bg-sidebar-gray transition-all">
<span class="material-symbols-outlined text-lg">trending_down</span> Cost Cutting
                    </button>
<button class="h-9 shrink-0 px-5 rounded-full bg-white border border-[#181811]/5 text-[10px] font-black uppercase tracking-widest flex items-center gap-2 hover:bg-sidebar-gray transition-all">
<span class="material-symbols-outlined text-lg">monitoring</span> Growth
                    </button>
</div>
<div class="bg-white rounded-xl border border-red-100 overflow-hidden shadow-stats">
<div class="flex flex-col md:flex-row">
<div class="md:w-1/3 relative min-h-[200px]">
<div class="absolute inset-0 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDWvNldIxk-O53rdhMx9_oLvcC6B01gKPy9IlT13yu7zwt9qoReT9mu4KNywPDkz9GvuThFSilLSMj32u6nRoLkALOKWtCUuRzRz6lWkG1-MXkHLIa1P9As5tQBFZk2KwNRBOq94PWJkF3Pkp5DpL_v-qDDgQK4xPr-VuNfiJF_aap8nGoaGsxyJ0Gd9Dg6IswJFzYyRxSy7oDjcqunewU6xH1y3jHAcqScy61EwGQb9GFMkd8SOr3qbwtI5H8BDaSjlrTrgLsvHUCM");'></div>
<div class="absolute inset-0 bg-red-950/40 backdrop-blur-[1px] flex items-center justify-center">
<span class="material-symbols-outlined text-white text-5xl font-light">report</span>
</div>
</div>
<div class="md:w-2/3 p-6 flex flex-col">
<div class="flex items-center justify-between mb-3">
<span class="px-2 py-0.5 bg-red-50 text-red-600 text-[10px] font-black rounded uppercase tracking-wider">Critical Leak</span>
<span class="text-[#8c8b5f] text-[10px] font-bold">Updated 2h ago</span>
</div>
<h2 class="text-xl font-black mb-2 uppercase tracking-tight">Draft Beer Waste Variance</h2>
<p class="text-[#8c8b5f] mb-6 text-sm leading-relaxed">
                                Variance detected: 14% loss on tap pours vs sales. Recommended action: Calibrate flow meters and check nightly tap seals.
                            </p>
<div class="mt-auto flex items-center justify-between">
<div class="flex items-baseline gap-1">
<span class="text-lg font-black text-red-600">-$1,420</span>
<span class="text-[10px] text-[#8c8b5f] font-bold uppercase">Monthly Loss</span>
</div>
<button class="px-6 py-2.5 bg-red-600 text-white text-[10px] font-black uppercase tracking-widest rounded-lg hover:bg-red-700 transition-all active:scale-95">
                                    Resolve Risk
                                </button>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="bg-white p-6 rounded-xl border border-[#181811]/5 shadow-stats">
<div class="flex justify-between items-center mb-6">
<div>
<h3 class="text-[10px] font-black uppercase tracking-widest text-[#8c8b5f] mb-1">Weekly Group Summary</h3>
<p class="text-sm font-black">Performance Trend</p>
</div>
<div class="bg-sidebar-gray p-2 rounded-lg">
<span class="material-symbols-outlined text-black text-xl">query_stats</span>
</div>
</div>
<div class="flex items-end justify-between h-32 gap-2 mb-6">
<div class="flex-1 bg-sidebar-gray rounded-t-sm h-[40%]"></div>
<div class="flex-1 bg-sidebar-gray rounded-t-sm h-[60%]"></div>
<div class="flex-1 bg-sidebar-gray rounded-t-sm h-[55%]"></div>
<div class="flex-1 bg-sidebar-gray rounded-t-sm h-[75%]"></div>
<div class="flex-1 bg-sidebar-gray rounded-t-sm h-[70%]"></div>
<div class="flex-1 bg-primary rounded-t-sm h-[95%]"></div>
<div class="flex-1 bg-sidebar-gray rounded-t-sm h-[65%]"></div>
</div>
<div class="flex justify-between items-center pt-4 border-t border-[#181811]/5">
<div>
<p class="text-[10px] text-[#8c8b5f] font-black uppercase mb-1">Profit Margin</p>
<p class="text-xl font-black text-green-600">+4.2%</p>
</div>
<div class="text-right">
<p class="text-[10px] text-[#8c8b5f] font-black uppercase mb-1">Total Savings</p>
<p class="text-xl font-black text-black">$842.00</p>
</div>
</div>
</div>
<div class="bg-white p-6 rounded-xl border border-[#181811]/5 shadow-stats flex flex-col">
<div class="flex items-center gap-3 mb-4">
<div class="size-10 rounded-lg bg-primary/10 flex items-center justify-center text-black">
<span class="material-symbols-outlined text-xl font-bold">bolt</span>
</div>
<div>
<p class="text-[10px] font-black tracking-widest text-[#8c8b5f] uppercase">Quick Action</p>
<h3 class="text-sm font-black uppercase tracking-tight">Dynamic Rib Pricing</h3>
</div>
</div>
<p class="text-[#8c8b5f] text-xs leading-relaxed mb-6">
                            Increase 'Signature Ribs' by $0.75 for peak weekend hours (Fri-Sun 6pm-10pm). High elasticity confirmed.
                        </p>
<div class="mt-auto flex items-center justify-between">
<div>
<p class="text-[10px] text-[#8c8b5f] font-black uppercase mb-1">Est. Revenue</p>
<p class="text-lg font-black text-green-600">+$180/wk</p>
</div>
<button class="px-5 py-2 bg-black text-white text-[10px] font-black uppercase tracking-widest rounded-lg hover:bg-zinc-800 transition-all">
                                Apply
                            </button>
</div>
</div>
</div>
<div class="flex flex-col gap-3">
<h2 class="text-[10px] font-black uppercase tracking-[0.2em] text-[#8c8b5f] px-1">Risk Control Actions</h2>
<div class="bg-white rounded-xl border border-[#181811]/5 shadow-sm divide-y divide-[#181811]/5">
<div class="p-4 flex items-center justify-between hover:bg-sidebar-gray transition-colors cursor-pointer group">
<div class="flex items-center gap-4">
<div class="size-10 rounded-lg bg-zinc-100 flex items-center justify-center text-zinc-600 group-hover:bg-primary group-hover:text-black transition-colors">
<span class="material-symbols-outlined text-xl">trending_down</span>
</div>
<div>
<p class="text-xs font-black uppercase tracking-tight">Supplier Swap: Jasmine Rice</p>
<p class="text-[10px] text-[#8c8b5f] font-bold">Switch to Global Grains Ltd for 5.4% savings.</p>
</div>
</div>
<div class="flex items-center gap-4">
<div class="text-right hidden sm:block">
<p class="text-xs font-black text-green-600">+$240/mo</p>
</div>
<span class="material-symbols-outlined text-[#8c8b5f] text-lg">chevron_right</span>
</div>
</div>
<div class="p-4 flex items-center justify-between hover:bg-sidebar-gray transition-colors cursor-pointer group">
<div class="flex items-center gap-4">
<div class="size-10 rounded-lg bg-zinc-100 flex items-center justify-center text-zinc-600 group-hover:bg-primary group-hover:text-black transition-colors">
<span class="material-symbols-outlined text-xl">trending_down</span>
</div>
<div>
<p class="text-xs font-black uppercase tracking-tight">Labor Optimization: Tuesday</p>
<p class="text-[10px] text-[#8c8b5f] font-bold">Reduce FOH staff by 1 for lunch session.</p>
</div>
</div>
<div class="flex items-center gap-4">
<div class="text-right hidden sm:block">
<p class="text-xs font-black text-green-600">+$480/mo</p>
</div>
<span class="material-symbols-outlined text-[#8c8b5f] text-lg">chevron_right</span>
</div>
</div>
</div>
</div>
</div>
<aside class="hidden lg:flex flex-col w-72 gap-6 shrink-0">
<div class="bg-white p-6 rounded-xl border border-[#181811]/5 shadow-stats">
<h2 class="text-[10px] font-black mb-6 uppercase tracking-[0.2em] text-[#8c8b5f] flex justify-between items-center">
                        Recent Completions
                        <span class="material-symbols-outlined text-primary text-lg filled-icon">stars</span>
</h2>
<div class="flex flex-col gap-1">
<div class="flex items-center gap-3 p-2 rounded-lg hover:bg-sidebar-gray transition-all cursor-default">
<div class="size-10 rounded bg-sidebar-gray flex items-center justify-center border border-black/5">
<span class="material-symbols-outlined text-black text-xl">eco</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-xs font-bold truncate">Waste Warrior</p>
<p class="text-[9px] text-[#8c8b5f] font-black uppercase tracking-widest mt-0.5">Level 3 Achieve</p>
</div>
<div class="text-right">
<p class="text-[10px] font-black text-green-600">+15%</p>
</div>
</div>
<div class="flex items-center gap-3 p-2 rounded-lg hover:bg-sidebar-gray transition-all cursor-default">
<div class="size-10 rounded bg-sidebar-gray flex items-center justify-center border border-black/5">
<span class="material-symbols-outlined text-black text-xl">military_tech</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-xs font-bold truncate">Margin Master</p>
<p class="text-[9px] text-[#8c8b5f] font-black uppercase tracking-widest mt-0.5">30% Peak Hit</p>
</div>
<div class="text-right">
<p class="text-[10px] font-black text-primary">NEW</p>
</div>
</div>
<div class="flex items-center gap-3 p-2 rounded-lg hover:bg-sidebar-gray transition-all cursor-default grayscale opacity-50">
<div class="size-10 rounded bg-sidebar-gray flex items-center justify-center border border-black/5">
<span class="material-symbols-outlined text-black text-xl">lock</span>
</div>
<div class="flex-1 min-w-0">
<p class="text-xs font-bold truncate">Empire Builder</p>
<p class="text-[9px] text-[#8c8b5f] font-black uppercase tracking-widest mt-0.5">Unlock at 3 Units</p>
</div>
</div>
</div>
<button class="w-full mt-6 py-2.5 bg-sidebar-gray rounded-lg text-[10px] font-black uppercase tracking-widest hover:bg-primary transition-all">
                        Operational Hall
                    </button>
</div>
<div class="bg-primary p-6 rounded-xl text-black shadow-lg shadow-primary/10 relative overflow-hidden group">
<div class="absolute -bottom-2 -right-2 opacity-10 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-7xl filled-icon">local_fire_department</span>
</div>
<p class="text-[9px] font-black uppercase tracking-widest mb-1 opacity-60">Group Streak</p>
<div class="flex items-center gap-2 mb-3">
<span class="text-3xl font-black italic">12 DAYS</span>
<span class="material-symbols-outlined text-red-600 filled-icon text-2xl">local_fire_department</span>
</div>
<p class="text-[11px] font-bold leading-tight relative z-10">
                        Maintain the flow! 1 more quest to unlock the <span class="underline">2x XP Multiplier</span>.
                    </p>
</div>
<div class="p-5 rounded-xl border-2 border-dashed border-[#8c8b5f]/20 flex items-center gap-4 hover:border-primary/50 transition-colors cursor-pointer group">
<div class="size-10 rounded-full bg-sidebar-gray flex items-center justify-center group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-lg text-[#8c8b5f] group-hover:text-black">group_add</span>
</div>
<div>
<p class="text-[10px] font-black uppercase tracking-tight">Invite UMKM</p>
<p class="text-[9px] text-[#8c8b5f] font-bold">Earn +500 Tavern XP</p>
</div>
</div>
</aside>
</main>
</div>
<div class="lg:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-[#181811]/5 px-6 py-3 flex justify-between items-center z-50">
<div class="flex flex-col items-center gap-1 text-black">
<span class="material-symbols-outlined filled-icon">insights</span>
<span class="text-[9px] font-black uppercase">Insights</span>
</div>
<div class="flex flex-col items-center gap-1 text-[#8c8b5f]">
<span class="material-symbols-outlined">swords</span>
<span class="text-[9px] font-black uppercase">Escrow</span>
</div>
<div class="flex flex-col items-center gap-1 text-[#8c8b5f]">
<span class="material-symbols-outlined">query_stats</span>
<span class="text-[9px] font-black uppercase">Stats</span>
</div>
<div class="flex flex-col items-center gap-1 text-[#8c8b5f]">
<span class="material-symbols-outlined">person</span>
<span class="text-[9px] font-black uppercase">Chef</span>
</div>
</div>
</div>
</body>
</html>




