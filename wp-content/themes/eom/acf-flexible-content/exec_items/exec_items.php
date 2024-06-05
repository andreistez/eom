<?php

/**
 * Exec Items - ACF Flexible Content section layout.
 *
 * @see        Page with ACF Flexible Content template -> Flexible Content -> Exec Items
 *
 * @package    WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'exec_items', THEME_URI . '/static/css/exec_items/exec_items.min.css', [], THEME_VERSION );

$section_id = get_sub_field( 'section_id' ) ?? '';
$items      = get_sub_field( 'items' ) ?: [];

if( empty( $items ) ) return;
?>

<section id="<?php echo esc_attr( $section_id ) ?>" class="exec-items">
	<div class="container">
		<div class="exec-items-wrapper">
			<?php
			foreach( $items as $item ){
				$icon  = $item['icon'] ?? [];
				$title = $item['title'] ?? '';
				$text  = $item['text'] ?? '';

				if( empty( $icon ) && ! $title && ! $text ) continue;
				?>
				<div class="exec-item">
					<div class="exec-item-inner">
						<?php
						if( ! empty( $icon ) ){
							echo '<div class="exec-item-img">',
							wp_get_attachment_image( $icon, 'thumbnail', false, ['loading' => 'lazy'] ),
							'</div>';
						}

						if( $title ) echo '<div class="exec-item-title">', esc_html( $title ), '</div>';

						if( $text ) echo '<p>', esc_html( $text ), '</p>';
						?>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>

