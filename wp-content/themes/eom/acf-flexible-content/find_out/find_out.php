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
$form_shortcodes    = get_sub_field( 'form_shortcodes' ) ?: '';
$image             = get_sub_field( 'image' ) ?: [];
$forms_content_type = get_sub_field( 'forms_findout' );
$iframe_urls        = get_sub_field( 'iframe_urls' );

?>

<section id="<?php echo esc_attr( $section_id ) ?>" class="find-out">
    <div class="container">
        <div class="find-out-items">
            <?php
                echo '<div class="find-out-form">';

                if( $title ) echo '<h2>', esc_html( $title ), '</h2>';

                if ($forms_content_type === 'formF' && $form_shortcodes) {
                    echo do_shortcode( $form_shortcodes );
                } elseif ($forms_content_type === 'iframeF' && $iframe_urls) {
                    echo '<iframe src="' . esc_url( $iframe_urls ) . '" width="100%" height="500" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>';
                }
                echo '</div>';

            if( $image ){
                echo '<div class="find-out-img">',
                wp_get_attachment_image( $image, 'image-text@2x' ),
                '</div>';
            }
            ?>
        </div>
    </div>
</section>
