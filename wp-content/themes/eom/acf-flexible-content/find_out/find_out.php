<?php

/**
 * Find Out - ACF Flexible Content section layout.
 *
 * @see        Page with ACF Flexible Content template -> Flexible Content -> Find Out
 *
 * @package    WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'find_out', THEME_URI . '/static/css/find_out/find_out.min.css', [], THEME_VERSION );

$section_id        = get_sub_field( 'section_id' ) ?? '';
$title             = get_sub_field( 'title' ) ?: '';
$form_shortcode    = get_sub_field( 'form_shortcode' ) ?: '';
$image             = get_sub_field( 'image' ) ?: [];
$modal_content_type = get_sub_field( 'form_select' );
$iframe_url        = get_sub_field( 'iframe_url' );

?>

<section id="<?php echo esc_attr( $section_id ) ?>" class="find-out">
    <div class="container">
        <div class="find-out-items">
            <?php
            if( $title || $form_shortcode || ($modal_content_type === 'iframe' && $iframe_url) ){
                echo '<div class="find-out-form">';

                if( $title ) echo '<h2>', esc_html( $title ), '</h2>';

                if ($modal_content_type === 'form' && $form_shortcode) {
                    echo do_shortcode( $form_shortcode );
                } elseif ($modal_content_type === 'iframe' && $iframe_url) {
                    echo '<iframe src="' . esc_url( $iframe_url ) . '" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>';
                }

                echo '</div>';
            }

            if( $image ){
                echo '<div class="find-out-img">',
                wp_get_attachment_image( $image, 'image-text@2x' ),
                '</div>';
            }
            ?>
        </div>
    </div>
</section>
