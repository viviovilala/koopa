<aside class="w-64 border-r border-border-color bg-bg-sidebar flex flex-col justify-between py-8 px-4 fixed h-full z-20">
    <div class="flex flex-col gap-8">
        <div class="flex items-center gap-3 px-2">
            <div class="bg-brand-purple size-10 rounded-xl flex items-center justify-center text-white shadow-lg shadow-brand-purple/20">
                <span class="material-symbols-outlined font-bold">rocket_launch</span>
            </div>
            <div>
                <h1 class="text-brand-purple text-lg font-extrabold leading-none tracking-tight">Koopa</h1>
                <p class="text-text-muted text-[10px] font-bold uppercase tracking-widest mt-1">Collective Purchase with Controlled Risk</p>
            </div>
        </div>
        <nav class="flex flex-col gap-1.5">
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl sidebar-active font-semibold" href="{{ route('dashboard.owner') }}">
                <span class="material-symbols-outlined text-[22px]">dashboard</span>
                <span class="text-sm">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:bg-white/50 transition-colors" href="{{ route('owner.groups') }}">
                <span class="material-symbols-outlined text-[22px]">inventory_2</span>
                <span class="text-sm">Groups</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:bg-white/50 transition-colors" href="/price-ladder">
                <span class="material-symbols-outlined text-[22px]">group</span>
                <span class="text-sm">Price Ladder</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:bg-white/50 transition-colors" href="{{ route('owner.users.index') }}">
                <span class="material-symbols-outlined text-[22px]">restaurant_menu</span>
                <span class="text-sm">Suppliers</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:bg-white/50 transition-colors" href="/escrow-fees">
                <span class="material-symbols-outlined text-[22px]">analytics</span>
                <span class="text-sm">Escrow &amp; Fees</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:bg-white/50 transition-colors" href="{{ route('owner.users.index') }}">
                <span class="material-symbols-outlined text-[22px]">group</span>
                <span class="text-sm">User Management</span>
            </a>
        </nav>
    </div>
    <div class="flex flex-col gap-1.5">
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:bg-white/50 transition-colors" href="/settings">
            <span class="material-symbols-outlined text-[22px]">settings</span>
            <span class="text-sm">Settings</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 rounded-xl text-text-muted hover:bg-white/50 transition-colors" href="/help-center">
            <span class="material-symbols-outlined text-[22px]">help</span>
            <span class="text-sm">Support</span>
        </a>
    </div>
</aside>
