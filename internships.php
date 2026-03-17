<?php
$pageTitle = 'Tech Internships | Unidemy Global';
$pageDescription = 'Kickstart your tech career with precision-crafted internships in AI/ML, Embedded Systems, and Web & Cloud Applications.';
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
                            <span class="ml-2 text-primary font-medium">Internships</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Title -->
            <h1 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-gray-900 mb-8 font-sans tracking-tight">Tech
                Internships</h1>

            <!-- Tabs -->
            <div class="border-b border-gray-200 mb-8 overflow-x-auto custom-scrollbar">
                <nav class="flex gap-6 md:gap-10 min-w-max" aria-label="Tabs">
                    <button data-target="all"
                        class="tab-btn border-b-[3px] border-[#6366F1] text-[#6366F1] py-4 px-1 text-[15px] font-bold whitespace-nowrap">
                        All Domains
                    </button>
                    <button data-target="aiml"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        AI / ML
                    </button>
                    <button data-target="embedded"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Embedded Systems
                    </button>
                    <button data-target="webcloud"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Web & Cloud
                    </button>
                </nav>
            </div>

            <!-- Section Info -->
            <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-3">Industry-Ready Projects</h2>
                    <p class="text-gray-500 text-[15px] max-w-2xl">Work on cutting-edge technologies, guided by industry
                        experts, and build a world-class portfolio.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="cards-container">
                <!-- Card 1: AI / ML -->
                <div class="course-card bg-[#111827] rounded-3xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block border border-gray-800"
                    data-category="aiml">
                    <!-- Image Container -->
                    <div class="relative h-[220px] w-full overflow-hidden bg-gray-900">
                        <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&q=80&w=800"
                            alt="AI Pipeline"
                            class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-500">
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#111827] via-transparent to-transparent">
                        </div>
                        <!-- Badge -->
                        <div
                            class="absolute top-4 left-4 bg-black/50 backdrop-blur-md text-[#38BDF8] text-[10px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider border border-[#38BDF8]/40">
                            <div class="w-1.5 h-1.5 rounded-full bg-[#38BDF8] animate-pulse"></div> REMOTE OR HYBRID
                        </div>
                    </div>
                    <!-- Content Container -->
                    <div class="p-6 flex flex-col flex-grow text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[#38BDF8] font-bold text-sm tracking-wide">Artificial Intelligence</span>
                            <span
                                class="text-[10px] font-bold bg-white/10 text-gray-300 px-2.5 py-1 rounded-full uppercase tracking-wide">6
                                MONTHS</span>
                        </div>
                        <h3 class="text-[22px] font-bold mb-4 text-white leading-tight">Advanced Data Science & Machine
                            Learning</h3>
                        <ul class="space-y-3 mb-8 flex-grow">
                            <li class="flex items-start text-[14px] text-gray-400">
                                <i data-lucide="code-2" class="w-4 h-4 mr-2.5 text-[#38BDF8] shrink-0 mt-0.5"></i>
                                Python, TensorFlow, PyTorch
                            </li>
                            <li class="flex items-start text-[14px] text-gray-400">
                                <i data-lucide="briefcase" class="w-4 h-4 mr-2.5 text-[#38BDF8] shrink-0 mt-0.5"></i>
                                Real-world Industry Datasets
                            </li>
                        </ul>
                        <div class="mt-auto flex items-end justify-between pt-5 border-t border-gray-800">
                            <div class="flex flex-col">
                                <span
                                    class="text-[12px] text-gray-500 tracking-wide mb-1 uppercase font-semibold">Pre-placement
                                    Offer</span>
                                <span class="text-[16px] font-bold text-white">Performance Based</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button
                                    class="bg-blue-600 text-white font-bold px-5 py-2.5 rounded-xl text-sm hover:bg-blue-500 transition-colors">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Embedded -->
                <div class="course-card bg-[#111827] rounded-3xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block border border-gray-800"
                    data-category="embedded">
                    <!-- Image Container -->
                    <div class="relative h-[220px] w-full overflow-hidden bg-gray-900">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&q=80&w=800"
                            alt="Microcontroller"
                            class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-500">
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#111827] via-transparent to-transparent">
                        </div>
                        <!-- Badge -->
                        <div
                            class="absolute top-4 left-4 bg-black/50 backdrop-blur-md text-[#10B981] text-[10px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider border border-[#10B981]/40">
                            <div class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></div> ONSITE
                        </div>
                    </div>
                    <!-- Content Container -->
                    <div class="p-6 flex flex-col flex-grow text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[#10B981] font-bold text-sm tracking-wide">Embedded Systems</span>
                            <span
                                class="text-[10px] font-bold bg-white/10 text-gray-300 px-2.5 py-1 rounded-full uppercase tracking-wide">3
                                MONTHS</span>
                        </div>
                        <h3 class="text-[22px] font-bold mb-4 text-white leading-tight">IoT & Robotics Engineering</h3>
                        <ul class="space-y-3 mb-8 flex-grow">
                            <li class="flex items-start text-[14px] text-gray-400">
                                <i data-lucide="microchip" class="w-4 h-4 mr-2.5 text-[#10B981] shrink-0 mt-0.5"></i>
                                Embedded C/C++, ARM Cortex, RTOS
                            </li>
                            <li class="flex items-start text-[14px] text-gray-400">
                                <i data-lucide="cpu" class="w-4 h-4 mr-2.5 text-[#10B981] shrink-0 mt-0.5"></i>
                                Hardware-Software Co-design
                            </li>
                        </ul>
                        <div class="mt-auto flex items-end justify-between pt-5 border-t border-gray-800">
                            <div class="flex flex-col">
                                <span
                                    class="text-[12px] text-gray-500 tracking-wide mb-1 uppercase font-semibold">Stipend</span>
                                <span class="text-[16px] font-bold text-white">Performance Based</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button
                                    class="bg-[#10B981] text-white font-bold px-5 py-2.5 rounded-xl text-sm hover:bg-emerald-400 transition-colors shadow-lg shadow-emerald-500/20">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Web & Cloud -->
                <div class="course-card bg-[#111827] rounded-3xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block border border-gray-800"
                    data-category="webcloud">
                    <!-- Image Container -->
                    <div class="relative h-[220px] w-full overflow-hidden bg-gray-900">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=800"
                            alt="Code"
                            class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-500">
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#111827] via-transparent to-transparent">
                        </div>
                        <!-- Badge -->
                        <div
                            class="absolute top-4 left-4 bg-black/50 backdrop-blur-md text-[#F43F5E] text-[10px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider border border-[#F43F5E]/40">
                            <div class="w-1.5 h-1.5 rounded-full bg-[#F43F5E] animate-pulse"></div> REMOTE OR HYBRID
                        </div>
                    </div>
                    <!-- Content Container -->
                    <div class="p-6 flex flex-col flex-grow text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[#F43F5E] font-bold text-sm tracking-wide">Web & Cloud</span>
                            <span
                                class="text-[10px] font-bold bg-white/10 text-gray-300 px-2.5 py-1 rounded-full uppercase tracking-wide">4
                                MONTHS</span>
                        </div>
                        <h3 class="text-[22px] font-bold mb-4 text-white leading-tight">Full Stack Web Development</h3>
                        <ul class="space-y-3 mb-8 flex-grow">
                            <li class="flex items-start text-[14px] text-gray-400">
                                <i data-lucide="layers" class="w-4 h-4 mr-2.5 text-[#F43F5E] shrink-0 mt-0.5"></i>
                                React, Next.js, Node.js, PostgreSQL
                            </li>
                            <li class="flex items-start text-[14px] text-gray-400">
                                <i data-lucide="cloud" class="w-4 h-4 mr-2.5 text-[#F43F5E] shrink-0 mt-0.5"></i>
                                Deployment on AWS / Vercel
                            </li>
                        </ul>
                        <div class="mt-auto flex items-end justify-between pt-5 border-t border-gray-800">
                            <div class="flex flex-col">
                                <span
                                    class="text-[12px] text-gray-500 tracking-wide mb-1 uppercase font-semibold">Pre-placement
                                    Offer</span>
                                <span class="text-[16px] font-bold text-white">Performance Based</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button
                                    class="bg-[#F43F5E] text-white font-bold px-5 py-2.5 rounded-xl text-sm hover:bg-rose-400 transition-colors shadow-lg shadow-rose-500/20">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Web & Cloud 2 -->
                <div class="course-card bg-[#111827] rounded-3xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block border border-gray-800"
                    data-category="webcloud">
                    <!-- Image Container -->
                    <div class="relative h-[220px] w-full overflow-hidden bg-gray-900">
                        <img src="https://images.unsplash.com/photo-1667372393086-9d4001d4a758?auto=format&fit=crop&q=80&w=800"
                            alt="Cloud Architecture"
                            class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-500">
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#111827] via-transparent to-transparent">
                        </div>
                        <!-- Badge -->
                        <div
                            class="absolute top-4 left-4 bg-black/50 backdrop-blur-md text-[#F43F5E] text-[10px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider border border-[#F43F5E]/40">
                            <div class="w-1.5 h-1.5 rounded-full bg-[#F43F5E] animate-pulse"></div> REMOTE OR HYBRID
                        </div>
                    </div>
                    <!-- Content Container -->
                    <div class="p-6 flex flex-col flex-grow text-white">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[#F43F5E] font-bold text-sm tracking-wide">Web & Cloud</span>
                            <span
                                class="text-[10px] font-bold bg-white/10 text-gray-300 px-2.5 py-1 rounded-full uppercase tracking-wide">6
                                MONTHS</span>
                        </div>
                        <h3 class="text-[22px] font-bold mb-4 text-white leading-tight">Cloud Native DevOps Engineering
                        </h3>
                        <ul class="space-y-3 mb-8 flex-grow">
                            <li class="flex items-start text-[14px] text-gray-400">
                                <i data-lucide="container" class="w-4 h-4 mr-2.5 text-[#F43F5E] shrink-0 mt-0.5"></i>
                                Docker, Kubernetes, Terraform
                            </li>
                            <li class="flex items-start text-[14px] text-gray-400">
                                <i data-lucide="git-merge" class="w-4 h-4 mr-2.5 text-[#F43F5E] shrink-0 mt-0.5"></i>
                                CI/CD Pipeline Automation
                            </li>
                        </ul>
                        <div class="mt-auto flex items-end justify-between pt-5 border-t border-gray-800">
                            <div class="flex flex-col">
                                <span
                                    class="text-[12px] text-gray-500 tracking-wide mb-1 uppercase font-semibold">Stipend</span>
                                <span class="text-[16px] font-bold text-white">Performance Based</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button
                                    class="bg-[#F43F5E] text-white font-bold px-5 py-2.5 rounded-xl text-sm hover:bg-rose-400 transition-colors shadow-lg shadow-rose-500/20">Apply
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    

<script>
        lucide.createIcons();

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
<?php include 'components/footer.php'; ?>
