<header class="fixed top-0 left-0 right-0 lg:left-72 h-16 bg-surface-container-lowest/90 backdrop-blur-md shadow-[0_1px_8px_rgba(4,38,94,0.04)] z-40 px-4 lg:px-8 flex items-center justify-between gap-4">
    <div class="hidden sm:flex items-center gap-4 flex-1 max-w-xl">
        <div class="flex items-center gap-2 text-on-surface-variant font-body-sm text-body-sm"><span class="material-symbols-outlined text-[18px]">corporate_fare</span><span>Oxford Bureau</span><span class="text-outline-variant">/</span><span class="text-primary font-medium">Management Portal</span></div>
    </div>
    <nav class="flex items-center gap-3 text-sm font-medium text-primary lg:hidden" aria-label="Admin navigation">
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.enquiries') }}">Enquiries</a>
        <a href="{{ route('admin.services') }}">Services</a>
    </nav>
</header>