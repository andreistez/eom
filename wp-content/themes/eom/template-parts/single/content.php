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
            <div class="post-single-image">
                <?php
                if( has_post_thumbnail() )
                    echo get_the_post_thumbnail( $post_id, 'large' );
                ?>
            </div>
            <div class="post-single-content-inner">
                <div class="post-single-estimate">
                    <div class="post-single-read">
                        15 min read
                    </div>
                    <div class="post-single-date">
                        Oxford, September 2023
                    </div>
                </div>
                <h1 class="h1"><?php the_title() ?></h1>
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
                    <div class="post-single-info">
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
            <?php
            the_content();
            ?>
            </div>
            <div class="post-single-latest">
                <h2>Other Articles</h2>
                <div class="latest__inner">
                    <div class="latest__item">
                        <div class="latest__item_inner">
                            <div class="latest__case_wrapper">
                                <div class="latest__case">
                                    5 min read
                                </div>
                                <div class="latest__case">
                                    Feb 2024
                                </div>
                            </div>
                            <h5 class="h5">
                                Why I’m No Longer Calling Myself a Brand Purpose Consultant
                            </h5>
                            <p>
                                A Conversation With Francisca Larraín Marshall
                            </p>
                            <div class="link__arrow_wrapper">
                                <a class="link__arrow" href="#">
                                    Read on
                                    <span>
                                        →
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="latest__item">
                        <div class="latest__item_inner">
                            <div class="latest__case_wrapper">
                                <div class="latest__case">
                                    5 min read
                                </div>
                                <div class="latest__case">
                                    Feb 2024
                                </div>
                            </div>
                            <h5 class="h5">
                                Executive Education Program Americas and Europe
                            </h5>
                            <p>
                                Text here
                            </p>
                            <div class="link__arrow_wrapper">
                                <a class="link__arrow" href="#">
                                    Read on
                                    <span>
                                        →
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="latest__item">
                        <div class="latest__item_inner">
                            <div class="latest__case_wrapper">
                                <div class="latest__case">
                                    5 min read
                                </div>
                                <div class="latest__case">
                                    Feb 2024
                                </div>
                            </div>
                            <h5 class="h5">
                                Economics of Mutuality Foundation Norway Forum
                            </h5>
                            <p>
                                Text here
                            </p>
                            <div class="link__arrow_wrapper">
                                <a class="link__arrow" href="#">
                                    Read on
                                    <span>
                                        →
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="latest__item">
                        <div class="latest__item_inner">
                            <div class="latest__case_wrapper">
                                <div class="latest__case">
                                    5 min read
                                </div>
                                <div class="latest__case">
                                    Feb 2024
                                </div>
                            </div>
                            <h5 class="h5">
                                Economics of Mutuality Foundation Korea Forum
                            </h5>
                            <p>
                                Text here
                            </p>
                            <div class="link__arrow_wrapper">
                                <a class="link__arrow" href="#">
                                    Read on
                                    <span>
                                        →
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="link__arrow_wrapper center">
                    <a href="#" class="link__arrow">
                        Visit our Latest page for more News and Content
                        <span>→</span>
                    </a>
            </div>
            </div>
		</div>
	</div>
</article><!-- .post-single -->

