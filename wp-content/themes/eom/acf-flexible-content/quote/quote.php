<?php

/**
 * Quote - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Quote
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'quote', THEME_URI . '/static/css/quote/quote.min.css', [], THEME_VERSION );
wp_enqueue_script( 'quote', THEME_URI . '/static/js/quote/quote.min.js', ['jquery'], THEME_VERSION, true );

$type		= get_sub_field( 'type' );
$type		= $type === 'standard' ? '' : ' flex-start';
$image		= get_sub_field( 'image' );
$text		= get_sub_field( 'text' );
$name		= get_sub_field( 'name' );
$position	= get_sub_field( 'position' );
?>

<section class="quote<?php echo $type ?>">
	<div class="container">
		<div class="quote__wrapper">
			<?php
			if( $image )
				echo '<div class="quote__bg">',
					wp_get_attachment_image( $image, 'full', false, ['loading' => 'lazy'] ),
				'</div>';

			if( $text ){
				?>
				<blockquote>
					<div class="quote__mark">
						<svg width="51" height="52" viewBox="0 0 51 52" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.2347 51.5725C10.2789 51.5725 8.36565 50.5968 6.4949 48.6453C4.70918 46.6089 3.26361 43.9787 2.15816 40.7544C1.05272 37.5302 0.5 34.1363 0.5 30.5727C0.5 25.7364 1.30782 21.2395 2.92347 17.082C4.62415 12.8396 6.62245 9.31844 8.91837 6.51847C11.2143 3.63366 13.2976 1.72459 15.1684 0.79126H15.2959L18.2296 3.84577V4.99121C16.1888 6.43362 14.1905 9.02147 12.2347 12.7548C10.2789 16.4032 9.30102 20.8577 9.30102 26.1182C9.30102 29.0879 9.72619 31.5061 10.5765 33.3727C11.5119 35.1545 12.8299 37.0212 14.5306 38.9726C15.6361 40.2454 16.4439 41.3484 16.9541 42.2817C17.5493 43.215 17.8469 44.2756 17.8469 45.4635C17.8469 47.415 17.3367 48.9422 16.3163 50.0453C15.2959 51.0634 13.9354 51.5725 12.2347 51.5725ZM44.5051 51.5725C42.5493 51.5725 40.6361 50.5968 38.7653 48.6453C36.9796 46.6089 35.534 43.9787 34.4286 40.7544C33.3231 37.5302 32.7704 34.1363 32.7704 30.5727C32.7704 25.7364 33.5782 21.2395 35.1939 17.082C36.8946 12.8396 38.8929 9.31844 41.1888 6.51847C43.4847 3.63366 45.568 1.72459 47.4388 0.79126H47.5663L50.5 3.84577V4.99121C48.4592 6.43362 46.4609 9.02147 44.5051 12.7548C42.5493 16.4032 41.5714 20.8577 41.5714 26.1182C41.5714 29.0879 41.9966 31.5061 42.8469 33.3727C43.7823 35.1545 45.1003 37.0212 46.801 38.9726C47.9065 40.2454 48.7143 41.3484 49.2245 42.2817C49.8197 43.215 50.1173 44.2756 50.1173 45.4635C50.1173 47.415 49.6071 48.9422 48.5867 50.0453C47.5663 51.0634 46.2058 51.5725 44.5051 51.5725Z" fill="white"/>
						</svg>
					</div>
					<p><?php echo esc_html( $text ) ?></p>

					<?php
					if( $name ) echo '<div class="quote__name">', esc_html( $name ), '</div>';

					if( $position ) echo '<div class="quote__job">', esc_html( $position ), '</div>';
					?>
				</blockquote>
				<?php
			}
			?>
		</div>
	</div>
</section>

