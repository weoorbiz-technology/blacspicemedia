<?php
// Define Services Data
$services = [
    [
        "title" => "Media Productions",
        "desc" => "BLACSPICEMEDIA has been working with local TV channels, production houses and corporate companies to produce creative content for the past 15 years till date. Most of the works would comprise of docu-dramas, promotional videos, commercials, info‐education programmes and music videos for variety programmes.",
        "img" => "assets/img/services/img1.jpg",
        "id" => "media-productions"
    ],
    [
        "title" => "Enrichment Programmes",
        "desc" => "BLACSPICE MEDIA believes in heightening the media awareness and nurturing the art of filmmaking amongst teens and adults, by conducting a plethora of diversified enrichment programmes and courses.",
        "img" => "assets/img/services/img2.jpg",
        "id" => "enrichment-programmes"
    ],
    [
        "title" => "Media Consultation",
        "desc" => "Every idea matters. But the way you present it matters more. If you are seeking to bring your idea out to the public in the most attractive and efficient way possible, you have come to the right place.",
        "img" => "assets/img/services/img3.jpg",
        "id" => "media-consultation"
    ]
];
?>

<section class="services-section" id="services">
    <div class="container">
        <div class="services-header animate-on-scroll" data-animation="fadeInUp">
            <h2>Tailored Solutions for<br><span>Your Success</span></h2>
            <p class="services-desc">Our diverse range of services is designed to meet your unique needs. From
                innovative design to seamless development, we deliver solutions that empower your business.</p>
            <a href="services.php" class="btn-view-services">More View Services</a>
        </div>

        <div class="row">
            <?php $delay = 1;
            foreach ($services as $service):
                $targetUrl = "services.php#" . $service['id'];
                if ($service['id'] == 'media-productions')
                    $targetUrl = "productions.php";
                if ($service['id'] == 'enrichment-programmes')
                    $targetUrl = "programmes.php";
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="<?= $targetUrl ?>" class="service-card-link"
                        style="text-decoration: none; color: inherit; display: block;">
                        <div class="service-card animate-on-scroll delay-<?= $delay ?>" data-animation="fadeInUp">
                            <div class="service-card-header">
                                <h4><?= $service['title'] ?></h4>
                                <span class="icon-arrow"><i class="fa fa-arrow-right"></i></span>
                            </div>
                            <p><?= $service['desc'] ?></p>
                            <div class="service-img-wrapper">
                                <img src="<?= BASEURL . $service['img'] ?>" alt="<?= $service['title'] ?>">
                            </div>
                        </div>
                    </a>
                </div>
                <?php $delay++; endforeach; ?>
        </div>
    </div>
</section>