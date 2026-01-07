<section class="faq-section">
    <div class="container">
        <div class="faq-container">
            <h2 class="faq-title">Frequently Asked <span>Questions</span></h2>
            <p class="faq-subtitle">Explore our FAQs to find quick and helpful responses to common queries about our
                services, process, and expertise.</p>

            <div class="faq-list">
                <?php
                $faqs = [
                    [
                        "question" => "What does BLACSPICE MEDIA do?",
                        "answer" => "BLACSPICE MEDIA is a creative media agency that integrates entertainment, education, and enterprise through three key wings: Media Productions, Enrichment Programmes, and Media Consultation. We produce engaging media content while nurturing storytelling and filmmaking skills among youths, adults, and organisations."
                    ],
                    [
                        "question" => "Who is behind BLACSPICE MEDIA?",
                        "answer" => "BLACSPICE MEDIA is spearheaded by Saleem Hadi, an award-winning film-maker, theatre practitioner, media trainer, and hybrid visual storyteller. He has been contributing to Singapore’s arts and media industry since 1999 and is also the founder of Singapore Indian Theatre & Film Explorers (SITFE)."
                    ],
                    [
                        "question" => "What types of media productions does BLACSPICE MEDIA handle?",
                        "answer" => "BLACSPICE MEDIA produces a wide range of content including short films, docu-dramas, promotional and corporate videos, commercials, public service announcements, info-education programmes, and independent films showcased at local and international festivals."
                    ],
                    [
                        "question" => "Are your enrichment programmes only for schools?",
                        "answer" => "No. While BLACSPICE MEDIA offers NAC-AEP registered programmes for secondary and tertiary institutions, we also conduct enrichment courses, workshops, and customised training for adults, corporate teams, organisations, and the general public."
                    ],
                    [
                        "question" => "Do you offer media consultation for businesses or individuals?",
                        "answer" => "Yes. BLACSPICE MEDIA provides media consultation for businesses, creatives, and individuals—from launching a brand or planning a media project to refining storytelling, sourcing production resources, and presenting creative ideas effectively to the public."
                    ]
                ];
                ?>

                <?php foreach ($faqs as $index => $faq): ?>
                    <div class="faq-item <?= $index === 0 ? 'active' : '' ?>">
                        <div class="faq-header">
                            <h4 class="faq-question">
                                <?= ($index + 1) . '. ' . $faq['question'] ?>
                            </h4>
                            <div class="faq-icon"><i class="fa fa-arrow-down"></i></div>
                        </div>
                        <div class="faq-body" <?= $index === 0 ? 'style="max-height: 300px;"' : '' ?>>
                            <p class="faq-answer">
                                <?= $faq['answer'] ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // FAQ Toggle Logic
        const faqHeaders = document.querySelectorAll('.faq-header');

        faqHeaders.forEach(header => {
            header.addEventListener('click', function () {
                const item = this.parentElement;
                const body = this.nextElementSibling;

                // Toggle active class
                if (item.classList.contains('active')) {
                    item.classList.remove('active');
                    body.style.maxHeight = '0';
                } else {
                    // Optional: Close others
                    // document.querySelectorAll('.faq-item').forEach(i => {
                    //     i.classList.remove('active');
                    //     i.querySelector('.faq-body').style.maxHeight = '0';
                    // });

                    item.classList.add('active');
                    body.style.maxHeight = body.scrollHeight + 'px';
                }
            });
        });

        // Scroll Animation Logic using Intersection Observer
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated', 'fadeInUp');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe FAQ items
        document.querySelectorAll('.faq-item').forEach((item, index) => {
            // Add default hidden opacity or class to prevent flash before animation if needed
            // item.style.opacity = '0'; 
            // Stagger animations slightly
            item.style.animationDelay = (index * 0.1) + 's';
            observer.observe(item);
        });
    });
</script>