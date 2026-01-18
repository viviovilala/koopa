<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | Secure Escrow Payment</title>
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
                    "koopa-gold": "#f5b54c",
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
<header class="bg-white border-b border-koopa-border">
<div class="max-w-[1200px] mx-auto px-6 py-4 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="h-10 w-10 rounded-xl bg-koopa-teal text-white flex items-center justify-center font-bold">K</div>
<div class="font-bold">Koopa.</div>
<nav class="hidden md:flex items-center gap-6 ml-6 text-sm text-koopa-muted">
<a class="hover:text-koopa-teal" href="/marketplace">Marketplace</a>
<a class="hover:text-koopa-teal" href="/groups">Dashboard</a>
<a class="hover:text-koopa-teal" href="/invoices">Invoices</a>
<a class="hover:text-koopa-teal" href="/settings">Support</a>
</nav>
</div>
<div class="flex items-center gap-3 text-sm">
<span class="text-koopa-muted">Baker's Delight Cafe</span>
<div class="h-8 w-8 rounded-full bg-koopa-teal text-white flex items-center justify-center">BD</div>
</div>
</div>
</header>

<div class="max-w-[1200px] mx-auto px-6 py-8 space-y-6">
<a class="text-sm text-koopa-muted hover:text-koopa-teal inline-flex items-center gap-2" href="/orders">
<span class="material-symbols-outlined text-base">arrow_back</span>
Back to Group Details
</a>
<div class="flex items-start justify-between">
<div>
<h1 class="text-2xl font-bold">Secure Escrow Payment</h1>
<p class="text-sm text-koopa-muted">Order #{{ $payment->order_id }} - Bulk Purchase</p>
</div>
<div class="bg-amber-100 text-amber-700 px-4 py-2 rounded-full text-xs font-semibold">
Payment ends in: 04:22:15
</div>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="h-12 w-12 rounded-xl bg-koopa-teal text-white flex items-center justify-center">
<span class="material-symbols-outlined">security</span>
</div>
<div>
<p class="font-semibold">Protected by Koopa Escrow</p>
<p class="text-sm text-koopa-muted">Funds released after delivery confirmation.</p>
</div>
</div>
<button class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold">Protection Details</button>
</div>

<div class="grid grid-cols-1 lg:grid-cols-[1.2fr_0.8fr] gap-6">
<div class="space-y-6">
<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<h3 class="font-semibold mb-4">Collective Purchase Status</h3>
<div class="space-y-4 text-sm">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-emerald-500">check_circle</span>
<div>
<p class="font-semibold">Group Buy Closed</p>
<p class="text-koopa-muted">Target 2,000kg - Final 2,450kg</p>
</div>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-emerald-500">check_circle</span>
<div>
<p class="font-semibold">Tier 3 Unlocked</p>
<p class="text-koopa-muted">Wholesale discount applied: 12.5%</p>
</div>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-amber-500">radio_button_checked</span>
<div>
<p class="font-semibold">Payment Required</p>
<p class="text-koopa-muted">Awaiting secure deposit to escrow</p>
</div>
</div>
</div>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<h3 class="font-semibold mb-4">Select Payment Method</h3>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
<button class="border-2 border-koopa-teal rounded-xl p-4 text-left">
<div class="flex items-center justify-between">
<span class="material-symbols-outlined text-koopa-teal">account_balance</span>
<span class="material-symbols-outlined text-koopa-teal text-sm">check_circle</span>
</div>
<p class="mt-3 font-semibold">Virtual Account</p>
<p class="text-xs text-koopa-muted">Fast verification</p>
</button>
<button class="border border-koopa-border rounded-xl p-4 text-left">
<span class="material-symbols-outlined text-koopa-muted">qr_code_2</span>
<p class="mt-3 font-semibold">E-Wallet / QRIS</p>
<p class="text-xs text-koopa-muted">OVO, DANA, QRIS</p>
</button>
<button class="border border-koopa-border rounded-xl p-4 text-left">
<span class="material-symbols-outlined text-koopa-muted">account_balance_wallet</span>
<p class="mt-3 font-semibold">Bank Transfer</p>
<p class="text-xs text-koopa-muted">Manual upload</p>
</button>
</div>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<div class="flex items-center justify-between mb-4">
<h3 class="font-semibold">Invoice Breakdown</h3>
<button class="text-xs font-semibold text-koopa-teal">Download PDF</button>
</div>
<div class="text-sm text-koopa-muted">
<div class="flex items-center justify-between py-2 border-b border-koopa-border">
<span>Premium Wheat Flour</span>
<span>$250.00</span>
</div>
<div class="flex items-center justify-between py-2">
<span>Logistics &amp; Handling</span>
<span>$15.00</span>
</div>
</div>
</div>
</div>

<aside class="space-y-6">
<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<h3 class="font-semibold mb-4">Payment Summary</h3>
<div class="space-y-2 text-sm text-koopa-muted">
<div class="flex items-center justify-between"><span>Subtotal</span><span>$265.00</span></div>
<div class="flex items-center justify-between"><span>Group Discount</span><span class="text-emerald-600">-$45.00</span></div>
<div class="flex items-center justify-between"><span>Service Fee</span><span>$2.50</span></div>
<div class="flex items-center justify-between"><span>Platform Tax (2%)</span><span>$4.45</span></div>
</div>
<div class="mt-4 border-t border-koopa-border pt-4">
<p class="text-xs text-koopa-muted uppercase tracking-widest">Total to Pay</p>
<p class="text-2xl font-bold">${{ number_format($payment->amount, 2) }}</p>
</div>
<button class="mt-4 w-full bg-koopa-teal text-white py-3 rounded-xl font-semibold">Confirm &amp; Pay Securely</button>
</div>

<div class="bg-gradient-to-br from-teal-600 to-blue-600 text-white rounded-2xl p-6 shadow-card">
<div class="flex items-center gap-2 text-xs uppercase tracking-widest">
<span class="material-symbols-outlined text-base">verified_user</span>
Koopa Member Benefit
</div>
<p class="mt-3 text-lg font-semibold">Your business saved $45.00 on this order.</p>
<p class="text-xs mt-4 opacity-80">PCI-DSS compliant processing with escrow holding.</p>
</div>
</aside>
</div>
</div>
</body>
</html>
