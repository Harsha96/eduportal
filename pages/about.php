<?php
$pageTitle = 'About Us | Unidemy Global';
$pageDescription = 'Learn more about Unidemy Global, our mission, and the dedicated team helping students achieve their international education goals.';
$base_url = '../';
include '../components/header.php';
?>
    <!-- Main Content -->
    <main class="w-full pt-28 lg:pt-36 pb-20 flex-grow">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Breadcrumbs -->
            <nav class="flex text-sm text-gray-500 mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-2">
                    <li class="inline-flex items-center group">
                        <a href="../index.php" class="inline-flex items-center hover:text-primary transition-colors">
                            <i data-lucide="home" class="w-4 h-4 mr-2"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i>
                            <span class="ml-2 text-primary font-medium">About Us</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Page Header -->
            <div class="mb-12 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Empowering <span
                        class="text-primary">Global Ambitions</span></h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">Discover how Unidemy Global is
                    revolutionizing test preparation and university admissions for students worldwide.</p>
            </div>

            <!-- Tab Navigation -->
            <div class="flex justify-center mb-12">
                <div class="inline-flex p-1.5 bg-gray-100 rounded-2xl shadow-inner border border-gray-200">
                    <button id="tab-who"
                        class="about-tab px-8 py-3.5 rounded-xl font-bold text-sm transition-all duration-300 bg-white text-primary shadow-sm"
                        onclick="switchTab('who')">
                        <div class="flex items-center gap-2">
                            <i data-lucide="users" class="w-4 h-4"></i>
                            Who We Are
                        </div>
                    </button>
                    <button id="tab-team"
                        class="about-tab px-8 py-3.5 rounded-xl font-bold text-sm transition-all duration-300 text-gray-500 hover:text-gray-700"
                        onclick="switchTab('team')">
                        <div class="flex items-center gap-2">
                            <i data-lucide="award" class="w-4 h-4"></i>
                            Our Team
                        </div>
                    </button>
                </div>
            </div>

            <!-- Tab Content: Who We Are -->
            <div id="content-who" class="about-content transition-all duration-500">
                <div class="mb-16">
                    <div class="inline-flex px-4 py-2 bg-primary/5 text-primary rounded-full text-xs font-bold uppercase tracking-widest mb-6">Expert Advantage</div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 tracking-tight leading-[1.1]">
                        Why Should You Make Us Your <br>
                        <span class="text-primary relative inline-block">
                            First Choice?
                            <div class="absolute -bottom-2 left-0 w-full h-2 bg-primary/10 -rotate-1 rounded-full"></div>
                        </span>
                    </h2>
                    <p class="text-slate-500 text-lg max-w-3xl leading-relaxed">For more than just learning, Unidemy Global is a gateway to international success. We provide the mentorship, resources, and institutional partnerships needed to bridge the gap between ambition and reality.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                    <!-- Feature Cards Left -->
                    <div class="lg:col-span-4 space-y-6">
                        <!-- Superior Academic Training -->
                        <div class="group bg-white p-8 rounded-[40px] shadow-[0_10px_40px_rgba(0,0,0,0.04)] border border-slate-50 hover:shadow-[0_20px_60px_rgba(0,0,0,0.08)] transition-all duration-500 hover:-translate-y-2">
                            <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mb-6 text-primary group-hover:scale-110 transition-transform duration-500">
                                <i data-lucide="graduation-cap" class="w-7 h-7"></i>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 mb-3 tracking-tight">Superior Academic Training</h3>
                            <p class="text-sm text-slate-500 leading-relaxed font-medium">Focused attention and innovative study models for TOEFL, PTE, GMAT, GRE, SAT, and ACT.</p>
                        </div>

                        <!-- Top Institutions -->
                        <div class="group bg-white p-8 rounded-[40px] shadow-[0_10px_40px_rgba(0,0,0,0.04)] border border-slate-50 hover:shadow-[0_20px_60px_rgba(0,0,0,0.08)] transition-all duration-500 hover:-translate-y-2">
                            <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center mb-6 text-green-600 group-hover:scale-110 transition-transform duration-500">
                                <i data-lucide="landmark" class="w-7 h-7"></i>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 mb-3 tracking-tight">Top Institutions</h3>
                            <p class="text-sm text-slate-500 leading-relaxed font-medium">Direct pathways to QS Top 100 universities and specialized institutional research.</p>
                        </div>
                    </div>

                    <!-- Center Image -->
                    <div class="lg:col-span-4 relative group">
                        <div class="absolute -inset-4 bg-primary/5 rounded-[50px] blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="relative z-10 p-3 bg-white rounded-[50px] shadow-[0_20px_60px_rgba(0,0,0,0.1)] border border-slate-100 overflow-hidden">
                            <div class="relative aspect-[4/5] overflow-hidden rounded-[40px]">
                                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=1000"
                                    alt="Students Learning" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                                <div class="absolute bottom-8 left-8 right-8 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-700">
                                    <p class="text-white font-black text-lg">World-Class Education</p>
                                    <p class="text-slate-200 text-sm">Join our global community</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature Cards Right -->
                    <div class="lg:col-span-4 space-y-6">
                        <!-- Comprehensive Guidance -->
                        <div class="group bg-white p-8 rounded-[40px] shadow-[0_10px_40px_rgba(0,0,0,0.04)] border border-slate-50 hover:shadow-[0_20px_60px_rgba(0,0,0,0.08)] transition-all duration-500 hover:-translate-y-2">
                            <div class="w-14 h-14 bg-orange-50 rounded-2xl flex items-center justify-center mb-6 text-secondary group-hover:scale-110 transition-transform duration-500">
                                <i data-lucide="compass" class="w-7 h-7"></i>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 mb-3 tracking-tight">Comprehensive Guidance</h3>
                            <p class="text-sm text-slate-500 leading-relaxed font-medium">End-to-end support with financial aid, educational loans, and scholarship applications.</p>
                        </div>

                        <!-- Worry-free Life -->
                        <div class="group bg-white p-8 rounded-[40px] shadow-[0_10px_40px_rgba(0,0,0,0.04)] border border-slate-50 hover:shadow-[0_20px_60px_rgba(0,0,0,0.08)] transition-all duration-500 hover:-translate-y-2">
                            <div class="w-14 h-14 bg-purple-50 rounded-2xl flex items-center justify-center mb-6 text-purple-600 group-hover:scale-110 transition-transform duration-500">
                                <i data-lucide="shield-check" class="w-7 h-7"></i>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 mb-3 tracking-tight">Worry-free Life</h3>
                            <p class="text-sm text-slate-500 leading-relaxed font-medium">Free visa documentation and compliance assistance for all enrolled students.</p>
                        </div>
                    </div>
                </div>

                <!-- Why Trust Us Section -->
                <div
                    class="bg-slate-900 rounded-[3rem] p-12 lg:p-16 text-white relative overflow-hidden mb-20 shadow-2xl shadow-slate-900/50">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-[80px]"></div>
                    <div class="absolute bottom-0 left-0 w-64 h-64 bg-secondary/10 rounded-full blur-[80px]"></div>

                    <div class="relative z-10">
                        <h2 class="text-3xl font-bold mb-8">Why Trust <span class="text-secondary">Our Team?</span></h2>
                        <p
                            class="text-slate-300 mb-12 max-w-3xl leading-relaxed text-lg italic border-l-4 border-secondary pl-6">
                            "Our team at Unidemy understands the value of education and the difficulties of advancing
                            careers through international training. We've created an online educational institution
                            where you can see your dreams come true."</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                            <div
                                class="flex flex-col gap-4 p-6 bg-white/5 rounded-2xl border border-white/10 hover:bg-white/10 transition-colors">
                                <span class="text-secondary text-4xl font-black">01</span>
                                <p class="text-sm text-slate-400 leading-relaxed">Seasoned educational counsellors who
                                    expedite and simplify the application process.</p>
                            </div>
                            <div
                                class="flex flex-col gap-4 p-6 bg-white/5 rounded-2xl border border-white/10 hover:bg-white/10 transition-colors">
                                <span class="text-secondary text-4xl font-black">02</span>
                                <p class="text-sm text-slate-400 leading-relaxed">Knowledgeable experts to help you
                                    identify ideal degree programs and financial aid.</p>
                            </div>
                            <div
                                class="flex flex-col gap-4 p-6 bg-white/5 rounded-2xl border border-white/10 hover:bg-white/10 transition-colors">
                                <span class="text-secondary text-4xl font-black">03</span>
                                <p class="text-sm text-slate-400 leading-relaxed">End-to-end assistance ensures you
                                    easily earn your bachelor's and master's degrees.</p>
                            </div>
                            <div
                                class="flex flex-col gap-4 p-6 bg-white/5 rounded-2xl border border-white/10 hover:bg-white/10 transition-colors">
                                <span class="text-secondary text-4xl font-black">04</span>
                                <p class="text-sm text-slate-400 leading-relaxed">Admission to top Universities with
                                    specialized placement services for your career.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab Content: Our Team -->
            <div id="content-team" class="about-content hidden transition-all duration-500">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20 items-stretch">
                    <!-- President -->
                    <div
                        class="bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 flex flex-col md:flex-row h-full">
                        <div
                            class="md:w-2/5 shrink-0 bg-primary/5 p-8 flex items-center justify-center border-r border-gray-50">
                            <div
                                class="w-32 h-32 bg-primary rounded-full flex items-center justify-center text-white shadow-xl">
                                <i data-lucide="user" class="w-16 h-16"></i>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col justify-center">
                            <div
                                class="inline-flex px-3 py-1 bg-secondary text-white rounded-full text-[10px] font-bold uppercase mb-4 w-max">
                                President</div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Dr. Shivanand Utlasar</h3>
                            <p class="text-primary font-medium text-xs mb-4">MBBS | MS | MSM | MBA</p>
                            <p
                                class="text-gray-600 text-sm italic mb-6 leading-relaxed bg-accent/30 p-4 rounded-xl border-l-2 border-primary">
                                "The world has consistently recognized that education is a powerful agent of change...
                                An educated society is a safe society."</p>
                            <p class="text-xs text-gray-500 leading-relaxed">Dr. Shiva is the driving force behind
                                innovation at Unidemy. His vast experience includes distinguished careers in
                                international business promoting academic collaborations in education and technology.
                            </p>
                        </div>
                    </div>

                    <!-- CAO -->
                    <div
                        class="bg-white rounded-3xl overflow-hidden shadow-lg border border-gray-100 flex flex-col md:flex-row h-full">
                        <div
                            class="md:w-2/5 shrink-0 bg-secondary/5 p-8 flex items-center justify-center border-r border-gray-50">
                            <div
                                class="w-32 h-32 bg-secondary rounded-full flex items-center justify-center text-white shadow-xl">
                                <i data-lucide="user" class="w-16 h-16"></i>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col justify-center">
                            <div
                                class="inline-flex px-3 py-1 bg-primary text-white rounded-full text-[10px] font-bold uppercase mb-4 w-max">
                                Chief Academic Officer</div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-1">Dr. Kenneth C. Edick</h3>
                            <p class="text-primary font-medium text-xs mb-4">Ph.D. MBA</p>
                            <p
                                class="text-gray-600 text-sm italic mb-6 leading-relaxed bg-accent/30 p-4 rounded-xl border-l-2 border-primary">
                                "Education is the key essence of modern society. Our programs develop skills needed to
                                succeed in today’s modern global economy."</p>
                            <p class="text-xs text-gray-400 leading-relaxed">Dr. Ken manages the TNERs Program,
                                providing pathways for students from underserved areas. He coordinates academic
                                curriculums with American degree program partners.</p>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20 text-center">
                    <!-- Robert Stanger -->
                    <div
                        class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all flex flex-col items-center">
                        <div
                            class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mb-6 text-primary shadow-inner">
                            <i data-lucide="user" class="w-10 h-10"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Robert Stanger M.Ed</h3>
                        <p class="text-xs text-primary font-bold uppercase mb-4 tracking-wider">Chief of Global Programs
                        </p>
                        <p
                            class="text-gray-500 text-sm italic mb-4 leading-relaxed line-clamp-3 bg-gray-50 p-4 rounded-xl">
                            "Global collaboration programs have immense potential to bring benefits."</p>
                        <p class="text-xs text-gray-400 leading-relaxed">Expert ESL, SAT, and TOEFL coach with
                            experience in the US, Singapore, Vietnam, and Thailand.</p>
                    </div>

                    <!-- Diane Stanger -->
                    <div
                        class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all flex flex-col items-center">
                        <div
                            class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mb-6 text-primary shadow-inner">
                            <i data-lucide="user" class="w-10 h-10"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Diane Stanger</h3>
                        <p class="text-xs text-primary font-bold uppercase mb-4 tracking-wider">Global Chief of
                            Curriculum</p>
                        <p
                            class="text-gray-500 text-sm italic mb-4 leading-relaxed line-clamp-3 bg-gray-50 p-4 rounded-xl">
                            "When you educate one person you can change a life, when you educate many you can change the
                            world."</p>
                        <p class="text-xs text-gray-400 leading-relaxed">Specializes in Child Development and English
                            language learners. Author of two ESL books.</p>
                    </div>

                    <!-- Zoey Nguyen -->
                    <div
                        class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all flex flex-col items-center">
                        <div
                            class="w-20 h-20 bg-accent rounded-full flex items-center justify-center mb-6 text-primary shadow-inner">
                            <i data-lucide="user" class="w-10 h-10"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Zoey Nguyen</h3>
                        <p class="text-xs text-primary font-bold uppercase mb-4 tracking-wider">MD: South East Asia</p>
                        <p
                            class="text-gray-500 text-sm italic mb-4 leading-relaxed line-clamp-3 bg-gray-50 p-4 rounded-xl">
                            "Our efforts will help facilitate cultural, academic, and business exchange."</p>
                        <p class="text-xs text-gray-400 leading-relaxed">Founder of SACA (Vietnam Study Abroad
                            Association) with a decade of regional experience.</p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <section id="contact" class="py-20 lg:py-28 scroll-mt-24 border-t border-gray-100">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                    <!-- Contact Information -->
                    <div class="space-y-10">
                        <div>
                            <div class="inline-flex items-center gap-2 px-3 py-1 bg-primary/10 text-primary rounded-full text-[10px] font-bold uppercase mb-6">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                Get In Touch
                            </div>
                            <h2 class="text-4xl font-extrabold text-gray-900 mb-6 leading-tight">Ready to start your <span class="text-primary underline decoration-secondary/30">global journey?</span></h2>
                            <p class="text-gray-600 text-lg leading-relaxed">Whether you're looking for enterprise technology solutions or pursuing international education, our experts are here to guide you every step of the way.</p>
                        </div>

                        <div class="space-y-6">
                            <div class="flex items-start gap-5 p-6 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300 shadow-inner">
                                    <i data-lucide="mail" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 mb-1">Email Us</h3>
                                    <p class="text-sm text-gray-500">info@unidemyglobal.com</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-5 p-6 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-orange-50 rounded-2xl flex items-center justify-center text-secondary group-hover:bg-secondary group-hover:text-white transition-all duration-300 shadow-inner">
                                    <i data-lucide="phone-call" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 mb-1">Call Support</h3>
                                    <p class="text-sm text-gray-500">+1 (555) 000-0000</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-5 p-6 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition-all group">
                                <div class="w-12 h-12 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-all duration-300 shadow-inner">
                                    <i data-lucide="map-pin" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900 mb-1">Our Location</h3>
                                    <p class="text-sm text-gray-500">Global Headquarters, Digital Plaza</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Consultation Form -->
                    <div class="bg-white p-10 lg:p-12 rounded-[2.5rem] border border-gray-100 shadow-2xl relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full -mr-16 -mt-16 blur-3xl group-hover:bg-primary/10 transition-colors"></div>
                        
                        <h3 class="text-2xl font-bold text-gray-900 mb-8 flex items-center gap-3">
                            <i data-lucide="sparkles" class="w-6 h-6 text-secondary"></i>
                            Free Consultation
                        </h3>

                        <form id="consultationForm" class="space-y-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1">Full Name</label>
                                <input type="text" placeholder="John Doe" class="w-full px-6 py-4 rounded-2xl bg-gray-50 border border-gray-100 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1">Email Address</label>
                                <input type="email" placeholder="john@example.com" class="w-full px-6 py-4 rounded-2xl bg-gray-50 border border-gray-100 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400">
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1">Phone Number</label>
                                <div class="flex gap-2">
                                    <div class="relative" id="country-picker">
                                        <button type="button" id="country-btn"
                                            class="flex items-center gap-2 px-4 py-4 bg-gray-50 border border-gray-100 rounded-2xl text-xs font-bold text-gray-600 hover:bg-gray-100 focus:bg-white focus:border-primary outline-none transition-all whitespace-nowrap min-w-[100px]">
                                            <img id="flag-img" src="https://flagcdn.com/w20/in.png" width="20" class="rounded-sm" alt="IN">
                                            <span id="dial-code">+91</span>
                                        </button>
                                        <div id="country-dropdown" class="hidden absolute left-0 top-full mt-2 w-64 bg-white rounded-2xl shadow-2xl border border-gray-100 z-50 p-2">
                                            <input type="text" id="country-search" placeholder="Search..." class="w-full px-3 py-2 text-sm bg-gray-50 border border-transparent rounded-xl outline-none focus:border-primary mb-2">
                                            <ul id="country-list" class="max-h-60 overflow-y-auto space-y-1"></ul>
                                        </div>
                                    </div>
                                    <input type="tel" placeholder="Phone Number" class="flex-1 px-6 py-4 rounded-2xl bg-gray-50 border border-gray-100 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1">Service Interest</label>
                                <div class="relative">
                                    <select class="w-full px-6 py-4 rounded-2xl bg-gray-50 border border-gray-100 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all text-gray-600 cursor-pointer appearance-none">
                                        <option value="">Select a service</option>
                                        <option value="web">Web Applications</option>
                                        <option value="cloud">Cloud Solutions</option>
                                        <option value="ai">AI Development</option>
                                        <option value="security">Security Solutions</option>
                                        <option value="education">International Education</option>
                                    </select>
                                    <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400">
                                        <i data-lucide="chevron-down" class="w-4 h-4"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1">Brief Inquiry</label>
                                <textarea rows="4" placeholder="How can we help you achieve your goals?" class="w-full px-6 py-4 rounded-2xl bg-gray-50 border border-gray-100 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400 resize-none"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-primary text-white font-bold py-5 rounded-2xl shadow-xl shadow-primary/20 hover:bg-blue-700 hover:-translate-y-1 transition-all flex items-center justify-center gap-3 active:scale-95">
                                Send Request
                                <i data-lucide="send" class="w-5 h-5"></i>
                            </button>
                            
                            <p class="text-[10px] text-gray-400 text-center px-6 leading-relaxed">By submitting this form, you agree to our 
                                <a href="../legal/privacy.php" class="text-primary hover:underline font-bold">Privacy Policy</a> and 
                                <a href="../legal/terms.php" class="text-primary hover:underline font-bold">Terms of Service</a>.
                            </p>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>

<script>
        function switchTab(tab) {
            // Hide all contents
            document.querySelectorAll('.about-content').forEach(content => {
                content.classList.add('hidden');
            });

            // Deactivate all buttons
            document.querySelectorAll('.about-tab').forEach(btn => {
                btn.classList.remove('bg-white', 'text-primary', 'shadow-sm');
                btn.classList.add('text-gray-500');
            });

            // Show selected content
            const selectedContent = document.getElementById('content-' + tab);
            if (selectedContent) {
                selectedContent.classList.remove('hidden');
            }

            // Activate selected button
            const selectedBtn = document.getElementById('tab-' + tab);
            if (selectedBtn) {
                selectedBtn.classList.add('bg-white', 'text-primary', 'shadow-sm', 'border-b-2', 'border-primary'); // Highlight current tab
                selectedBtn.classList.remove('text-gray-500');
            }
        }

        // Country Picker Logic
        const COUNTRIES = [
            {name:"India",dial:"+91",code:"IN"},
            {name:"United States",dial:"+1",code:"US"},
            {name:"United Kingdom",dial:"+44",code:"GB"},
            {name:"Australia",dial:"+61",code:"AU"},
            {name:"Canada",dial:"+1",code:"CA"},
            {name:"Germany",dial:"+49",code:"DE"},
            {name:"France",dial:"+33",code:"FR"},
            {name:"UAE",dial:"+971",code:"AE"},
            {name:"Saudi Arabia",dial:"+966",code:"SA"},
            {name:"Singapore",dial:"+65",code:"SG"},
            {name:"Japan",dial:"+81",code:"JP"},
            {name:"China",dial:"+86",code:"CN"},
            {name:"South Korea",dial:"+82",code:"KR"},
            {name:"Brazil",dial:"+55",code:"BR"},
            {name:"Mexico",dial:"+52",code:"MX"},
            {name:"South Africa",dial:"+27",code:"ZA"},
            {name:"New Zealand",dial:"+64",code:"NZ"},
            {name:"Italy",dial:"+39",code:"IT"},
            {name:"Spain",dial:"+34",code:"ES"},
            {name:"Netherlands",dial:"+31",code:"NL"},
            {name:"Russia",dial:"+7",code:"RU"},
            {name:"Turkey",dial:"+90",code:"TR"},
            {name:"Pakistan",dial:"+92",code:"PK"},
            {name:"Bangladesh",dial:"+880",code:"BD"},
            {name:"Sri Lanka",dial:"+94",code:"LK"},
            {name:"Nepal",dial:"+977",code:"NP"},
            {name:"Malaysia",dial:"+60",code:"MY"},
            {name:"Indonesia",dial:"+62",code:"ID"},
            {name:"Philippines",dial:"+63",code:"PH"},
            {name:"Thailand",dial:"+66",code:"TH"},
            {name:"Nigeria",dial:"+234",code:"NG"},
            {name:"Kenya",dial:"+254",code:"KE"},
            {name:"Egypt",dial:"+20",code:"EG"},
            {name:"Israel",dial:"+972",code:"IL"},
            {name:"Sweden",dial:"+46",code:"SE"},
            {name:"Norway",dial:"+47",code:"NO"},
            {name:"Denmark",dial:"+45",code:"DK"},
            {name:"Finland",dial:"+358",code:"FI"},
            {name:"Switzerland",dial:"+41",code:"CH"},
            {name:"Poland",dial:"+48",code:"PL"},
            {name:"Portugal",dial:"+351",code:"PT"},
            {name:"Argentina",dial:"+54",code:"AR"},
            {name:"Chile",dial:"+56",code:"CL"}
        ];

        const countryBtn = document.getElementById('country-btn');
        const countryDropdown = document.getElementById('country-dropdown');
        const countrySearch = document.getElementById('country-search');
        const countryList = document.getElementById('country-list');
        const flagImg = document.getElementById('flag-img');
        const dialCode = document.getElementById('dial-code');

        function renderCountries(filter = '') {
            countryList.innerHTML = '';
            const filtered = COUNTRIES.filter(c => 
                c.name.toLowerCase().includes(filter.toLowerCase()) || 
                c.dial.includes(filter)
            );

            filtered.forEach(c => {
                const li = document.createElement('li');
                li.className = 'flex items-center gap-3 px-3 py-2 rounded-xl cursor-pointer hover:bg-gray-50 text-sm transition-colors';
                li.innerHTML = `
                    <img src="https://flagcdn.com/w20/${c.code.toLowerCase()}.png" width="20" class="rounded-sm" alt="${c.code}">
                    <span class="flex-1 font-medium text-gray-700">${c.name}</span>
                    <span class="text-gray-400 font-bold">${c.dial}</span>
                `;
                li.addEventListener('click', () => {
                    flagImg.src = `https://flagcdn.com/w20/${c.code.toLowerCase()}.png`;
                    dialCode.textContent = c.dial;
                    countryDropdown.classList.add('hidden');
                });
                countryList.appendChild(li);
            });
        }

        countryBtn?.addEventListener('click', (e) => {
            e.stopPropagation();
            countryDropdown.classList.toggle('hidden');
            if (!countryDropdown.classList.contains('hidden')) {
                countrySearch.focus();
            }
        });

        countrySearch?.addEventListener('input', (e) => {
            renderCountries(e.target.value);
        });

        document.addEventListener('click', (e) => {
            if (!document.getElementById('country-picker')?.contains(e.target)) {
                countryDropdown?.classList.add('hidden');
            }
        });

        renderCountries();
    </script>
<?php include '../components/footer.php'; ?>
