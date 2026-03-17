<?php
$pageTitle = 'Technology Services | Unidemy Global';
$pageDescription = 'Enterprise Technology Solutions: Cloud Development, AI & Machine Learning, Embedded Systems, and Digital Engineering.';
$additionalHead = <<<'HEADCONTENT'
<style>
        .sora {
            font-family: 'Sora', sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(30, 79, 156, 0.1);
        }

        .hero-gradient {
            background: radial-gradient(circle at top right, rgba(30, 79, 156, 0.05), transparent),
                radial-gradient(circle at bottom left, rgba(249, 115, 22, 0.03), transparent);
        }
    </style>
HEADCONTENT;
include 'components/header.php';
?>
    <!-- Hero Section -->
    <section class="pt-40 pb-24 hero-gradient overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent text-primary font-bold text-xs tracking-widest uppercase mb-6 border border-primary/10">
                <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                Pioneering Enterprise Tech
            </div>
            <h1 class="sora text-5xl lg:text-7xl font-black text-gray-900 mb-6 leading-tight">
                Empowering Digital <span class="text-primary">Transformation</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed mb-10">
                Strategic technology solutions designed for scale, security, and superior performance. From Cloud to AI,
                we build the future of enterprise.
            </p>
            <div class="flex justify-center gap-4">
                <a href="#services"
                    class="bg-primary text-white font-bold px-8 py-4 rounded-full shadow-xl hover:bg-blue-800 transition-all flex items-center gap-2">
                    Our Expertise <i data-lucide="arrow-down" class="w-5 h-5"></i>
                </a>
                <a href="#contact"
                    class="bg-white text-primary border border-gray-200 font-bold px-8 py-4 rounded-full shadow-lg hover:bg-gray-50 transition-all">
                    Consult an Expert
                </a>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section id="services" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="sora text-4xl font-black text-gray-900 mb-4">Core Technology Sub-Divisions</h2>
                <p class="text-gray-500 text-lg">Specialized engineering teams dedicated to your specific business
                    needs.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Cloud -->
                <a href="cloud-development.php" class="glass-card p-8 rounded-3xl flex flex-col group">
                    <div
                        class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-500">
                        <i data-lucide="cloud" class="w-8 h-8"></i>
                    </div>
                    <h3 class="sora text-xl font-bold text-gray-900 mb-3">Cloud Development</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">Scalable architectures,
                        public/hybrid cloud strategies, and seamless migration services.</p>
                    <span
                        class="text-primary font-bold text-sm flex items-center gap-2 bg-accent/50 self-start px-4 py-2 rounded-full">
                        Expertise Details <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </span>
                </a>

                <!-- AI & ML -->
                <a href="ai-machine-learning.php" class="glass-card p-8 rounded-3xl flex flex-col group">
                    <div
                        class="w-16 h-16 rounded-2xl bg-purple-50 flex items-center justify-center mb-6 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-500">
                        <i data-lucide="brain" class="w-8 h-8"></i>
                    </div>
                    <h3 class="sora text-xl font-bold text-gray-900 mb-3">AI & Machine Learning</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">Custom ML models, GenAI agents, and
                        intelligent data-driven automation.</p>
                    <span
                        class="text-primary font-bold text-sm flex items-center gap-2 bg-accent/50 self-start px-4 py-2 rounded-full">
                        Expertise Details <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </span>
                </a>

                <!-- Embedded Software -->
                <a href="embedded-software.php" class="glass-card p-8 rounded-3xl flex flex-col group">
                    <div
                        class="w-16 h-16 rounded-2xl bg-emerald-50 flex items-center justify-center mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-500">
                        <i data-lucide="cpu" class="w-8 h-8"></i>
                    </div>
                    <h3 class="sora text-xl font-bold text-gray-900 mb-3">Embedded Software</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">Firmware engineering, IoT device
                        development, and real-time operating systems.</p>
                    <span
                        class="text-primary font-bold text-sm flex items-center gap-2 bg-accent/50 self-start px-4 py-2 rounded-full">
                        Expertise Details <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </span>
                </a>

                <!-- Digital Engineering -->
                <a href="digital-engineering.php" class="glass-card p-8 rounded-3xl flex flex-col group">
                    <div
                        class="w-16 h-16 rounded-2xl bg-orange-50 flex items-center justify-center mb-6 group-hover:bg-secondary group-hover:text-white transition-colors duration-500">
                        <i data-lucide="component" class="w-8 h-8"></i>
                    </div>
                    <h3 class="sora text-xl font-bold text-gray-900 mb-3">Digital Engineering</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-6 flex-grow">Modern application development,
                        UI/UX engineering, and microservices architecture.</p>
                    <span
                        class="text-primary font-bold text-sm flex items-center gap-2 bg-accent/50 self-start px-4 py-2 rounded-full">
                        Expertise Details <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Detailed Content Placeholder for Hub -->
    <section class="py-24 bg-background">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-primary rounded-[3rem] p-12 lg:p-20 text-white relative overflow-hidden">
                <div
                    class="absolute top-0 right-0 w-96 h-96 bg-secondary/20 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/2">
                </div>
                <div class="relative z-10 grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h2 class="sora text-4xl font-black mb-8 leading-tight">Delivering Quality & Innovation Since
                            2012</h2>
                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
                                    <i data-lucide="shield-check" class="text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg">ISO 27001 Certified</h4>
                                    <p class="text-white/60 text-sm">Security and data privacy are at the core of our
                                        delivery process.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
                                    <i data-lucide="award" class="text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg">Cross-Domain Expertise</h4>
                                    <p class="text-white/60 text-sm">Experience across Fintech, Healthcare,
                                        Manufacturing, and EdTech.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-10 rounded-3xl text-gray-900 shadow-2xl" id="contact">
                        <h3 class="sora text-2xl font-black mb-6">Let's Discuss Your Project</h3>
                        <form class="space-y-4">
                            <input type="text" placeholder="Full Name"
                                class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:border-primary transition-all">
                            <input type="email" placeholder="Work Email"
                                class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:border-primary transition-all">
                            <select
                                class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:border-primary transition-all appearance-none cursor-pointer">
                                <option value="" disabled selected>Select Area of Interest</option>
                                <option>Cloud Development</option>
                                <option>AI & Machine Learning</option>
                                <option>Embedded Software</option>
                                <option>Digital Engineering</option>
                            </select>
                            <textarea placeholder="Tell us about your requirements..." rows="4"
                                class="w-full px-5 py-4 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:border-primary transition-all"></textarea>
                            <button type="submit"
                                class="w-full bg-secondary text-white font-bold py-4 rounded-xl shadow-lg hover:bg-orange-600 transition-all active:scale-95">Send
                                Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'components/footer.php'; ?>
