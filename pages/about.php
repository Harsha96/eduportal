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
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                    <div class="order-2 lg:order-1">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 leading-tight">Why Should You Make Us Your
                            <span class="text-primary">First Choice?</span>
                        </h2>
                        <p class="text-gray-600 mb-8 leading-relaxed text-lg">For more than just learning, Unidemy is a
                            place where your dreams can come true. Here are a few reasons why we can assist you in
                            pursuing your academic goals while also preparing you for life in another country.</p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div
                                class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all">
                                <div
                                    class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mb-4 text-primary">
                                    <i data-lucide="graduation-cap" class="w-6 h-6"></i>
                                </div>
                                <h3 class="font-bold text-gray-900 mb-2">Superior Academic Training</h3>
                                <p class="text-sm text-gray-500 italic leading-relaxed">Individual attention and
                                    innovative study models for TOEFL, PTE, GMAT, GRE, SAT, and ACT.</p>
                            </div>
                            <div
                                class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all">
                                <div
                                    class="w-12 h-12 bg-orange-50 rounded-xl flex items-center justify-center mb-4 text-secondary">
                                    <i data-lucide="compass" class="w-6 h-6"></i>
                                </div>
                                <h3 class="font-bold text-gray-900 mb-2">Comprehensive Guidance</h3>
                                <p class="text-sm text-gray-500 italic leading-relaxed">Support with financial aid,
                                    educational loans, and scholarship applications throughout your career.</p>
                            </div>
                            <div
                                class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all">
                                <div
                                    class="w-12 h-12 bg-green-50 rounded-xl flex items-center justify-center mb-4 text-green-600">
                                    <i data-lucide="landmark" class="w-6 h-6"></i>
                                </div>
                                <h3 class="font-bold text-gray-900 mb-2">Top Institutions</h3>
                                <p class="text-sm text-gray-500 italic leading-relaxed">In-depth research on popular
                                    courses and up-to-date materials from the world's best institutions.</p>
                            </div>
                            <div
                                class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-all">
                                <div
                                    class="w-12 h-12 bg-purple-50 rounded-xl flex items-center justify-center mb-4 text-purple-600">
                                    <i data-lucide="shield-check" class="w-6 h-6"></i>
                                </div>
                                <h3 class="font-bold text-gray-900 mb-2">Worry-free Life</h3>
                                <p class="text-sm text-gray-500 italic leading-relaxed">Complete visa documentation and
                                    compliance assistance provided free of charge to all students.</p>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2 relative">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=1000"
                            alt="Students Learning" class="w-full h-auto rounded-3xl shadow-2xl relative z-10">
                        <div class="absolute -top-6 -right-6 w-32 h-32 bg-secondary/10 rounded-full blur-2xl z-0"></div>
                        <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-primary/10 rounded-full blur-2xl z-0"></div>
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
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1">Full Name</label>
                                    <input type="text" placeholder="John Doe" class="w-full px-6 py-4 rounded-2xl bg-gray-50 border border-gray-100 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1">Email Address</label>
                                    <input type="email" placeholder="john@example.com" class="w-full px-6 py-4 rounded-2xl bg-gray-50 border border-gray-100 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wider ml-1">Phone Number</label>
                                    <input type="tel" placeholder="+1 (555) 000-0000" class="w-full px-6 py-4 rounded-2xl bg-gray-50 border border-gray-100 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400">
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
    </script>
<?php include '../components/footer.php'; ?>
