<?php

/**
 * Register Blocks
 * @see https://www.billerickson.net/building-gutenberg-block-acf/#register-block
 *
 * Darren: 		https://github.com/celticwebdesign/block-title-content
 * ACF: 		title-content.php
 * ACF JSON: 	acf-export-2019-05-26.json
 * Preview: 	partials/block-title-content.php
 */
function swd_register_blocks() {

	if( ! function_exists( 'acf_register_block_type' ) )
		return;

	acf_register_block_type( array(
		'name'				=> 'Title-Content',
		'title'				=> __( 'Title Content', 'clientname' ),
		'description' 		=> __('Provides a Title and Content areas.'),
		'render_template'	=> 'partials/block-title-content.php',
		'category'			=> 'formatting',
		'icon'				=> 'format-aside',
		'mode'				=> 'auto',
		'keywords'			=> array( 'title', 'h1', 'content', 'wysiwyg' )
	));

}
add_action('acf/init', 'swd_register_blocks' );