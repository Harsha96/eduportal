import re

print("Reading index.html...")
with open("index.html", "r", encoding="utf-8") as f:
    html = f.read()

# Extract head contents
head_match = re.search(r'(<head>.*?</head>)', html, re.DOTALL)
head = head_match.group(1) if head_match else ""

# Modify the head to include Sora font and FontAwesome
head = head.replace(
    'family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@700;900',
    'family=Inter:wght@300;400;500;600;700;800;900&family=Sora:wght@400;600;700;800'
)

# Add FontAwesome CDN before </head>
fa_cdn = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">\n'
head = head.replace('</head>', f'    {fa_cdn}</head>')

# Extract nav
nav_match = re.search(r'(<nav.*?</nav>)', html, re.DOTALL)
nav = nav_match.group(1) if nav_match else ""

# Extract footer
footer_idx = html.find('<footer')
if footer_idx != -1:
    footer_part = html[footer_idx:]
else:
    footer_part = ""

MAIN_CONTENT = """
    <!-- Hero Section -->
    <section id="hero" class="relative w-full pt-32 pb-24 lg:pt-40 lg:pb-32 bg-[#0B1121] flex justify-center overflow-hidden">
        <div class="absolute inset-0 opacity-[0.03] mix-blend-screen pointer-events-none"
             style="background-image: radial-gradient(circle at center, #ffffff 1px, transparent 1px); background-size: 24px 24px;"></div>
        <div class="max-w-7xl w-full mx-auto px-6 lg:px-8 relative z-10 flex flex-col lg:flex-row items-center gap-12">
            <div class="lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left">
                <h1 class="font-['Sora'] text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-white leading-tight mb-4 scroll-reveal">
                    Enterprise Technology<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F97316] to-[#fbcfe8] animate-pulse">Solutions That Scale</span>
                </h1>
                <p class="text-lg md:text-xl text-slate-400 mb-8 max-w-2xl scroll-reveal" style="transition-delay: 100ms;">
                    Empowering global enterprises with cutting-edge artificial intelligence, cloud infrastructure, and robust cybersecurity engineering. Build the future with Unidemy Technology Services.
                </p>
                <div class="flex flex-wrap gap-3 mb-10 justify-center lg:justify-start scroll-reveal" style="transition-delay: 200ms;">
                    <span class="px-4 py-2 bg-white/5 border border-white/10 rounded-full text-sm font-semibold text-slate-300">AI & ML</span>
                    <span class="px-4 py-2 bg-white/5 border border-white/10 rounded-full text-sm font-semibold text-slate-300">Embedded</span>
                    <span class="px-4 py-2 bg-white/5 border border-white/10 rounded-full text-sm font-semibold text-slate-300">Cloud</span>
                    <span class="px-4 py-2 bg-white/5 border border-white/10 rounded-full text-sm font-semibold text-slate-300">Cybersecurity</span>
                    <span class="px-4 py-2 bg-white/5 border border-white/10 rounded-full text-sm font-semibold text-slate-300">Dev</span>
                    <span class="px-4 py-2 bg-white/5 border border-white/10 rounded-full text-sm font-semibold text-slate-300">IT Infra</span>
                </div>
                <div class="flex gap-4 scroll-reveal" style="transition-delay: 300ms;">
                    <a href="#services" class="bg-secondary hover:bg-orange-600 text-white px-8 py-3.5 rounded-full font-bold transition-all shadow-lg shadow-secondary/30 active:scale-95">Explore Services</a>
                    <a href="#contact" class="border border-white/20 text-white hover:bg-white/10 px-8 py-3.5 rounded-full font-bold transition-all active:scale-95">Consult Expert</a>
                </div>
            </div>
            
            <div class="lg:w-1/2 w-full relative h-[400px] md:h-[500px] flex items-center justify-center">
                <div class="absolute w-[400px] h-[400px] bg-primary/20 rounded-full blur-[100px] animate-pulse"></div>
                
                <div class="relative w-full h-full flex flex-col justify-between pt-8 pb-12 items-center group perspective">
                    <div class="absolute right-[10%] top-[0%] w-48 sm:w-56 p-5 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl shadow-2xl transform transition-transform hover:scale-105 hover:-translate-y-2">
                        <div class="font-['Sora'] text-3xl font-bold text-white mb-1"><span class="counter" data-target="200">0</span>+</div>
                        <div class="text-sm text-slate-400 font-medium">Enterprise Clients</div>
                    </div>
                    <div class="absolute left-[5%] top-[25%] w-48 sm:w-56 p-5 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl shadow-2xl transform transition-transform hover:scale-105 hover:-translate-y-2 delay-75">
                        <div class="font-['Sora'] text-3xl font-bold text-[#F97316] mb-1"><span class="counter" data-target="50">0</span>+</div>
                        <div class="text-sm text-slate-400 font-medium">Tech Experts</div>
                    </div>
                    <div class="absolute right-[5%] bottom-[25%] w-48 sm:w-56 p-5 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl shadow-2xl transform transition-transform hover:scale-105 hover:-translate-y-2 delay-100">
                        <div class="font-['Sora'] text-3xl font-bold text-[#1E4F9C] mb-1"><span class="counter" data-target="12">0</span>+</div>
                        <div class="text-sm text-slate-400 font-medium">Years Experience</div>
                    </div>
                    <div class="absolute left-[15%] bottom-[0%] w-48 sm:w-56 p-5 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl shadow-2xl transform transition-transform hover:scale-105 hover:-translate-y-2 delay-150">
                        <div class="font-['Sora'] text-3xl font-bold text-emerald-400 mb-1"><span class="counter" data-target="98">0</span>%</div>
                        <div class="text-sm text-slate-400 font-medium">Project Success Route</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="absolute bottom-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-[calc(100%+1.3px)] h-[80px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C50.28,107,100.86,118.9,151.48,110.16,207.69,100.41,263.85,73.34,321.39,56.44Z" fill="#F8FBFF"></path>
            </svg>
        </div>
    </section>

    <!-- Trusted Stack Bar -->
    <section class="bg-primary py-6 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-wrap justify-center items-center gap-6 lg:gap-12">
            <span class="text-white/80 font-semibold text-sm uppercase tracking-wider">Trusted Stack</span>
            <div class="w-px h-6 bg-white/20 hidden md:block"></div>
            <div class="flex flex-wrap justify-center gap-4 lg:gap-8">
                <span class="px-4 py-1.5 bg-white/10 rounded-full text-white text-sm font-bold border border-white/5">AWS Partner</span>
                <span class="px-4 py-1.5 bg-white/10 rounded-full text-white text-sm font-bold border border-white/5">Microsoft</span>
                <span class="px-4 py-1.5 bg-white/10 rounded-full text-white text-sm font-bold border border-white/5">Google Cloud</span>
                <span class="px-4 py-1.5 bg-white/10 rounded-full text-white text-sm font-bold border border-white/5">NVIDIA</span>
                <span class="px-4 py-1.5 bg-white/10 rounded-full text-white text-sm font-bold border border-white/5">Red Hat</span>
                <span class="px-4 py-1.5 bg-white/10 rounded-full text-white text-sm font-bold border border-white/5">VMware</span>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-20 lg:py-32 bg-[#F8FBFF]">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-20 scroll-reveal">
                <h2 class="font-['Sora'] text-4xl md:text-5xl font-extrabold text-[#0B1121] mb-6">Our Core <span class="text-primary">Services</span></h2>
                <p class="text-lg text-slate-600">Enterprise-grade solutions engineered securely, deployed optimally, and managed expertly.</p>
            </div>

            <div class="space-y-24 lg:space-y-32">
                <!-- Service 1: AI & ML (Text Left) -->
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-24 scroll-reveal">
                    <div class="lg:w-1/2">
                        <div class="font-['Sora'] text-6xl font-black text-slate-200 mb-4 opacity-50">01</div>
                        <h3 class="font-['Sora'] text-3xl font-bold text-[#0B1121] mb-6">AI & Machine Learning</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Predictive analytics and data modeling</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Natural Language Processing (NLP) solutions</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Computer Vision applications</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Custom LLM training and fine-tuning</span>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-1/2 w-full">
                        <div class="bg-[#0B1121] rounded-3xl p-10 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-gradient-to-br from-primary/20 to-transparent group-hover:scale-110 transition-transform duration-700"></div>
                            <div class="relative z-10 flex flex-col h-full min-h-[300px] justify-between">
                                <i data-lucide="brain-circuit" class="w-16 h-16 text-primary mb-8"></i>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">TensorFlow</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">PyTorch</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">OpenAI</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">scikit-learn</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Embedded Systems (Text Right) -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-24 scroll-reveal">
                    <div class="lg:w-1/2">
                        <div class="font-['Sora'] text-6xl font-black text-slate-200 mb-4 opacity-50">02</div>
                        <h3 class="font-['Sora'] text-3xl font-bold text-[#0B1121] mb-6">Embedded Systems</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Real-Time Operating Systems (RTOS)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">IoT device firmware engineering</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Industrial automation control</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Hardware-Software co-design</span>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-1/2 w-full">
                        <div class="bg-[#0B1121] rounded-3xl p-10 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-gradient-to-tr from-secondary/20 to-transparent group-hover:scale-110 transition-transform duration-700"></div>
                            <div class="relative z-10 flex flex-col h-full min-h-[300px] justify-between">
                                <i data-lucide="cpu" class="w-16 h-16 text-secondary mb-8"></i>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">C/C++</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">FreeRTOS</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">ARM</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">VHDL/Verilog</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Cloud Technologies (Text Left) -->
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-24 scroll-reveal">
                    <div class="lg:w-1/2">
                        <div class="font-['Sora'] text-6xl font-black text-slate-200 mb-4 opacity-50">03</div>
                        <h3 class="font-['Sora'] text-3xl font-bold text-[#0B1121] mb-6">Cloud Technologies</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Cloud migration and modernization</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Serverless architecture design</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Multi-cloud and hybrid implementations</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">DevOps and CI/CD pipelines</span>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-1/2 w-full">
                        <div class="bg-[#0B1121] rounded-3xl p-10 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-gradient-to-bl from-blue-500/20 to-transparent group-hover:scale-110 transition-transform duration-700"></div>
                            <div class="relative z-10 flex flex-col h-full min-h-[300px] justify-between">
                                <i data-lucide="cloud" class="w-16 h-16 text-blue-400 mb-8"></i>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">AWS</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">Azure</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">GCP</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">Kubernetes</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Cybersecurity (Text Right) -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-24 scroll-reveal">
                    <div class="lg:w-1/2">
                        <div class="font-['Sora'] text-6xl font-black text-slate-200 mb-4 opacity-50">04</div>
                        <h3 class="font-['Sora'] text-3xl font-bold text-[#0B1121] mb-6">Cybersecurity</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Vulnerability assessments and Penetration Testing</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Compliance & Regulatory audits (ISO, SOC2)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Cloud security posture management</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Zero Trust architecture planning</span>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-1/2 w-full">
                        <div class="bg-[#0B1121] rounded-3xl p-10 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-gradient-to-t from-red-500/20 to-transparent group-hover:scale-110 transition-transform duration-700"></div>
                            <div class="relative z-10 flex flex-col h-full min-h-[300px] justify-between">
                                <i data-lucide="shield-alert" class="w-16 h-16 text-red-400 mb-8"></i>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">Nessus</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">Splunk</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">Burp Suite</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">CrowdStrike</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 5: Software Development (Text Left) -->
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-24 scroll-reveal">
                    <div class="lg:w-1/2">
                        <div class="font-['Sora'] text-6xl font-black text-slate-200 mb-4 opacity-50">05</div>
                        <h3 class="font-['Sora'] text-3xl font-bold text-[#0B1121] mb-6">Software Development</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Enterprise web and mobile applications</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Microservices architecture design</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Legacy system modernization</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">API development and integrations</span>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-1/2 w-full">
                        <div class="bg-[#0B1121] rounded-3xl p-10 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/20 to-transparent group-hover:scale-110 transition-transform duration-700"></div>
                            <div class="relative z-10 flex flex-col h-full min-h-[300px] justify-between">
                                <i data-lucide="code-2" class="w-16 h-16 text-emerald-400 mb-8"></i>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">React/Next.js</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">Node/Python</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">Spring Boot</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">Go</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Service 6: IT Infrastructure (Text Right) -->
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-24 scroll-reveal">
                    <div class="lg:w-1/2">
                        <div class="font-['Sora'] text-6xl font-black text-slate-200 mb-4 opacity-50">06</div>
                        <h3 class="font-['Sora'] text-3xl font-bold text-[#0B1121] mb-6">IT Infrastructure</h3>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Datacenter network design and scaling</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Infrastructure as Code (IaC) implementation</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Disaster recovery and backup planning</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check text-secondary mt-1"></i>
                                <span class="text-slate-700">Endpoint management and MDM</span>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:w-1/2 w-full">
                        <div class="bg-[#0B1121] rounded-3xl p-10 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-gradient-to-t from-purple-500/20 to-transparent group-hover:scale-110 transition-transform duration-700"></div>
                            <div class="relative z-10 flex flex-col h-full min-h-[300px] justify-between">
                                <i data-lucide="server" class="w-16 h-16 text-purple-400 mb-8"></i>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">Terraform</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">Cisco/Aruba</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">Ansible</span>
                                    <span class="px-3 py-1 bg-white/10 border border-white/10 rounded-lg text-xs font-semibold text-slate-300">Intune</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <section class="py-16 bg-white border-y border-slate-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
                <div class="text-center scroll-reveal">
                    <div class="font-['Sora'] text-5xl font-black text-primary mb-2"><span class="counter" data-target="200">0</span>+</div>
                    <p class="text-slate-500 font-semibold uppercase tracking-widest text-sm">Clients</p>
                </div>
                <div class="text-center scroll-reveal" style="transition-delay: 100ms;">
                    <div class="font-['Sora'] text-5xl font-black text-secondary mb-2"><span class="counter" data-target="50">0</span>+</div>
                    <p class="text-slate-500 font-semibold uppercase tracking-widest text-sm">Specialists</p>
                </div>
                <div class="text-center scroll-reveal" style="transition-delay: 200ms;">
                    <div class="font-['Sora'] text-5xl font-black text-emerald-500 mb-2"><span class="counter" data-target="12">0</span>+</div>
                    <p class="text-slate-500 font-semibold uppercase tracking-widest text-sm">Years</p>
                </div>
                <div class="text-center scroll-reveal" style="transition-delay: 300ms;">
                    <div class="font-['Sora'] text-5xl font-black text-[#0B1121] mb-2"><span class="counter" data-target="98">0</span>%</div>
                    <p class="text-slate-500 font-semibold uppercase tracking-widest text-sm">Success Rate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries (Scrolling Marquee) -->
    <section class="py-20 bg-[#F8FBFF] overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-12">
            <h2 class="font-['Sora'] text-3xl font-bold text-[#0B1121]">Industries <span class="text-primary italic font-serif">We Empower</span></h2>
        </div>
        <div class="relative w-full flex overflow-x-hidden group">
            <div class="animate-marquee whitespace-nowrap flex items-center group-hover:pause">
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Banking</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Healthcare</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Manufacturing</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Education</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Government</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Retail</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Telecom</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Oil & Energy</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
            </div>
            <!-- Duplicate for infinite scroll -->
            <div class="animate-marquee whitespace-nowrap flex items-center absolute top-0 group-hover:pause" style="left: 100%;">
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Banking</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Healthcare</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Manufacturing</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Education</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Government</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Retail</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Telecom</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
                <span class="text-5xl lg:text-7xl font-['Sora'] font-extrabold text-[#0B1121]/5 mx-8">Oil & Energy</span>
                <span class="text-[#F97316] text-3xl mx-8">&middot;</span>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-16 lg:gap-24">
                <div class="lg:w-5/12 scroll-reveal">
                    <div class="bg-[#0B1121] rounded-[2.5rem] p-10 lg:p-14 shadow-2xl sticky top-32">
                        <i data-lucide="quote" class="w-12 h-12 text-primary/30 mb-8"></i>
                        <h2 class="font-['Sora'] text-4xl lg:text-5xl font-black text-white leading-tight mb-8">
                            Technology <span class="text-secondary italic font-serif font-light">Partners,</span><br>Not Just Vendors.
                        </h2>
                        <ul class="space-y-6">
                            <li class="flex items-start gap-4">
                                <div class="w-2 h-2 mt-2 rounded-full bg-secondary"></div>
                                <span class="text-slate-300 font-medium">Bespoke engineering tailored to business goals</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-2 h-2 mt-2 rounded-full bg-primary"></div>
                                <span class="text-slate-300 font-medium">Agile, transparent, and iterative delivery</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-2 h-2 mt-2 rounded-full bg-emerald-400"></div>
                                <span class="text-slate-300 font-medium">Domain expertise across multiple verticals</span>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-2 h-2 mt-2 rounded-full bg-purple-400"></div>
                                <span class="text-slate-300 font-medium">Dedicated post-deployment support layer</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="lg:w-7/12 flex flex-col justify-center space-y-16">
                    <div class="border-l-4 border-primary pl-8 scroll-reveal">
                        <i data-lucide="zap" class="w-8 h-8 text-secondary mb-4"></i>
                        <h3 class="font-['Sora'] text-2xl font-bold text-[#0B1121] mb-3">Rapid Innovation</h3>
                        <p class="text-slate-600 text-lg">We prototype fast, iterate dynamically, and deploy resilient solutions. Our agile methodology minimizes time-to-market while ensuring absolute reliability.</p>
                    </div>
                    
                    <div class="border-l-4 border-secondary pl-8 scroll-reveal">
                        <i data-lucide="lock" class="w-8 h-8 text-primary mb-4"></i>
                        <h3 class="font-['Sora'] text-2xl font-bold text-[#0B1121] mb-3">Security-First Approach</h3>
                        <p class="text-slate-600 text-lg">Security isn't an afterthought. From day one, we bake DevSecOps and Zero Trust principles into every line of code and infrastructure component we build.</p>
                    </div>
                    
                    <div class="border-l-4 border-emerald-500 pl-8 scroll-reveal">
                        <i data-lucide="users" class="w-8 h-8 text-emerald-500 mb-4"></i>
                        <h3 class="font-['Sora'] text-2xl font-bold text-[#0B1121] mb-3">Elite Talent Pool</h3>
                        <p class="text-slate-600 text-lg">Work with seasoned architects, engineers, and analysts who have solved complex scalability issues for Fortune 500 companies.</p>
                    </div>
                    
                    <div class="border-l-4 border-purple-500 pl-8 scroll-reveal">
                        <i data-lucide="infinity" class="w-8 h-8 text-purple-500 mb-4"></i>
                        <h3 class="font-['Sora'] text-2xl font-bold text-[#0B1121] mb-3">Long-Term Scalability</h3>
                        <p class="text-slate-600 text-lg">We build for tomorrow. Our architectures are cloud-native, microservices-driven, and designed to scale seamlessly as your user base grows.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="py-24 bg-[#F8FBFF]">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-20 scroll-reveal">
                <h2 class="font-['Sora'] text-4xl font-extrabold text-[#0B1121] mb-4">Our Engagement Process</h2>
                <p class="text-lg text-slate-600">A structured pipeline from concept to execution.</p>
            </div>
            
            <div class="relative max-w-5xl mx-auto scroll-reveal">
                <!-- Connecting Line -->
                <div class="absolute top-[88px] left-0 w-full h-[2px] bg-slate-200 hidden md:block"></div>
                <div class="absolute top-[88px] left-0 h-[2px] bg-secondary hidden md:block transition-all duration-1000 ease-out" id="process-line" style="width: 0%;"></div>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-6 relative z-10">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 rounded-full bg-white border-[6px] border-[#F8FBFF] shadow-xl flex items-center justify-center font-['Sora'] text-xl font-black text-primary mb-6 transition-transform hover:scale-110 z-10">1</div>
                        <h3 class="font-bold text-[#0B1121] text-lg mb-2">Discovery & Assessment</h3>
                        <p class="text-sm text-slate-500">Deep dive into requirements, architecture review, and goal alignment.</p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 rounded-full bg-white border-[6px] border-[#F8FBFF] shadow-xl flex items-center justify-center font-['Sora'] text-xl font-black text-primary mb-6 transition-transform hover:scale-110 z-10">2</div>
                        <h3 class="font-bold text-[#0B1121] text-lg mb-2">Strategy & Planning</h3>
                        <p class="text-sm text-slate-500">Technology selection, roadmap creation, and resource allocation.</p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 rounded-full bg-white border-[6px] border-[#F8FBFF] shadow-xl flex items-center justify-center font-['Sora'] text-xl font-black text-primary mb-6 transition-transform hover:scale-110 z-10">3</div>
                        <h3 class="font-bold text-[#0B1121] text-lg mb-2">Build & Deploy</h3>
                        <p class="text-sm text-slate-500">Agile development sprints, CI/CD integration, and secure deployment.</p>
                    </div>
                    <div class="flex flex-col items-center text-center">
                        <div class="w-16 h-16 rounded-full bg-white border-[6px] border-[#F8FBFF] shadow-xl flex items-center justify-center font-['Sora'] text-xl font-black text-primary mb-6 transition-transform hover:scale-110 z-10">4</div>
                        <h3 class="font-bold text-[#0B1121] text-lg mb-2">Monitor & Optimize</h3>
                        <p class="text-sm text-slate-500">Post-launch support, performance tuning, and SLA management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 bg-[#0B1121] relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: repeating-linear-gradient(45deg, #fff 0px, #fff 1px, transparent 1px, transparent 10px);"></div>
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center mb-20 scroll-reveal">
                <i data-lucide="gem" class="w-12 h-12 text-secondary mx-auto mb-6"></i>
                <h2 class="font-['Sora'] text-4xl font-extrabold text-white mb-4">Trusted by Leaders</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 divide-y md:divide-y-0 md:divide-x divide-white/10 scroll-reveal">
                <div class="pt-8 md:pt-0 pb-8 md:pb-0 px-4 md:px-8 flex flex-col justify-between">
                    <div>
                        <i class="fa-solid fa-quote-left text-4xl text-white/10 mb-6"></i>
                        <p class="text-slate-300 font-serif italic text-xl leading-relaxed mb-8">
                            "Unidemy's cloud engineering team seamlessly migrated our legacy monolith to a microservices architecture. Uptime went to 99.99% instantly."
                        </p>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg">Sarah Jenkins</h4>
                        <p class="text-secondary text-sm">CTO, Global Tech Retail</p>
                    </div>
                </div>
                
                <div class="pt-8 md:pt-0 pb-8 md:pb-0 px-4 md:px-8 flex flex-col justify-between">
                    <div>
                        <i class="fa-solid fa-quote-left text-4xl text-white/10 mb-6"></i>
                        <p class="text-slate-300 font-serif italic text-xl leading-relaxed mb-8">
                            "Their AI/ML practice developed a bespoke predictive model that saved us millions in raw material optimization. Brilliant engineers."
                        </p>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg">Marcus Chen</h4>
                        <p class="text-secondary text-sm">VP Operations, Manufacturing Inc.</p>
                    </div>
                </div>
                
                <div class="pt-8 md:pt-0 pb-8 md:pb-0 px-4 md:px-8 flex flex-col justify-between">
                    <div>
                        <i class="fa-solid fa-quote-left text-4xl text-white/10 mb-6"></i>
                        <p class="text-slate-300 font-serif italic text-xl leading-relaxed mb-8">
                            "From security audits to implementing Zero Trust, Unidemy secured our financial data platform ahead of our federal compliance audit."
                        </p>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg">Eleanor Thompson</h4>
                        <p class="text-secondary text-sm">CISO, FinTrust Solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-0 flex flex-col lg:flex-row shadow-[0_0_50px_rgba(0,0,0,0.1)] relative z-20">
        <div class="lg:w-1/2 bg-[#0B1121] p-12 lg:p-24 flex flex-col justify-center">
            <h2 class="font-['Sora'] text-4xl font-extrabold text-white mb-6">Let's Build <span class="text-secondary italic">Together</span></h2>
            <p class="text-slate-400 text-lg mb-12 max-w-md">Schedule a technical consultation with our solutions architects to discuss your enterprise requirements.</p>
            
            <div class="space-y-8">
                <div class="flex items-start gap-5">
                    <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center shrink-0 border border-white/10">
                        <i data-lucide="phone" class="w-5 h-5 text-secondary"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-1">Call Us</h4>
                        <p class="text-slate-400">+91 98765 43210</p>
                    </div>
                </div>
                <div class="flex items-start gap-5">
                    <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center shrink-0 border border-white/10">
                        <i data-lucide="mail" class="w-5 h-5 text-secondary"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-1">Email Us</h4>
                        <p class="text-slate-400">tech@unidemyglobal.com</p>
                    </div>
                </div>
                <div class="flex items-start gap-5">
                    <div class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center shrink-0 border border-white/10">
                        <i data-lucide="map-pin" class="w-5 h-5 text-secondary"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-1">HQ Address</h4>
                        <p class="text-slate-400">123, 17th Cross, HSR Layout<br>Bangalore 560102, India</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 bg-white p-12 lg:p-24 flex flex-col justify-center">
            <form class="space-y-6 max-w-lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Name</label>
                        <input type="text" class="w-full bg-slate-50 rounded-lg px-4 py-3 border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none" required>
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Email</label>
                        <input type="email" class="w-full bg-slate-50 rounded-lg px-4 py-3 border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none" required>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Company</label>
                    <input type="text" class="w-full bg-slate-50 rounded-lg px-4 py-3 border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Service Required</label>
                    <select class="w-full bg-slate-50 rounded-lg px-4 py-3 border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none appearance-none">
                        <option>AI & Machine Learning</option>
                        <option>Embedded Systems</option>
                        <option>Cloud Technologies</option>
                        <option>Cybersecurity</option>
                        <option>Software Development</option>
                        <option>IT Infrastructure</option>
                        <option>Other / Not Sure</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Message</label>
                    <textarea rows="4" class="w-full bg-slate-50 rounded-lg px-4 py-3 border border-slate-200 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none resize-none" required></textarea>
                </div>
                <button type="submit" class="w-full bg-primary hover:bg-blue-800 text-white font-bold py-4 rounded-lg transition-colors mt-4">
                    Send Message
                </button>
            </form>
        </div>
    </section>
"""

# Process nav to set active link
nav = nav.replace('href="#" class="text-slate-400 text-sm hover:text-primary transition-colors">Technology Services</a>', 'href="technology-services.html" class="text-primary font-bold text-sm">Technology Services</a>')

SCRIPT_JS = """
<style>
@keyframes marquee {
  0% { transform: translateX(0%); }
  100% { transform: translateX(-100%); }
}
.animate-marquee {
  animation: marquee 30s linear infinite;
}
.pause {
  animation-play-state: paused;
}
</style>
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Nav scroll effect
    const nav = document.getElementById('main-nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            nav.classList.add('bg-white/90', 'backdrop-blur-md', 'shadow-sm', 'border-b', 'border-gray-100');
            nav.classList.remove('bg-transparent');
        } else {
            nav.classList.remove('bg-white/90', 'backdrop-blur-md', 'shadow-sm', 'border-b', 'border-gray-100');
            nav.classList.add('bg-transparent');
        }
    });

    // Mobile menu toggle
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-overlay');
    
    if(mobileBtn && mobileMenu && mobileOverlay) {
        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            mobileOverlay.classList.toggle('hidden');
        });
        mobileOverlay.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            mobileOverlay.classList.add('hidden');
        });
    }

    // Scroll reveal
    const reveals = document.querySelectorAll('.scroll-reveal');
    const revealOnScroll = () => {
        const windowHeight = window.innerHeight;
        reveals.forEach(reveal => {
            const revealTop = reveal.getBoundingClientRect().top;
            if (revealTop < windowHeight - 50) {
                reveal.classList.add('opacity-100', 'translate-y-0');
                reveal.classList.remove('opacity-0', 'translate-y-8');
            }
        });
    };
    
    // Add initial classes to reveals
    reveals.forEach(reveal => {
        reveal.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-8');
    });
    
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Trigger once on load
    
    // Counter Animation
    const counters = document.querySelectorAll('.counter');
    const animateCounters = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const speed = 200; 
            
            const updateCount = () => {
                const count = +counter.innerText;
                const inc = target / speed;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target;
                }
            };
            
            const rect = counter.getBoundingClientRect();
            if(rect.top < window.innerHeight && counter.innerText == '0') {
               updateCount();
            }
        });
    };
    window.addEventListener('scroll', animateCounters);
    animateCounters();
    
    // Process line animation
    const processLine = document.getElementById('process-line');
    if(processLine) {
        window.addEventListener('scroll', () => {
            const rect = processLine.parentElement.getBoundingClientRect();
            if(rect.top < window.innerHeight * 0.8) {
                processLine.style.width = '100%';
            }
        });
    }

    // Scroll to top button
    const scrollToTopBtn = document.getElementById('scrollToTopContainer');
    if(scrollToTopBtn) {
        window.addEventListener('scroll', () => {
            if(window.scrollY > 400) {
                scrollToTopBtn.classList.remove('opacity-0', 'invisible', 'translate-y-4');
            } else {
                scrollToTopBtn.classList.add('opacity-0', 'invisible', 'translate-y-4');
            }
        });
    }
});
</script>
"""

# Reassemble
final_html = f"<!DOCTYPE html>\n<html lang=\"en\">\n{head}\n<body class=\"bg-[#F8FBFF] font-sans text-gray-900 scroll-smooth\">\n"
final_html += f"{nav}\n<main>\n{MAIN_CONTENT}\n</main>\n{footer_part}"

# Insert scripts before </body>
final_html = final_html.replace('</body>', f'{SCRIPT_JS}\n</body>')

with open("technology-services.html", "w", encoding="utf-8") as out:
    out.write(final_html)
print("Done writing technology-services.html")
