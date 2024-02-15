<?php

/**
 * Index page default template.
 *
 * @package WordPress
 * @subpackage eom
 */

get_header();

$posts_page_id	= get_option( 'page_for_posts', true );
$term_id		= get_queried_object()->term_id ?? 0;
?>

<main class="main">
	<section class="blog-posts">
		<div class="container">
			<div class="blog-cards">
				<?php
				if( have_posts() ){
					while( have_posts() ){
						the_post();
						get_template_part( 'components/cards/post', null, ['id' => get_the_ID(), 'type' => 'thumb'] );
					}
				}
				?>
			</div>
            <button class="more">Load more</button>

			<?php get_template_part( 'template-parts/other-resources' ) ?>
		</div>
	</section>
</main>

<?php
get_footer();

