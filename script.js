/**
 * Unidemy Global - Frontend Logic
 */

document.addEventListener('DOMContentLoaded', () => {
    initNavbar();
    initHero();
    initTestimonials();
    // initMarquee();
});

/**
 * Testimonials Slider Logic
 */
function initTestimonials() {
    const slides = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.t-dot');
    const prevBtn = document.getElementById('prev-testimonial');
    const nextBtn = document.getElementById('next-testimonial');
    let currentIndex = 0;

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
    const slides = document.querySelectorAll('#carousel-slides .slide');
    const dots = document.querySelectorAll('.dot');
    let currentIndex = 0;
    let timer;

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
            clearInterval(timer);
            showSlide(i);
            startTimer();
        });
    });

    startTimer();
}
function initNavbar() {
    const nav = document.querySelector('nav');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            nav?.classList.add('bg-white/90', 'backdrop-blur-md', 'shadow-sm', 'py-3');
            nav?.classList.remove('bg-transparent', 'py-5');
        } else {
            nav?.classList.remove('bg-white/90', 'backdrop-blur-md', 'shadow-sm', 'py-3');
            nav?.classList.add('bg-transparent', 'py-5');
        }
    });

    mobileMenuBtn?.addEventListener('click', () => {
        mobileMenu?.classList.toggle('hidden');
    });
}
