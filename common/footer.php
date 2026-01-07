<footer class="footer-section">
   <div class="container">
      <!-- Newsletter Section -->
      <div class="newsletter-wrapper">
         <div class="newsletter-content">
            <h3>Join our newsletter</h3>
            <p>We specialize in crafting innovative digital experiences that drive growth,</p>
         </div>
         <form class="newsletter-form">
            <input type="email" placeholder="Enter your email" class="newsletter-input" required>
            <button type="submit" class="newsletter-btn">Subscribe</button>
         </form>
      </div>

      <!-- Links Section -->
      <div class="footer-content">
         <!-- Brand Column -->
         <div class="footer-col footer-brand-col">
            <a href="<?= BASEURL ?>"><img src="<?= BASEURL ?>assets/img/logo.png" alt="BLACSPICE MEDIA"
                  class="footer-logo"></a>
            <p class="footer-desc">BLACSPICE MEDIA is a media agency that combines entertainment and education together.
            </p>
            <img src="<?= BASEURL ?>assets/img/cube.png" alt="Graphic" class="cube-graphic">
            <!-- Placeholder box image -->
         </div>

         <!-- Main Pages Column 1 -->
         <div class="footer-col">
            <h5 class="footer-heading">Main Pages</h5>
            <ul class="footer-links">
               <li><a href="index.php">Home</a></li>
               <li><a href="about.php">About Us</a></li>
               <li><a href="services.php">Our Services</a></li>
               <li><a href="articles.php">Articles</a></li>
               <li><a href="contact.php">Contact Us</a></li>
            </ul>
         </div>

         <!-- Services Column -->
         <div class="footer-col">
            <h5 class="footer-heading">Our Services</h5>
            <ul class="footer-links">
               <li><a href="productions.php">Media Productions</a></li>
               <li><a href="programmes.php">Enrichment Programmes</a></li>
               <li><a href="consultation.php">Media Consultation</a></li>
            </ul>
         </div>

         <!-- Quick Links Column -->
         <div class="footer-col">
            <h5 class="footer-heading">Quick Links</h5>
            <ul class="footer-links">
               <li><a href="gallery.php">Gallery</a></li>
               <li><a href="team.php">Our Team</a></li>
            </ul>
         </div>

         <!-- Utility Pages Column -->
         <div class="footer-col">
            <h5 class="footer-heading">Utility Pages</h5>
            <ul class="footer-links">
               <li><a href="#">Licenses</a></li>
               <li><a href="#">Terms & Conditions</a></li>
               <li><a href="#">Privacy Policy</a></li>
            </ul>
         </div>
      </div>

      <!-- Bottom Bar -->
      <div class="footer-bottom">
         <div class="copyright">
            BLACSPICEMEDIA Production Company ©
            <?= date('Y') ?>. All Rights Reserved.
         </div>
         <div class="footer-socials">
            <a href="https://www.facebook.com/blacspicemedia/" class="footer-social-icon" target="_blank"><i
                  class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/blacspicemedia/" class="footer-social-icon" target="_blank"><i
                  class="fab fa-instagram"></i></a>
            <a href="https://x.com/blacspicemedia" class="footer-social-icon" target="_blank"><i
                  class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/@BlacspiceMedia" class="footer-social-icon" target="_blank"><i
                  class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/company/blacspice-media/" class="footer-social-icon" target="_blank"><i
                  class="fab fa-linkedin-in"></i></a>
         </div>
      </div>
   </div>
</footer>
<?php include_once('common/whatsapp.php'); ?>