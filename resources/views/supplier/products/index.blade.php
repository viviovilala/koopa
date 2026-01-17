@extends('layouts.supplier')
@php($active = 'products')

@section('content')
@php($title = 'Product Management')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Supplier</p>
<h1 class="text-2xl font-bold">Product Management</h1>
<p class="text-sm text-koopa-muted">Manage your wholesale catalog and tiered pricing ladders.</p>
</div>
<div class="flex gap-3">
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="/supplier-products-ui">Preview UI</a>
<a class="px-4 py-2 rounded-xl bg-koopa-teal text-white text-sm font-semibold" href="{{ route('supplier.products.create') }}">Create New Listing</a>
</div>
</div>

@if (session('status'))
<div class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
{{ session('status') }}
</div>
@endif

<div class="bg-white border border-koopa-border rounded-2xl shadow-card overflow-hidden">
<div class="px-6 py-4 border-b border-koopa-border flex items-center justify-between">
<h2 class="text-lg font-semibold">Active Catalog</h2>
<span class="text-xs text-koopa-muted">{{ $products->count() }} products</span>
</div>
<div class="overflow-x-auto">
<table class="min-w-full text-sm">
<thead class="bg-koopa-surface text-koopa-muted uppercase text-xs tracking-widest">
<tr>
<th class="px-6 py-4 text-left">Product</th>
<th class="px-6 py-4 text-left">Category</th>
<th class="px-6 py-4 text-left">MOQ</th>
<th class="px-6 py-4 text-left">Status</th>
<th class="px-6 py-4 text-left">Tiers</th>
<th class="px-6 py-4 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-koopa-border">
@forelse ($products as $product)
<tr class="hover:bg-koopa-surface/60">
<td class="px-6 py-4">
<div class="font-semibold">{{ $product->name }}</div>
<div class="text-xs text-koopa-muted">{{ $product->sku ?? 'SKU: -' }}</div>
</td>
<td class="px-6 py-4">{{ $product->category ?? '-' }}</td>
<td class="px-6 py-4">{{ $product->moq }} {{ $product->unit }}</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold {{ $product->status === 'active' ? 'bg-emerald-100 text-emerald-700' : 'bg-amber-100 text-amber-700' }}">
{{ strtoupper($product->status) }}
</span>
</td>
<td class="px-6 py-4">{{ $product->priceLadders->count() }}</td>
<td class="px-6 py-4 text-right space-x-2">
<a class="text-koopa-teal font-semibold" href="{{ route('supplier.products.show', $product) }}">View</a>
<a class="text-koopa-teal font-semibold" href="{{ route('supplier.products.edit', $product) }}">Edit</a>
<form class="inline" method="POST" action="{{ route('supplier.products.destroy', $product) }}">
@csrf
@method('DELETE')
<button class="text-red-600 font-semibold" type="submit">Delete</button>
</form>
</td>
</tr>
@empty
<tr>
<td class="px-6 py-6 text-center text-koopa-muted" colspan="6">No products yet. Create your first listing.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>
@endsection
