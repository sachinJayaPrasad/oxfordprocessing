<header class="fixed top-0 left-0 right-0 xl:left-72 h-16 bg-surface-container-lowest/90 backdrop-blur-md shadow-[0_1px_8px_rgba(4,38,94,0.04)] z-40 px-4 lg:px-8 flex items-center justify-between gap-4">
    <div class="hidden sm:flex items-center gap-4 flex-1 max-w-xl">
        <div class="flex items-center gap-2 text-on-surface-variant font-body-sm text-body-sm"><span class="material-symbols-outlined text-[18px]">corporate_fare</span><span>Oxford Bureau</span><span class="text-outline-variant">/</span><span class="text-primary font-medium">Management Portal</span></div>
    </div>
    <details class="relative ml-auto xl:hidden">
        <summary class="flex cursor-pointer list-none items-center gap-2 rounded-lg border border-outline-variant px-3 py-2 text-sm font-semibold text-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
            <span class="material-symbols-outlined text-lg" aria-hidden="true">menu</span>
            Menu
        </summary>
        <nav class="absolute right-0 top-full mt-2 flex w-56 flex-col rounded-xl border border-surface-container-high bg-surface-container-lowest p-2 text-sm font-medium text-primary shadow-xl" aria-label="Admin navigation">
            <a class="rounded-lg px-3 py-2.5 hover:bg-surface-container-low" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="rounded-lg px-3 py-2.5 hover:bg-surface-container-low" href="{{ route('admin.enquiries') }}">Enquiries</a>
            <a class="rounded-lg px-3 py-2.5 hover:bg-surface-container-low" href="{{ route('admin.services') }}">Services</a>
            <a class="rounded-lg px-3 py-2.5 hover:bg-surface-container-low" href="{{ route('admin.testimonials') }}">Testimonials</a>
        </nav>
    </details>
</header>