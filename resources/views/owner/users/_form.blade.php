<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Name</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="name" value="{{ old('name', $user->name ?? '') }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Display Name</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="display_name" value="{{ old('display_name', $user->display_name ?? '') }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Company Name</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="company_name" value="{{ old('company_name', $user->company_name ?? '') }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Profile Image URL</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="profile_image_url" value="{{ old('profile_image_url', $user->profile_image_url ?? '') }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Role</label>
<select class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="role" required>
@foreach (['umkm' => 'UMKM', 'supplier' => 'Supplier', 'owner' => 'Owner'] as $value => $label)
<option value="{{ $value }}" {{ old('role', $user->role ?? '') === $value ? 'selected' : '' }}>{{ $label }}</option>
@endforeach
</select>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Tier</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="tier" value="{{ old('tier', $user->tier ?? '') }}"/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Email</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="email" type="email" value="{{ old('email', $user->email ?? '') }}" required/>
</div>
<div>
<label class="text-xs uppercase tracking-widest text-koopa-muted">Password</label>
<input class="mt-2 w-full rounded-xl border border-koopa-border bg-koopa-surface px-4 py-3" name="password" type="password" {{ isset($user) ? '' : 'required' }}/>
<p class="text-[11px] text-koopa-muted mt-2">Leave empty to keep current password.</p>
</div>
</div>
