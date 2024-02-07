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

$subtitle		= get_sub_field( 'subtitle' );
$subtitle_color	= get_sub_field( 'subtitle_color' );
$subtitle_color	= $subtitle_color ? ' style="color:' . esc_attr( $subtitle_color ) . '"' : '';
$title			= get_sub_field( 'title' );
$title_color	= get_sub_field( 'title_color' );
$title_color	= $title_color ? ' style="color:' . esc_attr( $title_color ) . '"' : '';
$text			= get_sub_field( 'text' );
$text_color		= get_sub_field( 'text_color' );
$text_color		= $text_color ? ' style="color:' . esc_attr( $text_color ) . '"' : '';
$image			= get_sub_field( 'image' );
$bg_color		= get_sub_field( 'bg_color' );
$bg				= $bg_color ? ' style="background-color:' . esc_attr( $bg_color ) . '"' : '';
?>

<section class="image__text terracota"<?php echo $bg ?>>
	<div class="container">
		<div class="image__text_wrapper" style="color: #fff">
			<?php
			if( $image )
				echo '<div class="image__text_left">',
					wp_get_attachment_image( $image, 'image-text', null, ['loading' => 'lazy'] ),
				'</div>';
			?>

			<div class="image__text_right">
				<div class="image__text_inner">
					<?php
					if( $subtitle )
						echo '<div class="subtitle white"', $subtitle_color, '>',
							esc_html( $subtitle ),
						'</div>';
					?>

					<div class="image__text_info">
						<?php
						if( $title )
							echo '<div class="image__text_heading"', $title_color, '><h2 class="h2">',
								esc_html( $title ),
							'</h2></div>';

						if( $text )
							echo '<div class="image__text_paragraphs"', $text_color, '>',
								$text,
							'</div>';
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

