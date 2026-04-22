<?php
$pageTitle = 'Login | Unidemy Global';
$pageDescription = 'Login to your Unidemy Global account.';
$base_url = '../';
include '../components/header.php';
?>

<style>
#login-country-dropdown { max-height: 220px; overflow-y: auto; }
#login-country-dropdown::-webkit-scrollbar { width: 4px; }
#login-country-dropdown::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 4px; }
.otp-input { width: 48px; height: 52px; text-align: center; font-size: 1.4rem; font-weight: 800; }
.fade-slide { transition: opacity 0.3s ease, transform 0.3s ease; }
.fade-slide.out { opacity: 0; transform: translateX(20px); pointer-events: none; }
</style>

<main class="min-h-screen pt-28 pb-20 flex items-center justify-center relative overflow-hidden bg-slate-50">
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-3xl -mr-64 -mt-64"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-secondary/10 rounded-full blur-3xl -ml-64 -mb-64"></div>

    <div class="relative z-10 w-full max-w-lg px-6">
        <div class="flex justify-center mb-8">
            <a href="../index.php">
                <img src="../assets/images/Logo (2).png" alt="Unidemy Global" class="h-12 w-auto mix-blend-multiply drop-shadow-sm transition-transform hover:scale-105">
            </a>
        </div>

        <div class="bg-white/90 backdrop-blur-xl border border-white/40 rounded-[40px] shadow-2xl p-8 md:p-10 relative overflow-hidden">

            <!-- Step dots -->
            <div id="step-dots" class="flex items-center justify-center gap-3 mb-8">
                <div id="ldot1" class="w-8 h-2 rounded-full bg-primary transition-all"></div>
                <div id="ldot2" class="w-2 h-2 rounded-full bg-gray-200 transition-all"></div>
            </div>

            <!-- ===== STEP 1: Login Form ===== -->
            <div id="lstep1" class="fade-slide">
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-black text-gray-900 tracking-tight mb-2">Welcome Back</h1>
                    <p class="text-gray-500 font-medium">Please enter your details to login</p>
                </div>

                <!-- Tab Toggle -->
                <div class="flex items-center gap-2 bg-gray-100 p-1 rounded-2xl mb-6">
                    <button type="button" id="tab-email"
                        class="flex-1 flex items-center justify-center gap-2 py-2.5 rounded-xl text-sm font-bold transition-all bg-white text-primary shadow-sm">
                        <i data-lucide="mail" class="w-4 h-4"></i> Email
                    </button>
                    <button type="button" id="tab-mobile"
                        class="flex-1 flex items-center justify-center gap-2 py-2.5 rounded-xl text-sm font-bold transition-all text-gray-500 hover:text-gray-700">
                        <i data-lucide="smartphone" class="w-4 h-4"></i> Mobile
                    </button>
                </div>

                <form id="login-form" class="space-y-5" onsubmit="return false;">
                    <!-- Email panel -->
                    <div id="panel-email" class="space-y-5">
                        <div class="space-y-2">
                            <label for="login-email" class="text-sm font-bold text-gray-800 ml-1">Email Address</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i data-lucide="mail" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                                </div>
                                <input type="email" id="login-email" name="email"
                                    class="block w-full pl-12 pr-4 py-4 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                                    placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between ml-1">
                                <label for="login-password" class="text-sm font-bold text-gray-800">Password</label>
                                <a href="../auth/forgot-password.php" class="text-sm font-bold text-primary hover:text-blue-800 transition-colors">Forgot password?</a>
                            </div>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <i data-lucide="key-round" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                                </div>
                                <input type="password" id="login-password" name="password"
                                    class="block w-full pl-12 pr-12 py-4 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                                    placeholder="••••••••">
                                <button type="button" id="toggle-password" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-primary transition-colors">
                                    <i data-lucide="eye" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center ml-1">
                            <input id="remember" name="remember" type="checkbox" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary/20 cursor-pointer">
                            <label for="remember" class="ml-2 text-sm font-bold text-gray-600 cursor-pointer select-none">Keep me logged in</label>
                        </div>
                        <p id="email-error" class="text-red-500 text-sm font-medium hidden"></p>
                        <button type="button" id="btn-email-login"
                            class="w-full bg-secondary hover:bg-orange-600 text-white font-black py-4 rounded-2xl transition-all shadow-lg shadow-secondary/30 hover:shadow-orange-500/40 hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-2 group">
                            <span>Log In</span>
                            <i data-lucide="log-in" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                    </div>

                    <!-- Mobile panel -->
                    <div id="panel-mobile" class="space-y-5 hidden">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-800 ml-1">Mobile Number</label>
                            <div class="flex gap-2">
                                <!-- Country picker -->
                                <div class="relative" id="login-country-picker">
                                    <button type="button" id="login-country-btn"
                                        class="flex items-center gap-2 px-3 py-4 bg-gray-50 border border-transparent rounded-2xl text-sm font-bold text-gray-700 hover:bg-gray-100 focus:bg-white focus:border-primary outline-none transition-all whitespace-nowrap min-w-[90px]">
                                        <img id="login-flag" src="https://flagcdn.com/w20/in.png" width="24" class="rounded-sm object-cover" alt="IN">
                                        <span id="login-dial" class="text-gray-600">+91</span>
                                        <i data-lucide="chevron-down" class="w-3 h-3 text-gray-400"></i>
                                    </button>
                                    <div id="login-country-dropdown" class="hidden absolute left-0 top-full mt-2 w-72 bg-white rounded-2xl shadow-xl border border-gray-100 z-50 p-2">
                                        <input type="text" id="login-country-search" placeholder="Search..."
                                            class="w-full px-3 py-2 text-sm bg-gray-50 rounded-xl outline-none focus:border-primary mb-2 placeholder:text-gray-400 border border-transparent">
                                        <ul id="login-country-list" class="space-y-0.5"></ul>
                                    </div>
                                </div>
                                <div class="relative group flex-1">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i data-lucide="phone" class="w-5 h-5 text-gray-400 group-focus-within:text-primary transition-colors"></i>
                                    </div>
                                    <input type="tel" id="login-mobile" name="mobile"
                                        class="block w-full pl-12 pr-4 py-4 bg-gray-50 border border-transparent rounded-2xl text-gray-900 text-sm focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all placeholder:text-gray-400"
                                        placeholder="98765 43210">
                                    <input type="hidden" id="login-country-code" value="+91">
                                </div>
                            </div>
                        </div>
                        <p id="mobile-error" class="text-red-500 text-sm font-medium hidden"></p>
                        <button type="button" id="btn-send-login-otp"
                            class="w-full bg-secondary hover:bg-orange-600 text-white font-black py-4 rounded-2xl transition-all shadow-lg shadow-secondary/30 hover:shadow-orange-500/40 hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-2 group">
                            <span>Send OTP</span>
                            <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                    </div>
                </form>

                <!-- Social Divider -->
                <div class="relative py-4 flex items-center gap-4">
                    <div class="flex-1 h-px bg-gray-100"></div>
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">or</span>
                    <div class="flex-1 h-px bg-gray-100"></div>
                </div>

                <!-- Google Login -->
                <button type="button" 
                    class="w-full bg-white border border-gray-200 text-gray-700 font-bold py-3.5 rounded-2xl transition-all hover:bg-gray-50 hover:border-gray-300 flex items-center justify-center gap-3 group">
                    <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" class="w-5 h-5" alt="Google">
                    <span>Sign in with Google</span>
                </button>
            </div>

            <!-- ===== STEP 2: OTP Verification (Mobile login) ===== -->
            <div id="lstep2" class="fade-slide out" style="display:none;">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="message-square-dot" class="w-8 h-8 text-primary"></i>
                    </div>
                    <h2 class="text-2xl font-black text-gray-900 mb-2">Enter OTP</h2>
                    <p class="text-gray-500 text-sm">Code sent to <span id="lotp-phone" class="text-primary font-bold"></span></p>
                </div>

                <div class="flex justify-center gap-2.5 mb-6">
                    <input type="text" maxlength="1" class="otp-input bg-gray-50 border border-transparent rounded-2xl text-gray-900 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all" inputmode="numeric">
                    <input type="text" maxlength="1" class="otp-input bg-gray-50 border border-transparent rounded-2xl text-gray-900 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all" inputmode="numeric">
                    <input type="text" maxlength="1" class="otp-input bg-gray-50 border border-transparent rounded-2xl text-gray-900 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all" inputmode="numeric">
                    <input type="text" maxlength="1" class="otp-input bg-gray-50 border border-transparent rounded-2xl text-gray-900 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all" inputmode="numeric">
                    <input type="text" maxlength="1" class="otp-input bg-gray-50 border border-transparent rounded-2xl text-gray-900 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all" inputmode="numeric">
                    <input type="text" maxlength="1" class="otp-input bg-gray-50 border border-transparent rounded-2xl text-gray-900 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 outline-none transition-all" inputmode="numeric">
                </div>

                <p id="lotp-error" class="text-red-500 text-sm font-medium text-center hidden mb-4"></p>

                <p class="text-center text-sm text-gray-500 mb-6">
                    Didn't receive it?
                    <button id="lresend-btn" type="button" class="font-bold text-primary hover:text-blue-800 transition-colors" disabled>
                        Resend <span id="lresend-timer">(30s)</span>
                    </button>
                </p>

                <button type="button" id="btn-verify-login-otp"
                    class="w-full bg-secondary hover:bg-orange-600 text-white font-black py-4 rounded-2xl transition-all shadow-lg shadow-secondary/30 hover:scale-[1.02] active:scale-95 flex items-center justify-center gap-2 group">
                    <span>Verify &amp; Log In</span>
                    <i data-lucide="log-in" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </button>

                <button type="button" id="btn-login-back"
                    class="w-full mt-3 py-3 text-sm font-bold text-gray-500 hover:text-gray-800 flex items-center justify-center gap-1 transition-colors">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> Back
                </button>
            </div>

            <div class="border-t border-gray-100 mt-8 pt-6 text-center">
                <p class="text-gray-600 font-medium">
                    Don't have an account?
                    <a href="../auth/signup.php" class="text-primary font-bold hover:text-blue-800 transition-colors inline-flex items-center gap-1 group">
                        Sign up for free <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
</main>

<script>
// ── Shared country data ───────────────────────────────────────────────────────
const COUNTRIES = [
    {name:"India",flag:"🇮🇳",dial:"+91",code:"IN"},{name:"United States",flag:"🇺🇸",dial:"+1",code:"US"},
    {name:"United Kingdom",flag:"🇬🇧",dial:"+44",code:"GB"},{name:"Australia",flag:"🇦🇺",dial:"+61",code:"AU"},
    {name:"Canada",flag:"🇨🇦",dial:"+1",code:"CA"},{name:"Germany",flag:"🇩🇪",dial:"+49",code:"DE"},
    {name:"France",flag:"🇫🇷",dial:"+33",code:"FR"},{name:"UAE",flag:"🇦🇪",dial:"+971",code:"AE"},
    {name:"Saudi Arabia",flag:"🇸🇦",dial:"+966",code:"SA"},{name:"Singapore",flag:"🇸🇬",dial:"+65",code:"SG"},
    {name:"Japan",flag:"🇯🇵",dial:"+81",code:"JP"},{name:"China",flag:"🇨🇳",dial:"+86",code:"CN"},
    {name:"South Korea",flag:"🇰🇷",dial:"+82",code:"KR"},{name:"Brazil",flag:"🇧🇷",dial:"+55",code:"BR"},
    {name:"Mexico",flag:"🇲🇽",dial:"+52",code:"MX"},{name:"South Africa",flag:"🇿🇦",dial:"+27",code:"ZA"},
    {name:"Italy",flag:"🇮🇹",dial:"+39",code:"IT"},{name:"Spain",flag:"🇪🇸",dial:"+34",code:"ES"},
    {name:"Netherlands",flag:"🇳🇱",dial:"+31",code:"NL"},{name:"Russia",flag:"🇷🇺",dial:"+7",code:"RU"},
    {name:"Turkey",flag:"🇹🇷",dial:"+90",code:"TR"},{name:"Pakistan",flag:"🇵🇰",dial:"+92",code:"PK"},
    {name:"Bangladesh",flag:"🇧🇩",dial:"+880",code:"BD"},{name:"Sri Lanka",flag:"🇱🇰",dial:"+94",code:"LK"},
    {name:"Nepal",flag:"🇳🇵",dial:"+977",code:"NP"},{name:"Malaysia",flag:"🇲🇾",dial:"+60",code:"MY"},
    {name:"Indonesia",flag:"🇮🇩",dial:"+62",code:"ID"},{name:"Philippines",flag:"🇵🇭",dial:"+63",code:"PH"},
    {name:"Thailand",flag:"🇹🇭",dial:"+66",code:"TH"},{name:"Nigeria",flag:"🇳🇬",dial:"+234",code:"NG"},
    {name:"Kenya",flag:"🇰🇪",dial:"+254",code:"KE"},{name:"Egypt",flag:"🇪🇬",dial:"+20",code:"EG"},
    {name:"Kuwait",flag:"🇰🇼",dial:"+965",code:"KW"},{name:"Qatar",flag:"🇶🇦",dial:"+974",code:"QA"},
    {name:"Bahrain",flag:"🇧🇭",dial:"+973",code:"BH"},{name:"Oman",flag:"🇴🇲",dial:"+968",code:"OM"},
    {name:"Sweden",flag:"🇸🇪",dial:"+46",code:"SE"},{name:"Norway",flag:"🇳🇴",dial:"+47",code:"NO"},
    {name:"New Zealand",flag:"🇳🇿",dial:"+64",code:"NZ"},{name:"Vietnam",flag:"🇻🇳",dial:"+84",code:"VN"},
].sort((a,b)=>a.name.localeCompare(b.name));

let loginCountry = COUNTRIES.find(c=>c.code==='IN');

function buildList(listEl, searchEl, flagEl, dialEl, codeEl) {
    const render = (q='') => {
        listEl.innerHTML='';
        COUNTRIES.filter(c=>c.name.toLowerCase().includes(q.toLowerCase())||c.dial.includes(q))
        .forEach(c=>{
            const li=document.createElement('li');
            li.className='flex items-center gap-3 px-3 py-2 rounded-xl cursor-pointer hover:bg-gray-50 text-sm';
            li.innerHTML=`<img src="https://flagcdn.com/w20/${c.code.toLowerCase()}.png" width="24" class="rounded-sm object-cover" alt="${c.code}"><span class="flex-1 font-medium text-gray-700">${c.name}</span><span class="text-gray-400 font-bold">${c.dial}</span>`;
            li.addEventListener('click',()=>{
                flagEl.src=`https://flagcdn.com/w20/${c.code.toLowerCase()}.png`;
                flagEl.alt=c.code;
                dialEl.textContent=c.dial; codeEl.value=c.dial;
                listEl.closest('[id$="-dropdown"]').classList.add('hidden');
                loginCountry=c;
            });
            listEl.appendChild(li);
        });
    };
    render();
    searchEl.addEventListener('input',e=>render(e.target.value));
}

buildList(
    document.getElementById('login-country-list'),
    document.getElementById('login-country-search'),
    document.getElementById('login-flag'),
    document.getElementById('login-dial'),
    document.getElementById('login-country-code')
);

document.getElementById('login-country-btn').addEventListener('click', e=>{
    e.stopPropagation();
    const dd=document.getElementById('login-country-dropdown');
    dd.classList.toggle('hidden');
    if(!dd.classList.contains('hidden')) document.getElementById('login-country-search').focus();
});
document.addEventListener('click', e=>{
    if(!document.getElementById('login-country-picker').contains(e.target))
        document.getElementById('login-country-dropdown').classList.add('hidden');
});

// Auto-detect
fetch('https://ipapi.co/json/').then(r=>r.json()).then(d=>{
    const f=COUNTRIES.find(c=>c.code===d.country_code);
    if(f){ document.getElementById('login-flag').textContent=f.flag; document.getElementById('login-dial').textContent=f.dial; document.getElementById('login-country-code').value=f.dial; loginCountry=f; }
}).catch(()=>{});

// ── Tab toggle ────────────────────────────────────────────────────────────────
document.getElementById('tab-email').addEventListener('click',()=>{
    document.getElementById('tab-email').classList.add('bg-white','text-primary','shadow-sm');
    document.getElementById('tab-email').classList.remove('text-gray-500');
    document.getElementById('tab-mobile').classList.remove('bg-white','text-primary','shadow-sm');
    document.getElementById('tab-mobile').classList.add('text-gray-500');
    document.getElementById('panel-email').classList.remove('hidden');
    document.getElementById('panel-mobile').classList.add('hidden');
});
document.getElementById('tab-mobile').addEventListener('click',()=>{
    document.getElementById('tab-mobile').classList.add('bg-white','text-primary','shadow-sm');
    document.getElementById('tab-mobile').classList.remove('text-gray-500');
    document.getElementById('tab-email').classList.remove('bg-white','text-primary','shadow-sm');
    document.getElementById('tab-email').classList.add('text-gray-500');
    document.getElementById('panel-mobile').classList.remove('hidden');
    document.getElementById('panel-email').classList.add('hidden');
});

// ── Password toggle ───────────────────────────────────────────────────────────
document.getElementById('toggle-password').addEventListener('click', function(){
    const inp=document.getElementById('login-password');
    const icon=this.querySelector('i');
    const isPwd=inp.type==='password';
    inp.type=isPwd?'text':'password';
    icon.setAttribute('data-lucide',isPwd?'eye-off':'eye');
    lucide.createIcons();
});

// ── Email login ───────────────────────────────────────────────────────────────
document.getElementById('btn-email-login').addEventListener('click',()=>{
    const email=document.getElementById('login-email').value.trim();
    const pwd=document.getElementById('login-password').value;
    const err=document.getElementById('email-error');
    if(!email||!pwd){ err.textContent='Please fill in all fields.'; err.classList.remove('hidden'); return; }
    err.classList.add('hidden');
    // TODO: Submit to backend
    alert('Email login – connect to backend to authenticate.');
});

// ── Mobile OTP flow ───────────────────────────────────────────────────────────
let loginOtp='';

function goToOtpStep(){
    const mobile=document.getElementById('login-mobile').value.trim();
    const err=document.getElementById('mobile-error');
    if(!mobile||!/^\d{5,15}$/.test(mobile)){ err.textContent='Enter a valid mobile number.'; err.classList.remove('hidden'); return; }
    err.classList.add('hidden');

    const dial=document.getElementById('login-country-code').value;
    document.getElementById('lotp-phone').textContent=dial+' '+mobile;
    loginOtp=Math.floor(100000+Math.random()*900000).toString();
    console.log('Login OTP:',loginOtp);

    const s1=document.getElementById('lstep1');
    const s2=document.getElementById('lstep2');
    s1.classList.add('out');
    setTimeout(()=>{
        s1.style.display='none';
        s2.style.display='block';
        requestAnimationFrame(()=>s2.classList.remove('out'));
        startLoginTimer();
        s2.querySelectorAll('.otp-input')[0].focus();
        lucide.createIcons();
    },300);
    document.getElementById('ldot1').className='w-2 h-2 rounded-full bg-gray-300 transition-all';
    document.getElementById('ldot2').className='w-8 h-2 rounded-full bg-primary transition-all';
}

document.getElementById('btn-send-login-otp').addEventListener('click', goToOtpStep);

document.getElementById('btn-login-back').addEventListener('click',()=>{
    const s1=document.getElementById('lstep1');
    const s2=document.getElementById('lstep2');
    s2.classList.add('out');
    setTimeout(()=>{ s2.style.display='none'; s1.style.display='block'; requestAnimationFrame(()=>s1.classList.remove('out')); lucide.createIcons(); },300);
    document.getElementById('ldot1').className='w-8 h-2 rounded-full bg-primary transition-all';
    document.getElementById('ldot2').className='w-2 h-2 rounded-full bg-gray-200 transition-all';
});

// OTP boxes
document.querySelectorAll('#lstep2 .otp-input').forEach((inp,i,arr)=>{
    inp.addEventListener('input',()=>{ inp.value=inp.value.replace(/\D/,''); if(inp.value&&i<arr.length-1) arr[i+1].focus(); });
    inp.addEventListener('keydown',e=>{ if(e.key==='Backspace'&&!inp.value&&i>0) arr[i-1].focus(); });
    inp.addEventListener('paste',e=>{
        const t=(e.clipboardData||window.clipboardData).getData('text').replace(/\D/g,'').slice(0,6);
        arr.forEach((b,j)=>b.value=t[j]||'');
        if(t.length) arr[Math.min(t.length-1,5)].focus();
        e.preventDefault();
    });
});

document.getElementById('btn-verify-login-otp').addEventListener('click',()=>{
    const entered=[...document.querySelectorAll('#lstep2 .otp-input')].map(i=>i.value).join('');
    const err=document.getElementById('lotp-error');
    if(entered.length<6){ err.textContent='Please enter the complete 6-digit OTP.'; err.classList.remove('hidden'); return; }
    if(entered!==loginOtp){ err.textContent='Incorrect OTP. Please try again.'; err.classList.remove('hidden'); return; }
    err.classList.add('hidden');
    // TODO: authenticate with backend
    alert('OTP verified! Connect to backend to complete login.');
    window.location.href='../index.php';
});

function startLoginTimer(){
    let s=30;
    const btn=document.getElementById('lresend-btn');
    const span=document.getElementById('lresend-timer');
    btn.disabled=true; span.textContent=`(${s}s)`;
    const t=setInterval(()=>{ s--; span.textContent=s>0?`(${s}s)`:''; if(s<=0){clearInterval(t);btn.disabled=false;} },1000);
}

document.getElementById('lresend-btn').addEventListener('click',()=>{
    loginOtp=Math.floor(100000+Math.random()*900000).toString();
    console.log('Resent Login OTP:',loginOtp);
    document.querySelectorAll('#lstep2 .otp-input').forEach(i=>i.value='');
    document.querySelectorAll('#lstep2 .otp-input')[0].focus();
    startLoginTimer();
});

lucide.createIcons();
</script>

<?php include '../components/footer.php'; ?>