@extends('layouts.owner')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-2xl font-bold">User Detail</h1>
<p class="text-sm text-koopa-muted">Profile snapshot for this account.</p>
</div>
<a class="text-sm font-semibold text-koopa-teal" href="{{ route('owner.users.index') }}">Back to users</a>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<div class="flex items-center gap-4">
@if ($user->profile_image_url)
<div class="h-16 w-16 rounded-full bg-cover bg-center" style="background-image: url('{{ $user->profile_image_url }}');"></div>
@else
<div class="h-16 w-16 rounded-full bg-koopa-teal text-white flex items-center justify-center text-lg font-semibold">
{{ strtoupper(substr($user->display_name ?? $user->name, 0, 2)) }}
</div>
@endif
<div>
<h2 class="text-xl font-semibold">{{ $user->display_name ?? $user->name }}</h2>
<p class="text-sm text-koopa-muted">{{ $user->email }}</p>
</div>
</div>

<div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
<div class="border border-koopa-border rounded-xl p-4">
<p class="text-xs uppercase tracking-widest text-koopa-muted">Role</p>
<p class="font-semibold">{{ strtoupper($user->role) }}</p>
</div>
<div class="border border-koopa-border rounded-xl p-4">
<p class="text-xs uppercase tracking-widest text-koopa-muted">Tier</p>
<p class="font-semibold">{{ $user->tier ?? '-' }}</p>
</div>
<div class="border border-koopa-border rounded-xl p-4">
<p class="text-xs uppercase tracking-widest text-koopa-muted">Company</p>
<p class="font-semibold">{{ $user->company_name ?? '-' }}</p>
</div>
</div>
</div>
@endsection
