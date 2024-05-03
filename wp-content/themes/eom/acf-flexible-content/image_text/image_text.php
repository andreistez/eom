<?php

/**
 * Image & Text - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Image & Text
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'image_text', THEME_URI . '/static/css/image_text/image_text.min.css', [], THEME_VERSION );
wp_enqueue_script( 'image-text', THEME_URI . '/static/js/image_text/image_text.min.js', ['jquery'], THEME_VERSION, true );

$type			= get_sub_field( 'type' ) ? ' ' . get_sub_field( 'type' ) : '';
$image			= get_sub_field( 'image' );
$bg_color		= get_sub_field( 'bg_color' );
$bg				= $bg_color ? ' style="background-color:' . esc_attr( $bg_color ) . '"' : '';
$bottom_spacing	= get_sub_field( 'additional_bottom_spacing' );
$text_blocks	= get_sub_field( 'text_blocks' );
$id_rand        = 'modal-' . random_int( 10000, 99999 ) . random_int( 10000, 99999 );
$form_id        = get_sub_field('form') ?? '';
?>

<section class="image__text<?php echo $type ?>">
	<div class="container">
		<div class="image__text_wrapper">
			<?php
			if( $image )
				echo '<div class="image__text_left">',
					wp_get_attachment_image( $image, 'image-text@2x', null, ['loading' => 'lazy'] ),
				'</div>';
			?>

			<div class="image__text_right"<?php echo $bg ?>>
				<?php
				if( ! empty( $text_blocks ) ){
					?>
					<div class="image__text_inner">
						<?php
						foreach( $text_blocks as $block )
							get_template_part( 'acf-flexible-content/image_text/text-block', null, ['block' => $block] );
						?>
					</div>
					<?php
				}

				if( $bottom_spacing )
					echo '<div class="image__text_spacer" style="height: ', esc_attr( $bottom_spacing ), 'px"></div>';
				?>
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
</section>

