@extends('layouts.owner')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-2xl font-bold">Edit Group</h1>
<p class="text-sm text-text-muted">Adjust volume targets, status, or cut-off.</p>
</div>
<a class="text-sm font-semibold text-primary-teal" href="{{ route('owner.groups.index') }}">Back to groups</a>
</div>

@if (session('status'))
<div class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
{{ session('status') }}
</div>
@endif

@if ($errors->any())
<div class="mb-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
{{ $errors->first() }}
</div>
@endif

<div class="standard-card p-6">
<form method="POST" action="{{ route('owner.groups.update', $group) }}" class="space-y-6">
@csrf
@method('PUT')
@include('owner.groups._form')
<div class="flex gap-3">
<button class="px-5 py-2.5 rounded-xl bg-primary-teal text-white text-sm font-semibold" type="submit">Save Changes</button>
<a class="px-5 py-2.5 rounded-xl border border-border-color text-sm font-semibold" href="{{ route('owner.groups.index') }}">Cancel</a>
</div>
</form>
</div>
@endsection
