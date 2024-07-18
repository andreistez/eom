<?php

/**
 * Template name: Elementor With Thumbnail
 *
 * @package WordPress
 * @subpackage eom
 */

get_header();
?>

<main class="main">
	<section class="elementor-wt-wrap">
		<div class="elementor-wt-content">
			<?php
			if( has_post_thumbnail() ){
				echo '<div class="elementor-wt-content-thumb">';
				the_post_thumbnail( 'full' );
				echo '</div>';
			}

			the_content();
			?>
		</div>
	</section>
</main>

<?php
get_footer();

