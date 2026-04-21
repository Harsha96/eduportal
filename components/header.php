<?php include_once 'whitelist.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Unidemy Global | Empowering Ambition Worldwide'; ?></title>
    <meta name="description"
        content="<?php echo isset($pageDescription) ? $pageDescription : 'Your premier destination for world-class test preparation, career counseling, and global university admissions.'; ?>">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1E4F9C',
                        secondary: '#F97316',
                        background: '#F8FBFF',
                        accent: '#E6EFFF',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@700;900&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo isset($base_url) ? $base_url : './'; ?>style.css">
    <!-- Lucide Icons -->
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.344.0/dist/umd/lucide.min.js"></script>
    <?php if (isset($additionalHead))
        echo $additionalHead; ?>
</head>

<body class="bg-background font-sans text-gray-900 scroll-smooth">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 transition-all duration-300 bg-transparent py-5 px-6 lg:px-8" id="main-nav">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="<?php echo isset($base_url) ? $base_url : './'; ?>index.php" class="flex-shrink-0">
                <img src="<?php echo isset($base_url) ? $base_url : './'; ?>assets/images/Logo (2).png"
                    alt="Unidemy Global"
                    class="h-8 md:h-10 w-auto mix-blend-multiply transition-transform hover:scale-105">
            </a>
            <div class="hidden lg:flex gap-8 items-center font-medium text-gray-700">
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-primary transition-colors py-2">
                        Our Programs
                        <i data-lucide="chevron-down" class="w-4 h-4 transition-transform group-hover:rotate-180"></i>
                    </button>
                    <div
                        class="absolute top-full left-0 w-48 bg-white border border-gray-100 rounded-xl shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/kindergarten.php"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary transition-colors">Kindergarten
                        </a>
                        <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/cbse.php?tab=all"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary transition-colors">CBSE
                            Board</a>
                        <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/icse.php?tab=all"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary transition-colors">ICSE
                            Board</a>
                        <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/karnataka-board.php?tab=all"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary transition-colors">Karnataka
                            Board</a>
                    </div>
                </div>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/competitive-exams.php"
                    class="hover:text-primary transition-colors py-2">Competitive exams</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/test-prep.php"
                    class="hover:text-primary transition-colors py-2">Test Prep</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/study-abroad.php"
                    class="hover:text-primary transition-colors">Study Abroad</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/internships.php"
                    class="hover:text-primary transition-colors">Internships</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/technology-services.php"
                    class="hover:text-primary transition-colors py-2">Technology
                    Services</a>
            </div>
            <div class="hidden lg:flex items-center gap-4">
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>auth/login.php"
                    class="border-2 border-secondary text-secondary hover:bg-secondary hover:text-white px-6 py-2 rounded-full font-bold transition-all active:scale-95">Log
                    In</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>auth/signup.php"
                    class="bg-secondary hover:bg-orange-600 text-white px-7 py-2.5 rounded-full font-bold transition-all shadow-lg shadow-secondary/30 active:scale-95">Sign
                    Up</a>
            </div>
            <button id="mobile-menu-btn" class="lg:hidden text-gray-700 p-2"><i data-lucide="menu"
                    class="w-6 h-6"></i></button>
        </div>
        <!-- Mobile Overlay -->
        <div id="mobile-overlay" class="fixed inset-0 bg-slate-900/50 z-[45] hidden"></div>

        <!-- Mobile Menu Slider -->
        <div id="mobile-menu"
            class="hidden lg:hidden bg-white border-t border-gray-100 overflow-hidden shadow-xl mt-4 rounded-2xl relative z-50">
            <div class="p-6 flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                    <div class="text-xs font-bold text-gray-400 uppercase tracking-wider px-2">School Boards</div>
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/kindergarten.php"
                        class="text-gray-700 font-medium hover:text-primary transition-colors px-2">Kindergarten
                        Program</a>
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/cbse.php?tab=all"
                        class="text-gray-700 font-medium hover:text-primary transition-colors px-2">CBSE programs</a>
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/icse.php?tab=all"
                        class="text-gray-700 font-medium hover:text-primary transition-colors px-2">ICSE Programmes</a>
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/karnataka-board.php?tab=all"
                        class="text-gray-700 font-medium hover:text-primary transition-colors px-2">karnataka board</a>



                </div>
                <div class="h-px w-full bg-gray-100 my-2"></div>
                <div class="flex flex-col gap-2">
                    <div class="text-xs font-bold text-gray-400 uppercase tracking-wider px-2">Competitive exams</div>
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/competitive-exams.php"
                        class="text-gray-700 font-medium hover:text-primary transition-colors px-2">All Competitive
                        Exams</a>
                </div>
                <div class="h-px w-full bg-gray-100 my-2"></div>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/test-prep.php"
                    class="text-gray-700 font-medium hover:text-primary transition-colors px-2">Test Prep</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/global-launchpad.php"
                    class="text-gray-700 font-medium hover:text-primary transition-colors px-2">Study Abroad</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/internships.php"
                    class="text-gray-700 font-medium hover:text-primary transition-colors px-2">Internships</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/technology-services.php"
                    class="text-gray-700 font-medium hover:text-primary transition-colors px-2">Technology
                    Services</a>



                <div class="flex flex-col gap-2 mt-4">
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>auth/login.php"
                        class="border-2 border-secondary text-secondary text-center py-3 rounded-full font-bold transition-colors">
                        Log In
                    </a>
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>auth/signup.php"
                        class="bg-secondary text-white text-center py-3 rounded-full font-bold shadow-lg shadow-secondary/30">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </nav>