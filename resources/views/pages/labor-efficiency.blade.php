<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Group Ops Efficiency | Koopa</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#5c3b81",
                        "background-light": "#fcfcfc",
                        "background-dark": "#1a1a1e",
                        "success": "#22c55e",
                        "warning": "#f59e0b",
                        "danger": "#ef4444",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "2xl": "2rem", "full": "9999px"},
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .progress-ring {
            transition: stroke-dashoffset 0.35s;
            transform: rotate(-220deg);
            transform-origin: 50% 50%;
        }
    </style>
</head>
<body class="bg-[#fafafa] dark:bg-background-dark font-display text-[#141316] dark:text-white transition-colors duration-200">
<div class="flex min-h-screen">
<aside class="w-64 border-r border-[#e0dee3] dark:border-[#333] flex flex-col bg-white dark:bg-[#1a1a1e] sticky top-0 h-screen">
<div class="p-6 flex flex-col gap-8 h-full">
<div class="flex items-center gap-3">
<div class="size-10 rounded-full bg-primary flex items-center justify-center text-white">
<span class="material-symbols-outlined">rocket_launch</span>
</div>
<div class="flex flex-col">
<h1 class="text-base font-bold leading-none">Koopa</h1>
<p class="text-[#756d7e] text-[10px] uppercase tracking-widest font-bold">Collective Purchase with Price &amp; Supply Certainty</p>
</div>
</div>
<nav class="flex flex-col gap-2 flex-grow">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined text-[#141316] dark:text-white">dashboard</span>
<span class="text-sm font-semibold">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary transition-colors" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">group</span>
<span class="text-sm font-bold">Labor Tracker</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined text-[#141316] dark:text-white">inventory_2</span>
<span class="text-sm font-semibold">Inventory</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-primary/10 transition-colors" href="#">
<span class="material-symbols-outlined text-[#141316] dark:text-white">bar_chart</span>
<span class="text-sm font-semibold">Reports</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-primary/10 transition-colors mt-auto" href="#">
<span class="material-symbols-outlined text-[#141316] dark:text-white">settings</span>
<span class="text-sm font-semibold">Settings</span>
</a>
</nav>
<div class="mt-auto pt-6 border-t border-[#f2f1f3] dark:border-[#333]">
<button class="w-full bg-primary text-white py-3 rounded-xl text-sm font-bold flex items-center justify-center gap-2 shadow-lg shadow-primary/20 hover:opacity-90 transition-opacity">
<span class="material-symbols-outlined text-sm">trending_up</span>
                    Level Up Status
                </button>
</div>
</div>
</aside>
<main class="flex-1 flex flex-col min-w-0 overflow-y-auto">
<header class="h-16 border-b border-[#f2f1f3] dark:border-[#333] flex items-center justify-between px-8 bg-white/80 dark:bg-[#1a1a1e]/80 backdrop-blur-md sticky top-0 z-10">
<div class="flex items-center gap-4">
<h2 class="text-lg font-bold">Group Ops Efficiency</h2>
<div class="flex bg-[#f2f1f3] dark:bg-[#333] p-1 rounded-lg gap-1">
<button class="px-3 py-1 text-xs font-bold rounded-md bg-white dark:bg-[#1a1a1e] shadow-sm">Today</button>
<button class="px-3 py-1 text-xs font-bold text-[#756d7e] hover:text-[#141316] dark:hover:text-white">Weekly</button>
</div>
</div>
<div class="flex items-center gap-4">
<div class="relative group">
<input class="bg-[#f2f1f3] dark:bg-[#333] border-none rounded-xl pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary w-64" placeholder="Search data..." type="text"/>
<span class="material-symbols-outlined absolute left-3 top-2 text-[#756d7e] text-lg">search</span>
</div>
<button class="p-2 hover:bg-[#f2f1f3] dark:hover:bg-[#333] rounded-full relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white dark:border-background-dark"></span>
</button>
<div class="w-8 h-8 rounded-full bg-cover bg-center border border-[#e0dee3]" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBOEDJ2SRnFWJB35jmhV1vpxo3RKmmP1L2OgaDI32Ci6ADbMqGwIea-r6qA8jcKizA5SaAu-MxApgRJj4biJyrJa_f8j2IrOoMvrx1cnvortBzNJkdmMmbrRty8QYbhcO4PXcbnE8142LFi-s_GZ_VAJmVNZm5vJbcNhYXKJtId0_84E1-xUuKPZ1dtJC-5KfHn3ShG9Ew_Dr8Au2rZyj58w6ozah9KbK-goWecwNEBFEc60zdHQiFfRLa6gXTJ-EIKEspiys4AMHZA')"></div>
</div>
</header>
<div class="p-8 max-w-7xl mx-auto w-full space-y-8">
<div class="flex justify-between items-end">
<div>
<p class="text-primary font-bold text-sm tracking-wider uppercase mb-1">Efficiency Dashboard</p>
<h1 class="text-4xl font-black tracking-tight">Group Execution</h1>
</div>
<button class="bg-white dark:bg-[#1a1a1e] border border-[#e0dee3] dark:border-[#333] px-6 py-3 rounded-xl font-bold flex items-center gap-2 hover:bg-[#f2f1f3] dark:hover:bg-[#333] transition-colors shadow-sm">
<span class="material-symbols-outlined">ios_share</span>
                    Export Detailed Report
                </button>
</div>
<div class="grid grid-cols-12 gap-6">
<div class="col-span-12 lg:col-span-8 bg-white dark:bg-[#1a1a1e] border border-[#e0dee3] dark:border-[#333] rounded-2xl p-10 flex flex-col items-center justify-center relative overflow-hidden">
<div class="absolute top-8 left-8">
<h3 class="font-bold text-xl text-[#141316] dark:text-white">Delivery Readiness</h3>
<p class="text-[#756d7e] text-sm mt-1">Escrow per Group</p>
</div>
<div class="absolute top-8 right-8">
<span class="px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-widest bg-success/10 text-success border border-success/20">
                            Efficient
                        </span>
</div>
<div class="relative flex items-center justify-center mt-12 mb-4">
<svg class="w-80 h-80" viewBox="0 0 200 200">
<path class="dark:stroke-[#333]" d="M 40 150 A 75 75 0 1 1 160 150" fill="none" stroke="#f2f1f3" stroke-linecap="round" stroke-width="12"></path>
<path d="M 40 150 A 75 75 0 1 1 160 150" fill="none" stroke="#22c55e" stroke-dasharray="280" stroke-dashoffset="50" stroke-linecap="round" stroke-width="12"></path>
</svg>
<div class="absolute inset-0 flex flex-col items-center justify-center pt-8">
<span class="text-6xl font-black text-[#141316] dark:text-white tracking-tight">$142.50</span>
<span class="text-[#756d7e] text-xs font-bold uppercase tracking-widest mt-2">Score: 82/100</span>
</div>
</div>
<div class="w-full mt-8 pt-8 border-t border-[#f2f1f3] dark:border-[#333]">
<div class="grid grid-cols-3 gap-6">
<div class="flex flex-col gap-1">
<span class="text-[10px] font-black text-[#756d7e] uppercase tracking-widest">Target Range</span>
<span class="text-base font-bold text-success">$135 - $175</span>
</div>
<div class="flex flex-col gap-1 border-x border-[#f2f1f3] dark:border-[#333] px-6 text-center">
<span class="text-[10px] font-black text-[#756d7e] uppercase tracking-widest">Daily Average</span>
<span class="text-base font-bold text-[#141316] dark:text-white">$138.20</span>
</div>
<div class="flex flex-col gap-1 pl-6 text-right">
<span class="text-[10px] font-black text-[#756d7e] uppercase tracking-widest">Optimization</span>
<span class="text-base font-bold text-warning">+12% vs. LW</span>
</div>
</div>
</div>
</div>
<div class="col-span-12 lg:col-span-4 flex flex-col gap-6">
<div class="bg-white dark:bg-[#1a1a1e] border border-[#e0dee3] dark:border-[#333] p-8 rounded-2xl">
<div class="flex items-center gap-3 mb-8">
<div class="size-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-xl">edit_note</span>
</div>
<h3 class="font-bold text-lg">Daily Group Log</h3>
</div>
<div class="space-y-5">
<div>
<label class="block text-[10px] font-bold uppercase tracking-widest text-[#756d7e] mb-2">Active Groups</label>
<input class="w-full bg-[#f2f1f3] dark:bg-[#333] border-none rounded-xl py-3.5 px-4 text-[#141316] dark:text-white font-semibold focus:ring-2 focus:ring-primary transition-all" type="number" value="6"/>
</div>
<div>
<label class="block text-[10px] font-bold uppercase tracking-widest text-[#756d7e] mb-2">Cut-off Hours</label>
<input class="w-full bg-[#f2f1f3] dark:bg-[#333] border-none rounded-xl py-3.5 px-4 text-[#141316] dark:text-white font-semibold focus:ring-2 focus:ring-primary transition-all" type="number" value="8"/>
</div>
<div>
<label class="block text-[10px] font-bold uppercase tracking-widest text-[#756d7e] mb-2">Escrow Value (Est.)</label>
<input class="w-full bg-[#f2f1f3] dark:bg-[#333] border-none rounded-xl py-3.5 px-4 text-[#141316] dark:text-white font-semibold focus:ring-2 focus:ring-primary transition-all" type="text" value="$6,840.00"/>
</div>
<button class="w-full bg-primary text-white py-4 rounded-xl font-bold uppercase text-xs tracking-widest mt-6 shadow-lg shadow-primary/20 hover:opacity-90 active:scale-[0.98] transition-all">
                                Recalculate Status
                            </button>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<div class="bg-white dark:bg-[#1a1a1e] border border-[#e0dee3] dark:border-[#333] p-5 rounded-2xl">
<p class="text-[10px] font-black text-[#756d7e] uppercase tracking-widest mb-2">Total Groups</p>
<p class="text-2xl font-bold">48.0</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-xs text-success">trending_up</span>
<span class="text-success text-[10px] font-bold">+2% vs LW</span>
</div>
</div>
<div class="bg-white dark:bg-[#1a1a1e] border border-[#e0dee3] dark:border-[#333] p-5 rounded-2xl">
<p class="text-[10px] font-black text-[#756d7e] uppercase tracking-widest mb-2">Risk Impact</p>
<p class="text-2xl font-bold text-danger">High</p>
<div class="flex items-center gap-1 mt-2">
<span class="material-symbols-outlined text-xs text-danger">trending_down</span>
<span class="text-danger text-[10px] font-bold">-5% vs LW</span>
</div>
</div>
</div>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-[#1a1a1e] p-6 rounded-2xl border border-[#e0dee3] dark:border-[#333] shadow-sm relative flex flex-col">
<div class="flex justify-between items-center mb-4">
<div class="size-10 rounded-xl bg-success/10 flex items-center justify-center text-success">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">check_circle</span>
</div>
<span class="bg-success/10 text-success text-[10px] px-3 py-1 rounded-full font-black tracking-widest uppercase">Optimal</span>
</div>
<h4 class="font-bold text-lg mb-2 text-[#141316] dark:text-white">On-time Delivery</h4>
<p class="text-[#756d7e] text-sm leading-relaxed mb-6">Peak productivity was achieved between 12 PM - 2 PM today. Staffing levels perfectly matched demand.</p>
<button class="mt-auto text-primary text-xs font-bold flex items-center gap-1 hover:underline">
                        View Historical Data <span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
<div class="bg-white dark:bg-[#1a1a1e] p-6 rounded-2xl border border-[#e0dee3] dark:border-[#333] shadow-sm relative flex flex-col">
<div class="flex justify-between items-center mb-4">
<div class="size-10 rounded-xl bg-warning/10 flex items-center justify-center text-warning">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">warning</span>
</div>
<span class="bg-warning/10 text-warning text-[10px] px-3 py-1 rounded-full font-black tracking-widest uppercase">Warning</span>
</div>
<h4 class="font-bold text-lg mb-2 text-[#141316] dark:text-white">Volume Dip</h4>
<p class="text-[#756d7e] text-sm leading-relaxed mb-6">Efficiency dipped during the 3 PM shift change. Consider staggering breaks to maintain revenue flow.</p>
<button class="mt-auto text-primary text-xs font-bold flex items-center gap-1 hover:underline">
                        Adjust Schedule <span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
<div class="bg-white dark:bg-[#1a1a1e] p-6 rounded-2xl border border-[#e0dee3] dark:border-[#333] shadow-sm relative flex flex-col">
<div class="flex justify-between items-center mb-4">
<div class="size-10 rounded-xl bg-danger/10 flex items-center justify-center text-danger">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">error</span>
</div>
<span class="bg-danger/10 text-danger text-[10px] px-3 py-1 rounded-full font-black tracking-widest uppercase">Critical</span>
</div>
<h4 class="font-bold text-lg mb-2 text-[#141316] dark:text-white">Cut-off Alert</h4>
<p class="text-[#756d7e] text-sm leading-relaxed mb-6">Overstaffing detected for tonight's close. You can save $120 by reducing 1 staff member at 8 PM.</p>
<button class="mt-auto text-primary text-xs font-bold flex items-center gap-1 hover:underline">
                        Cut Shift Now <span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
<div class="bg-white dark:bg-[#1a1a1e] border border-[#e0dee3] dark:border-[#333] rounded-2xl p-8 flex items-center gap-8 relative overflow-hidden group">
<div class="size-16 rounded-2xl bg-primary flex items-center justify-center text-white shrink-0 shadow-lg shadow-primary/30">
<span class="material-symbols-outlined text-3xl" style="font-variation-settings: 'FILL' 1">stars</span>
</div>
<div class="flex-1">
<h3 class="text-xl font-bold mb-1">Koopa Insight: Optimize Your PM Rotation</h3>
<p class="text-[#756d7e] max-w-2xl leading-relaxed text-sm">
                        You're currently <strong class="text-primary font-bold">$17.50</strong> away from your peak efficiency target! Try reducing your staff count by 1 during the 4:00 PM - 5:30 PM window.
                    </p>
</div>
<div class="shrink-0 flex gap-3">
<button class="px-6 py-2.5 rounded-xl border border-[#e0dee3] dark:border-[#333] font-bold text-sm hover:bg-[#f2f1f3] dark:hover:bg-[#333] transition-all">Dismiss</button>
<button class="px-6 py-2.5 rounded-xl bg-primary text-white font-bold text-sm shadow-lg shadow-primary/20 hover:opacity-90 transition-all">Apply Strategy</button>
</div>
</div>
</div>
<footer class="h-12 border-t border-[#f2f1f3] dark:border-[#333] flex items-center px-8 text-[10px] font-bold text-[#756d7e] uppercase tracking-widest bg-white dark:bg-[#1a1a1e]">
            (c) 2024 Koopa Analytics System - Version 3.0.0-Stable
        </footer>
</main>
</div>
</body>
</html>




