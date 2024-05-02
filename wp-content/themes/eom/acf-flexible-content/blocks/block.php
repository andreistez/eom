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

$image   = $block['image'] ?? '';
$title   = $block['title'] ?? '';
$date    = $block['date'] ?? '';
$text    = $block['text'] ?? '';
$form_id = $block['form'] ?? '';
$id_rand = 'modal-' . random_int( 10000, 99999 ) . random_int( 10000, 99999 );
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

	<?php
	if( $form_id ){
		?>
		<div id="<?php echo $id_rand ?>" class="modal__wrapper signup-modal">
			<div class="modal">
				<?php echo do_shortcode( "[contact-form-7 id='$form_id']" ) ?>

				<button class="close__button">
					<span></span>
				</button>
			</div>
		</div>
		<?php
	}
	?>
</div>

