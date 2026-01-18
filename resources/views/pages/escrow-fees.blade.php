@extends('layouts.owner')

@section('title', 'Koopa | Escrow & Fees')

@section('content')
<div class="space-y-8">
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
<div class="bg-bg-main border border-border-color rounded-card p-4">
<div class="flex items-center justify-between">
<p class="text-sm font-semibold">{{ $item['group'] }}</p>
<span class="text-xs font-bold text-text-muted">{{ $item['paid_percent'] }}% paid</span>
</div>
<p class="text-2xl font-bold mt-3">{{ $item['amount'] }}</p>
<p class="text-xs text-text-muted">Fee: {{ $item['fee_percent'] }}%</p>
</div>
@endforeach
</div>
</section>
</div>
@endsection
