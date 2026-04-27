<?php
$pageTitle = 'Technology Services | Unidemy Global';
$pageDescription = 'Enterprise Technology Solutions: Web Applications, Cloud, AI, Embedded Systems, Security, and IT Consulting.';
$additionalHead = <<<'HEADCONTENT'
<!-- Use Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Google Fonts for Modern Typography -->
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
/* Hide the login and signup buttons specifically for this page */
nav#main-nav .hidden.lg\:flex.items-center.gap-4 {
    display: none !important;
}
#mobile-menu .flex.flex-col.gap-2.mt-4 {
    display: none !important;
}

/* Force the header to always exactly match index.php scroll state (solid white) on this page */
nav#main-nav {
    background-color: #ffffff !important;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
}
</style>
HEADCONTENT;

$base_url = '../';
include '../components/header.php';

// PHP Arrays for Dynamic Content
$services = [
    [
        "title" => "Artificial Intelligence",
        "icon" => "fa-brain",
        "desc" => "Harness the immense power of artificial intelligence to automate complex workflows, extract actionable insights from big data, and integrate predictive cognitive computing into your enterprise infrastructure.",
        "points" => ["Generative AI Solutions", "Predictive Analytics", "Natural Language Processing", "Computer Vision Models"]
    ],
    [
        "title" => "Embedded Technologies",
        "icon" => "fa-microchip",
        "desc" => "Design and deploy highly reliable firmware and embedded computing solutions. We bridge the gap between physical hardware and connected digital ecosystems for smarter devices.",
        "points" => ["IoT Device Engineering", "RTOS & Firmware Development", "Edge Computing Solutions", "Microcontroller Programming"]
    ],
    [
        "title" => "Enterprise Web Development",
        "icon" => "fa-laptop-code",
        "desc" => "Design and deploy highly responsive, scalable, and secure custom web applications engineered for modern business performance.",
        "points" => ["Custom Web Applications", "E-Commerce Solutions", "API Integration", "Progressive Web Apps (PWA)"]
    ],
    [
        "title" => "Cybersecurity",
        "icon" => "fa-shield-halved",
        "desc" => "Protect your enterprise digital assets with advanced threat detection, proactive monitoring, and robust security frameworks built for modern attack surfaces.",
        "points" => ["Threat Detection & Response", "Data Encryption Protocols", "Compliance Auditing", "Zero Trust Architecture"]
    ],
    [
        "title" => "IT Infrastructure",
        "icon" => "fa-server",
        "desc" => "Build a resilient foundation for your business with high-performance networking, optimised hardware solutions and data center excellence.",
        "points" => ["Network Design & Setup", "Data Center Optimisation", "24/7 Monitoring & Support", "Virtualisation & HCI"]
    ],
    [
        "title" => "Digital Transformation",
        "icon" => "fa-rocket",
        "desc" => "Modernise your legacy systems and accelerate business growth through innovative digital processes, AI integration, and strategic automation.",
        "points" => ["Legacy System Modernisation", "Business Process Automation", "Agile Adoption Consulting", "AI & ML Integration"]
    ],
    [
        "title" => "Managed IT Services",
        "icon" => "fa-headset",
        "desc" => "Focus on your core business while our expert engineering teams manage your entire enterprise IT ecosystem effortlessly and proactively.",
        "points" => ["Proactive Maintenance & Patching", "L1/L2 Helpdesk Support", "Strategic Technology Roadmaps", "Remote Infrastructure Monitoring"]
    ],
    [
        "title" => "Digital Workplace",
        "icon" => "fa-laptop-house",
        "desc" => "Empower your remote and hybrid workforce with secure, collaborative, and highly accessible enterprise workspace solutions built for the modern era.",
        "points" => ["Collaboration Tools Setup", "Virtual Desktop Infrastructure", "Remote Endpoint Security", "Microsoft 365 Deployment"]
    ]
];

$whyChooseUs = [
    ["title" => "Unmatched Scalability", "icon" => "fa-arrow-trend-up", "desc" => "Solutions specifically engineered to adapt and grow seamlessly with your changing business demands without friction."],
    ["title" => "Domain Expertise", "icon" => "fa-award", "desc" => "Decades of combined engineering experience delivering high-performance enterprise solutions globally."],
    ["title" => "24/7 Premium Support", "icon" => "fa-user-clock", "desc" => "Uninterrupted technical assistance whenever you need it most with guaranteed fast response times."],
    ["title" => "Ironclad Security", "icon" => "fa-lock", "desc" => "Military-grade data protection, compliance, and privacy controls woven perfectly into every layer of our stack."]
];

$industries = [
    ["name" => "BFSI", "icon" => "fa-building-columns"],
    ["name" => "Healthcare", "icon" => "fa-staff-snake"],
    ["name" => "Education", "icon" => "fa-graduation-cap"],
    ["name" => "Manufacturing", "icon" => "fa-industry"],
    ["name" => "Retail", "icon" => "fa-cart-shopping"],
    ["name" => "IT & Telecom", "icon" => "fa-network-wired"]
];

$approachSteps = [
    ["step" => "1", "title" => "Consult", "desc" => "We analyze your business needs, understand barriers, and craft a tailored technical execution roadmap."],
    ["step" => "2", "title" => "Design", "desc" => "Our enterprise architects create scalable, secure, and intuitive technical solution designs."],
    ["step" => "3", "title" => "Implement", "desc" => "Agile and rapid deployment with minimal disruption to your daily ongoing business operations."],
    ["step" => "4", "title" => "Manage", "desc" => "Ongoing 24/7 proactive monitoring, rapid maintenance, and continuous system optimization."]
];

$testimonials = [
    [
        "quote" => "TechSolution completely revolutionized our legacy infrastructure. Their cloud migration strategy was flawless, and our operational efficiency has exponentially skyrocketed.",
        "name" => "Sarah Jenkins",
        "designation" => "CTO, Global Retail Networks",
        "image" => "https://i.pravatar.cc/150?img=44"
    ],
    [
        "quote" => "The level of cybersecurity they implemented is unparalleled. We finally have absolute peace of mind knowing our sensitive financial data is protected by a world-class IT partner.",
        "name" => "Michael Chang",
        "designation" => "VP of Operations, FinTech Solutions",
        "image" => "https://i.pravatar.cc/150?img=33"
    ]
];
?>

<!-- 1. HERO SECTION -->
<section id="hero" class="relative w-full pt-32 pb-20 lg:pt-40 lg:pb-32 bg-[#F8FBFF] overflow-hidden">
    <!-- Abstract Background shapes -->
    <div class="absolute top-0 right-0 w-[50%] h-[100%] bg-gradient-to-bl from-[#1E4F9C]/10 to-transparent pointer-events-none"></div>
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-[#F97316]/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-[-20%] w-[50%] h-[50%] bg-[#1E4F9C]/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            <!-- Text Content -->
            <div class="w-full lg:w-1/2 flex flex-col items-start text-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white border border-[#1E4F9C]/10 shadow-sm mb-6">
                    <span class="flex h-2.5 w-2.5 rounded-full bg-[#F97316] animate-pulse"></span>
                    <span class="text-xs font-bold text-[#1E4F9C] tracking-widest uppercase">Premium Enterprise IT Partner</span>
                </div>
                
                <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-[#0B1121] leading-[1.15] mb-6 tracking-tight">
                    Transforming Businesses with <br class="hidden lg:block" /><span class="text-transparent bg-clip-text bg-gradient-to-r from-[#1E4F9C] to-[#F97316]">Next-Gen</span> Technology Solutions
                </h1>
                
                <p class="text-[17px] text-[#6B7280] leading-relaxed mb-10 max-w-xl">
                    Empower your total organization with enterprise-grade IT services, highly scalable cloud architecture, and dynamic digital transformation strategies engineered uniquely for future growth.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                    <a href="#services" class="inline-flex justify-center items-center px-8 py-4 text-base font-bold text-white bg-[#F97316] rounded-full hover:bg-[#ea580c] transition-all shadow-lg shadow-[#F97316]/30 hover:shadow-[#F97316]/50 hover:-translate-y-0.5">
                        Get Started
                        <i class="fa-solid fa-arrow-right ml-2 inline-block"></i>
                    </a>
                    <a href="#contact" class="inline-flex justify-center items-center px-8 py-4 text-base font-bold text-[#1E4F9C] bg-white border-2 border-[#1E4F9C]/10 rounded-full hover:border-[#1E4F9C]/30 hover:bg-[#F8FBFF] transition-all">
                        Contact Us
                    </a>
                </div>

                <!-- Trust signals -->
                <div class="mt-12 pt-8 border-t border-gray-200/60 w-full flex flex-wrap items-center gap-8 lg:gap-12">
                    <div class="flex flex-col">
                        <span class="text-3xl font-black text-[#0B1121]">24/7</span>
                        <span class="text-xs font-semibold text-[#6B7280] uppercase tracking-wider mt-1">Premium Support</span>
                    </div>
                    <div class="w-px h-12 bg-gray-200 hidden sm:block"></div>
                    <div class="flex flex-col">
                        <span class="text-3xl font-black text-[#0B1121]">99.9%</span>
                        <span class="text-xs font-semibold text-[#6B7280] uppercase tracking-wider mt-1">Uptime SLA</span>
                    </div>
                </div>
            </div>

            <!-- Visual Column -->
            <div class="w-full lg:w-1/2 relative mt-10 lg:mt-0">
                <div class="relative rounded-[2rem] overflow-hidden shadow-2xl border-[6px] border-white z-10 bg-white">
                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=1200" alt="Cybersecurity and IT Infrastructure" class="w-full h-auto object-cover transform transition-transform duration-700 hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#1E4F9C]/40 to-transparent mix-blend-multiply pointer-events-none"></div>
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute -bottom-6 -left-6 lg:-left-12 bg-white p-5 rounded-2xl shadow-xl flex items-center gap-4 z-20 border border-gray-100 animate-bounce" style="animation-duration: 3s;">
                    <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-[#1E4F9C]">
                        <i class="fa-solid fa-shield-halved text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm font-extrabold text-[#0B1121]">Enterprise Grade</p>
                        <p class="text-xs font-medium text-[#6B7280]">100% Secure</p>
                    </div>
                </div>

                <div class="absolute -top-6 -right-6 lg:-right-8 bg-white p-4 rounded-xl shadow-lg flex items-center gap-3 z-20 border border-gray-50 hover:-translate-y-2 transition-transform cursor-default">
                    <div class="w-10 h-10 rounded-full bg-orange-50 flex items-center justify-center text-[#F97316]">
                        <i class="fa-solid fa-cloud-arrow-up text-lg"></i>
                    </div>
                    <div>
                        <p class="text-xs font-extrabold text-[#0B1121] tracking-wide uppercase">Cloud Native</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. ABOUT US SECTION -->
<section class="py-24 bg-white relative overflow-hidden" id="about">
    <!-- Abstract Shapes -->
    <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>
    <div class="absolute -left-40 top-20 w-80 h-80 bg-[#1E4F9C]/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row gap-16 lg:gap-24 items-center">
            
            <!-- Text Content -->
            <div class="w-full lg:w-1/2">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 border border-blue-100 mb-6">
                    <span class="w-2 h-2 rounded-full bg-[#1E4F9C] animate-pulse"></span>
                    <span class="text-xs font-bold text-[#1E4F9C] tracking-widest uppercase">Who We Are</span>
                </div>
                
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#0B1121] leading-[1.15] mb-6">
                    About <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#1E4F9C] to-[#F97316]">TechSolution</span>
                </h2>
                
                <p class="text-[19px] font-semibold text-[#1E4F9C] mb-6">Leading Digital Innovation Worldwide</p>
                
                <p class="text-lg text-[#6B7280] leading-relaxed mb-8">
                    At TechSolution, we specialize in driving unmatched digital transformation for modern enterprises. As a highly trusted technology partner, we deliver comprehensive IT services, ranging all the way from resilient infrastructure engineering to the most advanced cybersecurity protocols.
                </p>
                
                <p class="text-[17px] text-[#6B7280] leading-relaxed mb-10 border-l-4 border-[#F97316] pl-6 italic">
                    "Our core mission is to seamlessly align innovative digital technology directly with your business objectives, ensuring you continuously remain competitive, absolutely secure, and incredibly agile in today's rapidly evolving digital landscape."
                </p>
                
                <!-- Metrics -->
                <div class="grid grid-cols-2 gap-8 pt-8 border-t border-gray-100">
                    <div>
                        <div class="text-4xl font-black text-[#0B1121] mb-1">10<span class="text-[#F97316]">+</span></div>
                        <div class="text-xs font-bold text-[#6B7280] uppercase tracking-wider">Years Experience</div>
                    </div>
                    <div>
                        <div class="text-4xl font-black text-[#0B1121] mb-1">500<span class="text-[#1E4F9C]">+</span></div>
                        <div class="text-xs font-bold text-[#6B7280] uppercase tracking-wider">Enterprise Clients</div>
                    </div>
                </div>
            </div>

            <!-- Visual Content -->
            <div class="w-full lg:w-1/2 relative">
                <div class="relative rounded-[2rem] overflow-hidden shadow-2xl border-[8px] border-white z-10 bg-gray-50 aspect-square lg:aspect-[4/5] max-h-[600px] group">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1200" alt="TechSolution Team" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-105">
                    <!-- Overlay gradient -->
                    <div class="absolute inset-0 bg-gradient-to-t from-[#0B1121]/80 via-transparent to-transparent pointer-events-none"></div>
                    
                    <div class="absolute bottom-8 left-8 right-8 text-white z-20">
                        <div class="flex items-center gap-4 mb-3">
                            <div class="w-12 h-12 rounded-full bg-[#F97316] flex items-center justify-center text-xl shadow-lg">
                                <i class="fa-solid fa-earth-americas"></i>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-blue-200 uppercase tracking-wider">Global Reach</p>
                                <p class="font-bold text-xl">Operating in 15+ Countries</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Back decorative box -->
                <div class="absolute -bottom-6 -right-6 w-2/3 h-2/3 bg-gradient-to-br from-[#1E4F9C]/10 to-[#F97316]/10 rounded-[2rem] -z-10 blur-xl"></div>
                <!-- Dotted pattern -->
                <div class="absolute -top-10 -right-10 w-32 h-32 opacity-20" style="background-image: radial-gradient(#1E4F9C 2px, transparent 2px); background-size: 16px 16px;"></div>
            </div>
            
        </div>
    </div>
</section>

<!-- 3. SERVICES SECTION -->
<style>
.ps-services-section {
    background-color: #F8FBFF;
}
.ps-header {
    background: transparent;
    padding: 80px 20px 60px;
    text-align: center;
}
.ps-title {
    font-size: 44px;
    font-weight: 800;
    color: #0B1121;
    margin: 0;
}
.ps-subtitle {
    color: #6B7280;
    font-size: 17px;
    max-width: 620px;
    margin: 16px auto 0;
    line-height: 1.6;
}
.ps-header-rule {
    width: 60px;
    height: 3px;
    background: #F97316;
    margin: 24px auto 0;
    border-radius: 2px;
}
.ps-row {
    display: flex;
    min-height: 520px;
    opacity: 0;
    transform: translateY(50px);
    background-color: #ffffff;
    transition: opacity 0.7s ease, transform 0.7s ease;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 12px 40px rgba(30,79,156,0.06);
    margin-bottom: 60px;
}
.ps-row:last-child {
    margin-bottom: 0;
}
.ps-row.is-visible {
    opacity: 1;
    transform: translateY(0);
}
.ps-row-even {
    flex-direction: row-reverse;
}
.ps-text {
    flex: 1;
    position: relative;
    padding: 60px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.ps-number {
    position: absolute;
    font-size: 160px;
    font-weight: 900;
    opacity: 0.04;
    color: #1E4F9C;
    top: 20px;
    left: 30px;
    pointer-events: none;
    z-index: 0;
    margin: 0;
    line-height: 1;
}
.ps-content {
    position: relative;
    z-index: 1;
}
.ps-badge {
    display: inline-block;
    color: #ffffff;
    border-radius: 100px;
    font-size: 11px;
    font-weight: 700;
    padding: 5px 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 0px;
}
.ps-content h2 {
    font-size: 38px;
    font-weight: 800;
    color: #0B1121;
    margin: 16px 0 12px;
    line-height: 1.1;
}
.ps-content p {
    color: #6B7280;
    font-size: 16px;
    line-height: 1.7;
    margin-top: 0;
    margin-bottom: 28px;
}
.ps-content ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.ps-content li {
    font-size: 15px;
    color: #374151;
    padding: 6px 0;
    border-bottom: 1px solid #F3F4F6;
    display: flex;
    align-items: center;
}
.ps-content li:last-child {
    border-bottom: none;
}
.ps-content li::before {
    content: '●';
    margin-right: 12px;
    font-size: 12px;
}
.ps-link {
    font-weight: 700;
    font-size: 14px;
    margin-top: 28px;
    display: inline-block;
    letter-spacing: 0.5px;
    text-decoration: none;
}
.ps-image-container {
    flex: 1;
    position: relative;
    overflow: hidden;
    height: 100%;
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.7s ease, transform 0.7s ease;
    transition-delay: 0.15s;
}
.ps-row.is-visible .ps-image-container {
    opacity: 1;
    transform: translateY(0);
}
.ps-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.8s ease;
}
.ps-row:hover .ps-image {
    transform: scale(1.06);
}
.ps-overlay-odd, .ps-overlay-even {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
}
.ps-overlay-odd {
    background: linear-gradient(to right, rgba(0,0,0,0.35), transparent);
}
.ps-overlay-even {
    background: linear-gradient(to left, rgba(0,0,0,0.35), transparent);
}
.ps-floating-label {
    position: absolute;
    bottom: 24px;
    left: 24px;
    color: #ffffff;
    padding: 8px 16px;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 700;
    z-index: 2;
}
.ps-watermark {
    position: absolute;
    font-size: 72px;
    font-weight: 900;
    color: #ffffff;
    opacity: 0.07;
    pointer-events: none;
    z-index: 1;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    white-space: nowrap;
    margin: 0;
}
.ps-theme-01 .ps-badge, .ps-theme-01 .ps-floating-label { background-color: #2563EB; }
.ps-theme-01 .ps-content li::before, .ps-theme-01 .ps-link { color: #2563EB; }
.ps-theme-02 .ps-badge, .ps-theme-02 .ps-floating-label { background-color: #DC2626; }
.ps-theme-02 .ps-content li::before, .ps-theme-02 .ps-link { color: #DC2626; }
.ps-theme-03 .ps-badge, .ps-theme-03 .ps-floating-label { background-color: #0D9488; }
.ps-theme-03 .ps-content li::before, .ps-theme-03 .ps-link { color: #0D9488; }
.ps-theme-04 .ps-badge, .ps-theme-04 .ps-floating-label { background-color: #7C3AED; }
.ps-theme-04 .ps-content li::before, .ps-theme-04 .ps-link { color: #7C3AED; }
.ps-theme-05 .ps-badge, .ps-theme-05 .ps-floating-label { background-color: #059669; }
.ps-theme-05 .ps-content li::before, .ps-theme-05 .ps-link { color: #059669; }
.ps-theme-06 .ps-badge, .ps-theme-06 .ps-floating-label { background-color: #D97706; }
.ps-theme-06 .ps-content li::before, .ps-theme-06 .ps-link { color: #D97706; }
.ps-theme-07 .ps-badge, .ps-theme-07 .ps-floating-label { background-color: #DB2777; }
.ps-theme-07 .ps-content li::before, .ps-theme-07 .ps-link { color: #DB2777; }
.ps-theme-08 .ps-badge, .ps-theme-08 .ps-floating-label { background-color: #0891B2; }
.ps-theme-08 .ps-content li::before, .ps-theme-08 .ps-link { color: #0891B2; }
@media (max-width: 768px) {
    .ps-row { flex-direction: column !important; min-height: auto; margin-bottom: 40px; }
    .ps-image-container { height: 280px; flex: none; order: -1; }
    .ps-text { padding: 40px 20px; flex: none; }
    .ps-number, .ps-watermark { display: none; }
    .ps-image-container { transform: translateY(0); opacity: 1; transition: none; }
    .ps-row { opacity: 1; transform: translateY(0); transition: none; }
}
</style>

<section class="ps-services-section" id="services">
    <div class="ps-header">
        <h2 class="ps-title">Our Premium Services</h2>
        <p class="ps-subtitle">Comprehensive, enterprise-grade technical solutions explicitly engineered for maximum performance, security, and long-term reliability.</p>
        <div class="ps-header-rule"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 pb-20">
        <div class="ps-row ps-theme-01">
            <div class="ps-text">
                <div class="ps-number">01</div>
                <div class="ps-content">
                    <span class="ps-badge">AI & Machine Learning</span>
                    <h2>Artificial Intelligence</h2>
                    <p>Harness the immense power of artificial intelligence to automate complex workflows, extract actionable insights from big data, and integrate predictive cognitive computing into your enterprise infrastructure.</p>
                    <ul>
                    <li>Generative AI Solutions</li>
                    <li>Predictive Analytics</li>
                    <li>Natural Language Processing</li>
                    <li>Computer Vision Models</li>
                    </ul>
                    <a href="#" class="ps-link">Explore Service →</a>
                </div>
            </div>
            <div class="ps-image-container">
                <div class="ps-overlay-odd"></div>
                <h3 class="ps-watermark">ARTIFICIAL INTELLIGENCE</h3>
                <div class="ps-floating-label">🧠 Artificial Intelligence</div>
                <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&q=80&w=1200" alt="Artificial Intelligence" class="ps-image">
            </div>
        </div>
        <div class="ps-row ps-theme-02 ps-row-even">
            <div class="ps-text">
                <div class="ps-number">02</div>
                <div class="ps-content">
                    <span class="ps-badge">Hardware & IoT</span>
                    <h2>Embedded Technologies</h2>
                    <p>Design and deploy highly reliable firmware and embedded computing solutions. We bridge the gap between physical hardware and connected digital ecosystems for smarter devices.</p>
                    <ul>
                    <li>IoT Device Engineering</li>
                    <li>RTOS & Firmware Development</li>
                    <li>Edge Computing Solutions</li>
                    <li>Microcontroller Programming</li>
                    </ul>
                    <a href="#" class="ps-link">Explore Service →</a>
                </div>
            </div>
            <div class="ps-image-container">
                <div class="ps-overlay-even"></div>
                <h3 class="ps-watermark">EMBEDDED TECHNOLOGIES</h3>
                <div class="ps-floating-label">⚙️ Embedded Technologies</div>
                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&q=80&w=1200" alt="Embedded Technologies" class="ps-image">
            </div>
        </div>
        <div class="ps-row ps-theme-03">
            <div class="ps-text">
                <div class="ps-number">03</div>
                <div class="ps-content">
                    <span class="ps-badge">Web Development</span>
                    <h2>Enterprise Web Development</h2>
                    <p>Design and deploy highly responsive, scalable, and secure custom web applications engineered for modern business performance.</p>
                    <ul>
                    <li>Custom Web Applications</li>
                    <li>E-Commerce Solutions</li>
                    <li>API Integration</li>
                    <li>Progressive Web Apps (PWA)</li>
                    </ul>
                    <a href="#" class="ps-link">Explore Service →</a>
                </div>
            </div>
            <div class="ps-image-container">
                <div class="ps-overlay-odd"></div>
                <h3 class="ps-watermark">WEB DEVELOPMENT</h3>
                <div class="ps-floating-label">💻 Web Development</div>
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&q=80&w=1200" alt="Enterprise Web Development" class="ps-image">
            </div>
        </div>
        <div class="ps-row ps-theme-04 ps-row-even">
            <div class="ps-text">
                <div class="ps-number">04</div>
                <div class="ps-content">
                    <span class="ps-badge">Security & Compliance</span>
                    <h2>Cybersecurity</h2>
                    <p>Protect your enterprise digital assets with advanced threat detection, proactive monitoring, and robust security frameworks built for modern attack surfaces.</p>
                    <ul>
                    <li>Threat Detection & Response</li>
                    <li>Data Encryption Protocols</li>
                    <li>Compliance Auditing</li>
                    <li>Zero Trust Architecture</li>
                    </ul>
                    <a href="#" class="ps-link">Explore Service →</a>
                </div>
            </div>
            <div class="ps-image-container">
                <div class="ps-overlay-even"></div>
                <h3 class="ps-watermark">CYBERSECURITY</h3>
                <div class="ps-floating-label">🔐 Cybersecurity</div>
                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=1200" alt="Cybersecurity" class="ps-image">
            </div>
        </div>
        <div class="ps-row ps-theme-05">
            <div class="ps-text">
                <div class="ps-number">05</div>
                <div class="ps-content">
                    <span class="ps-badge">Infrastructure</span>
                    <h2>IT Infrastructure</h2>
                    <p>Build a resilient foundation for your business with high-performance networking, optimised hardware solutions and data center excellence.</p>
                    <ul>
                    <li>Network Design & Setup</li>
                    <li>Data Center Optimisation</li>
                    <li>24/7 Monitoring & Support</li>
                    <li>Virtualisation & HCI</li>
                    </ul>
                    <a href="#" class="ps-link">Explore Service →</a>
                </div>
            </div>
            <div class="ps-image-container">
                <div class="ps-overlay-odd"></div>
                <h3 class="ps-watermark">IT INFRASTRUCTURE</h3>
                <div class="ps-floating-label">🖥️ IT Infrastructure</div>
                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&q=80&w=1200" alt="IT Infrastructure" class="ps-image">
            </div>
        </div>
        <div class="ps-row ps-theme-06 ps-row-even">
            <div class="ps-text">
                <div class="ps-number">06</div>
                <div class="ps-content">
                    <span class="ps-badge">Digital Strategy</span>
                    <h2>Digital Transformation</h2>
                    <p>Modernise your legacy systems and accelerate business growth through innovative digital processes, AI integration, and strategic automation.</p>
                    <ul>
                    <li>Legacy System Modernisation</li>
                    <li>Business Process Automation</li>
                    <li>Agile Adoption Consulting</li>
                    <li>AI & ML Integration</li>
                    </ul>
                    <a href="#" class="ps-link">Explore Service →</a>
                </div>
            </div>
            <div class="ps-image-container">
                <div class="ps-overlay-even"></div>
                <h3 class="ps-watermark">DIGITAL TRANSFORMATION</h3>
                <div class="ps-floating-label">🚀 Digital Transformation</div>
                <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&q=80&w=1200" alt="Digital Transformation" class="ps-image">
            </div>
        </div>
        <div class="ps-row ps-theme-07">
            <div class="ps-text">
                <div class="ps-number">07</div>
                <div class="ps-content">
                    <span class="ps-badge">Managed Services</span>
                    <h2>Managed IT Services</h2>
                    <p>Focus on your core business while our expert engineering teams manage your entire enterprise IT ecosystem effortlessly and proactively.</p>
                    <ul>
                    <li>Proactive Maintenance & Patching</li>
                    <li>L1/L2 Helpdesk Support</li>
                    <li>Strategic Technology Roadmaps</li>
                    <li>Remote Infrastructure Monitoring</li>
                    </ul>
                    <a href="#" class="ps-link">Explore Service →</a>
                </div>
            </div>
            <div class="ps-image-container">
                <div class="ps-overlay-odd"></div>
                <h3 class="ps-watermark">MANAGED IT SERVICES</h3>
                <div class="ps-floating-label">🛠️ Managed IT Services</div>
                <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?auto=format&fit=crop&q=80&w=1200" alt="Managed IT Services" class="ps-image">
            </div>
        </div>
        <div class="ps-row ps-theme-08 ps-row-even">
            <div class="ps-text">
                <div class="ps-number">08</div>
                <div class="ps-content">
                    <span class="ps-badge">Workplace Solutions</span>
                    <h2>Digital Workplace</h2>
                    <p>Empower your remote and hybrid workforce with secure, collaborative, and highly accessible enterprise workspace solutions built for the modern era.</p>
                    <ul>
                    <li>Collaboration Tools Setup</li>
                    <li>Virtual Desktop Infrastructure</li>
                    <li>Remote Endpoint Security</li>
                    <li>Microsoft 365 Deployment</li>
                    </ul>
                    <a href="#" class="ps-link">Explore Service →</a>
                </div>
            </div>
            <div class="ps-image-container">
                <div class="ps-overlay-even"></div>
                <h3 class="ps-watermark">DIGITAL WORKPLACE</h3>
                <div class="ps-floating-label">💼 Digital Workplace</div>
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1200" alt="Digital Workplace" class="ps-image">
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const rows = document.querySelectorAll('.ps-row');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });

            rows.forEach(row => { observer.observe(row); });
        });
    </script>
</section>

<!-- 4. WHY CHOOSE US -->
<section class="py-20 bg-white" id="choose">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-extrabold text-[#0B1121] mb-6">Why <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#1E4F9C] to-[#F97316]">Choose Us</span></h2>
            <p class="text-lg text-[#6B7280]">The decisive technical advantage your business critically needs to consistently outperform the market competition today.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach($whyChooseUs as $reason): ?>
            <div class="group bg-[#F8FBFF] rounded-2xl p-8 hover:bg-white hover:shadow-2xl transition-all duration-300 border border-[#1E4F9C]/5">
                <div class="w-14 h-14 bg-white rounded-xl shadow-sm flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-[#1E4F9C] transition-all duration-300">
                    <i class="fa-solid <?php echo htmlspecialchars($reason['icon']); ?> text-2xl text-[#F97316] group-hover:text-white"></i>
                </div>
                <h4 class="text-xl font-bold text-[#0B1121] mb-4 group-hover:text-[#1E4F9C] transition-colors"><?php echo htmlspecialchars($reason['title']); ?></h4>
                <p class="text-[#6B7280] leading-relaxed"><?php echo htmlspecialchars($reason['desc']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 5. INDUSTRIES WE SERVE -->
<section class="py-24 bg-[#F8FBFF] relative overflow-hidden" id="industries">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-[#1E4F9C]/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-[#F97316]/5 rounded-full blur-3xl translate-y-1/3 -translate-x-1/3"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-extrabold text-[#0B1121] mb-6">Industries <span class="text-[#1E4F9C]">We Serve</span></h2>
            <p class="text-lg text-[#6B7280]">Delivering explicitly proven technological excellence across massive global market sectors.</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            <?php foreach($industries as $industry): ?>
            <div class="bg-white rounded-2xl p-6 text-center shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group">
                <div class="w-16 h-16 mx-auto bg-blue-50 rounded-full flex items-center justify-center mb-4 group-hover:bg-[#1E4F9C] transition-colors">
                    <i class="fa-solid <?php echo htmlspecialchars($industry['icon']); ?> text-2xl text-[#1E4F9C] group-hover:text-white transition-colors"></i>
                </div>
                <h4 class="font-bold text-[#0B1121] group-hover:text-[#F97316] transition-colors"><?php echo htmlspecialchars($industry['name']); ?></h4>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 6. OUR APPROACH -->
<section class="py-20 bg-white relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-3xl md:text-5xl font-extrabold text-[#0B1121] mb-6">Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#1E4F9C] to-[#F97316]">Approach</span></h2>
            <p class="text-lg text-[#6B7280]">A highly proven, multi-phase systematic methodology to directly ensure technical success from inception all the way to deployment.</p>
        </div>
        
        <div class="relative max-w-5xl mx-auto">
            <!-- Connecting Line -->
            <div class="hidden md:block absolute top-12 left-0 w-full h-1 bg-gradient-to-r from-[#1E4F9C]/20 via-[#F97316]/40 to-[#1E4F9C]/20 z-0 pl-10 pr-10"></div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 md:gap-4 lg:gap-8 relative z-10">
                <?php foreach($approachSteps as $index => $step): ?>
                <div class="flex flex-col items-center text-center group">
                    <div class="w-24 h-24 rounded-full bg-white shadow-[0_0_30px_rgba(30,79,156,0.15)] border-4 border-white flex items-center justify-center mb-6 relative z-10 group-hover:scale-110 transition-transform duration-300">
                        <div class="w-full h-full rounded-full bg-gradient-to-br from-[#1E4F9C] to-blue-800 flex items-center justify-center text-white text-3xl font-black shadow-inner">
                            <?php echo htmlspecialchars($step['step']); ?>
                        </div>
                    </div>
                    <h4 class="text-2xl font-black text-[#0B1121] mb-3 group-hover:text-[#F97316] transition-colors"><?php echo htmlspecialchars($step['title']); ?></h4>
                    <p class="text-[#6B7280] text-sm leading-relaxed px-2"><?php echo htmlspecialchars($step['desc']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- 7. TESTIMONIALS -->
<section class="py-24 bg-[#0B1121] relative overflow-hidden" id="testimonials">
    <!-- Abstract background -->
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-5 mix-blend-overlay"></div>
    <div class="absolute -top-[30%] -right-[10%] w-[50%] h-[100%] bg-[#1E4F9C] rounded-full blur-[120px] opacity-30 pointer-events-none"></div>
    <div class="absolute -bottom-[20%] -left-[10%] w-[40%] h-[80%] bg-[#F97316] rounded-full blur-[120px] opacity-20 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="w-full lg:w-1/3 text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/10 border border-white/20 mb-6 backdrop-blur-md">
                    <i class="fa-solid fa-star text-[#F97316] text-xs"></i>
                    <span class="text-xs font-bold text-white tracking-widest uppercase">Success Stories</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-extrabold text-white mb-6 leading-tight">Client <br><span class="text-[#F97316]">Testimonials</span></h2>
                <p class="text-gray-400 text-lg mb-8">Hear firsthand from the leading enterprises that have radically transformed their daily operations utilizing our solutions.</p>
                <div class="flex gap-4">
                    <button class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white hover:text-[#0B1121] transition-all"><i class="fa-solid fa-arrow-left"></i></button>
                    <button class="w-12 h-12 rounded-full bg-[#1E4F9C] text-white flex items-center justify-center hover:bg-[#153e7e] transition-all border border-transparent shadow-[0_0_20px_rgba(30,79,156,0.4)]"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>
            
            <div class="w-full lg:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php foreach($testimonials as $testimony): ?>
                <div class="bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-8 hover:bg-white/10 transition-all duration-300 group relative">
                    <i class="fa-solid fa-quote-right absolute top-8 right-8 text-5xl text-white/5 group-hover:text-white/10 transition-colors"></i>
                    <p class="text-gray-300 text-lg italic leading-relaxed mb-8 relative z-10">"<?php echo htmlspecialchars($testimony['quote']); ?>"</p>
                    <div class="flex items-center gap-4">
                        <img src="<?php echo htmlspecialchars($testimony['image']); ?>" alt="<?php echo htmlspecialchars($testimony['name']); ?>" class="w-16 h-16 rounded-full border-2 border-[#1E4F9C] object-cover">
                        <div>
                            <h4 class="text-white font-bold text-lg"><?php echo htmlspecialchars($testimony['name']); ?></h4>
                            <span class="text-[#F97316] font-medium text-sm block"><?php echo htmlspecialchars($testimony['designation']); ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- 8. CALL TO ACTION -->
<section class="py-20 bg-gradient-to-br from-[#1E4F9C] to-[#0A2558] relative overflow-hidden" id="cta">
    <!-- Abstract pattern overlay -->
    <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 32px 32px;"></div>
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#F97316] rounded-full blur-[150px] opacity-20 -translate-y-1/2 translate-x-1/3"></div>

    <div class="max-w-5xl mx-auto px-6 lg:px-8 relative z-10 text-center">
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-8 tracking-tight drop-shadow-lg">Ready to Transform <br class="hidden sm:block">Your Business?</h2>
        <p class="text-xl text-blue-100 mb-12 max-w-2xl mx-auto font-medium leading-relaxed">Take the next step towards unprecedented enterprise growth. Allow us to empower your future with cutting-edge technology.</p>
        
        <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
            <a href="#contact" class="inline-flex justify-center items-center px-10 py-5 text-lg font-bold text-white bg-[#F97316] rounded-full hover:bg-white hover:text-[#F97316] transition-all shadow-xl shadow-[#F97316]/30 hover:shadow-2xl hover:-translate-y-1 w-full sm:w-auto">
                Get Free Consultation
                <i class="fa-solid fa-arrow-right ml-3 text-sm"></i>
            </a>
            <a href="tel:+1234567890" class="inline-flex justify-center items-center px-10 py-5 text-lg font-bold text-white bg-transparent border-2 border-white/30 rounded-full hover:bg-white/10 hover:border-white transition-all w-full sm:w-auto">
                <i class="fa-solid fa-phone mr-3 text-sm"></i>
                Talk to an Expert
            </a>
        </div>
    </div>
</section>

<?php
// 9. INCLUDE FOOTER
include '../components/footer.php';
?>