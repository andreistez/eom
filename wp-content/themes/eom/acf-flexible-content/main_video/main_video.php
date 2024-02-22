<?php

/**
 * Main Video - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Main Video
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $video = get_sub_field( 'video' ) ) return;

wp_enqueue_style( 'main-video', THEME_URI . '/static/css/main_video/main_video.min.css', [], THEME_VERSION );
wp_enqueue_script( 'main-video', THEME_URI . '/static/js/main_video/main_video.min.js', ['jquery'], THEME_VERSION, true );

$poster	= get_sub_field( 'poster' );
$poster	= $poster ? ' poster="' . wp_get_attachment_image_url( $poster, 'video-poster@2x' ) . '"' : '';
?>

<section class="main__video">
	<div class="container">
		<div class="main__video_wrapper">
			<video playsinline<?php echo $poster ?>>
				<source src="<?php echo esc_url( $video['url'] ) ?>" type="<?php echo esc_attr( $video['mime_type'] ) ?>">
			</video>
			<div class="play"></div>
		</div>
	</div>
</section>

