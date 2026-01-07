<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <?php
  include_once('config.php');
  include_once('common/common-css.php');
  ?>

  <title>Creative Media Production & Enrichment - BLACSPICE MEDIA</title>
  <meta name="keywords"
    content="media production, enrichment programmes, film workshops, Singapore media, BLACSPICE MEDIA, Saleem Hadi, video production, media consultation, storytelling, arts education">
  <meta name="description"
    content="BLACSPICE MEDIA integrates entertainment and education through Media Productions, Enrichment Programmes, and Consultation. Spearheaded by award-winning filmmaker Saleem Hadi.">
  <link rel="alternate" hreflang="en" href="<?= BASEURL ?>" />
  <link rel="canonical" href="<?= BASEURL ?>">
  <link rel="icon" type="image/png" href="<?= BASEURL ?>favicon.png">

  <meta property="og:url" content="<?= BASEURL ?>" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Creative Media Production & Enrichment - BLACSPICE MEDIA" />
  <meta property="og:description"
    content="BLACSPICE MEDIA integrates entertainment and education through Media Productions, Enrichment Programmes, and Consultation. Spearheaded by award-winning filmmaker Saleem Hadi." />
  <meta property="og:site_name" content="BLACSPICE MEDIA" />

</head>

<body class="home-page">

  <div class="Page-wrapper">
    <?php
    include_once('common/header.php');
    ?>

    <?php include_once('common/hero-slider.php'); ?>

    <!-- Client Logo Slider -->
    <?php include_once('common/clients.php'); ?>

    <!-- About Section -->
    <?php include_once('common/about-summary.php'); ?>

    <!-- Services Section -->
    <?php include_once('common/services-summary.php'); ?>

    <!-- Testimonials Section -->
    <?php include_once('common/testimonials.php'); ?>

    <!-- Services Section -->
    <?php include_once('common/faq.php'); ?>

    <?php
    include_once('common/footer.php');
    ?>

  </div>

</body>
<?php
include_once('common/common-js.php');
?>

</html>