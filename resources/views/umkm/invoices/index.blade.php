@extends('layouts.umkm')
@php($active = 'invoices')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Billing</p>
<h1 class="text-2xl font-bold">Invoices</h1>
<p class="text-sm text-koopa-muted">Generate and track invoices after cut-off.</p>
</div>
<a class="px-4 py-2 rounded-xl bg-koopa-teal text-white text-sm font-semibold" href="{{ route('invoices.create') }}">Create Invoice</a>
</div>

<div class="bg-white border border-koopa-border rounded-2xl shadow-card overflow-hidden">
<table class="min-w-full text-sm">
<thead class="bg-koopa-surface text-koopa-muted uppercase text-xs tracking-widest">
<tr>
<th class="px-6 py-4 text-left">Invoice</th>
<th class="px-6 py-4 text-left">Order</th>
<th class="px-6 py-4 text-left">Amount</th>
<th class="px-6 py-4 text-left">Status</th>
<th class="px-6 py-4 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-koopa-border">
@forelse ($invoices as $invoice)
<tr class="hover:bg-koopa-surface/60">
<td class="px-6 py-4">{{ $invoice->invoice_number }}</td>
<td class="px-6 py-4">Order #{{ $invoice->order_id }}</td>
<td class="px-6 py-4">{{ $invoice->currency }} {{ number_format($invoice->amount, 2) }}</td>
<td class="px-6 py-4">{{ strtoupper($invoice->status) }}</td>
<td class="px-6 py-4 text-right space-x-2">
<a class="text-koopa-teal font-semibold" href="{{ route('invoices.show', $invoice) }}">View</a>
<a class="text-koopa-teal font-semibold" href="{{ route('invoices.edit', $invoice) }}">Edit</a>
<form class="inline" method="POST" action="{{ route('invoices.destroy', $invoice) }}">
@csrf
@method('DELETE')
<button class="text-red-600 font-semibold" type="submit">Delete</button>
</form>
</td>
</tr>
@empty
<tr>
<td class="px-6 py-6 text-center text-koopa-muted" colspan="5">No invoices yet.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
@endsection
