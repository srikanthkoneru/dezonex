<?php
/**
 * Dezonex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dezonex
 * @since Dezonex 1.0
 */

/**
 * Register block styles.
 */
function dezonex_register_block_styles() {

	register_block_style(
		'core/quote',
		array(
			'name'         => 'dezonex',
			'label'        => __( 'Dezonex', 'dezonex' ),
			'inline_style' => '.wp-block-quote.is-style-dezonex {
                border: 2px solid currentColor;
                overflow: hidden;
                box-shadow: 0 4px  10px 0 rgba( 0, 0, 0, 0.3 );
                border-radius: 255px 15px 225px 15px/15px 225px 15px 255px !important;
                margin:0;
            }',
		)
	);

	wp_enqueue_block_style(
		'core/quote',
		array(
			'handle' => 'dezonex-block-quote-3',
			'src'    => get_theme_file_uri( 'assets/blocks/core-quote-3.css' ),
			'path'   => get_theme_file_path( 'assets/blocks/core-quote-3.css' ),
		)
	);

}
add_action( 'init', 'dezonex_register_block_styles', 999 );

/**
 * Register editor assets.
 */
function dezonex_block_editor_assets() {

	wp_enqueue_script(
		'dezonex-block-editor',
		get_theme_file_uri( 'assets/js/block-editor.js' ),
		array(
			'wp-blocks',
			'wp-dom-ready',
			'wp-edit-post',
		),
		wp_get_theme()->get( 'Version' ),
		$args = array(
			'in_footer' => false,
			'strategy'  => 'defer',
		),
	);

}
add_action( 'enqueue_block_editor_assets', 'dezonex_block_editor_assets' );

