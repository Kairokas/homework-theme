<?php

    //Leidsin kuskilt - tahtsin kuidagigi seda faili kaasata teemaga :)
    function lugemis_aeg() { 
        $content = get_post_field('post_content', $post->ID); 
        $word_count = str_word_count(strip_tags($content)); 
        $readingtime = ceil($word_count / 200); 
        
        if ($readingtime == 1) { 
            $timer = " minut"; 
        } else { 
            $timer = " minutit"; 
        } 
        $totalreadingtime = $readingtime . $timer; 
            
        return $totalreadingtime; 
    }

    function register_my_links_menu() {
        register_nav_menu('links-menu',__( 'Links Menu' ));
    }

    function addOnFiles() {
        //wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/functions.js');
        //wp_enqueue_style( 'bootstrap_style', get_template_directory_uri() . '/assets/dist/css/bootstrap.min.css' );
    }
    
    add_action('init', 'register_my_links_menu');
    add_action('wp_enqueue_scripts', 'addOnFiles');
    