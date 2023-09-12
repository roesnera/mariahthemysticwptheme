<?php
if(!function_exists('mariahs_styles')) : 
    function mariahs_styles() {
        wp_enqueue_style('mariahs-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version'));
    }
endif;

add_action('wp_enqueue_scripts', 'mariahs_styles');

function features() {
    register_nav_menu('siteNav', 'Main Menu');
}

add_action('after_setup_theme', 'features');
?>