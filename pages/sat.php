<?php
$pageTitle = 'SAT Preparation | Unidemy Global';
$pageDescription = 'Prepare for the Digital SAT with Unidemy Global. 60+ hours of training, expert faculty, and 2000+ practice questions.';
$base_url = '../';
include '../components/header.php';
?>
    <!-- Main Content -->
    <main class="w-full pt-28 lg:pt-36 pb-20 bg-white flex-grow">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Breadcrumbs -->
            <nav class="flex text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-2">
                    <li class="inline-flex items-center group">
                        <a href="../index.php" class="inline-flex items-center hover:text-primary transition-colors">
                            <i data-lucide="home" class="w-4 h-4 mr-2"></i>
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i>
                            <a href="../pages/global-launchpad.php" class="ml-2 hover:text-primary transition-colors">Global
                                Launchpad</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i>
                            <span class="ml-2 text-primary font-medium">SAT Preparation</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Hero Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">Master the Digital SAT
                        with <span class="text-blue-600 border-b-4 border-secondary/30">Unidemy</span> Excellence</h1>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">Achieve a 1550+ target with our intensive
                        60-hour training program. Designed for the latest digital format with evidence-based strategies.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="../auth/signup.php"
                            class="bg-blue-600 text-white px-8 py-3 rounded-full font-bold hover:bg-blue-700 transition-all">Enroll
                            Today</a>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-blue-100 rounded-3xl blur-2xl transform"></div>
                    <div class="relative bg-white border border-blue-50 rounded-3xl p-8 shadow-2xl">
                        <h3 class="font-bold text-gray-900 mb-4">Why Pre-SAT?</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-gray-700">
                                <i data-lucide="calculator" class="w-5 h-5 text-blue-500"></i>
                                Expert Math Drill Modules
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <i data-lucide="pen-tool" class="w-5 h-5 text-blue-500"></i>
                                Reading & Writing Workshops
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <i data-lucide="hourglass" class="w-5 h-5 text-blue-500"></i>
                                Time Management Strategies
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    

<script>
        lucide.createIcons();

        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
<?php include '../components/footer.php'; ?>
