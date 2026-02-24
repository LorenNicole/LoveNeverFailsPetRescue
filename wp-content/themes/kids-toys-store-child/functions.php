<?php

require_once get_stylesheet_directory() . '/scssphp/scss.inc.php';
use ScssPhp\ScssPhp\Compiler;
use ScssPhp\ScssPhp\OutputStyle;

// Exit if accessed directly
 if ( ! defined( 'ABSPATH' ) ) {
     exit;
}


function mytheme_compile_all_scss() {
    $scss_dir = get_stylesheet_directory() . '/assets/scss/';
    $css_dir  = get_stylesheet_directory() . '/assets/css/';

    // List of SCSS entry files (partials will be imported inside these)
    $scss_files = [
        'pet-rescue-custom-scss-adoption-details.scss'      => 'pet-rescue-custom-css-adoption-details.css',
        'pet-rescue-custom-scss-global.scss'   => 'pet-rescue-custom-css-global.css',
        'pet-rescue-custom-scss-post.scss'   => 'pet-rescue-custom-css-post.css',
        'pet-rescue-custom-scss-home.scss'   => 'pet-rescue-custom-css-home.css',
        'pet-rescue-custom-scss-available-pets.scss'      => 'pet-rescue-custom-css-available-pets.css',
        'pet-rescue-custom-scss-single-product.scss'   => 'pet-rescue-custom-css-single-product.css',
        'pet-rescue-custom-scss-volunteer.scss'   => 'pet-rescue-custom-css-volunteer.css',
        'pet-rescue-custom-scss-wishlist.scss'   => 'pet-rescue-custom-css-wishlist.css',
        '_mixins-media-query.scss'   => '_mixins-media-query.css'
    ];


    $scss = new Compiler();
    $scss->setImportPaths($scss_dir);
    $scss->setOutputStyle(OutputStyle::COMPRESSED);

    foreach ($scss_files as $input => $output) {
        $scss_file = $scss_dir . $input;
        $css_file  = $css_dir . $output;

        // Compile only if SCSS or any partial is newer than CSS
        if (!file_exists($css_file) || mytheme_scss_needs_recompile($scss_file, $css_file, $scss_dir)) {
            try {
                $compiled_css = $scss->compileString(file_get_contents($scss_file))->getCss();
                file_put_contents($css_file, $compiled_css);
            } catch (Exception $e) {
                error_log("SCSS compile error in {$input}: " . $e->getMessage());
            }
        }
    }
}

// Helper: check if any SCSS file is newer than CSS
function mytheme_scss_needs_recompile($scss_file, $css_file, $scss_dir) {
    $css_time = filemtime($css_file);
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($scss_dir));
    foreach ($iterator as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'scss' && filemtime($file) > $css_time) {
            return true;
        }
    }
    return false;
}

// Compile before enqueue
add_action('wp_enqueue_scripts', 'mytheme_compile_all_scss');

$availableKittensPageId = 1331;
$availableCatsPageId = 1344;
$availablePuppiesPageId = 1349;
$availableDogsPageId = 1347;
$adoptionProcessDetailsPageId = 1604;
$wishlistPageId = 1624;
$volunteerPageId = 97;

function enqueue_styles_per_page() {
	global $availableKittensPageId, $availableCatsPageId, $availablePuppiesPageId, $availableDogsPageId, 
		$adoptionProcessDetailsPageId, $wishlistPageId, $volunteerPageId;

	$theme_version = wp_get_theme()->get('Version');
	
	// Global Syling
	wp_enqueue_style(
		'pet-rescue-custom-css-global',
		get_stylesheet_directory_uri() . '/assets/css/pet-rescue-custom-css-global.css',
		array(),
		$theme_version // Version
	);

	// Homepage Styling
	if (is_page(1096)) {
		// Get theme version for cache-busting
		$theme_version = wp_get_theme()->get('Version');

		wp_enqueue_style(
			'pet-rescue-custom-css-home',
			get_stylesheet_directory_uri() . '/assets/css/pet-rescue-custom-css-home.css',
			array(), // Dependencies
			$theme_version // Version
		);
	}

	$body_classes = get_body_class();
	$target_classes_single_product = ['wp-singular', 'single-product', 'woocommerce'];
	if (array_intersect($target_classes_single_product, $body_classes)) {
    	wp_enqueue_style(
			'pet-rescue-custom-css-single-product',
			get_stylesheet_directory_uri() . '/assets/css/pet-rescue-custom-css-single-product.css',
			array(), // Dependencies
			$theme_version // Version
		);
	}

	if (is_page($adoptionProcessDetailsPageId)) {
    	wp_enqueue_style(
			'pet-rescue-custom-css-adoption-details',
			get_stylesheet_directory_uri() . '/assets/css/pet-rescue-custom-css-adoption-details.css',
			array(), // Dependencies
			$theme_version // Version
		);
	}

	if (is_page($wishlistPageId)) {
    	wp_enqueue_style(
			'pet-rescue-custom-css-wishlist',
			get_stylesheet_directory_uri() . '/assets/css/pet-rescue-custom-css-wishlist.css',
			array(), // Dependencies
			$theme_version // Version
		);
	}

	if (is_page($volunteerPageId)) {
    	wp_enqueue_style(
			'pet-rescue-custom-css-volunteer',
			get_stylesheet_directory_uri() . '/assets/css/pet-rescue-custom-css-volunteer.css',
			array(), // Dependencies
			$theme_version // Version
		);
	}

	if (is_single()) {
    	wp_enqueue_style(
			'pet-rescue-custom-css-post',
			get_stylesheet_directory_uri() . '/assets/css/pet-rescue-custom-css-post.css',
			array(), // Dependencies
			$theme_version // Version
		);
	}


	if (is_page($availableCatsPageId) || is_page($availableKittensPageId) || $availablePuppiesPageId || $availableDogsPageId) {
    	wp_enqueue_style(
			'pet-rescue-custom-css-available-pets',
			get_stylesheet_directory_uri() . '/assets/css/pet-rescue-custom-css-available-pets.css',
			array(), // Dependencies
			$theme_version // Version
		);
	}


}
add_action('wp_enqueue_scripts', 'enqueue_styles_per_page');

function enqueue_javascript_per_page() {
	global $adoptionProcessDetailsPageId, $wishlistPageId;
	
	$theme_version = wp_get_theme()->get('Version');

	wp_enqueue_script(
		'love-never-fails-pet-rescue-scroll-to-anchor',
		esc_url(get_stylesheet_directory_uri()) . '/assets/js/scroll-to-anchor.js',
		array(), 
		$theme_version, 
		true // Load in footer
	);

	wp_enqueue_script(
		'love-never-fails-pet-rescue-custom',
		esc_url(get_stylesheet_directory_uri()) . '/assets/js/custom.js',
		array(), 
		$theme_version, 
		true // Load in footer
	);

	// Homepage Script
	if (is_page(1096)) {
		wp_enqueue_script(
			'love-never-fails-pet-rescue-homepage',
			esc_url(get_stylesheet_directory_uri()) . '/assets/js/homepage.js',
			array(), 
			$theme_version, 
			true // Load in footer
		);
	}

	if (is_page($adoptionProcessDetailsPageId)) {
		wp_enqueue_script(
			'love-never-fails-pet-rescue-adoption-details',
			esc_url(get_stylesheet_directory_uri()) . '/assets/js/adoption-details.js',
			array(), 
			$theme_version, 
			true // Load in footer
		);
	}

		if (is_page($wishlistPageId)) {
		wp_enqueue_script(
			'love-never-fails-pet-rescue-wishlist',
			esc_url(get_stylesheet_directory_uri()) . '/assets/js/wishlist.js',
			array(), 
			$theme_version, 
			true // Load in footer
		);
	}
}
add_action('wp_enqueue_scripts', 'enqueue_javascript_per_page');

function add_class_to_post_page( $classes ) {
	$post_id = get_queried_object_id();

    if ( is_single() ) {
		switch ($post_id) {
			case 1068:
				$classes[] = 'post__dog-care-tips-for-new-owners';
				break;
			case 1115:
				$classes[] = 'post__creating-a-safe-cat-friendly-home';
				break;
			case 1168:
				$classes[] = 'post__essential-cat-care-guide-for-apartment-living';
				break;
			case 1170:
				$classes[] = 'post__top-pet-care-tips';
				break;
			case 1172:
				$classes[] = 'post__creating-a-dog-friendly-apartment';
				break;
			case 1174:
				$classes[] = 'post__stray-cat';
				break;
			case 1176:
				$classes[] = 'post__safe-travel-tips';
				break;
			default:
				break;
		}
	}

    return $classes;
}
add_filter( 'body_class', 'add_class_to_post_page' );

function add_class_to_page( $classes ) {
	global $availableKittensPageId, $availableCatsPageId, $availablePuppiesPageId, 
		$availableDogsPageId, $adoptionProcessDetailsPageId, $volunteerPageId;
	$page_id = get_queried_object_id();

	switch ($page_id) {
		case $availableCatsPageId:
			$classes[] = 'available-pets-page';
			$classes[] = 'available-pets-page__cats';
			break;
		case $availableKittensPageId:
			$classes[] = 'available-pets-page';
			$classes[] = 'available-pets-page__kittens';
			break;
		case $availableDogsPageId:
			$classes[] = 'available-pets-page';
			$classes[] = 'available-pets-page__dogs';
			break;
		case $availablePuppiesPageId:
			$classes[] = 'available-pets-page';
			$classes[] = 'available-pets-page__puppies';
			break;
		case $adoptionProcessDetailsPageId:
			$classes[] = 'adoption-process-details-page';
			break;
		case $volunteerPageId:
			$classes[] = 'volunteer-page';
			break;
		default:
			break;
	}

    return $classes;
}
add_filter( 'body_class', 'add_class_to_page' );

// Change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single' ); 
function woocommerce_add_to_cart_button_text_single() {
    return __( 'Add to Wish List', 'woocommerce' ); 
}

add_filter( 'woocommerce_get_return_to_shop_text', function() {
    return 'View Wishlist';
});

add_filter('woocommerce_widget_cart_button_link', function($link) {
    // Replace with your custom URL
    return home_url('https://loveneverfailspetrescue.com/wishlist/');
}, 10, 1);

//add_action('woocommerce_check_cart_items', 'limit_cart_checkout');
function limit_cart_checkout() {
   $cart_count = WC()->cart->get_cart_contents_count();
   $max_limit = 5; // Set your maximum limit here
   global $wishlist_is_max_limit;
   $wishlist_is_max_limit = $cart_count > $max_limit;
   if ($cart_count > $max_limit) {
       wc_add_notice('Your Wishlist exceeds the maximum allowed limit of 5 pets.', 'error');
	   add_filter('woocommerce_is_purchasable', 'product_is_purchasable', 10, 2);
   } else {
	add_filter('woocommerce_is_purchasable', 'product_is_purchasable', 10, 3);
   }
}

add_filter( 'wc_add_to_cart_message_html', 'custom_add_to_cart_message' );
function custom_add_to_cart_message() {
   $message = 'Your Wishlist has been updated!' ;
   return $message;
}

function product_is_purchasable($is_purchasable, $product) {
  global $wishlist_is_max_limit;
  return ($wishlist_is_max_limit == false ? false : $is_purchasable);
}

add_filter('gettext', 'change_specific_add_to_cart_notice', 10, 3);
add_filter('ngettext', 'change_specific_add_to_cart_notice', 10, 3);
function change_specific_add_to_cart_notice($translated, $text, $domain) {
if ($text === 'You cannot add another %s to your cart.') {
$translated = __('%s is already in your Wishlist.', $domain);
}
return $translated;
}

// Source - https://stackoverflow.com/a
// Posted by 7uc1f3r, modified by community. See post 'Timeline' for change history
// Retrieved 2026-01-19, License - CC BY-SA 4.0

function change_woocommerce_cart_product_cannot_add_another_message( $message, $product_data ) {
    // New text
    $message = __( 'Already added to Wishlist.', 'woocommerce' );

    return $message;
}
add_filter( 'woocommerce_cart_product_cannot_add_another_message', 'change_woocommerce_cart_product_cannot_add_another_message', 10, 2 );

function cfg_custom_wc_translations($translated) {
    $text = array(
        'Your order' => 'Your Wishlist',
        'Order notes' => 'Wishlist notes',
        'Place order' => 'Place Wishlist',
        'Cart' => 'Wishlist',
        'cart' => 'wishlist',
        'Order details' => 'Wishlist',
    );
    $translated = str_ireplace(array_keys($text), $text, $translated);
    return $translated;
}
add_filter('gettext', 'cfg_custom_wc_translations', 20);

