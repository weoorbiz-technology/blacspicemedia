<?php
/**
 * Hero Slider Component
 */
?>
<section class="hero-slider-section">
    <!-- Slider Backgrounds -->
    <div class="hero-bg-container">
        <div class="hero-slide active" style="background-image: url('<?= BASEURL ?>assets/img/slider/img1.jpg');"></div>
        <div class="hero-slide" style="background-image: url('<?= BASEURL ?>assets/img/slider/img2.jpg');"></div>
        <div class="hero-slide" style="background-image: url('<?= BASEURL ?>assets/img/slider/img3.jpg');"></div>
        <div class="hero-overlay"></div>
    </div>

    <div class="container hero-content-container">
        <div class="row align-items-center">
            <!-- Left Side: Content -->
            <div class="col-lg-10 hero-text-col">
                <div class="hero-text-content">
                    <h1 class="hero-title animate-up">
                        <span class="hero-brand">BLACSPICE MEDIA</span>
                        <span class="hero-tagline">is a <span class="highlight-marker">media agency</span> that aims to
                            fulfil the needs of <span class="highlight-marker">entertainment</span>, <span
                                class="highlight-marker">education</span> and <span
                                class="highlight-marker">enterprise</span>.</span>
                    </h1>
                    <p class="hero-paragraph animate-up delay-1">
                        At <span class="text-bold">BLACSPICE MEDIA</span>, we strongly believe in <span
                            class="text-highlight-small">igniting the inspirations</span> of people to create new works
                        that can bring about <span class="text-highlight-small">positive change</span> in our society.
                    </p>

                    <!-- Social Links -->
                    <div class="hero-socials animate-up delay-2">
                        <a href="https://www.facebook.com/blacspicemedia/" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/blacspicemedia" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/@BlacspiceMedia" target="_blank"><i
                                class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/blacspicemedia/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/blacspice-media/" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Talk to Us -->
            <div class="col-lg-2 hero-cta-col">
                <div class="talk-to-us animate-up delay-3">
                    <div class="cta-circle">
                        <div class="cta-text-ring">
                            <!-- SVG text ring or just styled elements -->
                            <svg viewBox="0 0 100 100" width="150" height="150">
                                <defs>
                                    <path id="circlePath"
                                        d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" />
                                </defs>
                                <text font-size="8" font-weight="700" fill="white">
                                    <textPath xlink:href="#circlePath">
                                        TALK TO US • TALK TO US • TALK TO US • TALK TO US •
                                    </textPath>
                                </text>
                            </svg>
                            <a href="contact.php" class="cta-arrow">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.hero-slide');
        let currentSlide = 0;

        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        // Change slide every 4 seconds
        setInterval(nextSlide, 4000);
    });
</script>