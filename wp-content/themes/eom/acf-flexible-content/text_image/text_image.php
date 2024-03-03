<?php

/**
 * Image & Text - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Image & Text
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'text_image', THEME_URI . '/static/css/text_image/text_image.min.css', [], THEME_VERSION );

$type			= get_sub_field( 'type' ) ?: '';
$type			= $type ? ' ' . esc_attr( $type ) : '';
$image			= get_sub_field( 'image' );
$bg_color		= get_sub_field( 'bg_color' );
$bg				= $bg_color ? ' style="background-color:' . esc_attr( $bg_color ) . '"' : '';
$text_blocks	= get_sub_field( 'text_blocks' );
?>

<!-- <section class="text__image<?php echo $type ?>">
	<div class="container">
        <div class="text__image_wrapper">
            <div class="text__image_info"<?php echo $bg ?>>
                <?php
                if( ! empty( $text_blocks ) ){
                    ?>
                    <div class="image__text_inner">
                        <?php
                        foreach( $text_blocks as $block )
                            get_template_part( 'acf-flexible-content/image_text/text-block', null, ['block' => $block] );
                        ?>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php
            if( $image )
                echo '<div class="text__image_item">',
                    wp_get_attachment_image( $image, 'image-text@2x', null, ['loading' => 'lazy'] ),
                '</div>';
            ?>
        </div>
	</div>
</section> -->

