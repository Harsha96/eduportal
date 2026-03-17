<?php
$pageTitle = 'Expert Profile | Dr. Sarah Johnson - Unidemy Global';
include 'components/header.php';
?>
    <main class="pt-32 pb-20 px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            
            <!-- Hero Profile Section -->
            <div class="bg-white rounded-[3rem] p-8 md:p-12 shadow-xl shadow-slate-200/50 border border-white mb-10 overflow-hidden relative">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
                
                <div class="flex flex-col md:flex-row gap-12 items-center relative z-10">
                    <!-- Profile Image -->
                    <div class="relative">
                        <div class="w-48 h-48 md:w-56 md:h-56 rounded-[2.5rem] overflow-hidden border-4 border-white shadow-2xl relative">
                            <img src="https://i.pravatar.cc/300?u=expert1" alt="Dr. Sarah Johnson" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-primary rounded-2xl flex items-center justify-center text-white border-4 border-white shadow-lg">
                            <i data-lucide="check" class="w-6 h-6"></i>
                        </div>
                    </div>

                    <!-- Profile Info -->
                    <div class="flex-1 text-center md:text-left">
                        <div class="flex flex-col md:flex-row md:items-center gap-4 mb-4">
                            <h1 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight">Dr. Sarah Johnson</h1>
                            <span class="inline-flex px-4 py-1.5 bg-primary/10 text-primary text-xs font-black uppercase tracking-widest rounded-full self-center md:self-auto">Senior Expert</span>
                        </div>
                        <p class="text-xl text-slate-600 font-medium mb-8 leading-relaxed max-w-2xl">
                            Medical Admission Specialist with 15+ years of experience in NEET coaching and global medical placements. Helped 2000+ students secure seats in top-tier medical colleges.
                        </p>
                        
                        <div class="flex flex-wrap items-center justify-center md:justify-start gap-8 mb-10">
                            <div class="flex flex-col">
                                <span class="text-3xl font-black text-slate-900">4.5k</span>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Followers</span>
                            </div>
                            <div class="w-px h-10 bg-slate-100 hidden md:block"></div>
                            <div class="flex flex-col">
                                <span class="text-3xl font-black text-slate-900">248</span>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Articles</span>
                            </div>
                            <div class="w-px h-10 bg-slate-100 hidden md:block"></div>
                            <div class="flex flex-col">
                                <span class="text-3xl font-black text-slate-900">12k</span>
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Interactions</span>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row items-center gap-4">
                            <button class="w-full sm:w-auto px-10 py-4 bg-primary text-white rounded-[1.5rem] font-black uppercase tracking-widest shadow-xl shadow-primary/20 hover:shadow-2xl hover:bg-blue-800 transition-all active:scale-95">Follow expert</button>
                            <button class="w-full sm:w-auto px-10 py-4 bg-white border-2 border-slate-100 text-slate-600 rounded-[1.5rem] font-black uppercase tracking-widest hover:border-primary hover:text-primary transition-all flex items-center justify-center gap-2">
                                <i data-lucide="mail" class="w-5 h-5"></i> Message
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Tabs -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
                
                <!-- Sidebar Extra Info -->
                <aside class="lg:col-span-4 space-y-8">
                    <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-slate-100">
                        <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-6">Expertise</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-2 bg-slate-50 text-slate-700 text-xs font-bold rounded-xl border border-slate-100">NEET Strategy</span>
                            <span class="px-3 py-2 bg-slate-50 text-slate-700 text-xs font-bold rounded-xl border border-slate-100">Biology Expert</span>
                            <span class="px-3 py-2 bg-slate-50 text-slate-700 text-xs font-bold rounded-xl border border-slate-100">Career Counseling</span>
                            <span class="px-3 py-2 bg-slate-50 text-slate-700 text-xs font-bold rounded-xl border border-slate-100">Medical Admissions</span>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-slate-900 to-primary rounded-[2rem] p-8 text-white shadow-xl shadow-slate-200">
                        <h3 class="text-xs font-black text-white/50 uppercase tracking-widest mb-4">Weekly Session</h3>
                        <h4 class="text-xl font-bold mb-4 leading-tight">Join Sarah's Live Q&A on NEET Prep</h4>
                        <div class="flex items-center gap-2 text-white/70 text-sm mb-6">
                            <i data-lucide="calendar" class="w-4 h-4"></i> Every Tuesday, 7 PM
                        </div>
                        <button class="w-full bg-white text-primary py-4 rounded-2xl font-black uppercase tracking-widest text-xs hover:bg-slate-50 transition-all">Remind Me</button>
                    </div>
                </aside>

                <!-- Published Posts Feed -->
                <main class="lg:col-span-8 flex flex-col gap-8">
                    <div class="flex items-center justify-between">
                        <h2 class="text-2xl font-black text-slate-900">Recent Publications</h2>
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-bold text-slate-400">Sort by:</span>
                            <select class="text-xs font-black text-primary bg-transparent focus:outline-none cursor-pointer">
                                <option>Newest First</option>
                                <option>Most Popular</option>
                            </select>
                        </div>
                    </div>

                    <!-- Post Sample -->
                    <article class="bg-white rounded-[2.5rem] p-6 shadow-sm border border-slate-100 transition-all hover:shadow-xl hover:shadow-slate-200/50 group">
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="w-full md:w-48 h-32 rounded-2xl overflow-hidden shrink-0">
                                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=400" alt="NEET Strategy" class="w-full h-full object-cover transition-transform group-hover:scale-110">
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-[10px] font-black text-primary uppercase tracking-widest">Medical Guide</span>
                                    <span class="w-1 h-1 bg-slate-200 rounded-full"></span>
                                    <span class="text-[10px] text-slate-400 font-bold uppercase">2 weeks ago</span>
                                </div>
                                <h3 class="text-xl font-black text-slate-900 mb-3 group-hover:text-primary transition-colors">
                                    <a href="blog-post.php">Mastering NEET 2024: The Elite Strategy Guide</a>
                                </h3>
                                <div class="flex items-center gap-4 text-slate-400 text-xs font-bold">
                                    <span class="flex items-center gap-1"><i data-lucide="arrow-big-up" class="w-4 h-4"></i> 1.2k</span>
                                    <span class="flex items-center gap-1"><i data-lucide="message-square" class="w-4 h-4"></i> 248</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="bg-white rounded-[2.5rem] p-6 shadow-sm border border-slate-100 transition-all hover:shadow-xl hover:shadow-slate-200/50 group">
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="w-full md:w-48 h-32 rounded-2xl overflow-hidden shrink-0">
                                <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&q=80&w=400" alt="Med" class="w-full h-full object-cover transition-transform group-hover:scale-110">
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-[10px] font-black text-rose-500 uppercase tracking-widest">Bio Hacks</span>
                                    <span class="w-1 h-1 bg-slate-200 rounded-full"></span>
                                    <span class="text-[10px] text-slate-400 font-bold uppercase">1 month ago</span>
                                </div>
                                <h3 class="text-xl font-black text-slate-900 mb-3 group-hover:text-primary transition-colors">
                                    <a href="blog-post.php">How to Memorize 1000+ Bio Terms Effortlessly</a>
                                </h3>
                                <div class="flex items-center gap-4 text-slate-400 text-xs font-bold">
                                    <span class="flex items-center gap-1"><i data-lucide="arrow-big-up" class="w-4 h-4"></i> 952</span>
                                    <span class="flex items-center gap-1"><i data-lucide="message-square" class="w-4 h-4"></i> 112</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <button class="w-full py-5 bg-white border border-slate-100 rounded-3xl text-primary font-black uppercase tracking-widest text-sm hover:bg-slate-50 transition-all shadow-sm">View More Posts</button>
                </main>
            </div>
        </div>
    </main>

    <!-- Footer synchronized -->
<?php include 'components/footer.php'; ?>
