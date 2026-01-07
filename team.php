<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - BLACSPICE MEDIA</title>
    <meta name="description"
        content="Meet the creative minds behind BLACSPICE MEDIA. A team of dedicated professionals passionate about storytelling and media education.">
    <meta name="keywords"
        content="blacspice team, creative professionals, media trainers, filmmakers Singapore, digital storytellers, Saleem Hadi team">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>favicon.png">

    <?php include_once('common/common-css.php'); ?>
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/team.css">
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
    $pageTitle = "Our Team";
    $pageBreadcrumbs = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Our Team', 'url' => '#']
    ];
    include_once('common/breadcrumb.php');
    ?>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="team-header animate-on-scroll" data-animation="fadeInUp">
                <h2>Dedicated Minds Exceptional <span>Results</span></h2>
                <p>Meet the dedicated team behind BLACSPICE MEDIA. Our experts bring together innovation, expertise, and
                    passion to deliver exceptional media solutions.</p>
            </div>

            <div class="team-grid">
                <!-- Team Member 1 (Featured) -->
                <div class="team-card animate-on-scroll" data-animation="fadeInUp">
                    <div class="team-img-wrapper">
                        <img src="<?= BASEURL ?>assets/img/saleem.jpg" alt="Saleem Hadi" class="team-img">
                    </div>
                    <div class="team-info">
                        <h4>Saleem Hadi</h4>
                        <span>CEO & Founder</span>
                    </div>
                    <div class="team-socials">
                        <a href="#" class="team-social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="team-social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="team-social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-card animate-on-scroll delay-1" data-animation="fadeInUp">
                    <div class="team-img-wrapper">
                        <img src="<?= BASEURL ?>assets/img/saleem.jpg" alt="Team Member" class="team-img">
                    </div>
                    <div class="team-info">
                        <h4>Alex Morgan</h4>
                        <span>Creative Director</span>
                    </div>
                    <div class="team-socials">
                        <a href="#" class="team-social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="team-social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="team-social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="team-card animate-on-scroll delay-2" data-animation="fadeInUp">
                    <div class="team-img-wrapper">
                        <img src="<?= BASEURL ?>assets/img/saleem.jpg" alt="Team Member" class="team-img">
                    </div>
                    <div class="team-info">
                        <h4>Riley Carter</h4>
                        <span>Media Producer</span>
                    </div>
                    <div class="team-socials">
                        <a href="#" class="team-social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="team-social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="team-social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="team-card animate-on-scroll delay-3" data-animation="fadeInUp">
                    <div class="team-img-wrapper">
                        <img src="<?= BASEURL ?>assets/img/saleem.jpg" alt="Team Member" class="team-img">
                    </div>
                    <div class="team-info">
                        <h4>Casey Brown</h4>
                        <span>Lead Videographer</span>
                    </div>
                    <div class="team-socials">
                        <a href="#" class="team-social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="team-social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="team-social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="team-card animate-on-scroll delay-4" data-animation="fadeInUp">
                    <div class="team-img-wrapper">
                        <img src="<?= BASEURL ?>assets/img/saleem.jpg" alt="Team Member" class="team-img">
                    </div>
                    <div class="team-info">
                        <h4>Ethan Harper</h4>
                        <span>Programme Coordinator</span>
                    </div>
                    <div class="team-socials">
                        <a href="#" class="team-social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="team-social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="team-social-icon"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Logos -->
    <?php include_once('common/clients.php'); ?>

    <?php include_once('common/footer.php'); ?>
    <?php include_once('common/common-js.php'); ?>

</body>

</html>