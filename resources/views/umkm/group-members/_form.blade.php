<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Group</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="group_id" required>
@foreach ($groups as $group)
<option value="{{ $group->id }}" {{ old('group_id', $member->group_id ?? '') == $group->id ? 'selected' : '' }}>{{ $group->title }}</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Member</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="member_id" required>
@foreach ($members as $user)
<option value="{{ $user->id }}" {{ old('member_id', $member->member_id ?? '') == $user->id ? 'selected' : '' }}>
{{ $user->display_name ?? $user->name }}
</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Qty</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="qty" type="number" min="0" value="{{ old('qty', $member->qty ?? 0) }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Unit</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="unit" value="{{ old('unit', $member->unit ?? 'kg') }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Status</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="status">
@foreach (['joined', 'paid', 'completed'] as $status)
<option value="{{ $status }}" {{ old('status', $member->status ?? 'joined') === $status ? 'selected' : '' }}>{{ strtoupper($status) }}</option>
@endforeach
</select>
</div>
</div>
