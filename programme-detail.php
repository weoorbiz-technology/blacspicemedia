<?php
require_once('config.php');
require_once('programme_data.php');

$prog_id = $_GET['id'] ?? '';
$programme = null;

foreach ($programs as $prog) {
    if ($prog['id'] === $prog_id) {
        $programme = $prog;
        break;
    }
}

if (!$programme) {
    header("Location: programmes.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $programme['name'] ?> - BLACSPICE MEDIA
    </title>
    <link rel="icon" type="image/png" href="<?= BASEURL ?>favicon.png">

    <!-- Include Common CSS -->
    <?php include_once('common/common-css.php'); ?>
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/programmes.css">
</head>

<body class="programme-detail-page">

    <?php include_once('common/header.php'); ?>

    <!-- Breadcrumb Section -->
    <?php
    $pageTitle = $programme['name'];
    $pageBreadcrumbs = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Programmes', 'url' => 'programmes.php'],
        ['label' => 'Detail', 'url' => '#']
    ];
    include_once('common/breadcrumb.php');
    ?>

    <section class="detail-header">
        <div class="container">
            <span class="prog-id-badge">ID:
                <?= $programme['id'] ?>
            </span>
            <h1 class="display-4 font-weight-bold">
                <?= $programme['name'] ?>
            </h1>
            <hr>
        </div>
    </section>

    <div class="container">
        <div class="detail-grid">

            <div class="detail-main">
                <h2>About this Programme</h2>
                <div class="full-desc">
                    <?= nl2br($programme['description']) ?>
                </div>

                <?php if (isset($programme['learning_objectives'])): ?>
                    <div class="info-list-section mt-5">
                        <h3 class="mb-3">Learning Objectives</h3>
                        <ul class="info-list">
                            <?php foreach ($programme['learning_objectives'] as $obj): ?>
                                <li><?= $obj ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (isset($programme['topics_covered'])): ?>
                    <div class="info-list-section mt-5">
                        <h3 class="mb-3">Topics Covered</h3>
                        <ul class="info-list">
                            <?php foreach ($programme['topics_covered'] as $topic): ?>
                                <li><?= $topic ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (isset($programme['workshops'])): ?>
                    <div class="info-list-section mt-5">
                        <h3 class="mb-3">Workshops</h3>
                        <ul class="info-list">
                            <?php foreach ($programme['workshops'] as $ws): ?>
                                <li><?= $ws ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="highlight-box">
                    <h3 class="mb-4">Programme Overview</h3>
                    <div class="highlight-item">
                        <span class="highlight-label">Type:</span>
                        <span class="highlight-value"><?= $programme['type'] ?></span>
                    </div>

                    <?php if (isset($programme['mode'])): ?>
                        <div class="highlight-item">
                            <span class="highlight-label">Mode:</span>
                            <span class="highlight-value">
                                <?= is_array($programme['mode']) ? implode(", ", $programme['mode']) : $programme['mode'] ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($programme['duration'])): ?>
                        <div class="highlight-item">
                            <span class="highlight-label">Duration:</span>
                            <span class="highlight-value">
                                <?php if (isset($programme['duration']['sessions'])): ?>
                                    <?= $programme['duration']['sessions'] ?> Sessions
                                    <?php if (isset($programme['duration']['hours'])): ?>
                                        (<?= $programme['duration']['hours'] ?>h <?= $programme['duration']['minutes'] ?? 0 ?>m
                                        total)
                                    <?php elseif (isset($programme['duration']['total_hours'])): ?>
                                        (<?= $programme['duration']['total_hours'] ?> Hours total)
                                    <?php endif; ?>
                                <?php endif; ?>
                            </span>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($programme['recommended_size'])): ?>
                        <div class="highlight-item">
                            <span class="highlight-label">Recommended Size:</span>
                            <span class="highlight-value"><?= $programme['recommended_size'] ?> students</span>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($programme['cost'])): ?>
                        <div class="highlight-item">
                            <span class="highlight-label">Cost:</span>
                            <span class="highlight-value text-primary font-weight-bold"><?= $programme['cost'] ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="detail-sidebar">
                <div class="action-card">
                    <h4>Interested in this?</h4>
                    <?php if (isset($programme['link'])): ?>
                        <p>You can find more details or register interest through the NAC Arts Education portal.</p>
                        <a href="<?= $programme['link'] ?>" target="_blank" class="btn-nac-link">
                            Visit NAC Portal <i class="fa fa-external-link-alt ml-2"></i>
                        </a>
                    <?php else: ?>
                        <p>Get in touch with us to customize this programme for your school or organization.</p>
                    <?php endif; ?>

                    <a href="contact.php" class="btn btn-outline-dark btn-block mt-3 py-3 font-weight-bold">
                        Enquire Directly <i class="fa fa-envelope ml-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <?php include_once('common/footer.php'); ?>
    <?php include_once('common/common-js.php'); ?>

</body>

</html>