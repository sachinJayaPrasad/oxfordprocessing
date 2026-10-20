@extends('layouts.admin')
@section('activePage', 'dashboard')
@section('content')
<div class="flex flex-col w-full gap-6">
    <header class="flex flex-col md:flex-row md:items-end md:justify-between gap-4">
        <div>
            <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Admin overview</span>
            <h1 class="font-headline-xl text-headline-xl text-primary tracking-tight">Dashboard</h1>
            <p class="mt-1 text-on-surface-variant">Live totals from website enquiries and the service catalogue.</p>
        </div>
        <a href="{{ route('admin.enquiries') }}" class="inline-flex items-center gap-2 self-start rounded-lg bg-primary px-4 py-2.5 font-semibold text-on-primary hover:bg-primary-container">
            <span class="material-symbols-outlined text-[18px]">folder_shared</span>
            View all enquiries
        </a>
    </header>

    <section class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3" aria-label="Dashboard totals">
        @foreach ([
            ['label' => 'Total enquiries', 'value' => $totalEnquiries, 'icon' => 'inbox'],
            ['label' => 'New enquiries', 'value' => $newEnquiries, 'icon' => 'mark_email_unread'],
            ['label' => 'In progress', 'value' => $inProgressEnquiries, 'icon' => 'pending_actions'],
            ['label' => 'Responded', 'value' => $respondedEnquiries, 'icon' => 'mark_email_read'],
            ['label' => 'Closed', 'value' => $closedEnquiries, 'icon' => 'check_circle'],
            ['label' => 'Services', 'value' => $serviceCount, 'icon' => 'inventory_2'],
        ] as $metric)
            <article class="rounded-xl bg-surface-container-lowest p-5 shadow-sm">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-on-surface-variant">{{ $metric['label'] }}</span>
                    <span class="material-symbols-outlined text-primary">{{ $metric['icon'] }}</span>
                </div>
                <p class="mt-3 text-3xl font-bold text-primary">{{ $metric['value'] }}</p>
            </article>
        @endforeach
    </section>

    <section class="overflow-hidden rounded-xl bg-surface-container-lowest p-5 shadow-sm">
        <div class="mb-4 flex flex-wrap items-center justify-between gap-3">
            <div>
                <h2 class="text-xl font-semibold text-primary">Recent website enquiries</h2>
                <p class="mt-1 text-sm text-on-surface-variant">Latest messages submitted through the contact form.</p>
            </div>
            <a href="{{ route('admin.enquiries') }}" class="text-sm font-semibold text-primary underline underline-offset-2">Manage enquiries</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead class="bg-surface-container-low text-xs uppercase tracking-wider text-on-surface-variant">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Name</th>
                        <th class="px-4 py-3 font-semibold">Contact</th>
                        <th class="px-4 py-3 font-semibold">Service</th>
                        <th class="px-4 py-3 font-semibold">Received</th>
                        <th class="px-4 py-3 font-semibold">Status</th>
                        <th class="px-4 py-3 font-semibold">Details</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container text-sm">
                    @forelse ($recentEnquiries as $enquiry)
                        <tr class="hover:bg-surface-container-low">
                            <td class="px-4 py-3 font-semibold text-primary">{{ $enquiry->name }}</td>
                            <td class="px-4 py-3">
                                <span class="block">{{ $enquiry->phone }}</span>
                                @if ($enquiry->email)
                                    <span class="block text-on-surface-variant">{{ $enquiry->email }}</span>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <span class="block font-medium">{{ $enquiry->service_name }}</span>
                                <span class="block text-on-surface-variant">{{ $enquiry->service_category }}</span>
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap">{{ $enquiry->created_at->format('M j, Y g:i A') }}</td>
                            <td class="px-4 py-3">{{ str($enquiry->status)->replace('_', ' ')->upper() }}</td>
                            <td class="px-4 py-3">
                                <a href="{{ route('admin.enquiries.show', $enquiry) }}" class="text-primary underline underline-offset-2">View</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-10 text-center">
                                <p class="font-semibold text-primary">No enquiries have been submitted yet.</p>
                                <p class="mt-1 text-on-surface-variant">New website form submissions will appear here.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection
