<?php

/**
 * Latest - ACF Flexible Content section.
 * Single post preview layout - remote post from REST API.
 *
 * @see        Page with ACF Flexible Content template -> Flexible Content -> Latest
 *
 * @package    WordPress
 * @subpackage eom
 */

if( ! $_p = $args['post'] ?? null ) return;

$type		= $args['type'] ?? 'no-thumb';
$thumb_src	= $_p['_embedded']['wp:featuredmedia'][0]['source_url'] ?? null;
$title		= $_p['title']['rendered'] ?? '';
$excerpt	= $_p['excerpt']['rendered'] ?? null;
?>

<div class="latest__item post-<?php echo esc_attr( $_p['id'] ) ?>">
	<div class="latest__item_inner">
		<?php
		if( $type === 'thumb' ){
			if( $thumb_src ){
				?>
				<div class="latest__item_img">
					<img src="<?php echo esc_url( $thumb_src ) ?>" alt="" />
				</div>
				<?php
			}

			echo '<div class="latest__item_info">';
		}
		?>

		<div class="latest__case_wrapper">
			<!--<div class="latest__case">
				<?php /*echo eom_get_reading_time( $post_id ), ' ', __( 'min read', 'eom' ) */?>
			</div>-->
			<div class="latest__case">
				<?php echo date( 'M Y', strtotime( $_p['date'] ) ) ?>
			</div>
		</div>

		<?php
		if( $type === 'thumb' ) echo '<h4 class="h4">', esc_html( $title ), '</h4>';
		else echo '<h5 class="h5">', esc_html( $title ), '</h5>';

		if( $excerpt ) echo '<p>', strip_tags( trim( $excerpt ) ), '</p>';
		?>

		<div class="link__arrow_wrapper">
			<a class="link__arrow" href="<?php echo get_the_permalink( $_p['link'] ) ?>">
				<?php _e( 'Read on', 'eom' ) ?> <span>→</span>
			</a>
		</div>

		<?php if( $type === 'thumb' ) echo '</div>' ?>
	</div>
</div>
