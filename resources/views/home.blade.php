@extends('layouts.main')
@section('activePage', 'home')
@section('content')
        <div class="flex flex-col w-full">
            <!-- SECTION 1: HERO SECTION -->
            <section class="relative w-full overflow-hidden bg-surface py-space-xl lg:py-margin-lg">
                <!-- Subtle architectural background accents -->
                <div class="absolute inset-0 pointer-events-none opacity-40">
                    <div class="absolute -top-24 right-0 w-[600px] h-[600px] bg-surface-container-high rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 left-10 w-[450px] h-[450px] bg-surface-container-lowest rounded-full blur-2xl"></div>
                </div>
                <div class="max-w-7xl mx-auto px-margin relative z-10">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
                        <!-- Hero Text Content -->
                        <div class="lg:col-span-7 flex flex-col gap-space-md">
                            <!-- Institutional Ribbon Badge -->
                            <div class="inline-flex items-center gap-space-xs self-start px-space-md py-1.5 rounded-full bg-surface-container-lowest shadow-sm">
                                <span class="material-symbols-outlined text-secondary text-[18px]">verified</span>
                                <span class="font-label-sm text-label-sm text-primary tracking-wide uppercase font-semibold">Institutional Compliance & Credentialing</span>
                            </div>
                            <!-- Headline -->
                            <h1 class="font-headline-xl text-headline-xl lg:font-display-lg lg:text-display-lg text-primary tracking-tight font-bold">
                                Bridging Talent, <br />
                                <span class="text-secondary">Building Future.</span>
                            </h1>
                            <!-- Subtitle -->
                            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                                Reliable guidance and application support for overseas registration, documentation, education, career preparation, and exam-related services.
                            </p>
                            <!-- Trust Highlights Banner -->
                            <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col sm:flex-row items-start sm:items-center gap-space-sm text-on-surface">
                                <span class="material-symbols-outlined text-secondary text-[22px] shrink-0">assured_workload</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant font-medium leading-relaxed">
                                    <strong class="text-primary font-semibold">Consultancy Based in Kottayam, Kerala</strong> • 30+ Core Application & Licensing Solutions • Transparent, Dedicated Guidance
                                </p>
                            </div>
                            <!-- CTAs -->
                            <div class="flex flex-wrap items-center gap-space-md pt-space-xs">
                                <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-3 rounded-lg bg-primary-container text-on-primary font-label-md text-label-md shadow-md hover:bg-primary transition-all" href="#services-matrix">
                                    <span>Explore Our Services</span>
                                    <span class="material-symbols-outlined text-[18px] text-secondary-container">arrow_forward</span>
                                </a>
                                <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-3 rounded-lg bg-surface-container-lowest text-secondary font-label-md text-label-md shadow-sm hover:bg-surface-container transition-all" href="https://api.whatsapp.com/send?phone=919292797682" rel="noopener" target="_blank">
                                    <span class="material-symbols-outlined text-[18px]">support_agent</span>
                                    <span>Talk to Our Team</span>
                                </a>
                            </div>
                            <!-- Institutional Micro Stats -->
                            <div class="grid grid-cols-3 gap-space-md pt-space-md">
                                <div class="flex flex-col">
                                    <span class="font-headline-sm text-headline-sm text-primary font-bold">100%</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Confidential Handling</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-headline-sm text-headline-sm text-primary font-bold">30+</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Active Pathways</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-headline-sm text-headline-sm text-primary font-bold">Kottayam</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Central Kerala Desk</span>
                                </div>
                            </div>
                        </div>
                        <!-- Hero Card & Pathway Visualization -->
                        <div class="lg:col-span-5 flex flex-col gap-space-md">
                            <div class="relative bg-surface-container-lowest rounded-xl p-space-lg shadow-xl">
                                <!-- Warm Gold Top Accent -->
                                <div class="absolute top-0 left-0 right-0 h-1.5 bg-secondary rounded-t-xl"></div>
                                <div class="flex items-center justify-between pb-space-sm">
                                    <div class="flex items-center gap-space-xs">
                                        <span class="w-3 h-3 rounded-full bg-secondary"></span>
                                        <span class="font-label-sm text-label-sm font-semibold text-primary uppercase tracking-wider">Certified Documentation Dossier</span>
                                    </div>
                                    <span class="px-space-xs py-0.5 rounded text-[11px] font-semibold bg-surface-container-high text-primary">Live Tracking</span>
                                </div>
                                <!-- Workflow Visual Graphic -->
                                <div class="my-space-sm p-space-md bg-surface-container-low rounded-lg">
                                    <div class="flex items-center justify-between mb-space-sm">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Verification Progress Protocol</span>
                                        <span class="font-label-sm text-label-sm font-bold text-secondary">Step 3 of 4 Active</span>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="w-full bg-surface-container-highest rounded-full h-2 overflow-hidden mb-space-md">
                                        <div class="bg-secondary h-full rounded-full w-3/4"></div>
                                    </div>
                                    <!-- Interactive Workflow Checklist Mockup -->
                                    <div class="flex flex-col gap-space-xs">
                                        <div class="flex items-center justify-between p-2 rounded bg-surface-container-lowest shadow-sm">
                                            <div class="flex items-center gap-space-xs">
                                                <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                                                <span class="font-body-sm text-body-sm text-primary font-medium">Document Scrutiny & Authentication</span>
                                            </div>
                                            <span class="font-label-sm text-[11px] text-on-surface-variant">Cleared</span>
                                        </div>
                                        <div class="flex items-center justify-between p-2 rounded bg-surface-container-lowest shadow-sm">
                                            <div class="flex items-center gap-space-xs">
                                                <span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span>
                                                <span class="font-body-sm text-body-sm text-primary font-medium">Regulatory Body Alignment</span>
                                            </div>
                                            <span class="font-label-sm text-[11px] text-on-surface-variant">Validated</span>
                                        </div>
                                        <div class="flex items-center justify-between p-2 rounded bg-surface-container-lowest shadow-sm">
                                            <div class="flex items-center gap-space-xs">
                                                <span class="material-symbols-outlined text-secondary text-[18px]">hourglass_top</span>
                                                <span class="font-body-sm text-body-sm text-primary font-medium">Filing & Authority Submission</span>
                                            </div>
                                            <span class="font-label-sm text-[11px] text-secondary font-bold">In-Progress</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- International Pathway Badges -->
                                <div class="pt-space-xs">
                                    <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-space-xs">Direct Support For Authorities & Systems</p>
                                    <div class="flex flex-wrap gap-space-xs">
                                        <span class="px-space-sm py-1 rounded bg-surface-container text-primary font-label-sm text-label-sm font-semibold shadow-xs">NMBI (Ireland)</span>
                                        <span class="px-space-sm py-1 rounded bg-surface-container text-primary font-label-sm text-label-sm font-semibold shadow-xs">AHPRA (Australia)</span>
                                        <span class="px-space-sm py-1 rounded bg-surface-container text-primary font-label-sm text-label-sm font-semibold shadow-xs">DataFlow Group</span>
                                        <span class="px-space-sm py-1 rounded bg-surface-container text-primary font-label-sm text-label-sm font-semibold shadow-xs">UK ENIC</span>
                                        <span class="px-space-sm py-1 rounded bg-surface-container text-primary font-label-sm text-label-sm font-semibold shadow-xs">NCLEX-RN</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Trust Callout Under Card -->
                            <div class="flex items-center gap-space-sm px-space-md py-space-sm rounded-lg bg-surface-container-low">
                                <span class="material-symbols-outlined text-secondary text-[20px]">room</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    In-person consultation desk: Reliable Building, Manorama Junction, Kottayam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 2: FIVE SERVICE-CATEGORY CARDS -->
            <section class="w-full py-margin-md bg-surface-container-lowest relative" id="services-matrix">
                <div class="max-w-7xl mx-auto px-margin">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-margin-md">
                        <div>
                            <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">Consultancy Verticals</span>
                            <h2 class="font-headline-xl text-headline-xl text-primary font-bold mt-1">Services by category</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-1">
                                Browse the services currently available in each category.
                            </p>
                        </div>
                        <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-primary font-semibold hover:text-secondary transition-colors" data-path="services" href="{{ route('services') }}">
                            <span>View Comprehensive Index</span>
                            <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                        </a>
                    </div>
                    <!-- Category Bento Grid: 5 cards arranged dynamically -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                        @forelse ($categories as $category)
                            <article class="group relative rounded-xl bg-surface p-space-xl shadow-sm transition-all duration-300 hover:shadow-xl">
                                <div class="mb-space-md flex items-center justify-between">
                                    <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-surface-container-high text-primary transition-colors group-hover:bg-primary group-hover:text-on-primary">
                                        <span class="material-symbols-outlined text-[32px]" aria-hidden="true">category</span>
                                    </div>
                                    <span class="rounded-full bg-surface-container-highest px-space-md py-1 font-label-sm text-label-sm font-semibold text-primary">
                                        {{ $category->services_count }} {{ \Illuminate\Support\Str::plural('service', $category->services_count) }}
                                    </span>
                                </div>
                                <h3 class="mb-space-lg font-headline-md text-headline-md font-bold text-primary">{{ $category->name }}</h3>
                                <a class="inline-flex items-center gap-space-xs font-label-md text-label-md font-semibold text-primary transition-colors group-hover:text-secondary"
                                    href="{{ route('services', ['category' => $category->name]) }}">
                                    <span>Browse category</span>
                                    <span class="material-symbols-outlined text-[18px] transition-transform group-hover:translate-x-1" aria-hidden="true">arrow_forward</span>
                                </a>
                            </article>
                        @empty
                            <p class="text-on-surface-variant">Service categories will appear here soon.</p>
                        @endforelse
                    </div>
                    {{-- Legacy static cards retained temporarily while the dynamic catalogue is used.
                        <!-- Category 1: Overseas Registration & Licensing (Featured, spans 2 cols on lg) -->
                        <div class="lg:col-span-2 group relative p-space-xl rounded-xl bg-surface shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between overflow-hidden">
                            <div class="absolute top-0 left-0 right-0 h-1 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div>
                                <div class="flex items-center justify-between mb-space-md">
                                    <div class="w-14 h-14 rounded-xl bg-surface-container-high flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                        <span class="material-symbols-outlined text-[32px]">license</span>
                                    </div>
                                    --}}
                                    <span class="px-space-md py-1 rounded-full bg-surface-container-highest text-primary font-label-sm text-label-sm font-semibold">
                                        11 Structured Services
                                    </span>
                                </div>
                                <h3 class="font-headline-md text-headline-md text-primary font-bold mb-space-xs">Overseas Registration & Licensing</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant max-w-xl mb-space-lg">
                                    Structured assistance for medical, nursing, and professional bodies abroad. Comprehensive handling from application verification through to decision letter follow-ups.
                                </p>
                                <div class="flex flex-wrap gap-2 mb-space-lg">
                                    <span class="px-2.5 py-1 rounded bg-surface-container-low font-body-sm text-[12px] text-on-surface font-medium">NMBI Decision Letter</span>
                                    <span class="px-2.5 py-1 rounded bg-surface-container-low font-body-sm text-[12px] text-on-surface font-medium">AHPRA Verification</span>
                                    <span class="px-2.5 py-1 rounded bg-surface-container-low font-body-sm text-[12px] text-on-surface font-medium">Middle East Prometric</span>
                                    <span class="px-2.5 py-1 rounded bg-surface-container-low font-body-sm text-[12px] text-on-surface font-medium">NCLEX Board Filings</span>
                                </div>
                            </div>
                            <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-primary font-semibold group-hover:text-secondary transition-colors" data-path="services-overseas-licensing" href="{{ route('services') }}#overseas-registration">
                                <span>View Services (11)</span>
                                <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Category 2: Documentation -->
                        <div class="group relative p-space-xl rounded-xl bg-surface shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between overflow-hidden">
                            <div class="absolute top-0 left-0 right-0 h-1 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div>
                                <div class="flex items-center justify-between mb-space-md">
                                    <div class="w-14 h-14 rounded-xl bg-surface-container-high flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                        <span class="material-symbols-outlined text-[32px]">folder_special</span>
                                    </div>
                                    <span class="px-space-md py-1 rounded-full bg-surface-container-highest text-primary font-label-sm text-label-sm font-semibold">
                                        6 Services
                                    </span>
                                </div>
                                <h3 class="font-headline-md text-headline-md text-primary font-bold mb-space-xs">Documentation & Attestation</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-space-lg">
                                    Fastidious support for state certificates, passports, PSC, and identity verification with zero compromise on legal formatting.
                                </p>
                            </div>
                            <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-primary font-semibold group-hover:text-secondary transition-colors" data-path="services-documentation" href="{{ route('services') }}#documentation">
                                <span>View Services (6)</span>
                                <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Category 3: Education & University -->
                        <div class="group relative p-space-xl rounded-xl bg-surface shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between overflow-hidden">
                            <div class="absolute top-0 left-0 right-0 h-1 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div>
                                <div class="flex items-center justify-between mb-space-md">
                                    <div class="w-14 h-14 rounded-xl bg-surface-container-high flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                        <span class="material-symbols-outlined text-[32px]">school</span>
                                    </div>
                                    <span class="px-space-md py-1 rounded-full bg-surface-container-highest text-primary font-label-sm text-label-sm font-semibold">
                                        4 Services
                                    </span>
                                </div>
                                <h3 class="font-headline-md text-headline-md text-primary font-bold mb-space-xs">Education & University</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-space-lg">
                                    Guiding school and university admissions, college allotments, and academic filings with institution-specific precision.
                                </p>
                            </div>
                            <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-primary font-semibold group-hover:text-secondary transition-colors" data-path="services-education" href="{{ route('services') }}#education">
                                <span>View Services (4)</span>
                                <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Category 4: Career Support -->
                        <div class="group relative p-space-xl rounded-xl bg-surface shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between overflow-hidden">
                            <div class="absolute top-0 left-0 right-0 h-1 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div>
                                <div class="flex items-center justify-between mb-space-md">
                                    <div class="w-14 h-14 rounded-xl bg-surface-container-high flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                        <span class="material-symbols-outlined text-[32px]">badge</span>
                                    </div>
                                    <span class="px-space-md py-1 rounded-full bg-surface-container-highest text-primary font-label-sm text-label-sm font-semibold">
                                        4 Services
                                    </span>
                                </div>
                                <h3 class="font-headline-md text-headline-md text-primary font-bold mb-space-xs">Career Support & Placement</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-space-lg">
                                    ATS-compliant resumes, bespoke cover letters, and comprehensive interview preparation customized to international hiring standards.
                                </p>
                            </div>
                            <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-primary font-semibold group-hover:text-secondary transition-colors" data-path="services-career" href="{{ route('services') }}#career-support">
                                <span>View Services (4)</span>
                                <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Category 5: Exam & Language -->
                        <div class="group relative p-space-xl rounded-xl bg-surface shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between overflow-hidden">
                            <div class="absolute top-0 left-0 right-0 h-1 bg-secondary opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <div>
                                <div class="flex items-center justify-between mb-space-md">
                                    <div class="w-14 h-14 rounded-xl bg-surface-container-high flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors">
                                        <span class="material-symbols-outlined text-[32px]">menu_book</span>
                                    </div>
                                    <span class="px-space-md py-1 rounded-full bg-surface-container-highest text-primary font-label-sm text-label-sm font-semibold">
                                        5 Services
                                    </span>
                                </div>
                                <h3 class="font-headline-md text-headline-md text-primary font-bold mb-space-xs">Exam & Language Preparation</h3>
                                <p class="font-body-md text-body-md text-on-surface-variant mb-space-lg">
                                    Exam slot booking, registration support, and structured online preparation guidance for IELTS, OET, Prometric, and CBT.
                                </p>
                            </div>
                            <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-primary font-semibold group-hover:text-secondary transition-colors" data-path="services-exam-language" href="{{ route('services') }}#exam-language">
                                <span>View Services (5)</span>
                                <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 3: WHY CHOOSE OXFORD PROCESSING (SERVICE PRINCIPLES) -->
            <section class="w-full py-margin-md bg-surface relative">
                <div class="max-w-7xl mx-auto px-margin">
                    <!-- Section Header -->
                    <div class="max-w-3xl mb-space-xl">
                        <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">Our Foundation</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary font-bold mt-1">Why Choose Oxford Processing</h2>
                        <p class="font-body-lg text-body-lg text-on-surface-variant mt-2">
                            We operate strictly by grounded service principles. We do not make unverified claims or false promises—we deliver methodical, transparent procedural execution.
                        </p>
                    </div>
                    <!-- Principles Grid: 5 Pillars -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                        <!-- Principle 1 -->
                        <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary mb-space-md">
                                <span class="material-symbols-outlined text-[26px]">map</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-primary font-semibold mb-space-xs">Clear Guidance</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                A transparent step-by-step roadmap tailored specifically to your chosen regulatory authority and individual professional background.
                            </p>
                        </div>
                        <!-- Principle 2 -->
                        <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary mb-space-md">
                                <span class="material-symbols-outlined text-[26px]">forum</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-primary font-semibold mb-space-xs">Transparent Communication</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Honest feedback on documentation status without false promises, realistic authority timeline projections, and objective updates.
                            </p>
                        </div>
                        <!-- Principle 3 -->
                        <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary mb-space-md">
                                <span class="material-symbols-outlined text-[26px]">checklist_rtl</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-primary font-semibold mb-space-xs">Organised Application Support</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Rigorous pre-submission verification and systematic docket tracking designed purposefully to prevent omissions and minimize processing delays.
                            </p>
                        </div>
                        <!-- Principle 4 -->
                        <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary mb-space-md">
                                <span class="material-symbols-outlined text-[26px]">support</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-primary font-semibold mb-space-xs">Customer Convenience</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Seamless multi-channel assistance: consult directly via WhatsApp, phone, email, or schedule an in-person session at our Kottayam office.
                            </p>
                        </div>
                        <!-- Principle 5 -->
                        <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-shadow lg:col-span-2">
                            <div class="w-12 h-12 rounded-lg bg-surface-container flex items-center justify-center text-primary mb-space-md">
                                <span class="material-symbols-outlined text-[26px]">shield_lock</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-primary font-semibold mb-space-xs">Responsible Handling of Information</h3>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Strict confidentiality protocols for all personal identity records, academic transcripts, and professional certifications throughout the intake and filing lifecycle.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 4: HOW IT WORKS (FOUR-STEP PROCESS FLOW) -->
            <section class="w-full py-margin-md bg-surface-container-low relative">
                <div class="max-w-7xl mx-auto px-margin">
                    <div class="text-center max-w-2xl mx-auto mb-margin-md">
                        <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">Workflow Governance</span>
                        <h2 class="font-headline-xl text-headline-xl text-primary font-bold mt-1">How It Works</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-2">
                            A four-stage disciplined engagement pathway ensuring total clarity before any filing is initiated.
                        </p>
                    </div>
                    <!-- Process Steps Container -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter relative">
                        <!-- Step 1 -->
                        <div class="relative flex flex-col p-space-lg bg-surface-container-lowest rounded-xl shadow-sm">
                            <div class="flex items-center justify-between mb-space-md">
                                <span class="font-display-lg text-primary/10 font-bold leading-none">01</span>
                                <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-primary font-bold text-label-sm">
                                    <span class="material-symbols-outlined text-[20px]">send</span>
                                </div>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-space-xs">Submit an Enquiry</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Share your target destination, service need, or required documentation via our web portal, email, or direct WhatsApp desk.
                            </p>
                        </div>
                        <!-- Step 2 -->
                        <div class="relative flex flex-col p-space-lg bg-surface-container-lowest rounded-xl shadow-sm">
                            <div class="flex items-center justify-between mb-space-md">
                                <span class="font-display-lg text-primary/10 font-bold leading-none">02</span>
                                <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-primary font-bold text-label-sm">
                                    <span class="material-symbols-outlined text-[20px]">psychology_alt</span>
                                </div>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-space-xs">Discuss Requirements</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Our Kottayam team reviews your background and explains current authority requirements, document prerequisites, and timelines.
                            </p>
                        </div>
                        <!-- Step 3 -->
                        <div class="relative flex flex-col p-space-lg bg-surface-container-lowest rounded-xl shadow-sm">
                            <div class="flex items-center justify-between mb-space-md">
                                <span class="font-display-lg text-primary/10 font-bold leading-none">03</span>
                                <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-primary font-bold text-label-sm">
                                    <span class="material-symbols-outlined text-[20px]">rule_folder</span>
                                </div>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-space-xs">Confirm Scope & Docs</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Review detailed document checklists and verify external authority specifications before finalizing engagement terms.
                            </p>
                        </div>
                        <!-- Step 4 -->
                        <div class="relative flex flex-col p-space-lg bg-surface-container-lowest rounded-xl shadow-sm">
                            <div class="flex items-center justify-between mb-space-md">
                                <span class="font-display-lg text-primary/10 font-bold leading-none">04</span>
                                <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-primary font-bold text-label-sm">
                                    <span class="material-symbols-outlined text-[20px]">notifications_active</span>
                                </div>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-primary font-bold mb-space-xs">Receive Updates</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Get proactive guidance, active filing administration, and timely milestone notifications until formal outcome delivery.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 5: FEATURED REPRESENTATIVE SERVICES SECTION -->
            <section class="w-full py-margin-md bg-surface">
                <div class="max-w-7xl mx-auto px-margin">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-xl">
                        <div>
                            <span class="font-label-sm text-label-sm text-secondary uppercase font-bold tracking-widest">Representative Solutions</span>
                            <h2 class="font-headline-xl text-headline-xl text-primary font-bold mt-1">Cross-Category Services Overview</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                                Representative applications processed with rigorous quality scrutiny across international and domestic frameworks.
                            </p>
                        </div>
                        <div class="flex items-center gap-space-sm text-label-sm text-on-surface-variant">
                            <span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
                            <span>Verified Authority Alignment</span>
                        </div>
                    </div>
                    <!-- Representative 6-Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                        <!-- Rep Service 1: NMBI DL -->
                        <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-space-sm">
                                    <span class="px-space-sm py-0.5 rounded bg-surface-container-highest text-primary font-label-sm text-[11px] font-semibold">Overseas Licensing</span>
                                    <span class="material-symbols-outlined text-secondary text-[20px]">clinical_notes</span>
                                </div>
                                <h3 class="font-headline-sm text-title-md text-primary font-bold mb-space-xs">NMBI Decision Letter (DL) Support</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                    Complete support for Nursing and Midwifery Board of Ireland registrations, qualification audits, and formal Decision Letter follow-ups.
                                </p>
                            </div>
                            <a class="inline-flex items-center gap-space-xs font-label-md text-body-sm text-primary font-semibold hover:text-secondary transition-colors pt-space-xs" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('NMBI Decision Letter (DL) Process')]) }}">
                                <span>Read Process Criteria</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Rep Service 2: DataFlow -->
                        <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-space-sm">
                                    <span class="px-space-sm py-0.5 rounded bg-surface-container-highest text-primary font-label-sm text-[11px] font-semibold">Overseas Licensing</span>
                                    <span class="material-symbols-outlined text-secondary text-[20px]">fact_check</span>
                                </div>
                                <h3 class="font-headline-sm text-title-md text-primary font-bold mb-space-xs">DataFlow Verification Assistance</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                    Primary Source Verification (PSV) document compilation for healthcare workers targeting DHA, HAAD, MOH, and SCFHS licensing.
                                </p>
                            </div>
                            <a class="inline-flex items-center gap-space-xs font-label-md text-body-sm text-primary font-semibold hover:text-secondary transition-colors pt-space-xs" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('DataFlow Verification')]) }}">
                                <span>Read Process Criteria</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Rep Service 3: ATS CV & Cover Letter -->
                        <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-space-sm">
                                    <span class="px-space-sm py-0.5 rounded bg-surface-container-highest text-primary font-label-sm text-[11px] font-semibold">Career Support</span>
                                    <span class="material-symbols-outlined text-secondary text-[20px]">description</span>
                                </div>
                                <h3 class="font-headline-sm text-title-md text-primary font-bold mb-space-xs">ATS-Friendly CV & Cover Letter Writing</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                    Bespoke international resume drafting optimized for modern Applicant Tracking Systems across NHS UK, Ireland, and Gulf employers.
                                </p>
                            </div>
                            <a class="inline-flex items-center gap-space-xs font-label-md text-body-sm text-primary font-semibold hover:text-secondary transition-colors pt-space-xs" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('ATS-Friendly CV / Resume')]) }}">
                                <span>Read Process Criteria</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Rep Service 4: OET / IELTS Booking -->
                        <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-space-sm">
                                    <span class="px-space-sm py-0.5 rounded bg-surface-container-highest text-primary font-label-sm text-[11px] font-semibold">Exam & Language</span>
                                    <span class="material-symbols-outlined text-secondary text-[20px]">event_available</span>
                                </div>
                                <h3 class="font-headline-sm text-title-md text-primary font-bold mb-space-xs">OET / IELTS Exam Booking Support</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                    Hassle-free test date securing, venue selection, profile verification, and registration coordination for language assessments.
                                </p>
                            </div>
                            <a class="inline-flex items-center gap-space-xs font-label-md text-body-sm text-primary font-semibold hover:text-secondary transition-colors pt-space-xs" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('OET Exam Booking')]) }}">
                                <span>Read Process Criteria</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Rep Service 5: Passport Applications -->
                        <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-space-sm">
                                    <span class="px-space-sm py-0.5 rounded bg-surface-container-highest text-primary font-label-sm text-[11px] font-semibold">Documentation</span>
                                    <span class="material-symbols-outlined text-secondary text-[20px]">flight_takeoff</span>
                                </div>
                                <h3 class="font-headline-sm text-title-md text-primary font-bold mb-space-xs">Passport New & Renewal Applications</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                    PSK appointment scheduling, Annexure checks, Tatkaal re-issuance dossiers, and document readiness for Indian passport holders.
                                </p>
                            </div>
                            <a class="inline-flex items-center gap-space-xs font-label-md text-body-sm text-primary font-semibold hover:text-secondary transition-colors pt-space-xs" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Passport New Application & Renewal')]) }}">
                                <span>Read Process Criteria</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </a>
                        </div>
                        <!-- Rep Service 6: University Application Support -->
                        <div class="p-space-lg rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-space-sm">
                                    <span class="px-space-sm py-0.5 rounded bg-surface-container-highest text-primary font-label-sm text-[11px] font-semibold">Education</span>
                                    <span class="material-symbols-outlined text-secondary text-[20px]">local_library</span>
                                </div>
                                <h3 class="font-headline-sm text-title-md text-primary font-bold mb-space-xs">University Application Support</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                    Comprehensive guidance on international higher education applications, credit equivalency checks, and academic docket submissions.
                                </p>
                            </div>
                            <a class="inline-flex items-center gap-space-xs font-label-md text-body-sm text-primary font-semibold hover:text-secondary transition-colors pt-space-xs" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('University Application Support')]) }}">
                                <span>Read Process Criteria</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 6: ABOUT OXFORD PROCESSING SECTION -->
            <section id="about-us" class="w-full py-margin-lg bg-surface-container-lowest relative overflow-hidden scroll-mt-32">
                <div class="max-w-7xl mx-auto px-margin">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
                        <!-- Visual & Architectural Image Panel -->
                        <div class="lg:col-span-5 relative">
                            <div class="relative rounded-2xl overflow-hidden shadow-xl aspect-[4/5] bg-surface-container-high">
                                <img class="w-full h-full object-cover" data-alt="A modern, high-trust executive consultancy office in Kottayam, Kerala with dark navy architectural details, warm timber accents, organized legal dockets on a clean glass conference desk, illuminated by soft natural light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEl8afqWn0zYUPOi63--RKKk3MVerrGl2VQEcYT_aNbCc48I1QbXAPniQmobiNCRL55B4tTuaWppHRBTa2SWuulL_aqLCnH8smmdFd5NIC-Ii450ePPoZ-USe9g4bsOdd3O7A7Hw7CEDUEnqUsTj6mmI96_rMZ-e1P2cX6fg0JPYhlPVzm-okV4jD-EM9NU3pBFY_nmpTharWv9uO1eVUpvvr1zaWsuv8o6t3Q_mpm7bfFZ6ye6Cx9" />
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>
                                <div class="absolute bottom-6 left-6 right-6 p-space-md rounded-xl bg-surface-container-lowest/95 backdrop-blur-md shadow-lg">
                                    <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">Local Roots • Global Reach</span>
                                    <p class="font-body-sm text-body-sm text-primary font-semibold mt-1">Reliable Building, Manorama Junction, Kottayam</p>
                                </div>
                            </div>
                        </div>
                        <!-- About Text Content -->
                        <div class="lg:col-span-7 flex flex-col gap-space-md">
                            <div class="inline-flex items-center gap-space-xs self-start px-space-md py-1 rounded-full bg-surface-container-high text-primary">
                                <span class="material-symbols-outlined text-secondary text-[16px]">account_balance</span>
                                <span class="font-label-sm text-label-sm font-semibold uppercase tracking-wider">About Oxford Processing</span>
                            </div>
                            <h2 class="font-headline-xl text-headline-xl text-primary font-bold">
                                Committed to Institutional Accuracy & Seamless Aspirations
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                Headquartered in Kottayam, Kerala, <strong>Oxford Processing</strong> was established to eliminate uncertainty, bureaucratic friction, and procedural vulnerability for professionals and students aspiring to advance domestically or abroad. We serve as a dependable, highly structured documentation and licensing guidance partner.
                            </p>
                            <!-- Mission & Vision Cards -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md pt-space-xs">
                                <!-- Mission -->
                                <div class="p-space-lg rounded-xl bg-surface-container-low shadow-xs flex flex-col justify-start">
                                    <div class="flex items-center gap-space-xs mb-space-xs">
                                        <span class="material-symbols-outlined text-secondary text-[22px]">flag</span>
                                        <h3 class="font-headline-sm text-title-md text-primary font-bold">Our Mission</h3>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                        To provide reliable, accessible, and customer-focused assistance across registration, licensing, documentation, education, career preparation, and exam-related services.
                                    </p>
                                </div>
                                <!-- Vision -->
                                <div class="p-space-lg rounded-xl bg-surface-container-low shadow-xs flex flex-col justify-start">
                                    <div class="flex items-center gap-space-xs mb-space-xs">
                                        <span class="material-symbols-outlined text-secondary text-[22px]">visibility</span>
                                        <h3 class="font-headline-sm text-title-md text-primary font-bold">Our Vision</h3>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                        To become a recognised and trusted consultancy service provider in Kerala, empowering candidates to achieve their international and domestic aspirations through dependable support.
                                    </p>
                                </div>
                            </div>
                            <div class="pt-space-xs flex items-center gap-space-md">
                                <a class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded-lg bg-primary-container text-on-primary font-label-md text-label-md hover:bg-primary transition-all shadow-sm" data-path="about-us" href="{{ route('home') }}#about-us">
                                    <span>Read Our Full Story</span>
                                    <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                                </a>
                                <div class="flex items-center gap-space-xs text-primary font-label-md text-label-md">
                                    <span class="material-symbols-outlined text-secondary">verified_user</span>
                                    <span>Rigorous Data Security</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 7: CONTACT CTA BANNER -->
            <section class="w-full py-margin-md bg-surface relative">
                <div class="max-w-7xl mx-auto px-margin">
                    <div class="relative rounded-2xl bg-primary-container text-on-primary p-space-xl lg:p-margin-md shadow-2xl overflow-hidden">
                        <!-- Warm Gold Top Accent Line -->
                        <div class="absolute top-0 left-0 right-0 h-2 bg-secondary"></div>
                        <!-- Faint Background Ambient Circles -->
                        <div class="absolute -right-20 -top-20 w-80 h-80 rounded-full bg-secondary/10 blur-3xl pointer-events-none"></div>
                        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-gutter-lg items-center">
                            <!-- Text and Prompt -->
                            <div class="lg:col-span-7 flex flex-col gap-space-sm">
                                <span class="font-label-sm text-label-sm text-secondary-container uppercase font-bold tracking-widest">Direct Consultation Desk</span>
                                <h2 class="font-headline-xl text-headline-xl text-on-primary font-bold">
                                    Have questions about your overseas licensing or documentation?
                                </h2>
                                <p class="font-body-md text-body-md text-primary-fixed-dim max-w-xl">
                                    Connect with our Kottayam specialists today. We provide upfront clarity on authority prerequisites, processing timelines, and required document sets.
                                </p>
                                <!-- Quick Details -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm pt-space-sm text-body-sm text-primary-fixed-dim">
                                    <div class="flex items-start gap-space-xs">
                                        <span class="material-symbols-outlined text-secondary-container text-[20px] shrink-0 mt-0.5">location_on</span>
                                        <span>Reliable Building, 1st Floor, Room 201, Manorama Junction, Kottayam</span>
                                    </div>
                                    <div class="flex items-start gap-space-xs">
                                        <span class="material-symbols-outlined text-secondary-container text-[20px] shrink-0 mt-0.5">schedule</span>
                                        <span>Mon – Sat: 10:00 AM – 5:00 PM (Direct Desk)</span>
                                    </div>
                                    <div class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-secondary-container text-[20px] shrink-0">call</span>
                                        <a class="hover:text-secondary-fixed transition-colors" href="tel:9292797682">+91 92927 97682</a>
                                    </div>
                                    <div class="flex items-center gap-space-xs">
                                        <span class="material-symbols-outlined text-secondary-container text-[20px] shrink-0">mail</span>
                                        <a class="hover:text-secondary-fixed transition-colors truncate" href="mailto:oxfordprocessingkottayam@gmail.com">oxfordprocessingkottayam@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Buttons -->
                            <div class="lg:col-span-5 flex flex-col sm:flex-row lg:flex-col gap-space-md justify-center">
                                <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-3.5 rounded-lg bg-[#25D366] text-white font-label-md text-label-md font-bold shadow-md hover:bg-[#20ba59] transition-all" href="https://api.whatsapp.com/send?phone=919292797682" rel="noopener" target="_blank">
                                    <span class="material-symbols-outlined text-[20px]">chat</span>
                                    <span>Enquire on WhatsApp</span>
                                </a>
                                <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-3.5 rounded-lg bg-surface-container-lowest text-primary font-label-md text-label-md font-bold shadow-md hover:bg-surface-container transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                    <span class="material-symbols-outlined text-secondary text-[20px]">edit_document</span>
                                    <span>Submit Website Enquiry</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
@endsection
