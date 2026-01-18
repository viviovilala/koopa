@extends('layouts.owner')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-2xl font-bold">User Management</h1>
<p class="text-sm text-koopa-muted">Manage UMKM, suppliers, and owner accounts.</p>
</div>
<a class="px-4 py-2 rounded-xl bg-koopa-teal text-white text-sm font-semibold" href="{{ route('owner.users.create') }}">Add User</a>
</div>

<div class="flex flex-wrap gap-2 mb-6 text-xs font-semibold">
<a class="px-3 py-1 rounded-full {{ $role === null ? 'bg-koopa-teal text-white' : 'bg-white border border-koopa-border text-koopa-muted' }}" href="{{ route('owner.users.index') }}">All</a>
<a class="px-3 py-1 rounded-full {{ $role === 'umkm' ? 'bg-koopa-teal text-white' : 'bg-white border border-koopa-border text-koopa-muted' }}" href="{{ route('owner.users.index', ['role' => 'umkm']) }}">UMKM</a>
<a class="px-3 py-1 rounded-full {{ $role === 'supplier' ? 'bg-koopa-teal text-white' : 'bg-white border border-koopa-border text-koopa-muted' }}" href="{{ route('owner.users.index', ['role' => 'supplier']) }}">Suppliers</a>
<a class="px-3 py-1 rounded-full {{ $role === 'owner' ? 'bg-koopa-teal text-white' : 'bg-white border border-koopa-border text-koopa-muted' }}" href="{{ route('owner.users.index', ['role' => 'owner']) }}">Owners</a>
</div>

@if (session('status'))
<div class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
{{ session('status') }}
</div>
@endif

<div class="bg-white border border-koopa-border rounded-2xl shadow-card overflow-hidden">
<table class="min-w-full text-sm">
<thead class="bg-koopa-surface text-koopa-muted uppercase text-xs tracking-widest">
<tr>
<th class="px-5 py-3 text-left">User</th>
<th class="px-5 py-3 text-left">Role</th>
<th class="px-5 py-3 text-left">Company</th>
<th class="px-5 py-3 text-left">Tier</th>
<th class="px-5 py-3 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-koopa-border">
@forelse ($users as $user)
<tr>
<td class="px-5 py-4">
<div class="flex items-center gap-3">
@if ($user->profile_image_url)
<div class="h-9 w-9 rounded-full bg-cover bg-center" style="background-image: url('{{ $user->profile_image_url }}');"></div>
@else
<div class="h-9 w-9 rounded-full bg-koopa-teal text-white flex items-center justify-center text-xs font-semibold">
{{ strtoupper(substr($user->display_name ?? $user->name, 0, 2)) }}
</div>
@endif
<div>
<p class="font-semibold">{{ $user->display_name ?? $user->name }}</p>
<p class="text-xs text-koopa-muted">{{ $user->email }}</p>
</div>
</div>
</td>
<td class="px-5 py-4 uppercase text-xs font-semibold text-koopa-muted">{{ $user->role }}</td>
<td class="px-5 py-4">{{ $user->company_name ?? '-' }}</td>
<td class="px-5 py-4">{{ $user->tier ?? '-' }}</td>
<td class="px-5 py-4 text-right space-x-2">
<a class="text-koopa-teal font-semibold" href="{{ route('owner.users.show', $user) }}">View</a>
<a class="text-koopa-teal font-semibold" href="{{ route('owner.users.edit', $user) }}">Edit</a>
<form class="inline" method="POST" action="{{ route('owner.users.destroy', $user) }}">
@csrf
@method('DELETE')
<button class="text-red-500 font-semibold" type="submit">Delete</button>
</form>
</td>
</tr>
@empty
<tr>
<td class="px-5 py-6 text-center text-koopa-muted" colspan="5">No users available.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
@endsection
