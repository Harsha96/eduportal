<?php
$pageTitle = 'Kindergarten Programmes | Unidemy Global';
$pageDescription = 'Our premier Kindergarten programmes focusing on early childhood development and school readiness.';
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
        }
    </style>
HEADCONTENT;
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
                        <span class="ml-2 text-primary font-medium">Kindergarten</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Title -->
        <div class="flex items-center gap-4 mb-8">
            <div
                class="w-16 h-16 rounded-2xl bg-amber-50 flex items-center justify-center shrink-0 border border-amber-100">
                <i data-lucide="baby" class="w-8 h-8 text-amber-600"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl lg:text-[40px] font-bold text-gray-900 font-sans tracking-tight">
                    Kindergarten Programmes</h1>
                <p class="text-gray-500 mt-1">Foundation courses for early learners to build a strong start.</p>
            </div>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="cards-container">



            <!-- School Readiness Program -->
            <div
                class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block">
                <div
                    class="relative h-[200px] w-full overflow-hidden border-b border-gray-100"
                    style="background-image: url('assets/images/background/smartreaders.png'); background-size: cover; background-position: center;">
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:from-amber-900/60 transition-all duration-500"></div>
                    <!-- Amber shimmer on hover -->
                    <div class="absolute inset-0 bg-amber-400/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur text-amber-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-amber-100 z-10">
                        KINDERGARTEN
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-amber-600 font-bold text-sm tracking-wide bg-amber-50 px-3 py-1 rounded-full">Early
                            Years</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        School Readiness Program</h3>
                    <div class="collapsible-wrapper collapsed">
                        <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-3">The Kindergarten School
                            Readiness Program helps young
                            children get ready for school through fun, engaging, and
                            activity-based learning.​</p>
                        <ul class="space-y-3 mb-4">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Letters, Sounds and Numbers
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Social and emotional skills
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Creative expression and exploration
                            </li>

                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Fine motor skills
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Hand-eye coordination
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Cognitive Skills
                            </li>
                        </ul>
                    </div>
                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-amber-600 font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="chevron-down"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>
                    <div class="mt-auto pt-5 border-t border-gray-100">
                        <button onclick="openEnrollmentModal('Kindergarten - School Readiness Program')"
                            class="w-full bg-amber-50 text-amber-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-amber-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

            <!-- Phonics​ -->
            <div
                class="course-card bg-white border border-gray-200 rounded-2xl overflow-hidden flex flex-col group shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] transition-all duration-300 hover:-translate-y-1 block">
                <div
                    class="relative h-[200px] w-full overflow-hidden border-b border-gray-100"
                    style="background-image: url('assets/images/background/phonics.png'); background-size: cover; background-position: center;">
                    <!-- Gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent group-hover:from-pink-900/60 transition-all duration-500"></div>
                    <!-- Pink shimmer on hover -->
                    <div class="absolute inset-0 bg-pink-400/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur text-pink-600 text-[11px] font-bold px-3 py-1.5 rounded-full flex items-center gap-1.5 uppercase tracking-wider shadow-sm border border-pink-100 z-10">
                        KINDERGARTEN
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center justify-between mb-3">
                        <span
                            class="text-pink-600 font-bold text-sm tracking-wide bg-pink-50 px-3 py-1 rounded-full">Smart
                            Readers​</span>
                    </div>
                    <h3
                        class="text-[22px] font-bold mb-3 text-gray-900 leading-tight group-hover:text-primary transition-colors">
                        Phonics​</h3>

                    <div
                        class="collapsible-wrapper collapsed relative overflow-hidden transition-all duration-500 ease-in-out">
                        <p class="text-sm text-gray-600 mb-6 leading-relaxed line-clamp-3">A fun phonics program that
                            helps children build strong
                            reading, pronunciation and spelling skills with confidence.​</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Interactive phonics activities​

                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Sound recognition exercises
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Word-building games
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Reading practice sessions
                            </li>
                            <li class="flex items-start text-[14px] text-gray-600 font-medium">
                                <i data-lucide="check-circle-2"
                                    class="w-4 h-4 mr-2.5 text-green-500 shrink-0 mt-0.5"></i>
                                Fun storytelling and vocabulary activities
                            </li>
                        </ul>
                    </div>

                    <button onclick="toggleContent(this)"
                        class="flex items-center gap-2 text-pink-600 font-bold text-sm mb-6 hover:gap-3 transition-all group/btn">
                        <span>Read More</span>
                        <i data-lucide="chevron-down"
                            class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform"></i>
                    </button>

                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2 mb-4">

                        </div>
                        <button onclick="openEnrollmentModal('Kindergarten - Smart Readers Program')"
                            class="w-full bg-pink-50 text-pink-600 font-bold px-5 py-3 rounded-xl text-sm hover:bg-pink-600 hover:text-white transition-all">Enroll
                            Request</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<script>
    lucide.createIcons();

    function toggleContent(btn) {
        const wrapper = btn.previousElementSibling;
        const isCollapsed = wrapper.classList.contains('collapsed');

        if (isCollapsed) {
            wrapper.classList.remove('collapsed');
            wrapper.classList.add('expanded');
            btn.querySelector('span').textContent = 'Read Less';
            btn.querySelector('i').setAttribute('data-lucide', 'chevron-up');
        } else {
            wrapper.classList.add('collapsed');
            wrapper.classList.remove('expanded');
            btn.querySelector('span').textContent = 'Read More';
            btn.querySelector('i').setAttribute('data-lucide', 'chevron-down');
        }
        lucide.createIcons();
    }
</script>
<?php include '../components/enrollment-modal.php'; ?>
<?php include '../components/footer.php'; ?>