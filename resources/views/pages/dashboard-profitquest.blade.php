@extends('layouts.owner')

@section('title', 'Koopa | Owner Insight Dashboard')

@section('content')
<div class="space-y-10">
<section>
<div class="flex items-end justify-between mb-5 px-1">
<div>
<h2 class="text-xl font-bold tracking-tight text-text-main">Active Groups</h2>
<p class="text-sm text-text-muted">Owner-level decisions for price certainty</p>
</div>
<a class="text-xs font-bold text-primary-teal hover:underline flex items-center gap-1 uppercase tracking-wider" href="{{ route('owner.groups.index') }}">View All</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
@forelse ($active_groups as $group)
<div class="standard-card p-6 flex flex-col hover:border-primary-teal/40">
<div class="flex items-center justify-between mb-6">
<div class="size-10 flex items-center justify-center rounded-xl bg-primary-teal/10 text-primary-teal">
<span class="material-symbols-outlined text-[24px]">inventory</span>
</div>
<span class="px-2 py-0.5 bg-primary-teal/5 text-primary-teal text-[9px] font-bold uppercase tracking-wider rounded border border-primary-teal/10">{{ strtoupper($group->status) }}</span>
</div>
<h3 class="font-bold text-text-main mb-1">{{ $group->title }}</h3>
<p class="text-sm text-text-muted leading-relaxed mb-6">
Target {{ $group->target_volume }} {{ $group->unit }} - Current {{ $group->current_volume }} {{ $group->unit }}
</p>
<div class="mt-auto flex items-center justify-between">
<span class="text-[11px] font-bold text-primary-teal">{{ $group->dropPoint->name ?? 'No drop point' }}</span>
<a class="px-4 py-2 bg-primary-teal text-white rounded-lg text-xs font-bold shadow-sm hover:opacity-90 transition-opacity" href="{{ route('owner.groups.show', $group) }}">View</a>
</div>
</div>
@empty
<div class="standard-card p-6 text-sm text-text-muted">No active groups yet.</div>
@endforelse
</div>
</section>

<section>
<div class="flex items-end justify-between mb-5 px-1">
<div>
<h2 class="text-xl font-bold tracking-tight text-text-main">Owner Metrics</h2>
<p class="text-sm text-text-muted">Real-time health of volume, escrow, and delivery</p>
</div>
</div>
<div class="bg-alert-orange/5 border border-alert-orange/20 rounded-card p-6 flex items-center justify-between shadow-soft-premium">
<div class="flex items-center gap-5">
<div class="flex size-12 items-center justify-center rounded-full bg-alert-orange text-white shadow-md shadow-alert-orange/20">
<span class="material-symbols-outlined text-2xl font-bold">query_stats</span>
</div>
<div>
<h4 class="font-bold text-alert-orange uppercase text-[10px] tracking-widest mb-0.5">Group Volume</h4>
<p class="text-sm text-text-main font-medium">Total volume this cycle: {{ number_format($total_volume) }} units.</p>
</div>
</div>
<div class="text-right">
<p class="text-xs font-bold uppercase text-text-muted">Escrow Held</p>
<p class="text-lg font-bold text-text-main">${{ number_format($escrow_held, 2) }}</p>
</div>
</div>
</section>

<section>
<div class="flex items-end justify-between mb-5 px-1">
<div>
<h2 class="text-xl font-bold tracking-tight text-text-main">Group Impact</h2>
<p class="text-sm text-text-muted">Core performance indicators (Last 7 Days)</p>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="standard-card p-6">
<p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-4">Order Volume</p>
<div class="flex items-end justify-between">
<h4 class="text-3xl font-extrabold text-text-main">${{ number_format($order_volume, 2) }}</h4>
<div class="flex items-center text-primary-teal text-[10px] font-bold bg-primary-teal/10 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>
Active
</div>
</div>
<div class="mt-5 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
<div class="h-full bg-primary-teal" style="width: 72%;"></div>
</div>
</div>
<div class="standard-card p-6">
<p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-4">Price Certainty</p>
<div class="flex items-end justify-between">
<h4 class="text-3xl font-extrabold text-text-main">{{ $price_certainty }}%</h4>
<div class="flex items-center text-text-muted text-[10px] font-bold bg-gray-100 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-1">verified</span>
Stable
</div>
</div>
<div class="mt-5 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
<div class="h-full bg-primary-teal" style="width: {{ $price_certainty }}%;"></div>
</div>
</div>
<div class="standard-card p-6">
<p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-4">On-time Delivery</p>
<div class="flex items-end justify-between">
<h4 class="text-3xl font-extrabold text-text-main">{{ $on_time_delivery }}%</h4>
<div class="flex items-center text-primary-teal text-[10px] font-bold bg-primary-teal/10 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>
Healthy
</div>
</div>
<div class="mt-5 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
<div class="h-full bg-primary-teal" style="width: {{ $on_time_delivery }}%;"></div>
</div>
</div>
<div class="standard-card p-6">
<p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-4">Escrow Held</p>
<div class="flex items-end justify-between">
<h4 class="text-3xl font-extrabold text-text-main">${{ number_format($escrow_held, 2) }}</h4>
<div class="flex items-center text-brand-purple text-[10px] font-bold bg-brand-purple/10 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-1">lock</span>
Held
</div>
</div>
<div class="mt-5 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
<div class="h-full bg-brand-purple" style="width: 62%;"></div>
</div>
</div>
</div>
</section>
</div>
@endsection
