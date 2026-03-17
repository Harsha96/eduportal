<?php
$pageTitle = 'Terms of Service | Unidemy Global';
$pageDescription = 'Terms of Service and usage conditions for Unidemy Global.';
include 'components/header.php';
?>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-16 bg-[#0B1121] overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        <div class="max-w-4xl mx-auto px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-6 leading-tight">
                Terms of Service
            </h1>
            <p class="text-lg text-slate-400 mb-8">
                Last Updated: March 2026
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-white min-h-[50vh]">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 prose">
            <p>Welcome to Unidemy Global. By accessing or using our website, services, and educational resources, you agree to be bound by these Terms of Service. If you do not agree, please do not use our platform.</p>

            <h2>1. General Usage</h2>
            <p>Unidemy Global provides educational resources, online programs, study abroad counseling, internships, and technology services. These services are intended for personal, non-commercial educational use unless explicitly stated otherwise.</p>
            <ul>
                <li>You must provide accurate information when registering for an account.</li>
                <li>You are responsible for maintaining the confidentiality of your account credentials.</li>
                <li>Unidemy Global reserves the right to suspend or terminate accounts that violate our policies.</li>
            </ul>

            <h2>2. Intellectual Property</h2>
            <p>All content available on Unidemy Global, including text, graphics, logos, images, video lectures, notes, and PDF resources, is the intellectual property of Unidemy Global or its content suppliers. You may not reproduce, distribute, or create derivative works without explicitly written permission.</p>

            <h2>3. User-Generated Content</h2>
            <p>If you post comments, reviews, or other content on our platform (such as on our Learning Blog or community forums), you grant Unidemy Global a non-exclusive, royalty-free license to use, reproduce, and modify that content. You agree not to post material that is illegal, offensive, or infringing on the rights of others.</p>

            <h2>4. Payment and Refunds</h2>
            <p>Certain courses, counseling services, or premium materials may require payment. All fees are clearly stated at the time of purchase. Refund policies vary by program and are outlined during checkout. For any payment disputes, please contact our support team.</p>

            <h2>5. Limitation of Liability</h2>
            <p>Unidemy Global strives to provide accurate and up-to-date educational material but makes no warranties regarding the completeness or reliability of the content. We shall not be held liable for any direct, indirect, or consequential damages arising from the use of our platform.</p>

            <h2>6. Changes to Terms</h2>
            <p>We may update these Terms of Service periodically. It is your responsibility to review them. Continued use of the platform after changes have been posted constitutes your acceptance of the new terms.</p>

            <h2>7. Contact Information</h2>
            <p>If you have any questions or concerns regarding these Terms of Service, please reach out to us at <strong>admissions@unidemyglobal.com</strong>.</p>
        </div>
    </section>


<script>
        lucide.createIcons();
        
        // Mobile menu toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const overlay = document.getElementById('mobile-overlay');
        
        if(btn && menu && overlay) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                overlay.classList.toggle('hidden');
            });
            overlay.addEventListener('click', () => {
                menu.classList.add('hidden');
                overlay.classList.add('hidden');
            });
        }
    </script>
<?php include 'components/footer.php'; ?>
