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

$section_type		= get_sub_field( 'section_type' );
$bg_image			= get_sub_field( 'bg_image' );
$bg_image_tablet	= get_sub_field( 'bg_image_tablet' ) ?: $bg_image;
$bg_image_mobile	= get_sub_field( 'bg_image_mobile' ) ?: $bg_image_tablet;
//$style				= $bg_image ? ' style="background-image: url(' . wp_get_attachment_image_url( $bg_image, 'video-poster@2x' ) . ')"' : '';
$single_quote		= [];

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
					<?php
					if( $bg_image ){
						$desktop	= esc_url( wp_get_attachment_image_url( $bg_image, 'video-poster@2x' ) );
						$tablet		= esc_url( wp_get_attachment_image_url( $bg_image_tablet, 'video-poster@2x' ) );
						$mobile		= esc_url( wp_get_attachment_image_url( $bg_image_mobile, 'video-poster@2x' ) );
						?>
						<div class="quote-slider-bg">
							<img srcset="<?php echo "$mobile 768w, $tablet 992w, $desktop 1240w" ?>" src="<?php echo $desktop ?>" alt="" />
						</div>
						<?php
					}
					?>

					<div class="swiper-wrapper">
						<?php
						foreach( $slider as $slide )
							get_template_part( 'components/cards/quote', null, ['quote' => $slide] );
						?>
					</div>
                    <div class="swiper-navigation">
                        <div class="swiper-prev"><span>→</span></div>
                        <div class="swiper-next"><span><?php _e( 'View more', 'eom' ) ?></span>→</div>
                    </div>
				</div>
				<?php
			}
		}else{
			?>
			<div class="quote-single"<?php echo $style ?>>
				<?php get_template_part( 'components/cards/quote', null, ['quote' => $single_quote] ) ?>
			</div>
			<?php
		}
		?>
	</div>
</section>

