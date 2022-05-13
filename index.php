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
        <?php echo wp_get_attachment_image(29, "", False, array('class' => 'tutvustus-background', 'alt' => 'Background image')); ?>
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
                <?php echo wp_get_attachment_image(30, "", False, array('class' => 'blogi-pilt', 'alt' => 'Blogipostituse pilt')); ?>
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

