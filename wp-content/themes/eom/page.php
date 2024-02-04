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

// quote styles.
wp_enqueue_style( 'quote', THEME_URI . '/static/css/quote/quote.min.css', [], THEME_VERSION );

// perks styles.
wp_enqueue_style( 'perks', THEME_URI . '/static/css/perks/perks.min.css', [], THEME_VERSION );
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
            <div class="dropdowns__wrapper">
                <div class="h2__box grass">
                    <div class="h2__wrapper">
                        <div class="subtitle">
                            OUR APPROACH
                        </div>
                        <h2 class="h2">
                            How It Works
                        </h2>
                    </div>
                    <div class="h2__box_text">
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
                            <div class="dropdown__start white">
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
                            <div class="dropdown__start white">
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
                            <div class="dropdown__start white">
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
						<div class="dropdown__start white">
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
        </div>
	</section>

	<section class="image__text violet reverse column">
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

	<section class="quote">
		<div class="container">
			<div class="quote__wrapper">
				<div class="quote__bg">
					<img src="<?php echo THEME_URI ?>/static/img/quote.png" alt="">
				</div>
				<blockquote>
					<div class="quote__mark">
					<svg width="51" height="52" viewBox="0 0 51 52" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.2347 51.5725C10.2789 51.5725 8.36565 50.5968 6.4949 48.6453C4.70918 46.6089 3.26361 43.9787 2.15816 40.7544C1.05272 37.5302 0.5 34.1363 0.5 30.5727C0.5 25.7364 1.30782 21.2395 2.92347 17.082C4.62415 12.8396 6.62245 9.31844 8.91837 6.51847C11.2143 3.63366 13.2976 1.72459 15.1684 0.79126H15.2959L18.2296 3.84577V4.99121C16.1888 6.43362 14.1905 9.02147 12.2347 12.7548C10.2789 16.4032 9.30102 20.8577 9.30102 26.1182C9.30102 29.0879 9.72619 31.5061 10.5765 33.3727C11.5119 35.1545 12.8299 37.0212 14.5306 38.9726C15.6361 40.2454 16.4439 41.3484 16.9541 42.2817C17.5493 43.215 17.8469 44.2756 17.8469 45.4635C17.8469 47.415 17.3367 48.9422 16.3163 50.0453C15.2959 51.0634 13.9354 51.5725 12.2347 51.5725ZM44.5051 51.5725C42.5493 51.5725 40.6361 50.5968 38.7653 48.6453C36.9796 46.6089 35.534 43.9787 34.4286 40.7544C33.3231 37.5302 32.7704 34.1363 32.7704 30.5727C32.7704 25.7364 33.5782 21.2395 35.1939 17.082C36.8946 12.8396 38.8929 9.31844 41.1888 6.51847C43.4847 3.63366 45.568 1.72459 47.4388 0.79126H47.5663L50.5 3.84577V4.99121C48.4592 6.43362 46.4609 9.02147 44.5051 12.7548C42.5493 16.4032 41.5714 20.8577 41.5714 26.1182C41.5714 29.0879 41.9966 31.5061 42.8469 33.3727C43.7823 35.1545 45.1003 37.0212 46.801 38.9726C47.9065 40.2454 48.7143 41.3484 49.2245 42.2817C49.8197 43.215 50.1173 44.2756 50.1173 45.4635C50.1173 47.415 49.6071 48.9422 48.5867 50.0453C47.5663 51.0634 46.2058 51.5725 44.5051 51.5725Z" fill="white"/>
					</svg>
					</div>
					<p>
						Driven by the Economics of Mutuality model, Royal Canin has become the sector’s most valuable brand and the most successful Mars Inc. business, tallying 20 years of double-digit revenue growth.”
					</p>
					<div class="quote__name">
						Loïc Moutault
					</div>
					<div class="quote__job">
						Global President of Petcare, Mars, Inc.
					</div>
				</blockquote>
			</div>
		</div>
	</section>

    <section class="perks">
        <div class="container">
            <div class="perks__wrapper">
                <div class="h2__box cerulean">
                    <div class="h2__wrapper">
                        <div class="subtitle">
                            OUR APPROACH
                        </div>
                        <h2 class="h2">
                            Thriving Business
                        </h2>
                    </div>
                    <div class="h2__box_text">
                        <p>
                            An opportunity, not an obligation, the Economics of Mutuality engineers beneficial practices into the heart of your company, uncovering and realizing multiple opportunities and benefits.
                        </p>
                    </div>
                </div>
                <div class="perks__cards">
                    <div class="perks__card">
                        <div class="perks__card_img">
                            <img src="<?php echo THEME_URI ?>/static/img/perk1.png" alt="">
                        </div>
                        <div class="perks__card_inner">
                            <div class="perks__card_title blue">
                                strategic
                            </div>
                            <div class="perks__card_text blue">
                                Organizational alignment enables strategic transformation and innovation
                            </div>
                        </div>
                    </div>
                    <div class="perks__card">
                        <div class="perks__card_img">
                            <img src="<?php echo THEME_URI ?>/static/img/perk2.png" alt="">
                        </div>
                        <div class="perks__card_inner">
                            <div class="perks__card_title blue">
                                organisational
                            </div>
                            <div class="perks__card_text blue">
                                Motivated, engaged colleagues are more productive and more loyal
                            </div>
                        </div>
                    </div>
                    <div class="perks__card">
                        <div class="perks__card_img">
                            <img src="<?php echo THEME_URI ?>/static/img/perk3.png" alt="">
                        </div>
                        <div class="perks__card_inner">
                            <div class="perks__card_title blue">
                                reputational
                            </div>
                            <div class="perks__card_text blue">
                                Respected and trusted brands create preference and build intangible value
                            </div>
                        </div>
                    </div>
                    <div class="perks__card">
                        <div class="perks__card_img">
                            <img src="<?php echo THEME_URI ?>/static/img/perk4.png" alt="">
                        </div>
                        <div class="perks__card_inner">
                            <div class="perks__card_title blue">
                                financial
                            </div>
                            <div class="perks__card_text blue">
                                Efficiency savings, risk reduction and sustained growth enhances profitability
                            </div>
                        </div>
                    </div>
                    <div class="perks__card">
                        <div class="perks__card_img">
                            <img src="<?php echo THEME_URI ?>/static/img/perk5.png" alt="">
                        </div>
                        <div class="perks__card_inner">
                            <div class="perks__card_title blue">
                                social and environmental
                            </div>
                            <div class="perks__card_text blue">
                                Healthier, flourishing communities and positive environmental impact
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="image__text terracota column column-row">
		<div class="container">
			<div class="image__text_wrapper">
				<div class="image__text_left">
					<img src="<?php echo THEME_URI ?>/static/img/text-img-red.png" alt="">
				</div>
				<div class="image__text_right">
					<div class="image__text_inner">
						<div class="subtitle white">
							OUR APPROACH
						</div>
						<div class="image__text_info">
							<div class="image__text_heading">
								<h2 class="h2">
                                    Flourishing Society
								</h2>
							</div>
							<div class="image__text_paragraphs">
								<p>
                                    You no longer have to choose between building a thriving business and contributing to a flourishing society. The Economics of Mutuality is an engine of transformation that empowers you to do both.
								</p>
								<p>
                                    The truth is that creating value for your stakeholders and your shareholders doesn’t have to be mutually exclusive. It can be mutually beneficial.
								</p>
                                <p>
                                    Everybody wins when you address the problems of people, place, and planet... profitably.
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

