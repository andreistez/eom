<?php

/**
 * Main Video - ACF Flexible Content section layout.
 *
 * @see        Page with ACF Flexible Content template -> Flexible Content -> Main Video
 *
 * @package    WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'main-video', THEME_URI . '/static/css/main_video/main_video.min.css', [], THEME_VERSION );
wp_enqueue_script( 'main-video', THEME_URI .
                                 '/static/js/main_video/main_video.min.js', [ 'jquery' ], THEME_VERSION, true );

if( ! $vimeo_url = get_sub_field( 'vimeo_url' ) ) return;

$poster     = get_sub_field( 'poster' );
$video_desc = get_sub_field( 'video_desc' );
?>

<section class="main__video">
	<div class="container">
		<div class="main__video_wrapper">
			<div
				class="embededVideo"
				data-id-vimeo="<?php echo esc_url( $vimeo_url ) ?>"
			>
				<?php
				if( $poster ) echo wp_get_attachment_image( $poster, 'video-poster@2x', false, [ 'loading' => 'lazy' ] );

				if( $video_desc ) echo '<div class="video__desc">', $video_desc, '</div>';
				?>
			</div>
			<div class="play"></div>
		</div>
	</div>
</section>

