<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Name</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="name" value="{{ old('name', $dropPoint->name ?? '') }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">City</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="city" value="{{ old('city', $dropPoint->city ?? '') }}"/>
</div>
<div class="md:col-span-2">
<label class="text-xs uppercase tracking-widest text-koopa-muted">Address</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="address" value="{{ old('address', $dropPoint->address ?? '') }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Window Start</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="window_start" value="{{ old('window_start', $dropPoint->window_start ?? '') }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Window End</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="window_end" value="{{ old('window_end', $dropPoint->window_end ?? '') }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Capacity</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="capacity" type="number" min="0" value="{{ old('capacity', $dropPoint->capacity ?? 0) }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Status</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="status">
<option value="active" {{ old('status', $dropPoint->status ?? 'active') === 'active' ? 'selected' : '' }}>Active</option>
<option value="inactive" {{ old('status', $dropPoint->status ?? '') === 'inactive' ? 'selected' : '' }}>Inactive</option>
</select>
</div>
</div>
