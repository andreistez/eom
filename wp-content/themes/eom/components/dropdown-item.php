<?php

/**
 * Dropdown item layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Dropdowns
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $item = $args['item'] ?? null ) return;

$id		= $args['id'] ?? 0;
$title	= $item['title'] ?? '';
$text	= $item['text'] ?? '';

if( ! $title && ! $text ) return;
?>

<div class="dropdown" data-id="<?php echo esc_attr( $id ) ?>">
	<?php
	if( $title ){
		?>
		<div class="dropdown__title">
			<div class="dropdown__start white"><?php echo esc_html( $title ) ?></div>
			<span></span>
		</div>
		<?php
	}

	if( $text ){
		?>
		<div class="dropdown__open">
			<div class="dropdown__inner">
				<div class="dropdown__text"><?php echo $text ?></div>
			</div>
		</div>
		<?php
	}
	?>
</div>

