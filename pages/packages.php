<?php
$pageTitle = 'All Packages | Unidemy Global';
$pageDescription = 'Explore all our standardized test preparation packages for SAT, ACT, IELTS, TOEFL, GRE, and more.';
$base_url = '../';
include '../components/header.php';
?>
    <main class="w-full pt-32 lg:pt-40 pb-20 bg-white flex-grow">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 tracking-tight">Our Prep Packages</h1>
                <p class="text-gray-500 text-lg max-w-2xl mx-auto mb-10">Find the perfect training program to achieve
                    your target scores and unlock global opportunities.</p>

                <!-- Search Box -->
                <div class="max-w-2xl mx-auto relative group">
                    <div
                        class="absolute inset-y-0 left-0 pl-6 flex items-center pointer-events-none text-gray-400 group-focus-within:text-primary transition-colors">
                        <i data-lucide="search" class="w-6 h-6"></i>
                    </div>
                    <input type="text" id="package-search" placeholder="Search for a test (e.g., IELTS, SAT, GRE...)"
                        class="w-full bg-white border-2 border-gray-100 py-4 pl-16 pr-6 rounded-2xl text-lg focus:outline-none focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all shadow-sm">
                </div>
            </div>

            <!-- Tabbed Panel -->
            <div class="flex flex-wrap justify-center gap-2 mb-12" id="category-tabs">
                <button data-category="all"
                    class="category-tab px-8 py-3 rounded-full text-sm font-bold bg-primary text-white shadow-lg shadow-primary/20 transition-all">All
                    Programs</button>
                <button data-category="english"
                    class="category-tab px-8 py-3 rounded-full text-sm font-bold bg-gray-50 text-gray-500 hover:bg-gray-100 hover:text-gray-700 transition-all">English
                    Proficiency</button>
                <button data-category="undergraduate"
                    class="category-tab px-8 py-3 rounded-full text-sm font-bold bg-gray-50 text-gray-500 hover:bg-gray-100 hover:text-gray-700 transition-all">Undergraduate</button>
                <button data-category="postgraduate"
                    class="category-tab px-8 py-3 rounded-full text-sm font-bold bg-gray-50 text-gray-500 hover:bg-gray-100 hover:text-gray-700 transition-all">Postgraduate</button>
                <button data-category="language"
                    class="category-tab px-8 py-3 rounded-full text-sm font-bold bg-gray-50 text-gray-500 hover:bg-gray-100 hover:text-gray-700 transition-all">Language
                    & Others</button>
            </div>

            <!-- Grid Container -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="packages-grid">
                <!-- Cards will be dynamically injected here -->
            </div>

            <!-- No Results -->
            <div id="no-results" class="hidden text-center py-20 px-6">
                <div
                    class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6 text-gray-400">
                    <i data-lucide="search-x" class="w-10 h-10"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">No programs found</h3>
                <p class="text-gray-500">Try adjusting your search or category filters.</p>
            </div>
        </div>
    </main>

    <!-- Package Modal (Synced with global-launchpad) -->
    <div id="package-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-[#0B1121]/80 backdrop-blur-sm transition-opacity" onclick="closePackageModal()">
        </div>
        <div class="bg-white rounded-[40px] w-full max-w-5xl max-h-[95vh] overflow-hidden shadow-2xl relative z-10 flex flex-col transform transition-all scale-95 opacity-0 duration-500"
            id="modal-content">
            <button onclick="closePackageModal()"
                class="absolute top-6 right-6 p-2 bg-gray-50 hover:bg-gray-100 rounded-full transition-colors z-20">
                <i data-lucide="x" class="w-5 h-5 text-gray-400"></i>
            </button>
            <div class="overflow-y-auto custom-scrollbar flex-grow p-6 md:p-10 text-center">
                <div class="mb-8">
                    <h2 id="modal-title" class="text-2xl md:text-[32px] font-black text-[#0F172A] mb-2 tracking-tight">
                        Choose Your Package</h2>
                    <p id="modal-subtitle" class="text-gray-500 text-base md:text-lg">Select a plan that fits your study
                        goals and timeline.</p>
                </div>
                <div id="modal-tabs" class="flex justify-center gap-2 mb-10 hidden"></div>
                <div id="modal-body-content" class="grid grid-cols-1 md:grid-cols-3 gap-8"></div>
            </div>
        </div>
    </div>


<script>

        const MasterData = {
            'ielts': {
                name: 'IELTS Academic/General',
                category: 'english',
                icon: 'languages',
                color: 'rose',
                desc: 'Target 7.5+ Band Scores with focused training in all modules.',
                modalData: {
                    title: 'IELTS Prep Packages',
                    subtitle: 'Choose the best plan for your band target',
                    packages: [
                        { name: 'IELTS Express', subType: '15 DAYS FAST TRACK', icon: 'zap', iconColor: 'blue-600', iconBg: 'blue-50', features: ['15 Hours Live Classes', '5 Full Mock Tests', 'Writing Eval included'], validity: '1 Month', materials: ['Live Classes', 'Mock Tests'], cta: 'https://unidemyglobal.com/login.php?url=IELTS-Express' },
                        { name: 'Band 7.5+ Booster', subType: 'COMPREHENSIVE TRAINING', highlight: 'MOST POPULAR', icon: 'crown', iconColor: 'orange-600', iconBg: 'orange-50', features: ['32 Hours Live classes', '10 Full Mock Tests', 'Unlimited Doubt clearing', 'Career Counseling'], validity: '6 Months', materials: ['Videos', 'Mock Tests', 'Study Material'], cta: 'https://unidemyglobal.com/login.php?url=IELTS-Booster' },
                        { name: 'IELTS Masterclass', subType: '1-ON-1 PERSONALIZED', icon: 'users', iconColor: 'blue-600', iconBg: 'blue-50', features: ['Private 1-on-1 sessions', '15+ Full Mock Tests', 'Experts Master Trainers', 'Admission support'], validity: '1 Year', materials: ['1-on-1 Help', 'Mock Tests', 'Full Access'], cta: 'https://unidemyglobal.com/login.php?url=IELTS-Masterclass' }
                    ]
                }
            },
            'toefl': {
                name: 'TOEFL iBT',
                category: 'english',
                icon: 'mic',
                color: 'violet',
                desc: 'Achieve 100+ with intensive real-exam simulations and mentorship.',
                modalData: {
                    title: 'TOEFL iBT Packages',
                    subtitle: 'Achieve 100+ with PowerScore',
                    packages: [{ name: 'PowerScore Pro', subType: 'INTENSIVE TRAINING', icon: 'zap', iconColor: 'violet-600', iconBg: 'violet-50', highlight: 'RECOMMENDED', features: ['30+ Hours Live Training', '10+ Authentic Mock Tests', '25+ Writing Reviews', 'Speaking Feedback', 'Smart Analytics'], validity: '6 Months', materials: ['Live Classes', 'Mock Tests', 'Video Access'], cta: 'https://unidemyglobal.com/login.php?url=TOEFL-PowerScore' }]
                }
            },
            'duolingo': {
                name: 'Duolingo English Test',
                category: 'english',
                icon: 'bird',
                color: 'emerald',
                desc: 'Fast AI-powered prep for rapid results in just 2 weeks.',
                modalData: {
                    title: 'Duolingo Mastery',
                    subtitle: 'Fast AI-powered prep',
                    packages: [{ name: 'DET Express', subType: '2-WEEK INTENSIVE', icon: 'bird', iconColor: 'emerald-600', iconBg: 'emerald-50', features: ['AI-powered feedback', 'Adaptive practice tests', 'Exam Simulations', 'Rapid Feedback'], validity: '3 Months', materials: ['AI Tools', 'Test Papers'], cta: 'duolingo.php' }]
                }
            },
            'sat': {
                name: 'Digital SAT',
                category: 'undergraduate',
                icon: 'graduation-cap',
                color: 'blue',
                desc: 'Master the Digital SAT with evidence-based strategies and drills.',
                modalData: {
                    title: 'SAT Preparation',
                    subtitle: 'Digital SAT Excellence',
                    packages: [{ name: 'SAT Digital Elite', subType: 'FULL ACCESS', icon: 'graduation-cap', iconColor: 'blue-600', iconBg: 'blue-50', features: ['60+ Hours Live Prep', '2000+ Practice Questions', '15+ Full Mocks', 'Score Guarantee'], validity: '1 Year', materials: ['Live Classes', 'Question Bank', 'Mocks'], cta: 'sat.php' }]
                }
            },
            'act': {
                name: 'ACT Score Booster',
                category: 'undergraduate',
                icon: 'target',
                color: 'indigo',
                desc: 'Comprehensive coverage of all sections with timed mock tests.',
                modalData: {
                    title: 'ACT Score Booster',
                    subtitle: 'Master all sections',
                    packages: [{ name: 'ACT Mastery', subType: 'COMPLETE PREP', icon: 'target', iconColor: 'indigo-600', iconBg: 'indigo-50', features: ['Science Section Specialist', 'Timed Section Drills', 'Expert Strategy Guides', '4 Full Mocks'], validity: '1 Year', materials: ['Video Prep', 'Study Guides', 'Mocks'], cta: 'act.php' }]
                }
            },
            'gre': {
                name: 'GRE General',
                category: 'postgraduate',
                icon: 'brain-circuit',
                color: 'orange',
                desc: 'Strategy-driven program for 320+ GRE scores in Quant and Verbal.',
                modalData: {
                    title: 'GRE General Prep',
                    subtitle: 'Aim for 320+ Smart Score',
                    packages: [{ name: 'Smart Score Elite', subType: 'STRATEGY FOCUSED', icon: 'brain-circuit', iconColor: 'orange-600', iconBg: 'orange-50', highlight: 'STRATEGY FOCUSED', features: ['Quant Shortcuts', 'Verbal Workshops', '10+ Adaptive Mocks', 'Vocab Booster', 'AWA Scored Reviews'], validity: '6 Months', materials: ['Adaptive Mocks', 'Vocab Tools', 'Video Workshops'], cta: 'https://unidemyglobal.com/login.php?url=GRE-Elite' }]
                }
            },
            'topik': {
                name: 'Korean (TOPIK)',
                category: 'language',
                icon: 'landmark',
                color: 'rose',
                desc: 'Unlock your Korean future with comprehensive proficiency courses.',
                modalData: {
                    title: 'Korean Proficiency (TOPIK)',
                    subtitle: 'Unlock your Korean future',
                    tabs: [{ id: 'all', label: 'All Packages' }, { id: 'beginner', label: 'Beginner' }, { id: 'advanced', label: 'Advanced' }],
                    packages: [
                        { name: 'TOPIK I Mastery', subType: 'LEVEL 1-2', category: 'beginner', icon: 'book', iconColor: 'rose-600', iconBg: 'rose-50', features: ['Beginner survival Korean', 'Core grammar patterns', 'Step-by-step TOPIK I'], validity: '6 Months', materials: ['Videos', 'Study Material'], cta: 'topik.php' },
                        { name: 'TOPIK II Excellence', subType: 'LEVEL 3-6', category: 'advanced', icon: 'award', iconColor: 'rose-600', iconBg: 'rose-50', features: ['Academic & Professional', 'Advanced writing prep', 'News analysis'], validity: '1 Year', materials: ['Full Access', 'Advanced Mocks'], cta: 'topik.php' }
                    ]
                }
            }
        };

        const grid = document.getElementById('packages-grid');
        const searchInput = document.getElementById('package-search');
        const tabs = document.querySelectorAll('.category-tab');
        const noResults = document.getElementById('no-results');

        let currentCategory = 'all';
        let searchQuery = '';

        function renderGrid() {
            const filtered = Object.keys(MasterData).filter(key => {
                const item = MasterData[key];
                const matchesCategory = currentCategory === 'all' || item.category === currentCategory;
                const matchesSearch = item.name.toLowerCase().includes(searchQuery.toLowerCase());
                return matchesCategory && matchesSearch;
            });

            grid.innerHTML = filtered.map(key => {
                const item = MasterData[key];
                return `
                    <div class="group bg-white border border-gray-100 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col items-center text-center">
                        <div class="w-20 h-20 rounded-2xl bg-${item.color}-50 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                            <i data-lucide="${item.icon}" class="w-10 h-10 text-${item.color}-600"></i>
                        </div>
                        <span class="text-[10px] font-black tracking-[0.2em] text-gray-400 uppercase mb-2">${item.category}</span>
                        <h3 class="text-2xl font-black text-gray-900 mb-4">${item.name}</h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-8">${item.desc}</p>
                        <button onclick="openPackageModal('${key}')" class="mt-auto w-full bg-primary hover:bg-blue-700 text-white font-black py-4 rounded-2xl transition-all shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95">View Packages</button>
                    </div>
                `;
            }).join('');

            noResults.classList.toggle('hidden', filtered.length > 0);
            lucide.createIcons();
        }

        searchInput.addEventListener('input', (e) => {
            searchQuery = e.target.value;
            renderGrid();
        });

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => {
                    t.className = "category-tab px-8 py-3 rounded-full text-sm font-bold bg-gray-50 text-gray-500 hover:bg-gray-100 hover:text-gray-700 transition-all";
                });
                tab.className = "category-tab px-8 py-3 rounded-full text-sm font-bold bg-primary text-white shadow-lg shadow-primary/20 transition-all";
                currentCategory = tab.dataset.category;
                renderGrid();
            });
        });

        // Modal Logic (Shared)
        function openPackageModal(id) {
            const data = MasterData[id].modalData;
            const modal = document.getElementById('package-modal');
            const content = document.getElementById('modal-content');
            const titleEl = document.getElementById('modal-title');
            const subtitleEl = document.getElementById('modal-subtitle');
            const tabsEl = document.getElementById('modal-tabs');

            titleEl.textContent = data.title;
            subtitleEl.textContent = data.subtitle;

            if (data.tabs) {
                tabsEl.classList.remove('hidden');
                tabsEl.innerHTML = data.tabs.map(tab => `
                    <button onclick="filterModalPackages('${id}', '${tab.id}')" 
                        class="modal-tab-btn px-6 py-2 rounded-full text-sm font-bold transition-all ${tab.id === 'all' ? 'bg-primary text-white' : 'bg-gray-100 text-gray-500 hover:bg-gray-200'}"
                        data-tab="${tab.id}">
                        ${tab.label}
                    </button>
                `).join('');
            } else { tabsEl.classList.add('hidden'); }

            renderModalPackages(data.packages);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            lucide.createIcons();
            setTimeout(() => {
                content.classList.remove('scale-95', 'opacity-0');
                content.classList.add('scale-100', 'opacity-100');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function filterModalPackages(id, tabId) {
            const data = MasterData[id].modalData;
            const filtered = tabId === 'all' ? data.packages : data.packages.filter(p => p.category === tabId);
            const btns = document.querySelectorAll('.modal-tab-btn');
            btns.forEach(btn => {
                btn.className = btn.dataset.tab === tabId ? "modal-tab-btn px-6 py-2 rounded-full text-sm font-bold transition-all bg-primary text-white" : "modal-tab-btn px-6 py-2 rounded-full text-sm font-bold transition-all bg-gray-100 text-gray-500 hover:bg-gray-200";
            });
            renderModalPackages(filtered);
            lucide.createIcons();
        }

        function renderModalPackages(packages) {
            const body = document.getElementById('modal-body-content');
            body.innerHTML = packages.map((pkg, idx) => {
                // Utility for material icons
                const getMaterialIcon = (m) => {
                    m = m.toLowerCase();
                    if (m.includes('video')) return 'play-circle';
                    if (m.includes('test') || m.includes('paper')) return 'file-text';
                    if (m.includes('class') || m.includes('session')) return 'tv-2';
                    if (m.includes('material') || m.includes('guide')) return 'book-open';
                    return 'package';
                };

                const hasManyFeatures = pkg.features.length > 3;
                const initialFeatures = hasManyFeatures ? pkg.features.slice(0, 3) : pkg.features;
                const hiddenFeatures = hasManyFeatures ? pkg.features.slice(3) : [];

                return `
                <div class="relative group bg-white border ${pkg.highlight ? 'border-primary ring-1 ring-primary' : 'border-gray-100'} rounded-[32px] p-6 md:p-8 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col items-center text-center">
                    ${pkg.highlight ? `<div class="absolute -top-3.5 left-1/2 -translate-x-1/2 bg-primary text-white text-[10px] font-black px-4 py-1.5 rounded-full tracking-widest uppercase shadow-lg shadow-primary/20">${pkg.highlight}</div>` : ''}
                    
                    <div class="w-full flex justify-between items-start mb-6">
                        <div class="w-12 h-12 rounded-2xl bg-${pkg.iconBg} flex items-center justify-center shrink-0"><i data-lucide="${pkg.icon}" class="w-6 h-6 text-${pkg.iconColor}"></i></div>
                        <div class="px-3 py-1.5 rounded-xl bg-slate-50 border border-slate-100 text-[10px] font-bold text-slate-500 flex items-center gap-1.5 uppercase tracking-wider">
                            <i data-lucide="clock" class="w-3 h-3"></i>
                            ${pkg.validity}
                        </div>
                    </div>

                    <div class="text-left w-full mb-6">
                        <h4 class="text-xl font-black text-[#0F172A] mb-1 leading-tight">${pkg.name}</h4>
                        <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">${pkg.subType}</p>
                    </div>

                    <!-- Material Type Badges -->
                    <div class="flex flex-wrap gap-2 mb-6 w-full">
                        ${pkg.materials.map(m => `
                            <span class="flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-blue-50 text-[10px] font-bold text-blue-600 border border-blue-100/50">
                                <i data-lucide="${getMaterialIcon(m)}" class="w-3 h-3"></i>
                                ${m}
                            </span>
                        `).join('')}
                    </div>

                    <div class="w-full h-px bg-slate-100 mb-6"></div>

                    <!-- Features List -->
                    <div class="flex-grow w-full text-left mb-8">
                        <ul class="space-y-3" id="features-list-${idx}">
                            ${initialFeatures.map(f => `
                                <li class="flex items-start gap-2.5 text-gray-600 font-medium text-sm">
                                    <i data-lucide="check" class="w-4 h-4 text-green-500 shrink-0 mt-0.5"></i>
                                    <span>${f}</span>
                                </li>
                            `).join('')}
                            ${hasManyFeatures ? `
                                <div class="hidden space-y-3 mt-3" id="hidden-features-${idx}">
                                    ${hiddenFeatures.map(f => `
                                        <li class="flex items-start gap-2.5 text-gray-600 font-medium text-sm">
                                            <i data-lucide="check" class="w-4 h-4 text-green-500 shrink-0 mt-0.5"></i>
                                            <span>${f}</span>
                                        </li>
                                    `).join('')}
                                </div>
                            ` : ''}
                        </ul>
                        ${hasManyFeatures ? `
                            <button onclick="toggleFeatures(${idx}, this)" class="mt-4 text-xs font-bold text-primary hover:text-blue-700 transition-colors flex items-center gap-1 group/btn">
                                <span>Show all features</span>
                                <i data-lucide="chevron-down" class="w-3 h-3 transition-transform group-active/btn:translate-y-0.5"></i>
                            </button>
                        ` : ''}
                    </div>

                    <button onclick="enrollFromPackage('${pkg.name}')" class="w-full bg-primary hover:bg-blue-700 text-white font-black py-4 rounded-2xl transition-all shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 text-center text-sm">Enroll Request</button>
                </div>
            `}).join('');

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

        function toggleFeatures(idx, btn) {
            const hiddenDiv = document.getElementById(`hidden-features-${idx}`);
            const isHidden = hiddenDiv.classList.contains('hidden');
            const span = btn.querySelector('span');
            const icon = btn.querySelector('i');

            if (isHidden) {
                hiddenDiv.classList.remove('hidden');
                span.textContent = 'Show less';
                icon.style.transform = 'rotate(180deg)';
            } else {
                hiddenDiv.classList.add('hidden');
                span.textContent = 'Show all features';
                icon.style.transform = 'rotate(0deg)';
            }
            // Trigger lucide for the card
            lucide.createIcons();
        }

        function closePackageModal() {
            const modal = document.getElementById('package-modal');
            const content = document.getElementById('modal-content');
            content.classList.remove('scale-100', 'opacity-100');
            content.classList.add('scale-95', 'opacity-0');
            setTimeout(() => { modal.classList.add('hidden'); modal.classList.remove('flex'); document.body.style.overflow = ''; }, 300);
        }

        function enrollFromPackage(packageName) {
            closePackageModal();
            setTimeout(() => {
                openEnrollmentModal(packageName);
            }, 350); // Small delay to allow selection modal to close smoothly
        }

        // Initial Render
        renderGrid();
    </script>
<?php include '../components/enrollment-modal.php'; ?>
<?php include '../components/footer.php'; ?>
