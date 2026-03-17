<?php
$pageTitle = 'Technology Services | Unidemy Global';
$pageDescription = 'Enterprise Technology Solutions: Web Applications, Cloud, AI, Embedded Systems, Security, and IT Consulting.';
$additionalHead = <<<'HEADCONTENT'
<style>
        .sora {
            font-family: 'Sora', sans-serif;
        }

        .service-card {
            background: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(30, 79, 156, 0.1);
            border-color: rgba(30, 79, 156, 0.2);
        }

        .hero-bg {
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.95) 0%, rgba(49, 46, 129, 0.95) 100%), 
                        url('assets/images/services/hero_banner.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .cta-bg {
            background: linear-gradient(135deg, #4338ca 0%, #3730a3 100%);
        }

        .icon-box {
            background: linear-gradient(135deg, rgba(30, 79, 156, 0.05) 0%, rgba(30, 79, 156, 0.02) 100%);
            transition: all 0.4s ease;
        }

        .service-card:hover .icon-box {
            background: #1E4F9C;
            color: #ffffff;
            transform: scale(1.1) rotate(5deg);
        }

        .service-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .service-card:hover .service-image {
            transform: scale(1.05);
        }

        .image-overlay {
            background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.4) 100%);
        }
    </style>
HEADCONTENT;
include 'components/header.php';
?>
<main class="w-full pt-20">
    <!-- Hero Section -->
    <section class="hero-bg text-white py-24 lg:py-32 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center relative z-10">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md text-secondary font-bold text-xs tracking-widest uppercase mb-8 border border-white/20">
                <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                Innovative Digital Solutions
            </div>
            <h1 class="sora text-4xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight">
                Our <span class="text-secondary">Technology</span> Services
            </h1>
            <p class="max-w-3xl mx-auto text-lg md:text-xl text-blue-100 font-medium leading-relaxed opacity-90">
                Delivering scalable, secure, and innovative digital solutions for modern businesses. From cloud
                architecture to intelligent automation, we build the future.
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-24 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="sora text-3xl md:text-4xl font-black text-gray-900 mb-4">Pioneering Tech Pillars</h2>
                <p class="text-gray-500 max-w-2xl mx-auto">Specialized engineering teams delivering enterprise-grade
                    performance across the digital landscape.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Web Applications -->
                <div class="service-card rounded-3xl group">
                    <div class="relative overflow-hidden h-48">
                        <img src="assets/images/services/web_apps.png" alt="Web Applications" class="service-image">
                        <div class="absolute inset-0 image-overlay"></div>
                        <div class="absolute bottom-4 left-6">
                            <div
                                class="w-12 h-12 rounded-xl icon-box flex items-center justify-center text-primary bg-white shadow-lg">
                                <i data-lucide="layout" class="w-6 h-6"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 pt-6">
                        <h2
                            class="sora text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors">
                            Web Applications</h2>
                        <p class="text-gray-600 leading-relaxed mb-6 text-sm">
                            We build scalable, high-performance web applications using modern technologies. From complex
                            SaaS platforms to enterprise dashboards, we ensure elite reliability.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> SaaS & Enterprise Portals</li>
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Legacy Modernization</li>
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Microservices Architecture</li>
                        </ul>
                    </div>
                </div>

                <!-- Cloud Solutions -->
                <div class="service-card rounded-3xl group">
                    <div class="relative overflow-hidden h-48">
                        <img src="assets/images/services/cloud_solutions.png" alt="Cloud Solutions"
                            class="service-image">
                        <div class="absolute inset-0 image-overlay"></div>
                        <div class="absolute bottom-4 left-6">
                            <div
                                class="w-12 h-12 rounded-xl icon-box flex items-center justify-center text-primary bg-white shadow-lg">
                                <i data-lucide="cloud" class="w-6 h-6"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 pt-6">
                        <h2
                            class="sora text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors">
                            Cloud Solutions</h2>
                        <p class="text-gray-600 leading-relaxed mb-6 text-sm">
                            Design and deploy secure cloud infrastructures on AWS, Azure, and GCP. We enable unmatched
                            flexibility, scalability, and cost-efficient operations.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Hybrid Cloud Strategy</li>
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> DevOps & CI/CD Pipelines</li>
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Backup & DRaaS Solutions</li>
                        </ul>
                    </div>
                </div>

                <!-- AI Development -->
                <div class="service-card rounded-3xl group">
                    <div class="relative overflow-hidden h-48">
                        <img src="assets/images/services/ai_development.png" alt="AI Development" class="service-image">
                        <div class="absolute inset-0 image-overlay"></div>
                        <div class="absolute bottom-4 left-6">
                            <div
                                class="w-12 h-12 rounded-xl icon-box flex items-center justify-center text-primary bg-white shadow-lg">
                                <i data-lucide="brain" class="w-6 h-6"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 pt-6">
                        <h2
                            class="sora text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors">
                            AI Development</h2>
                        <p class="text-gray-600 leading-relaxed mb-6 text-sm">
                            Build intelligent systems using machine learning, NLP, and advanced analytics to drive deep
                            business insights and operational innovation.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Custom ML Models</li>
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Conversational AI & Bots</li>
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Predictive Data Analytics</li>
                        </ul>
                    </div>
                </div>

                <!-- Embedded Software -->
                <div class="service-card rounded-3xl group">
                    <div class="relative overflow-hidden h-48">
                        <img src="assets/images/services/embedded_software.png" alt="Embedded Software"
                            class="service-image">
                        <div class="absolute inset-0 image-overlay"></div>
                        <div class="absolute bottom-4 left-6">
                            <div
                                class="w-12 h-12 rounded-xl icon-box flex items-center justify-center text-primary bg-white shadow-lg">
                                <i data-lucide="cpu" class="w-6 h-6"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 pt-6">
                        <h2
                            class="sora text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors">
                            Embedded Software</h2>
                        <p class="text-gray-600 leading-relaxed mb-6 text-sm">
                            Develop reliable embedded systems for IoT, automation, and industrial hardware integration
                            with real-time performance and superior efficiency.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Firmware Programming</li>
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> RTOS Implementation</li>
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> IoT Device Ecosystems</li>
                        </ul>
                    </div>
                </div>

                <!-- Security Solutions -->
                <div class="service-card rounded-3xl group">
                    <div class="relative overflow-hidden h-48">
                        <img src="assets/images/services/security_solutions.png" alt="Security Solutions"
                            class="service-image">
                        <div class="absolute inset-0 image-overlay"></div>
                        <div class="absolute bottom-4 left-6">
                            <div
                                class="w-12 h-12 rounded-xl icon-box flex items-center justify-center text-primary bg-white shadow-lg">
                                <i data-lucide="shield-check" class="w-6 h-6"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 pt-6">
                        <h2
                            class="sora text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors">
                            Security Solutions</h2>
                        <p class="text-gray-600 leading-relaxed mb-6 text-sm">
                            Protect your enterprise with advanced cybersecurity strategies including proactive threat
                            detection, data protection, and robust risk management.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> ISO 27001 Compliance</li>
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Threat Analysis (SOC)</li>
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Zero Trust Architecture</li>
                        </ul>
                    </div>
                </div>

                <!-- IT Consulting -->
                <div class="service-card rounded-3xl group">
                    <div class="relative overflow-hidden h-48">
                        <img src="assets/images/services/it consulting.jpg" alt="IT Consulting" class="service-image">
                        <div class="absolute inset-0 image-overlay"></div>
                        <div class="absolute bottom-4 left-6">
                            <div
                                class="w-12 h-12 rounded-xl icon-box flex items-center justify-center text-primary bg-white shadow-lg">
                                <i data-lucide="users-round" class="w-6 h-6"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 pt-6">
                        <h2
                            class="sora text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors">
                            IT Consulting</h2>
                        <p class="text-gray-600 leading-relaxed mb-6 text-sm">
                            Align your business strategy with technology through expert consulting, strategic
                            roadmapping, and enterprise-grade implementation support.
                        </p>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Digital Roadmap Planning</li>
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Infrastructure Assessment</li>
                            <li class="flex items-center gap-3 text-xs text-gray-500"><i data-lucide="check"
                                    class="w-3 h-3 text-secondary"></i> Cost Optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us Section -->
    <section class="py-24 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="sora text-3xl md:text-4xl font-black text-gray-900 mb-6">Why Choose Us?</h2>
                <p class="text-gray-500 max-w-2xl mx-auto">We combine deep domain expertise with cutting-edge technical
                    execution to deliver measurable results.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-12">
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary group-hover:text-white transition-all duration-500">
                        <i data-lucide="trending-up" class="w-10 h-10"></i>
                    </div>
                    <h3 class="sora font-bold text-xl mb-3 text-gray-900">Scalable Solutions</h3>
                    <p class="text-gray-600">Architectures designed to adapt and grow seamlessly with your business
                        demands.</p>
                </div>

                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-emerald-50 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-500">
                        <i data-lucide="shield-check" class="w-10 h-10"></i>
                    </div>
                    <h3 class="sora font-bold text-xl mb-3 text-gray-900">Secure Systems</h3>
                    <p class="text-gray-600">Enterprise-level security, privacy, and regulatory compliance at every
                        layer.</p>
                </div>

                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-orange-50 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-secondary group-hover:text-white transition-all duration-500">
                        <i data-lucide="sparkles" class="w-10 h-10"></i>
                    </div>
                    <h3 class="sora font-bold text-xl mb-3 text-gray-900">Modern Technology</h3>
                    <p class="text-gray-600">Harnessing AI, Cloud, and Next-Gen architectures to stay ahead of the
                        curve.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-bg text-white py-20 lg:py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-blue-900/20"></div>
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center relative z-10">
            <h2 class="sora text-3xl md:text-5xl font-black mb-6 leading-tight">Ready to Transform Your Business?</h2>
            <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto opacity-90 italic">"Technology is most powerful when
                it empowers human potential."</p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="partner.php"
                    class="bg-secondary text-white font-bold px-10 py-5 rounded-2xl shadow-2xl hover:bg-orange-600 transition-all flex items-center justify-center gap-3 group">
                    Partner With Us <i data-lucide="arrow-right"
                        class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="about.php#contact"
                    class="bg-white/10 backdrop-blur-md text-white border border-white/20 font-bold px-10 py-5 rounded-2xl hover:bg-white/20 transition-all">
                    Consult Our Experts
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'components/footer.php'; ?>