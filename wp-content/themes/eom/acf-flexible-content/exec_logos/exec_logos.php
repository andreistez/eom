<?php

/**
 * Exec Logos - ACF Flexible Content section layout.
 *
 * @see        Page with ACF Flexible Content template -> Flexible Content -> Exec Logos
 *
 * @package    WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'exec_logos', THEME_URI . '/static/css/exec_logos/exec_logos.min.css', [], THEME_VERSION );

$section_id = get_sub_field( 'section_id' ) ?? '';
$heading    = get_sub_field( 'heading' ) ?: '';
$logos      = get_sub_field( 'logos' ) ?: [];
?>

<section id="<?php echo esc_attr( $section_id ) ?>" class="exec-logos">
	<div class="container">
		<div class="exec-logos-wrapper">
			<?php
			if( $heading ) echo '<div class="exec-logos-info">', $heading, '</div>';
			
			if( ! empty( $logos ) ){
				echo '<div class="exec-logos-images">';

				foreach( $logos as $logo ){
					if( ! $img = $logo['image'] ?? null ) continue;

					echo '<div class="exec-logos-img">',
					wp_get_attachment_image( $img, 'full', false, ['loading' => 'lazy'] ),
					'</div>';
				}

				echo '</div>';	
			}
			?>
		</div>
	</div>
</section>

