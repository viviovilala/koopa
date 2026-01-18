<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Order</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="order_id" required>
@foreach ($orders as $order)
<option value="{{ $order->id }}" {{ old('order_id', $invoice->order_id ?? '') == $order->id ? 'selected' : '' }}>Order #{{ $order->id }}</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Invoice Number</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="invoice_number" value="{{ old('invoice_number', $invoice->invoice_number ?? '') }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Amount</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="amount" type="number" step="0.01" min="0" value="{{ old('amount', $invoice->amount ?? 0) }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Currency</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="currency" value="{{ old('currency', $invoice->currency ?? 'USD') }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Status</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="status">
@foreach (['issued', 'paid', 'refunded'] as $status)
<option value="{{ $status }}" {{ old('status', $invoice->status ?? 'issued') === $status ? 'selected' : '' }}>{{ strtoupper($status) }}</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Issued At</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="issued_at" type="datetime-local" value="{{ old('issued_at', optional($invoice->issued_at ?? null)->format('Y-m-d\\TH:i')) }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Due At</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="due_at" type="datetime-local" value="{{ old('due_at', optional($invoice->due_at ?? null)->format('Y-m-d\\TH:i')) }}"/>
</div>
</div>
