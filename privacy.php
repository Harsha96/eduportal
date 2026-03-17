<?php
$pageTitle = 'Privacy Policy | Unidemy Global';
$pageDescription = 'Privacy Policy for Unidemy Global - Learn how we collect, use, and protect your data.';
include 'components/header.php';
?>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-16 bg-[#0B1121] overflow-hidden">
        <div class="absolute inset-0 bg-grid-pattern opacity-5"></div>
        <div class="max-w-4xl mx-auto px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-6 leading-tight">
                Privacy Policy
            </h1>
            <p class="text-lg text-slate-400 mb-8">
                Last Updated: March 2026
            </p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-white min-h-[50vh]">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 prose">
            <p>At Unidemy Global, we take your privacy seriously. This Privacy Policy explains how we collect, use, and protect your personal information when you use our website and services.</p>

            <h2>1. Information We Collect</h2>
            <p>We collect information that you provide to us directly when registering for an account, filling out a contact form, subscribing to our newsletter, or purchasing a course. This data may include your name, email address, phone number, and physical address.</p>
            <p>Additionally, we automatically collect certain technical data when you visit our Website, such as your IP address, browser type, and actions taken on specific web pages. We use cookies and similar tracking technologies to enhance user experiences.</p>

            <h2>2. How We Use Your Information</h2>
            <ul>
                <li><strong>To Provide Services:</strong> Fulfilling enrollment requests, delivering study materials, and managing counseling schedules.</li>
                <li><strong>To Improve Our Platform:</strong> Analyzing usage statistics to create better learning resources and software functionality.</li>
                <li><strong>To Communicate With You:</strong> Sending you updates, newsletters, marketing communications, and customer support responses.</li>
            </ul>

            <h2>3. Information Sharing and Disclosure</h2>
            <p>We do not sell your personal data to third parties. We may share information with trusted service providers who assist us in operating our website, processing payments, or delivering emails, as long as those parties agree to keep this information confidential.</p>
            <p>We may also release information when its release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property, or safety.</p>

            <h2>4. Data Security</h2>
            <p>We implement a variety of security measures to maintain the safety of your personal information when you enter, submit, or access your personal information. These include SSL encryption for data transmission and secure servers for storage. However, no absolute guarantee of secure transmission over the Internet can be provided.</p>

            <h2>5. Your Choices and Rights</h2>
            <p>If you wish to opt-out of receiving promotional communications from us, you can follow the unsubscribe instructions provided in any promotional email we send. You also have the right to request access to or deletion of the data we hold about you by contacting us directly.</p>

            <h2>6. Changes to this Privacy Policy</h2>
            <p>Unidemy Global reserves the right to make changes to this Privacy Policy at any time. Any changes will be updated directly on this page alongside a modification date. Your continued use of the website following the posting of changes will mean that you accept those changes.</p>

            <h2>7. Contact Us</h2>
            <p>If you have questions about this Privacy Policy, please contact our privacy officer at <strong>admissions@unidemyglobal.com</strong>.</p>
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
