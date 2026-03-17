<?php
$pageTitle = 'ICSE Programmes | Unidemy Global';
$pageDescription = 'Our premier ICSE programmes spanning across Explorers (Class 1-5), Skill Builders (Class 6-8), and Exam Warriors (Class 9-10).';
$additionalHead = <<<'HEADCONTENT'
<style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
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
                            <span class="ml-2 text-primary font-medium">ICSE</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Title -->
            <div class="flex items-center gap-4 mb-8">
                <div
                    class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center shrink-0 border border-blue-100">
                    <i data-lucide="book-open" class="w-8 h-8 text-blue-600"></i>
                </div>
                <div>
                    <h1 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-gray-900 font-sans tracking-tight">
                        ICSE Programmes</h1>
                    <p class="text-gray-500 mt-1">Foundation courses for students from Class 1 to 10.</p>
                </div>
            </div>

            <!-- Tabs -->
            <div class="border-b border-gray-200 mb-8 overflow-x-auto custom-scrollbar">
                <nav class="flex gap-6 md:gap-10 min-w-max" aria-label="Tabs">
                    <button data-target="all"
                        class="tab-btn border-b-[3px] border-[#6366F1] text-[#6366F1] py-4 px-1 text-[15px] font-bold whitespace-nowrap">
                        All Classes
                    </button>
                    <button data-target="class-1-5"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Explorers (Class 1-5)
                    </button>
                    <button data-target="class-6-8"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Skill Builders (Class 6-8)
                    </button>
                    <button data-target="class-9-10"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Exam Warriors (Class 9-10)
                    </button>
                </nav>
            </div>


            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="cards-container">

                <!-- Class 1-5 Card -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                    data-category="class-1-5">
                    <div
                        class="relative h-[200px] w-full overflow-hidden bg-blue-50/50 flex items-center justify-center border-b border-gray-100">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: radial-gradient(#3b82f6 1px, transparent 1px); background-size: 20px 20px;">
                        </div>
                        <i data-lucide="compass"
                            class="w-20 h-20 text-blue-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-blue-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-blue-100">
                            CLASS 1 TO 5
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-blue-600 font-bold text-sm tracking-wide bg-blue-50 px-3 py-1 rounded-full">ICSE</span>
                        </div>
                        <h3
                            class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                            Explorers Foundation</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Early stage conceptual
                            development focused on building a strong academic foundation through interactive learning
                            methodologies.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Interactive visual learning
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Foundational mathematics & science
                            </li>
                        </ul>
                        <!-- Packages Info Section -->
                        <div class="mt-4 pt-4 border-t border-gray-100">
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                    <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                    Academic Year
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                    <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                                    Materials
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                    <i data-lucide="video" class="w-3.5 h-3.5"></i>
                                    Videos
                                </span>
                            </div>
                        </div>
                        <div class="mt-auto pt-5 border-t border-gray-100">
                            <button
                                onclick="openEnrollmentModal('ICSE - Explorers Foundation (Class 1-5)')" class="w-full bg-blue-50 text-blue-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-blue-600 hover:text-white transition-all">Enroll Request</button>
                        </div>
                    </div>
                </div>

                <!-- Class 6-8 Card -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                    data-category="class-6-8">
                    <div
                        class="relative h-[200px] w-full overflow-hidden bg-indigo-50/50 flex items-center justify-center border-b border-gray-100">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 20px 20px;">
                        </div>
                        <i data-lucide="layout-template"
                            class="w-20 h-20 text-indigo-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-indigo-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-indigo-100">
                            CLASS 6 TO 8
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-indigo-600 font-bold text-sm tracking-wide bg-indigo-50 px-3 py-1 rounded-full">ICSE
                                + Foundation 1</span>
                        </div>
                        <h3
                            class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-indigo-600 transition-colors">
                            Skill Builders Program</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Transition into advanced logic
                            building. Focuses on Olympiads readiness and deep conceptual mastery in STEM.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Introduction to analytical reasoning
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Olympiad level problem solving
                            </li>
                        </ul>
                        <!-- Packages Info Section -->
                        <div class="mt-4 pt-4 border-t border-gray-100">
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                    <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                    Academic Year
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                    <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                                    Materials
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                    <i data-lucide="video" class="w-3.5 h-3.5"></i>
                                    Videos
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                    <i data-lucide="file-text" class="w-3.5 h-3.5"></i>
                                    Test Papers
                                </span>
                            </div>
                        </div>
                        <div class="mt-auto pt-5 border-t border-gray-100">
                            <button
                                onclick="openEnrollmentModal('ICSE - Skill Builders Program (Class 6-8)')" class="w-full bg-indigo-50 text-indigo-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-indigo-600 hover:text-white transition-all">Enroll Request</button>
                        </div>
                    </div>
                </div>

                <!-- Foundation 1 Card (Class 6-8) -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                    data-category="class-6-8">
                    <div
                        class="relative h-[200px] w-full overflow-hidden bg-rose-50/50 flex items-center justify-center border-b border-gray-100">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: radial-gradient(#f43f5e 1px, transparent 1px); background-size: 20px 20px;">
                        </div>
                        <i data-lucide="microscope"
                            class="w-20 h-20 text-rose-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-rose-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-rose-100">
                            CLASS 6 TO 8
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-rose-600 font-bold text-sm tracking-wide bg-rose-50 px-3 py-1 rounded-full">Foundation
                                1</span>
                        </div>
                        <h3
                            class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-rose-600 transition-colors">
                            Olympiad Prep</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Dedicated coaching for national
                            and international Olympiads building competitive temperament.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Expert Olympiad faculty
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Mock tests & detailed analytics
                            </li>
                        </ul>
                        <!-- Packages Info Section -->
                        <div class="mt-4 pt-4 border-t border-gray-100">
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                    <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                    Academic Year
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                    <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                                    Materials
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                    <i data-lucide="video" class="w-3.5 h-3.5"></i>
                                    Videos
                                </span>
                            </div>
                        </div>
                        <div class="mt-auto pt-5 border-t border-gray-100">
                            <button
                                onclick="openEnrollmentModal('ICSE - Olympiad Prep (Class 6-8)')" class="w-full bg-rose-50 text-rose-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-rose-600 hover:text-white transition-all">Enroll Request</button>
                        </div>
                    </div>
                </div>

                <!-- Class 9-10 Card -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                    data-category="class-9-10">
                    <div
                        class="relative h-[200px] w-full overflow-hidden bg-violet-50/50 flex items-center justify-center border-b border-gray-100">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: radial-gradient(#8b5cf6 1px, transparent 1px); background-size: 20px 20px;">
                        </div>
                        <i data-lucide="sword"
                            class="w-20 h-20 text-violet-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-violet-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-violet-100">
                            CLASS 9 TO 10
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-violet-600 font-bold text-sm tracking-wide bg-violet-50 px-3 py-1 rounded-full">ICSE
                                + Foundation 2</span>
                        </div>
                        <h3
                            class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-violet-600 transition-colors">
                            Exam Warriors</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Board exam mastery paired with
                            rigorous NTSE & early IIT-JEE/NEET foundation training.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Board Exam Strategy & Mocks
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Early preparation for competitive exams
                            </li>
                        </ul>
                        <!-- Packages Info Section -->
                        <div class="mt-4 pt-4 border-t border-gray-100">
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                    <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                    Academic Year
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                    <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                                    Materials
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                    <i data-lucide="video" class="w-3.5 h-3.5"></i>
                                    Videos
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                    <i data-lucide="file-text" class="w-3.5 h-3.5"></i>
                                    Test Papers
                                </span>
                            </div>
                        </div>
                        <div class="mt-auto pt-5 border-t border-gray-100">
                            <button
                                onclick="openEnrollmentModal('ICSE - Exam Warriors (Class 9-10)')" class="w-full bg-violet-50 text-violet-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-violet-600 hover:text-white transition-all">Enroll Request</button>
                        </div>
                    </div>
                </div>

                <!-- Foundation 2 Card (Class 9-10) -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                    data-category="class-9-10">
                    <div
                        class="relative h-[200px] w-full overflow-hidden bg-teal-50/50 flex items-center justify-center border-b border-gray-100">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: radial-gradient(#14b8a6 1px, transparent 1px); background-size: 20px 20px;">
                        </div>
                        <i data-lucide="test-tubes"
                            class="w-20 h-20 text-teal-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur text-teal-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-teal-100">
                            CLASS 9 TO 10
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span
                                class="text-teal-600 font-bold text-sm tracking-wide bg-teal-50 px-3 py-1 rounded-full">Foundation
                                2</span>
                        </div>
                        <h3
                            class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-teal-600 transition-colors">
                            IIT-JEE / NEET Starter</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow leading-relaxed">Get a head start on competitive
                            engineering and medical entrance exams with specialized training.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Core concept clarification
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Integrated syllabus mapping
                            </li>
                        </ul>
                        <!-- Packages Info Section -->
                        <div class="mt-4 pt-4 border-t border-gray-100">
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                    <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                    Academic Year
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                    <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                                    Materials
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                    <i data-lucide="video" class="w-3.5 h-3.5"></i>
                                    Videos
                                </span>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                    <i data-lucide="file-text" class="w-3.5 h-3.5"></i>
                                    Test Papers
                                </span>
                            </div>
                        </div>
                        <div class="mt-auto pt-5 border-t border-gray-100">
                            <button
                                onclick="openEnrollmentModal('ICSE - IIT-JEE / NEET Starter (Class 9-10)')" class="w-full bg-teal-50 text-teal-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-teal-600 hover:text-white transition-all">Enroll Request</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>


<script>
        // Tab selection logic based on URL parameters
        document.addEventListener('DOMContentLoaded', function () {
            const urlParams = new URLSearchParams(window.location.search);
            let tab = urlParams.get('tab');
            const tabs = document.querySelectorAll('nav[aria-label="Tabs"] button');
            const cards = document.querySelectorAll('.course-card');

            function activateTab(tabId) {
                // Update active tab styles
                tabs.forEach(t => {
                    t.className = "tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors";
                    if (t.dataset.target === tabId) {
                        t.className = "tab-btn border-b-[3px] border-[#6366F1] text-[#6366F1] py-4 px-1 text-[15px] font-bold whitespace-nowrap";
                    }
                });

                // Filter cards
                cards.forEach(card => {
                    if (tabId === 'all') {
                        card.style.display = 'flex';
                    } else if (card.dataset.category.includes(tabId)) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            // Click events for all tabs
            tabs.forEach(t => {
                t.addEventListener('click', () => {
                    let target = t.dataset.target;
                    activateTab(target);
                    // Update URL parameter without reloading the page
                    const url = new URL(window.location);
                    url.searchParams.set('tab', target);
                    window.history.pushState({}, '', url);
                });
            });

            // Activate initial tab from URL or default to 'all'
            if (tab) {
                activateTab(tab);
            } else {
                activateTab('all');
            }
        });
    </script>
<?php include 'components/enrollment-modal.php'; ?>
<?php include 'components/footer.php'; ?>

