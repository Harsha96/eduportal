<?php
$pageTitle = 'Reference Books Store | Unidemy Global';
$pageDescription = 'Browse and download reference books for various disciplines at Unidemy Global.';
include 'components/header.php';
?>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-16 bg-[#0B1121] overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        <div class="max-w-4xl mx-auto px-6 lg:px-8 relative z-10 text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-primary/20 text-blue-300 text-sm font-bold mb-4 border border-primary/30">
                Digital Library
            </span>
            <h1 class="text-4xl md:text-5xl font-black text-white mb-6 leading-tight">
                Reference Books Store
            </h1>
            <p class="text-lg text-slate-400 mb-8 max-w-2xl mx-auto">
                Explore our curated collection of essential reference books, textbooks, and guides across all major disciplines to support your academic journey.
            </p>
            
            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto relative group">
                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                    <i data-lucide="search" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                </div>
                <input type="text" id="book-search"
                    class="block w-full p-4 pl-12 text-sm text-gray-900 bg-white border border-gray-200 rounded-2xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all shadow-sm"
                    placeholder="Search for books, authors, or subjects...">
                <button type="button"
                    class="text-white absolute right-2.5 bottom-2.5 bg-primary hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 py-2 transition-colors">
                    Search
                </button>
            </div>
        </div>
    </section>

    <!-- Store Section -->
    <section class="py-16 bg-background relative" id="store">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            
            <!-- Categories / Filters -->
            <div class="flex flex-wrap items-center justify-center gap-2 mb-12" id="category-tabs">
                <button class="px-6 py-2.5 rounded-full text-sm font-medium transition-all tab-active" data-cat="all">All Books</button>
                <button class="px-6 py-2.5 rounded-full text-sm font-medium text-slate-600 bg-white hover:bg-slate-50 border border-slate-200 transition-all" data-cat="science">Science</button>
                <button class="px-6 py-2.5 rounded-full text-sm font-medium text-slate-600 bg-white hover:bg-slate-50 border border-slate-200 transition-all" data-cat="math">Mathematics</button>
                <button class="px-6 py-2.5 rounded-full text-sm font-medium text-slate-600 bg-white hover:bg-slate-50 border border-slate-200 transition-all" data-cat="humanities">Humanities</button>
                <button class="px-6 py-2.5 rounded-full text-sm font-medium text-slate-600 bg-white hover:bg-slate-50 border border-slate-200 transition-all" data-cat="commerce">Commerce</button>
            </div>

            <!-- Books Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="books-grid">
                
                <!-- Book Card 1 -->
                <div class="book-card bg-white rounded-2xl overflow-hidden border border-gray-100 flex flex-col group" data-category="science">
                    <div class="relative pt-[130%] bg-slate-100 overflow-hidden">
                        <!-- Placeholder cover -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-center bg-gradient-to-br from-blue-500 to-indigo-700">
                            <i data-lucide="microscope" class="w-16 h-16 text-white/50 mb-4"></i>
                            <h3 class="text-white font-serif font-bold text-xl leading-tight">Advanced Physics Concepts</h3>
                        </div>
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-primary">Science</div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="font-bold text-gray-900 text-lg mb-1 leading-tight group-hover:text-primary transition-colors">Advanced Physics Concepts</h4>
                        <p class="text-sm text-gray-500 mb-3 block">Dr. Robert Oppenheimer</p>
                        <div class="flex items-center gap-1 mb-4">
                            <div class="flex text-warning">
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star-half" class="w-4 h-4 fill-current"></i>
                            </div>
                            <span class="text-xs text-gray-400 ml-1">(128)</span>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <span class="font-bold text-lg text-slate-900">Free</span>
                            <button class="flex items-center gap-1 text-sm font-semibold text-primary bg-primary/10 hover:bg-primary/20 px-4 py-2 rounded-lg transition-colors">
                                <i data-lucide="download" class="w-4 h-4"></i> Get PDF
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Book Card 2 -->
                <div class="book-card bg-white rounded-2xl overflow-hidden border border-gray-100 flex flex-col group" data-category="math">
                    <div class="relative pt-[130%] bg-slate-100 overflow-hidden">
                        <!-- Placeholder cover -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-center bg-gradient-to-br from-rose-500 to-red-700">
                            <i data-lucide="calculator" class="w-16 h-16 text-white/50 mb-4"></i>
                            <h3 class="text-white font-serif font-bold text-xl leading-tight">Calculus Unraveled</h3>
                        </div>
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-rose-600">Mathematics</div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="font-bold text-gray-900 text-lg mb-1 leading-tight group-hover:text-primary transition-colors">Calculus Unraveled</h4>
                        <p class="text-sm text-gray-500 mb-3 block">Prof. Alan Turing</p>
                        <div class="flex items-center gap-1 mb-4">
                            <div class="flex text-warning">
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            </div>
                            <span class="text-xs text-gray-400 ml-1">(342)</span>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <div class="flex flex-col h-11 justify-center">
                                <span class="font-bold text-sm text-secondary">Premium Resource</span>
                            </div>
                            <button class="flex items-center gap-1 text-sm font-semibold text-white bg-secondary hover:bg-orange-600 px-4 py-2 rounded-lg transition-colors shadow-sm shadow-secondary/30">
                                <i data-lucide="shopping-cart" class="w-4 h-4"></i> Buy Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Book Card 3 -->
                <div class="book-card bg-white rounded-2xl overflow-hidden border border-gray-100 flex flex-col group" data-category="humanities">
                    <div class="relative pt-[130%] bg-slate-100 overflow-hidden">
                        <!-- Placeholder cover -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-center bg-gradient-to-br from-emerald-500 to-teal-700">
                            <i data-lucide="globe" class="w-16 h-16 text-white/50 mb-4"></i>
                            <h3 class="text-white font-serif font-bold text-xl leading-tight">World History: A Modern Perspective</h3>
                        </div>
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-emerald-600">Humanities</div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="font-bold text-gray-900 text-lg mb-1 leading-tight group-hover:text-primary transition-colors">World History: A Modern Perspective</h4>
                        <p class="text-sm text-gray-500 mb-3 block">Sarah Jenkins</p>
                        <div class="flex items-center gap-1 mb-4">
                            <div class="flex text-warning">
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 text-gray-300"></i>
                            </div>
                            <span class="text-xs text-gray-400 ml-1">(89)</span>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <span class="font-bold text-lg text-slate-900">Free</span>
                            <button class="flex items-center gap-1 text-sm font-semibold text-primary bg-primary/10 hover:bg-primary/20 px-4 py-2 rounded-lg transition-colors">
                                <i data-lucide="download" class="w-4 h-4"></i> Get PDF
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Book Card 4 -->
                <div class="book-card bg-white rounded-2xl overflow-hidden border border-gray-100 flex flex-col group" data-category="commerce">
                    <div class="relative pt-[130%] bg-slate-100 overflow-hidden">
                        <!-- Placeholder cover -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-center bg-gradient-to-br from-amber-500 to-orange-700">
                            <i data-lucide="pie-chart" class="w-16 h-16 text-white/50 mb-4"></i>
                            <h3 class="text-white font-serif font-bold text-xl leading-tight">Principles of Macroeconomics</h3>
                        </div>
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-amber-600">Commerce</div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="font-bold text-gray-900 text-lg mb-1 leading-tight group-hover:text-primary transition-colors">Principles of Macroeconomics</h4>
                        <p class="text-sm text-gray-500 mb-3 block">Dr. John Keynes</p>
                        <div class="flex items-center gap-1 mb-4">
                            <div class="flex text-warning">
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star-half" class="w-4 h-4 fill-current"></i>
                            </div>
                            <span class="text-xs text-gray-400 ml-1">(215)</span>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <div class="flex flex-col h-11 justify-center">
                                <span class="font-bold text-sm text-secondary">Premium Resource</span>
                            </div>
                            <button class="flex items-center gap-1 text-sm font-semibold text-white bg-secondary hover:bg-orange-600 px-4 py-2 rounded-lg transition-colors shadow-sm shadow-secondary/30">
                                <i data-lucide="shopping-cart" class="w-4 h-4"></i> Buy Now
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Book Card 5 -->
                <div class="book-card bg-white rounded-2xl overflow-hidden border border-gray-100 flex flex-col group" data-category="science">
                    <div class="relative pt-[130%] bg-slate-100 overflow-hidden">
                        <!-- Placeholder cover -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-center bg-gradient-to-br from-violet-500 to-purple-700">
                            <i data-lucide="flask-conical" class="w-16 h-16 text-white/50 mb-4"></i>
                            <h3 class="text-white font-serif font-bold text-xl leading-tight">Organic Chemistry Demystified</h3>
                        </div>
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-violet-600">Science</div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="font-bold text-gray-900 text-lg mb-1 leading-tight group-hover:text-primary transition-colors">Organic Chemistry Demystified</h4>
                        <p class="text-sm text-gray-500 mb-3 block">Marie Curie</p>
                        <div class="flex items-center gap-1 mb-4">
                            <div class="flex text-warning">
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            </div>
                            <span class="text-xs text-gray-400 ml-1">(402)</span>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <span class="font-bold text-lg text-slate-900">Free</span>
                            <button class="flex items-center gap-1 text-sm font-semibold text-primary bg-primary/10 hover:bg-primary/20 px-4 py-2 rounded-lg transition-colors">
                                <i data-lucide="download" class="w-4 h-4"></i> Get PDF
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Book Card 6 -->
                <div class="book-card bg-white rounded-2xl overflow-hidden border border-gray-100 flex flex-col group" data-category="math">
                    <div class="relative pt-[130%] bg-slate-100 overflow-hidden">
                        <!-- Placeholder cover -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center p-6 text-center bg-gradient-to-br from-slate-700 to-black">
                            <i data-lucide="hexagon" class="w-16 h-16 text-white/50 mb-4"></i>
                            <h3 class="text-white font-serif font-bold text-xl leading-tight">Linear Algebra Foundations</h3>
                        </div>
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-2 py-1 rounded text-xs font-bold text-slate-800">Mathematics</div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="font-bold text-gray-900 text-lg mb-1 leading-tight group-hover:text-primary transition-colors">Linear Algebra Foundations</h4>
                        <p class="text-sm text-gray-500 mb-3 block">David Hilbert</p>
                        <div class="flex items-center gap-1 mb-4">
                            <div class="flex text-warning">
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star-half" class="w-4 h-4 fill-current"></i>
                            </div>
                            <span class="text-xs text-gray-400 ml-1">(156)</span>
                        </div>
                        <div class="mt-auto flex items-center justify-between">
                            <div class="flex flex-col h-11 justify-center">
                                <span class="font-bold text-sm text-secondary">Premium Resource</span>
                            </div>
                            <button class="flex items-center gap-1 text-sm font-semibold text-white bg-secondary hover:bg-orange-600 px-4 py-2 rounded-lg transition-colors shadow-sm shadow-secondary/30">
                                <i data-lucide="shopping-cart" class="w-4 h-4"></i> Buy Now
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                <nav class="flex items-center gap-2">
                    <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-white border border-gray-200 text-gray-500 hover:bg-gray-50 hover:text-primary transition-colors disabled:opacity-50">
                        <i data-lucide="chevron-left" class="w-5 h-5"></i>
                    </button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-primary text-white font-bold shadow-md shadow-primary/30">1</button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 hover:text-primary font-medium transition-colors">2</button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 hover:text-primary font-medium transition-colors">3</button>
                    <span class="px-2 text-gray-400">...</span>
                    <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-white border border-gray-200 text-gray-700 hover:bg-gray-50 hover:text-primary font-medium transition-colors">12</button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-white border border-gray-200 text-gray-500 hover:bg-gray-50 hover:text-primary transition-colors">
                        <i data-lucide="chevron-right" class="w-5 h-5"></i>
                    </button>
                </nav>
            </div>

        </div>
    </section>


<script>
        lucide.createIcons();
        
        // Mobile menu toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const overlay = document.getElementById('mobile-overlay');
        
        if(btn && menu && overlay) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                overlay.classList.toggle('hidden');
            });
            overlay.addEventListener('click', () => {
                menu.classList.add('hidden');
                overlay.classList.add('hidden');
            });
        }
        
        // Category filtering logic
        const tabs = document.querySelectorAll('#category-tabs button');
        const books = document.querySelectorAll('.book-card');
        const searchInput = document.getElementById('book-search');

        function filterBooks() {
            const activeTab = document.querySelector('#category-tabs button.tab-active');
            const category = activeTab ? activeTab.getAttribute('data-cat') : 'all';
            const searchTerm = searchInput.value.toLowerCase();

            books.forEach(book => {
                const bookCategory = book.getAttribute('data-category');
                const title = book.querySelector('h4').textContent.toLowerCase();
                const author = book.querySelector('p').textContent.toLowerCase();
                
                const matchesCategory = category === 'all' || bookCategory === category;
                const matchesSearch = title.includes(searchTerm) || author.includes(searchTerm);

                if (matchesCategory && matchesSearch) {
                    book.style.display = 'flex';
                } else {
                    book.style.display = 'none';
                }
            });
        }

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => {
                    t.classList.remove('tab-active');
                    t.classList.add('text-slate-600', 'bg-white', 'border-slate-200');
                });
                tab.classList.add('tab-active');
                tab.classList.remove('text-slate-600', 'bg-white', 'border-slate-200');
                filterBooks();
            });
        });

        if (searchInput) {
            searchInput.addEventListener('input', filterBooks);
        }
    </script>
<?php include 'components/footer.php'; ?>
