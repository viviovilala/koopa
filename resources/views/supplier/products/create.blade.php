@extends('layouts.supplier')
@php($active = 'products')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Supplier</p>
<h1 class="text-2xl font-bold">Create New Listing</h1>
<p class="text-sm text-koopa-muted">Add product details and tiered pricing.</p>
</div>
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('supplier.products.index') }}">Back to Catalog</a>
</div>

@if ($errors->any())
<div class="mb-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
Please fix the errors below.
</div>
@endif

<form class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card" method="POST" action="{{ route('supplier.products.store') }}">
@csrf
@include('supplier.products._form')
<div class="mt-6 flex gap-3">
<button class="px-5 py-2.5 rounded-xl bg-koopa-teal text-white text-sm font-semibold" type="submit">Publish Listing</button>
<a class="px-5 py-2.5 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('supplier.products.index') }}">Cancel</a>
</div>
</form>
@endsection
