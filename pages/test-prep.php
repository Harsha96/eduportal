<?php
$pageTitle = 'Test Preparation | Unidemy Global';
$pageDescription = 'Our premier Test Preparation programmes for IELTS, TOEFL, SAT, GRE, TOPIK, and ACT.';
$additionalHead = <<<'HEADCONTENT'
<style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
            border-radius: 4px;
        }

        .search-container { position: relative; max-width: 600px; margin: 0 auto 40px auto; }
        .search-icon { position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: #9ca3af; }
        .search-input { width: 100%; padding: 16px 20px 16px 48px; border-radius: 9999px; border: 2px solid #e5e7eb; font-size: 16px; outline: none; transition: border-color 0.3s; }
        .search-input:focus { border-color: #1E4F9C; }
    </style>
HEADCONTENT;
$base_url = '../';
include '../components/header.php';
?>
    <!-- Main Content -->
    <main class="w-full pt-28 lg:pt-36 pb-20 bg-white min-h-[calc(100vh-400px)]">
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
                            <i data-lucide="chevron-right" class="w-4 h-4 text-gray-500"></i>
                            <span class="ml-2 text-primary font-medium">Test Prep</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Title & Search -->
            <div class="text-center mb-12">
                <h1 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-gray-900 mb-4 font-sans tracking-tight">Test Preparation</h1>
                <p class="text-gray-500 text-[16px] max-w-3xl mx-auto mb-8">Explore our comprehensive test preparation programs designed to help you achieve top scores and gain admission to your dream university abroad.</p>
                
                <div class="search-container">
                    <i data-lucide="search" class="w-6 h-6 search-icon"></i>
                    <input type="text" id="exam-search" class="search-input" placeholder="Search for IELTS, TOEFL, SAT, GRE...">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="cards-container">
                
                <!-- IELTS Card -->
                <div class="course-card bg-white border border-gray-100 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block">
                    <div class="relative h-[220px] w-full overflow-hidden bg-gray-200">
                        <img src="../assets/images/test_prep_ielts.png" alt="IELTS Preparation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-gray-900">
                        <h3 class="text-[24px] font-bold mb-3 text-gray-900">IELTS</h3>
                        <p class="text-gray-600 text-[15px] mb-6">Master the International English Language Testing System. Our program ensures you develop strong reading, writing, listening, and speaking skills for global opportunities.</p>
                        
                        <div class="mt-auto pt-5 border-t border-gray-100">
                            <a href="../pages/ielts.php" class="inline-flex items-center gap-2 text-primary font-bold text-[15px] hover:gap-3 transition-all group/btn">
                                <span>Learn More</span>
                                <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- TOEFL Card -->
                <div class="course-card bg-white border border-gray-100 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block">
                    <div class="relative h-[220px] w-full overflow-hidden bg-gray-200">
                        <img src="../assets/images/test_prep_toefl.png" alt="TOEFL Preparation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-gray-900">
                        <h3 class="text-[24px] font-bold mb-3 text-gray-900">TOEFL</h3>
                        <p class="text-gray-600 text-[15px] mb-6">Achieve excellence in the Test of English as a Foreign Language. We provide comprehensive strategies to navigate the digital format and secure high scores.</p>
                        
                        <div class="mt-auto pt-5 border-t border-gray-100">
                            <a href="../pages/toefl.php" class="inline-flex items-center gap-2 text-primary font-bold text-[15px] hover:gap-3 transition-all group/btn">
                                <span>Learn More</span>
                                <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- SAT Card -->
                <div class="course-card bg-white border border-gray-100 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block">
                    <div class="relative h-[220px] w-full overflow-hidden bg-gray-200">
                        <img src="../assets/images/test_prep_sat.png" alt="SAT Preparation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-gray-900">
                        <h3 class="text-[24px] font-bold mb-3 text-gray-900">SAT</h3>
                        <p class="text-gray-600 text-[15px] mb-6">Boost your college admissions profile with our targeted SAT preparation. We cover evidence-based reading, writing, and math with rigorous practice sessions.</p>
                        
                        <div class="mt-auto pt-5 border-t border-gray-100">
                            <a href="../pages/sat.php" class="inline-flex items-center gap-2 text-primary font-bold text-[15px] hover:gap-3 transition-all group/btn">
                                <span>Learn More</span>
                                <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- GRE Card -->
                <div class="course-card bg-white border border-gray-100 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block">
                    <div class="relative h-[220px] w-full overflow-hidden bg-gray-200">
                        <img src="../assets/images/test_prep_gre.png" alt="GRE Preparation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-gray-900">
                        <h3 class="text-[24px] font-bold mb-3 text-gray-900">GRE</h3>
                        <p class="text-gray-600 text-[15px] mb-6">Prepare for top graduate programs worldwide. Our expert instructors guide you through analytical writing, verbal, and quantitative reasoning sections.</p>
                        
                        <div class="mt-auto pt-5 border-t border-gray-100">
                            <a href="../pages/gre.php" class="inline-flex items-center gap-2 text-primary font-bold text-[15px] hover:gap-3 transition-all group/btn">
                                <span>Learn More</span>
                                <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- TOPIK Card -->
                <div class="course-card bg-white border border-gray-100 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block">
                    <div class="relative h-[220px] w-full overflow-hidden bg-gray-200">
                        <img src="../assets/images/test_prep_topik.png" alt="TOPIK Preparation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-gray-900">
                        <h3 class="text-[24px] font-bold mb-3 text-gray-900">TOPIK</h3>
                        <p class="text-gray-600 text-[15px] mb-6">Master the Korean language with our TOPIK preparation course. Ideal for students aiming to study in South Korea or pursue careers with Korean companies.</p>
                        
                        <div class="mt-auto pt-5 border-t border-gray-100">
                            <a href="../pages/topik.php" class="inline-flex items-center gap-2 text-primary font-bold text-[15px] hover:gap-3 transition-all group/btn">
                                <span>Learn More</span>
                                <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ACT Card -->
                <div class="course-card bg-white border border-gray-100 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block">
                    <div class="relative h-[220px] w-full overflow-hidden bg-gray-200">
                        <img src="../assets/images/test_prep_act.png" alt="ACT Preparation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-gray-900">
                        <h3 class="text-[24px] font-bold mb-3 text-gray-900">ACT</h3>
                        <p class="text-gray-600 text-[15px] mb-6">Enhance your university applications with a stellar ACT score. We provide in-depth review and strategies for English, Math, Reading, and Science sections.</p>
                        
                        <div class="mt-auto pt-5 border-t border-gray-100">
                            <a href="../pages/act.php" class="inline-flex items-center gap-2 text-primary font-bold text-[15px] hover:gap-3 transition-all group/btn">
                                <span>Learn More</span>
                                <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Duolingo Card -->
                <div class="course-card bg-white border border-gray-100 rounded-2xl overflow-hidden flex flex-col group shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 block">
                    <div class="relative h-[220px] w-full overflow-hidden bg-gray-200">
                        <img src="../assets/images/test_prep_duolingo.png" alt="Duolingo Preparation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow text-gray-900">
                        <h3 class="text-[24px] font-bold mb-3 text-gray-900">Duolingo</h3>
                        <p class="text-gray-600 text-[15px] mb-6">Fast-track your university admissions with the Duolingo English Test. Our program focuses on AI-adaptive question types and scoring algorithms.</p>
                        
                        <div class="mt-auto pt-5 border-t border-gray-100">
                            <a href="../pages/duolingo.php" class="inline-flex items-center gap-2 text-primary font-bold text-[15px] hover:gap-3 transition-all group/btn">
                                <span>Learn More</span>
                                <i data-lucide="arrow-right" class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div id="no-results" class="hidden text-center py-12">
                <h3 class="text-2xl font-bold text-gray-700 mb-2">No programs found</h3>
                <p class="text-gray-500">Try adjusting your search terms.</p>
            </div>
        </div>
    </main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (typeof lucide !== 'undefined') lucide.createIcons();
        
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });

        // Search Functionality
        const searchInput = document.getElementById('exam-search');
        const cardsContainer = document.getElementById('cards-container');
        const cards = cardsContainer.querySelectorAll('.course-card');
        const noResults = document.getElementById('no-results');

        if (searchInput) {
            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase().trim();
                let visibleCards = 0;

                cards.forEach(card => {
                    const cardText = card.textContent.toLowerCase();
                    if (cardText.includes(searchTerm)) {
                        card.style.display = 'block';
                        card.classList.remove('hidden');
                        card.classList.add('flex');
                        visibleCards++;
                    } else {
                        card.style.display = 'none';
                        card.classList.remove('flex');
                    }
                });

                if (visibleCards === 0 && searchTerm !== '') {
                    noResults.classList.remove('hidden');
                } else {
                    noResults.classList.add('hidden');
                }
            });
        }
    });
</script>
<?php include '../components/footer.php'; ?>
