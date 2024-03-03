<?php

/**
 * Single post preview layout for the Knowledge Hub.
 *
 * @see Page with Knowledge Hub template
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $post_id = $args['id'] ?? null ) return;
?>

<div class="hub-card post-<?php echo esc_attr( $post_id ) ?>">
	<div class="hub-card-inner">
		<?php
		if( has_post_thumbnail( $post_id ) )
			echo '<div class="hub-card-img">',
				get_the_post_thumbnail( $post_id, 'large' ),
			'</div>';
		?>

		<div class="hub-card-bottom">
			<?php if( has_excerpt( $post_id ) ) echo '<p>', strip_tags( trim( get_the_excerpt( $post_id ) ) ), '</p>' ?>

			<a href="<?php echo get_the_permalink( $post_id ) ?>">
				<?php _e( 'View Post', 'eom' ) ?>
			</a>
		</div>
	</div>
</div>
