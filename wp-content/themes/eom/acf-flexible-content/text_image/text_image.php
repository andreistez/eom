<?php

/**
 * Image & Text - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Image & Text
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'text_image', THEME_URI . '/static/css/text_image/text_image.min.css', [], THEME_VERSION );
wp_enqueue_script( 'text_image', THEME_URI . '/static/js/text_image/text_image.min.js', ['jquery'], THEME_VERSION, true );

$image			= get_sub_field( 'image' );
$bg_color		= get_sub_field( 'bg_color' );
$bg				= $bg_color ? ' style="background-color:' . esc_attr( $bg_color ) . '"' : '';
$subtitle		= get_sub_field( 'subtitle' );
$subtitle_color	= get_sub_field( 'subtitle_color' ) ?: '#000';
$title			= get_sub_field( 'title' );
$title_color	= get_sub_field( 'title_color' ) ?: '#000';
$text			= get_sub_field( 'text' );
$text_color		= get_sub_field( 'text_color' ) ?: '#000';
?>

<section class="text__image">
	<div class="container">
		<div class="text__image_wrapper"<?php echo $bg ?>>
			<div class="text__image_info">
				<?php
				if( $subtitle || $title ){
					echo '<div class="image__text_heading">';

					if( $subtitle ) echo '<p style="color:', esc_attr( $subtitle_color ), '">', esc_html( $subtitle ), '</p>';

					if( $title ) echo '<h2 class="h2" style="color:', esc_attr( $title_color ), '">', esc_html( $title ), '</h2>';

					echo '</div>';
				}

				if( $text ){
					?>
					<div class="image__text_content" style="color:<?php echo esc_attr( $text_color ) ?>">
						<?php echo $text ?>
					</div>
					<?php
				}
				?>
			</div>

			<?php
			if( $image )
				echo '<div class="text__image_item">',
					wp_get_attachment_image( $image, 'image-text@2x', null, ['loading' => 'lazy'] ),
				'</div>';
			?>
		</div>
	</div>
</section>

