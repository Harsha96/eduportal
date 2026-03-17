<?php
$pageTitle = 'Global Launchpad | Unidemy Global';
$pageDescription = 'Our premier Global Launchpad programmes spanning across SAT, ACT, IELTS, TOEFL, Duolingo, and GRE.';
$additionalHead = <<<'HEADCONTENT'
<link rel="stylesheet" href="style.css">
HEADCONTENT;
include 'components/header.php';
?>
    <!-- Main Content -->
    <main class="w-full pt-28 lg:pt-36 pb-20 bg-white flex-grow">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Breadcrumbs -->
            <nav class="flex text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-2">
                    <li class="inline-flex items-center group">
                        <a href="index.php" class="inline-flex items-center hover:text-primary transition-colors">
                            <i data-lucide="home" class="w-4 h-4 mr-2"></i>
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i>
                            <span class="ml-2 text-primary font-medium">Global Launchpad</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Title -->
            <div class="flex items-center gap-4 mb-8">
                <div
                    class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center shrink-0 border border-blue-100">
                    <i data-lucide="rocket" class="w-8 h-8 text-blue-600"></i>
                </div>
                <div>
                    <h1 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-gray-900 font-sans tracking-tight">
                        Global Launchpad</h1>
                    <p class="text-gray-500 mt-1">International standardized test preparation for your global education
                        journey.</p>
                </div>
            </div>

            <!-- Tabs -->
            <div class="border-b border-gray-200 mb-8 overflow-x-auto custom-scrollbar">
                <nav class="flex gap-6 md:gap-10 min-w-max" aria-label="Tabs">
                    <button data-target="all"
                        class="tab-btn border-b-[3px] border-[#6366F1] text-[#6366F1] py-4 px-1 text-[15px] font-bold whitespace-nowrap">
                        All Tests
                    </button>
                    <button data-target="english"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        English Proficiency
                    </button>
                    <button data-target="undergraduate"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Undergraduate
                    </button>
                    <button data-target="postgraduate"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Postgraduate
                    </button>
                    <button data-target="language"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Language & Others
                    </button>
                </nav>
            </div>


            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="cards-container">

                <!-- SAT Card -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1"
                    data-category="undergraduate">
                    <div
                        class="relative h-[200px] w-full overflow-hidden bg-blue-50/50 flex items-center justify-center border-b border-gray-100">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 20px 20px;">
                        </div>
                        <i data-lucide="graduation-cap"
                            class="w-20 h-20 text-blue-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-blue-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-blue-100">
                            Undergraduate
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-blue-600 font-bold text-sm tracking-wide bg-blue-50 px-3 py-1 rounded-full">SAT</span>
                        </div>
                        <h3
                            class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                            SAT Prep Excellence</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Master the Digital SAT with our
                            evidence-based strategies, comprehensive math drills, and reading/writing workshops.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                60+ Hours Live Training
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                2000+ Practice Questions
                            </li>
                        </ul>
                        <div class="mt-auto pt-5 border-t border-gray-100 flex gap-3">
                            <a href="sat.php"
                                class="flex-grow inline-block text-center bg-blue-50 text-blue-600 font-bold px-4 py-3 rounded-xl text-sm hover:bg-blue-100 transition-all">Explore</a>
                            <button onclick="openPackageModal('sat')"
                                class="bg-blue-600 text-white font-bold px-4 py-3 rounded-xl text-sm hover:bg-blue-700 transition-all">View
                                Packages</button>
                        </div>
                    </div>
                </div>

                <!-- ACT Card -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1"
                    data-category="undergraduate">
                    <div
                        class="relative h-[200px] w-full overflow-hidden bg-indigo-50/50 flex items-center justify-center border-b border-gray-100">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 20px 20px;">
                        </div>
                        <i data-lucide="target"
                            class="w-20 h-20 text-indigo-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-indigo-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-indigo-100">
                            Undergraduate
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-indigo-600 font-bold text-sm tracking-wide bg-indigo-50 px-3 py-1 rounded-full">ACT</span>
                        </div>
                        <h3
                            class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-indigo-600 transition-colors">
                            ACT Score Booster</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Comprehensive coverage of
                            English, Math, Reading, and Science sections with timed mock tests.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Science Section Mastery
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Rapid Response Techniques
                            </li>
                        </ul>
                        <div class="mt-auto pt-5 border-t border-gray-100 flex gap-3">
                            <a href="act.php"
                                class="flex-grow inline-block text-center bg-indigo-50 text-indigo-600 font-bold px-4 py-3 rounded-xl text-sm hover:bg-indigo-100 transition-all">Explore</a>
                            <button onclick="openPackageModal('act')"
                                class="bg-indigo-600 text-white font-bold px-4 py-3 rounded-xl text-sm hover:bg-indigo-700 transition-all">View
                                Packages</button>
                        </div>
                    </div>
                </div>

                <!-- IELTS Card -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1"
                    data-category="english">
                    <div
                        class="relative h-[200px] w-full overflow-hidden bg-rose-50/50 flex items-center justify-center border-b border-gray-100">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: radial-gradient(#f43f5e 1px, transparent 1px); background-size: 20px 20px;">
                        </div>
                        <i data-lucide="languages"
                            class="w-20 h-20 text-rose-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-rose-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-rose-100">
                            English Proficiency
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-rose-600 font-bold text-sm tracking-wide bg-rose-50 px-3 py-1 rounded-full">IELTS</span>
                        </div>
                        <h3
                            class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-rose-600 transition-colors">
                            IELTS Band 7.5+</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Achieve your target band score
                            with focused training in Listening, Reading, Writing, and Speaking.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Speaking Mock Interviews
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Expert Writing Reviews
                            </li>
                        </ul>
                        <div class="mt-auto pt-5 border-t border-gray-100 flex gap-3">
                            <a href="ielts.php"
                                class="flex-grow inline-block text-center bg-rose-50 text-rose-600 font-bold px-4 py-3 rounded-xl text-sm hover:bg-rose-100 transition-all">Explore</a>
                            <button onclick="openPackageModal('ielts')"
                                class="bg-rose-600 text-white font-bold px-4 py-3 rounded-xl text-sm hover:bg-rose-700 transition-all">View
                                Packages</button>
                        </div>
                    </div>
                </div>

                <!-- TOEFL Card -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1"
                    data-category="english">
                    <div
                        class="relative h-[200px] w-full overflow-hidden bg-violet-50/50 flex items-center justify-center border-b border-gray-100">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: radial-gradient(#8b5cf6 1px, transparent 1px); background-size: 20px 20px;">
                        </div>
                        <i data-lucide="mic"
                            class="w-20 h-20 text-violet-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-violet-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-violet-100">
                            English Proficiency
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-violet-600 font-bold text-sm tracking-wide bg-violet-50 px-3 py-1 rounded-full">TOEFL</span>
                        </div>
                        <h3
                            class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-violet-600 transition-colors">
                            TOEFL PowerScore</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Intensive training for 100+
                            TOEFL iBT scores with real-exam simulations and personalized mentorship.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                10+ Full-length Mock Tests
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Smart Analytics Dashboard
                            </li>
                        </ul>
                        <div class="mt-auto pt-5 border-t border-gray-100 flex gap-3">
                            <a href="toefl.php"
                                class="flex-grow inline-block text-center bg-violet-50 text-violet-600 font-bold px-4 py-3 rounded-xl text-sm hover:bg-violet-100 transition-all">Explore</a>
                            <button onclick="openPackageModal('toefl')"
                                class="bg-violet-600 text-white font-bold px-4 py-3 rounded-xl text-sm hover:bg-violet-700 transition-all">View
                                Packages</button>
                        </div>
                    </div>
                </div>

                <!-- Duolingo Card -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1"
                    data-category="english">
                    <div
                        class="relative h-[200px] w-full overflow-hidden bg-emerald-50/50 flex items-center justify-center border-b border-gray-100">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: radial-gradient(#10b981 1px, transparent 1px); background-size: 20px 20px;">
                        </div>
                        <i data-lucide="bird"
                            class="w-20 h-20 text-emerald-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-emerald-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-emerald-100">
                            English Proficiency
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-emerald-600 font-bold text-sm tracking-wide bg-emerald-50 px-3 py-1 rounded-full">Duolingo</span>
                        </div>
                        <h3
                            class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-emerald-600 transition-colors">
                            DET Mastery</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Fast-track your Duolingo English
                            Test preparation with AI-powered feedback and adaptive practice.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Real-time AI Corrections
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Rapid Scoring Feedback
                            </li>
                        </ul>
                        <div class="mt-auto pt-5 border-t border-gray-100 flex gap-3">
                            <a href="duolingo.php"
                                class="flex-grow inline-block text-center bg-emerald-50 text-emerald-600 font-bold px-4 py-3 rounded-xl text-sm hover:bg-emerald-100 transition-all">Explore</a>
                            <button onclick="openPackageModal('duolingo')"
                                class="bg-emerald-600 text-white font-bold px-4 py-3 rounded-xl text-sm hover:bg-emerald-700 transition-all">View
                                Packages</button>
                        </div>
                    </div>
                </div>

                <!-- GRE Card -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1"
                    data-category="postgraduate">
                    <div
                        class="relative h-[200px] w-full overflow-hidden bg-orange-50/50 flex items-center justify-center border-b border-gray-100">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: radial-gradient(#f97316 1px, transparent 1px); background-size: 20px 20px;">
                        </div>
                        <i data-lucide="brain-circuit"
                            class="w-20 h-20 text-orange-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-orange-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-orange-100">
                            Postgraduate
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-orange-600 font-bold text-sm tracking-wide bg-orange-50 px-3 py-1 rounded-full">GRE</span>
                        </div>
                        <h3
                            class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-orange-600 transition-colors">
                            GRE Smart Score</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Strategy-driven program for 320+
                            GRE scores. Personalized training in Quant, Verbal, and AWA.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                10+ Adaptive Mock Tests
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Vocab Booster Modules
                            </li>
                        </ul>
                        <div class="mt-auto pt-5 border-t border-gray-100 flex gap-3">
                            <a href="gre.php"
                                class="flex-grow inline-block text-center bg-orange-50 text-orange-600 font-bold px-4 py-3 rounded-xl text-sm hover:bg-orange-100 transition-all">Explore</a>
                            <button onclick="openPackageModal('gre')"
                                class="bg-orange-600 text-white font-bold px-4 py-3 rounded-xl text-sm hover:bg-orange-700 transition-all">View
                                Packages</button>
                        </div>
                    </div>
                </div>

                <!-- TOPIK Card -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1"
                    data-category="language">
                    <div
                        class="relative h-[200px] w-full overflow-hidden bg-rose-50/50 flex items-center justify-center border-b border-gray-100">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: radial-gradient(#f43f5e 1px, transparent 1px); background-size: 20px 20px;">
                        </div>
                        <i data-lucide="landmark"
                            class="w-20 h-20 text-rose-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-rose-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-rose-100">
                            Language Mastery
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-rose-600 font-bold text-sm tracking-wide bg-rose-50 px-3 py-1 rounded-full">TOPIK</span>
                        </div>
                        <h3
                            class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-rose-600 transition-colors">
                            Korean Proficiency</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Master the TOPIK Test and unlock
                            your future in Korea with our comprehensive language courses.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Beginner to Advanced Levels
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Test Format & Strategy
                            </li>
                        </ul>
                        <div class="mt-auto pt-5 border-t border-gray-100 flex gap-3">
                            <a href="topik.php"
                                class="flex-grow inline-block text-center bg-rose-50 text-rose-600 font-bold px-4 py-3 rounded-xl text-sm hover:bg-rose-100 transition-all">Explore</a>
                            <button onclick="openPackageModal('topik')"
                                class="bg-rose-600 text-white font-bold px-4 py-3 rounded-xl text-sm hover:bg-rose-700 transition-all">View
                                Packages</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Package Modal -->
    <div id="package-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-[#0B1121]/80 backdrop-blur-sm transition-opacity" onclick="closePackageModal()">
        </div>

        <div class="bg-white rounded-[40px] w-full max-w-5xl max-h-[95vh] overflow-hidden shadow-2xl relative z-10 flex flex-col transform transition-all scale-95 opacity-0 duration-500"
            id="modal-content">

            <!-- Close Button -->
            <button onclick="closePackageModal()"
                class="absolute top-6 right-6 p-2 bg-gray-50 hover:bg-gray-100 rounded-full transition-colors z-20">
                <i data-lucide="x" class="w-5 h-5 text-gray-400"></i>
            </button>

            <!-- Modal Body (Scrollable) -->
            <div class="overflow-y-auto custom-scrollbar flex-grow p-6 md:p-10">
                <!-- Centered Header -->
                <div class="text-center mb-8">
                    <h2 id="modal-title" class="text-2xl md:text-[32px] font-black text-[#0F172A] mb-2 tracking-tight">
                        Choose Your Package</h2>
                    <p id="modal-subtitle" class="text-gray-500 text-base md:text-lg">Select a plan that fits your study
                        goals and timeline.</p>
                </div>

                <!-- Tabs (Conditional) -->
                <div id="modal-tabs" class="flex justify-center gap-2 mb-10 hidden">
                    <!-- Dynamic Tabs -->
                </div>

                <div id="modal-body-content" class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Dynamic Content Loaded Here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();

        // Modal Data
        const packageData = {
            'ielts': {
                title: 'Choose Your Package',
                subtitle: 'Select a plan that fits your study goals and timeline.',
                packages: [
                    {
                        name: 'IELTS Express',
                        subType: '15 DAYS FAST TRACK',
                        icon: 'zap',
                        iconColor: 'blue-600',
                        iconBg: 'blue-50',
                        features: ['15 Hours Live Classes', '5 Full Mock Tests', 'Writing Eval included'],
                        cta: 'https://unidemyglobal.com/login.php?url=IELTS-Express'
                    },
                    {
                        name: 'Band 7.5+ Booster',
                        subType: 'COMPREHENSIVE TRAINING',
                        highlight: 'MOST POPULAR',
                        icon: 'crown',
                        iconColor: 'orange-600',
                        iconBg: 'orange-50',
                        features: ['32 Hours Live classes', '10 Full Mock Tests', 'Unlimited Doubt clearing', 'Career Counseling'],
                        cta: 'https://unidemyglobal.com/login.php?url=IELTS-Booster'
                    },
                    {
                        name: 'IELTS Masterclass',
                        subType: '1-ON-1 PERSONALIZED',
                        icon: 'users',
                        iconColor: 'blue-600',
                        iconBg: 'blue-50',
                        features: ['Private 1-on-1 sessions', '15+ Full Mock Tests', 'Experts Master Trainers', 'Admission support'],
                        cta: 'https://unidemyglobal.com/login.php?url=IELTS-Masterclass'
                    }
                ]
            },
            'toefl': {
                title: 'TOEFL iBT Prep',
                subtitle: 'Achieve 100+ with PowerScore',
                packages: [
                    {
                        name: 'PowerScore Pro',
                        subType: 'INTENSIVE TRAINING',
                        icon: 'zap',
                        iconColor: 'violet-600',
                        iconBg: 'violet-50',
                        highlight: 'RECOMMENDED',
                        features: ['30+ Hours Live Training', '10+ Authentic Mock Tests', '25+ Writing Reviews', 'Speaking Feedback', 'Smart Analytics'],
                        cta: 'https://unidemyglobal.com/login.php?url=TOEFL-PowerScore'
                    }
                ]
            },
            'gre': {
                title: 'GRE General Prep',
                subtitle: 'Aim for 320+ Smart Score',
                packages: [
                    {
                        name: 'Smart Score Elite',
                        subType: 'STRATEGY FOCUSED',
                        icon: 'brain-circuit',
                        iconColor: 'orange-600',
                        iconBg: 'orange-50',
                        highlight: 'STRATEGY FOCUSED',
                        features: ['Quant Shortcuts', 'Verbal Workshops', '10+ Adaptive Mocks', 'Vocab Booster', 'AWA Scored Reviews'],
                        cta: 'https://unidemyglobal.com/login.php?url=GRE-Elite'
                    }
                ]
            },
            'sat': {
                title: 'SAT Preparation',
                subtitle: 'Digital SAT Excellence',
                packages: [
                    {
                        name: 'SAT Digital Elite',
                        subType: 'FULL ACCESS',
                        icon: 'graduation-cap',
                        iconColor: 'blue-600',
                        iconBg: 'blue-50',
                        features: ['60+ Hours Live Prep', '2000+ Practice Questions', '15+ Full Mocks', 'Score Guarantee'],
                        cta: 'sat.php'
                    }
                ]
            },
            'act': {
                title: 'ACT Score Booster',
                subtitle: 'Master all sections',
                packages: [
                    {
                        name: 'ACT Mastery',
                        subType: 'COMPLETE PREP',
                        icon: 'target',
                        iconColor: 'indigo-600',
                        iconBg: 'indigo-50',
                        features: ['Science Section Specialist', 'Timed Section Drills', 'Expert Strategy Guides', '4 Full Mocks'],
                        cta: 'act.php'
                    }
                ]
            },
            'duolingo': {
                title: 'Duolingo Mastery',
                subtitle: 'Fast AI-powered prep',
                packages: [
                    {
                        name: 'DET Express',
                        subType: '2-WEEK INTENSIVE',
                        icon: 'bird',
                        iconColor: 'emerald-600',
                        iconBg: 'emerald-50',
                        features: ['AI-powered feedback', 'Adaptive practice tests', 'Exam Simulations', 'Rapid Feedback'],
                        cta: 'duolingo.php'
                    }
                ]
            },
            'topik': {
                title: 'Korean Proficiency',
                subtitle: 'Unlock your Korean future',
                tabs: [
                    { id: 'all', label: 'All Packages' },
                    { id: 'beginner', label: 'Beginner' },
                    { id: 'advanced', label: 'Advanced' }
                ],
                packages: [
                    {
                        name: 'TOPIK I Mastery',
                        subType: 'LEVEL 1-2',
                        category: 'beginner',
                        icon: 'book',
                        iconColor: 'rose-600',
                        iconBg: 'rose-50',
                        features: ['Beginner survival Korean', 'Core grammar patterns', 'Step-by-step TOPIK I'],
                        cta: 'topik.php'
                    },
                    {
                        name: 'TOPIK II Excellence',
                        subType: 'LEVEL 3-6',
                        category: 'advanced',
                        icon: 'award',
                        iconColor: 'rose-600',
                        iconBg: 'rose-50',
                        features: ['Academic & Professional', 'Advanced writing prep', 'News analysis'],
                        cta: 'topik.php'
                    }
                ]
            }
        };

        function openPackageModal(courseId) {
            const data = packageData[courseId];
            if (!data) return;

            const modal = document.getElementById('package-modal');
            const content = document.getElementById('modal-content');
            const body = document.getElementById('modal-body-content');
            const tabsEl = document.getElementById('modal-tabs');
            const titleEl = document.getElementById('modal-title');
            const subtitleEl = document.getElementById('modal-subtitle');

            // Set Header
            titleEl.textContent = data.title;
            subtitleEl.textContent = data.subtitle;

            // Handle Tabs
            if (data.tabs) {
                tabsEl.classList.remove('hidden');
                tabsEl.innerHTML = data.tabs.map(tab => `
                    <button onclick="filterModalPackages('${courseId}', '${tab.id}')" 
                        class="modal-tab-btn px-6 py-2 rounded-full text-sm font-bold transition-all ${tab.id === 'all' ? 'bg-primary text-white' : 'bg-gray-100 text-gray-500 hover:bg-gray-200'}"
                        data-tab="${tab.id}">
                        ${tab.label}
                    </button>
                `).join('');
            } else {
                tabsEl.classList.add('hidden');
            }

            renderModalPackages(data.packages);

            // Show Modal
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            lucide.createIcons();

            // Animation
            setTimeout(() => {
                content.classList.remove('scale-95', 'opacity-0');
                content.classList.add('scale-100', 'opacity-100');
            }, 10);

            document.body.style.overflow = 'hidden';
        }

        function filterModalPackages(courseId, tabId) {
            const data = packageData[courseId];
            const filtered = tabId === 'all' ? data.packages : data.packages.filter(p => p.category === tabId);

            // Update Tab UI
            const btns = document.querySelectorAll('.modal-tab-btn');
            btns.forEach(btn => {
                if (btn.dataset.tab === tabId) {
                    btn.className = "modal-tab-btn px-6 py-2 rounded-full text-sm font-bold transition-all bg-primary text-white";
                } else {
                    btn.className = "modal-tab-btn px-6 py-2 rounded-full text-sm font-bold transition-all bg-gray-100 text-gray-500 hover:bg-gray-200";
                }
            });

            renderModalPackages(filtered);
            lucide.createIcons();
        }

        function renderModalPackages(packages) {
            const body = document.getElementById('modal-body-content');
            body.innerHTML = packages.map(pkg => `
                <div class="relative group bg-white border ${pkg.highlight ? 'border-primary ring-1 ring-primary' : 'border-gray-100'} rounded-[24px] p-6 md:p-7 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col items-center text-center">
                    ${pkg.highlight ? `
                        <div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-primary text-white text-[10px] font-black px-3 py-1 rounded-full tracking-widest uppercase">
                            ${pkg.highlight}
                        </div>
                    ` : ''}
                    
                    <div class="w-12 h-12 rounded-2xl bg-${pkg.iconBg} flex items-center justify-center mb-5">
                        <i data-lucide="${pkg.icon}" class="w-6 h-6 text-${pkg.iconColor}"></i>
                    </div>

                    <h4 class="text-xl font-black text-[#0F172A] mb-0.5">${pkg.name}</h4>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-5">${pkg.subType}</p>

                    <ul class="space-y-3 mb-8 text-left w-full">
                        ${pkg.features.map(f => `
                            <li class="flex items-start gap-2.5 text-gray-600 font-medium text-sm">
                                <i data-lucide="check" class="w-4 h-4 text-green-500 shrink-0 mt-0.5"></i>
                                <span>${f}</span>
                            </li>
                        `).join('')}
                    </ul>

                    <a href="${pkg.cta}" class="w-full bg-primary hover:bg-blue-700 text-white font-black py-3 rounded-xl transition-all shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 text-center text-sm">Enroll Now</a>
                </div>
            `).join('');

            // Adjust grid columns based on package count
            if (packages.length === 1) {
                body.className = "flex justify-center";
                body.children[0].classList.add('max-w-md', 'w-full');
            } else if (packages.length === 2) {
                body.className = "grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto";
            } else {
                body.className = "grid grid-cols-1 md:grid-cols-3 gap-8";
            }
        }

        function closePackageModal() {
            const modal = document.getElementById('package-modal');
            const content = document.getElementById('modal-content');

            content.classList.remove('scale-100', 'opacity-100');
            content.classList.add('scale-95', 'opacity-0');

            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = '';
            }, 300);
        }

        // Mobile menu toggle logic
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Tab selection logic
        document.addEventListener('DOMContentLoaded', function () {
            const urlParams = new URLSearchParams(window.location.search);
            let tab = urlParams.get('tab');
            const tabs = document.querySelectorAll('nav[aria-label="Tabs"] button');
            const cards = document.querySelectorAll('.course-card');

            function activateTab(tabId) {
                tabs.forEach(t => {
                    t.className = "tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors";
                    if (t.dataset.target === tabId) {
                        t.className = "tab-btn border-b-[3px] border-[#6366F1] text-[#6366F1] py-4 px-1 text-[15px] font-bold whitespace-nowrap";
                    }
                });

                cards.forEach(card => {
                    if (tabId === 'all') {
                        card.style.display = 'flex';
                    } else if (card.dataset.category === tabId) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            tabs.forEach(t => {
                t.addEventListener('click', () => {
                    let target = t.dataset.target;
                    activateTab(target);
                    const url = new URL(window.location);
                    url.searchParams.set('tab', target);
                    window.history.pushState({}, '', url);
                });
            });

            if (tab) {
                activateTab(tab);
            } else {
                activateTab('all');
            }
        });
    </script>
<?php include 'components/footer.php'; ?>
