@extends('layouts.owner')

@section('title', 'Koopa | Drop Points')

@section('content')
<div class="space-y-8">
<section class="standard-card p-6">
<div class="flex items-start justify-between">
<div>
<h1 class="text-2xl font-bold">Drop Points</h1>
<p class="text-sm text-text-muted">Monitor pickup windows and group readiness.</p>
</div>
<span class="text-[10px] font-bold uppercase tracking-widest text-text-muted">Owner View</span>
</div>
<div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
@foreach ($dropPoints as $point)
<div class="bg-bg-main border border-border-color rounded-card p-4">
<p class="text-sm font-semibold">{{ $point['group'] }}</p>
<p class="text-xs text-text-muted">{{ $point['location'] }}</p>
<div class="mt-3 flex items-center justify-between text-xs text-text-muted">
<span>Window: {{ $point['window'] }}</span>
<span>{{ $point['checked'] }}/{{ $point['total'] }} checked</span>
</div>
</div>
@endforeach
</div>
</section>
</div>
@endsection
