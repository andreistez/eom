<?php

/**
 * Index page default template.
 *
 * @package WordPress
 * @subpackage eom
 */

get_header();

$posts_page_id	= get_option( 'page_for_posts', true );
$term_id		= get_queried_object()->term_id ?? 0;
?>

<main class="main">
	<section class="blog-posts">
		<div class="container">
			<div class="blog-cards">
				<?php
				if( have_posts() ){
					while( have_posts() ){
						the_post();
						get_template_part( 'components/cards/post', null, ['id' => get_the_ID(), 'type' => 'thumb'] );
					}
				}
				?>
			</div>
            <button class="more">Load more</button>
            <div class="resources"> <!-- On main page removed if viewport > 768px -->
                <div class="resources__wrapper">
                    <h2 class="h2 violet">
                        Other Resources
                    </h2>
                    <div class="resources__items">
                        <div class="resources__item">
                            <div class="resources__item_inner">
                                <div class="resources__img">
                                    <img src="<?php echo THEME_URI ?>/static/img/res1.png" alt="">
                                </div>
                                <a href="#" class="resources__link dark flex-sb">
                                    Oxford Book
                                    <span>→</span>
                                </a>
                            </div>
                        </div>
                        <div class="resources__item">
                            <div class="resources__item_inner">
                                <div class="resources__img">
                                    <img src="<?php echo THEME_URI ?>/static/img/res2.png" alt="">
                                </div>
                                <a href="#" class="resources__link dark flex-sb">
                                    Oxford Forum
                                    <span>→</span>
                                </a>
                            </div>
                        </div>
                        <div class="resources__item">
                            <div class="resources__item_inner">
                                <div class="resources__img">
                                    <img src="<?php echo THEME_URI ?>/static/img/res3.png" alt="">
                                </div>
                                <a href="#" class="resources__link dark flex-sb">
                                    Knowledge Archive
                                    <span>→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</section>
</main>

<?php
get_footer();

