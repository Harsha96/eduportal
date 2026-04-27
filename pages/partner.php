<?php
$pageTitle = 'Become a Partner | Unidemy Global';
$pageDescription = 'Partner with Unidemy Global to bring world-class test preparation and global university admissions to your institution.';
$additionalHead = <<<'HEADCONTENT'
<style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .input-focus {
            transition: all 0.3s ease;
        }

        .input-focus:focus {
            border-color: #1E4F9C;
            box-shadow: 0 0 0 4px rgba(30, 79, 156, 0.1);
        }
    </style>
HEADCONTENT;
$base_url = '../';
include '../components/header.php';
?>
    <main class="w-full pt-24 md:pt-32 lg:pt-40 pb-20 bg-white flex-grow">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Left Content -->
                <div class="relative">
                    <div class="absolute -top-20 -left-20 w-64 h-64 bg-primary/5 rounded-full blur-3xl -z-10"></div>
                    <div class="absolute top-40 -right-20 w-80 h-80 bg-secondary/5 rounded-full blur-3xl -z-10"></div>
                    
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-gray-900 mb-8 leading-[1.1] tracking-tight">
                        Empower Your <span class="text-primary">Institution</span> with Unidemy Global
                    </h1>
                    <p class="text-gray-600 text-lg mb-10 leading-relaxed">
                        Join our network of elite partner schools and organizations. Bring world-class test preparation, career counseling, and global university admissions expertise directly to your students.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center shrink-0">
                                <i data-lucide="users" class="w-6 h-6 text-primary"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Expert Faculty Access</h3>
                                <p class="text-sm text-gray-500">Provide your students with access to top-tier educators and subject matter experts.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 bg-orange-50 rounded-xl flex items-center justify-center shrink-0">
                                <i data-lucide="globe" class="w-6 h-6 text-secondary"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Global Reach</h3>
                                <p class="text-sm text-gray-500">Leverage our extensive network of global university partners for student placements.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center shrink-0">
                                <i data-lucide="trending-up" class="w-6 h-6 text-emerald-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-1">Institutional Growth</h3>
                                <p class="text-sm text-gray-500">Enhance your institution's value proposition with premium career-focused services.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="relative">
                    <div class="glass-panel p-8 md:p-10 rounded-[40px] shadow-2xl relative z-10">
                        <h2 class="text-3xl font-black text-gray-900 mb-2">Partnership Inquiry</h2>
                        <p class="text-gray-500 mb-8 font-medium">Please fill out the form below and our institutional partnership team will get in touch with you.</p>

                        <form class="space-y-5">
                            <div class="grid md:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-sm font-bold text-gray-700 mb-2 px-1">Full Name</label>
                                    <input type="text" placeholder="John Doe" required
                                        class="w-full bg-gray-50 border-2 border-gray-100 py-3.5 px-6 rounded-2xl focus:outline-none input-focus text-gray-900 font-medium">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-gray-700 mb-2 px-1">Institutional Name</label>
                                    <input type="text" placeholder="Your School/Org" required
                                        class="w-full bg-gray-50 border-2 border-gray-100 py-3.5 px-6 rounded-2xl focus:outline-none input-focus text-gray-900 font-medium">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2 px-1">Work Email</label>
                                <input type="email" placeholder="john@institution.com" required
                                    class="w-full bg-gray-50 border-2 border-gray-100 py-3.5 px-6 rounded-2xl focus:outline-none input-focus text-gray-900 font-medium">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2 px-1">Phone Number</label>
                                <div class="flex gap-2">
                                    <div class="relative" id="country-picker">
                                        <button type="button" id="country-btn"
                                            class="flex items-center gap-2 px-4 py-3.5 bg-gray-50 border-2 border-gray-100 rounded-2xl text-sm font-bold text-gray-700 hover:bg-gray-100 focus:bg-white focus:border-primary outline-none transition-all whitespace-nowrap min-w-[100px]">
                                            <img id="flag-img" src="https://flagcdn.com/w20/in.png" width="20" class="rounded-sm" alt="IN">
                                            <span id="dial-code">+91</span>
                                        </button>
                                        <div id="country-dropdown" class="hidden absolute left-0 top-full mt-2 w-64 bg-white rounded-2xl shadow-2xl border border-gray-100 z-50 p-2">
                                            <input type="text" id="country-search" placeholder="Search..." class="w-full px-3 py-2 text-sm bg-gray-50 border border-transparent rounded-xl outline-none focus:border-primary mb-2">
                                            <ul id="country-list" class="max-h-60 overflow-y-auto space-y-1"></ul>
                                        </div>
                                    </div>
                                    <input type="tel" placeholder="Phone Number" required
                                        class="flex-1 bg-gray-50 border-2 border-gray-100 py-3.5 px-6 rounded-2xl focus:outline-none input-focus text-gray-900 font-medium">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2 px-1">How can we help?</label>
                                <textarea placeholder="Tell us about your institution and goals..." rows="4" required
                                    class="w-full bg-gray-50 border-2 border-gray-100 py-3.5 px-6 rounded-2xl focus:outline-none input-focus text-gray-900 font-medium resize-none"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-primary hover:bg-blue-700 text-white font-black py-4 rounded-2xl transition-all shadow-xl shadow-primary/20 hover:scale-[1.02] active:scale-95 text-lg mt-4">
                                Submit Request
                            </button>
                        </form>
                    </div>
                    <!-- Decorative element -->
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-primary/10 rounded-full blur-xl -z-0"></div>
                </div>
            </div>
        </div>
    </main>


<script>
        lucide.createIcons();
        
        // Mobile menu toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }

            // Country Picker Logic
            const COUNTRIES = [
                {name:"India",dial:"+91",code:"IN"},
                {name:"United States",dial:"+1",code:"US"},
                {name:"United Kingdom",dial:"+44",code:"GB"},
                {name:"Australia",dial:"+61",code:"AU"},
                {name:"Canada",dial:"+1",code:"CA"},
                {name:"Germany",dial:"+49",code:"DE"},
                {name:"France",dial:"+33",code:"FR"},
                {name:"UAE",dial:"+971",code:"AE"},
                {name:"Saudi Arabia",dial:"+966",code:"SA"},
                {name:"Singapore",dial:"+65",code:"SG"},
                {name:"Japan",dial:"+81",code:"JP"},
                {name:"China",dial:"+86",code:"CN"},
                {name:"South Korea",dial:"+82",code:"KR"},
                {name:"Brazil",dial:"+55",code:"BR"},
                {name:"Mexico",dial:"+52",code:"MX"},
                {name:"South Africa",dial:"+27",code:"ZA"},
                {name:"New Zealand",dial:"+64",code:"NZ"},
                {name:"Italy",dial:"+39",code:"IT"},
                {name:"Spain",dial:"+34",code:"ES"},
                {name:"Netherlands",dial:"+31",code:"NL"},
                {name:"Russia",dial:"+7",code:"RU"},
                {name:"Turkey",dial:"+90",code:"TR"},
                {name:"Pakistan",dial:"+92",code:"PK"},
                {name:"Bangladesh",dial:"+880",code:"BD"},
                {name:"Sri Lanka",dial:"+94",code:"LK"},
                {name:"Nepal",dial:"+977",code:"NP"},
                {name:"Malaysia",dial:"+60",code:"MY"},
                {name:"Indonesia",dial:"+62",code:"ID"},
                {name:"Philippines",dial:"+63",code:"PH"},
                {name:"Thailand",dial:"+66",code:"TH"},
                {name:"Nigeria",dial:"+234",code:"NG"},
                {name:"Kenya",dial:"+254",code:"KE"},
                {name:"Egypt",dial:"+20",code:"EG"},
                {name:"Israel",dial:"+972",code:"IL"},
                {name:"Sweden",dial:"+46",code:"SE"},
                {name:"Norway",dial:"+47",code:"NO"},
                {name:"Denmark",dial:"+45",code:"DK"},
                {name:"Finland",dial:"+358",code:"FI"},
                {name:"Switzerland",dial:"+41",code:"CH"},
                {name:"Poland",dial:"+48",code:"PL"},
                {name:"Portugal",dial:"+351",code:"PT"},
                {name:"Argentina",dial:"+54",code:"AR"},
                {name:"Chile",dial:"+56",code:"CL"}
            ];

            const countryBtn = document.getElementById('country-btn');
            const countryDropdown = document.getElementById('country-dropdown');
            const countrySearch = document.getElementById('country-search');
            const countryList = document.getElementById('country-list');
            const flagImg = document.getElementById('flag-img');
            const dialCode = document.getElementById('dial-code');

            function renderCountries(filter = '') {
                countryList.innerHTML = '';
                const filtered = COUNTRIES.filter(c => 
                    c.name.toLowerCase().includes(filter.toLowerCase()) || 
                    c.dial.includes(filter)
                );

                filtered.forEach(c => {
                    const li = document.createElement('li');
                    li.className = 'flex items-center gap-3 px-3 py-2 rounded-xl cursor-pointer hover:bg-gray-50 text-sm transition-colors';
                    li.innerHTML = `
                        <img src="https://flagcdn.com/w20/${c.code.toLowerCase()}.png" width="20" class="rounded-sm" alt="${c.code}">
                        <span class="flex-1 font-medium text-gray-700">${c.name}</span>
                        <span class="text-gray-400 font-bold">${c.dial}</span>
                    `;
                    li.addEventListener('click', () => {
                        flagImg.src = `https://flagcdn.com/w20/${c.code.toLowerCase()}.png`;
                        dialCode.textContent = c.dial;
                        countryDropdown.classList.add('hidden');
                    });
                    countryList.appendChild(li);
                });
            }

            countryBtn?.addEventListener('click', (e) => {
                e.stopPropagation();
                countryDropdown.classList.toggle('hidden');
                if (!countryDropdown.classList.contains('hidden')) {
                    countrySearch.focus();
                }
            });

            countrySearch?.addEventListener('input', (e) => {
                renderCountries(e.target.value);
            });

            document.addEventListener('click', (e) => {
                if (!document.getElementById('country-picker')?.contains(e.target)) {
                    countryDropdown?.classList.add('hidden');
                }
            });

            renderCountries();
    </script>
<?php include '../components/footer.php'; ?>
