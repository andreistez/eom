<?php

/**
 * Theme functions.
 *
 * @package WordPress
 * @subpackage eom
 */

const THEME_NAME = 'eom';
define( 'THEME_VERSION', mt_rand() );
define( 'THEME_URI', get_template_directory_uri() );
define( 'THEME_DIR', get_template_directory() );

add_action( 'after_setup_theme', 'eom_load_theme_dependencies' );
/**
 * Theme dependencies.
 */
function eom_load_theme_dependencies(): void
{
	// Register theme menus.
	register_nav_menus( [
		'header_menu'	=> esc_html__( 'Header Menu', 'eom' ),
		'footer_menu'	=> esc_html__( 'Footer Menu', 'eom' )
	] );

	// Auto-generate ACF Flexible Content templates files.
	require_once( 'theme-functions/acf-fc-templates-generator.php' );
	// Please place all custom functions declarations in this file.
	require_once( 'theme-functions/theme-functions.php' );
	require_once( 'gutenberg/blocks-init.php' );
	require_once( 'theme-functions/ajax.php' );
}

add_action( 'init', 'eom_init_theme' );
/**
 * Theme initialization.
 */
function eom_init_theme(): void
{
	// Remove extra styles and default SVG tags.
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );

	// Manage the document title - WordPress automatically add title
	add_theme_support( 'title-tag' );

	// Enable post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Custom image sizes.
	add_image_size( 'image-text', 409 );
	add_image_size( 'video-poster', 1204, 614 );
	add_image_size( 'full', 1264 );
}

add_action( 'wp_enqueue_scripts', 'eom_inclusion_enqueue' );
/**
 * Enqueue styles and scripts.
 */
function eom_inclusion_enqueue(): void
{
	// Remove Gutenberg styles on front-end.
	if( ! is_admin() && ! is_singular( 'post' ) ){
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-blocks-style' );
	}

	// Main styles and scripts.
	wp_enqueue_style( 'main', THEME_URI . '/static/css/main.min.css', [], THEME_VERSION );
	wp_enqueue_script( 'scripts', THEME_URI . '/static/js/main.min.js', ['jquery'], THEME_VERSION, true );

	// Single Post.
	if( is_singular( 'post' ) )
		wp_enqueue_style( 'single-post', THEME_URI . '/static/css/pages/single-post.min.css', [], THEME_VERSION );
}

add_action( 'acf/init', 'eom_acf_init' );
/**
 * Add ACF Options pages and subpages.
 */
function eom_acf_init(): void
{
	$acf_parent_options = null;

	// Add ACF Options Page.
	if( function_exists( 'acf_add_options_page' ) ){
		$acf_parent_options = acf_add_options_page( [
			'page_title' 	=> 'Theme Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme_settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> true
		] );
	}

	// Options subpages.
	if( function_exists( 'acf_add_options_sub_page' ) && $acf_parent_options ){
		acf_add_options_sub_page( [
			'page_title' 	=> __( 'Global', 'eom' ),
			'menu_title'	=> __( 'Global', 'eom' ),
			'parent_slug'	=> $acf_parent_options['menu_slug']
		] );

		acf_add_options_sub_page( [
			'page_title' 	=> __( 'Header', 'eom' ),
			'menu_title'	=> __( 'Header', 'eom' ),
			'parent_slug'	=> $acf_parent_options['menu_slug']
		] );

		acf_add_options_sub_page( [
			'page_title' 	=> __( 'Footer', 'eom' ),
			'menu_title'	=> __( 'Footer', 'eom' ),
			'parent_slug'	=> $acf_parent_options['menu_slug']
		] );
	}
}

