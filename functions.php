<?php

//Leidsin kuskilt - tahtsin kuidagigi seda faili kaasata teemaga :)
function lugemis_aeg() { 
    $content = get_post_field( 'post_content', $post->ID ); 
    $word_count = str_word_count( strip_tags( $content ) ); 
    $readingtime = ceil($word_count / 200); 
    
    if ($readingtime == 1) { 
        $timer = " minut"; 
    } else { 
        $timer = " minutit"; 
    } 
    $totalreadingtime = $readingtime . $timer; 
        
    return $totalreadingtime; 
}
