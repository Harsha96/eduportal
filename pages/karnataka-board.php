<?php
$pageTitle = 'Karnataka Board Programmes | Unidemy Global';
$pageDescription = 'Our premier Karnataka Board programmes spanning across Explorers (Class 1-5), Skill Builders (Class 6-8), and Exam Warriors (Class 9-10).';
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
$base_url = '../';
include '../components/header.php';
?>
<!-- Main Content -->
<main class="w-full pt-28 lg:pt-36 pb-20 bg-white flex-grow">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <!-- Breadcrumbs -->
        <nav class="flex text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center gap-2">
                <li class="inline-flex items-center group">
                    <a href="../index.php" class="inline-flex items-center hover:text-primary transition-colors">
                        <i data-lucide="home" class="w-4 h-4 mr-2"></i>
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i>
                        <span class="ml-2 text-primary font-medium">Karnataka Board</span>
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
                    Karnataka Board Programmes</h1>
                <p class="text-gray-500 mt-1">Foundation courses for students from Class 1 to 12.</p>
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
                    Academic Builders (Class 6-8)
                </button>
                <button data-target="class-9-10"
                    class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                    Academic Achievers (Class 9 & 10)
                </button>
                <button data-target="grade-11-12"
                    class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                    Senior Leaders (Class 11 & 12)
                </button>
            </nav>
        </div>


        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="cards-container">


            <!-- Class 1-5 Card -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-1-5">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="../assets/images/KB_EXP.png" alt="Explorers Foundation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-blue-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-blue-100 z-20">
                        CLASS 1 TO 5
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            onclick="window.location.href='karnataka-board.php'"
                            class="text-blue-600 font-bold text-sm tracking-wide bg-blue-50 px-3 py-1 rounded-full cursor-pointer hover:bg-blue-100 transition-colors">Karnataka
                            Board</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        Explorers Foundation</h3>

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">Early stage conceptual
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
                    </div>

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <!-- Packages Info Section -->
                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                Academic Year
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                                Materials
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                <i data-lucide="video" class="w-3.5 h-3.5"></i>
                                Videos
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - Explorers Foundation (Class 1-5)')"
                            class="w-full bg-blue-50 text-blue-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-blue-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Smart Readers -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-1-5">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="../assets/images/KB_SMR.png" alt="Smart Readers" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-orange-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-orange-100 z-20">
                        class 1 & 2
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-orange-600 font-bold text-sm tracking-wide bg-orange-50 px-3 py-1 rounded-full">Karnataka
                            Board</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        Smart Readers</h3>

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">A fun program that helps children learn sounds, improve reading, and build strong spelling skills.</p>

                        <ul class="space-y-3 mb-8">
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
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i> Academic Year
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="book-open" class="w-3.5 h-3.5"></i> Materials
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - Smart Readers (G1-G2)')"
                            class="w-full bg-orange-50 text-orange-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-orange-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Abacus Mastery Program -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-1-5">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="../assets/images/KB_AB.png" alt="Abacus Mastery Program" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-emerald-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-emerald-100 z-20">
                        BRAIN BOOST
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-emerald-600 font-bold text-sm tracking-wide bg-emerald-50 px-3 py-1 rounded-full">Karnataka
                            Board</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        Abacus Mastery Program</h3>

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">A fun math program where children use an abacus to solve problems quickly, improving their focus and mental math skills.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Hands-on abacus training
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Mental math techniques and tricks
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Speed and accuracy drills
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Concentration-building exercises
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Fun math games and challenges
                            </li>
                        </ul>
                    </div>

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i> Academic Year
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="book-open" class="w-3.5 h-3.5"></i> Materials
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - Abacus Mastery Program (Class 1-5)')"
                            class="w-full bg-emerald-50 text-emerald-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-emerald-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- AI & Robotics Program -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-1-5">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="../assets/images/KB_AI.png" alt="AI & Robotics Program" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-cyan-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-cyan-100 z-20">
                        FUTURE INNOVATORS
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-cyan-600 font-bold text-sm tracking-wide bg-cyan-50 px-3 py-1 rounded-full">Karnataka
                            Board</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        AI & Robotics Program</h3>

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">A hands-on program where children learn to build and program robots, exploring the exciting world of artificial intelligence and technology.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Basic robotics and electronics
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Programming and coding for robots
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Artificial Intelligence (AI) concepts
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Problem-solving through tech projects
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Hands-on robot building workshops
                            </li>
                        </ul>
                    </div>

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i> Academic Year
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="book-open" class="w-3.5 h-3.5"></i> Materials
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - AI & Robotics Program (Class 1-5)')"
                            class="w-full bg-cyan-50 text-cyan-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-cyan-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- STEM Program -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-1-5">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="../assets/images/stem.png" alt="STEM Program" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-rose-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-rose-100 z-20">
                        YOUNG INNOVATORS
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-rose-600 font-bold text-sm tracking-wide bg-rose-50 px-3 py-1 rounded-full">Karnataka
                            Board</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        STEM Program</h3>

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">A hands-on STEM program that teaches science, technology, engineering, and math through fun projects and real-world activities.</p>

                        <!-- Subject Tags -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-2 py-1 rounded-md bg-orange-50 text-orange-600 text-[10px] font-bold border border-orange-100">Science</span>
                            <span class="px-2 py-1 rounded-md bg-blue-50 text-blue-600 text-[10px] font-bold border border-blue-100">Technology</span>
                            <span class="px-2 py-1 rounded-md bg-green-50 text-green-600 text-[10px] font-bold border border-green-100">Engineering</span>
                            <span class="px-2 py-1 rounded-md bg-purple-50 text-purple-600 text-[10px] font-bold border border-purple-100">Maths</span>
                        </div>

                        <ul class="space-y-3 mb-8">
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
                                Fun innovation and creativity workshops
                            </li>
                        </ul>
                    </div>

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i> Academic Year
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="book-open" class="w-3.5 h-3.5"></i> Materials
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - STEM Program (Class 1-5)')"
                            class="w-full bg-rose-50 text-rose-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-rose-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Chess Program -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-1-5">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="../assets/images/KB_CH.png" alt="Chess Program" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-slate-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-slate-100 z-20">
                        CLASS 1 TO 5
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-slate-600 font-bold text-sm tracking-wide bg-slate-50 px-3 py-1 rounded-full">Karnataka
                            Board</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        Chess Program</h3>

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">A fun program where children learn the rules, strategies, and tactics of chess, helping them improve their thinking and problem-solving skills.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Chess rules and basic moves
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Strategic thinking and planning
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Tactical patterns and combinations
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                End-game techniques and principles
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Fun chess tournaments and practice
                            </li>
                        </ul>
                    </div>

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i> Academic Year
                            </span>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="book-open" class="w-3.5 h-3.5"></i> Materials
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - Chess Program (Class 1-5)')"
                            class="w-full bg-slate-50 text-slate-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-slate-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Class 6-8 Card -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-6-8">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="../assets/images/KB_6_8.png" alt="Academic Builders Program" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-indigo-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-indigo-100 z-20">
                        CLASS 6 TO 8
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            onclick="window.location.href='foundation1.php'"
                            class="text-indigo-600 font-bold text-sm tracking-wide bg-indigo-50 px-3 py-1 rounded-full cursor-pointer hover:bg-indigo-100 transition-colors">Karnataka
                            Board + Foundation 1</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-indigo-600 transition-colors">
                        Academic Builders Program</h3>

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">Designed for young learners to build a strong foundation in core subjects like Math, Science, and English through interactive and engaging methods.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Fundamental subject concept building
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Creative and interactive learning
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Confidence-boosting activities
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Basic logic and reasoning tasks
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Fun educational games and projects
                            </li>
                        </ul>
                    </div>

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <!-- Packages Info Section -->
                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                Academic Year
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                                Materials
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                <i data-lucide="video" class="w-3.5 h-3.5"></i>
                                Videos
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="file-text" class="w-3.5 h-3.5"></i>
                                Test Papers
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - Academic Builders Program (Class 6-8)')"
                            class="w-full bg-indigo-50 text-indigo-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-indigo-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Foundation 1 Card (Class 6-8) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-6-8">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <!-- Note: Swapped abstract icon with a student picture per request -->
                    <img src="../assets/images/future_achivers.png" alt="future_achivers" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-rose-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-rose-100 z-20">
                        CLASS 6 TO 8
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            onclick="window.location.href='foundation1.php'"
                            class="text-rose-600 font-bold text-sm tracking-wide bg-rose-50 px-3 py-1 rounded-full cursor-pointer hover:bg-rose-100 transition-colors">Foundation
                            1</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-rose-600 transition-colors">
                        Future Achievers Program</h3>

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">A comprehensive program designed to prepare students for various Olympiad exams by strengthening their concepts and problem-solving abilities.</p>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Advanced level subject preparation
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Olympiad-specific mock tests
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Logical and analytical reasoning drills
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Concept-deepening study sessions
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Subject-wise competitive strategies
                            </li>
                        </ul>
                    </div>

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <!-- Packages Info Section -->
                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                Academic Year
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                                Materials
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                <i data-lucide="video" class="w-3.5 h-3.5"></i>
                                Videos
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - Olympiad Prep (Class 6-8)')"
                            class="w-full bg-rose-50 text-rose-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-rose-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Class 9-10 Card -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-9-10">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="../assets/images/KB_ACH.png" alt="Academic Achievers" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-violet-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-violet-100 z-20">
                        CLASS 9 TO 10
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            onclick="window.location.href='foundation2.php'"
                            class="text-violet-600 font-bold text-sm tracking-wide bg-violet-50 px-3 py-1 rounded-full cursor-pointer hover:bg-violet-100 transition-colors">Karnataka
                            Board + Foundation 2</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-violet-600 transition-colors">
                        Academic Achievers</h3>

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">Focused on helping the students to build strong subject concepts, improve problem-solving skills, and achieve excellent performance in board examinations.</p>

                        <ul class="space-y-3 mb-8">
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
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <!-- Packages Info Section -->
                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                Academic Year
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                                Materials
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                <i data-lucide="video" class="w-3.5 h-3.5"></i>
                                Videos
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="file-text" class="w-3.5 h-3.5"></i>
                                Test Papers
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - Academic Achievers (Class 9-10)')"
                            class="w-full bg-violet-50 text-violet-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-violet-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Foundation 2 Card (Class 9-10) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-9-10">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="../assets/images/KB_9-10.png" alt="IIT-JEE / NEET Starter" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
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

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">An advanced foundation program designed to prepare students for future competitive exams like IIT-JEE and NEET while strengthening their Class 9–10 academic concepts.</p>

                        <ul class="space-y-3 mb-8">
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
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <!-- Packages Info Section -->
                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-50 text-indigo-700 text-xs font-semibold">
                                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                                Academic Year
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
                                Materials
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-amber-50 text-amber-700 text-xs font-semibold">
                                <i data-lucide="video" class="w-3.5 h-3.5"></i>
                                Videos
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-700 text-xs font-semibold">
                                <i data-lucide="file-text" class="w-3.5 h-3.5"></i>
                                Test Papers
                            </span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - IIT-JEE / NEET Starter (Class 9-10)')"
                            class="w-full bg-teal-50 text-teal-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-teal-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Career Achievers Card (Class 11-12) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="grade-11-12">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="../assets/images/KB_new.png" alt="Science, Commerce & Arts Stream" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-fuchsia-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-fuchsia-100 z-20">
                        GRADE 11 TO 12
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-fuchsia-600 font-bold text-sm tracking-wide bg-fuchsia-50 px-3 py-1 rounded-full">Karnataka Board - Science, Commerce & Arts</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-fuchsia-600 transition-colors">
                        Career Achievers</h3>
                    <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">Specialized coaching for Commerce and Arts students focusing on core subjects and career-oriented competitive exams like CA Foundation, CS, and CUET.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Prepares for professional courses
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Expert coaching in Accountancy & Economics
                            </li>
                        </ul>
                    </div>
                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>
                    <!-- Packages Info Section -->
                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2.5 py-1 rounded-lg bg-slate-50 text-slate-600 text-[11px] font-bold border border-slate-100">Accountancy</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-50 text-slate-600 text-[11px] font-bold border border-slate-100">Economics</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-50 text-slate-600 text-[11px] font-bold border border-slate-100">Business</span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - Career Achievers (Grade 11-12)')"
                            class="w-full bg-fuchsia-50 text-fuchsia-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-fuchsia-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div><!-- IIT-JEE Excellence Card (Class 11) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="grade-11-12">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="../assets/images/KB_SR_IIT.png" alt="Engineering Stream" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-blue-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-blue-100 z-20">
                        CLASS 11
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-blue-600 font-bold text-sm tracking-wide bg-blue-50 px-3 py-1 rounded-full">Karnataka Board - Engineering Stream</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        IIT-JEE Excellence</h3>

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">Rigorous preparation for JEE Main & Advanced alongside Karnataka Board exams with expert faculty and advanced study material.</p>

                        <ul class="space-y-3 mb-8">
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

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <!-- Packages Info Section -->
                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2.5 py-1 rounded-lg bg-slate-50 text-slate-600 text-[11px] font-bold border border-slate-100">Math</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-50 text-slate-600 text-[11px] font-bold border border-slate-100">Physics</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-50 text-slate-600 text-[11px] font-bold border border-slate-100">Chemistry</span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - IIT-JEE Excellence (Class 11)')"
                            class="w-full bg-blue-50 text-blue-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-blue-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- NEET Success Program Card (Class 12) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block"
                data-category="grade-11-12">
                <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                    <img src="../assets/images/KB_SR_NEET.png" alt="Medical Stream" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-rose-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-rose-100 z-20">
                        CLASS 12
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-rose-600 font-bold text-sm tracking-wide bg-rose-50 px-3 py-1 rounded-full">Karnataka Board - Medical Stream</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        NEET Success Program</h3>

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">Comprehensive medical entrance preparation with deep focus on Biology, Physics, and Chemistry for top ranks.</p>

                        <ul class="space-y-3 mb-8">
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

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <!-- Packages Info Section -->
                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2.5 py-1 rounded-lg bg-slate-50 text-slate-600 text-[11px] font-bold border border-slate-100">Biology</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-50 text-slate-600 text-[11px] font-bold border border-slate-100">Physics</span>
                            <span class="px-2.5 py-1 rounded-lg bg-slate-50 text-slate-600 text-[11px] font-bold border border-slate-100">Chemistry</span>
                        </div>
                    </div>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Karnataka Board - NEET Success Program (Class 12)')"
                            class="w-full bg-rose-50 text-rose-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-rose-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


            </main>


<script>
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
                    // Check if it was an arrow-right (special case for Karnataka board)
                    if (icon.getAttribute('data-lucide') === 'arrow-right') {
                        icon.setAttribute('data-lucide', 'arrow-up');
                    } else {
                        icon.setAttribute('data-lucide', 'chevron-up');
                    }
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
                    if (icon.getAttribute('data-lucide') === 'arrow-up') {
                        icon.setAttribute('data-lucide', 'arrow-right');
                    } else {
                        icon.setAttribute('data-lucide', 'chevron-down');
                    }
                }
            }
        }
        
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    }

    // Tab selection logic based on URL parameters
    document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        let tab = urlParams.get('tab');
        const tabs = document.querySelectorAll('.tab-btn');
        const cards = document.querySelectorAll('.course-card');

        function activateTab(tabId) {
            if (!tabId) tabId = 'all';

            // Update active tab styles
            tabs.forEach(t => {
                const target = t.getAttribute('data-target');
                if (target === tabId) {
                    t.className = "tab-btn border-b-[3px] border-[#6366F1] text-[#6366F1] py-4 px-1 text-[15px] font-bold whitespace-nowrap transition-colors";
                } else {
                    t.className = "tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors";
                }
            });

            // Filter cards
            cards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (tabId === 'all') {
                    card.style.display = 'flex';
                } else if (category && category.includes(tabId)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });

            // Refresh Lucide for visible cards
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        }

        // Click events for all tabs
        tabs.forEach(t => {
            t.addEventListener('click', function () {
                const target = this.getAttribute('data-target');
                if (target) {
                    activateTab(target);
                    // Update URL parameter without reloading the page
                    const url = new URL(window.location);
                    url.searchParams.set('tab', target);
                    window.history.pushState({}, '', url);
                }
            });
        });

        // Activate initial tab from URL or default to 'all'
        setTimeout(() => activateTab(tab || 'all'), 0);
    });
</script>

<?php include '../components/enrollment-modal.php'; ?>
<?php include '../components/footer.php'; ?>