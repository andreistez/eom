<?php

/**
 * Quote - ACF Flexible Content section.
 * Single quote layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Quote
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $quote = $args['quote'] ?? null ) return;

$ico		=  get_sub_field( 'quote-ico' );
$type		= $quote['type'];
$type		= $type === 'standard' ? '' : ' flex-start';
$image		= $quote['image'];
$text		= $quote['text'];
$name		= $quote['name'];
$position	= $quote['position'];
?>

<div class="quote__wrapper swiper-slide<?php echo $type ?>">
	<?php
	if( $image )
		echo '<div class="quote__bg">',
			wp_get_attachment_image( $image, 'full@2x', false, ['loading' => 'lazy'] ),
		'</div>';

	if( $text ){
		?>
		<blockquote>
			<div class="quote__mark">
				<?php
					echo wp_get_attachment_image( $ico, 'full' )
				?>
			</div>
			<p><?php echo esc_html( $text ) ?></p>

			<?php
			if( $name ) echo '<div class="quote__name">', esc_html( $name ), '</div>';

			if( $position ) echo '<div class="quote__job">', $position, '</div>';
			?>
		</blockquote>
		<?php
	}
	?>
</div>
