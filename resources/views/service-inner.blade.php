@extends('layouts.main')
@section('activePage', 'services')
@section('content')
    <div class="flex flex-col w-full">
        <div class="bg-surface-container-high py-space-xs px-margin">
            <nav aria-label="Breadcrumb" class="max-w-7xl mx-auto flex flex-wrap items-center gap-space-xs text-label-sm font-label-sm text-on-surface-variant">
                <a class="hover:text-primary transition-colors" href="{{ route('home') }}">Home</a>
                <span class="text-outline-variant">/</span>
                <a class="hover:text-primary transition-colors" href="{{ route('services') }}">Services</a>
                <span class="text-outline-variant">/</span>
                <span aria-current="page" class="text-primary font-semibold">{{ $service['title'] }}</span>
            </nav>
        </div>

        <section class="relative bg-primary text-on-primary overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary-container/85 to-primary opacity-95"></div>
            <div class="relative max-w-7xl mx-auto px-margin py-margin-md lg:py-margin-lg">
                <div class="max-w-3xl flex flex-col gap-space-md">
                    <span class="inline-flex self-start items-center gap-1.5 px-3 py-1 rounded bg-secondary-container text-on-secondary-fixed text-label-sm font-label-sm font-semibold tracking-wide uppercase shadow-sm">
                        <span class="material-symbols-outlined text-[15px]">verified_user</span>
                        {{ $service['category'] }}
                    </span>
                    <h1 class="text-headline-xl font-headline-xl lg:text-display-lg lg:font-display-lg text-on-primary tracking-tight font-bold">
                        {{ $service['title'] }}
                    </h1>
                    <p class="text-body-lg font-body-lg text-primary-fixed-dim leading-relaxed">
                        {{ $service['summary'] }}
                    </p>
                    <div class="bg-primary-container/60 p-space-md rounded-lg">
                        <span class="block text-label-sm font-label-sm text-secondary-fixed font-semibold">Relevant authority or service area</span>
                        <span class="text-title-md font-title-md text-on-primary font-bold">{{ $service['authority'] }}</span>
                    </div>
                    <div class="flex flex-wrap items-center gap-space-md pt-space-sm">
                        <a class="inline-flex items-center justify-center gap-space-xs bg-secondary hover:bg-tertiary-container text-on-primary font-label-md text-label-md px-space-lg py-3 rounded-lg shadow-md transition-all" href="https://api.whatsapp.com/send?phone=919292797682&amp;text={{ rawurlencode('Hello Oxford Processing, I am inquiring about ' . $service['title'] . '.') }}" rel="noopener" target="_blank">
                            <svg aria-hidden="true" class="h-5 w-5 shrink-0" data-whatsapp-icon viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.52 3.48A11.8 11.8 0 0 0 12.12 0C5.58 0 .25 5.33.25 11.87c0 2.09.55 4.13 1.6 5.93L.15 24l6.36-1.67a11.82 11.82 0 0 0 5.61 1.42h.01C18.67 23.75 24 18.42 24 11.88c0-3.17-1.24-6.15-3.48-8.4Z" fill="currentColor" transform="translate(0 .1) scale(.99)" />
                                <path d="M8.1 6.7c-.3-.67-.61-.68-.9-.69h-.76c-.27 0-.7.1-1.06.5-.36.4-1.4 1.37-1.4 3.35s1.44 3.88 1.64 4.15c.2.26 2.78 4.46 6.87 6.08 3.4 1.34 4.1 1.08 4.84 1.01.74-.07 2.39-.97 2.72-1.9.34-.93.34-1.73.24-1.9-.1-.16-.36-.26-.76-.46-.4-.2-2.39-1.18-2.75-1.31-.37-.13-.63-.2-.9.2-.26.4-1.03 1.3-1.26 1.57-.23.27-.46.3-.86.1-.4-.2-1.7-.63-3.25-2.01-1.2-1.07-2.02-2.4-2.25-2.8-.23-.4-.03-.62.17-.82.18-.18.4-.47.6-.7.2-.24.26-.4.4-.67.13-.27.06-.5-.04-.7-.1-.2-.88-2.2-1.23-3Z" fill="#25D366" transform="translate(3.5 1.8) scale(.72)" />
                            </svg>
                            <span>Enquire on WhatsApp</span>
                        </a>
                        <a class="inline-flex items-center justify-center gap-space-xs bg-surface-container-lowest text-primary hover:bg-surface-container font-label-md text-label-md px-space-lg py-3 rounded-lg shadow-sm transition-all" href="{{ route('contact') }}?service={{ $slug }}#oxfordEnquiryForm">
                            <span class="material-symbols-outlined text-[20px] text-primary">mail</span>
                            <span>Send Website Enquiry</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full py-margin-md bg-surface-container-low">
            <div class="max-w-7xl mx-auto px-margin grid grid-cols-1 lg:grid-cols-3 gap-gutter-lg">
                <div class="lg:col-span-2 space-y-space-md">
                    <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
                        <span class="text-label-sm font-label-sm text-secondary uppercase font-semibold tracking-wider">Service overview</span>
                        <h2 class="text-headline-sm font-headline-sm text-primary font-bold mt-space-xs">How we can assist</h2>
                        <p class="text-body-md font-body-md text-on-surface-variant mt-space-sm leading-relaxed">{{ $service['summary'] }}</p>
                        <p class="text-body-sm font-body-sm text-on-surface-variant mt-space-sm leading-relaxed">
                            Our team can help you understand the paperwork, organize the application materials, and follow the steps relevant to this service. Requirements and decisions are set by the relevant authority and may vary by applicant.
                        </p>
                    </div>

                    <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
                        <span class="text-label-sm font-label-sm text-secondary uppercase font-semibold tracking-wider">Getting started</span>
                        <h2 class="text-headline-sm font-headline-sm text-primary font-bold mt-space-xs">Typical support steps</h2>
                        <ol class="mt-space-md space-y-space-sm">
                            <li class="flex gap-space-sm rounded-lg bg-surface p-space-md">
                                <span class="w-7 h-7 shrink-0 rounded-full bg-primary-container text-on-primary flex items-center justify-center text-label-sm font-label-sm font-bold">1</span>
                                <div><h3 class="font-title-md text-title-md text-primary font-semibold">Discuss your requirements</h3><p class="text-body-sm font-body-sm text-on-surface-variant mt-0.5">Share your goal and receive guidance relevant to {{ $service['title'] }}.</p></div>
                            </li>
                            <li class="flex gap-space-sm rounded-lg bg-surface p-space-md">
                                <span class="w-7 h-7 shrink-0 rounded-full bg-primary-container text-on-primary flex items-center justify-center text-label-sm font-label-sm font-bold">2</span>
                                <div><h3 class="font-title-md text-title-md text-primary font-semibold">Review the document checklist</h3><p class="text-body-sm font-body-sm text-on-surface-variant mt-0.5">Confirm which records and supporting materials apply to your circumstances.</p></div>
                            </li>
                            <li class="flex gap-space-sm rounded-lg bg-surface p-space-md">
                                <span class="w-7 h-7 shrink-0 rounded-full bg-primary-container text-on-primary flex items-center justify-center text-label-sm font-label-sm font-bold">3</span>
                                <div><h3 class="font-title-md text-title-md text-primary font-semibold">Prepare and check your materials</h3><p class="text-body-sm font-body-sm text-on-surface-variant mt-0.5">Organize the required information before proceeding with the relevant application or booking.</p></div>
                            </li>
                            <li class="flex gap-space-sm rounded-lg bg-surface p-space-md">
                                <span class="w-7 h-7 shrink-0 rounded-full bg-secondary text-on-primary flex items-center justify-center text-label-sm font-label-sm font-bold">4</span>
                                <div><h3 class="font-title-md text-title-md text-primary font-semibold">Follow up on next steps</h3><p class="text-body-sm font-body-sm text-on-surface-variant mt-0.5">Get support understanding updates and any further actions requested by the authority.</p></div>
                            </li>
                        </ol>
                    </div>
                </div>

                <aside class="space-y-space-md">
                    <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
                        <span class="text-label-sm font-label-sm text-secondary uppercase font-semibold tracking-wider">Indicative checklist</span>
                        <h2 class="text-headline-sm font-headline-sm text-primary font-bold mt-space-xs">Potentially required materials</h2>
                        <p class="text-body-sm font-body-sm text-on-surface-variant mt-space-sm leading-relaxed">{{ $service['requirements'] }}</p>
                        <p class="text-label-sm font-label-sm text-outline mt-space-md">The final checklist depends on your circumstances and the latest authority requirements.</p>
                    </div>
                    <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
                        <h2 class="text-headline-sm font-headline-sm text-primary font-bold">Important note</h2>
                        <p class="text-body-sm font-body-sm text-on-surface-variant mt-space-sm leading-relaxed">
                            Oxford Processing provides document preparation and guidance. Application acceptance, assessment, booking availability, and final decisions remain with the relevant authority or service provider.
                        </p>
                    </div>
                    @if ($relatedServices->isNotEmpty())
                        <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm">
                            <h2 class="text-headline-sm font-headline-sm text-primary font-bold">Related services</h2>
                            <div class="mt-space-sm space-y-1">
                                @foreach ($relatedServices as $relatedService)
                                    <a class="block rounded-lg p-space-sm text-body-sm font-body-sm text-on-surface hover:bg-surface-container hover:text-primary transition-colors" href="{{ route('service.detail', ['slug' => $relatedService['slug']]) }}">
                                        {{ $relatedService['title'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </aside>
            </div>
        </section>
    </div>
@endsection
