<header class="sticky top-0 z-30 flex items-center justify-between border-b border-border-color bg-white/80 backdrop-blur-md px-8 py-4">
    <div class="flex items-center gap-10">
        <div class="relative group">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-text-muted text-[20px] group-focus-within:text-primary-teal transition-colors">search</span>
            <input class="bg-bg-main border-border-color border rounded-xl pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary-teal focus:border-primary-teal w-64 placeholder:text-text-muted/60" placeholder="Search groups or suppliers..." type="text"/>
        </div>
        <div class="flex flex-col min-w-[240px]">
            <div class="flex justify-between items-end mb-1.5">
                <span class="text-[10px] font-bold text-brand-purple uppercase tracking-wider">Group Health</span>
                <span class="text-[10px] font-semibold text-text-muted">{{ $owner['near_cutoff'] }} groups near cut-off</span>
            </div>
            <div class="h-1.5 w-full bg-gray-100 rounded-full overflow-hidden border border-border-color/50">
                <div class="h-full bg-brand-purple rounded-full" style="width: 65%;"></div>
            </div>
        </div>
        <div class="flex items-center gap-3 px-6 border-l border-border-color">
            <div class="flex flex-col">
                <span class="text-[9px] uppercase tracking-widest text-text-muted font-bold">Savings Health</span>
                <div class="flex items-center gap-2">
                    <span class="text-xl font-extrabold text-text-main leading-none">{{ $owner['savings_health'] }}/100</span>
                    <div class="pixel-heart"></div>
                </div>
            </div>
        </div>
    </div>
    @php($authUser = Auth::user())
    <div class="flex items-center gap-5">
        <button class="relative p-2 rounded-xl border border-border-color bg-white text-text-muted hover:bg-bg-main transition-colors">
            <span class="material-symbols-outlined text-[22px]">notifications</span>
            <span class="absolute top-1.5 right-1.5 size-2 bg-alert-orange rounded-full border-2 border-white"></span>
        </button>
        @if ($authUser?->profile_image_url)
        <div class="h-9 w-9 rounded-full border-2 border-brand-purple bg-cover bg-center shadow-sm" style="background-image: url('{{ $authUser->profile_image_url }}');"></div>
        @else
        <div class="h-9 w-9 rounded-full border-2 border-brand-purple bg-brand-purple text-white flex items-center justify-center text-xs font-bold">
            {{ strtoupper(substr($authUser?->display_name ?? $authUser?->name ?? 'O', 0, 2)) }}
        </div>
        @endif
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="text-[10px] font-bold uppercase text-text-muted hover:text-brand-purple" type="submit">Logout</button>
        </form>
    </div>
</header>
