<section class="about-section" id="about">
    <div class="container" style="position: relative;">
        <!-- Decorative Star -->
        <div class="deco-star left"><i class="fa fa-play"></i></div>

        <div class="row align-items-center">
            <!-- Left Column: Content -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="about-title animate-on-scroll" data-animation="fadeInUp">Empowering Businesses
                    Through Innovation</h2>
                <p class="about-desc animate-on-scroll delay-1" data-animation="fadeInUp">
                    BLACSPICE MEDIA is a creative agency with two wings: media production and media enrichment
                    programmes.
                    We aim to produce dynamic content and nurture media awareness amongst youths and young adults.
                </p>
                <a href="about.php" class="btn-view-more animate-on-scroll delay-2" data-animation="fadeInUp">Know More
                    About Us
                </a>

            </div>

            <div class="col-lg-6">
                <div class="about-img-wrapper animate-on-scroll" data-animation="fadeInRight">
                    <img src="<?= BASEURL ?>assets/img/about.webp" alt="About Blacspice Media" class="about-img">
                    <div class="deco-star right"><i class="fa fa-play"></i></div>
                </div>
            </div>
        </div>

        <!-- Float Stats Bar -->
        <div class="stats-bar" id="statsBar">
            <div class="stat-item">
                <span class="stat-number" data-target="11">0</span><span class="stat-suffix">+</span>
                <span class="stat-label">Years in Arts & Media Practice</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="150">0</span><span class="stat-suffix">+</span>
                <span class="stat-label">Media Projects & Productions</span>
            </div>
            <div class="stat-item">
                <span class="stat-number" data-target="40">0</span><span class="stat-suffix">+</span>
                <span class="stat-label">Schools & Organisations Engaged</span>
            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const statsBar = document.getElementById('statsBar');
        let animated = false;

        function animateCounters() {
            if (animated) return;

            const counters = statsBar.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000; // 2 seconds
                const increment = target / (duration / 16); // ~60fps
                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };
                updateCounter();
            });
            animated = true;
        }

        // Intersection Observer for scroll trigger
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                }
            });
        }, { threshold: 0.5 });

        observer.observe(statsBar);
    });
</script>