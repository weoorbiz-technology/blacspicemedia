// Scroll Animation Observer
document.addEventListener('DOMContentLoaded', function () {
    // Get all elements with animate-on-scroll class
    const animatedElements = document.querySelectorAll('.animate-on-scroll');

    // Intersection Observer options
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -50px 0px',
        threshold: 0.1
    };

    // Observer callback
    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                // Use old animate.css class naming (version 3.x)
                const animationClass = el.dataset.animation || 'fadeInUp';

                el.classList.add('animated', animationClass);
                el.style.opacity = '1';
                observer.unobserve(el);
            }
        });
    };

    // Create observer
    const observer = new IntersectionObserver(observerCallback, observerOptions);

    // Observe all animated elements
    animatedElements.forEach(el => observer.observe(el));
});
