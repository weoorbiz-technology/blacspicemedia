<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - BLACSPICE MEDIA</title>
    <meta name="description"
        content="Get in touch with BLACSPICE MEDIA for collaborations, enquiries about our programmes, or production services. Let's create something great together.">
    <meta name="keywords"
        content="contact blacspice, media enquiries, hire filmmaker, collaboration, video production services Singapore, media workshop enquiry">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>favicon.png">

    <!-- Include Common CSS -->
    <?php include_once('common/common-css.php'); ?>
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
    $pageTitle = "Contact Us";
    $pageBreadcrumbs = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Contact', 'url' => '#']
    ];
    include_once('common/breadcrumb.php');
    ?>

    <!-- Contact Content -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <!-- Left Column: Info -->
                <div class="col-lg-5 col-md-12">
                    <div class="contact-info-wrapper animate-on-scroll" data-animation="fadeInLeft">
                        <span class="highlight-badge"><i class="fa fa-headset"></i> Let's Connect</span>
                        <h2 class="contact-title">Get in Touch with Us<br><span>Today</span></h2>
                        <p class="contact-desc">We're here to help. Whether you're looking for tailored media production
                            solutions or just want to learn more about our services.</p>

                        <div class="social-links">
                            <a href="https://www.facebook.com/blacspicemedia/" class="social-icon" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/blacspicemedia/" class="social-icon" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://x.com/blacspicemedia" class="social-icon" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/@BlacspiceMedia" class="social-icon" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/company/blacspice-media/" class="social-icon"
                                target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>

                        <div class="contact-details">
                            <div class="contact-detail-item" style="flex-basis: 100%;">
                                <div class="detail-icon"><i class="fa fa-map-marker-alt"></i></div>
                                <div class="detail-text">
                                    <h5>Address</h5>
                                    <p>136 Pasir Ris Street 11 #05-235<br>Singapore 510136</p>
                                </div>
                            </div>

                            <div class="contact-detail-item">
                                <div class="detail-icon"><i class="fa fa-phone-alt"></i></div>
                                <div class="detail-text">
                                    <h5>Phone</h5>
                                    <p>(+65) 8268 6481</p>
                                </div>
                            </div>

                            <div class="contact-detail-item">
                                <div class="detail-icon"><i class="fa fa-envelope"></i></div>
                                <div class="detail-text">
                                    <h5>Email</h5>
                                    <p>saleemhadi@blacspicemedia.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Form -->
                <div class="col-lg-7 col-md-12">
                    <div class="contact-form-wrapper animate-on-scroll delay-1" data-animation="fadeInRight">
                        <div class="form-header">
                            <h4><i class="fa fa-paper-plane"></i> Send Us a Message</h4>
                        </div>
                        <form action="#" method="POST">
                            <div class="form-row">
                                <div class="form-col">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control-custom" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-col">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <input type="text" class="form-control-custom" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control-custom" placeholder="Email">
                            </div>

                            <!-- Service Selection -->
                            <div class="form-group">
                                <label style="margin-bottom: 15px; display: block;">What Kind of Service?</label>
                                <div class="service-checkbox-group">
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="service[]" value="Media Productions">
                                        <span class="checkmark"></span>
                                        Media Productions
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="service[]" value="Enrichment Programmes">
                                        <span class="checkmark"></span>
                                        Enrichment Programmes
                                    </label>
                                    <label class="custom-checkbox">
                                        <input type="checkbox" name="service[]" value="Media Consultation">
                                        <span class="checkmark"></span>
                                        Media Consultation
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control-custom" rows="5"
                                    placeholder="Type your message"></textarea>
                            </div>

                            <div class="checkbox-group">
                                <input type="checkbox" id="terms">
                                <label for="terms" style="margin:0; font-weight:400;">I accept the Terms</label>
                            </div>

                            <button type="submit" class="btn-submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('common/footer.php'); ?>
    <?php include_once('common/common-js.php'); ?>

</body>

</html>