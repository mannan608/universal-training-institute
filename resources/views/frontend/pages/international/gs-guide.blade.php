@extends('frontend.layouts.app')

@section('title', 'International Students Guide')

@section('content')
    <section class="relative overflow-hidden bg-brand-25">
        <div class="absolute inset-0 mesh-background"></div>

       <div class="relative mx-auto w-full max-w-7xl px-4 py-10 sm:px-6 md:py-14 lg:px-8 lg:py-20">
            <!-- Course Title -->
            <div class="mb-10 max-w-4xl sm:mb-12">

                <span
                    class="mb-3 inline-block font-mono text-[10px] font-semibold uppercase tracking-[0.16em] text-secondary-600">
                    International / Visa Guide
                </span>

                <h1
                    class="mb-5 font-heading text-4xl font-bold leading-[1.05] tracking-tight text-neutral-950 sm:text-5xl lg:text-6xl">
                    How to write a strong Genuine Student statement
                </h1>

                <p class="max-w-2xl text-sm leading-7 text-neutral-600 sm:text-base lg:text-lg">
                   Everything you need to draft a compelling GS statement for your Australian Student Visa (Subclass 500) — from structure and tone to the documents that back it up.
                </p>

            </div>

            <!-- Actions -->
            <div class="flex flex-col gap-4 sm:flex-row sm:flex-wrap sm:items-center">

                <a href="#admissions-form"
                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-brand-700 bg-brand-500 px-5 py-3 font-heading text-sm font-bold uppercase tracking-wide text-white shadow-theme-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-600 hover:shadow-theme-md active:translate-y-0">
                    <span>Enquire</span>

                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                    </svg>
                </a>            

            </div>
        </div>
    </section>

        <section class="mx-auto max-w-7xl px-6 lg:px-10 pb-16">
            <div style="opacity: 1; transform: none;">
                <div class="grid lg:grid-cols-2 gap-16 items-start">
                    <div>
                        <h2 class="font-display text-4xl md:text-5xl text-balance">What is a Genuine Student statement?</h2>
                        <p class="mt-6 text-muted-foreground text-pretty leading-relaxed">The Genuine Student (GS)
                            requirement is how the Australian Department of Home Affairs assesses whether you genuinely
                            intend to stay in Australia temporarily for study. It replaced the former Genuine Temporary
                            Entrant (GTE) requirement in 2024.</p>
                        <p class="mt-4 text-muted-foreground text-pretty leading-relaxed">Your GS statement is a written
                            response — usually 300–500 words — that explains your circumstances, intentions and plans. It is
                            one of the most important documents in your visa application, because a weak or generic
                            statement is a leading cause of visa refusal.</p>
                        <div class="mt-8 rounded-2xl bg-secondary p-6">
                            <div class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-shield-check size-5 text-teal-deep shrink-0 mt-0.5"
                                    aria-hidden="true">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                    </path>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                                <p class="text-sm text-muted-foreground"><strong class="text-foreground">Good to
                                        know:</strong> <!-- -->There is no official template. The best statements are
                                    personal, specific and backed by evidence. Avoid copied paragraphs from the internet —
                                    case officers recognise them immediately.</p>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div class="rounded-3xl bg-foreground text-background p-8 md:p-10">
                            <h3 class="font-display text-2xl">The three pillars of a GS statement</h3>
                            <p class="text-sm opacity-70 mt-2">Home Affairs evaluates your statement across three core
                                themes. Address each one clearly.</p>
                            <ul class="mt-6 space-y-4">
                                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-house size-5 text-teal-light shrink-0 mt-0.5"
                                        aria-hidden="true">
                                        <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                        <path
                                            d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                        </path>
                                    </svg><span class="text-sm">Ties to your home country</span></li>
                                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-map-pin size-5 text-teal-light shrink-0 mt-0.5"
                                        aria-hidden="true">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                        </path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg><span class="text-sm">Potential circumstances in Australia</span></li>
                                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-graduation-cap size-5 text-teal-light shrink-0 mt-0.5"
                                        aria-hidden="true">
                                        <path
                                            d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                        </path>
                                        <path d="M22 10v6"></path>
                                        <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                    </svg><span class="text-sm">Value of the course to your future</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-secondary py-24">
            <div class="mx-auto max-w-7xl px-6 lg:px-10">
                <div style="opacity: 1; transform: none;">
                    <h2 class="font-display text-4xl md:text-5xl max-w-3xl text-balance">Address each pillar with detail
                        and evidence.</h2>
                </div>
                <div class="mt-16 grid md:grid-cols-3 gap-6">
                    <div style="opacity: 1; transform: none;">
                        <div class="rounded-2xl bg-background p-8 h-full">
                            <div class="inline-flex items-center justify-center size-10 rounded-full bg-secondary"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-house size-5 text-teal-deep"
                                    aria-hidden="true">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                    <path
                                        d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                    </path>
                                </svg></div>
                            <h3 class="font-display text-xl mt-5">Ties to your home country</h3>
                            <ul class="mt-5 space-y-3">
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">Family members you support or who depend on you
                                        financially.</span></li>
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">Property, assets or business interests at home.</span></li>
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">Current employment and a clear job to return to.</span></li>
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">Community ties, memberships or volunteer roles.</span></li>
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">Explain why these ties make it likely you will return home
                                        after study.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div class="rounded-2xl bg-background p-8 h-full">
                            <div class="inline-flex items-center justify-center size-10 rounded-full bg-secondary"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-map-pin size-5 text-teal-deep"
                                    aria-hidden="true">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                                    </path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg></div>
                            <h3 class="font-display text-xl mt-5">Potential circumstances in Australia</h3>
                            <ul class="mt-5 space-y-3">
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">Why you chose Australia instead of other study
                                        destinations.</span></li>
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">Why you chose this specific city and campus location.</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">How you will support yourself financially (savings, family
                                        support, scholarships).</span></li>
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">Your accommodation plans and living arrangements.</span></li>
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">Any family or friends already in Australia and how that
                                        supports your decision.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div class="rounded-2xl bg-background p-8 h-full">
                            <div class="inline-flex items-center justify-center size-10 rounded-full bg-secondary"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-graduation-cap size-5 text-teal-deep"
                                    aria-hidden="true">
                                    <path
                                        d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                    </path>
                                    <path d="M22 10v6"></path>
                                    <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                                </svg></div>
                            <h3 class="font-display text-xl mt-5">Value of the course to your future</h3>
                            <ul class="mt-5 space-y-3">
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">Why this qualification is needed for your career goals.</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">How the course fills a skills or knowledge gap in your current
                                        profile.</span></li>
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">Whether the qualification is recognised or in demand in your
                                        home country.</span></li>
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">Your specific job title or career path after graduation.</span>
                                </li>
                                <li class="flex items-start gap-2.5 text-sm text-muted-foreground"><span
                                        class="mt-1.5 size-1.5 rounded-full bg-teal shrink-0"></span><span
                                        class="text-pretty">How the salary, role or business opportunity improves with this
                                        qualification.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mx-auto max-w-7xl px-6 lg:px-10 py-24">
            <div style="opacity: 1; transform: none;">
                <h2 class="font-display text-4xl md:text-5xl max-w-3xl text-balance">Writing tips that make a difference.
                </h2>
            </div>
            <div class="mt-16 grid md:grid-cols-2 gap-px bg-border rounded-3xl overflow-hidden">
                <div style="opacity: 1; transform: none;">
                    <div class="bg-background p-8 md:p-10 h-full">
                        <div class="text-xs uppercase tracking-[0.2em] text-teal-deep font-medium">Tip <!-- -->01</div>
                        <h3 class="font-display text-xl mt-4">Be specific, not generic</h3>
                        <p class="text-sm text-muted-foreground mt-3 text-pretty leading-relaxed">Write about your exact
                            course, campus and career goal. Avoid phrases like 'Australia has a good education system' —
                            explain why this course at this provider is the right choice for you.</p>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div class="bg-background p-8 md:p-10 h-full">
                        <div class="text-xs uppercase tracking-[0.2em] text-teal-deep font-medium">Tip <!-- -->02</div>
                        <h3 class="font-display text-xl mt-4">Use evidence, not promises</h3>
                        <p class="text-sm text-muted-foreground mt-3 text-pretty leading-relaxed">Instead of saying 'I will
                            return home', show why you will return: a family business to inherit, a job offer contingent on
                            the qualification, or property you need to manage.</p>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div class="bg-background p-8 md:p-10 h-full">
                        <div class="text-xs uppercase tracking-[0.2em] text-teal-deep font-medium">Tip <!-- -->03</div>
                        <h3 class="font-display text-xl mt-4">Keep the tone honest and personal</h3>
                        <p class="text-sm text-muted-foreground mt-3 text-pretty leading-relaxed">Case officers read
                            hundreds of statements. A sincere, well-structured personal story is more persuasive than
                            polished corporate language.</p>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div class="bg-background p-8 md:p-10 h-full">
                        <div class="text-xs uppercase tracking-[0.2em] text-teal-deep font-medium">Tip <!-- -->04</div>
                        <h3 class="font-display text-xl mt-4">Address gaps and risks openly</h3>
                        <p class="text-sm text-muted-foreground mt-3 text-pretty leading-relaxed">If you have a gap in
                            study or a previous visa refusal, explain it directly. A clear, honest explanation builds more
                            trust than silence.</p>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div class="bg-background p-8 md:p-10 h-full">
                        <div class="text-xs uppercase tracking-[0.2em] text-teal-deep font-medium">Tip <!-- -->05</div>
                        <h3 class="font-display text-xl mt-4">Link your course to your home-country market</h3>
                        <p class="text-sm text-muted-foreground mt-3 text-pretty leading-relaxed">Show that you have
                            researched the job market at home. Mention specific employers, salary ranges or industry demand
                            that make the qualification valuable there.</p>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div class="bg-background p-8 md:p-10 h-full">
                        <div class="text-xs uppercase tracking-[0.2em] text-teal-deep font-medium">Tip <!-- -->06</div>
                        <h3 class="font-display text-xl mt-4">Proofread and format cleanly</h3>
                        <p class="text-sm text-muted-foreground mt-3 text-pretty leading-relaxed">Use clear headings, short
                            paragraphs and correct grammar. A well-presented statement signals that you are organised and
                            serious about your application.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-foreground text-background py-24">
            <div class="mx-auto max-w-7xl px-6 lg:px-10">
                <div style="opacity: 1; transform: none;">
                    <div class="max-w-2xl">
                        <div class="text-xs uppercase tracking-[0.3em] text-teal-light mb-4">Document checklist</div>
                        <h2 class="font-display text-4xl md:text-5xl text-balance">Information to gather before you write.
                        </h2>
                        <p class="mt-6 text-sm opacity-70 text-pretty leading-relaxed">Having these documents ready before
                            you draft your statement makes the process faster and ensures every claim you make is backed by
                            evidence.</p>
                    </div>
                </div>
                <div class="mt-14 grid md:grid-cols-2 gap-x-16 gap-y-4">
                    <div style="opacity: 1; transform: none;">
                        <div class="flex items-start gap-3 border-t border-background/15 pt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check size-4 text-teal-light shrink-0 mt-0.5"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <div class="flex-1"><span class="text-sm">Passport bio-data page</span><span
                                    class="ml-2 inline-block text-[10px] uppercase tracking-wider bg-teal-light/20 text-teal-light px-1.5 py-0.5 rounded">Essential</span>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div class="flex items-start gap-3 border-t border-background/15 pt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check size-4 text-teal-light shrink-0 mt-0.5"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <div class="flex-1"><span class="text-sm">Academic transcripts and certificates</span><span
                                    class="ml-2 inline-block text-[10px] uppercase tracking-wider bg-teal-light/20 text-teal-light px-1.5 py-0.5 rounded">Essential</span>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div class="flex items-start gap-3 border-t border-background/15 pt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check size-4 text-teal-light shrink-0 mt-0.5"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <div class="flex-1"><span class="text-sm">English test results (IELTS, PTE, TOEFL,
                                    etc.)</span><span
                                    class="ml-2 inline-block text-[10px] uppercase tracking-wider bg-teal-light/20 text-teal-light px-1.5 py-0.5 rounded">Essential</span>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div class="flex items-start gap-3 border-t border-background/15 pt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check size-4 text-teal-light shrink-0 mt-0.5"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <div class="flex-1"><span class="text-sm">Employment letters or payslips (current and
                                    previous)</span><span
                                    class="ml-2 inline-block text-[10px] uppercase tracking-wider bg-teal-light/20 text-teal-light px-1.5 py-0.5 rounded">Essential</span>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div class="flex items-start gap-3 border-t border-background/15 pt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check size-4 text-teal-light shrink-0 mt-0.5"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <div class="flex-1"><span class="text-sm">Bank statements or financial capacity
                                    evidence</span><span
                                    class="ml-2 inline-block text-[10px] uppercase tracking-wider bg-teal-light/20 text-teal-light px-1.5 py-0.5 rounded">Essential</span>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div class="flex items-start gap-3 border-t border-background/15 pt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check size-4 text-teal-light shrink-0 mt-0.5"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <div class="flex-1"><span class="text-sm">Property or asset ownership documents</span></div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div class="flex items-start gap-3 border-t border-background/15 pt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check size-4 text-teal-light shrink-0 mt-0.5"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <div class="flex-1"><span class="text-sm">Family composition or dependency evidence</span>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div class="flex items-start gap-3 border-t border-background/15 pt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check size-4 text-teal-light shrink-0 mt-0.5"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <div class="flex-1"><span class="text-sm">Course brochure or CRICOS registration
                                    details</span></div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div class="flex items-start gap-3 border-t border-background/15 pt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check size-4 text-teal-light shrink-0 mt-0.5"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <div class="flex-1"><span class="text-sm">Offer Letter from UTI</span><span
                                    class="ml-2 inline-block text-[10px] uppercase tracking-wider bg-teal-light/20 text-teal-light px-1.5 py-0.5 rounded">Essential</span>
                            </div>
                        </div>
                    </div>
                    <div style="opacity: 1; transform: none;">
                        <div class="flex items-start gap-3 border-t border-background/15 pt-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle-check size-4 text-teal-light shrink-0 mt-0.5"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <div class="flex-1"><span class="text-sm">Statement of purpose / Genuine Student
                                    statement</span><span
                                    class="ml-2 inline-block text-[10px] uppercase tracking-wider bg-teal-light/20 text-teal-light px-1.5 py-0.5 rounded">Essential</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mx-auto max-w-7xl px-6 lg:px-10 py-24">
            <div style="opacity: 1; transform: none;">
                <h2 class="font-display text-4xl md:text-5xl max-w-3xl text-balance">A simple structure to follow.</h2>
            </div>
            <div class="mt-14 max-w-3xl space-y-8">
                <div style="opacity: 1; transform: none;">
                    <div class="flex gap-6 md:gap-8">
                        <div class="font-display text-3xl text-teal-light shrink-0 w-12">01</div>
                        <div>
                            <h3 class="font-display text-xl">Introduction (1 paragraph)</h3>
                            <p class="text-sm text-muted-foreground mt-2 text-pretty leading-relaxed">State who you are,
                                what you are applying for, and why you want to study in Australia. Be brief and direct.</p>
                        </div>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div class="flex gap-6 md:gap-8">
                        <div class="font-display text-3xl text-teal-light shrink-0 w-12">02</div>
                        <div>
                            <h3 class="font-display text-xl">Your background and ties to home (2–3 paragraphs)</h3>
                            <p class="text-sm text-muted-foreground mt-2 text-pretty leading-relaxed">Describe your family,
                                employment, property and community ties. Explain what anchors you to your home country and
                                why you plan to return.</p>
                        </div>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div class="flex gap-6 md:gap-8">
                        <div class="font-display text-3xl text-teal-light shrink-0 w-12">03</div>
                        <div>
                            <h3 class="font-display text-xl">Why this course and provider (2 paragraphs)</h3>
                            <p class="text-sm text-muted-foreground mt-2 text-pretty leading-relaxed">Explain how you chose
                                this qualification, what it teaches, and why UTI specifically fits your needs. Mention
                                CRICOS registration and the campus location.</p>
                        </div>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div class="flex gap-6 md:gap-8">
                        <div class="font-display text-3xl text-teal-light shrink-0 w-12">04</div>
                        <div>
                            <h3 class="font-display text-xl">Why Australia (1–2 paragraphs)</h3>
                            <p class="text-sm text-muted-foreground mt-2 text-pretty leading-relaxed">Compare Australia to
                                other countries you considered. Explain why the training approach, industry links or
                                qualification recognition made it your first choice.</p>
                        </div>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div class="flex gap-6 md:gap-8">
                        <div class="font-display text-3xl text-teal-light shrink-0 w-12">05</div>
                        <div>
                            <h3 class="font-display text-xl">Your career plan after graduation (2 paragraphs)</h3>
                            <p class="text-sm text-muted-foreground mt-2 text-pretty leading-relaxed">Describe the specific
                                role, company type or business you plan to work in. Show that you have researched salaries,
                                demand and progression in your home market.</p>
                        </div>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div class="flex gap-6 md:gap-8">
                        <div class="font-display text-3xl text-teal-light shrink-0 w-12">06</div>
                        <div>
                            <h3 class="font-display text-xl">Financial and living arrangements (1 paragraph)</h3>
                            <p class="text-sm text-muted-foreground mt-2 text-pretty leading-relaxed">Briefly confirm how
                                you will pay tuition and living costs, and where you plan to live in Australia.</p>
                        </div>
                    </div>
                </div>
                <div style="opacity: 1; transform: none;">
                    <div class="flex gap-6 md:gap-8">
                        <div class="font-display text-3xl text-teal-light shrink-0 w-12">07</div>
                        <div>
                            <h3 class="font-display text-xl">Closing statement (1 paragraph)</h3>
                            <p class="text-sm text-muted-foreground mt-2 text-pretty leading-relaxed">Reaffirm your genuine
                                intent to study, comply with visa conditions, and return home after your qualification is
                                complete.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mx-auto max-w-7xl px-6 lg:px-10 pb-24">
            <div style="opacity: 1; transform: none;">
                <div class="rounded-2xl border border-border p-6 md:p-8 flex gap-4 items-start"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-file-text size-5 text-teal-deep shrink-0 mt-0.5"
                        aria-hidden="true">
                        <path
                            d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z">
                        </path>
                        <path d="M14 2v5a1 1 0 0 0 1 1h5"></path>
                        <path d="M10 9H8"></path>
                        <path d="M16 13H8"></path>
                        <path d="M16 17H8"></path>
                    </svg>
                    <div>
                        <h3 class="font-medium text-sm">General guidance only</h3>
                        <p class="text-sm text-muted-foreground mt-1 text-pretty">This guide is general information to help
                            you prepare your Genuine Student statement. It is not legal or migration advice. For advice
                            specific to your situation, consult a registered migration agent (MARA).</p>
                    </div>
                </div>
            </div>
        </section>
   

@endsection
