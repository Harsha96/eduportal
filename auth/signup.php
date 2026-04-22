<?php
$pageTitle = 'Sign Up | Unidemy Global';
$pageDescription = 'Create your Unidemy Global account to start your global education journey.';
$base_url = '../';
include '../components/header.php';
?>

<style>
#country-dropdown { max-height: 220px; overflow-y: auto; }
#country-dropdown::-webkit-scrollbar { width: 4px; }
#country-dropdown::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 4px; }
.otp-input { width: 52px; height: 56px; text-align: center; font-size: 1.5rem; font-weight: 800; }
.step-panel { transition: opacity 0.35s ease, transform 0.35s ease; }
.step-panel.hidden-panel { opacity: 0; pointer-events: none; position: absolute; transform: translateX(30px); }
</style>

<main class="min-h-screen pt-28 pb-20 flex items-center justify-center relative overflow-hidden bg-slate-50">
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-3xl -ml-64 -mt-64"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-3xl -mr-64 -mb-64"></div>

    <div class="relative z-10 w-full max-w-2xl px-6">
        <div class="flex justify-center mb-8">
            <a href="../index.php">
                <img src="../assets/images/Logo (2).png" alt="Unidemy Global" class="h-12 w-auto mix-blend-multiply drop-shadow-sm transition-transform hover:scale-105">
            </a>
        </div>

        <div class="bg-white/90 backdrop-blur-xl border border-white/40 rounded-[40px] shadow-2xl overflow-hidden p-8 md:p-10 relative">

            <!-- Step indicators -->
            <div class="flex items-center justify-center gap-3 mb-8">
                <div id="dot1" class="w-8 h-2 rounded-full bg-primary transition-all"></div>
                <div id="dot2" class="w-2 h-2 rounded-full bg-gray-200 transition-all"></div>
            </div>

            <!-- ===== STEP 1: Registration Form ===== -->
            <div id="step1" class="step-panel">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-black text-gray-900 tracking-tight mb-2">Create Account</h1>
                    <p class="text-gray-500 font-medium">Join our global community today</p>
                </div>

                <form id="signup-form" class="space-y-5" onsubmit="return false;">
                    <!-- Full Name -->
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

                    <!-- Email -->
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

                    <!-- Mobile Number with Country Code -->
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-800 ml-1">Mobile Number</label>
                        <div class="flex gap-2">
                            <!-- Country Picker -->
                            <div class="relative" id="country-picker">
                                <button type="button" id="country-btn"
                                    class="flex items-center gap-2 px-3 py-3.5 bg-gray-50 border border-transparent rounded-2xl text-sm font-bold text-gray-700 hover:bg-gray-100 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all whitespace-nowrap min-w-[90px]">
                                    <img id="country-flag" src="https://flagcdn.com/w20/in.png" width="24" class="rounded-sm object-cover" alt="IN">
                                    <span id="country-dial" class="text-gray-600">+91</span>
                                    <i data-lucide="chevron-down" class="w-3.5 h-3.5 text-gray-400"></i>
                                </button>
                                <!-- Dropdown -->
                                <div id="country-dropdown" class="hidden absolute left-0 top-full mt-2 w-72 bg-white rounded-2xl shadow-xl border border-gray-100 z-50 p-2">
                                    <input type="text" id="country-search" placeholder="Search country..."
                                        class="w-full px-3 py-2 text-sm bg-gray-50 border border-transparent rounded-xl outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 mb-2 placeholder:text-gray-400">
                                    <ul id="country-list" class="space-y-0.5"></ul>
                                </div>
                            </div>
                            <!-- Phone input -->
                            <div class="relative group flex-1">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i data-lucide="phone" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                                </div>
                                <input type="tel" id="mobile" name="mobile" required
                                    class="block w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                                    placeholder="98765 43210">
                                <input type="hidden" id="country_code" name="country_code" value="+91">
                            </div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label for="password" class="text-sm font-bold text-gray-800 ml-1">Password</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i data-lucide="key-round" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                                </div>
                                <input type="password" id="password" name="password" required
                                    class="block w-full pl-12 pr-12 py-3.5 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                                    placeholder="••••••••">
                                <button type="button" class="password-toggle absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-primary transition-colors" data-target="password">
                                    <i data-lucide="eye" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label for="confirm_password" class="text-sm font-bold text-gray-800 ml-1">Confirm</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i data-lucide="shield-check" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                                </div>
                                <input type="password" id="confirm_password" name="confirm_password" required
                                    class="block w-full pl-12 pr-12 py-3.5 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                                    placeholder="••••••••">
                                <button type="button" class="password-toggle absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-primary transition-colors" data-target="confirm_password">
                                    <i data-lucide="eye" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Terms -->
                    <div class="flex items-start gap-3">
                        <input id="terms" name="terms" type="checkbox" required
                            class="mt-1 w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary/20 cursor-pointer shrink-0">
                        <label for="terms" class="text-xs font-bold text-gray-600 cursor-pointer select-none">
                            I agree to the <a href="../legal/terms.php" class="text-primary hover:text-blue-800">Terms</a> &amp; <a href="../legal/privacy.php" class="text-primary hover:text-blue-800">Privacy Policy</a>
                        </label>
                    </div>

                    <!-- Error message -->
                    <p id="form-error" class="text-red-500 text-sm font-medium hidden"></p>

                    <!-- Submit -->
                    <button type="button" id="btn-send-otp"
                        class="w-full bg-secondary hover:bg-orange-600 text-white font-black py-4 rounded-2xl transition-all shadow-lg shadow-secondary/30 hover:shadow-orange-500/40 hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-2 group">
                        <span>Send OTP & Continue</span>
                        <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                    </button>

                    <!-- Social Divider -->
                    <div class="relative py-4 flex items-center gap-4">
                        <div class="flex-1 h-px bg-gray-100"></div>
                        <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">or</span>
                        <div class="flex-1 h-px bg-gray-100"></div>
                    </div>

                    <!-- Google Signup -->
                    <button type="button" 
                        class="w-full bg-white border border-gray-200 text-gray-700 font-bold py-3.5 rounded-2xl transition-all hover:bg-gray-50 hover:border-gray-300 flex items-center justify-center gap-3 group">
                        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" class="w-5 h-5" alt="Google">
                        <span>Sign up with Google</span>
                    </button>
                </form>
            </div>

            <!-- ===== STEP 2: OTP Verification ===== -->
            <div id="step2" class="step-panel hidden-panel">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="message-square-dot" class="w-8 h-8 text-primary"></i>
                    </div>
                    <h2 class="text-2xl font-black text-gray-900 tracking-tight mb-2">Verify Your Number</h2>
                    <p class="text-gray-500 font-medium text-sm">We sent a 6-digit OTP to</p>
                    <p id="otp-phone-display" class="text-primary font-bold mt-1"></p>
                </div>

                <!-- 6-digit OTP boxes -->
                <div class="flex justify-center gap-2.5 mb-6" id="otp-boxes">
                    <input type="text" maxlength="1" class="otp-input bg-gray-50 border border-transparent rounded-2xl text-gray-900 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all" inputmode="numeric">
                    <input type="text" maxlength="1" class="otp-input bg-gray-50 border border-transparent rounded-2xl text-gray-900 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all" inputmode="numeric">
                    <input type="text" maxlength="1" class="otp-input bg-gray-50 border border-transparent rounded-2xl text-gray-900 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all" inputmode="numeric">
                    <input type="text" maxlength="1" class="otp-input bg-gray-50 border border-transparent rounded-2xl text-gray-900 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all" inputmode="numeric">
                    <input type="text" maxlength="1" class="otp-input bg-gray-50 border border-transparent rounded-2xl text-gray-900 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all" inputmode="numeric">
                    <input type="text" maxlength="1" class="otp-input bg-gray-50 border border-transparent rounded-2xl text-gray-900 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all" inputmode="numeric">
                </div>

                <p id="otp-error" class="text-red-500 text-sm font-medium text-center hidden mb-4"></p>

                <!-- Resend timer -->
                <p class="text-center text-sm text-gray-500 mb-6">
                    Didn't receive it? 
                    <button id="resend-btn" type="button" class="font-bold text-primary hover:text-blue-800 transition-colors disabled:text-gray-400 disabled:cursor-not-allowed" disabled>
                        Resend OTP <span id="resend-timer">(30s)</span>
                    </button>
                </p>

                <!-- Verify & Create -->
                <button type="button" id="btn-verify-otp"
                    class="w-full bg-secondary hover:bg-orange-600 text-white font-black py-4 rounded-2xl transition-all shadow-lg shadow-secondary/30 hover:shadow-orange-500/40 hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-2 group">
                    <span>Verify &amp; Create Account</span>
                    <i data-lucide="sparkles" class="w-5 h-5 group-hover:rotate-12 transition-transform"></i>
                </button>

                <button type="button" id="btn-back"
                    class="w-full mt-3 py-3 text-sm font-bold text-gray-500 hover:text-gray-800 flex items-center justify-center gap-1 transition-colors">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to form
                </button>
            </div>

            <div class="border-t border-gray-100 mt-8 pt-6 text-center">
                <p class="text-gray-600 font-medium text-sm">
                    Already have an account?
                    <a href="../auth/login.php" class="text-primary font-bold hover:text-blue-800 transition-colors inline-flex items-center gap-1 group">
                        Log in here <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
</main>

<script>
// ── Country data ──────────────────────────────────────────────────────────────
const COUNTRIES = [
    {name:"India",flag:"🇮🇳",dial:"+91",code:"IN"},
    {name:"United States",flag:"🇺🇸",dial:"+1",code:"US"},
    {name:"United Kingdom",flag:"🇬🇧",dial:"+44",code:"GB"},
    {name:"Australia",flag:"🇦🇺",dial:"+61",code:"AU"},
    {name:"Canada",flag:"🇨🇦",dial:"+1",code:"CA"},
    {name:"Germany",flag:"🇩🇪",dial:"+49",code:"DE"},
    {name:"France",flag:"🇫🇷",dial:"+33",code:"FR"},
    {name:"UAE",flag:"🇦🇪",dial:"+971",code:"AE"},
    {name:"Saudi Arabia",flag:"🇸🇦",dial:"+966",code:"SA"},
    {name:"Singapore",flag:"🇸🇬",dial:"+65",code:"SG"},
    {name:"Japan",flag:"🇯🇵",dial:"+81",code:"JP"},
    {name:"China",flag:"🇨🇳",dial:"+86",code:"CN"},
    {name:"South Korea",flag:"🇰🇷",dial:"+82",code:"KR"},
    {name:"Brazil",flag:"🇧🇷",dial:"+55",code:"BR"},
    {name:"Mexico",flag:"🇲🇽",dial:"+52",code:"MX"},
    {name:"South Africa",flag:"🇿🇦",dial:"+27",code:"ZA"},
    {name:"New Zealand",flag:"🇳🇿",dial:"+64",code:"NZ"},
    {name:"Italy",flag:"🇮🇹",dial:"+39",code:"IT"},
    {name:"Spain",flag:"🇪🇸",dial:"+34",code:"ES"},
    {name:"Netherlands",flag:"🇳🇱",dial:"+31",code:"NL"},
    {name:"Russia",flag:"🇷🇺",dial:"+7",code:"RU"},
    {name:"Turkey",flag:"🇹🇷",dial:"+90",code:"TR"},
    {name:"Pakistan",flag:"🇵🇰",dial:"+92",code:"PK"},
    {name:"Bangladesh",flag:"🇧🇩",dial:"+880",code:"BD"},
    {name:"Sri Lanka",flag:"🇱🇰",dial:"+94",code:"LK"},
    {name:"Nepal",flag:"🇳🇵",dial:"+977",code:"NP"},
    {name:"Malaysia",flag:"🇲🇾",dial:"+60",code:"MY"},
    {name:"Indonesia",flag:"🇮🇩",dial:"+62",code:"ID"},
    {name:"Philippines",flag:"🇵🇭",dial:"+63",code:"PH"},
    {name:"Thailand",flag:"🇹🇭",dial:"+66",code:"TH"},
    {name:"Nigeria",flag:"🇳🇬",dial:"+234",code:"NG"},
    {name:"Kenya",flag:"🇰🇪",dial:"+254",code:"KE"},
    {name:"Egypt",flag:"🇪🇬",dial:"+20",code:"EG"},
    {name:"Israel",flag:"🇮🇱",dial:"+972",code:"IL"},
    {name:"Sweden",flag:"🇸🇪",dial:"+46",code:"SE"},
    {name:"Norway",flag:"🇳🇴",dial:"+47",code:"NO"},
    {name:"Denmark",flag:"🇩🇰",dial:"+45",code:"DK"},
    {name:"Finland",flag:"🇫🇮",dial:"+358",code:"FI"},
    {name:"Switzerland",flag:"🇨🇭",dial:"+41",code:"CH"},
    {name:"Poland",flag:"🇵🇱",dial:"+48",code:"PL"},
    {name:"Portugal",flag:"🇵🇹",dial:"+351",code:"PT"},
    {name:"Argentina",flag:"🇦🇷",dial:"+54",code:"AR"},
    {name:"Chile",flag:"🇨🇱",dial:"+56",code:"CL"},
    {name:"Colombia",flag:"🇨🇴",dial:"+57",code:"CO"},
    {name:"Vietnam",flag:"🇻🇳",dial:"+84",code:"VN"},
    {name:"Kuwait",flag:"🇰🇼",dial:"+965",code:"KW"},
    {name:"Qatar",flag:"🇶🇦",dial:"+974",code:"QA"},
    {name:"Bahrain",flag:"🇧🇭",dial:"+973",code:"BH"},
    {name:"Oman",flag:"🇴🇲",dial:"+968",code:"OM"},
    {name:"Jordan",flag:"🇯🇴",dial:"+962",code:"JO"},
];
COUNTRIES.sort((a,b)=>a.name.localeCompare(b.name));

let selectedCountry = COUNTRIES.find(c=>c.code==='IN');

function renderList(filter='') {
    const list = document.getElementById('country-list');
    list.innerHTML = '';
    const filtered = COUNTRIES.filter(c =>
        c.name.toLowerCase().includes(filter.toLowerCase()) ||
        c.dial.includes(filter)
    );
    filtered.forEach(c => {
        const li = document.createElement('li');
        li.className = 'flex items-center gap-3 px-3 py-2 rounded-xl cursor-pointer hover:bg-gray-50 text-sm';
        li.innerHTML = `<img src="https://flagcdn.com/w20/${c.code.toLowerCase()}.png" width="24" class="rounded-sm object-cover" alt="${c.code}"><span class="flex-1 font-medium text-gray-700">${c.name}</span><span class="text-gray-400 font-bold">${c.dial}</span>`;
        li.addEventListener('click', () => selectCountry(c));
        list.appendChild(li);
    });
}

function selectCountry(c) {
    selectedCountry = c;
    const flagImg = document.getElementById('country-flag');
    flagImg.src = `https://flagcdn.com/w20/${c.code.toLowerCase()}.png`;
    flagImg.alt = c.code;
    document.getElementById('country-dial').textContent = c.dial;
    document.getElementById('country_code').value = c.dial;
    document.getElementById('country-dropdown').classList.add('hidden');
}

// Auto-detect country via IP
fetch('https://ipapi.co/json/')
    .then(r => r.json())
    .then(data => {
        const found = COUNTRIES.find(c => c.code === data.country_code);
        if (found) selectCountry(found);
    }).catch(()=>{});

document.getElementById('country-btn').addEventListener('click', e => {
    e.stopPropagation();
    const dd = document.getElementById('country-dropdown');
    dd.classList.toggle('hidden');
    if (!dd.classList.contains('hidden')) {
        document.getElementById('country-search').focus();
        renderList();
    }
});
document.getElementById('country-search').addEventListener('input', e => renderList(e.target.value));
document.addEventListener('click', e => {
    if (!document.getElementById('country-picker').contains(e.target))
        document.getElementById('country-dropdown').classList.add('hidden');
});
renderList();

// ── Step navigation ───────────────────────────────────────────────────────────
let otpGenerated = '';

function showStep2() {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const mobile = document.getElementById('mobile').value.trim();
    const pwd = document.getElementById('password').value;
    const cpwd = document.getElementById('confirm_password').value;
    const terms = document.getElementById('terms').checked;
    const err = document.getElementById('form-error');

    if (!name || !email || !mobile) { err.textContent='Please fill in all fields.'; err.classList.remove('hidden'); return; }
    if (!/^\d{5,15}$/.test(mobile)) { err.textContent='Enter a valid mobile number.'; err.classList.remove('hidden'); return; }
    if (pwd.length < 6) { err.textContent='Password must be at least 6 characters.'; err.classList.remove('hidden'); return; }
    if (pwd !== cpwd) { err.textContent='Passwords do not match.'; err.classList.remove('hidden'); return; }
    if (!terms) { err.textContent='Please accept the Terms & Privacy Policy.'; err.classList.remove('hidden'); return; }
    err.classList.add('hidden');

    const dial = document.getElementById('country_code').value;
    document.getElementById('otp-phone-display').textContent = dial + ' ' + mobile;

    // Generate demo OTP (replace with real API call)
    otpGenerated = Math.floor(100000 + Math.random() * 900000).toString();
    console.log('Demo OTP:', otpGenerated); // Remove in production

    // Transition to step 2
    const s1 = document.getElementById('step1');
    const s2 = document.getElementById('step2');
    s1.classList.add('hidden-panel');
    setTimeout(() => {
        s1.style.display = 'none';
        s2.style.display = 'block';
        requestAnimationFrame(() => s2.classList.remove('hidden-panel'));
        startResendTimer();
        document.querySelector('#otp-boxes input').focus();
        lucide.createIcons();
    }, 350);
    document.getElementById('dot1').className = 'w-2 h-2 rounded-full bg-gray-300 transition-all';
    document.getElementById('dot2').className = 'w-8 h-2 rounded-full bg-primary transition-all';
}

document.getElementById('btn-send-otp').addEventListener('click', showStep2);

document.getElementById('btn-back').addEventListener('click', () => {
    const s1 = document.getElementById('step1');
    const s2 = document.getElementById('step2');
    s2.classList.add('hidden-panel');
    setTimeout(() => {
        s2.style.display = 'none';
        s1.style.display = 'block';
        requestAnimationFrame(() => s1.classList.remove('hidden-panel'));
    }, 350);
    document.getElementById('dot1').className = 'w-8 h-2 rounded-full bg-primary transition-all';
    document.getElementById('dot2').className = 'w-2 h-2 rounded-full bg-gray-200 transition-all';
});

// ── OTP boxes ────────────────────────────────────────────────────────────────
document.querySelectorAll('.otp-input').forEach((inp, i, arr) => {
    inp.addEventListener('input', e => {
        inp.value = inp.value.replace(/\D/,'');
        if (inp.value && i < arr.length - 1) arr[i+1].focus();
    });
    inp.addEventListener('keydown', e => {
        if (e.key === 'Backspace' && !inp.value && i > 0) arr[i-1].focus();
    });
    inp.addEventListener('paste', e => {
        const text = (e.clipboardData || window.clipboardData).getData('text').replace(/\D/g,'').slice(0,6);
        arr.forEach((b,j) => b.value = text[j] || '');
        if (text.length) arr[Math.min(text.length-1,5)].focus();
        e.preventDefault();
    });
});

document.getElementById('btn-verify-otp').addEventListener('click', () => {
    const entered = [...document.querySelectorAll('.otp-input')].map(i=>i.value).join('');
    const err = document.getElementById('otp-error');
    if (entered.length < 6) { err.textContent='Please enter the complete 6-digit OTP.'; err.classList.remove('hidden'); return; }
    if (entered !== otpGenerated) { err.textContent='Incorrect OTP. Please try again.'; err.classList.remove('hidden'); return; }
    err.classList.add('hidden');
    // TODO: Submit registration data to backend here
    alert('Account created successfully! (Connect to backend to complete registration)');
    window.location.href = '../auth/login.php';
});

// ── Resend countdown ─────────────────────────────────────────────────────────
function startResendTimer() {
    let s = 30;
    const btn = document.getElementById('resend-btn');
    const span = document.getElementById('resend-timer');
    btn.disabled = true;
    span.textContent = `(${s}s)`;
    const t = setInterval(() => {
        s--;
        span.textContent = s > 0 ? `(${s}s)` : '';
        if (s <= 0) { clearInterval(t); btn.disabled = false; }
    }, 1000);
}

document.getElementById('resend-btn').addEventListener('click', () => {
    otpGenerated = Math.floor(100000 + Math.random() * 900000).toString();
    console.log('Resent OTP:', otpGenerated);
    document.querySelectorAll('.otp-input').forEach(i => i.value = '');
    document.querySelector('#otp-boxes input').focus();
    startResendTimer();
});

// ── Password Toggle Logic ──────────────────────────────────────────────────
document.querySelectorAll('.password-toggle').forEach(btn => {
    btn.addEventListener('click', () => {
        const targetId = btn.getAttribute('data-target');
        const input = document.getElementById(targetId);
        const icon = btn.querySelector('i');

        if (input.type === 'password') {
            input.type = 'text';
            icon.setAttribute('data-lucide', 'eye-off');
        } else {
            input.type = 'password';
            icon.setAttribute('data-lucide', 'eye');
        }
        lucide.createIcons();
    });
});

lucide.createIcons();
</script>

<?php include '../components/footer.php'; ?>
