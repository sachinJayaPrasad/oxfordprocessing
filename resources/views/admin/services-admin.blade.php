@extends('layouts.admin')
@section('activePage', 'services')
@section('content')
<div class="flex flex-col w-full">
    <!-- Top Operational Banner & Meta Context -->
    <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
        <div>
            <h1 class="font-headline-xl text-headline-xl text-primary tracking-tight">Service Catalogue Management</h1>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl mt-1">Maintain, edit, and organize all 30 public services across the five core operational categories.</p>
        </div>
        <div class="flex items-center gap-3 self-start md:self-auto shrink-0">
            <div class="bg-surface-container-lowest px-4 py-2.5 rounded-xl shadow-sm flex items-center gap-3.5">
                <div class="w-2.5 h-2.5 rounded-full bg-secondary animate-pulse"></div>
                <div class="flex flex-col">
                    <span class="font-label-sm text-label-sm text-outline uppercase tracking-wider">Catalogue Health</span>
                    <span class="font-title-md text-title-md text-primary font-semibold leading-tight">30 of 30 services active</span>
                </div>
            </div>
            <button class="bg-primary hover:bg-primary-container text-on-primary h-11 px-5 rounded-lg flex items-center gap-2 shadow-sm transition-all duration-200">
                <span class="material-symbols-outlined text-[20px]">add</span>
                <span class="font-label-md text-label-md font-semibold tracking-wide">+ Create New Service</span>
            </button>
        </div>
    </div>
    <!-- SECTION 1: Service Inventory & Controls -->
    <section class="bg-surface-container-lowest rounded-xl shadow-sm p-6 mb-10">
        <!-- Filter Controls Bar -->
        <div class="flex flex-col xl:flex-row xl:items-center justify-between gap-5 pb-6 border-b border-surface-container">
            <!-- Search Input -->
            <div class="relative flex-1 max-w-lg">
                <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
                <input class="w-full h-11 pl-11 pr-4 rounded-lg bg-surface-container-low font-body-sm text-body-sm text-on-surface placeholder:text-outline focus:outline-none focus:bg-surface-container-lowest shadow-inner transition-colors" placeholder="Search services by name, keyword, or authority..." type="text" />
            </div>
            <!-- Publication Status Segment -->
            <div class="flex items-center gap-2 self-start xl:self-auto">
                <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline mr-1">Status:</span>
                <div class="inline-flex p-1 rounded-lg bg-surface-container-low">
                    <button class="px-3 py-1.5 rounded-lg font-label-md text-label-md bg-surface-container-lowest text-primary shadow-sm font-semibold">Published (30)</button>
                    <button class="px-3 py-1.5 rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-on-surface font-medium transition-colors">Draft (0)</button>
                    <button class="px-3 py-1.5 rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-on-surface font-medium transition-colors">Archived (0)</button>
                </div>
            </div>
        </div>
        <!-- Category Filter Pill Tabs -->
        <div class="flex items-center gap-2 pt-4 pb-6 overflow-x-auto no-scrollbar">
            <button class="px-4 py-2 rounded-lg font-label-md text-label-md bg-primary-container text-on-primary whitespace-nowrap shadow-sm font-semibold flex items-center gap-2">
                <span>All Services</span>
                <span class="px-1.5 py-0.5 rounded-full text-[11px] bg-on-primary/15 text-on-primary font-bold">30</span>
            </button>
            <button class="px-4 py-2 rounded-lg font-label-md text-label-md bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-primary whitespace-nowrap transition-colors font-medium flex items-center gap-2">
                <span>Overseas Registration</span>
                <span class="px-1.5 py-0.5 rounded-full text-[11px] bg-surface-container-highest text-primary font-semibold">11</span>
            </button>
            <button class="px-4 py-2 rounded-lg font-label-md text-label-md bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-primary whitespace-nowrap transition-colors font-medium flex items-center gap-2">
                <span>Documentation</span>
                <span class="px-1.5 py-0.5 rounded-full text-[11px] bg-surface-container-highest text-primary font-semibold">6</span>
            </button>
            <button class="px-4 py-2 rounded-lg font-label-md text-label-md bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-primary whitespace-nowrap transition-colors font-medium flex items-center gap-2">
                <span>Education</span>
                <span class="px-1.5 py-0.5 rounded-full text-[11px] bg-surface-container-highest text-primary font-semibold">4</span>
            </button>
            <button class="px-4 py-2 rounded-lg font-label-md text-label-md bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-primary whitespace-nowrap transition-colors font-medium flex items-center gap-2">
                <span>Career Support</span>
                <span class="px-1.5 py-0.5 rounded-full text-[11px] bg-surface-container-highest text-primary font-semibold">4</span>
            </button>
            <button class="px-4 py-2 rounded-lg font-label-md text-label-md bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-primary whitespace-nowrap transition-colors font-medium flex items-center gap-2">
                <span>Exam & Language</span>
                <span class="px-1.5 py-0.5 rounded-full text-[11px] bg-surface-container-highest text-primary font-semibold">5</span>
            </button>
        </div>
        <!-- Structured Service Table Inventory -->
        <div class="overflow-x-auto rounded-lg bg-surface-container-lowest">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
                        <th class="py-3.5 px-4 font-semibold">Service Dossier & Scope</th>
                        <th class="py-3.5 px-4 font-semibold">Operational Category</th>
                        <th class="py-3.5 px-4 font-semibold">Bureau Status</th>
                        <th class="py-3.5 px-4 font-semibold">Last Certified</th>
                        <th class="py-3.5 px-4 font-semibold text-right">Desk Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container font-body-sm text-body-sm">
                    <!-- Item 1 (Currently Inspected / Active) -->
                    <tr class="bg-surface-container-high/40 hover:bg-surface-container-high/70 transition-colors">
                        <td class="py-4 px-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-primary-container text-on-primary flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                                    <span class="material-symbols-outlined text-[18px]">verified</span>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <span class="font-headline-sm text-headline-sm text-primary font-semibold">NMBI Decision Letter (DL) Process</span>
                                        <span class="px-2 py-0.5 rounded text-[10px] font-label-sm bg-secondary-fixed text-on-secondary-fixed font-bold tracking-wide">ACTIVE DOSSIER</span>
                                    </div>
                                    <p class="text-on-surface-variant font-body-sm text-body-sm mt-0.5 max-w-md line-clamp-1">Guidance for Irish Nursing and Midwifery Board DL verification and registration docket compilation.</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-label-sm font-label-sm bg-surface-container text-primary font-medium">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                Overseas Registration
                            </span>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 text-label-sm font-label-sm text-primary font-semibold bg-surface-container-lowest px-2.5 py-1 rounded shadow-sm">
                                <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Published
                            </span>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap text-on-surface-variant font-label-md text-label-md">
                            Oct 28, 2025
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap text-right">
                            <div class="flex items-center justify-end gap-1.5">
                                <button class="px-2.5 py-1.5 rounded-lg bg-primary text-on-primary font-label-sm text-label-sm font-semibold hover:bg-primary-container shadow-sm transition-all flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[15px]">edit</span>
                                    Edit
                                </button>
                                <button class="p-1.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors" title="Preview Public URL">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                                <button class="p-1.5 rounded-lg text-outline hover:text-error hover:bg-error-container/20 transition-colors" title="Withdraw from Public">
                                    <span class="material-symbols-outlined text-[18px]">unpublished</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Item 2 -->
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="py-4 px-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-surface-container text-primary flex items-center justify-center shrink-0 mt-0.5">
                                    <span class="material-symbols-outlined text-[18px]">policy</span>
                                </div>
                                <div>
                                    <div class="font-title-md text-title-md text-on-surface font-semibold">DataFlow Verification</div>
                                    <p class="text-on-surface-variant font-body-sm text-body-sm mt-0.5 max-w-md line-clamp-1">Primary Source Verification (PSV) document compilation for GCC healthcare authorities (DHA, MOH, DOH, SCFHS).</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-label-sm font-label-sm bg-surface-container text-primary font-medium">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                Overseas Registration
                            </span>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 text-label-sm font-label-sm text-primary font-semibold bg-surface-container-lowest px-2.5 py-1 rounded shadow-sm">
                                <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Published
                            </span>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap text-on-surface-variant font-label-md text-label-md">
                            Oct 25, 2025
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap text-right">
                            <div class="flex items-center justify-end gap-1.5">
                                <button class="px-2.5 py-1.5 rounded-lg text-primary hover:bg-surface-container-high font-label-sm text-label-sm font-semibold transition-colors flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[15px]">edit</span>
                                    Edit
                                </button>
                                <button class="p-1.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors" title="Preview Public URL">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                                <button class="p-1.5 rounded-lg text-outline hover:text-error hover:bg-error-container/20 transition-colors" title="Withdraw from Public">
                                    <span class="material-symbols-outlined text-[18px]">unpublished</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Item 3 -->
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="py-4 px-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-surface-container text-primary flex items-center justify-center shrink-0 mt-0.5">
                                    <span class="material-symbols-outlined text-[18px]">badge</span>
                                </div>
                                <div>
                                    <div class="font-title-md text-title-md text-on-surface font-semibold">Passport New Application & Renewal</div>
                                    <p class="text-on-surface-variant font-body-sm text-body-sm mt-0.5 max-w-md line-clamp-1">Tatkaal, normal, minor, and renewal slot scheduling and document checklist validation.</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-label-sm font-label-sm bg-surface-container text-primary font-medium">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                Documentation
                            </span>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 text-label-sm font-label-sm text-primary font-semibold bg-surface-container-lowest px-2.5 py-1 rounded shadow-sm">
                                <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Published
                            </span>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap text-on-surface-variant font-label-md text-label-md">
                            Oct 20, 2025
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap text-right">
                            <div class="flex items-center justify-end gap-1.5">
                                <button class="px-2.5 py-1.5 rounded-lg text-primary hover:bg-surface-container-high font-label-sm text-label-sm font-semibold transition-colors flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[15px]">edit</span>
                                    Edit
                                </button>
                                <button class="p-1.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors" title="Preview Public URL">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                                <button class="p-1.5 rounded-lg text-outline hover:text-error hover:bg-error-container/20 transition-colors" title="Withdraw from Public">
                                    <span class="material-symbols-outlined text-[18px]">unpublished</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Item 4 -->
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="py-4 px-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-surface-container text-primary flex items-center justify-center shrink-0 mt-0.5">
                                    <span class="material-symbols-outlined text-[18px]">school</span>
                                </div>
                                <div>
                                    <div class="font-title-md text-title-md text-on-surface font-semibold">University Application Support</div>
                                    <p class="text-on-surface-variant font-body-sm text-body-sm mt-0.5 max-w-md line-clamp-1">Comprehensive guidance on international higher education applications and docket compilation.</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-label-sm font-label-sm bg-surface-container text-primary font-medium">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                Education & University
                            </span>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 text-label-sm font-label-sm text-primary font-semibold bg-surface-container-lowest px-2.5 py-1 rounded shadow-sm">
                                <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Published
                            </span>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap text-on-surface-variant font-label-md text-label-md">
                            Oct 15, 2025
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap text-right">
                            <div class="flex items-center justify-end gap-1.5">
                                <button class="px-2.5 py-1.5 rounded-lg text-primary hover:bg-surface-container-high font-label-sm text-label-sm font-semibold transition-colors flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[15px]">edit</span>
                                    Edit
                                </button>
                                <button class="p-1.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors" title="Preview Public URL">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                                <button class="p-1.5 rounded-lg text-outline hover:text-error hover:bg-error-container/20 transition-colors" title="Withdraw from Public">
                                    <span class="material-symbols-outlined text-[18px]">unpublished</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Item 5 -->
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="py-4 px-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-surface-container text-primary flex items-center justify-center shrink-0 mt-0.5">
                                    <span class="material-symbols-outlined text-[18px]">description</span>
                                </div>
                                <div>
                                    <div class="font-title-md text-title-md text-on-surface font-semibold">ATS-Friendly CV / Resume</div>
                                    <p class="text-on-surface-variant font-body-sm text-body-sm mt-0.5 max-w-md line-clamp-1">Tailored international CV optimization for international employer standards and overseas health trusts.</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-label-sm font-label-sm bg-surface-container text-primary font-medium">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                Career Support
                            </span>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 text-label-sm font-label-sm text-primary font-semibold bg-surface-container-lowest px-2.5 py-1 rounded shadow-sm">
                                <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Published
                            </span>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap text-on-surface-variant font-label-md text-label-md">
                            Oct 12, 2025
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap text-right">
                            <div class="flex items-center justify-end gap-1.5">
                                <button class="px-2.5 py-1.5 rounded-lg text-primary hover:bg-surface-container-high font-label-sm text-label-sm font-semibold transition-colors flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[15px]">edit</span>
                                    Edit
                                </button>
                                <button class="p-1.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors" title="Preview Public URL">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                                <button class="p-1.5 rounded-lg text-outline hover:text-error hover:bg-error-container/20 transition-colors" title="Withdraw from Public">
                                    <span class="material-symbols-outlined text-[18px]">unpublished</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Item 6 -->
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="py-4 px-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-surface-container text-primary flex items-center justify-center shrink-0 mt-0.5">
                                    <span class="material-symbols-outlined text-[18px]">translate</span>
                                </div>
                                <div>
                                    <div class="font-title-md text-title-md text-on-surface font-semibold">OET Exam Booking</div>
                                    <p class="text-on-surface-variant font-body-sm text-body-sm mt-0.5 max-w-md line-clamp-1">Occupational English Test booking, venue selection, and candidate profile management.</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-label-sm font-label-sm bg-surface-container text-primary font-medium">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                Exam & Language
                            </span>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 text-label-sm font-label-sm text-primary font-semibold bg-surface-container-lowest px-2.5 py-1 rounded shadow-sm">
                                <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                Published
                            </span>
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap text-on-surface-variant font-label-md text-label-md">
                            Oct 10, 2025
                        </td>
                        <td class="py-4 px-4 whitespace-nowrap text-right">
                            <div class="flex items-center justify-end gap-1.5">
                                <button class="px-2.5 py-1.5 rounded-lg text-primary hover:bg-surface-container-high font-label-sm text-label-sm font-semibold transition-colors flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[15px]">edit</span>
                                    Edit
                                </button>
                                <button class="p-1.5 rounded-lg text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors" title="Preview Public URL">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                                <button class="p-1.5 rounded-lg text-outline hover:text-error hover:bg-error-container/20 transition-colors" title="Withdraw from Public">
                                    <span class="material-symbols-outlined text-[18px]">unpublished</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Inventory Sub-Footer Metadata -->
        <div class="mt-4 pt-4 border-t border-surface-container flex flex-col sm:flex-row items-center justify-between gap-3 text-outline">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[16px]">info</span>
                <span class="font-body-sm text-body-sm">Displaying 6 of 30 services. Use search to filter full directory.</span>
            </div>
            <div class="flex items-center gap-1">
                <button class="px-2.5 py-1 rounded text-outline-variant hover:text-primary transition-colors disabled:opacity-40" disabled="">
                    <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                </button>
                <span class="font-label-sm text-label-sm text-on-surface font-semibold px-2">Page 1 of 5</span>
                <button class="px-2.5 py-1 rounded text-outline hover:text-primary transition-colors">
                    <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                </button>
            </div>
        </div>
    </section>
    <!-- SECTION 2: Comprehensive "Service Edit / Create Form" Panel -->
    <section class="bg-surface-container-lowest rounded-xl shadow-md overflow-hidden relative">
        <!-- Top Accent Bar for Dossier Prestige -->
        <div class="h-1.5 w-full bg-secondary"></div>
        <div class="p-8">
            <!-- Edit Dossier Master Header -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 pb-6 border-b border-surface-container">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-primary flex items-center justify-center text-on-primary shadow-sm shrink-0">
                        <span class="material-symbols-outlined text-[24px]">fact_check</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-2.5 flex-wrap">
                            <span class="font-label-sm text-label-sm font-semibold uppercase tracking-wider text-secondary">Bureau Editor Active</span>
                            <span class="text-outline-variant">•</span>
                            <span class="font-label-sm text-label-sm text-outline">Dossier Key: SRV-IE-NMBI-001</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-label-sm bg-surface-container text-primary font-semibold">Production Ready</span>
                        </div>
                        <h2 class="font-headline-lg text-headline-lg text-primary tracking-tight mt-0.5">Editing: NMBI Decision Letter (DL) Process</h2>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Configure regulatory guidelines, candidate verification scopes, document requirements, and external registry disclaimers.</p>
                    </div>
                </div>
                <!-- Form Top Action Micro-Controls -->
                <div class="flex items-center gap-3">
                    <button class="px-4 py-2 rounded-lg bg-surface-container-low text-on-surface-variant hover:text-primary hover:bg-surface-container font-label-md text-label-md font-medium transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                        <span>Preview Public Page</span>
                    </button>
                    <button class="px-5 py-2 rounded-lg bg-primary text-on-primary hover:bg-primary-container font-label-md text-label-md font-semibold transition-all shadow-sm flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">save</span>
                        <span>Save Changes</span>
                    </button>
                </div>
            </div>
            <!-- Navigation Tabs -->
            <div class="flex items-center gap-2 border-b border-surface-container mt-6 overflow-x-auto no-scrollbar">
                <button class="pb-3 px-4 font-title-md text-title-md font-semibold text-primary border-b-2 border-secondary flex items-center gap-2 shrink-0">
                    <span class="material-symbols-outlined text-[18px] text-secondary">feed</span>
                    <span>Basic Details</span>
                </button>
                <button class="pb-3 px-4 font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 shrink-0">
                    <span class="material-symbols-outlined text-[18px]">account_tree</span>
                    <span>Procedural Steps</span>
                </button>
                <button class="pb-3 px-4 font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 shrink-0">
                    <span class="material-symbols-outlined text-[18px]">attach_file</span>
                    <span>Required Documents</span>
                </button>
                <button class="pb-3 px-4 font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 shrink-0">
                    <span class="material-symbols-outlined text-[18px]">help_outline</span>
                    <span>FAQs & Official Links</span>
                </button>
                <button class="pb-3 px-4 font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 shrink-0">
                    <span class="material-symbols-outlined text-[18px]">travel_explore</span>
                    <span>SEO & URL Settings</span>
                </button>
            </div>
            <!-- Form Body Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 pt-8">
                <!-- Main Form Column (8 cols) -->
                <div class="lg:col-span-8 space-y-6">
                    <!-- Row 1: Title & URL Slug -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="font-label-md text-label-md text-on-surface font-semibold flex items-center justify-between">
                                <span>Service Title</span>
                                <span class="text-error font-body-sm">*</span>
                            </label>
                            <input class="w-full h-11 px-3.5 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface ring-1 ring-outline-variant focus:ring-2 focus:ring-primary-container outline-none transition-shadow" type="text" value="NMBI Decision Letter (DL) Process" />
                            <span class="font-body-sm text-body-sm text-outline">Public header string displayed on candidate search & brochures.</span>
                        </div>
                        <div class="space-y-1.5">
                            <label class="font-label-md text-label-md text-on-surface font-semibold">Operational Category</label>
                            <div class="relative">
                                <select class="w-full h-11 px-3.5 pr-10 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface ring-1 ring-outline-variant focus:ring-2 focus:ring-primary-container outline-none transition-shadow appearance-none">
                                    <option selected="">Overseas Registration & Licensing (11 Services)</option>
                                    <option>Documentation & Attestation (6 Services)</option>
                                    <option>Education & University (4 Services)</option>
                                    <option>Career Support (4 Services)</option>
                                    <option>Exam & Language (5 Services)</option>
                                </select>
                                <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline pointer-events-none text-[20px]">expand_more</span>
                            </div>
                            <span class="font-body-sm text-body-sm text-outline">Dictates taxonomy navigation and advisor allocation rules.</span>
                        </div>
                    </div>
                    <!-- Canonical URL Slug -->
                    <div class="space-y-1.5">
                        <label class="font-label-md text-label-md text-on-surface font-semibold">Canonical Public URL Slug</label>
                        <div class="flex items-center rounded-lg ring-1 ring-outline-variant focus-within:ring-2 focus-within:ring-primary-container overflow-hidden">
                            <span class="bg-surface-container-low px-3.5 py-2.5 text-on-surface-variant font-label-md text-label-md border-r border-surface-container shrink-0">oxfordprocessing.com</span>
                            <input class="w-full h-11 px-3.5 font-body-md text-body-md text-on-surface outline-none bg-surface-container-lowest" type="text" value="/services/overseas-registration/nmbi-decision-letter" />
                        </div>
                    </div>
                    <!-- Short Summary -->
                    <div class="space-y-1.5">
                        <label class="font-label-md text-label-md text-on-surface font-semibold">Short Summary / Teaser</label>
                        <textarea class="w-full p-3.5 rounded-lg bg-surface-container-lowest font-body-md text-body-md text-on-surface ring-1 ring-outline-variant focus:ring-2 focus:ring-primary-container outline-none transition-shadow resize-none" rows="2">Comprehensive advisory, dossier verification, and procedural guidance for qualified nurses applying for the NMBI Decision Letter.</textarea>
                        <span class="font-body-sm text-body-sm text-outline">Used across meta descriptions and service card previews (128 of 160 characters recommended).</span>
                    </div>
                    <!-- Candidate Target & Assistance Scope (Side-by-side) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="space-y-1.5">
                            <label class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-secondary">person_search</span>
                                <span>Who The Service Is For (Target Candidates)</span>
                            </label>
                            <textarea class="w-full p-3.5 rounded-lg bg-surface-container-lowest font-body-sm text-body-sm text-on-surface ring-1 ring-outline-variant focus:ring-2 focus:ring-primary-container outline-none transition-shadow" rows="4">Staff nurses and midwives registered with state nursing councils across India seeking credential evaluation and authorization to practice in the Republic of Ireland.</textarea>
                        </div>
                        <div class="space-y-1.5">
                            <label class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[16px] text-secondary">verified_user</span>
                                <span>Oxford Processing Scope of Assistance</span>
                            </label>
                            <textarea class="w-full p-3.5 rounded-lg bg-surface-container-lowest font-body-sm text-body-sm text-on-surface ring-1 ring-outline-variant focus:ring-2 focus:ring-primary-container outline-none transition-shadow" rows="4">Verification checklist review, CCPS synchronization, NMBI portal tracking, credential packaging, and certified translation advisory.</textarea>
                        </div>
                    </div>
                    <!-- Process Overview (4 Steps) Module -->
                    <div class="space-y-3 pt-2">
                        <div class="flex items-center justify-between">
                            <div>
                                <label class="font-label-md text-label-md text-on-surface font-semibold">Structured Procedural Flow (4 Standard Steps)</label>
                                <p class="font-body-sm text-body-sm text-outline">Step-by-step guidance provided to candidates in portal timeline tracking.</p>
                            </div>
                            <button class="font-label-sm text-label-sm text-primary hover:text-secondary font-semibold transition-colors flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]">add_circle</span>
                                Add Milestone
                            </button>
                        </div>
                        <div class="space-y-2.5">
                            <!-- Step 1 -->
                            <div class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-low">
                                <span class="w-7 h-7 rounded-full bg-primary-container text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold shrink-0">1</span>
                                <div class="flex-1">
                                    <span class="font-label-md text-label-md text-primary font-semibold">Initial Dossier & Credential Audit</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant block">Verification of nursing council credentials, transcript integrity, and identity records.</span>
                                </div>
                                <span class="material-symbols-outlined text-outline text-[18px] cursor-grab">drag_indicator</span>
                            </div>
                            <!-- Step 2 -->
                            <div class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-low">
                                <span class="w-7 h-7 rounded-full bg-primary-container text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold shrink-0">2</span>
                                <div class="flex-1">
                                    <span class="font-label-md text-label-md text-primary font-semibold">Verification Request to State Council (CCPS)</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant block">Direct council-to-council verification packaging and tracking dispatch.</span>
                                </div>
                                <span class="material-symbols-outlined text-outline text-[18px] cursor-grab">drag_indicator</span>
                            </div>
                            <!-- Step 3 -->
                            <div class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-low">
                                <span class="w-7 h-7 rounded-full bg-primary-container text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold shrink-0">3</span>
                                <div class="flex-1">
                                    <span class="font-label-md text-label-md text-primary font-semibold">Submission of Certified Docs & Translation</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant block">Uploading certified dossiers to overseas licensing registry in prescribed layout.</span>
                                </div>
                                <span class="material-symbols-outlined text-outline text-[18px] cursor-grab">drag_indicator</span>
                            </div>
                            <!-- Step 4 -->
                            <div class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-low">
                                <span class="w-7 h-7 rounded-full bg-primary-container text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold shrink-0">4</span>
                                <div class="flex-1">
                                    <span class="font-label-md text-label-md text-primary font-semibold">Tracking & Milestone Review</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant block">Active status tracking until official NMBI Decision Letter issuance.</span>
                                </div>
                                <span class="material-symbols-outlined text-outline text-[18px] cursor-grab">drag_indicator</span>
                            </div>
                        </div>
                    </div>
                    <!-- Indicative Document Checklist -->
                    <div class="space-y-1.5 pt-2">
                        <div class="flex items-center justify-between">
                            <label class="font-label-md text-label-md text-on-surface font-semibold">Indicative Document Checklist</label>
                            <span class="font-label-sm text-label-sm text-secondary font-semibold bg-secondary-fixed/50 px-2 py-0.5 rounded">Subject to Verification</span>
                        </div>
                        <textarea class="w-full p-3.5 rounded-lg bg-surface-container-lowest font-body-sm text-body-sm text-on-surface ring-1 ring-outline-variant focus:ring-2 focus:ring-primary-container outline-none transition-shadow font-mono" rows="3">Valid International Passport (Min. 18 Months Validity), State Nursing Council Registration Certificate, Nursing Degree / GNM Diploma Certificates, Year-wise Academic Marksheets, Approved English Test Report (OET Grade B or IELTS 7.0+), Police Clearance Certificate (PCC).</textarea>
                    </div>
                </div>
                <!-- Right Side Configuration Column (4 cols) -->
                <div class="lg:col-span-4 space-y-6">
                    <!-- Publication Status Card -->
                    <div class="p-5 rounded-xl bg-surface-container-low space-y-4 shadow-sm">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-primary font-semibold">Publication Status</span>
                            <span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
                        </div>
                        <div class="space-y-3">
                            <label class="flex items-start gap-3 p-3 rounded-lg bg-surface-container-lowest cursor-pointer shadow-sm">
                                <input checked="" class="mt-1 w-4 h-4 text-primary accent-primary" name="service_status" type="radio" />
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md text-primary font-semibold">Published (Live on Website)</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Candidates can find and submit intake forms for this service.</span>
                                </div>
                            </label>
                            <label class="flex items-start gap-3 p-3 rounded-lg bg-surface-container-lowest cursor-pointer shadow-sm">
                                <input class="mt-1 w-4 h-4 text-primary accent-primary" name="service_status" type="radio" />
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md text-on-surface font-semibold">Save as Draft / Internal</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Hidden from public directory. Visible only to Bureau Officers.</span>
                                </div>
                            </label>
                        </div>
                        <div class="pt-2 text-[12px] text-outline flex items-center justify-between">
                            <span>Last sync: 2 mins ago</span>
                            <span>Auditor: Kottayam #01</span>
                        </div>
                    </div>
                    <!-- Bureau Regulatory Disclaimer Box -->
                    <div class="p-5 rounded-xl bg-surface-container-low space-y-3">
                        <div class="flex items-center gap-2 text-secondary font-label-md text-label-md font-semibold">
                            <span class="material-symbols-outlined text-[18px]">verified_user</span>
                            <span>Mandatory Institutional Disclaimer</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            "Oxford Processing functions as an independent document preparation and compliance facilitator. Final licensing, validation, and issuance decisions rest exclusively with the external licensing body (NMBI Ireland)."
                        </p>
                        <div class="flex items-center gap-2 pt-1 text-[12px] text-primary font-medium">
                            <span class="material-symbols-outlined text-[15px] text-secondary">check_circle</span>
                            <span>Appended automatically to candidate contracts</span>
                        </div>
                    </div>
                    <!-- Station Metadata & Audit Trail -->
                    <div class="p-5 rounded-xl bg-surface-container-low space-y-3 text-on-surface-variant">
                        <span class="font-label-sm text-label-sm uppercase tracking-wider text-outline block">Audit Log & Version Control</span>
                        <div class="space-y-2 font-body-sm text-body-sm">
                            <div class="flex justify-between">
                                <span>Created by:</span>
                                <span class="font-medium text-on-surface">Kerala Desk Supervisor</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Version:</span>
                                <span class="font-mono text-primary font-semibold">v3.8 (Revision 14)</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Direct Lead Destination:</span>
                                <span class="font-medium text-on-surface">IE-Desk@oxford.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Sticky / Bottom Action Bar -->
            <div class="mt-8 pt-6 border-t border-surface-container flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-2 text-outline font-body-sm text-body-sm">
                    <span class="material-symbols-outlined text-[18px]">shield</span>
                    <span>All changes logged under Admin ID #01 with immutable revision stamp.</span>
                </div>
                <div class="flex items-center gap-3 w-full sm:w-auto">
                    <button class="flex-1 sm:flex-none px-5 py-2.5 rounded-lg text-on-surface-variant hover:bg-surface-container font-label-md text-label-md font-medium transition-colors">
                        Cancel / Discard
                    </button>
                    <button class="flex-1 sm:flex-none px-5 py-2.5 rounded-lg bg-surface-container-high text-primary hover:bg-surface-container font-label-md text-label-md font-semibold transition-colors">
                        Preview Public Page
                    </button>
                    <button class="flex-1 sm:flex-none px-6 py-2.5 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md font-semibold shadow-sm transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">done_all</span>
                        <span>Save Changes</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection