<?php

/**
 * Find Out - ACF Flexible Content section layout.
 *
 * @see        Page with ACF Flexible Content template -> Flexible Content -> Find Out
 *
 * @package    WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'find_out', THEME_URI . '/static/css/find_out/find_out.min.css', [], THEME_VERSION );

$section_id     = get_sub_field( 'section_id' ) ?? '';
$title          = get_sub_field( 'title' ) ?: '';
$form_shortcode = get_sub_field( 'form_shortcode' ) ?: '';
$image          = get_sub_field( 'image' ) ?: [];
?>

<section id="<?php echo esc_attr( $section_id ) ?>" class="find-out">
	<div class="container">
		<div class="find-out-items">
			<?php
			if( $title || $form_shortcode ){
				echo '<div class="find-out-form">';

				if( $title ) echo '<h2>', esc_html( $title ), '</h2>';

				if( $form_shortcode ) echo do_shortcode( $form_shortcode );

				echo '</div>';
			}

			if( $image ){
				echo '<div class="find-out-img">',
				wp_get_attachment_image( $image, 'image-text@2x' ),
				'</div>';
			}
			?>
		</div>
	</div>
</section>

