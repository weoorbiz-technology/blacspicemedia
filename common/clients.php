<section class="client-section mt-5">
    <div class="container">
        <div class="row">
            <!-- Title Column -->
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ">
                <div class="client-title">
                    <h3>Our Valuable Partners in Excellence</h3>
                </div>
            </div>

            <!-- Slider Column -->
            <div class="col-lg-9 col-md-12">
                <div class="logo-slider">
                    <div class="logo-track">
                        <?php
                        // Function to display images
                        function displayLogos($dir)
                        {
                            $files = scandir($dir);
                            // Valid extensions
                            $extensions = array('jpg', 'jpeg', 'png', 'svg', 'webp');

                            foreach ($files as $file) {
                                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                                if (in_array($ext, $extensions)) {
                                    echo '<img src="' . BASEURL . 'assets/img/clients/' . $file . '" alt="Client Logo" class="client-logo">';
                                }
                            }
                        }

                        $clientDir = __DIR__ . '/../assets/img/clients/';

                        // Output logos twice for infinite scroll effect
                        // 1st Set
                        if (is_dir($clientDir)) {
                            displayLogos($clientDir);
                            // 2nd Set (Duplicate)
                            displayLogos($clientDir);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>