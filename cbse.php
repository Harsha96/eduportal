<?php
$pageTitle = 'CBSE Programmes | Unidemy Global';
$pageDescription = 'Our premier CBSE programmes spanning across Explorers (Class 1-5), Skill Builders (Class 6-8), and Exam Warriors (Class 9-10).';
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
<!-- Mobile Menu -->
<div id="mobile-overlay" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-50 hidden transition-all duration-300">
</div>
<div id="mobile-menu"
    class="fixed top-0 right-0 h-full w-[300px] bg-white z-[60] hidden transform transition-transform duration-300 shadow-2xl">
    <div class="p-6 flex flex-col h-full">
        <div class="flex items-center justify-between mb-8">
            <img src="assets/images/Logo (2).png" alt="Unidemy Global" class="h-8 w-auto mix-blend-multiply">
            <button onclick="document.getElementById('mobile-overlay').click()"
                class="p-2 text-gray-400 hover:text-primary transition-colors">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
        </div>
        <div class="flex flex-col gap-4 font-medium text-gray-700 overflow-y-auto flex-grow custom-scrollbar pr-2">
            <div class="space-y-3">
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest pl-2">School Boards</p>
                <a href="cbse.php?tab=all"
                    class="block px-4 py-2 rounded-xl hover:bg-slate-50 hover:text-primary transition-all">CBSE
                    Programs</a>
                <a href="icse.php?tab=all"
                    class="block px-4 py-2 rounded-xl hover:bg-slate-50 hover:text-primary transition-all">ICSE
                    Programmes</a>
                <a href="karnataka-board.php?tab=all"
                    class="block px-4 py-2 rounded-xl hover:bg-slate-50 hover:text-primary transition-all">Karnataka
                    Board</a>
            </div>
            <div class="space-y-3 pt-2">
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest pl-2">Competitive Exams</p>
                <a href="neet.php?tab=all"
                    class="block px-4 py-2 rounded-xl hover:bg-slate-50 hover:text-primary transition-all">NEET</a>
                <a href="iit-jee.php"
                    class="block px-4 py-2 rounded-xl hover:bg-slate-50 hover:text-primary transition-all">IIT-JEE</a>
            </div>
            <a href="study-abroad.php"
                class="block px-4 py-2 rounded-xl hover:bg-slate-50 hover:text-primary transition-all pt-2">Study
                Abroad</a>
            <a href="internships.php"
                class="block px-4 py-2 rounded-xl hover:bg-slate-50 hover:text-primary transition-all">Internships</a>
            <div class="space-y-3 pt-2">
                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest pl-2">Technology Services
                </p>
                <a href="technology-services.php?service=cloud"
                    class="block px-4 py-2 rounded-xl hover:bg-slate-50 hover:text-primary transition-all">Cloud
                    Development</a>
                <a href="technology-services.php?service=ai-ml"
                    class="block px-4 py-2 rounded-xl hover:bg-slate-50 hover:text-primary transition-all">AI &
                    ML</a>
                <a href="technology-services.php?service=embedded"
                    class="block px-4 py-2 rounded-xl hover:bg-slate-50 hover:text-primary transition-all">Embedded
                    Software</a>
            </div>
        </div>
        <div class="mt-auto pt-6 border-t border-slate-100 space-y-3">
            <a href="https://unidemyglobal.com/login.php"
                class="block w-full text-center py-4 rounded-xl border-2 border-slate-100 font-bold text-slate-600 hover:border-primary hover:text-primary transition-all">Log
                In</a>
            <a href="https://unidemyglobal.com/register.php"
                class="block w-full text-center py-4 rounded-xl bg-secondary text-white font-bold shadow-lg shadow-secondary/20 hover:bg-orange-600 transition-all">Sign
                Up</a>
        </div>
    </div>
</div>
</nav>

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
                        <span class="ml-2 text-primary font-medium">CBSE</span>
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
                    CBSE Programmes</h1>
                <p class="text-gray-500 mt-1">Foundation courses for students from Class 1 to 12.</p>
            </div>
        </div>

        <!-- Tabs -->
        <div class="border-b border-gray-200 mb-6 overflow-x-auto custom-scrollbar">
            <nav class="flex gap-6 md:gap-10 min-w-max" aria-label="Tabs">
                <button data-target="all"
                    class="tab-btn border-b-[3px] border-[#6366F1] text-[#6366F1] py-4 px-1 text-[15px] font-bold whitespace-nowrap">
                    All Classes
                </button>

                <button data-target="class-1-5"
                    class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                    Young Explorers (1-5)
                </button>
                <button data-target="class-6-8"
                    class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                    Academic Builders (6-8)
                </button>
                <button data-target="class-9-10"
                    class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                    Academic Achievers (9-10)
                </button>
                <button data-target="grade-11-12"
                    class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                    Grade 11 & 12
                </button>
            </nav>
        </div>

        <!-- Sub Tabs -->
        <div class="flex items-center gap-2 mb-8 overflow-x-auto custom-scrollbar pb-2">
            <button data-sub="packages"
                class="sub-tab-btn px-6 py-2 rounded-full bg-primary text-white text-sm font-bold shadow-lg shadow-primary/20 transition-all">
                Packages
            </button>
            <button data-sub="online-test"
                class="sub-tab-btn px-6 py-2 rounded-full bg-slate-50 text-slate-600 text-sm font-bold border border-slate-100 hover:bg-slate-100 transition-all">
                Online Test
            </button>
            <button data-sub="quiz"
                class="sub-tab-btn px-6 py-2 rounded-full bg-slate-50 text-slate-600 text-sm font-bold border border-slate-100 hover:bg-slate-100 transition-all">
                Quiz
            </button>
            <button data-sub="game"
                class="sub-tab-btn px-6 py-2 rounded-full bg-slate-50 text-slate-600 text-sm font-bold border border-slate-100 hover:bg-slate-100 transition-all">
                Game
            </button>
        </div>



        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="cards-container">




            <!-- Young Explorers Card (Class 1-5) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-1-5" data-type="packages">
                <div
                    class="relative h-[200px] w-full overflow-hidden border-b border-gray-100"
                    style="background-image: url('assets/images/background/young exploreres.png'); background-size: cover; background-position: center;">
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:from-blue-900/60 transition-all duration-500"></div>
                    <!-- Blue shimmer on hover -->
                    <div class="absolute inset-0 bg-blue-400/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur text-blue-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-blue-100 z-10">
                        CLASS 1 TO 5
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-blue-600 font-bold text-sm tracking-wide bg-blue-50 px-3 py-1 rounded-full">CBSE</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        Young Explorers</h3>
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">Strong academic support with
                            concept-based learning, regular practice, and personalized guidance in core subjects.</p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Concept-based learning
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Regular Worksheet solving
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Repetitive problem solving for mastery
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Builds confidence and strong fundamentals​
                            </li>
                        </ul>
                    </div>
                    <button onclick="toggleContent(this)"
                        class="text-blue-600 font-bold text-[13px] mt-2 mb-4 flex items-center gap-1 hover:underline">
                        Read More <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <!-- Packages Info Section -->
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                <i data-lucide="languages" class="w-3.5 h-3.5"></i>
                                Kannada / Hindi / English
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calculator" class="w-3.5 h-3.5"></i>
                                Mathematics
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="leaf" class="w-3.5 h-3.5"></i>
                                EVS
                            </span>

                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-blue-50 text-blue-700 text-xs font-semibold">
                                <i data-lucide="monitor" class="w-3.5 h-3.5"></i>
                                Computers
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-purple-50 text-purple-700 text-xs font-semibold">
                                <i data-lucide="atom" class="w-3.5 h-3.5"></i>
                                Science
                            </span>

                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('CBSE - Young Explorers (Class 1-5)')"
                            class="w-full bg-blue-50 text-blue-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-blue-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>
            <!-- Smart Readers -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-1-5" data-type="packages">
                <div
                    class="relative h-[200px] w-full overflow-hidden bg-orange-50/50 flex items-center justify-center border-b border-gray-100">
                    <div class="absolute inset-0 opacity-20"
                        style="background-image: radial-gradient(#f97316 1px, transparent 1px); background-size: 20px 20px;">
                    </div>
                    <i data-lucide="languages"
                        class="w-20 h-20 text-orange-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur text-orange-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-orange-100">
                        K1 & K2
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-orange-600 font-bold text-sm tracking-wide bg-orange-50 px-3 py-1 rounded-full">Phonics
                            Program</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        Smart Readers</h3>
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">A fun program that helps
                            children learn sounds, improve reading, and build strong spelling skills.
                        </p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Interactive phonics activities
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Sound recognition exercises
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Word-building games
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Reading practice sessions
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Fun storytelling and vocabulary activities
                            </li>
                        </ul>
                    </div>
                    <button onclick="toggleContent(this)"
                        class="text-orange-600 font-bold text-[13px] mt-2 mb-6 flex items-center gap-1 hover:underline">
                        Read More <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('CBSE - Smart Readers Phonics (K-G2)')"
                            class="w-full bg-orange-50 text-orange-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-orange-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>
            <!-- Abacus Card (Class 1-5) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-1-5" data-type="packages">
                <div
                    class="relative h-[200px] w-full overflow-hidden border-b border-gray-100"
                    style="background-image: url('assets/images/background/abacus.png'); background-size: cover; background-position: center;">
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:from-emerald-900/60 transition-all duration-500"></div>
                    <!-- Emerald shimmer on hover -->
                    <div class="absolute inset-0 bg-emerald-400/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur text-emerald-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-emerald-100 z-10">
                        CLASS 1 TO 5
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-emerald-600 font-bold text-sm tracking-wide bg-emerald-50 px-3 py-1 rounded-full">Brain
                            Boost</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        Abacus Mastery Program</h3>
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">A fun abacus program that
                            improves calculation speed, memory, concentration, and mental math skills in children.</p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Learn step by step using abacus
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Visualize numbers in the mind
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Practice regularly to improve speed
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Improve memory and focus
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Fun learning with activities and games
                            </li>
                        </ul>
                    </div>
                    <button onclick="toggleContent(this)"
                        class="text-emerald-600 font-bold text-[13px] mt-2 mb-6 flex items-center gap-1 hover:underline">
                        Read More <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('CBSE - Abacus Mastery Program (Class 1-5)')"
                            class="w-full bg-emerald-50 text-emerald-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-emerald-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- AI & Robotics Card (Class 1-5) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-1-5" data-type="packages">
                <div
                    class="relative h-[200px] w-full overflow-hidden border-b border-gray-100"
                    style="background-image: url('assets/images/background/robotics.png'); background-size: cover; background-position: center;">
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:from-cyan-900/60 transition-all duration-500"></div>
                    <!-- Cyan shimmer on hover -->
                    <div class="absolute inset-0 bg-cyan-400/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur text-cyan-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-cyan-100 z-10">
                        CLASS 1 TO 5
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-cyan-600 font-bold text-sm tracking-wide bg-cyan-50 px-3 py-1 rounded-full">Future
                            Innovators</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        AI & Robotics Program</h3>
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">A hands-on program that
                            teaches AI, robotics, and coding
                            through fun projects to build problem-solving skills.</p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Project-based learning
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Hands-on robot building activities
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Interactive coding exercises
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Fun AI experiments and challenges
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Team-based problem solving
                            </li>
                        </ul>
                    </div>
                    <button onclick="toggleContent(this)"
                        class="text-cyan-600 font-bold text-[13px] mt-2 mb-6 flex items-center gap-1 hover:underline">
                        Read More <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('CBSE - AI & Robotics Program (Class 1-5)')"
                            class="w-full bg-cyan-50 text-cyan-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-cyan-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- STEM Program Card (Class 1-5) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-1-5" data-type="packages">
                <div
                    class="relative h-[200px] w-full overflow-hidden border-b border-gray-100"
                    style="background-image: url('assets/images/background/stem.png'); background-size: cover; background-position: center;">
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:from-rose-900/60 transition-all duration-500"></div>
                    <!-- Rose shimmer on hover -->
                    <div class="absolute inset-0 bg-rose-400/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur text-rose-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-rose-100 z-10">
                        CLASS 1 TO 5
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-rose-600 font-bold text-sm tracking-wide bg-rose-50 px-3 py-1 rounded-full">Young
                            Innovators</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        STEM Program</h3>
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">A hands-on STEM program that
                            teaches science, technology, engineering, and math through fun projects and real-world
                            activities.</p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Project-based STEM learning
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Hands-on experiments and activities
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Engineering design challenges
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Collaborative problem-solving tasks
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Fun innovation and creativity workshops​
                            </li>
                        </ul>
                    </div>
                    <button onclick="toggleContent(this)"
                        class="text-rose-600 font-bold text-[13px] mt-2 mb-4 flex items-center gap-1 hover:underline">
                        Read More <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <!-- STEM Subjects Info Section -->
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-purple-50 text-purple-700 text-xs font-semibold">
                                <i data-lucide="atom" class="w-3.5 h-3.5"></i>
                                Science
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-blue-50 text-blue-700 text-xs font-semibold">
                                <i data-lucide="cpu" class="w-3.5 h-3.5"></i>
                                Technology
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                <i data-lucide="wrench" class="w-3.5 h-3.5"></i>
                                Engineering
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calculator" class="w-3.5 h-3.5"></i>
                                Maths
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('CBSE - STEM Program (Class 1-5)')"
                            class="w-full bg-rose-50 text-rose-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-rose-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Chess Program Card (Class 1-5) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-1-5" data-type="packages">
                <div
                    class="relative h-[200px] w-full overflow-hidden border-b border-gray-100"
                    style="background-image: url('assets/images/background/chess.png'); background-size: cover; background-position: center;">
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:from-slate-900/60 transition-all duration-500"></div>
                    <!-- Slate shimmer on hover -->
                    <div class="absolute inset-0 bg-slate-400/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur text-slate-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-slate-100 z-10">
                        CLASS 1 TO 5
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-slate-600 font-bold text-sm tracking-wide bg-slate-50 px-3 py-1 rounded-full">Strategic
                            Minds</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        Chess Program</h3>
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">A program that helps students
                            improve thinking, focus, and decision-making through chess practice.</p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Step-by-step chess level training
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Interactive practice games
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Puzzle-solving exercises
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Tournament-style gameplay
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Strategy analysis and guidance
                            </li>
                        </ul>
                    </div>
                    <button onclick="toggleContent(this)"
                        class="text-slate-600 font-bold text-[13px] mt-2 mb-6 flex items-center gap-1 hover:underline">
                        Read More <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('CBSE - Chess Program (Class 1-5)')"
                            class="w-full bg-slate-50 text-slate-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-slate-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Academic Builders Card (Class 6-8) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-6-8" data-type="packages">
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
                            class="text-indigo-600 font-bold text-sm tracking-wide bg-indigo-50 px-3 py-1 rounded-full">CBSE
                            Board</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-indigo-600 transition-colors">
                        Academic Builders Program</h3>
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">A program that strengthens
                            basic concepts and improves
                            problem-solving skills in Maths, science, and reasoning.</p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Concept-based classroom teaching
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Regular worksheets and practice sessions
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Problem-solving and reasoning exercises
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Periodic assessments and progress tracking
                            </li>
                        </ul>
                    </div>
                    <button onclick="toggleContent(this)"
                        class="text-indigo-600 font-bold text-[13px] mt-2 mb-4 flex items-center gap-1 hover:underline">
                        Read More <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <!-- Packages Info Section -->
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                <i data-lucide="languages" class="w-3.5 h-3.5"></i>
                                Kannada / Hindi / English
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calculator" class="w-3.5 h-3.5"></i>
                                Mathematics
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="atom" class="w-3.5 h-3.5"></i>
                                Science
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('CBSE - Academic Builders Program (Class 6-8)')"
                            class="w-full bg-indigo-50 text-indigo-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-indigo-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Foundation Level 1 Card (Class 6-8) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-6-8" data-type="packages">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <!-- Note: Swapped abstract icon with a student picture per request -->
                    <img src="assets/images/future_achivers.png" alt="future_achivers" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-rose-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-rose-100 z-20">
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
                        Future Achievers Program</h3>
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">A program that builds strong
                            basics in Maths to prepare
                            students for future competitive exams.​</p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Concept-based teaching methodology​
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Competitive exam-oriented problem solving​

                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Regular practice sheets and assignments​

                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Weekly tests and performance analysis
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Olympiad and entrance exam preparation support
                            </li>
                        </ul>
                    </div>
                    <button onclick="toggleContent(this)"
                        class="text-rose-600 font-bold text-[13px] mt-2 mb-6 flex items-center gap-1 hover:underline">
                        Read More <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <!-- Packages Info Section -->
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calculator" class="w-3.5 h-3.5"></i>
                                Mathematics
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="atom" class="w-3.5 h-3.5"></i>
                                Science
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('CBSE - Future Achievers Foundation L1 (Class 6-8)')"
                            class="w-full bg-rose-50 text-rose-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-rose-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Academic Achievers Card (Class 9-10) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-9-10" data-type="packages">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="assets/images/9_to_10.png" alt="Academic Achievers" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-violet-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-violet-100 z-20">
                        CLASS 9 TO 10
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-violet-600 font-bold text-sm tracking-wide bg-violet-50 px-3 py-1 rounded-full">CBSE
                            Board</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-violet-600 transition-colors">
                        Academic Achievers</h3>
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">Focused on helping the
                            students to build strong subject concepts, improve problem-solving skills, and achieve
                            excellent performance in board examinations.</p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Concept-based teaching with detailed explanations
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Regular worksheets and problem-solving sessions​
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Chapter-wise tests and board exam mock papers
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Doubt clearing and personalized guidance
                            </li>
                        </ul>
                    </div>
                    <button onclick="toggleContent(this)"
                        class="text-violet-600 font-bold text-[13px] mt-2 mb-4 flex items-center gap-1 hover:underline">
                        Read More <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <!-- Subjects Info Section -->
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                <i data-lucide="languages" class="w-3.5 h-3.5"></i>
                                Kannada / Hindi
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calculator" class="w-3.5 h-3.5"></i>
                                Mathematics
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="atom" class="w-3.5 h-3.5"></i>
                                Science
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('CBSE - Academic Achievers (Class 9-10)')"
                            class="w-full bg-violet-50 text-violet-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-violet-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Foundation Level 2 Card (Class 9-10) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-9-10" data-type="packages">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="assets/images/iit_jee.png" alt="IIT-JEE Starter" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-teal-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-teal-100 z-20">
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
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">An advanced foundation
                            program designed to prepare students
                            for future competitive exams like IIT-JEE and NEET while
                            strengthening their Class 9–10 academic concepts.</p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Concept-based teaching methodology
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Integrated board + competitive exam preparation
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Regular practice worksheets and assignments
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Weekly tests and performance tracking
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Doubt clearing and mentoring sessions
                            </li>
                        </ul>
                    </div>
                    <button onclick="toggleContent(this)"
                        class="text-violet-600 font-bold text-[13px] mt-2 mb-4 flex items-center gap-1 hover:underline">
                        Read More <i data-lucide="chevron-down" class="w-4 h-4"></i>
                    </button>
                    <!-- Subjects Info Section -->
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calculator" class="w-3.5 h-3.5"></i>
                                Mathematics
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="atom" class="w-3.5 h-3.5"></i>
                                Science
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button
                            onclick="openEnrollmentModal('CBSE - IIT-JEE / NEET Starter Foundation L2 (Class 9-10)')"
                            class="w-full bg-teal-50 text-teal-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-teal-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Atom Builder Game Card (Class 9-10 Game) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 hidden"
                data-category="class-9-10" data-type="game">
                <div
                    class="relative h-[200px] w-full overflow-hidden bg-indigo-900 flex items-center justify-center border-b border-gray-800">
                    <div class="absolute inset-0 opacity-20"
                        style="background-image: radial-gradient(#fff 1px, transparent 1px); background-size: 30px 30px;">
                    </div>
                    <!-- Animated Atom Icon replacement -->
                    <div class="relative w-24 h-24 flex items-center justify-center">
                        <div
                            class="absolute inset-0 border-2 border-indigo-400/30 rounded-full animate-[spin_3s_linear_infinite]">
                        </div>
                        <div
                            class="absolute inset-2 border-2 border-indigo-400/40 rounded-full animate-[spin_2s_linear_infinite_reverse]">
                        </div>
                        <div class="w-6 h-6 bg-rose-500 rounded-full shadow-[0_0_15px_rgba(244,63,94,0.6)] z-10"></div>
                        <div
                            class="absolute w-3 h-3 bg-blue-400 rounded-full -top-1 left-1/2 -translate-x-1/2 shadow-[0_0_10px_rgba(96,165,250,0.6)]">
                        </div>
                    </div>
                    <div
                        class="absolute top-4 left-4 bg-indigo-500/20 backdrop-blur text-indigo-200 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-indigo-400/20">
                        INTERACTIVE GAME
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow bg-indigo-950 text-white">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-indigo-400 font-bold text-sm tracking-wide bg-indigo-900/50 px-3 py-1 rounded-full border border-indigo-500/30">Science
                            Lab</span>
                    </div>
                    <h3 class="text-[22px] font-bold mb-3 leading-tight group-hover:text-indigo-400 transition-colors">
                        Build an Atom</h3>
                    <div class="collapsible-wrapper expanded">
                        <p class="text-sm text-indigo-200/80 mb-4 leading-relaxed line-clamp-3 font-medium">Step into
                            the
                            virtual lab and build elements from scratch by adding protons, neutrons, and electrons.
                            Master
                            the atomic structure!</p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start text-[14px] text-indigo-100 font-medium">
                                <i data-lucide="zap" class="w-4 h-4 mr-2.5 text-amber-400 shrink-0 mt-0.5"></i>
                                Real-time Nucleus Builder
                            </li>
                            <li class="flex items-start text-[14px] text-indigo-100 font-medium">
                                <i data-lucide="shield-check"
                                    class="w-4 h-4 mr-2.5 text-emerald-400 shrink-0 mt-0.5"></i>
                                Stability & Charge Analysis
                            </li>
                        </ul>
                    </div>
                    <div class="mt-auto">
                        <a href="atom-builder.php"
                            class="inline-flex items-center justify-center w-full bg-white text-indigo-950 font-bold px-5 py-3 rounded-xl text-sm hover:bg-indigo-50 transition-all gap-2 group/btn">
                            Play Now
                            <i data-lucide="play"
                                class="w-4 h-4 fill-current transition-transform group-hover/btn:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Grade 11-12 Card 1: Engineering -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="grade-11-12" data-type="packages">
                <div
                    class="relative h-[200px] w-full overflow-hidden bg-primary/5 flex items-center justify-center border-b border-gray-100">
                    <div class="absolute inset-0 opacity-20"
                        style="background-image: radial-gradient(#1e4f9c 1px, transparent 1px); background-size: 20px 20px;">
                    </div>
                    <i data-lucide="binary"
                        class="w-20 h-20 text-primary relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur text-primary text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-blue-100">
                        GRADE 11 TO 12
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-primary font-bold text-sm tracking-wide bg-blue-50 px-3 py-1 rounded-full">Engineering
                            Stream</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        IIT-JEE Excellence</h3>
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">Rigorous preparation for JEE
                            Main
                            & Advanced alongside CBSE board exams with expert faculty and advanced study material.</p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Integrated board & entrance prep
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Advanced numeric & logical mastery
                            </li>
                        </ul>
                    </div>
                    <!-- Subjects Info Section -->
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="atom" class="w-3.5 h-3.5"></i>
                                Physics
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="funnel" class="w-3.5 h-3.5"></i>
                                Chemistry
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="calculator" class="w-3.5 h-3.5"></i>
                                Mathematics
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('CBSE - IIT-JEE Excellence (Grade 11-12)')"
                            class="w-full bg-blue-50 text-blue-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-blue-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Grade 11-12 Card 2: Medical -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="grade-11-12" data-type="packages">
                <div
                    class="relative h-[200px] w-full overflow-hidden bg-rose-50/50 flex items-center justify-center border-b border-gray-100">
                    <div class="absolute inset-0 opacity-20"
                        style="background-image: radial-gradient(#ef4444 1px, transparent 1px); background-size: 20px 20px;">
                    </div>
                    <i data-lucide="heart-pulse"
                        class="w-20 h-20 text-rose-500 relative z-10 group-hover:scale-110 transition-transform duration-500"></i>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur text-rose-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-rose-100">
                        GRADE 11 TO 12
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-rose-600 font-bold text-sm tracking-wide bg-rose-50 px-3 py-1 rounded-full">Medical
                            Stream</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        NEET Success Program</h3>
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">Comprehensive medical
                            entrance
                            preparation with deep focus on Biology, Physics, and Chemistry for top ranks.</p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Expert Medical faculty
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Extensive mock test series
                            </li>
                        </ul>
                    </div>
                    <!-- Subjects Info Section -->
                    <div class="mt-4 pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="atom" class="w-3.5 h-3.5"></i>
                                Physics
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="funnel" class="w-3.5 h-3.5"></i>
                                Chemistry
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="heart-pulse" class="w-3.5 h-3.5"></i>
                                Biology
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('CBSE - NEET Success Program (Grade 11-12)')"
                            class="w-full bg-rose-50 text-rose-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-rose-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Empty State Placeholder -->
            <div id="no-content-msg" class="hidden col-span-full py-20 text-center">
                <div
                    class="w-20 h-20 bg-slate-50 rounded-3xl flex items-center justify-center mx-auto mb-4 border border-slate-100">
                    <i data-lucide="layers" class="w-10 h-10 text-slate-300"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-2 font-sans">Coming Soon!</h3>
                <p class="text-slate-500 max-w-sm mx-auto">We are currently curating the best content for this section.
                    Stay
                    tuned for updates!</p>
            </div>

        </div>
    </div>
</main>


<script>
    // Tab nested filtering logic
    document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        let currentTab = urlParams.get('tab') || 'all';
        let currentSub = urlParams.get('subtab') || 'packages';

        const tabs = document.querySelectorAll('.tab-btn');
        const subTabs = document.querySelectorAll('.sub-tab-btn');
        const cards = document.querySelectorAll('.course-card');
        const noContentMsg = document.getElementById('no-content-msg');

        function applyFilters() {
            let visibleCount = 0;

            // Update Main Tabs Styles
            tabs.forEach(t => {
                if (t.dataset.target === currentTab) {
                    t.className = "tab-btn border-b-[3px] border-[#6366F1] text-[#6366F1] py-4 px-1 text-[15px] font-bold whitespace-nowrap";
                } else {
                    t.className = "tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors";
                }
            });

            // Update Sub Tabs Styles
            subTabs.forEach(s => {
                if (s.dataset.sub === currentSub) {
                    s.className = "sub-tab-btn px-6 py-2 rounded-full bg-primary text-white text-sm font-bold shadow-lg shadow-primary/20 transition-all";
                } else {
                    s.className = "sub-tab-btn px-6 py-2 rounded-full bg-slate-50 text-slate-600 text-sm font-bold border border-slate-100 hover:bg-slate-100 transition-all";
                }
            });

            // Filter cards
            cards.forEach(card => {
                const matchesTab = (currentTab === 'all' || card.dataset.category.includes(currentTab));
                const matchesSub = (card.dataset.type === currentSub);

                if (matchesTab && matchesSub) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Handle empty state
            if (visibleCount === 0) {
                noContentMsg.classList.remove('hidden');
            } else {
                noContentMsg.classList.add('hidden');
            }

            // Update URL
            const url = new URL(window.location);
            if (currentTab === 'all') url.searchParams.delete('tab');
            else url.searchParams.set('tab', currentTab);

            if (currentSub === 'packages') url.searchParams.delete('subtab');
            else url.searchParams.set('subtab', currentSub);

            window.history.pushState({}, '', url);

            // Refresh Lucide for dynamic elements if any
            lucide.createIcons();
        }

        // Click events for main tabs
        tabs.forEach(t => {
            t.addEventListener('click', () => {
                currentTab = t.dataset.target;
                currentSub = 'packages'; // Reset sub-tab when main tab changes
                applyFilters();
            });
        });

        // Click events for sub tabs
        subTabs.forEach(s => {
            s.addEventListener('click', () => {
                currentSub = s.dataset.sub;
                applyFilters();
            });
        });

        // Initial apply
        applyFilters();
    });


    function toggleContent(btn) {
        const wrapper = btn.previousElementSibling;
        const isCollapsed = wrapper.classList.contains('collapsed');

        if (isCollapsed) {
            wrapper.classList.remove('collapsed');
            wrapper.classList.add('expanded');

            // Adjust maxHeight for smooth transition
            wrapper.style.maxHeight = wrapper.scrollHeight + "px";

            // Handle different button structures
            if (btn.querySelector('span')) {
                btn.querySelector('span').textContent = 'Read Less';
            } else {
                btn.innerHTML = 'Read Less <i data-lucide="chevron-up" class="w-4 h-4"></i>';
            }

            if (btn.querySelector('i')) {
                const icon = btn.querySelector('i');
                if (icon.hasAttribute('data-lucide')) {
                    icon.setAttribute('data-lucide', 'chevron-up');
                }
            }
        } else {
            wrapper.classList.remove('expanded');
            wrapper.classList.add('collapsed');

            // Reset maxHeight
            wrapper.style.maxHeight = "200px";

            if (btn.querySelector('span')) {
                btn.querySelector('span').textContent = 'Read More';
            } else {
                btn.innerHTML = 'Read More <i data-lucide="chevron-down" class="w-4 h-4"></i>';
            }

            if (btn.querySelector('i')) {
                const icon = btn.querySelector('i');
                if (icon.hasAttribute('data-lucide')) {
                    icon.setAttribute('data-lucide', 'chevron-down');
                }
            }
        }

        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    }
</script>
<?php include 'components/enrollment-modal.php'; ?>
<?php include 'components/footer.php'; ?>