@extends('layouts.main')
@section('activePage', 'services')
@section('content')
        <div class="flex flex-col w-full">
            <!-- Subtle Architectural Ambient Canvas -->
            <div class="relative w-full overflow-hidden bg-surface pb-margin-lg">
                <!-- Ambient Structural Underlay -->
                <div class="absolute -top-32 right-1/4 w-96 h-96 rounded-full bg-surface-container-high/60 blur-3xl pointer-events-none"></div>
                <div class="absolute top-1/2 -left-20 w-80 h-80 rounded-full bg-secondary-fixed/20 blur-3xl pointer-events-none"></div>
                <!-- Editorial Header Section -->
                <section class="max-w-7xl mx-auto px-margin pt-space-lg lg:pt-space-xl pb-space-lg">
                    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-lg pb-space-lg">
                        <div class="max-w-3xl">
                            <div class="flex items-center gap-space-xs mb-space-xs">
                                <span class="inline-block w-2.5 h-2.5 rounded-full bg-secondary"></span>
                                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-semibold">Institutional Regulatory Catalog</span>
                                <span class="text-outline-variant">/</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">30 Confirmed Services</span>
                            </div>
                            <h1 class="font-headline-xl text-headline-xl text-primary font-bold tracking-tight">Comprehensive Services Directory</h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mt-space-xs">
                                End-to-end credential verification, statutory state documentation, university migration pathways, and professional licensing dossiers compiled with flawless procedural precision from Kottayam.
                            </p>
                        </div>
                        <!-- Quick Metrics Pill -->
                        <div class="bg-surface-container-lowest shadow-md rounded-xl p-space-md flex items-center gap-space-lg shrink-0">
                            <div class="flex flex-col">
                                <span class="font-headline-sm text-headline-sm text-primary font-bold leading-none">30 / 30</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Regulated Workflows</span>
                            </div>
                            <div class="w-px h-10 bg-surface-container-high"></div>
                            <div class="flex flex-col">
                                <span class="font-headline-sm text-headline-sm text-secondary font-bold leading-none">100%</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant mt-1">Verification Rigor</span>
                            </div>
                        </div>
                    </div>
                    <!-- Live Search & Category Controls Bar -->
                    <div class="bg-surface-container-lowest rounded-xl shadow-md p-space-md lg:p-space-lg space-y-space-md">
                        <!-- Search and Interactive Tools -->
                        <div class="flex flex-col md:flex-row items-center gap-space-md">
                            <div class="relative w-full flex-1">
                                <span class="material-symbols-outlined absolute left-space-md top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
                                <input class="w-full h-12 pl-12 pr-space-md rounded-lg bg-surface-container-low font-body-md text-body-md text-on-surface placeholder:text-outline focus:outline-none focus:bg-surface-container-lowest focus:shadow-sm transition-all" id="serviceSearchInput" placeholder="Search by statutory keyword, council acronym (e.g. NMBI, AHPRA, OET, WES), or document type..." type="text" />
                                <button class="hidden absolute right-space-md top-1/2 -translate-y-1/2 text-outline-variant hover:text-on-surface" id="clearSearchBtn" title="Clear search">
                                    <span class="material-symbols-outlined text-[18px]">cancel</span>
                                </button>
                            </div>
                            <div class="flex items-center gap-space-sm w-full md:w-auto shrink-0">
                                <div class="relative flex-1 md:flex-initial">
                                    <select class="h-12 px-space-md pr-10 rounded-lg bg-surface-container-low font-label-md text-label-md text-on-surface appearance-none focus:outline-none cursor-pointer" id="sortServicesSelect">
                                        <option value="default">Default Order</option>
                                        <option value="alpha-asc">Alphabetical (A - Z)</option>
                                        <option value="category">Grouped by Category</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-space-sm top-1/2 -translate-y-1/2 pointer-events-none text-outline text-[18px]">unfold_more</span>
                                </div>
                                <button class="h-12 px-space-md bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md rounded-lg transition-colors flex items-center gap-space-xs shrink-0" id="resetAllFiltersBtn">
                                    <span class="material-symbols-outlined text-[18px]">restart_alt</span>
                                    <span class="hidden sm:inline">Reset</span>
                                </button>
                            </div>
                        </div>
                        <!-- Filter Pill Chips -->
                        <div class="flex items-center gap-space-xs overflow-x-auto pb-1 scrollbar-none" id="categoryPillList">
                            <button class="category-pill active-cat px-space-md py-space-xs rounded-full font-label-sm text-label-sm font-semibold transition-all shrink-0 bg-primary-container text-on-primary shadow-sm" data-cat="all">
                                All Services (30)
                            </button>
                            <button class="category-pill px-space-md py-space-xs rounded-full font-label-sm text-label-sm font-medium transition-all shrink-0 bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-primary" data-cat="overseas">
                                Overseas Registration & Licensing (11)
                            </button>
                            <button class="category-pill px-space-md py-space-xs rounded-full font-label-sm text-label-sm font-medium transition-all shrink-0 bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-primary" data-cat="doc">
                                Documentation (6)
                            </button>
                            <button class="category-pill px-space-md py-space-xs rounded-full font-label-sm text-label-sm font-medium transition-all shrink-0 bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-primary" data-cat="edu">
                                Education & University (4)
                            </button>
                            <button class="category-pill px-space-md py-space-xs rounded-full font-label-sm text-label-sm font-medium transition-all shrink-0 bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-primary" data-cat="career">
                                Career Support (4)
                            </button>
                            <button class="category-pill px-space-md py-space-xs rounded-full font-label-sm text-label-sm font-medium transition-all shrink-0 bg-surface-container hover:bg-surface-container-high text-on-surface-variant hover:text-primary" data-cat="exam">
                                Exam & Language (5)
                            </button>
                        </div>
                    </div>
                </section>
                <!-- Master Services Mosaic Container -->
                <div class="max-w-7xl mx-auto px-margin space-y-space-xl" id="servicesDirectoryContainer">
                    <!-- ============================================================== -->
                    <!-- CATEGORY A: OVERSEAS REGISTRATION & LICENSING (11 Services)    -->
                    <!-- ============================================================== -->
                    <section class="category-section space-y-space-md" data-category="overseas">
                        <div class="flex items-center justify-between pb-space-xs">
                            <div class="flex items-center gap-space-sm">
                                <span class="w-1.5 h-6 bg-secondary rounded-full"></span>
                                <div>
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Category A</span>
                                    <h2 id="overseas-registration" class="font-headline-md text-headline-md text-primary font-bold scroll-mt-32">Overseas Registration & Licensing</h2>
                                </div>
                            </div>
                            <span class="bg-surface-container-high text-primary font-label-sm text-label-sm px-space-sm py-0.5 rounded-full font-semibold">11 Services</span>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                            <!-- 1. NMBI Decision Letter (DL) Process -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="overseas" data-title="NMBI Decision Letter (DL) Process">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Nursing / Midwifery Board Ireland</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#01</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">NMBI Decision Letter (DL) Process</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Guidance through Irish Nursing and Midwifery Board DL verification steps.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Valid nursing degree, state registration transcript, employer clinical verification reference & primary source verification.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('NMBI Decision Letter (DL) Process')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 2. CORU Registration Process -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="overseas" data-title="CORU Registration Process">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Health & Social Care Ireland</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#02</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">CORU Registration Process</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Structured assistance for health and social care professionals registering in Ireland.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Apostilled academic syllabus, notarized graduation certificates, professional standing letter & practice logbooks.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('CORU Registration Process')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 3. AHPRA Registration Process -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="overseas" data-title="AHPRA Registration Process">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Australian Practitioner Board</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#03</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">AHPRA Registration Process</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Support for Australian Health Practitioner Regulation Agency credential filings.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Valid passport, identity proofs, English language test clearance, verified qualification transcripts & Fit2Work checks.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('AHPRA Registration Process')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 4. ANMAC Skills Assessment -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="overseas" data-title="ANMAC Skills Assessment">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Australian Skilled Migration</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#04</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">ANMAC Skills Assessment</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Migration assessment dossier preparation for Australian nursing & midwifery.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Degree parchment, consolidated marks cards, registration certificates & direct nursing council verifications.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('ANMAC Skills Assessment')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 5. NCLEX-RN Processing & Exam Booking -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="overseas" data-title="NCLEX-RN Processing & Exam Booking">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">US / Canada Licensure</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#05</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">NCLEX-RN Processing & Exam Booking</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Exam registration, ATT generation guidance, and Pearson VUE test scheduling.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">State BON profile approval, CGFNS credential report, Pearson VUE profile & biometric authorization.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('NCLEX-RN Processing & Exam Booking')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 6. LPN Registration Process -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="overseas" data-title="LPN Registration Process">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Practical Nursing</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#06</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">LPN Registration Process</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Documentation and application filing for Licensed Practical Nurse boards.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Diploma/degree credentials, clinical hour hour-by-hour logs, board jurisprudence validation.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('LPN Registration Process')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 7. DataFlow Verification -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="overseas" data-title="DataFlow Verification">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Gulf Licensure (PSV)</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#07</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">DataFlow Verification</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Primary Source Verification (PSV) document compilation for Gulf healthcare licenses (DHA, MOH, HAAD, OMSB, QCHP).</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Degree certificates, authenticated experience credentials, council good standing letter & passport copy.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('DataFlow Verification')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 8. WES Evaluation -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="overseas" data-title="WES Evaluation">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">ECA / North America</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#08</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">WES Evaluation</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">World Education Services transcript authentication and foreign credential evaluation filing.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Official sealed university transcripts, WES reference number transmission, degree certificates & mark sheets.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('WES Evaluation')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 9. NARIC / UK ENIC Process -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="overseas" data-title="NARIC / UK ENIC Process">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">United Kingdom Comparability</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#09</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">NARIC / UK ENIC Process</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">UK National Information Centre statement of comparability assistance.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Final qualification certificate, full official academic transcripts in English, medium of instruction certification.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('NARIC / UK ENIC Process')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 10. IQAS Assessment -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="overseas" data-title="IQAS Assessment">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Canada / Alberta Provincial</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#10</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">IQAS Assessment</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">International Qualifications Assessment Service processing for Alberta and Canadian immigration.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">University sealed transcripts, signed IQAS request form, color passport scans & translated mark records.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('IQAS Assessment')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 11. Skills Assessment Services -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="overseas" data-title="Skills Assessment Services">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Vocational & Migration</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#11</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">Skills Assessment Services</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Comprehensive documentation for vocational and skilled migration bodies.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Employment reference letters, pay slips, tax filings, organizational charts & mapped job duty descriptions.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Skills Assessment Services')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                        </div>
                    </section>
                    <!-- ============================================================== -->
                    <!-- CATEGORY B: DOCUMENTATION (6 Services)                         -->
                    <!-- ============================================================== -->
                    <section class="category-section space-y-space-md" data-category="doc">
                        <div class="flex items-center justify-between pb-space-xs">
                            <div class="flex items-center gap-space-sm">
                                <span class="w-1.5 h-6 bg-secondary rounded-full"></span>
                                <div>
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Category B</span>
                                    <h2 id="documentation" class="font-headline-md text-headline-md text-primary font-bold scroll-mt-32">Documentation</h2>
                                </div>
                            </div>
                            <span class="bg-surface-container-high text-primary font-label-sm text-label-sm px-space-sm py-0.5 rounded-full font-semibold">6 Services</span>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                            <!-- 1. Income Certificate Application -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="doc" data-title="Income Certificate Application">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Revenue & e-District</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#12</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">Income Certificate Application</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Guidance and e-District portal filing support for state revenue certificates.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Ration card, salary slips/IT returns, land tax receipts & Aadhaar biometric identity record.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Income Certificate Application')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 2. Birth Certificate Download / Application Support -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="doc" data-title="Birth Certificate Download / Application Support">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Civil Registration Registry</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#13</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">Birth Certificate Download / Application Support</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Local body and civil registry record search and documentation retrieval.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Hospital discharge slip, parents' identity credentials, local authority register indices.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Birth Certificate Download / Application Support')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 3. Passport New Application & Renewal -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="doc" data-title="Passport New Application & Renewal">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Ministry of External Affairs</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#14</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">Passport New Application & Renewal</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Tatkaal, normal, minor, and renewal slot scheduling and document checklist validation.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Aadhaar card, educational certificate (Non-ECR proof), old passport (for renewal), voter ID or bank passbook.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Passport New Application & Renewal')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 4. Caste Certificate Application -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="doc" data-title="Caste Certificate Application">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Revenue Authority</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#15</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">Caste Certificate Application</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Procedural guidance and verification dossier preparation for community certificates.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">School Leaving Certificate (SSLC) showing caste, parents' caste certificate, gazetted officer affidavit.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Caste Certificate Application')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 5. Voter ID Application -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="doc" data-title="Voter ID Application">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Election Commission (ECI)</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#16</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">Voter ID Application</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Form 6 submission assistance, electoral roll corrections, and digital EPIC retrieval.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Age proof document, residential address confirmation, passport size portrait photo.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Voter ID Application')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 6. PSC One-Time Registration & Application -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="doc" data-title="PSC One-Time Registration & Application">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Public Service Commission</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#17</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">PSC One-Time Registration & Application</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Kerala PSC profile creation, qualification updating, and post confirmation support.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Registered mobile number, SSLC book entry, digital signature file & standard specification photograph.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('PSC One-Time Registration & Application')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                        </div>
                    </section>
                    <!-- ============================================================== -->
                    <!-- CATEGORY C: EDUCATION & UNIVERSITY (4 Services)                -->
                    <!-- ============================================================== -->
                    <section class="category-section space-y-space-md" data-category="edu">
                        <div class="flex items-center justify-between pb-space-xs">
                            <div class="flex items-center gap-space-sm">
                                <span class="w-1.5 h-6 bg-secondary rounded-full"></span>
                                <div>
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Category C</span>
                                    <h2 id="education" class="font-headline-md text-headline-md text-primary font-bold scroll-mt-32">Education & University</h2>
                                </div>
                            </div>
                            <span class="bg-surface-container-high text-primary font-label-sm text-label-sm px-space-sm py-0.5 rounded-full font-semibold">4 Services</span>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
                            <!-- 1. School Application Support -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="edu" data-title="School Application Support">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">K-12 Admission</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#18</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">School Application Support</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Primary and secondary institution admission applications and document compilation.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Transfer certificate (TC), previous year mark records, conduct certificate, birth record.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('School Application Support')]) }}">
                                        Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 2. University Application Support -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="edu" data-title="University Application Support">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Higher Education</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#19</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">University Application Support</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Guidance on university submission deadlines, statement compilation, and transcript courier.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Degree certificate, academic recommendations (LORs), Statement of Purpose (SOP), curriculum vitæ.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('University Application Support')]) }}">
                                        Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 3. Course / College Allotment Checking -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="edu" data-title="Course / College Allotment Checking">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">CAP / Centralized Allotment</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#20</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">Course / College Allotment Checking</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Real-time tracking of centralized allotment rounds, merit lists, and reporting formalities.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Application registration number, entrance roll index, registered candidate credentials.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Course / College Allotment Checking')]) }}">
                                        Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 4. Admission Application Assistance -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="edu" data-title="Admission Application Assistance">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Intake Formalities</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#21</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">Admission Application Assistance</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Direct guidance through international and domestic higher-education intake portals.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Qualified examination certificates, English proficiency scores, passport biographical scan.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Admission Application Assistance')]) }}">
                                        Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                        </div>
                    </section>
                    <!-- ============================================================== -->
                    <!-- CATEGORY D: CAREER SUPPORT (4 Services)                        -->
                    <!-- ============================================================== -->
                    <section class="category-section space-y-space-md" data-category="career">
                        <div class="flex items-center justify-between pb-space-xs">
                            <div class="flex items-center gap-space-sm">
                                <span class="w-1.5 h-6 bg-secondary rounded-full"></span>
                                <div>
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Category D</span>
                                    <h2 id="career-support" class="font-headline-md text-headline-md text-primary font-bold scroll-mt-32">Career Support</h2>
                                </div>
                            </div>
                            <span class="bg-surface-container-high text-primary font-label-sm text-label-sm px-space-sm py-0.5 rounded-full font-semibold">4 Services</span>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
                            <!-- 1. ATS-Friendly CV / Resume -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="career" data-title="ATS-Friendly CV / Resume">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Candidate Dossier</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#22</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">ATS-Friendly CV / Resume</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Tailored formatting optimized for Applicant Tracking Systems and international employer standards.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Existing resume copy, verified clinical/work experiences, licensure registries, skill highlights.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('ATS-Friendly CV / Resume')]) }}">
                                        Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 2. Cover Letter (CL) -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="career" data-title="Cover Letter (CL)">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Professional Narrative</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#23</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">Cover Letter (CL)</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Role-specific, persuasive letters articulating professional competencies and clinical milestones.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Target job requisition profile, key achievements checklist, career objective briefing.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Cover Letter (CL)')]) }}">
                                        Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 3. Interview Materials -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="career" data-title="Interview Materials">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Competency Kits</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#24</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">Interview Materials</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Comprehensive preparation dossiers, competency frameworks, and situational response guides.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Target hospital/employer profile, specialty domain (ICU/Pediatric/Geriatric/OT), clinical scenario outlines.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Interview Materials')]) }}">
                                        Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 4. Interview Preparation -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="career" data-title="Interview Preparation">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Mock Simulation</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#25</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">Interview Preparation</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">One-on-one virtual coaching simulations, behavioral question guidance, and feedback.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Scheduled simulation slot reservation, candidate CV evaluation, microphone & webcam setup.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Interview Preparation')]) }}">
                                        Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                        </div>
                    </section>
                    <!-- ============================================================== -->
                    <!-- CATEGORY E: EXAM & LANGUAGE (5 Services)                       -->
                    <!-- ============================================================== -->
                    <section class="category-section space-y-space-md" data-category="exam">
                        <div class="flex items-center justify-between pb-space-xs">
                            <div class="flex items-center gap-space-sm">
                                <span class="w-1.5 h-6 bg-secondary rounded-full"></span>
                                <div>
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Category E</span>
                                    <h2 id="exam-language" class="font-headline-md text-headline-md text-primary font-bold scroll-mt-32">Exam & Language</h2>
                                </div>
                            </div>
                            <span class="bg-surface-container-high text-primary font-label-sm text-label-sm px-space-sm py-0.5 rounded-full font-semibold">5 Services</span>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
                            <!-- 1. OET Exam Booking -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="exam" data-title="OET Exam Booking">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Healthcare English</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#26</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">OET Exam Booking</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Occupational English Test date selection, venue allocation, and candidate profile management.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Valid international passport, high-resolution ID photo, test venue preference (Kerala/National).</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('OET Exam Booking')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 2. IELTS Exam Booking -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="exam" data-title="IELTS Exam Booking">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">IDP Official Slots</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#27</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">IELTS Exam Booking</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Academic and General Training test slot reservation with British Council / IDP.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Valid passport copy, module designation (Academic or General Training), preferred test date window.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('IELTS Exam Booking')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 3. RCSI Exam Booking -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="exam" data-title="RCSI Exam Booking">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Ireland Aptitude Test</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#28</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">RCSI Exam Booking</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Royal College of Surgeons in Ireland aptitude test booking and candidate coordination.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">NMBI Decision Letter specifying RCSI aptitude test route, candidate identification document.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('RCSI Exam Booking')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 4. French Language Exam Booking -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="exam" data-title="French Language Exam Booking">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">DELF / TEF / TCF</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#29</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">French Language Exam Booking</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">DELF / TEF / TCF test slot booking assistance for immigration and academic pathways.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Candidate official identification, target level designation (A1 to C2 / Canada PR track).</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('French Language Exam Booking')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                            <!-- 5. Online Language Preparation -->
                            <article class="service-card group flex flex-col justify-between bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden" data-category="exam" data-title="Online Language Preparation">
                                <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-secondary to-primary-container"></div>
                                <div>
                                    <div class="flex items-center justify-between gap-space-xs mb-space-sm">
                                        <span class="bg-surface-container text-primary font-label-sm text-[11px] px-2 py-0.5 rounded uppercase font-semibold tracking-wider">Curriculum & Coaching</span>
                                        <span class="text-secondary font-label-sm text-label-sm font-bold">#30</span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-secondary transition-colors font-semibold">Online Language Preparation</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">Curated curriculum coordination, study schedule planning, and preparatory materials guidance.</p>
                                    <div class="mt-space-md bg-surface-container-low rounded-lg p-space-sm space-y-1">
                                        <span class="font-label-sm text-[11px] text-on-surface-variant uppercase tracking-wider font-semibold block">Key Requirements Preview:</span>
                                        <p class="font-body-sm text-[13px] text-on-surface">Baseline diagnostic assessment completion, target test deadline, batch timing selection.</p>
                                    </div>
                                </div>
                                <div class="pt-space-md mt-space-md flex items-center justify-between gap-space-sm">
                                    <a class="text-primary hover:text-secondary font-label-md text-label-md font-semibold inline-flex items-center gap-1" data-path="service-detail" href="{{ route('service.detail', ['slug' => \Illuminate\Support\Str::slug('Online Language Preparation')]) }}">
                                        View Details <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                    <a class="px-space-md py-space-xs bg-primary text-on-primary hover:bg-primary-container text-label-sm font-label-sm font-semibold rounded-lg shadow-sm transition-all" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                        Enquire
                                    </a>
                                </div>
                            </article>
                        </div>
                    </section>
                    <!-- Search Empty Fallback State (Hidden by default) -->
                    <div class="hidden bg-surface-container-lowest rounded-xl p-space-xl text-center max-w-xl mx-auto shadow-sm" id="noResultsState">
                        <span class="material-symbols-outlined text-[48px] text-outline-variant">search_off</span>
                        <h3 class="font-headline-sm text-headline-sm text-primary font-semibold mt-space-xs">No matching service found</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">We couldn't locate any service matching your terms. Try using broader words or clear your filter parameters.</p>
                        <button class="mt-space-md px-space-md py-space-xs bg-primary text-on-primary font-label-md text-label-md rounded-lg" id="clearFiltersFromEmpty">
                            Clear Search & Show All 30 Services
                        </button>
                    </div>
                </div>
                <!-- Institutional Reassurance Featurette Strip -->
                <section class="max-w-7xl mx-auto px-margin mt-space-xl">
                    <div class="bg-surface-container-low rounded-xl p-space-lg grid grid-cols-1 md:grid-cols-3 gap-gutter">
                        <div class="flex items-start gap-space-sm">
                            <div class="w-10 h-10 rounded-lg bg-surface-container-lowest flex items-center justify-center text-secondary shadow-sm shrink-0">
                                <span class="material-symbols-outlined text-[22px]">verified_user</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-title-md text-primary font-semibold">Primary Source Protocol</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Every document is verified directly with issuing councils and universities to avoid credential rejection.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <div class="w-10 h-10 rounded-lg bg-surface-container-lowest flex items-center justify-center text-secondary shadow-sm shrink-0">
                                <span class="material-symbols-outlined text-[22px]">lock_clock</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-title-md text-primary font-semibold">Defect-Free Assurance</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Zero submission discrepancies. Pre-filing compliance audits ensure total acceptance by foreign regulatory boards.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm">
                            <div class="w-10 h-10 rounded-lg bg-surface-container-lowest flex items-center justify-center text-secondary shadow-sm shrink-0">
                                <span class="material-symbols-outlined text-[22px]">store</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-title-md text-primary font-semibold">Kottayam Physical Desk</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Walk in at Reliable Building, Manorama Junction for in-person original dossier handovers and tracking.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bottom Prominent CTA Banner -->
                <section class="max-w-7xl mx-auto px-margin mt-space-xl">
                    <div class="relative overflow-hidden bg-primary-container text-on-primary rounded-xl p-space-lg md:p-space-xl shadow-xl">
                        <!-- Structural decorative elements -->
                        <div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-secondary-container/10 blur-2xl pointer-events-none"></div>
                        <div class="absolute left-1/3 bottom-0 w-80 h-32 bg-primary/20 blur-xl pointer-events-none"></div>
                        <div class="relative z-10 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-space-lg">
                            <div class="max-w-2xl">
                                <span class="bg-secondary text-on-secondary font-label-sm text-label-sm px-space-sm py-0.5 rounded uppercase tracking-wider font-bold inline-block mb-space-xs">
                                    Integrated Multi-Pathway Consultation
                                </span>
                                <h2 class="font-headline-lg text-headline-lg text-on-primary font-bold tracking-tight">
                                    Need personalized assistance across multiple services? Speak with our Kottayam team today.
                                </h2>
                                <p class="font-body-md text-body-md text-primary-fixed-dim mt-space-xs">
                                    Whether you are combining credential evaluation with language booking, or need end-to-end migration dossiers, our veteran case managers handle every transition seamlessly.
                                </p>
                            </div>
                            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-sm w-full lg:w-auto shrink-0">
                                <a class="h-12 px-space-lg bg-surface-container-lowest hover:bg-surface text-primary font-label-md text-label-md font-semibold rounded-lg shadow-sm transition-all flex items-center justify-center gap-space-xs" href="tel:9292797682">
                                    <span class="material-symbols-outlined text-secondary text-[20px]">call</span>
                                    <span>+91 92927 97682</span>
                                </a>
                                <a class="h-12 px-space-lg bg-secondary hover:bg-tertiary-container text-on-secondary font-label-md text-label-md font-semibold rounded-lg shadow-md transition-all flex items-center justify-center gap-space-xs" data-path="enquiry" href="{{ route('contact') }}#oxfordEnquiryForm">
                                    <span class="material-symbols-outlined text-[20px]">calendar_today</span>
                                    <span>Book Kottayam Consultation</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Interactive Filter & Search Script -->
        <script>
            (function() {
                const searchInput = document.getElementById('serviceSearchInput');
                const clearBtn = document.getElementById('clearSearchBtn');
                const pills = document.querySelectorAll('.category-pill');
                const sections = document.querySelectorAll('.category-section');
                const cards = document.querySelectorAll('.service-card');
                const noResults = document.getElementById('noResultsState');
                const resetBtn = document.getElementById('resetAllFiltersBtn');
                const clearFromEmptyBtn = document.getElementById('clearFiltersFromEmpty');
                const sortSelect = document.getElementById('sortServicesSelect');

                let currentCategory = 'all';
                let searchQuery = '';

                function filterServices() {
                    let visibleTotal = 0;

                    sections.forEach(sec => {
                        const secCat = sec.getAttribute('data-category');
                        const matchesCategory = (currentCategory === 'all' || currentCategory === secCat);

                        let visibleInSec = 0;
                        const secCards = sec.querySelectorAll('.service-card');

                        secCards.forEach(card => {
                            const title = (card.getAttribute('data-title') || '').toLowerCase();
                            const textContent = card.innerText.toLowerCase();
                            const query = searchQuery.trim().toLowerCase();

                            const matchesQuery = query === '' || title.includes(query) || textContent.includes(query);

                            if (matchesCategory && matchesQuery) {
                                card.classList.remove('hidden');
                                visibleInSec++;
                                visibleTotal++;
                            } else {
                                card.classList.add('hidden');
                            }
                        });

                        if (visibleInSec === 0) {
                            sec.classList.add('hidden');
                        } else {
                            sec.classList.remove('hidden');
                        }
                    });

                    if (visibleTotal === 0) {
                        noResults.classList.remove('hidden');
                    } else {
                        noResults.classList.add('hidden');
                    }
                }

                // Category Pill Events
                pills.forEach(pill => {
                    pill.addEventListener('click', () => {
                        pills.forEach(p => {
                            p.classList.remove('active-cat', 'bg-primary-container', 'text-on-primary', 'shadow-sm');
                            p.classList.add('bg-surface-container', 'text-on-surface-variant');
                        });
                        pill.classList.remove('bg-surface-container', 'text-on-surface-variant');
                        pill.classList.add('active-cat', 'bg-primary-container', 'text-on-primary', 'shadow-sm');

                        currentCategory = pill.getAttribute('data-cat');
                        filterServices();
                    });
                });

                // Search Input Events
                searchInput.addEventListener('input', (e) => {
                    searchQuery = e.target.value;
                    if (searchQuery.length > 0) {
                        clearBtn.classList.remove('hidden');
                    } else {
                        clearBtn.classList.add('hidden');
                    }
                    filterServices();
                });

                clearBtn.addEventListener('click', () => {
                    searchInput.value = '';
                    searchQuery = '';
                    clearBtn.classList.add('hidden');
                    filterServices();
                    searchInput.focus();
                });

                function resetFilters() {
                    searchInput.value = '';
                    searchQuery = '';
                    clearBtn.classList.add('hidden');
                    currentCategory = 'all';
                    pills.forEach(p => {
                        if (p.getAttribute('data-cat') === 'all') {
                            p.classList.add('active-cat', 'bg-primary-container', 'text-on-primary', 'shadow-sm');
                            p.classList.remove('bg-surface-container', 'text-on-surface-variant');
                        } else {
                            p.classList.remove('active-cat', 'bg-primary-container', 'text-on-primary', 'shadow-sm');
                            p.classList.add('bg-surface-container', 'text-on-surface-variant');
                        }
                    });
                    if (sortSelect) sortSelect.value = 'default';
                    filterServices();
                }

                if (resetBtn) resetBtn.addEventListener('click', resetFilters);
                if (clearFromEmptyBtn) clearFromEmptyBtn.addEventListener('click', resetFilters);

                // Alphabetical / Order Sorting Handler
                if (sortSelect) {
                    sortSelect.addEventListener('change', (e) => {
                        const val = e.target.value;
                        sections.forEach(sec => {
                            const grid = sec.querySelector('.grid');
                            if (!grid) return;
                            const items = Array.from(grid.querySelectorAll('.service-card'));

                            if (val === 'alpha-asc') {
                                items.sort((a, b) => {
                                    const textA = a.getAttribute('data-title') || '';
                                    const textB = b.getAttribute('data-title') || '';
                                    return textA.localeCompare(textB);
                                });
                            } else {
                                // Restore default DOM order based on index # badges
                                items.sort((a, b) => {
                                    const numA = parseInt(a.querySelector('.font-bold[class*="text-secondary"]')?.innerText.replace('#', '') || '0', 10);
                                    const numB = parseInt(b.querySelector('.font-bold[class*="text-secondary"]')?.innerText.replace('#', '') || '0', 10);
                                    return numA - numB;
                                });
                            }
                            items.forEach(item => grid.appendChild(item));
                        });
                    });
                }
            })();
        </script>
    
@endsection
