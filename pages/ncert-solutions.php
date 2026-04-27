<?php
$pageTitle = 'NCERT Solutions | Unidemy Global';
$pageDescription = 'Step-by-step NCERT solutions for CBSE board exams, crafted by experts at Unidemy Global.';
$base_url = '../';
include '../components/header.php';
?>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-emerald-950 overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-emerald-500 rounded-full blur-[128px] opacity-20"></div>
        <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-background to-transparent"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1 text-center md:text-left">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 text-sm font-bold mb-6">
                        <i data-lucide="shield-check" class="w-4 h-4"></i>
                        100% Accurate & Verified
                    </div>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight">
                        NCERT Solutions <br class="hidden md:block" />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-300">Made
                            Simple.</span>
                    </h1>
                    <p class="text-lg text-emerald-100/70 mb-8 max-w-xl mx-auto md:mx-0 leading-relaxed">
                        Master your CBSE board exams with our comprehensive, step-by-step chapter-wise solutions crafted
                        by subject matter experts.
                    </p>

                    <div class="flex items-center gap-4 justify-center md:justify-start">
                        <a href="#classes"
                            class="bg-emerald-500 hover:bg-emerald-400 text-white px-8 py-3.5 rounded-full font-bold transition-all shadow-lg shadow-emerald-500/30 hover:shadow-emerald-500/50 hover:-translate-y-1">
                            Browse Solutions
                        </a>
                        <div class="flex items-center -space-x-3">
                            <img src="https://i.pravatar.cc/100?img=1" alt="Student"
                                class="w-10 h-10 rounded-full border-2 border-emerald-950">
                            <img src="https://i.pravatar.cc/100?img=2" alt="Student"
                                class="w-10 h-10 rounded-full border-2 border-emerald-950">
                            <img src="https://i.pravatar.cc/100?img=3" alt="Student"
                                class="w-10 h-10 rounded-full border-2 border-emerald-950">
                            <div
                                class="w-10 h-10 rounded-full border-2 border-emerald-950 bg-emerald-800 flex items-center justify-center text-xs text-white font-bold">
                                +2k</div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 relative hidden lg:block">
                    <!-- Beautiful floating UI cards representation -->
                    <div class="relative w-full aspect-square max-w-lg mx-auto">
                        <div
                            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-emerald-500/20 rounded-full blur-3xl">
                        </div>

                        <div
                            class="absolute top-10 left-10 bg-white p-4 rounded-2xl shadow-2xl transform -rotate-6 w-64 border border-gray-100 flex items-start gap-4 animate-[bounce_6s_infinite_ease-in-out]">
                            <div
                                class="w-12 h-12 rounded-xl bg-orange-100 text-orange-600 flex items-center justify-center shrink-0">
                                <i data-lucide="function-square" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Integration</h4>
                                <p class="text-xs text-gray-500">Class 12 Maths • Ch 7</p>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-20 right-0 bg-white p-4 rounded-2xl shadow-2xl transform rotate-3 w-64 border border-gray-100 flex items-start gap-4 animate-[bounce_7s_infinite_ease-in-out_1s]">
                            <div
                                class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center shrink-0">
                                <i data-lucide="atom" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Atoms</h4>
                                <p class="text-xs text-gray-500">Class 12 Physics • Ch 12</p>
                            </div>
                        </div>

                        <div
                            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white/10 backdrop-blur-md p-6 rounded-3xl border border-white/20 text-center w-48 shadow-2xl text-white z-10">
                            <i data-lucide="bookmark-check" class="w-12 h-12 mx-auto text-emerald-400 mb-3"></i>
                            <h3 class="font-black tracking-wide">NCERT</h3>
                            <p class="text-xs text-emerald-200 uppercase tracking-widest mt-1">SOLUTIONS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16 md:py-24 bg-background relative" id="classes">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center mb-12">
                <h2 class="text-3xl font-black text-gray-900 mb-4">Select Your Class</h2>
                <p class="text-gray-500">Choose your current grade to explore subjects and specific chapter chapters.
                </p>
            </div>

            <!-- Class Selection Pills -->
            <div class="flex overflow-x-auto md:flex-wrap items-center md:justify-center gap-4 mb-20 pb-2 scrollbar-hide mobile-scroll-x" id="class-tabs">
                <button
                    class="px-8 py-4 rounded-2xl text-lg font-bold transition-all class-tab-active bg-white border border-gray-200 text-gray-400 hover:border-emerald-300 whitespace-nowrap"
                    data-class="12">Class 12</button>
                <button
                    class="px-8 py-4 rounded-2xl text-lg font-bold transition-all bg-white border border-gray-200 text-gray-600 hover:border-emerald-300 hover:text-emerald-600 shadow-sm whitespace-nowrap"
                    data-class="11">Class 11</button>
                <button
                    class="px-8 py-4 rounded-2xl text-lg font-bold transition-all bg-white border border-gray-200 text-gray-600 hover:border-emerald-300 hover:text-emerald-600 shadow-sm whitespace-nowrap"
                    data-class="10">Class 10</button>
                <button
                    class="px-8 py-4 rounded-2xl text-lg font-bold transition-all bg-white border border-gray-200 text-gray-600 hover:border-emerald-300 hover:text-emerald-600 shadow-sm whitespace-nowrap"
                    data-class="9">Class 9</button>
            </div>

            <div class="mb-8 flex items-center justify-between">
                <h3 class="text-2xl font-bold text-gray-900">Subjects</h3>
                <div class="relative max-w-xs w-full">
                    <i data-lucide="search" class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="text" placeholder="Search subject..."
                        class="w-full pl-10 pr-4 py-2 rounded-xl border border-gray-200 bg-white focus:outline-none focus:ring-2 focus:ring-emerald-500/50 focus:border-emerald-500 text-sm">
                </div>
            </div>

            <!-- Subjects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="subjects-grid">

                <!-- Subject 1 -->
                <a href="#"
                    class="group flex items-center p-6 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="w-16 h-16 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                        <i data-lucide="microscope" class="w-8 h-8"></i>
                    </div>
                    <div class="ml-5 flex-1">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-emerald-600 transition-colors">
                            Physics</h3>
                        <p class="text-sm text-gray-500 mt-1 flex items-center gap-2"><i data-lucide="layers"
                                class="w-3 h-3"></i> 14 Chapters</p>
                    </div>
                    <div
                        class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </div>
                </a>

                <!-- Subject 2 -->
                <a href="#"
                    class="group flex items-center p-6 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="w-16 h-16 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center shrink-0 group-hover:bg-orange-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                        <i data-lucide="sigma" class="w-8 h-8"></i>
                    </div>
                    <div class="ml-5 flex-1">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-emerald-600 transition-colors">
                            Mathematics</h3>
                        <p class="text-sm text-gray-500 mt-1 flex items-center gap-2"><i data-lucide="layers"
                                class="w-3 h-3"></i> 13 Chapters</p>
                    </div>
                    <div
                        class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </div>
                </a>

                <!-- Subject 3 -->
                <a href="#"
                    class="group flex items-center p-6 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="w-16 h-16 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center shrink-0 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                        <i data-lucide="flask-conical" class="w-8 h-8"></i>
                    </div>
                    <div class="ml-5 flex-1">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-emerald-600 transition-colors">
                            Chemistry</h3>
                        <p class="text-sm text-gray-500 mt-1 flex items-center gap-2"><i data-lucide="layers"
                                class="w-3 h-3"></i> 10 Chapters</p>
                    </div>
                    <div
                        class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </div>
                </a>

                <!-- Subject 4 -->
                <a href="#"
                    class="group flex items-center p-6 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="w-16 h-16 rounded-xl bg-teal-50 text-teal-600 flex items-center justify-center shrink-0 group-hover:bg-teal-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                        <i data-lucide="dna" class="w-8 h-8"></i>
                    </div>
                    <div class="ml-5 flex-1">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-emerald-600 transition-colors">
                            Biology</h3>
                        <p class="text-sm text-gray-500 mt-1 flex items-center gap-2"><i data-lucide="layers"
                                class="w-3 h-3"></i> 16 Chapters</p>
                    </div>
                    <div
                        class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </div>
                </a>

                <!-- Subject 5 -->
                <a href="#"
                    class="group flex items-center p-6 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300">
                    <div
                        class="w-16 h-16 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center shrink-0 group-hover:bg-rose-600 group-hover:text-white transition-colors duration-300 shadow-inner">
                        <i data-lucide="book-open-text" class="w-8 h-8"></i>
                    </div>
                    <div class="ml-5 flex-1">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-emerald-600 transition-colors">
                            English Core</h3>
                        <p class="text-sm text-gray-500 mt-1 flex items-center gap-2"><i data-lucide="layers"
                                class="w-3 h-3"></i> 22 Chapters</p>
                    </div>
                    <div
                        class="w-10 h-10 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </div>
                </a>

            </div>
        </div>
    </section>


<script>
        lucide.createIcons();

        // Tab switching logic for classes
        const classTabs = document.querySelectorAll('#class-tabs button');

        classTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                classTabs.forEach(t => {
                    t.classList.remove('class-tab-active', 'text-white', 'border-emerald-500');
                    t.classList.add('text-gray-600', 'bg-white', 'border-gray-200');
                });
                tab.classList.remove('text-gray-600', 'bg-white', 'border-gray-200');
                tab.classList.add('class-tab-active');
            });
        });
    </script>
<?php include '../components/footer.php'; ?>
