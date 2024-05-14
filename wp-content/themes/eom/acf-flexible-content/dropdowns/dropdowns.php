<?php

/**
 * Dropdowns - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Dropdowns
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'dropdowns', THEME_URI . '/static/css/dropdowns/dropdowns.min.css', [], THEME_VERSION );
wp_enqueue_script( 'dropdowns', THEME_URI . '/static/js/dropdowns/dropdowns.min.js', ['jquery'], THEME_VERSION, true );

$subtitle		= get_sub_field( 'subtitle' );
$title			= get_sub_field( 'title' );
$title_color	= get_sub_field( 'title_color' );
$text			= get_sub_field( 'text' );
$dropdowns		= get_sub_field( 'dropdowns' );
$section_id = get_sub_field( 'section_id' ) ?? '';
?>

<section id="<?php echo esc_attr( $section_id ); ?>" class="dropdowns">
	<div class="container">
		<div class="dropdowns__wrapper">
			<?php
			get_template_part( 'components/h2-box', null, [
				'subtitle'	=> $subtitle,
				'title'		=> $title,
				'text'		=> $text,
				'color'		=> $title_color
			] );
			?>

			<div class="dropdowns__circle_wrapper">
				<div class="dropdowns__circle">
					<div class="circle__lines"></div>
					<div class="circle__top">
						<div class="circle__top_left" data-id="0">
							<img class="top-left" src="<?php echo THEME_URI ?>/static/img/top-left.svg" alt="">
						</div>
						<div class="circle__top_right" data-id="1">
							<img class="top-right" src="<?php echo THEME_URI ?>/static/img/top-right.svg" alt="">
						</div>
					</div>
					<div class="circle__bottom">
						<div class="circle__bottom_left" data-id="3">
							<img class="bot-left" src="<?php echo THEME_URI ?>/static/img/bot-left.svg" alt="">
						</div>
						<div class="circle__bottom_right" data-id="2">
							<img class="bot-right" src="<?php echo THEME_URI ?>/static/img/bot-right.svg" alt="">
						</div>
					</div>
					<img class="svg-center" src="<?php echo THEME_URI ?>/static/img/center.svg" alt="">
				</div>
			</div>

			<?php
			if( ! empty( $dropdowns ) ){
				echo '<div class="dropdown__items">';

				foreach( $dropdowns as $key => $item )
					get_template_part( 'components/dropdown-item', null, ['item' => $item, 'id' => $key] );

				echo '</div>';
			}
			?>
		</div>
</section>

