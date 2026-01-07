<?php
require_once('config.php');
require_once('programme_data.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Enrichment Programmes - BLACSPICE MEDIA</title>
    <meta name="description"
        content="Our NAC-AEP registered media enrichment programmes cultivate storytelling and filmmaking skills for students, youths, and adults. Hands-on and tailored options available.">
    <meta name="keywords"
        content="enrichment programmes, NAC-AEP, filmmaking courses, media workshops, digital storytelling, education, school programmes Singapore">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>favicon.png">

    <!-- Include Common CSS -->
    <?php include_once('common/common-css.php'); ?>
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/programmes.css">
</head>

<body class="programmes-page">

    <?php include_once('common/header.php'); ?>

    <!-- Breadcrumb Section -->
    <?php
    $pageTitle = "Media Enrichment Programmes";
    $pageBreadcrumbs = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Programmes', 'url' => '#']
    ];
    include_once('common/breadcrumb.php');
    ?>

    <!-- Intro Section -->
    <section class="programmes-intro pt-5 pb-4">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-10">
                    <h2 class="display-4 font-weight-bold mb-3">Media <span class="text-serif">Enrichment
                            Programmes</span></h2>
                    <p class="lead text-muted mx-auto" style="max-width: 800px;">BLACSPICE MEDIA believes in heightening
                        the media awareness, amongst teens and adults, by conducting various enrichment programmes. By
                        conducting enrichment programmes in creative writing, theatre and media, BLACSPICE MEDIA aims to
                        contribute to the local media and arts scene, by grooming potential film makers in Singapore
                        into competent ones who produce quality work.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="programmes-grid-section">
        <div class="container-fluid px-lg-5">

            <!-- Section 1: NAC-AEP -->
            <div class="programmes-row-section">
                <div class="section-sidebar">
                    <div class="sidebar-sticky-wrapper">
                        <h3 class="section-sidebar-title">NAC-Arts Education Programmes (NAC-AEP) 2026 – 2028</h3>
                        <div class="section-sidebar-line"></div>
                    </div>
                </div>
                <div class="section-grid-container">
                    <div class="programmes-grid-view">
                        <?php foreach ($nac_programs as $prog): ?>
                            <a href="programme-detail.php?id=<?= $prog['id'] ?>" class="prog-grid-card">
                                <div class="prog-card-img-wrapper">
                                    <img src="<?= BASEURL ?>assets/img/programmes/nac-2026-2028.png"
                                        alt="<?= $prog['name'] ?>" class="prog-card-thumb">
                                    <span class="prog-type-badge"><?= $prog['type'] ?></span>
                                </div>
                                <div class="prog-card-content">
                                    <h4 class="prog-card-name"><?= $prog['name'] ?></h4>
                                    <p class="prog-card-desc"><?= $prog['description'] ?></p>
                                    <div class="prog-card-footer">
                                        <span class="view-text">View Details</span>
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <hr class="section-divider">

            <!-- Section 2: Customized Programmes -->
            <div class="programmes-row-section">
                <div class="section-sidebar">
                    <div class="sidebar-sticky-wrapper">
                        <h3 class="section-sidebar-title">Customized Programmes of Blacspicemedia</h3>
                        <div class="section-sidebar-line"></div>
                    </div>
                </div>
                <div class="section-grid-container">
                    <div class="programmes-grid-view">
                        <?php foreach ($customized_programs as $prog): ?>
                            <a href="programme-detail.php?id=<?= $prog['id'] ?>" class="prog-grid-card">
                                <div class="prog-card-img-wrapper">
                                    <img src="<?= BASEURL ?>assets/img/programmes/customized-programmes.png"
                                        alt="<?= $prog['name'] ?>" class="prog-card-thumb">
                                    <span class="prog-type-badge"><?= $prog['type'] ?></span>
                                </div>
                                <div class="prog-card-content">
                                    <h4 class="prog-card-name"><?= $prog['name'] ?></h4>
                                    <p class="prog-card-desc"><?= $prog['description'] ?></p>
                                    <div class="prog-card-footer">
                                        <span class="view-text">View Details</span>
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include_once('common/footer.php'); ?>
    <?php include_once('common/common-js.php'); ?>

</body>

</html>