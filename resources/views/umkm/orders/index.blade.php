@extends('layouts.umkm')
@php($active = 'orders')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Orders</p>
<h1 class="text-2xl font-bold">Orders</h1>
<p class="text-sm text-koopa-muted">Track payment and fulfillment status.</p>
</div>
<a class="px-4 py-2 rounded-xl bg-koopa-teal text-white text-sm font-semibold" href="{{ route('orders.create') }}">Create Order</a>
</div>

<div class="bg-white border border-koopa-border rounded-2xl shadow-card overflow-hidden">
<table class="min-w-full text-sm">
<thead class="bg-koopa-surface text-koopa-muted uppercase text-xs tracking-widest">
<tr>
<th class="px-6 py-4 text-left">Group</th>
<th class="px-6 py-4 text-left">Member</th>
<th class="px-6 py-4 text-left">Qty</th>
<th class="px-6 py-4 text-left">Amount</th>
<th class="px-6 py-4 text-left">Status</th>
<th class="px-6 py-4 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-koopa-border">
@forelse ($orders as $order)
<tr class="hover:bg-koopa-surface/60">
<td class="px-6 py-4">{{ $order->group->title ?? '-' }}</td>
<td class="px-6 py-4">{{ $order->member->display_name ?? $order->member->name ?? ('User #' . $order->member_id) }}</td>
<td class="px-6 py-4">{{ $order->total_qty }} {{ $order->unit }}</td>
<td class="px-6 py-4">{{ $order->currency }} {{ number_format($order->total_amount, 2) }}</td>
<td class="px-6 py-4">{{ strtoupper($order->status) }}</td>
<td class="px-6 py-4 text-right space-x-2">
<a class="text-koopa-teal font-semibold" href="{{ route('orders.show', $order) }}">View</a>
<a class="text-koopa-teal font-semibold" href="{{ route('orders.edit', $order) }}">Edit</a>
<form class="inline" method="POST" action="{{ route('orders.destroy', $order) }}">
@csrf
@method('DELETE')
<button class="text-red-600 font-semibold" type="submit">Delete</button>
</form>
</td>
</tr>
@empty
<tr>
<td class="px-6 py-6 text-center text-koopa-muted" colspan="6">No orders yet.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
@endsection
