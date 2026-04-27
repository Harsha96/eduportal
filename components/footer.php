<!-- Footer -->
<footer class="bg-[#0B1121] pt-12 md:pt-16 pb-6 md:pb-8 border-t border-white/5 relative overflow-hidden">
    <div
        class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/20 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 opacity-20">
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8 mb-16">
            <div class="lg:col-span-4">
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>index.php" class="flex items-center gap-2 mb-6 group">
                    <img src="<?php echo isset($base_url) ? $base_url : './'; ?>assets/images/Logo (2).png" alt="Unidemy Global"
                        class="h-[40px] w-auto transition-transform hover:scale-105">
                </a>
                <p class="text-slate-400 text-sm mb-8 leading-relaxed max-w-sm">Empowering ambition worldwide. Your
                    premier
                    destination for world-class test preparation, career counseling, and global university
                    admissions.</p>
                <div class="flex gap-4">
                    <a href="https://www.facebook.com/p/Unidemy-Global-61571328594976/" target="_blank"
                        rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-400 hover:bg-primary hover:text-white transition-all transform hover:-translate-y-1"><i
                            data-lucide="facebook" class="w-4 h-4"></i></a>
                    <a href="https://www.instagram.com/unidemy.global/" target="_blank" rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-400 hover:bg-pink-600 hover:text-white transition-all transform hover:-translate-y-1"><i
                            data-lucide="instagram" class="w-4 h-4"></i></a>
                    <a href="https://www.linkedin.com/company/unidemy-global-inc" target="_blank"
                        rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-400 hover:bg-blue-600 hover:text-white transition-all transform hover:-translate-y-1"><i
                            data-lucide="linkedin" class="w-4 h-4"></i></a>
                    <a href="https://www.youtube.com/@UnidemyGlobal" target="_blank" rel="noopener noreferrer"
                        class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-slate-400 hover:bg-red-600 hover:text-white transition-all transform hover:-translate-y-1"><i
                            data-lucide="youtube" class="w-4 h-4"></i></a>
                </div>
            </div>

            <div class="lg:col-span-2">
                <h4 onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.chevron-icon').classList.toggle('rotate-180')" 
                    class="text-white font-bold mb-4 lg:mb-6 flex items-center justify-between group cursor-pointer lg:cursor-default py-2 lg:py-0 border-b border-white/5 lg:border-none">
                    <div class="flex items-center gap-2">
                        <i data-lucide="book-open" class="w-4 h-4 text-primary"></i> Programs
                    </div>
                    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform lg:hidden chevron-icon"></i>
                </h4>
                <ul class="space-y-3 hidden lg:block animate-fade-in pb-4 lg:pb-0">
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/packages.php"
                            class="text-slate-400 text-sm hover:text-primary transition-colors">Packages</a></li>
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/cbse.php?tab=all"
                            class="text-slate-400 text-sm hover:text-primary transition-colors">School Boards</a>
                    </li>
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/global-launchpad.php"
                            class="text-slate-400 text-sm hover:text-primary transition-colors">Global Launchpad</a>
                    </li>
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/iit-jee.php"
                            class="text-slate-400 text-sm hover:text-primary transition-colors">Competitive
                            Exams</a></li>
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/internships.php"
                            class="text-slate-400 text-sm hover:text-primary transition-colors">Internships</a></li>
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/technology-services.php"
                            class="text-slate-400 text-sm hover:text-primary transition-colors">Technology
                            Services</a></li>
                </ul>
            </div>

            <div class="lg:col-span-2">
                <h4 onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.chevron-icon').classList.toggle('rotate-180')" 
                    class="text-white font-bold mb-4 lg:mb-6 flex items-center justify-between group cursor-pointer lg:cursor-default py-2 lg:py-0 border-b border-white/5 lg:border-none">
                    <div class="flex items-center gap-2">
                        <i data-lucide="link" class="w-4 h-4 text-secondary"></i> Quick Links
                    </div>
                    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform lg:hidden chevron-icon"></i>
                </h4>
                <ul class="space-y-3 hidden lg:block animate-fade-in pb-4 lg:pb-0">
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/about.php" class="text-slate-400 text-sm hover:text-secondary transition-colors">About
                            Us</a></li>
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/study-abroad.php"
                            class="text-slate-400 text-sm hover:text-secondary transition-colors">Study Abroad</a>
                    </li>
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/higher-education.php"
                            class="text-slate-400 text-sm hover:text-secondary transition-colors">Higher
                            Education</a></li>
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/medical-abroad.php"
                            class="text-slate-400 text-sm hover:text-secondary transition-colors">Medical Abroad</a>
                    </li>
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/free-resources.php"
                            class="text-slate-400 text-sm hover:text-secondary transition-colors">Free Resources</a>
                    </li>
                </ul>
            </div>

            <div class="lg:col-span-2">
                <h4 onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.chevron-icon').classList.toggle('rotate-180')" 
                    class="text-white font-bold mb-4 lg:mb-6 flex items-center justify-between group cursor-pointer lg:cursor-default py-2 lg:py-0 border-b border-white/5 lg:border-none">
                    <div class="flex items-center gap-2">
                        <i data-lucide="info" class="w-4 h-4 text-gray-400"></i> Corporate
                    </div>
                    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform lg:hidden chevron-icon"></i>
                </h4>
                <ul class="space-y-3 hidden lg:block animate-fade-in pb-4 lg:pb-0">
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>blog/blog.php" class="text-slate-400 text-sm hover:text-white transition-colors">Blog</a>
                    </li>
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>legal/privacy.php" class="text-slate-400 text-sm hover:text-white transition-colors">Privacy
                            Policy</a>
                    </li>
                    <li><a href="<?php echo isset($base_url) ? $base_url : './'; ?>legal/terms.php" class="text-slate-400 text-sm hover:text-white transition-colors">Terms
                            of Service</a></li>
                </ul>
            </div>

            <div class="lg:col-span-2">
                <h4 onclick="this.nextElementSibling.classList.toggle('hidden'); this.querySelector('.chevron-icon').classList.toggle('rotate-180')" 
                    class="text-white font-bold mb-4 lg:mb-6 flex items-center justify-between group cursor-pointer lg:cursor-default py-2 lg:py-0 border-b border-white/5 lg:border-none">
                    <div class="flex items-center gap-2">
                        <i data-lucide="phone-call" class="w-4 h-4 text-success"></i> Contact Us
                    </div>
                    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform lg:hidden chevron-icon"></i>
                </h4>
                <ul class="space-y-4 text-slate-400 hidden lg:block animate-fade-in pb-4 lg:pb-0">
                    <li class="flex gap-3 items-start"><i data-lucide="mail" class="w-5 h-5 text-primary shrink-0"></i>
                        <span class="text-sm"> info@unidemyglobal.com</span>
                    </li>
                    <li class="flex gap-3 items-start"><i data-lucide="phone" class="w-5 h-5 text-primary shrink-0"></i>
                        <span class="text-sm">+91 63604 56026</span>
                    </li>
                    <li class="flex gap-3 items-start"><i data-lucide="map-pin"
                            class="w-5 h-5 text-primary shrink-0"></i>
                        <span class="text-sm">29, 1st floor, Vibgyor School Rd, HSR Extension, Reliable Tranquil Layout, HSR Layout, Bengaluru, Karnataka 560102</span>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="pt-8 border-t border-white/10 flex flex-col md:flex-row items-center justify-between gap-4 text-slate-500 text-xs text-center md:text-left">
            <div class="flex items-center gap-2 flex-wrap justify-center">
                <i data-lucide="shield-check" class="w-4 h-4 shrink-0"></i>
                © 2026 Unidemy Global. All rights reserved.
            </div>
            <div class="flex items-center gap-6">
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>legal/privacy.php" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>legal/terms.php" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<!-- Global Widgets -->
<?php include __DIR__ . '/live-chat.php'; ?>

<!-- Custom Script -->
<script src="<?php echo isset($base_url) ? $base_url : './'; ?>script.js"></script>
<script>
    lucide.createIcons();
</script>


<?php include 'scroll-to-top.php'; ?>

</body>

</html>