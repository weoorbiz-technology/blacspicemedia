<?php
/**
 * Breadcrumb Component
 * Expects:
 * $pageTitle (string) - Title of the section
 * $pageBreadcrumbs (array) - Array of associative arrays [['label' => 'Home', 'url' => 'index.php'], ...]
 */

// Default values if not set
if (!isset($pageTitle))
    $pageTitle = 'Page Title';
if (!isset($pageBreadcrumbs))
    $pageBreadcrumbs = [];
?>

<section class="breadcrumb-section">
    <div class="container">
        <div class="breadcrumb-content">
            <h1 class="breadcrumb-title"><?= $pageTitle ?></h1>
            <nav class="breadcrumb-nav">
                <ul class="breadcrumb-list">
                    <?php
                    $total = count($pageBreadcrumbs);
                    $i = 0;
                    foreach ($pageBreadcrumbs as $crumb):
                        $i++;
                        $isActive = ($i == $total);
                        ?>
                        <li class="breadcrumb-item <?= $isActive ? 'active' : '' ?>">
                            <?php if (!$isActive && !empty($crumb['url'])): ?>
                                <a href="<?= $crumb['url'] ?>"><?= $crumb['label'] ?></a>
                            <?php else: ?>
                                <?= $crumb['label'] ?>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </div>
</section>