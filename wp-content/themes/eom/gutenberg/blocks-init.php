<?php

add_action( 'acf/init', 'eom_acf_init_blocks' );
function eom_acf_init_blocks(): void
{
	if( ! function_exists( 'acf_register_block' ) ) return;

	acf_register_block( [
		'name'              => 'youtube-lazy',
		'title'             => __( 'YouTube Lazy', 'eom' ),
		'description'       => __( 'YouTube iframe with lazy load via YouTube API on click.', 'eom' ),
		'render_template'   => 'gutenberg/youtube-lazy/youtube-lazy.php',
		'category'          => 'media',
		'icon'              => 'dashicons dashicons-youtube',
		'keywords'          => ['video', 'youtube', 'iframe', 'embed'],
		'mode'              => 'edit',
		'enqueue_style'		=> THEME_URI . '/static/css/pages/youtube-lazy.min.css',
		'enqueue_script'	=> THEME_URI . '/static/js/youtube-lazy/youtube-lazy.min.js'
	] );
}

