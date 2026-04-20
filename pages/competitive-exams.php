<?php
$pageTitle = 'Competitive Exams | Unidemy Global';
$pageDescription = 'Our premier competitive exams programmes including NEET, IIT-JEE, and KCET.';
$additionalHead = <<<'HEADCONTENT'
<style>
        .custom-scrollbar::-webkit-scrollbar { width: 8px; height: 8px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #f1f1f1; border-radius: 4px; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .search-container { position: relative; max-width: 600px; margin: 0 auto 40px auto; }
        .search-icon { position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: #9ca3af; }
        .search-input { width: 100%; padding: 16px 20px 16px 48px; border-radius: 9999px; border: 2px solid #e5e7eb; font-size: 16px; outline: none; transition: border-color 0.3s; }
        .search-input:focus { border-color: #1E4F9C; }
</style>
HEADCONTENT;
$base_url = '../';
include '../components/header.php';
?>
<!-- Main Content -->
<main class="w-full pt-28 lg:pt-36 pb-20 bg-white min-h-[calc(100vh-400px)]">
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
                        <span class="ml-2 text-primary font-medium">Competitive Exams</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Title & Search -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-gray-900 mb-6 font-sans tracking-tight">Competitive Exams</h1>
            
            <div class="search-container">
                <i data-lucide="search" class="w-6 h-6 search-icon"></i>
                <input type="text" id="exam-search" class="search-input" placeholder="Search for NEET, JEE, or KCET programs...">
            </div>
        </div>

        <!-- NEET Section -->
        <div class="exam-section" data-section="neet">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-3">NEET Programmes</h2>
                <p class="text-gray-500 text-[15px]">Offline classroom learning with structured syllabus coverage, recorded lectures, tests &amp; doubt support.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16 cards-grid">
                <!-- Card 1 (Class 11) -->
                <div class="course-card bg-white border text-gray-900 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                    data-category="class-11">
                    <!-- Image Container -->
                    <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                        <img src="../assets/images/cmp_neet.png" alt="NEET Course" class="w-full h-full object-cover">
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
                        <div class="mt-auto pt-4 border-t border-gray-100 flex justify-center">
                            <button onclick="openEnrollmentModal('NEET - Preparation NEET (Class 11)')"
                                class="w-full max-w-[200px] border border-primary text-primary bg-white font-bold px-6 py-3 rounded-xl text-sm flex items-center justify-between hover:bg-primary hover:text-white transition-all duration-300 group shadow-sm">
                                <span class="mx-auto">Enroll Request</span>
                                <i data-lucide="chevron-right" class="w-5 h-5 text-primary group-hover:text-white transition-colors duration-300"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 1b (Class 12) -->
                <div class="course-card bg-white border text-gray-900 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                    data-category="class-12">
                    <!-- Image Container -->
                    <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                        <img src="../assets/images/cmp_neet2.png" alt="NEET Course" class="w-full h-full object-cover">
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
                        <div class="mt-auto pt-4 border-t border-gray-100 flex justify-center">
                            <button onclick="openEnrollmentModal('NEET - Advance Preparation NEET (Class 12)')"
                                class="w-full max-w-[200px] border border-primary text-primary bg-white font-bold px-6 py-3 rounded-xl text-sm flex items-center justify-between hover:bg-primary hover:text-white transition-all duration-300 group shadow-sm">
                                <span class="mx-auto">Enroll Request</span>
                                <i data-lucide="chevron-right" class="w-5 h-5 text-primary group-hover:text-white transition-colors duration-300"></i>
                            </button>
                        </div>
                    </div>
                </div>



                <!-- Repeater Example Card (Initially hidden initially if filtering is active) -->
                <div class="course-card bg-white border text-gray-900 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                    data-category="repeater">
                    <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                        <img src="../assets/images/cmp_neet3.png" alt="NEET Course" class="w-full h-full object-cover">
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
                        <div class="mt-auto pt-4 border-t border-gray-100 flex justify-center">
                            <button onclick="openEnrollmentModal('NEET - Repeater NEET')"
                                class="w-full max-w-[200px] border border-primary text-primary bg-white font-bold px-6 py-3 rounded-xl text-sm flex items-center justify-between hover:bg-primary hover:text-white transition-all duration-300 group shadow-sm">
                                <span class="mx-auto">Enroll Request</span>
                                <i data-lucide="chevron-right" class="w-5 h-5 text-primary group-hover:text-white transition-colors duration-300"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- IIT-JEE Section -->
        <div class="exam-section" data-section="jee">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-3">IIT - JEE Programmes</h2>
                <p class="text-gray-500 text-[15px]">Offline classroom learning with structured syllabus coverage, recorded lectures, tests &amp; doubt support.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16 cards-grid">
                <!-- Card 1 (Class 11) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-11">
                <!-- Image Container -->
                <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                    <img src="../assets/images/cmp_jee.png"
                        alt="JEE Mains" class="w-full h-full object-cover">
                    <!-- Badge -->
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-900 text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-gray-200/50">
                        <div class="w-1.5 h-1.5 rounded-full bg-[#6366F1]"></div> OFFLINE CLASS
                    </div>
                </div>
                <!-- Content Container -->
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-[#6366F1] font-semibold text-sm">Class 11 JEE</span>
                    </div>
                    <h3 class="text-[22px] font-bold mb-5 text-gray-900">JEE Mains</h3>
                    <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Offline Classes
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Printed Study Material
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Unidemy Portal Access.
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Weekly Tests + Mentorship
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Career & Counseling Support
                            </li>
                        </ul>
                    </div>
                    
                    <button onclick="toggleContent(this)" class="flex items-center gap-2 text-[#6366F1] font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>
                    <div class="mt-auto pt-4 border-t border-gray-200 flex justify-center">
                            <button onclick="openEnrollmentModal('IIT-JEE - JEE Mains (Class 11)')"
                                class="w-full max-w-[200px] border border-primary text-primary bg-white font-bold px-6 py-3 rounded-xl text-sm flex items-center justify-between hover:bg-primary hover:text-white transition-all duration-300 group shadow-sm">
                                <span class="mx-auto">Enroll Request</span>
                                <i data-lucide="chevron-right" class="w-5 h-5 text-primary group-hover:text-white transition-colors duration-300"></i>
                            </button>
                        </div>
                </div>
            </div>

            <!-- Card 1b (Class 12) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-12">
                <!-- Image Container -->
                <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                    <img src="../assets/images/cmp_jee2.png"
                        alt="JEE Advance" class="w-full h-full object-cover">
                    <!-- Badge -->
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-900 text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-gray-200/50">
                        <div class="w-1.5 h-1.5 rounded-full bg-[#6366F1]"></div> OFFLINE CLASS
                    </div>
                </div>
                <!-- Content Container -->
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-[#6366F1] font-semibold text-sm">Class 12 JEE</span>
                    </div>
                    <h3 class="text-[22px] font-bold mb-5 text-gray-900">JEE Advance</h3>
                    <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Offline Classes
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Printed Study Material
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Unidemy Portal Access.
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Weekly Tests + Mentorship
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Career & Counseling Support
                            </li>
                        </ul>
                    </div>
                    
                    <button onclick="toggleContent(this)" class="flex items-center gap-2 text-[#6366F1] font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>
                    <div class="mt-auto pt-4 border-t border-gray-200 flex justify-center">
                            <button onclick="openEnrollmentModal('IIT-JEE - JEE Advance (Class 12)')"
                                class="w-full max-w-[200px] border border-primary text-primary bg-white font-bold px-6 py-3 rounded-xl text-sm flex items-center justify-between hover:bg-primary hover:text-white transition-all duration-300 group shadow-sm">
                                <span class="mx-auto">Enroll Request</span>
                                <i data-lucide="chevron-right" class="w-5 h-5 text-primary group-hover:text-white transition-colors duration-300"></i>
                            </button>
                        </div>
                </div>
            </div>

            <!-- Repeater Example Card (Initially hidden initially if filtering is active) -->
            <div class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                data-category="repeater">
                <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                    <img src="../assets/images/cmp_jee3.png"
                        alt="JEE Repeaters"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-gray-900 text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-gray-200/50">
                        <div class="w-1.5 h-1.5 rounded-full bg-[#6366F1]"></div> OFFLINE CLASS
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-[#6366F1] font-semibold text-sm">Repeater JEE</span>
                    </div>
                    <h3 class="text-[22px] font-bold mb-5 text-gray-900">JEE Repeaters</h3>
                    <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Offline Classes
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Printed Study Material
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Unidemy Portal Access.
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Weekly Tests + Mentorship
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-[#6366F1] shrink-0 mt-0.5"></i>
                                Career & Counseling Support
                            </li>
                        </ul>
                    </div>
                    
                    <button onclick="toggleContent(this)" class="flex items-center gap-2 text-[#6366F1] font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>
                    <div class="mt-auto pt-4 border-t border-gray-200 flex justify-center">
                            <button onclick="openEnrollmentModal('IIT-JEE - JEE Repeaters (Repeater)')"
                                class="w-full max-w-[200px] border border-primary text-primary bg-white font-bold px-6 py-3 rounded-xl text-sm flex items-center justify-between hover:bg-primary hover:text-white transition-all duration-300 group shadow-sm">
                                <span class="mx-auto">Enroll Request</span>
                                <i data-lucide="chevron-right" class="w-5 h-5 text-primary group-hover:text-white transition-colors duration-300"></i>
                            </button>
                        </div>
                </div>
            </div>
            </div>
        </div>

        <!-- KCET Section -->
        <div class="exam-section" data-section="kcet">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-3">KCET Programmes</h2>
                <p class="text-gray-500 text-[15px]">Offline classroom learning with structured syllabus coverage, recorded lectures, tests &amp; doubt support.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16 cards-grid">
                <!-- Card 1 (Class 11) -->
            <div class="course-card bg-white border border-gray-200 text-gray-900 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-11">
                <!-- Image Container -->
                <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                    <img src="../assets/images/Kcet_c1.jpg"
                        alt="KCET" class="w-full h-full object-cover">
                    <!-- Badge -->
                    <div
                        class="absolute top-4 left-4 bg-black/80 backdrop-blur-sm text-[#FBBF24] text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider border border-[#FBBF24]/30">
                        <div class="w-1.5 h-1.5 rounded-full bg-[#FBBF24]"></div> OFFLINE CENTRE
                    </div>
                </div>
                <!-- Content Container -->
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-primary font-semibold text-sm">Class 11 KCET</span>
                    </div>
                    <h3 class="text-[22px] font-bold mb-5 text-gray-900">KCET</h3>

                    <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Offline Classes
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Printed Study Material
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Unidemy Portal Access
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Weekly Tests + Mentorship
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Career & Counseling Support
                            </li>
                        </ul>
                    </div>

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>
                    <div class="mt-auto pt-4 border-t border-gray-100 flex justify-center">
                            <button onclick="openEnrollmentModal('KCET - KCET (Class 11)')"
                                class="w-full max-w-[200px] border border-primary text-primary bg-white font-bold px-6 py-3 rounded-xl text-sm flex items-center justify-between hover:bg-primary hover:text-white transition-all duration-300 group shadow-sm">
                                <span class="mx-auto">Enroll Request</span>
                                <i data-lucide="chevron-right" class="w-5 h-5 text-primary group-hover:text-white transition-colors duration-300"></i>
                            </button>
                        </div>
                </div>
            </div>

            <!-- Card 2 (Class 12) -->
            <div class="course-card bg-white border border-gray-200 text-gray-900 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                data-category="class-12">
                <!-- Image Container -->
                <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                    <img src="../assets/images/Kcet_c2.jpg"
                        alt="KCET" class="w-full h-full object-cover">
                    <!-- Badge -->
                    <div
                        class="absolute top-4 left-4 bg-black/80 backdrop-blur-sm text-[#FBBF24] text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider border border-[#FBBF24]/30">
                        <div class="w-1.5 h-1.5 rounded-full bg-[#FBBF24]"></div> OFFLINE CENTRE
                    </div>
                </div>
                <!-- Content Container -->
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-primary font-semibold text-sm">Class 12 KCET</span>
                    </div>
                    <h3 class="text-[22px] font-bold mb-5 text-gray-900">KCET</h3>

                    <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Offline Classes
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Printed Study Material
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Unidemy Portal Access
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Weekly Tests + Mentorship
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Career & Counseling Support
                            </li>
                        </ul>
                    </div>

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>
                    <div class="mt-auto pt-4 border-t border-gray-100 flex justify-center">
                            <button onclick="openEnrollmentModal('KCET - KCET (Class 12)')"
                                class="w-full max-w-[200px] border border-primary text-primary bg-white font-bold px-6 py-3 rounded-xl text-sm flex items-center justify-between hover:bg-primary hover:text-white transition-all duration-300 group shadow-sm">
                                <span class="mx-auto">Enroll Request</span>
                                <i data-lucide="chevron-right" class="w-5 h-5 text-primary group-hover:text-white transition-colors duration-300"></i>
                            </button>
                        </div>
                </div>
            </div>

            <!-- Card 3 (Repeater) -->
            <div class="course-card bg-white border border-gray-200 text-gray-900 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block"
                data-category="repeater">
                <!-- Image Container -->
                <div class="relative h-[200px] w-full overflow-hidden bg-gray-200">
                    <img src="../assets/images/Kcet_c3.png"
                        alt="KCET Repeaters" class="w-full h-full object-cover">
                    <!-- Badge -->
                    <div
                        class="absolute top-4 left-4 bg-black/80 backdrop-blur-sm text-[#FBBF24] text-[10px] font-bold px-2.5 py-1 rounded flex items-center gap-1.5 uppercase tracking-wider border border-[#FBBF24]/30">
                        <div class="w-1.5 h-1.5 rounded-full bg-[#FBBF24]"></div> OFFLINE CENTRE
                    </div>
                </div>
                <!-- Content Container -->
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-primary font-semibold text-sm">Repeater KCET</span>
                    </div>
                    <h3 class="text-[22px] font-bold mb-5 text-gray-900">KCET Repeaters</h3>

                    <div class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Offline Classes
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Printed Study Material
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Unidemy Portal Access
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Weekly Tests + Mentorship
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600">
                                <i data-lucide="check-circle-2" class="w-4 h-4 mr-2.5 text-primary shrink-0 mt-0"></i>
                                Career & Counseling Support
                            </li>
                        </ul>
                    </div>

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-primary font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="arrow-right"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>
                    <div class="mt-auto pt-4 border-t border-gray-100 flex justify-center">
                            <button onclick="openEnrollmentModal('KCET - KCET Repeaters (Repeater)')"
                                class="w-full max-w-[200px] border border-primary text-primary bg-white font-bold px-6 py-3 rounded-xl text-sm flex items-center justify-between hover:bg-primary hover:text-white transition-all duration-300 group shadow-sm">
                                <span class="mx-auto">Enroll Request</span>
                                <i data-lucide="chevron-right" class="w-5 h-5 text-primary group-hover:text-white transition-colors duration-300"></i>
                            </button>
                        </div>
                </div>
            </div>
            </div>
        </div>

        <div id="no-results" class="hidden text-center py-12">
            <h3 class="text-2xl font-bold text-gray-700 mb-2">No programs found</h3>
            <p class="text-gray-500">Try adjusting your search terms.</p>
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
        if (typeof lucide !== 'undefined') lucide.createIcons();

        document.getElementById('mobile-menu-btn')?.addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });

        // Search Functionality
        const searchInput = document.getElementById('exam-search');
        const examSections = document.querySelectorAll('.exam-section');
        const noResults = document.getElementById('no-results');

        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase().trim();
            let totalVisibleCards = 0;

            examSections.forEach(section => {
                const cards = section.querySelectorAll('.course-card');
                let sectionVisibleCards = 0;
                
                // If the section title matches, show all cards in it
                const sectionTitle = section.querySelector('h2').textContent.toLowerCase();
                const sectionMatch = sectionTitle.includes(searchTerm);

                cards.forEach(card => {
                    const cardText = card.textContent.toLowerCase();
                    if (sectionMatch || cardText.includes(searchTerm)) {
                        card.style.display = 'block'; // 'block' or whatever the original display is, 'flex' since it has flex classes. wait it has 'block' class
                        card.classList.remove('hidden');
                        card.classList.add('flex'); // Actually it has class "flex flex-col group block"
                        sectionVisibleCards++;
                        totalVisibleCards++;
                    } else {
                        card.style.display = 'none';
                        card.classList.remove('flex');
                    }
                });

                // Hide section if no cards match
                if (sectionVisibleCards === 0) {
                    section.style.display = 'none';
                } else {
                    section.style.display = 'block';
                }
            });

            if (totalVisibleCards === 0 && searchTerm !== '') {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        });
    });
</script>
<?php include '../components/enrollment-modal.php'; ?>
<?php include '../components/footer.php'; ?>
