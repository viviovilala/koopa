@extends('layouts.owner')

@section('title', 'Koopa | Price Ladder')

@section('content')
<div class="space-y-8">
<section class="standard-card p-6">
<div class="flex items-start justify-between">
<div>
<h1 class="text-2xl font-bold">Price Ladder</h1>
<p class="text-sm text-text-muted">Tiered pricing visibility across active suppliers.</p>
</div>
<span class="text-[10px] font-bold uppercase tracking-widest text-text-muted">Owner View</span>
</div>
<div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
@foreach ($ladders as $ladder)
<div class="bg-bg-main border border-border-color rounded-card p-4">
<p class="text-sm font-semibold">{{ $ladder['product'] }}</p>
<p class="text-xs text-text-muted">{{ $ladder['supplier'] }} • MOQ {{ $ladder['moq'] }}</p>
<div class="mt-3 space-y-2 text-xs text-text-muted">
@foreach ($ladder['tiers'] as $tier)
<div class="flex items-center justify-between">
<span>≥ {{ $tier['threshold'] }}</span>
<span class="font-semibold text-text-main">{{ $tier['price'] }}</span>
</div>
@endforeach
</div>
</div>
@endforeach
</div>
</section>
</div>
@endsection
