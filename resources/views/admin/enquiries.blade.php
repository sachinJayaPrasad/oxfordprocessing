@extends('layouts.admin')
@section('activePage', 'enquiries')
@section('content')
            <div class="flex flex-col w-full">
                <!-- Top Context & Header -->
                <div class="flex flex-col gap-6 mb-6">
                    <!-- Breadcrumb & Administrative Metadata Banner -->
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div class="flex items-center gap-2 font-label-sm text-label-sm uppercase tracking-wider text-outline">
                            <span class="text-on-surface-variant">Intake Registry</span>
                            <span>/</span>
                            <span class="text-primary font-semibold">Triage & Candidate Inquiries</span>
                            <span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-semibold tracking-normal text-[11px]">KL-KTM Desk Synchronized</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm">
                                <span class="material-symbols-outlined text-[16px] text-secondary">update</span>
                                <span>Last sync: 2 mins ago</span>
                            </div>
                            <button class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-surface-container transition-colors shadow-sm font-label-md text-label-md font-medium">
                                <span class="material-symbols-outlined text-[18px] text-secondary">print</span>
                                <span>Print Docket</span>
                            </button>
                            <button class="inline-flex items-center gap-2 px-3.5 py-2 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-surface-container transition-colors shadow-sm font-label-md text-label-md font-medium">
                                <span class="material-symbols-outlined text-[18px] text-primary">download</span>
                                <span>Export CSV</span>
                            </button>
                        </div>
                    </div>
                    <!-- Title & Operational Narrative -->
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 bg-surface-container-lowest p-6 rounded-xl shadow-sm">
                        <div class="max-w-3xl">
                            <div class="inline-flex items-center gap-2 px-2.5 py-1 rounded bg-surface-container font-label-sm text-label-sm text-primary mb-2">
                                <span class="material-symbols-outlined text-[15px]">verified_user</span>
                                <span>Official Kottayam Verification Bureau • Public Gateway Intake</span>
                            </div>
                            <h1 class="font-headline-lg text-headline-lg text-primary tracking-tight">Enquiries Management</h1>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-1.5">
                                Review, triage, and follow up with candidate messages received via the public Kottayam website form and direct channels.
                            </p>
                        </div>
                        <div class="flex items-center gap-3 shrink-0">
                            <div class="flex items-center gap-2 px-3 py-2 rounded-lg bg-surface-container-low text-primary font-label-md text-label-md">
                                <span class="material-symbols-outlined text-[18px]">verified</span>
                                <span class="font-semibold">248</span> Total Intake Records
                            </div>
                        </div>
                    </div>
                    <!-- Master Filter Toolbar -->
                    <div class="flex flex-col gap-4">
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-3">
                            <!-- Global Search -->
                            <div class="md:col-span-6 relative">
                                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
                                <input class="w-full h-11 pl-11 pr-4 rounded-lg bg-surface-container-lowest text-on-surface font-body-md text-body-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-container transition-all" placeholder="Search candidate name, phone, enquiry ID (#ENQ-...)..." type="text" value="Anju Susan" />
                            </div>
                            <!-- Date Range Filter -->
                            <div class="md:col-span-3">
                                <div class="relative w-full">
                                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[18px]">calendar_today</span>
                                    <select class="w-full h-11 pl-10 pr-8 rounded-lg bg-surface-container-lowest text-on-surface font-label-md text-label-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-container appearance-none transition-all cursor-pointer">
                                        <option>Past 30 Days (Oct 01 - Oct 31)</option>
                                        <option>Past 7 Days</option>
                                        <option>Current Fiscal Quarter</option>
                                        <option>Year to Date (2025)</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline text-[18px] pointer-events-none">unfold_more</span>
                                </div>
                            </div>
                            <!-- Service Category Selector -->
                            <div class="md:col-span-3">
                                <div class="relative w-full">
                                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[18px]">category</span>
                                    <select class="w-full h-11 pl-10 pr-8 rounded-lg bg-surface-container-lowest text-on-surface font-label-md text-label-md shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-container appearance-none transition-all cursor-pointer">
                                        <option>All 5 Service Categories</option>
                                        <option selected="">Overseas Registration & Licensing</option>
                                        <option>DataFlow & Primary Source Verification</option>
                                        <option>Good Standing & Certificate Verifications</option>
                                        <option>Apostille & Embassy Attestation</option>
                                        <option>UK/Ireland Academic Credentialing</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline text-[18px] pointer-events-none">unfold_more</span>
                                </div>
                            </div>
                        </div>
                        <!-- Status Filter Tabs with Counts -->
                        <div class="flex items-center gap-2 overflow-x-auto pb-1">
                            <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container font-label-md text-label-md shadow-sm transition-colors whitespace-nowrap">
                                <span>All</span>
                                <span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface font-semibold text-[11px]">248</span>
                            </button>
                            <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-primary-container text-on-primary font-label-md text-label-md shadow-sm transition-colors whitespace-nowrap">
                                <span class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span>
                                <span>New</span>
                                <span class="px-2 py-0.5 rounded-full bg-surface-container-lowest/20 text-on-primary font-semibold text-[11px]">18</span>
                            </button>
                            <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container font-label-md text-label-md shadow-sm transition-colors whitespace-nowrap">
                                <span>Contacted</span>
                                <span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface font-semibold text-[11px]">34</span>
                            </button>
                            <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container font-label-md text-label-md shadow-sm transition-colors whitespace-nowrap">
                                <span>In Progress</span>
                                <span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface font-semibold text-[11px]">42</span>
                            </button>
                            <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container font-label-md text-label-md shadow-sm transition-colors whitespace-nowrap">
                                <span>Responded</span>
                                <span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface font-semibold text-[11px]">86</span>
                            </button>
                            <button class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container font-label-md text-label-md shadow-sm transition-colors whitespace-nowrap">
                                <span>Closed</span>
                                <span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface font-semibold text-[11px]">68</span>
                            </button>
                            <button class="ml-auto text-outline hover:text-primary p-2 rounded-lg transition-colors flex items-center gap-1 font-label-sm text-label-sm">
                                <span class="material-symbols-outlined text-[18px]">restart_alt</span>
                                <span>Reset Filters</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Master-Detail Operational Canvas (65% / 35%) -->
                <div class="grid grid-cols-1 xl:grid-cols-12 gap-6 items-start">
                    <!-- LEFT PANEL: Master Table (approx 65% width = 8 cols on 12-col grid) -->
                    <div class="xl:col-span-8 flex flex-col gap-4">
                        <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
                            <!-- Bulk Actions / Table Sub-Header -->
                            <div class="px-5 py-3.5 bg-surface-container-low flex items-center justify-between gap-4">
                                <div class="flex items-center gap-3">
                                    <label class="inline-flex items-center gap-2 cursor-pointer">
                                        <input class="w-4 h-4 rounded text-primary focus:ring-primary-container" type="checkbox" />
                                        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Select 10 Visible</span>
                                    </label>
                                    <span class="text-outline-variant">•</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Showing active filter matches</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-surface-container-lowest text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm transition-colors shadow-sm">
                                        <span class="material-symbols-outlined text-[15px]">assignment_ind</span>
                                        <span>Assign Desk Officer</span>
                                    </button>
                                    <button class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-surface-container-lowest text-on-surface-variant hover:text-on-surface font-label-sm text-label-sm transition-colors shadow-sm">
                                        <span class="material-symbols-outlined text-[15px]">mark_email_read</span>
                                        <span>Bulk Status</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Intake Records Table -->
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr class="bg-surface-container-lowest font-label-sm text-label-sm uppercase tracking-wider text-outline">
                                            <th class="py-3.5 px-4 w-10"></th>
                                            <th class="py-3.5 px-4 font-semibold">ID</th>
                                            <th class="py-3.5 px-4 font-semibold">Candidate</th>
                                            <th class="py-3.5 px-4 font-semibold">Contact Channels</th>
                                            <th class="py-3.5 px-4 font-semibold">Service Path</th>
                                            <th class="py-3.5 px-4 font-semibold">Timestamp</th>
                                            <th class="py-3.5 px-4 font-semibold">Status</th>
                                            <th class="py-3.5 px-4 text-right font-semibold">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-surface-container font-body-sm text-body-sm">
                                        <!-- ACTIVE ROW: ENQ-1092 (Selected) -->
                                        <tr class="bg-surface-container-high transition-colors cursor-pointer group">
                                            <td class="py-3 px-4">
                                                <input checked="" class="w-4 h-4 rounded text-primary focus:ring-primary-container" type="checkbox" />
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <span class="font-label-md text-label-md font-bold text-primary flex items-center gap-1.5">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                                    #ENQ-1092
                                                </span>
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="flex items-center gap-2.5 min-w-[160px]">
                                                    <div class="w-8 h-8 rounded-full bg-primary-container text-on-primary flex items-center justify-center font-label-sm text-label-sm font-semibold shrink-0">
                                                        AT
                                                    </div>
                                                    <div class="flex flex-col min-w-0">
                                                        <span class="font-title-md text-title-md text-primary font-semibold truncate leading-tight">Anju Susan Thomas</span>
                                                        <span class="font-body-sm text-body-sm text-on-surface-variant truncate text-[12px]">Kottayam, Kerala</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <div class="flex flex-col gap-0.5">
                                                    <div class="inline-flex items-center gap-1.5 text-on-surface font-medium text-[12px]">
                                                        <span class="material-symbols-outlined text-[15px] text-secondary">chat</span>
                                                        <span>+91 98471 20984</span>
                                                    </div>
                                                    <div class="inline-flex items-center gap-1.5 text-on-surface-variant text-[12px]">
                                                        <span class="material-symbols-outlined text-[15px]">mail</span>
                                                        <span class="truncate max-w-[140px]">anju.susan.t@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="flex flex-col min-w-[170px]">
                                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold truncate">Overseas Licensing</span>
                                                    <span class="font-body-sm text-body-sm text-on-surface truncate">NMBI Decision Letter</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <div class="flex flex-col">
                                                    <span class="font-label-sm text-label-sm text-on-surface font-medium">Oct 31, 2025</span>
                                                    <span class="text-[11px] text-on-surface-variant">11:20 AM IST</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-label-sm font-semibold bg-primary-container text-on-primary">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-secondary-container"></span>
                                                    NEW
                                                </span>
                                            </td>
                                            <td class="py-3 px-4 text-right whitespace-nowrap">
                                                <div class="inline-flex items-center gap-1">
                                                    <button class="p-1.5 rounded hover:bg-surface-container-lowest text-primary transition-colors" title="Inspect Dossier">
                                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                                    </button>
                                                    <button class="p-1.5 rounded hover:bg-surface-container-lowest text-secondary transition-colors" title="Direct WhatsApp Action">
                                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                                    </button>
                                                    <button class="p-1.5 rounded hover:bg-surface-container-lowest text-outline transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">more_vert</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- ROW 2: ENQ-1091 -->
                                        <tr class="hover:bg-surface-container-low transition-colors cursor-pointer">
                                            <td class="py-3 px-4">
                                                <input class="w-4 h-4 rounded text-primary focus:ring-primary-container" type="checkbox" />
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <span class="font-label-md text-label-md font-semibold text-on-surface">#ENQ-1091</span>
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="flex items-center gap-2.5 min-w-[160px]">
                                                    <div class="w-8 h-8 rounded-full bg-surface-container-high text-primary flex items-center justify-center font-label-sm text-label-sm font-semibold shrink-0">
                                                        RM
                                                    </div>
                                                    <div class="flex flex-col min-w-0">
                                                        <span class="font-title-md text-title-md text-on-surface font-semibold truncate leading-tight">Rohan Mathew Varghese</span>
                                                        <span class="font-body-sm text-body-sm text-on-surface-variant truncate text-[12px]">Pala, Kottayam</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <div class="flex flex-col gap-0.5">
                                                    <div class="inline-flex items-center gap-1.5 text-on-surface font-medium text-[12px]">
                                                        <span class="material-symbols-outlined text-[15px] text-secondary">chat</span>
                                                        <span>+91 94472 88120</span>
                                                    </div>
                                                    <div class="inline-flex items-center gap-1.5 text-on-surface-variant text-[12px]">
                                                        <span class="material-symbols-outlined text-[15px]">mail</span>
                                                        <span class="truncate max-w-[140px]">rohan.mvarghese@outlook.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="flex flex-col min-w-[170px]">
                                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-bold truncate">Verification Services</span>
                                                    <span class="font-body-sm text-body-sm text-on-surface truncate">Gulf DataFlow PSV</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <div class="flex flex-col">
                                                    <span class="font-label-sm text-label-sm text-on-surface font-medium">Oct 31, 2025</span>
                                                    <span class="text-[11px] text-on-surface-variant">09:45 AM IST</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-label-sm font-semibold bg-surface-container text-on-surface">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                                                    CONTACTED
                                                </span>
                                            </td>
                                            <td class="py-3 px-4 text-right whitespace-nowrap">
                                                <div class="inline-flex items-center gap-1">
                                                    <button class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                                    </button>
                                                    <button class="p-1.5 rounded hover:bg-surface-container text-secondary transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                                    </button>
                                                    <button class="p-1.5 rounded hover:bg-surface-container text-outline transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">more_vert</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- ROW 3: ENQ-1090 -->
                                        <tr class="hover:bg-surface-container-low transition-colors cursor-pointer">
                                            <td class="py-3 px-4">
                                                <input class="w-4 h-4 rounded text-primary focus:ring-primary-container" type="checkbox" />
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <span class="font-label-md text-label-md font-semibold text-on-surface">#ENQ-1090</span>
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="flex items-center gap-2.5 min-w-[160px]">
                                                    <div class="w-8 h-8 rounded-full bg-surface-container-high text-primary flex items-center justify-center font-label-sm text-label-sm font-semibold shrink-0">
                                                        DJ
                                                    </div>
                                                    <div class="flex flex-col min-w-0">
                                                        <span class="font-title-md text-title-md text-on-surface font-semibold truncate leading-tight">Deepa Joseph</span>
                                                        <span class="font-body-sm text-body-sm text-on-surface-variant truncate text-[12px]">Changanassery</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <div class="flex flex-col gap-0.5">
                                                    <div class="inline-flex items-center gap-1.5 text-on-surface font-medium text-[12px]">
                                                        <span class="material-symbols-outlined text-[15px] text-secondary">chat</span>
                                                        <span>+91 97455 31092</span>
                                                    </div>
                                                    <div class="inline-flex items-center gap-1.5 text-on-surface-variant text-[12px]">
                                                        <span class="material-symbols-outlined text-[15px]">mail</span>
                                                        <span class="truncate max-w-[140px]">deepa.joseph.n@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="flex flex-col min-w-[170px]">
                                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-bold truncate">Overseas Licensing</span>
                                                    <span class="font-body-sm text-body-sm text-on-surface truncate">AHPRA Physiotherapy Fastrack</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <div class="flex flex-col">
                                                    <span class="font-label-sm text-label-sm text-on-surface font-medium">Oct 30, 2025</span>
                                                    <span class="text-[11px] text-on-surface-variant">04:15 PM IST</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-label-sm font-semibold bg-tertiary-fixed text-on-tertiary-fixed">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-on-tertiary-container"></span>
                                                    IN PROGRESS
                                                </span>
                                            </td>
                                            <td class="py-3 px-4 text-right whitespace-nowrap">
                                                <div class="inline-flex items-center gap-1">
                                                    <button class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                                    </button>
                                                    <button class="p-1.5 rounded hover:bg-surface-container text-secondary transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                                    </button>
                                                    <button class="p-1.5 rounded hover:bg-surface-container text-outline transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">more_vert</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- ROW 4: ENQ-1089 -->
                                        <tr class="hover:bg-surface-container-low transition-colors cursor-pointer">
                                            <td class="py-3 px-4">
                                                <input class="w-4 h-4 rounded text-primary focus:ring-primary-container" type="checkbox" />
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <span class="font-label-md text-label-md font-semibold text-on-surface">#ENQ-1089</span>
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="flex items-center gap-2.5 min-w-[160px]">
                                                    <div class="w-8 h-8 rounded-full bg-surface-container-high text-primary flex items-center justify-center font-label-sm text-label-sm font-semibold shrink-0">
                                                        SK
                                                    </div>
                                                    <div class="flex flex-col min-w-0">
                                                        <span class="font-title-md text-title-md text-on-surface font-semibold truncate leading-tight">Sanjay Kumar Nair</span>
                                                        <span class="font-body-sm text-body-sm text-on-surface-variant truncate text-[12px]">Kanjirappally</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <div class="flex flex-col gap-0.5">
                                                    <div class="inline-flex items-center gap-1.5 text-on-surface font-medium text-[12px]">
                                                        <span class="material-symbols-outlined text-[15px] text-secondary">chat</span>
                                                        <span>+91 99611 74520</span>
                                                    </div>
                                                    <div class="inline-flex items-center gap-1.5 text-on-surface-variant text-[12px]">
                                                        <span class="material-symbols-outlined text-[15px]">mail</span>
                                                        <span class="truncate max-w-[140px]">sanjay.knair@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="flex flex-col min-w-[170px]">
                                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-bold truncate">Embassy Attestation</span>
                                                    <span class="font-body-sm text-body-sm text-on-surface truncate">UAE Embassy Attestation & MEA</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <div class="flex flex-col">
                                                    <span class="font-label-sm text-label-sm text-on-surface font-medium">Oct 30, 2025</span>
                                                    <span class="text-[11px] text-on-surface-variant">02:30 PM IST</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-label-sm font-semibold bg-surface-container-highest text-primary">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                                    RESPONDED
                                                </span>
                                            </td>
                                            <td class="py-3 px-4 text-right whitespace-nowrap">
                                                <div class="inline-flex items-center gap-1">
                                                    <button class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                                    </button>
                                                    <button class="p-1.5 rounded hover:bg-surface-container text-secondary transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                                    </button>
                                                    <button class="p-1.5 rounded hover:bg-surface-container text-outline transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">more_vert</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- ROW 5: ENQ-1088 -->
                                        <tr class="hover:bg-surface-container-low transition-colors cursor-pointer">
                                            <td class="py-3 px-4">
                                                <input class="w-4 h-4 rounded text-primary focus:ring-primary-container" type="checkbox" />
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <span class="font-label-md text-label-md font-semibold text-on-surface">#ENQ-1088</span>
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="flex items-center gap-2.5 min-w-[160px]">
                                                    <div class="w-8 h-8 rounded-full bg-surface-container-high text-primary flex items-center justify-center font-label-sm text-label-sm font-semibold shrink-0">
                                                        MK
                                                    </div>
                                                    <div class="flex flex-col min-w-0">
                                                        <span class="font-title-md text-title-md text-on-surface font-semibold truncate leading-tight">Merin Mariam Kurian</span>
                                                        <span class="font-body-sm text-body-sm text-on-surface-variant truncate text-[12px]">Ettumanoor</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <div class="flex flex-col gap-0.5">
                                                    <div class="inline-flex items-center gap-1.5 text-on-surface font-medium text-[12px]">
                                                        <span class="material-symbols-outlined text-[15px] text-secondary">chat</span>
                                                        <span>+91 94950 12845</span>
                                                    </div>
                                                    <div class="inline-flex items-center gap-1.5 text-on-surface-variant text-[12px]">
                                                        <span class="material-symbols-outlined text-[15px]">mail</span>
                                                        <span class="truncate max-w-[140px]">merin.kurian@yahoo.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4">
                                                <div class="flex flex-col min-w-[170px]">
                                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-bold truncate">Certificate Verification</span>
                                                    <span class="font-body-sm text-body-sm text-on-surface truncate">KNMC Good Standing Certificate</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <div class="flex flex-col">
                                                    <span class="font-label-sm text-label-sm text-on-surface font-medium">Oct 29, 2025</span>
                                                    <span class="text-[11px] text-on-surface-variant">11:10 AM IST</span>
                                                </div>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-[11px] font-label-sm font-semibold bg-surface-container text-outline">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                                                    CLOSED
                                                </span>
                                            </td>
                                            <td class="py-3 px-4 text-right whitespace-nowrap">
                                                <div class="inline-flex items-center gap-1">
                                                    <button class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                                    </button>
                                                    <button class="p-1.5 rounded hover:bg-surface-container text-secondary transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">send</span>
                                                    </button>
                                                    <button class="p-1.5 rounded hover:bg-surface-container text-outline transition-colors">
                                                        <span class="material-symbols-outlined text-[18px]">more_vert</span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table Pagination & Footer Controls -->
                            <div class="px-5 py-4 bg-surface-container-low flex flex-col sm:flex-row items-center justify-between gap-4">
                                <div class="flex items-center gap-4">
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Showing <span class="font-semibold text-on-surface">1 - 5</span> of <span class="font-semibold text-on-surface">248</span> records</span>
                                    <div class="flex items-center gap-1.5">
                                        <span class="font-label-sm text-label-sm text-outline">Rows per page:</span>
                                        <select class="px-2 py-1 rounded bg-surface-container-lowest text-on-surface font-label-sm text-label-sm border-none shadow-sm focus:ring-1 focus:ring-primary-container">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex items-center gap-1">
                                    <button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest text-outline hover:text-on-surface disabled:opacity-40 transition-colors font-label-sm text-label-sm shadow-sm flex items-center gap-1" disabled="">
                                        <span class="material-symbols-outlined text-[16px]">chevron_left</span>
                                        <span>Prev</span>
                                    </button>
                                    <button class="w-8 h-8 rounded-lg bg-primary-container text-on-primary font-label-sm text-label-sm font-semibold shadow-sm flex items-center justify-center">1</button>
                                    <button class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-surface-container font-label-sm text-label-sm font-medium transition-colors flex items-center justify-center">2</button>
                                    <button class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-surface-container font-label-sm text-label-sm font-medium transition-colors flex items-center justify-center">3</button>
                                    <span class="px-1 text-outline">...</span>
                                    <button class="w-8 h-8 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-surface-container font-label-sm text-label-sm font-medium transition-colors flex items-center justify-center">25</button>
                                    <button class="px-3 py-1.5 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-surface-container transition-colors font-label-sm text-label-sm shadow-sm flex items-center gap-1">
                                        <span>Next</span>
                                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Compliance & Bureau Triage Directive Banner -->
                        <div class="p-4 rounded-xl bg-surface-container-low flex items-start gap-3.5 shadow-sm">
                            <span class="material-symbols-outlined text-secondary text-[22px] shrink-0 mt-0.5">shield</span>
                            <div class="flex flex-col">
                                <span class="font-title-md text-title-md text-primary font-semibold">Kottayam Bureau Regulatory Protocol</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                    All outbound telephonic and WhatsApp candidate verifications must follow State Nursing & Midwifery Council standards. Logs are immutable and timestamped against active session credentials.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- RIGHT PANEL: Detail Dossier Drawer (approx 35% width = 4 cols on 12-col grid) -->
                    <div class="xl:col-span-4 flex flex-col gap-5">
                        <!-- Primary Dossier Card with Gold Accent Top Line -->
                        <div class="bg-surface-container-lowest rounded-xl shadow-md overflow-hidden relative">
                            <div class="h-1.5 w-full bg-secondary"></div>
                            <!-- Dossier Header -->
                            <div class="p-5 pb-4 bg-surface-container-low/50">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">Active Intake Dossier</span>
                                    <span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-label-sm bg-primary-container text-on-primary font-semibold">Priority Triage</span>
                                </div>
                                <div class="flex items-center justify-between mt-2">
                                    <h2 class="font-headline-sm text-headline-sm text-primary font-bold">Enquiry #ENQ-1092</h2>
                                    <div class="flex items-center gap-1">
                                        <button class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant transition-colors" title="Print this Candidate Record">
                                            <span class="material-symbols-outlined text-[18px]">print</span>
                                        </button>
                                        <button class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant transition-colors" title="Open Full Screen Dossier">
                                            <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 mt-1 text-on-surface-variant font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-[15px]">schedule</span>
                                    <span>Created Oct 31, 2025 at 11:20 AM IST</span>
                                </div>
                            </div>
                            <div class="p-5 flex flex-col gap-5">
                                <!-- Candidate Profile Section -->
                                <div class="flex flex-col gap-3">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Candidate Profile</span>
                                    <div class="p-4 rounded-lg bg-surface-container-low">
                                        <div class="flex items-start gap-3">
                                            <div class="w-11 h-11 rounded-full bg-primary-container text-on-primary flex items-center justify-center font-headline-sm text-headline-sm font-semibold shrink-0">
                                                AT
                                            </div>
                                            <div class="flex flex-col min-w-0 flex-1">
                                                <div class="flex items-center gap-1.5">
                                                    <span class="font-title-md text-title-md text-primary font-bold">Anju Susan Thomas</span>
                                                    <span class="material-symbols-outlined text-secondary text-[16px]" title="KNMC Registration Validated">verified</span>
                                                </div>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant text-[12px]">Verified match with KNMC nursing roster</span>
                                                <!-- Contact Direct Actions -->
                                                <div class="flex flex-col gap-2 mt-3 pt-3 border-t border-surface-container">
                                                    <div class="flex items-center justify-between text-on-surface font-body-sm text-body-sm">
                                                        <div class="flex items-center gap-2">
                                                            <span class="material-symbols-outlined text-[18px] text-secondary">phone_iphone</span>
                                                            <span class="font-semibold">+91 98471 20984</span>
                                                        </div>
                                                        <div class="flex items-center gap-1">
                                                            <button class="px-2 py-1 rounded bg-surface-container-lowest hover:bg-surface-container text-primary font-label-sm text-label-sm shadow-sm transition-colors" title="Copy Candidate Number">
                                                                Copy
                                                            </button>
                                                            <button class="px-2.5 py-1 rounded bg-secondary text-on-secondary hover:bg-opacity-90 font-label-sm text-label-sm font-medium shadow-sm transition-colors inline-flex items-center gap-1">
                                                                <span class="material-symbols-outlined text-[13px]">chat</span>
                                                                <span>WhatsApp</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center justify-between text-on-surface font-body-sm text-body-sm">
                                                        <div class="flex items-center gap-2 min-w-0">
                                                            <span class="material-symbols-outlined text-[18px] text-outline">mail</span>
                                                            <span class="truncate text-[13px]">anju.susan.t@gmail.com</span>
                                                        </div>
                                                        <button class="px-2 py-1 rounded bg-surface-container-lowest hover:bg-surface-container text-primary font-label-sm text-label-sm shadow-sm transition-colors whitespace-nowrap">
                                                            Send Mail
                                                        </button>
                                                    </div>
                                                    <div class="flex items-center gap-2 pt-1 text-[12px] text-on-surface-variant">
                                                        <span class="material-symbols-outlined text-[16px] text-secondary">alarm</span>
                                                        <span>Preferred Contact: <strong>Morning (10:00 AM - 01:00 PM)</strong></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Scope Requested -->
                                <div class="flex flex-col gap-2">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Target Service Engagement</span>
                                    <div class="p-3.5 rounded-lg bg-surface-container-low flex flex-col gap-1">
                                        <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">Overseas Registration & Licensing</span>
                                        <span class="font-title-md text-title-md text-primary font-semibold">NMBI Decision Letter (DL) Process (Ireland Nursing)</span>
                                        <div class="flex items-center gap-2 mt-1">
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-label-sm bg-surface-container-highest text-primary">Pre-Check G3</span>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-[11px] font-label-sm bg-surface-container-highest text-primary">NMBI Portal ID: Pending</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Candidate Message / Inbound Query -->
                                <div class="flex flex-col gap-2">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Original Candidate Submission</span>
                                    <div class="p-3.5 rounded-lg bg-surface-container-low text-on-surface font-body-sm text-body-sm leading-relaxed relative">
                                        <span class="material-symbols-outlined text-[20px] text-outline-variant absolute top-2 right-2">format_quote</span>
                                        "Completed BSc Nursing under Kerala Nurses and Midwives Council (KNMC). Looking to initiate NMBI Decision Letter application for Ireland with concurrent DataFlow verification guidance."
                                    </div>
                                </div>
                                <!-- Administrative Triage Controls -->
                                <div class="flex flex-col gap-3 pt-3 border-t border-surface-container">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Triage Assignment & Status Control</span>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div>
                                            <label class="font-label-sm text-label-sm text-on-surface-variant mb-1 block">Workflow Status</label>
                                            <div class="relative">
                                                <select class="w-full h-10 pl-3 pr-8 rounded-lg bg-surface-container text-primary font-label-md text-label-md font-semibold focus:outline-none focus:ring-1 focus:ring-primary-container appearance-none cursor-pointer">
                                                    <option selected="">NEW (Unreviewed)</option>
                                                    <option>CONTACTED</option>
                                                    <option>IN PROGRESS</option>
                                                    <option>RESPONDED</option>
                                                    <option>CLOSED</option>
                                                </select>
                                                <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-outline text-[16px] pointer-events-none">unfold_more</span>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="font-label-sm text-label-sm text-on-surface-variant mb-1 block">Desk Officer</label>
                                            <div class="relative">
                                                <select class="w-full h-10 pl-3 pr-8 rounded-lg bg-surface-container text-on-surface font-label-md text-label-md focus:outline-none focus:ring-1 focus:ring-primary-container appearance-none cursor-pointer">
                                                    <option selected="">Mathew V. (Sr. Counselor)</option>
                                                    <option>Susan Jacob (Bureau Lead)</option>
                                                    <option>Thomas Paul (Verification)</option>
                                                </select>
                                                <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-outline text-[16px] pointer-events-none">unfold_more</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Internal Administrative Notes (Confidential) -->
                                <div class="flex flex-col gap-3 pt-3 border-t border-surface-container">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1.5">
                                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline font-semibold">Internal Audit Notes</span>
                                            <span class="material-symbols-outlined text-outline text-[15px]" title="Private Bureau Log">lock</span>
                                        </div>
                                        <span class="text-[11px] font-label-sm text-secondary font-medium">Confidential - Internal Only</span>
                                    </div>
                                    <!-- New Note Box -->
                                    <div class="flex flex-col gap-2">
                                        <textarea class="w-full p-2.5 rounded-lg bg-surface-container text-on-surface font-body-sm text-body-sm placeholder:text-outline focus:outline-none focus:ring-1 focus:ring-primary-container resize-none" placeholder="Add private internal note or counselor observation..." rows="2"></textarea>
                                        <div class="flex justify-end">
                                            <button class="px-3.5 py-1.5 rounded-lg bg-primary-container text-on-primary hover:bg-opacity-95 font-label-sm text-label-sm font-semibold shadow-sm transition-colors flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[15px]">add_comment</span>
                                                <span>Add Note</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Timeline Notes -->
                                    <div class="flex flex-col gap-2.5 mt-1">
                                        <!-- Note Item 1 -->
                                        <div class="p-3 rounded-lg bg-surface-container-low text-body-sm">
                                            <div class="flex items-center justify-between mb-1">
                                                <div class="flex items-center gap-1.5 font-label-sm text-label-sm text-primary font-semibold">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                                    <span>Desk Admin (Mathew V.)</span>
                                                </div>
                                                <span class="text-[11px] text-on-surface-variant font-label-sm">Oct 31, 11:35 AM</span>
                                            </div>
                                            <p class="text-on-surface text-[13px] leading-snug">
                                                KNMC registration certificate copy requested via WhatsApp for initial G3 nursing pathway pre-check.
                                            </p>
                                        </div>
                                        <!-- Note Item 2 -->
                                        <div class="p-3 rounded-lg bg-surface-container-low text-body-sm">
                                            <div class="flex items-center justify-between mb-1">
                                                <div class="flex items-center gap-1.5 font-label-sm text-label-sm text-outline font-semibold">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                                                    <span>Automated Intake Gateway</span>
                                                </div>
                                                <span class="text-[11px] text-on-surface-variant font-label-sm">Oct 31, 11:22 AM</span>
                                            </div>
                                            <p class="text-on-surface-variant text-[13px] leading-snug">
                                                Enquiry logged via website Contact Us form (IP: Kottayam Region, ISP: BSNL Fiber).
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Dossier Footer Disclaimer -->
                                <div class="pt-4 border-t border-surface-container text-center">
                                    <span class="font-body-sm text-[11px] text-outline leading-tight block">
                                        Strictly internal record. Communications handled directly by Kottayam desk personnel via official business channels (+91 92927 97682).
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
@endsection
