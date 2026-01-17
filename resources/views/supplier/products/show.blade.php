@extends('layouts.supplier')
@php($active = 'products')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Supplier</p>
<h1 class="text-2xl font-bold">{{ $product->name }}</h1>
<p class="text-sm text-koopa-muted">{{ $product->category ?? 'Uncategorized' }} • MOQ {{ $product->moq }} {{ $product->unit }}</p>
</div>
<div class="flex gap-3">
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('supplier.products.edit', $product) }}">Edit Listing</a>
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('supplier.products.index') }}">Back to Catalog</a>
</div>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">SKU</p>
<p class="font-semibold">{{ $product->sku ?? '-' }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Status</p>
<span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold {{ $product->status === 'active' ? 'bg-emerald-100 text-emerald-700' : 'bg-amber-100 text-amber-700' }}">
{{ strtoupper($product->status) }}
</span>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Currency</p>
<p class="font-semibold">{{ $product->currency }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Service Area</p>
<p class="font-semibold">{{ $product->service_area ? implode(', ', $product->service_area) : '-' }}</p>
</div>
</div>

<div>
<h2 class="text-lg font-semibold mb-3">Price Ladder</h2>
<div class="overflow-x-auto">
<table class="min-w-full text-sm">
<thead class="bg-koopa-surface text-koopa-muted uppercase text-xs tracking-widest">
<tr>
<th class="px-4 py-3 text-left">Min Qty</th>
<th class="px-4 py-3 text-left">Price / Unit</th>
</tr>
</thead>
<tbody class="divide-y divide-koopa-border">
@forelse ($product->priceLadders as $tier)
<tr>
<td class="px-4 py-3">{{ $tier->min_qty }} {{ $product->unit }}</td>
<td class="px-4 py-3">{{ $product->currency }} {{ number_format($tier->price_per_unit, 2) }}</td>
</tr>
@empty
<tr>
<td class="px-4 py-4 text-center text-koopa-muted" colspan="2">No price tiers yet.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>
</div>
@endsection
