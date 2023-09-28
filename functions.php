<?php
if(!function_exists('mariahs_styles')) : 
    function mariahs_styles() {

        // after the theme is fully developed, change filemtime to wp_theme() -> get_version() or something like that
        wp_enqueue_style('mariahs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css'));
    
        if(is_page('collab')) {
            wp_enqueue_style('collab', get_template_directory_uri() . '/styles/collab.css', array(), filemtime( get_template_directory() . '/styles/collab.css'));
            wp_enqueue_style('iphone', get_template_directory_uri() . '/styles/iphone.css', array(), filemtime( get_template_directory() . '/styles/iphone.css'));
        }

        if(is_shop() || is_product_category()){
            wp_enqueue_style('shop', get_template_directory_uri() . '/styles/shop.css', array(), filemtime( get_template_directory() . '/styles/shop.css'));
        }

        if(is_product()){
            wp_enqueue_style('product', get_template_directory_uri() . '/styles/product.css', array(), filemtime( get_template_directory() . '/styles/product.css'));
        }

        if(is_cart()){
            wp_enqueue_style('cart', get_template_directory_uri() . '/styles/cart.css', array(), filemtime( get_template_directory() . '/styles/cart.css'));
        }

        if(is_checkout()){
            wp_enqueue_style('checkout', get_template_directory_uri() . '/styles/checkout.css', array(), filemtime( get_template_directory() . '/styles/checkout.css'));
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
    // add_theme_support( 'wc-product-gallery-lightbox' );
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


/* 
    This is used in woocommerce/single-product/product-image.php 
*/
function wc_get_gallery_image_html_overwrite( $attachment_id, $main_image = false ) {
	$flexslider        = (bool) apply_filters( 'woocommerce_single_product_flexslider_enabled', get_theme_support( 'wc-product-gallery-slider' ) );
	$gallery_thumbnail = wc_get_image_size( 'gallery_thumbnail' );
	$thumbnail_size    = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
	$image_size        = apply_filters( 'woocommerce_gallery_image_size', $flexslider || $main_image ? 'woocommerce_single' : $thumbnail_size );
	$full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
	$thumbnail_src     = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
	$full_src          = wp_get_attachment_image_src( $attachment_id, $full_size );
	$alt_text          = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
	$image             = wp_get_attachment_image(
		$attachment_id,
		$image_size,
		false,
		apply_filters(
			'woocommerce_gallery_image_html_attachment_image_params',
			array(
				'title'                   => _wp_specialchars( get_post_field( 'post_title', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
				'data-caption'            => _wp_specialchars( get_post_field( 'post_excerpt', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
				'data-src'                => esc_url( $full_src[0] ),
				'data-large_image'        => esc_url( $full_src[0] ),
				'data-large_image_width'  => esc_attr( $full_src[1] ),
				'data-large_image_height' => esc_attr( $full_src[2] ),
				'class'                   => esc_attr( $main_image ? 'wp-post-image' : '' ),
			),
			$attachment_id,
			$image_size,
			$main_image
		)
	);

	return '<div data-thumb="' . esc_url( $thumbnail_src[0] ) . '" data-thumb-alt="' . esc_attr( $alt_text ) . '" class="woocommerce-product-gallery__image">' . $image . '</div>';
}