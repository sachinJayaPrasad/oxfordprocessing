@extends('layouts.admin')
@section('activePage', 'enquiries')
@section('content')
<div class="mx-auto flex w-full max-w-5xl flex-col gap-6 pt-4">
    <a href="{{ route('admin.enquiries') }}" class="inline-flex items-center self-start rounded-lg bg-primary px-4 py-2.5 font-semibold text-on-primary transition-colors hover:bg-primary-container">
        Back to enquiries
    </a>

    <header class="rounded-xl bg-surface-container-lowest p-6 shadow-sm">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
            <div>
                <span class="text-sm font-semibold uppercase tracking-wider text-secondary">Website enquiry details</span>
                <h1 class="mt-1 text-2xl font-bold text-primary">{{ $enquiry->name }}</h1>
                <p class="mt-1 text-sm text-on-surface-variant">Submitted {{ $enquiry->created_at->format('M j, Y g:i A') }}</p>
            </div>
            <span class="inline-flex self-start rounded-full bg-surface-container-high px-3 py-1 text-sm font-semibold text-primary">
                {{ str($enquiry->status)->replace('_', ' ')->title() }}
            </span>
        </div>
    </header>

    @if (session('status_updated'))
        <p class="rounded-lg bg-emerald-100 p-4 text-emerald-900" role="status">Enquiry status updated.</p>
    @endif
    @if (session('email_sent'))
        <p class="rounded-lg bg-emerald-100 p-4 text-emerald-900" role="status">
            {{ session('email_sent') === 'received' ? 'Acknowledgement email sent.' : 'Service-completed email sent.' }}
        </p>
    @endif
    @if ($errors->any())
        <div class="rounded-lg bg-red-100 p-4 text-red-900" role="alert">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <section class="grid grid-cols-1 gap-6 lg:grid-cols-[minmax(0,1fr)_18rem]">
        <div class="flex flex-col gap-6">
            <article class="rounded-xl bg-surface-container-lowest p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-primary">Contact details</h2>
                <dl class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-wide text-on-surface-variant">Name</dt>
                        <dd class="mt-1 break-words font-medium text-on-surface">{{ $enquiry->name }}</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-wide text-on-surface-variant">Phone</dt>
                        <dd class="mt-1 break-words font-medium text-on-surface">{{ $enquiry->phone }}</dd>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="text-xs font-semibold uppercase tracking-wide text-on-surface-variant">Email</dt>
                        <dd class="mt-1 break-all font-medium text-on-surface">{{ $enquiry->email ?: 'Not provided' }}</dd>
                    </div>
                </dl>
            </article>

            <article class="rounded-xl bg-surface-container-lowest p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-primary">Requested service</h2>
                <dl class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-wide text-on-surface-variant">Service</dt>
                        <dd class="mt-1 font-medium text-on-surface">{{ $enquiry->service_name }}</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-semibold uppercase tracking-wide text-on-surface-variant">Category</dt>
                        <dd class="mt-1 font-medium text-on-surface">{{ $enquiry->service_category }}</dd>
                    </div>
                </dl>
            </article>

            <article class="rounded-xl bg-surface-container-lowest p-6 shadow-sm">
                <h2 class="text-lg font-semibold text-primary">Profile description</h2>
                <p class="mt-3 whitespace-pre-wrap break-words leading-relaxed text-on-surface">{{ $enquiry->message }}</p>
            </article>

            @if ($enquiry->admin_notes)
                <article class="rounded-xl bg-surface-container-lowest p-6 shadow-sm">
                    <h2 class="text-lg font-semibold text-primary">Admin notes</h2>
                    <p class="mt-3 whitespace-pre-wrap break-words leading-relaxed text-on-surface">{{ $enquiry->admin_notes }}</p>
                </article>
            @endif
        </div>

        <aside class="flex flex-col gap-6">
            <section class="rounded-xl bg-surface-container-lowest p-5 shadow-sm">
                <h2 class="text-lg font-semibold text-primary">Send email</h2>
                @if ($enquiry->email)
                    <p class="mt-1 break-all text-sm text-on-surface-variant">To: {{ $enquiry->email }}</p>
                    <div class="mt-4 flex flex-col gap-3">
                        <form method="POST" action="{{ route('admin.enquiries.email', [$enquiry, 'received']) }}">
                            @csrf
                            <button type="submit" class="w-full rounded-md bg-amber-400 px-3 py-2.5 text-sm font-semibold text-amber-950 hover:bg-amber-500">
                                Send received email
                            </button>
                        </form>
                        <form method="POST" action="{{ route('admin.enquiries.email', [$enquiry, 'processed']) }}">
                            @csrf
                            <button type="submit" class="w-full rounded-md bg-green-600 px-3 py-2.5 text-sm font-semibold text-white hover:bg-green-700">
                                Send completed email
                            </button>
                        </form>
                    </div>
                @else
                    <p class="mt-2 text-sm text-on-surface-variant">No email address was provided for this enquiry.</p>
                @endif
            </section>

            <section class="rounded-xl bg-surface-container-lowest p-5 shadow-sm">
                <h2 class="text-lg font-semibold text-primary">Update status</h2>
                <form method="POST" action="{{ route('admin.enquiries.status', $enquiry) }}" class="mt-4 flex flex-col gap-3">
                    @csrf
                    @method('PATCH')
                    <label for="enquiry-status" class="text-sm font-medium text-on-surface">Status</label>
                    <select id="enquiry-status" name="status" class="h-11 rounded-lg border border-outline-variant bg-white px-3">
                        @foreach ($statuses as $status)
                            <option value="{{ $status }}" @selected(old('status', $enquiry->status) === $status)>{{ str($status)->replace('_', ' ')->title() }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="rounded-lg bg-primary px-4 py-2.5 font-semibold text-on-primary">Save status</button>
                </form>
            </section>

            <section class="rounded-xl bg-surface-container-lowest p-5 shadow-sm">
                <h2 class="text-lg font-semibold text-primary">Timeline</h2>
                <dl class="mt-4 space-y-3 text-sm">
                    <div>
                        <dt class="text-on-surface-variant">Received</dt>
                        <dd class="font-medium text-on-surface">{{ $enquiry->created_at->format('M j, Y g:i A') }}</dd>
                    </div>
                    <div>
                        <dt class="text-on-surface-variant">Last updated</dt>
                        <dd class="font-medium text-on-surface">{{ $enquiry->updated_at->format('M j, Y g:i A') }}</dd>
                    </div>
                </dl>
            </section>
        </aside>
    </section>
</div>
@endsection
