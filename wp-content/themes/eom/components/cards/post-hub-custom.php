<?php

/**
 * Custom link post preview layout for the Knowledge Hub.
 *
 * @see Page with Knowledge Hub template
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $link = $args['link'] ?? null ) return;

$image		= $link['image'];
$link_data	= $link['link'];
$title		= $link_data['title'];
$url		= $link_data['url'];
$target		= $link_data['target'] ? ' target="_blank"' : '';
?>

<div class="hub-card">
	<div class="hub-card-inner">
		<?php
		if( $image )
			echo '<div class="hub-card-img">',
				wp_get_attachment_image( $image, 'large' ),
			'</div>';
		?>

		<div class="hub-card-bottom">
			<?php if( $title ) echo '<p>', esc_html( $title ), '</p>' ?>

			<a href="<?php echo esc_url( $url ) ?>"<?php echo $target ?>>
				<?php _e( 'View Post', 'eom' ) ?>
			</a>
		</div>
	</div>
</div>
