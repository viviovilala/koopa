@extends('layouts.owner')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-2xl font-bold">Add User</h1>
<p class="text-sm text-koopa-muted">Create a new UMKM, supplier, or owner account.</p>
</div>
<a class="text-sm font-semibold text-koopa-teal" href="{{ route('owner.users.index') }}">Back to users</a>
</div>

@if ($errors->any())
<div class="mb-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
{{ $errors->first() }}
</div>
@endif

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card">
<form method="POST" action="{{ route('owner.users.store') }}" class="space-y-6">
@csrf
@include('owner.users._form')
<div class="flex gap-3">
<button class="px-5 py-2.5 rounded-xl bg-koopa-teal text-white text-sm font-semibold" type="submit">Create User</button>
<a class="px-5 py-2.5 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('owner.users.index') }}">Cancel</a>
</div>
</form>
</div>
@endsection
