<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Order</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="order_id" required>
@foreach ($orders as $order)
<option value="{{ $order->id }}" {{ old('order_id', $payment->order_id ?? '') == $order->id ? 'selected' : '' }}>Order #{{ $order->id }}</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Amount</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="amount" type="number" step="0.01" min="0" value="{{ old('amount', $payment->amount ?? 0) }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Currency</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="currency" value="{{ old('currency', $payment->currency ?? 'USD') }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Status</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="status">
@foreach (['held', 'released', 'refunded'] as $status)
<option value="{{ $status }}" {{ old('status', $payment->status ?? 'held') === $status ? 'selected' : '' }}>{{ strtoupper($status) }}</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Paid At</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="paid_at" type="datetime-local" value="{{ old('paid_at', optional($payment->paid_at ?? null)->format('Y-m-d\\TH:i')) }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Released At</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="released_at" type="datetime-local" value="{{ old('released_at', optional($payment->released_at ?? null)->format('Y-m-d\\TH:i')) }}"/>
</div>
</div>
