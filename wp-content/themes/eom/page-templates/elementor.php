<?php

/**
 * Template name: Elementor
 *
 * @package WordPress
 * @subpackage eom
 */

get_header();
?>

<main class="main">
	<section class="elementor-wrap">
		<div class="elementor-content">
			<?php
			if( has_post_thumbnail() ){
				echo '<div class="elementor-content-thumb">';
				the_post_thumbnail();
				echo '</div>';
			}

			the_content();
			?>
		</div>
	</section>
</main>

<?php
get_footer();

