@extends('layouts.main')
@section('activePage', 'contact-us')
@section('content')
        <div class="flex flex-col w-full">
            <!-- Top Dossier Navigation & Page Header -->
            <section class="relative w-full bg-surface-container-low py-margin-md overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-primary/5 via-transparent to-secondary-container/10 pointer-events-none"></div>
                <div class="max-w-7xl mx-auto px-margin relative z-10">
                    <!-- Monospaced Administrative Breadcrumb -->
                    <div class="flex items-center gap-space-xs text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider mb-space-sm">
                        <a class="hover:text-primary transition-colors flex items-center gap-1" data-path="home" href="{{ route('home') }}">
                            <span class="material-symbols-outlined text-[14px]">home</span>
                            <span>Home</span>
                        </a>
                        <span class="text-outline-variant">/</span>
                        <span class="text-primary font-semibold">Institutional Registry Desk & Enquiries</span>
                    </div>
                    <!-- Main Section Header -->
                    <div class="max-w-3xl">
                        <div class="inline-flex items-center gap-space-xs px-space-sm py-1 rounded bg-secondary-fixed text-on-secondary-fixed text-label-sm font-label-sm mb-space-sm font-semibold">
                            <span class="material-symbols-outlined text-[16px] text-secondary">verified_user</span>
                            <span>Official Regional Liaison • Kottayam Directorate</span>
                        </div>
                        <h1 class="font-headline-xl text-headline-xl text-primary tracking-tight font-bold mb-space-sm">
                            Contact Oxford Processing
                        </h1>
                        <p class="font-body-lg text-body-lg text-on-surface-variant">
                            Get in touch with our Kottayam office for reliable guidance on licensing, documentation, education, career, and exam bookings.
                        </p>
                    </div>
                </div>
            </section>
            <!-- 4 Prominent High-Trust Communication Channels Grid -->
            <section class="max-w-7xl mx-auto px-margin -mt-8 relative z-20 w-full">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
                    <!-- Channel 1: Phone & Instant WhatsApp -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center text-primary mb-space-md">
                                <span class="material-symbols-outlined text-[24px]" style="font-variation-settings: 'FILL' 1;">phone_in_talk</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Direct Assistance</span>
                            <h2 class="font-headline-sm text-headline-sm text-primary font-bold mt-1 mb-space-xs">
                                +91 92927 97682
                            </h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Available Mon-Sat 10:00 AM – 5:00 PM for direct call or WhatsApp chat.
                            </p>
                        </div>
                        <div>
                            <a class="w-full inline-flex items-center justify-center gap-space-xs bg-[#25D366] hover:bg-[#1fae53] text-white font-label-md text-label-md py-space-sm px-space-md rounded shadow-sm transition-colors font-semibold" href="https://api.whatsapp.com/send?phone=919292797682" rel="noopener" target="_blank">
                                <svg aria-hidden="true" class="h-[18px] w-[18px] shrink-0" data-whatsapp-icon viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.52 3.48A11.8 11.8 0 0 0 12.12 0C5.58 0 .25 5.33.25 11.87c0 2.09.55 4.13 1.6 5.93L.15 24l6.36-1.67a11.82 11.82 0 0 0 5.61 1.42h.01C18.67 23.75 24 18.42 24 11.88c0-3.17-1.24-6.15-3.48-8.4Z" fill="currentColor" transform="translate(0 .1) scale(.99)" />
                                    <path d="M8.1 6.7c-.3-.67-.61-.68-.9-.69h-.76c-.27 0-.7.1-1.06.5-.36.4-1.4 1.37-1.4 3.35s1.44 3.88 1.64 4.15c.2.26 2.78 4.46 6.87 6.08 3.4 1.34 4.1 1.08 4.84 1.01.74-.07 2.39-.97 2.72-1.9.34-.93.34-1.73.24-1.9-.1-.16-.36-.26-.76-.46-.4-.2-2.39-1.18-2.75-1.31-.37-.13-.63-.2-.9.2-.26.4-1.03 1.3-1.26 1.57-.23.27-.46.3-.86.1-.4-.2-1.7-.63-3.25-2.01-1.2-1.07-2.02-2.4-2.25-2.8-.23-.4-.03-.62.17-.82.18-.18.4-.47.6-.7.2-.24.26-.4.4-.67.13-.27.06-.5-.04-.7-.1-.2-.88-2.2-1.23-3Z" fill="#25D366" transform="translate(3.5 1.8) scale(.72)" />
                                </svg>
                                <span>Chat on WhatsApp</span>
                            </a>
                        </div>
                    </div>
                    <!-- Channel 2: Official Correspondence Email -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center text-primary mb-space-md">
                                <span class="material-symbols-outlined text-[24px]" style="font-variation-settings: 'FILL' 1;">mail</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Dossier Queries</span>
                            <h2 class="font-title-md text-title-md text-primary font-bold mt-1 mb-space-xs truncate" title="oxfordprocessingkottayam@gmail.com">
                                oxfordprocessingkottayam@gmail.com
                            </h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Send us your queries and document questions. We respond promptly during business hours.
                            </p>
                        </div>
                        <div>
                            <a class="w-full inline-flex items-center justify-center gap-space-xs bg-primary-container text-on-primary hover:bg-primary font-label-md text-label-md py-space-sm px-space-md rounded transition-colors font-semibold" href="mailto:oxfordprocessingkottayam@gmail.com">
                                <span class="material-symbols-outlined text-[18px] text-secondary-container">send</span>
                                <span>Send Email</span>
                            </a>
                        </div>
                    </div>
                    <!-- Channel 3: Operating Schedule & Turnaround -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center text-primary mb-space-md">
                                <span class="material-symbols-outlined text-[24px]" style="font-variation-settings: 'FILL' 1;">calendar_clock</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Consultation Hours</span>
                            <div class="mt-1 mb-space-xs">
                                <p class="font-title-md text-title-md text-primary font-bold">Monday – Saturday</p>
                                <p class="font-headline-sm text-headline-sm text-primary font-semibold">10:00 AM – 5:00 PM</p>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Sunday: Closed for routine filing. Verified emergency candidate escalations handled by scheduled appointment.
                            </p>
                        </div>
                        <div class="inline-flex items-center gap-space-xs px-space-sm py-1.5 rounded bg-surface-container text-on-surface-variant text-label-sm font-label-sm">
                            <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span>
                            <span>Desk Active Today • Kerala Time (IST)</span>
                        </div>
                    </div>
                    <!-- Channel 4: Walk-in Physical Registry -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center text-primary mb-space-md">
                                <span class="material-symbols-outlined text-[24px]" style="font-variation-settings: 'FILL' 1;">domain</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Physical Chambers</span>
                            <h2 class="font-title-md text-title-md text-primary font-bold mt-1 mb-space-xs">
                                Manorama Junction, Kottayam
                            </h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm line-clamp-3">
                                Reliable Building, 1st Floor, Room No. 201, Behind KC Mammen Mappila Hall, Kottayam, Kerala.
                            </p>
                        </div>
                        <div class="flex items-center justify-between pt-space-xs">
                            <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Connect with us:</span>
                            <div class="flex items-center gap-space-xs">
                                <a aria-label="Oxford Processing Facebook" class="w-8 h-8 rounded bg-surface-container hover:bg-primary hover:text-on-primary text-primary transition-colors flex items-center justify-center" href="https://www.facebook.com/share/1DsmKKdZHB/" rel="noopener" target="_blank">
                                    <span class="material-symbols-outlined text-[16px]">public</span>
                                </a>
                                <a aria-label="Oxford Processing Instagram" class="w-8 h-8 rounded bg-surface-container hover:bg-primary hover:text-on-primary text-primary transition-colors flex items-center justify-center" href="https://www.instagram.com/oxfordprocessingkottayam/" rel="noopener" target="_blank">
                                    <span class="material-symbols-outlined text-[16px]">photo_camera</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Interactive Enquiry Form & Kottayam Office Guidance (2 Columns) -->
            <section class="max-w-7xl mx-auto px-margin py-margin-lg w-full">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-start">
                    <!-- Left Column: Professional Enquiry Form (7 Cols) -->
                    <div class="lg:col-span-7 bg-surface-container-lowest p-space-xl rounded-xl shadow-md">
                        <div class="flex items-center justify-between pb-space-md mb-space-md bg-surface-container-low -mx-space-xl -mt-space-xl p-space-lg rounded-t-xl">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-secondary-container text-[20px]" style="font-variation-settings: 'FILL' 1;">description</span>
                                    <h2 class="font-headline-md text-headline-md text-primary font-bold">Candidate Enquiry Dossier</h2>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Submit initial credentials for expedited screening by an accredited processing officer.</p>
                            </div>
                            <div class="hidden sm:flex flex-col items-end">
                                <span class="font-label-sm text-label-sm text-on-surface-variant uppercase font-semibold">Security Level</span>
                                <span class="font-label-sm text-label-sm text-emerald-800 font-bold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px]">lock</span> Encrypted
                                </span>
                            </div>
                        </div>
                        <form class="flex flex-col gap-space-md" id="oxfordEnquiryForm" method="POST" action="{{ route('contact.enquiries.store') }}">
                            @csrf
                            @if ($errors->any())
                                <div class="rounded-lg bg-red-100 p-space-md text-red-900" role="alert">
                                    <p class="font-semibold">Please review the highlighted form details.</p>
                                    <ul class="mt-1 list-inside list-disc">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- Row 1: Full Name & Phone Number -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-md text-label-md text-on-surface font-semibold flex items-center justify-between" for="fullName">
                                        <span>Full Legal Name <span class="text-error font-bold">*</span></span>
                                        <span class="text-outline text-label-sm font-label-sm">As in Passport</span>
                                    </label>
                                    <div class="relative">
                                        <input class="w-full h-11 px-space-md bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:outline-none focus:bg-surface focus:ring-2 focus:ring-primary-container/20 transition-all placeholder:text-outline" id="fullName" name="name" placeholder="Enter your full name" required type="text" value="{{ old('name') }}" />
                                    </div>
                                    <span class="text-label-sm font-label-sm text-outline">Verified legal identity format accepted</span>
                                </div>
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-md text-label-md text-on-surface font-semibold flex items-center justify-between" for="phoneNumber">
                                        <span>Phone Number (WhatsApp) <span class="text-error font-bold">*</span></span>
                                        <span class="text-secondary text-label-sm font-label-sm font-medium">WhatsApp Enabled</span>
                                    </label>
                                    <div class="relative">
                                        <input class="w-full h-11 px-space-md bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:outline-none focus:bg-surface focus:ring-2 focus:ring-primary-container/20 transition-all placeholder:text-outline" id="phoneNumber" name="phone" placeholder="+91 98765 43210" required type="tel" value="{{ old('phone') }}" />
                                    </div>
                                    <span class="text-label-sm font-label-sm text-outline">Primary number for dispatch and registration status alerts</span>
                                </div>
                            </div>
                            <!-- Row 2: Email Address (Optional) -->
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-md text-label-md text-on-surface font-semibold flex items-center justify-between" for="emailAddress">
                                    <span>Email Address</span>
                                    <span class="text-outline text-label-sm font-label-sm">Optional / Recommended for Written Audits</span>
                                </label>
                                <div class="relative">
                                    <input class="w-full h-11 px-space-md bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:outline-none focus:bg-surface focus:ring-2 focus:ring-primary-container/20 transition-all placeholder:text-outline" id="emailAddress" name="email" placeholder="you@example.com" type="email" value="{{ old('email') }}" />
                                    <span class="material-symbols-outlined absolute right-3 top-3 text-[18px] text-outline-variant">alternate_email</span>
                                </div>
                            </div>
                            <!-- Row 3: Cascading Service Category & Specific Service -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                                <!-- Field 4: Service Category -->
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-md text-label-md text-on-surface font-semibold" for="serviceCategory">
                                        Service Domain <span class="text-error font-bold">*</span>
                                    </label>
                                    <div class="relative">
                                        <select class="w-full h-11 px-space-md pr-10 bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:outline-none focus:bg-surface focus:ring-2 focus:ring-primary-container/20 transition-all appearance-none cursor-pointer" id="serviceCategory" name="service_category" onchange="updateServiceOptions(this.value)" required>
                                            <option value="">Select a service category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category }}" @selected(old('service_category', $selectedService?->category) === $category)>{{ $category }}</option>
                                            @endforeach
                                        </select>
                                        <span class="material-symbols-outlined absolute right-3 top-3 text-[20px] text-outline pointer-events-none">expand_more</span>
                                    </div>
                                </div>
                                <!-- Field 5: Specific Service of Interest -->
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-md text-label-md text-on-surface font-semibold" for="specificService">
                                        Specific Service of Interest <span class="text-error font-bold">*</span>
                                    </label>
                                    <div class="relative">
                                        <select class="w-full h-11 px-space-md pr-10 bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:outline-none focus:bg-surface focus:ring-2 focus:ring-primary-container/20 transition-all appearance-none cursor-pointer" id="specificService" name="service_id" required>
                                            <option value="">Select a service</option>
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}" data-category="{{ $service->category }}" @selected((string) old('service_id', $selectedService?->id) === (string) $service->id)>{{ $service->title }}</option>
                                            @endforeach
                                        </select>
                                        <span class="material-symbols-outlined absolute right-3 top-3 text-[20px] text-outline pointer-events-none">expand_more</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Field 6: Candidate Narrative / Specific Questions -->
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-md text-label-md text-on-surface font-semibold flex items-center justify-between" for="candidateMessage">
                                    <span>Specific Questions or Processing Requirements <span class="text-error font-bold">*</span></span>
                                    <span class="text-outline text-label-sm font-label-sm">Min. 20 Characters</span>
                                </label>
                                <textarea class="w-full p-space-md bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded shadow-sm focus:outline-none focus:bg-surface focus:ring-2 focus:ring-primary-container/20 transition-all placeholder:text-outline resize-none" id="candidateMessage" name="message" placeholder="Tell us how we can help with your selected service..." required rows="4">{{ old('message') }}</textarea>
                            </div>
                            <!-- Privacy Consent Checkbox -->
                            <div class="flex items-start gap-space-sm pt-space-xs">
                                <input class="w-4 h-4 rounded text-primary mt-1 focus:ring-primary-container cursor-pointer accent-primary-container" id="privacyConsent" name="privacy_consent" value="1" required type="checkbox" />
                                <label class="font-body-sm text-body-sm text-on-surface-variant cursor-pointer select-none" for="privacyConsent">
                                    I agree to Oxford Processing contacting me regarding this enquiry in accordance with the
                                    <a class="text-primary font-semibold hover:underline" data-path="privacy-policy" href="#">Privacy Policy</a>.
                                </label>
                            </div>
                            <!-- High-Trust Institutional Security Notice -->
                            <div class="bg-surface-container rounded p-space-md flex items-start gap-space-sm">
                                <span class="material-symbols-outlined text-secondary text-[22px] shrink-0 mt-0.5">policy</span>
                                <div class="flex flex-col gap-0.5">
                                    <span class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wide">Bureau Document Security Protocol</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        <strong>Security note:</strong> Please do not submit original passports, ID certificates, or sensitive personal documents via this public contact form. Document review is conducted through verified, secure direct channels.
                                    </p>
                                </div>
                            </div>
                            <!-- Submit Action Area -->
                            <div class="pt-space-sm flex flex-col sm:flex-row items-center justify-between gap-space-md">
                                <button class="w-full sm:w-auto inline-flex items-center justify-center gap-space-sm bg-primary-container hover:bg-primary text-on-primary font-label-md text-label-md px-space-xl py-space-md rounded shadow transition-all font-semibold" type="submit">
                                    <span class="material-symbols-outlined text-secondary-container text-[20px]">send_and_archive</span>
                                    <span>Submit Enquiry</span>
                                </button>
                                <div class="flex items-center gap-2 text-label-sm font-label-sm text-on-surface-variant">
                                    <span class="material-symbols-outlined text-emerald-700 text-[18px]">verified</span>
                                    <span>Response guaranteed within official working hours</span>
                                </div>
                            </div>
                        </form>
                        <!-- Simulated Interactive Success Notification (Triggered on submit) -->
                        @if (session('enquiry_submitted'))
                        <div class="mt-space-md p-space-md rounded bg-surface-container-high shadow-md" id="enquirySuccessToast">
                            <div class="flex items-start gap-space-sm">
                                <span class="material-symbols-outlined text-emerald-800 text-[24px] shrink-0">task_alt</span>
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md text-primary font-bold">Enquiry received</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                        Thank you! Your enquiry has been received. Our Kottayam consultancy team will contact you within business hours.
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <!-- Right Column: Kottayam Office Location & Guidance (5 Cols) -->
                    <div class="lg:col-span-5 flex flex-col gap-gutter">
                        <!-- Regional Map & Location Overview Card -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm overflow-hidden">
                            <div class="flex items-center justify-between mb-space-md">
                                <div>
                                    <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Physical Office</span>
                                    <h3 class="font-headline-sm text-headline-sm text-primary font-bold">Kottayam City Centre</h3>
                                </div>
                                <span class="px-space-sm py-1 bg-surface-container rounded text-label-sm font-label-sm font-semibold text-primary">
                                    Room 201
                                </span>
                            </div>
                            <!-- Stylized Map Container with data-location -->
                            <div class="w-full h-56 bg-surface-container-high rounded bg-cover bg-center relative shadow-inner overflow-hidden mb-space-md flex flex-col justify-end p-space-md" data-alt="Photorealistic aerial street map perspective of Manorama Junction in Kottayam Kerala showing urban road intersections and clean commercial registry office pins with Deep Oxford Navy markers." data-location="Reliable Building, Manorama Junction, Kottayam, Kerala, India" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBPztyQqtPWRlmZ2vNgEauxYO66U2g3b1Ocd9XvRAH6cRcXYV5J1aVcnGALZLqyezNE6SBa2rToLauNc9nun0qQwZLxL93aO8qJb4kIl57Gl4SdtTAuXb-z8ikPSfBjPlp2fMydRLmIlPkWOM97y7Ou0G5PWpX_0zpaTjw7f1IuJlcMZaClkx-nJwApTPYnCwxaBetfaetEWCs1SAPVOksNL4DA1z2shdcMVECiogED1X-FYSfbyQkf')">
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/20 to-transparent"></div>
                                <div class="relative z-10 flex items-center justify-between text-on-primary">
                                    <div class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-secondary-container text-[20px]">pin_drop</span>
                                        <span class="font-label-md text-label-md font-bold">Manorama Junction, Kottayam</span>
                                    </div>
                                    <a class="inline-flex items-center gap-1 text-label-sm font-label-sm bg-surface-container-lowest/90 text-primary px-space-sm py-1 rounded font-semibold hover:bg-surface-container-lowest transition-colors" href="https://maps.google.com/?q=Manorama+Junction+Kottayam+Kerala" rel="noopener" target="_blank">
                                        <span>Open Maps</span>
                                        <span class="material-symbols-outlined text-[14px]">open_in_new</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Address Specifics Block -->
                            <div class="flex flex-col gap-space-sm bg-surface-container-low p-space-md rounded mb-space-md">
                                <div class="flex items-start gap-space-xs">
                                    <span class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">apartment</span>
                                    <div>
                                        <p class="font-label-md text-label-md text-primary font-bold">Official Postal Address</p>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                            Reliable Building, 1st Floor, Room No. 201,<br />
                                            Behind KC Mammen Mappila Hall,<br />
                                            Manorama Junction, Kottayam, Kerala — 686001, India.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Key Regional Landmarks -->
                            <div class="flex flex-col gap-space-xs mb-space-md">
                                <span class="font-label-sm text-label-sm text-primary uppercase font-bold tracking-wider">Prominent Landmarks</span>
                                <ul class="flex flex-col gap-1 text-body-sm font-body-sm text-on-surface-variant">
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-secondary text-[16px]">navigation</span>
                                        <span>Directly behind KC Mammen Mappila Hall</span>
                                    </li>
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-secondary text-[16px]">navigation</span>
                                        <span>2 minutes walk from Malayala Manorama Central Junction</span>
                                    </li>
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-secondary text-[16px]">navigation</span>
                                        <span>8 minutes drive from Kottayam Railway Station (KTYM)</span>
                                    </li>
                                    <li class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-secondary text-[16px]">navigation</span>
                                        <span>Convenient KSRTC Central Bus Station connectivity</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Parking & Accessibility Note for In-Person Consultation -->
                            <div class="bg-surface-container-high rounded p-space-md flex items-start gap-space-sm">
                                <span class="material-symbols-outlined text-primary text-[20px] shrink-0 mt-0.5">local_parking</span>
                                <div>
                                    <p class="font-label-md text-label-md text-primary font-bold">Parking & Candidate Accessibility</p>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                        Dedicated visitor vehicle parking is available on-site at Reliable Building basement. Accessible ramp entrance and lift service to the 1st Floor (Room 201) are open for all walk-in candidates during standard desk hours (10:00 AM – 5:00 PM).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Corporate Assurance Dossier Box -->
                        <div class="bg-primary text-on-primary rounded-xl p-space-lg shadow-sm relative overflow-hidden">
                            <div class="flex items-center gap-space-xs mb-space-sm text-secondary-container">
                                <span class="material-symbols-outlined text-[20px]">verified</span>
                                <span class="font-label-sm text-label-sm uppercase font-semibold tracking-wider">Direct Verification Policy</span>
                            </div>
                            <h4 class="font-headline-sm text-headline-sm font-bold mb-space-xs text-on-primary">
                                In-Person Original Document Sighting
                            </h4>
                            <p class="font-body-sm text-body-sm text-primary-fixed-dim mb-space-md">
                                For apostille, embassy legalization, and HRD verification, candidates may request an in-person appointment for on-the-spot receipt generation and vault transit insurance.
                            </p>
                            <div class="flex items-center gap-space-md">
                                <div class="flex flex-col">
                                    <span class="font-title-md text-title-md font-bold text-secondary-container">100%</span>
                                    <span class="font-label-sm text-label-sm text-primary-fixed-dim">Chain of Custody</span>
                                </div>
                                <div class="w-px h-8 bg-surface-container-variant/30"></div>
                                <div class="flex flex-col">
                                    <span class="font-title-md text-title-md font-bold text-secondary-container">ISO 9001</span>
                                    <span class="font-label-sm text-label-sm text-primary-fixed-dim">Quality Protocol</span>
                                </div>
                                <div class="w-px h-8 bg-surface-container-variant/30"></div>
                                <div class="flex flex-col">
                                    <span class="font-title-md text-title-md font-bold text-secondary-container">Kottayam</span>
                                    <span class="font-label-sm text-label-sm text-primary-fixed-dim">Official Hub</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Frequently Asked Registry Enquiries Bar -->
            <section class="max-w-7xl mx-auto px-margin pb-margin-lg w-full">
                <div class="bg-surface-container-low rounded-xl p-space-lg shadow-sm">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-md pb-space-md mb-space-md border-b border-surface-container-high">
                        <div>
                            <span class="font-label-sm text-label-sm text-secondary uppercase font-semibold tracking-wider">Preparation Guidance</span>
                            <h3 class="font-headline-sm text-headline-sm text-primary font-bold">Frequently Asked Desk Inquiries</h3>
                        </div>
                        <a class="inline-flex items-center gap-1 font-label-md text-label-md text-primary font-semibold hover:text-secondary transition-colors" data-path="services" href="{{ route('services') }}">
                            <span>Explore All 30 Processing Categories</span>
                            <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                        <div class="flex flex-col gap-1">
                            <span class="font-title-md text-title-md text-primary font-semibold flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-secondary text-[18px]">help_outline</span>
                                Can I walk in without an appointment?
                            </span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Yes, our Kottayam chambers welcome walk-in consultations from 10:00 AM to 5:00 PM (Mon-Sat). However, pre-booked enquiry dossiers are prioritized for expedited file review.
                            </p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="font-title-md text-title-md text-primary font-semibold flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-secondary text-[18px]">receipt_long</span>
                                How do I receive fee receipts?
                            </span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Every transaction is provided an official GST-compliant stamped Oxford Processing payment receipt sent to your registered WhatsApp and email address immediately upon filing.
                            </p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="font-title-md text-title-md text-primary font-semibold flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-secondary text-[18px]">security_update_good</span>
                                Are physical originals required right away?
                            </span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                No. Initial eligibility reviews (NMBI, DataFlow, WES, CGFNS) require only high-resolution scanned PDF copies. Physical certificates are requested only during final attestation stages.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Client-side Interactive Dynamic Dropdown & Submission Logic -->
            <script>
                function updateServiceOptions(category) {
                    const specificSelect = document.getElementById('specificService');
                    if (!specificSelect) return;

                    const serviceOptions = Array.from(specificSelect.options).slice(1);
                    serviceOptions.forEach(function(option) {
                        const matchesCategory = category && option.dataset.category === category;
                        option.hidden = !matchesCategory;
                        option.disabled = !matchesCategory;
                    });

                    const selectedOption = specificSelect.options[specificSelect.selectedIndex];
                    if (selectedOption && selectedOption.dataset.category !== category) {
                        specificSelect.value = '';
                    }

                    return;

                    const optionsMap = {
                        'licensing': [{
                                val: 'nmbi-dl',
                                text: 'NMBI Decision Letter (Ireland Nursing)'
                            },
                            {
                                val: 'nmbi-reval',
                                text: 'NMBI Re-evaluation & Extension'
                            },
                            {
                                val: 'nmbi-recog',
                                text: 'NMBI Qualification Recognition'
                            },
                            {
                                val: 'nmbi-pin',
                                text: 'NMBI Pin Registration Finalization'
                            },
                            {
                                val: 'dataflow',
                                text: 'DataFlow PSV (Gulf / DHA / MOH / HAAD)'
                            },
                            {
                                val: 'cgfns',
                                text: 'CGFNS Certification (USA / New Zealand)'
                            },
                            {
                                val: 'nmc-uk',
                                text: 'NMC UK Registration Support'
                            }
                        ],
                        'documentation': [{
                                val: 'mea-apostille',
                                text: 'MEA Apostille (Hague Convention)'
                            },
                            {
                                val: 'embassy-attest',
                                text: 'UAE / Kuwait / Saudi Embassy Attestation'
                            },
                            {
                                val: 'hrd-state',
                                text: 'State HRD & NORKA Authentication'
                            },
                            {
                                val: 'wes-eval',
                                text: 'WES / ICAS / CES Evaluation Filing'
                            },
                            {
                                val: 'passport-renew',
                                text: 'Tatkaal / Normal Passport Consultation'
                            }
                        ],
                        'education': [{
                                val: 'uk-admit',
                                text: 'UK University Master\'s & Top-up Admissions'
                            },
                            {
                                val: 'ireland-study',
                                text: 'Ireland Third-Level Admissions'
                            },
                            {
                                val: 'aus-sop',
                                text: 'Australia GTE & Visa Compliance'
                            },
                            {
                                val: 'cred-mapping',
                                text: 'International Academic Credit Mapping'
                            }
                        ],
                        'career': [{
                                val: 'nhs-nurse',
                                text: 'NHS Trust & Private Hospital Direct Placement'
                            },
                            {
                                val: 'hse-ireland',
                                text: 'HSE Ireland Staff Nurse Allocation'
                            },
                            {
                                val: 'cv-ats',
                                text: 'UK / EU Standard ATS Resume Restructuring'
                            },
                            {
                                val: 'interview-prep',
                                text: 'Clinical Panel Interview Mock Coaching'
                            }
                        ],
                        'exam': [{
                                val: 'oet-booking',
                                text: 'OET Test Seat Reservation & Mock Desk'
                            },
                            {
                                val: 'ielts-academic',
                                text: 'IELTS Academic Booking Support'
                            },
                            {
                                val: 'prometric-gulf',
                                text: 'Prometric & Pearson VUE Center Scheduling'
                            },
                            {
                                val: 'cbt-prep',
                                text: 'NMC UK CBT Practice Sessions'
                            }
                        ]
                    };

                    const selectedOptions = optionsMap[category] || [];
                    specificSelect.innerHTML = '';

                    selectedOptions.forEach(function(opt) {
                        const el = document.createElement('option');
                        el.value = opt.val;
                        el.textContent = opt.text;
                        specificSelect.appendChild(el);
                    });
                }

                updateServiceOptions(document.getElementById('serviceCategory')?.value);
            </script>
        </div>
    
@endsection
