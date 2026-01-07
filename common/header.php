<?php
include_once('db.php');
?>
<div id="navbar">
    <div class="custom-navbar d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <a class="navbar-brand" href="<?= BASEURL ?>">
            <img src="<?= BASEURL ?>assets/img/logo.png" alt="BlacspiceMedia">
        </a>

        <!-- Desktop Navigation -->
        <div class="nav-links">
            <a href="index.php" class="nav-link-item">Home</a>
            <a href="about.php" class="nav-link-item">About Us</a>

            <div class="nav-dropdown">
                <a href="services.php" class="nav-link-item">Our Services <i class="fa fa-chevron-down"></i></a>
                <div class="dropdown-menu">
                    <a href="productions.php" class="dropdown-item">Media Productions</a>
                    <a href="programmes.php" class="dropdown-item">Media Enrichment Programmes</a>
                    <a href="consultation.php" class="dropdown-item">Media Consultation</a>
                </div>
            </div>

            <a href="articles.php" class="nav-link-item">Articles</a>
            <a href="gallery.php" class="nav-link-item">Gallery</a>
        </div>

        <div class="cta-wrapper d-none d-lg-block">
            <a href="contact.php" class="btn-primary-custom">Contact Us</a>
        </div>
    </div>
</div>

<!-- Mobile Toggle (Moved outside navbar to fix z-index) -->
<button id="mobileToggle" class="mobile-toggle" onclick="toggleMenu()">
    <span></span>
    <span></span>
    <span></span>
</button>

<!-- Mobile Menu Overlay -->
<!-- Added ID for JS toggle -->
<div id="mobileMenu" class="mobile-menu-overlay">
    <div class="mobile-menu-header">
        <a href="<?= BASEURL ?>"><img src="<?= BASEURL ?>assets/img/logo.png" alt="BlacspiceMedia"
                class="mobile-logo"></a>
        <!-- Close button removed, using toggle button -->
    </div>

    <ul class="mobile-nav-list">
        <li class="mobile-nav-item">
            <a href="index.php" class="mobile-nav-link" onclick="toggleMenu()">Home</a>
        </li>
        <li class="mobile-nav-item">
            <a href="about.php" class="mobile-nav-link" onclick="toggleMenu()">About Us</a>
        </li>
        <li class="mobile-nav-item">
            <div class="mobile-dropdown-header" onclick="toggleMobileSubmenu(event)">
                <span class="mobile-nav-link">Our Services</span>
                <i class="fa fa-plus"></i>
            </div>
            <div class="mobile-submenu">
                <a href="services.php" class="mobile-submenu-link" onclick="toggleMenu()">All Services</a>
                <a href="productions.php" class="mobile-submenu-link" onclick="toggleMenu()">Media Productions</a>
                <a href="programmes.php" class="mobile-submenu-link" onclick="toggleMenu()">Media Enrichment
                    Programmes</a>
                <a href="consultation.php" class="mobile-submenu-link" onclick="toggleMenu()">Media
                    Consultation</a>
            </div>
        </li>
        <li class="mobile-nav-item">
            <a href="articles.php" class="mobile-nav-link" onclick="toggleMenu()">Articles</a>
        </li>
        <li class="mobile-nav-item">
            <a href="gallery.php" class="mobile-nav-link" onclick="toggleMenu()">Gallery</a>
        </li>
    </ul>

    <a href="contact.php" class="mobile-contact-btn" onclick="toggleMenu()">Contact Us</a>

    <div class="mobile-socials">
        <a href="https://www.facebook.com/blacspicemedia/" class="social-icon" target="_blank"><i
                class="fab fa-facebook-f"></i></a>
        <a href="https://x.com/blacspicemedia" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/@BlacspiceMedia" class="social-icon" target="_blank"><i
                class="fab fa-youtube"></i></a>
        <a href="https://www.instagram.com/blacspicemedia/" class="social-icon" target="_blank"><i
                class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/company/blacspice-media/" class="social-icon" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
    </div>
</div>

<script>
    function toggleMenu() {
        const toggle = document.querySelector('.mobile-toggle');
        const overlay = document.querySelector('.mobile-menu-overlay');

        toggle.classList.toggle('active');
        overlay.classList.toggle('active');

        // Reset submenus when closing
        if (!overlay.classList.contains('active')) {
            document.querySelectorAll('.mobile-submenu').forEach(sub => sub.style.maxHeight = null);
            document.querySelectorAll('.mobile-dropdown-header').forEach(header => header.classList.remove('active'));
        }

        // Toggle body scroll
        if (overlay.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = 'auto';
        }
    }

    function toggleMobileSubmenu(e) {
        e.stopPropagation();
        const header = e.currentTarget;
        const submenu = header.nextElementSibling;

        header.classList.toggle('active');

        if (submenu.style.maxHeight) {
            submenu.style.maxHeight = null;
        } else {
            submenu.style.maxHeight = submenu.scrollHeight + "px";
        }
    }
</script>