<?php
    # head tag'i sees asuv, scriptid jms.
    wp_head();

    # header.php faili sisse laadimine
    get_header();

    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); ?>
            <h4><?php the_title(); ?></h4>
            <?php the_excerpt();?>
            <a href="<?php the_permalink();?>">Loe rohkem</a>
            <?php
        }
    }

    get_footer();
?>