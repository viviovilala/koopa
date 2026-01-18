@extends('layouts.owner')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-2xl font-bold">Owner Groups</h1>
<p class="text-sm text-text-muted">Monitor lifecycle, volume, and delivery status.</p>
</div>
<a class="px-4 py-2 rounded-xl bg-primary-teal text-white text-sm font-semibold" href="{{ route('owner.groups.create') }}">Create Group</a>
</div>

@if (session('status'))
<div class="mb-4 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
{{ session('status') }}
</div>
@endif

<div class="standard-card overflow-hidden">
<table class="min-w-full text-sm">
<thead class="bg-bg-main text-text-muted uppercase text-xs tracking-widest">
<tr>
<th class="px-5 py-3 text-left">Group</th>
<th class="px-5 py-3 text-left">Leader</th>
<th class="px-5 py-3 text-left">Volume</th>
<th class="px-5 py-3 text-left">Status</th>
<th class="px-5 py-3 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-border-color">
@forelse ($groups as $group)
<tr>
<td class="px-5 py-4">
<p class="font-semibold">{{ $group->title }}</p>
<p class="text-xs text-text-muted">{{ $group->product->name ?? 'No product' }}</p>
</td>
<td class="px-5 py-4">{{ $group->leader->display_name ?? $group->leader->name ?? '-' }}</td>
<td class="px-5 py-4">{{ $group->current_volume }} / {{ $group->target_volume }} {{ $group->unit }}</td>
<td class="px-5 py-4">
<span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold bg-primary-teal/10 text-primary-teal">
{{ strtoupper($group->status) }}
</span>
</td>
<td class="px-5 py-4 text-right space-x-2">
<a class="text-primary-teal font-semibold" href="{{ route('owner.groups.show', $group) }}">View</a>
<a class="text-primary-teal font-semibold" href="{{ route('owner.groups.edit', $group) }}">Edit</a>
<form class="inline" method="POST" action="{{ route('owner.groups.destroy', $group) }}">
@csrf
@method('DELETE')
<button class="text-red-500 font-semibold" type="submit">Delete</button>
</form>
</td>
</tr>
@empty
<tr>
<td class="px-5 py-6 text-center text-text-muted" colspan="5">No groups available.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
@endsection
