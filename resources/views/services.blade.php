@extends('layouts.main')
@section('activePage', 'services')
@section('content')
<div class="w-full bg-surface">
    <section class="mx-auto max-w-7xl px-margin pb-margin-lg pt-space-xl">
        <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-3xl">
                <span class="font-label-sm font-semibold uppercase tracking-widest text-secondary">Service catalogue</span>
                <h1 class="mt-2 text-3xl font-bold tracking-tight text-primary">Explore our services</h1>
                <p class="mt-3 text-body-lg text-on-surface-variant">Browse our current services and their requirements. Published changes from our team appear here.</p>
            </div>
            <div class="rounded-xl bg-surface-container-lowest px-6 py-4 shadow-sm">
                <span class="block text-2xl font-bold text-primary">{{ $totalPublishedServices }}</span>
                <span class="text-sm text-on-surface-variant">Published services</span>
            </div>
        </div>

        <form method="GET" action="{{ route('services') }}" class="mt-8 grid grid-cols-1 gap-3 rounded-xl bg-surface-container-lowest p-4 shadow-sm md:grid-cols-[1fr_18rem_auto]">
            <label class="sr-only" for="service-search">Search services</label>
            <input id="service-search" type="search" name="search" value="{{ $filters['search'] ?? '' }}" placeholder="Search by service, category, authority, or keyword"
                class="h-12 rounded-lg bg-surface-container-low px-4 text-on-surface focus:outline-none focus:ring-2 focus:ring-primary-container">
            <label class="sr-only" for="service-category">Filter by category</label>
            <select id="service-category" name="category" class="h-12 rounded-lg bg-surface-container-low px-4 text-on-surface focus:outline-none focus:ring-2 focus:ring-primary-container">
                <option value="">All categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category }}" @selected(($filters['category'] ?? '') === $category)>{{ $category }}</option>
                @endforeach
            </select>
            <div class="flex gap-2">
                <button type="submit" class="h-12 flex-1 rounded-lg bg-primary px-5 font-semibold text-on-primary hover:bg-primary-container">Search</button>
                @if (($filters['search'] ?? null) || ($filters['category'] ?? null))
                    <a href="{{ route('services') }}" class="inline-flex h-12 items-center rounded-lg bg-surface-container-high px-4 font-medium text-primary">Clear</a>
                @endif
            </div>
        </form>

        <div class="mt-8 grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3">
            @forelse ($services as $service)
                <article class="flex flex-col justify-between rounded-xl bg-surface-container-lowest p-6 shadow-sm transition-shadow hover:shadow-md">
                    <div>
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <span class="rounded bg-surface-container px-2.5 py-1 text-xs font-semibold uppercase tracking-wide text-primary">{{ $service->category }}</span>
                            <span class="text-xs font-medium text-on-surface-variant">{{ $service->authority }}</span>
                        </div>
                        <h2 class="mt-4 text-xl font-semibold text-primary">{{ $service->title }}</h2>
                        <p class="mt-2 text-sm leading-relaxed text-on-surface-variant">{{ $service->summary }}</p>
                        <div class="mt-4 rounded-lg bg-surface-container-low p-4">
                            <h3 class="text-xs font-semibold uppercase tracking-wide text-on-surface-variant">Requirements</h3>
                            <p class="mt-1 text-sm text-on-surface">{{ \Illuminate\Support\Str::limit($service->requirements, 220) }}</p>
                        </div>
                    </div>
                    <div class="mt-5 flex flex-wrap items-center justify-between gap-3">
                        <a href="{{ route('service.detail', $service->slug) }}" class="inline-flex items-center gap-1 font-semibold text-primary hover:text-secondary">
                            View details <span class="material-symbols-outlined text-base" aria-hidden="true">arrow_forward</span>
                        </a>
                        <a href="{{ route('contact', ['service' => $service->slug]) }}#oxfordEnquiryForm" class="rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-on-primary hover:bg-primary-container">Enquire</a>
                    </div>
                </article>
            @empty
                <div class="rounded-xl bg-surface-container-lowest p-8 text-center shadow-sm md:col-span-2 xl:col-span-3">
                    <h2 class="font-semibold text-primary">No matching services found</h2>
                    <p class="mt-1 text-sm text-on-surface-variant">Try a different search or category.</p>
                    <a href="{{ route('services') }}" class="mt-4 inline-block font-semibold text-primary underline underline-offset-2">Show all services</a>
                </div>
            @endforelse
        </div>

        <footer class="mt-8 flex flex-col gap-3 rounded-xl bg-surface-container-lowest p-4 shadow-sm sm:flex-row sm:items-center sm:justify-between">
            <p class="text-sm text-on-surface-variant">
                @if ($services->total())
                    Showing {{ $services->firstItem() }}–{{ $services->lastItem() }} of {{ $services->total() }} services
                @else
                    Showing 0 services
                @endif
            </p>
            <div>{{ $services->links() }}</div>
        </footer>
    </section>
</div>
@endsection
