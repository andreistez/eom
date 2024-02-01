<?php

/**
 * Page default template.
 *
 * @package WordPress
 * @subpackage eom
 */

get_header();

// Hero styles and scripts.
wp_enqueue_style( 'hero', THEME_URI . '/static/css/hero/hero.min.css', [], THEME_VERSION );
// Global text styles and scripts.
wp_enqueue_style( 'global_text', THEME_URI . '/static/css/global_text/global_text.min.css', [], THEME_VERSION );
// Image_text styles and scripts.
wp_enqueue_style( 'image_text', THEME_URI . '/static/css/image_text/image_text.min.css', [], THEME_VERSION );
?>

<main class="main">
	<?php
	while( have_posts() ){
		the_post();
		the_content();
	}
	?>

    <section class="hero">
        <div class="container">
            <div class="hero__wrapper">
                <h1 class="h1">
                    Working Together for the Common Good
                </h1>
                <video src="<?php echo THEME_URI ?>/src/video/bg.mp4" autoplay muted playsinline loop>
                        <source src="<?php echo THEME_URI ?>/src/video/bg.webm" type="video/webm">
                </video>
            </div>
        </div>
    </section>

    <section class="global__text">
        <div class="container">
            <div class="global__text_wrapper">
                <p>
                    A partnership of two non-profits and two for-profits, the Economics of Mutuality Alliance works across the globe to advance stakeholder capitalism through the Economics of Mutuality operating model.
                </p>
            </div>
        </div>
    </section>

    <section class="image__text terracota">
        <div class="container">
            <div class="image__text_wrapper">
                <div class="image__text_left">
                    <img src="<?php echo THEME_URI ?>/static/img/text-img.png" alt="">
                </div>
                <div class="image__text_right">
                    <div class="image__text_inner">
                        <div class="subtitle white">
                            OUR APPROACH
                        </div>
                        <div class="image__text_info">
                            <div class="image__text_heading">
                                <h2 class="h2">
                                    A better way of seeing and doing business
                                </h2>
                            </div>
                            <div class="image__text_paragraphs">
                                <p>
                                    The Economics of Mutuality is a proven operating model that drives positive societal impact and superior business performance.
                                </p>
                                <p>
                                    Powered by digital tools, it equips companies to create enduring mutual value for the benefit of multiple stakeholders by addressing complex challenges in society.
                                </p>
                                <p>
                                    Practical and robust, it embeds purpose-driven strategies, metrics, and workflows into day-to-day business operations.
                                </p>
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

