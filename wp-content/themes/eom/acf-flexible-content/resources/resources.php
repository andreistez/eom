<?php

/**
 * Resources - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Resources
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'resources', THEME_URI . '/static/css/resources/resources.min.css', [], THEME_VERSION );

$title			= get_sub_field( 'title' );
$title_color	= get_sub_field( 'title_color' ) ?: '#000';
$resources		= get_sub_field( 'resources' );
?>

<section class="resources">
	<div class="container">
		<div class="resources__wrapper">
			<?php
			if( $title ) echo '<h2 class="h2" style="color: ', esc_attr( $title_color ), '">', $title, '</h2>';

			if( ! empty( $resources ) ){
				echo '<div class="resources__items">';

				foreach( $resources as $res )
					get_template_part( 'acf-flexible-content/resources/resource', null, ['resource' => $res] );

				echo '</div>';
			}
			?>
		</div>
	</div>
</section>

