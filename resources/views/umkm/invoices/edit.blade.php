@extends('layouts.umkm')
@php($active = 'invoices')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Billing</p>
<h1 class="text-2xl font-bold">Edit Invoice</h1>
</div>
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('invoices.index') }}">Back</a>
</div>

<form class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card" method="POST" action="{{ route('invoices.update', $invoice) }}">
@csrf
@method('PUT')
@include('umkm.invoices._form', ['invoice' => $invoice])
<div class="mt-6 flex gap-3">
<button class="px-5 py-2.5 rounded-xl bg-koopa-teal text-white text-sm font-semibold" type="submit">Update Invoice</button>
<a class="px-5 py-2.5 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('invoices.index') }}">Cancel</a>
</div>
</form>
@endsection
