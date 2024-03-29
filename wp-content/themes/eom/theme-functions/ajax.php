<?php

/**
 * Theme AJAX functions.
 *
 * @package WordPress
 * @subpackage eom
 */

add_action( 'wp_head', 'eom_js_vars_for_frontend' );
/**
 * JS variables for frontend, such as AJAX URL.
 */
function eom_js_vars_for_frontend(): void
{
	$variables = ['ajaxUrl' => admin_url( 'admin-ajax.php' )];
	echo '<script type="text/javascript">window.wpData = ' . json_encode( $variables ) . ';</script>';
}

add_action( 'wp_ajax_eom_ajax_load_more_posts', 'eom_ajax_load_more_posts' );
add_action( 'wp_ajax_nopriv_eom_ajax_load_more_posts', 'eom_ajax_load_more_posts' );
/**
 * AJAX load more posts.
 */
function eom_ajax_load_more_posts(): void
{
	$page		= ( int ) eom_clean( $_POST['page'] ) + 1;
	$per_page	= 4;	// yes, just hardcoded count.
	$offset		= $per_page * $page - $per_page;
	$args		= [
		'post_type'		=> 'post',
		'post_status'	=> 'publish',
		'offset'		=> $offset,
		'numberposts'	=> $per_page
	];

	$posts_arr	= get_posts( $args );
	$posts		= '';

	if( empty( $posts_arr ) )
		wp_send_json_error( ['msg' => __( 'No posts were found matching your selection.', 'eom' )] );

	foreach( $posts_arr as $p )
		$posts .= eom_load_template_part( 'components/cards/post', null, ['id' => $p->ID, 'type' => 'thumb'] );

	wp_send_json_success( ['posts' => $posts, 'page' => $page] );
}

