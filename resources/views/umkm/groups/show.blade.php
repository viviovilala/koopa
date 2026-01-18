@extends('layouts.umkm')
@php($active = 'groups')

@section('content')
<div class="flex items-center justify-between mb-6">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Group Buying</p>
<h1 class="text-2xl font-bold">{{ $group->title }}</h1>
<p class="text-sm text-koopa-muted">Status: {{ strtoupper($group->status) }}</p>
</div>
<div class="flex gap-3">
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('groups.edit', $group) }}">Edit</a>
<a class="px-4 py-2 rounded-xl border border-koopa-border text-sm font-semibold" href="{{ route('groups.index') }}">Back</a>
</div>
</div>

<div class="bg-white border border-koopa-border rounded-2xl p-6 shadow-card space-y-4">
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Target Volume</p>
<p class="font-semibold">{{ $group->target_volume }} {{ $group->unit }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Current Volume</p>
<p class="font-semibold">{{ $group->current_volume }} {{ $group->unit }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Cut-off</p>
<p class="font-semibold">{{ optional($group->cut_off_at)->format('Y-m-d H:i') ?? '-' }}</p>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Drop Point</p>
<p class="font-semibold">{{ $group->dropPoint->name ?? '-' }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Product</p>
<p class="font-semibold">{{ $group->product->name ?? '-' }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Leader</p>
<p class="font-semibold">{{ $group->leader->display_name ?? $group->leader->name ?? '-' }}</p>
</div>
<div>
<p class="text-xs uppercase tracking-widest text-koopa-muted">Currency</p>
<p class="font-semibold">{{ $group->currency }}</p>
</div>
</div>
</div>
@endsection
