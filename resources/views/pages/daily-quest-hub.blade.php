<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | Daily Group Hub</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#00a390",
                        "background-light": "#f3f4f6",
                        "background-dark": "#0f172a",
                        "card-dark": "#1e293b",
                        "accent-gold": "#fbbf24",
                        "accent-orange": "#f97316",
                    },
                    fontFamily: {
                        "display": ["Space Grotesk"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "2xl": "1.5rem"
                    },
                    boxShadow: {
                        'premium': '0 4px 20px -2px rgba(0, 0, 0, 0.05), 0 2px 10px -2px rgba(0, 0, 0, 0.03)',
                    }
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        body { font-family: 'Space Grotesk', sans-serif; }
        .pixel-icon {
            image-rendering: pixelated;
            width: 18px;
            height: 18px;
        }
        .stats-card {
            @apply bg-white dark:bg-card-dark border border-gray-100 dark:border-gray-800 p-6 rounded-2xl shadow-premium transition-all duration-300;
        }
        .quest-card {
            @apply stats-card hover:shadow-xl hover:shadow-primary/5 hover:-translate-y-1;
        }
        .reward-badge {
            @apply flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-bold border border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-gray-800/50;
        }
        .sidebar-item {
            @apply flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-200;
        }
        .sidebar-item-active {
            @apply bg-primary text-white shadow-lg shadow-primary/20;
        }
        .sidebar-item-inactive {
            @apply text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen">
<div class="flex h-screen overflow-hidden">
<aside class="w-72 flex flex-col bg-white dark:bg-card-dark border-r border-gray-200 dark:border-gray-800">
<div class="p-8">
<div class="flex items-center gap-3 mb-1">
<div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-white text-2xl" style="font-variation-settings: 'FILL' 1">leaderboard</span>
</div>
<div>
<h1 class="text-xl font-bold tracking-tight">Koopa</h1>
<p class="text-primary text-[10px] font-black uppercase tracking-[0.2em]">Collective Purchase with Controlled Risk</p>
</div>
</div>
</div>
<nav class="flex-1 px-4 space-y-1.5 overflow-y-auto">
<a class="sidebar-item sidebar-item-inactive" href="#">
<span class="material-symbols-outlined">grid_view</span>
<span class="font-semibold text-sm">Dashboard</span>
</a>
<a class="sidebar-item sidebar-item-active" href="#">
<span class="material-symbols-outlined">military_tech</span>
<span class="font-semibold text-sm">Group Hub</span>
</a>
<a class="sidebar-item sidebar-item-inactive" href="#">
<span class="material-symbols-outlined">inventory_2</span>
<span class="font-semibold text-sm">Groups</span>
</a>
<a class="sidebar-item sidebar-item-inactive" href="#">
<span class="material-symbols-outlined">monitoring</span>
<span class="font-semibold text-sm">Price Ladder</span>
</a>
<a class="sidebar-item sidebar-item-inactive" href="#">
<span class="material-symbols-outlined">groups</span>
<span class="font-semibold text-sm">Drop Points</span>
</a>
<div class="pt-6 pb-2 px-4">
<span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Admin</span>
</div>
<a class="sidebar-item sidebar-item-inactive" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="font-semibold text-sm">Settings</span>
</a>
</nav>
<div class="p-6">
<div class="p-5 bg-slate-50 dark:bg-slate-800/50 rounded-2xl border border-gray-100 dark:border-gray-700/50">
<div class="flex items-center justify-between mb-3">
<span class="text-[11px] font-bold text-gray-400 uppercase">Season 2 Progress</span>
<span class="text-xs font-bold text-primary">Lv. 14</span>
</div>
<div class="h-2 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full shadow-[0_0_12px_rgba(0,163,144,0.4)]" style="width: 68%"></div>
</div>
</div>
</div>
</aside>
<div class="flex-1 flex flex-col min-w-0">
<header class="h-20 bg-white dark:bg-card-dark border-b border-gray-200 dark:border-gray-800 px-8 flex items-center justify-between">
<div class="flex items-center gap-4">
<div class="flex items-center gap-2 bg-gray-50 dark:bg-gray-800 px-4 py-2 rounded-full border border-gray-100 dark:border-gray-700">
<span class="text-sm font-bold text-slate-700 dark:text-slate-200">Active Groups: 4</span>
</div>
<div class="flex items-center gap-2 bg-gray-50 dark:bg-gray-800 px-4 py-2 rounded-full border border-gray-100 dark:border-gray-700">
<span class="text-sm font-bold text-slate-700 dark:text-slate-200">Cut-offs: 2 today</span>
</div>
</div>
<div class="flex items-center gap-6">
<button class="relative w-10 h-10 flex items-center justify-center rounded-xl hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
<span class="material-symbols-outlined text-gray-500">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white dark:border-card-dark"></span>
</button>
<div class="h-8 w-[1px] bg-gray-200 dark:bg-gray-800 mx-1"></div>
<div class="flex items-center gap-3">
<div class="text-right">
<p class="text-sm font-bold">Group Ops</p>
<p class="text-[10px] text-gray-400 font-medium">Leader Console</p>
</div>
<div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-emerald-600 p-[2px]"></div>
</div>
</div>
</header>
<main class="flex-1 overflow-y-auto bg-background-light dark:bg-background-dark p-8">
<div class="bg-accent-orange rounded-2xl p-6 mb-8 text-white relative overflow-hidden shadow-lg shadow-accent-orange/20">
<div class="absolute right-[-20px] top-[-20px] opacity-10">
<span class="material-symbols-outlined text-[160px]" style="font-variation-settings: 'FILL' 1">local_fire_department</span>
</div>
<div class="relative z-10 flex items-center justify-between">
<div class="flex items-center gap-6">
<div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-4xl" style="font-variation-settings: 'FILL' 1">local_fire_department</span>
</div>
<div>
<h2 class="text-2xl font-bold tracking-tight">2 Groups Near Cut-off</h2>
<p class="text-white/80 text-sm font-medium">Push volume to unlock the next price tier before lock.</p>
</div>
</div>
<div class="flex flex-col items-end gap-3">
<span class="text-[10px] font-black uppercase tracking-widest text-white/70">Controlled Risk Mode</span>
</div>
</div>
</div>
<div class="flex items-center justify-between mb-8">
<div>
<h2 class="text-2xl font-bold text-slate-800 dark:text-white">Daily Group Hub</h2>
<p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Tasks to keep groups on track without financial risk.</p>
</div>
<div class="flex bg-white dark:bg-card-dark border border-gray-200 dark:border-gray-700 p-1.5 rounded-xl shadow-sm">
<button class="px-5 py-2 rounded-lg text-sm font-bold bg-primary text-white shadow-md shadow-primary/10">All Groups</button>
<button class="px-5 py-2 rounded-lg text-sm font-semibold text-gray-500 hover:text-primary transition-colors">Cut-off</button>
<button class="px-5 py-2 rounded-lg text-sm font-semibold text-gray-500 hover:text-primary transition-colors">Drop Points</button>
</div>
</div>
<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
<div class="quest-card flex flex-col h-full">
<div class="flex items-center justify-between mb-6">
<div class="w-14 h-14 bg-blue-50 dark:bg-blue-900/20 rounded-2xl flex items-center justify-center text-blue-600 dark:text-blue-400 border border-blue-100 dark:border-blue-800/50">
<span class="material-symbols-outlined text-3xl">analytics</span>
</div>
<span class="text-[10px] font-bold px-2.5 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-full border border-blue-100 dark:border-blue-800/50 uppercase tracking-wider">Leader</span>
</div>
<div class="flex-1">
<h3 class="text-xl font-bold mb-2">Open Group Template</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed mb-6">Set target volume, cut-off, and Poin A without taking any financial risk.</p>
</div>
<button class="w-full bg-primary hover:bg-[#008f7e] text-white font-bold py-4 px-6 rounded-xl transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
<span>Open Group</span>
<span class="material-symbols-outlined text-lg">arrow_forward</span>
</button>
</div>
<div class="quest-card flex flex-col h-full">
<div class="flex items-center justify-between mb-6">
<div class="w-14 h-14 bg-emerald-50 dark:bg-emerald-900/20 rounded-2xl flex items-center justify-center text-emerald-600 dark:text-emerald-400 border border-emerald-100 dark:border-emerald-800/50">
<span class="material-symbols-outlined text-3xl">inventory_2</span>
</div>
<span class="text-[10px] font-bold px-2.5 py-1 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 rounded-full border border-emerald-100 dark:border-emerald-800/50 uppercase tracking-wider">Escrow</span>
</div>
<div class="flex-1">
<h3 class="text-xl font-bold mb-2">Monitor Escrow</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed mb-6">All members pay upfront. Escrow releases only after delivery confirmation.</p>
</div>
<button class="w-full bg-primary hover:bg-[#008f7e] text-white font-bold py-4 px-6 rounded-xl transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
<span>View Escrow</span>
<span class="material-symbols-outlined text-lg">arrow_forward</span>
</button>
</div>
<div class="quest-card flex flex-col h-full">
<div class="flex items-center justify-between mb-6">
<div class="w-14 h-14 bg-purple-50 dark:bg-purple-900/20 rounded-2xl flex items-center justify-center text-purple-600 dark:text-purple-400 border border-purple-100 dark:border-purple-800/50">
<span class="material-symbols-outlined text-3xl">groups</span>
</div>
<span class="text-[10px] font-bold px-2.5 py-1 bg-purple-50 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded-full border border-purple-100 dark:border-purple-800/50 uppercase tracking-wider">Drop Point</span>
</div>
<div class="flex-1">
<h3 class="text-xl font-bold mb-2">Drop Point Checklist</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed mb-6">Check quantity and condition at Poin A. Upload proof for audit.</p>
</div>
<button class="w-full bg-primary hover:bg-[#008f7e] text-white font-bold py-4 px-6 rounded-xl transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
<span>Checklist Goods</span>
<span class="material-symbols-outlined text-lg">arrow_forward</span>
</button>
</div>
</div>
</main>
</div>
</div>
</body>
</html>
