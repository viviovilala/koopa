@extends('layouts.umkm')
@php($active = 'groups')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<p class="text-sm text-koopa-muted">Total Savings (Estimate)</p>
<p class="text-2xl font-bold">${{ number_format($metrics['total_savings'], 2) }}</p>
</div>
<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<p class="text-sm text-koopa-muted">Active Groups</p>
<p class="text-2xl font-bold">{{ $metrics['active_groups'] }}</p>
</div>
<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<p class="text-sm text-koopa-muted">Pending Actions</p>
<p class="text-2xl font-bold">{{ $metrics['pending_actions'] }}</p>
</div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
<div class="lg:col-span-2 bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<div class="flex items-center justify-between mb-4">
<h2 class="text-lg font-semibold">Active Groups</h2>
<a class="text-sm font-semibold text-koopa-teal" href="/groups">View all</a>
</div>
<div class="space-y-4">
@forelse ($groups as $group)
<div class="border border-koopa-border rounded-xl p-4">
<div class="flex items-center justify-between">
<div>
<p class="font-semibold">{{ $group->title }}</p>
<p class="text-xs text-koopa-muted">Drop Point: {{ $group->dropPoint->name ?? '-' }}</p>
</div>
<span class="text-xs bg-[#e8f3f3] text-koopa-teal px-3 py-1 rounded-full">{{ strtoupper($group->status) }}</span>
</div>
<div class="mt-3 text-sm text-koopa-muted">
{{ $group->current_volume }} / {{ $group->target_volume }} {{ $group->unit }}
</div>
</div>
@empty
<p class="text-sm text-koopa-muted">No groups available.</p>
@endforelse
</div>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<h2 class="text-lg font-semibold mb-4">Pending Payment</h2>
<div class="space-y-4">
@forelse ($pendingOrders as $order)
<div class="border border-koopa-border rounded-xl p-4">
<p class="font-semibold">{{ $order->group->title ?? 'Group' }}</p>
<p class="text-sm text-koopa-muted">Total: {{ $order->currency }} {{ number_format($order->total_amount, 2) }}</p>
<a class="mt-3 inline-flex items-center px-4 py-2 bg-koopa-teal text-white rounded-xl text-sm font-semibold" href="/escrow-payments">Pay Escrow</a>
</div>
@empty
<p class="text-sm text-koopa-muted">No pending payments.</p>
@endforelse
</div>
</div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">
<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<h2 class="text-lg font-semibold mb-4">In Delivery</h2>
<div class="space-y-3">
@forelse ($paidOrders as $order)
<div class="border border-koopa-border rounded-xl p-4">
<p class="font-semibold">{{ $order->group->title ?? 'Group' }}</p>
<p class="text-sm text-koopa-muted">Payment secured in escrow.</p>
<p class="text-xs text-koopa-muted">Order #{{ $order->id }}</p>
</div>
@empty
<p class="text-sm text-koopa-muted">No orders in delivery.</p>
@endforelse
</div>
</div>
<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<h2 class="text-lg font-semibold mb-4">Ready for Pickup</h2>
<p class="text-sm text-koopa-muted">Confirm receipt to release escrow.</p>
<a class="mt-4 inline-flex items-center px-4 py-2 border border-koopa-border rounded-xl text-sm font-semibold" href="/orders">Confirm Receipt</a>
</div>
</div>
@endsection
