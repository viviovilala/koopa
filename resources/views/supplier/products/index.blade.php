@extends('layouts.supplier')
@php($active = 'products')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-2xl font-bold">Product Management</h1>
<p class="text-sm text-koopa-muted">Manage your wholesale catalog and tiered pricing ladders.</p>
</div>
<div class="flex gap-3">
<button class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold">Export CSV</button>
<a class="px-4 py-2 rounded-xl bg-koopa-teal text-white text-sm font-semibold" href="{{ route('supplier.products.create') }}">Create New Listing</a>
</div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
<div class="bg-white border border-koopa-border rounded-2xl p-4 shadow-card">
<div class="flex items-center justify-between mb-2">
<p class="text-xs uppercase tracking-widest text-koopa-muted">Active Listings</p>
<span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1 rounded-full">+2%</span>
</div>
<p class="text-2xl font-bold">{{ $products->count() }}</p>
</div>
<div class="bg-white border border-koopa-border rounded-2xl p-4 shadow-card">
<div class="flex items-center justify-between mb-2">
<p class="text-xs uppercase tracking-widest text-koopa-muted">Total Monthly Orders</p>
<span class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1 rounded-full">+15%</span>
</div>
<p class="text-2xl font-bold">486</p>
</div>
<div class="bg-white border border-koopa-border rounded-2xl p-4 shadow-card">
<div class="flex items-center justify-between mb-2">
<p class="text-xs uppercase tracking-widest text-koopa-muted">Avg. Order Value</p>
<span class="text-xs bg-red-100 text-red-700 px-2 py-1 rounded-full">-3%</span>
</div>
<p class="text-2xl font-bold">$1,240</p>
</div>
</div>

@if (session('status'))
<div class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
{{ session('status') }}
</div>
@endif

<div class="grid grid-cols-1 lg:grid-cols-[360px_1fr] gap-6">
<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<div class="flex items-center justify-between mb-4">
<div>
<h3 class="text-lg font-semibold">Product Details</h3>
<p class="text-xs text-koopa-muted">Create a new bulk purchase listing</p>
</div>
</div>
<form method="POST" action="{{ route('supplier.products.store') }}">
@csrf
@include('supplier.products._form')
<div class="mt-6 flex gap-3">
<button class="px-4 py-2.5 rounded-xl bg-koopa-teal text-white text-sm font-semibold" type="submit">Publish Listing</button>
<button class="px-4 py-2.5 rounded-xl border border-koopa-border text-sm font-semibold" type="button">Draft</button>
</div>
</form>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<div class="flex items-center justify-between mb-4">
<h3 class="text-lg font-semibold">Active Catalog</h3>
<div class="flex items-center gap-2 text-koopa-muted">
<span class="material-symbols-outlined">filter_list</span>
<span class="material-symbols-outlined">more_vert</span>
</div>
</div>
<div class="overflow-x-auto">
<table class="min-w-full text-sm">
<thead class="bg-koopa-surface text-koopa-muted uppercase text-xs tracking-widest">
<tr>
<th class="px-4 py-3 text-left">Product</th>
<th class="px-4 py-3 text-left">Category</th>
<th class="px-4 py-3 text-left">MOQ</th>
<th class="px-4 py-3 text-left">Price Ladder</th>
<th class="px-4 py-3 text-left">Status</th>
<th class="px-4 py-3 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-koopa-border">
@forelse ($products as $product)
<tr>
<td class="px-4 py-4">
<div class="font-semibold">{{ $product->name }}</div>
<div class="text-xs text-koopa-muted">{{ $product->sku ?? 'SKU -' }}</div>
</td>
<td class="px-4 py-4">{{ $product->category ?? '-' }}</td>
<td class="px-4 py-4">{{ $product->moq }} {{ $product->unit }}</td>
<td class="px-4 py-4">{{ $product->priceLadders->count() }} tiers</td>
<td class="px-4 py-4">
<span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold {{ $product->status === 'active' ? 'bg-emerald-100 text-emerald-700' : 'bg-amber-100 text-amber-700' }}">
{{ strtoupper($product->status) }}
</span>
</td>
<td class="px-4 py-4 text-right space-x-2">
<a class="text-koopa-teal font-semibold" href="{{ route('supplier.products.show', $product) }}">View</a>
<a class="text-koopa-teal font-semibold" href="{{ route('supplier.products.edit', $product) }}">Edit</a>
</td>
</tr>
@empty
<tr>
<td class="px-4 py-6 text-center text-koopa-muted" colspan="6">No products available.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
</div>

<div class="mt-6 bg-white border border-koopa-border rounded-2xl p-6 shadow-card flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="h-10 w-10 rounded-xl bg-[#e8f3f3] text-koopa-teal flex items-center justify-center">
<span class="material-symbols-outlined">map</span>
</div>
<div>
<p class="font-semibold">Logistic Coverage</p>
<p class="text-xs text-koopa-muted">Your products are visible in 2 countries and 5 cities.</p>
</div>
</div>
<button class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold text-koopa-teal" type="button">Manage Logistics</button>
</div>
</div>
@endsection
