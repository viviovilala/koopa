@extends('layouts.umkm')
@php($active = 'drop-points')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Operations</p>
<h1 class="text-2xl font-bold">Drop Points</h1>
<p class="text-sm text-koopa-muted">Manage pickup locations and operating windows.</p>
</div>
<a class="px-4 py-2 rounded-xl bg-koopa-teal text-white text-sm font-semibold" href="{{ route('drop-points.create') }}">Create Drop Point</a>
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
<th class="px-6 py-4 text-left">Name</th>
<th class="px-6 py-4 text-left">City</th>
<th class="px-6 py-4 text-left">Window</th>
<th class="px-6 py-4 text-left">Status</th>
<th class="px-6 py-4 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-koopa-border">
@forelse ($dropPoints as $dropPoint)
<tr class="hover:bg-koopa-surface/60">
<td class="px-6 py-4">
<div class="font-semibold">{{ $dropPoint->name }}</div>
<div class="text-xs text-koopa-muted">{{ $dropPoint->address ?? '-' }}</div>
</td>
<td class="px-6 py-4">{{ $dropPoint->city ?? '-' }}</td>
<td class="px-6 py-4">{{ $dropPoint->window_start ?? '-' }} - {{ $dropPoint->window_end ?? '-' }}</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold {{ $dropPoint->status === 'active' ? 'bg-emerald-100 text-emerald-700' : 'bg-amber-100 text-amber-700' }}">
{{ strtoupper($dropPoint->status) }}
</span>
</td>
<td class="px-6 py-4 text-right space-x-2">
<a class="text-koopa-teal font-semibold" href="{{ route('drop-points.show', $dropPoint) }}">View</a>
<a class="text-koopa-teal font-semibold" href="{{ route('drop-points.edit', $dropPoint) }}">Edit</a>
<form class="inline" method="POST" action="{{ route('drop-points.destroy', $dropPoint) }}">
@csrf
@method('DELETE')
<button class="text-red-600 font-semibold" type="submit">Delete</button>
</form>
</td>
</tr>
@empty
<tr>
<td class="px-6 py-6 text-center text-koopa-muted" colspan="5">No drop points yet.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
@endsection
