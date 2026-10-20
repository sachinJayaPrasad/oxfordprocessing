<aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-lowest z-50 flex flex-col justify-between shadow-[0_1px_8px_rgba(4,38,94,0.04)]">
    <div class="flex flex-col flex-1 overflow-y-auto">
        <a href="{{ route('admin.dashboard') }}" class="px-6 py-5 flex items-center gap-3.5 bg-surface-container-low">
            <div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center text-on-primary shadow-sm">
                <span class="material-symbols-outlined text-[22px]">account_balance</span>
            </div>
            <div class="flex flex-col">
                <span class="font-headline-sm text-headline-sm tracking-tight text-primary leading-tight">Oxford Processing</span>
                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">Admin Control Desk</span>
            </div>
        </a>

        <div class="px-6 pt-4 pb-2">
            <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Main Navigation</span>
        </div>
        <nav class="flex-1 px-3 space-y-1" aria-label="Admin navigation">
            @foreach ([
                'dashboard' => ['label' => 'Dashboard', 'icon' => 'grid_view', 'route' => 'admin.dashboard'],
                'enquiries' => ['label' => 'Enquiries', 'icon' => 'folder_shared', 'route' => 'admin.enquiries'],
                'services' => ['label' => 'Services', 'icon' => 'inventory_2', 'route' => 'admin.services'],
            ] as $page => $item)
                <a href="{{ route($item['route']) }}"
                   @if ($activePage === $page) aria-current="page" @endif
                   class="{{ $activePage === $page ? 'flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary-container text-on-primary font-title-md' : 'flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-body-md text-body-md' }}">
                    <span class="material-symbols-outlined text-[20px]">{{ $item['icon'] }}</span>
                    <span>{{ $item['label'] }}</span>
                </a>
            @endforeach
        </nav>

        <div class="px-3 pt-2 pb-4">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-lg text-error hover:bg-error-container hover:text-on-error-container transition-colors font-body-md text-body-md">
                    <span class="material-symbols-outlined text-[20px]">logout</span>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </div>

    <div class="p-4 m-3 rounded-lg bg-surface-container-low">
        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Signed in as</span>
        <div class="mt-2 flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-primary-container text-on-primary flex items-center justify-center font-label-md text-label-md font-semibold">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>
            <div class="flex flex-col min-w-0">
                <span class="font-label-md text-label-md text-on-surface font-semibold truncate">{{ auth()->user()->name }}</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant truncate">{{ auth()->user()->email }}</span>
            </div>
        </div>
    </div>
</aside>
