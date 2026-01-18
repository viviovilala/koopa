@extends('layouts.owner')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-2xl font-bold">Create Group</h1>
<p class="text-sm text-text-muted">Open a new group buy with controlled rules.</p>
</div>
<a class="text-sm font-semibold text-primary-teal" href="{{ route('owner.groups.index') }}">Back to groups</a>
</div>

@if ($errors->any())
<div class="mb-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
{{ $errors->first() }}
</div>
@endif

<div class="standard-card p-6">
<form method="POST" action="{{ route('owner.groups.store') }}" class="space-y-6">
@csrf
@include('owner.groups._form')
<div class="flex gap-3">
<button class="px-5 py-2.5 rounded-xl bg-primary-teal text-white text-sm font-semibold" type="submit">Create Group</button>
<a class="px-5 py-2.5 rounded-xl border border-border-color text-sm font-semibold" href="{{ route('owner.groups.index') }}">Cancel</a>
</div>
</form>
</div>
@endsection
