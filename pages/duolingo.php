<?php
$pageTitle = 'Duolingo Preparation | Unidemy Global';
$pageDescription = 'Fast-track your Duolingo English Test (DET) results with Unidemy Global';
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
                            <span class="ml-2 text-primary font-medium">Duolingo Preparation</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Hero Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">Ace the <span
                            class="text-emerald-600 border-b-4 border-secondary/30">Duolingo</span> English Test</h1>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">Modern, fast, and adaptive. Get real-time AI
                        corrections and rapid scoring feedback to boost your DET performance.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="https://unidemyglobal.com/login.php?url=DUOLINGO"
                            class="bg-emerald-600 text-white px-8 py-3 rounded-full font-bold hover:bg-emerald-700 transition-all shadow-lg shadow-emerald-200">Start
                            Free Trial</a>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-emerald-100 rounded-3xl blur-2xl transform"></div>
                    <div class="relative bg-white border border-emerald-50 rounded-3xl p-8 shadow-2xl text-center">
                        <i data-lucide="bird" class="w-20 h-20 text-emerald-500 mx-auto mb-6"></i>
                        <h3 class="font-bold text-gray-900 mb-2">Modern Test Prep</h3>
                        <p class="text-sm text-gray-500">AI-powered feedback for the next generation of learners.</p>
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
