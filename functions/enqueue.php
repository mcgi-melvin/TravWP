<?php
function trav_resources(){
    wp_enqueue_style('style', get_template_directory_uri() . "/assets/css/style.css", [], null );

    // wp_enqueue_script('script', get_template_directory_uri() . '/js/fatblog.js', array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts', 'trav_resources');