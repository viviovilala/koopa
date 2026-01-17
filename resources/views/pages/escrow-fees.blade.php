@extends('layouts.koopa')

@section('title', 'Koopa | Escrow & Fees')

@section('content')
<div class="flex min-h-screen">
@include('partials.koopa-sidebar-owner')
<main class="flex-1 ml-64 min-h-screen">
@include('partials.koopa-header-owner')
<div class="p-8 max-w-[1200px] mx-auto space-y-8">
<section class="standard-card p-6">
<div class="flex items-start justify-between">
<div>
<h1 class="text-2xl font-bold">Escrow & Fees</h1>
<p class="text-sm text-text-muted">Funds are held until delivery confirmed. Fee applied on release.</p>
</div>
<span class="text-[10px] font-bold uppercase tracking-widest text-text-muted">Non-Negotiable</span>
</div>
<div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
@foreach ($escrow as $item)
<div class="standard-card p-5">
<p class="text-[10px] font-bold uppercase tracking-widest text-text-muted">{{ $item['group'] }}</p>
<h3 class="text-lg font-bold mt-2">{{ $item['amount'] }}</h3>
<p class="text-sm text-text-muted mt-1">Paid: {{ $item['paid_percent'] }}%</p>
<p class="text-sm text-text-muted">Fee: {{ $item['fee_percent'] }}%</p>
<div class="mt-4 h-2 w-full bg-gray-100 rounded-full overflow-hidden">
<div class="h-full bg-brand-purple" style="width: {{ $item['paid_percent'] }}%;"></div>
</div>
</div>
@endforeach
</div>
</section>
<section class="standard-card p-6">
<h2 class="text-lg font-bold mb-4">Rules</h2>
<ul class="text-sm text-text-muted space-y-2">
<li>All members pay upfront into escrow.</li>
<li>Escrow releases only after confirmations.</li>
<li>Koopa fee is deducted on release (1–3%).</li>
</ul>
</section>
</div>
</main>
</div>
@endsection
