<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - BLACSPICE MEDIA</title>
    <meta name="description"
        content="Explore our comprehensive services in Media Productions, Enrichment Programmes for schools and corporates, and professional Media Consultation.">
    <meta name="keywords"
        content="media services, video production services, film workshops, corporate training, media consulting Singapore, NAC-AEP, arts education">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>favicon.png">

    <!-- Include Common CSS -->
    <?php include_once('common/common-css.php'); ?>
    <style>
        /* Ensure navbar doesn't overlap content on fixed header */
        body {
            padding-top: var(--header-height);
        }
    </style>
</head>

<body>

    <?php include_once('common/header.php'); ?>

    <!-- Breadcrumb Section -->
    <?php
    $pageTitle = "Our Services";
    $pageBreadcrumbs = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Services', 'url' => '#']
    ];
    include_once('common/breadcrumb.php');
    ?>

    <!-- Detailed Services -->
    <section class="detailed-service-section">
        <div class="container">

            <!-- Service 1: Image Left, Content Right -->
            <div class="service-row" id="media-productions">
                <div class="service-image-col animate-on-scroll" data-animation="fadeInLeft">
                    <img src="<?= BASEURL ?>assets/img/services/img1.jpg" alt="Media Productions"
                        class="service-detail-img">
                </div>
                <div class="service-content-col animate-on-scroll delay-1" data-animation="fadeInRight">
                    <span class="highlight-badge"><i class="fa fa-film"></i> Production</span>
                    <h3><a href="productions.php" class="service-link">Media Productions</a></h3>
                    <p>BLACSPICEMEDIA has been working with <span class="text-highlight">local TV channels</span>,
                        production houses and corporate companies
                        to produce creative content for the past <span class="text-highlight">15 years</span> till date.
                        Most of the works would comprise of
                        docu-dramas, promotional videos, commercials, info-education programmes and music videos for
                        variety programmes.</p>
                    <p>BLACSPICE MEDIA also produces <span class="text-highlight">independent short films</span> that
                        are sent for prestigious local and
                        international short film competitions and festivals.</p>
                    <a href="productions.php" class="btn-find-more"><i class="fa fa-arrow-right"></i> Find out More</a>
                </div>
            </div>

            <!-- Service 2: Image Right, Content Left (Reverse) -->
            <div class="service-row reverse" id="enrichment-programmes">
                <div class="service-image-col animate-on-scroll" data-animation="fadeInRight">
                    <img src="<?= BASEURL ?>assets/img/services/img2.jpg" alt="Enrichment Programmes"
                        class="service-detail-img">
                </div>
                <div class="service-content-col animate-on-scroll delay-1" data-animation="fadeInLeft">
                    <span class="highlight-badge"><i class="fa fa-graduation-cap"></i> Education</span>
                    <h3><a href="programmes.php" class="service-link">Media Enrichment Programmes</a></h3>
                    <p>BLACSPICE MEDIA believes in heightening the <span class="text-highlight">media awareness</span>
                        and nurturing the art of filmmaking
                        amongst teens and adults, by conducting a plethora of diversified enrichment programmes and
                        courses.</p>
                    <p>With <span class="text-highlight">six programmes registered under National Arts Council</span> as
                        Arts Education Programmes (AEP)
                        that are conducted in schools (Sec to Tertiary), BLACSPICE MEDIA also designs and conducts
                        customised programmes to suit the learning demands of other learners in organisations and
                        amongst the public.</p>
                    <p>The programmes include topics that give an insight to the various facets of media content
                        creation, such as <span class="text-highlight">visual communication</span> and <span
                            class="text-highlight">video production</span>. By conducting such programmes,
                        BLACSPICE MEDIA aims to contribute to the local media and arts scene, by molding potential film
                        makers in Singapore into competent ones who produce quality work.</p>
                    <a href="programmes.php" class="btn-find-more"><i class="fa fa-arrow-right"></i> Find out More</a>
                </div>
            </div>

            <!-- Service 3: Image Left, Content Right -->
            <div class="service-row" id="media-consultation">
                <div class="service-image-col animate-on-scroll" data-animation="fadeInLeft">
                    <img src="<?= BASEURL ?>assets/img/services/img3.jpg" alt="Media Consultation"
                        class="service-detail-img">
                </div>
                <div class="service-content-col animate-on-scroll delay-1" data-animation="fadeInRight">
                    <span class="highlight-badge"><i class="fa fa-comments"></i> Consultation</span>
                    <h3>Media Consultation</h3>
                    <p><span class="text-highlight">Every idea matters.</span> But the way you present it matters more.
                        If you are seeking to bring your
                        idea out to the public in the most attractive and efficient way possible, you have come to the
                        right place.</p>
                    <p>BLACSPICE MEDIA offers <span class="text-highlight">media consultation</span> for multifarious
                        aspects of media content production.
                        Be it launching a business, planning a media project, getting resource ideas to tap on for a
                        video production, turning a media-related hobby into something more, or even showcasing a
                        creative project to the world in a way that would make heads turn, we got it.</p>
                    <a href="contact.php" class="btn-find-more"><i class="fa fa-arrow-right"></i> Find out More</a>
                </div>
            </div>

        </div>
    </section>

    <?php include_once('common/footer.php'); ?>
    <?php include_once('common/common-js.php'); ?>

</body>

</html>