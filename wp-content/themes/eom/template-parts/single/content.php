<?php

/**
 * Single post content.
 *
 * @package WordPress
 * @subpackage eom
 */

// If this is NOT single post page - do nothing.
if( ! is_singular( 'post' ) ) return;

$post_id	= get_the_ID();
$info		= get_field( 'info' );
$additional	= get_field( 'additional_info' );
?>

<article class="post-single post-<?php echo esc_attr( $post_id ) ?>">
	<div class="container">
		<div class="post-single-content">
			<?php
			if( has_post_thumbnail() )
				echo '<div class="post-single-image">',
					get_the_post_thumbnail( $post_id, 'large' ),
				'</div>';
			?>

            <div class="post-single-content-inner">
                <div class="post-single-estimate">
                    <div class="post-single-read">
                        <?php echo eom_get_reading_time( $post_id ), ' ', __( 'min read', 'eom' ) ?>
                    </div>
                    <div class="post-single-date">
						<?php echo get_the_date( 'M Y', $post_id ) ?>
                    </div>
                </div>

                <h1 class="h1"><?php the_title() ?></h1>

                <div class="post-single-info-wrapper">
                    <?php
					if( $info ){
						?>
						<div class="post-single-info">
							<div class="post-single-info-inner">
								<?php echo $info ?>
							</div>
						</div>
						<?php
					}

					if( $additional ){
						?>
						<div class="post-single-info">
							<div class="post-single-info-inner">
								<?php echo $additional ?>
							</div>
						</div>
						<?php
					}
					?>
                </div>

				<?php the_content() ?>
            </div>

            <?php get_template_part( 'template-parts/other-articles', null, ['exclude' => $post_id] ) ?>
		</div>
	</div>
</article><!-- .post-single -->

