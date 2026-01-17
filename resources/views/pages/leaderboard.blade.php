<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | Group Group Leaderboard v3</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#00a390",
                        "accent-orange": "#FF6B35",
                        "accent-purple": "#6F42C1",
                        "accent-yellow": "#FFD23F",
                        "background-light": "#f8fafb",
                        "background-dark": "#0f1717",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1a2424",
                        "border-light": "#eef2f2",
                        "border-dark": "#2a3535",
                        "gold": "#FFD700",
                        "silver": "#C0C0C0",
                        "bronze": "#CD7F32",
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
            body { @apply antialiased text-[#101818] dark:text-gray-100; }
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .fill-1 { font-variation-settings: 'FILL' 1; }
        .pixel-badge {
            image-rendering: pixelated;
        }
        .podium-card {
            background: linear-gradient(180deg, rgba(0, 163, 144, 0.05) 0%, rgba(0, 163, 144, 0) 100%);
        }
        .table-row-hover {
            @apply transition-all duration-200 hover:bg-[#f0f7f6] dark:hover:bg-[#1e2f2d]/40;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display min-h-screen">
<header class="sticky top-0 z-50 w-full border-b border-border-light dark:border-border-dark bg-white/90 dark:bg-background-dark/90 backdrop-blur-md px-6 py-3">
<div class="max-w-[1440px] mx-auto flex items-center justify-between">
<div class="flex items-center gap-12">
<div class="flex items-center gap-3">
<div class="size-9 bg-primary rounded-lg flex items-center justify-center text-white shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-2xl fill-1">rocket_launch</span>
</div>
<h2 class="text-[#101818] dark:text-white text-xl font-extrabold tracking-tight">Koopa</h2>
</div>
<nav class="hidden lg:flex items-center gap-6">
<a class="text-[#5e8d87] hover:text-primary text-sm font-semibold transition-colors" href="#">Home</a>
<a class="text-[#5e8d87] hover:text-primary text-sm font-semibold transition-colors" href="#">Quests</a>
<a class="text-primary text-sm font-extrabold border-b-2 border-primary pb-1" href="#">Group Leaderboard</a>
<a class="text-[#5e8d87] hover:text-primary text-sm font-semibold transition-colors" href="#">Inventory</a>
</nav>
</div>
<div class="flex items-center gap-4">
<div class="hidden md:flex items-center bg-[#f0f5f4] dark:bg-[#1e2f2d] rounded-full px-4 py-2 w-72 border border-transparent focus-within:border-primary/30 transition-all">
<span class="material-symbols-outlined text-[#5e8d87] text-xl">search</span>
<input class="bg-transparent border-none focus:ring-0 text-sm w-full placeholder:text-[#5e8d87]" placeholder="Search players or districts..."/>
</div>
<button class="p-2.5 rounded-full bg-white dark:bg-surface-dark border border-border-light dark:border-border-dark text-[#5e8d87] hover:text-primary transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-accent-orange rounded-full border-2 border-white dark:border-surface-dark"></span>
</button>
<div class="h-10 w-10 rounded-full bg-cover bg-center border-2 border-primary ring-4 ring-primary/10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAFOmjd8ArNWXUoQePndKqFYys7i0bpUoAyMSLmaAOmhFup0DIl-cW2FNdL1oLdKrOMJ3ufUWdMsmIuxu3f9auzvuct2IJ6qhaRM3Mpa-cppzbSsxOSeFlYqzFhrXZ1aEC6SWppD2OYh2LP-HghtZOWD5RnVyND-AVmEnT3bct7k0_VKQYrSQsVXC9xrc7lWUmflLHvyP2khuzpumGVSqTsU3McZgZGDynYXoOyTDVe7WIB8_eCl-iCBXd-TeyKfzGLMieoMYkzjrJq");'></div>
</div>
</div>
</header>
<div class="max-w-[1440px] mx-auto flex gap-8 p-6 lg:p-8">
<aside class="hidden lg:flex w-64 flex-col gap-6 shrink-0">
<div class="bg-white dark:bg-surface-dark p-2 rounded-2xl border border-border-light dark:border-border-dark shadow-sm">
<div class="px-4 py-3">
<h3 class="text-[11px] font-bold text-[#5e8d87] uppercase tracking-[0.1em]">Time Filter</h3>
</div>
<div class="flex flex-col gap-1">
<button class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-[#f0f5f4] dark:hover:bg-[#1e2f2d] text-sm font-semibold text-[#5e8d87] transition-all">
<span class="material-symbols-outlined text-xl">calendar_view_week</span>
                    Weekly
                </button>
<button class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary text-sm font-bold transition-all shadow-sm">
<span class="material-symbols-outlined text-xl fill-1">calendar_month</span>
                    Monthly
                </button>
<button class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-[#f0f5f4] dark:hover:bg-[#1e2f2d] text-sm font-semibold text-[#5e8d87] transition-all">
<span class="material-symbols-outlined text-xl">history</span>
                    All-Time
                </button>
</div>
</div>
<div class="bg-white dark:bg-surface-dark p-5 rounded-2xl border border-border-light dark:border-border-dark shadow-sm">
<div class="flex items-center justify-between mb-4">
<h3 class="text-[11px] font-bold text-[#5e8d87] uppercase tracking-[0.1em]">Your Group Standing</h3>
<span class="text-[10px] bg-primary/10 text-primary px-2 py-0.5 rounded-full font-bold">TOP 2%</span>
</div>
<div class="flex items-center gap-3 mb-5">
<div class="size-12 rounded-xl border-2 border-primary bg-cover bg-center shadow-lg shadow-primary/10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAHvMRz_OJpTItNvHQ7LNfsSX4Cy2DrYrDeDne1svpUoR6kqTGbSv9A7i9Qewt1eBvSnUnWrfKL_iF7em9skREr9iDN8j_kPrSIFVfNfm9iPrpY_rQ-aH0EgKAK4BcMm_6oRYbryMXvae9j8QRGz75JxBWGDlPOEUkJ8Tkxe8zbjkNjpz51ytQr4U_TU179b4em0L8kptFmMOLBEOOr7LRZ6ACfWW2dlIjXckyqnco7OnObuNrUXJ486h5uFl7Egi8QBrECyCG-NAAS");'></div>
<div>
<h4 class="text-sm font-extrabold">Bistro 22</h4>
<p class="text-xs text-primary font-bold">Rank #2 - District</p>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between text-[10px] font-bold uppercase text-[#5e8d87]">
<span>To Rank #1</span>
<span>2,970 XP</span>
</div>
<div class="w-full h-2 bg-[#f0f5f4] dark:bg-[#2a3535] rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full shadow-[0_0_8px_rgba(0,163,144,0.4)]" style="width: 82%"></div>
</div>
</div>
</div>
<div class="p-6 rounded-2xl bg-accent-purple/5 border border-accent-purple/10 flex flex-col items-center text-center">
<div class="size-14 rounded-full bg-white dark:bg-surface-dark shadow-sm flex items-center justify-center mb-4">
<span class="material-symbols-outlined text-accent-purple text-2xl fill-1">military_tech</span>
</div>
<h4 class="text-sm font-bold mb-1">Leader League</h4>
<p class="text-[11px] text-[#5e8d87] mb-4">Promote to Platinum League in 4 days.</p>
<button class="w-full py-2.5 bg-accent-purple text-white text-xs font-bold rounded-xl hover:opacity-90 transition-opacity">View Rewards</button>
</div>
</aside>
<main class="flex-1 flex flex-col gap-8 min-w-0">
<section class="grid grid-cols-3 gap-6 items-end px-4">
<div class="flex flex-col items-center gap-4">
<div class="relative">
<div class="size-20 md:size-24 rounded-full border-[3px] border-silver p-1 bg-white dark:bg-surface-dark shadow-xl">
<div class="w-full h-full rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAHvMRz_OJpTItNvHQ7LNfsSX4Cy2DrYrDeDne1svpUoR6kqTGbSv9A7i9Qewt1eBvSnUnWrfKL_iF7em9skREr9iDN8j_kPrSIFVfNfm9iPrpY_rQ-aH0EgKAK4BcMm_6oRYbryMXvae9j8QRGz75JxBWGDlPOEUkJ8Tkxe8zbjkNjpz51ytQr4U_TU179b4em0L8kptFmMOLBEOOr7LRZ6ACfWW2dlIjXckyqnco7OnObuNrUXJ486h5uFl7Egi8QBrECyCG-NAAS");'></div>
</div>
<div class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-silver text-white text-[11px] font-black px-3 py-0.5 rounded-full shadow-lg">2</div>
</div>
<div class="text-center">
<p class="font-bold text-sm">Bistro 22</p>
<p class="text-xs text-primary font-extrabold mt-0.5">12,450 XP</p>
</div>
<div class="w-full h-28 podium-card rounded-t-2xl border-x border-t border-border-light dark:border-border-dark flex items-center justify-center">
<span class="material-symbols-outlined text-silver/30 text-4xl">emoji_events</span>
</div>
</div>
<div class="flex flex-col items-center gap-4">
<div class="relative">
<div class="size-28 md:size-32 rounded-full border-[4px] border-gold p-1 bg-white dark:bg-surface-dark shadow-[0_20px_40px_rgba(255,215,0,0.15)] ring-4 ring-gold/5">
<div class="w-full h-full rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD0s4-Ei52E2YSgC2aV0s_4zS9ni4sauRrNq08bl2adxM5HJc6h6VLIOUO-Qfyu0TqRNMITueSbJTLje2fQIDGShezTXrN2B5scJlc1pxnwwtPn0ndwHH9Aonr1hcVkjlNwtZUobE7LgKm5yLxy5rsGm657e13DMo2K9frLqI42ufLgAS7SnIPdM9-6oTP9w3mq9yux3E3Wn1ScYgz8quoVpjaeU7OGI7D0VeD7Qk1nOCOU_xCGVSTwSRbNtVSMI0DzvhVOd6xk60NQ");'></div>
</div>
<div class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-gold text-[#4d3d00] text-[13px] font-black px-4 py-1 rounded-full shadow-lg flex items-center gap-1">
<span class="material-symbols-outlined text-sm fill-1">workspace_premium</span>
                        1
                    </div>
</div>
<div class="text-center">
<p class="font-black text-lg">Gourmet Haven</p>
<p class="text-sm text-primary font-black mt-0.5">15,420 XP</p>
</div>
<div class="w-full h-40 bg-gradient-to-t from-primary/10 to-transparent rounded-t-2xl border-x border-t border-primary/20 flex items-center justify-center">
<span class="material-symbols-outlined text-gold text-5xl fill-1 drop-shadow-lg">crown</span>
</div>
</div>
<div class="flex flex-col items-center gap-4">
<div class="relative">
<div class="size-20 md:size-24 rounded-full border-[3px] border-bronze p-1 bg-white dark:bg-surface-dark shadow-xl">
<div class="w-full h-full rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBdc-uDdbqvK9bJ5GgWX9S5swsMBg4ylYYp1MBFGWb9WKBynt_4S7ZSS0fCBN_Dzd4frTihCpwLXUFgnEaB-o8voW03IFva7ArlkoYnXp7Us09f5oMbQSrwXx4EhIc3v4cWqfOpJRH9cT1VjBffuqKK4kz9CSgoezpHjVPGdiyg8dVlgmGymfs03pzYqq3p1I-FzpXDC2x8Jf58U71vnWQxGWJ3jM2UNIBTrEf6cgBQOAusXL8HBprKi13N5-IeuSrudt72udN-0knY");'></div>
</div>
<div class="absolute -bottom-2 left-1/2 -translate-x-1/2 bg-bronze text-white text-[11px] font-black px-3 py-0.5 rounded-full shadow-lg">3</div>
</div>
<div class="text-center">
<p class="font-bold text-sm">The Grill House</p>
<p class="text-xs text-primary font-extrabold mt-0.5">11,890 XP</p>
</div>
<div class="w-full h-24 podium-card rounded-t-2xl border-x border-t border-border-light dark:border-border-dark flex items-center justify-center">
<span class="material-symbols-outlined text-bronze/30 text-4xl">emoji_events</span>
</div>
</div>
</section>
<div class="bg-white dark:bg-surface-dark rounded-2xl border border-border-light dark:border-border-dark overflow-hidden shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-[#f8fafb] dark:bg-[#1e2f2d]/50 border-b border-border-light dark:border-border-dark">
<th class="px-6 py-4 text-[11px] font-bold uppercase tracking-wider text-[#5e8d87] w-20 text-center">Rank</th>
<th class="px-6 py-4 text-[11px] font-bold uppercase tracking-wider text-[#5e8d87]">Restaurant &amp; Owner</th>
<th class="px-6 py-4 text-[11px] font-bold uppercase tracking-wider text-[#5e8d87] w-48">Margin Health</th>
<th class="px-6 py-4 text-[11px] font-bold uppercase tracking-wider text-[#5e8d87] text-right">Total XP</th>
<th class="px-6 py-4 text-[11px] font-bold uppercase tracking-wider text-[#5e8d87] text-right">Badges</th>
</tr>
</thead>
<tbody class="divide-y divide-border-light dark:divide-border-dark">
<tr class="table-row-hover">
<td class="px-6 py-4 text-center font-black text-xl text-gold">1</td>
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<div class="size-11 rounded-xl bg-cover bg-center shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD0s4-Ei52E2YSgC2aV0s_4zS9ni4sauRrNq08bl2adxM5HJc6h6VLIOUO-Qfyu0TqRNMITueSbJTLje2fQIDGShezTXrN2B5scJlc1pxnwwtPn0ndwHH9Aonr1hcVkjlNwtZUobE7LgKm5yLxy5rsGm657e13DMo2K9frLqI42ufLgAS7SnIPdM9-6oTP9w3mq9yux3E3Wn1ScYgz8quoVpjaeU7OGI7D0VeD7Qk1nOCOU_xCGVSTwSRbNtVSMI0DzvhVOd6xk60NQ");'></div>
<div>
<div class="flex items-center gap-2">
<span class="text-sm font-bold">Gourmet Haven</span>
<span class="material-symbols-outlined text-gold text-base fill-1">verified</span>
</div>
<span class="text-[11px] text-[#5e8d87] font-medium">Sarah Chen</span>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="flex-1 h-2 bg-gray-100 dark:bg-[#2a3535] rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 94%"></div>
</div>
<span class="text-xs font-bold text-primary">94%</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<span class="text-sm font-bold">15,420</span>
</td>
<td class="px-6 py-4">
<div class="flex justify-end gap-1.5">
<div class="size-8 bg-accent-yellow/10 rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-accent-yellow text-lg fill-1 pixel-badge">workspace_premium</span>
</div>
<div class="size-8 bg-accent-purple/10 rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-accent-purple text-lg fill-1 pixel-badge">auto_awesome</span>
</div>
</div>
</td>
</tr>
<tr class="bg-primary/[0.03] border-l-[4px] border-l-primary relative">
<td class="px-6 py-4 text-center font-black text-xl text-primary">2</td>
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<div class="size-11 rounded-xl bg-cover bg-center shadow-md ring-2 ring-primary/20" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAHvMRz_OJpTItNvHQ7LNfsSX4Cy2DrYrDeDne1svpUoR6kqTGbSv9A7i9Qewt1eBvSnUnWrfKL_iF7em9skREr9iDN8j_kPrSIFVfNfm9iPrpY_rQ-aH0EgKAK4BcMm_6oRYbryMXvae9j8QRGz75JxBWGDlPOEUkJ8Tkxe8zbjkNjpz51ytQr4U_TU179b4em0L8kptFmMOLBEOOr7LRZ6ACfWW2dlIjXckyqnco7OnObuNrUXJ486h5uFl7Egi8QBrECyCG-NAAS");'></div>
<div>
<div class="flex items-center gap-2">
<span class="text-sm font-extrabold">Bistro 22</span>
<span class="bg-primary text-white text-[9px] px-2 py-0.5 rounded font-black flex items-center gap-1 uppercase tracking-tighter">
<span class="material-symbols-outlined text-[12px] fill-1">trending_up</span>
                                                You
                                            </span>
</div>
<span class="text-[11px] text-[#5e8d87] font-medium">Chef Mario</span>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="flex-1 h-2 bg-gray-100 dark:bg-[#2a3535] rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 88%"></div>
</div>
<span class="text-xs font-bold text-primary">88%</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<span class="text-sm font-bold">12,450</span>
</td>
<td class="px-6 py-4">
<div class="flex justify-end gap-1.5">
<div class="size-8 bg-accent-orange/10 rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-accent-orange text-lg fill-1 pixel-badge">local_fire_department</span>
</div>
<div class="size-8 bg-accent-yellow/10 rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-accent-yellow text-lg fill-1 pixel-badge">stars</span>
</div>
</div>
</td>
</tr>
<tr class="table-row-hover">
<td class="px-6 py-4 text-center font-black text-xl text-bronze">3</td>
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<div class="size-11 rounded-xl bg-cover bg-center shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBdc-uDdbqvK9bJ5GgWX9S5swsMBg4ylYYp1MBFGWb9WKBynt_4S7ZSS0fCBN_Dzd4frTihCpwLXUFgnEaB-o8voW03IFva7ArlkoYnXp7Us09f5oMbQSrwXx4EhIc3v4cWqfOpJRH9cT1VjBffuqKK4kz9CSgoezpHjVPGdiyg8dVlgmGymfs03pzYqq3p1I-FzpXDC2x8Jf58U71vnWQxGWJ3jM2UNIBTrEf6cgBQOAusXL8HBprKi13N5-IeuSrudt72udN-0knY");'></div>
<div>
<div class="flex items-center gap-2">
<span class="text-sm font-bold">The Grill House</span>
</div>
<span class="text-[11px] text-[#5e8d87] font-medium">Marcus Reed</span>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="flex-1 h-2 bg-gray-100 dark:bg-[#2a3535] rounded-full overflow-hidden">
<div class="h-full bg-accent-orange" style="width: 72%"></div>
</div>
<span class="text-xs font-bold text-accent-orange">72%</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<span class="text-sm font-bold">11,890</span>
</td>
<td class="px-6 py-4">
<div class="flex justify-end gap-1.5">
<div class="size-8 bg-accent-purple/10 rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-accent-purple text-lg fill-1 pixel-badge">shield</span>
</div>
</div>
</td>
</tr>
<tr class="table-row-hover">
<td class="px-6 py-4 text-center font-black text-xl text-gray-400">4</td>
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<div class="size-11 rounded-xl bg-[#f0f5f4] dark:bg-[#2a3535] flex items-center justify-center">
<span class="material-symbols-outlined text-[#5e8d87]">restaurant</span>
</div>
<div>
<div class="flex items-center gap-2">
<span class="text-sm font-bold">Zen Sushi</span>
</div>
<span class="text-[11px] text-[#5e8d87] font-medium">Yuki Sato</span>
</div>
</div>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="flex-1 h-2 bg-gray-100 dark:bg-[#2a3535] rounded-full overflow-hidden">
<div class="h-full bg-primary" style="width: 91%"></div>
</div>
<span class="text-xs font-bold text-primary">91%</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<span class="text-sm font-bold">10,200</span>
</td>
<td class="px-6 py-4">
<div class="flex justify-end gap-1.5">
<div class="size-8 bg-gray-100 dark:bg-[#2a3535] rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-gray-400 text-lg pixel-badge">token</span>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 bg-white dark:bg-surface-dark flex justify-center border-t border-border-light dark:border-border-dark">
<button class="text-sm font-bold text-primary hover:bg-primary/5 px-6 py-2 rounded-xl transition-all flex items-center gap-2">
                    Load More Rankings
                    <span class="material-symbols-outlined text-sm">expand_more</span>
</button>
</div>
</div>
</main>
<aside class="hidden xl:flex w-72 flex-col gap-6 shrink-0">
<div class="relative bg-white dark:bg-surface-dark rounded-2xl border-l-[6px] border-l-primary border-y border-r border-border-light dark:border-border-dark p-6 shadow-sm overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-10">
<span class="material-symbols-outlined text-6xl">map</span>
</div>
<div class="flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-primary text-xl fill-1">location_on</span>
<h3 class="text-[11px] font-black text-[#5e8d87] uppercase tracking-widest">Active Cluster</h3>
</div>
<h4 class="font-extrabold text-xl mb-6">Downtown Sector 4</h4>
<div class="space-y-4">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="size-1.5 rounded-full bg-primary"></span>
<span class="text-xs font-semibold text-[#5e8d87]">Participants</span>
</div>
<span class="text-sm font-extrabold">42 Total</span>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="size-1.5 rounded-full bg-accent-yellow"></span>
<span class="text-xs font-semibold text-[#5e8d87]">Grand Prize</span>
</div>
<span class="text-sm font-extrabold text-primary">+$2,500 Bonus</span>
</div>
</div>
<div class="mt-6 pt-6 border-t border-border-light dark:border-border-dark">
<div class="flex -space-x-3 mb-4">
<div class="size-8 rounded-full border-2 border-white dark:border-surface-dark bg-cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD0s4-Ei52E2YSgC2aV0s_4zS9ni4sauRrNq08bl2adxM5HJc6h6VLIOUO-Qfyu0TqRNMITueSbJTLje2fQIDGShezTXrN2B5scJlc1pxnwwtPn0ndwHH9Aonr1hcVkjlNwtZUobE7LgKm5yLxy5rsGm657e13DMo2K9frLqI42ufLgAS7SnIPdM9-6oTP9w3mq9yux3E3Wn1ScYgz8quoVpjaeU7OGI7D0VeD7Qk1nOCOU_xCGVSTwSRbNtVSMI0DzvhVOd6xk60NQ");'></div>
<div class="size-8 rounded-full border-2 border-white dark:border-surface-dark bg-cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBdc-uDdbqvK9bJ5GgWX9S5swsMBg4ylYYp1MBFGWb9WKBynt_4S7ZSS0fCBN_Dzd4frTihCpwLXUFgnEaB-o8voW03IFva7ArlkoYnXp7Us09f5oMbQSrwXx4EhIc3v4cWqfOpJRH9cT1VjBffuqKK4kz9CSgoezpHjVPGdiyg8dVlgmGymfs03pzYqq3p1I-FzpXDC2x8Jf58U71vnWQxGWJ3jM2UNIBTrEf6cgBQOAusXL8HBprKi13N5-IeuSrudt72udN-0knY");'></div>
<div class="size-8 rounded-full border-2 border-white dark:border-surface-dark bg-cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD0s4-Ei52E2YSgC2aV0s_4zS9ni4sauRrNq08bl2adxM5HJc6h6VLIOUO-Qfyu0TqRNMITueSbJTLje2fQIDGShezTXrN2B5scJlc1pxnwwtPn0ndwHH9Aonr1hcVkjlNwtZUobE7LgKm5yLxy5rsGm657e13DMo2K9frLqI42ufLgAS7SnIPdM9-6oTP9w3mq9yux3E3Wn1ScYgz8quoVpjaeU7OGI7D0VeD7Qk1nOCOU_xCGVSTwSRbNtVSMI0DzvhVOd6xk60NQ");'></div>
<div class="size-8 rounded-full border-2 border-white dark:border-surface-dark bg-gray-100 dark:bg-[#2a3535] flex items-center justify-center text-[10px] font-bold">+39</div>
</div>
<button class="w-full py-3 bg-primary/10 hover:bg-primary/20 text-primary text-xs font-black rounded-xl transition-all uppercase tracking-wider">
                    Cluster Intel
                </button>
</div>
</div>
<div class="bg-white dark:bg-surface-dark p-6 rounded-2xl border border-border-light dark:border-border-dark shadow-sm">
<h3 class="text-sm font-black mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-accent-purple fill-1">military_tech</span>
                Operational Hall
            </h3>
<div class="space-y-6">
<div class="flex items-start gap-3">
<div class="size-9 rounded-xl bg-accent-yellow/10 flex items-center justify-center text-accent-yellow shrink-0">
<span class="material-symbols-outlined text-xl fill-1 pixel-badge">trending_up</span>
</div>
<div>
<p class="text-xs font-black mb-0.5">Profit Spike King</p>
<p class="text-[11px] text-[#5e8d87]">Zen Sushi achieved +24% margin in one week.</p>
</div>
</div>
<div class="flex items-start gap-3">
<div class="size-9 rounded-xl bg-accent-purple/10 flex items-center justify-center text-accent-purple shrink-0">
<span class="material-symbols-outlined text-xl fill-1 pixel-badge">bolt</span>
</div>
<div>
<p class="text-xs font-black mb-0.5">Quest Master</p>
<p class="text-[11px] text-[#5e8d87]">Bistro 22 finished "Supply Chain Hero" in record time.</p>
</div>
</div>
</div>
</div>
<button class="flex items-center justify-between p-5 bg-[#101818] dark:bg-[#2a3535] rounded-2xl text-white hover:opacity-90 transition-opacity">
<div class="text-left">
<p class="text-xs font-bold opacity-70">Referral Program</p>
<p class="text-sm font-black">Invite UMKM</p>
</div>
<span class="material-symbols-outlined bg-white/10 p-2 rounded-lg">share</span>
</button>
</aside>
</div>
<div class="lg:hidden fixed bottom-6 right-6 z-50">
<button class="size-14 bg-primary rounded-full text-white shadow-2xl flex items-center justify-center ring-4 ring-white dark:ring-background-dark">
<span class="material-symbols-outlined text-2xl">menu</span>
</button>
</div>
</body>
</html>




