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

// global text styles.
wp_enqueue_style( 'global-text', THEME_URI . '/static/css/global_text/global_text.min.css', [], THEME_VERSION );

// image_text styles.
wp_enqueue_style( 'image-text', THEME_URI . '/static/css/image_text/image_text.min.css', [], THEME_VERSION );

// main_video styles and scripts.
wp_enqueue_style( 'main-video', THEME_URI . '/static/css/main_video/main_video.min.css', [], THEME_VERSION );
wp_enqueue_script( 'main-video', THEME_URI . '/static/js/main_video/main_video.min.js', ['jquery'], THEME_VERSION, true );

// dropdowns styles and scripts.
wp_enqueue_style( 'dropdowns', THEME_URI . '/static/css/dropdowns/dropdowns.min.css', [], THEME_VERSION );
wp_enqueue_script( 'dropdowns', THEME_URI . '/static/js/dropdowns/dropdowns.min.js', ['jquery'], THEME_VERSION, true );
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

	<section class="main__video">
		<div class="container">
			<div class="main__video_wrapper">
				<video src="<?php echo THEME_URI ?>/src/video/bg.mp4" playsinline poster="<?php echo THEME_URI ?>/static/img/main-video-bg.png" type="video/webm"">
					<source src="<?php echo THEME_URI ?>/src/video/bg.webm" type="video/webm">
				</video>
				<div class="play">
					<img src="<?php echo THEME_URI ?>/static/img/play.png" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="dropdowns">
		<div class="container">
			<div class="dropdowns__top">
				<div class="h2__wrapper grass">
					<div class="subtitle">
						OUR APPROACH
					</div>
					<h2 class="h2">
						How It Works
					</h2>
				</div>
				<div class="dropdowns__text">
					<p>
						With support from our consultants, you can implement the Economics of Mutuality operating model in your company, applying one or more of its four domains to deliver optimal results.
					</p>
				</div>
			</div>
			<div class="dropdowns__circle_wrapper">
				<div class="dropdowns__circle">
					<div class="circle__lines"></div>
					<div class="circle__top">
						<div class="circle__top_left" data-id="0">
							<img class="top-left" src="<?php echo THEME_URI ?>/static/img/top-left.svg" alt="">
						</div>
						<div class="circle__top_right" data-id="1">
							<img class="top-right" src="<?php echo THEME_URI ?>/static/img/top-right.svg" alt="">
						</div>
					</div>
					<div class="circle__bottom">
						<div class="circle__bottom_left" data-id="3">
							<img class="bot-left" src="<?php echo THEME_URI ?>/static/img/bot-left.svg" alt="">
						</div>
						<div class="circle__bottom_right" data-id="2">
							<img class="bot-right" src="<?php echo THEME_URI ?>/static/img/bot-right.svg" alt="">
						</div>
					</div>
					<img class="svg-center" src="<?php echo THEME_URI ?>/static/img/center.svg" alt="">
				</div>
			</div>
		   <div class="dropdown__items">
				<div class="dropdown terracota" data-id="0">
					<div class="dropdown__title">
						<div class="dropdown__start">
							discover
						</div>
						<span></span>
					</div>
					<div class="dropdown__open">
						<div class="dropdown__inner">
							<div class="dropdown__text">
								Leverage our AI-enabled big data tools to uncover new strategic opportunities by pinpointing societal challenges to address that are relevant to your capabilities and industry. This fertile ground for growth and impact is where your company's interest meets collective interest.
							</div>
						</div>
					</div>
				</div>
				<div class="dropdown cerulean" data-id="1">
					<div class="dropdown__title">
						<div class="dropdown__start">
							analyze
						</div>
						<span></span>
					</div>
					<div class="dropdown__open">
						<div class="dropdown__inner">
							<p class="dropdown__text">
								Transform your company’s operations and culture by developing mutual practices and mindsets through our digitally enabled learning and engagement offerings.
							</p>
						</div>
					</div>
				</div>
				<div class="dropdown violet" data-id="2">
					<div class="dropdown__title">
						<div class="dropdown__start">
						innovate
						</div>
						<span></span>
					</div>
					<div class="dropdown__open">
						<div class="dropdown__inner">
							<div class="dropdown__text">
								Engage our AI-powered scanning and mapping tools to gain unparalleled insight into your ecosystem of stakeholders – expanding your visibility of value creation opportunities, as well as value erosion risks, such as breakdowns in trust or misuse of resources.
							</div>
						</div>
					</div>
				</div>
				<div class="dropdown grass" data-id="3">
					<div class="dropdown__title">
						<div class="dropdown__start">
							evolve
						</div>
						<span></span>
					</div>
					<div class="dropdown__open">
						<div class="dropdown__inner">
							<p class="dropdown__text">
								Partner with our expert consultants to design innovative business solutions that empower your company to create and capture value across your ecosystem. Use dashboards that deploy financial and non-financial management metrics to reveal the whole picture and provide leading indicators of performance and impact.
							</p>
						</div>
					</div>
				</div>
			</div>
	</section>

	<section class="image__text violet reverse column small-image">
		<div class="container">
			<div class="image__text_wrapper">
				<div class="image__text_left">
					<img src="<?php echo THEME_URI ?>/static/img/text-img2.png" alt="">
				</div>
				<div class="image__text_right">
					<div class="image__text_inner">
						<div class="subtitle white">
							OUR APPROACH
						</div>
						<div class="image__text_info">
							<div class="image__text_heading">
								<h2 class="h2">
									Superior Value Creation
								</h2>
							</div>
							<div class="image__text_paragraphs">
								<p>
									The Economics of Mutuality emerged from a multi-year business research initiative led by <a href="https://www.mars.com/news-and-stories/articles/economics-mutuality-foundation" target="_blank">Mars, Inc.</a> that engaged a range of cross-sector partners including <a href="https://www.sbs.ox.ac.uk/research/centres-and-initiatives/responsible-business/economics-mutuality-lab" target="_blank">Oxford University’s Saïd Business School</a>.
								</p>
								<p>
									If offers companies an enhanced form of value creation suited to the new realities of business in the 21st century: mutual value creation.
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

