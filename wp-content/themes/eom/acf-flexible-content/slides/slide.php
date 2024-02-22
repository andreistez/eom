<?php

/**
 * Slides - ACF Flexible Content section.
 * Single slide.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Slides
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $person_id = $args['id'] ?? null ) return;

$position = get_field( 'position', $person_id );
?>

<div class="swiper-slide">
    <div class="swiper-slide__wrapper">
        <?php
        if( has_post_thumbnail( $person_id ) )
            echo '<div class="swiper-slide__img">',
                get_the_post_thumbnail( $person_id, 'large', ['loading' => 'lazy'] ),
            '</div>';
        ?>

        <div class="swiper-slide__inner">
            <div class="swiper-slide__name">
                <?php echo get_the_title( $person_id ) ?>
            </div>

            <?php if( $position ) echo '<div class="swiper-slide__text">', $position, '</div>' ?>

            <a href="<?php echo get_the_permalink( $person_id ) ?>" class="link__arrow">
                <?php _e( 'View Profile', 'eom' ) ?> <span>→</span>
            </a>
        </div>
    </div>
</div>

