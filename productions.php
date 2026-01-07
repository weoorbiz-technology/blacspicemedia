<?php
require_once('config.php');
require_once('production_data.php');

// Flatten the productions array for easier JS filtering
$all_videos = [];
foreach ($productions as $category => $videos) {
    foreach ($videos as $video) {
        $video['category'] = str_replace(' ', '-', strtolower($category));
        $all_videos[] = $video;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Productions - BLACSPICE MEDIA</title>
    <meta name="description"
        content="Discover our portfolio of short films, docu-dramas, corporate videos, and commercials. We create engaging content that tells compelling stories.">
    <meta name="keywords"
        content="media production portfolio, short films, corporate videos, commercials, video production company Singapore, blacspice media projects">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>favicon.png">

    <!-- Include Common CSS -->
    <?php include_once('common/common-css.php'); ?>
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/productions.css">
</head>

<body class="productions-page">

    <?php include_once('common/header.php'); ?>

    <!-- Breadcrumb Section -->
    <?php
    $pageTitle = "Media Productions";
    $pageBreadcrumbs = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Productions', 'url' => '#']
    ];
    include_once('common/breadcrumb.php');
    ?>

    <!-- Intro Section -->
    <section class="productions-intro pt-5 pb-4">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-10">
                    <h2 class="display-4 font-weight-bold mb-3">Media <span class="text-serif">Productions</span></h2>
                    <p class="lead text-muted mx-auto" style="max-width: 800px;">Explore our diverse portfolio of visual
                        works, from award-winning short films to impactful corporate communications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section (Based on Reference Image) -->
    <div class="container mb-5">
        <div class="filter-wrapper text-center">
            <div class="filter-tabs">
                <button class="filter-tab active" data-filter="all">All</button>
                <?php foreach (array_keys($productions) as $category): ?>
                    <button class="filter-tab" data-filter="<?= str_replace(' ', '-', strtolower($category)) ?>">
                        <?= $category ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Gallery Grid -->
    <div class="container mb-5">
        <div class="row" id="productions-grid">
            <?php foreach ($all_videos as $video): ?>
                <div class="col-lg-4 col-md-6 mb-4 video-item" data-category="<?= $video['category'] ?>">
                    <div class="netflix-card" data-video-id="<?= $video['id'] ?>" data-platform="<?= $video['platform'] ?>"
                        data-title="<?= $video['title'] ?>">

                        <div class="card-img-container">
                            <img src="<?= $video['thumbnail'] ?>" alt="<?= $video['title'] ?>" class="card-thumb">
                            <div class="card-overlay-gradient"></div>

                            <!-- Large Play Button on Hover -->
                            <div class="card-play-overlay">
                                <div class="play-icon-circle">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>

                            <!-- Bottom Content Overlay -->
                            <div class="card-info-overlay">
                                <div class="info-left">
                                    <h4 class="card-video-title"><?= $video['title'] ?></h4>
                                    <p class="card-video-category">
                                        <?= array_search($video['category'], array_map(function ($c) {
                                            return str_replace(' ', '-', strtolower($c));
                                        }, array_combine(array_keys($productions), array_keys($productions)))) ?>
                                    </p>
                                </div>
                                <div class="info-right">
                                    <?php if ($video['platform'] === 'youtube'): ?>
                                        <i class="fab fa-youtube brand-icon yt"></i>
                                    <?php else: ?>
                                        <i class="fab fa-vimeo-v brand-icon vm"></i>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- View More Link -->
        <div class="view-more-container text-center py-5">
            <p class="mb-4">Want to see more of our work?</p>
            <a href="https://www.youtube.com/@BlacspiceMedia" target="_blank" class="btn btn-dark btn-lg px-5 py-3">
                Visit BSM YouTube Page <i class="fab fa-youtube ml-2"></i>
            </a>
        </div>
    </div>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0 p-0 mb-2">
                    <h5 class="modal-title text-white" id="modalVideoTitle"></h5>
                    <button type="button" class="close text-white opacity-1" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="embed-responsive embed-responsive-16by9 bg-black shadow-lg">
                        <div id="videoContainer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('common/footer.php'); ?>
    <?php include_once('common/common-js.php'); ?>

    <script>
        $(document).ready(function () {
            // Tab Filtering Logic
            $('.filter-tab').on('click', function () {
                const filterValue = $(this).attr('data-filter');

                // Active class
                $('.filter-tab').removeClass('active');
                $(this).addClass('active');

                // Filter Animation
                $('.video-item').fadeOut(300, function () {
                    if (filterValue === 'all') {
                        $('.video-item').fadeIn(300);
                    } else {
                        $(`.video-item[data-category="${filterValue}"]`).fadeIn(300);
                    }
                });
            });

            // Video Play Logic
            $('.netflix-card').on('click', function () {
                const videoId = $(this).data('video-id');
                const platform = $(this).data('platform');
                const title = $(this).data('title');
                let embedUrl = '';

                if (platform === 'youtube') {
                    embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                } else if (platform === 'vimeo') {
                    embedUrl = `https://player.vimeo.com/video/${videoId}?autoplay=1`;
                }

                $('#modalVideoTitle').text(title);
                $('#videoContainer').html(`<iframe class="embed-responsive-item" src="${embedUrl}" allowfullscreen allow="autoplay"></iframe>`);
                $('#videoModal').modal('show');
            });

            $('#videoModal').on('hidden.bs.modal', function () {
                $('#videoContainer').empty();
            });
        });
    </script>
</body>

</html>