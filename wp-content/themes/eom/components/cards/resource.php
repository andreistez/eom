<?php

/**
 * Resources - ACF Flexible Content section.
 * Single resource.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Resources
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $res = $args['resource'] ?? null ) return;

$image	= $res['image'];
$link	= $res['link'];
?>

<div class="resources__item">
	<div class="resources__item_inner">
		<?php
		if( $image )
			echo '<div class="resources__img">',
				wp_get_attachment_image( $image, 'large', false, ['loading' => 'lazy'] ),
			'</div>';

		if( $link ){
			$link_url		= $link['url'];
			$link_title		= $link['title'];
			$link_target	= $link['target'] ? ' target="_blank"' : '';
			?>
			<a href="<?php echo esc_url( $link_url ) ?>" class="resources__link dark flex-sb"<?php echo $link_target ?>>
				<?php echo esc_html( $link_title ) ?> <span>→</span>
			</a>
			<?php
		}
		?>
	</div>
</div>

