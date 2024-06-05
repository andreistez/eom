<?php

/**
 * Experts - ACF Flexible Content section layout.
 *
 * @see        Page with ACF Flexible Content template -> Flexible Content -> Experts
 *
 * @package    WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'experts', THEME_URI . '/static/css/experts/experts.min.css', [], THEME_VERSION );

$section_id = get_sub_field( 'section_id' ) ?? '';
$title      = get_sub_field( 'title' ) ?: '';
$experts    = get_sub_field( 'experts' ) ?: [];
?>

<section id="<?php echo esc_attr( $section_id ) ?>" class="experts">
	<div class="container">
		<div class="experts-wrapper">
			<?php
			if( $title ) echo '<h2>', esc_html( $title ), '</h2>';

			if( ! empty( $experts ) ){
				echo '<div class="experts-items">';

				foreach( $experts as $expert ){
					$img = $expert['image'] ?? '';
					$name = $expert['name'] ?? '';
					$position = $expert['position'] ?? '';

					if( ! $img && ! $name && ! $position ) continue;
					?>
					<div class="expert-item">
						<div class="expert-inner">
							<?php
							if( $img ){
								echo '<div class="expert-img">',
								wp_get_attachment_image( $img, 'medium', false, ['loading' => 'lazy'] ),
								'</div>';
							}

							if( $name ) echo '<div class="expert-name">', esc_html( $name ), '</div>';

							if( $position ) echo '<p>', esc_html( $position ), '</p>';
							?>
						</div>
					</div>
					<?php
				}

				echo '</div>';
			}
			?>
		</div>
	</div>
</section>

