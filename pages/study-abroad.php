<?php
$pageTitle = 'Study Abroad | Unidemy Global';
$pageDescription = 'Global university admissions, medical abroad programs, and research opportunities with Unidemy Global.';
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
                            <span class="ml-2 text-primary font-medium">Study Abroad</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Title -->
            <div class="flex items-center gap-4 mb-8">
                <div
                    class="w-16 h-16 rounded-2xl bg-emerald-50 flex items-center justify-center shrink-0 border border-emerald-100">
                    <i data-lucide="globe" class="w-8 h-8 text-emerald-600"></i>
                </div>
                <div>
                    <h1 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-gray-900 font-sans tracking-tight">
                        Study Abroad</h1>
                    <p class="text-gray-500 mt-1">Your gateway to world-class education and global careers.</p>
                </div>
            </div>

            <!-- Tabs -->
            <div class="border-b border-gray-200 mb-8 overflow-x-auto custom-scrollbar">
                <nav class="flex gap-6 md:gap-10 min-w-max" aria-label="Tabs">
                    <button data-target="all"
                        class="tab-btn border-b-[3px] border-[#10B981] text-[#10B981] py-4 px-1 text-[15px] font-bold whitespace-nowrap">
                        All Programs
                    </button>
                    <button data-target="medical"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Medical Abroad
                    </button>
                    <button data-target="bachelors"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Bachelors
                    </button>
                    <button data-target="masters"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Masters
                    </button>
                    <button data-target="research"
                        class="tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors">
                        Researchers
                    </button>
                </nav>
            </div>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-20" id="cards-container">

                <!-- USA Medical -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1"
                    data-category="medical">
                    <div
                        class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                        <img src="../assets/images/mbbs_abroad_card.png" alt="MBBS Abroad"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold mb-3 text-gray-900">MBBS Abroad</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow">Secure admissions in top medical universities in
                            Georgia, Kazakhstan, and Kyrgyzstan.</p>
                        <a href="../pages/medical-abroad.php"
                            class="text-emerald-600 font-bold text-sm flex items-center hover:translate-x-1 transition-transform">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Bachelors Programs -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1"
                    data-category="bachelors">
                    <div
                        class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                        <img src="../assets/images/undergraduate_programs_card.png" alt="Undergraduate Programs"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Undergraduate Programs</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow">Start your global journey with prestigious Bachelors degrees in USA, UK, Canada, and beyond.</p>
                        <a href="../pages/higher-education.php"
                            class="text-emerald-600 font-bold text-sm flex items-center hover:translate-x-1 transition-transform">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Masters in UK -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1"
                    data-category="masters">
                    <div
                        class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                        <img src="../assets/images/postgraduate_programs_card.png" alt="Postgraduate Programs"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Postgraduate Programs</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow">Explore Masters and MBA programs in global
                            education hubs like UK, USA, and Canada.</p>
                        <a href="../pages/higher-education.php"
                            class="text-emerald-600 font-bold text-sm flex items-center hover:translate-x-1 transition-transform">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Research Programs -->
                <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1"
                    data-category="research">
                    <div
                        class="relative h-[200px] w-full overflow-hidden border-b border-gray-100">
                        <img src="../assets/images/international_research_card.png" alt="International Research"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold mb-3 text-gray-900">International Research</h3>
                        <p class="text-sm text-gray-600 mb-6 flex-grow">Exclusive PhD and post-doc opportunities with
                            leading research institutes worldwide.</p>
                        <a href="../pages/researchers.php"
                            class="text-emerald-600 font-bold text-sm flex items-center hover:translate-x-1 transition-transform">
                            View Details <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Counseling Section -->
            <section id="counseling" class="relative bg-primary rounded-[40px] p-8 md:p-16 overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-1/2 h-full opacity-10 pointer-events-none">
                    <i data-lucide="globe" class="w-96 h-96 -mr-20 -mt-20"></i>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
                    <div>
                        <span
                            class="inline-block bg-white/10 text-white text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-widest mb-6">Expert
                            Guidance</span>
                        <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">Think Smart, <br><span
                                class="text-secondary tracking-tight">Study Worldwide</span></h2>
                        <p class="text-lg text-blue-100 mb-10 leading-relaxed max-w-lg">Get personalized counseling from
                            our global experts. We help you with university selection, documentation, and visa
                            processing.</p>

                        <div class="grid grid-cols-2 gap-8">
                            <div class="flex flex-col">
                                <span class="text-3xl font-bold text-white mb-1">500+</span>
                                <span class="text-blue-200 text-sm">Partner Universities</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-3xl font-bold text-white mb-1">98%</span>
                                <span class="text-blue-200 text-sm">Visa Success Rate</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-xl">
                        <h3 class="text-2xl font-bold text-gray-900 mb-8">Free Counseling Session</h3>
                        <form class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <input type="text" placeholder="Full Name"
                                    class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-primary transition-colors">
                                <input type="email" placeholder="Email Address"
                                    class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-primary transition-colors">
                            </div>
                            <div class="flex gap-2">
                                <div class="relative" id="country-picker">
                                    <button type="button" id="country-btn"
                                        class="flex items-center gap-2 px-4 py-3 bg-gray-50 border border-gray-100 rounded-xl text-sm font-bold text-gray-700 hover:bg-gray-100 focus:bg-white focus:border-primary outline-none transition-all whitespace-nowrap min-w-[90px]">
                                        <img id="flag-img" src="https://flagcdn.com/w20/in.png" width="20" class="rounded-sm" alt="IN">
                                        <span id="dial-code">+91</span>
                                    </button>
                                    <div id="country-dropdown" class="hidden absolute left-0 top-full mt-2 w-64 bg-white rounded-2xl shadow-2xl border border-gray-100 z-50 p-2">
                                        <input type="text" id="country-search" placeholder="Search..." class="w-full px-3 py-2 text-sm bg-gray-50 border border-transparent rounded-xl outline-none focus:border-primary mb-2">
                                        <ul id="country-list" class="max-h-60 overflow-y-auto space-y-1"></ul>
                                    </div>
                                </div>
                                <input type="tel" placeholder="Phone Number"
                                    class="flex-1 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-primary transition-colors">
                            </div>
                            <select
                                class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 text-sm text-gray-500 focus:outline-none focus:border-primary transition-colors">
                                <option value="">Preferred Destination</option>
                                <option value="usa">USA</option>
                                <option value="uk">UK</option>
                                <option value="canada">Canada</option>
                                <option value="australia">Australia</option>
                                <option value="europe">Europe</option>
                            </select>
                            <select
                                class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 text-sm text-gray-500 focus:outline-none focus:border-primary transition-colors">
                                <option value="">Preferred Program</option>
                                <option value="medical">Medical / MBBS</option>
                                <option value="bachelors">Bachelors</option>
                                <option value="masters">Masters / MBA</option>
                                <option value="research">PhD / Research</option>
                            </select>
                            <button
                                class="w-full bg-secondary hover:bg-orange-600 text-white font-bold py-4 rounded-xl transition-all shadow-lg shadow-secondary/30 active:scale-95 text-base mt-4 uppercase tracking-wide">
                                Book Now
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize Lucide icons
        if (typeof lucide !== 'undefined') lucide.createIcons();

        // Mobile menu toggle logic
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });

        // Tab selection logic
        const urlParams = new URLSearchParams(window.location.search);
        let tab = urlParams.get('tab');
        const tabs = document.querySelectorAll('nav[aria-label="Tabs"] button');
        const cards = document.querySelectorAll('.course-card');

        function activateTab(tabId) {
            // Update active tab styles
            tabs.forEach(t => {
                t.className = "tab-btn border-b-[3px] border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-[15px] font-medium whitespace-nowrap transition-colors";
                if (t.dataset.target === tabId) {
                    t.className = "tab-btn border-b-[3px] border-[#10B981] text-[#10B981] py-4 px-1 text-[15px] font-bold whitespace-nowrap";
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
<?php include '../components/footer.php'; ?>
