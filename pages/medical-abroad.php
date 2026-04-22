<?php
$pageTitle = 'Medical Abroad | Study MBBS Overseas | Unidemy Global';
$pageDescription = 'Kickstart your medical career with top-tier MBBS programs in Georgia, Kazakhstan, and Kyrgyzstan. Global recognition and affordable education.';
$base_url = '../';
include '../components/header.php';
?>
    <!-- Main Content -->
    <main class="w-full pt-28 lg:pt-36 pb-20 bg-white flex-grow">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Breadcrumbs -->
            <nav class="flex text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center gap-2">
                    <li class="inline-flex items-center group">
                        <a href="../index.php" class="inline-flex items-center hover:text-primary transition-colors">
                            <i data-lucide="home" class="w-4 h-4 mr-2"></i>
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i>
                            <a href="../pages/study-abroad.php" class="ml-2 hover:text-primary transition-colors">Study
                                Abroad</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i data-lucide="chevron-right" class="w-4 h-4 text-gray-400"></i>
                            <span class="ml-2 text-primary font-medium">Medical Abroad</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Hero Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">Your Medical Career
                        Starts Here: <span class="text-rose-600 border-b-4 border-secondary/30">MBBS Abroad</span></h1>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">Join thousands of students who have achieved
                        their medical dreams through global university programs. Affordable, recognized, and world-class
                        education.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#counseling"
                            class="bg-rose-600 text-white px-8 py-3 rounded-full font-bold hover:bg-rose-700 transition-all shadow-lg shadow-rose-200">Apply
                            Now</a>
                        <a href="https://wa.me/916360456026"
                            class="flex items-center gap-2 border-2 border-rose-600 text-rose-600 px-8 py-3 rounded-full font-bold hover:bg-rose-600 hover:text-white transition-all">
                            <i data-lucide="message-circle" class="w-5 h-5"></i>
                            Talk to Expert
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-rose-100 rounded-3xl blur-2xl transform rotate-3"></div>
                    <div class="relative bg-white border border-rose-50 rounded-3xl p-8 shadow-2xl">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 bg-rose-50 rounded-xl flex items-center justify-center">
                                <i data-lucide="stethoscope" class="text-rose-600 w-6 h-6"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">NMC Recognised</h3>
                                <p class="text-sm text-gray-500">Global standard medical education</p>
                            </div>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-gray-700">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-500"></i>
                                Low tuition fees & cost of living
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-500"></i>
                                Top-ranked Medical Universities
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <i data-lucide="check-circle" class="w-5 h-5 text-green-500"></i>
                                Direct Admission Process
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Highlights Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
                <div class="p-8 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all">
                    <i data-lucide="map-pin" class="w-10 h-10 text-rose-600 mb-6"></i>
                    <h3 class="font-bold text-xl mb-4">Top Destinations</h3>
                    <p class="text-gray-600 text-sm">Georgia, Kazakhstan, Kyrgyzstan, Egypt, and Europe. Choose from a
                        wide range of global options.</p>
                </div>
                <div class="p-8 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all">
                    <i data-lucide="shield-check" class="w-10 h-10 text-rose-600 mb-6"></i>
                    <h3 class="font-bold text-xl mb-4">Complete Guidance</h3>
                    <p class="text-gray-600 text-sm">From university selection to visa processing and hostel assistance,
                        we handle everything.</p>
                </div>
                <div class="p-8 bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all">
                    <i data-lucide="book-open" class="text-rose-600 w-10 h-10 mb-6"></i>
                    <h3 class="font-bold text-xl mb-4">USMLE/PLAB Coaching</h3>
                    <p class="text-gray-600 text-sm">Integrated coaching for screening tests to ensure a smooth
                        transition
                        to clinical practice.</p>
                </div>
            </div>

            <!-- Counseling Section -->
            <section id="counseling" class="relative bg-primary rounded-[40px] p-8 md:p-16 overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-1/2 h-full opacity-10 pointer-events-none">
                    <i data-lucide="globe" class="w-96 h-96 -mr-20 -mt-20"></i>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center relative z-10">
                    <div>
                        <span
                            class="inline-block bg-white/10 text-white text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-widest mb-6">Start
                            Your Journey</span>
                        <h2 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">Book Your <br><span
                                class="text-secondary tracking-tight">Free Medical Counseling</span></h2>
                        <p class="text-lg text-blue-100 mb-10 leading-relaxed max-w-lg">Our expert counselors will help
                            you navigate the international admission process for medical programs.</p>
                    </div>

                    <div class="bg-white rounded-[32px] p-8 md:p-10 shadow-xl">
                        <form class="space-y-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <input type="text" placeholder="Full Name"
                                    class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-primary">
                                <input type="email" placeholder="Email Address"
                                    class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-primary">
                            </div>
                            <div class="flex gap-2">
                                <div class="relative" id="country-picker">
                                    <button type="button" id="country-btn"
                                        class="flex items-center gap-2 px-4 py-3 bg-gray-50 border border-gray-100 rounded-xl text-sm font-bold text-gray-700 hover:bg-gray-100 focus:bg-white focus:border-primary outline-none transition-all whitespace-nowrap min-w-[90px]">
                                        <img id="flag-img" src="https://flagcdn.com/w20/in.png" width="20" class="rounded-sm" alt="IN">
                                        <span id="dial-code">+91</span>
                                    </button>
                                    <div id="country-dropdown" class="hidden absolute left-0 top-full mt-2 w-64 bg-white rounded-2xl shadow-2xl border border-gray-100 z-50 p-2">
                                        <input type="text" id="country-search" placeholder="Search..." class="w-full px-3 py-2 text-sm bg-gray-50 border border-transparent rounded-xl outline-none focus:border-primary mb-2">
                                        <ul id="country-list" class="max-h-60 overflow-y-auto space-y-1"></ul>
                                    </div>
                                </div>
                                <input type="tel" placeholder="Phone Number"
                                    class="flex-1 bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-primary">
                            </div>
                            <select
                                class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 text-sm text-gray-500 focus:outline-none focus:border-primary">
                                <option value="">Preferred Medical Destination</option>
                                <option value="georgia">Georgia</option>
                                <option value="kazakhstan">Kazakhstan</option>
                                <option value="kyrgyzstan">Kyrgyzstan</option>
                                <option value="egypt">Egypt</option>
                                <option value="europe">Europe</option>
                            </select>
                            <button
                                class="w-full bg-secondary hover:bg-orange-600 text-white font-bold py-4 rounded-xl transition-all shadow-lg shadow-secondary/30 active:scale-95 text-base mt-4 uppercase">
                                Get Guidance Now
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>


<script>
        lucide.createIcons();

        // Mobile menu toggle logic
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function () {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });

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
