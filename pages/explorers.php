<?php
$pageTitle = 'Explorers Programs | Unidemy Global';
$pageDescription = 'Discover our premium Explorers Programs for classes 1 to 5. Build strong foundations with interactive learning and expert mentorship.';
$additionalHead = <<<'HEADCONTENT'
<style>
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .dark-glass {
            background: rgba(30, 79, 156, 0.95);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .tab-active {
            color: #1E4F9C;
            border-bottom: 2px solid #1E4F9C;
            font-weight: 600;
        }

        .tab-inactive {
            color: #6B7280;
            border-bottom: 2px solid transparent;
        }

        .tab-inactive:hover {
            color: #1E4F9C;
            border-bottom: 2px solid #E6EFFF;
        }
    </style>
HEADCONTENT;
$base_url = '../';
include '../components/header.php';
?>
    <!-- Main Content -->
    <main class="pt-24 md:pt-32 pb-24 min-h-screen">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Breadcrumb -->
            <div class="flex flex-wrap items-center gap-2 text-sm text-gray-500 mb-8 font-medium breadcrumb-wrap">
                <a href="../index.php" class="hover:text-primary flex items-center gap-1">
                    <i data-lucide="home" class="w-4 h-4"></i>
                </a>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <a href="../index.php#programs" class="hover:text-primary uppercase tracking-wider text-xs">Programs</a>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span class="text-primary uppercase tracking-wider text-xs">Explorers (Class 1-5)</span>
            </div>

            <!-- Header Section -->
            <div class="mb-12 relative z-10">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-4 tracking-tight uppercase">
                    EXPLORERS <span class="text-primary">Programmes</span>
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl">
                    Ignite curiosity and build strong foundational skills with our interactive and expertly crafted
                    courses for young minds.
                </p>
            </div>

            <!-- Tabs -->
            <div class="flex overflow-x-auto gap-8 mb-10 pb-2 scrollbar-hide border-b border-gray-200">
                <button
                    class="pb-3 text-lg whitespace-nowrap tab-active transition-all duration-300 uppercase tracking-wide">All
                    Classes</button>
                <button class="pb-3 text-lg whitespace-nowrap tab-inactive transition-all duration-300">Class 1</button>
                <button class="pb-3 text-lg whitespace-nowrap tab-inactive transition-all duration-300">Class 2</button>
                <button class="pb-3 text-lg whitespace-nowrap tab-inactive transition-all duration-300">Class 3</button>
                <button class="pb-3 text-lg whitespace-nowrap tab-inactive transition-all duration-300">Class 4</button>
                <button class="pb-3 text-lg whitespace-nowrap tab-inactive transition-all duration-300">Class 5</button>
            </div>

            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Foundation & Skill Building</h2>
                <p class="text-gray-600">Hybrid & offline learning with structured syllabus coverage, interactive
                    activities, and personalized mentorship.</p>
            </div>

            <!-- Cards Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card 1: Dark Premium -->
                <div
                    class="dark-glass rounded-3xl overflow-hidden shadow-2xl transition-all duration-500 hover:-translate-y-2 group flex flex-col relative text-white">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/10 to-transparent pointer-events-none">
                    </div>

                    <div class="p-6 pb-2">
                        <div
                            class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-3 py-1.5 rounded-full text-xs font-bold tracking-wider mb-6 border border-white/20">
                            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                            ONLINE & OFFLINE
                        </div>
                    </div>

                    <div class="px-6 flex-grow flex flex-col justify-end min-h-[160px] pb-6 relative z-10">
                        <div class="flex justify-between items-end mb-2">
                            <h3 class="text-secondary font-bold text-lg uppercase tracking-wide">Explorers</h3>
                            <span
                                class="text-xs font-bold tracking-widest border border-white/30 px-2 py-1 rounded">BILINGUAL</span>
                        </div>
                        <h4 class="text-3xl font-extrabold mb-4 text-white">Standard</h4>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-3 text-sm text-white/90 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-secondary shrink-0 mt-0.5"></i>
                                Foundational Numeracy & Literacy
                            </li>
                            <li class="flex items-start gap-3 text-sm text-white/90 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-secondary shrink-0 mt-0.5"></i>
                                Interactive Learning Activities
                            </li>
                            <li class="flex items-start gap-3 text-sm text-white/90 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-secondary shrink-0 mt-0.5"></i>
                                Monthly Progress Reports
                            </li>
                        </ul>
                    </div>

                    <div
                        class="p-6 mt-auto bg-black/20 border-t border-white/10 flex items-center justify-between group-hover:bg-black/30 transition-colors">
                        <div>
                            <span class="text-[14px] font-bold text-secondary">Premium Program</span>
                            <p class="text-[11px] text-gray-400 tracking-wide uppercase mt-1">Inquire for Details</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button
                                class="bg-white text-primary hover:bg-gray-100 font-bold py-3 px-6 rounded-xl transition-all shadow-lg active:scale-95">Book
                                A Seat</button>
                            <button
                                class="w-12 h-12 flex items-center justify-center border border-white/30 rounded-xl hover:bg-white/10 transition-colors"><i
                                    data-lucide="chevron-right" class="w-5 h-5"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Image Banner Light -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.06)] border border-gray-100 transition-all duration-500 hover:shadow-[0_20px_40px_rgba(30,79,156,0.12)] hover:-translate-y-2 group flex flex-col relative text-gray-900 border-b-4 border-b-primary border-t-4 border-t-white">

                    <div class="relative h-56 overflow-hidden">
                        <div class="absolute top-6 left-6 z-20">
                            <div
                                class="inline-flex items-center gap-2 bg-slate-900/80 backdrop-blur-md px-3 py-1.5 rounded-full text-xs font-bold tracking-wider text-white border border-white/10">
                                <i data-lucide="map-pin" class="w-3 h-3 text-secondary"></i>
                                PREMIUM CENTER
                            </div>
                        </div>
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&q=80&w=800"
                            alt="Students in class"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-black/80 to-transparent flex items-end justify-center pb-4">
                            <h4 class="text-2xl font-black text-white uppercase tracking-wider drop-shadow-md">Unidemy
                                Center</h4>
                        </div>
                    </div>

                    <div class="p-6 flex-grow flex flex-col">
                        <div class="flex justify-between items-end mb-6">
                            <h3 class="text-secondary font-bold text-lg uppercase tracking-wide">Explorers</h3>
                            <span
                                class="text-xs font-bold tracking-widest border border-gray-200 text-gray-500 px-2 py-1 rounded">BILINGUAL</span>
                        </div>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-3 text-sm text-gray-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-gray-400 shrink-0 mt-0.5"></i>
                                1-on-1 Dedicated Mentorship
                            </li>
                            <li class="flex items-start gap-3 text-sm text-gray-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-gray-400 shrink-0 mt-0.5"></i>
                                Introduction to Coding Basics
                            </li>
                            <li class="flex items-start gap-3 text-sm text-gray-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-gray-400 shrink-0 mt-0.5"></i>
                                Spoken English & Communication
                            </li>
                        </ul>
                    </div>

                    <div class="p-6 mt-auto bg-gray-50 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="text-[14px] font-bold text-secondary">Premium Program</span>
                            <p class="text-[11px] text-gray-400 tracking-wide uppercase mt-1">Inquire for Details</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button
                                class="bg-[#1A2235] hover:bg-black text-white font-bold py-3 px-6 rounded-xl transition-all shadow-lg active:scale-95">Book
                                A Seat</button>
                            <button
                                class="w-12 h-12 flex items-center justify-center border border-gray-200 rounded-xl hover:bg-gray-100 transition-colors text-gray-600"><i
                                    data-lucide="chevron-right" class="w-5 h-5"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Image Banner Theme 2 -->
                <div
                    class="bg-white rounded-3xl overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.06)] border border-gray-100 transition-all duration-500 hover:shadow-[0_20px_40px_rgba(30,79,156,0.12)] hover:-translate-y-2 group flex flex-col relative text-gray-900 border-b-4 border-b-secondary border-t-4 border-t-white">

                    <div class="relative h-56 overflow-hidden">
                        <div class="absolute top-6 left-6 z-20">
                            <div
                                class="inline-flex items-center gap-2 bg-secondary/90 backdrop-blur-md px-3 py-1.5 rounded-full text-xs font-bold tracking-wider text-white shadow-md border border-orange-400/50">
                                <i data-lucide="globe" class="w-3 h-3 text-white"></i>
                                GLOBAL STANDARD
                            </div>
                        </div>
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&q=80&w=800"
                            alt="Students learning"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-black/80 to-transparent flex items-end justify-center pb-4">
                            <h4 class="text-2xl font-black text-white uppercase tracking-wider drop-shadow-md">Global
                                Scholars</h4>
                        </div>
                    </div>

                    <div class="p-6 flex-grow flex flex-col">
                        <div class="flex justify-between items-end mb-6">
                            <h3 class="text-secondary font-bold text-lg uppercase tracking-wide">Explorers</h3>
                            <span
                                class="text-xs font-bold tracking-widest border border-gray-200 text-gray-500 px-2 py-1 rounded">ENGLISH
                                ONLY</span>
                        </div>

                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-3 text-sm text-gray-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-500 shrink-0 mt-0.5"></i>
                                Foreign Language Intro (French/Spanish)
                            </li>
                            <li class="flex items-start gap-3 text-sm text-gray-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-500 shrink-0 mt-0.5"></i>
                                Critical Thinking & Logic Games
                            </li>
                            <li class="flex items-start gap-3 text-sm text-gray-700 font-medium">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-emerald-500 shrink-0 mt-0.5"></i>
                                Tech-Enabled Smart Classroom
                            </li>
                        </ul>
                    </div>

                    <div class="p-6 mt-auto bg-gray-50 border-t border-gray-100 flex items-center justify-between">
                        <div>
                            <span class="text-[14px] font-bold text-secondary">Premium Program</span>
                            <p class="text-[11px] text-gray-400 tracking-wide uppercase mt-1">Inquire for Details</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button
                                class="bg-[#1A2235] hover:bg-black text-white font-bold py-3 px-6 rounded-xl transition-all shadow-lg active:scale-95">Book
                                A Seat</button>
                            <button
                                class="w-12 h-12 flex items-center justify-center border border-gray-200 rounded-xl hover:bg-gray-100 transition-colors text-gray-600"><i
                                    data-lucide="chevron-right" class="w-5 h-5"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>


<script>
        lucide.createIcons();

        // Mobile menu toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    </script>
<?php include '../components/footer.php'; ?>
