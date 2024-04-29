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
$form	= get_sub_field( 'form' );

if( ! $title && ! $desc && ! $form ) return;
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

			<?php echo $form ? do_shortcode( '[contact-form-7 id="' . $form . '" title="Discuss"]' ) : '' ?>
		</div>
	</div>
</section>

