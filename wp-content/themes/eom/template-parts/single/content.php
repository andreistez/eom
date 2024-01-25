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
			<h1 class="h1"><?php the_title() ?></h1>
            <div class="post-single-image">
            <?php
			if( has_post_thumbnail() )
				echo get_the_post_thumbnail( $post_id, 'large' );
			?>
            </div>
            <div class="post-single-info-wrapper">
                <div class="post-single-info">
                <?php
                if( $info ){
                    ?>
                    <div class="post-single-info-inner">
                        <?php echo $info ?>
                    </div>
                    <?php
                }              
                ?>
                </div>
                <div class="post-single-additional-info">
                    <?php
                    if( $additional ){
                        ?>
                        <div class="post-single-info-inner">
                            <?php echo $additional ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="post-single-content-inner">
            <?php
            the_content();
            ?>
            </div>
		</div>
	</div>
</article><!-- .post-single -->

