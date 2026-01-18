<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div>
<label class="text-xs uppercase tracking-widest text-text-muted">Title</label>
<input class="mt-2 w-full rounded-xl border border-border-color bg-white px-4 py-3" name="title" value="{{ old('title', $group->title ?? '') }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-text-muted">Product</label>
<select class="mt-2 w-full rounded-xl border border-border-color bg-white px-4 py-3" name="product_id">
<option value="">Select product</option>
@foreach ($products as $product)
<option value="{{ $product->id }}" {{ old('product_id', $group->product_id ?? null) == $product->id ? 'selected' : '' }}>
{{ $product->name }}
</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-text-muted">Leader</label>
<select class="mt-2 w-full rounded-xl border border-border-color bg-white px-4 py-3" name="leader_id">
<option value="">Select leader</option>
@foreach ($leaders as $leader)
<option value="{{ $leader->id }}" {{ old('leader_id', $group->leader_id ?? null) == $leader->id ? 'selected' : '' }}>
{{ $leader->display_name ?? $leader->name }}
</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-text-muted">Drop Point</label>
<select class="mt-2 w-full rounded-xl border border-border-color bg-white px-4 py-3" name="drop_point_id">
<option value="">Select drop point</option>
@foreach ($dropPoints as $dropPoint)
<option value="{{ $dropPoint->id }}" {{ old('drop_point_id', $group->drop_point_id ?? null) == $dropPoint->id ? 'selected' : '' }}>
{{ $dropPoint->name }}
</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-text-muted">Target Volume</label>
<input class="mt-2 w-full rounded-xl border border-border-color bg-white px-4 py-3" name="target_volume" type="number" min="0" value="{{ old('target_volume', $group->target_volume ?? 0) }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-text-muted">Current Volume</label>
<input class="mt-2 w-full rounded-xl border border-border-color bg-white px-4 py-3" name="current_volume" type="number" min="0" value="{{ old('current_volume', $group->current_volume ?? 0) }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-text-muted">Unit</label>
<input class="mt-2 w-full rounded-xl border border-border-color bg-white px-4 py-3" name="unit" value="{{ old('unit', $group->unit ?? 'kg') }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-text-muted">Currency</label>
<input class="mt-2 w-full rounded-xl border border-border-color bg-white px-4 py-3" name="currency" value="{{ old('currency', $group->currency ?? 'USD') }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-text-muted">Status</label>
<select class="mt-2 w-full rounded-xl border border-border-color bg-white px-4 py-3" name="status" required>
@foreach (['open', 'locked', 'paid', 'delivered', 'completed'] as $status)
<option value="{{ $status }}" {{ old('status', $group->status ?? 'open') === $status ? 'selected' : '' }}>
{{ strtoupper($status) }}
</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-text-muted">Cut-off Time</label>
<input class="mt-2 w-full rounded-xl border border-border-color bg-white px-4 py-3" name="cut_off_at" type="datetime-local" value="{{ old('cut_off_at', isset($group) && $group->cut_off_at ? $group->cut_off_at->format('Y-m-d\\TH:i') : '') }}"/>
</div>
</div>
