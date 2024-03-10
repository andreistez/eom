<?php

/**
 * Slides - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Slides
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'swiper', THEME_URI . '/static/css/pages/swiper.min.css', [], THEME_VERSION );
wp_enqueue_style( 'slides', THEME_URI . '/static/css/slides/slides.min.css', [], THEME_VERSION );
wp_enqueue_script( 'slides', THEME_URI . '/static/js/slides/slides.min.js', ['jquery'], THEME_VERSION, true );

$title			= get_sub_field( 'title' );
$title_color	= get_sub_field( 'title_color' ) ?: '#000';
$people			= get_sub_field( 'people' );
?>

<section class="slides">
	<div class="container">
		<div class="slides__wrapper">
            <div class="subtitle" style="color: <?php echo esc_attr( $title_color ) ?>">OUR ORGANIZATION</div>
			<?php
			if( $title ) echo '<h2 class="h2" style="color: ', esc_attr( $title_color ), '">', $title, '</h2>';

			if( ! empty( $people ) ){
				?>
				<div class="slides__items">
					<div class="swiper team-swiper">
						<div class="swiper-wrapper">
							<?php
							foreach( $people as $person )
								get_template_part( 'acf-flexible-content/slides/slide', null, ['id' => $person['person']] );
							?>
						</div>

						<div class="swiper-navigation">
							<div class="swiper-prev"><span>→</span></div>
							<div class="swiper-next"><span><?php _e( 'View more', 'eom' ) ?></span>→</div>
						</div>
					</div><!-- .swiper -->
				</div><!-- .slides__items -->
				<?php
			}
			?>
		</div><!-- .slides__wrapper -->
	</div>
</section>

