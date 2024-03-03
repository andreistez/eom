<?php

/**
 * Latest - ACF Flexible Content section.
 * Single post preview layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Latest
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $post_id = $args['id'] ?? null ) return;

$type = $args['type'] ?? 'no-thumb';
?>

<div class="latest__item post-<?php echo esc_attr( $post_id ) ?>">
	<div class="latest__item_inner">
		<?php
		if( $type === 'thumb' ){
			if( has_post_thumbnail( $post_id ) )
				echo '<div class="latest__item_img">',
					get_the_post_thumbnail( $post_id, 'large' ),
				'</div>';
			?>

			<div class="latest__item_info"><?php
		}
		?>

		<div class="latest__case_wrapper">
			<div class="latest__case">
				<?php echo eom_get_reading_time( $post_id ), ' ', __( 'min read', 'eom' ) ?>
			</div>
			<div class="latest__case">
				<?php echo get_the_date( 'M Y', $post_id ) ?>
			</div>
		</div>

		<?php
		if( $type === 'thumb' ) echo '<h4 class="h4">', get_the_title( $post_id ), '</h4>';
		else echo '<h5 class="h5">', get_the_title( $post_id ), '</h5>';

		if( has_excerpt( $post_id ) ) echo '<p>', strip_tags( trim( get_the_excerpt( $post_id ) ) ), '</p>';
		?>

		<div class="link__arrow_wrapper">
			<a class="link__arrow" href="<?php echo get_the_permalink( $post_id ) ?>">
				<?php _e( 'Read on', 'eom' ) ?> <span>→</span>
			</a>
		</div>

		<?php if( $type === 'thumb') echo '</div>' ?>
	</div>
</div>
