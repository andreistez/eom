<?php

/**
 * Blocks - ACF Flexible Content section layout.
 * Single block item layout.
 *
 * @see        Page with ACF Flexible Content template -> Flexible Content -> Blocks
 *
 * @package    WordPress
 * @subpackage eom
 */

if( ! $block = $args['block'] ?? null ) return;

$image = $block['image'] ?? '';
$title = $block['title'] ?? '';
$date  = $block['date'] ?? '';
$text  = $block['text'] ?? '';
?>

<div class="block">
	<div class="block-inner">
		<?php
		if( $image ) echo '<div class="block-img">', wp_get_attachment_image( $image, 'image-text@2x', null, [ 'loading' => 'lazy' ] ), '</div>';
		?>

		<div class="block-info">
			<?php
			if( $title ) echo '<div class="block-title">', $title, '</div>';

			if( $date ) echo '<div class="block-date">', $date, '</div>';

			if( $text ) echo '<div class="block-text">', $text, '</div>';
			?>

			<div class="button-wrapper">
				<button class="button bg dark call-signup">
					<?php _e( 'Sign Up', 'eom' ) ?>
				</button>
			</div>
		</div>
	</div>
</div>

