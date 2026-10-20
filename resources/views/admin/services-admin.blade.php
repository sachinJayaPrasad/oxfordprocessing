@extends('layouts.admin')
@section('activePage', 'services')
@section('content')
<div class="flex flex-col gap-6">
    <header class="flex flex-col gap-4 rounded-xl bg-surface-container-lowest p-6 shadow-sm sm:flex-row sm:items-end sm:justify-between">
        <div>
            <span class="font-label-sm uppercase tracking-wider text-secondary">Website content</span>
            <h1 class="text-2xl font-bold text-primary">Service Catalogue</h1>
            <p class="mt-1 text-on-surface-variant">Create, edit, publish, or remove services shown to visitors.</p>
        </div>
        <a href="{{ route('admin.services', [...request()->query(), 'create' => 1]) }}#service-form" class="inline-flex items-center justify-center gap-2 rounded-lg bg-primary px-4 py-3 font-semibold text-on-primary hover:bg-primary-container">
            <span class="material-symbols-outlined" aria-hidden="true">add</span>
            Add service
        </a>
    </header>

    <section class="grid grid-cols-1 gap-3 sm:grid-cols-3" aria-label="Service catalogue totals">
        @foreach ([
            ['label' => 'All services', 'count' => $totalServices],
            ['label' => 'Published', 'count' => $publishedServices],
            ['label' => 'Drafts', 'count' => $draftServices],
        ] as $metric)
            <div class="rounded-xl bg-surface-container-lowest p-4 shadow-sm">
                <p class="text-sm text-on-surface-variant">{{ $metric['label'] }}</p>
                <p class="mt-1 text-2xl font-bold text-primary">{{ $metric['count'] }}</p>
            </div>
        @endforeach
    </section>

    @if (session('category_saved'))
        <p class="rounded-lg bg-emerald-100 p-4 text-emerald-900" role="status">
            @if (session('category_saved') === 'deleted')
                Category deleted successfully. {{ session('category_deleted_services', 0) }} related {{ \Illuminate\Support\Str::plural('service', session('category_deleted_services', 0)) }} deleted.
            @else
                Category {{ session('category_saved') }} successfully.
            @endif
        </p>
    @endif
    @if (session('service_saved'))
        <p class="rounded-lg bg-emerald-100 p-4 text-emerald-900" role="status">
            Service {{ session('service_saved') }} successfully.
        </p>
    @endif
    @if ($errors->any())
        <div class="rounded-lg bg-red-100 p-4 text-red-900" role="alert">
            <p class="font-semibold">Please correct the following:</p>
            <ul class="mt-1 list-inside list-disc">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <details class="group rounded-xl bg-surface-container-lowest p-5 shadow-sm" @if ($errors->has('name') || $errors->has('category')) open @endif>
        <summary class="flex cursor-pointer list-none items-center justify-between gap-4" aria-controls="service-category-manager">
            <span>
                <span class="block text-sm font-semibold uppercase tracking-wider text-secondary">Catalogue organization</span>
                <span class="mt-1 block text-xl font-bold text-primary">Service categories</span>
                <span class="mt-1 block text-sm text-on-surface-variant">Add or rename categories. Deleting a category also permanently deletes all services assigned to it.</span>
            </span>
            <span class="material-symbols-outlined shrink-0 text-primary transition-transform group-open:rotate-180" aria-hidden="true">expand_more</span>
        </summary>
        <div id="service-category-manager" class="mt-5 border-t border-surface-container pt-5">
            <form method="POST" action="{{ route('admin.service-categories.store') }}" class="mb-5 flex flex-col gap-3 sm:flex-row">
                @csrf
                <label class="sr-only" for="new-category-name">New category name</label>
                <input id="new-category-name" name="name" required maxlength="255" value="{{ old('name') }}" placeholder="New category name" class="h-11 min-w-0 flex-1 rounded-lg border border-outline-variant bg-white px-3">
                <button type="submit" class="h-11 rounded-lg bg-primary px-5 font-semibold text-on-primary">Add category</button>
            </form>
            <div class="overflow-x-auto">
                <table class="w-full min-w-[560px] text-left text-sm">
                    <thead class="bg-surface-container-low text-xs uppercase tracking-wider text-on-surface-variant">
                        <tr>
                            <th class="px-4 py-3 font-semibold">Category name</th>
                            <th class="px-4 py-3 font-semibold">Services</th>
                            <th class="px-4 py-3 font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container">
                        @forelse ($categories as $category)
                            <tr>
                                <td class="px-4 py-3">
                                    <form method="POST" action="{{ route('admin.service-categories.update', $category) }}" class="flex min-w-0 flex-wrap items-center gap-2">
                                        @csrf
                                        @method('PUT')
                                        <label class="sr-only" for="category-{{ $category->id }}">Category name</label>
                                        <input id="category-{{ $category->id }}" name="name" required maxlength="255" value="{{ $category->name }}" class="h-10 min-w-0 flex-1 rounded-lg border border-outline-variant bg-white px-3">
                                        <button type="submit" class="font-semibold text-primary underline underline-offset-2">Save</button>
                                    </form>
                                </td>
                                <td class="px-4 py-3 text-on-surface-variant">{{ $category->services_count }} services</td>
                                <td class="px-4 py-3">
                                    <button type="button"
                                        class="font-semibold text-red-700 underline underline-offset-2"
                                        data-category-delete
                                        data-delete-url="{{ route('admin.service-categories.destroy', $category) }}"
                                        data-category-name="{{ $category->name }}"
                                        data-service-count="{{ $category->services_count }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="3" class="px-4 py-6 text-center text-on-surface-variant">No categories yet. Add one before creating a service.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </details>

    <dialog id="delete-category-dialog" aria-labelledby="delete-category-title" aria-describedby="delete-category-message" class="w-[calc(100%-2rem)] max-w-lg rounded-xl p-0 shadow-2xl backdrop:bg-slate-950/50">
        <div class="p-6">
            <h2 id="delete-category-title" class="text-xl font-bold text-primary">Delete service category?</h2>
            <p id="delete-category-message" class="mt-3 text-on-surface-variant"></p>
            <div class="mt-6 flex justify-end gap-3">
                <button type="button" data-category-delete-cancel class="rounded-lg border border-outline-variant px-4 py-2 font-semibold text-primary">Cancel</button>
                <form id="delete-category-form" method="POST" action="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="rounded-lg bg-red-700 px-4 py-2 font-semibold text-white hover:bg-red-800">Delete category and services</button>
                </form>
            </div>
        </div>
    </dialog>
    <script>
        (() => {
            const dialog = document.getElementById('delete-category-dialog');
            const deleteForm = document.getElementById('delete-category-form');
            const message = document.getElementById('delete-category-message');

            document.querySelectorAll('[data-category-delete]').forEach((button) => {
                button.addEventListener('click', () => {
                    const count = Number(button.dataset.serviceCount);
                    const category = button.dataset.categoryName;

                    deleteForm.action = button.dataset.deleteUrl;
                    message.textContent = count > 0
                        ? `The "${category}" category contains ${count} ${count === 1 ? 'service' : 'services'}. Deleting it will also permanently delete ${count === 1 ? 'this service' : 'all these services'}. This cannot be undone.`
                        : `The "${category}" category has no services. This cannot be undone.`;
                    dialog.showModal();
                });
            });

            document.querySelector('[data-category-delete-cancel]').addEventListener('click', () => dialog.close());
            dialog.addEventListener('click', (event) => {
                if (event.target === dialog) {
                    dialog.close();
                }
            });
        })();
    </script>

    @if ($editingService || request()->boolean('create'))
        <section id="service-form" class="scroll-mt-24 rounded-xl bg-surface-container-lowest p-5 shadow-sm sm:p-6">
            <div class="mb-5 flex items-start justify-between gap-4">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-wider text-secondary">{{ $editingService ? 'Update catalogue entry' : 'New catalogue entry' }}</span>
                    <h2 class="mt-1 text-xl font-bold text-primary">{{ $editingService ? 'Edit service' : 'Create service' }}</h2>
                </div>
                <a href="{{ route('admin.services', request()->only(['search', 'category', 'status', 'per_page'])) }}" class="text-primary underline underline-offset-2">Cancel</a>
            </div>
            <form method="POST" action="{{ $editingService ? route('admin.services.update', $editingService) : route('admin.services.store') }}" class="space-y-4">
                @csrf
                @if ($editingService)
                    @method('PUT')
                @endif
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label for="title" class="mb-1 block text-sm font-semibold text-on-surface">Service title</label>
                        <input id="title" name="title" required maxlength="255" value="{{ old('title', $editingService?->title) }}" class="w-full rounded-lg border border-outline-variant bg-white px-3 py-2.5">
                    </div>
                    <div>
                        <label for="category" class="mb-1 block text-sm font-semibold text-on-surface">Category</label>
                        <select id="category" name="category" required class="w-full rounded-lg border border-outline-variant bg-white px-3 py-2.5">
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}" @selected(old('category', $editingService?->category) === $category->name)>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label for="authority" class="mb-1 block text-sm font-semibold text-on-surface">Relevant authority or service area</label>
                        <input id="authority" name="authority" required maxlength="255" value="{{ old('authority', $editingService?->authority) }}" class="w-full rounded-lg border border-outline-variant bg-white px-3 py-2.5">
                    </div>
                    <div class="md:col-span-2">
                        <label for="summary" class="mb-1 block text-sm font-semibold text-on-surface">Summary</label>
                        <textarea id="summary" name="summary" required maxlength="5000" rows="3" class="w-full rounded-lg border border-outline-variant bg-white px-3 py-2.5">{{ old('summary', $editingService?->summary) }}</textarea>
                    </div>
                    <div class="md:col-span-2">
                        <label for="requirements" class="mb-1 block text-sm font-semibold text-on-surface">Requirements</label>
                        <textarea id="requirements" name="requirements" required maxlength="5000" rows="3" class="w-full rounded-lg border border-outline-variant bg-white px-3 py-2.5">{{ old('requirements', $editingService?->requirements) }}</textarea>
                    </div>
                </div>
                <label class="flex items-start gap-3 rounded-lg bg-surface-container-low p-4">
                    <input type="checkbox" name="is_published" value="1" @checked(old('is_published', $editingService?->is_published ?? true)) class="mt-1 rounded border-outline-variant">
                    <span>
                        <span class="block font-semibold text-primary">Publish on the website</span>
                        <span class="block text-sm text-on-surface-variant">Unpublished services are hidden from the public catalogue, detail pages, and enquiry form.</span>
                    </span>
                </label>
                <button type="submit" class="rounded-lg bg-primary px-5 py-3 font-semibold text-on-primary hover:bg-primary-container">
                    {{ $editingService ? 'Save changes' : 'Create service' }}
                </button>
            </form>
        </section>
    @endif

    <section class="rounded-xl bg-surface-container-lowest p-5 shadow-sm">
        <form method="GET" action="{{ route('admin.services') }}" class="grid min-w-0 grid-cols-1 gap-3 sm:grid-cols-2 xl:grid-cols-[minmax(12rem,1fr)_minmax(10rem,14rem)_minmax(8rem,10rem)_minmax(8rem,9rem)_auto]">
            <label class="sr-only" for="service-search">Search services</label>
            <input id="service-search" type="search" name="search" value="{{ $filters['search'] ?? '' }}" placeholder="Search title, category, authority" class="h-11 min-w-0 rounded-lg bg-surface-container-low px-4">
            <label class="sr-only" for="service-category-filter">Filter category</label>
            <select id="service-category-filter" name="category" class="h-11 min-w-0 rounded-lg bg-surface-container-low px-3">
                <option value="">All categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->name }}" @selected(($filters['category'] ?? '') === $category->name)>{{ $category->name }}</option>
                @endforeach
            </select>
            <label class="sr-only" for="service-status-filter">Filter publication status</label>
            <select id="service-status-filter" name="status" class="h-11 min-w-0 rounded-lg bg-surface-container-low px-3">
                <option value="">All statuses</option>
                <option value="published" @selected(($filters['status'] ?? '') === 'published')>Published</option>
                <option value="draft" @selected(($filters['status'] ?? '') === 'draft')>Draft</option>
            </select>
            <label class="sr-only" for="service-per-page">Rows per page</label>
            <select id="service-per-page" name="per_page" class="h-11 min-w-0 rounded-lg bg-surface-container-low px-3">
                @foreach ([10, 20, 50, 100] as $pageSize)
                    <option value="{{ $pageSize }}" @selected($perPage === $pageSize)>{{ $pageSize }} per page</option>
                @endforeach
            </select>
            <button type="submit" class="h-11 rounded-lg bg-primary px-5 font-semibold text-on-primary">Filter</button>
        </form>
    </section>

    <section class="overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm" aria-label="Service catalogue">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[800px] text-left text-sm">
                <thead class="bg-surface-container-low text-xs uppercase tracking-wider text-on-surface-variant">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Service</th>
                        <th class="px-4 py-3 font-semibold">Category</th>
                        <th class="px-4 py-3 font-semibold">Authority</th>
                        <th class="px-4 py-3 font-semibold">Status</th>
                        <th class="px-4 py-3 font-semibold">Public page</th>
                        <th class="px-4 py-3 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container">
                    @forelse ($services as $service)
                        <tr class="align-top hover:bg-surface-container-low">
                            <td class="px-4 py-4">
                                <p class="font-semibold text-primary">{{ $service->title }}</p>
                                <p class="mt-1 text-xs text-on-surface-variant">{{ $service->summary }}</p>
                            </td>
                            <td class="px-4 py-4">{{ $service->category }}</td>
                            <td class="px-4 py-4">{{ $service->authority }}</td>
                            <td class="px-4 py-4">
                                <span class="rounded-full px-2.5 py-1 text-xs font-semibold {{ $service->is_published ? 'bg-green-100 text-green-900' : 'bg-slate-100 text-slate-700' }}">
                                    {{ $service->is_published ? 'Published' : 'Draft' }}
                                </span>
                            </td>
                            <td class="px-4 py-4">
                                @if ($service->is_published)
                                    <a href="{{ route('service.detail', $service->slug) }}" target="_blank" rel="noopener" class="text-primary underline underline-offset-2">Preview</a>
                                @else
                                    <span class="text-on-surface-variant">Hidden</span>
                                @endif
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex flex-wrap gap-3">
                                    <a href="{{ route('admin.services', [...request()->query(), 'edit' => $service->id]) }}#service-form" class="font-semibold text-primary underline underline-offset-2">Edit</a>
                                    <form method="POST" action="{{ route('admin.services.destroy', $service) }}" onsubmit="return confirm('Delete this service? It will also be removed from the public catalogue.')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-semibold text-red-700 underline underline-offset-2">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6" class="px-6 py-12 text-center text-on-surface-variant">No services found. Add a service or change the filters.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <footer class="flex flex-col gap-3 border-t border-surface-container p-4 sm:flex-row sm:items-center sm:justify-between">
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
