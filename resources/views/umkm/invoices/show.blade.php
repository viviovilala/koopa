@extends('layouts.umkm')
@php($active = 'invoices')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Billing</p>
<h1 class="text-2xl font-bold">{{ $invoice->invoice_number }}</h1>
</div>
<div class="flex gap-3">
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('invoices.edit', $invoice) }}">Edit</a>
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('invoices.index') }}">Back</a>
</div>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card space-y-4">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Order</p>
<p class="font-semibold">Order #{{ $invoice->order_id }}</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Amount</p>
<p class="font-semibold">{{ $invoice->currency }} {{ number_format($invoice->amount, 2) }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Status</p>
<p class="font-semibold">{{ strtoupper($invoice->status) }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Issued At</p>
<p class="font-semibold">{{ optional($invoice->issued_at)->format('Y-m-d') ?? '-' }}</p>
</div>
</div>
</div>
@endsection
