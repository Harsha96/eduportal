<?php
$pageTitle = 'Detailed Notes | Unidemy Global';
$pageDescription = 'Comprehensive revision notes for all subjects, designed for quick learning at Unidemy Global.';
include 'components/header.php';
?>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-orange-50 overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-30"></div>
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-orange-400 rounded-full blur-[128px] opacity-20"></div>
        <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-background to-transparent"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 text-center">
            <span
                class="inline-block py-1 px-3 rounded-full bg-orange-100 text-orange-600 border border-orange-200 text-sm font-bold mb-6">
                <i data-lucide="zap" class="w-4 h-4 inline-block mr-1"></i> Quick Revision
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 mb-6 leading-tight">
                Top-Tier <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-amber-500">Revision
                    Notes</span>
            </h1>
            <p class="text-lg text-slate-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                Download beautifully formatted, concise PDF notes designed to help you memorize essential concepts
                instantly before your exams.
            </p>

            <div class="max-w-2xl mx-auto relative group">
                <div class="absolute inset-y-0 left-0 flex items-center pl-5 pointer-events-none">
                    <i data-lucide="search"
                        class="w-5 h-5 text-gray-400 group-focus-within:text-orange-500 transition-colors"></i>
                </div>
                <input type="text" id="note-search"
                    class="block w-full p-4 pl-14 text-sm text-gray-900 bg-white border border-gray-200 rounded-full focus:ring-4 focus:ring-orange-500/20 focus:border-orange-500 transition-all shadow-lg shadow-slate-200/50"
                    placeholder="Search by topic (e.g., Magnetism, Calculus)...">
                <button type="button"
                    class="text-white absolute right-2.5 bottom-2 bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-bold rounded-full text-sm px-6 py-2.5 transition-colors shadow-md shadow-orange-500/30">
                    Find Notes
                </button>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16 md:py-24 bg-background relative" id="notes-content">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex flex-col md:flex-row items-center justify-between mb-12 gap-6">
                <h2 class="text-3xl font-black text-gray-900">Recent Uploads</h2>

                <!-- Filters -->
                <div class="flex flex-wrap items-center gap-2 bg-white p-1.5 rounded-full border border-gray-200 shadow-sm"
                    id="category-tabs">
                    <button class="px-5 py-2 rounded-full text-sm font-bold transition-all filter-tab-active"
                        data-cat="all">All</button>
                    <button
                        class="px-5 py-2 rounded-full text-sm font-bold text-gray-600 hover:text-orange-600 hover:bg-orange-50 transition-all"
                        data-cat="science">Science</button>
                    <button
                        class="px-5 py-2 rounded-full text-sm font-bold text-gray-600 hover:text-orange-600 hover:bg-orange-50 transition-all"
                        data-cat="math">Maths</button>
                    <button
                        class="px-5 py-2 rounded-full text-sm font-bold text-gray-600 hover:text-orange-600 hover:bg-orange-50 transition-all"
                        data-cat="english">English</button>
                </div>
            </div>

            <!-- Notes List (Document Style) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="notes-grid">

                <!-- Document Card 1 -->
                <a href="#"
                    class="note-item group flex flex-col p-6 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-orange-200 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                    data-category="science">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-orange-50 rounded-full blur-3xl -mr-10 -mt-10 transition-transform group-hover:scale-150">
                    </div>
                    <div class="flex items-start justify-between relative z-10 mb-6">
                        <div
                            class="w-14 h-14 rounded-2xl bg-orange-100 text-orange-600 flex items-center justify-center group-hover:bg-orange-500 group-hover:text-white transition-colors duration-300 shadow-inner">
                            <i data-lucide="file-text" class="w-7 h-7"></i>
                        </div>
                        <span
                            class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-bold rounded-full group-hover:bg-orange-100 group-hover:text-orange-700 transition-colors">Class
                            12</span>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-2 relative z-10 group-hover:text-orange-600 transition-colors">
                        Magnetic Effects of Current & Magnetism</h3>
                    <p class="text-sm text-gray-500 line-clamp-2 relative z-10 flex-1">Complete chapter notes including
                        Biot-Savart law, Ampere's circuital law, and the force between two parallel currents.</p>

                    <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between relative z-10">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-red-500 border border-red-200">
                                <i data-lucide="file-type-2" class="w-4 h-4"></i>
                            </div>
                            <span class="text-xs text-gray-500 font-medium">PDF • 3.4 MB</span>
                        </div>
                        <span
                            class="text-orange-600 text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all bg-orange-50 px-3 py-1.5 rounded-lg">
                            Get <i data-lucide="download" class="w-4 h-4"></i>
                        </span>
                    </div>
                </a>

                <!-- Document Card 2 -->
                <a href="#"
                    class="note-item group flex flex-col p-6 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-orange-200 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                    data-category="math">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-blue-50 rounded-full blur-3xl -mr-10 -mt-10 transition-transform group-hover:scale-150">
                    </div>
                    <div class="flex items-start justify-between relative z-10 mb-6">
                        <div
                            class="w-14 h-14 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center group-hover:bg-blue-500 group-hover:text-white transition-colors duration-300 shadow-inner">
                            <i data-lucide="file-text" class="w-7 h-7"></i>
                        </div>
                        <span
                            class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-bold rounded-full group-hover:bg-blue-100 group-hover:text-blue-700 transition-colors">Class
                            12</span>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-2 relative z-10 group-hover:text-blue-600 transition-colors">
                        Integrals & Its Applications</h3>
                    <p class="text-sm text-gray-500 line-clamp-2 relative z-10 flex-1">Key formulas, trick methods for
                        integration by parts, and definite integral properties mapped out cleanly.</p>

                    <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between relative z-10">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-red-500 border border-red-200">
                                <i data-lucide="file-type-2" class="w-4 h-4"></i>
                            </div>
                            <span class="text-xs text-gray-500 font-medium">PDF • 2.1 MB</span>
                        </div>
                        <span
                            class="text-blue-600 text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all bg-blue-50 px-3 py-1.5 rounded-lg">
                            Get <i data-lucide="download" class="w-4 h-4"></i>
                        </span>
                    </div>
                </a>

                <!-- Document Card 3 -->
                <a href="#"
                    class="note-item group flex flex-col p-6 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-orange-200 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                    data-category="science">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-purple-50 rounded-full blur-3xl -mr-10 -mt-10 transition-transform group-hover:scale-150">
                    </div>
                    <div class="flex items-start justify-between relative z-10 mb-6">
                        <div
                            class="w-14 h-14 rounded-2xl bg-purple-100 text-purple-600 flex items-center justify-center group-hover:bg-purple-500 group-hover:text-white transition-colors duration-300 shadow-inner">
                            <i data-lucide="file-text" class="w-7 h-7"></i>
                        </div>
                        <span
                            class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-bold rounded-full group-hover:bg-purple-100 group-hover:text-purple-700 transition-colors">Class
                            11</span>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-2 relative z-10 group-hover:text-purple-600 transition-colors">
                        Chemical Thermodynamics</h3>
                    <p class="text-sm text-gray-500 line-clamp-2 relative z-10 flex-1">Extensive coverage of First Law,
                        Second Law, Enthalpy, Entropy, and Gibbs Free Energy.</p>

                    <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between relative z-10">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-red-500 border border-red-200">
                                <i data-lucide="file-type-2" class="w-4 h-4"></i>
                            </div>
                            <span class="text-xs text-gray-500 font-medium">PDF • 4.8 MB</span>
                        </div>
                        <span
                            class="text-purple-600 text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all bg-purple-50 px-3 py-1.5 rounded-lg">
                            Get <i data-lucide="download" class="w-4 h-4"></i>
                        </span>
                    </div>
                </a>

                <!-- Document Card 4 -->
                <a href="#"
                    class="note-item group flex flex-col p-6 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-orange-200 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                    data-category="science">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-emerald-50 rounded-full blur-3xl -mr-10 -mt-10 transition-transform group-hover:scale-150">
                    </div>
                    <div class="flex items-start justify-between relative z-10 mb-6">
                        <div
                            class="w-14 h-14 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center group-hover:bg-emerald-500 group-hover:text-white transition-colors duration-300 shadow-inner">
                            <i data-lucide="file-text" class="w-7 h-7"></i>
                        </div>
                        <span
                            class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-bold rounded-full group-hover:bg-emerald-100 group-hover:text-emerald-700 transition-colors">Class
                            12</span>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-2 relative z-10 group-hover:text-emerald-600 transition-colors">
                        Molecular Basis of Inheritance</h3>
                    <p class="text-sm text-gray-500 line-clamp-2 relative z-10 flex-1">DNA structure, replication
                        machinery, and RNA characteristics.</p>

                    <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between relative z-10">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-red-500 border border-red-200">
                                <i data-lucide="file-type-2" class="w-4 h-4"></i>
                            </div>
                            <span class="text-xs text-gray-500 font-medium">PDF • 5.5 MB</span>
                        </div>
                        <span
                            class="text-emerald-600 text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all bg-emerald-50 px-3 py-1.5 rounded-lg">
                            Get <i data-lucide="download" class="w-4 h-4"></i>
                        </span>
                    </div>
                </a>

                <!-- Document Card 5 -->
                <a href="#"
                    class="note-item group flex flex-col p-6 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-orange-200 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                    data-category="english">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-rose-50 rounded-full blur-3xl -mr-10 -mt-10 transition-transform group-hover:scale-150">
                    </div>
                    <div class="flex items-start justify-between relative z-10 mb-6">
                        <div
                            class="w-14 h-14 rounded-2xl bg-rose-100 text-rose-600 flex items-center justify-center group-hover:bg-rose-500 group-hover:text-white transition-colors duration-300 shadow-inner">
                            <i data-lucide="file-text" class="w-7 h-7"></i>
                        </div>
                        <span
                            class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-bold rounded-full group-hover:bg-rose-100 group-hover:text-rose-700 transition-colors">Class
                            12</span>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-2 relative z-10 group-hover:text-rose-600 transition-colors">
                        The Last Lesson (Flamingo)</h3>
                    <p class="text-sm text-gray-500 line-clamp-2 relative z-10 flex-1">Theme, message, character sketch
                        of M. Hamel and Franz, and important Q&A.</p>

                    <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between relative z-10">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-red-500 border border-red-200">
                                <i data-lucide="file-type-2" class="w-4 h-4"></i>
                            </div>
                            <span class="text-xs text-gray-500 font-medium">PDF • 1.2 MB</span>
                        </div>
                        <span
                            class="text-rose-600 text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all bg-rose-50 px-3 py-1.5 rounded-lg">
                            Get <i data-lucide="download" class="w-4 h-4"></i>
                        </span>
                    </div>
                </a>

                <!-- Document Card 6 -->
                <a href="#"
                    class="note-item group flex flex-col p-6 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-orange-200 hover:-translate-y-1 transition-all duration-300 relative overflow-hidden"
                    data-category="math">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-yellow-50 rounded-full blur-3xl -mr-10 -mt-10 transition-transform group-hover:scale-150">
                    </div>
                    <div class="flex items-start justify-between relative z-10 mb-6">
                        <div
                            class="w-14 h-14 rounded-2xl bg-yellow-100 text-yellow-600 flex items-center justify-center group-hover:bg-yellow-500 group-hover:text-white transition-colors duration-300 shadow-inner">
                            <i data-lucide="file-text" class="w-7 h-7"></i>
                        </div>
                        <span
                            class="px-3 py-1 bg-slate-100 text-slate-600 text-xs font-bold rounded-full group-hover:bg-yellow-100 group-hover:text-yellow-700 transition-colors">Class
                            10</span>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-2 relative z-10 group-hover:text-yellow-600 transition-colors">
                        Trigonometry Basics</h3>
                    <p class="text-sm text-gray-500 line-clamp-2 relative z-10 flex-1">Identities, ratios, and height &
                        distance formulation tricks.</p>

                    <div class="mt-6 pt-4 border-t border-gray-100 flex items-center justify-between relative z-10">
                        <div class="flex items-center gap-2">
                            <div
                                class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center text-red-500 border border-red-200">
                                <i data-lucide="file-type-2" class="w-4 h-4"></i>
                            </div>
                            <span class="text-xs text-gray-500 font-medium">PDF • 1.8 MB</span>
                        </div>
                        <span
                            class="text-yellow-600 text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all bg-yellow-50 px-3 py-1.5 rounded-lg">
                            Get <i data-lucide="download" class="w-4 h-4"></i>
                        </span>
                    </div>
                </a>

            </div>
        </div>
    </section>


<script>
        lucide.createIcons();

        // Tab switching logic for categories
        const tabs = document.querySelectorAll('#category-tabs button');
        const items = document.querySelectorAll('.note-item');
        const searchInput = document.getElementById('note-search');

        function filterItems() {
            const activeTab = document.querySelector('#category-tabs button.filter-tab-active');
            const category = activeTab ? activeTab.getAttribute('data-cat') : 'all';
            const searchTerm = searchInput.value.toLowerCase();

            items.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                const title = item.querySelector('h3').textContent.toLowerCase();
                const desc = item.querySelector('p').textContent.toLowerCase();

                const matchesCategory = category === 'all' || itemCategory === category;
                const matchesSearch = title.includes(searchTerm) || desc.includes(searchTerm);

                if (matchesCategory && matchesSearch) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => {
                    t.classList.remove('filter-tab-active');
                    t.classList.add('text-gray-600');
                });
                tab.classList.remove('text-gray-600');
                tab.classList.add('filter-tab-active');
                filterItems();
            });
        });

        if (searchInput) {
            searchInput.addEventListener('input', filterItems);
        }
    </script>
<?php include 'components/footer.php'; ?>
