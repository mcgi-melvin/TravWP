<?php
add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');

register_nav_menus( array(
    'header_menu' => 'Header Menu',
    'footer_menu' => 'Footer Menu',
) );

function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyD7kGoCuBRRA2AMwz8sSJjScDfWGlOaNZ8';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');