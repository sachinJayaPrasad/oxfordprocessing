@extends('layouts.admin')
@section('activePage', 'dashboard')
@section('content')
            <div class="flex flex-col w-full space-y-8">
                <!-- Operational Context Ribbon & Header -->
                <section class="flex flex-col gap-6">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-label-sm uppercase tracking-wider bg-surface-container-high text-primary font-semibold">
                                    Registry Desk 01 • Kerala Node
                                </span>
                                <span class="text-xs text-outline font-label-sm">Protocol v4.18.2</span>
                            </div>
                            <h1 class="font-headline-lg text-headline-lg text-primary tracking-tight">Dashboard Overview</h1>
                            <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
                                Welcome back, Admin. Manage website enquiries, maintain service catalogue, and oversee Kottayam desk operations.
                            </p>
                        </div>
                        <!-- Date Presets & Desk CTA -->
                        <div class="flex flex-wrap items-center gap-3">
                            <div class="inline-flex p-1 rounded-xl bg-surface-container-high items-center text-xs font-label-md shadow-sm">
                                <button class="px-3 py-1.5 rounded-lg text-on-surface-variant hover:text-primary transition-colors">Today</button>
                                <button class="px-3 py-1.5 rounded-lg text-on-surface-variant hover:text-primary transition-colors">This Week</button>
                                <button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest text-primary font-semibold shadow-sm">Last 30 Days</button>
                                <button class="px-3 py-1.5 rounded-lg text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1">
                                    Custom
                                    <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                                </button>
                            </div>
                            <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-surface-container-low text-primary hover:bg-surface-container-high transition-colors font-label-md text-label-md font-medium shadow-sm">
                                <span class="material-symbols-outlined text-[18px]">file_download</span>
                                <span>Export Log</span>
                            </button>
                            <button class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-primary-container text-on-primary hover:bg-primary transition-all font-label-md text-label-md font-semibold shadow-md">
                                <span class="material-symbols-outlined text-[18px]">add_circle</span>
                                <span>+ Add New Service</span>
                            </button>
                        </div>
                    </div>
                    <!-- Active Protocol Sub-bar -->
                    <div class="flex flex-wrap items-center justify-between gap-4 px-5 py-3 rounded-xl bg-surface-container-low shadow-sm">
                        <div class="flex items-center gap-6 text-xs font-label-md">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-secondary"></span>
                                <span class="text-on-surface font-semibold">Active Window:</span>
                                <span class="text-on-surface-variant">Oct 1 — Oct 31, 2025</span>
                            </div>
                            <div class="h-4 w-[1px] bg-outline-variant/40"></div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px] text-secondary">verified_user</span>
                                <span class="text-on-surface-variant">Bureau Accreditation:</span>
                                <span class="text-primary font-semibold">CGFNS / DHA / NMBI Direct Node</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 text-xs">
                            <span class="text-outline">Sync Status:</span>
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container-lowest font-medium text-primary">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
                                Public Webhook: 100% Nominal
                            </span>
                        </div>
                    </div>
                </section>
                <!-- Key Metrics: 4 Grid Bento -->
                <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
                    <!-- Metric 1: Total Enquiries -->
                    <div class="relative overflow-hidden p-6 rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                        <div class="flex items-start justify-between">
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Total Enquiries</span>
                            <div class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-[20px]">mark_email_read</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-xl text-headline-xl text-primary font-bold">248</span>
                                <span class="inline-flex items-center text-xs font-semibold text-secondary gap-0.5">
                                    <span class="material-symbols-outlined text-[14px]">trending_up</span>
                                    +14%
                                </span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">All-time verified inquiries from web desk</p>
                        </div>
                        <div class="mt-5 pt-3 bg-surface-container-low/50 -mx-6 -mb-6 px-6 py-2.5 flex items-center justify-between">
                            <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline">Pacing vs Sep</span>
                            <span class="text-xs font-medium text-primary">+31 Leads</span>
                        </div>
                    </div>
                    <!-- Metric 2: New / Unread (Golden Accent) -->
                    <div class="relative overflow-hidden p-6 rounded-xl bg-surface-container-lowest shadow-md flex flex-col justify-between">
                        <div class="absolute top-0 left-0 right-0 h-1 bg-secondary-container"></div>
                        <div class="flex items-start justify-between">
                            <div class="flex flex-col">
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">New & Unread</span>
                                <span class="inline-flex items-center gap-1 mt-1 text-[11px] font-label-sm px-2 py-0.5 rounded bg-tertiary-fixed text-on-tertiary-fixed font-semibold w-fit">
                                    <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-ping"></span>
                                    Requires Review
                                </span>
                            </div>
                            <div class="w-10 h-10 rounded-lg bg-secondary-fixed/50 flex items-center justify-center text-on-secondary-fixed">
                                <span class="material-symbols-outlined text-[20px]">inbox</span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-xl text-headline-xl text-secondary font-bold">18</span>
                                <span class="text-xs text-outline font-medium">pending intake</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Average response time: 2.4 hrs</p>
                        </div>
                        <div class="mt-5 pt-3 bg-secondary-fixed/20 -mx-6 -mb-6 px-6 py-2.5 flex items-center justify-between">
                            <span class="text-[11px] font-label-sm uppercase tracking-wider text-secondary font-semibold">Priority Triage</span>
                            <a class="text-xs font-bold text-secondary flex items-center gap-0.5 hover:underline" href="#enquiries-table">
                                Action First
                                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                    <!-- Metric 3: In Triage / Assigned -->
                    <div class="relative overflow-hidden p-6 rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                        <div class="flex items-start justify-between">
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">In Progress / Triage</span>
                            <div class="w-10 h-10 rounded-lg bg-primary-fixed/50 flex items-center justify-center text-primary-container">
                                <span class="material-symbols-outlined text-[20px]">assignment_ind</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-xl text-headline-xl text-primary font-bold">42</span>
                                <span class="text-xs text-on-surface-variant font-medium">candidates</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Active WhatsApp & Email desk followups</p>
                        </div>
                        <div class="mt-5 pt-3 bg-surface-container-low/50 -mx-6 -mb-6 px-6 py-2.5 flex items-center justify-between">
                            <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline">Counselor Load</span>
                            <span class="text-xs font-medium text-primary">6 Officers Assigned</span>
                        </div>
                    </div>
                    <!-- Metric 4: Responded / Closed -->
                    <div class="relative overflow-hidden p-6 rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                        <div class="flex items-start justify-between">
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline">Responded & Closed</span>
                            <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-[20px]">task_alt</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-xl text-headline-xl text-primary font-bold">188</span>
                                <span class="text-xs font-semibold text-secondary">75.8% CR</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Conversion to physical Kottayam consultation</p>
                        </div>
                        <div class="mt-5 pt-3 bg-surface-container-low/50 -mx-6 -mb-6 px-6 py-2.5 flex items-center justify-between">
                            <span class="text-[11px] font-label-sm uppercase tracking-wider text-outline">Cycle Resolution</span>
                            <span class="text-xs font-medium text-primary">Avg 3.1 Days</span>
                        </div>
                    </div>
                </section>
                <!-- Middle Operational Analytics: 7 / 5 Grid -->
                <section class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <!-- Left: Activity & Telemetry Chart (7 Cols) -->
                    <div class="lg:col-span-7 rounded-xl bg-surface-container-lowest p-6 shadow-sm flex flex-col justify-between space-y-6">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div>
                                <div class="flex items-center gap-2">
                                    <h2 class="font-headline-sm text-headline-sm text-primary font-semibold">Weekly Enquiry Velocity</h2>
                                    <span class="text-xs px-2 py-0.5 rounded bg-surface-container-high text-on-surface-variant font-label-sm">5 Streams</span>
                                </div>
                                <p class="text-xs text-outline mt-0.5">Aggregated ingestion by candidate sector & verification tier</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-secondary-fixed/40 text-on-secondary-fixed text-[11px] font-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-[13px]">bolt</span>
                                    Peak: Mon & Thu
                                </span>
                            </div>
                        </div>
                        <!-- Clean SVG Weekly Ingestion Graphic -->
                        <div class="w-full bg-surface-container-low rounded-xl p-5 flex flex-col gap-4">
                            <div class="flex items-center justify-between text-xs text-on-surface-variant">
                                <span class="font-label-sm font-medium">Daily Leads Distribution (Oct 21 — Oct 27)</span>
                                <span class="text-[11px] text-outline">Units: Verified Submissions</span>
                            </div>
                            <!-- Inline Visual Chart Container -->
                            <div class="w-full h-48 relative flex items-end justify-between pt-6 pb-2 px-2">
                                <!-- Background Gridlines -->
                                <div class="absolute inset-0 flex flex-col justify-between pointer-events-none opacity-20">
                                    <div class="w-full border-b border-primary/20"></div>
                                    <div class="w-full border-b border-primary/20"></div>
                                    <div class="w-full border-b border-primary/20"></div>
                                    <div class="w-full border-b border-primary/20"></div>
                                </div>
                                <!-- Day 1: Monday (Peak 1) -->
                                <div class="flex flex-col items-center gap-2 flex-1 group">
                                    <div class="relative flex items-end justify-center w-full h-36">
                                        <div class="w-7 bg-primary rounded-t transition-all group-hover:brightness-125 h-[85%] relative">
                                            <span class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold px-1.5 py-0.5 rounded bg-primary text-on-primary opacity-0 group-hover:opacity-100 transition-opacity">48</span>
                                        </div>
                                        <div class="w-3 bg-secondary rounded-t -ml-1 transition-all h-[55%]"></div>
                                    </div>
                                    <span class="text-xs font-semibold text-primary">Mon</span>
                                </div>
                                <!-- Day 2: Tuesday -->
                                <div class="flex flex-col items-center gap-2 flex-1 group">
                                    <div class="relative flex items-end justify-center w-full h-36">
                                        <div class="w-7 bg-primary/80 rounded-t transition-all group-hover:brightness-125 h-[50%] relative">
                                            <span class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold px-1.5 py-0.5 rounded bg-primary text-on-primary opacity-0 group-hover:opacity-100 transition-opacity">26</span>
                                        </div>
                                        <div class="w-3 bg-secondary/80 rounded-t -ml-1 transition-all h-[35%]"></div>
                                    </div>
                                    <span class="text-xs text-on-surface-variant">Tue</span>
                                </div>
                                <!-- Day 3: Wednesday -->
                                <div class="flex flex-col items-center gap-2 flex-1 group">
                                    <div class="relative flex items-end justify-center w-full h-36">
                                        <div class="w-7 bg-primary/80 rounded-t transition-all group-hover:brightness-125 h-[62%] relative">
                                            <span class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold px-1.5 py-0.5 rounded bg-primary text-on-primary opacity-0 group-hover:opacity-100 transition-opacity">34</span>
                                        </div>
                                        <div class="w-3 bg-secondary/80 rounded-t -ml-1 transition-all h-[40%]"></div>
                                    </div>
                                    <span class="text-xs text-on-surface-variant">Wed</span>
                                </div>
                                <!-- Day 4: Thursday (Peak 2) -->
                                <div class="flex flex-col items-center gap-2 flex-1 group">
                                    <div class="relative flex items-end justify-center w-full h-36">
                                        <div class="w-7 bg-primary rounded-t transition-all group-hover:brightness-125 h-[95%] relative">
                                            <span class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold px-1.5 py-0.5 rounded bg-primary text-on-primary opacity-0 group-hover:opacity-100 transition-opacity">52</span>
                                        </div>
                                        <div class="w-3 bg-secondary rounded-t -ml-1 transition-all h-[70%]"></div>
                                    </div>
                                    <span class="text-xs font-semibold text-primary">Thu</span>
                                </div>
                                <!-- Day 5: Friday -->
                                <div class="flex flex-col items-center gap-2 flex-1 group">
                                    <div class="relative flex items-end justify-center w-full h-36">
                                        <div class="w-7 bg-primary/80 rounded-t transition-all group-hover:brightness-125 h-[58%] relative">
                                            <span class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold px-1.5 py-0.5 rounded bg-primary text-on-primary opacity-0 group-hover:opacity-100 transition-opacity">31</span>
                                        </div>
                                        <div class="w-3 bg-secondary/80 rounded-t -ml-1 transition-all h-[42%]"></div>
                                    </div>
                                    <span class="text-xs text-on-surface-variant">Fri</span>
                                </div>
                                <!-- Day 6: Saturday (Desk Half-Day) -->
                                <div class="flex flex-col items-center gap-2 flex-1 group">
                                    <div class="relative flex items-end justify-center w-full h-36">
                                        <div class="w-7 bg-primary/60 rounded-t transition-all group-hover:brightness-125 h-[40%] relative">
                                            <span class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold px-1.5 py-0.5 rounded bg-primary text-on-primary opacity-0 group-hover:opacity-100 transition-opacity">19</span>
                                        </div>
                                        <div class="w-3 bg-secondary/60 rounded-t -ml-1 transition-all h-[25%]"></div>
                                    </div>
                                    <span class="text-xs text-on-surface-variant">Sat</span>
                                </div>
                                <!-- Day 7: Sunday -->
                                <div class="flex flex-col items-center gap-2 flex-1 group">
                                    <div class="relative flex items-end justify-center w-full h-36">
                                        <div class="w-7 bg-primary/30 rounded-t transition-all group-hover:brightness-125 h-[20%] relative">
                                            <span class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold px-1.5 py-0.5 rounded bg-primary text-on-primary opacity-0 group-hover:opacity-100 transition-opacity">8</span>
                                        </div>
                                        <div class="w-3 bg-secondary/30 rounded-t -ml-1 transition-all h-[12%]"></div>
                                    </div>
                                    <span class="text-xs text-outline">Sun</span>
                                </div>
                            </div>
                            <!-- Legend & Category Footprint -->
                            <div class="flex flex-wrap items-center justify-between gap-3 pt-3 border-t border-outline-variant/20 text-xs">
                                <div class="flex items-center gap-4">
                                    <div class="flex items-center gap-1.5">
                                        <span class="w-3 h-3 rounded-sm bg-primary"></span>
                                        <span class="text-on-surface-variant font-medium">Overseas & Licensing</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="w-3 h-3 rounded-sm bg-secondary"></span>
                                        <span class="text-on-surface-variant font-medium">Attestation & Language</span>
                                    </div>
                                </div>
                                <span class="text-[11px] text-outline font-label-sm italic">Fictional Demo Telemetry Data for Administration Testing</span>
                            </div>
                        </div>
                        <!-- Quick Operational Highlights Strip -->
                        <div class="grid grid-cols-3 gap-3">
                            <div class="p-3 rounded-lg bg-surface-container-low flex flex-col">
                                <span class="text-[11px] text-outline uppercase font-label-sm">Primary Channel</span>
                                <span class="font-headline-sm text-headline-sm text-primary font-semibold mt-0.5">WhatsApp Direct</span>
                                <span class="text-[11px] text-secondary font-medium">62% of incoming traffic</span>
                            </div>
                            <div class="p-3 rounded-lg bg-surface-container-low flex flex-col">
                                <span class="text-[11px] text-outline uppercase font-label-sm">Busiest Hour</span>
                                <span class="font-headline-sm text-headline-sm text-primary font-semibold mt-0.5">10:30 — 12:45</span>
                                <span class="text-[11px] text-on-surface-variant font-medium">IST Bureau Opening</span>
                            </div>
                            <div class="p-3 rounded-lg bg-surface-container-low flex flex-col">
                                <span class="text-[11px] text-outline uppercase font-label-sm">Intake Accuracy</span>
                                <span class="font-headline-sm text-headline-sm text-primary font-semibold mt-0.5">99.1%</span>
                                <span class="text-[11px] text-secondary font-medium">Zero duplicate dossiers</span>
                            </div>
                        </div>
                    </div>
                    <!-- Right: Service Categories Breakdown - Exact 30 Services (5 Cols) -->
                    <div class="lg:col-span-5 rounded-xl bg-surface-container-lowest p-6 shadow-sm flex flex-col justify-between space-y-6">
                        <div class="flex items-center justify-between">
                            <div class="space-y-0.5">
                                <h2 class="font-headline-sm text-headline-sm text-primary font-semibold">Service Catalogue</h2>
                                <p class="text-xs text-outline">Live inventory published to prospective applicants</p>
                            </div>
                            <div class="text-right">
                                <span class="font-headline-sm text-headline-sm text-secondary font-bold">30</span>
                                <span class="block text-[11px] font-label-sm uppercase tracking-wider text-outline">Active Offerings</span>
                            </div>
                        </div>
                        <!-- Category Stack list -->
                        <div class="space-y-3.5">
                            <!-- Cat 1 -->
                            <div class="p-3.5 rounded-lg bg-surface-container-low flex items-center justify-between hover:bg-surface-container-high transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-primary-container text-on-primary flex items-center justify-center font-bold text-xs">
                                        01
                                    </div>
                                    <div>
                                        <span class="font-label-md text-label-md text-primary font-semibold block leading-tight">Overseas Registration & Licensing</span>
                                        <span class="text-xs text-on-surface-variant">NMBI, DHA, MOH, HAAD, NCLEX-RN, Prometric</span>
                                    </div>
                                </div>
                                <div class="text-right flex-shrink-0">
                                    <span class="font-label-md text-label-md text-primary font-bold">11 Services</span>
                                    <span class="block text-[11px] text-secondary font-medium">100% Active</span>
                                </div>
                            </div>
                            <!-- Cat 2 -->
                            <div class="p-3.5 rounded-lg bg-surface-container-low flex items-center justify-between hover:bg-surface-container-high transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-primary-container text-on-primary flex items-center justify-center font-bold text-xs">
                                        02
                                    </div>
                                    <div>
                                        <span class="font-label-md text-label-md text-primary font-semibold block leading-tight">Documentation & Attestation</span>
                                        <span class="text-xs text-on-surface-variant">Apostille, HRD, MEA, Embassy Legalization, DataFlow</span>
                                    </div>
                                </div>
                                <div class="text-right flex-shrink-0">
                                    <span class="font-label-md text-label-md text-primary font-bold">6 Services</span>
                                    <span class="block text-[11px] text-secondary font-medium">100% Active</span>
                                </div>
                            </div>
                            <!-- Cat 3 -->
                            <div class="p-3.5 rounded-lg bg-surface-container-low flex items-center justify-between hover:bg-surface-container-high transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-primary-container text-on-primary flex items-center justify-center font-bold text-xs">
                                        03
                                    </div>
                                    <div>
                                        <span class="font-label-md text-label-md text-primary font-semibold block leading-tight">Education & University</span>
                                        <span class="text-xs text-on-surface-variant">UK, Ireland, Canada & Australia Admission Dossiers</span>
                                    </div>
                                </div>
                                <div class="text-right flex-shrink-0">
                                    <span class="font-label-md text-label-md text-primary font-bold">4 Services</span>
                                    <span class="block text-[11px] text-secondary font-medium">100% Active</span>
                                </div>
                            </div>
                            <!-- Cat 4 -->
                            <div class="p-3.5 rounded-lg bg-surface-container-low flex items-center justify-between hover:bg-surface-container-high transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-primary-container text-on-primary flex items-center justify-center font-bold text-xs">
                                        04
                                    </div>
                                    <div>
                                        <span class="font-label-md text-label-md text-primary font-semibold block leading-tight">Career Support & Placement</span>
                                        <span class="text-xs text-on-surface-variant">NHS Interview Coaching, CV Formatting, Police Clearance</span>
                                    </div>
                                </div>
                                <div class="text-right flex-shrink-0">
                                    <span class="font-label-md text-label-md text-primary font-bold">4 Services</span>
                                    <span class="block text-[11px] text-secondary font-medium">100% Active</span>
                                </div>
                            </div>
                            <!-- Cat 5 -->
                            <div class="p-3.5 rounded-lg bg-surface-container-low flex items-center justify-between hover:bg-surface-container-high transition-colors">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-primary-container text-on-primary flex items-center justify-center font-bold text-xs">
                                        05
                                    </div>
                                    <div>
                                        <span class="font-label-md text-label-md text-primary font-semibold block leading-tight">Exam & Language Preparation</span>
                                        <span class="text-xs text-on-surface-variant">OET (Nursing & Med), IELTS Academic, CBT Training</span>
                                    </div>
                                </div>
                                <div class="text-right flex-shrink-0">
                                    <span class="font-label-md text-label-md text-primary font-bold">5 Services</span>
                                    <span class="block text-[11px] text-secondary font-medium">100% Active</span>
                                </div>
                            </div>
                        </div>
                        <!-- Bureau Integrity Banner -->
                        <div class="p-4 rounded-xl bg-surface-container-high flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-secondary text-[22px]">verified</span>
                                <div>
                                    <span class="text-xs font-semibold text-primary block">30 Verified Services Live on Public Site</span>
                                    <span class="text-[11px] text-on-surface-variant">Zero draft bottlenecks • Fully localized for Kerala applicants</span>
                                </div>
                            </div>
                            <button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest text-primary text-xs font-semibold hover:bg-white shadow-sm transition-all">
                                Audit Catalogue
                            </button>
                        </div>
                    </div>
                </section>
                <!-- Recent Website Enquiries Table Module -->
                <section class="rounded-xl bg-surface-container-lowest p-6 shadow-sm space-y-6" id="enquiries-table">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h2 class="font-headline-sm text-headline-sm text-primary font-semibold">Incoming Website Enquiries</h2>
                                <span class="px-2 py-0.5 rounded-full bg-secondary-fixed/50 text-on-secondary-fixed text-xs font-bold">5 Recent</span>
                            </div>
                            <p class="text-xs text-outline">Real-time candidate requests channeled through oxfordprocessing.com</p>
                        </div>
                        <!-- Filters & Search Toolbar -->
                        <div class="flex flex-wrap items-center gap-3">
                            <div class="relative min-w-[240px]">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">search</span>
                                <input class="w-full h-9 pl-9 pr-3 rounded-lg bg-surface-container-low text-xs text-on-surface placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary-container" placeholder="Filter by candidate, phone, service..." type="text" />
                            </div>
                            <select class="h-9 px-3 rounded-lg bg-surface-container-low text-xs font-medium text-on-surface focus:outline-none focus:ring-1 focus:ring-primary-container">
                                <option value="all">All Statuses (248)</option>
                                <option selected="" value="new">New Enquiries (18)</option>
                                <option value="in_progress">In Progress (42)</option>
                                <option value="responded">Responded / Closed (188)</option>
                            </select>
                            <select class="h-9 px-3 rounded-lg bg-surface-container-low text-xs font-medium text-on-surface focus:outline-none focus:ring-1 focus:ring-primary-container">
                                <option value="all">All 5 Categories</option>
                                <option value="licensing">Overseas Licensing</option>
                                <option value="doc">Documentation</option>
                                <option value="edu">Education</option>
                                <option value="career">Career Support</option>
                                <option value="exam">Exam Prep</option>
                            </select>
                            <button class="h-9 px-3 rounded-lg bg-surface-container-high text-primary hover:bg-surface-container text-xs font-semibold flex items-center gap-1.5 transition-colors">
                                <span class="material-symbols-outlined text-[16px]">tune</span>
                                Filter
                            </button>
                        </div>
                    </div>
                    <!-- Structured Bureau Data Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-surface-container-low/70 text-outline text-[11px] font-label-sm uppercase tracking-wider">
                                    <th class="py-3 px-4 rounded-l-lg">Enquiry ID</th>
                                    <th class="py-3 px-4">Candidate Name</th>
                                    <th class="py-3 px-4">Contact Channel</th>
                                    <th class="py-3 px-4">Service of Interest</th>
                                    <th class="py-3 px-4">Date Received</th>
                                    <th class="py-3 px-4">Desk Status</th>
                                    <th class="py-3 px-4 text-right rounded-r-lg">Direct Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-surface-container-high text-xs">
                                <!-- Row 1: Anju Susan Thomas (NEW) -->
                                <tr class="hover:bg-surface-container-low/40 transition-colors group">
                                    <td class="py-4 px-4 font-mono font-semibold text-primary">#ENQ-1092</td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-8 h-8 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center font-bold text-xs">
                                                AT
                                            </div>
                                            <div>
                                                <span class="font-semibold text-primary block">Anju Susan Thomas</span>
                                                <span class="text-[11px] text-outline">Kottayam District Applicant</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center gap-1.5 text-secondary font-medium">
                                            <span class="material-symbols-outlined text-[16px]">chat</span>
                                            <span>+91 98471 20984</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="flex flex-col">
                                            <span class="font-medium text-primary">NMBI Decision Letter (DL)</span>
                                            <span class="text-[11px] text-outline">Ireland Nursing Board Intake</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 text-on-surface-variant font-medium">Today, 11:20 AM</td>
                                    <td class="py-4 px-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-tertiary-fixed text-on-tertiary-fixed">
                                            <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
                                            NEW
                                        </span>
                                    </td>
                                    <td class="py-4 px-4 text-right">
                                        <div class="inline-flex items-center gap-2 justify-end">
                                            <a class="px-2.5 py-1.5 rounded-lg bg-surface-container-high text-primary hover:bg-surface-container text-xs font-semibold inline-flex items-center gap-1 transition-colors" href="https://wa.me/919847120984" target="_blank">
                                                <span class="material-symbols-outlined text-[14px] text-secondary">chat</span>
                                                WhatsApp
                                            </a>
                                            <button class="px-3 py-1.5 rounded-lg bg-primary text-on-primary hover:bg-primary-container text-xs font-semibold transition-colors">
                                                View Dossier
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 2: Jithin Mathew (IN PROGRESS) -->
                                <tr class="hover:bg-surface-container-low/40 transition-colors group">
                                    <td class="py-4 px-4 font-mono font-semibold text-primary">#ENQ-1091</td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-8 h-8 rounded-full bg-primary-container text-on-primary flex items-center justify-center font-bold text-xs">
                                                JM
                                            </div>
                                            <div>
                                                <span class="font-semibold text-primary block">Jithin Mathew</span>
                                                <span class="text-[11px] text-outline">Changanassery Sub-region</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        <span class="text-on-surface font-medium">+91 94472 18402</span>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="flex flex-col">
                                            <span class="font-medium text-primary">DataFlow Verification (DHA)</span>
                                            <span class="text-[11px] text-outline">Dubai Health Authority Protocol</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 text-on-surface-variant font-medium">Yesterday, 04:15 PM</td>
                                    <td class="py-4 px-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-surface-container-high text-primary">
                                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                            IN PROGRESS
                                        </span>
                                    </td>
                                    <td class="py-4 px-4 text-right">
                                        <div class="inline-flex items-center gap-2 justify-end">
                                            <button class="px-2.5 py-1.5 rounded-lg bg-surface-container-low text-on-surface hover:bg-surface-container-high text-xs font-medium inline-flex items-center gap-1 transition-colors">
                                                <span class="material-symbols-outlined text-[14px]">edit_note</span>
                                                Notes
                                            </button>
                                            <button class="px-3 py-1.5 rounded-lg bg-surface-container-high text-primary hover:bg-surface-container text-xs font-semibold transition-colors">
                                                Details
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row 3: Blessy K. Joseph (RESPONDED) -->
                                <tr class="hover:bg-surface-container-low/40 transition-colors group">
                                    <td class="py-4 px-4 font-mono font-semibold text-primary">#ENQ-1090</td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-8 h-8 rounded-full bg-surface-container-high text-primary flex items-center justify-center font-bold text-xs">
                                                BJ
                                            </div>
                                            <div>
                                                <span class="font-semibold text-primary block">Blessy K. Joseph</span>
                                                <span class="text-[11px] text-outline">Pala / Meenachil</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        <span class="text-on-surface font-medium truncate max-w-[160px] block">blessy.kj@gmail.com</span>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="flex flex-col">
                                            <span class="font-medium text-primary">OET Exam Booking (Nursing)</span>
                                            <span class="text-[11px] text-outline">Official Test Center Seat</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 text-on-surface-variant font-medium">28 Oct 2025</td>
                                    <td class="py-4 px-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-surface-container-highest text-primary">
                                            <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                            RESPONDED
                                        </span>
                                    </td>
                                    <td class="py-4 px-4 text-right">
                                        <button class="px-3 py-1.5 rounded-lg bg-surface-container-high text-primary hover:bg-surface-container text-xs font-semibold transition-colors">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 4: Rahul V. Nair (CLOSED) -->
                                <tr class="hover:bg-surface-container-low/40 transition-colors group">
                                    <td class="py-4 px-4 font-mono font-semibold text-primary">#ENQ-1089</td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-8 h-8 rounded-full bg-surface-container-low text-outline flex items-center justify-center font-bold text-xs">
                                                RN
                                            </div>
                                            <div>
                                                <span class="font-semibold text-primary block">Rahul V. Nair</span>
                                                <span class="text-[11px] text-outline">Thiruvalla Desk Lead</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        <span class="text-on-surface font-medium">+91 97450 33119</span>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="flex flex-col">
                                            <span class="font-medium text-primary">Passport Renewal (Tatkaal)</span>
                                            <span class="text-[11px] text-outline">Regional Passport Office Kerala</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 text-on-surface-variant font-medium">27 Oct 2025</td>
                                    <td class="py-4 px-4">
                                        <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-surface-container-low text-outline">
                                            CLOSED
                                        </span>
                                    </td>
                                    <td class="py-4 px-4 text-right">
                                        <button class="px-3 py-1.5 rounded-lg bg-surface-container-low text-on-surface-variant hover:bg-surface-container-high text-xs font-medium transition-colors">
                                            Archived Log
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row 5: Sandra Cherian (IN PROGRESS) -->
                                <tr class="hover:bg-surface-container-low/40 transition-colors group">
                                    <td class="py-4 px-4 font-mono font-semibold text-primary">#ENQ-1088</td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-8 h-8 rounded-full bg-primary-container text-on-primary flex items-center justify-center font-bold text-xs">
                                                SC
                                            </div>
                                            <div>
                                                <span class="font-semibold text-primary block">Sandra Cherian</span>
                                                <span class="text-[11px] text-outline">Kottayam Central</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4">
                                        <span class="text-on-surface font-medium truncate max-w-[160px] block">sandra.c@outlook.com</span>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="flex flex-col">
                                            <span class="font-medium text-primary">University Application Support</span>
                                            <span class="text-[11px] text-outline">UK MSc Nursing Intake (Jan 26)</span>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 text-on-surface-variant font-medium">26 Oct 2025</td>
                                    <td class="py-4 px-4">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-semibold bg-surface-container-high text-primary">
                                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                            IN PROGRESS
                                        </span>
                                    </td>
                                    <td class="py-4 px-4 text-right">
                                        <button class="px-3 py-1.5 rounded-lg bg-surface-container-high text-primary hover:bg-surface-container text-xs font-semibold transition-colors">
                                            View Details
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table Footer / Pagination Notice -->
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-3 pt-3 border-t border-surface-container-high text-xs text-on-surface-variant">
                        <span>Showing 5 of 248 total enquiries across active cohorts</span>
                        <div class="flex items-center gap-2">
                            <button class="px-3 py-1.5 rounded-lg bg-surface-container-low text-on-surface-variant disabled:opacity-50 font-medium" disabled="">Previous</button>
                            <span class="px-2 font-semibold text-primary">Page 1 of 50</span>
                            <button class="px-3 py-1.5 rounded-lg bg-surface-container-low text-primary hover:bg-surface-container-high font-medium transition-colors">Next</button>
                        </div>
                    </div>
                </section>
                <!-- Quick Actions Bureau Dock -->
                <section class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-[20px] text-secondary">flash_on</span>
                            <h3 class="font-headline-sm text-headline-sm text-primary font-semibold">Bureau Operations Quick Dock</h3>
                        </div>
                        <span class="text-xs text-outline font-label-sm uppercase tracking-wider">Station Kottayam • Admin Shortlinks</span>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- Quick Action 1 -->
                        <a class="p-4 rounded-xl bg-surface-container-lowest hover:bg-surface-container-low transition-all shadow-sm flex items-start gap-3.5 group" href="#enquiries-table">
                            <div class="w-10 h-10 rounded-lg bg-secondary-fixed/40 text-on-secondary-fixed flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
                                <span class="material-symbols-outlined text-[20px]">notifications_active</span>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-label-md text-label-md text-primary font-semibold truncate group-hover:text-secondary transition-colors">Review 18 New Enquiries</span>
                                <span class="text-xs text-on-surface-variant mt-0.5">Assigned to intake queue</span>
                                <span class="text-[11px] text-secondary font-medium mt-2 flex items-center gap-1">
                                    Jump to review
                                    <span class="material-symbols-outlined text-[13px]">arrow_forward</span>
                                </span>
                            </div>
                        </a>
                        <!-- Quick Action 2 -->
                        <a class="p-4 rounded-xl bg-surface-container-lowest hover:bg-surface-container-low transition-all shadow-sm flex items-start gap-3.5 group" href="#">
                            <div class="w-10 h-10 rounded-lg bg-surface-container-high text-primary flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
                                <span class="material-symbols-outlined text-[20px]">auto_stories</span>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-label-md text-label-md text-primary font-semibold truncate group-hover:text-primary-container transition-colors">Edit Homepage Hero Copy</span>
                                <span class="text-xs text-on-surface-variant mt-0.5">Modify trust pillars & CTA</span>
                                <span class="text-[11px] text-primary font-medium mt-2 flex items-center gap-1">
                                    Open CMS Editor
                                    <span class="material-symbols-outlined text-[13px]">arrow_forward</span>
                                </span>
                            </div>
                        </a>
                        <!-- Quick Action 3 -->
                        <a class="p-4 rounded-xl bg-surface-container-lowest hover:bg-surface-container-low transition-all shadow-sm flex items-start gap-3.5 group" href="#">
                            <div class="w-10 h-10 rounded-lg bg-surface-container-high text-primary flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
                                <span class="material-symbols-outlined text-[20px]">storefront</span>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-label-md text-label-md text-primary font-semibold truncate group-hover:text-primary-container transition-colors">Manage Kottayam Chamber</span>
                                <span class="text-xs text-on-surface-variant mt-0.5">Desk hours & walk-in slots</span>
                                <span class="text-[11px] text-primary font-medium mt-2 flex items-center gap-1">
                                    Update Location Desk
                                    <span class="material-symbols-outlined text-[13px]">arrow_forward</span>
                                </span>
                            </div>
                        </a>
                        <!-- Quick Action 4 -->
                        <a class="p-4 rounded-xl bg-surface-container-lowest hover:bg-surface-container-low transition-all shadow-sm flex items-start gap-3.5 group" href="#">
                            <div class="w-10 h-10 rounded-lg bg-surface-container-high text-primary flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform">
                                <span class="material-symbols-outlined text-[20px]">troubleshoot</span>
                            </div>
                            <div class="flex flex-col min-w-0">
                                <span class="font-label-md text-label-md text-primary font-semibold truncate group-hover:text-primary-container transition-colors">Verify SEO Meta Tags</span>
                                <span class="text-xs text-on-surface-variant mt-0.5">Kerala Nursing keywords indexing</span>
                                <span class="text-[11px] text-primary font-medium mt-2 flex items-center gap-1">
                                    Run SERP Auditor
                                    <span class="material-symbols-outlined text-[13px]">arrow_forward</span>
                                </span>
                            </div>
                        </a>
                    </div>
                </section>
            </div>
        
@endsection
