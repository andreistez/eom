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

$title = get_sub_field( 'title' );
$desc = get_sub_field( 'desc' );
$section_id = get_sub_field( 'section_id' ) ?? '';
$form_content_type = get_sub_field( 'select_forms' );
$iframe_url = get_sub_field( 'iframe_discuss' );
$form_shortcode = get_sub_field( 'form_discuss' ) ?: '';

if ( ! $title && ! $desc ) return;

?>

<section id="<?php echo esc_attr( $section_id ); ?>" class="discuss">
	<div class="container">
		<div class="discuss__wrapper">
			<div class="discuss__heading">
				<?php
				if ( $title ) {
					echo '<h2 class="h2 violet">', esc_html( $title ), '</h2>';
				}
				if ( $desc ) {
					echo '<p>', esc_html( $desc ), '</p>';
				}
				?>
			</div>
			<?php
			if ( $form_content_type === 'forms' && $form_shortcode ) {
				echo do_shortcode( '[contact-form-7 id="' . esc_attr( $form_shortcode ) . '" title="Discuss"]' );
			} elseif ( $form_content_type === 'iframes' && $iframe_url ) {
				echo '<iframe src="' . esc_url( $iframe_url ) . '" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>';
			}
			?>
		</div>
	</div>
</section>
