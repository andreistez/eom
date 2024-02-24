<?php

/**
 * Quote - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Quote
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'swiper', THEME_URI . '/static/css/pages/swiper.min.css', [], THEME_VERSION );
wp_enqueue_style( 'quote', THEME_URI . '/static/css/quote/quote.min.css', [], THEME_VERSION );
wp_enqueue_script( 'quote', THEME_URI . '/static/js/quote/quote.min.js', ['jquery'], THEME_VERSION, true );

$section_type	= get_sub_field( 'section_type' );
$single_quote	= [];

if( $section_type === 'slider' ){
	$slider = get_sub_field( 'slider' );
}else{
	$single_quote	= [
		'type'		=> get_sub_field( 'type' ),
		'image'		=> get_sub_field( 'image' ),
		'text'		=> get_sub_field( 'text' ),
		'name'		=> get_sub_field( 'name' ),
		'position'	=> get_sub_field( 'position' )
	];
}
?>

<section class="quote">
	<div class="container">
		<?php
		if( $section_type === 'slider' ){
			if( ! empty( $slider ) ){
				?>
				<div class="quote-slider swiper">
					<div class="swiper-wrapper">
						<?php
						foreach( $slider as $slide )
							get_template_part( 'components/cards/quote', null, ['quote' => $slide] );
						?>
					</div>
				</div>
				<?php
			}
		}else{
			get_template_part( 'components/cards/quote', null, ['quote' => $single_quote] );
		}
		?>
	</div>
</section>

