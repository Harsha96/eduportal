<?php
$pageTitle = 'Login | Unidemy Global';
$pageDescription = 'Login to your Unidemy Global account to access your courses and materials.';
include 'components/header.php';
?>

<main class="min-h-screen pt-28 pb-20 flex items-center justify-center relative overflow-hidden bg-slate-50">
    <!-- Background Decorative Elements -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-3xl -mr-64 -mt-64"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-3xl -ml-64 -mb-64"></div>

    <div class="relative z-10 w-full max-w-lg px-6">
        <!-- Logo Placement -->
        <div class="flex justify-center mb-8">
            <a href="index.php">
                <img src="assets/images/Logo (2).png" alt="Unidemy Global" class="h-12 w-auto mix-blend-multiply drop-shadow-sm transition-transform hover:scale-105">
            </a>
        </div>

        <!-- Login Card -->
        <div class="bg-white/90 backdrop-blur-xl border border-white/40 rounded-[40px] shadow-2xl overflow-hidden p-8 md:p-10">
            <!-- Header -->
            <div class="text-center mb-10">
                <h1 class="text-3xl font-black text-gray-900 tracking-tight mb-2">Welcome Back</h1>
                <p class="text-gray-500 font-medium">Please enter your details to login</p>
            </div>

            <!-- Form -->
            <form action="#" class="space-y-6">
                <!-- Email Field -->
                <div class="space-y-2">
                    <label for="email" class="text-sm font-bold text-gray-800 ml-1">Email Address</label>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i data-lucide="mail" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                        </div>
                        <input type="email" id="email" name="email" required
                            class="block w-full pl-12 pr-4 py-4 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                            placeholder="name@example.com">
                    </div>
                </div>

                <!-- Password Field -->
                <div class="space-y-2">
                    <div class="flex items-center justify-between ml-1">
                        <label for="password" class="text-sm font-bold text-gray-800">Password</label>
                        <a href="forgot-password.php" class="text-sm font-bold text-primary hover:text-blue-800 transition-colors">Forgot password?</a>
                    </div>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i data-lucide="key-round" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                        </div>
                        <input type="password" id="password" name="password" required
                            class="block w-full pl-12 pr-12 py-4 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                            placeholder="••••••••">
                        <button type="button" id="toggle-password" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-primary transition-colors">
                            <i data-lucide="eye" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center ml-1">
                    <input id="remember" name="remember" type="checkbox"
                        class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary/20 cursor-pointer transition-all">
                    <label for="remember" class="ml-2 text-sm font-bold text-gray-600 cursor-pointer select-none">Keep me logged in</label>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-secondary hover:bg-orange-600 text-white font-black py-4 rounded-2xl transition-all shadow-lg shadow-secondary/30 hover:shadow-orange-500/40 hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-2 group">
                    <span>Log In</span>
                    <i data-lucide="login" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </button>
            </form>

            <div class="relative my-10">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-100"></div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center">
                <p class="text-gray-600 font-medium">
                    Don't have an account? 
                    <a href="signup.php" class="text-primary font-bold hover:text-blue-800 transition-colors inline-flex items-center gap-1 group">
                        Sign up for free
                        <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
</main>

<script>
    lucide.createIcons();
    
    // Improved password visibility toggle
    document.getElementById('toggle-password').addEventListener('click', function() {
        const input = document.getElementById('password');
        const icon = this.querySelector('i');
        const isPassword = input.type === 'password';
        
        input.type = isPassword ? 'text' : 'password';
        icon.setAttribute('data-lucide', isPassword ? 'eye-off' : 'eye');
        lucide.createIcons();
    });
</script>

<?php include 'components/footer.php'; ?>