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
		<div class="container">
			<div class="elementor-content">
				<?php the_content() ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

