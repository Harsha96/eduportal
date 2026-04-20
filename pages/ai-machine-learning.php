<?php
$pageTitle = 'AI & Machine Learning | Unidemy Global';
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
    <section class="pt-40 pb-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="flex mb-8 text-sm font-medium text-gray-400">
                <a href="../index.php" class="hover:text-primary">Home</a>
                <span class="mx-2">/</span>
                <a href="../pages/technology-services.php" class="hover:text-primary">Technology Services</a>
                <span class="mx-2">/</span>
                <span class="text-primary">AI & Machine Learning</span>
            </nav>
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h1 class="sora text-4xl lg:text-6xl font-black text-gray-900 mb-6 leading-tight">Intelligence That
                        <span class="text-primary">Evolves</span></h1>
                    <p class="text-xl text-gray-600 leading-relaxed mb-8">Harnessing the power of advanced algorithms
                        and deep learning to automate complex processes and drive data-driven decision making.</p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-accent/30 border border-primary/5">
                            <div
                                class="w-10 h-10 rounded-xl bg-purple-600 text-white flex items-center justify-center shrink-0">
                                1</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Generative AI Solutions</h4>
                                <p class="text-gray-500 text-sm">Building custom LLM-powered agents, chatbots, and
                                    creative automation tools for your business.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-accent/30 border border-primary/5">
                            <div
                                class="w-10 h-10 rounded-xl bg-purple-600 text-white flex items-center justify-center shrink-0">
                                2</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Computer Vision</h4>
                                <p class="text-gray-500 text-sm">Real-time object detection, facial recognition, and
                                    industrial quality inspection systems.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-accent/30 border border-primary/5">
                            <div
                                class="w-10 h-10 rounded-xl bg-purple-600 text-white flex items-center justify-center shrink-0">
                                3</div>
                            <div>
                                <h4 class="font-bold text-gray-900">Predictive Analytics</h4>
                                <p class="text-gray-500 text-sm">Forecasting trends and identifying risks with
                                    high-fidelity machine learning models.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div
                        class="bg-purple-500/5 rounded-[3rem] p-12 aspect-square flex items-center justify-center relative overflow-hidden">
                        <div
                            class="w-full h-full bg-gradient-to-br from-purple-600 to-indigo-400 rounded-3xl opacity-10 blur-3xl absolute inset-0">
                        </div>
                        <i data-lucide="brain" class="w-48 h-48 text-purple-600 opacity-20 relative z-10"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="py-20 bg-background">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <h2 class="sora text-3xl font-black text-gray-900 mb-12">The AI Ecosystem</h2>
            <div class="flex flex-wrap justify-center gap-10">
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="activity" class="text-orange-500"></i></div>
                    <span class="font-bold text-gray-600">PyTorch</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="cpu" class="text-orange-600"></i></div>
                    <span class="font-bold text-gray-600">TensorFlow</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="message-square" class="text-emerald-500"></i></div>
                    <span class="font-bold text-gray-600">OpenAI</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="database" class="text-blue-500"></i></div>
                    <span class="font-bold text-gray-600">Pinecone</span>
                </div>
                <div class="flex flex-col items-center gap-3">
                    <div class="w-20 h-20 rounded-2xl bg-white shadow-md flex items-center justify-center"><i
                            data-lucide="workflow" class="text-purple-600"></i></div>
                    <span class="font-bold text-gray-600">MLFlow</span>
                </div>
            </div>
        </div>
    </section>

<?php include '../components/footer.php'; ?>
