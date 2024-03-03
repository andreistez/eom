<?php

/**
 * Image & Text - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Image & Text
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'text-rows', THEME_URI . '/static/css/text_rows/text_rows.min.css', [], THEME_VERSION );

$type			= get_sub_field( 'type' ) ?: '';
$type			= $type ? ' ' . esc_attr( $type ) : '';
$bg_color		= get_sub_field( 'bg_color' );
$bg				= $bg_color ? ' style="background-color:' . esc_attr( $bg_color ) . '"' : '';
$text_blocks	= get_sub_field( 'text_blocks' );
?>

<section class="text__rows<?php echo $type ?>">
	<div class="container">
        <div class="text__rows_wrapper">
            <div class="text__rows_inner"<?php echo $bg ?>>
                <?php
                if( ! empty( $text_blocks ) ){
                    ?>
                    <?php
                    foreach( $text_blocks as $block )
                        get_template_part( 'acf-flexible-content/image_text/text-block', null, ['block' => $block] );
                    ?>
                    <?php
                }
                ?>
            </div>
        </div>
	</div>
</section>

