<?php
if(!function_exists('mariahs_styles')) : 
    function mariahs_styles() {
        wp_enqueue_style('mariahs-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version'));
    
        if(is_page('collab')) {
            wp_enqueue_style('collab', get_template_directory_uri() . '/styles/collab.css');
            wp_enqueue_style('iphone', get_template_directory_uri() . '/styles/iphone.css');
        }
    
    }
endif;

add_action('wp_enqueue_scripts', 'mariahs_styles');

function features() {
    register_nav_menu('siteNav', 'Main Menu');
}

add_action('after_setup_theme', 'features');
?>