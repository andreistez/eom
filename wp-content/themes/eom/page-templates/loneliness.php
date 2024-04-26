<?php

/**
 * Template name: Loneliness
 *
 * @package WordPress
 * @subpackage eom
 */

get_header();

wp_enqueue_style( 'hero', THEME_URI . '/static/css/hero/hero.min.css', [], THEME_VERSION );
wp_enqueue_style( 'global_text', THEME_URI . '/static/css/global_text/global_text.min.css', [], THEME_VERSION );
wp_enqueue_style( 'text_image', THEME_URI . '/static/css/text_image/text_image.min.css', [], THEME_VERSION );
wp_enqueue_script( 'text_image', THEME_URI . '/static/js/text_image/text_image.min.js', ['jquery'], THEME_VERSION, true );
wp_enqueue_style( 'image_text', THEME_URI . '/static/css/image_text/image_text.min.css', [], THEME_VERSION );
wp_enqueue_script( 'image-text', THEME_URI . '/static/js/image_text/image_text.min.js', ['jquery'], THEME_VERSION, true );
wp_enqueue_style( 'blocks', THEME_URI . '/static/css/blocks/blocks.min.css', [], THEME_VERSION );
wp_enqueue_style( 'main-video', THEME_URI . '/static/css/main_video/main_video.min.css', [], THEME_VERSION );
wp_enqueue_script( 'main-video', THEME_URI . '/static/js/main_video/main_video.min.js', ['jquery'], THEME_VERSION, true );
?>

<main class="main">
	<?php
	/**
	 * 1. Please create ACF Flexible Content setting
	 * for pages with slug 'flexible_content'.
	 *
	 * 2. Then set names of sections PHP-files
	 * the same as ACF Flexible Content sections slugs.
	 *
	 * 3. Put all JavaScript and SCSS files for your section
	 * right inside its PHP-file directory.
	 *
	 * 4. Include these scripts & styles right inside your
	 * PHP-file code from theme_name/static/acf-flexible-content.
	 *
	 * @example
	 * 'hero_section' in ACF Flexible Content sections
	 * will use template from 'theme_name/acf-flexible-content/hero_section/hero_section.php'
	 */
	?>
	 <section class="hero" id="hero-1">
		<div class="container">
			<div class="hero__wrapper">
				<div class="hero-subtitle">
					BUSINESS vs.
				</div>
				<h1 class="h1" style="color: #eb5347">LONELINESS</h1>
				<video autoplay="" muted="" playsinline="" loop="">
					<source src="https://eom.org/wp-content/uploads/2024/04/BUSINESS-vs.-LONELINESS-header-video-online-video-cutter.com_.mp4" type="video/mp4">
				</video>
			</div>
		</div>
 	</section>
	 <section class="global__text">
		<div class="container">
			<div class="global__text_wrapper">
				<p>
					Loneliness is not an individual's problem. It's society's problem. So business has a critical role to play in tackling it. That's why we've created this BUSINESS vs. LONELINESS change platform. Bringing together stakeholders from the private, public, and non-profit sectors, it's creating space to drive systemic change... together.
				</p>
			</div>
		</div>
	</section>
	 <section class="text__image">
		<div class="container">
			<div class="text__image_wrapper">
				<div class="text__image_info">
						<div class="image__text_heading">
						<h2>Innovate With Impact</h2>
					</div>
					<div class="image__text_content">
						<p>
							Discover fertile ground for positive societal impact and business growth-the space where your business can profitably address the loneliness problem by leveraging your unique capabilities and sector expertise.
						</p>
					</div>
				</div>
				<div class="text__image_item">
					<img src="<?php echo THEME_URI ?>/static/img/img.svg" alt="">
				</div>
		</div>
	</section>
	<section class="image__text column">
		<div class="container">
			<div class="image__text_wrapper">
				<div class="image__text_left">
					<img src="<?php echo THEME_URI ?>/static/img/pathway.jpeg" alt="">
				</div>
				<div class="image__text_right">
						<div class="image__text_inner">
							<div class="image__text_info column">
								<div class="image__text_heading">
									<p>BUSINESS vs. LONELINESS</p>
									<h2>Pathways to Action Report</h2>
								</div>
								<div class="image__text_paragraphs">
									<p><em>How Your Business Can Help Tackle the Loneliness Problem by Creating Mutual Value</em></p>
									<p>
										Drawing on inspiring case studies, original research by Mutual Value Labs, and cutting-edge academic work, this report offers organizations fresh insights and practical approaches to drive systemic change through innovative business activities.
									</p>
									<p>
										It covers three key topics, engaging both sector and business function lenses:
									</p>
									<ol>
										<li><i>The Problem: Capitalism’s Collateral Damage</i></li>
										<li><i>The Opportunity: Mutual Value Creation</i></li>
										<li><i>Your Pathway to Action: From Insight to Impact</i></li>
									</ol>
									<div class="call-modal-wrapper">
										<button class="call-modal">
											Download PDF
										</button>
									</div>
								</div>
							</div>							
						</div>
				</div>
			</div>
		</div>
	</section>
	<section class="blocks">
		<div class="container">
			<div class="blocks-wrapper">
				<div class="blocks-heading">
					<p>BUSINESS vs. LONELINESS</p>
					<h2>Changemaker Webinar Series</h2>
				</div>
				<div class="block">
					<div class="block-inner">
						<div class="block-img">
							<img src="<?php echo THEME_URI ?>/static/img/1.jpg" alt="">
						</div>
						<div class="block-info">
							<h5>						
								How Can Business <br>
								Tackle Loneliness? <br>
								<i>An Introduction.</i>
							</h5>
							<div class="block-date">
								<p>
									<b>Tuesday 25 June 2024</b>  <br>
									9am EDT, 2pm BST, 3pm CEST, 9pm SGT
								</p>
							</div>
							<div class="block-text">
								<p>
									<i>Free one-hour interactive Zoom webinar with leading experts</i>
								</p>
							</div>
							<div class="button-wrapper">
								<button class="call-modal call-block-modal">
									Sign Up
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="block-inner">
						<div class="block-img">
							<img src="<?php echo THEME_URI ?>/static/img/2.jpg" alt="">
						</div>
						<div class="block-info">
							<h5>						
								How Can Business <br>
								Tackle Loneliness? <br>
								<i>An Introduction.</i>
							</h5>
							<div class="block-date">
								<p>
									<b>Tuesday 25 June 2024</b>  <br>
									9am EDT, 2pm BST, 3pm CEST, 9pm SGT
								</p>
							</div>
							<div class="block-text">
								<p>
									<i>Free one-hour interactive Zoom webinar with leading experts</i>
								</p>
							</div>
							<div class="button-wrapper">
								<button class="call-modal call-block-modal">
									Sign Up
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="block-inner">
						<div class="block-img">
							<img src="<?php echo THEME_URI ?>/static/img/3.jpg" alt="">
						</div>
						<div class="block-info">
							<h5>						
								How Can Business <br>
								Tackle Loneliness? <br>
								<i>An Introduction.</i>
							</h5>
							<div class="block-date">
								<p>
									<b>Tuesday 25 June 2024</b>  <br>
									9am EDT, 2pm BST, 3pm CEST, 9pm SGT
								</p>
							</div>
							<div class="block-text">
								<p>
									<i>Free one-hour interactive Zoom webinar with leading experts</i>
								</p>
							</div>
							<div class="button-wrapper">
								<button class="call-modal call-block-modal">
									Sign Up
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="block">
					<div class="block-inner">
						<div class="block-img">
							<img src="<?php echo THEME_URI ?>/static/img/4.jpg" alt="">
						</div>
						<div class="block-info">
							<h5>						
								How Can Business <br>
								Tackle Loneliness? <br>
								<i>An Introduction.</i>
							</h5>
							<div class="block-date">
								<p>
									<b>Tuesday 25 June 2024</b>  <br>
									9am EDT, 2pm BST, 3pm CEST, 9pm SGT
								</p>
							</div>
							<div class="block-text">
								<p>
									<i>Free one-hour interactive Zoom webinar with leading experts</i>
								</p>
							</div>
							<div class="button-wrapper">
								<button class="call-modal call-block-modal">
									Sign Up
								</button>
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
						<div class="embededVideo" data-id-vimeo="https://player.vimeo.com/video/936630816?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479">
							<img src="<?php echo THEME_URI ?>/static/img/vid1.jpg" alt="">
							<div class="video__desc">
								<p>
									<b>How Companies Can Take Action</b> <br>
									Insights From Professor Pamela Qualter
								</p>
							</div>
						</div>  
				<div class="play"></div>
		</div>
	</div>
</section>


	<?php
	if( have_rows( 'flexible_content' ) ){
		while( have_rows( 'flexible_content' ) ){
			the_row();
			$slug = get_row_layout();
			get_template_part( "acf-flexible-content/$slug/$slug" );
		}
	}
?>
</main>

<?php
get_footer();

