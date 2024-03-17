<?php 
function cmmyth_magic_words( $content ) 
{     
    if ( strpos( $content, '{current_single_content}' ) !== false ) 
    {
        global $wp_query;
        $queried_object_id = $wp_query->queried_object_id;
         
        if($queried_object_id)
        {
            $post       = get_post($queried_object_id);
            $the_content    = apply_filters('the_content', $post->post_content);
                $content    = str_replace( '{current_single_content}', $the_content, $content );
        }
    }
         
    return $content;
}
add_filter( 'the_content', 'cmmyth_magic_words' );
