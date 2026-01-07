<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles & Insights - BLACSPICE MEDIA</title>
    <meta name="description"
        content="Read the latest insights, trends, and stories from the world of media, filmmaking, and education by BLACSPICE MEDIA.">
    <meta name="keywords"
        content="media blog, filmmaking tips, industry news, creativity insights, blacspice articles, media education blog">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>favicon.png">

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
    $pageTitle = "Articles";
    $pageBreadcrumbs = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Articles', 'url' => '#']
    ];
    include_once('common/breadcrumb.php');
    ?>

    <?php
    include_once('common/mock-data.php');

    // Pagination Logic
    $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    if ($currentPage < 1)
        $currentPage = 1;

    $perPage = 6;
    $totalArticles = count($all_articles);
    $totalPages = ceil($totalArticles / $perPage);

    if ($currentPage > $totalPages && $totalPages > 0)
        $currentPage = $totalPages;

    $startIndex = ($currentPage - 1) * $perPage;
    $pagedArticles = array_slice($all_articles, $startIndex, $perPage);
    ?>

    <section class="articles-page-section">
        <div class="container">
            <div class="row g-4 gy-5">
                <?php foreach ($pagedArticles as $article): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="article-card">
                            <div class="article-img-wrapper">
                                <a href="article-detail.php?id=<?= $article['id'] ?>">
                                    <img src="<?= BASEURL . $article['image'] ?>" alt="<?= $article['title'] ?>"
                                        class="article-img">
                                </a>
                            </div>
                            <div class="article-content">
                                <div class="article-meta">
                                    <span class="article-category"><?= $article['category'] ?></span>
                                    <span class="article-date"><i class="fa fa-calendar-alt"></i>
                                        <?= $article['date'] ?></span>
                                </div>
                                <h3 class="article-title">
                                    <a href="article-detail.php?id=<?= $article['id'] ?>"><?= $article['title'] ?></a>
                                </h3>
                                <p class="article-excerpt"><?= $article['excerpt'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($totalPages > 1): ?>
                <div class="pagination-wrapper">
                    <ul class="pagination">
                        <?php if ($currentPage > 1): ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?= $currentPage - 1 ?>"><i class="fa fa-chevron-left"></i></a>
                            </li>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?= $i === $currentPage ? 'active' : '' ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>

                        <?php if ($currentPage < $totalPages): ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?= $currentPage + 1 ?>"><i
                                        class="fa fa-chevron-right"></i></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php include_once('common/footer.php'); ?>
    <?php include_once('common/common-js.php'); ?>
</body>

</html>