<?php
$pageTitle = 'Free Resources | Unidemy Global';
$pageDescription = 'Access free study materials, NCERT solutions, chapter-wise notes, and important questions curated by experts.';
$additionalHead = <<<'HEADCONTENT'
<style>
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .bento-card {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .bento-card:hover {
            transform: scale(1.02);
        }

        .bg-grid-pattern {
            background-image: radial-gradient(#1E4F9C 0.5px, transparent 0.5px);
            background-size: 20px 20px;
        }

        .tab-active {
            color: #1E4F9C;
            background: #E6EFFF;
            border-color: #1E4F9C;
        }

        .chapter-card:hover .chapter-links {
            opacity: 1;
            transform: translateY(0);
        }

        .chapter-links {
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }
    </style>
HEADCONTENT;
include 'components/header.php';
?>
    <!-- Hero & Bento Grid -->
    <section class="relative pt-32 pb-16 bg-[#0B1121] overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                <!-- Hero Content -->
                <div class="lg:col-span-12 text-center mb-12">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-secondary text-sm font-bold mb-6">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-secondary"></span>
                        </span>
                        New Study Materials 2026 Updated
                    </div>
                    <h1 class="text-4xl md:text-7xl font-black text-white mb-6 leading-tight">
                        Unlock Your <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-400">Potential</span>
                        with Free Resources
                    </h1>
                    <p class="text-lg text-slate-400 max-w-2xl mx-auto mb-8">
                        The most organized hub for CBSE, ICSE, and Competitive Exam materials. Everything you need to
                        topper, for free.
                    </p>
                </div>

                <!-- Bento Featured Section -->
                <div class="lg:col-span-8 group">
                    <div
                        class="h-full bento-card bg-gradient-to-br from-primary/20 to-blue-900/40 rounded-4xl p-8 border border-white/10 flex flex-col justify-between overflow-hidden relative">
                        <div class="absolute top-0 right-0 p-8 opacity-20 group-hover:opacity-40 transition-opacity">
                            <i data-lucide="award" class="w-48 h-48 text-white"></i>
                        </div>
                        <div class="relative z-10">
                            <span
                                class="px-3 py-1 rounded-lg bg-primary/40 text-blue-200 text-xs font-bold uppercase tracking-wider">Most
                                Popular</span>
                            <h3 class="text-3xl font-bold text-white mt-4 mb-4">Complete Class 10th <br>Science Master
                                Guide</h3>
                            <p class="text-blue-100/70 max-w-md mb-8">Notes, PYQs, and Mind Maps optimized for the 2026
                                Board Exams. All updated as per revised syllabus.</p>
                            <div class="flex flex-wrap gap-4">
                                <a href="#"
                                    class="bg-primary hover:bg-blue-600 text-white px-6 py-3 rounded-2xl font-bold transition-all flex items-center gap-2 group/btn">
                                    Download Bundle <i data-lucide="arrow-right"
                                        class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                                </a>
                                <span class="text-blue-300 text-sm flex items-center gap-2">
                                    <i data-lucide="users" class="w-4 h-4"></i> 12.5k Students accessed
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 grid grid-cols-1 gap-8">
                    <div
                        class="bento-card bg-white/5 border border-white/10 rounded-4xl p-6 hover:bg-white/10 transition-all">
                        <div class="w-12 h-12 rounded-2xl bg-orange-500/10 flex items-center justify-center mb-4">
                            <i data-lucide="map" class="text-orange-500 w-6 h-6"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-2">Interactive Mind Maps</h4>
                        <p class="text-slate-400 text-sm mb-4">Visualize entire chapters in 5 minutes with our visual
                            connectors.</p>
                        <a href="#"
                            class="text-orange-500 text-sm font-bold flex items-center gap-1 hover:gap-2 transition-all">Explore
                            <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                    </div>
                    <div
                        class="bento-card bg-white/5 border border-white/10 rounded-4xl p-6 hover:bg-white/10 transition-all">
                        <div class="w-12 h-12 rounded-2xl bg-green-500/10 flex items-center justify-center mb-4">
                            <i data-lucide="play-circle" class="text-green-500 w-6 h-6"></i>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-2">Concept Videos</h4>
                        <p class="text-slate-400 text-sm mb-4">Short, targeted explanation for complex Physics and Chem
                            topics.</p>
                        <a href="#"
                            class="text-green-500 text-sm font-bold flex items-center gap-1 hover:gap-2 transition-all">Watch
                            Now <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Explorer Section -->
    <section class="py-16 lg:py-24 bg-white" id="browse-resources">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 mb-16">
                <div>
                    <h2 class="text-3xl md:text-5xl font-black text-slate-900 mb-4">Chapter <span
                            class="text-primary italic">Explorer</span></h2>
                    <p class="text-gray-500">Find subject-specific resources with one click.</p>
                </div>

                <!-- Search Bar -->
                <div class="relative w-full max-w-md">
                    <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5"></i>
                    <input type="text" placeholder="Search chapters (e.g. Life Processes)"
                        class="w-full bg-slate-50 border border-slate-200 rounded-2xl py-4 pl-12 pr-4 focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">
                </div>
            </div>

            <!-- Subject Tabs -->
            <div class="flex flex-wrap gap-3 mb-12">
                <button onclick="switchSubject('science')"
                    class="subject-tab tab-active px-8 py-3 rounded-2xl border-2 font-bold transition-all"
                    id="tab-science">Science</button>
                <button onclick="switchSubject('maths')"
                    class="subject-tab px-8 py-3 rounded-2xl border-2 border-slate-100 text-gray-500 font-bold hover:bg-slate-50 transition-all"
                    id="tab-maths">Mathematics</button>
                <button onclick="switchSubject('english')"
                    class="subject-tab px-8 py-3 rounded-2xl border-2 border-slate-100 text-gray-500 font-bold hover:bg-slate-50 transition-all"
                    id="tab-english">English</button>
                <button onclick="switchSubject('social')"
                    class="subject-tab px-8 py-3 rounded-2xl border-2 border-slate-100 text-gray-500 font-bold hover:bg-slate-50 transition-all"
                    id="tab-social">Social Studies</button>
            </div>

            <!-- Chapter Grid (Science Sample) -->
            <div id="chapters-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Chapter Card 1 -->
                <div
                    class="chapter-card group bg-slate-50 rounded-3xl p-6 border border-slate-100 hover:bg-white hover:shadow-premium hover:border-primary/20 transition-all overflow-hidden relative">
                    <div class="flex items-start justify-between mb-6">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                            <span class="text-primary font-bold">01</span>
                        </div>
                        <span
                            class="px-2 py-1 rounded-md bg-green-100 text-green-700 text-[10px] font-black uppercase">Chemistry</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Chemical Reactions & Equations</h4>
                    <p class="text-gray-500 text-sm mb-6">Master balancing equations, types of reactions, and
                        oxidation-reduction concepts.</p>

                    <div class="chapter-links grid grid-cols-2 gap-3">
                        <button onclick="openResourceModal(this, 'Notes')"
                            class="p-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-center hover:bg-primary hover:text-white hover:border-primary transition-all flex items-center justify-center gap-1 cursor-pointer">
                            <i data-lucide="file-text" class="w-3 h-3"></i> Notes
                        </button>
                        <button onclick="openResourceModal(this, 'Questions')"
                            class="p-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-center hover:bg-secondary hover:text-white hover:border-secondary transition-all flex items-center justify-center gap-1 cursor-pointer">
                            <i data-lucide="check-circle" class="w-3 h-3"></i> Solutions
                        </button>
                    </div>
                </div>

                <!-- Chapter Card 2 -->
                <div
                    class="chapter-card group bg-slate-50 rounded-3xl p-6 border border-slate-100 hover:bg-white hover:shadow-premium hover:border-primary/20 transition-all overflow-hidden relative">
                    <div class="flex items-start justify-between mb-6">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                            <span class="text-primary font-bold">02</span>
                        </div>
                        <span
                            class="px-2 py-1 rounded-md bg-green-100 text-green-700 text-[10px] font-black uppercase">Chemistry</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Acids, Bases and Salts</h4>
                    <p class="text-gray-500 text-sm mb-6">Complete guide on pH scale, neutralization reactions, and
                        common salts study.</p>

                    <div class="chapter-links grid grid-cols-2 gap-3">
                        <button onclick="openResourceModal(this, 'Notes')"
                            class="p-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-center hover:bg-primary hover:text-white hover:border-primary transition-all flex items-center justify-center gap-1 cursor-pointer">
                            <i data-lucide="file-text" class="w-3 h-3"></i> Notes
                        </button>
                        <button onclick="openResourceModal(this, 'Questions')"
                            class="p-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-center hover:bg-secondary hover:text-white hover:border-secondary transition-all flex items-center justify-center gap-1 cursor-pointer">
                            <i data-lucide="check-circle" class="w-3 h-3"></i> Solutions
                        </button>
                    </div>
                </div>

                <!-- Chapter Card 3 -->
                <div
                    class="chapter-card group bg-slate-50 rounded-3xl p-6 border border-slate-100 hover:bg-white hover:shadow-premium hover:border-primary/20 transition-all overflow-hidden relative">
                    <div class="flex items-start justify-between mb-6">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                            <span class="text-primary font-bold">03</span>
                        </div>
                        <span
                            class="px-2 py-1 rounded-md bg-blue-100 text-blue-700 text-[10px] font-black uppercase">Biology</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Life Processes</h4>
                    <p class="text-gray-500 text-sm mb-6">Detailed notes on Nutrition, Respiration, Transportation, and
                        Excretion.</p>

                    <div class="chapter-links grid grid-cols-2 gap-3">
                        <button onclick="openResourceModal(this, 'Notes')"
                            class="p-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-center hover:bg-primary hover:text-white hover:border-primary transition-all flex items-center justify-center gap-1 cursor-pointer">
                            <i data-lucide="file-text" class="w-3 h-3"></i> Notes
                        </button>
                        <button onclick="openResourceModal(this, 'Questions')"
                            class="p-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-center hover:bg-secondary hover:text-white hover:border-secondary transition-all flex items-center justify-center gap-1 cursor-pointer">
                            <i data-lucide="check-circle" class="w-3 h-3"></i> Solutions
                        </button>
                    </div>
                </div>

                <!-- Chapter Card 4 -->
                <div
                    class="chapter-card group bg-slate-50 rounded-3xl p-6 border border-slate-100 hover:bg-white hover:shadow-premium hover:border-primary/20 transition-all overflow-hidden relative">
                    <div class="flex items-start justify-between mb-6">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                            <span class="text-primary font-bold">04</span>
                        </div>
                        <span
                            class="px-2 py-1 rounded-md bg-purple-100 text-purple-700 text-[10px] font-black uppercase">Physics</span>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-2">Light – Reflection & Refraction</h4>
                    <p class="text-gray-500 text-sm mb-6">Ray diagrams, Lens formula, Mirror formula, and numerical
                        practice sets.</p>

                    <div class="chapter-links grid grid-cols-2 gap-3">
                        <button onclick="openResourceModal(this, 'Notes')"
                            class="p-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-center hover:bg-primary hover:text-white hover:border-primary transition-all flex items-center justify-center gap-1 cursor-pointer">
                            <i data-lucide="file-text" class="w-3 h-3"></i> Notes
                        </button>
                        <button onclick="openResourceModal(this, 'Questions')"
                            class="p-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-center hover:bg-secondary hover:text-white hover:border-secondary transition-all flex items-center justify-center gap-1 cursor-pointer">
                            <i data-lucide="check-circle" class="w-3 h-3"></i> Solutions
                        </button>
                    </div>
                </div>
            </div>

            <!-- View All Button -->
            <div class="text-center mt-16">
                <button
                    class="bg-slate-900 hover:bg-primary text-white px-10 py-4 rounded-2xl font-bold transition-all shadow-xl active:scale-95">
                    View More Chapters
                </button>
            </div>
        </div>
    </section>

    <!-- Global Exam Materials -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h3 class="text-2xl font-black text-slate-900 mb-12 flex items-center gap-3">
                <i data-lucide="clipboard-check" class="text-primary"></i> Examination Essentials
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- PYQs -->
                <div
                    class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 hover:shadow-premium transition-all">
                    <h5 class="font-bold text-slate-900 mb-2">Previous Year Papers</h5>
                    <p class="text-xs text-gray-500 mb-4">Last 10 years solved papers with step-marking.</p>
                    <a href="#" class="text-primary text-sm font-bold flex items-center gap-1">Download PDF</a>
                </div>
                <!-- Sample Papers -->
                <div
                    class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 hover:shadow-premium transition-all">
                    <h5 class="font-bold text-slate-900 mb-2">Sample Papers 2026</h5>
                    <p class="text-xs text-gray-500 mb-4">Latest patterns including case-based questions.</p>
                    <a href="#" class="text-primary text-sm font-bold flex items-center gap-1">View Samples</a>
                </div>
                <!-- Syllabus -->
                <div
                    class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 hover:shadow-premium transition-all">
                    <h5 class="font-bold text-slate-900 mb-2">Reduced Syllabus</h5>
                    <p class="text-xs text-gray-500 mb-4">Check what's removed for 2025-26 academic year.</p>
                    <a href="#" class="text-primary text-sm font-bold flex items-center gap-1">Check List</a>
                </div>
                <!-- Datesheet -->
                <div
                    class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100 hover:shadow-premium transition-all border-l-4 border-l-secondary">
                    <h5 class="font-bold text-slate-900 mb-2">Board Datesheet 2026</h5>
                    <p class="text-xs text-gray-500 mb-4">Official exam schedule for CBSE and ICSE.</p>
                    <a href="#" class="text-secondary text-sm font-bold flex items-center gap-1">View Schedule</a>
                </div>
            </div>
        </div>
    </section>


<script>
        lucide.createIcons();
        const chaptersContainer = document.getElementById('chapters-container');
        const searchInput = document.querySelector('input[placeholder*="Search"]');
        let currentSubject = 'science';

        function switchSubject(subject) {
            currentSubject = subject;
            // Remove active classes from all tabs
            document.querySelectorAll('.subject-tab').forEach(tab => {
                tab.classList.remove('tab-active');
                tab.classList.add('border-slate-100', 'text-gray-500');
            });

            // Add active class to clicked tab
            const activeTab = document.getElementById(`tab-${subject}`);
            activeTab.classList.add('tab-active');
            activeTab.classList.remove('border-slate-100', 'text-gray-500');

            filterChapters();
        }

        function filterChapters() {
            const searchTerm = searchInput.value.toLowerCase();
            const cards = chaptersContainer.querySelectorAll('.chapter-card');

            cards.forEach(card => {
                const title = card.querySelector('h4').textContent.toLowerCase();
                const subjectLabel = card.querySelector('span[class*="uppercase"]').textContent.toLowerCase();

                // For demo purposes, we'll assume "Science" includes Bio, Chem, Physics labels
                const isScienceChapter = ['biology', 'chemistry', 'physics'].includes(subjectLabel);
                const matchesSubject = (currentSubject === 'science' && isScienceChapter) ||
                    (subjectLabel === currentSubject);

                const matchesSearch = title.includes(searchTerm);

                if (matchesSubject && matchesSearch) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }

        searchInput.addEventListener('input', filterChapters);

        // Modal Logic
        const modal = document.getElementById('resource-modal');
        const modalContent = document.getElementById('resource-modal-content');

        function openResourceModal(btn, type) {
            const chapterCard = btn.closest('.chapter-card');
            const title = chapterCard.querySelector('h4').textContent;
            const subject = chapterCard.querySelector('span[class*="uppercase"]').textContent;

            // Update Modal UI
            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-badge').textContent = type + ' • ' + subject;

            // Customize icon based on type
            const iconContainer = document.getElementById('modal-icon-container');
            const iconElement = document.getElementById('modal-icon');

            let listHtml = '';

            if (type === 'Notes') {
                iconContainer.className = 'w-12 h-12 rounded-xl flex items-center justify-center bg-primary/10 text-primary';
                iconElement.outerHTML = '<i id="modal-icon" data-lucide="file-text" class="w-6 h-6"></i>';

                listHtml = `
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 hover:bg-slate-50 rounded-xl transition-colors border-b border-slate-100 last:border-0 gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600 shrink-0">
                                <i data-lucide="file-text" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-slate-900">Detailed Chapter Notes</h5>
                                <p class="text-xs text-slate-500 mt-1">PDF • 2.4 MB • Complete Theory</p>
                            </div>
                        </div>
                        <button class="flex items-center justify-center gap-2 px-4 py-2 bg-primary/10 text-primary hover:bg-primary hover:text-white rounded-lg font-bold text-sm transition-all w-full sm:w-auto">
                            <i data-lucide="download" class="w-4 h-4"></i> <span>Download</span>
                        </button>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 hover:bg-slate-50 rounded-xl transition-colors border-b border-slate-100 last:border-0 gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-orange-50 flex items-center justify-center text-orange-600 shrink-0">
                                <i data-lucide="zap" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-slate-900">Quick Revision & Formulas</h5>
                                <p class="text-xs text-slate-500 mt-1">PDF • 1.1 MB • Highly Recommended</p>
                            </div>
                        </div>
                        <button class="flex items-center justify-center gap-2 px-4 py-2 bg-primary/10 text-primary hover:bg-primary hover:text-white rounded-lg font-bold text-sm transition-all w-full sm:w-auto">
                            <i data-lucide="download" class="w-4 h-4"></i> <span>Download</span>
                        </button>
                    </div>
                `;
            } else {
                iconContainer.className = 'w-12 h-12 rounded-xl flex items-center justify-center bg-secondary/10 text-secondary';
                iconElement.outerHTML = '<i id="modal-icon" data-lucide="check-circle" class="w-6 h-6"></i>';

                listHtml = `
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 hover:bg-slate-50 rounded-xl transition-colors border-b border-slate-100 last:border-0 gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-green-50 flex items-center justify-center text-green-600 shrink-0">
                                <i data-lucide="check-square" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-slate-900">NCERT In-text & Exercise Solutions</h5>
                                <p class="text-xs text-slate-500 mt-1">PDF • 3.2 MB • Step-by-step Solutions</p>
                            </div>
                        </div>
                        <button class="flex items-center justify-center gap-2 px-4 py-2 bg-secondary/10 text-secondary hover:bg-secondary hover:text-white rounded-lg font-bold text-sm transition-all w-full sm:w-auto">
                            <i data-lucide="download" class="w-4 h-4"></i> <span>Download</span>
                        </button>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 hover:bg-slate-50 rounded-xl transition-colors border-b border-slate-100 last:border-0 gap-4">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-purple-50 flex items-center justify-center text-purple-600 shrink-0">
                                <i data-lucide="target" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-slate-900">Previous Year Questions (PYQs)</h5>
                                <p class="text-xs text-slate-500 mt-1">PDF • 4.5 MB • Last 10 Years</p>
                            </div>
                        </div>
                        <button class="flex items-center justify-center gap-2 px-4 py-2 bg-secondary/10 text-secondary hover:bg-secondary hover:text-white rounded-lg font-bold text-sm transition-all w-full sm:w-auto">
                            <i data-lucide="download" class="w-4 h-4"></i> <span>Download</span>
                        </button>
                    </div>
                `;
            }

            document.getElementById('resource-list-container').innerHTML = listHtml;

            lucide.createIcons(); // re-init icons for the modal

            // Show Modal
            modal.classList.remove('hidden');
            modal.classList.add('flex');

            // Trigger animation
            setTimeout(() => {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 10);
        }

        function closeResourceModal() {
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');

            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 300);
        }
    </script>
<?php include 'components/footer.php'; ?>
