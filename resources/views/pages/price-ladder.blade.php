@extends('layouts.koopa')

@section('title', 'Koopa | Price Ladder')

@section('content')
<div class="flex min-h-screen">
@include('partials.koopa-sidebar-owner')
<main class="flex-1 ml-64 min-h-screen">
@include('partials.koopa-header-owner')
<div class="p-8 max-w-[1200px] mx-auto space-y-8">
<section class="standard-card p-6">
<div class="flex items-start justify-between">
<div>
<h1 class="text-2xl font-bold">Price Ladder Overview</h1>
<p class="text-sm text-text-muted">Supplier-set tiers. UMKM cannot negotiate. Prices drop only by volume.</p>
</div>
<span class="text-[10px] font-bold uppercase tracking-widest text-text-muted">Rule-Based</span>
</div>
<div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
@foreach ($ladders as $ladder)
<div class="standard-card p-5">
<p class="text-[10px] font-bold uppercase tracking-widest text-text-muted">{{ $ladder['product'] }}</p>
<h3 class="text-lg font-bold mt-2">{{ $ladder['supplier'] }}</h3>
<p class="text-sm text-text-muted mt-1">MOQ: {{ $ladder['moq'] }} kg</p>
<div class="mt-4 space-y-2">
@foreach ($ladder['tiers'] as $tier)
<div class="flex items-center justify-between text-sm">
<span>{{ $tier['threshold'] }} kg+</span>
<span class="font-bold">{{ $tier['price'] }}</span>
</div>
@endforeach
</div>
</div>
@endforeach
</div>
</section>
<section class="standard-card p-6">
<h2 class="text-lg font-bold mb-4">Price Band & Fairness</h2>
<ul class="text-sm text-text-muted space-y-2">
<li>Koopa locks final price at cut-off.</li>
<li>All members pay the same tier price.</li>
<li>No discount, no negotiation, no side deals.</li>
</ul>
</section>
</div>
</main>
</div>
@endsection
