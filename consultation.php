<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Consultation - BLACSPICE MEDIA</title>
    <meta name="description"
        content="Professional media consultation for businesses and individuals. From brand launching to project planning and creative direction.">
    <meta name="keywords"
        content="media consultation, brand strategy, creative direction, project planning, media expert, Saleem Hadi consultation">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>favicon.png">

    <?php include_once('common/common-css.php'); ?>
    <style>
        body {
            padding-top: var(--header-height);
        }

        .consultation-container {
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 80px 20px;
            text-align: center;
        }

        .no-content-found {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ccc;
            letter-spacing: -1px;
        }

        @media (max-width: 991px) {
            .consultation-container {
                padding: 33px 20px;
                min-height: 40vh;
            }

            .no-content-found {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="Page-wrapper">
        <?php include_once('common/header.php'); ?>

        <!-- Breadcrumb Section -->
        <?php
        $pageTitle = "Consultation";
        $pageBreadcrumbs = [
            ['label' => 'Home', 'url' => 'index.php'],
            ['label' => 'Consultation', 'url' => '#']
        ];
        include_once('common/breadcrumb.php');
        ?>

        <div class="consultation-container">
            <h2 class="no-content-found">No content found!</h2>
        </div>

        <?php include_once('common/footer.php'); ?>
    </div>

    <?php include_once('common/common-js.php'); ?>
</body>

</html>