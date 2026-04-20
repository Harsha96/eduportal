<?php
$pageTitle = 'Unidemy Global Blog | Insights & Education Strategies';
$pageDescription = 'Read the latest insights, strategies, and guides on NEET, IIT-JEE, studying abroad, and foundation courses from Unidemy Global experts.';
$base_url = '../';
include '../components/header.php';
?>
    <!-- Blog Hero Section (Search & Post Box) -->
    <section class="relative pt-24 pb-8 lg:pt-32 lg:pb-12 overflow-hidden bg-[#F8FBFF] border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-end justify-between gap-8 mb-12">
                <div class="max-w-2xl">
                    <h1 class="text-4xl md:text-6xl font-black text-slate-900 tracking-tight leading-tight mb-4">
                        Unidemy <span class="text-primary italic">Community</span>
                    </h1>
                    <p class="text-xl text-slate-600 font-medium leading-relaxed">
                        Where students, teachers, and experts connect to build the future of education.
                    </p>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="openPublishModal('question')" class="bg-secondary text-white px-6 py-3 rounded-xl font-bold shadow-lg shadow-secondary/20 hover:scale-105 active:scale-95 transition-all flex items-center gap-2 text-sm whitespace-nowrap">
                        <i data-lucide="help-circle" class="w-5 h-5"></i>
                        Ask Question
                    </button>
                    <button onclick="openPublishModal('article')" class="bg-primary text-white px-6 py-3 rounded-xl font-bold shadow-lg shadow-primary/20 hover:scale-105 active:scale-95 transition-all flex items-center gap-2 text-sm whitespace-nowrap">
                        <i data-lucide="plus-circle" class="w-5 h-5"></i>
                        Share Content
                    </button>
                </div>
            </div>

            <!-- SNS Search / Post Box (Above filters) -->
            <div class="max-w-3xl mx-auto bg-white rounded-3xl p-5 shadow-xl shadow-slate-200/50 border border-gray-100 mb-2 mt-4">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-primary shrink-0">
                        <i data-lucide="user" class="w-5 h-5"></i>
                    </div>
                    <div onclick="openPublishModal('article')" class="flex-1 bg-slate-50 border border-slate-100 rounded-xl px-4 py-2.5 cursor-text hover:bg-slate-100 transition-all text-slate-400 font-medium text-sm">
                        What's on your mind? Share thoughts or ask a question...
                    </div>
                </div>
                <div class="flex items-center justify-end gap-3">
                    <div class="flex items-center gap-5 mr-auto">
                        <button onclick="openPublishModal('article')" class="flex items-center gap-1.5 text-slate-500 hover:text-primary transition-colors text-xs font-bold group">
                            <i data-lucide="image" class="w-4 h-4 text-blue-400 group-hover:scale-110 transition-transform"></i>
                            Image
                        </button>
                        <button onclick="openPublishModal('article')" class="flex items-center gap-1.5 text-slate-500 hover:text-secondary transition-colors text-xs font-bold group">
                            <i data-lucide="video" class="w-4 h-4 text-orange-400 group-hover:scale-110 transition-transform"></i>
                            Video
                        </button>
                        <button onclick="openPublishModal('question')" class="flex items-center gap-1.5 text-slate-500 hover:text-green-500 transition-colors text-xs font-bold group">
                            <i data-lucide="help-circle" class="w-4 h-4 text-green-400 group-hover:scale-110 transition-transform"></i>
                            Ask
                        </button>
                    </div>
                    <button class="bg-slate-100 text-slate-400 px-5 py-1.5 rounded-lg font-bold text-xs cursor-not-allowed">Post</button>
                </div>
            </div>
        </div>
    </section>

    <style>
        .post-fade-in {
            animation: fadeIn 0.4s ease-out forwards;
        }

        .filter-tab.active, .channel-link.active {
            position: relative;
        }

        .filter-tab.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 4px;
            background: currentColor;
            border-radius: full;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .filter-tab.active, .channel-link.active {
            pointer-events: none;
        }
        #no-posts-msg.hidden {
            display: none !important;
        }
    </style>
    <!-- Blog Main Content Section (SNS Layout) -->

    <section class="py-12 bg-[#F8FBFF]">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                
                <!-- Left Sidebar: Channels (Hidden on mobile) -->
                <aside class="hidden lg:block lg:col-span-3 sticky top-32 h-fit">
                    <div class="bg-white rounded-[2rem] p-6 shadow-sm border border-gray-100">
                        <div class="text-xs font-black text-slate-400 uppercase tracking-widest mb-6 px-2">Discover Channels</div>
                        <nav class="flex flex-col gap-2">
                            <a href="#" data-filter="all" class="channel-link flex items-center gap-4 px-4 py-3 bg-primary/5 text-primary rounded-2xl font-bold transition-all">
                                <i data-lucide="compass" class="w-5 h-5"></i> All Posts
                            </a>
                            <a href="#" data-filter="medical" class="channel-link flex items-center gap-4 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-primary rounded-2xl font-bold transition-all">
                                <i data-lucide="stethoscope" class="w-5 h-5 text-rose-500"></i> Medical Support
                            </a>
                            <a href="#" data-filter="engineering" class="channel-link flex items-center gap-4 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-primary rounded-2xl font-bold transition-all">
                                <i data-lucide="calculator" class="w-5 h-5 text-blue-500"></i> Engineering Prep
                            </a>
                            <a href="#" data-filter="study-abroad" class="channel-link flex items-center gap-4 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-primary rounded-2xl font-bold transition-all">
                                <i data-lucide="globe" class="w-5 h-5 text-emerald-500"></i> Study Abroad
                            </a>
                            <a href="#" data-filter="junior" class="channel-link flex items-center gap-4 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-primary rounded-2xl font-bold transition-all">
                                <i data-lucide="baby" class="w-5 h-5 text-violet-500"></i> Junior School
                            </a>
                            <a href="#" data-filter="podcasts" class="channel-link flex items-center gap-4 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-primary rounded-2xl font-bold transition-all">
                                <i data-lucide="mic" class="w-5 h-5 text-amber-500"></i> Expert Podcasts
                            </a>

                        </nav>
                        
                        <div class="mt-10 mb-2 px-2">
                            <h4 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-4">My Communities</h4>
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between group opacity-70 grayscale">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-indigo-500 flex items-center justify-center text-white text-[10px] font-bold">NE</div>
                                        <span class="text-sm font-bold text-slate-400">NEET Aspirants</span>
                                    </div>
                                    <span class="text-[8px] font-black text-slate-400 uppercase tracking-tighter bg-slate-100 px-1.5 py-0.5 rounded">Coming Soon</span>
                                </div>
                                <div class="flex items-center justify-between group opacity-70 grayscale">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white text-[10px] font-bold">JE</div>
                                        <span class="text-sm font-bold text-slate-400">JEE Warriors</span>
                                    </div>
                                    <span class="text-[8px] font-black text-slate-400 uppercase tracking-tighter bg-slate-100 px-1.5 py-0.5 rounded">Coming Soon</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </aside>

                <!-- Middle Column: Main Feed -->
                <main class="lg:col-span-6 flex flex-col gap-6">
                    <!-- Community Filter Tabs -->
                    <div id="filter-tabs" class="flex items-center justify-start gap-2 overflow-x-auto pb-6 no-scrollbar">
                        <button data-filter="all" class="filter-tab px-6 py-2.5 bg-primary text-white rounded-full font-bold whitespace-nowrap shadow-md shadow-primary/20">All Feed</button>
                        <button data-filter="articles" class="filter-tab px-6 py-2.5 bg-white text-slate-600 border border-slate-100 rounded-full font-bold whitespace-nowrap hover:bg-slate-50 transition-all">Articles</button>
                        <button data-filter="blogs" class="filter-tab px-6 py-2.5 bg-white text-slate-600 border border-slate-100 rounded-full font-bold whitespace-nowrap hover:bg-slate-50 transition-all">Blogs</button>
                        <button data-filter="essays" class="filter-tab px-6 py-2.5 bg-white text-slate-600 border border-slate-100 rounded-full font-bold whitespace-nowrap hover:bg-slate-50 transition-all">Essays</button>
                        <button data-filter="questions" class="filter-tab px-6 py-2.5 bg-white text-slate-600 border border-slate-100 rounded-full font-bold whitespace-nowrap hover:bg-slate-50 transition-all">Q&A</button>
                    </div>
                    
                    <!-- Post 1: Article -->
                    <article class="bg-white rounded-[2.5rem] p-6 md:p-8 shadow-sm border border-slate-100 transition-all hover:shadow-xl hover:shadow-slate-200/50" data-category="articles" data-channel="medical">


                        <div class="flex items-start justify-between mb-6">
                            <a href="../auth/profile.php" class="flex items-center gap-4 group">
                                <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-primary/10 group-hover:border-primary transition-all">
                                    <img src="https://i.pravatar.cc/150?u=expert1" alt="Expert" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h3 class="font-black text-slate-900 leading-none group-hover:text-primary transition-colors">Dr. Sarah Johnson</h3>
                                        <i data-lucide="check-circle" class="w-4 h-4 text-primary fill-primary/10"></i>
                                    </div>
                                    <div class="flex items-center gap-2 text-slate-400 text-xs font-bold uppercase tracking-widest mt-1">
                                        <span>Senior Medical Expert</span>
                                        <span class="w-1 h-1 bg-slate-200 rounded-full"></span>
                                        <span>2 hours ago</span>
                                    </div>
                                </div>
                            </a>
                            <button class="text-slate-300 hover:text-slate-600 p-2"><i data-lucide="more-horizontal" class="w-6 h-6"></i></button>
                        </div>

                        <div class="mb-6">
                            <h2 class="text-2xl font-black text-slate-900 leading-tight mb-4 hover:text-primary transition-colors">
                                <a href="../blog/blog-post.php">Mastering NEET 2024: The Elite Strategy Guide</a>
                            </h2>
                            <div class="post-content-wrapper relative">
                                <p class="post-excerpt text-slate-600 font-medium leading-relaxed line-clamp-2">
                                    Scoring high in NEET requires more than just hard work—it demands precision planning. Learn how top rankers allocate their study time effectively. I've broken down the 24-hour cycle of three AIR 1 holders... 
                                    <span class="full-text outline-none hidden">This elite strategy guide covers everything from early morning revision sessions to the psychological preparation needed for the big day. We'll dive deep into biological mnemonics and physical chemistry problem-solving shortcuts used by the nation's best.</span>
                                </p>
                                <button onclick="togglePostContent(this)" class="read-more-btn text-primary font-bold text-xs mt-2 hover:underline">Read More</button>
                            </div>
                        </div>


                        <a href="../blog/blog-post.php" class="block relative h-64 md:h-80 rounded-[2rem] overflow-hidden mb-8 group cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=800" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="NEET Strategy">
                            <div class="absolute inset-x-0 bottom-0 p-6 bg-gradient-to-t from-black/60 to-transparent flex items-center justify-between">
                                <span data-filter="medical" data-filter-type="channel" class="post-badge px-3 py-1 bg-white/20 backdrop-blur-md rounded-lg text-white text-[10px] font-black uppercase tracking-widest border border-white/20 cursor-pointer hover:bg-white/40 transition-all">
                                    Medical Guide
                                </span>
                                <span data-filter="articles" data-filter-type="category" class="post-badge px-3 py-1 bg-primary text-white text-[10px] font-black uppercase tracking-widest rounded-lg flex items-center gap-1.5 shadow-lg cursor-pointer hover:bg-blue-800 transition-all">
                                    <i data-lucide="zap" class="w-3 h-3"></i> Article
                                </span>

                            </div>
                        </a>

                        <div class="flex items-center justify-between pt-6 border-t border-slate-50 gap-4">
                            <div class="flex items-center gap-2 bg-slate-50 rounded-full p-1 border border-slate-100">
                                <button class="flex items-center gap-2 px-4 py-2 hover:bg-blue-50 text-slate-600 hover:text-primary rounded-full font-bold transition-all">
                                    <i data-lucide="arrow-big-up" class="w-5 h-5"></i>
                                    1.2k
                                </button>
                                <div class="w-px h-4 bg-slate-200"></div>
                                <button class="p-2 hover:bg-rose-50 text-slate-400 hover:text-rose-500 rounded-full transition-all">
                                    <i data-lucide="arrow-big-down" class="w-5 h-5"></i>
                                </button>
                            </div>

                            <div class="flex items-center gap-4">
                                <a href="../blog/blog-post.php" class="flex items-center gap-2 px-4 py-2 hover:bg-slate-50 text-slate-600 rounded-full font-bold transition-all">
                                    <i data-lucide="message-square" class="w-5 h-5"></i>
                                    248
                                </a>
                                <button class="flex items-center gap-2 px-4 py-2 hover:bg-slate-50 text-slate-600 rounded-full font-bold transition-all">
                                    <i data-lucide="share-2" class="w-5 h-5"></i>
                                    Share
                                </button>
                            </div>
                        </div>
                    </article>

                    <!-- Post 2: Question -->
                    <article class="bg-white rounded-[2.5rem] p-6 md:p-8 shadow-sm border border-slate-100 transition-all hover:shadow-xl hover:shadow-slate-200/50" data-category="questions" data-channel="engineering">


                        <a href="../auth/profile.php" class="flex items-start gap-4 mb-6 group">
                            <div class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 shrink-0 group-hover:bg-primary/10 group-hover:text-primary transition-all">
                                <i data-lucide="user" class="w-5 h-5"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2">
                                    <h3 class="font-bold text-slate-700 leading-none group-hover:text-primary transition-colors">Aman Verma</h3>
                                    <span class="text-[10px] bg-slate-100 text-slate-500 font-black px-2 py-0.5 rounded uppercase tracking-tighter">Student</span>
                                </div>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="text-xs text-slate-400 font-bold uppercase tracking-widest">Posted 5 hours ago in Engineering Prep</span>
                                    <span class="w-1 h-1 bg-slate-200 rounded-full"></span>
                                    <span data-filter="engineering" data-filter-type="channel" class="post-badge text-[10px] font-black text-secondary flex items-center gap-1 cursor-pointer hover:text-primary transition-colors">
                                        <i data-lucide="help-circle" class="w-3 h-3"></i> Engineering Prep
                                    </span>
                                    <span class="w-1 h-1 bg-slate-200 rounded-full"></span>
                                    <span data-filter="questions" data-filter-type="category" class="post-badge text-[10px] font-black text-rose-500 flex items-center gap-1 cursor-pointer hover:text-primary transition-colors">
                                        <i data-lucide="help-circle" class="w-3 h-3"></i> Q&A
                                    </span>


                                </div>
                            </div>
                        </a>

                        <div class="mb-6">
                            <h2 class="text-xl font-bold text-slate-900 leading-snug mb-3 hover:text-primary transition-colors">
                                <a href="../blog/blog-post.php">How can I improve my speed in solving Physics problems for IIT-JEE? Current average is 4 mins per question...</a>
                            </h2>
                            <div class="post-content-wrapper relative">
                                <p class="post-excerpt text-slate-600 font-medium leading-relaxed line-clamp-2">
                                    I'm consistently getting the logic right but the calculations are taking too long. Does anyone have specific mental math tricks or a structured way to look at circuit problems faster?
                                    <span class="full-text outline-none hidden"> Speed in JEE Physics is often about recognizing patterns. For circuit problems, the nodal analysis technique is usually faster than Mesh. Practice 20 problems a day using only mental calculation for the intermediate steps.</span>
                                </p>
                                <button onclick="togglePostContent(this)" class="read-more-btn text-primary font-bold text-xs mt-2 hover:underline">Read More</button>
                            </div>
                        </div>


                        <div class="flex items-center justify-between pt-6 border-t border-slate-50">
                            <div class="flex items-center gap-2">
                                <button class="flex items-center gap-2 px-5 py-2.5 bg-primary text-white rounded-full font-bold text-sm shadow-lg shadow-primary/20 hover:scale-105 active:scale-95 transition-all">
                                    Answer Question
                                </button>
                                <span class="text-slate-400 font-bold text-xs ml-4">12 Answers</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <button class="p-2.5 hover:bg-slate-100 rounded-full text-slate-400 transition-all">
                                    <i data-lucide="bookmark" class="w-5 h-5"></i>
                                </button>
                                <button class="p-2.5 hover:bg-slate-100 rounded-full text-slate-400 transition-all">
                                    <i data-lucide="flag" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>
                    </article>

                    <!-- Post 3: Blog -->
                    <article class="bg-white rounded-[2.5rem] p-6 md:p-8 shadow-sm border border-slate-100 transition-all hover:shadow-xl hover:shadow-slate-200/50" data-category="blogs" data-channel="study-abroad">



                        <a href="../auth/profile.php" class="flex items-start justify-between mb-6 group">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-emerald-500/10 group-hover:border-emerald-500 transition-all">
                                    <img src="https://i.pravatar.cc/150?u=expert2" alt="Expert" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h3 class="font-black text-slate-900 leading-none group-hover:text-primary transition-colors">Prof. Michael Chen</h3>
                                        <i data-lucide="award" class="w-4 h-4 text-emerald-500"></i>
                                    </div>
                                    <div class="flex items-center gap-2 text-slate-400 text-xs font-bold uppercase tracking-widest mt-1">
                                        <span>Admissions Dean</span>
                                        <span class="w-1 h-1 bg-slate-200 rounded-full"></span>
                                        <span>yesterday</span>
                                        <span class="w-1 h-1 bg-slate-200 rounded-full ml-1"></span>
                                        <span data-filter="study-abroad" class="post-badge text-[10px] font-black text-emerald-600 flex items-center gap-1 cursor-pointer hover:text-primary transition-colors">
                                            <i data-lucide="book-open" class="w-3 h-3"></i> Study Abroad
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="mb-6">
                            <h2 class="text-2xl font-black text-slate-900 leading-tight mb-4 hover:text-primary transition-colors">
                                <a href="../blog/blog-post.php">The Ultimate Global Guide: Studying in US, UK & Canada</a>
                            </h2>
                            <div class="post-content-wrapper relative">
                                <p class="post-excerpt text-slate-600 font-medium leading-relaxed line-clamp-2">
                                    A comparative study of the world's top destinations based on visa processes, work rights, and overall educational quality. 
                                    <span class="full-text outline-none hidden">While the US offers unparalleled scholarship opportunities, the UK's 2-year post-study work visa and Canada's path to permanent residency remain huge draws for international students heading into the 2024 academic year.</span>
                                </p>
                                <button onclick="togglePostContent(this)" class="read-more-btn text-primary font-bold text-xs mt-2 hover:underline">Read More</button>
                            </div>
                        </div>


                        <div class="flex items-center justify-between pt-6 border-t border-slate-50">
                            <div class="flex items-center gap-2 bg-slate-50 rounded-full p-1">
                                <button class="flex items-center gap-2 px-4 py-2 text-slate-600 font-bold rounded-full transition-all">
                                    <i data-lucide="arrow-big-up" class="w-5 h-5"></i>
                                    842
                                </button>
                            </div>
                            <a href="../blog/blog-post.php" class="text-primary font-bold text-sm flex items-center gap-1">Read Story <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                        </div>
                    </article>

                    <!-- Post 4: Essay -->
                    <article class="bg-white rounded-[2.5rem] p-6 md:p-8 shadow-sm border border-slate-100 transition-all hover:shadow-xl hover:shadow-slate-200/50" data-category="essays" data-channel="junior">
                        <a href="../auth/profile.php" class="flex items-start gap-4 mb-6 group">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-violet-500/10 group-hover:border-violet-500 transition-all">
                                <img src="https://i.pravatar.cc/150?u=expert3" alt="Expert" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <h3 class="font-black text-slate-900 leading-none group-hover:text-primary transition-colors">Ms. Elena Rose</h3>
                                    <span class="text-[10px] bg-violet-50 text-violet-600 font-black px-2 py-0.5 rounded uppercase tracking-tighter">Foundation Specialist</span>
                                </div>
                                <div class="flex items-center gap-2 mt-1 text-slate-400 text-xs font-bold uppercase tracking-widest">
                                    <span>2 days ago</span>
                                    <span class="w-1 h-1 bg-slate-200 rounded-full ml-1"></span>
                                    <span data-filter="junior" class="post-badge text-[10px] font-black text-violet-600 flex items-center gap-1 cursor-pointer hover:text-primary transition-colors">
                                        <i data-lucide="baby" class="w-3 h-3"></i> Junior School
                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class="mb-6">
                            <h2 class="text-2xl font-black text-slate-900 leading-tight mb-4 hover:text-primary transition-colors">
                                <a href="../blog/blog-post.php">Building a Strong Foundation: The Secret to Early Success</a>
                            </h2>
                            <div class="post-content-wrapper relative">
                                <p class="post-excerpt text-slate-600 font-medium leading-relaxed line-clamp-2">
                                    Is it too early to start preparing for Olympiads in Class 5? Experts weigh in on the best ways to nurture young minds without burnout.
                                    <span class="full-text outline-none hidden"> Focusing on logical reasoning and conceptual clarity in primary years is much more beneficial than rote learning. Encourage curiosity and habit-building over test scores.</span>
                                </p>
                                <button onclick="togglePostContent(this)" class="read-more-btn text-primary font-bold text-xs mt-2 hover:underline">Read More</button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-6 border-t border-slate-50">
                            <div class="flex items-center gap-2 bg-slate-50 rounded-full p-1 border border-slate-100">
                                <button class="flex items-center gap-2 px-4 py-2 hover:bg-violet-50 text-slate-600 hover:text-violet-600 rounded-full font-bold transition-all">
                                    <i data-lucide="arrow-big-up" class="w-5 h-5"></i>
                                    512
                                </button>
                            </div>
                            <span data-filter="essays" data-filter-type="category" class="post-badge px-3 py-1 bg-violet-600 text-white text-[10px] font-black uppercase tracking-widest rounded-lg flex items-center gap-1.5 shadow-lg cursor-pointer hover:bg-violet-800 transition-all">
                                <i data-lucide="book-open" class="w-3 h-3"></i> Essay
                            </span>

                        </div>
                    </article>

                    <!-- Pagination / Load More -->

                    <button id="load-more-btn" class="w-full py-5 bg-white border border-slate-100 rounded-3xl text-primary font-black uppercase tracking-widest text-sm hover:bg-slate-50 transition-all shadow-sm">
                        Load More Discussions
                    </button>

                    <!-- No Posts Found Message -->
                    <div id="no-posts-msg" class="hidden flex flex-col items-center justify-center py-20 px-6 bg-white rounded-[2.5rem] border border-dashed border-slate-200 text-center">
                        <div class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center text-slate-300 mb-4">
                            <i data-lucide="search-x" class="w-8 h-8"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">No posts found</h3>
                        <p class="text-slate-500 font-medium mb-6">We couldn't find any posts matching this filter. Try another category or check back later!</p>
                        <button onclick="applyFilter('all')" class="bg-primary text-white px-6 py-2.5 rounded-full font-bold shadow-lg shadow-primary/20 hover:bg-blue-800 transition-all">Clear All Filters</button>
                    </div>

                </main>

                <!-- Right Sidebar: Community & Trending -->
                <aside class="hidden lg:col-span-3 flex flex-col gap-8 sticky top-32 h-fit">
                    
                    <!-- Trending Section -->
                    <div class="bg-white rounded-[2rem] p-6 shadow-sm border border-gray-100">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest">Trending Now</h3>
                            <i data-lucide="trending-up" class="w-4 h-4 text-primary"></i>
                        </div>
                        <div class="flex flex-col gap-6">
                            <a href="#" data-filter="study-abroad" data-filter-type="channel" class="channel-link group">
                                <span class="text-[10px] font-black text-primary uppercase tracking-tighter mb-1 block">Study Abroad</span>
                                <p class="text-sm font-bold text-slate-800 group-hover:text-primary transition-colors leading-snug">Visa updates for Canada students in 2026</p>
                                <span class="text-[10px] text-slate-400 font-bold uppercase mt-2 block">1.5k interactions</span>
                            </a>
                            <a href="#" data-filter="medical" data-filter-type="channel" class="channel-link group">
                                <span class="text-[10px] font-black text-rose-500 uppercase tracking-tighter mb-1 block">Medical</span>
                                <p class="text-sm font-bold text-slate-800 group-hover:text-primary transition-colors leading-snug">Biology high-weightage topics list</p>
                                <span class="text-[10px] text-slate-400 font-bold uppercase mt-2 block">948 interactions</span>
                            </a>
                            <a href="#" data-filter="engineering" data-filter-type="channel" class="channel-link group">
                                <span class="text-[10px] font-black text-blue-500 uppercase tracking-tighter mb-1 block">Engineering</span>
                                <p class="text-sm font-bold text-slate-800 group-hover:text-primary transition-colors leading-snug">JEE Advanced mock results discussion</p>
                                <span class="text-[10px] text-slate-400 font-bold uppercase mt-2 block">2.1k interactions</span>
                            </a>
                        </div>

                        <button class="w-full mt-6 py-3 text-xs font-black text-primary uppercase border border-primary/10 rounded-xl hover:bg-primary/5 transition-all">View Leaderboard</button>
                    </div>

                    <!-- Recommended Experts -->
                    <div class="bg-white rounded-[2rem] p-6 shadow-sm border border-gray-100">
                        <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-6 px-2">Top Experts</h3>
                        <div class="flex flex-col gap-5">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-orange-100 overflow-hidden">
                                        <img src="https://i.pravatar.cc/100?u=e1" alt="">
                                    </div>
                                    <div>
                                        <p class="text-sm font-black text-slate-900 leading-none">Prof. Gupta</p>
                                        <p class="text-[10px] text-slate-400 font-bold mt-1">Physics Specialist</p>
                                    </div>
                                </div>
                                <button class="text-primary hover:bg-primary/10 p-2 rounded-lg transition-all"><i data-lucide="user-plus" class="w-4 h-4"></i></button>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-blue-100 overflow-hidden">
                                        <img src="https://i.pravatar.cc/100?u=e2" alt="">
                                    </div>
                                    <div>
                                        <p class="text-sm font-black text-slate-900 leading-none">Jane Archer</p>
                                        <p class="text-[10px] text-slate-400 font-bold mt-1">IELTS Mentor</p>
                                    </div>
                                </div>
                                <button class="text-primary hover:bg-primary/10 p-2 rounded-lg transition-all"><i data-lucide="user-plus" class="w-4 h-4"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Discord Banner -->
                    <div class="bg-gradient-to-br from-[#5865F2] to-[#4752C4] rounded-[2rem] p-6 text-white shadow-xl shadow-indigo-200">
                        <div class="flex items-center gap-3 mb-4">
                            <i data-lucide="message-circle" class="w-6 h-6"></i>
                            <span class="font-black uppercase tracking-widest text-[10px]">Community Chat</span>
                        </div>
                        <h4 class="text-lg font-bold mb-2">Join our Discord Community</h4>
                        <p class="text-white/80 text-xs font-medium mb-6">Real-time doubt clearing and resource sharing with 10k+ members.</p>
                        <a href="#" class="inline-block w-full text-center bg-white text-[#5865F2] py-3 rounded-xl font-bold hover:bg-slate-50 transition-all">Join Now</a>
                    </div>
                </aside>

            </div>
        </div>
    </section>


<div id="publish-modal" class="fixed inset-0 z-[60] hidden flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm" onclick="closePublishModal()"></div>
        <div class="relative w-full max-w-xl bg-white rounded-[2.5rem] shadow-2xl overflow-hidden flex flex-col max-h-[90vh]">
            <!-- Modal Header -->
            <div class="p-6 pb-4 shrink-0 border-b border-slate-50">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h2 class="text-xl font-black text-slate-900 leading-none">Create Content</h2>
                        <p class="text-slate-500 text-[10px] font-medium mt-1 uppercase tracking-wider">Share your knowledge with the community</p>
                    </div>
                    <button onclick="closePublishModal()" class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 hover:text-slate-600 transition-all">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>

                <!-- 3 Type Buttons in one line -->
                <div class="grid grid-cols-3 gap-3">
                    <button id="type-article" onclick="setType('article')" class="publish-type-btn flex flex-col items-center gap-2 p-3 bg-blue-50 border-2 border-primary rounded-2xl group transition-all">
                        <div class="w-8 h-8 bg-primary rounded-xl flex items-center justify-center text-white shadow-md shadow-primary/20 group-hover:scale-105 transition-transform">
                            <i data-lucide="zap" class="w-4 h-4"></i>
                        </div>
                        <span class="font-black text-primary text-[10px] uppercase tracking-wider">Article</span>
                    </button>
                    <button id="type-question" onclick="setType('question')" class="publish-type-btn flex flex-col items-center gap-2 p-3 bg-white border border-slate-100 rounded-2xl group hover:border-orange-500 transition-all">
                        <div class="w-8 h-8 bg-orange-100 rounded-xl flex items-center justify-center text-orange-500 group-hover:scale-105 transition-transform">
                            <i data-lucide="help-circle" class="w-4 h-4"></i>
                        </div>
                        <span class="font-black text-slate-600 text-[10px] uppercase tracking-wider group-hover:text-orange-500">Question</span>
                    </button>
                    <button id="type-essay" onclick="setType('essay')" class="publish-type-btn flex flex-col items-center gap-2 p-3 bg-white border border-slate-100 rounded-2xl group hover:border-emerald-500 transition-all">
                        <div class="w-8 h-8 bg-emerald-100 rounded-xl flex items-center justify-center text-emerald-500 group-hover:scale-105 transition-transform">
                            <i data-lucide="book-open" class="w-4 h-4"></i>
                        </div>
                        <span class="font-black text-slate-600 text-[10px] uppercase tracking-wider group-hover:text-emerald-500">Essay</span>
                    </button>
                </div>
            </div>

            <!-- Scrollable Body -->
            <div class="p-6 overflow-y-auto no-scrollbar space-y-4 flex-1">
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1 shadow-sm px-2">Title</label>
                    <input type="text" placeholder="Something catchy..." class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-2.5 font-bold text-slate-900 text-sm focus:outline-none focus:border-primary transition-all">
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1 px-2">Category</label>
                    <select class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-2.5 font-bold text-slate-900 text-sm focus:outline-none focus:border-primary transition-all appearance-none cursor-pointer">
                        <option>IIT-JEE Engineering</option>
                        <option>NEET Medical</option>
                        <option>Study Abroad</option>
                        <option>Junior Schools</option>
                        <option>Student Life</option>
                    </select>
                </div>
                <div>
                    <label class="block text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1 px-2">Content</label>
                    <textarea rows="4" placeholder="Share your insights..." class="w-full bg-slate-50 border border-slate-100 rounded-xl px-4 py-3 font-medium text-slate-600 text-sm focus:outline-none focus:border-primary transition-all resize-none"></textarea>
                </div>
                
                <div class="pt-2">
                    <button class="w-full py-4 bg-primary text-white rounded-xl font-black uppercase tracking-widest text-xs shadow-lg shadow-primary/20 hover:bg-blue-800 transition-all active:scale-95">Publish Post</button>
                </div>
            </div>
        </div>
    </div>

<script>
        function openPublishModal(defaultType = 'article') {
            const modal = document.getElementById('publish-modal');
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            setType(defaultType);
        }

        function closePublishModal() {
            const modal = document.getElementById('publish-modal');
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }

        function setType(type) {
            const btns = document.querySelectorAll('.publish-type-btn');
            btns.forEach(btn => {
                btn.classList.remove('bg-blue-50', 'border-primary', 'border-2', 'border-orange-500', 'border-emerald-500');
                btn.classList.add('bg-white', 'border-slate-100', 'border');
                
                const span = btn.querySelector('span');
                span.classList.remove('text-primary', 'text-orange-500', 'text-emerald-500');
                span.classList.add('text-slate-600');
            });

            const activeBtn = document.getElementById(`type-${type}`);
            activeBtn.classList.remove('bg-white', 'border-slate-100', 'border');
            
            const activeSpan = activeBtn.querySelector('span');
            activeSpan.classList.remove('text-slate-600');

            if (type === 'article') {
                activeBtn.classList.add('bg-blue-50', 'border-primary', 'border-2');
                activeSpan.classList.add('text-primary');
            } else if (type === 'question') {
                activeBtn.classList.add('bg-orange-50', 'border-orange-500', 'border-2');
                activeSpan.classList.add('text-orange-500');
            } else if (type === 'essay') {
                activeBtn.classList.add('bg-emerald-50', 'border-emerald-500', 'border-2');
                activeSpan.classList.add('text-emerald-500');
            }
        }

        // Navbar scroll behavior
        const nav = document.getElementById('main-nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                nav.classList.add('bg-white/95', 'backdrop-blur-xl', 'shadow-lg', 'py-3');
                nav.classList.remove('bg-transparent', 'py-5');
            } else {
                nav.classList.remove('bg-white/95', 'backdrop-blur-xl', 'shadow-lg', 'py-3');
                nav.classList.add('bg-transparent', 'py-5');
            }
        });

        // Mobile menu toggle
        const mobBtn = document.getElementById('mobile-menu-btn');
        const mobMenu = document.getElementById('mobile-menu');
        mobBtn.addEventListener('click', () => {
            mobMenu.classList.toggle('hidden');
        });

        // Lucide icons
        lucide.createIcons();
        // Categorization Filter
        const filterTabs = document.querySelectorAll('.filter-tab');
        const channelLinks = document.querySelectorAll('.channel-link');
        const noPostsMsg = document.getElementById('no-posts-msg');
        const loadMoreBtn = document.getElementById('load-more-btn');
        const postsContainer = document.querySelector('.lg\\:col-span-6'); // Main feed container
        
        // Additive filter state
        let currentFilters = {
            category: 'all',
            channel: 'all'
        };

        function applyFilter(value, type, updateUrl = true) {
            console.log(`Applying filter: ${value} to type: ${type}`);
            
            // Update state
            currentFilters[type] = value;

            // Re-fetch posts dynamically to ensure new ones are caught
            const posts = document.querySelectorAll('article');
            const postBadges = document.querySelectorAll('.post-badge');

            // Update URL State
            if (updateUrl) {
                const url = new URL(window.location);
                if (currentFilters.category === 'all') url.searchParams.delete('category');
                else url.searchParams.set('category', currentFilters.category);
                
                if (currentFilters.channel === 'all') url.searchParams.delete('channel');
                else url.searchParams.set('channel', currentFilters.channel);
                
                window.history.pushState({}, '', url);
            }

            // Update Category Tabs Active States
            filterTabs.forEach(t => {
                const isActive = t.dataset.filter === currentFilters.category;
                t.classList.toggle('bg-primary', isActive);
                t.classList.toggle('text-white', isActive);
                t.classList.toggle('shadow-md', isActive);
                t.classList.toggle('shadow-primary/20', isActive);
                t.classList.toggle('bg-white', !isActive);
                t.classList.toggle('text-slate-600', !isActive);
                t.classList.toggle('border', !isActive);
                t.classList.toggle('border-slate-100', !isActive);
                t.classList.add('transition-all', 'duration-300');
                t.classList.toggle('active', isActive);
            });

            // Update Channel Links Active States
            channelLinks.forEach(l => {
                const isActive = l.dataset.filter === currentFilters.channel;
                l.classList.toggle('bg-primary/5', isActive);
                l.classList.toggle('text-primary', isActive);
                l.classList.toggle('text-slate-600', !isActive);
                l.classList.toggle('hover:bg-slate-50', !isActive);
                l.classList.add('transition-all', 'duration-300');
                l.classList.toggle('active', isActive);
            });

            // Update All Post Badges across the feed (even new ones)
            postBadges.forEach(b => {
                const bType = b.dataset.filterType || 'channel';
                const isActive = b.dataset.filter === currentFilters[bType];
                b.classList.toggle('ring-2', isActive);
                b.classList.toggle('ring-primary/40', isActive);
                b.classList.toggle('ring-offset-2', isActive);
            });

            // Filter posts with animation
            let visibleCount = 0;
            posts.forEach(post => {
                const postCat = post.getAttribute('data-category');
                const postChan = post.getAttribute('data-channel');
                
                const matchesCat = (currentFilters.category === 'all' || postCat === currentFilters.category);
                const matchesChan = (currentFilters.channel === 'all' || postChan === currentFilters.channel);
                const show = matchesCat && matchesChan;

                if (show) {
                    post.classList.remove('hidden');
                    post.style.display = 'block';
                    if (!post.classList.contains('post-fade-in')) {
                        post.classList.add('post-fade-in');
                    }
                    // Reset animation to trigger it again
                    post.style.animation = 'none';
                    post.offsetHeight; // trigger reflow
                    post.style.animation = '';
                    visibleCount++;
                } else {
                    post.classList.add('hidden');
                    post.style.display = 'none';
                    post.classList.remove('post-fade-in');
                }
            });

            // Handle empty state
            if (visibleCount === 0) {
                noPostsMsg.classList.remove('hidden');
                loadMoreBtn?.classList.add('hidden');
            } else {
                noPostsMsg.classList.add('hidden');
                loadMoreBtn?.classList.remove('hidden');
            }

            // Scroll to top of feed on mobile
            if (window.innerWidth < 1024 && updateUrl) {
                document.getElementById('filter-tabs')?.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Initialize from URL
        function initFiltersFromUrl() {
            const urlParams = new URLSearchParams(window.location.search);
            const cat = urlParams.get('category') || 'all';
            const chan = urlParams.get('channel') || 'all';
            
            // Apply both in sequence (second one updates both visually)
            currentFilters.category = cat;
            applyFilter(chan, 'channel', false);
        }

        window.addEventListener('DOMContentLoaded', initFiltersFromUrl);
        window.addEventListener('popstate', initFiltersFromUrl);

        filterTabs.forEach(tab => {
            tab.addEventListener('click', () => applyFilter(tab.dataset.filter, 'category'));
        });

        channelLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                applyFilter(link.dataset.filter, 'channel');
            });
        });

        // Event Delegation for Post Badges (Handles dynamic content)
        document.addEventListener('click', (e) => {
            const badge = e.target.closest('.post-badge');
            if (badge) {
                e.preventDefault();
                e.stopPropagation();
                const type = badge.dataset.filterType || 'channel';
                applyFilter(badge.dataset.filter, type);
            }
        });

        // Simulate Load More (for testing dynamic tracking)
        loadMoreBtn?.addEventListener('click', () => {
            const firstPost = document.querySelector('article');
            if (firstPost) {
                const newPost = firstPost.cloneNode(true);
                // Insert before load more button
                loadMoreBtn.parentNode.insertBefore(newPost, loadMoreBtn);
                // Re-apply current filter to include the new post
                applyFilter(currentFilters.channel, 'channel', false);
            }
        });


        function togglePostContent(btn) {
            const wrapper = btn.closest('.post-content-wrapper');
            const excerpt = wrapper.querySelector('.post-excerpt');
            const fullText = wrapper.querySelector('.full-text');
            
            if (excerpt.classList.contains('line-clamp-2')) {
                excerpt.classList.remove('line-clamp-2');
                fullText.classList.remove('hidden');
                btn.textContent = 'Read Less';
            } else {
                excerpt.classList.add('line-clamp-2');
                fullText.classList.add('hidden');
                btn.textContent = 'Read More';
            }
        }



    </script>
<?php include '../components/footer.php'; ?>
