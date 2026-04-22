<?php
$pageTitle = 'Foundation 1 (Class 6-8) | Unidemy Global';
$pageDescription = 'Build a strong competitive edge with our Foundation 1 programmes for Class 6-8. Focused on Olympiads, NTT and early conceptual mastery.';
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
            border-radius: 4px;
        }
    </style>
HEADCONTENT;
$base_url = '../';
include '../components/header.php';
?>
    <main class="w-full pt-28 lg:pt-36 pb-20 bg-white flex-grow">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
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
                            <span class="ml-2 text-primary font-medium uppercase tracking-wider text-xs">Foundation 1</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="flex items-center gap-4 mb-8">
                <div class="w-16 h-16 rounded-2xl bg-indigo-50 flex items-center justify-center shrink-0 border border-indigo-100">
                    <i data-lucide="layout-template" class="w-8 h-8 text-indigo-600"></i>
                </div>
                <div>
                    <h1 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-gray-900 font-sans tracking-tight uppercase">
                        Foundation 1 <span class="text-primary">Programmes</span></h1>
                    <p class="text-gray-500 mt-1">Accelerated logical reasoning & competitive prep for Class 6-8.</p>
                </div>
            </div>

            <div class="border-b border-gray-200 mb-8 overflow-x-auto custom-scrollbar">
                <nav class="flex gap-6 md:gap-10 min-w-max" aria-label="Tabs">
                    <button data-target="all" class="tab-btn border-b-[3px] border-[#1E4F9C] text-[#1E4F9C] py-4 px-1 text-[15px] font-bold whitespace-nowrap">
                        All Classes
                    </button>
                    <button data-target="class-6" class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Class 6
                    </button>
                    <button data-target="class-7" class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Class 7
                    </button>
                    <button data-target="class-8" class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Class 8
                    </button>
                </nav>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="cards-container">
                <!-- Skill Builders Card -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block" data-category="class-6 class-7 class-8">
                    <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                        <img src="../assets/images/6-8.png" alt="Academic Builders Program" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-indigo-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-indigo-100 z-20">
                            CLASS 6 TO 8
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-indigo-600 font-bold text-sm tracking-wide bg-indigo-50 px-3 py-1 rounded-full">Foundation 1</span>
                        </div>
                        <h3 class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-indigo-600 transition-colors">
                            Academic Builders Pro</h3>
                        
                        <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                            <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">Advanced academic syllabus coverage with a focus on logical reasoning, analytical skills, and STEM excellence.</p>
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Integrated competitive prep
                                </li>
                                <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Visual concept mastery
                                </li>
                            </ul>
                        </div>

                        <button onclick="toggleContent(this)" class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                            <span>Read More</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                        </button>

                        <!-- Packages Info Section -->
                        <div class="mt-auto pt-4 border-t border-gray-100">
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
                            <button onclick="openEnrollmentModal('Foundation 1 - Skill Builders Pro')" class="w-full bg-indigo-50 text-indigo-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-indigo-600 hover:text-white transition-all">Enroll Request</button>
                        </div>
                    </div>
                </div>

                <!-- Olympiad Card -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block" data-category="class-6 class-7 class-8">
                    <div class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                        <img src="../assets/images/olympiad_excellence.png" alt="Olympiad Excellence Program" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent mix-blend-multiply pointer-events-none z-10"></div>
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur text-rose-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-rose-100 z-20">
                            SPECIALIZED
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-rose-600 font-bold text-sm tracking-wide bg-rose-50 px-3 py-1 rounded-full">Foundation 1</span>
                        </div>
                        <h3 class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-rose-600 transition-colors">
                            Olympiad Excellence</h3>
                        
                        <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                            <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">Dedicated training for SOF, SilverZone, and Unified Council Olympiads. Build a competitive temperament early.</p>
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Expert Olympiad mentors
                                </li>
                                <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Rank-oriented test series
                                </li>
                            </ul>
                        </div>

                        <button onclick="toggleContent(this)" class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                            <span>Read More</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                        </button>

                        <!-- Packages Info Section -->
                        <div class="mt-auto pt-4 border-t border-gray-100">
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
                            <button onclick="openEnrollmentModal('Foundation 1 - Olympiad Excellence')" class="w-full bg-rose-50 text-rose-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-rose-600 hover:text-white transition-all">Enroll Request</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<script>
        lucide.createIcons();

        function toggleContent(btn) {
            const wrapper = btn.previousElementSibling;
            const isCollapsed = wrapper.classList.contains('collapsed');
            const autoHeight = wrapper.scrollHeight + 'px';

            if (isCollapsed) {
                wrapper.classList.remove('collapsed');
                wrapper.classList.add('expanded');
                wrapper.style.maxHeight = autoHeight;
                btn.querySelector('span').textContent = 'Read Less';
                btn.querySelector('i').setAttribute('data-lucide', 'arrow-up');
            } else {
                wrapper.classList.add('collapsed');
                wrapper.classList.remove('expanded');
                wrapper.style.maxHeight = '150px'; // Matching the base height
                btn.querySelector('span').textContent = 'Read More';
                btn.querySelector('i').setAttribute('data-lucide', 'arrow-right');
            }
            lucide.createIcons();
        }

        document.getElementById('mobile-menu-btn')?.addEventListener('click', () => {
             document.getElementById('mobile-menu')?.classList.toggle('hidden');
        });

        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.tab-btn');
            const cards = document.querySelectorAll('.course-card');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const target = tab.dataset.target;
                    tabs.forEach(t => {
                        t.classList.remove('border-[#1E4F9C]', 'text-[#1E4F9C]', 'font-bold');
                        t.classList.add('border-transparent', 'text-gray-500', 'font-medium');
                    });
                    tab.classList.add('border-[#1E4F9C]', 'text-[#1E4F9C]', 'font-bold');
                    tab.classList.remove('border-transparent', 'text-gray-500', 'font-medium');

                    cards.forEach(card => {
                        if (target === 'all' || card.dataset.category.includes(target)) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
<?php include '../components/enrollment-modal.php'; ?>
<?php include '../components/footer.php'; ?>
