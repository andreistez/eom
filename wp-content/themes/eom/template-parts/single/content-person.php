<?php

/**
 * Single Person content.
 *
 * @package WordPress
 * @subpackage eom
 */

// If this is NOT single Person page - do nothing.
if( ! is_singular( 'person' ) ) return;

$person_id		= get_the_ID();
$position		= get_field( 'position' );
$short_desc		= get_field( 'short_desc' );
$social_links	= get_field( 'social_links' );
?>

<article class="person-single post-<?php echo esc_attr( $person_id ) ?>">
	<div class="container">
		<div class="person-single-content">
            <div class="person-single-image">
                <?php
                if( has_post_thumbnail() )
                    echo get_the_post_thumbnail( $person_id, 'large' );
                ?>
            </div>

			<?php
			if( $position ) echo '<div class="person-position">', $position, '</div>';

			if( $short_desc ) echo '<div class="person-short">', $short_desc, '</div>';

			if( ! empty( $social_links ) ){
				echo '<div class="person-links">';

				foreach( $social_links as $link ){
					$url	= $link['link']['url'];
					$title	= $link['link']['title'];
					$target	= $link['link']['target'] ? ' target="_blank"' : '';
					?>
					<a href="<?php echo esc_url( $url ) ?>"<?php echo $target ?>>
						<?php echo esc_html( $title ) ?>
					</a>
					<?php
				}

				echo '</div>';
			}
			?>
            <div class="person-single-content-inner">
                <h1 class="h1"><?php the_title() ?></h1>

                <div class="person-single-content-body">
					<?php the_content() ?>
				</div>
            </div>
		</div>
	</div>
</article><!-- .person-single -->

