<!-- Enrollment Modal Component -->
<div id="enrollment-modal" class="fixed inset-0 z-[100] hidden">
    <!-- Overlay -->
    <div id="enrollment-modal-overlay" class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm transition-opacity duration-300 opacity-0"></div>
    
    <!-- Modal Content -->
    <div id="enrollment-modal-container" class="absolute inset-0 flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-2xl rounded-3xl overflow-hidden shadow-2xl transform transition-all duration-300 scale-95 opacity-0 flex flex-col md:flex-row">
            <!-- Decorative Sidebar (Desktop only) -->
            <div class="hidden md:flex w-1/3 bg-slate-50 p-8 flex-col justify-between text-slate-900 relative overflow-hidden border-r border-slate-100">
                <div class="absolute top-0 right-0 -mr-16 -mt-16 w-48 h-48 bg-primary/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-48 h-48 bg-secondary/10 rounded-full blur-3xl"></div>
                
                <div class="relative z-10">
                    <img src="<?php echo isset($base_url) ? $base_url : './'; ?>assets/images/Logo (2).png" alt="Logo" class="h-8 w-auto mb-8">
                    <h2 class="text-2xl font-bold leading-tight text-primary">Start Your Journey Today</h2>
                    <p class="text-slate-600 text-sm mt-4">Join thousands of students who are achieving their academic goals with Unidemy.</p>
                </div>
                
                <div class="relative z-10 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <span class="text-sm font-semibold text-slate-700">Expert Mentors</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-secondary/10 flex items-center justify-center text-secondary">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <span class="text-sm font-semibold text-slate-700">Global Standards</span>
                    </div>
                </div>
            </div>

            <!-- Form Content -->
            <div class="flex-1 p-8 md:p-10 relative">
                <button id="close-enrollment-modal" class="absolute top-4 right-4 p-2 text-slate-400 hover:text-slate-600 transition-colors">
                    <i data-lucide="x" class="w-6 h-6"></i>
                </button>

                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-slate-900">Enrollment Request</h3>
                    <p class="text-slate-500 mt-2">Please fill in your details and we'll get back to you shortly.</p>
                </div>

                <form id="enrollment-form" class="space-y-4">
                    <div>
                        <label for="student-name" class="block text-sm font-semibold text-slate-700 mb-1.5">Full Name</label>
                        <input type="text" id="student-name" required placeholder="John Doe" 
                            class="w-full h-[52px] px-4 rounded-xl border border-slate-200 focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900">
                    </div>
                    
                    <div>
                        <label for="student-email" class="block text-sm font-semibold text-slate-700 mb-1.5">Email Address</label>
                        <input type="email" id="student-email" required placeholder="john@example.com" 
                            class="w-full h-[52px] px-4 rounded-xl border border-slate-200 focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900">
                    </div>
                    <div>
                        <label for="student-phone" class="block text-sm font-semibold text-slate-700 mb-1.5">Phone Number</label>
                        <div class="flex items-stretch gap-2 h-[52px]">
                            <!-- Country Picker -->
                            <div class="relative" id="modal-country-picker">
                                <button type="button" id="modal-country-btn"
                                    class="h-full flex items-center gap-2 px-4 bg-gray-50 border border-slate-200 rounded-xl text-sm font-bold text-slate-700 hover:bg-gray-100 focus:bg-white focus:border-primary outline-none transition-all whitespace-nowrap min-w-[110px]">
                                    <img id="modal-flag" src="https://flagcdn.com/w20/in.png" width="20" class="rounded-sm" alt="IN">
                                    <span id="modal-dial" class="text-slate-600">+91</span>
                                    <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400"></i>
                                </button>
                                <!-- Dropdown -->
                                <div id="modal-country-dropdown" class="hidden absolute left-0 top-full mt-2 w-72 bg-white rounded-2xl shadow-2xl border border-gray-100 z-[110] p-2 overflow-hidden">
                                    <div class="p-2 border-b border-gray-50 mb-1">
                                        <input type="text" id="modal-country-search" placeholder="Search country..."
                                            class="w-full px-3 py-2 text-sm bg-gray-50 border border-transparent rounded-xl outline-none focus:border-primary focus:ring-2 focus:ring-primary/10 placeholder:text-gray-400">
                                    </div>
                                    <ul id="modal-country-list" class="space-y-0.5 max-h-64 overflow-y-auto custom-scrollbar p-1"></ul>
                                </div>
                            </div>
                            <input type="hidden" id="modal-country-code" name="country_code" value="+91">
                            <input type="tel" id="student-phone" required placeholder="Phone number" 
                                class="flex-1 h-full px-4 rounded-xl border border-slate-200 focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900">
                        </div>
                    </div>

                    <div>
                        <label for="course-name" class="block text-sm font-semibold text-slate-700 mb-1.5">Requested Course</label>
                        <input type="text" id="course-name" readonly 
                            class="w-full h-[52px] px-4 rounded-xl border border-slate-100 bg-slate-50 text-slate-500 font-medium outline-none">
                    </div>

                    <!-- Additional Message (Internships Only) -->
                    <div id="message-container" class="hidden">
                        <label for="student-message" class="block text-sm font-semibold text-slate-700 mb-1.5">Additional Message</label>
                        <textarea id="student-message" rows="3" placeholder="Tell us why you are interested in this internship..." 
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none text-slate-900 resize-none"></textarea>
                    </div>

                    <div class="pt-4">
                        <button type="submit" 
                            class="w-full bg-secondary text-white font-bold py-4 rounded-xl shadow-lg shadow-secondary/20 hover:bg-orange-600 transition-all transform hover:-translate-y-0.5 active:scale-[0.98]">
                            Submit Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function openEnrollmentModal(programName, isInternship = false) {
    const modal = document.getElementById('enrollment-modal');
    const overlay = document.getElementById('enrollment-modal-overlay');
    const container = document.getElementById('enrollment-modal-container').firstElementChild;
    const courseInput = document.getElementById('course-name');
    const messageContainer = document.getElementById('message-container');
    
    courseInput.value = programName;
    
    if (isInternship) {
        messageContainer.classList.remove('hidden');
    } else {
        messageContainer.classList.add('hidden');
    }
    
    modal.classList.remove('hidden');
    // Force reflow
    modal.offsetHeight;
    
    overlay.classList.remove('opacity-0');
    overlay.classList.add('opacity-100');
    
    container.classList.remove('scale-95', 'opacity-0');
    container.classList.add('scale-100', 'opacity-100');
    
    document.body.style.overflow = 'hidden';
    
    // Ensure icons inside modal are rendered
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
}

function closeEnrollmentModal() {
    const modal = document.getElementById('enrollment-modal');
    const overlay = document.getElementById('enrollment-modal-overlay');
    const container = document.getElementById('enrollment-modal-container').firstElementChild;
    
    overlay.classList.add('opacity-0');
    overlay.classList.remove('opacity-100');
    
    container.classList.add('scale-95', 'opacity-0');
    container.classList.remove('scale-100', 'opacity-100');
    
    setTimeout(() => {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }, 300);
}

document.addEventListener('DOMContentLoaded', function() {
    const closeBtn = document.getElementById('close-enrollment-modal');
    const overlay = document.getElementById('enrollment-modal-overlay');
    
    closeBtn.addEventListener('click', closeEnrollmentModal);
    overlay.addEventListener('click', closeEnrollmentModal);
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !document.getElementById('enrollment-modal').classList.contains('hidden')) {
            closeEnrollmentModal();
        }
    });

    document.getElementById('enrollment-form').addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would typically send the form data to a server
        alert('Thank you for your request! We will contact you soon.');
        closeEnrollmentModal();
        this.reset();
    });

    // ── Country Picker Logic ──────────────────────────────────────────────
    const COUNTRIES = [
        {name:"Afghanistan",dial:"+93",code:"AF"},
        {name:"Albania",dial:"+355",code:"AL"},
        {name:"Algeria",dial:"+213",code:"DZ"},
        {name:"Andorra",dial:"+376",code:"AD"},
        {name:"Angola",dial:"+244",code:"AO"},
        {name:"Argentina",dial:"+54",code:"AR"},
        {name:"Armenia",dial:"+374",code:"AM"},
        {name:"Australia",dial:"+61",code:"AU"},
        {name:"Austria",dial:"+43",code:"AT"},
        {name:"Azerbaijan",dial:"+994",code:"AZ"},
        {name:"Bahamas",dial:"+1242",code:"BS"},
        {name:"Bahrain",dial:"+973",code:"BH"},
        {name:"Bangladesh",dial:"+880",code:"BD"},
        {name:"Barbados",dial:"+1246",code:"BB"},
        {name:"Belarus",dial:"+375",code:"BY"},
        {name:"Belgium",dial:"+32",code:"BE"},
        {name:"Belize",dial:"+501",code:"BZ"},
        {name:"Benin",dial:"+229",code:"BJ"},
        {name:"Bhutan",dial:"+975",code:"BT"},
        {name:"Bolivia",dial:"+591",code:"BO"},
        {name:"Bosnia",dial:"+387",code:"BA"},
        {name:"Botswana",dial:"+267",code:"BW"},
        {name:"Brazil",dial:"+55",code:"BR"},
        {name:"Brunei",dial:"+673",code:"BN"},
        {name:"Bulgaria",dial:"+359",code:"BG"},
        {name:"Cambodia",dial:"+855",code:"KH"},
        {name:"Cameroon",dial:"+237",code:"CM"},
        {name:"Canada",dial:"+1",code:"CA"},
        {name:"Chile",dial:"+56",code:"CL"},
        {name:"China",dial:"+86",code:"CN"},
        {name:"Colombia",dial:"+57",code:"CO"},
        {name:"Congo",dial:"+242",code:"CG"},
        {name:"Costa Rica",dial:"+506",code:"CR"},
        {name:"Croatia",dial:"+385",code:"HR"},
        {name:"Cuba",dial:"+53",code:"CU"},
        {name:"Cyprus",dial:"+357",code:"CY"},
        {name:"Czech Republic",dial:"+420",code:"CZ"},
        {name:"Denmark",dial:"+45",code:"DK"},
        {name:"Djibouti",dial:"+253",code:"DJ"},
        {name:"Dominica",dial:"+1767",code:"DM"},
        {name:"Ecuador",dial:"+593",code:"EC"},
        {name:"Egypt",dial:"+20",code:"EG"},
        {name:"El Salvador",dial:"+503",code:"SV"},
        {name:"Estonia",dial:"+372",code:"EE"},
        {name:"Ethiopia",dial:"+251",code:"ET"},
        {name:"Fiji",dial:"+679",code:"FJ"},
        {name:"Finland",dial:"+358",code:"FI"},
        {name:"France",dial:"+33",code:"FR"},
        {name:"Gabon",dial:"+241",code:"GA"},
        {name:"Gambia",dial:"+220",code:"GM"},
        {name:"Georgia",dial:"+995",code:"GE"},
        {name:"Germany",dial:"+49",code:"DE"},
        {name:"Ghana",dial:"+233",code:"GH"},
        {name:"Greece",dial:"+30",code:"GR"},
        {name:"Grenada",dial:"+1473",code:"GD"},
        {name:"Guatemala",dial:"+502",code:"GT"},
        {name:"Guinea",dial:"+224",code:"GN"},
        {name:"Guyana",dial:"+592",code:"GY"},
        {name:"Haiti",dial:"+509",code:"HT"},
        {name:"Honduras",dial:"+504",code:"HN"},
        {name:"Hungary",dial:"+36",code:"HU"},
        {name:"Iceland",dial:"+354",code:"IS"},
        {name:"India",dial:"+91",code:"IN"},
        {name:"Indonesia",dial:"+62",code:"ID"},
        {name:"Iran",dial:"+98",code:"IR"},
        {name:"Iraq",dial:"+964",code:"IQ"},
        {name:"Ireland",dial:"+353",code:"IE"},
        {name:"Israel",dial:"+972",code:"IL"},
        {name:"Italy",dial:"+39",code:"IT"},
        {name:"Jamaica",dial:"+1876",code:"JM"},
        {name:"Japan",dial:"+81",code:"JP"},
        {name:"Jordan",dial:"+962",code:"JO"},
        {name:"Kazakhstan",dial:"+7",code:"KZ"},
        {name:"Kenya",dial:"+254",code:"KE"},
        {name:"Kuwait",dial:"+965",code:"KW"},
        {name:"Kyrgyzstan",dial:"+996",code:"KG"},
        {name:"Laos",dial:"+856",code:"LA"},
        {name:"Latvia",dial:"+371",code:"LV"},
        {name:"Lebanon",dial:"+961",code:"LB"},
        {name:"Libya",dial:"+218",code:"LY"},
        {name:"Lithuania",dial:"+370",code:"LT"},
        {name:"Luxembourg",dial:"+352",code:"LU"},
        {name:"Macau",dial:"+853",code:"MO"},
        {name:"Madagascar",dial:"+261",code:"MG"},
        {name:"Malawi",dial:"+265",code:"MW"},
        {name:"Malaysia",dial:"+60",code:"MY"},
        {name:"Maldives",dial:"+960",code:"MV"},
        {name:"Mali",dial:"+223",code:"ML"},
        {name:"Malta",dial:"+356",code:"MT"},
        {name:"Mauritius",dial:"+230",code:"MU"},
        {name:"Mexico",dial:"+52",code:"MX"},
        {name:"Moldova",dial:"+373",code:"MD"},
        {name:"Monaco",dial:"+377",code:"MC"},
        {name:"Mongolia",dial:"+976",code:"MN"},
        {name:"Montenegro",dial:"+382",code:"ME"},
        {name:"Morocco",dial:"+212",code:"MA"},
        {name:"Myanmar",dial:"+95",code:"MM"},
        {name:"Namibia",dial:"+264",code:"NA"},
        {name:"Nepal",dial:"+977",code:"NP"},
        {name:"Netherlands",dial:"+31",code:"NL"},
        {name:"New Zealand",dial:"+64",code:"NZ"},
        {name:"Nicaragua",dial:"+505",code:"NI"},
        {name:"Nigeria",dial:"+234",code:"NG"},
        {name:"Norway",dial:"+47",code:"NO"},
        {name:"Oman",dial:"+968",code:"OM"},
        {name:"Pakistan",dial:"+92",code:"PK"},
        {name:"Panama",dial:"+507",code:"PA"},
        {name:"Paraguay",dial:"+595",code:"PY"},
        {name:"Peru",dial:"+51",code:"PE"},
        {name:"Philippines",dial:"+63",code:"PH"},
        {name:"Poland",dial:"+48",code:"PL"},
        {name:"Portugal",dial:"+351",code:"PT"},
        {name:"Qatar",dial:"+974",code:"QA"},
        {name:"Romania",dial:"+40",code:"RO"},
        {name:"Russia",dial:"+7",code:"RU"},
        {name:"Saudi Arabia",dial:"+966",code:"SA"},
        {name:"Senegal",dial:"+221",code:"SN"},
        {name:"Serbia",dial:"+381",code:"RS"},
        {name:"Singapore",dial:"+65",code:"SG"},
        {name:"Slovakia",dial:"+421",code:"SK"},
        {name:"Slovenia",dial:"+386",code:"SI"},
        {name:"South Africa",dial:"+27",code:"ZA"},
        {name:"South Korea",dial:"+82",code:"KR"},
        {name:"Spain",dial:"+34",code:"ES"},
        {name:"Sri Lanka",dial:"+94",code:"LK"},
        {name:"Sudan",dial:"+249",code:"SD"},
        {name:"Sweden",dial:"+46",code:"SE"},
        {name:"Switzerland",dial:"+41",code:"CH"},
        {name:"Syria",dial:"+963",code:"SY"},
        {name:"Taiwan",dial:"+886",code:"TW"},
        {name:"Tajikistan",dial:"+992",code:"TJ"},
        {name:"Tanzania",dial:"+255",code:"TZ"},
        {name:"Thailand",dial:"+66",code:"TH"},
        {name:"Tunisia",dial:"+216",code:"TN"},
        {name:"Turkey",dial:"+90",code:"TR"},
        {name:"Turkmenistan",dial:"+993",code:"TM"},
        {name:"UAE",dial:"+971",code:"AE"},
        {name:"Uganda",dial:"+256",code:"UG"},
        {name:"Ukraine",dial:"+380",code:"UA"},
        {name:"United Kingdom",dial:"+44",code:"GB"},
        {name:"United States",dial:"+1",code:"US"},
        {name:"Uruguay",dial:"+598",code:"UY"},
        {name:"Uzbekistan",dial:"+998",code:"UZ"},
        {name:"Venezuela",dial:"+58",code:"VE"},
        {name:"Vietnam",dial:"+84",code:"VN"},
        {name:"Yemen",dial:"+967",code:"YE"},
        {name:"Zambia",dial:"+260",code:"ZM"},
        {name:"Zimbabwe",dial:"+263",code:"ZW"}
    ];

    let selectedCountry = COUNTRIES[0];
    const countryBtn = document.getElementById('modal-country-btn');
    const countryDropdown = document.getElementById('modal-country-dropdown');
    const countrySearch = document.getElementById('modal-country-search');
    const countryList = document.getElementById('modal-country-list');
    const flagImg = document.getElementById('modal-flag');
    const dialText = document.getElementById('modal-dial');
    const countryCodeInput = document.getElementById('modal-country-code');

    function renderCountries(filter = '') {
        countryList.innerHTML = '';
        const filtered = COUNTRIES.filter(c => 
            c.name.toLowerCase().includes(filter.toLowerCase()) || 
            c.dial.includes(filter)
        );

        filtered.forEach(c => {
            const li = document.createElement('li');
            li.className = 'flex items-center gap-4 px-4 py-3 rounded-xl cursor-pointer hover:bg-slate-50 text-sm transition-all duration-200 group/item';
            li.innerHTML = `
                <div class="w-8 flex justify-center">
                    <img src="https://flagcdn.com/w20/${c.code.toLowerCase()}.png" width="20" class="rounded-sm shadow-sm" alt="${c.code}">
                </div>
                <span class="flex-1 font-medium text-slate-700 group-hover/item:text-primary transition-colors">${c.name}</span>
                <span class="text-slate-400 font-bold group-hover/item:text-primary/70">${c.dial}</span>
            `;
            li.addEventListener('click', () => {
                selectedCountry = c;
                flagImg.src = `https://flagcdn.com/w20/${c.code.toLowerCase()}.png`;
                flagImg.alt = c.code;
                dialText.textContent = c.dial;
                countryCodeInput.value = c.dial;
                countryDropdown.classList.add('hidden');
            });
            countryList.appendChild(li);
        });
    }

    countryBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        countryDropdown.classList.toggle('hidden');
        if (!countryDropdown.classList.contains('hidden')) {
            countrySearch.focus();
        }
    });

    countrySearch.addEventListener('input', (e) => {
        renderCountries(e.target.value);
    });

    document.addEventListener('click', (e) => {
        if (!document.getElementById('modal-country-picker').contains(e.target)) {
            countryDropdown.classList.add('hidden');
        }
    });

    renderCountries();

    // Auto-detect country
    fetch('https://ipapi.co/json/')
        .then(res => res.json())
        .then(data => {
            const country = COUNTRIES.find(c => c.code === data.country_code);
            if (country) {
                selectedCountry = country;
                flagImg.src = `https://flagcdn.com/w20/${country.code.toLowerCase()}.png`;
                flagImg.alt = country.code;
                dialText.textContent = country.dial;
                countryCodeInput.value = country.dial;
            }
        })
        .catch(() => {});
});
</script>
