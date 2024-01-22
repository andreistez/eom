<?php

/**
 * Theme AJAX functions.
 *
 * @package WordPress
 * @subpackage eom
 *

add_action( 'wp_head', 'eom_js_vars_for_frontend' );
/**
 * JS variables for frontend, such as AJAX URL.
 *
function eom_js_vars_for_frontend(): void
{
	$variables = ['ajaxUrl' => admin_url( 'admin-ajax.php' )];
	echo '<script type="text/javascript">window.wpData = ' . json_encode( $variables ) . ';</script>';
}

add_action( 'wp_ajax_eom_ajax_pagination', 'eom_ajax_pagination' );
add_action( 'wp_ajax_nopriv_eom_ajax_pagination', 'eom_ajax_pagination' );
/**
 * AJAX pagination.
 *
function eom_ajax_pagination(): void
{
	$page		= eom_clean( $_POST['page'] );
	$term		= eom_clean( $_POST['term'] );
	$per_page	= isset( $_POST['per-page'] ) ? eom_clean( $_POST['per-page'] ) : get_option( 'posts_per_page' );
	$offset		= $per_page * $page - $per_page;
	$args		= [
		'post_type'			=> 'post',
		'post_status'		=> 'publish',
		'offset'			=> $offset,
		'posts_per_page'	=> $per_page
	];

	if( $term )
		$args['tax_query'] = [ [
          'taxonomy'	=> 'category',
          'field'		=> 'id',
          'terms'		=> [$term]
      ] ];

	$posts_query	= new WP_Query( $args );
	$pagination		= $posts = '';

	if( $posts_query->have_posts() ){
		while( $posts_query->have_posts() ){
			$posts_query->the_post();
			$posts .= eom_load_template_part( 'components/post-card', null, ['id' => get_the_ID()] );
		}

		$pagination = eom_load_template_part( 'components/pagination', null, [
			'query'		=> $posts_query,
			'max_pages'	=> $posts_query->max_num_pages,
			'page'		=> $page,
			'per_page'	=> $per_page,
			'term'		=> $term
		] );

		wp_reset_query();
	}	else {
		$posts = '<p class="posts-not-found">'
		         . esc_html__( 'No posts were found matching your selection.', 'lightscalpel' ) .
		         '</p>';
	}

	wp_send_json_success( ['posts' => $posts, 'pagination' => $pagination] );
}*/

