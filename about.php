<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - BLACSPICE MEDIA</title>
    <meta name="description"
        content="Learn about BLACSPICE MEDIA, a creative agency founded by Saleem Hadi, combining media production and education to empower storytellers in Singapore.">
    <meta name="keywords"
        content="about blacspice media, Saleem Hadi, media agency Singapore, storytelling, theatre and film, creative agency, media training">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>favicon.png">

    <?php include_once('common/common-css.php'); ?>
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/about-page.css">
    <style>
        body {
            padding-top: var(--header-height);
        }
    </style>
</head>

<body>

    <?php include_once('common/header.php'); ?>

    <!-- Breadcrumb Section -->
    <?php
    $pageTitle = "About Us";
    $pageBreadcrumbs = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'About Us', 'url' => '#']
    ];
    include_once('common/breadcrumb.php');
    ?>

    <!-- Row 1: Company Info & Events -->
    <section class="about-page-section">
        <div class="container">
            <div class="row">
                <!-- Left: Company Info -->
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="company-info animate-on-scroll" data-animation="fadeInLeft">
                        <span class="highlight-badge"><i class="fa fa-star icon-spin"></i> Creative Agency</span>
                        <h2>Who We Are</h2>
                        <p>
                            BLACSPICE MEDIA, spearheaded by <strong>Saleem Hadi</strong>, a media trainer, theatre
                            practitioner and
                            film-maker, is a creative agency that has two wings of operations: <span
                                class="text-highlight">media production</span> and <span class="text-highlight">media
                                enrichment programmes</span>.
                            We aim to produce dynamic and engaging content and bring about an awareness and in creating
                            media content amongst the general public, specifically youths and young adults.
                        </p>
                        <p><strong>Our intentions are:</strong></p>
                        <ul class="icon-list">
                            <li><i class="fa fa-check-circle icon-bounce"></i> To produce dynamic and engaging content
                            </li>
                            <li><i class="fa fa-check-circle icon-bounce"></i> Bring about an awareness and interest in
                                creating media content amongst the general
                                public, specifically youths and young adults</li>
                        </ul>
                    </div>
                </div>

                <!-- Right: Events List -->
                <div class="col-lg-5">
                    <div class="events-list animate-on-scroll" data-animation="fadeInRight">
                        <h4>Events We've Participated In</h4>
                        <ul>
                            <li><i class="fa fa-trophy"></i> Singapore Heritage Festival 2015</li>
                            <li><i class="fa fa-trophy"></i> SingLit Festival 2018</li>
                            <li><i class="fa fa-trophy"></i> Lit Up Festival 2018</li>
                            <li><i class="fa fa-trophy"></i> Enabling Festival 2018</li>
                            <li><i class="fa fa-trophy"></i> Singapore Tamil Youth Conference 2018</li>
                            <li><i class="fa fa-trophy"></i> SkillsFuture Festival 2019</li>
                            <li><i class="fa fa-trophy"></i> Singapore Writers Festival 2018 & 2019</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Row 2: CEO Section -->
    <section class="ceo-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left: CEO Content -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="ceo-content">
                        <span class="highlight-badge"><i class="fa fa-user-tie icon-spin"></i> Leadership</span>
                        <h3>Meet Our Founder</h3>
                        <p>
                            Saleem Hadi is an award-winning hybrid visual-storyteller who uses theatre and film to
                            explore social issues.
                            He is a bilingual writer who writes scripts, poems and short stories. Saleem had been
                            contributing heavily to
                            Singapore's arts and media industry since 1999. Saleem won the 1st Prize in 2017 Golden
                            Point Award Literary
                            Competition for his English short story. Saleem is championing a nation-wide Indian short
                            film archival project,
                            THEINDBOX.SG, under his non-profit organisation, Singapore Indian Theatre & Film Explorers
                            (SITFE).
                        </p>

                        <div class="ceo-profile">
                            <img src="<?= BASEURL ?>assets/img/saleem.jpg" alt="Saleem Hadi" class="ceo-photo">
                            <div class="ceo-info">
                                <h5>Saleem Hadi</h5>
                                <span>CEO, BLACSPICE MEDIA</span>
                            </div>
                        </div>

                        <div class="ceo-social">
                            <span>Follow us on</span>
                            <a href="https://www.saleemhadi.com" target="_blank"><i class="fa fa-globe"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Right: Video Thumbnail -->
                <div class="col-lg-6">
                    <div class="video-thumbnail-wrapper" onclick="openVideoModal()">
                        <img src="<?= BASEURL ?>assets/img/about-video.jpg" alt="Video" class="video-thumbnail">
                        <div class="play-btn">
                            <i class="fa fa-play"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Modal -->
    <div class="video-modal" id="videoModal">
        <div class="video-modal-content">
            <button class="modal-close-btn" onclick="closeVideoModal()">
                <i class="fa fa-times"></i>
            </button>
            <iframe id="youtubeVideo" src=""
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>

    <?php include_once('common/footer.php'); ?>
    <?php include_once('common/common-js.php'); ?>

    <script>
        const videoModal = document.getElementById('videoModal');
        const youtubeVideo = document.getElementById('youtubeVideo');
        const youtubeURL = 'https://www.youtube.com/embed/ljAxXXnQPSU?autoplay=1';

        function openVideoModal() {
            videoModal.classList.add('active');
            youtubeVideo.src = youtubeURL;
            document.body.style.overflow = 'hidden';
        }

        function closeVideoModal() {
            videoModal.classList.remove('active');
            youtubeVideo.src = ''; // Stop video
            document.body.style.overflow = 'auto';
        }

        // Close on outside click
        videoModal.addEventListener('click', function (e) {
            if (e.target === videoModal) {
                closeVideoModal();
            }
        });

        // Close on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && videoModal.classList.contains('active')) {
                closeVideoModal();
            }
        });
    </script>

</body>

</html>