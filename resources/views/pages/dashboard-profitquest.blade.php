@extends('layouts.koopa')

@section('title', 'Koopa | Owner Insight Dashboard')

@section('content')
<div class="flex min-h-screen">
@include('partials.koopa-sidebar-owner')
<main class="flex-1 ml-64 min-h-screen">
@include('partials.koopa-header-owner')
<div class="p-8 max-w-[1280px] mx-auto space-y-10">
<section>
<div class="flex items-end justify-between mb-5 px-1">
<div>
<h2 class="text-xl font-bold tracking-tight text-text-main">Active Groups</h2>
<p class="text-sm text-text-muted">Owner-level decisions for price certainty</p>
</div>
<button class="text-xs font-bold text-primary-teal hover:underline flex items-center gap-1 uppercase tracking-wider">View All</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="standard-card p-6 flex flex-col hover:border-primary-teal/40">
<div class="flex items-center justify-between mb-6">
<div class="size-10 flex items-center justify-center rounded-xl bg-primary-teal/10 text-primary-teal">
<span class="material-symbols-outlined text-[24px]">inventory</span>
</div>
<span class="px-2 py-0.5 bg-primary-teal/5 text-primary-teal text-[9px] font-bold uppercase tracking-wider rounded border border-primary-teal/10">Group</span>
</div>
<h3 class="font-bold text-text-main mb-1">Open New Group</h3>
<p class="text-sm text-text-muted leading-relaxed mb-6">Launch a group for chicken breast 20kg with Tier 3 target.</p>
<div class="mt-auto flex items-center justify-between">
<span class="text-[11px] font-bold text-primary-teal">Target 3 tiers</span>
<button class="px-4 py-2 bg-primary-teal text-white rounded-lg text-xs font-bold shadow-sm hover:opacity-90 transition-opacity">Open Group</button>
</div>
</div>
<div class="standard-card p-6 flex flex-col hover:border-brand-purple/40">
<div class="flex items-center justify-between mb-6">
<div class="size-10 flex items-center justify-center rounded-xl bg-brand-purple/10 text-brand-purple">
<span class="material-symbols-outlined text-[24px]">restaurant</span>
</div>
<span class="px-2 py-0.5 bg-brand-purple/5 text-brand-purple text-[9px] font-bold uppercase tracking-wider rounded border border-brand-purple/10">Price Ladder</span>
</div>
<h3 class="font-bold text-text-main mb-1">Review Price Ladder</h3>
<p class="text-sm text-text-muted leading-relaxed mb-6">Cooking oil group is 3 units away from Tier 2 price.</p>
<div class="mt-auto flex items-center justify-between">
<span class="text-[11px] font-bold text-brand-purple">3 units remaining</span>
<button class="px-4 py-2 bg-brand-purple text-white rounded-lg text-xs font-bold shadow-sm hover:opacity-90 transition-opacity">View Ladder</button>
</div>
</div>
<div class="standard-card p-6 flex flex-col hover:border-alert-orange/40">
<div class="flex items-center justify-between mb-6">
<div class="size-10 flex items-center justify-center rounded-xl bg-alert-orange/10 text-alert-orange">
<span class="material-symbols-outlined text-[24px]">timer</span>
</div>
<span class="px-2 py-0.5 bg-alert-orange/5 text-alert-orange text-[9px] font-bold uppercase tracking-wider rounded border border-alert-orange/10">Cut-off</span>
</div>
<h3 class="font-bold text-text-main mb-1">Cut-off Monitor</h3>
<p class="text-sm text-text-muted leading-relaxed mb-6">{{ $owner['near_cutoff'] }} groups are within 4 hours of lock.</p>
<div class="mt-auto flex items-center justify-between">
<span class="text-[11px] font-bold text-alert-orange">Priority queue</span>
<button class="px-4 py-2 bg-alert-orange text-white rounded-lg text-xs font-bold shadow-sm hover:opacity-90 transition-opacity">Review Now</button>
</div>
</div>
</div>
</section>
<section>
<div class="flex items-end justify-between mb-5 px-1">
<div>
<h2 class="text-xl font-bold tracking-tight text-text-main">Owner Insights</h2>
<p class="text-sm text-text-muted">Alerts that affect price &amp; supply certainty</p>
</div>
</div>
<div class="bg-alert-orange/5 border border-alert-orange/20 rounded-card p-6 flex items-center justify-between shadow-soft-premium">
<div class="flex items-center gap-5">
<div class="flex size-12 items-center justify-center rounded-full bg-alert-orange text-white shadow-md shadow-alert-orange/20">
<span class="material-symbols-outlined text-2xl font-bold">priority_high</span>
</div>
<div>
<h4 class="font-bold text-alert-orange uppercase text-[10px] tracking-widest mb-0.5">Price Certainty Alert</h4>
<p class="text-sm text-text-main font-medium">Supplier B reduced quota. Lock volume today to secure Tier 2 price.</p>
</div>
</div>
<button class="px-6 py-2.5 bg-white border border-alert-orange text-alert-orange rounded-xl text-xs font-bold hover:bg-alert-orange hover:text-white transition-all">Lock Volume</button>
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
<p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-4">Savings vs Single</p>
<div class="flex items-end justify-between">
<h4 class="text-3xl font-extrabold text-text-main">{{ $owner['savings_vs_single'] }}%</h4>
<div class="flex items-center text-primary-teal text-[10px] font-bold bg-primary-teal/10 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>
                                +{{ $owner['savings_delta'] }}%
                            </div>
</div>
<div class="mt-5 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
<div class="h-full bg-primary-teal" style="width: {{ $owner['savings_vs_single'] }}%;"></div>
</div>
</div>
<div class="standard-card p-6">
<p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-4">Group Volume</p>
<div class="flex items-end justify-between">
<h4 class="text-3xl font-extrabold text-text-main">{{ $owner['group_volume_value'] }}</h4>
<div class="flex items-center text-text-muted text-[10px] font-bold bg-gray-100 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-1">remove</span>
                                +{{ $owner['group_volume_delta'] }}% this week
                            </div>
</div>
<div class="mt-5 flex gap-1 h-5 items-end">
<div class="flex-1 bg-primary-teal/20 rounded-t" style="height: 30%;"></div>
<div class="flex-1 bg-primary-teal/20 rounded-t" style="height: 50%;"></div>
<div class="flex-1 bg-primary-teal/20 rounded-t" style="height: 40%;"></div>
<div class="flex-1 bg-primary-teal/20 rounded-t" style="height: 70%;"></div>
<div class="flex-1 bg-primary-teal/20 rounded-t" style="height: 60%;"></div>
<div class="flex-1 bg-primary-teal/20 rounded-t" style="height: 45%;"></div>
<div class="flex-1 bg-primary-teal rounded-t shadow-sm" style="height: 65%;"></div>
</div>
</div>
<div class="standard-card p-6">
<p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-4">Price Certainty</p>
<div class="flex items-end justify-between">
<h4 class="text-3xl font-extrabold text-text-main">{{ $owner['price_certainty'] }}%</h4>
<div class="flex items-center text-primary-teal text-[10px] font-bold bg-primary-teal/10 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-1">trending_up</span>
                                +{{ $owner['price_certainty_delta'] }}%
                            </div>
</div>
<div class="mt-5 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
<div class="h-full bg-primary-teal" style="width: {{ $owner['price_certainty'] }}%;"></div>
</div>
</div>
<div class="standard-card p-6">
<p class="text-[10px] font-bold text-text-muted uppercase tracking-widest mb-4">On-time Delivery</p>
<div class="flex items-end justify-between">
<h4 class="text-3xl font-extrabold text-text-main">{{ $owner['on_time_delivery'] }}%</h4>
<div class="flex items-center text-brand-purple text-[10px] font-bold bg-brand-purple/10 px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px] mr-1">trending_down</span>
                                +{{ $owner['on_time_delta'] }}%
                            </div>
</div>
<div class="mt-5 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
<div class="h-full bg-brand-purple" style="width: {{ $owner['on_time_delivery'] }}%;"></div>
</div>
</div>
</div>
</section>
</div>
</main>
</div>
@endsection
