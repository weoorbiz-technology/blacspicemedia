<?php
/**
 * WhatsApp Floating Button Component
 */
$whatsappNumber = "6582686481"; // Using the number from contact.php
$whatsappMessage = "Hi BlacspiceMedia!";
$whatsappUrl = "https://wa.me/" . $whatsappNumber . "?text=" . urlencode($whatsappMessage);
?>

<a href="<?= $whatsappUrl ?>" class="whatsapp-float" target="_blank" title="Chat with us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>