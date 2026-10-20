@extends('layouts.admin')
@section('activePage', 'enquiries')
@section('content')
<style>
    .enquiry-table {
        width: 100%;
        table-layout: fixed;
    }

    .enquiry-table th:nth-child(1), .enquiry-table td:nth-child(1) { width: 25%; }
    .enquiry-table th:nth-child(2), .enquiry-table td:nth-child(2) { width: 15%; }
    .enquiry-table th:nth-child(3), .enquiry-table td:nth-child(3) { width: 18%; }
    .enquiry-table th:nth-child(4), .enquiry-table td:nth-child(4) { width: 14%; }
    .enquiry-table th:nth-child(5), .enquiry-table td:nth-child(5) { width: 16%; }
    .enquiry-table th:nth-child(6), .enquiry-table td:nth-child(6) { width: 12%; }

    .enquiry-table th,
    .enquiry-table td {
        overflow-wrap: anywhere;
        vertical-align: top;
    }

    @media (max-width: 767px) {
        .enquiry-table thead {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        .enquiry-table,
        .enquiry-table tbody,
        .enquiry-table tbody tr,
        .enquiry-table tbody td {
            display: block;
            width: 100%;
        }

        .enquiry-table tbody tr {
            border-bottom: 1px solid #eaedff;
            padding: 0.5rem 0;
        }

        .enquiry-table tbody td {
            display: grid;
            grid-template-columns: minmax(6.5rem, 32%) minmax(0, 1fr);
            gap: 0.75rem;
            padding: 0.75rem 1rem;
        }

        .enquiry-table tbody td::before {
            content: attr(data-label);
            color: #444650;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .enquiry-table tbody td[colspan] {
            display: block;
        }

        .enquiry-table tbody td[colspan]::before {
            content: none;
        }

        .enquiry-table th,
        .enquiry-table td {
            width: 100% !important;
        }
    }
</style>
<div class="flex flex-col w-full gap-6">
    <header class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 bg-surface-container-lowest p-6 rounded-xl shadow-sm">
        <div>
            <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Website submissions</span>
            <h1 class="font-headline-lg text-headline-lg text-primary tracking-tight">Enquiries Management</h1>
            <p class="font-body-md text-body-md text-on-surface-variant mt-1">Enquiries submitted through the contact form appear here.</p>
        </div>
        <div class="px-4 py-3 rounded-lg bg-surface-container-low text-primary">
            <span class="font-semibold">{{ $totalEnquiries }}</span> total enquiries
        </div>
    </header>

    <section class="grid grid-cols-2 lg:grid-cols-4 gap-3" aria-label="Enquiry status counts">
        @foreach ($statuses as $status)
            <a href="{{ route('admin.enquiries', ['status' => $status]) }}" class="rounded-xl bg-surface-container-lowest p-4 shadow-sm hover:bg-surface-container-low">
                <span class="block text-sm text-on-surface-variant">{{ str($status)->replace('_', ' ')->title() }}</span>
                <span class="block mt-1 text-2xl font-bold text-primary">{{ $statusCounts[$status] ?? 0 }}</span>
            </a>
        @endforeach
    </section>

    <section class="bg-surface-container-lowest rounded-xl p-5 shadow-sm">
        <form method="GET" action="{{ route('admin.enquiries') }}" class="grid grid-cols-1 md:grid-cols-[1fr_12rem_10rem_auto] gap-3">
            <label class="sr-only" for="search">Search enquiries</label>
            <input id="search" name="search" type="search" value="{{ $filters['search'] ?? '' }}" placeholder="Search name, email, phone, or service"
                class="h-11 px-4 rounded-lg bg-surface-container-low text-on-surface focus:outline-none focus:ring-2 focus:ring-primary-container">
            <label class="sr-only" for="status">Filter by status</label>
            <select id="status" name="status" class="h-11 px-4 rounded-lg bg-surface-container-low text-on-surface focus:outline-none focus:ring-2 focus:ring-primary-container">
                <option value="">All statuses</option>
                @foreach ($statuses as $status)
                    <option value="{{ $status }}" @selected(($filters['status'] ?? '') === $status)>{{ str($status)->replace('_', ' ')->title() }}</option>
                @endforeach
            </select>
            <label class="sr-only" for="per_page">Rows per page</label>
            <select id="per_page" name="per_page" class="h-11 px-4 rounded-lg bg-surface-container-low text-on-surface focus:outline-none focus:ring-2 focus:ring-primary-container">
                @foreach ([10, 20, 50, 100] as $pageSize)
                    <option value="{{ $pageSize }}" @selected($perPage === $pageSize)>{{ $pageSize }} per page</option>
                @endforeach
            </select>
            <button type="submit" class="h-11 px-5 rounded-lg bg-primary text-on-primary font-semibold hover:bg-primary-container">Apply filters</button>
        </form>
    </section>

    @if (session('status_updated'))
        <p class="rounded-lg bg-emerald-100 p-4 text-emerald-900" role="status">Enquiry status updated.</p>
    @endif
    @if (session('email_sent'))
        <p class="rounded-lg bg-emerald-100 p-4 text-emerald-900" role="status">
            {{ session('email_sent') === 'received' ? 'Acknowledgement email sent.' : 'Service-completed email sent.' }}
        </p>
    @endif
    @error('email')
        <p class="rounded-lg bg-red-100 p-4 text-red-900" role="alert">{{ $message }}</p>
    @enderror

    <section class="overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm" aria-label="Enquiry submissions">
        <div class="overflow-hidden">
            <table class="enquiry-table text-left text-sm">
                <thead class="bg-surface-container-low text-xs uppercase tracking-wider text-on-surface-variant">
                    <tr>
                        <th class="px-3 py-3 font-semibold">Profile Details</th>
                        <th class="px-3 py-3 font-semibold">Contact</th>
                        <th class="px-3 py-3 font-semibold">Service</th>
                        <th class="px-3 py-3 font-semibold">Submitted</th>
                        <th class="px-3 py-3 font-semibold">Status</th>
                        <th class="px-3 py-3 font-semibold">Send Email</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container">
                    @forelse ($enquiries as $enquiry)
                        <tr class="hover:bg-surface-container-low">
                            <td data-label="Profile Details" class="px-3 py-3">
                                <div class="flex min-w-0 items-start gap-2">
                                    <div class="min-w-0">
                                        <p class="break-words font-semibold text-primary">{{ $enquiry->name }}</p>
                                        <p class="break-all text-xs text-on-surface-variant">{{ $enquiry->email ?: 'Email not provided' }}</p>
                                        <p class="mt-1 text-xs text-on-surface-variant">{{ \Illuminate\Support\Str::limit($enquiry->message, 100) }}</p>
                                    </div>
                                    <a
                                        class="shrink-0 rounded-md p-1 text-primary hover:bg-surface-container-high"
                                        aria-label="View profile description for {{ $enquiry->name }}"
                                        href="{{ route('admin.enquiries.show', $enquiry) }}">
                                        <span class="material-symbols-outlined text-[18px]" aria-hidden="true">visibility</span>
                                    </a>
                                </div>
                            </td>
                            <td data-label="Contact" class="px-3 py-3">{{ $enquiry->phone }}</td>
                            <td data-label="Service" class="px-3 py-3">
                                <span class="block font-medium text-primary">{{ $enquiry->service_name }}</span>
                                <span class="block text-xs text-on-surface-variant">{{ $enquiry->service_category }}</span>
                            </td>
                            <td data-label="Submitted" class="px-3 py-3">{{ $enquiry->created_at->format('M j, Y g:i A') }}</td>
                            <td data-label="Status" class="px-3 py-3">
                                <form method="POST" action="{{ route('admin.enquiries.status', $enquiry) }}" class="flex min-w-0 flex-wrap items-center gap-2">
                                    @csrf
                                    @method('PATCH')
                                    @foreach (request()->only(['search', 'status', 'per_page']) as $key => $value)
                                        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                                    @endforeach
                                    <label class="sr-only" for="status-{{ $enquiry->id }}">Update status</label>
                                    <select id="status-{{ $enquiry->id }}" name="status" class="max-w-full rounded border border-outline-variant bg-white px-2 py-1 text-xs">
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status }}" @selected($enquiry->status === $status)>{{ str($status)->replace('_', ' ')->title() }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="text-xs font-semibold text-primary underline underline-offset-2">Save</button>
                                </form>
                            </td>
                            <td data-label="Send Email" class="px-3 py-3">
                                <div class="grid min-w-0 grid-cols-1 gap-1">
                                    <form method="POST" action="{{ route('admin.enquiries.email', [$enquiry, 'received']) }}">
                                        @csrf
                                        @foreach (request()->only(['search', 'status', 'per_page']) as $key => $value)
                                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                                        @endforeach
                                        <button type="submit" @disabled(! $enquiry->email)
                                            class="w-full rounded bg-amber-400 px-2 py-1.5 text-xs font-semibold text-amber-950 hover:bg-amber-500 disabled:cursor-not-allowed disabled:opacity-50"
                                            title="{{ $enquiry->email ? 'Send acknowledgement email' : 'No email address provided' }}">Received email</button>
                                    </form>
                                    <form method="POST" action="{{ route('admin.enquiries.email', [$enquiry, 'processed']) }}">
                                        @csrf
                                        @foreach (request()->only(['search', 'status', 'per_page']) as $key => $value)
                                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                                        @endforeach
                                        <button type="submit" @disabled(! $enquiry->email)
                                            class="w-full rounded bg-green-600 px-2 py-1.5 text-xs font-semibold text-white hover:bg-green-700 disabled:cursor-not-allowed disabled:opacity-50"
                                            title="{{ $enquiry->email ? 'Send service-completed email' : 'No email address provided' }}">Completed email</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-12 text-center">
                                <p class="font-semibold text-primary">No enquiries found.</p>
                                <p class="mt-1 text-on-surface-variant">New website submissions will appear here.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="flex flex-col gap-3 border-t border-surface-container p-4 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-sm text-on-surface-variant">
                @if ($enquiries->total())
                    Showing {{ $enquiries->firstItem() }}–{{ $enquiries->lastItem() }} of {{ $enquiries->total() }} enquiries
                @else
                    Showing 0 enquiries
                @endif
            </p>
            <nav class="flex flex-wrap items-center justify-center gap-1" aria-label="Enquiry pagination">
                @php
                    $firstPage = max(1, $enquiries->currentPage() - 2);
                    $lastPage = min($enquiries->lastPage(), $enquiries->currentPage() + 2);
                @endphp
                @if ($enquiries->onFirstPage())
                    <span class="rounded border border-outline-variant px-3 py-2 text-sm text-on-surface-variant" aria-disabled="true">Previous</span>
                @else
                    <a href="{{ $enquiries->previousPageUrl() }}" class="rounded border border-outline-variant px-3 py-2 text-sm text-primary hover:bg-surface-container-low">Previous</a>
                @endif

                @foreach (range($firstPage, max($firstPage, $lastPage)) as $page)
                    @if ($page === $enquiries->currentPage())
                        <span class="rounded bg-primary px-3 py-2 text-sm font-semibold text-on-primary" aria-current="page">{{ $page }}</span>
                    @else
                        <a href="{{ $enquiries->url($page) }}" class="rounded border border-outline-variant px-3 py-2 text-sm text-primary hover:bg-surface-container-low" aria-label="Go to page {{ $page }}">{{ $page }}</a>
                    @endif
                @endforeach

                @if ($enquiries->hasMorePages())
                    <a href="{{ $enquiries->nextPageUrl() }}" class="rounded border border-outline-variant px-3 py-2 text-sm text-primary hover:bg-surface-container-low">Next</a>
                @else
                    <span class="rounded border border-outline-variant px-3 py-2 text-sm text-on-surface-variant" aria-disabled="true">Next</span>
                @endif
            </nav>
        </div>
    </section>
</div>

@endsection
