@extends('layouts.umkm')
@php($active = 'orders')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Orders</p>
<h1 class="text-2xl font-bold">Order #{{ $order->id }}</h1>
</div>
<div class="flex gap-3">
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('orders.edit', $order) }}">Edit</a>
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('orders.index') }}">Back</a>
</div>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card space-y-4">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Group</p>
<p class="font-semibold">{{ $order->group->title ?? '-' }}</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Qty</p>
<p class="font-semibold">{{ $order->total_qty }} {{ $order->unit }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Member</p>
<p class="font-semibold">{{ $order->member->display_name ?? $order->member->name ?? ('User #' . $order->member_id) }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Amount</p>
<p class="font-semibold">{{ $order->currency }} {{ number_format($order->total_amount, 2) }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Status</p>
<p class="font-semibold">{{ strtoupper($order->status) }}</p>
</div>
</div>
</div>
@endsection
