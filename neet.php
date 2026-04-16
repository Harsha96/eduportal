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
                            <i data-lucide="chevron-right" class="w-4 h-4 text-gray-500"></i>
                            <span class="ml-2 text-primary font-medium">NEET</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Title -->
            <h1 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-gray-900 mb-8 font-sans tracking-tight">NEET
                Programmes</h1>

            <!-- Section Info -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-3">Classroom Program</h2>
                <p class="text-gray-500 text-[15px]">Offline classroom learning with structured syllabus coverage,
                    recorded lectures, tests &amp; doubt support.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="cards-container">
                <!-- Card 1 (Class 11) -->
                <div class="course-card bg-white border text-gray-900 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                    data-category="class-11">
                    <!-- Image Container -->
                    <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                        <img src="assets/images/services/cmp_neet.png" alt="NEET Course" class="w-full h-full object-cover">
                        <!-- Badge -->
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-900 border-gray-200 shadow-sm text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider border border-gray-200/50">
                            <div class="w-1.5 h-1.5 rounded-full bg-gray-900"></div> Offline Class
                        </div>
                    </div>
                    <!-- Content Container -->
                    <div class="p-6 flex flex-col flex-grow text-gray-900">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-primary font-semibold text-sm">Class 11 NEET</span>
                            
                        </div>
                        <h3 class="text-[22px] font-bold mb-5 text-gray-900">Preparation NEET</h3>
                        
                        <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                            <div class="font-bold text-gray-900 mb-2">Program Highlights</div>
                            <ul class="space-y-2 mb-8">
                                <li class="flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Offline Classes
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Printed Study Material
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Unidemy Portal Access
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Weekly Tests + Mentorship
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Career & Counseling Support
                                </li>
                            </ul>
                        </div>

                        <button onclick="toggleContent(this)" class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                            <span>Read More</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                        </button>
                        <div class="mt-auto flex items-end justify-end pt-5 border-t border-gray-100">
                            
                            <div class="flex items-center gap-2">
                                <button
                                    onclick="openEnrollmentModal('NEET - Preparation NEET (Class 11)')" class="bg-white text-gray-900 font-bold px-5 py-2.5 rounded-lg text-sm hover:bg-gray-100 transition-colors">Enroll Request</button>
                                <button
                                    class="border border-gray-600 bg-transparent text-gray-900 w-[42px] h-[42px] rounded-lg flex items-center justify-center hover:bg-gray-200 transition-colors">
                                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 1b (Class 12) -->
                <div class="course-card bg-white border text-gray-900 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                    data-category="class-12">
                    <!-- Image Container -->
                    <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                        <img src="assets/images/services/cmp_neet2.png" alt="NEET Course" class="w-full h-full object-cover">
                        <!-- Badge -->
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-900 border-gray-200 shadow-sm text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider border border-gray-200/50">
                            <div class="w-1.5 h-1.5 rounded-full bg-gray-900"></div> Offline Class
                        </div>
                    </div>
                    <!-- Content Container -->
                    <div class="p-6 flex flex-col flex-grow text-gray-900">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-primary font-semibold text-sm">Class 12 NEET</span>
                            
                        </div>
                        <h3 class="text-[22px] font-bold mb-5 text-gray-900">Advance Preparation NEET</h3>
                        
                        <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                            <div class="font-bold text-gray-900 mb-2">Program Highlights</div>
                            <ul class="space-y-2 mb-8">
                                <li class="flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Offline Classes
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Printed Study Material
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Unidemy Portal Access
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Weekly Tests + Mentorship
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Career & Counseling Support
                                </li>
                            </ul>
                        </div>

                        <button onclick="toggleContent(this)" class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                            <span>Read More</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                        </button>
                        <div class="mt-auto flex items-end justify-end pt-5 border-t border-gray-100">
                            
                            <div class="flex items-center gap-2">
                                <button
                                    onclick="openEnrollmentModal('NEET - Advance Preparation NEET (Class 12)')" class="bg-white text-gray-900 font-bold px-5 py-2.5 rounded-lg text-sm hover:bg-gray-100 transition-colors">Enroll Request</button>
                                <button
                                    class="border border-gray-600 bg-transparent text-gray-900 w-[42px] h-[42px] rounded-lg flex items-center justify-center hover:bg-gray-200 transition-colors">
                                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Repeater Example Card (Initially hidden initially if filtering is active) -->
                <div class="course-card bg-white border text-gray-900 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                    data-category="repeater">
                    <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                        <img src="assets/images/services/cmp_neet3.png" alt="NEET Course" class="w-full h-full object-cover">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-900 border-gray-200 shadow-sm text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider border border-gray-200/50">
                            <div class="w-1.5 h-1.5 rounded-full bg-gray-900"></div> Offline Class
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-gray-900">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-primary font-semibold text-sm">Repeater NEET</span>
                            
                        </div>
                        <h3 class="text-[22px] font-bold mb-5 text-gray-900">Repeater NEET</h3>
                        
                        <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                            <div class="font-bold text-gray-900 mb-2">Program Highlights</div>
                            <ul class="space-y-2 mb-8">
                                <li class="flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Offline Classes
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Printed Study Material
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Unidemy Portal Access
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Weekly Tests + Mentorship
                                </li>
                                <li class=" flex items-start text-[14px] text-gray-600">
                                    <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                    Career & Counseling Support
                                </li>
                            </ul>
                        </div>

                        <button onclick="toggleContent(this)" class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                            <span>Read More</span>
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                        </button>
                        <div class="mt-auto flex items-end justify-end pt-5 border-t border-gray-100">
                            
                            <div class="flex items-center gap-2">
                                <button
                                    onclick="openEnrollmentModal('NEET - Repeater NEET')" class="bg-white text-gray-900 font-bold px-5 py-2.5 rounded-lg text-sm hover:bg-gray-100 transition-colors">Enroll Request</button>
                                <button
                                    class="border border-gray-600 bg-transparent text-gray-900 w-[42px] h-[42px] rounded-lg flex items-center justify-center hover:bg-gray-200 transition-colors">
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
            wrapper.style.maxHeight = '150px';
            btn.querySelector('span').textContent = 'Read More';
            btn.querySelector('i').setAttribute('data-lucide', 'arrow-right');
        }
        if (typeof lucide !== 'undefined') lucide.createIcons();
    }

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

        
    });
</script>
<?php include 'components/enrollment-modal.php'; ?>
<?php include 'components/footer.php'; ?>

