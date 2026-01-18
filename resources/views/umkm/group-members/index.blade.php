@extends('layouts.umkm')
@php($active = 'members')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Group Buying</p>
<h1 class="text-2xl font-bold">Group Members</h1>
<p class="text-sm text-koopa-muted">Manage participation and pledged quantity.</p>
</div>
<a class="px-4 py-2 rounded-xl bg-koopa-teal text-white text-sm font-semibold" href="{{ route('group-members.create') }}">Add Member</a>
</div>

<div class="bg-white border border-koopa-border rounded-2xl shadow-card overflow-hidden">
<table class="min-w-full text-sm">
<thead class="bg-koopa-surface text-koopa-muted uppercase text-xs tracking-widest">
<tr>
<th class="px-6 py-4 text-left">Group</th>
<th class="px-6 py-4 text-left">Member</th>
<th class="px-6 py-4 text-left">Qty</th>
<th class="px-6 py-4 text-left">Status</th>
<th class="px-6 py-4 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-koopa-border">
@forelse ($members as $member)
<tr class="hover:bg-koopa-surface/60">
<td class="px-6 py-4">{{ $member->group->title ?? '-' }}</td>
<td class="px-6 py-4">{{ $member->member->display_name ?? $member->member->name ?? ('User #' . $member->member_id) }}</td>
<td class="px-6 py-4">{{ $member->qty }} {{ $member->unit }}</td>
<td class="px-6 py-4">{{ strtoupper($member->status) }}</td>
<td class="px-6 py-4 text-right space-x-2">
<a class="text-koopa-teal font-semibold" href="{{ route('group-members.show', $member) }}">View</a>
<a class="text-koopa-teal font-semibold" href="{{ route('group-members.edit', $member) }}">Edit</a>
<form class="inline" method="POST" action="{{ route('group-members.destroy', $member) }}">
@csrf
@method('DELETE')
<button class="text-red-600 font-semibold" type="submit">Delete</button>
</form>
</td>
</tr>
@empty
<tr>
<td class="px-6 py-6 text-center text-koopa-muted" colspan="5">No members yet.</td>
</tr>
@endforelse
</tbody>
</table>
</div>
@endsection
