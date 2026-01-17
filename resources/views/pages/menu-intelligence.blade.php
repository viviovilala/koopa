<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Group Intelligence v3 | Koopa</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#00a390",
                        "secondary": "#7c3aed",
                        "brand-orange": "#f97316",
                        "background-light": "#f1f5f9",
                        "background-dark": "#0f172a",
                        "status-green": "#10b981",
                        "status-yellow": "#f59e0b",
                        "status-red": "#ef4444",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.375rem",
                        "lg": "0.625rem",
                        "xl": "1rem",
                        "2xl": "16px",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        @layer base {
            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }
        }
        .sidebar-item-active {
            @apply bg-primary/10 text-primary border-r-4 border-primary;
        }
        .status-pill-sehat {
            @apply bg-status-green/10 text-status-green border border-status-green/20;
        }
        .status-pill-perhatian {
            @apply bg-status-yellow/10 text-status-yellow border border-status-yellow/20;
        }
        .status-pill-kritis {
            @apply bg-status-red/10 text-status-red border border-status-red/20;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-slate-100 min-h-screen">
<div class="flex min-h-screen">
<aside class="w-64 bg-white dark:bg-[#111c2d] border-r border-slate-200 dark:border-slate-800 flex flex-col sticky top-0 h-screen z-50">
<div class="p-6">
<div class="flex items-center gap-3 text-primary">
<div class="size-9 flex items-center justify-center bg-primary/10 rounded-xl">
<span class="material-symbols-outlined text-primary font-bold">rocket_launch</span>
</div>
<h2 class="text-slate-900 dark:text-white text-xl font-extrabold leading-tight tracking-tight">Koopa</h2>
</div>
</div>
<nav class="flex-1 px-4 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 font-bold text-sm rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 sidebar-item-active font-bold text-sm rounded-xl transition-colors" href="#">
<span class="material-symbols-outlined">restaurant_menu</span>
<span>Group Intelligence</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 font-bold text-sm rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors" href="#">
<span class="material-symbols-outlined">inventory_2</span>
<span>Inventory</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-slate-500 dark:text-slate-400 font-bold text-sm rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors" href="#">
<span class="material-symbols-outlined">group</span>
<span>Suppliers</span>
</a>
</nav>
<div class="p-4 mt-auto border-t border-slate-100 dark:border-slate-800">
<div class="bg-slate-50 dark:bg-slate-800/50 rounded-2xl p-4">
<div class="flex items-center gap-3 mb-3">
<div class="size-8 rounded-full bg-brand-orange/20 flex items-center justify-center">
<span class="material-symbols-outlined text-brand-orange text-lg">workspace_premium</span>
</div>
<span class="text-xs font-black text-slate-400 uppercase tracking-widest">Controlled Risk</span>
</div>
<p class="text-[11px] text-slate-500 dark:text-slate-400 mb-3">85% Quest completed this month!</p>
<div class="w-full bg-slate-200 dark:bg-slate-700 h-1.5 rounded-full overflow-hidden">
<div class="bg-primary h-full w-[85%]"></div>
</div>
</div>
</div>
</aside>
<div class="flex-1 flex flex-col">
<header class="h-20 bg-white/80 dark:bg-[#111c2d]/80 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 flex items-center justify-between px-8 sticky top-0 z-40">
<div>
<h1 class="text-lg font-bold text-slate-900 dark:text-white">Group Intelligence</h1>
<p class="text-xs text-slate-500 font-medium">Collective Buying Control</p>
</div>
<div class="flex items-center gap-6">
<div class="flex items-center bg-slate-100 dark:bg-slate-800 rounded-xl px-3 py-1.5 gap-2">
<span class="material-symbols-outlined text-primary text-xl">payments</span>
<span class="text-sm font-bold">Rp 42.5M</span>
</div>
<button class="relative size-10 flex items-center justify-center text-slate-500 hover:text-primary transition-colors">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-status-red rounded-full border-2 border-white dark:border-[#111c2d]"></span>
</button>
<div class="h-8 w-px bg-slate-200 dark:bg-slate-800"></div>
<div class="flex items-center gap-3">
<div class="text-right hidden sm:block">
<p class="text-sm font-bold text-slate-900 dark:text-white">Dapur Utama</p>
<p class="text-[10px] text-slate-500 font-bold uppercase tracking-tighter">Owner Access</p>
</div>
<div class="size-10 rounded-xl bg-center bg-cover border-2 border-primary/20" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC9mSRt6tiqkG-xwdfiKQ2sZ_tqBU0EzD4O8dkjZu_2tySjNLkXl6lpWCCoWBYkzgxEA5-RbGi_jwiycDYFhfkYso0Xwijcb2TA-pWeVTweXmSxA567ifds-KS0DucWCM4l5S9xHt_hkVWVgAMs4J5eZ2jvMcRKlPv27Ppicrj_nNUQ6TE9T2RyCE07LsrexRwue0VX3e29NIZPMZUcvd1uvkglRIavN9T5sb41zrLe6oIx_sv0KTLxvsruZExI9e4KkBOF6ySO3MK8");'></div>
</div>
</div>
</header>
<main class="p-8 max-w-7xl mx-auto w-full">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
<div class="bg-white dark:bg-[#111c2d] p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary/10 rounded-xl text-primary">
<span class="material-symbols-outlined">trending_up</span>
</div>
<span class="text-status-green text-[10px] font-black bg-status-green/10 px-2 py-1 rounded-lg">+2.4%</span>
</div>
<p class="text-slate-500 text-xs font-bold uppercase tracking-wider mb-1">Savings Rate</p>
<p class="text-2xl font-extrabold text-slate-900 dark:text-white">18.4%</p>
</div>
<div class="bg-white dark:bg-[#111c2d] p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-status-yellow/10 rounded-xl text-status-yellow">
<span class="material-symbols-outlined">priority_high</span>
</div>
<span class="text-status-yellow text-[10px] font-black bg-status-yellow/10 px-2 py-1 rounded-lg">High Risk</span>
</div>
<p class="text-slate-500 text-xs font-bold uppercase tracking-wider mb-1">Needs Volume</p>
<p class="text-2xl font-extrabold text-slate-900 dark:text-white">12 Items</p>
</div>
<div class="bg-white dark:bg-[#111c2d] p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-secondary/10 rounded-xl text-secondary">
<span class="material-symbols-outlined">rocket</span>
</div>
<span class="text-secondary text-[10px] font-black bg-secondary/10 px-2 py-1 rounded-lg">Potential</span>
</div>
<p class="text-slate-500 text-xs font-bold uppercase tracking-wider mb-1">Monthly Savings</p>
<p class="text-2xl font-extrabold text-slate-900 dark:text-white">Rp 28.4M</p>
</div>
</div>
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
<div class="flex items-center gap-3">
<h3 class="text-xl font-bold text-slate-900 dark:text-white">Group Performance</h3>
<span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 rounded-md text-[10px] font-black text-slate-500 uppercase tracking-widest">42 Active</span>
</div>
<div class="flex gap-3">
<div class="relative group">
<span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-slate-400 group-focus-within:text-primary transition-colors text-[20px]">search</span>
<input class="w-64 bg-white dark:bg-[#111c2d] border border-slate-200 dark:border-slate-800 rounded-xl pl-10 pr-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all outline-none" placeholder="Search menu items..." type="text"/>
</div>
<button class="flex items-center gap-2 px-4 py-2.5 bg-white dark:bg-[#111c2d] border border-slate-200 dark:border-slate-800 rounded-xl text-sm font-bold hover:bg-slate-50 dark:hover:bg-slate-800/80 transition-colors">
<span class="material-symbols-outlined text-[18px]">tune</span>
<span>Filter</span>
</button>
<button class="flex items-center gap-2 px-4 py-2.5 bg-primary text-white rounded-xl text-sm font-bold hover:brightness-110 transition-all shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-[18px]">download</span>
<span>Export</span>
</button>
</div>
</div>
<div class="bg-white dark:bg-[#111c2d] rounded-2xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-sm">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50 text-slate-400 dark:text-slate-500 text-[11px] uppercase tracking-[0.1em] font-black border-b border-slate-200 dark:border-slate-800">
<th class="px-8 py-5">Item Menu</th>
<th class="px-8 py-5">Risk Status</th>
<th class="px-8 py-5">Margin (%)</th>
<th class="px-8 py-5">Tier Price</th>
<th class="px-8 py-5 text-right">Trend</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-slate-800">
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/20 cursor-pointer transition-colors group">
<td class="px-8 py-6">
<div class="flex items-center gap-4">
<div class="size-12 rounded-xl bg-slate-100 dark:bg-slate-800 overflow-hidden shrink-0 border border-slate-200 dark:border-slate-700">
<div class="w-full h-full bg-gradient-to-br from-primary/30 to-primary/5"></div>
</div>
<span class="font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">Ayam Bakar Madu</span>
</div>
</td>
<td class="px-8 py-6">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg status-pill-sehat text-[10px] font-black uppercase tracking-wider">
<span class="size-1.5 rounded-full bg-status-green"></span>
                                    SEHAT
                                </span>
</td>
<td class="px-8 py-6 font-extrabold text-slate-900 dark:text-white">68%</td>
<td class="px-8 py-6 text-slate-500 font-bold">Rp 45.000</td>
<td class="px-8 py-6 text-right">
<span class="material-symbols-outlined text-status-green font-bold">trending_up</span>
</td>
</tr>
<tr class="bg-primary/5 dark:bg-primary/10 border-l-4 border-status-yellow">
<td class="p-0" colspan="5">
<div class="flex items-center px-8 py-6 bg-white/50 dark:bg-white/5 border-b border-slate-200 dark:border-slate-800">
<div class="flex items-center gap-4 flex-1">
<div class="size-12 rounded-xl bg-slate-100 dark:bg-slate-800 overflow-hidden shrink-0 border border-status-yellow/50">
<div class="w-full h-full bg-gradient-to-br from-status-yellow/30 to-status-yellow/5"></div>
</div>
<span class="font-bold text-slate-900 dark:text-white">Sate Wagyu Lokal</span>
</div>
<div class="w-[180px] px-8">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg status-pill-perhatian text-[10px] font-black uppercase tracking-wider">
<span class="size-1.5 rounded-full bg-status-yellow"></span>
                                            PERHATIAN
                                        </span>
</div>
<div class="w-[140px] px-8 font-extrabold text-slate-900 dark:text-white">42%</div>
<div class="w-[150px] px-8 text-slate-500 font-bold">Rp 85.000</div>
<div class="flex-1 text-right px-8">
<span class="material-symbols-outlined text-status-yellow font-bold rotate-90">trending_flat</span>
</div>
</div>
<div class="px-8 py-10 bg-slate-50/50 dark:bg-slate-900/40">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-5 flex items-center gap-10">
<div class="relative size-44 shrink-0">
<svg class="w-full h-full -rotate-90" viewBox="0 0 36 36">
<circle class="stroke-slate-200 dark:stroke-slate-700" cx="18" cy="18" fill="none" r="16" stroke-width="4"></circle>
<circle class="text-primary" cx="18" cy="18" fill="none" r="16" stroke="currentColor" stroke-dasharray="55, 100" stroke-linecap="round" stroke-width="4"></circle>
<circle class="text-secondary" cx="18" cy="18" fill="none" r="16" stroke="currentColor" stroke-dasharray="25, 100" stroke-dashoffset="-55" stroke-linecap="round" stroke-width="4"></circle>
<circle class="text-brand-orange" cx="18" cy="18" fill="none" r="16" stroke="currentColor" stroke-dasharray="20, 100" stroke-dashoffset="-80" stroke-linecap="round" stroke-width="4"></circle>
</svg>
<div class="absolute inset-0 flex flex-col items-center justify-center text-center">
<span class="text-[9px] font-black text-slate-400 uppercase tracking-widest">HPP Total</span>
<span class="text-xl font-extrabold text-slate-900 dark:text-white leading-none mt-1">Rp 49.300</span>
</div>
</div>
<div class="flex flex-col gap-4 w-full">
<h4 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-1">Rincian Komponen</h4>
<div class="space-y-4">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="size-2 rounded-full bg-primary shadow-sm"></div>
<span class="text-sm font-bold text-slate-600 dark:text-slate-400">Bahan</span>
</div>
<span class="text-sm font-extrabold text-slate-900 dark:text-white">55%</span>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="size-2 rounded-full bg-secondary shadow-sm"></div>
<span class="text-sm font-bold text-slate-600 dark:text-slate-400">Tenaga</span>
</div>
<span class="text-sm font-extrabold text-slate-900 dark:text-white">25%</span>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="size-2 rounded-full bg-brand-orange shadow-sm"></div>
<span class="text-sm font-bold text-slate-600 dark:text-slate-400">Lainnya</span>
</div>
<span class="text-sm font-extrabold text-slate-900 dark:text-white">20%</span>
</div>
</div>
</div>
</div>
<div class="lg:col-span-7">
<div class="bg-white dark:bg-[#15263a] p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm relative overflow-hidden group">
<div class="absolute top-0 right-0 p-4 opacity-5 group-hover:opacity-10 transition-opacity">
<span class="material-symbols-outlined text-6xl">psychology</span>
</div>
<h5 class="text-[10px] font-black text-status-yellow mb-3 flex items-center gap-2 uppercase tracking-[0.15em]">
<span class="material-symbols-outlined text-[16px] fill-1">auto_awesome</span>
                                                    REKOMENDASI QUEST
                                                </h5>
<p class="text-sm text-slate-700 dark:text-slate-200 font-semibold leading-relaxed mb-6 max-w-lg">
                                                    Biaya bahan baku (Wagyu) meningkat 12% minggu ini. Pertimbangkan mengecilkan porsi garnish atau mencari supplier lokal alternatif untuk kembali ke margin <span class="text-status-green font-bold text-base underline decoration-status-green/30">50%+</span>.
                                                </p>
<div class="flex items-center gap-4">
<button class="px-6 py-2.5 bg-status-yellow text-white text-[11px] font-black uppercase tracking-wider rounded-xl hover:brightness-110 transition-all shadow-md shadow-status-yellow/20">
                                                        Optimasi Sekarang
                                                    </button>
<button class="text-xs font-bold text-primary hover:underline flex items-center gap-1">
                                                        Analisa Supplier <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/20 cursor-pointer transition-colors group">
<td class="px-8 py-6">
<div class="flex items-center gap-4">
<div class="size-12 rounded-xl bg-slate-100 dark:bg-slate-800 overflow-hidden shrink-0 border border-slate-200 dark:border-slate-700">
<div class="w-full h-full bg-gradient-to-br from-status-red/30 to-status-red/5"></div>
</div>
<span class="font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">Iga Bakar Premium</span>
</div>
</td>
<td class="px-8 py-6">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg status-pill-kritis text-[10px] font-black uppercase tracking-wider">
<span class="size-1.5 rounded-full bg-status-red"></span>
                                    KRITIS
                                </span>
</td>
<td class="px-8 py-6 font-extrabold text-slate-900 dark:text-white">22%</td>
<td class="px-8 py-6 text-slate-500 font-bold">Rp 120.000</td>
<td class="px-8 py-6 text-right">
<span class="material-symbols-outlined text-status-red font-bold">trending_down</span>
</td>
</tr>
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/20 cursor-pointer transition-colors group">
<td class="px-8 py-6">
<div class="flex items-center gap-4">
<div class="size-12 rounded-xl bg-slate-100 dark:bg-slate-800 overflow-hidden shrink-0 border border-slate-200 dark:border-slate-700">
<div class="w-full h-full bg-gradient-to-br from-primary/30 to-primary/5"></div>
</div>
<span class="font-bold text-slate-900 dark:text-white group-hover:text-primary transition-colors">Es Teh Serai</span>
</div>
</td>
<td class="px-8 py-6">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg status-pill-sehat text-[10px] font-black uppercase tracking-wider">
<span class="size-1.5 rounded-full bg-status-green"></span>
                                    SEHAT
                                </span>
</td>
<td class="px-8 py-6 font-extrabold text-slate-900 dark:text-white">75%</td>
<td class="px-8 py-6 text-slate-500 font-bold">Rp 18.000</td>
<td class="px-8 py-6 text-right">
<span class="material-symbols-outlined text-status-green font-bold">trending_up</span>
</td>
</tr>
</tbody>
</table>
<div class="px-8 py-5 border-t border-slate-100 dark:border-slate-800 bg-slate-50/30 dark:bg-slate-800/10 flex items-center justify-between text-[10px] font-black text-slate-400 uppercase tracking-widest">
<span>Showing 4 of 42 Items</span>
<div class="flex gap-6">
<button class="hover:text-primary transition-colors flex items-center gap-1 disabled:opacity-30" disabled="">
<span class="material-symbols-outlined text-sm">chevron_left</span> Previous
                        </button>
<button class="text-primary hover:brightness-110 flex items-center gap-1">
                            Next <span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
</div>
<div class="mt-12 p-8 rounded-2xl bg-[#0f172a] text-white shadow-2xl shadow-primary/10 flex flex-col md:flex-row items-center justify-between relative overflow-hidden border border-slate-700">
<div class="relative z-10 flex flex-col md:flex-row items-center gap-8 text-center md:text-left">
<div class="size-20 rounded-2xl bg-primary/20 backdrop-blur-xl flex items-center justify-center border border-white/10 shadow-inner">
<span class="material-symbols-outlined text-4xl text-primary font-bold">auto_awesome</span>
</div>
<div>
<h4 class="text-xl font-extrabold mb-2 tracking-tight">Koopa Insight: New Opportunity!</h4>
<p class="text-slate-400 font-medium max-w-xl text-base">Replacing Wagyu garnish with seasonal alternatives can boost status from <span class="text-status-yellow font-bold">Attention</span> to <span class="text-status-green font-bold">Healthy</span>, saving Rp 6.500 per portion.</p>
</div>
</div>
<button class="mt-6 md:mt-0 relative z-10 px-8 py-4 bg-primary text-white font-black uppercase tracking-widest text-xs rounded-xl hover:scale-105 transition-all shadow-xl shadow-primary/30">
                    Start Optimization Quest
                </button>
<div class="absolute -right-20 -top-20 size-80 bg-primary/10 rounded-full blur-[80px]"></div>
<div class="absolute -left-20 -bottom-20 size-80 bg-secondary/5 rounded-full blur-[80px]"></div>
</div>
</main>
</div>
</div>
</body>
</html>





