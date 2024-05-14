<?php

/**
 * Global Text - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Global Text
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'global_text', THEME_URI . '/static/css/global_text/global_text.min.css', [], THEME_VERSION );

$section_id = get_sub_field( 'section_id' ) ?? '';

if( ! $text = get_sub_field( 'text' ) ) return;
?>

<section id="<?php echo esc_attr( $section_id ); ?>" class="global__text">
	<div class="container">
		<div class="global__text_wrapper">
			<?php echo $text ?>
		</div>
	</div>
</section>

