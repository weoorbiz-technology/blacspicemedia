<?php include_once('config.php'); ?>
<?php include_once('common/mock-data.php'); ?>
<?php
$id = isset($_GET['id']) ? (int) $_GET['id'] : 1;
$article = null;
$currentIndex = -1;

foreach ($all_articles as $index => $item) {
    if ($item['id'] === $id) {
        $article = $item;
        $currentIndex = $index;
        break;
    }
}

if (!$article) {
    header("Location: articles.php");
    exit();
}

$prevArticle = $currentIndex > 0 ? $all_articles[$currentIndex - 1] : null;
$nextArticle = $currentIndex < count($all_articles) - 1 ? $all_articles[$currentIndex + 1] : null;

$lorem_content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\n" .
    "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.\n\n" .
    "Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\n\n" .
    "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $article['title'] ?> - BLACSPICE MEDIA
    </title>
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
    $pageTitle = $article['title'];
    $pageBreadcrumbs = [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Articles', 'url' => 'articles.php'],
        ['label' => 'Details', 'url' => '#']
    ];
    include_once('common/breadcrumb.php');
    ?>

    <section class="article-detail-section">
        <div class="container">
            <div class="article-detail-header text-center">
                <div class="article-detail-meta justify-content-center">
                    <span class="article-category">
                        <?= $article['category'] ?>
                    </span>
                    <span class="article-date"><i class="fa fa-calendar-alt"></i>
                        <?= $article['date'] ?>
                    </span>
                </div>
                <h1 class="article-detail-title">
                    <?= $article['title'] ?>
                </h1>
            </div>

            <img src="<?= BASEURL . $article['image'] ?>" alt="<?= $article['title'] ?>" class="article-featured-img">

            <div class="article-body">
                <?php
                $paragraphs = explode("\n\n", $lorem_content);
                foreach ($paragraphs as $p) {
                    echo "<p>" . htmlspecialchars($p) . "</p>";
                }
                ?>
            </div>

            <!-- Navigation -->
            <div class="article-navigation">
                <?php if ($prevArticle): ?>
                    <a href="article-detail.php?id=<?= $prevArticle['id'] ?>" class="nav-article prev">
                        <span class="nav-label">Previous Post</span>
                        <span class="nav-title">
                            <?= $prevArticle['title'] ?>
                        </span>
                    </a>
                <?php else: ?>
                    <div class="nav-placeholder"></div>
                <?php endif; ?>

                <?php if ($nextArticle): ?>
                    <a href="article-detail.php?id=<?= $nextArticle['id'] ?>" class="nav-article next">
                        <span class="nav-label">Next Post</span>
                        <span class="nav-title">
                            <?= $nextArticle['title'] ?>
                        </span>
                    </a>
                <?php else: ?>
                    <div class="nav-placeholder"></div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php include_once('common/footer.php'); ?>
    <?php include_once('common/common-js.php'); ?>
</body>

</html>