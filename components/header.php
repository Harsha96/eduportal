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
    <nav class="fixed top-0 w-full z-[100] transition-all duration-300 bg-transparent py-5 px-6 lg:px-8" id="main-nav">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="<?php echo isset($base_url) ? $base_url : './'; ?>index.php" class="flex-shrink-0 flex items-center">
                <img src="<?php echo isset($base_url) ? $base_url : './'; ?>assets/images/Logo (2).png"
                    alt="Unidemy Global"
                    class="h-9 md:h-11 w-auto mix-blend-multiply transition-transform hover:scale-105">
            </a>
            <div class="hidden lg:flex gap-8 items-center font-medium text-gray-700">
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-primary transition-colors py-2 h-10">
                        School Boards
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
                    class="flex items-center hover:text-primary transition-colors py-2 h-10">Competitive Exams</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/test-prep.php"
                    class="flex items-center hover:text-primary transition-colors py-2 h-10">Test Prep</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/study-abroad.php"
                    class="flex items-center hover:text-primary transition-colors py-2 h-10">Study Abroad</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/internships.php"
                    class="flex items-center hover:text-primary transition-colors py-2 h-10">Internships</a>
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>pages/technology-services.php"
                    class="flex items-center hover:text-primary transition-colors py-2 h-10 leading-tight">Technology
                    Services</a>
            </div>
            <div class="hidden lg:flex items-center gap-6">
                <!-- Cart Icon -->
                <button onclick="cart.open()" class="relative p-2 text-gray-700 hover:text-primary transition-all active:scale-90 flex items-center justify-center">
                    <i data-lucide="shopping-cart" class="w-6 h-6"></i>
                    <span id="cart-nav-badge" class="absolute -top-1 -right-1 bg-secondary text-white text-[10px] font-bold min-w-[18px] h-[18px] flex items-center justify-center rounded-full hidden shadow-sm border border-white">0</span>
                </button>

                <div class="flex items-center gap-3 ml-2">
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>auth/login.php"
                        class="text-gray-700 hover:text-primary px-4 py-2 rounded-full font-bold transition-all text-sm active:scale-95">Log
                        In</a>
                    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>auth/signup.php"
                        class="bg-secondary hover:bg-orange-600 text-white px-7 py-2.5 rounded-full font-bold transition-all shadow-lg shadow-secondary/30 text-sm active:scale-95">Sign
                        Up</a>
                </div>
            </div>
            <div class="flex lg:hidden items-center gap-2">
                <!-- User icon -->
                <a href="<?php echo isset($base_url) ? $base_url : './'; ?>auth/login.php"
                   class="w-9 h-9 rounded-full bg-white/80 backdrop-blur border border-slate-100 shadow-sm flex items-center justify-center text-slate-600 hover:text-primary active:scale-90 transition-all">
                    <i data-lucide="user" class="w-4 h-4"></i>
                </a>
                <!-- Cart icon -->
                <button onclick="cart.open()"
                        class="relative w-9 h-9 rounded-full bg-white/80 backdrop-blur border border-slate-100 shadow-sm flex items-center justify-center text-slate-600 hover:text-primary active:scale-90 transition-all">
                    <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                    <span id="cart-nav-badge-mobile"
                          class="absolute -top-1 -right-1 bg-secondary text-white text-[9px] font-black min-w-[16px] h-[16px] flex items-center justify-center rounded-full hidden border border-white shadow-sm">0</span>
                </button>
                <!-- Hamburger menu button -->
                <button onclick="toggleCategoryHub(true)"
                        class="flex items-center gap-2 pl-3 pr-4 h-9 rounded-full bg-gradient-to-r from-primary to-blue-500 shadow-lg shadow-primary/30 text-white active:scale-95 transition-all ml-1">
                    <span class="flex flex-col gap-[4px] items-center justify-center w-4">
                        <span class="block w-4 h-[2px] bg-white rounded-full"></span>
                        <span class="block w-3 h-[2px] bg-white/70 rounded-full self-start"></span>
                        <span class="block w-4 h-[2px] bg-white rounded-full"></span>
                    </span>
                    <span class="text-[11px] font-black uppercase tracking-widest">Menu</span>
                </button>
            </div>
        </div>
    </nav>
    
    <?php include __DIR__ . '/mobile-menu.php'; ?>
    <?php include_once 'cart-drawer.php'; ?>