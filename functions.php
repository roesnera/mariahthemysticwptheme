<?php
if(!function_exists('mariahs_styles')) : 
    function mariahs_styles() {

        // after the theme is fully developed, change filemtime to wp_theme() -> get_version() or something like that
        wp_enqueue_style('mariahs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css'));
    
        if(is_page('collab')) {
            wp_enqueue_style('collab', get_template_directory_uri() . '/styles/collab.css');
            wp_enqueue_style('iphone', get_template_directory_uri() . '/styles/iphone.css');
        }

        if(is_shop() || is_product_category()){
            wp_enqueue_style('shop', get_template_directory_uri() . '/styles/shop.css');
        }

        if(is_product()){
            wp_enqueue_style('product', get_template_directory_uri() . '/styles/product.css');
        }
    
    }
endif;

add_action('wp_enqueue_scripts', 'mariahs_styles');

// function mariah_the_mystic_feature_setup() {
//     // register_nav_menu('siteNav', 'Main Menu');

//     add_theme_support( 'woocommerce' );
// }

// add_action('after_setup_theme', 'mariah_the_mystic_feature_setup', 0);
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 255,
        // 'single_image_width' => 400,
        'product_grid' => array(
            'default_rows' => 10,
            'min_rows' => 5,
            'max_rows' => 10,
            'default_columns' => 3,
            'max_columns' => 3,
            'min_columns' => 1
        )
    ) );
    // add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( ' wc-product-gallery-slider' );
    if ( ! isset( $content_width ) ) {
        $content_width = 600;
    }
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

 /**
* Change number of products that are displayed per page (shop page)
*/

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 9;

return $cols;
}

?>