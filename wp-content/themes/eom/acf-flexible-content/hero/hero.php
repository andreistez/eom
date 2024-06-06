<?php

/**
 * Hero - ACF Flexible Content section layout.
 *
 * @see        Page with ACF Flexible Content template -> Flexible Content -> Hero
 *
 * @package    WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'hero', THEME_URI . '/static/css/hero/hero.min.css', [], THEME_VERSION );
wp_enqueue_script( 'hero', THEME_URI . '/static/js/hero/hero.min.js', ['jquery'], THEME_VERSION, true );

$section_id            = get_sub_field( 'section_id' ) ?? '';
$type                  = get_sub_field( 'type' ) ?: 'default';	// 'default' | 'exec'
$bg_type               = get_sub_field( 'background_type' ) ?: 'video';
$video_bg              = get_sub_field( 'video_bg' );
$image                 = get_sub_field( 'image' );
$subtitle              = get_sub_field( 'subtitle' );
$title                 = get_sub_field( 'title' );
$title_color           = get_sub_field( 'title_color' ) ?: '#fff';
$subtitle_color        = get_sub_field( 'subtitle_color' ) ?: '#fff';
$date                  = get_sub_field( 'date' ) ?: '';
$download_button_label = get_sub_field( 'download_button_label' ) ?: '';
$form_id        	   = get_sub_field('form') ?? '';
$id_rand        	   = 'modal-' . random_int( 10000, 99999 ) . random_int( 10000, 99999 );
?>

<section id="<?php echo esc_attr( $section_id ) ?>" class="hero <?php echo esc_attr( $type ) ?>">
	<div class="container">
		<div class="hero__wrapper">
			<?php
			if( $bg_type === 'image' && $image ){
				echo '<div class="hero-bg">', wp_get_attachment_image( $image, 'video-poster' ), '</div>';
			}

			if( $type === 'default' ){
				if( $subtitle ){
					echo '<div class="hero-subtitle" style="color: ', esc_attr( $subtitle_color ), '">', $subtitle, '</div>';
				}

				if( $title ) echo '<h1 class="h1" style="color: ', esc_attr( $title_color ), '">', $title, '</h1>';
			}else{
				if( $title ) echo '<h1 class="h1" style="color: ', esc_attr( $title_color ), '">', $title, '</h1>';

				if( $subtitle ){
					echo '<div class="hero-subtitle" style="color: ', esc_attr( $subtitle_color ), '">', $subtitle, '</div>';
				}

				if( $date ) echo '<div class="hero-date">', esc_html( $date ), '</div>';

				if( $download_button_label ){
					echo '<button class="button bg white call-signup">', esc_html( $download_button_label ), '</button>';
					if( $form_id ){
						?>
						<div id="<?php echo $id_rand ?>" class="modal__wrapper signup-modal">
							<div class="modal">
								<?php echo do_shortcode( "[contact-form-7 id='$form_id']" ) ?>
				
								<button class="close__button">
									<span></span>
								</button>
							</div>
						</div>
						<?php
					}
				}
			}

			if( $bg_type === 'video' && $video_bg ){
				?>
				<video autoplay muted playsinline loop>
					<source
						src="<?php echo esc_url( $video_bg['url'] ) ?>"
						type="<?php echo esc_attr( $video_bg['mime_type'] ) ?>"
					/>
				</video>
				<?php
			}
			?>
		</div>
	</div>
</section>

