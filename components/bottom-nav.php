<!-- Bottom Navigation (Mobile Only) -->
<div class="lg:hidden fixed bottom-6 left-6 right-6 z-[120] animate-fade-in-up delay-500">
    <div class="bg-white/90 backdrop-blur-2xl border border-slate-100 rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,0,0,0.1)] px-4 py-2">
        <div class="flex items-center justify-around gap-1">
            <!-- Home -->
            <a href="<?php echo isset($base_url) ? $base_url : './'; ?>index.php" 
               class="flex flex-col items-center gap-1 p-2 rounded-2xl <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'text-primary bg-primary/5' : 'text-slate-400'; ?> transition-all">
                <i data-lucide="home" class="w-5 h-5"></i>
                <span class="text-[9px] font-bold uppercase tracking-widest">Home</span>
            </a>
            <!-- Courses -->
            <a href="<?php echo isset($base_url) ? $base_url : './'; ?>index.php#programs-mobile" 
               class="flex flex-col items-center gap-1 p-2 rounded-2xl text-slate-400 transition-all">
                <i data-lucide="layout-grid" class="w-5 h-5"></i>
                <span class="text-[9px] font-bold uppercase tracking-widest">Courses</span>
            </a>
            <!-- Support -->
            <a href="https://wa.me/916360456026" 
               class="flex flex-col items-center gap-1 p-2 rounded-2xl text-emerald-600 transition-all">
                <i data-lucide="message-square" class="w-5 h-5"></i>
                <span class="text-[9px] font-bold uppercase tracking-widest">Support</span>
            </a>
            <!-- Account -->
            <a href="<?php echo isset($base_url) ? $base_url : './'; ?>login.php" 
               class="flex flex-col items-center gap-1 p-2 rounded-2xl text-slate-400 transition-all">
                <i data-lucide="user-circle" class="w-5 h-5"></i>
                <span class="text-[9px] font-bold uppercase tracking-widest">Account</span>
            </a>
        </div>
    </div>
</div>

<style>
    @media (max-width: 1024px) {
        body {
            padding-bottom: 7rem;
        }
    }
</style>
