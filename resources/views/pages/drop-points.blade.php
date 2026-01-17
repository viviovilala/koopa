@extends('layouts.koopa')

@section('title', 'Koopa | Drop Points')

@section('content')
<div class="flex min-h-screen">
@include('partials.koopa-sidebar-owner')
<main class="flex-1 ml-64 min-h-screen">
@include('partials.koopa-header-owner')
<div class="p-8 max-w-[1200px] mx-auto space-y-8">
<section class="standard-card p-6">
<div class="flex items-start justify-between">
<div>
<h1 class="text-2xl font-bold">Drop Point Operations</h1>
<p class="text-sm text-text-muted">Temporary Poin A for each group. Max 4–6 hours.</p>
</div>
<span class="text-[10px] font-bold uppercase tracking-widest text-text-muted">Leader Role</span>
</div>
<div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
@foreach ($dropPoints as $point)
<div class="standard-card p-5">
<p class="text-[10px] font-bold uppercase tracking-widest text-text-muted">{{ $point['group'] }}</p>
<h3 class="text-lg font-bold mt-2">{{ $point['location'] }}</h3>
<p class="text-sm text-text-muted mt-1">Window: {{ $point['window'] }}</p>
<p class="text-sm text-text-muted">Leader: {{ $point['leader'] }}</p>
<div class="mt-4 flex items-center justify-between text-sm">
<span class="text-text-muted">Checklist</span>
<span class="font-bold">{{ $point['checked'] }}/{{ $point['total'] }}</span>
</div>
</div>
@endforeach
</div>
</section>
<section class="standard-card p-6">
<h2 class="text-lg font-bold mb-4">Rules</h2>
<ul class="text-sm text-text-muted space-y-2">
<li>Leader is not financially responsible.</li>
<li>Drop point is temporary and limited time.</li>
<li>Supplier delivers once; UMKM pick up or arrange delivery.</li>
</ul>
</section>
</div>
</main>
</div>
@endsection
