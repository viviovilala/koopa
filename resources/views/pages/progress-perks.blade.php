<!DOCTYPE html>
<html class="dark" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | Compliance &amp; Trust v3</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;500;600;700;800&amp;family=Manrope:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#8800cc",
                        "brand-teal": "#14b8a6",
                        "gold-prestige": "#B8860B",
                        "background-dark": "#0c0c0e",
                        "card-dark": "#18181b",
                        "sidebar-dark": "#111114",
                        "locked-gray": "#27272a",
                    },
                    fontFamily: {
                        "display": ["Epilogue", "sans-serif"],
                        "body": ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        "card": "16px",
                    },
                },
            },
        }
    </script>
<style type="text/tailwindcss">
        @layer utilities {
            .gold-purple-gradient {
                background: linear-gradient(135deg, #B8860B 0%, #8800cc 100%);
            }
            .gold-purple-text {
                background: linear-gradient(135deg, #FFD700 0%, #d480ff 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }
            .xp-bar-fill {
                background: linear-gradient(90deg, #14b8a6 0%, #0d9488 100%);
                box-shadow: 0 0 15px rgba(20, 184, 166, 0.4);
            }
            .achievement-card {
                @apply bg-card-dark border border-white/5 rounded-card shadow-lg transition-all duration-300;
            }
            .achievement-card:hover {
                @apply border-brand-teal/30 bg-[#202024] -translate-y-1;
            }
            .locked-state {
                @apply opacity-40 grayscale pointer-events-none;
            }
            .premium-lock-overlay {
                @apply absolute top-4 right-4 flex items-center justify-center bg-black/40 rounded-full p-1.5 backdrop-blur-sm border border-white/10;
            }
            .sidebar-link {
                @apply flex items-center gap-3 px-4 py-3 rounded-xl text-white/50 hover:text-white hover:bg-white/5 transition-all;
            }
            .sidebar-link.active {
                @apply text-brand-teal bg-brand-teal/10 font-bold;
            }
        }
    </style>
</head>
<body class="bg-background-dark font-body text-white antialiased flex overflow-hidden h-screen">
<aside class="w-64 border-r border-white/5 bg-sidebar-dark flex flex-col shrink-0">
<div class="p-6">
<div class="flex items-center gap-3">
<div class="size-9 bg-brand-teal rounded-lg flex items-center justify-center shadow-lg shadow-brand-teal/20">
<span class="material-symbols-outlined text-white text-xl">rocket_launch</span>
</div>
<h2 class="text-white text-xl font-display font-extrabold tracking-tight">Koopa</h2>
</div>
</div>
<nav class="flex-1 px-4 space-y-1">
<a class="sidebar-link" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span>Dashboard</span>
</a>
<a class="sidebar-link active" href="#">
<span class="material-symbols-outlined">military_tech</span>
<span>Trust Metrics</span>
</a>
<a class="sidebar-link" href="#">
<span class="material-symbols-outlined">inventory_2</span>
<span>Inventory</span>
</a>
<a class="sidebar-link" href="#">
<span class="material-symbols-outlined">analytics</span>
<span>Reports</span>
</a>
<a class="sidebar-link" href="#">
<span class="material-symbols-outlined">groups</span>
<span>Staff Portal</span>
</a>
</nav>
<div class="p-4 mt-auto">
<div class="bg-gradient-to-br from-brand-teal/20 to-primary/10 rounded-card p-4 border border-white/10">
<p class="text-xs font-bold text-brand-teal uppercase tracking-widest mb-2">Core Rules</p>
<p class="text-[11px] text-white/60 mb-3">Unlock advanced predictive AI features</p>
<button class="w-full py-2 bg-brand-teal text-white rounded-lg text-xs font-bold shadow-lg shadow-brand-teal/20">View Rules</button>
</div>
</div>
</aside>
<div class="flex-1 flex flex-col overflow-y-auto">
<header class="h-16 border-b border-white/5 px-8 flex items-center justify-between sticky top-0 bg-background-dark/80 backdrop-blur-md z-40">
<div class="flex items-center gap-2">
<span class="text-white/40 text-sm">Pages</span>
<span class="text-white/20">/</span>
<span class="text-white text-sm font-semibold">Compliance &amp; Trust</span>
</div>
<div class="flex items-center gap-6">
<div class="flex items-center gap-4 border-r border-white/10 pr-6">
<button class="text-white/40 hover:text-white transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute -top-1 -right-1 size-2 bg-brand-teal rounded-full"></span>
</button>
<button class="text-white/40 hover:text-white transition-colors">
<span class="material-symbols-outlined">settings</span>
</button>
</div>
<div class="flex items-center gap-3">
<div class="text-right hidden sm:block">
<p class="text-xs font-bold text-white leading-none mb-1">Executive Chef</p>
<p class="text-[10px] text-gold-prestige font-bold uppercase tracking-wider">Lvl 14 Prestige</p>
</div>
<div class="relative">
<div class="size-10 rounded-full border-2 border-brand-teal p-0.5" style="background: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDioCiJZgOm-b09FN49iUfpVAyuj8hDEo5Jf-iS7wkh2MTcgzz_Ki4g0tto-ccAonxrhAskx6v53D0uhhSLU96uATQH3F-MBeGKzK0rVWmdEwptEDJaXd_2qejNQ5Xg-30CaIly-NHCwnTh_7MzC950HLzvxxq3xsAsromPRGt0oaGyK4gLRv_LBzExIb_9DfYsyRxPgC-30PnkRsZzqggv5-cAwQOCXFNDC8Y7-tPN2NaSZu5EPV5uxhqscciLq0_YWsdKMKZBaOFT') center/cover;"></div>
</div>
</div>
</div>
</header>
<main class="flex-1 p-8 max-w-6xl w-full mx-auto">
<section class="mb-12">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
<div>
<h1 class="text-white text-4xl font-display font-extrabold tracking-tight mb-2">Operational Progress</h1>
<p class="text-white/40 font-medium">Earn <span class="text-brand-teal">350 XP</span> to reach Level 15 (Master Sommelier)</p>
</div>
<div class="text-right">
<p class="text-white/40 text-[10px] font-bold uppercase tracking-[0.2em] mb-1">Lifetime Group Volume</p>
<p class="text-2xl font-display font-bold text-white">$1,248,500.00</p>
</div>
</div>
<div class="achievement-card p-8 relative overflow-hidden">
<div class="flex justify-between items-end mb-5">
<div class="flex items-center gap-4">
<div class="size-12 rounded-xl bg-brand-teal/10 flex items-center justify-center">
<span class="material-symbols-outlined text-brand-teal text-3xl">trending_up</span>
</div>
<div>
<p class="text-white font-bold text-lg leading-none mb-1">8,250 / 11,000 XP</p>
<p class="text-white/40 text-xs font-medium">Daily Audit Streak: 12 Days (2x Multiplier)</p>
</div>
</div>
<div class="text-right">
<span class="text-brand-teal font-mono font-bold">75% Complete</span>
</div>
</div>
<div class="h-3 w-full bg-white/5 rounded-full overflow-hidden border border-white/5">
<div class="xp-bar-fill h-full rounded-full transition-all duration-1000" style="width: 75%;"></div>
</div>
<div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6 pt-6 border-t border-white/5">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-brand-teal">stars</span>
<div>
<p class="text-white text-xs font-bold leading-none mb-1">Next Capability</p>
<p class="text-white/40 text-[11px]">Audit Log Automation</p>
</div>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-brand-teal">timer</span>
<div>
<p class="text-white text-xs font-bold leading-none mb-1">Time to Level</p>
<p class="text-white/40 text-[11px]">Est. 3 days active</p>
</div>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-brand-teal">social_leaderboard</span>
<div>
<p class="text-white text-xs font-bold leading-none mb-1">Regional Consistency</p>
<p class="text-white/40 text-[11px]">Top 4% (EMEA Region)</p>
</div>
</div>
</div>
</div>
</section>
<section class="mb-16">
<div class="flex items-center justify-between mb-8 px-2">
<div class="flex items-center gap-3">
<div class="h-6 w-1 bg-brand-teal rounded-full"></div>
<h2 class="text-white text-xl font-display font-bold tracking-tight">Operational Badges</h2>
</div>
<button class="text-white/40 hover:text-brand-teal text-[11px] font-bold uppercase tracking-widest flex items-center gap-2 transition-colors">
                    Badge Library <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-6">
<div class="achievement-card p-6 flex flex-col items-center text-center group">
<div class="size-24 rounded-2xl gold-purple-gradient p-1 mb-5 shadow-xl shadow-primary/20">
<div class="w-full h-full bg-card-dark rounded-[14px] flex items-center justify-center">
<span class="material-symbols-outlined text-5xl gold-purple-text">workspace_premium</span>
</div>
</div>
<h3 class="text-white font-bold text-sm mb-2">Margin Master</h3>
<p class="text-white/40 text-[11px] leading-relaxed">Top 1% of users maintaining &gt;40% net margin</p>
</div>
<div class="achievement-card p-6 flex flex-col items-center text-center group">
<div class="size-24 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-5 group-hover:border-brand-teal/50 transition-colors">
<span class="material-symbols-outlined text-5xl text-brand-teal">rebase_edit</span>
</div>
<h3 class="text-white font-bold text-sm mb-2">Consistency Pro</h3>
<p class="text-white/40 text-[11px] leading-relaxed">7-day consistent profit growth cycle</p>
</div>
<div class="achievement-card p-6 flex flex-col items-center text-center group">
<div class="size-24 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center mb-5 group-hover:border-brand-teal/50 transition-colors">
<span class="material-symbols-outlined text-5xl text-brand-teal">eco</span>
</div>
<h3 class="text-white font-bold text-sm mb-2">Waste Warrior</h3>
<p class="text-white/40 text-[11px] leading-relaxed">Reduce inventory food waste by 15%</p>
</div>
<div class="achievement-card p-6 flex flex-col items-center text-center relative overflow-hidden group">
<div class="premium-lock-overlay">
<span class="material-symbols-outlined text-white/40 text-sm">lock</span>
</div>
<div class="size-24 rounded-2xl bg-locked-gray/30 border border-white/5 flex items-center justify-center mb-5 locked-state">
<span class="material-symbols-outlined text-5xl text-white/30">shopping_cart_checkout</span>
</div>
<div class="locked-state">
<h3 class="text-white font-bold text-sm mb-2">Volume King</h3>
<p class="text-white/40 text-[11px] leading-relaxed">Process 1k+ orders in a single month</p>
</div>
</div>
</div>
</section>
<section class="mb-12">
<div class="flex items-center gap-3 mb-8 px-2">
<div class="h-6 w-1 bg-white/20 rounded-full"></div>
<h2 class="text-white text-xl font-display font-bold tracking-tight">Controlled Risk Features <span class="text-white/20 font-normal ml-2 text-sm">Available on Core Rules</span></h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="achievement-card p-8 flex gap-6 relative group overflow-hidden">
<div class="premium-lock-overlay">
<span class="material-symbols-outlined text-white/40 text-base">lock</span>
</div>
<div class="size-20 shrink-0 rounded-2xl bg-locked-gray border border-white/5 flex items-center justify-center locked-state">
<span class="material-symbols-outlined text-4xl text-white/30">query_stats</span>
</div>
<div class="flex-1 locked-state">
<div class="flex items-center gap-2 mb-2">
<h3 class="text-white font-bold text-lg">Predictive Forecasting</h3>
<span class="bg-white/5 text-white/40 text-[9px] px-2 py-0.5 rounded font-bold uppercase tracking-wider">Level 15</span>
</div>
<p class="text-white/40 text-sm mb-6 leading-relaxed">AI-driven models to predict demand and automate your procurement cycle.</p>
<button class="bg-brand-teal text-white text-xs font-bold py-2.5 px-6 rounded-lg opacity-80 cursor-default">
                            Upgrade to Unlock
                        </button>
</div>
</div>
<div class="achievement-card p-8 flex gap-6 relative group overflow-hidden">
<div class="premium-lock-overlay">
<span class="material-symbols-outlined text-white/40 text-base">lock</span>
</div>
<div class="size-20 shrink-0 rounded-2xl bg-locked-gray border border-white/5 flex items-center justify-center locked-state">
<span class="material-symbols-outlined text-4xl text-white/30">hub</span>
</div>
<div class="flex-1 locked-state">
<div class="flex items-center gap-2 mb-2">
<h3 class="text-white font-bold text-lg">Multi-Outlet Analytics</h3>
<span class="bg-white/5 text-white/40 text-[9px] px-2 py-0.5 rounded font-bold uppercase tracking-wider">Level 20</span>
</div>
<p class="text-white/40 text-sm mb-6 leading-relaxed">Consolidate data from up to 10 locations into a real-time command center.</p>
<button class="bg-brand-teal text-white text-xs font-bold py-2.5 px-6 rounded-lg opacity-80 cursor-default">
                            Upgrade Plan
                        </button>
</div>
</div>
</div>
</section>
<footer class="mt-20 border-t border-white/5 py-10">
<div class="flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex items-center gap-2 text-white/20 text-[11px] font-medium">
<span>(c) 2024 Koopa AI. All rights reserved.</span>
</div>
<div class="flex gap-8">
<a class="text-white/30 hover:text-brand-teal transition-colors text-[11px] font-bold uppercase tracking-wider" href="#">Privacy</a>
<a class="text-white/30 hover:text-brand-teal transition-colors text-[11px] font-bold uppercase tracking-wider" href="#">Terms</a>
<a class="text-white/30 hover:text-brand-teal transition-colors text-[11px] font-bold uppercase tracking-wider" href="#">Support</a>
</div>
</div>
</footer>
</main>
</div>
</body>
</html>




