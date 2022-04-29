<?php
    get_header();
    the_title();
    the_content();
?>
    <p>Ainekood: <?php echo get_post_meta(get_the_ID(), $key = 'Ainekood', $single = true);?></p>

    
    <?php echo lugemis_aeg(); ?>


    <?php comments_template(); ?>
    
    <?php previous_post_link(); ?> <?php next_post_link(); ?>
<?php
    get_footer();
?>