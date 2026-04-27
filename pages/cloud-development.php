<?php
$pageTitle = 'Cloud Development | Unidemy Global';
$pageDescription = 'Unidemy Global';
$additionalHead = <<<'HEADCONTENT'
<!-- Schema.org Service Markup -->
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Cloud Development & Consulting",
    "provider": {
      "@type": "Organization",
      "name": "Unidemy Global",
      "url": "https://unidemyglobal.com"
    },
    "areaServed": "Global",
    "offers": {
      "@type": "Offer",
      "description": "Free Cloud Readiness Assessment"
    }
  }
  </script>

    <style>
        /* ===== BASE RESET & VARIABLES ===== */
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary: #0f172a;
            --accent: #06b6d4;
            --light: #f8fafc;
            --gray: #64748b;
            --success: #10b981;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --radius: 8px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: var(--secondary);
            background: #fff;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--primary);
            color: white;
            border-radius: var(--radius);
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        .section {
            padding: 40px 0;
        }

        @media (min-width: 768px) {
            .section {
                padding: 80px 0;
            }
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 1.8rem;
            margin-bottom: 16px;
            color: var(--secondary);
        }

        @media (min-width: 768px) {
            .section-title h2 {
                font-size: 2.2rem;
            }
        }

        .section-title p {
            color: var(--gray);
            max-width: 650px;
            margin: 0 auto;
        }

        /* ===== HEADER & NAV ===== */
        header {
            background: white;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .nav-links {
            display: flex;
            gap: 24px;
            align-items: center;
        }

        .nav-dropdown {
            position: relative;
        }

        .nav-dropdown>a {
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 8px 0;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            min-width: 220px;
            box-shadow: var(--shadow);
            border-radius: var(--radius);
            padding: 12px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: var(--transition);
            z-index: 100;
        }

        .nav-dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu a {
            display: block;
            padding: 10px 20px;
            font-size: 0.95rem;
        }

        .dropdown-menu a:hover {
            background: var(--light);
            color: var(--primary);
            padding-left: 24px;
        }

        .nav-actions {
            display: flex;
            gap: 12px;
        }

        .nav-actions .btn {
            padding: 10px 20px;
            font-size: 0.9rem;
        }

        .mobile-toggle {
            display: none;
            font-size: 1.5rem;
            background: none;
            border: none;
            cursor: pointer;
        }

        /* ===== BREADCRUMB ===== */
        .breadcrumb {
            background: var(--light);
            padding: 12px 0;
            font-size: 0.9rem;
            color: var(--gray);
            overflow: hidden;
        }

        .breadcrumb .container {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .breadcrumb a {
            color: var(--primary);
        }

        .breadcrumb span {
            margin: 0 6px;
        }

        /* ===== HERO SECTION ===== */
        .hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
            color: white;
            padding: 120px 0 60px;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 32px;
            opacity: 0.95;
        }

        .hero-badges {
            display: flex;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
            margin-top: 24px;
        }

        .badge {
            background: rgba(255, 255, 255, 0.15);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* ===== SERVICES GRID ===== */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
            margin-top: 40px;
        }

        .service-card {
            background: white;
            border-radius: var(--radius);
            padding: 32px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid #e2e8f0;
        }

        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.15);
            border-color: var(--primary);
        }

        .service-card .number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 16px;
        }

        .service-card h3 {
            font-size: 1.4rem;
            margin-bottom: 12px;
            color: var(--secondary);
        }

        .service-card ul {
            margin-top: 16px;
            padding-left: 20px;
        }

        .service-card li {
            margin: 8px 0;
            color: var(--gray);
            font-size: 0.95rem;
            position: relative;
            padding-left: 16px;
        }

        .service-card li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--success);
            font-weight: bold;
        }

        /* ===== TECH STACK ===== */
        .tech-stack {
            background: var(--light);
            text-align: center;
        }

        .tech-badges {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 32px;
        }

        .tech-badge {
            background: white;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 8px;
            transition: var(--transition);
            position: relative;
        }

        .tech-badge:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.15);
        }

        .tech-badge::after {
            content: attr(title);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(10px);
            background: var(--secondary);
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 0.8rem;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            pointer-events: none;
            width: max-content;
            max-width: 200px;
            text-align: center;
        }

        .tech-badge:hover::after {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        /* ===== SECURITY SECTION ===== */
        .security-section {
            background: white;
        }

        .security-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
            margin-top: 40px;
        }

        .security-item {
            text-align: center;
            padding: 24px;
        }

        .security-item .icon {
            font-size: 2.5rem;
            margin-bottom: 16px;
            color: var(--primary);
        }

        .security-item h4 {
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .security-item p {
            color: var(--gray);
            font-size: 0.95rem;
        }

        /* ===== DEVOPS & HYBRID CLOUD ===== */
        .feature-section {
            background: var(--light);
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-top: 40px;
        }

        .feature-card {
            background: white;
            padding: 28px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .feature-card h4 {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
            font-size: 1.2rem;
        }

        .feature-card ul {
            padding-left: 20px;
        }

        .feature-card li {
            margin: 6px 0;
            color: var(--gray);
            font-size: 0.95rem;
        }

        /* ===== EDUCATION TECH FOCUS ===== */
        .edtech-focus {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
            color: white;
            text-align: center;
        }

        .edtech-focus .section-title h2 {
            color: white;
        }

        .edtech-focus .section-title p {
            color: rgba(255, 255, 255, 0.9);
        }

        .edtech-benefits {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 40px;
            text-align: left;
        }

        .edtech-benefit {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: var(--radius);
            backdrop-filter: blur(10px);
        }

        .edtech-benefit h4 {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* ===== STATS & TRUST ===== */
        .stats-section {
            background: white;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 32px;
            margin-top: 40px;
        }

        .stat-item h3 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 8px;
        }

        .stat-item p {
            color: var(--gray);
            font-weight: 500;
        }

        /* ===== CTA SECTION ===== */
        .cta-section {
            background: var(--primary);
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        .cta-section h2 {
            font-size: 2rem;
            margin-bottom: 16px;
        }

        .cta-section p {
            max-width: 600px;
            margin: 0 auto 24px;
            opacity: 0.95;
        }

        .cta-section .btn {
            background: white;
            color: var(--primary);
            font-size: 1.1rem;
            padding: 14px 36px;
        }

        .cta-section .btn:hover {
            background: var(--light);
            transform: translateY(-3px);
        }

        .cta-secondary {
            display: block;
            margin-top: 16px;
            font-size: 0.95rem;
            opacity: 0.9;
            text-decoration: underline;
        }

        .cta-secondary:hover {
            opacity: 1;
        }

        /* ===== FAQ ===== */
        .faq-section {
            background: var(--light);
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background: white;
            border-radius: var(--radius);
            margin-bottom: 16px;
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .faq-question {
            padding: 20px 24px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }

        .faq-question:hover {
            background: var(--light);
        }

        .faq-question::after {
            content: "+";
            font-size: 1.5rem;
            color: var(--primary);
        }

        .faq-item.active .faq-question::after {
            content: "−";
        }

        .faq-answer {
            padding: 0 24px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
            color: var(--gray);
        }

        .faq-item.active .faq-answer {
            padding: 0 24px 20px;
            max-height: 500px;
        }

        /* ===== FOOTER ===== */
        footer {
            background: var(--secondary);
            color: rgba(255, 255, 255, 0.85);
            padding: 60px 0 24px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 32px;
            margin-bottom: 40px;
        }

        .footer-col h4 {
            color: white;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .footer-col ul li {
            margin: 10px 0;
        }

        .footer-col a:hover {
            color: var(--accent);
            padding-left: 4px;
        }

        .footer-contact p {
            margin: 10px 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
        }

        .footer-bottom a {
            margin: 0 8px;
            color: var(--accent);
        }

        /* ===== UTILITIES ===== */
        .text-center {
            text-align: center;
        }

        .mb-2 {
            margin-bottom: 16px;
        }

        .mb-4 {
            margin-bottom: 32px;
        }

        .mt-4 {
            margin-top: 32px;
        }

        .hidden {
            display: none;
        }

        /* ===== RESPONSIVE ===== */
        @media (min-width: 768px) {
            .hero {
                padding: 160px 0 100px;
            }
            .hero h1 {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 992px) {

            .nav-links {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 70px);
                background: white;
                flex-direction: column;
                padding: 32px;
                transition: var(--transition);
                overflow-y: auto;
            }

            .nav-links.active {
                left: 0;
            }

            .nav-dropdown .dropdown-menu {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                padding: 0;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
            }

            .nav-dropdown.active .dropdown-menu {
                max-height: 500px;
            }

            .mobile-toggle {
                display: block;
            }

            .nav-actions {
                position: fixed;
                bottom: 24px;
                left: 50%;
                transform: translateX(-50%);
                width: calc(100% - 40px);
                justify-content: center;
                z-index: 1001;
            }
        }

        @media (max-width: 600px) {
            .hero {
                padding: 70px 0;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .section {
                padding: 60px 0;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }

            .btn {
                width: 100%;
                text-align: center;
            }

            .nav-actions {
                flex-direction: column;
                width: calc(100% - 32px);
                bottom: 16px;
            }

            .nav-actions .btn {
                width: 100%;
            }
        }
    </style>
HEADCONTENT;
$base_url = '../';
include '../components/header.php';
?>
    <!-- ===== BREADCRUMB ===== -->
    <div class="breadcrumb">
        <div class="container">
            <a href="../index.php">Home</a>
            <span>/</span>
            <a href="../pages/technology-services.php">Technology Services</a>
            <span>/</span>
            <span>Cloud Development</span>
        </div>
    </div>

    <!-- ===== HERO SECTION ===== -->
    <section class="hero">
        <div class="container">
            <h1>Build, Migrate, Scale —<br>Confidently in the Cloud</h1>
            <p>End-to-end cloud strategies that turn infrastructure into your competitive advantage — with zero
                downtime, maximum security, and cost intelligence built-in.</p>
            <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
                <a href="#contact" class="btn">Get Free Cloud Assessment</a>
                <a href="#services" class="btn btn-outline"
                    style="background:transparent;border-color:white;color:white">Explore Services</a>
            </div>

            <div class="hero-badges">
                <span class="badge">✓ AWS Partner</span>
                <span class="badge">✓ Azure Certified</span>
                <span class="badge">✓ GCP Specialist</span>
                <span class="badge">✓ ISO 27001 Compliant</span>
            </div>
        </div>
    </section>

    <!-- ===== CORE SERVICES ===== -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Cloud Solutions Engineered for Impact</h2>
                <p>We don't just move workloads — we future-proof your technology foundation with strategies built for
                    scale, security, and sustainability.</p>
            </div>

            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <span class="number">1</span>
                    <h3>Cloud Strategy & Architecture</h3>
                    <p>Start with clarity. We assess your current state and design a roadmap aligned to your business
                        goals.</p>
                    <ul>
                        <li>Cloud readiness & TCO modeling</li>
                        <li>Multi-cloud governance frameworks</li>
                        <li>Compliance-by-design roadmaps (GDPR, FERPA)</li>
                        <li>ROI forecasting & risk mitigation</li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="service-card">
                    <span class="number">2</span>
                    <h3>Seamless Migration & Modernization</h3>
                    <p>We retire technical debt, not downtime. Your legacy apps get a cloud-native upgrade — with safety
                        nets.</p>
                    <ul>
                        <li>Lift-and-shift, re-platform, or refactor pathways</li>
                        <li>Automated migration pipelines with rollback</li>
                        <li>Zero-downtime cutover protocols</li>
                        <li>Post-migration optimization sprints</li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="service-card">
                    <span class="number">3</span>
                    <h3>Cloud-Native & Serverless Engineering</h3>
                    <p>Build for tomorrow, today. Scalable, resilient applications designed for the cloud era.</p>
                    <ul>
                        <li>Container orchestration (K8s, ECS, AKS)</li>
                        <li>Event-driven & serverless architectures</li>
                        <li>Infrastructure-as-Code (Terraform, CDK)</li>
                        <li>Observability & FinOps integration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TECH STACK ===== -->
    <section class="section tech-stack">
        <div class="container">
            <div class="section-title">
                <h2>Technologies We Leverage</h2>
                <p>Vendor-agnostic expertise with deep specialization in leading cloud platforms and DevOps tools.</p>
            </div>

            <div class="tech-badges">
                <span class="tech-badge" title="Amazon Web Services: EC2, S3, Lambda, EKS">☁️ AWS</span>
                <span class="tech-badge" title="Microsoft Azure: VMs, Functions, AKS, DevOps">🪟 Azure</span>
                <span class="tech-badge" title="Google Cloud Platform: GKE, Cloud Run, BigQuery">🔷 GCP</span>
                <span class="tech-badge" title="Kubernetes: Container orchestration & management">⚙️ Kubernetes</span>
                <span class="tech-badge" title="Terraform: Infrastructure as Code for multi-cloud">🏗️ Terraform</span>
                <span class="tech-badge" title="Docker: Containerization for consistent deployments">🐳 Docker</span>
                <span class="tech-badge" title="Prometheus/Grafana: Monitoring & observability">📊 Observability</span>
            </div>
        </div>
    </section>

    <!-- ===== SECURITY SECTION ===== -->
    <section class="section security-section">
        <div class="container">
            <div class="section-title">
                <h2>Security-First Cloud Architecture</h2>
                <p>Protect what matters — without slowing innovation. Security isn't a layer; it's woven into every
                    decision.</p>
            </div>

            <div class="security-grid">
                <div class="security-item">
                    <div class="icon">🔐</div>
                    <h4>Identity & Access Mgmt</h4>
                    <p>Granular IAM policies, MFA enforcement, and least-privilege access design.</p>
                </div>
                <div class="security-item">
                    <div class="icon">🔒</div>
                    <h4>Encryption Everywhere</h4>
                    <p>Data encrypted at rest & in transit with managed key rotation & HSM integration.</p>
                </div>
                <div class="security-item">
                    <div class="icon">📋</div>
                    <h4>Compliance Alignment</h4>
                    <p>Frameworks for HIPAA, PCI-DSS, ISO 27001, GDPR, and FERPA (for edtech).</p>
                </div>
                <div class="security-item">
                    <div class="icon">🛡️</div>
                    <h4>Threat Monitoring</h4>
                    <p>24/7 automated detection, alerting, and remediation with SIEM integration.</p>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="#contact" class="btn">Get a Security Assessment →</a>
            </div>
        </div>
    </section>

    <!-- ===== DEVOPS & HYBRID CLOUD ===== -->
    <section class="section feature-section">
        <div class="container">
            <div class="section-title">
                <h2>Accelerate Delivery & Manage Complexity</h2>
                <p>From CI/CD pipelines to hybrid cloud control planes — we help you move faster with confidence.</p>
            </div>

            <div class="feature-grid">
                <div class="feature-card">
                    <h4>⚡ DevOps & Platform Engineering</h4>
                    <ul>
                        <li>CI/CD pipeline design (GitHub Actions, GitLab CI, Jenkins)</li>
                        <li>GitOps workflows & Infrastructure as Code</li>
                        <li>Centralized logging, metrics & AIOps</li>
                        <li>Developer self-service portals</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <h4>🌐 Hybrid & Multi-Cloud Management</h4>
                    <ul>
                        <li>Unified control plane for AWS/Azure/GCP + on-prem</li>
                        <li>Workload placement intelligence & cost optimization</li>
                        <li>Vendor lock-in avoidance with portable architectures</li>
                        <li>Centralized billing, tagging & chargeback models</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <h4>♻️ Disaster Recovery & Continuity</h4>
                    <ul>
                        <li>RTO/RPO-aligned DR strategies (pilot light, warm standby)</li>
                        <li>Geo-redundant backups with automated testing</li>
                        <li>Failover runbooks & chaos engineering practices</li>
                        <li>Cost-optimized cold/warm/hot DR tiers</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== EDTECH FOCUS ===== -->
    <section class="section edtech-focus">
        <div class="container">
            <div class="section-title">
                <h2>Built for Education Technology</h2>
                <p>We understand the unique demands of edtech: student privacy, exam-season scale, and learning
                    analytics.</p>
            </div>

            <div class="edtech-benefits">
                <div class="edtech-benefit">
                    <h4>🎓 Privacy by Design</h4>
                    <p>FERPA/GDPR-aligned data handling with student PII protection at every layer.</p>
                </div>
                <div class="edtech-benefit">
                    <h4>📈 Elastic Exam Scaling</h4>
                    <p>Auto-scaling architecture that handles 10x traffic spikes during test windows — no downtime.</p>
                </div>
                <div class="edtech-benefit">
                    <h4>🔗 LMS Integration Ready</h4>
                    <p>Seamless connectors for Moodle, Canvas, Blackboard, and custom platforms.</p>
                </div>
                <div class="edtech-benefit">
                    <h4>📊 Analytics-Ready Pipelines</h4>
                    <p>Structured data flows for learning insights, predictive modeling, and outcome tracking.</p>
                </div>
            </div>

            <div class="mt-4">
                <p style="font-style:italic;opacity:0.95;">"After migrating their student analytics platform to a
                    serverless architecture, a Unidemy client reduced latency by 60% and cut monthly cloud spend by
                    ₹2.1L — while scaling to 50K concurrent users during exam season."</p>
            </div>
        </div>
    </section>

    <!-- ===== STATS ===== -->
    <section class="section stats-section">
        <div class="container">
            <div class="section-title">
                <h2>Trusted by Innovators</h2>
                <p>Real results from cloud transformations we've delivered.</p>
            </div>

            <div class="stats-grid">
                <div class="stat-item">
                    <h3>120+</h3>
                    <p>Cloud Projects Delivered</p>
                </div>
                <div class="stat-item">
                    <h3>99.95%</h3>
                    <p>Migration Success Rate</p>
                </div>
                <div class="stat-item">
                    <h3>37%</h3>
                    <p>Avg. Cost Reduction Post-Optimization</p>
                </div>
                <div class="stat-item">
                    <h3>15+</h3>
                    <p>Certified Cloud Specialties</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA SECTION ===== -->
    <section class="cta-section" id="contact">
        <div class="container">
            <h2>Ready to Transform Your Cloud Strategy?</h2>
            <p>Get a free, no-obligation Cloud Readiness Assessment — including architecture review, cost analysis, and
                a 90-day roadmap.</p>
            <a href="contact.php" class="btn">Schedule Your Free Assessment</a>
            <a href="#" class="cta-secondary" id="downloadChecklist">📥 Download our Cloud Migration Checklist (PDF)</a>
        </div>
    </section>

    <!-- ===== FAQ SECTION ===== -->
    <section class="section faq-section">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Clarity before commitment. Here are answers to common questions about our cloud services.</p>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">How long does a typical cloud migration take?</div>
                    <div class="faq-answer">
                        <p>Timelines vary by complexity: a simple lift-and-shift may take 4-8 weeks, while a full
                            refactor with cloud-native services can take 3-6 months. We provide a detailed project plan
                            during the assessment phase with clear milestones and rollback safeguards.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">What happens if something breaks during cutover?</div>
                    <div class="faq-answer">
                        <p>We implement phased rollouts with automated health checks and instant rollback capabilities.
                            Every migration includes a pre-cutover dry run in a staging environment, and our engineers
                            remain on standby during go-live for immediate resolution.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">Can you work with our existing IT team?</div>
                    <div class="faq-answer">
                        <p>Absolutely. We believe in partnership, not replacement. Our engagement models include
                            knowledge transfer sessions, joint architecture reviews, and upskilling workshops to ensure
                            your team gains cloud expertise throughout the project.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">How do you handle data residency requirements?</div>
                    <div class="faq-answer">
                        <p>We design architectures that respect data sovereignty laws by leveraging region-specific
                            cloud zones, encryption key management, and compliance-aware data routing. For edtech
                            clients, we ensure student data never leaves approved jurisdictions without explicit
                            consent.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<script>
        lucide.createIcons();
        
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                const isActive = item.classList.contains('active');
                document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
                if (!isActive) item.classList.add('active');
            });
        });
    </script>

<script>
        window.addEventListener('scroll', () => {
            const scrollToTop = document.getElementById('scrollToTopContainer');
            if (window.scrollY > 300) {
                scrollToTop.classList.remove('opacity-0', 'invisible', 'translate-y-4');
                scrollToTop.classList.add('opacity-100', 'visible', 'translate-y-0');
            } else {
                scrollToTop.classList.add('opacity-0', 'invisible', 'translate-y-4');
                scrollToTop.classList.remove('opacity-100', 'visible', 'translate-y-0');
            }
        });
    </script>
<?php include '../components/footer.php'; ?>
