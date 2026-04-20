<?php
$pageTitle = 'Sign Up | Unidemy Global';
$pageDescription = 'Create your Unidemy Global account to start your global education journey.';
$base_url = '../';
include '../components/header.php';
?>

<main class="min-h-screen pt-28 pb-20 flex items-center justify-center relative overflow-hidden bg-slate-50">
    <!-- Background Decorative Elements -->
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-3xl -ml-64 -mt-64"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-3xl -mr-64 -mb-64"></div>

    <div class="relative z-10 w-full max-w-3xl px-6">
        <!-- Logo Placement -->
        <div class="flex justify-center mb-8">
            <a href="../index.php">
                <img src="../assets/images/Logo (2).png" alt="Unidemy Global" class="h-12 w-auto mix-blend-multiply drop-shadow-sm transition-transform hover:scale-105">
            </a>
        </div>

        <!-- Signup Card -->
        <div class="bg-white/90 backdrop-blur-xl border border-white/40 rounded-[40px] shadow-2xl overflow-hidden p-8 md:p-10">
            <!-- Header -->
            <div class="text-center mb-10">
                <h1 class="text-3xl font-black text-gray-900 tracking-tight mb-2">Create Account</h1>
                <p class="text-gray-500 font-medium">Join our global community today</p>
            </div>

            <!-- Form -->
            <form action="#" class="space-y-5">
                <!-- Row 1: Name -->
                <div class="space-y-2">
                    <label for="name" class="text-sm font-bold text-gray-800 ml-1">Full Name</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i data-lucide="user" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                        </div>
                        <input type="text" id="name" name="name" required
                            class="block w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                            placeholder="John Doe">
                    </div>
                </div>

                <!-- Row 2: Email and Verify Email -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="space-y-2">
                        <label for="email" class="text-sm font-bold text-gray-800 ml-1">Email Address</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i data-lucide="mail" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                            </div>
                            <input type="email" id="email" name="email" required
                                class="block w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                                placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label for="verify_email" class="text-sm font-bold text-gray-800 ml-1">Verify Email</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i data-lucide="mail-check" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                            </div>
                            <input type="email" id="verify_email" name="verify_email" required
                                class="block w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                                placeholder="name@example.com">
                        </div>
                    </div>
                </div>

                <!-- Row 3: Address (Full Width) -->
                <div class="space-y-2">
                    <label for="address" class="text-sm font-bold text-gray-800 ml-1">Residential Address</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 pt-4 items-start pointer-events-none">
                            <i data-lucide="map-pin" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                        </div>
                        <textarea id="address" name="address" required rows="2"
                            class="block w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400 resize-none"
                            placeholder="Apartment, Street, City, ZIP"></textarea>
                    </div>
                </div>

                <!-- Row 4: Password and Confirm -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="space-y-2">
                        <label for="password" class="text-sm font-bold text-gray-800 ml-1">Password</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i data-lucide="key-round" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                            </div>
                            <input type="password" id="password" name="password" required
                                class="block w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                                placeholder="••••••••">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label for="confirm_password" class="text-sm font-bold text-gray-800 ml-1">Confirm</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <i data-lucide="shield-check" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                            </div>
                            <input type="password" id="confirm_password" name="confirm_password" required
                                class="block w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                                placeholder="••••••••">
                        </div>
                    </div>
                </div>

                <!-- Terms & Submit Container -->
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 pt-2">
                    <div class="flex items-start gap-3 max-w-sm">
                        <input id="terms" name="terms" type="checkbox" required
                            class="mt-1 w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary/20 cursor-pointer transition-all shrink-0">
                        <label for="terms" class="text-xs font-bold text-gray-600 cursor-pointer select-none">
                            I agree to the <a href="../legal/terms.php" class="text-primary hover:text-blue-800 transition-colors">Terms</a> & <a href="../legal/privacy.php" class="text-primary hover:text-blue-800 transition-colors">Privacy</a>
                        </label>
                    </div>

                    <button type="submit"
                        class="md:w-64 w-full bg-secondary hover:bg-orange-600 text-white font-black py-4 rounded-2xl transition-all shadow-lg shadow-secondary/30 hover:shadow-orange-500/40 hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-2 group">
                        <span>Create Account</span>
                        <i data-lucide="sparkles" class="w-5 h-5 group-hover:rotate-12 transition-transform"></i>
                    </button>
                </div>
            </form>

            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-100"></div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center">
                <p class="text-gray-600 font-medium text-sm">
                    Already have an account? 
                    <a href="../auth/login.php" class="text-primary font-bold hover:text-blue-800 transition-colors inline-flex items-center gap-1 group">
                        Log in here
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
</main>

<script>
    lucide.createIcons();
</script>

<?php include '../components/footer.php'; ?>
