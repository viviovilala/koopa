@php
$tierDefaults = $tiers ?? collect();
$tierRows = [0, 1, 2];
@endphp
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-4">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Product Name</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="name" value="{{ old('name', $product->name ?? '') }}" required/>
</div>
<div class="grid grid-cols-2 gap-4">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">SKU</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="sku" value="{{ old('sku', $product->sku ?? '') }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Category</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="category" value="{{ old('category', $product->category ?? '') }}"/>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">MOQ</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="moq" type="number" min="0" value="{{ old('moq', $product->moq ?? 0) }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Unit</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="unit" value="{{ old('unit', $product->unit ?? 'kg') }}" required/>
</div>
</div>
<div class="grid grid-cols-2 gap-4">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Status</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="status" required>
<option value="draft" {{ old('status', $product->status ?? 'draft') === 'draft' ? 'selected' : '' }}>Draft</option>
<option value="active" {{ old('status', $product->status ?? '') === 'active' ? 'selected' : '' }}>Active</option>
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Currency</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="currency" value="{{ old('currency', $product->currency ?? 'USD') }}" required/>
</div>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Service Area (comma separated)</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="service_area" value="{{ old('service_area', isset($product) ? implode(', ', $product->service_area ?? []) : '') }}"/>
</div>
</div>
<div class="space-y-4">
<div>
<h3 class="text-sm font-semibold">Price Ladder (Tiered)</h3>
<p class="text-xs text-koopa-muted">Set minimum quantity and price per unit for each tier.</p>
</div>
<div class="space-y-3">
@foreach ($tierRows as $index)
@php
$tier = $tierDefaults[$index] ?? null;
$minQty = old("tiers.$index.min_qty", $tier->min_qty ?? '');
$price = old("tiers.$index.price_per_unit", $tier->price_per_unit ?? '');
@endphp
<div class="grid grid-cols-2 gap-4">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Min Qty</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="tiers[{{ $index }}][min_qty]" type="number" min="1" value="{{ $minQty }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Price / Unit</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="tiers[{{ $index }}][price_per_unit]" type="number" step="0.01" min="0" value="{{ $price }}"/>
</div>
</div>
@endforeach
</div>
</div>
</div>
