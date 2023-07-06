<?php

function presleys_styles() {
    wp_enqueue_style('presleys-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version'));
}

add_action('wp_enqueue_scripts', 'presleys_styles');
?>