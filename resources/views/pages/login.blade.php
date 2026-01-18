<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa | Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500;600&display=swap" rel="stylesheet"/>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    "koopa-teal": "#0f7b83",
                    "koopa-teal-dark": "#0a5c62",
                    "koopa-surface": "#f5f9f8",
                    "koopa-border": "#d9e7e8",
                    "koopa-text": "#1f2933",
                    "koopa-muted": "#6b7c85",
                    "koopa-accent": "#f6b73c",
                },
                fontFamily: {
                    sans: ["Inter", "sans-serif"],
                },
                boxShadow: {
                    card: "0 8px 24px rgba(15, 123, 131, 0.08)",
                },
                borderRadius: {
                    xl: "20px",
                }
            }
        }
    }
</script>
</head>
<body class="bg-koopa-surface text-koopa-text font-sans min-h-screen flex items-center justify-center p-6">
<div class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="bg-white border border-koopa-border rounded-2xl p-8 shadow-card">
<div class="flex items-center gap-3 mb-6">
<div class="h-10 w-10 rounded-xl bg-koopa-teal text-white flex items-center justify-center font-bold">K</div>
<div>
<p class="text-lg font-bold">Koopa</p>
<p class="text-[10px] uppercase tracking-widest text-koopa-muted">Collective Purchase</p>
</div>
</div>
<h1 class="text-2xl font-bold mb-2">Welcome back</h1>
<p class="text-sm text-koopa-muted mb-6">Sign in to manage group orders, payments, and drop points.</p>
@if ($errors->any())
<div class="mb-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
{{ $errors->first() }}
</div>
@endif
<form class="space-y-4" method="POST" action="{{ route('login.submit') }}">
@csrf
<div>
<label class="text-xs font-semibold text-koopa-muted uppercase tracking-widest">Email</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="email" placeholder="you@umkm.id" type="email" value="{{ old('email') }}" required/>
</div>
<div>
<label class="text-xs font-semibold text-koopa-muted uppercase tracking-widest">Password</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="password" placeholder="********" type="password" required/>
</div>
<div class="flex items-center justify-between text-sm">
<label class="flex items-center gap-2 text-koopa-muted">
<input class="rounded border-koopa-border" name="remember" type="checkbox"/>
Remember me
</label>
<a class="text-koopa-teal font-semibold" href="#">Forgot password?</a>
</div>
<button class="w-full bg-koopa-teal text-white py-3 rounded-xl font-semibold">Sign In</button>
</form>
</div>
<div class="bg-white border border-koopa-border rounded-2xl p-8 shadow-card">
<p class="text-xs font-semibold text-koopa-muted uppercase tracking-widest mb-4">Choose your portal</p>
<div class="space-y-3">
<a class="w-full border border-koopa-border rounded-xl px-4 py-3 flex items-center justify-between hover:bg-koopa-surface" href="{{ route('dashboard.umkm') }}">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-koopa-teal">storefront</span>
<div>
<p class="font-semibold">UMKM Buyer</p>
<p class="text-xs text-koopa-muted">Join group buys and pay escrow.</p>
</div>
</div>
<span class="material-symbols-outlined text-koopa-muted">arrow_forward</span>
</a>
<a class="w-full border border-koopa-border rounded-xl px-4 py-3 flex items-center justify-between hover:bg-koopa-surface" href="{{ route('supplier.products.index') }}">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-koopa-teal">inventory_2</span>
<div>
<p class="font-semibold">Supplier Portal</p>
<p class="text-xs text-koopa-muted">Manage listings and tiers.</p>
</div>
</div>
<span class="material-symbols-outlined text-koopa-muted">arrow_forward</span>
</a>
<a class="w-full border border-koopa-border rounded-xl px-4 py-3 flex items-center justify-between hover:bg-koopa-surface" href="{{ route('dashboard.owner') }}">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-koopa-teal">monitoring</span>
<div>
<p class="font-semibold">Owner Analytics</p>
<p class="text-xs text-koopa-muted">Track savings and performance.</p>
</div>
</div>
<span class="material-symbols-outlined text-koopa-muted">arrow_forward</span>
</a>
</div>
<div class="mt-6 text-xs text-koopa-muted">
<p class="font-semibold text-koopa-text">Demo accounts (seeded)</p>
<p>UMKM: umkm1@koopa.test / password</p>
<p>Supplier: supplier@koopa.test / password</p>
<p>Owner: owner@koopa.test / password</p>
</div>
</div>
</div>
</body>
</html>
