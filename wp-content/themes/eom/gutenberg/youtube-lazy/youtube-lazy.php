<?php

/**
 * YouTube Lazy Gutenberg block template.
 *
 * @package    WordPress
 * @subpackage eom
 */

$id			= 'yt-lazy-' . $block['id'];
$inner_id 	= 'yt-lazy-inner-' . $block['id'];
$class_name	= 'yt-lazy';

if(
	! ( $yt_url = get_field( 'yt_url' ) ) ||
	! ( $poster_id = get_field( 'poster_image' ) )
) return;

$video_arr = explode( '?v=', $yt_url );

if( ! $video_id	= $video_arr[1] ?? null ) return;

if( ! empty( $block['anchor'] ) ) $id = $block['anchor'];

if( ! empty( $block['className'] ) ) $class_name .= ' ' . $block['className'];

if( ! empty( $block['align'] ) ) $class_name .= ' align' . $block['align'];
?>

<div id="<?php echo esc_attr( $id ) ?>" class="<?php echo esc_attr( $class_name ) ?>">
	<div
		id="<?php echo esc_attr( $inner_id ) ?>"
		class="yt-lazy-placeholder"
		data-video="<?php echo esc_attr( $video_id ) ?>"
	>
		<?php if( $poster_id ) echo wp_get_attachment_image( $poster_id, 'large', null, ['class' => 'yt-lazy-poster'] ) ?>

		<div class="play-btn"></div>
	</div>
</div>

