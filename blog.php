<?php
$pageTitle = 'Unidemy Global Blog | Insights & Education Strategies';
$pageDescription = 'Read the latest insights, strategies, and guides on NEET, IIT-JEE, studying abroad, and foundation courses from Unidemy Global experts.';
include 'components/header.php';
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

    <!-- Blog Main Content Section (SNS Layout) -->
    <section class="py-12 bg-[#F8FBFF]">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                
                <!-- Left Sidebar: Channels (Hidden on mobile) -->
                <aside class="hidden lg:block lg:col-span-3 sticky top-32 h-fit">
                    <div class="bg-white rounded-[2rem] p-6 shadow-sm border border-gray-100">
                        <div class="text-xs font-black text-slate-400 uppercase tracking-widest mb-6 px-2">Discover Channels</div>
                        <nav class="flex flex-col gap-2">
                            <a href="#" class="flex items-center gap-4 px-4 py-3 bg-primary/5 text-primary rounded-2xl font-bold transition-all">
                                <i data-lucide="compass" class="w-5 h-5"></i> All Posts
                            </a>
                            <a href="#" class="flex items-center gap-4 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-primary rounded-2xl font-bold transition-all">
                                <i data-lucide="stethoscope" class="w-5 h-5 text-rose-500"></i> Medical Support
                            </a>
                            <a href="#" class="flex items-center gap-4 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-primary rounded-2xl font-bold transition-all">
                                <i data-lucide="calculator" class="w-5 h-5 text-blue-500"></i> Engineering Prep
                            </a>
                            <a href="#" class="flex items-center gap-4 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-primary rounded-2xl font-bold transition-all">
                                <i data-lucide="globe" class="w-5 h-5 text-emerald-500"></i> Study Abroad
                            </a>
                            <a href="#" class="flex items-center gap-4 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-primary rounded-2xl font-bold transition-all">
                                <i data-lucide="baby" class="w-5 h-5 text-violet-500"></i> Junior School
                            </a>
                            <a href="#" class="flex items-center gap-4 px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-primary rounded-2xl font-bold transition-all">
                                <i data-lucide="mic" class="w-5 h-5 text-amber-500"></i> Expert Podcasts
                            </a>
                        </nav>
                        
                        <div class="mt-10 mb-2 px-2">
                            <h4 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-4">My Communities</h4>
                            <div class="flex flex-col gap-4">
                                <a href="#" class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-indigo-500 flex items-center justify-center text-white text-[10px] font-bold">NE</div>
                                    <span class="text-sm font-bold text-slate-700">NEET Aspirants</span>
                                </a>
                                <a href="#" class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-orange-500 flex items-center justify-center text-white text-[10px] font-bold">JE</div>
                                    <span class="text-sm font-bold text-slate-700">JEE Warriors</span>
                                </a>
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
                    
                    <!-- Post 1: SNS Styled -->
                    <article class="bg-white rounded-[2.5rem] p-6 md:p-8 shadow-sm border border-slate-100 transition-all hover:shadow-xl hover:shadow-slate-200/50" data-category="articles">
                        <div class="flex items-start justify-between mb-6">
                            <a href="profile.php" class="flex items-center gap-4 group">
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
                                <a href="blog-post.php">Mastering NEET 2024: The Elite Strategy Guide</a>
                            </h2>
                            <p class="text-slate-600 font-medium leading-relaxed line-clamp-3">
                                Scoring high in NEET requires more than just hard work—it demands precision planning. Learn how top rankers allocate their study time effectively. I've broken down the 24-hour cycle of three AIR 1 holders...
                            </p>
                        </div>

                        <a href="blog-post.php" class="block relative h-64 md:h-80 rounded-[2rem] overflow-hidden mb-8 group cursor-pointer">
                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=800" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" alt="NEET Strategy">
                            <div class="absolute inset-x-0 bottom-0 p-6 bg-gradient-to-t from-black/60 to-transparent flex items-center justify-between">
                                <span class="px-3 py-1 bg-white/20 backdrop-blur-md rounded-lg text-white text-[10px] font-black uppercase tracking-widest border border-white/20">
                                    Medical Guide
                                </span>
                                <span class="px-3 py-1 bg-primary text-white text-[10px] font-black uppercase tracking-widest rounded-lg flex items-center gap-1.5 shadow-lg">
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
                                <a href="blog-post.php" class="flex items-center gap-2 px-4 py-2 hover:bg-slate-50 text-slate-600 rounded-full font-bold transition-all">
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

                    <!-- Post 2: Question Type -->
                    <article class="bg-white rounded-[2.5rem] p-6 md:p-8 shadow-sm border border-slate-100 transition-all hover:shadow-xl hover:shadow-slate-200/50" data-category="questions">
                        <a href="profile.php" class="flex items-start gap-4 mb-6 group">
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
                                    <span class="text-[10px] font-black text-secondary flex items-center gap-1">
                                        <i data-lucide="help-circle" class="w-3 h-3"></i> QUESTION
                                    </span>
                                </div>
                            </div>
                        </a>

                        <div class="mb-6">
                            <h2 class="text-xl font-bold text-slate-900 leading-snug mb-3 hover:text-primary transition-colors">
                                <a href="blog-post.php">How can I improve my speed in solving Physics problems for IIT-JEE? Current average is 4 mins per question...</a>
                            </h2>
                            <p class="text-slate-600 font-medium leading-relaxed">
                                I'm consistently getting the logic right but the calculations are taking too long. Does anyone have specific mental math tricks or a structured way to look at circuit problems faster?
                            </p>
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

                    <!-- Post 3 -->
                    <article class="bg-white rounded-[2.5rem] p-6 md:p-8 shadow-sm border border-slate-100" data-category="essays">
                        <a href="profile.php" class="flex items-start justify-between mb-6 group">
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
                                        <span class="text-[10px] font-black text-emerald-600 flex items-center gap-1">
                                            <i data-lucide="book-open" class="w-3 h-3"></i> ESSAY
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="mb-6">
                            <h2 class="text-2xl font-black text-slate-900 leading-tight mb-4 hover:text-primary transition-colors">
                                <a href="blog-post.php">The Ultimate Global Guide: Studying in US, UK & Canada</a>
                            </h2>
                            <p class="text-slate-600 font-medium leading-relaxed line-clamp-2">
                                A comparative study of the world's top destinations based on visa processes, work rights, and overall educational quality.
                            </p>
                        </div>

                        <div class="flex items-center justify-between pt-6 border-t border-slate-50">
                            <div class="flex items-center gap-2 bg-slate-50 rounded-full p-1">
                                <button class="flex items-center gap-2 px-4 py-2 text-slate-600 font-bold rounded-full transition-all">
                                    <i data-lucide="arrow-big-up" class="w-5 h-5"></i>
                                    842
                                </button>
                            </div>
                            <a href="blog-post.php" class="text-primary font-bold text-sm flex items-center gap-1">Read Story <i data-lucide="chevron-right" class="w-4 h-4"></i></a>
                        </div>
                    </article>

                    <!-- Pagination / Load More -->
                    <button class="w-full py-5 bg-white border border-slate-100 rounded-3xl text-primary font-black uppercase tracking-widest text-sm hover:bg-slate-50 transition-all shadow-sm">
                        Load More Discussions
                    </button>
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
                            <a href="#" class="group">
                                <span class="text-[10px] font-black text-primary uppercase tracking-tighter mb-1 block">Study Abroad</span>
                                <p class="text-sm font-bold text-slate-800 group-hover:text-primary transition-colors leading-snug">Visa updates for Canada students in 2026</p>
                                <span class="text-[10px] text-slate-400 font-bold uppercase mt-2 block">1.5k interactions</span>
                            </a>
                            <a href="#" class="group">
                                <span class="text-[10px] font-black text-rose-500 uppercase tracking-tighter mb-1 block">Medical</span>
                                <p class="text-sm font-bold text-slate-800 group-hover:text-primary transition-colors leading-snug">Biology high-weightage topics list</p>
                                <span class="text-[10px] text-slate-400 font-bold uppercase mt-2 block">948 interactions</span>
                            </a>
                            <a href="#" class="group">
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
        const tabs = document.querySelectorAll('.filter-tab');
        const posts = document.querySelectorAll('article[data-category]');
        
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const filter = tab.dataset.filter;
                
                // Update active tab style
                tabs.forEach(t => {
                    t.classList.remove('bg-primary', 'text-white', 'shadow-md', 'shadow-primary/20');
                    t.classList.add('bg-white', 'text-slate-600', 'border', 'border-slate-100');
                });
                tab.classList.remove('bg-white', 'text-slate-600', 'border', 'border-slate-100');
                tab.classList.add('bg-primary', 'text-white', 'shadow-md', 'shadow-primary/20');
                
                // Filter posts
                posts.forEach(post => {
                    if (filter === 'all' || post.dataset.category === filter) {
                        post.classList.remove('hidden');
                    } else {
                        post.classList.add('hidden');
                    }
                });
            });
        });
    </script>
<?php include 'components/footer.php'; ?>
