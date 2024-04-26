<?php

/**
 * Blocks - ACF Flexible Content section layout.
 *
 * @see        Page with ACF Flexible Content template -> Flexible Content -> Blocks
 *
 * @package    WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'blocks', THEME_URI . '/static/css/blocks/blocks.min.css', [], THEME_VERSION );

$subtitle = get_sub_field( 'subtitle' );
$title    = get_sub_field( 'title' );
$blocks   = get_sub_field( 'blocks' );
?>

<section class="blocks">
	<div class="container">
		<div class="blocks-wrapper">
			<?php
			if( $subtitle || $title ){
				echo '<div class="blocks-heading">';

				if( $subtitle ) echo '<p>', esc_html( $subtitle ), '</p>';

				if( $title ) echo '<h2>', $subtitle, '</h2>';

				echo '</div>';
			}
			?>

			<?php
			if( ! empty( $blocks ) ){
				foreach( $blocks as $block ) get_template_part( 'acf-flexible-content/blocks/block', null, [ 'block' => $block ] );
			}
			?>
		</div>
	</div>
</section>

