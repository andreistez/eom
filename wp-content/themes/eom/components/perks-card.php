<?php

/**
 * Perks item layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Perks
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $card = $args['card'] ?? null ) return;

$image	= $card['image'] ?? '';
$title	= $card['title'] ?? '';
$text	= $card['text'] ?? '';

if( ! $image && ! $title && ! $text ) return;
?>

<div class="perks__card">
	<?php
	if( $image )
		echo '<div class="perks__card_img">',
			wp_get_attachment_image( $image, 'thumbnail', false, ['loading' => 'lazy'] ),
		'</div>';
	?>

	<div class="perks__card_inner">
		<?php
		if( $title ) echo '<div class="perks__card_title blue">', esc_html( $title ), '</div>';

		if( $text ) echo '<div class="perks__card_text blue">', esc_html( $text ), '</div>';
		?>
	</div>
</div>

