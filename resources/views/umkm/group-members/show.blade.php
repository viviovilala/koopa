@extends('layouts.umkm')
@php($active = 'members')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Group Buying</p>
<h1 class="text-2xl font-bold">Member #{{ $member->id }}</h1>
</div>
<div class="flex gap-3">
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('group-members.edit', $member) }}">Edit</a>
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('group-members.index') }}">Back</a>
</div>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card space-y-4">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Group</p>
<p class="font-semibold">{{ $member->group->title ?? '-' }}</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Member ID</p>
<p class="font-semibold">{{ $member->member->display_name ?? $member->member->name ?? $member->member_id }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Qty</p>
<p class="font-semibold">{{ $member->qty }} {{ $member->unit }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Status</p>
<p class="font-semibold">{{ strtoupper($member->status) }}</p>
</div>
</div>
</div>
@endsection
