<button onclick=topFunction() id="top-btn" title="Go to top">
    <svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="5 0 50 80" xml:space="preserve">
        <polyline fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" points="
            0.375, 35.375 28.375, 0.375 58.67, 35.375" />
    </svg>
</button>

<footer id="kontakt">
    <hr>
    Veebilehe autor: Kairo Luha
    <a href = "mailto: <?php get_bloginfo('admin_email'); ?>"><?php echo wp_get_attachment_image(24, "", False, array('class' => 'footer-icon', 'alt' => 'E-maili ikoon')); ?></a>
</footer>