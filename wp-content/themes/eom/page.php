<?php

/**
 * Page default template.
 *
 * @package WordPress
 * @subpackage eom
 */

get_header();

wp_enqueue_style( 'single-post', THEME_URI . '/static/css/pages/single-post.min.css', [], THEME_VERSION );
?>

<main class="main">
	<?php
	while( have_posts() ){
		the_post();
		get_template_part( 'template-parts/single/content', 'page' );
	}
	?>
</main>

<?php
get_footer();

