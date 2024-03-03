<?php

/**
 * Image & Text - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Image & Text
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'text_rows', THEME_URI . '/static/css/text_rows/text_rows.min.css', [], THEME_VERSION );
wp_enqueue_script( 'text_rows', THEME_URI . '/static/js/text_rows/text_rows.min.js', ['jquery'], THEME_VERSION, true );

$bg_color			= get_sub_field( 'bg_color' );
$bg					= $bg_color ? ' style="background-color:' . esc_attr( $bg_color ) . '"' : '';
$subtitle			= get_sub_field( 'subtitle' );
$subtitle_color		= get_sub_field( 'subtitle_color' ) ?: '#000';
$title				= get_sub_field( 'title' );
$title_color		= get_sub_field( 'title_color' ) ?: '#000';
$text_left			= get_sub_field( 'text_left' );
$text_left_color	= get_sub_field( 'text_left_color' ) ?: '#000';
$text_right			= get_sub_field( 'text_right' );
$text_right_color	= get_sub_field( 'text_right_color' ) ?: '#000';
?>

<section class="text__rows">
	<div class="container">
		<div class="text__rows_wrapper"<?php echo $bg ?>>
			<?php
			if( $subtitle || $title ){
				echo '<div class="image__text_heading">';

				if( $subtitle ) echo '<p style="color:', esc_attr( $subtitle_color ), '">', esc_html( $subtitle ), '</p>';

				if( $title ) echo '<h2 class="h2" style="color:', esc_attr( $title_color ), '">', esc_html( $title ), '</h2>';

				echo '</div>';
			}

			if( $text_left || $text_right ){
				echo '<div class="text__rows_blocks">';

				if( $text_left )
					echo '<div class="text__rows_block" style="color:', esc_attr( $text_left_color ), '">', $text_left, '</div>';

				if( $text_right )
					echo '<div class="text__rows_block" style="color:', esc_attr( $text_right_color ), '">', $text_right, '</div>';

				echo '</div>';
			}
			?>
		</div>
	</div>
</section>

