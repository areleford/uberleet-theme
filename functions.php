<?php

require_once get_template_directory() . '/includes/navigation.php';

// load scripts
function myWebsite_scripts() {
    // scripts
    wp_enqueue_script('bundle', get_template_directory_uri() . '/dist/bundle.js', "", "1.0", true);

    // stylesheet
    wp_enqueue_style("style", get_template_directory_uri() . '/dist/style.css');
}
add_action('wp_enqueue_scripts', 'myWebsite_scripts');

/*
    ===========================
    REMOVE GENERATOR VERSION NUMBER
    ===========================
*/

/* remove version string from js and css */
function remove_cssjs_query_string( $src ) {
    if( strpos( $src, '?ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
    }

    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_query_string', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_query_string', 10, 2 );