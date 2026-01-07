<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - BLACSPICE MEDIA</title>
    <meta name="description"
        content="View our gallery of past projects, events, and workshops. A diverse portfolio highlighting our journey in media and education.">
    <meta name="keywords"
        content="media gallery, project showcase, event photos, production stills, blacspice media gallery, film portfolio">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>favicon.png">

    <?php include_once('common/common-css.php'); ?>
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/gallery.css">
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
    $pageTitle = "Gallery";
    $pageBreadcrumbs = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Gallery', 'url' => '#']
    ];
    include_once('common/breadcrumb.php');
    ?>

    <?php
    $gallery_items = [
        ['type' => 'image', 'src' => 'assets/img/gallery/img1.jpg'],
        ['type' => 'image', 'src' => 'assets/img/gallery/img2.jpg'],
        ['type' => 'image', 'src' => 'assets/img/gallery/img3.jpg'],
        ['type' => 'image', 'src' => 'assets/img/gallery/img4.jpg'],
        ['type' => 'image', 'src' => 'assets/img/gallery/img5.jpg'],
        ['type' => 'image', 'src' => 'assets/img/gallery/img6.jpg'],
        ['type' => 'image', 'src' => 'assets/img/gallery/img7.jpg'],
        ['type' => 'video', 'src' => 'assets/img/gallery/video1.mp4'],
        ['type' => 'video', 'src' => 'assets/img/gallery/video2.mp4'],
    ];
    ?>

    <section class="gallery-section">
        <div class="container">
            <div class="gallery-grid">
                <?php foreach ($gallery_items as $index => $item): ?>
                    <div class="gallery-item" onclick="openGalleryModal(<?= $index ?>)">
                        <?php if ($item['type'] === 'image'): ?>
                            <img src="<?= BASEURL . $item['src'] ?>" alt="Gallery Image <?= $index + 1 ?>"
                                class="gallery-thumb">
                            <div class="media-icon"><i class="fa fa-image"></i></div>
                        <?php else: ?>
                            <!-- For video, using a simple thumbnail approach -->
                            <video src="<?= BASEURL . $item['src'] ?>#t=0.1" class="gallery-thumb" muted></video>
                            <div class="media-icon"><i class="fa fa-play"></i></div>
                        <?php endif; ?>
                        <div class="gallery-overlay"></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Gallery Modal -->
    <div class="gallery-modal" id="galleryModal">
        <div class="modal-container">
            <span class="modal-close" onclick="closeGalleryModal()"><i class="fa fa-times"></i></span>

            <div id="modalMediaContainer"
                style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
                <!-- Media injected here -->
            </div>

            <div class="modal-nav nav-prev" onclick="changeMedia(-1)"><i class="fa fa-chevron-left"></i></div>
            <div class="modal-nav nav-next" onclick="changeMedia(1)"><i class="fa fa-chevron-right"></i></div>
        </div>
    </div>

    <?php include_once('common/footer.php'); ?>
    <?php include_once('common/common-js.php'); ?>

    <script>
        const galleryItems = <?= json_encode($gallery_items) ?>;
        const baseUrl = '<?= BASEURL ?>';
        let currentIndex = 0;

        function openGalleryModal(index) {
            currentIndex = index;
            updateModalContent();
            document.getElementById('galleryModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeGalleryModal() {
            document.getElementById('galleryModal').classList.remove('active');
            document.getElementById('modalMediaContainer').innerHTML = '';
            document.body.style.overflow = 'auto';
        }

        function updateModalContent() {
            const container = document.getElementById('modalMediaContainer');
            const item = galleryItems[currentIndex];
            container.innerHTML = '';

            if (item.type === 'image') {
                const img = document.createElement('img');
                img.src = baseUrl + item.src;
                img.className = 'modal-content-media';
                container.appendChild(img);
            } else {
                const video = document.createElement('video');
                video.src = baseUrl + item.src;
                video.controls = true;
                video.autoplay = true;
                video.className = 'modal-content-media';
                container.appendChild(video);
            }
        }

        function changeMedia(direction) {
            currentIndex += direction;
            if (currentIndex < 0) currentIndex = galleryItems.length - 1;
            if (currentIndex >= galleryItems.length) currentIndex = 0;
            updateModalContent();
        }

        // Close on escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeGalleryModal();
            if (e.key === 'ArrowLeft') changeMedia(-1);
            if (e.key === 'ArrowRight') changeMedia(1);
        });

        // Close on background click
        document.getElementById('galleryModal').addEventListener('click', (e) => {
            if (e.target.id === 'galleryModal' || e.target.classList.contains('modal-container')) {
                closeGalleryModal();
            }
        });
    </script>

</body>

</html>