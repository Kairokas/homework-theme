<?php
    # head tag'i sees asuv, scriptid jms.
    wp_head();
?>
<div class="page-container" id="page-container">
    <?php
        # header.php faili sisse laadimine
        get_header();
    ?>
    <section class="tutvustus">
        <div class="tutvustus-sisu">
            <img class="tutvustus-background" src="<?php echo get_template_directory_uri(); ?>/images/introduction_background.jfif" alt="Background image">
            <div class="tutvustus-sisu-text">Veebileht on mõeldud järgmiseks Veebiprogrammeerimise aineks, kus hakkame tegelema CMS stiili loomisega?</div>
        </div>
    </section>
    <section class="blogi-parent" id="blogi-parent">
    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                ?>
                <div class="blogi-item" onclick="location.href='<?php echo the_permalink();?>;'">
                    <img class="blogi-pilt" src="<?php echo get_template_directory_uri(); ?>/images/blank_white.png" alt="Blogipostituse pilt">
                    <div class="blogi-tekst">
                        <h4><?php the_title(); ?></h4>
                        <?php the_excerpt();?>
                    </div>
                </div>
                <?php
            }
        }
    ?>
    </section>
    <?php get_footer();?>
</div>

