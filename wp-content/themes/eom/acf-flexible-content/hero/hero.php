<?php

/**
 * Hero - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Hero
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'hero', THEME_URI . '/static/css/hero/hero.min.css', [], THEME_VERSION );

$video_bg		= get_sub_field( 'video_bg' );
$title			= get_sub_field( 'title' );
$title_color	= get_sub_field( 'title_color' ) ?: '#fff';
?>

<section class="hero">
	<div class="container">
		<div class="hero__wrapper">
			<?php
			if( $title )
				echo '<h1 class="h1" style="color: ', esc_attr( $title_color ), '">', $title, '</h1>';

			if( $video_bg ){
				?>
				<video autoplay muted playsinline loop>
					<source
						src="<?php echo esc_url( $video_bg['url'] ) ?>"
						type="<?php echo esc_attr( $video_bg['mime_type'] ) ?>"
					/>
				</video>
				<?php
			}
			?>
		</div>
	</div>
</section>

