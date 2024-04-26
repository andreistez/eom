<?php

/**
 * Discuss - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Discuss
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'discuss', THEME_URI . '/static/css/discuss/discuss.min.css', [], THEME_VERSION );

$title	= get_sub_field( 'title' );
$desc	= get_sub_field( 'desc' );

if( ! $title && ! $desc ) return;
?>

<section class="discuss">
	<div class="container">
		<div class="discuss__wrapper">
			<div class="discuss__heading">
				<?php
				if( $title ) echo '<h2 class="h2 violet">', esc_html( $title ), '</h2>';

				if( $desc ) echo '<p>', esc_html( $desc ), '</p>';
				?>
			</div>

			<?php echo do_shortcode( '[contact-form-7 id="076c6e5" title="Discuss"]' ) ?>
		</div>
	</div>
</section>

