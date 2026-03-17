<?php
$pageTitle = 'NEET Programmes | Unidemy Global';
$pageDescription = 'Our premier NEET programmes offering complete study material, extensive mock tests, and mentorship.';
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
    <main class="w-full pt-28 lg:pt-36 pb-20 bg-white min-h-[calc(100vh-400px)]">
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
                            <span class="ml-2 text-primary font-medium">NEET</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Title -->
            <h1 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-gray-900 mb-8 font-sans tracking-tight">NEET
                Programmes</h1>

            <!-- Tabs -->
            <div class="border-b border-gray-200 mb-8 overflow-x-auto custom-scrollbar">
                <nav class="flex gap-6 md:gap-10 min-w-max" aria-label="Tabs">
                    <button data-target="all"
                        class="tab-btn border-b-[3px] border-[#6366F1] text-[#6366F1] py-4 px-1 text-[15px] font-bold whitespace-nowrap">
                        All Classes
                    </button>
                    <button data-target="class-11"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Class 11
                    </button>
                    <button data-target="class-12"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Class 12
                    </button>
                    <button data-target="repeater"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Repeater
                    </button>
                </nav>
            </div>

            <!-- Section Info -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-3">Classroom Program</h2>
                <p class="text-gray-500 text-[15px]">Offline classroom learning with structured syllabus coverage,
                    recorded lectures, tests &amp; doubt support.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="cards-container">
                <!-- Card 1 -->
                <div class="course-card bg-[#20252b] rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                    data-category="class-11 class-12">
                    <!-- Image Container -->
                    <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=800"
                            alt="Vidyapeeth" class="w-full h-full object-cover">
                        <!-- Badge -->
                        <div
                            class="absolute top-4 left-4 bg-black/80 backdrop-blur-sm text-[#FBBF24] text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider border border-[#FBBF24]/30">
                            <div class="w-1.5 h-1.5 rounded-full bg-[#FBBF24]"></div> OFFLINE CENTRE
                        </div>
                    </div>
                    <!-- Content Container -->
                    <div class="p-6 flex flex-col flex-grow text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[#FBBF24] font-semibold text-sm">Class 11 + 12 NEET</span>
                            <span
                                class="text-[10px] font-bold border border-gray-600/60 text-gray-300 px-2.5 py-1 rounded uppercase tracking-wide">HINGLISH</span>
                        </div>
                        <h3 class="text-[22px] font-bold mb-5 text-white">Pratham NEET</h3>
                        
                        <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-start text-[14px] text-gray-300">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-gray-400 shrink-0 mt-0"></i>
                                    Experienced Faculty
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-300">
                                    <i data-lucide="check-circle-2"
                                        class="w-4 h-4 mr-2.5 text-gray-400 shrink-0 mt-0.5"></i>
                                    Tech-enabled Offline Classroom Learning
                                </li>
                            </ul>
                        </div>

                        <button onclick="toggleContent(this)" class="flex items-center gap-2 text-[#FBBF24] font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                            <span>Read More</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                        </button>
                        <div class="mt-auto flex items-end justify-between pt-5 border-t border-gray-700/50">
                            <div class="flex flex-col">
                                <span class="text-[14px] font-bold text-secondary">Premium Program</span>
                                <span class="text-[11px] text-gray-400 tracking-wide uppercase">Inquire for Batch Details</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button
                                    onclick="openEnrollmentModal('NEET - Class 11 + 12')" class="bg-white text-gray-900 font-bold px-5 py-2.5 rounded-lg text-sm hover:bg-gray-100 transition-colors">Enroll Request</button>
                                <button
                                    class="border border-gray-600 bg-transparent text-white w-[42px] h-[42px] rounded-lg flex items-center justify-center hover:bg-gray-800 transition-colors">
                                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="course-card bg-[#20252b] rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                    data-category="class-11">
                    <!-- Image Container -->
                    <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&q=80&w=800"
                            alt="Gurukula Bangalore" class="w-full h-full object-cover">
                        <!-- Badge -->
                        <div
                            class="absolute top-4 left-4 bg-black/80 backdrop-blur-sm text-[#FBBF24] text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider border border-[#FBBF24]/30">
                            <div class="w-1.5 h-1.5 rounded-full bg-[#FBBF24]"></div> OFFLINE CENTRE
                        </div>
                    </div>
                    <!-- Content Container -->
                    <div class="p-6 flex flex-col flex-grow text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[#FBBF24] font-semibold text-sm">Class 11 NEET</span>
                            <span
                                class="text-[10px] font-bold border border-gray-600/60 text-gray-300 px-2.5 py-1 rounded uppercase tracking-wide">à¤¹à¤¿à¤¨à¥ à¤¦à¥€</span>
                        </div>
                        <h3 class="text-[22px] font-bold mb-5 text-white">Lakshya NEET</h3>
                        
                        <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-start text-[14px] text-gray-300">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-gray-400 shrink-0 mt-0"></i>
                                    Live Interactive Smart Classes
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-300">
                                    <i data-lucide="check-circle-2"
                                        class="w-4 h-4 mr-2.5 text-gray-400 shrink-0 mt-0.5"></i>
                                    Regular Offline Tests
                                </li>
                            </ul>
                        </div>

                        <button onclick="toggleContent(this)" class="flex items-center gap-2 text-[#FBBF24] font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                            <span>Read More</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                        </button>
                        <div class="mt-auto flex items-end justify-between pt-5 border-t border-gray-700/50">
                            <div class="flex flex-col">
                                <span class="text-[14px] font-bold text-secondary">Premium Program</span>
                                <span class="text-[11px] text-gray-400 tracking-wide uppercase">Inquire for Batch Details</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button
                                    class="bg-white text-gray-900 font-bold px-5 py-2.5 rounded-lg text-sm hover:bg-gray-100 transition-colors">Enroll Request</button>
                                <button
                                    class="border border-gray-600 bg-transparent text-white w-[42px] h-[42px] rounded-lg flex items-center justify-center hover:bg-gray-800 transition-colors">
                                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="course-card bg-[#20252b] rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                    data-category="class-11">
                    <!-- Image Container -->
                    <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&q=80&w=800"
                            alt="Vidyapeeth Tamil Nadu" class="w-full h-full object-cover">
                        <!-- Badge -->
                        <div
                            class="absolute top-4 left-4 bg-black/80 backdrop-blur-sm text-[#FBBF24] text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider border border-[#FBBF24]/30">
                            <div class="w-1.5 h-1.5 rounded-full bg-[#FBBF24]"></div> OFFLINE CENTRE
                        </div>
                    </div>
                    <!-- Content Container -->
                    <div class="p-6 flex flex-col flex-grow text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[#FBBF24] font-semibold text-sm">Class 11 NEET</span>
                            <span
                                class="text-[10px] font-bold border border-gray-600/60 text-gray-300 px-2.5 py-1 rounded uppercase tracking-wide">ENGLISH</span>
                        </div>
                        <h3 class="text-[22px] font-bold mb-5 text-white">Arjuna NEET</h3>
                        
                        <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-start text-[14px] text-gray-300">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-gray-400 shrink-0 mt-0"></i>
                                    Live Interactive Smart Classes
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-300">
                                    <i data-lucide="check-circle-2"
                                        class="w-4 h-4 mr-2.5 text-gray-400 shrink-0 mt-0.5"></i>
                                    Regular Offline Tests
                                </li>
                            </ul>
                        </div>

                        <button onclick="toggleContent(this)" class="flex items-center gap-2 text-[#FBBF24] font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                            <span>Read More</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                        </button>
                        <div class="mt-auto flex items-end justify-between pt-5 border-t border-gray-700/50">
                            <div class="flex flex-col">
                                <span class="text-[14px] font-bold text-secondary">Premium Program</span>
                                <span class="text-[11px] text-gray-400 tracking-wide uppercase">Inquire for Batch Details</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button
                                    onclick="openEnrollmentModal('NEET - Class 11 English')" class="bg-white text-gray-900 font-bold px-5 py-2.5 rounded-lg text-sm hover:bg-gray-100 transition-colors">Enroll Request</button>
                                <button
                                    class="border border-gray-600 bg-transparent text-white w-[42px] h-[42px] rounded-lg flex items-center justify-center hover:bg-gray-800 transition-colors">
                                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Repeater Example Card (Initially hidden initially if filtering is active) -->
                <div class="course-card bg-[#20252b] rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                    data-category="repeater">
                    <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=800"
                            alt="Vidyapeeth Repeater"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div
                            class="absolute top-4 left-4 bg-black/80 backdrop-blur-sm text-[#FBBF24] text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider border border-[#FBBF24]/30">
                            <div class="w-1.5 h-1.5 rounded-full bg-[#FBBF24]"></div> OFFLINE CENTRE
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[#FBBF24] font-semibold text-sm">Repeater NEET</span>
                            <span
                                class="text-[10px] font-bold border border-gray-600/60 text-gray-300 px-2.5 py-1 rounded uppercase tracking-wide">ENGLISH</span>
                        </div>
                        <h3 class="text-[22px] font-bold mb-5 text-white">Pinnacle NEET</h3>
                        
                        <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                            <ul class="space-y-3 mb-8">
                                <li class="flex items-start text-[14px] text-gray-300">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-gray-400 shrink-0 mt-0"></i>
                                    Dedicated Doubt Counters
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-300">
                                    <i data-lucide="check-circle-2"
                                        class="w-4 h-4 mr-2.5 text-gray-400 shrink-0 mt-0.5"></i>
                                    Advanced Material & Mock Tests
                                </li>
                            </ul>
                        </div>

                        <button onclick="toggleContent(this)" class="flex items-center gap-2 text-[#FBBF24] font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                            <span>Read More</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                        </button>
                        <div class="mt-auto flex items-end justify-between pt-5 border-t border-gray-700/50">
                            <div class="flex flex-col">
                                <span class="text-[14px] font-bold text-secondary">Premium Program</span>
                                <span class="text-[11px] text-gray-400 tracking-wide uppercase">Inquire for Batch Details</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button
                                    onclick="openEnrollmentModal('NEET - Repeater Program')" class="bg-white text-gray-900 font-bold px-5 py-2.5 rounded-lg text-sm hover:bg-gray-100 transition-colors">Enroll Request</button>
                                <button
                                    class="border border-gray-600 bg-transparent text-white w-[42px] h-[42px] rounded-lg flex items-center justify-center hover:bg-gray-800 transition-colors">
                                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                                </button>
                            </div>
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

        // Mobile menu toggle logic
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });

        // Tab selection logic based on URL parameters
        document.addEventListener('DOMContentLoaded', function () {
            const urlParams = new URLSearchParams(window.location.search);
            let tab = urlParams.get('tab');
            const tabs = document.querySelectorAll('nav[aria-label="Tabs"] button');
            const cards = document.querySelectorAll('.course-card');

            // Allow mapping 'dropper' from index.php to 'repeater'
            if (tab === 'dropper') {
                tab = 'repeater';
            }

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

