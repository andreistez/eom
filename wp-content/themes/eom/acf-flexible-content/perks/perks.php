<?php

/**
 * Perks - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Perks
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'perks', THEME_URI . '/static/css/perks/perks.min.css', [], THEME_VERSION );
wp_enqueue_script( 'perks', THEME_URI . '/static/js/perks/perks.min.js', ['jquery'], THEME_VERSION, true );

$subtitle		= get_sub_field( 'subtitle' );
$title			= get_sub_field( 'title' );
$title_color	= get_sub_field( 'title_color' );
$text			= get_sub_field( 'text' );
$cards			= get_sub_field( 'cards' );
$section_id = get_sub_field( 'section_id' ) ?? '';
?>

<section class="perks" id="<?php echo esc_attr( $section_id ); ?>">
	<div class="container">
		<div class="perks__wrapper">
			<?php
			get_template_part( 'components/h2-box', null, [
				'subtitle'	=> $subtitle,
				'title'		=> $title,
				'text'		=> $text,
				'color'		=> $title_color
			] );

			if( ! empty( $cards ) ){
				echo '<div class="perks__cards">';

				foreach( $cards as $card )
					get_template_part( 'components/perks-card', null, ['card' => $card] );

				echo '</div>';
			}
			?>
		</div>
	</div>
</section>

