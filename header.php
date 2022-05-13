<header>
    <?php echo wp_get_attachment_image(25, "", False, array('class' => 'site-logo', 'alt' => 'Veebilehe logo')); ?>
    
    <?php wp_nav_menu(array(
        'theme_location' => 'links-menu'
        ));
    ?>

    <div class="dot"></div>
</header>