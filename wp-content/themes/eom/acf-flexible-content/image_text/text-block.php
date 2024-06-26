<?php

/**
 * Image & Text - ACF Flexible Content section.
 * Text block.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Image & Text
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $block = $args['block'] ?? null ) return;

$subtitle		= ( isset( $block['subtitle'] ) && $block['subtitle'] ) ? $block['subtitle'] : '';
$subtitle_color	= ( isset( $block['subtitle_color'] ) && $block['subtitle_color'] ) ? $block['subtitle_color'] : '#fff';
$title			= ( isset( $block['title'] ) && $block['title'] ) ? $block['title'] : '';
$title_color	= ( isset( $block['title_color'] ) && $block['title_color'] ) ? $block['title_color'] : '#fff';
$title_size		= ( isset( $block['title_size'] ) && $block['title_size'] ) ? $block['title_size'] : 'h2';
$text			= ( isset( $block['text'] ) && $block['text'] ) ? $block['text'] : '';
$text_color		= ( isset( $block['text_color'] ) && $block['text_color'] ) ? $block['text_color'] : '#fff';
$text_type		= ( isset( $block['text_type'] ) && $block['text_type'] ) ? ' ' . esc_attr( $block['text_type'] ) : '';
$link			= ( isset( $block['link'] ) && $block['link'] ) ? $block['link'] : '';
$border_color	= ( isset( $block['border_color'] ) && $block['border_color'] ) ? $block['border_color'] : '#fff';
?>

<div class="image__text_info<?php echo $text_type ?>">
	<hr style="background-color: <?php echo esc_attr( $border_color ) ?>" />

	<?php
	if( $subtitle || $title ){
		echo '<div class="image__text_heading">';

		if( $subtitle )
			echo '<p style="color: ', esc_attr( $subtitle_color ), '">',
				esc_attr( $subtitle ),
			'</p>';

		if( $title )
			echo '<', $title_size, ' class="', esc_attr( $title_size ), '" style="color: ', esc_attr( $title_color ), '">',
				esc_html( $title ),
			'</h2>';

		echo '</div>';
	}

	if( $text ){
		echo '<div class="image__text_paragraphs" style="color: ', esc_attr( $text_color ), '">', $text;

		if( $link ){
			$link_url	= $link['url'];
			$link_title	= $link['title'];
			$target		= $link['target'] ? ' target="_blank"' : '';
			?>
			<a href="<?php echo esc_url( $link_url ) ?>"<?php echo $target ?>>
				<?php echo esc_html( $link_title ) ?> <span>→</span>
			</a>
			<?php
		}

		echo '</div>';
	}
	?>
</div>

