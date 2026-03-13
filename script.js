document.addEventListener('DOMContentLoaded', () => {
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
    if (!container) return;

    let scrollTimeout;

    const handleScroll = () => {
        if (window.scrollY > 400) {
            // Show button when scrolling down
            container.classList.remove('opacity-0', 'invisible', 'translate-y-4');
            container.classList.add('opacity-100', 'visible', 'translate-y-0');

            // Set hide timer: disappear after 2 seconds of no scrolling
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                if (!container.matches(':hover')) {
                    container.classList.remove('opacity-100', 'visible', 'translate-y-0');
                    container.classList.add('opacity-0', 'invisible', 'translate-y-4');
                }
            }, 2000);
        } else {
            // Immediate hide when near the top
            container.classList.remove('opacity-100', 'visible', 'translate-y-0');
            container.classList.add('opacity-0', 'invisible', 'translate-y-4');
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    
    // Initial check
    handleScroll();

    // Keep visible on hover & show on hover even if faded
    container.addEventListener('mouseenter', () => {
        clearTimeout(scrollTimeout);
        container.classList.remove('opacity-0', 'invisible', 'translate-y-4');
        container.classList.add('opacity-100', 'visible', 'translate-y-0');
    });

    container.addEventListener('mouseleave', () => {
        if (window.scrollY > 400) {
            scrollTimeout = setTimeout(() => {
                container.classList.remove('opacity-100', 'visible', 'translate-y-0');
                container.classList.add('opacity-0', 'invisible', 'translate-y-4');
            }, 2000);
        }
    });

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
