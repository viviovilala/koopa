<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Koopa Bulk | Create Group Buy</title>
<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@400;500;600&display=swap" rel="stylesheet"/>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    "koopa-teal": "#10b981",
                    "koopa-teal-dark": "#0f766e",
                    "koopa-surface": "#f7fbf9",
                    "koopa-border": "#e1ece9",
                    "koopa-text": "#1f2933",
                    "koopa-muted": "#6b7c85",
                    "koopa-green": "#16a34a",
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
<div class="font-bold">Koopa Bulk</div>
<nav class="hidden md:flex items-center gap-6 ml-6 text-sm text-koopa-muted">
<a class="hover:text-koopa-teal" href="/marketplace">Catalog</a>
<a class="hover:text-koopa-teal" href="/groups">Active Groups</a>
<a class="hover:text-koopa-teal" href="/orders">Order History</a>
</nav>
</div>
<div class="flex items-center gap-3">
<div class="hidden md:flex items-center gap-2 bg-white border border-koopa-border rounded-full px-4 py-2 text-sm">
<span class="material-symbols-outlined text-koopa-muted text-base">paid</span>
$12,450.00
</div>
<div class="h-9 w-9 rounded-full bg-koopa-teal text-white flex items-center justify-center">BS</div>
</div>
</div>
</header>

<form class="max-w-[1200px] mx-auto px-6 py-8 grid grid-cols-1 lg:grid-cols-[240px_1fr_320px] gap-6" method="POST" action="{{ route('groups.store') }}">
@csrf
<aside class="space-y-6">
<div>
<h1 class="text-xl font-bold">Create Group Buy</h1>
<p class="text-xs text-koopa-muted">Facilitator Portal</p>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-4 shadow-card">
<div class="flex items-start gap-3">
<div class="h-7 w-7 rounded-full bg-koopa-green text-white flex items-center justify-center text-xs font-bold">1</div>
<div>
<p class="text-sm font-semibold text-koopa-green">Product Catalog</p>
<p class="text-xs text-koopa-muted">Pick raw materials</p>
</div>
</div>
<div class="mt-4 flex items-start gap-3 text-koopa-muted">
<div class="h-7 w-7 rounded-full bg-koopa-border text-white flex items-center justify-center text-xs font-bold">2</div>
<div>
<p class="text-sm font-semibold">Campaign Details</p>
<p class="text-xs">Target &amp; deadlines</p>
</div>
</div>
<div class="mt-4 flex items-start gap-3 text-koopa-muted">
<div class="h-7 w-7 rounded-full bg-koopa-border text-white flex items-center justify-center text-xs font-bold">3</div>
<div>
<p class="text-sm font-semibold">Logistics Setup</p>
<p class="text-xs">Drop point &amp; pickup</p>
</div>
</div>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-4 text-xs text-koopa-muted shadow-card">
<div class="flex items-center gap-2 text-koopa-green font-semibold">
<span class="material-symbols-outlined text-base">verified</span>
Leader Safety
</div>
<p class="mt-2">Orders process only if target is met. You are not liable for unsold volume.</p>
</div>
</aside>

<main class="space-y-6">
<div class="bg-white border border-koopa-border rounded-xl p-5 shadow-card">
<div class="flex items-center justify-between mb-4">
<h2 class="text-base font-semibold">Select Item for Group Buy</h2>
<div class="relative w-full max-w-md">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-koopa-muted">search</span>
<input class="w-full pl-12 pr-4 py-2.5 rounded-full border border-koopa-border bg-koopa-surface text-sm" placeholder="Search supplier catalog (e.g. Flour, Sugar, Oil)"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
@foreach ($products as $product)
<label class="border border-koopa-border rounded-xl p-4 shadow-card cursor-pointer relative transition-all hover:shadow-lg">
<input class="absolute top-4 right-4 peer sr-only" type="radio" name="product_id" value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'checked' : '' }}/>
<span class="absolute top-4 right-4 h-6 w-6 rounded-full border border-koopa-border bg-white flex items-center justify-center text-xs text-white peer-checked:bg-koopa-green peer-checked:border-koopa-green">
<span class="material-symbols-outlined text-[14px] leading-none">check</span>
</span>
<div class="border border-transparent peer-checked:border-koopa-green peer-checked:ring-2 peer-checked:ring-koopa-green/20 rounded-xl">
@php($productImage = $product->image_url ?: 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=80')
<div class="h-28 rounded-lg bg-cover bg-center" style="background-image: url('{{ $productImage }}');"></div>
<div class="mt-4">
<p class="text-xs uppercase tracking-widest text-koopa-green">Premium grade</p>
<p class="font-semibold">{{ $product->name }}</p>
<div class="mt-2 flex items-center justify-between text-sm text-koopa-muted">
<span>Wholesale Price</span>
<span class="font-semibold text-koopa-text">${{ number_format(14.20, 2) }}/{{ $product->unit }}</span>
</div>
<div class="mt-1 flex items-center justify-between text-sm text-koopa-muted">
<span>Min. Group</span>
<span class="font-semibold">{{ $product->moq }} {{ $product->unit }}</span>
</div>
</div>
</div>
</label>
@endforeach
@if ($products->isEmpty())
<div class="text-sm text-koopa-muted">No products yet. Create listings in supplier portal.</div>
@endif
</div>
</div>

<div class="bg-white border border-koopa-border rounded-xl p-5 shadow-card">
<div class="flex items-center gap-2 text-sm font-semibold mb-4">
<span class="material-symbols-outlined text-koopa-green">settings</span>
Campaign Parameters
</div>
<div class="flex items-center justify-between text-xs uppercase tracking-widest text-koopa-muted mb-3">
<span>Target Campaign Volume</span>
<span class="text-koopa-green font-semibold" id="targetVolumeLabel">{{ old('target_volume', 1200) }} kg</span>
</div>
<input class="w-full accent-emerald-500" id="targetVolumeRange" type="range" min="500" max="5000" value="{{ old('target_volume', 1200) }}" step="50"/>
<div class="flex justify-between text-xs text-koopa-muted mt-2">
<span>500kg (MOQ)</span>
<span>5,000kg (MAX)</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Campaign Title</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="title" value="{{ old('title') }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Target Volume (kg)</label>
<input id="targetVolumeInput" class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="target_volume" type="number" min="0" value="{{ old('target_volume', 1200) }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Leader</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="leader_id">
<option value="">Select leader</option>
@foreach ($leaders as $leader)
<option value="{{ $leader->id }}" {{ old('leader_id') == $leader->id ? 'selected' : '' }}>
{{ $leader->display_name ?? $leader->name }}
</option>
@endforeach
</select>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Closing Date</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="cut_off_at" type="datetime-local" value="{{ old('cut_off_at') }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Unit</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="unit" value="{{ old('unit', 'kg') }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Currency</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="currency" value="{{ old('currency', 'USD') }}"/>
</div>
</div>
</div>

<div class="bg-white border border-koopa-border rounded-xl p-5">
<div class="flex items-center gap-2 text-sm font-semibold mb-4">
<span class="material-symbols-outlined text-koopa-green">place</span>
Drop Point &amp; Logistics
</div>
<div class="h-48 rounded-xl bg-koopa-surface border border-koopa-border flex items-center justify-center text-xs text-koopa-muted">
Drop Point Map Placeholder
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Drop Point</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="drop_point_id">
<option value="">Select drop point</option>
@foreach ($dropPoints as $dropPoint)
<option value="{{ $dropPoint->id }}" {{ old('drop_point_id') == $dropPoint->id ? 'selected' : '' }}>
{{ $dropPoint->name }}
</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Pickup Instructions</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" placeholder="Available Tue-Thu 2pm-6pm. Ring bell at bay 4."/>
</div>
</div>
</div>

<div class="flex items-center gap-4">
<button class="flex-1 bg-koopa-green text-white py-3 rounded-xl font-semibold shadow-card" type="submit">Launch Group Buy</button>
<button class="px-6 py-3 rounded-xl border border-koopa-border font-semibold text-koopa-text" type="button">Save Draft</button>
</div>

<input type="hidden" name="status" value="open"/>
<input type="hidden" name="current_volume" value="{{ old('current_volume', 0) }}"/>
</main>

<aside class="space-y-6">
<div class="bg-white border border-koopa-border rounded-xl p-5 shadow-card">
<div class="flex items-center gap-2 text-xs font-semibold text-koopa-green uppercase">
<span class="material-symbols-outlined text-base">insights</span>
Live Summary
</div>
<div class="mt-4 space-y-3 text-sm">
<div class="flex items-center justify-between text-koopa-muted">
<span>Target Volume</span>
<span class="font-semibold text-koopa-text" id="summaryTarget">1,200 kg</span>
</div>
<div class="flex items-center justify-between text-koopa-muted">
<span>Market Price</span>
<span class="line-through">$18.50/kg</span>
</div>
<div class="flex items-center justify-between text-koopa-muted">
<span>Group Price</span>
<span class="font-semibold text-koopa-green">$14.20/kg</span>
</div>
<div class="mt-3 bg-emerald-50 border border-emerald-100 rounded-xl p-4">
<p class="text-xs uppercase tracking-widest text-emerald-600 font-semibold">Potential Total Savings</p>
<p class="text-2xl font-bold text-emerald-700" id="summarySavings">$5,160.00</p>
<p class="text-xs text-emerald-600">Estimates for full target volume</p>
</div>
<div class="mt-4 text-xs text-koopa-muted">
Network Visibility
<div class="h-2 bg-koopa-border rounded-full mt-2 overflow-hidden">
<div class="h-full bg-koopa-green" style="width: 55%"></div>
</div>
<p class="mt-2">42 nearby SMEs</p>
</div>
</div>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-5 shadow-card">
<div class="flex items-center justify-between">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Visibility Settings</p>
<p class="text-sm font-semibold">Public Launch</p>
<p class="text-xs text-koopa-muted">Visible to local network</p>
</div>
<div class="h-6 w-11 bg-koopa-green rounded-full relative">
<span class="h-4 w-4 bg-white rounded-full absolute right-1 top-1"></span>
</div>
</div>
</div>
<div class="bg-white border border-koopa-border rounded-xl p-5 text-xs text-koopa-muted shadow-card">
<div class="flex items-center gap-2 text-koopa-green font-semibold">
<span class="material-symbols-outlined text-base">verified</span>
Verified Koopa Group Leaders get priority logistics support.
</div>
</div>
</aside>
</form>
<script>
    const range = document.getElementById('targetVolumeRange');
    const input = document.getElementById('targetVolumeInput');
    const label = document.getElementById('targetVolumeLabel');
    const summaryTarget = document.getElementById('summaryTarget');
    const summarySavings = document.getElementById('summarySavings');
    const marketPrice = 18.5;
    const groupPrice = 14.2;

    const updateSummary = (value) => {
        const qty = Number(value || 0);
        label.textContent = `${qty.toLocaleString()} kg`;
        summaryTarget.textContent = `${qty.toLocaleString()} kg`;
        const savings = (marketPrice - groupPrice) * qty;
        summarySavings.textContent = `$${savings.toFixed(2)}`;
    };

    range.addEventListener('input', () => {
        input.value = range.value;
        updateSummary(range.value);
    });

    input.addEventListener('input', () => {
        range.value = input.value || 0;
        updateSummary(input.value);
    });

    updateSummary(input.value);
</script>
</body>
</html>
