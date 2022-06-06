<?php
    # head tag'i sees asuv, scriptid jms.
    wp_head();
?>
<div class="page-container" id="page-container">
    <?php get_header(); ?>
    <div class="blog-content">
        <center><h1 class='blog-post-title'><?php the_title(); ?></h1></center>
        <div class="blog-content-text">
            <?php the_content(); ?>
            <p>Ainekood: <?php echo get_post_meta(get_the_ID(), $key = 'Ainekood', $single = true);?></p>
                
            <?php echo 'Orienteeruv lugemisaeg: ' . lugemis_aeg(); ?>
        </div>
        <?php echo previous_post_link(); next_post_link(); ?>
        <br>
        <br>
        <div class="comments-section">
            <?php comments_template(); ?>
        </div>
    </div>

    <?php get_footer(); ?>
</div>
<!--<?php home_url(); ?>-->
<a href="/wp" id="back-btn" title="Back">
    <svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="5 0 50 80" xml:space="preserve">
        <polyline fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" points="
            35, 5 0,33 35, 63" />
    </svg>
</a>