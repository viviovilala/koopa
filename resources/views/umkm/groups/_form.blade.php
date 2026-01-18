<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Title</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="title" value="{{ old('title', $group->title ?? '') }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Drop Point</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="drop_point_id">
<option value="">Select drop point</option>
@foreach ($dropPoints as $dropPoint)
<option value="{{ $dropPoint->id }}" {{ old('drop_point_id', $group->drop_point_id ?? '') == $dropPoint->id ? 'selected' : '' }}>
{{ $dropPoint->name }}
</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Product</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="product_id">
<option value="">Select product</option>
@foreach ($products as $product)
<option value="{{ $product->id }}" {{ old('product_id', $group->product_id ?? '') == $product->id ? 'selected' : '' }}>
{{ $product->name }}
</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Group Leader</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="leader_id">
<option value="">Select leader</option>
@foreach ($leaders as $leader)
<option value="{{ $leader->id }}" {{ old('leader_id', $group->leader_id ?? '') == $leader->id ? 'selected' : '' }}>
{{ $leader->display_name ?? $leader->name }}
</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Target Volume</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="target_volume" type="number" min="0" value="{{ old('target_volume', $group->target_volume ?? 0) }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Current Volume</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="current_volume" type="number" min="0" value="{{ old('current_volume', $group->current_volume ?? 0) }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Unit</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="unit" value="{{ old('unit', $group->unit ?? 'kg') }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Status</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="status">
@foreach (['open', 'locked', 'paid', 'delivered', 'completed'] as $status)
<option value="{{ $status }}" {{ old('status', $group->status ?? 'open') === $status ? 'selected' : '' }}>
{{ strtoupper($status) }}
</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Cut-off At</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="cut_off_at" type="datetime-local" value="{{ old('cut_off_at', optional($group->cut_off_at)->format('Y-m-d\\TH:i')) }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Currency</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="currency" value="{{ old('currency', $group->currency ?? 'USD') }}"/>
</div>
</div>
