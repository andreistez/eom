<?php

/** Category archive default template.
 *
 * @package WordPress
 * @subpackage eom
 */

get_header();

// Archive styles and scripts.
wp_enqueue_style( 'archive', THEME_URI . '/static/css/pages/archive.min.css', [], THEME_VERSION );
?>

<main class="main">
	<section class="archive-wrap">
		<div class="container">
			<h1 class="archive-title"><?php single_cat_title() ?></h1>
			<?php
			if( have_posts() ){
				echo '<div class="archive-posts">';

				while( have_posts() ){
					the_post();
					get_template_part( 'components/cards/post', null, ['id' => get_the_ID(), 'type' => 'thumb'] );
				}

				echo '</div>';

				the_posts_pagination( [
					'screen_reader_text' => ' '
				] );
			}
			?>
		</div>
	</section>
</main>

<?php
get_footer();

