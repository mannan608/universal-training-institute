@extends('frontend.layouts.app')

@section('content')
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 mesh-background"></div>

        <div class="relative max-w-7xl mx-auto w-full px-4 md:px-8 py-8 md:py-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                <!-- Left Hero Content (7 Cols) -->
                <div class="lg:col-span-7 flex flex-col justify-between">
                    <div class="flex flex-col gap-4">
                        <!-- Regulatory & Location Badge -->
                        <div class="flex flex-wrap items-center gap-2">
                            <span
                                class="inline-flex rounded items-center gap-1.5 px-3 py-1 bg-brand-500 text-white font-mono text-xs uppercase font-bold ">
                                <span class="w-2 h-2 rounded-full bg-[#a1ebff]"></span>
                                CRICOS 04111E • Sydney Campus
                            </span>
                            <span
                                class="inline-flex rounded items-center px-2.5 py-1 bg-[#eeeee9] text-[#1a1c19] font-mono text-xs uppercase font-bold ">
                                RTO 45975
                            </span>
                        </div>
                        <!-- Big Display Headline -->
                        <div class="flex flex-col gap-1.5 pt-2">
                            <h1
                                class="font-display font-extrabold text-4xl sm:text-5xl lg:text-6xl uppercase tracking-tight text-[#1a1c19] leading-[1.05]">
                                BUILD THE CAREER
                            </h1>
                            <div class="inline-block self-start bg-[#245c73] text-white px-4 py-1.5   -rotate-1">
                                <span
                                    class="font-display font-extrabold text-4xl sm:text-5xl lg:text-6xl uppercase tracking-tight">YOU
                                    CAME FOR</span>
                            </div>
                        </div>
                        <!-- Descriptive Body Copy -->
                        <p class="text-[#40484c] text-base md:text-lg leading-relaxed max-w-xl pt-2">
                            Universal Training Institute trains tomorrow's tradies, carers, technicians and leaders — with
                            hands-on courses, expert assessors and pathways into real Australian jobs.
                        </p>
                    </div>
                    <!-- Hero CTAs & Trust Badges -->
                    <div class="flex flex-col gap-6 pt-8">
                        <div class="flex flex-wrap items-center gap-4">
                            <a class="inline-flex rounded items-center gap-2 px-6 py-3 bg-[#245c73] text-white font-mono text-sm uppercase font-bold   hover:-translate-x-0.5 hover:-translate-y-0.5 hover: transition-all"
                                href="#courses">
                                Browse All Courses
                                <span class="material-symbols-outlined text-lg">arrow_forward</span>
                            </a>
                            <a class="inline-flex rounded items-center gap-2 px-6 py-3 bg-white text-[#245c73] font-mono text-sm uppercase font-bold border-2 border-[#245c73]  hover:-translate-x-0.5 hover:-translate-y-0.5 hover: transition-all"
                                href="#prospectus">
                                <span class="material-symbols-outlined text-lg">menu_book</span>
                                Student Prospectus
                            </a>
                        </div>
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-6 border-t-2 border-brand-300 w-full md:w-[90%] lg:w-[80%] ">
                            <div class="flex items-center gap-2.5">
                                <span class="material-symbols-outlined text-[#3f8c9e] font-bold text-2xl">verified</span>
                                <div class="flex flex-col">
                                    <span class="font-mono text-xs uppercase font-bold text-[#1a1c19]">Nationally
                                        Recognised</span>
                                    <span class="text-xs text-[#40484c]">AQF Level 3 to 6 Verified</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="material-symbols-outlined text-[#3f8c9e] font-bold text-2xl">handshake</span>
                                <div class="flex flex-col">
                                    <span class="font-mono text-xs uppercase font-bold text-[#1a1c19]">Work
                                        Placements</span>
                                    <span class="text-xs text-[#40484c]">Guaranteed NSW Host Employers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Hero Visual Card (5 Cols) -->
                <div class="lg:col-span-5 flex flex-col overflow-hidden">
                    <!-- Terminal Header Bar -->
                    <div class="flex items-center justify-between px-4 py-2 bg-white border-b-2 rounded-t-2xl ">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-[#ba1a1a] border "></span>
                            <span class="w-3 h-3 rounded-full bg-[#ffb95f] border "></span>
                            <span class="w-3 h-3 rounded-full bg-brand-500 border "></span>
                        </div>
                        {{-- <span class="font-mono text-xs font-bold uppercase text-[#40484c]">Terminal</span> --}}
                    </div>
                    <!-- Hero Image Container with Overlay Chips -->
                    @include('frontend.pages.home.section.hero-slider')
                    <!-- Bottom Technical Spec Strip -->
                    <div
                        class="grid grid-cols-3 divide-x-2 divide-neutral-300 border-t-2  bg-white text-center rounded-b-2xl">
                        <div class="py-3 px-2">
                            <span class="block font-display text-lg font-bold text-[#245c73]">40:60</span>
                            <span class="font-mono text-[10px] uppercase text-[#40484c] font-semibold">Theory /
                                Hands-on</span>
                        </div>
                        <div class="py-3 px-2">
                            <span class="block font-display text-lg font-bold text-[#245c73]">100%</span>
                            <span class="font-mono text-[10px] uppercase text-[#40484c] font-semibold">ASQA
                                Compliant</span>
                        </div>
                        <div class="py-3 px-2">
                            <span class="block font-display text-lg font-bold text-[#245c73]">AUST</span>
                            <span class="font-mono text-[10px] uppercase text-[#40484c] font-semibold">Government
                                Code</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4-Column Stat Blocks -->
    <section class="w-full bg-white  py-12 md:py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-5 bg-white border border-neutral-300 rounded-2xl  flex flex-col justify-between">
                    <div class="flex items-center justify-between pb-2 border-b-2 ">
                        <span class="font-mono text-xs font-bold uppercase text-[#40484c]">Accreditation</span>
                        <span class="w-2.5 h-2.5 rounded-full bg-brand-500"></span>
                    </div>
                    <div class="py-3 flex items-baseline gap-2">
                        <span class="font-display text-4xl font-extrabold text-[#245c73]">12+</span>
                        <span class="font-mono text-xs font-bold text-[#3f8c9e] uppercase">Nationally
                            Accredited</span>
                    </div>
                    <p class="text-xs text-[#40484c] leading-relaxed">Certificate III, IV, and Advanced Diploma
                        awards recognised across Australia.</p>
                </div>
                <div class="p-5 bg-white border border-neutral-300 rounded-2xl  flex flex-col justify-between">
                    <div class="flex items-center justify-between pb-2 border-b-2 ">
                        <span class="font-mono text-xs font-bold uppercase text-[#40484c]">Location</span>
                        <span class="w-2.5 h-2.5 rounded-full bg-brand-500"></span>
                    </div>
                    <div class="py-3 flex items-baseline gap-2">
                        <span class="font-display text-4xl font-extrabold text-[#245c73]">01</span>
                        <span class="font-mono text-xs font-bold text-[#3f8c9e] uppercase">Sydney Campus</span>
                    </div>
                    <p class="text-xs text-[#40484c] leading-relaxed">High-spec workshops, clinical simulation
                        suites, and transport-connected campus.</p>
                </div>
                <div class="p-5 bg-white border border-neutral-300 rounded-2xl  flex flex-col justify-between">
                    <div class="flex items-center justify-between pb-2 border-b-2 ">
                        <span class="font-mono text-xs font-bold uppercase text-[#40484c]">Industry Sectors</span>
                        <span class="w-2.5 h-2.5 rounded-full bg-brand-500"></span>
                    </div>
                    <div class="py-3 flex items-baseline gap-2">
                        <span class="font-display text-4xl font-extrabold text-[#245c73]">03</span>
                        <span class="font-mono text-xs font-bold text-[#3f8c9e] uppercase">High-Demand Hubs</span>
                    </div>
                    <p class="text-xs text-[#40484c] leading-relaxed">Carpentry &amp; Building, Aged &amp;
                        Community Care, Leadership &amp; Operations.</p>
                </div>
                <div class="p-5 bg-white border border-neutral-300 rounded-2xl  flex flex-col justify-between">
                    <div class="flex items-center justify-between pb-2 border-b-2 ">
                        <span class="font-mono text-xs font-bold uppercase text-[#40484c]">Visa Status</span>
                        <span class="w-2.5 h-2.5 rounded-full bg-brand-500"></span>
                    </div>
                    <div class="py-3 flex items-baseline gap-2">
                        <span class="font-display text-4xl font-extrabold text-[#245c73]">100%</span>
                        <span class="font-mono text-xs font-bold text-[#3f8c9e] uppercase">CRICOS Student
                            Visa</span>
                    </div>
                    <p class="text-xs text-[#40484c] leading-relaxed">Full international study confirmation of
                        enrolment (CoE) issuance support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee Ticker Banner -->
    @include('frontend.pages.home.section.marquee')

    <!-- 3 Disciplines Section -->
    <section class=" bg-brand-100 py-12 md:py-16 mt-8 md:mt-12 lg:mt-16">
      <div class="max-w-7xl mx-auto px-4 md:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 pb-4 border-b-2  mb-8">
            <div>
                <span class="font-mono text-xs uppercase font-bold text-[#3f8c9e] tracking-widest">01 Academic
                    Disciplines</span>
                <h2 class="font-display font-extrabold text-2xl md:text-3xl uppercase text-[#1a1c19] tracking-tight mt-1">
                    A course for the career you imagine
                </h2>
            </div>
            <a class="inline-flex items-center gap-1.5 font-mono text-xs uppercase font-bold text-[#245c73] hover:text-[#3f8c9e] transition-colors underline underline-offset-4"
                href="#prospectus">
                Download complete syllabus matrix
                <span class="material-symbols-outlined text-sm">north_east</span>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Discipline 1: Carpentry -->
            <div class="flex flex-col bg-white ">
                <div class="relative h-56 border-b-2  bg-[#eeeee9] overflow-hidden">
                    <img alt="Australian carpenter apprentice framing timber" class="w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida/AEtjO1V0vV_ZMek-smAsbHdRbBvWINOY7efDz99v-VEFNVUOXmRprtfpwh3-hKszhN0JSiZaBubRE1GBLmMP4bQa_sOkAr4Ysa0UNA6eyQAuUQ33-Z28F2uBo8_32udZ_-RsyVmewqr-Vq1yvfAu36SObl4Xc9krN00C_63eu55QrjeY3TQrh6MZdWaEqjXdTnd2_UMp1gI5re_iokW0EVMjI8ALFSmkgHXicAFVkgVO9wKSvXWctMHZGYX3BYVw" />
                    <div
                        class="absolute top-3 left-3 bg-brand-500 text-white font-mono text-[11px] uppercase font-bold px-2.5 py-1 ">
                        Trade &amp; Structural
                    </div>
                    <div
                        class="absolute bottom-3 right-3 bg-white text-[#1a1c19] font-mono text-[10px] uppercase font-bold px-2 py-0.5 border ">
                        2 Qualifications
                    </div>
                </div>
                <div class="p-6 flex flex-col justify-between flex-1 gap-4">
                    <div class="flex flex-col gap-2">
                        <h3 class="font-display font-bold text-xl uppercase text-[#245c73]">Carpentry &amp;
                            Construction</h3>
                        <p class="text-sm text-[#40484c]">
                            Comprehensive practical trade qualifications. Train on heavy structural framing,
                            formwork, scaffolding, and residential project regulations in our Parramatta warehouse
                            hub.
                        </p>                       
                    </div>
                    <div class="pt-4 border-t-2  flex items-center justify-between">
                        <div>
                            <span class="block font-mono text-[10px] uppercase text-[#40484c]">Duration</span>
                            <span class="font-mono text-xs font-bold text-[#1a1c19]">1 - 2 Years</span>
                        </div>
                        <a class="inline-flex rounded items-center gap-1 px-3 py-1.5 bg-[#245c73] text-white font-mono text-xs uppercase font-bold   hover:bg-[#00445a] transition-colors"
                            href="#courses">
                            Explore Trade
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Discipline 2: Health & Care -->
            <div class="flex flex-col bg-white  ">
                <div class="relative h-56 border-b-2  bg-[#eeeee9] overflow-hidden">
                    <img alt="Healthcare aged care nursing student with resident" class="w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida/AEtjO1W27I1jDT4KCmT5NjIL63WLmq0u_qt3wOZixtj2IMBfDbJ9_NFvGJ8ygItJXj_mqK0VSpDFtHR6o_3BC51BfQaPN3z07ZTc56iDxkrFS-WMJRP3mbeAXW55OeRPKnNvXLHNsUYksgfn2siOH9Gvo_du2l8myEbKGHMpZByePM79CXXtvx0S_dnzCxW0K4mOXYdJt-jZ2MWMGMSEKx9Mtc3iaJApqe-t0yw4AhkIkQQjLhXp98VKurQhHKI" />
                    <div
                        class="absolute top-3 left-3 bg-brand-500 text-white font-mono text-[11px] uppercase font-bold px-2.5 py-1 ">
                        Care &amp; Community
                    </div>
                    <div
                        class="absolute bottom-3 right-3 bg-white text-[#1a1c19] font-mono text-[10px] uppercase font-bold px-2 py-0.5 border ">
                        2 Qualifications
                    </div>
                </div>
                <div class="p-6 flex flex-col justify-between flex-1 gap-4">
                    <div class="flex flex-col gap-2">
                        <h3 class="font-display font-bold text-xl uppercase text-[#245c73]">Health &amp; Aged Care
                        </h3>
                        <p class="text-sm text-[#40484c]">
                            Equip yourself for Australia's fastest-growing employment sector. Combines simulated
                            patient care wards with 120+ mandatory hours in accredited NSW aged care facilities.
                        </p>
                    </div>
                    <div class="pt-4 border-t-2  flex items-center justify-between">
                        <div>
                            <span class="block font-mono text-[10px] uppercase text-[#40484c]">Duration</span>
                            <span class="font-mono text-xs font-bold text-[#1a1c19]">52 - 104 Weeks</span>
                        </div>
                        <a class="inline-flex rounded items-center gap-1 px-3 py-1.5 bg-[#245c73] text-white font-mono text-xs uppercase font-bold   hover:bg-[#00445a] transition-colors"
                            href="#courses">
                            Explore Health
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Discipline 3: Business & Leadership -->
            <div class="flex flex-col bg-white  ">
                <div class="relative h-56 border-b-2  bg-[#245c73] p-5 flex flex-col justify-between overflow-hidden">
                    <div class="flex items-center justify-between">
                        <span class="bg-[#a1ebff] text-[#001f26] font-mono text-[11px] uppercase font-bold px-2.5 py-1 ">
                            Enterprise &amp; Ops
                        </span>
                        <span class="material-symbols-outlined text-white text-3xl">analytics</span>
                    </div>
                    <div class="bg-white p-3 ">
                        <div
                            class="flex items-center justify-between text-[#40484c] font-mono text-[10px] pb-1 border-b border-[#c0c7cd]">
                            <span>PROJECT_STAGE</span>
                            <span class="text-[#3f8c9e] font-bold">100% KPI</span>
                        </div>
                        <div class="flex gap-1 pt-2">
                            <div class="h-2 flex-1 bg-brand-500 border "></div>
                            <div class="h-2 flex-1 bg-brand-500 border "></div>
                            <div class="h-2 flex-1 bg-brand-500 border "></div>
                            <div class="h-2 flex-1 bg-[#eeeee9] border "></div>
                        </div>
                    </div>
                </div>
                <div class="p-6 flex flex-col justify-between flex-1 gap-4">
                    <div class="flex flex-col gap-2">
                        <h3 class="font-display font-bold text-xl uppercase text-[#245c73]">Business &amp;
                            Leadership</h3>
                        <p class="text-sm text-[#40484c]">
                            Master enterprise management, operational finance, and project workflows tailored for
                            modern business environments and multi-disciplinary teams in NSW.
                        </p>                        
                    </div>
                    <div class="pt-4 border-t-2  flex items-center justify-between">
                        <div>
                            <span class="block font-mono text-[10px] uppercase text-[#40484c]">Duration</span>
                            <span class="font-mono text-xs font-bold text-[#1a1c19]">52 Weeks</span>
                        </div>
                        <a class="inline-flex rounded items-center gap-1 px-3 py-1.5 bg-[#245c73] text-white font-mono text-xs uppercase font-bold   hover:bg-[#00445a] transition-colors"
                            href="#courses">
                            Explore Business
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
    </section>
    <!-- Most-Enrolled Qualifications 2x2 Grid -->
    <section class="w-full py-12 md:py-16" id="courses">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 pb-4 mb-8 border-b-2 ">
                <div>
                    <span class="font-mono text-xs uppercase font-bold text-[#3f8c9e] tracking-widest">02 Intake
                        Selection 2025</span>
                    <h2
                        class="font-display font-extrabold text-2xl md:text-3xl uppercase text-[#1a1c19] tracking-tight mt-1">
                        Most-Enrolled Qualifications
                    </h2>
                    <p class="text-sm text-[#40484c] mt-1">Direct pathway qualifications aligning with current New
                        South Wales skills shortage priority lists.</p>
                </div>
                <div class="flex items-center gap-2">
                    <span class="px-3 py-1 bg-white  font-mono text-xs uppercase font-bold">Term
                        2: May 2025</span>
                    <span class="px-3 py-1 bg-brand-500 text-white  font-mono text-xs uppercase font-bold">Term
                        3: Jul 2025</span>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Course 1 -->
                <div class="p-6 bg-white border border-neutral-300 rounded-md flex flex-col justify-between gap-4">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs font-bold uppercase text-[#3f8c9e] tracking-wider">NAT.
                                CODE: CPC30220</span>
                            <span
                                class="px-2.5 py-0.5 bg-[#a1ebff] text-[#004e5c] font-mono text-[10px] uppercase font-bold border ">
                                Work Placement Included
                            </span>
                        </div>
                        <h4 class="font-display font-bold text-xl uppercase text-[#245c73]">
                            Certificate III in Carpentry
                        </h4>
                        <p class="text-sm text-[#40484c]">
                            Master timber framing, roof truss installation, formwork, wall cladding, and interior
                            finishing using industrial standard equipment under certified NSW tradesmen.
                        </p>
                        <div class="grid grid-cols-3 gap-2 py-3 border-y-2  bg-[#f4f4ef] px-3">
                            <div>
                                <span class="block font-mono text-[10px] text-[#40484c] uppercase">Duration</span>
                                <span class="font-mono text-xs font-bold text-[#1a1c19]">104 Weeks</span>
                            </div>
                            <div>
                                <span class="block font-mono text-[10px] text-[#40484c] uppercase">Location</span>
                                <span class="font-mono text-xs font-bold text-[#1a1c19]">Sydney Campus</span>
                            </div>
                            <div>
                                <span class="block font-mono text-[10px] text-[#40484c] uppercase">Tuition
                                    Sched</span>
                                <span class="font-mono text-xs font-bold text-[#1a1c19]">Quarterly</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-2">
                        <span class="font-mono text-xs text-[#40484c]">CRICOS CODE: 108342M</span>
                        <button
                            class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-[#245c73] text-white font-mono text-xs uppercase font-bold   hover:bg-[#00445a] transition-colors">
                            Course Details
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </button>
                    </div>
                </div>
                <!-- Course 2 -->
                <div class="p-6 bg-white border border-neutral-300 rounded-md flex flex-col justify-between gap-4">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs font-bold uppercase text-[#3f8c9e] tracking-wider">NAT.
                                CODE: CPC50220</span>
                            <span
                                class="px-2.5 py-0.5 bg-[#ffddb8] text-[#2a1700] font-mono text-[10px] uppercase font-bold border ">
                                Contractor Pathway
                            </span>
                        </div>
                        <h4 class="font-display font-bold text-xl uppercase text-[#245c73]">
                            Diploma of Building &amp; Construction
                        </h4>
                        <p class="text-sm text-[#40484c]">
                            Develop site supervision, cost estimation, structural compliance, building codes
                            inspection, and contractor management expertise for mid-rise residential projects.
                        </p>
                        <div class="grid grid-cols-3 gap-2 py-3 border-y-2  bg-[#f4f4ef] px-3">
                            <div>
                                <span class="block font-mono text-[10px] text-[#40484c] uppercase">Duration</span>
                                <span class="font-mono text-xs font-bold text-[#1a1c19]">52 Weeks</span>
                            </div>
                            <div>
                                <span class="block font-mono text-[10px] text-[#40484c] uppercase">Pre-reqs</span>
                                <span class="font-mono text-xs font-bold text-[#1a1c19]">Year 12 / Eq</span>
                            </div>
                            <div>
                                <span class="block font-mono text-[10px] text-[#40484c] uppercase">Career</span>
                                <span class="font-mono text-xs font-bold text-[#1a1c19]">Site Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-2">
                        <span class="font-mono text-xs text-[#40484c]">CRICOS CODE: 108343K</span>
                        <button
                            class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-[#245c73] text-white font-mono text-xs uppercase font-bold   hover:bg-[#00445a] transition-colors">
                            Course Details
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </button>
                    </div>
                </div>
                <!-- Course 3 -->
                <div class="p-6 bg-white border border-neutral-300 rounded-md flex flex-col justify-between gap-4">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs font-bold uppercase text-[#3f8c9e] tracking-wider">NAT.
                                CODE: CHC43015</span>
                            <span
                                class="px-2.5 py-0.5 bg-[#a1ebff] text-[#004e5c] font-mono text-[10px] uppercase font-bold border ">
                                120 Hrs Placement
                            </span>
                        </div>
                        <h4 class="font-display font-bold text-xl uppercase text-[#245c73]">
                            Certificate IV in Ageing Support
                        </h4>
                        <p class="text-sm text-[#40484c]">
                            Prepare for specialized frontline roles in residential care, individualized support, and
                            dementia management. Features 120 hours of guaranteed practical clinical placement.
                        </p>
                        <div class="grid grid-cols-3 gap-2 py-3 border-y-2  bg-[#f4f4ef] px-3">
                            <div>
                                <span class="block font-mono text-[10px] text-[#40484c] uppercase">Duration</span>
                                <span class="font-mono text-xs font-bold text-[#1a1c19]">52 Weeks</span>
                            </div>
                            <div>
                                <span class="block font-mono text-[10px] text-[#40484c] uppercase">Practicum</span>
                                <span class="font-mono text-xs font-bold text-[#1a1c19]">120 Hours</span>
                            </div>
                            <div>
                                <span class="block font-mono text-[10px] text-[#40484c] uppercase">Demand</span>
                                <span class="font-mono text-xs font-bold text-[#3f8c9e]">Very High</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-2">
                        <span class="font-mono text-xs text-[#40484c]">CRICOS CODE: 104556C</span>
                        <button
                            class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-[#245c73] text-white font-mono text-xs uppercase font-bold   hover:bg-[#00445a] transition-colors">
                            Course Details
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </button>
                    </div>
                </div>
                <!-- Course 4 -->
                <div class="p-6 bg-white border border-neutral-300 rounded-md flex flex-col justify-between gap-4">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center justify-between">
                            <span class="font-mono text-xs font-bold uppercase text-[#3f8c9e] tracking-wider">NAT.
                                CODE: CHC53315</span>
                            <span
                                class="px-2.5 py-0.5 bg-[#87d1e5] text-[#001f26] font-mono text-[10px] uppercase font-bold border ">
                                Clinical Simulation
                            </span>
                        </div>
                        <h4 class="font-display font-bold text-xl uppercase text-[#245c73]">
                            Diploma of Mental Health
                        </h4>
                        <p class="text-sm text-[#40484c]">
                            Develop recovery-oriented skills, non-clinical interventions, case assessment protocols,
                            and crisis response support systems within multi-agency health frameworks.
                        </p>
                        <div class="grid grid-cols-3 gap-2 py-3 border-y-2  bg-[#f4f4ef] px-3">
                            <div>
                                <span class="block font-mono text-[10px] text-[#40484c] uppercase">Duration</span>
                                <span class="font-mono text-xs font-bold text-[#1a1c19]">78 Weeks</span>
                            </div>
                            <div>
                                <span class="block font-mono text-[10px] text-[#40484c] uppercase">Assessment</span>
                                <span class="font-mono text-xs font-bold text-[#1a1c19]">Portfolio + Lab</span>
                            </div>
                            <div>
                                <span class="block font-mono text-[10px] text-[#40484c] uppercase">Delivery</span>
                                <span class="font-mono text-xs font-bold text-[#1a1c19]">Face-to-Face</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-2">
                        <span class="font-mono text-xs text-[#40484c]">CRICOS CODE: 104557B</span>
                        <button
                            class="inline-flex items-center gap-1.5 px-3.5 py-1.5 bg-[#245c73] text-white font-mono text-xs uppercase font-bold   hover:bg-[#00445a] transition-colors">
                            Course Details
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Download 2025 Course Booklet & Lead Capture Form -->
    <section class="max-w-7xl mx-auto w-full px-4 md:px-8 py-12 md:py-16 rounded" id="prospectus">
        <div class="grid grid-cols-1 lg:grid-cols-12">
            <!-- Left Value Prop (7 Cols) -->
            <div class="lg:col-span-7 p-6 md:p-10 flex flex-col justify-between  bg-[#f4f4ef]">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-2">
                        <span class="font-mono text-xs uppercase font-bold text-[#3f8c9e]">Documentation &amp;
                            Intakes</span>
                        <span class="text-[#40484c]">/</span>
                        <span class="font-mono text-xs uppercase font-bold text-[#1a1c19]">2025 Calendar</span>
                    </div>
                    <h3 class="font-display font-extrabold text-2xl md:text-3xl uppercase text-[#245c73] leading-tight">
                        Download The Official 2025 Course Booklet &amp; Fee Schedule
                    </h3>
                    <p class="text-sm md:text-base text-[#40484c]">
                        Receive the official institutional prospectus detailing full competency unit descriptions,
                        direct articulation pathways, tuition breakdown, and Department of Home Affairs student visa
                        requirements.
                    </p>
                    <div class="flex flex-col gap-3 pt-2">
                        <div class="flex items-start gap-2.5">
                            <span
                                class="material-symbols-outlined text-[#3f8c9e] font-bold text-xl mt-0.5">check_box</span>
                            <span class="text-xs md:text-sm text-[#1a1c19]">
                                <strong>Transparent Fee Schedules:</strong> Material costs, uniform fees, and
                                flexible quarterly installment timetables.
                            </span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <span
                                class="material-symbols-outlined text-[#3f8c9e] font-bold text-xl mt-0.5">check_box</span>
                            <span class="text-xs md:text-sm text-[#1a1c19]">
                                <strong>CRICOS &amp; ESOS Standards:</strong> Mandatory hours, attendance compliance
                                tracking, and English proficiency thresholds.
                            </span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <span
                                class="material-symbols-outlined text-[#3f8c9e] font-bold text-xl mt-0.5">check_box</span>
                            <span class="text-xs md:text-sm text-[#1a1c19]">
                                <strong>Work Placement Agreements:</strong> List of approved employer networks in
                                Western Sydney and regional NSW.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="pt-6 flex flex-wrap items-center gap-3 text-[#40484c] font-mono text-[11px] border-t-2  mt-6">
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-base">picture_as_pdf</span>
                        <span>PDF (3.8 MB)</span>
                    </div>
                    <span>•</span>
                    <span>UPDATED: JANUARY 2025</span>
                    <span>•</span>
                    <span>VERIFIED ASQA VET</span>
                </div>
            </div>
            <!-- Right Side Form (5 Cols) -->
            <div class="lg:col-span-5 p-6 md:p-10 flex flex-col justify-center bg-white">
                <form class="flex flex-col gap-4"
                    onsubmit="event.preventDefault(); alert('Course prospectus PDF has been dispatched to your email address.');">
                    <div class="border-b-2  pb-2">
                        <span class="font-display font-bold text-lg uppercase text-[#245c73]">Instant Access</span>
                        <p class="font-mono text-[10px] text-[#40484c] uppercase">Direct dispatch to your primary
                            inbox</p>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="font-mono text-xs uppercase font-bold text-[#1a1c19]">Full Legal Name
                            *</label>
                        <input
                            class="font-mono dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-neutral-300 bg-transparent px-4 py-2.5 text-sm text-neutral-800 placeholder:text-neutral-400 focus:ring-3 focus:outline-hidden dark:border-neutral-700 dark:bg-neutral-900 dark:text-white/90 dark:placeholder:text-white/30"
                            placeholder="e.g. Alex Henderson" required="" type="text" />
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="font-mono text-xs uppercase font-bold text-[#1a1c19]">Email Address *</label>
                        <input
                            class="font-mono dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-neutral-300 bg-transparent px-4 py-2.5 text-sm text-neutral-800 placeholder:text-neutral-400 focus:ring-3 focus:outline-hidden dark:border-neutral-700 dark:bg-neutral-900 dark:text-white/90 dark:placeholder:text-white/30"
                            placeholder="name@example.com" required="" type="email" />
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label class="font-mono text-xs uppercase font-bold text-[#1a1c19]">Area of Interest
                            *</label>
                        <select
                            class="font-mono dark:bg-dark-900 shadow-theme-xs focus:border-brand-300 focus:ring-brand-500/10 dark:focus:border-brand-800 h-11 w-full rounded-lg border border-neutral-300 bg-transparent px-4 py-2.5 text-sm text-neutral-800 placeholder:text-neutral-400 focus:ring-3 focus:outline-hidden dark:border-neutral-700 dark:bg-neutral-900 dark:text-white/90 dark:placeholder:text-white/30"
                            required="">
                            <option value="">Select study stream...</option>
                            <option value="trade">Trade: Carpentry &amp; Building Construction</option>
                            <option value="health">Health: Aged Care &amp; Mental Health Support</option>
                            <option value="business">Business: Leadership &amp; Operational Management</option>
                            <option value="all">Full Comprehensive Multi-Discipline Guide</option>
                        </select>
                    </div>
                    <div class="flex items-center gap-2 pt-1">
                        <input class="w-4 h-4 rounded  accent-[#245c73]" id="student-visa" type="checkbox" />
                        <label class="text-xs text-[#40484c] cursor-pointer select-none" for="student-visa">
                            I require Australian Subclass 500 Student Visa guidance
                        </label>
                    </div>
                    <button
                        class="mt-2 w-full py-3 px-4 bg-brand-500 rounded text-white font-mono text-xs uppercase font-bold   hover:bg-[#245c73] hover:-translate-x-0.5 hover:-translate-y-0.5 hover: transition-all"
                        type="submit">
                        Download Course Booklet (PDF) →
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- Admissions Conversion Banner -->
    <section class="w-full bg-[#245c73] text-white border-y-2  py-12 md:py-16" id="consultation">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="flex flex-col gap-2 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 justify-center lg:justify-start">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#a1ebff] animate-ping"></span>
                        <span class="font-mono text-xs uppercase text-[#a1ebff] font-bold">Admissions Advisors On
                            Call</span>
                    </div>
                    <h3 class="font-display font-extrabold text-3xl md:text-4xl uppercase tracking-tight text-white">
                        Have Questions About Enrolment?
                    </h3>
                    <p class="text-sm md:text-base text-[#bfe9ff] max-w-2xl">
                        Speak directly with an accredited course counsellor regarding entry criteria, RPL
                        (Recognition of Prior Learning), and campus workshop walkthroughs.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row items-center gap-4 shrink-0">
                    <div
                        class="px-5 py-2.5 rounded bg-[#00445a] border-2 border-white  flex flex-col text-center">
                        <span class="font-mono text-[10px] text-[#bfe9ff] uppercase font-bold">Direct Sydney
                            Line</span>
                        <span class="font-display text-xl font-extrabold text-white tracking-wider">+61 2 8677
                            3600</span>
                    </div>
                    <a class="px-6 py-3 rounded bg-[#a1ebff] text-[#001f26] font-mono text-xs uppercase font-extrabold border-2 border-white  hover:-translate-x-0.5 hover:-translate-y-0.5 transition-all"
                        href="#prospectus">
                        Book Free Campus Tour
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
