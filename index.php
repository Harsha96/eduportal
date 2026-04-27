<?php
$pageTitle = 'Unidemy Global | Empowering Ambition Worldwide';
$pageDescription = 'Your premier destination for world-class test preparation, career counseling, and global university admissions.';
$base_url = './';
include 'components/header.php';
?>

<!-- Hero Section -->
<section id="hero" class="w-full pt-16 pb-8 lg:pt-20 lg:pb-12 bg-white flex flex-col items-center overflow-hidden">
    <!-- Hero Carousel Container -->
    <div class="w-full max-w-[1440px] px-4 sm:px-6 relative z-10">
        <div id="hero-carousel"
            class="relative w-full aspect-[4/3] md:aspect-auto md:min-h-[500px] lg:min-h-[600px] border border-gray-100 shadow-[0_10px_40px_rgba(30,79,156,0.1)] overflow-hidden rounded-[2.5rem] md:rounded-3xl flex items-center">

            <!-- Slides Container -->
            <div id="carousel-slides" class="absolute inset-0 w-full h-full">
                <!-- Slide 1 (Active) -->
                <div class="slide absolute inset-0 w-full h-full opacity-100 transition-opacity duration-1000 z-10"
                    data-index="0" style="background-color:#060d1c;">
                    <!-- Full-bleed banner image -->
                    <img src="assets/images/banner dr.png" alt="Global Medical Career"
                        class="absolute inset-0 w-full h-full object-cover object-center md:object-[80%]">
                    <!-- Mobile-optimized gradient -->
                    <div class="absolute inset-0 z-10 bg-gradient-to-t from-[#060d28]/95 via-[#060d28]/50 to-transparent lg:bg-gradient-to-r lg:from-[#060d28]/82 lg:via-[#060d28]/55 lg:to-transparent"></div>
                    <div
                        class="hidden relative z-20 h-full w-full lg:w-[58%] px-6 sm:px-10 py-10 flex flex-col justify-center items-center sm:items-start text-center sm:text-left">
                        <div class="flex items-center gap-2 mb-4 animate-fade-in-left">
                            <div
                                class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-white/20 backdrop-blur flex items-center justify-center shadow-sm">
                                <i data-lucide="graduation-cap" class="w-4 h-4 md:w-5 md:h-5 text-white"></i>
                            </div>
                            <span
                                class="font-bold tracking-widest text-orange-300 text-sm md:text-base uppercase bg-white/10 backdrop-blur px-3 py-1 rounded-full border border-orange-300/30 shadow-sm">
                                UNIDEMY GLOBAL
                            </span>
                        </div>
                        <h1
                            class="text-base sm:text-2xl md:text-3xl font-extrabold uppercase text-blue-200 leading-snug mb-1">
                            Turn Your NEET Dream into</h1>
                        <h2
                            class="text-3xl sm:text-4xl md:text-5xl lg:text-[4rem] font-black uppercase leading-none tracking-tighter mb-4 text-white drop-shadow-lg">
                            A Global Medical Career</h2>
                        <div class="flex flex-wrap items-center gap-2 mb-8 animate-fade-in delay-200">
                            <span
                                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-400/20 border border-blue-300/30 backdrop-blur-md shadow-sm">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-blue-300"></i>
                                <span
                                    class="text-xs sm:text-sm md:text-base font-bold text-blue-200 tracking-wide uppercase">CLASS
                                    11TH | CLASS 12TH | REPEATER</span>
                            </span>
                        </div>
                        <div class="flex flex-col sm:flex-row items-center gap-4">
                            <!-- DEVELOPER NOTE: Hidden by request -->
                            <a href="pages/neet.php"
                                class="hidden w-full sm:w-max block text-center bg-secondary hover:bg-orange-500 text-white font-bold text-base md:text-lg px-8 py-3.5 rounded-full uppercase tracking-wide transition-all shadow-lg shadow-orange-500/30 active:scale-95">Explore
                                Now</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0"
                    data-index="1" style="background-color:#080c1a;">
                    <!-- Full-bleed banner image -->
                    <img src="assets/images/banner jee.png" alt="IIT-JEE"
                        class="absolute inset-0 w-full h-full object-cover object-center md:object-[80%]">
                    <!-- Mobile-optimized gradient -->
                    <div class="absolute inset-0 z-10 bg-gradient-to-t from-[#080c28]/95 via-[#080c28]/50 to-transparent lg:bg-gradient-to-r lg:from-[#080c28]/82 lg:via-[#080c28]/55 lg:to-transparent"></div>
                    <div
                        class="hidden relative z-20 h-full w-full lg:w-[58%] px-6 sm:px-10 py-10 flex flex-col justify-center items-center sm:items-start text-center sm:text-left">
                        <div class="flex items-center gap-2 mb-4">
                            <div
                                class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-white/20 backdrop-blur flex items-center justify-center">
                                <i data-lucide="graduation-cap" class="w-4 h-4 md:w-5 md:h-5 text-white"></i>
                            </div>
                            <span
                                class="font-bold tracking-widest text-orange-300 text-sm md:text-base uppercase bg-white/10 backdrop-blur px-3 py-1 rounded-full border border-orange-300/30 shadow-sm">
                                UNIDEMY PREMIUM
                            </span>
                        </div>
                        <h1
                            class="text-base sm:text-2xl md:text-3xl font-extrabold uppercase text-blue-200 leading-snug mb-1">
                            TARGET IIT-JEE</h1>
                        <h2
                            class="text-3xl sm:text-5xl md:text-6xl lg:text-[4.5rem] font-black uppercase leading-none tracking-tighter mb-4 text-white drop-shadow-lg">
                            ASSURED SUCCESS</h2>
                        <p class="text-base md:text-2xl font-bold text-blue-100 tracking-wide mb-1 uppercase">Complete
                            Study Material</p>
                        <div class="flex flex-wrap items-center gap-2 mb-8">
                            <span
                                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-400/20 border border-blue-300/30 backdrop-blur-md shadow-sm">
                                <i data-lucide="flask-conical" class="w-4 h-4 text-blue-300"></i>
                                <span
                                    class="text-xs sm:text-sm md:text-base font-bold text-blue-200 tracking-wide uppercase">EXTENSIVE
                                    MOCK TESTS &amp; MENTORSHIP</span>
                            </span>
                        </div>
                        <!-- DEVELOPER NOTE: Hidden by request -->
                        <a href="pages/iit-jee.php"
                            class="hidden w-full sm:w-max block text-center bg-secondary hover:bg-orange-500 text-white font-bold text-base md:text-lg px-8 py-3.5 rounded-full uppercase tracking-wide transition-all shadow-lg shadow-orange-500/30 active:scale-95">Join
                            Batches</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0"
                    data-index="2" style="background-color:#0d1f0a;">
                    <!-- Full-bleed banner image -->
                    <img src="assets/images/banner found.png" alt="Foundation Programs"
                        class="absolute inset-0 w-full h-full object-cover object-center md:object-[80%]">
                    <!-- Mobile-optimized gradient -->
                    <div class="absolute inset-0 z-10 bg-gradient-to-t from-[#0a1e08]/95 via-[#0a1e08]/50 to-transparent lg:bg-gradient-to-r lg:from-[#0a1e08]/82 lg:via-[#0a1e08]/55 lg:to-transparent"></div>
                    <div
                        class="hidden relative z-20 h-full w-full lg:w-[58%] px-6 sm:px-10 py-10 flex flex-col justify-center items-center sm:items-start text-center sm:text-left">
                        <div class="flex items-center gap-2 mb-4">
                            <div
                                class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-white/20 backdrop-blur flex items-center justify-center">
                                <i data-lucide="book-open" class="w-4 h-4 md:w-5 md:h-5 text-white"></i>
                            </div>
                            <span
                                class="font-bold tracking-widest text-orange-300 text-sm md:text-base uppercase bg-white/10 backdrop-blur px-3 py-1 rounded-full border border-orange-300/30 shadow-sm">
                                JUNIOR PROGRAMS
                            </span>
                        </div>
                        <h1
                            class="text-base sm:text-2xl md:text-3xl font-extrabold uppercase text-green-200 leading-snug mb-1">
                            FOUNDATION CLASS 1-12</h1>
                        <h2
                            class="text-3xl sm:text-5xl md:text-6xl lg:text-[4.5rem] font-black uppercase leading-none tracking-tighter mb-4 text-white drop-shadow-lg">
                            BUILD YOUR FUTURE</h2>
                        <p class="text-base md:text-2xl font-bold text-green-100 tracking-wide mb-1 uppercase">CBSE |
                            ICSE | STATE BOARD</p>
                        <div class="flex flex-wrap items-center gap-2 mb-8">
                            <span
                                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-green-400/20 border border-green-300/30 backdrop-blur-md shadow-sm">
                                <i data-lucide="book-open" class="w-4 h-4 text-green-300"></i>
                                <span
                                    class="text-xs sm:text-sm md:text-base font-bold text-green-200 tracking-wide uppercase">CONCEPTUAL
                                    CLARITY &amp; SCHOOL SUPPORT</span>
                            </span>
                        </div>
                        <!-- DEVELOPER NOTE: Hidden by request -->
                        <a href="https://unidemyglobal.com/foundation/?level=Foundation%20Level%201" target="_blank"
                            class="hidden w-full sm:w-max block text-center bg-secondary hover:bg-orange-500 text-white font-bold text-base md:text-lg px-8 py-3.5 rounded-full uppercase tracking-wide transition-all shadow-lg shadow-orange-500/30 active:scale-95">Enroll
                            Now</a>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="slide absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 z-0"
                    data-index="3" style="background-color:#0a1628;">
                    <!-- Full-bleed banner image -->
                    <img src="assets/images/banner abroad.png" alt="Study Abroad"
                        class="absolute inset-0 w-full h-full object-cover object-center md:object-[80%]">
                    <!-- Mobile-optimized gradient -->
                    <div class="absolute inset-0 z-10 bg-gradient-to-t from-[#08143c]/95 via-[#08143c]/50 to-transparent lg:bg-gradient-to-r lg:from-[#08143c]/82 lg:via-[#08143c]/55 lg:to-transparent"></div>
                    <div
                        class="hidden relative z-20 h-full w-full lg:w-[58%] px-6 sm:px-10 py-10 flex flex-col justify-center items-center sm:items-start text-center sm:text-left">
                        <div class="flex items-center gap-2 mb-4">
                            <div
                                class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-white/20 backdrop-blur flex items-center justify-center">
                                <i data-lucide="globe" class="w-4 h-4 md:w-5 md:h-5 text-white"></i>
                            </div>
                            <span
                                class="font-bold tracking-widest text-orange-300 text-sm md:text-base uppercase bg-white/10 backdrop-blur px-3 py-1 rounded-full border border-orange-300/30 shadow-sm">
                                GLOBAL ADMISSIONS
                            </span>
                        </div>
                        <h1
                            class="text-xs sm:text-2xl md:text-3xl font-extrabold uppercase text-blue-200 leading-snug mb-1 tracking-wider">
                            STUDY ABROAD &amp; TEST PREP</h1>
                        <h2
                            class="text-3xl sm:text-5xl md:text-6xl lg:text-[4.5rem] font-black uppercase leading-none tracking-tighter mb-4 text-white drop-shadow-lg">
                            DREAM UNIVERSITIES</h2>
                        <p class="text-xs md:text-2xl font-bold text-blue-100 tracking-widest mb-1 uppercase opacity-90">IELTS
                            | TOEFL | SAT / GRE</p>
                        <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2 mb-8">
                            <span
                                class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-orange-400/20 border border-orange-300/30 backdrop-blur-md shadow-sm">
                                <i data-lucide="globe" class="w-3 h-3 text-orange-300"></i>
                                <span
                                    class="text-[10px] sm:text-sm md:text-base font-bold text-orange-200 tracking-wide uppercase">EXPERT GUIDANCE &amp; SCHOLARSHIP SUPPORT</span>
                            </span>
                        </div>
                        <!-- DEVELOPER NOTE: Hidden by request -->
                        <a href="https://toefl.unidemyglobal.com/" target="_blank"
                            class="hidden w-full sm:w-max block text-center bg-secondary hover:bg-orange-500 text-white font-bold text-base md:text-lg px-8 py-3.5 rounded-full uppercase tracking-wide transition-all shadow-lg shadow-orange-500/30 active:scale-95">Start
                            Journey</a>
                    </div>
                </div>
            </div>

            <!-- Navigation Dots -->
            <div
                class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-40 bg-white/50 backdrop-blur-md px-4 py-2 rounded-full border border-gray-200 shadow-sm">
                <button class="dot w-6 h-2 bg-secondary rounded-full transition-all" data-index="0"></button>
                <button class="dot w-2 h-2 bg-gray-400 rounded-full transition-all hover:bg-primary"
                    data-index="1"></button>
                <button class="dot w-2 h-2 bg-gray-400 rounded-full transition-all hover:bg-primary"
                    data-index="2"></button>
                <button class="dot w-2 h-2 bg-gray-400 rounded-full transition-all hover:bg-primary"
                    data-index="3"></button>
            </div>
        </div>
    </div>
</section>


<!-- Programs Section -->
<section id="programs" class="bg-background py-8 lg:py-10 relative overflow-hidden">
    <div
        class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
    </div>
    <div
        class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-secondary/5 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2">
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mt-16 md:mt-20 mb-12 md:mb-16 px-4">
            <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-gray-900 mb-6 md:mb-8 tracking-tight">
                Explore Our <span class="text-primary">Premium Programs</span>
            </h2>
            <p class="text-sm md:text-lg text-slate-600 leading-relaxed max-w-2xl mx-auto">
                From primary education to global university placements, discover the perfect pathway for your academic and career goals.
            </p>
        </div>



        <!-- Unified Programs Grid (Shows same on all devices) -->
        <div id="programs-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <!-- Kindergarten -->
            <div class="group relative rounded-2xl pt-10 pb-2 px-6 md:p-8 shadow-sm hover:shadow-2xl transition-all duration-500 border border-amber-100 flex flex-col h-[240px] md:h-[380px] overflow-hidden cursor-pointer"
                style="background-image: url('assets/images/HM_c1.png'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent rounded-3xl"></div>
                <div class="absolute inset-0 bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex justify-between items-start w-full">
                    </div>
                    <div class="flex justify-between items-end mt-auto gap-4">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-2xl font-bold text-white drop-shadow-md">Kindergarten</h3>
                            <div class="flex flex-wrap gap-2">
                                <span onclick="event.preventDefault(); window.location.href='pages/kindergarten.php'"
                                    class="bg-amber-400/20 backdrop-blur-sm text-[10px] md:text-xs font-semibold text-amber-50 px-2 py-1 md:px-3 md:py-1.5 rounded-full border border-amber-200/30 hover:bg-amber-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Foundation</span>
                            </div>
                        </div>
                        <!-- DEVELOPER NOTE: Arrow button hidden by request -->
                        <div class="hidden w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center shrink-0 group-hover:bg-white transition-all duration-300 shadow-sm z-20">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-white group-hover:text-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Explorers (1-5) -->
            <div class="group relative rounded-2xl pt-10 pb-2 px-6 md:p-8 shadow-sm hover:shadow-2xl transition-all duration-500 border border-white/10 flex flex-col h-[240px] md:h-[380px] overflow-hidden cursor-pointer"
                style="background-image: url('assets/images/HM_1-5.png'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent rounded-3xl"></div>
                <div class="absolute inset-0 bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex justify-between items-start w-full">
                    </div>
                    <div class="flex justify-between items-end mt-auto gap-4">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-2xl font-bold text-white drop-shadow-md">Explorers (1-5)</h3>
                            <div class="flex flex-wrap gap-2">
                                <span onclick="event.preventDefault(); window.location.href='pages/cbse.php?tab=class-1-5'"
                                    class="bg-rose-400/20 backdrop-blur-sm text-xs font-semibold text-rose-50 px-3 py-1.5 rounded-full border border-rose-200/30 hover:bg-rose-500/40 cursor-pointer relative z-20 transition-all shadow-sm">CBSE</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/icse.php?tab=class-1-5'"
                                    class="bg-rose-400/20 backdrop-blur-sm text-xs font-semibold text-rose-50 px-3 py-1.5 rounded-full border border-rose-200/30 hover:bg-rose-500/40 cursor-pointer relative z-20 transition-all shadow-sm">ICSE</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/karnataka-board.php?tab=class-1-5'"
                                    class="bg-rose-400/20 backdrop-blur-sm text-xs font-semibold text-rose-50 px-3 py-1.5 rounded-full border border-rose-200/30 hover:bg-rose-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Karnataka board</span>
                            </div>
                        </div>
                        <!-- DEVELOPER NOTE: Arrow button hidden by request -->
                        <div class="hidden w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center shrink-0 group-hover:bg-white transition-all duration-300 shadow-sm z-20">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-white group-hover:text-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skill builders (6-8) -->
            <div class="group relative rounded-2xl pt-10 pb-2 px-6 md:p-8 shadow-sm hover:shadow-2xl transition-all duration-500 border border-white/10 flex flex-col h-[240px] md:h-[380px] overflow-hidden cursor-pointer"
                style="background-image: url('assets/images/HM_6-8.png'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent rounded-3xl"></div>
                <div class="absolute inset-0 bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex justify-between items-start w-full">
                    </div>
                    <div class="flex justify-between items-end mt-auto gap-4">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-2xl font-bold text-white drop-shadow-md">Skill builders (6-8)</h3>
                            <div class="flex flex-wrap gap-2">
                                <span onclick="event.preventDefault(); window.location.href='pages/cbse.php?tab=class-6-8'"
                                    class="bg-orange-400/20 backdrop-blur-sm text-xs font-semibold text-orange-50 px-3 py-1.5 rounded-full border border-orange-200/30 hover:bg-orange-500/40 cursor-pointer relative z-20 transition-all shadow-sm">CBSE</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/icse.php?tab=class-6-8'"
                                    class="bg-orange-400/20 backdrop-blur-sm text-xs font-semibold text-orange-50 px-3 py-1.5 rounded-full border border-orange-200/30 hover:bg-orange-500/40 cursor-pointer relative z-20 transition-all shadow-sm">ICSE</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/karnataka-board.php?tab=class-6-8'"
                                    class="bg-orange-400/20 backdrop-blur-sm text-xs font-semibold text-orange-50 px-3 py-1.5 rounded-full border border-orange-200/30 hover:bg-orange-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Karnataka board</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/foundation1.php'"
                                    class="bg-orange-400/20 backdrop-blur-sm text-xs font-semibold text-orange-50 px-3 py-1.5 rounded-full border border-orange-200/30 hover:bg-orange-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Foundation 1</span>
                            </div>
                        </div>
                        <!-- DEVELOPER NOTE: Arrow button hidden by request -->
                        <div class="hidden w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center shrink-0 group-hover:bg-white transition-all duration-300 shadow-sm z-20">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-white group-hover:text-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exam Warriors (9-10) -->
            <div class="group relative rounded-2xl pt-10 pb-2 px-6 md:p-8 shadow-sm hover:shadow-2xl transition-all duration-500 border border-white/10 flex flex-col h-[240px] md:h-[380px] overflow-hidden cursor-pointer"
                style="background-image: url('assets/images/HM_9-10.png'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent rounded-3xl"></div>
                <div class="absolute inset-0 bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex justify-between items-start w-full">
                    </div>
                    <div class="flex justify-between items-end mt-auto gap-4">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-2xl font-bold text-white drop-shadow-md">Exam Warriors</h3>
                            <div class="flex flex-wrap gap-2">
                                <span onclick="event.preventDefault(); window.location.href='pages/cbse.php?tab=class-9-10'"
                                    class="bg-green-400/20 backdrop-blur-sm text-xs font-semibold text-green-50 px-3 py-1.5 rounded-full border border-green-200/30 hover:bg-green-500/40 cursor-pointer relative z-20 transition-all shadow-sm">CBSE</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/icse.php?tab=class-9-10'"
                                    class="bg-green-400/20 backdrop-blur-sm text-xs font-semibold text-green-50 px-3 py-1.5 rounded-full border border-green-200/30 hover:bg-green-500/40 cursor-pointer relative z-20 transition-all shadow-sm">ICSE</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/karnataka-board.php?tab=class-9-10'"
                                    class="bg-green-400/20 backdrop-blur-sm text-xs font-semibold text-green-50 px-3 py-1.5 rounded-full border border-green-200/30 hover:bg-green-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Karnataka board</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/foundation2.php'"
                                    class="bg-green-400/20 backdrop-blur-sm text-xs font-semibold text-green-50 px-3 py-1.5 rounded-full border border-green-200/30 hover:bg-green-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Foundation 2</span>
                            </div>
                        </div>
                        <!-- DEVELOPER NOTE: Arrow button hidden by request -->
                        <div class="hidden w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center shrink-0 group-hover:bg-white transition-all duration-300 shadow-sm z-20">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-white group-hover:text-green-600 transition-colors"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Career Achievers -->
            <a href="pages/career-achievers.php"
                class="group relative rounded-2xl pt-10 pb-2 px-6 md:p-8 shadow-sm hover:shadow-2xl transition-all duration-500 border border-white/10 flex flex-col h-[240px] md:h-[380px] overflow-hidden"
                style="background-image: url('assets/images/HM_career_achivers.png'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent rounded-3xl"></div>
                <div class="absolute inset-0 bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex justify-between items-start w-full">
                    </div>
                    <div class="flex justify-between items-end mt-auto gap-4">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-2xl font-bold text-white drop-shadow-md">Career Achievers</h3>
                            <div class="flex flex-wrap gap-2">
                                <span onclick="event.preventDefault(); window.location.href='pages/career-achievers.php'"
                                    class="bg-rose-400/20 backdrop-blur-sm text-xs font-semibold text-rose-50 px-3 py-1.5 rounded-full border border-rose-200/30 hover:bg-rose-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Class 11</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/career-achievers.php'"
                                    class="bg-rose-400/20 backdrop-blur-sm text-xs font-semibold text-rose-50 px-3 py-1.5 rounded-full border border-rose-200/30 hover:bg-rose-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Class 12</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/career-achievers.php?tab=science#streams'"
                                    class="bg-rose-400/20 backdrop-blur-sm text-xs font-semibold text-rose-50 px-3 py-1.5 rounded-full border border-rose-200/30 hover:bg-rose-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Science</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/career-achievers.php?tab=economics#streams'"
                                    class="bg-rose-400/20 backdrop-blur-sm text-xs font-semibold text-rose-50 px-3 py-1.5 rounded-full border border-rose-200/30 hover:bg-rose-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Economics</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/career-achievers.php?tab=commerce#streams'"
                                    class="bg-rose-400/20 backdrop-blur-sm text-xs font-semibold text-rose-50 px-3 py-1.5 rounded-full border border-rose-200/30 hover:bg-rose-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Commerce</span>
                            </div>
                        </div>
                        <!-- DEVELOPER NOTE: Arrow button hidden by request -->
                        <div class="hidden w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center shrink-0 group-hover:bg-white transition-all duration-300 shadow-sm z-20">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-white group-hover:text-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- NEET -->
            <a href="pages/neet.php"
                class="group relative rounded-2xl pt-10 pb-2 px-6 md:p-8 shadow-sm hover:shadow-2xl transition-all duration-500 border border-white/10 flex flex-col h-[240px] md:h-[380px] overflow-hidden"
                style="background-image: url('assets/images/HM_neet.png'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent rounded-3xl"></div>
                <div class="absolute inset-0 bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex justify-between items-start w-full">
                    </div>
                    <div class="flex justify-between items-end mt-auto gap-4">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-2xl font-bold text-white drop-shadow-md">NEET</h3>
                            <div class="flex flex-wrap gap-2">
                                <span onclick="event.preventDefault(); window.location.href='pages/neet.php'"
                                    class="bg-blue-400/20 backdrop-blur-sm text-xs font-semibold text-blue-50 px-3 py-1.5 rounded-full border border-blue-200/30 hover:bg-blue-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Class 11</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/neet.php'"
                                    class="bg-blue-400/20 backdrop-blur-sm text-xs font-semibold text-blue-50 px-3 py-1.5 rounded-full border border-blue-200/30 hover:bg-blue-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Class 12</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/neet.php'"
                                    class="bg-blue-400/20 backdrop-blur-sm text-xs font-semibold text-blue-50 px-3 py-1.5 rounded-full border border-blue-200/30 hover:bg-blue-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Repeater</span>
                            </div>
                        </div>
                        <!-- DEVELOPER NOTE: Arrow button hidden by request -->
                        <div class="hidden w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center shrink-0 group-hover:bg-white transition-all duration-300 shadow-sm z-20">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-white group-hover:text-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- IIT-JEE -->
            <a href="pages/iit-jee.php"
                class="group relative rounded-2xl pt-10 pb-2 px-6 md:p-8 shadow-sm hover:shadow-2xl transition-all duration-500 border border-white/10 flex flex-col h-[240px] md:h-[380px] overflow-hidden"
                style="background-image: url('assets/images/HM_jee.png'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent rounded-3xl"></div>
                <div class="absolute inset-0 bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex justify-between items-start w-full">
                    </div>
                    <div class="flex justify-between items-end mt-auto gap-4">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-2xl font-bold text-white drop-shadow-md">IIT-JEE</h3>
                            <div class="flex flex-wrap gap-2">
                                <span onclick="event.preventDefault(); window.location.href='pages/iit-jee.php'"
                                    class="bg-orange-400/20 backdrop-blur-sm text-xs font-semibold text-orange-50 px-3 py-1.5 rounded-full border border-orange-200/30 hover:bg-orange-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Class 11</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/iit-jee.php'"
                                    class="bg-orange-400/20 backdrop-blur-sm text-xs font-semibold text-orange-50 px-3 py-1.5 rounded-full border border-orange-200/30 hover:bg-orange-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Class 12</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/iit-jee.php'"
                                    class="bg-orange-400/20 backdrop-blur-sm text-xs font-semibold text-orange-50 px-3 py-1.5 rounded-full border border-orange-200/30 hover:bg-orange-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Repeater</span>
                            </div>
                        </div>
                        <!-- DEVELOPER NOTE: Arrow button hidden by request -->
                        <div class="hidden w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center shrink-0 group-hover:bg-white transition-all duration-300 shadow-sm z-20">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-white group-hover:text-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- KCET -->
            <a href="pages/kcet.php"
                class="group relative rounded-2xl pt-10 pb-2 px-6 md:p-8 shadow-sm hover:shadow-2xl transition-all duration-500 border border-white/10 flex flex-col h-[240px] md:h-[380px] overflow-hidden"
                style="background-image: url('assets/images/HM_kcet.png'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent rounded-3xl"></div>
                <div class="absolute inset-0 bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex justify-between items-start w-full">
                    </div>
                    <div class="flex justify-between items-end mt-auto gap-4">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-2xl font-bold text-white drop-shadow-md">KCET</h3>
                            <div class="flex flex-wrap gap-2">
                                <span onclick="event.preventDefault(); window.location.href='pages/kcet.php'"
                                    class="bg-amber-400/20 backdrop-blur-sm text-[10px] md:text-xs font-semibold text-amber-50 px-2 py-1 md:px-3 md:py-1.5 rounded-full border border-amber-200/30 hover:bg-amber-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Class 11</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/kcet.php'"
                                    class="bg-amber-400/20 backdrop-blur-sm text-[10px] md:text-xs font-semibold text-amber-50 px-2 py-1 md:px-3 md:py-1.5 rounded-full border border-amber-200/30 hover:bg-amber-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Class 12</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/kcet.php'"
                                    class="bg-amber-400/20 backdrop-blur-sm text-[10px] md:text-xs font-semibold text-amber-50 px-2 py-1 md:px-3 md:py-1.5 rounded-full border border-amber-200/30 hover:bg-amber-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Repeater</span>
                            </div>
                        </div>
                        <!-- DEVELOPER NOTE: Arrow button hidden by request -->
                        <div class="hidden w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center shrink-0 group-hover:bg-white transition-all duration-300 shadow-sm z-20">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-white group-hover:text-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Global Launchpad -->
            <a href="pages/global-launchpad.php"
                class="group relative rounded-2xl pt-10 pb-2 px-6 md:p-8 shadow-sm hover:shadow-2xl transition-all duration-500 border border-white/10 flex flex-col h-[240px] md:h-[380px] overflow-hidden"
                style="background-image: url('assets/images/HM_GBL.png'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent rounded-3xl"></div>
                <div class="absolute inset-0 bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex justify-between items-start w-full">
                    </div>
                    <div class="flex justify-between items-end mt-auto gap-4">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-2xl font-bold text-white drop-shadow-md">Global Launchpad</h3>
                            <div class="flex flex-wrap gap-2">
                                <span onclick="event.preventDefault(); window.location.href='pages/sat.php'"
                                    class="bg-emerald-400/20 backdrop-blur-sm text-xs font-semibold text-emerald-50 px-3 py-1.5 rounded-full border border-emerald-200/30 hover:bg-emerald-500/40 cursor-pointer relative z-20 transition-all shadow-sm">SAT</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/act.php'"
                                    class="bg-emerald-400/20 backdrop-blur-sm text-xs font-semibold text-emerald-50 px-3 py-1.5 rounded-full border border-emerald-200/30 hover:bg-emerald-500/40 cursor-pointer relative z-20 transition-all shadow-sm">ACT</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/ielts.php'"
                                    class="bg-emerald-400/20 backdrop-blur-sm text-xs font-semibold text-emerald-50 px-3 py-1.5 rounded-full border border-emerald-200/30 hover:bg-emerald-500/40 cursor-pointer relative z-20 transition-all shadow-sm">IELTS</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/toefl.php'"
                                    class="bg-emerald-400/20 backdrop-blur-sm text-xs font-semibold text-emerald-50 px-3 py-1.5 rounded-full border border-emerald-200/30 hover:bg-emerald-500/40 cursor-pointer relative z-20 transition-all shadow-sm">TOEFL</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/duolingo.php'"
                                    class="bg-emerald-400/20 backdrop-blur-sm text-xs font-semibold text-emerald-50 px-3 py-1.5 rounded-full border border-emerald-200/30 hover:bg-emerald-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Duolingo</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/gre.php'"
                                    class="bg-emerald-400/20 backdrop-blur-sm text-xs font-semibold text-emerald-50 px-3 py-1.5 rounded-full border border-emerald-200/30 hover:bg-emerald-500/40 cursor-pointer relative z-20 transition-all shadow-sm">GRE</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/topik.php'"
                                    class="bg-emerald-400/20 backdrop-blur-sm text-xs font-semibold text-emerald-50 px-3 py-1.5 rounded-full border border-emerald-200/30 hover:bg-emerald-500/40 cursor-pointer relative z-20 transition-all shadow-sm">TOPIK</span>
                            </div>
                        </div>
                        <!-- DEVELOPER NOTE: Arrow button hidden by request -->
                        <div class="hidden w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center shrink-0 group-hover:bg-white transition-all duration-300 shadow-sm z-20">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-white group-hover:text-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Study Abroad -->
            <a href="pages/study-abroad.php"
                class="group relative rounded-2xl pt-10 pb-2 px-6 md:p-8 shadow-sm hover:shadow-2xl transition-all duration-500 border border-white/10 flex flex-col h-[240px] md:h-[380px] overflow-hidden"
                style="background-image: url('assets/images/HM_study-abroad.png'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent rounded-3xl"></div>
                <div class="absolute inset-0 bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex justify-between items-start w-full">
                    </div>
                    <div class="flex justify-between items-end mt-auto gap-4">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-2xl font-bold text-white drop-shadow-md">Study Abroad</h3>
                            <div class="flex flex-wrap gap-2">
                                <span onclick="event.preventDefault(); window.location.href='pages/medical-abroad.php'"
                                    class="bg-indigo-400/20 backdrop-blur-sm text-xs font-semibold text-indigo-50 px-3 py-1.5 rounded-full border border-indigo-200/30 hover:bg-indigo-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Medical abroad</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/higher-education.php'"
                                    class="bg-indigo-400/20 backdrop-blur-sm text-xs font-semibold text-indigo-50 px-3 py-1.5 rounded-full border border-indigo-200/30 hover:bg-indigo-500/40 cursor-pointer relative z-20 transition-all shadow-sm">Bachelors</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/higher-education.php'"
                                    class="bg-white/20 backdrop-blur-sm text-xs font-semibold text-white px-3 py-1.5 rounded-full border border-white/30 hover:bg-white/30 cursor-pointer relative z-20 transition-all shadow-sm">Masters</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/researchers.php'"
                                    class="bg-white/20 backdrop-blur-sm text-xs font-semibold text-white px-3 py-1.5 rounded-full border border-white/30 hover:bg-white/30 cursor-pointer relative z-20 transition-all shadow-sm">Researchers</span>
                            </div>
                        </div>
                        <!-- DEVELOPER NOTE: Arrow button hidden by request -->
                        <div class="hidden w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center shrink-0 group-hover:bg-white transition-all duration-300 shadow-sm z-20">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-white group-hover:text-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Internships -->
            <a href="pages/internships.php"
                class="group relative rounded-2xl pt-10 pb-2 px-6 md:p-8 shadow-sm hover:shadow-2xl transition-all duration-500 border border-white/10 flex flex-col h-[240px] md:h-[380px] overflow-hidden"
                style="background-image: url('assets/images/HM_internships.png'); background-size: cover; background-position: center;">
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent rounded-3xl"></div>
                <div class="absolute inset-0 bg-white/5 opacity-0 group-hover:opacity-100 transition-opacity rounded-3xl"></div>

                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div class="flex justify-between items-start w-full">
                    </div>
                    <div class="flex justify-between items-end mt-auto gap-4">
                        <div class="flex flex-col gap-3">
                            <h3 class="text-2xl font-bold text-white drop-shadow-md">Internships</h3>
                            <div class="flex flex-wrap gap-2">
                                <span onclick="event.preventDefault(); window.location.href='pages/internships.php?tab=aiml'"
                                    class="bg-white/20 backdrop-blur-sm text-xs font-semibold text-white px-3 py-1.5 rounded-full border border-white/30 hover:bg-white/30 cursor-pointer relative z-20 transition-all shadow-sm">Artificial Intelligence</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/internships.php?tab=embedded'"
                                    class="bg-white/20 backdrop-blur-sm text-xs font-semibold text-white px-3 py-1.5 rounded-full border border-white/30 hover:bg-white/30 cursor-pointer relative z-20 transition-all shadow-sm">Embedded</span>
                                <span onclick="event.preventDefault(); window.location.href='pages/internships.php?tab=webcloud'"
                                    class="bg-white/20 backdrop-blur-sm text-xs font-semibold text-white px-3 py-1.5 rounded-full border border-white/30 hover:bg-white/30 cursor-pointer relative z-20 transition-all shadow-sm">Web and Cloud applications</span>
                            </div>
                        </div>
                        <!-- DEVELOPER NOTE: Arrow button hidden by request -->
                        <div class="hidden w-10 h-10 rounded-xl bg-white/20 backdrop-blur-sm border border-white/30 flex items-center justify-center shrink-0 group-hover:bg-white transition-all duration-300 shadow-sm z-20">
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-white group-hover:text-primary transition-colors"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Partner Schools (Marquee) -->
<!-- DEVELOPER NOTE: Hidden by request. Section below contains the student admission marquee. -->
<section class="hidden py-8 md:py-12 bg-white overflow-hidden">
    <div class="text-center mb-10">
        <p style="letter-spacing:2px;font-size:13px;color:#888;font-weight:bold;">
            Trusted by Students Admitted To Top Global Universities
        </p>
    </div>

    <div class="logo-slider">
        <div class="logo-track">
            <!-- Group 1 -->
            <div class="logo">
                <svg viewBox="0 0 120 60">
                    <rect width="120" height="60" fill="#A51C30" /><text x="60" y="35" font-size="18"
                        text-anchor="middle" fill="white" font-weight="bold">HARVARD</text>
                </svg>
            </div>
            <div class="logo">
                <svg viewBox="0 0 120 60">
                    <rect width="120" height="60" fill="#8A8B8C" /><text x="60" y="35" font-size="20"
                        text-anchor="middle" fill="white" font-weight="bold">MIT</text>
                </svg>
            </div>
            <div class="logo">
                <svg viewBox="0 0 120 60">
                    <rect width="120" height="60" fill="#002147" /><text x="60" y="35" font-size="18"
                        text-anchor="middle" fill="white" font-weight="bold">OXFORD</text>
                </svg>
            </div>
            <div class="logo">
                <svg viewBox="0 0 120 60">
                    <rect width="120" height="60" fill="#8C1515" /><text x="60" y="35" font-size="16"
                        text-anchor="middle" fill="white" font-weight="bold">STANFORD</text>
                </svg>
            </div>
            <div class="logo">
                <svg viewBox="0 0 120 60">
                    <rect width="120" height="60" fill="#003A8F" /><text x="60" y="35" font-size="16"
                        text-anchor="middle" fill="white" font-weight="bold">CAMBRIDGE</text>
                </svg>
            </div>
            <div class="logo">
                <svg viewBox="0 0 120 60">
                    <rect width="120" height="60" fill="#00356B" /><text x="60" y="35" font-size="20"
                        text-anchor="middle" fill="white" font-weight="bold">YALE</text>
                </svg>
            </div>
            <!-- Group 2 (Duplicate for Seamless Loop) -->
            <div class="logo">
                <svg viewBox="0 0 120 60">
                    <rect width="120" height="60" fill="#A51C30" /><text x="60" y="35" font-size="18"
                        text-anchor="middle" fill="white" font-weight="bold">HARVARD</text>
                </svg>
            </div>
            <div class="logo">
                <svg viewBox="0 0 120 60">
                    <rect width="120" height="60" fill="#8A8B8C" /><text x="60" y="35" font-size="20"
                        text-anchor="middle" fill="white" font-weight="bold">MIT</text>
                </svg>
            </div>
            <div class="logo">
                <svg viewBox="0 0 120 60">
                    <rect width="120" height="60" fill="#002147" /><text x="60" y="35" font-size="18"
                        text-anchor="middle" fill="white" font-weight="bold">OXFORD</text>
                </svg>
            </div>
            <div class="logo">
                <svg viewBox="0 0 120 60">
                    <rect width="120" height="60" fill="#8C1515" /><text x="60" y="35" font-size="16"
                        text-anchor="middle" fill="white" font-weight="bold">STANFORD</text>
                </svg>
            </div>
            <div class="logo">
                <svg viewBox="0 0 120 60">
                    <rect width="120" height="60" fill="#003A8F" /><text x="60" y="35" font-size="16"
                        text-anchor="middle" fill="white" font-weight="bold">CAMBRIDGE</text>
                </svg>
            </div>
            <div class="logo">
                <svg viewBox="0 0 120 60">
                    <rect width="120" height="60" fill="#00356B" /><text x="60" y="35" font-size="20"
                        text-anchor="middle" fill="white" font-weight="bold">YALE</text>
                </svg>
            </div>
        </div>
    </div>

    <!-- Partnership CTA -->
    <div class="max-w-4xl mx-auto px-6 mt-16 text-center">
        <div
            class="bg-white/20 backdrop-blur-sm border border-gray-100 rounded-3xl p-6 md:p-10 flex flex-col items-center justify-center space-y-6 shadow-sm">
            <i data-lucide="handshake" class="w-12 h-12 text-secondary"></i>
            <h3 class="text-2xl md:text-3xl font-bold text-gray-900">Are you a school or institution?</h3>
            <p class="text-slate-600 font-medium text-lg">Partner with Unidemy Global and bring world-class
                educational prep to your students.</p>
            <a href="pages/partner.php"
                class="mt-4 bg-secondary hover:bg-orange-600 text-white font-bold px-8 py-3.5 rounded-full transition-all shadow-lg active:scale-95 text-lg">
                Become a Partner
            </a>
        </div>
    </div>
</section>
<!-- Study Abroad Section -->
<section id="study-abroad" class="py-8 lg:py-10 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 md:mb-16 gap-6 px-4">
            <div class="max-w-2xl">
                <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-gray-900 mb-6 md:mb-8 tracking-tight">
                    Study in Top <span class="text-secondary">Global Destinations</span>
                </h2>
                <p class="text-sm md:text-lg text-slate-600 leading-relaxed">
                    Unlock international career opportunities with guaranteed admissions to world-renowned universities.
                </p>
            </div>
            <!-- <button
                class="flex items-center gap-2 text-primary font-semibold hover:text-blue-800 transition-colors group">
                View All Countries <i data-lucide="arrow-right"
                    class="w-5 h-5 transition-transform group-hover:translate-x-1"></i>
            </button> -->
        </div>

        <!-- Mobile: horizontal scroll slider -->
        <div class="relative">
            <div id="dest-track"
                class="flex overflow-x-auto snap-x snap-mandatory gap-4 pb-4 md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 md:gap-6 scrollbar-hide">
                <!-- USA -->
                <div
                    class="group relative h-[320px] md:h-[400px] rounded-2xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-300 min-w-[80vw] md:min-w-0 snap-start flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?auto=format&fit=crop&q=80&w=800"
                        alt="USA"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-blue-600/90 to-blue-900/95 opacity-0 group-hover:opacity-90 transition-opacity duration-500">
                    </div>
                    <div
                        class="absolute inset-0 p-6 flex flex-col justify-end text-white relative z-10 transition-transform duration-300 group-hover:-translate-y-2">
                        <div class="flex items-center gap-2 text-white/80 mb-2"><i data-lucide="map-pin"
                                class="w-4 h-4"></i><span
                                class="text-sm font-medium tracking-wider uppercase">Destination</span></div>
                        <h3 class="text-3xl font-bold mb-2">USA</h3>
                        <div class="flex gap-4 text-sm text-white/80"><span><i data-lucide="graduation-cap"
                                    class="w-3 h-3 inline mr-1"></i>500+ Universities</span><span>From
                                $20,000</span></div>
                    </div>
                </div>
                <!-- UK -->
                <div
                    class="group relative h-[320px] md:h-[400px] rounded-2xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-300 min-w-[80vw] md:min-w-0 snap-start flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1486299267070-83823f5448dd?q=80&w=2071" alt="UK"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-red-600/90 to-red-900/95 opacity-0 group-hover:opacity-90 transition-opacity duration-500">
                    </div>
                    <div
                        class="absolute inset-0 p-6 flex flex-col justify-end text-white relative z-10 transition-transform duration-300 group-hover:-translate-y-2">
                        <div class="flex items-center gap-2 text-white/80 mb-2"><i data-lucide="map-pin"
                                class="w-4 h-4"></i><span
                                class="text-sm font-medium tracking-wider uppercase">Destination</span></div>
                        <h3 class="text-3xl font-bold mb-2">UK</h3>
                        <div class="flex gap-4 text-sm text-white/80"><span><i data-lucide="graduation-cap"
                                    class="w-3 h-3 inline mr-1"></i>150+ Universities</span><span>From
                                £15,000</span></div>
                    </div>
                </div>
                <!-- Canada -->
                <div
                    class="group relative h-[320px] md:h-[400px] rounded-2xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-300 min-w-[80vw] md:min-w-0 snap-start flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1503614472-8c93d56e92ce?q=80&w=2011" alt="Canada"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-red-500/90 to-red-700/95 opacity-0 group-hover:opacity-90 transition-opacity duration-500">
                    </div>
                    <div
                        class="absolute inset-0 p-6 flex flex-col justify-end text-white relative z-10 transition-transform duration-300 group-hover:-translate-y-2">
                        <div class="flex items-center gap-2 text-white/80 mb-2"><i data-lucide="map-pin"
                                class="w-4 h-4"></i><span
                                class="text-sm font-medium tracking-wider uppercase">Destination</span></div>
                        <h3 class="text-3xl font-bold mb-2">Canada</h3>
                        <div class="flex gap-4 text-sm text-white/80"><span><i data-lucide="graduation-cap"
                                    class="w-3 h-3 inline mr-1"></i>100+ Universities</span><span>From
                                C$18,000</span></div>
                    </div>
                </div>
                <!-- Australia -->
                <div
                    class="group relative h-[320px] md:h-[400px] rounded-2xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-300 min-w-[80vw] md:min-w-0 snap-start flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?q=80&w=2130" alt="Australia"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-blue-500/90 to-blue-700/95 opacity-0 group-hover:opacity-90 transition-opacity duration-500">
                    </div>
                    <div
                        class="absolute inset-0 p-6 flex flex-col justify-end text-white relative z-10 transition-transform duration-300 group-hover:-translate-y-2">
                        <div class="flex items-center gap-2 text-white/80 mb-2"><i data-lucide="map-pin"
                                class="w-4 h-4"></i><span
                                class="text-sm font-medium tracking-wider uppercase">Destination</span></div>
                        <h3 class="text-3xl font-bold mb-2">Australia</h3>
                        <div class="flex gap-4 text-sm text-white/80"><span><i data-lucide="graduation-cap"
                                    class="w-3 h-3 inline mr-1"></i>40+ Universities</span><span>From
                                A$25,000</span></div>
                    </div>
                </div>
                <!-- Germany -->
                <div
                    class="group relative h-[320px] md:h-[400px] rounded-2xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-300 min-w-[80vw] md:min-w-0 snap-start flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1467269204594-9661b134dd2b?q=80&w=2070" alt="Germany"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-700/90 to-slate-900/95 opacity-0 group-hover:opacity-90 transition-opacity duration-500">
                    </div>
                    <div
                        class="absolute inset-0 p-6 flex flex-col justify-end text-white relative z-10 transition-transform duration-300 group-hover:-translate-y-2">
                        <div class="flex items-center gap-2 text-white/80 mb-2"><i data-lucide="map-pin"
                                class="w-4 h-4"></i><span
                                class="text-sm font-medium tracking-wider uppercase">Destination</span></div>
                        <h3 class="text-3xl font-bold mb-2">Germany</h3>
                        <div class="flex gap-4 text-sm text-white/80"><span><i data-lucide="graduation-cap"
                                    class="w-3 h-3 inline mr-1"></i>400+ Universities</span><span>€0 (Public)</span>
                        </div>
                    </div>
                </div>
                <!-- South Korea -->
                <div
                    class="group relative h-[320px] md:h-[400px] rounded-2xl overflow-hidden cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-300 min-w-[80vw] md:min-w-0 snap-start flex-shrink-0">
                    <img src="https://images.unsplash.com/photo-1517154421773-0529f29ea451?q=80&w=2070" alt="South Korea"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-indigo-600/90 to-indigo-900/95 opacity-0 group-hover:opacity-90 transition-opacity duration-500">
                    </div>
                    <div
                        class="absolute inset-0 p-6 flex flex-col justify-end text-white relative z-10 transition-transform duration-300 group-hover:-translate-y-2">
                        <div class="flex items-center gap-2 text-white/80 mb-2"><i data-lucide="map-pin"
                                class="w-4 h-4"></i><span
                                class="text-sm font-medium tracking-wider uppercase">Destination</span></div>
                        <h3 class="text-3xl font-bold mb-2">South Korea</h3>
                        <div class="flex gap-4 text-sm text-white/80"><span><i data-lucide="graduation-cap"
                                    class="w-3 h-3 inline mr-1"></i>200+ Universities</span><span>From
                                $12,000</span></div>
                    </div>
                </div>
            </div>
            <!-- Mobile scroll hint dots -->
            <div class="flex md:hidden justify-center gap-1.5 mt-4">
                <span class="w-6 h-1.5 bg-primary rounded-full"></span>
                <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
                <span class="w-1.5 h-1.5 bg-gray-300 rounded-full"></span>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-16 lg:py-20 bg-gradient-to-b from-white to-background relative overflow-hidden">
    <div class="absolute top-20 left-10 w-72 h-72 bg-secondary/10 rounded-full blur-3xl opacity-50"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-primary/10 rounded-full blur-3xl opacity-50"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-20 md:mb-24 px-4">
            <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-gray-900 mb-6 md:mb-8 tracking-tight">
                Student <span class="text-secondary">Success Stories</span>
            </h2>
            <p class="text-sm md:text-lg text-slate-600 leading-relaxed">
                Don't just take our word for it. Hear what our successful students and alumni have to say about their journey.
            </p>
        </div>

        <div class="relative max-w-4xl mx-auto">
            <div id="testimonial-slider"
                class="relative min-h-[400px] md:min-h-[300px] flex items-center justify-center">
                <!-- Slide 1 -->
                <div class="testimonial-slide absolute w-full transition-all duration-500 opacity-100 scale-100 z-10"
                    data-index="0">
                    <div class="bg-slate-900 shadow-2xl rounded-3xl p-8 md:p-12 relative overflow-hidden group">
                        <i data-lucide="quote"
                            class="absolute top-6 right-8 w-24 h-24 text-white/5 -rotate-12 group-hover:rotate-0 transition-transform duration-500"></i>
                        <div class="flex flex-col md:flex-row gap-8 items-center md:items-start relative z-10">
                            <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&q=80&w=200"
                                alt="Student"
                                class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover border-4 border-white/10 shadow-xl flex-shrink-0">
                            <div class="flex-1 text-center md:text-left">
                                <div class="flex justify-center md:justify-start gap-1 mb-4 text-secondary">
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                </div>
                                <p class="text-xl md:text-2xl text-slate-200 font-light italic leading-relaxed mb-6">
                                    "The rigorous testing and expert faculty at Unidemy helped me secure AIR 1."</p>
                                <div>
                                    <h3 class="text-xl font-bold text-white tracking-wide">Tathagat Avatar</h3>
                                    <p class="text-primary font-medium mt-1">NEET UG AIR 1</p>
                                    <p class="text-slate-400 text-sm mt-1">AIIMS New Delhi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="testimonial-slide absolute w-full transition-all duration-500 opacity-0 scale-95 z-0"
                    data-index="1">
                    <div class="bg-slate-900 shadow-2xl rounded-3xl p-8 md:p-12 relative overflow-hidden group">
                        <i data-lucide="quote"
                            class="absolute top-6 right-8 w-24 h-24 text-white/5 -rotate-12 group-hover:rotate-0 transition-transform duration-500"></i>
                        <div class="flex flex-col md:flex-row gap-8 items-center md:items-start relative z-10">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&q=80&w=200"
                                alt="Student"
                                class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover border-4 border-white/10 shadow-xl flex-shrink-0">
                            <div class="flex-1 text-center md:text-left">
                                <div class="flex justify-center md:justify-start gap-1 mb-4 text-secondary">
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                </div>
                                <p class="text-xl md:text-2xl text-slate-200 font-light italic leading-relaxed mb-6">
                                    "The study materials and mentorship guided me to clear IIT-JEE with an
                                    outstanding rank."</p>
                                <div>
                                    <h3 class="text-xl font-bold text-white tracking-wide">Rahul Sharma</h3>
                                    <p class="text-primary font-medium mt-1">IIT-JEE AIR 14</p>
                                    <p class="text-slate-400 text-sm mt-1">IIT Bombay</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="testimonial-slide absolute w-full transition-all duration-500 opacity-0 scale-95 z-0"
                    data-index="2">
                    <div class="bg-slate-900 shadow-2xl rounded-3xl p-8 md:p-12 relative overflow-hidden group">
                        <i data-lucide="quote"
                            class="absolute top-6 right-8 w-24 h-24 text-white/5 -rotate-12 group-hover:rotate-0 transition-transform duration-500"></i>
                        <div class="flex flex-col md:flex-row gap-8 items-center md:items-start relative z-10">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=200"
                                alt="Student"
                                class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover border-4 border-white/10 shadow-xl flex-shrink-0">
                            <div class="flex-1 text-center md:text-left">
                                <div class="flex justify-center md:justify-start gap-1 mb-4 text-secondary">
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                </div>
                                <p class="text-xl md:text-2xl text-slate-200 font-light italic leading-relaxed mb-6">
                                    "Unidemy's study abroad counseling was exceptional. They helped me get into my
                                    dream university."</p>
                                <div>
                                    <h3 class="text-xl font-bold text-white tracking-wide">Priya Patel</h3>
                                    <p class="text-primary font-medium mt-1">Admitted to MIT</p>
                                    <p class="text-slate-400 text-sm mt-1">Computer Science</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="testimonial-slide absolute w-full transition-all duration-500 opacity-0 scale-95 z-0"
                    data-index="3">
                    <div class="bg-slate-900 shadow-2xl rounded-3xl p-8 md:p-12 relative overflow-hidden group">
                        <i data-lucide="quote"
                            class="absolute top-6 right-8 w-24 h-24 text-white/5 -rotate-12 group-hover:rotate-0 transition-transform duration-500"></i>
                        <div class="flex flex-col md:flex-row gap-8 items-center md:items-start relative z-10">
                            <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?auto=format&fit=crop&q=80&w=200"
                                alt="Student"
                                class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover border-4 border-white/10 shadow-xl flex-shrink-0">
                            <div class="flex-1 text-center md:text-left">
                                <div class="flex justify-center md:justify-start gap-1 mb-4 text-secondary">
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                </div>
                                <p class="text-xl md:text-2xl text-slate-200 font-light italic leading-relaxed mb-6">
                                    "With their consistent support and mock tests, I cleared my foundation exams
                                    with a perfect score."</p>
                                <div>
                                    <h3 class="text-xl font-bold text-white tracking-wide">Ankush Verma</h3>
                                    <p class="text-primary font-medium mt-1">CBSE 10th Topper</p>
                                    <p class="text-slate-400 text-sm mt-1">99.8% Aggregate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="testimonial-slide absolute w-full transition-all duration-500 opacity-0 scale-95 z-0"
                    data-index="4">
                    <div class="bg-slate-900 shadow-2xl rounded-3xl p-8 md:p-12 relative overflow-hidden group">
                        <i data-lucide="quote"
                            class="absolute top-6 right-8 w-24 h-24 text-white/5 -rotate-12 group-hover:rotate-0 transition-transform duration-500"></i>
                        <div class="flex flex-col md:flex-row gap-8 items-center md:items-start relative z-10">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&q=80&w=200"
                                alt="Student"
                                class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover border-4 border-white/10 shadow-xl flex-shrink-0">
                            <div class="flex-1 text-center md:text-left">
                                <div class="flex justify-center md:justify-start gap-1 mb-4 text-secondary">
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                </div>
                                <p class="text-xl md:text-2xl text-slate-200 font-light italic leading-relaxed mb-6">
                                    "The dedicated mentorship at Unidemy paved the way for my selection in top
                                    medical colleges."</p>
                                <div>
                                    <h3 class="text-xl font-bold text-white tracking-wide">Sneha Rathi</h3>
                                    <p class="text-primary font-medium mt-1">NEET UG AIR 42</p>
                                    <p class="text-slate-400 text-sm mt-1">JIPMER Puducherry</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="flex justify-center items-center gap-6 mt-12">
                <button id="prev-testimonial"
                    class="p-3 rounded-full bg-white shadow-md border border-gray-100 text-gray-400 hover:text-primary transition-colors hover:border-primary">
                    <i data-lucide="chevron-left" class="w-6 h-6"></i>
                </button>
                <div class="flex gap-2" id="testimonial-dots">
                    <button class="t-dot h-2.5 w-8 bg-secondary rounded-full transition-all" data-index="0"></button>
                    <button class="t-dot h-2.5 w-2.5 bg-gray-300 rounded-full transition-all hover:bg-gray-400"
                        data-index="1"></button>
                    <button class="t-dot h-2.5 w-2.5 bg-gray-300 rounded-full transition-all hover:bg-gray-400"
                        data-index="2"></button>
                    <button class="t-dot h-2.5 w-2.5 bg-gray-300 rounded-full transition-all hover:bg-gray-400"
                        data-index="3"></button>
                    <button class="t-dot h-2.5 w-2.5 bg-gray-300 rounded-full transition-all hover:bg-gray-400"
                        data-index="4"></button>
                </div>
                <button id="next-testimonial"
                    class="p-3 rounded-full bg-white shadow-md border border-gray-100 text-gray-400 hover:text-primary transition-colors hover:border-primary">
                    <i data-lucide="chevron-right" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </div>
</section>
<!-- Study Resources Section -->
<section id="resources" class="py-12 bg-white relative overflow-hidden">
    <div
        class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/2 pointer-events-none">
    </div>
    <div
        class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-secondary/5 rounded-full blur-[80px] translate-y-1/2 -translate-x-1/3 pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16 px-4">
            <div
                class="inline-flex items-center px-4 py-2 rounded-full bg-blue-50 text-primary font-semibold text-xs md:text-sm mb-6 md:mb-8 shadow-sm border border-blue-100 uppercase tracking-wider">
                Free Materials</div>
            <h2 class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-slate-900 mb-6 md:mb-8 tracking-tight">
                Premium <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-blue-600">Study Resources</span>
            </h2>
            <p class="text-sm md:text-lg text-slate-600 leading-relaxed">
                Access top-tier study materials curated by leading educators to help you ace your exams.
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-6 md:gap-8">
            <!-- Resource 1 -->
            <?php if (ENABLE_REFERENCE_BOOKS): ?>
                <a href="pages/reference-books.php"
                    class="block w-full sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1.5rem)] max-w-[320px] relative group bg-white rounded-2xl p-5 md:p-10 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden">
                    <div
                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-400 to-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div
                        class="w-12 h-12 md:w-20 md:h-20 rounded-xl flex items-center justify-center text-3xl mb-4 md:mb-8 bg-blue-50 relative">
                        <i data-lucide="book-open"
                            class="w-6 h-6 md:w-10 md:h-10 text-primary group-hover:scale-110 transition-transform"></i>
                    </div>
                    <h3
                        class="text-base md:text-2xl font-bold text-slate-900 mb-2 md:mb-4 group-hover:text-primary transition-colors">
                        Reference Books</h3>
                    <p
                        class="text-gray-500 text-xs md:text-base leading-relaxed mb-4 md:mb-8 line-clamp-2 md:line-clamp-none">
                        Simplified books for complex academic concepts.</p>
                    <div class="flex items-center text-xs md:text-sm font-bold text-primary cursor-pointer">
                        Explore <i data-lucide="arrow-right"
                            class="w-3 h-3 ml-1 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </a>
            <?php else: ?>
                <div
                    class="block w-full sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1.5rem)] max-w-[320px] relative group bg-white rounded-2xl p-5 md:p-10 border border-gray-100 shadow-sm transition-all grayscale-[30%] opacity-90 cursor-not-allowed">
                    <div
                        class="absolute top-4 right-4 bg-slate-500 text-white shadow-md text-[10px] font-black px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider z-20">
                        <i data-lucide="lock" class="w-3 h-3"></i> Coming Soon
                    </div>
                    <div
                        class="w-12 h-12 md:w-20 md:h-20 rounded-xl flex items-center justify-center text-3xl mb-4 md:mb-8 bg-blue-50/50 relative">
                        <i data-lucide="book-open" class="w-6 h-6 md:w-10 md:h-10 text-slate-400"></i>
                    </div>
                    <h3 class="text-base md:text-2xl font-bold text-slate-500 mb-2 md:mb-4">
                        Reference Books</h3>
                    <p
                        class="text-slate-400 text-xs md:text-base leading-relaxed mb-4 md:mb-8 line-clamp-2 md:line-clamp-none">
                        Simplified books for complex academic concepts.</p>
                    <div class="flex items-center text-xs md:text-sm font-bold text-slate-400">
                        Locked <i data-lucide="lock" class="w-3 h-3 ml-1"></i>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Resource 2 -->
            <?php if (ENABLE_NCERT_SOLUTIONS): ?>
                <a href="pages/ncert-solutions.php"
                    class="block w-full sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1.5rem)] max-w-[320px] relative group bg-white rounded-2xl p-5 md:p-10 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden">
                    <div
                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-emerald-400 to-green-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div
                        class="w-12 h-12 md:w-20 md:h-20 rounded-xl flex items-center justify-center text-3xl mb-4 md:mb-8 bg-emerald-50 relative">
                        <i data-lucide="file-text"
                            class="w-6 h-6 md:w-10 md:h-10 text-emerald-600 group-hover:scale-110 transition-transform"></i>
                    </div>
                    <h3
                        class="text-base md:text-2xl font-bold text-slate-900 mb-2 md:mb-4 group-hover:text-primary transition-colors">
                        NCERT Solutions</h3>
                    <p
                        class="text-gray-500 text-xs md:text-base leading-relaxed mb-4 md:mb-8 line-clamp-2 md:line-clamp-none">
                        Step-by-step solutions for board exams.</p>
                    <div class="flex items-center text-xs md:text-sm font-bold text-primary cursor-pointer">
                        Explore <i data-lucide="arrow-right"
                            class="w-3 h-3 ml-1 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </a>
            <?php else: ?>
                <div
                    class="block w-full sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1.5rem)] max-w-[320px] relative group bg-white rounded-2xl p-5 md:p-10 border border-gray-100 shadow-sm transition-all grayscale-[30%] opacity-90 cursor-not-allowed">
                    <div
                        class="absolute top-4 right-4 bg-slate-500 text-white shadow-md text-[10px] font-black px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider z-20">
                        <i data-lucide="lock" class="w-3 h-3"></i> Coming Soon
                    </div>
                    <div
                        class="w-12 h-12 md:w-20 md:h-20 rounded-xl flex items-center justify-center text-3xl mb-4 md:mb-8 bg-emerald-50/50 relative">
                        <i data-lucide="file-text" class="w-6 h-6 md:w-10 md:h-10 text-slate-400"></i>
                    </div>
                    <h3 class="text-base md:text-2xl font-bold text-slate-500 mb-2 md:mb-4">
                        NCERT Solutions</h3>
                    <p
                        class="text-slate-400 text-xs md:text-base leading-relaxed mb-4 md:mb-8 line-clamp-2 md:line-clamp-none">
                        Step-by-step solutions for board exams.</p>
                    <div class="flex items-center text-xs md:text-sm font-bold text-slate-400">
                        Locked <i data-lucide="lock" class="w-3 h-3 ml-1"></i>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Resource 3 -->
            <?php if (ENABLE_DETAILED_NOTES): ?>
                <a href="pages/detailed-notes.php"
                    class="block w-full sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1.5rem)] max-w-[320px] relative group bg-white rounded-2xl p-5 md:p-10 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden">
                    <div
                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-orange-400 to-red-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div
                        class="w-12 h-12 md:w-20 md:h-20 rounded-xl flex items-center justify-center text-3xl mb-4 md:mb-8 bg-orange-50 relative">
                        <i data-lucide="pen-tool"
                            class="w-6 h-6 md:w-10 md:h-10 text-orange-600 group-hover:scale-110 transition-transform"></i>
                    </div>
                    <h3
                        class="text-base md:text-2xl font-bold text-slate-900 mb-2 md:mb-4 group-hover:text-primary transition-colors">
                        Detailed Notes</h3>
                    <p
                        class="text-gray-500 text-xs md:text-base leading-relaxed mb-4 md:mb-8 line-clamp-2 md:line-clamp-none">
                        Comprehensive notes for quick revision.</p>
                    <div class="flex items-center text-xs md:text-sm font-bold text-primary cursor-pointer">
                        Explore <i data-lucide="arrow-right"
                            class="w-3 h-3 ml-1 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </a>
            <?php else: ?>
                <div
                    class="block w-full sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1.5rem)] max-w-[320px] relative group bg-white rounded-2xl p-5 md:p-10 border border-gray-100 shadow-sm transition-all grayscale-[30%] opacity-90 cursor-not-allowed">
                    <div
                        class="absolute top-4 right-4 bg-slate-500 text-white shadow-md text-[10px] font-black px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider z-20">
                        <i data-lucide="lock" class="w-3 h-3"></i> Coming Soon
                    </div>
                    <div
                        class="w-12 h-12 md:w-20 md:h-20 rounded-xl flex items-center justify-center text-3xl mb-4 md:mb-8 bg-orange-50/50 relative">
                        <i data-lucide="pen-tool" class="w-6 h-6 md:w-10 md:h-10 text-slate-400"></i>
                    </div>
                    <h3 class="text-base md:text-2xl font-bold text-slate-500 mb-2 md:mb-4">
                        Detailed Notes</h3>
                    <p
                        class="text-slate-400 text-xs md:text-base leading-relaxed mb-4 md:mb-8 line-clamp-2 md:line-clamp-none">
                        Comprehensive notes for quick revision.</p>
                    <div class="flex items-center text-xs md:text-sm font-bold text-slate-400">
                        Locked <i data-lucide="lock" class="w-3 h-3 ml-1"></i>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Resource 4 -->
            <?php if (ENABLE_FREE_RESOURCES): ?>
                <a href="pages/free-resources.php"
                    class="block w-full sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1.5rem)] max-w-[320px] relative group bg-white rounded-2xl p-5 md:p-10 border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden">
                    <div
                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-orange-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div
                        class="w-12 h-12 md:w-20 md:h-20 rounded-xl flex items-center justify-center text-3xl mb-4 md:mb-8 bg-amber-50 relative">
                        <i data-lucide="unlock"
                            class="w-6 h-6 md:w-10 md:h-10 text-amber-600 group-hover:scale-110 transition-transform"></i>
                    </div>
                    <h3
                        class="text-base md:text-2xl font-bold text-slate-900 mb-2 md:mb-4 group-hover:text-primary transition-colors">
                        Free Resources</h3>
                    <p
                        class="text-gray-500 text-xs md:text-base leading-relaxed mb-4 md:mb-8 line-clamp-2 md:line-clamp-none">
                        Practice papers and video lectures.</p>
                    <div class="flex items-center text-xs md:text-sm font-bold text-primary cursor-pointer">
                        Access <i data-lucide="arrow-right"
                            class="w-3 h-3 ml-1 transform group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </a>
            <?php else: ?>
                <div
                    class="block w-full sm:w-[calc(50%-1rem)] lg:w-[calc(25%-1.5rem)] max-w-[320px] relative group bg-white rounded-2xl p-5 md:p-10 border border-gray-100 shadow-sm transition-all grayscale-[30%] opacity-90 cursor-not-allowed">
                    <div
                        class="absolute top-4 right-4 bg-slate-500 text-white shadow-md text-[10px] font-black px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider z-20">
                        <i data-lucide="lock" class="w-3 h-3"></i> Coming Soon
                    </div>
                    <div
                        class="w-12 h-12 md:w-20 md:h-20 rounded-xl flex items-center justify-center text-3xl mb-4 md:mb-8 bg-amber-50/50 relative">
                        <i data-lucide="unlock" class="w-6 h-6 md:w-10 md:h-10 text-slate-400"></i>
                    </div>
                    <h3 class="text-base md:text-2xl font-bold text-slate-500 mb-2 md:mb-4">
                        Free Resources</h3>
                    <p
                        class="text-slate-400 text-xs md:text-base leading-relaxed mb-4 md:mb-8 line-clamp-2 md:line-clamp-none">
                        Practice papers and video lectures.</p>
                    <div class="flex items-center text-xs md:text-sm font-bold text-slate-400">
                        Locked <i data-lucide="lock" class="w-3 h-3 ml-1"></i>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Social Community Section -->
<section id="social" class="py-8 md:py-12 bg-white/20 backdrop-blur-sm relative overflow-hidden">
    <div
        class="absolute top-0 right-0 w-[600px] h-[600px] bg-secondary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none">
    </div>
    <div
        class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-primary/5 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16 px-4">
            <h2 class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-[#1E4F9C] mb-6 md:mb-8 tracking-tight">
                Join Our <span class="text-[#F97316]">Social Community</span>
            </h2>
            <p class="text-sm md:text-lg text-slate-600 leading-relaxed font-medium">
                Connect with millions of learners, get daily educational content, and never miss an important update from Unidemy Global.
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5 max-w-5xl mx-auto">
            <!-- YouTube -->
            <a href="https://www.youtube.com/@UnidemyGlobal" target="_blank"
                class="relative group block rounded-2xl p-4 md:p-5 overflow-hidden transition-all duration-500 hover:-translate-y-1 hover:shadow-xl hover:shadow-red-500/20 bg-[#FF0000]">
                <div class="absolute inset-0 opacity-10"
                    style="background-image: radial-gradient(white 1.5px, transparent 1.5px); background-size: 12px 12px;">
                </div>
                <div
                    class="absolute -top-12 -right-12 w-24 h-24 bg-white/20 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700">
                </div>
                <div class="relative z-10 flex flex-col h-full text-white">
                    <div
                        class="w-10 h-10 md:w-11 md:h-11 rounded-xl bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center mb-4 group-hover:rotate-6 transition-transform">
                        <i data-lucide="youtube" class="w-5 h-5 md:w-6 md:h-6"></i>
                    </div>
                    <h3 class="text-sm md:text-base font-bold mb-0.5 tracking-tight uppercase">YouTube</h3>
                    <p class="text-[9px] md:text-[10px] font-semibold text-white/80 mb-4 tracking-widest uppercase">
                        1.2M+ Subs</p>
                    <div
                        class="mt-auto flex items-center gap-1.5 bg-white text-red-600 w-max px-3 py-1.5 rounded-lg font-bold text-[10px] md:text-[11px] shadow-sm transform group-hover:translate-x-1 transition-all">
                        Join <i data-lucide="chevron-right" class="w-2.5 h-2.5"></i>
                    </div>
                </div>
            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com/unidemy.global/" target="_blank"
                class="relative group block rounded-2xl p-4 md:p-5 overflow-hidden transition-all duration-500 hover:-translate-y-1 hover:shadow-xl hover:shadow-pink-500/20 bg-gradient-to-tr from-[#f9ce34] via-[#ee2a7b] to-[#6228d7]">
                <div class="absolute inset-0 opacity-10"
                    style="background-image: radial-gradient(white 1.5px, transparent 1.5px); background-size: 12px 12px;">
                </div>
                <div
                    class="absolute -top-12 -right-12 w-24 h-24 bg-white/20 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700">
                </div>
                <div class="relative z-10 flex flex-col h-full text-white">
                    <div
                        class="w-10 h-10 md:w-11 md:h-11 rounded-xl bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center mb-4 group-hover:rotate-6 transition-transform">
                        <i data-lucide="instagram" class="w-5 h-5 md:w-6 md:h-6"></i>
                    </div>
                    <h3 class="text-sm md:text-base font-bold mb-0.5 tracking-tight uppercase">Instagram</h3>
                    <p class="text-[9px] md:text-[10px] font-semibold text-white/80 mb-4 tracking-widest uppercase">
                        850K+ Fans</p>
                    <div
                        class="mt-auto flex items-center gap-1.5 bg-white text-pink-600 w-max px-3 py-1.5 rounded-lg font-bold text-[10px] md:text-[11px] shadow-sm transform group-hover:translate-x-1 transition-all">
                        Follow <i data-lucide="chevron-right" class="w-2.5 h-2.5"></i>
                    </div>
                </div>
            </a>

            <!-- Facebook -->
            <a href="https://www.facebook.com/p/Unidemy-Global-61571328594976/" target="_blank"
                class="relative group block rounded-2xl p-4 md:p-5 overflow-hidden transition-all duration-500 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-600/20 bg-[#1877F2]">
                <div class="absolute inset-0 opacity-10"
                    style="background-image: radial-gradient(white 1.5px, transparent 1.5px); background-size: 12px 12px;">
                </div>
                <div
                    class="absolute -top-12 -right-12 w-24 h-24 bg-white/20 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700">
                </div>
                <div class="relative z-10 flex flex-col h-full text-white">
                    <div
                        class="w-10 h-10 md:w-11 md:h-11 rounded-xl bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center mb-4 group-hover:rotate-6 transition-transform">
                        <i data-lucide="facebook" class="w-5 h-5 md:w-6 md:h-6"></i>
                    </div>
                    <h3 class="text-sm md:text-base font-bold mb-0.5 tracking-tight uppercase">Facebook</h3>
                    <p class="text-[9px] md:text-[10px] font-semibold text-white/80 mb-4 tracking-widest uppercase">
                        500K+ Fans</p>
                    <div
                        class="mt-auto flex items-center gap-1.5 bg-white text-blue-600 w-max px-3 py-1.5 rounded-lg font-bold text-[10px] md:text-[11px] shadow-sm transform group-hover:translate-x-1 transition-all">
                        Join <i data-lucide="chevron-right" class="w-2.5 h-2.5"></i>
                    </div>
                </div>
            </a>

            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/company/unidemy-global-inc" target="_blank"
                class="relative group block rounded-2xl p-4 md:p-5 overflow-hidden transition-all duration-500 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-700/20 bg-[#0077B5]">
                <div class="absolute inset-0 opacity-10"
                    style="background-image: radial-gradient(white 1.5px, transparent 1.5px); background-size: 12px 12px;">
                </div>
                <div
                    class="absolute -top-12 -right-12 w-24 h-24 bg-white/20 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700">
                </div>
                <div class="relative z-10 flex flex-col h-full text-white">
                    <div
                        class="w-10 h-10 md:w-11 md:h-11 rounded-xl bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center mb-4 group-hover:rotate-6 transition-transform">
                        <i data-lucide="linkedin" class="w-5 h-5 md:w-6 md:h-6"></i>
                    </div>
                    <h3 class="text-sm md:text-base font-bold mb-0.5 tracking-tight uppercase">LinkedIn</h3>
                    <p class="text-[9px] md:text-[10px] font-semibold text-white/80 mb-4 tracking-widest uppercase">1M+
                        Network</p>
                    <div
                        class="mt-auto flex items-center gap-1.5 bg-white text-blue-700 w-max px-4 py-2 rounded-lg font-bold text-[10px] md:text-[11px] shadow-sm transform group-hover:translate-x-1 transition-all">
                        Connect <i data-lucide="chevron-right" class="w-2.5 h-2.5"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
    </div>
</section>

<!-- DEVELOPER NOTE: 'Our Global Presence' (Centers) section removed by request -->

</main>
<section id="counseling" class="py-8 lg:py-10 bg-[#0B1121] relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 opacity-30">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&amp;w=2071&amp;auto=format&amp;fit=crop"
            class="w-full h-full object-cover" alt="Support">
        <div class="absolute inset-0 bg-gradient-to-br from-primary/80 via-slate-900/90 to-slate-900"></div>
    </div>

    <!-- Animated Blobs -->
    <div
        class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/2 pointer-events-none">
    </div>
    <div
        class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-[120px] translate-y-1/2 -translate-x-1/2 pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div
            class="bg-white/[0.03] backdrop-blur-xl border border-white/10 rounded-2xl md:rounded-[2.5rem] p-6 sm:p-10 md:p-12 lg:p-16 shadow-2xl lg:flex items-center gap-16">
            <!-- Content Side -->
            <div class="lg:w-1/2 mb-12 lg:mb-0 text-center lg:text-left">
                <div
                    class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-primary/20 text-blue-200 border border-white/10 mb-8 backdrop-blur-md mx-auto lg:ml-0">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-secondary"></span>
                    </span>
                    <span class="text-sm font-bold text-blue-300 uppercase tracking-widest">Free Consultation</span>
                </div>

                <h2 class="text-2xl sm:text-4xl lg:text-6xl font-black text-white mb-6 md:mb-8 leading-tight tracking-tight">
                    Expert Counseling <br class="hidden sm:block">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-secondary to-orange-400 italic">for Your Future</span>
                </h2>

                <p class="text-lg md:text-xl text-slate-300 mb-10 leading-relaxed font-medium max-w-xl mx-auto lg:ml-0">
                    Still confused about which path to take? Talk to our expert counselors today and get a
                    personalized learning roadmap tailored to your dreams.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 md:gap-6">
                    <div
                        class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-white/5 hover:border-white/10 transition-colors">
                        <div class="w-10 h-10 rounded-xl bg-primary/20 flex items-center justify-center shrink-0">
                            <i data-lucide="user-check" class="w-5 h-5 text-blue-400"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1">1-on-1 Sessions</h4>
                            <p class="text-slate-400 text-sm">Personalized attention</p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-white/5 hover:border-white/10 transition-colors">
                        <div class="w-10 h-10 rounded-xl bg-secondary/20 flex items-center justify-center shrink-0">
                            <i data-lucide="map" class="w-5 h-5 text-secondary"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1">Career Roadmap</h4>
                            <p class="text-slate-400 text-sm">Clear path to success</p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-white/5 hover:border-white/10 transition-colors">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/20 flex items-center justify-center shrink-0">
                            <i data-lucide="calendar-check" class="w-5 h-5 text-emerald-400"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1">Free Demo</h4>
                            <p class="text-slate-400 text-sm">Experience our teaching</p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-white/5 hover:border-white/10 transition-colors">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/20 flex items-center justify-center shrink-0">
                            <i data-lucide="award" class="w-5 h-5 text-amber-400"></i>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1">Top Faculty</h4>
                            <p class="text-slate-400 text-sm">Learn from the best</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Side -->
            <div class="lg:w-1/2 max-w-xl mx-auto w-full">
                <div class="bg-white rounded-2xl md:rounded-3xl p-6 lg:p-10 shadow-2xl relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-secondary/5 rounded-full -translate-y-1/2 translate-x-1/2">
                    </div>

                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold text-slate-900 mb-2">Book Your Session</h3>
                        <p class="text-slate-500 mb-8 font-medium">Takes less than 30 seconds</p>

                        <form class="space-y-5">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Full
                                    Name</label>
                                <div class="relative">
                                    <i data-lucide="user"
                                        class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400"></i>
                                    <input type="text" placeholder="John Doe"
                                        class="w-full bg-slate-50 border border-slate-100 rounded-xl px-12 py-4 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all outline-none text-slate-900 font-medium">
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Phone
                                    Number</label>
                                <div class="flex items-stretch gap-2 h-[52px]">
                                    <div class="relative" id="country-picker">
                                        <button type="button" id="country-btn"
                                            class="h-full flex items-center gap-2 px-4 bg-slate-50 border border-slate-100 rounded-xl text-sm font-bold text-slate-700 hover:bg-slate-100 focus:bg-white focus:border-primary outline-none transition-all whitespace-nowrap min-w-[110px]">
                                            <img id="flag-img" src="https://flagcdn.com/w20/in.png" width="20" class="rounded-sm" alt="IN">
                                            <span id="dial-code" class="text-slate-600 font-bold">+91</span>
                                            <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400"></i>
                                        </button>
                                        <div id="country-dropdown" class="hidden absolute left-0 top-full mt-2 w-72 bg-white rounded-2xl shadow-2xl border border-gray-100 z-50 p-2 overflow-hidden">
                                            <div class="p-2 border-b border-gray-50 mb-1">
                                                <input type="text" id="country-search" placeholder="Search country..." 
                                                    class="w-full px-3 py-2 text-sm bg-gray-50 border border-transparent rounded-xl outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 placeholder:text-gray-400">
                                            </div>
                                            <ul id="country-list" class="max-h-64 overflow-y-auto space-y-0.5 custom-scrollbar p-1"></ul>
                                        </div>
                                    </div>
                                    <div class="relative flex-1">
                                        <i data-lucide="phone"
                                            class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400"></i>
                                        <input type="tel" placeholder="00000 00000"
                                            class="w-full h-full bg-slate-50 border border-slate-100 rounded-xl px-12 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all outline-none text-slate-900 font-medium">
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label
                                    class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Interested
                                    Category</label>
                                <div class="relative">
                                    <i data-lucide="graduation-cap"
                                        class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400 pointer-events-none"></i>
                                    <select
                                        class="w-full bg-slate-50 border border-slate-100 rounded-xl px-12 py-4 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/5 transition-all outline-none text-slate-900 font-medium appearance-none">
                                        <option>NEET Pre-Exams</option>
                                        <option>JEE Preparation</option>
                                        <option>UPSC Civil Services</option>
                                        <option>SSC / Government</option>
                                        <option>Study Abroad</option>
                                    </select>
                                    <i data-lucide="chevron-down"
                                        class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-400 pointer-events-none"></i>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full bg-secondary hover:bg-orange-600 text-white font-bold py-5 rounded-xl text-xl transition-all shadow-lg shadow-secondary/30 active:scale-[0.98] flex items-center justify-center gap-3 group mt-4">
                                Schedule Free Call
                                <i data-lucide="arrow-right"
                                    class="w-6 h-6 group-hover:translate-x-1 transition-transform"></i>
                            </button>

                            <div class="flex items-center justify-center gap-6 pt-4">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="shield-check" class="w-4 h-4 text-emerald-500"></i>
                                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Secure
                                        Data</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="clock" class="w-4 h-4 text-emerald-500"></i>
                                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Quick
                                        Respond</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Board Selection Bottom Sheet (Mobile Only) -->
<div id="board-sheet-overlay" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-[200] hidden opacity-0 transition-opacity duration-300" onclick="toggleBoardSheet(false)">
    <div id="board-sheet" class="absolute bottom-0 left-0 right-0 bg-white rounded-t-[2.5rem] p-8 translate-y-full transition-transform duration-300 ease-out" onclick="event.stopPropagation()">
        <!-- Handle -->
        <div class="w-12 h-1.5 bg-slate-200 rounded-full mx-auto mb-8"></div>
        
        <h3 class="text-xl font-bold text-slate-900 mb-2">Select Your Board</h3>
        <p class="text-slate-500 text-sm mb-8">Choose your education board to see relevant courses</p>
        
        <div class="grid grid-cols-1 gap-4">
            <a href="pages/kindergarten.php" class="flex items-center gap-4 p-5 rounded-2xl bg-slate-50 border border-slate-100 active:bg-slate-100 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-white shadow-sm flex items-center justify-center">
                    <i data-lucide="baby" class="w-6 h-6 text-amber-500"></i>
                </div>
                <div class="flex-1">
                    <h4 class="font-bold text-slate-900">Kindergarten</h4>
                    <p class="text-[10px] text-slate-500 uppercase tracking-widest font-bold">Foundation (Age 3-6)</p>
                </div>
                <i data-lucide="chevron-right" class="w-5 h-5 text-slate-300 group-hover:translate-x-1 transition-transform"></i>
            </a>

            <a href="pages/cbse.php" class="flex items-center gap-4 p-5 rounded-2xl bg-slate-50 border border-slate-100 active:bg-slate-100 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-white shadow-sm flex items-center justify-center">
                    <span class="text-xs font-black text-primary">CBSE</span>
                </div>
                <div class="flex-1">
                    <h4 class="font-bold text-slate-900">CBSE Board</h4>
                    <p class="text-[10px] text-slate-500 uppercase tracking-widest font-bold">NCERT Curriculum</p>
                </div>
                <i data-lucide="chevron-right" class="w-5 h-5 text-slate-300 group-hover:translate-x-1 transition-transform"></i>
            </a>

            <a href="pages/icse.php" class="flex items-center gap-4 p-5 rounded-2xl bg-slate-50 border border-slate-100 active:bg-slate-100 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-white shadow-sm flex items-center justify-center">
                    <span class="text-xs font-black text-rose-600">ICSE</span>
                </div>
                <div class="flex-1">
                    <h4 class="font-bold text-slate-900">ICSE Board</h4>
                    <p class="text-[10px] text-slate-500 uppercase tracking-widest font-bold">CISCE Curriculum</p>
                </div>
                <i data-lucide="chevron-right" class="w-5 h-5 text-slate-300 group-hover:translate-x-1 transition-transform"></i>
            </a>

            <a href="pages/karnataka-board.php" class="flex items-center gap-4 p-5 rounded-2xl bg-slate-50 border border-slate-100 active:bg-slate-100 transition-all group">
                <div class="w-12 h-12 rounded-xl bg-white shadow-sm flex items-center justify-center">
                    <span class="text-xs font-black text-emerald-600">STATE</span>
                </div>
                <div class="flex-1">
                    <h4 class="font-bold text-slate-900">Karnataka Board</h4>
                    <p class="text-[10px] text-slate-500 uppercase tracking-widest font-bold">KSEEB / PUE Curriculum</p>
                </div>
                <i data-lucide="chevron-right" class="w-5 h-5 text-slate-300 group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
        
        <button onclick="toggleBoardSheet(false)" class="w-full mt-8 py-4 text-slate-400 font-bold text-sm uppercase tracking-widest">Cancel</button>
    </div>
</div>



<script>

    function toggleBoardSheet(show) {
        const overlay = document.getElementById('board-sheet-overlay');
        const sheet = document.getElementById('board-sheet');
        
        if (show) {
            overlay.classList.remove('hidden');
            setTimeout(() => {
                overlay.classList.add('opacity-100');
                sheet.classList.remove('translate-y-full');
                if (typeof lucide !== 'undefined') lucide.createIcons();
            }, 10);
            document.body.style.overflow = 'hidden';
        } else {
            overlay.classList.remove('opacity-100');
            sheet.classList.add('translate-y-full');
            setTimeout(() => {
                overlay.classList.add('hidden');
            }, 300);
            document.body.style.overflow = '';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Double check if country list is empty and try to re-initialize
        const list = document.getElementById('country-list');
        if (list && list.children.length === 0) {
            if (typeof initCountryPicker === 'function') {
                initCountryPicker();
            }
        }
    });
</script>

<?php include 'components/footer.php'; ?>