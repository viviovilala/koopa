@extends('layouts.owner')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<h1 class="text-2xl font-bold">Group Detail</h1>
<p class="text-sm text-text-muted">Snapshot of the group buying lifecycle.</p>
</div>
<a class="text-sm font-semibold text-primary-teal" href="{{ route('owner.groups.index') }}">Back to groups</a>
</div>

<div class="standard-card p-6 space-y-6">
<div>
<p class="text-xs uppercase tracking-widest text-text-muted">Group</p>
<h2 class="text-xl font-semibold">{{ $group->title }}</h2>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
<div class="border border-border-color rounded-xl p-4">
<p class="text-xs uppercase tracking-widest text-text-muted">Product</p>
<p class="font-semibold">{{ $group->product->name ?? '-' }}</p>
</div>
<div class="border border-border-color rounded-xl p-4">
<p class="text-xs uppercase tracking-widest text-text-muted">Leader</p>
<p class="font-semibold">{{ $group->leader->display_name ?? $group->leader->name ?? '-' }}</p>
</div>
<div class="border border-border-color rounded-xl p-4">
<p class="text-xs uppercase tracking-widest text-text-muted">Drop Point</p>
<p class="font-semibold">{{ $group->dropPoint->name ?? '-' }}</p>
</div>
<div class="border border-border-color rounded-xl p-4">
<p class="text-xs uppercase tracking-widest text-text-muted">Volume</p>
<p class="font-semibold">{{ $group->current_volume }} / {{ $group->target_volume }} {{ $group->unit }}</p>
</div>
<div class="border border-border-color rounded-xl p-4">
<p class="text-xs uppercase tracking-widest text-text-muted">Status</p>
<p class="font-semibold">{{ strtoupper($group->status) }}</p>
</div>
<div class="border border-border-color rounded-xl p-4">
<p class="text-xs uppercase tracking-widest text-text-muted">Cut-off</p>
<p class="font-semibold">{{ $group->cut_off_at?->format('Y-m-d H:i') ?? '-' }}</p>
</div>
</div>

<div>
<p class="text-xs uppercase tracking-widest text-text-muted mb-2">Members</p>
<div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-sm">
@foreach ($group->members as $member)
<div class="border border-border-color rounded-xl p-3 flex items-center justify-between">
<div>
<p class="font-semibold">{{ $member->member->display_name ?? $member->member->name }}</p>
<p class="text-xs text-text-muted">{{ $member->qty }} {{ $member->unit }}</p>
</div>
<span class="text-xs font-semibold text-primary-teal">{{ strtoupper($member->status) }}</span>
</div>
@endforeach
@if ($group->members->isEmpty())
<div class="text-sm text-text-muted">No members yet.</div>
@endif
</div>
</div>
</div>
@endsection
