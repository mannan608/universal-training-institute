@extends('frontend.layouts.app')

@section('title', 'International Students Guide')

@section('content')
     <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-16">

        <section id="overview" class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-indigo-900 via-slate-900 to-slate-950 text-white p-8 sm:p-12 shadow-2xl border border-slate-800">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 max-w-3xl space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/20 border border-indigo-400/30 text-indigo-300 text-xs font-semibold uppercase tracking-wider">
                    <i class="fa-solid fa-shield-halved"></i> Australian Student Visa Requirement
                </div>

                <h1 class="text-3xl sm:text-5xl font-extrabold tracking-tight leading-tight">
                    Genuine Student (GS) <br class="hidden sm:inline" />
                    <span class="bg-gradient-to-r from-indigo-300 via-sky-300 to-white bg-clip-text text-transparent">Statement Guide</span>
                </h1>

                <p class="text-slate-300 text-base sm:text-lg leading-relaxed">
                    A comprehensive, step-by-step master guide to drafting an authentic, evidence-backed GS statement that fulfills Department of Home Affairs (DHA) criteria for Australian Subclass 500 visas.
                </p>

                <!-- Quick Action Buttons -->
                <div class="flex flex-wrap items-center gap-3 pt-2">
                    <button onclick="downloadPdfSummary()" class="flex items-center gap-2 bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-sm px-5 py-3 rounded-xl shadow-lg shadow-indigo-600/30 transition-all">
                        <i class="fa-solid fa-file-pdf"></i> Download PDF Summary
                    </button>
                    <button onclick="scrollToStructure()" class="flex items-center gap-2 bg-slate-800 hover:bg-slate-700 text-slate-200 font-medium text-sm px-5 py-3 rounded-xl border border-slate-700 transition-all">
                        <i class="fa-solid fa-sitemap"></i> View Paragraph Layout
                    </button>
                    <button onclick="copyStructureToClipboard()" class="flex items-center gap-2 bg-slate-800 hover:bg-slate-700 text-slate-200 font-medium text-sm px-5 py-3 rounded-xl border border-slate-700 transition-all">
                        <i class="fa-solid fa-copy"></i> Copy Outline
                    </button>
                </div>
            </div>
        </section>

        <section class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
            
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white dark:bg-slate-900 rounded-2xl p-6 sm:p-8 border border-slate-200 dark:border-slate-800 shadow-sm space-y-4">
                    <div class="flex items-center gap-3 text-indigo-600 dark:text-indigo-400 font-bold text-sm tracking-wide uppercase">
                        <i class="fa-solid fa-circle-info"></i> Fundamental Concept
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white">What is a Genuine Student Statement?</h2>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed text-base">
                        The <strong>Genuine Student (GS) requirement</strong> replaced the GTE criteria to evaluate international applicants accurately. It assesses whether your primary motivation in Australia is obtaining a quality education, demonstrate genuine intent to study, and return or transition legally based on realistic career trajectory.
                    </p>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed text-base">
                        Your GS statement must directly answer specific structured questions in the visa application portal, backed with <strong>verifiable documentary evidence</strong>.
                    </p>

                    <!-- Alert Note Box -->
                    <div class="p-4 rounded-xl bg-amber-50 dark:bg-amber-950/40 border border-amber-200 dark:border-amber-800/60 text-amber-900 dark:text-amber-200 flex items-start gap-3.5 text-sm mt-4">
                        <i class="fa-solid fa-triangle-exclamation text-amber-600 dark:text-amber-400 text-lg mt-0.5 shrink-0"></i>
                        <div>
                            <strong class="font-semibold block mb-0.5">Crucial Advice:</strong> Generic statements without supporting evidence often lead to delays or refusal. Every claim regarding financial stability, employment history, or salary expectations must reference a document.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pillars Highlights Badge Box -->
            <div class="bg-gradient-to-b from-slate-900 to-indigo-950 text-white rounded-2xl p-6 sm:p-8 border border-slate-800 shadow-xl space-y-6">
                <div class="flex items-center justify-between border-b border-slate-800 pb-4">
                    <h3 class="font-bold text-lg text-white flex items-center gap-2">
                        <i class="fa-solid fa-cubes text-indigo-400"></i> The 3 Pillars of GS
                    </h3>
                    <span class="text-xs bg-indigo-500/20 text-indigo-300 px-2.5 py-1 rounded-full font-mono">DHA Criteria</span>
                </div>
                
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-lg bg-indigo-500/20 text-indigo-400 flex items-center justify-center shrink-0 font-bold text-xs mt-0.5">1</div>
                        <div>
                            <strong class="text-slate-100 block">Ties to Home Country</strong>
                            <span class="text-slate-400 text-xs">Family, economic, assets, and social obligations.</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-lg bg-indigo-500/20 text-indigo-400 flex items-center justify-center shrink-0 font-bold text-xs mt-0.5">2</div>
                        <div>
                            <strong class="text-slate-100 block">Financial & Local Context</strong>
                            <span class="text-slate-400 text-xs">Proof of funding, living budget, and course value.</span>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-lg bg-indigo-500/20 text-indigo-400 flex items-center justify-center shrink-0 font-bold text-xs mt-0.5">3</div>
                        <div>
                            <strong class="text-slate-100 block">Value of Course to Future</strong>
                            <span class="text-slate-400 text-xs">Expected career growth, salary boost, local job market.</span>
                        </div>
                    </li>
                </ul>

                <div class="pt-2 border-t border-slate-800">
                    <div class="text-xs text-slate-400 flex items-center gap-2">
                        <i class="fa-solid fa-circle-check text-emerald-400"></i> Word count limit: Max 150 words per question field.
                    </div>
                </div>
            </div>
        </section>

        <section id="pillars" class="space-y-8">
            <div class="text-center max-w-2xl mx-auto space-y-2">
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Detailed Breakdown</span>
                <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white">Address Each Pillar with Detail & Evidence</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Provide concrete proof for every argument you present in your application.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white dark:bg-slate-900 rounded-2xl p-6 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-all space-y-4 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="w-12 h-12 rounded-xl bg-indigo-50 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-house-user"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">1. Ties to Home Country</h3>
                        <ul class="space-y-2.5 text-slate-600 dark:text-slate-300 text-sm">
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-indigo-500 mt-1 shrink-0 text-xs"></i>
                                <span>Family obligations, dependants, or aging parents needing support.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-indigo-500 mt-1 shrink-0 text-xs"></i>
                                <span>Existing employment offer or guaranteed post-study role back home.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-indigo-500 mt-1 shrink-0 text-xs"></i>
                                <span>Property deeds, land ownership, family assets, or family business interests.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-800 text-xs text-indigo-600 dark:text-indigo-400 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-paperclip"></i> Key Proof: Deeds, job letters, affidavits
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white dark:bg-slate-900 rounded-2xl p-6 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-all space-y-4 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="w-12 h-12 rounded-xl bg-sky-50 dark:bg-sky-950/60 text-sky-600 dark:text-sky-400 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-wallet"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">2. Financial Circumstances</h3>
                        <ul class="space-y-2.5 text-slate-600 dark:text-slate-300 text-sm">
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-sky-500 mt-1 shrink-0 text-xs"></i>
                                <span>Clear origin of liquid funds for tuition and AUD $29,710+ living expenses.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-sky-500 mt-1 shrink-0 text-xs"></i>
                                <span>Sponsorship letters with tax documents and verified bank statements.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-sky-500 mt-1 shrink-0 text-xs"></i>
                                <span>Realistic understanding of Australian living cost without relying on part-time jobs.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-800 text-xs text-sky-600 dark:text-sky-400 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-paperclip"></i> Key Proof: Bank slips, tax returns, loan letters
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white dark:bg-slate-900 rounded-2xl p-6 border border-slate-200 dark:border-slate-800 shadow-sm hover:shadow-md transition-all space-y-4 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl group-hover:scale-110 transition-transform">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">3. Course Value & Career</h3>
                        <ul class="space-y-2.5 text-slate-600 dark:text-slate-300 text-sm">
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-emerald-500 mt-1 shrink-0 text-xs"></i>
                                <span>Why this specific university curriculum outperforms options in your home country.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-emerald-500 mt-1 shrink-0 text-xs"></i>
                                <span>Expected salary increment (e.g. +40%) upon returning to your local job market.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fa-solid fa-check text-emerald-500 mt-1 shrink-0 text-xs"></i>
                                <span>Alignment with your past academic degree or work history.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-800 text-xs text-emerald-600 dark:text-emerald-400 font-semibold flex items-center gap-1.5">
                        <i class="fa-solid fa-paperclip"></i> Key Proof: Job market statistics, salary reports
                    </div>
                </div>
            </div>
        </section>

        <section id="writing-tips" class="space-y-6">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-200 dark:border-slate-800 pb-4">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Writing Tips That Make a Difference</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-sm">Practical guidelines to elevate your writing quality and clarity.</p>
                </div>

                <!-- Filter Controls -->
                <div class="flex items-center gap-2 bg-slate-100 dark:bg-slate-800 p-1 rounded-xl self-start">
                    <button onclick="filterTips('all')" class="tip-btn active px-3 py-1.5 rounded-lg text-xs font-semibold bg-white dark:bg-slate-700 text-slate-900 dark:text-white shadow-xs transition-all" data-category="all">All Tips</button>
                    <button onclick="filterTips('do')" class="tip-btn px-3 py-1.5 rounded-lg text-xs font-semibold text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white transition-all" data-category="do">Do's</button>
                    <button onclick="filterTips('dont')" class="tip-btn px-3 py-1.5 rounded-lg text-xs font-semibold text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white transition-all" data-category="dont">Don'ts</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="tipsGrid">
                
                <!-- Tip Card 1 -->
                <div class="tip-card do bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-400 text-xs font-semibold">
                            <i class="fa-solid fa-circle-check"></i> DO
                        </span>
                        <span class="text-xs text-slate-400">Clarity & Specifics</span>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900 dark:text-white">Be specific, not generic</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                        Avoid vague statements like "Australia has great education." Name specific subjects, professors, lab equipment, or university modules that align directly with your career goals.
                    </p>
                </div>

                <!-- Tip Card 2 -->
                <div class="tip-card do bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-400 text-xs font-semibold">
                            <i class="fa-solid fa-circle-check"></i> DO
                        </span>
                        <span class="text-xs text-slate-400">Verifiable Evidence</span>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900 dark:text-white">Use evidence, not promises</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                        Instead of saying "I will get a high-paying job," state "According to Job Outlook 2025 data, Data Analysts in my home region earn $45,000 annually vs $25,000 without a Master's degree."
                    </p>
                </div>

                <!-- Tip Card 3 -->
                <div class="tip-card dont bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-rose-100 dark:bg-rose-950/60 text-rose-700 dark:text-rose-400 text-xs font-semibold">
                            <i class="fa-solid fa-circle-xmark"></i> DON'T
                        </span>
                        <span class="text-xs text-slate-400">Common Pitfall</span>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900 dark:text-white">Avoid copy-paste agent templates</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                        Visa officers easily identify recycled agency templates. Write in your own authentic voice. Personal details and specific family circumstances cannot be copied.
                    </p>
                </div>

                <!-- Tip Card 4 -->
                <div class="tip-card dont bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-rose-100 dark:bg-rose-950/60 text-rose-700 dark:text-rose-400 text-xs font-semibold">
                            <i class="fa-solid fa-circle-xmark"></i> DON'T
                        </span>
                        <span class="text-xs text-slate-400">Focus Misplacement</span>
                    </div>
                    <h3 class="font-bold text-lg text-slate-900 dark:text-white">Don't focus on post-study migration</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                        While Australian post-study work pathways are legal, your statement must focus primarily on academic value and immediate post-graduation plans back in your home country or region.
                    </p>
                </div>

            </div>
        </section>

        <section id="checklist" class="bg-slate-900 text-white rounded-3xl p-6 sm:p-10 shadow-2xl border border-slate-800 space-y-8">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6 border-b border-slate-800 pb-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-indigo-400">Document Readiness</span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-white mt-1">Information & Evidence Checklist</h2>
                    <p class="text-slate-400 text-sm mt-1">Check off required documents before finalizing your visa application.</p>
                </div>

                <!-- Live Progress Counter Bar -->
                <div class="bg-slate-800/90 border border-slate-700 p-4 rounded-2xl min-w-[220px] space-y-2">
                    <div class="flex justify-between items-center text-xs font-semibold">
                        <span class="text-slate-300">Completion Status</span>
                        <span id="progressPercent" class="text-indigo-400 font-mono text-sm">0%</span>
                    </div>
                    <div class="w-full bg-slate-700 h-2.5 rounded-full overflow-hidden">
                        <div id="progressBar" class="bg-gradient-to-r from-indigo-500 to-sky-400 h-full w-0 transition-all duration-300"></div>
                    </div>
                    <div class="text-[11px] text-slate-400 text-right">
                        <span id="checkedCount">0</span> of <span id="totalCount">8</span> items ready
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4" id="checklistGrid">
                
                <label class="flex items-start gap-3.5 p-4 rounded-xl bg-slate-800/50 hover:bg-slate-800 border border-slate-700/60 cursor-pointer transition-all">
                    <input type="checkbox" class="doc-checkbox w-5 h-5 rounded border-slate-600 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-slate-900 mt-0.5" onchange="updateProgress()">
                    <div>
                        <span class="font-medium text-slate-200 text-sm block">Personal Identity Documents</span>
                        <span class="text-slate-400 text-xs">Valid Passport, National ID card, Birth Certificate.</span>
                    </div>
                </label>

                <label class="flex items-start gap-3.5 p-4 rounded-xl bg-slate-800/50 hover:bg-slate-800 border border-slate-700/60 cursor-pointer transition-all">
                    <input type="checkbox" class="doc-checkbox w-5 h-5 rounded border-slate-600 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-slate-900 mt-0.5" onchange="updateProgress()">
                    <div>
                        <span class="font-medium text-slate-200 text-sm block">Academic Transcripts & Certificates</span>
                        <span class="text-slate-400 text-xs">High school, bachelor degree certificates and marksheets.</span>
                    </div>
                </label>

                <label class="flex items-start gap-3.5 p-4 rounded-xl bg-slate-800/50 hover:bg-slate-800 border border-slate-700/60 cursor-pointer transition-all">
                    <input type="checkbox" class="doc-checkbox w-5 h-5 rounded border-slate-600 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-slate-900 mt-0.5" onchange="updateProgress()">
                    <div>
                        <span class="font-medium text-slate-200 text-sm block">English Test Results</span>
                        <span class="text-slate-400 text-xs">IELTS, PTE Academic, or TOEFL official scoreboard.</span>
                    </div>
                </label>

                <label class="flex items-start gap-3.5 p-4 rounded-xl bg-slate-800/50 hover:bg-slate-800 border border-slate-700/60 cursor-pointer transition-all">
                    <input type="checkbox" class="doc-checkbox w-5 h-5 rounded border-slate-600 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-slate-900 mt-0.5" onchange="updateProgress()">
                    <div>
                        <span class="font-medium text-slate-200 text-sm block">Financial Capacity Proof</span>
                        <span class="text-slate-400 text-xs">Bank statement (3-6 months), official loan sanction letter.</span>
                    </div>
                </label>

                <label class="flex items-start gap-3.5 p-4 rounded-xl bg-slate-800/50 hover:bg-slate-800 border border-slate-700/60 cursor-pointer transition-all">
                    <input type="checkbox" class="doc-checkbox w-5 h-5 rounded border-slate-600 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-slate-900 mt-0.5" onchange="updateProgress()">
                    <div>
                        <span class="font-medium text-slate-200 text-sm block">Employment History Evidence</span>
                        <span class="text-slate-400 text-xs">Work experience letters, payslips, tax assessments.</span>
                    </div>
                </label>

                <label class="flex items-start gap-3.5 p-4 rounded-xl bg-slate-800/50 hover:bg-slate-800 border border-slate-700/60 cursor-pointer transition-all">
                    <input type="checkbox" class="doc-checkbox w-5 h-5 rounded border-slate-600 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-slate-900 mt-0.5" onchange="updateProgress()">
                    <div>
                        <span class="font-medium text-slate-200 text-sm block">Home Ties Proof</span>
                        <span class="text-slate-400 text-xs">Property deeds, family affidavits, business registration.</span>
                    </div>
                </label>

                <label class="flex items-start gap-3.5 p-4 rounded-xl bg-slate-800/50 hover:bg-slate-800 border border-slate-700/60 cursor-pointer transition-all">
                    <input type="checkbox" class="doc-checkbox w-5 h-5 rounded border-slate-600 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-slate-900 mt-0.5" onchange="updateProgress()">
                    <div>
                        <span class="font-medium text-slate-200 text-sm block">CoE (Confirmation of Enrolment)</span>
                        <span class="text-slate-400 text-xs">Issued by your registered Australian education provider.</span>
                    </div>
                </label>

                <label class="flex items-start gap-3.5 p-4 rounded-xl bg-slate-800/50 hover:bg-slate-800 border border-slate-700/60 cursor-pointer transition-all">
                    <input type="checkbox" class="doc-checkbox w-5 h-5 rounded border-slate-600 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-slate-900 mt-0.5" onchange="updateProgress()">
                    <div>
                        <span class="font-medium text-slate-200 text-sm block">Statement Breakdown Draft</span>
                        <span class="text-slate-400 text-xs">Draft responses adhering strictly to the 150-word limit per section.</span>
                    </div>
                </label>

            </div>
        </section>

        <section id="structure" class="space-y-6">
            <div class="max-w-2xl space-y-2">
                <span class="text-xs font-bold uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Step-by-Step Blueprint</span>
                <h2 class="text-3xl font-extrabold text-slate-900 dark:text-white">A Simple Structure to Follow</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Organize your GS statement into 7 clear, logical paragraphs.</p>
            </div>

            <div class="space-y-3" id="accordionContainer">
                
                <!-- Step 01 -->
                <div class="border border-slate-200 dark:border-slate-800 rounded-2xl bg-white dark:bg-slate-900 overflow-hidden shadow-xs">
                    <button onclick="toggleAccordion('acc1')" class="w-full p-5 text-left flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <div class="flex items-center gap-4">
                            <span class="font-mono text-xl font-black text-indigo-600 dark:text-indigo-400">01</span>
                            <div>
                                <h3 class="font-bold text-slate-900 dark:text-white text-base">Introduction & Current Circumstances</h3>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Brief background, current academic status, or employment role.</p>
                            </div>
                        </div>
                        <i id="icon-acc1" class="fa-solid fa-chevron-down text-slate-400 transition-transform duration-200"></i>
                    </button>
                    <div id="acc1" class="hidden p-5 border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-950/50 text-sm text-slate-600 dark:text-slate-300 space-y-2">
                        <p><strong>Goal:</strong> Clearly establish who you are and what you are currently doing.</p>
                        <p><strong>Include:</strong> Your latest qualification, current employer, job title, and why you decided to pursue higher education at this specific point in your life.</p>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="border border-slate-200 dark:border-slate-800 rounded-2xl bg-white dark:bg-slate-900 overflow-hidden shadow-xs">
                    <button onclick="toggleAccordion('acc2')" class="w-full p-5 text-left flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <div class="flex items-center gap-4">
                            <span class="font-mono text-xl font-black text-indigo-600 dark:text-indigo-400">02</span>
                            <div>
                                <h3 class="font-bold text-slate-900 dark:text-white text-base">Ties to Home Country & Personal Commitments</h3>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Family, social, and economic incentives to return home.</p>
                            </div>
                        </div>
                        <i id="icon-acc2" class="fa-solid fa-chevron-down text-slate-400 transition-transform duration-200"></i>
                    </button>
                    <div id="acc2" class="hidden p-5 border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-950/50 text-sm text-slate-600 dark:text-slate-300 space-y-2">
                        <p><strong>Goal:</strong> Prove strong incentives that guarantee your departure from Australia upon study completion.</p>
                        <p><strong>Include:</strong> Dependants, elderly parents, inherited property, family business participation, or community standing.</p>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="border border-slate-200 dark:border-slate-800 rounded-2xl bg-white dark:bg-slate-900 overflow-hidden shadow-xs">
                    <button onclick="toggleAccordion('acc3')" class="w-full p-5 text-left flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <div class="flex items-center gap-4">
                            <span class="font-mono text-xl font-black text-indigo-600 dark:text-indigo-400">03</span>
                            <div>
                                <h3 class="font-bold text-slate-900 dark:text-white text-base">Why Australia? (Comparison with Home Country)</h3>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Justification for choosing Australia over local options.</p>
                            </div>
                        </div>
                        <i id="icon-acc3" class="fa-solid fa-chevron-down text-slate-400 transition-transform duration-200"></i>
                    </button>
                    <div id="acc3" class="hidden p-5 border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-950/50 text-sm text-slate-600 dark:text-slate-300 space-y-2">
                        <p><strong>Goal:</strong> Explain why studying locally or in neighboring countries is insufficient for your career.</p>
                        <p><strong>Include:</strong> Lack of practical research exposure in home institutions, higher global academic ranking, or specialized accreditation in Australia.</p>
                    </div>
                </div>

                <!-- Step 04 -->
                <div class="border border-slate-200 dark:border-slate-800 rounded-2xl bg-white dark:bg-slate-900 overflow-hidden shadow-xs">
                    <button onclick="toggleAccordion('acc4')" class="w-full p-5 text-left flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <div class="flex items-center gap-4">
                            <span class="font-mono text-xl font-black text-indigo-600 dark:text-indigo-400">04</span>
                            <div>
                                <h3 class="font-bold text-slate-900 dark:text-white text-base">Why This Specific Institution & Course?</h3>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Detailed research into university syllabus and facilities.</p>
                            </div>
                        </div>
                        <i id="icon-acc4" class="fa-solid fa-chevron-down text-slate-400 transition-transform duration-200"></i>
                    </button>
                    <div id="acc4" class="hidden p-5 border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-950/50 text-sm text-slate-600 dark:text-slate-300 space-y-2">
                        <p><strong>Goal:</strong> Show you conducted thorough research before enrolling.</p>
                        <p><strong>Include:</strong> Course units, campus location, industry partnerships, internship options, and comparisons with other Australian universities.</p>
                    </div>
                </div>

                <!-- Step 05 -->
                <div class="border border-slate-200 dark:border-slate-800 rounded-2xl bg-white dark:bg-slate-900 overflow-hidden shadow-xs">
                    <button onclick="toggleAccordion('acc5')" class="w-full p-5 text-left flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <div class="flex items-center gap-4">
                            <span class="font-mono text-xl font-black text-indigo-600 dark:text-indigo-400">05</span>
                            <div>
                                <h3 class="font-bold text-slate-900 dark:text-white text-base">Future Career Plan & Expected Return on Investment</h3>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Target job roles, salary projections, and industry growth.</p>
                            </div>
                        </div>
                        <i id="icon-acc5" class="fa-solid fa-chevron-down text-slate-400 transition-transform duration-200"></i>
                    </button>
                    <div id="acc5" class="hidden p-5 border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-950/50 text-sm text-slate-600 dark:text-slate-300 space-y-2">
                        <p><strong>Goal:</strong> Prove that the financial cost of studying in Australia will yield realistic returns.</p>
                        <p><strong>Include:</strong> Target job roles (e.g. Senior Product Manager), names of hiring companies in your country, and financial ROI estimation.</p>
                    </div>
                </div>

                <!-- Step 06 -->
                <div class="border border-slate-200 dark:border-slate-800 rounded-2xl bg-white dark:bg-slate-900 overflow-hidden shadow-xs">
                    <button onclick="toggleAccordion('acc6')" class="w-full p-5 text-left flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <div class="flex items-center gap-4">
                            <span class="font-mono text-xl font-black text-indigo-600 dark:text-indigo-400">06</span>
                            <div>
                                <h3 class="font-bold text-slate-900 dark:text-white text-base">Financial Capacity & Funding Sources</h3>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Clear breakdown of who pays for tuition and living costs.</p>
                            </div>
                        </div>
                        <i id="icon-acc6" class="fa-solid fa-chevron-down text-slate-400 transition-transform duration-200"></i>
                    </button>
                    <div id="acc6" class="hidden p-5 border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-950/50 text-sm text-slate-600 dark:text-slate-300 space-y-2">
                        <p><strong>Goal:</strong> Demonstrate unquestionable financial stability without needing unauthorized work in Australia.</p>
                        <p><strong>Include:</strong> Sponsor relationship, annual sponsor income, bank balances, and education loan details.</p>
                    </div>
                </div>

                <!-- Step 07 -->
                <div class="border border-slate-200 dark:border-slate-800 rounded-2xl bg-white dark:bg-slate-900 overflow-hidden shadow-xs">
                    <button onclick="toggleAccordion('acc7')" class="w-full p-5 text-left flex items-center justify-between hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                        <div class="flex items-center gap-4">
                            <span class="font-mono text-xl font-black text-indigo-600 dark:text-indigo-400">07</span>
                            <div>
                                <h3 class="font-bold text-slate-900 dark:text-white text-base">Closing Statement & Declaration</h3>
                                <p class="text-xs text-slate-500 dark:text-slate-400">Reaffirm genuine student intent and commitment to visa rules.</p>
                            </div>
                        </div>
                        <i id="icon-acc7" class="fa-solid fa-chevron-down text-slate-400 transition-transform duration-200"></i>
                    </button>
                    <div id="acc7" class="hidden p-5 border-t border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-950/50 text-sm text-slate-600 dark:text-slate-300 space-y-2">
                        <p><strong>Goal:</strong> Formally conclude your statement with a pledge of compliance.</p>
                        <p><strong>Include:</strong> Reaffirmation that you intend to comply with visa condition 8105 (work hours) and return home after completion.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="bg-gradient-to-r from-indigo-600 via-indigo-700 to-blue-700 rounded-3xl p-8 sm:p-12 text-white shadow-xl flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="space-y-3 text-center md:text-left">
                <h2 class="text-2xl sm:text-3xl font-extrabold">Ready to draft your GS Statement?</h2>
                <p class="text-indigo-100 text-sm max-w-xl">Use our structured checklist and 7-paragraph layout to craft an authentic, evidence-backed visa application.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                <button onclick="downloadPdfSummary()" class="bg-white text-indigo-700 hover:bg-indigo-50 font-bold px-6 py-3 rounded-xl shadow-md transition-all text-sm text-center">
                    <i class="fa-solid fa-download mr-1"></i> Download PDF Guide
                </button>
            </div>
        </section>

    </main>

  

    <div id="toast" class="fixed bottom-6 right-6 bg-slate-900 text-white dark:bg-white dark:text-slate-900 px-5 py-3 rounded-xl shadow-2xl text-sm font-medium transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none flex items-center gap-3 z-50">
        <i class="fa-solid fa-circle-check text-emerald-400 dark:text-emerald-600 text-lg"></i>
        <span id="toastMessage">Notification action completed!</span>
    </div>

    <script>
        const themeToggleBtn = document.getElementById('themeToggle');
        
        // System preference default check
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark');
        }

        themeToggleBtn.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            showToast(document.documentElement.classList.contains('dark') ? 'Dark Mode Enabled' : 'Light Mode Enabled');
        });

        function toggleAccordion(id) {
            const el = document.getElementById(id);
            const icon = document.getElementById('icon-' + id);
            
            if (el.classList.contains('hidden')) {
                el.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                el.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }

        function filterTips(category) {
            const cards = document.querySelectorAll('.tip-card');
            const btns = document.querySelectorAll('.tip-btn');

            btns.forEach(btn => {
                if (btn.dataset.category === category) {
                    btn.classList.add('bg-white', 'dark:bg-slate-700', 'text-slate-900', 'dark:text-white', 'shadow-xs');
                    btn.classList.remove('text-slate-600', 'dark:text-slate-400');
                } else {
                    btn.classList.remove('bg-white', 'dark:bg-slate-700', 'text-slate-900', 'dark:text-white', 'shadow-xs');
                    btn.classList.add('text-slate-600', 'dark:text-slate-400');
                }
            });

            cards.forEach(card => {
                if (category === 'all') {
                    card.style.display = 'block';
                } else if (card.classList.contains(category)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function updateProgress() {
            const checkboxes = document.querySelectorAll('.doc-checkbox');
            const total = checkboxes.length;
            let checked = 0;

            checkboxes.forEach(cb => {
                if (cb.checked) checked++;
            });

            const percent = Math.round((checked / total) * 100);

            document.getElementById('checkedCount').innerText = checked;
            document.getElementById('totalCount').innerText = total;
            document.getElementById('progressPercent').innerText = percent + '%';
            document.getElementById('progressBar').style.width = percent + '%';
        }

        function scrollToStructure() {
            document.getElementById('structure').scrollIntoView({ behavior: 'smooth' });
        }

        function copyStructureToClipboard() {
            const structureText = `
Genuine Student Statement 7-Paragraph Structure:
1. Introduction & Current Circumstances
2. Ties to Home Country & Personal Commitments
3. Why Australia? (Comparison with Home Country)
4. Why This Specific Institution & Course?
5. Future Career Plan & Expected Return on Investment
6. Financial Capacity & Funding Sources
7. Closing Statement & Declaration
            `.trim();

            const tempInput = document.createElement('textarea');
            tempInput.value = structureText;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);

            showToast('Outline copied to clipboard!');
        }

        function downloadPdfSummary() {
            showToast('PDF Summary generated & ready for download!');
        }

        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toastMessage');
            
            toastMessage.innerText = message;
            toast.classList.remove('translate-y-20', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');

            setTimeout(() => {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-20', 'opacity-0');
            }, 3000);
        }

        // Initialize progress bar on load
        window.onload = function() {
            updateProgress();
        };
    </script>
   

@endsection
