<?php

/**
 * H2 box - heading component layout.
 *
 * @package WordPress
 * @subpackage eom
 */

$subtitle   = $args['subtitle'] ?? '';
$title      = $args['title'] ?? '';
$text       = $args['text'] ?? '';
$color      = $args['color'] ?? 'grass';

if( ! $subtitle && ! $title && ! $text ) return;
?>

<div class="h2__box <?php echo esc_attr( $color ) ?>">
	<?php
	if( $subtitle || $title ){
		echo '<div class="h2__wrapper">';

		if( $subtitle ) echo '<p class="subtitle">', esc_html( $subtitle ), '</p>';

		if( $title ) echo '<h2 class="h2">', $title, '</h2>';

		echo '</div>';
	}

	if( $text ) echo '<div class="h2__box_text">', $text, '</div>';
	?>
</div>

