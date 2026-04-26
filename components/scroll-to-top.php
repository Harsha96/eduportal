<!-- Premium Go to Top Widget -->
<div id="scrollToTopContainer"
    class="fixed bottom-20 right-6 md:right-8 z-[90] transition-all duration-500 opacity-0 invisible translate-y-8 cursor-pointer group">
    <div class="relative w-14 h-14 flex items-center justify-center">
        <!-- Progress Ring Background -->
        <svg class="absolute inset-0 w-full h-full -rotate-90">
            <circle cx="28" cy="28" r="24" fill="none" class="stroke-gray-200/50" stroke-width="3" />
            <!-- Progress Ring Foreground -->
            <circle id="scrollProgressCircle" cx="28" cy="28" r="24" fill="none" class="stroke-secondary"
                stroke-width="3" stroke-linecap="round" stroke-dasharray="150.8" stroke-dashoffset="150.8"
                style="transition: stroke-dashoffset 0.1s linear;" />
        </svg>

        <!-- Icon Core -->
        <div
            class="w-10 h-10 bg-primary text-white rounded-full flex items-center justify-center shadow-lg group-hover:bg-blue-800 transition-all duration-300 relative z-10 group-hover:-translate-y-1">
            <i data-lucide="arrow-up" class="w-5 h-5 stroke-[3]"></i>
        </div>
    </div>
</div>