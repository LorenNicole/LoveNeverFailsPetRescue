<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage kids-toys-store
 * @since kids-toys-store 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kids_toys_store_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Kids_Toys_Store_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Kids Toys Store Pro', 'kids-toys-store' ),
		'button_text'      => __( 'Upgrade Pro', 'kids-toys-store' ),
		'url'              => 'https://www.wpradiant.net/products/toy-store-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'kids_toys_store_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function kids_toys_store_custom_control_scripts() {
	wp_enqueue_script( 'kids-toys-store-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'kids-toys-store-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'kids_toys_store_custom_control_scripts' );