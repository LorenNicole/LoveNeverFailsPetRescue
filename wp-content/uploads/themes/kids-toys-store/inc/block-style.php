<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage kids-toys-store
 * @since kids-toys-store 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since kids-toys-store 1.0
	 *
	 * @return void
	 */
	function kids_toys_store_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'kids-toys-store-border',
				'label' => esc_html__( 'Borders', 'kids-toys-store' ),
			)
		);

		
	}
	add_action( 'init', 'kids_toys_store_register_block_styles' );
}