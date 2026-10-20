@extends('layouts.admin')
@section('activePage', 'testimonials')
@section('content')
<div class="flex flex-col gap-6">
    <header class="flex flex-col gap-4 rounded-xl bg-surface-container-lowest p-6 shadow-sm sm:flex-row sm:items-end sm:justify-between">
        <div>
            <span class="font-label-sm uppercase tracking-wider text-secondary">Website content</span>
            <h1 class="text-2xl font-bold text-primary">Testimonials</h1>
            <p class="mt-1 text-on-surface-variant">Manage customer feedback displayed on the homepage.</p>
        </div>
        @unless ($editingTestimonial)
            <a href="{{ route('admin.testimonials', ['create' => 1]) }}#testimonial-form" class="inline-flex items-center justify-center gap-2 rounded-lg bg-primary px-4 py-3 font-semibold text-on-primary hover:bg-primary-container">
                <span class="material-symbols-outlined" aria-hidden="true">add</span>
                Add testimonial
            </a>
        @endunless
    </header>

    @if (session('testimonial_saved'))
        <p class="rounded-lg bg-emerald-100 p-4 text-emerald-900" role="status">Testimonial {{ session('testimonial_saved') }} successfully.</p>
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

    @if ($editingTestimonial || request()->boolean('create'))
        <section id="testimonial-form" class="scroll-mt-24 rounded-xl bg-surface-container-lowest p-5 shadow-sm sm:p-6">
            <div class="mb-5 flex items-start justify-between gap-4">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-wider text-secondary">{{ $editingTestimonial ? 'Update website feedback' : 'New website feedback' }}</span>
                    <h2 class="mt-1 text-xl font-bold text-primary">{{ $editingTestimonial ? 'Edit testimonial' : 'Create testimonial' }}</h2>
                </div>
                <a href="{{ route('admin.testimonials') }}" class="text-primary underline underline-offset-2">Cancel</a>
            </div>
            <form method="POST" action="{{ $editingTestimonial ? route('admin.testimonials.update', $editingTestimonial) : route('admin.testimonials.store') }}" class="space-y-4">
                @csrf
                @if ($editingTestimonial)
                    @method('PUT')
                @endif
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label for="customer_name" class="mb-1 block text-sm font-semibold text-on-surface">Customer name</label>
                        <input id="customer_name" name="customer_name" required maxlength="255" value="{{ old('customer_name', $editingTestimonial?->customer_name) }}" class="w-full rounded-lg border border-outline-variant bg-white px-3 py-2.5">
                    </div>
                    <div>
                        <label for="designation" class="mb-1 block text-sm font-semibold text-on-surface">Role or context <span class="font-normal text-on-surface-variant">(optional)</span></label>
                        <input id="designation" name="designation" maxlength="255" value="{{ old('designation', $editingTestimonial?->designation) }}" placeholder="e.g. Nursing registration" class="w-full rounded-lg border border-outline-variant bg-white px-3 py-2.5">
                    </div>
                    <div>
                        <label for="rating" class="mb-1 block text-sm font-semibold text-on-surface">Rating</label>
                        <select id="rating" name="rating" required class="w-full rounded-lg border border-outline-variant bg-white px-3 py-2.5">
                            @foreach (range(5, 1) as $rating)
                                <option value="{{ $rating }}" @selected((int) old('rating', $editingTestimonial?->rating ?? 5) === $rating)>{{ $rating }} {{ \Illuminate\Support\Str::plural('star', $rating) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label for="content" class="mb-1 block text-sm font-semibold text-on-surface">Testimonial</label>
                        <textarea id="content" name="content" required maxlength="3000" rows="5" class="w-full rounded-lg border border-outline-variant bg-white px-3 py-2.5">{{ old('content', $editingTestimonial?->content) }}</textarea>
                    </div>
                </div>
                <input type="hidden" name="is_published" value="0">
                <label class="flex items-start gap-3 rounded-lg bg-surface-container-low p-4">
                    <input type="checkbox" name="is_published" value="1" @checked(old('is_published', $editingTestimonial?->is_published ?? true)) class="mt-1 rounded border-outline-variant">
                    <span>
                        <span class="block font-semibold text-primary">Publish on the homepage</span>
                        <span class="block text-sm text-on-surface-variant">Published testimonials appear on the homepage. Uncheck to save this testimonial as a draft.</span>
                    </span>
                </label>
                <button type="submit" class="rounded-lg bg-primary px-5 py-3 font-semibold text-on-primary hover:bg-primary-container">
                    {{ $editingTestimonial ? 'Save changes' : 'Create testimonial' }}
                </button>
            </form>
        </section>
    @endif

    <section class="overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm" aria-label="Testimonial list">
        <div class="overflow-x-auto">
            <table class="w-full min-w-[760px] text-left text-sm">
                <thead class="bg-surface-container-low text-xs uppercase tracking-wider text-on-surface-variant">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Customer</th>
                        <th class="px-4 py-3 font-semibold">Feedback</th>
                        <th class="px-4 py-3 font-semibold">Rating</th>
                        <th class="px-4 py-3 font-semibold">Status</th>
                        <th class="px-4 py-3 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container">
                    @forelse ($testimonials as $testimonial)
                        <tr class="align-top hover:bg-surface-container-low">
                            <td class="px-4 py-4">
                                <p class="font-semibold text-primary">{{ $testimonial->customer_name }}</p>
                                @if ($testimonial->designation)
                                    <p class="mt-1 text-xs text-on-surface-variant">{{ $testimonial->designation }}</p>
                                @endif
                            </td>
                            <td class="max-w-md px-4 py-4">{{ \Illuminate\Support\Str::limit($testimonial->content, 180) }}</td>
                            <td class="px-4 py-4 whitespace-nowrap">{{ $testimonial->rating }} / 5</td>
                            <td class="px-4 py-4">
                                <span class="rounded-full px-2.5 py-1 text-xs font-semibold {{ $testimonial->is_published ? 'bg-green-100 text-green-900' : 'bg-slate-100 text-slate-700' }}">
                                    {{ $testimonial->is_published ? 'Published' : 'Draft' }}
                                </span>
                            </td>
                            <td class="px-4 py-4">
                                <div class="flex flex-wrap gap-3">
                                    <a href="{{ route('admin.testimonials', ['edit' => $testimonial->id]) }}#testimonial-form" class="font-semibold text-primary underline underline-offset-2">Edit</a>
                                    <form method="POST" action="{{ route('admin.testimonials.destroy', $testimonial) }}" onsubmit="return confirm('Delete this testimonial?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-semibold text-red-700 underline underline-offset-2">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="px-6 py-12 text-center text-on-surface-variant">No testimonials yet. Add one to display customer feedback on the homepage.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <footer class="flex flex-col gap-3 border-t border-surface-container p-4 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-sm text-on-surface-variant">Showing {{ $testimonials->firstItem() ?? 0 }}–{{ $testimonials->lastItem() ?? 0 }} of {{ $testimonials->total() }} testimonials</p>
            <div>{{ $testimonials->links() }}</div>
        </footer>
    </section>
</div>
@endsection
