document.addEventListener('DOMContentLoaded', () => {
    initCountryPicker();
    initNavbar();
    initHero();
    initTestimonials();
    initGlobalWidgets();
    initProgramsSlider();
    
    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});

/**
 * Country Picker Logic
 */
function initCountryPicker() {
    const countryBtn = document.getElementById('country-btn');
    const countryDropdown = document.getElementById('country-dropdown');
    const countrySearch = document.getElementById('country-search');
    const countryList = document.getElementById('country-list');
    const flagImg = document.getElementById('flag-img');
    const dialCode = document.getElementById('dial-code');

    if (!countryBtn || !countryDropdown || !countrySearch || !countryList) return;

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

    function renderCountries(filter = '') {
        if (!countryList) return;
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
                if (flagImg) flagImg.src = `https://flagcdn.com/w20/${c.code.toLowerCase()}.png`;
                if (dialCode) dialCode.textContent = c.dial;
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
        const picker = document.getElementById('country-picker');
        if (picker && !picker.contains(e.target)) {
            countryDropdown.classList.add('hidden');
        }
    });

    renderCountries();
}

/**
 * Testimonials Slider Logic
 */
function initTestimonials() {
    const slider = document.getElementById('testimonial-slider');
    if (!slider) return;

    const slides = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.t-dot');
    const prevBtn = document.getElementById('prev-testimonial');
    const nextBtn = document.getElementById('next-testimonial');
    let currentIndex = 0;

    if (slides.length === 0) return;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('opacity-100', 'scale-100', 'z-10');
            slide.classList.add('opacity-0', 'scale-95', 'z-0');
            dots[i]?.classList.remove('w-8', 'bg-secondary');
            dots[i]?.classList.add('w-2.5', 'bg-gray-300');
        });

        slides[index].classList.remove('opacity-0', 'scale-95', 'z-0');
        slides[index].classList.add('opacity-100', 'scale-100', 'z-10');
        dots[index]?.classList.add('w-8', 'bg-secondary');
        dots[index]?.classList.remove('w-2.5', 'bg-gray-300');

        currentIndex = index;
    }

    prevBtn?.addEventListener('click', () => {
        let index = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(index);
    });

    nextBtn?.addEventListener('click', () => {
        let index = (currentIndex + 1) % slides.length;
        showSlide(index);
    });

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => showSlide(i));
    });

    // Auto-play
    setInterval(() => {
        let index = (currentIndex + 1) % slides.length;
        showSlide(index);
    }, 6000);
}

/**
 * Hero Carousel Logic
 */
function initHero() {
    const slidesContainer = document.getElementById('carousel-slides');
    if (!slidesContainer) return;

    const slides = slidesContainer.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    let currentIndex = 0;
    let timer;

    if (slides.length === 0) return;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('opacity-100', 'z-10');
            slide.classList.add('opacity-0', 'z-0');
            dots[i]?.classList.remove('w-6', 'bg-secondary');
            dots[i]?.classList.add('w-2', 'bg-gray-400');
        });

        slides[index].classList.remove('opacity-0', 'z-0');
        slides[index].classList.add('opacity-100', 'z-10');
        dots[index]?.classList.add('w-6', 'bg-secondary');
        dots[index]?.classList.remove('w-2', 'bg-gray-400');

        currentIndex = index;
    }

    function nextSlide() {
        let index = (currentIndex + 1) % slides.length;
        showSlide(index);
    }

    function startTimer() {
        timer = setInterval(nextSlide, 5000);
    }

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            if (timer) clearInterval(timer);
            showSlide(i);
            startTimer();
        });
    });

    startTimer();
}

/**
 * Enhanced Navbar Logic
 */
function initNavbar() {
    const nav = document.getElementById('main-nav');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('mobile-overlay');

    if (!nav) return;

    const handleScroll = () => {
        if (window.scrollY > 50) {
            nav.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-md', 'py-3');
            nav.classList.remove('py-5', 'shadow-sm');
        } else {
            nav.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-md', 'py-3');
            nav.classList.add('py-5', 'shadow-sm');
        }
    };

    const toggleMenu = (show) => {
        if (show === undefined) show = mobileMenu?.classList.contains('hidden');
        const whatsappWidget = document.querySelector('.whatsapp-widget');
        
        if (show) {
            mobileMenu?.classList.remove('hidden');
            overlay?.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            // Hide WhatsApp widget when menu is open
            if (whatsappWidget) whatsappWidget.style.display = 'none';
        } else {
            mobileMenu?.classList.add('hidden');
            overlay?.classList.add('hidden');
            document.body.style.overflow = '';
            // Restore WhatsApp widget
            if (whatsappWidget) whatsappWidget.style.display = '';
        }
    };

    window.addEventListener('scroll', handleScroll);
    handleScroll();

    mobileMenuBtn?.addEventListener('click', (e) => {
        e.stopPropagation();
        toggleMenu();
    });

    overlay?.addEventListener('click', () => toggleMenu(false));

    // Close mobile menu on link click
    mobileMenu?.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            toggleMenu(false);
        });
    });

    // Close mobile menu on click outside
    document.addEventListener('click', (e) => {
        if (mobileMenu && !mobileMenu.contains(e.target) && !mobileMenuBtn?.contains(e.target)) {
            toggleMenu(false);
        }
    });
}

/**
 * Global Widgets: WhatsApp & Go-to-Top
 */
function initGlobalWidgets() {
    const container = document.getElementById('scrollToTopContainer');
    const circle = document.getElementById('scrollProgressCircle');
    if (!container || !circle) return;

    // Outer circumference is 2 * PI * r (r=24) => ~150.8
    const circumference = 150.8;

    const updateScroll = () => {
        const scrollTop = window.scrollY;
        const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
        
        // Handle visibility
        if (scrollTop > 400) {
            container.classList.remove('opacity-0', 'invisible', 'translate-y-8');
            container.classList.add('opacity-100', 'visible', 'translate-y-0');
        } else {
            container.classList.remove('opacity-100', 'visible', 'translate-y-0');
            container.classList.add('opacity-0', 'invisible', 'translate-y-8');
        }

        // Handle progress ring
        const progress = Math.min(scrollTop / scrollHeight, 1);
        const offset = circumference - (progress * circumference);
        circle.style.strokeDashoffset = offset;
    };

    window.addEventListener('scroll', updateScroll, { passive: true });
    
    // Initial check
    updateScroll();

    container.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

/**
 * Programs Mobile Slider (3 groups of 3 cards)
 */
function initProgramsSlider() {
    const slides = document.querySelectorAll('.prog-slide');
    const dots = document.querySelectorAll('.prog-dot');
    const prevBtn = document.getElementById('prog-prev');
    const nextBtn = document.getElementById('prog-next');
    if (!slides.length) return;

    let current = 0;

    function showProgSlide(index) {
        slides.forEach((s, i) => {
            s.classList.toggle('hidden', i !== index);
        });
        dots.forEach((d, i) => {
            if (i === index) {
                d.classList.add('w-7', 'bg-primary');
                d.classList.remove('w-2', 'bg-gray-300');
            } else {
                d.classList.remove('w-7', 'bg-primary');
                d.classList.add('w-2', 'bg-gray-300');
            }
        });
        current = index;
        // Re-init Lucide icons for newly visible slide content
        if (typeof lucide !== 'undefined') lucide.createIcons();
    }

    prevBtn?.addEventListener('click', () => {
        showProgSlide((current - 1 + slides.length) % slides.length);
    });
    nextBtn?.addEventListener('click', () => {
        showProgSlide((current + 1) % slides.length);
    });
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => showProgSlide(i));
    });
}
