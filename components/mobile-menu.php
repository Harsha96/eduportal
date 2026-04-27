<!-- Category Hub Overlay (Mobile Side Drawer) -->
<div id="category-hub-overlay" onclick="toggleCategoryHub(false)" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-[300] opacity-0 transition-opacity duration-300" style="display:none"></div>

<div id="category-hub" class="fixed top-0 right-0 h-full w-[85%] max-w-[360px] bg-white z-[301] transition-transform duration-300 transform translate-x-full shadow-2xl overflow-hidden" style="display:none; flex-direction:column;">
    <!-- Header -->
    <div class="flex-shrink-0 bg-white px-6 py-5 flex items-center justify-between border-b border-slate-50">
        <div>
            <h2 class="text-lg font-black text-slate-900 tracking-tight">Explore Unidemy</h2>
            <p class="text-[9px] font-bold text-primary uppercase tracking-widest">Global Educational Hub</p>
        </div>
        <button onclick="toggleCategoryHub(false)" class="w-9 h-9 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 active:scale-90 transition-transform">
            <i data-lucide="x" class="w-4 h-4"></i>
        </button>
    </div>
    
    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto overscroll-contain px-6 py-6 pb-40">
        <div class="space-y-1">
            <!-- 1. School Boards (Accordion) -->
            <div class="mb-2">
                <button onclick="toggleAccordion('school-boards-menu')" class="w-full flex items-center justify-between group py-3 rounded-2xl active:bg-slate-50 transition-all px-2 -mx-2">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-emerald-50 flex items-center justify-center">
                            <i data-lucide="book" class="w-4 h-4 text-emerald-600"></i>
                        </div>
                        <span class="font-bold text-slate-700 text-sm">1. School Boards</span>
                    </div>
                    <i data-lucide="chevron-down" id="school-boards-icon" class="w-4 h-4 text-slate-300 transition-transform duration-300"></i>
                </button>
                
                <div id="school-boards-menu" class="hidden overflow-hidden ml-11 space-y-0.5 border-l-2 border-slate-50 pl-4 mt-1">
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/kindergarten.php" class="block py-2.5 text-slate-500 font-bold text-[13px] active:text-primary">Kindergarten</a>
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/cbse.php" class="block py-2.5 text-slate-500 font-bold text-[13px] active:text-primary">CBSE Board</a>
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/icse.php" class="block py-2.5 text-slate-500 font-bold text-[13px] active:text-primary">ICSE Board</a>
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/karnataka-board.php" class="block py-2.5 text-slate-500 font-bold text-[13px] active:text-primary">Karnataka Board</a>
                </div>
            </div>

            <!-- 2. Competitive Exams -->
            <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/competitive-exams.php" class="flex items-center gap-3 group py-3 rounded-2xl active:bg-slate-50 transition-all px-2 -mx-2">
                <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center">
                    <i data-lucide="award" class="w-4 h-4 text-blue-600"></i>
                </div>
                <span class="font-bold text-slate-700 text-sm flex-1">2. Competitive Exams</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-200"></i>
            </a>

            <!-- 3. Test Prep -->
            <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/test-prep.php" class="flex items-center gap-3 group py-3 rounded-2xl active:bg-slate-50 transition-all px-2 -mx-2">
                <div class="w-8 h-8 rounded-lg bg-rose-50 flex items-center justify-center">
                    <i data-lucide="target" class="w-4 h-4 text-rose-600"></i>
                </div>
                <span class="font-bold text-slate-700 text-sm flex-1">3. Test Prep</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-200"></i>
            </a>

            <!-- 4. Study Abroad -->
            <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/study-abroad.php" class="flex items-center gap-3 group py-3 rounded-2xl active:bg-slate-50 transition-all px-2 -mx-2">
                <div class="w-8 h-8 rounded-lg bg-indigo-50 flex items-center justify-center">
                    <i data-lucide="graduation-cap" class="w-4 h-4 text-indigo-600"></i>
                </div>
                <span class="font-bold text-slate-700 text-sm flex-1">4. Study Abroad</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-200"></i>
            </a>

            <!-- 5. Internships -->
            <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/internships.php" class="flex items-center gap-3 group py-3 rounded-2xl active:bg-slate-50 transition-all px-2 -mx-2">
                <div class="w-8 h-8 rounded-lg bg-violet-50 flex items-center justify-center">
                    <i data-lucide="briefcase" class="w-4 h-4 text-violet-600"></i>
                </div>
                <span class="font-bold text-slate-700 text-sm flex-1">5. Internships</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-200"></i>
            </a>

            <!-- 6. Technology Services -->
            <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/technology-services.php" class="flex items-center gap-3 group py-3 rounded-2xl active:bg-slate-50 transition-all px-2 -mx-2">
                <div class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center">
                    <i data-lucide="cpu" class="w-4 h-4 text-slate-600"></i>
                </div>
                <span class="font-bold text-slate-700 text-sm flex-1">6. Technology Services</span>
                <i data-lucide="chevron-right" class="w-4 h-4 text-slate-200"></i>
            </a>
        </div>
    </div>
    
    <!-- Fixed Footer Section -->
    <div class="flex-shrink-0 p-6 bg-white border-t border-slate-100 shadow-[0_-15px_40px_rgba(0,0,0,0.05)] pb-10">
        <div class="flex flex-col gap-3">
            <a href="<?php echo isset($base_url) ? $base_url : './'; ?>auth/signup.php" class="w-full bg-secondary text-white text-center py-4 rounded-xl font-black shadow-lg shadow-secondary/20 tracking-widest uppercase text-[11px] active:scale-95 transition-all">
                Sign Up
            </a>
            <a href="<?php echo isset($base_url) ? $base_url : './'; ?>auth/login.php" class="w-full border-2 border-slate-200 text-slate-700 text-center py-3.5 rounded-xl font-bold text-[11px] uppercase tracking-widest active:scale-95 transition-all">
                Log In
            </a>
            <button onclick="toggleCategoryHub(false)" class="w-full text-slate-300 py-2 text-[10px] font-bold uppercase tracking-[0.2em]">
                Close
            </button>
        </div>
    </div>
</div>

<script>
    function toggleCategoryHub(show) {
        const overlay = document.getElementById('category-hub-overlay');
        const hub = document.getElementById('category-hub');
        if (!hub || !overlay) return;
        
        if (show) {
            // Show both elements using display:flex for the drawer
            overlay.style.display = 'block';
            hub.style.display = 'flex';
            hub.style.flexDirection = 'column';
            // Trigger transition
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    overlay.style.opacity = '1';
                    hub.classList.remove('translate-x-full');
                });
            });
            document.body.style.overflow = 'hidden';
            if (typeof lucide !== 'undefined') lucide.createIcons();
        } else {
            overlay.style.opacity = '0';
            hub.classList.add('translate-x-full');
            setTimeout(() => {
                overlay.style.display = 'none';
                hub.style.display = 'none';
            }, 300);
            document.body.style.overflow = '';
        }
    }

    function toggleAccordion(id) {
        const menu = document.getElementById(id);
        const icon = document.getElementById('school-boards-icon');
        
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            icon.classList.add('rotate-180');
        } else {
            menu.classList.add('hidden');
            icon.classList.remove('rotate-180');
        }
    }
</script>
