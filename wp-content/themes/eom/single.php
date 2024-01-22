<?php

/**
 * Single post default template.
 *
 * @package WordPress
 * @subpackage eom
 */

get_header();
?>

	<main class="main">
		<?php
		while( have_posts() ){
			the_post();

			/**
			 * Please create PHP file with your single post content in:
			 * theme_name/template-parts/single/
			 *
			 * Set its title as:
			 * 'content-<custom-post-type-name>'
			 *
			 * @example
			 * theme_name/template-parts/single/content-portfolio.php for 'portfolio' custom post type.
			 */
			get_template_part( 'template-parts/single/content', get_post_type() );
		}
		?>
	</main>

<?php
get_footer();
