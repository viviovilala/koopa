@extends('layouts.umkm')
@php($active = 'groups')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Group Buying</p>
<h1 class="text-2xl font-bold">Groups</h1>
<p class="text-sm text-koopa-muted">Track group status, volume, and cut-off time.</p>
</div>
<a class="px-4 py-2 rounded-xl bg-koopa-teal text-white text-sm font-semibold" href="{{ route('groups.create') }}">Create Group</a>
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
<th class="px-6 py-4 text-left">Title</th>
<th class="px-6 py-4 text-left">Volume</th>
<th class="px-6 py-4 text-left">Status</th>
<th class="px-6 py-4 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-koopa-border">
@forelse ($groups as $group)
<tr class="hover:bg-koopa-surface/60">
<td class="px-6 py-4">
<div class="font-semibold">{{ $group->title }}</div>
<div class="text-xs text-koopa-muted">Leader: {{ $group->leader->display_name ?? $group->leader->name ?? '-' }}</div>
<div class="text-xs text-koopa-muted">Cut-off: {{ optional($group->cut_off_at)->format('Y-m-d H:i') ?? '-' }}</div>
</td>
<td class="px-6 py-4">{{ $group->current_volume }} / {{ $group->target_volume }} {{ $group->unit }}</td>
<td class="px-6 py-4">
<span class="inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold bg-[#e8f3f3] text-koopa-teal">
{{ strtoupper($group->status) }}
</span>
</td>
<td class="px-6 py-4 text-right space-x-2">
<a class="text-koopa-teal font-semibold" href="{{ route('groups.show', $group) }}">View</a>
<a class="text-koopa-teal font-semibold" href="{{ route('groups.edit', $group) }}">Edit</a>
<form class="inline" method="POST" action="{{ route('groups.destroy', $group) }}">
@csrf
@method('DELETE')
<button class="text-red-600 font-semibold" type="submit">Delete</button>
</form>
</td>
</tr>
@empty
<tr>
<td class="px-6 py-6 text-center text-koopa-muted" colspan="4">No groups yet.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
@endsection
