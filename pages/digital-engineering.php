<?php
$pageTitle = 'Digital Engineering | Unidemy Global';
$additionalHead = <<<'HEADCONTENT'
<style>
        .sora {
            font-family: 'Sora', sans-serif;
        }
    </style>
HEADCONTENT;
$base_url = '../';
include '../components/header.php';
?>
    <section class="pt-24 md:pt-32 lg:pt-40 pb-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex flex-wrap items-center mb-8 text-sm font-medium text-gray-400 breadcrumb-wrap">
                <a href="../index.php" class="hover:text-primary">Home</a>
                <span class="mx-2">/</span>
                <a href="../pages/technology-services.php" class="hover:text-primary">Technology Services</a>
                <span class="mx-2">/</span>
                <span class="text-primary">Digital Engineering</span>
            </nav>
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h1 class="sora text-2xl sm:text-4xl lg:text-6xl font-black text-gray-900 mb-6 leading-tight">Modernizing the
                        <span class="text-primary">Enterprise</span></h1>
                    <p class="text-xl text-gray-600 leading-relaxed mb-8">Building resilient, user-centric digital
                        products using microservices, cloud-native patterns, and high-performance frontend frameworks.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-accent/30 border border-primary/5">
                            <div
                                class="w-10 h-10 rounded-xl bg-orange-500 text-white flex items-center justify-center shrink-0">
                                1</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Application Modernization</h4>
                                <p class="text-gray-500 text-sm">Refactoring monolithic applications into scalable
                                    microservices architectures.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-accent/30 border border-primary/5">
                            <div
                                class="w-10 h-10 rounded-xl bg-orange-500 text-white flex items-center justify-center shrink-0">
                                2</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Full-Stack Engineering</h4>
                                <p class="text-gray-500 text-sm">End-to-end development using modern stacks (React,
                                    Node.js, Go, Python) for enterprise-grade performance.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-accent/30 border border-primary/5">
                            <div
                                class="w-10 h-10 rounded-xl bg-orange-500 text-white flex items-center justify-center shrink-0">
                                3</div>
                            <div>
                                <h4 class="font-bold text-gray-900">UI/UX Strategy</h4>
                                <p class="text-gray-500 text-sm">Design-led engineering that prioritizes user
                                    experience, accessibility, and brand consistency.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div
                        class="bg-orange-500/5 rounded-[3rem] p-12 aspect-square flex items-center justify-center relative overflow-hidden">
                        <div
                            class="w-full h-full bg-gradient-to-br from-orange-500 to-amber-400 rounded-3xl opacity-10 blur-3xl absolute inset-0">
                        </div>
                        <i data-lucide="component" class="w-48 h-48 text-orange-500 opacity-20 relative z-10"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="py-20 bg-background">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="sora text-3xl font-black text-gray-900 mb-12">The Digital Stack</h2>
            <div class="flex flex-wrap justify-center gap-10">
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="layout" class="text-blue-500"></i></div>
                    <span class="font-bold text-gray-600">React / Next.js</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="code" class="text-emerald-500"></i></div>
                    <span class="font-bold text-gray-600">Node.js</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="share-2" class="text-purple-500"></i></div>
                    <span class="font-bold text-gray-600">GraphQL</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="database" class="text-indigo-500"></i></div>
                    <span class="font-bold text-gray-600">PostgreSQL</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="container" class="text-blue-600"></i></div>
                    <span class="font-bold text-gray-600">Docker</span>
                </div>
            </div>
        </div>
    </section>

<?php include '../components/footer.php'; ?>
