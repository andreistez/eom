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
	$term_name	= eom_clean( $_POST['term'] );
	$per_page	= 4;	// yes, just hardcoded count.
	$offset		= $page === 2 ? 5 : 5 + $per_page * ( $page - 1 ) - $per_page;	// First time need to left 5 posts behind.
	$args		= [
		'post_type'		=> 'post',
		'post_status'	=> 'publish',
		'numberposts'	=> -1,
		'category_name'	=> $term_name
	];

	$posts_count			= count( get_posts( $args ) );
	$args['numberposts']	= $per_page;
	$args['offset']			= $offset;
	$posts_arr				= get_posts( $args );
	$posts					= '';

	if( empty( $posts_arr ) )
		wp_send_json_error( [
			'msg'	=> __( 'No posts were found matching your selection.', 'eom' ),
			'end'	=> 1
		] );

	foreach( $posts_arr as $p )
		$posts .= eom_load_template_part( 'components/cards/post', null, [
			'id' => $p->ID, 'type' => 'thumb'
		] );

	$is_end = ( 5 + $per_page * ( $page - 1 ) >= $posts_count ) ? 1 : '';
	wp_send_json_success( ['posts' => $posts, 'page' => $page, 'end' => $is_end] );
}

add_action( 'wp_ajax_eom_ajax_load_remote_posts', 'eom_ajax_load_remote_posts' );
add_action( 'wp_ajax_nopriv_eom_ajax_load_remote_posts', 'eom_ajax_load_remote_posts' );
/**
 * AJAX load remote posts.
 */
function eom_ajax_load_remote_posts(): void
{
	$response	= wp_remote_get( add_query_arg( ['per_page' => 6], 'https://eom.org/wp-json/wp/v2/posts?_embed&categories=20' ) );
	$news		= [];
	$posts		= '';

	if( 200 === wp_remote_retrieve_response_code( $response ) )
		$news = json_decode( wp_remote_retrieve_body( $response ), true );
	else
		wp_send_json_error( ['msg' => __( 'Error: not able to fetch the remote posts.' )] );

	if( empty( $news ) ) wp_send_json_error( ['msg' => __( 'Ooops!.. Seems there are no remote posts.' )] );

	foreach( $news as $key => $_p ){
		$type	= ( ! $key || $key === 1 ) ? 'thumb' : 'no-thumb';
		$posts	.= eom_load_template_part( 'components/cards/post', 'remote', [
			'post' => $_p, 'type' => $type
		] );
	}

	wp_send_json_success( ['posts' => $posts] );
}

