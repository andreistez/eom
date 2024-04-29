<?php

/**
 * Template name: Loneliness
 *
 * @package    WordPress
 * @subpackage eom
 */

get_header();

wp_enqueue_style( 'hero', THEME_URI . '/static/css/hero/hero.min.css', [], THEME_VERSION );
wp_enqueue_style( 'global_text', THEME_URI . '/static/css/global_text/global_text.min.css', [], THEME_VERSION );
wp_enqueue_style( 'text_image', THEME_URI . '/static/css/text_image/text_image.min.css', [], THEME_VERSION );
wp_enqueue_script( 'text_image', THEME_URI .
                                 '/static/js/text_image/text_image.min.js', [ 'jquery' ], THEME_VERSION, true );
wp_enqueue_style( 'image_text', THEME_URI . '/static/css/image_text/image_text.min.css', [], THEME_VERSION );
wp_enqueue_script( 'image-text', THEME_URI .
                                 '/static/js/image_text/image_text.min.js', [ 'jquery' ], THEME_VERSION, true );
wp_enqueue_style( 'blocks', THEME_URI . '/static/css/blocks/blocks.min.css', [], THEME_VERSION );
wp_enqueue_style( 'main-video', THEME_URI . '/static/css/main_video/main_video.min.css', [], THEME_VERSION );
wp_enqueue_script( 'main-video', THEME_URI .
                                 '/static/js/main_video/main_video.min.js', [ 'jquery' ], THEME_VERSION, true );
wp_enqueue_style( 'discuss', THEME_URI . '/static/css/discuss/discuss.min.css', [], THEME_VERSION );

$form = get_field( 'form' );
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
		<!-- <section
			class="hero"
			id="hero-1"
		>
			<div class="container">
				<div class="hero__wrapper">
					<div class="hero-subtitle">
						BUSINESS vs.
					</div>
					<h1
						class="h1"
						style="color: #eb5347"
					>LONELINESS</h1>
					<video
						autoplay=""
						muted=""
						playsinline=""
						loop=""
					>
						<source
							src="https://eom.org/wp-content/uploads/2024/04/BUSINESS-vs.-LONELINESS-header-video-online-video-cutter.com_.mp4"
							type="video/mp4"
						>
					</video>
				</div>
			</div>
		</section>
		<section class="global__text">
			<div class="container">
				<div class="global__text_wrapper">
					<p>
						Loneliness is not an individual's problem. It's society's problem. So business has a critical
						role to play in tackling it. That's why we've created this BUSINESS vs. LONELINESS change
						platform. Bringing together stakeholders from the private, public, and non-profit sectors, it's
						creating space to drive systemic change... together. </p>
				</div>
			</div>
		</section>
		<section class="text__image type-1">
			<div class="container">
				<div class="text__image_wrapper">
					<div class="text__image_info">
						<div class="image__text_heading">
							<h2>Innovate With Impact</h2>
						</div>
						<div class="image__text_content">
							<p>
								Discover fertile ground for positive societal impact and business growth-the space where
								your business can profitably address the loneliness problem by leveraging your unique
								capabilities and sector expertise. </p>
						</div>
					</div>
					<div class="text__image_item">
						<img
							src="<?php echo THEME_URI ?>/static/img/img.svg"
							alt=""
						>
					</div>
				</div>
		</section>
		<section class="image__text column">
			<div class="container">
				<div class="image__text_wrapper">
					<div class="image__text_left">
						<img
							src="<?php echo THEME_URI ?>/static/img/pathway.jpeg"
							alt=""
						>
					</div>
					<div class="image__text_right">
						<div class="image__text_inner">
							<div class="image__text_info column">
								<div class="image__text_heading">
									<p>BUSINESS vs. LONELINESS</p>
									<h2>Pathways to Action Report</h2>
								</div>
								<div class="image__text_paragraphs">
									<p><em>How Your Business Can Help Tackle the Loneliness Problem by Creating Mutual
											Value</em></p>
									<p>
										Drawing on inspiring case studies, original research by Mutual Value Labs, and
										cutting-edge academic work, this report offers organizations fresh insights and
										practical approaches to drive systemic change through innovative business
										activities. </p>
									<p>
										It covers three key topics, engaging both sector and business function
										lenses: </p>
									<ol>
										<li><i>The Problem: Capitalism’s Collateral Damage</i></li>
										<li><i>The Opportunity: Mutual Value Creation</i></li>
										<li><i>Your Pathway to Action: From Insight to Impact</i></li>
									</ol>
									<div class="button-wrapper end">
										<button class="button bg dark call-signup">
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
								<img
									src="<?php echo THEME_URI ?>/static/img/1.jpg"
									alt=""
								>
							</div>
							<div class="block-info">
								<h5>
									How Can Business <br> Tackle Loneliness? <br> <i>An Introduction.</i>
								</h5>
								<div class="block-date">
									<p>
										<b>Tuesday 25 June 2024</b> <br> 9am EDT, 2pm BST, 3pm CEST, 9pm SGT </p>
								</div>
								<div class="block-text">
									<p>
										<i>Free one-hour interactive Zoom webinar with leading experts</i>
									</p>
								</div>
								<div class="button-wrapper">
									<button class="button bg dark call-signup">
										Sign Up
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="block">
						<div class="block-inner">
							<div class="block-img">
								<img
									src="<?php echo THEME_URI ?>/static/img/2.jpg"
									alt=""
								>
							</div>
							<div class="block-info">
								<h5>
									How Can Business <br> Tackle Loneliness? <br> <i>An Introduction.</i>
								</h5>
								<div class="block-date">
									<p>
										<b>Tuesday 25 June 2024</b> <br> 9am EDT, 2pm BST, 3pm CEST, 9pm SGT </p>
								</div>
								<div class="block-text">
									<p>
										<i>Free one-hour interactive Zoom webinar with leading experts</i>
									</p>
								</div>
								<div class="button-wrapper">
									<button class="button bg dark call-signup">
										Sign Up
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="block">
						<div class="block-inner">
							<div class="block-img">
								<img
									src="<?php echo THEME_URI ?>/static/img/3.jpg"
									alt=""
								>
							</div>
							<div class="block-info">
								<h5>
									How Can Business <br> Tackle Loneliness? <br> <i>An Introduction.</i>
								</h5>
								<div class="block-date">
									<p>
										<b>Tuesday 25 June 2024</b> <br> 9am EDT, 2pm BST, 3pm CEST, 9pm SGT </p>
								</div>
								<div class="block-text">
									<p>
										<i>Free one-hour interactive Zoom webinar with leading experts</i>
									</p>
								</div>
								<div class="button-wrapper">
									<button class="button bg dark call-signup">
										Sign Up
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="block">
						<div class="block-inner">
							<div class="block-img">
								<img
									src="<?php echo THEME_URI ?>/static/img/4.jpg"
									alt=""
								>
							</div>
							<div class="block-info">
								<h5>
									How Can Business <br> Tackle Loneliness? <br> <i>An Introduction.</i>
								</h5>
								<div class="block-date">
									<p>
										<b>Tuesday 25 June 2024</b> <br> 9am EDT, 2pm BST, 3pm CEST, 9pm SGT </p>
								</div>
								<div class="block-text">
									<p>
										<i>Free one-hour interactive Zoom webinar with leading experts</i>
									</p>
								</div>
								<div class="button-wrapper">
									<button class="button bg dark call-signup">
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
					<div
						class="embededVideo"
						data-id-vimeo="https://player.vimeo.com/video/936630816?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
					>
						<img
							src="<?php echo THEME_URI ?>/static/img/vid1.jpg"
							alt=""
						>
						<div class="video__desc">
							<p>
								<b>How Companies Can Take Action</b> <br> Insights From Professor Pamela Qualter </p>
						</div>
					</div>
					<div class="play"></div>
				</div>
			</div>
		</section>
		<section class="image__text column">
			<div class="container">
				<div class="image__text_wrapper">
					<div class="image__text_left">
						<img
							src="<?php echo THEME_URI ?>/static/img/it2.jpg"
							alt=""
						>
					</div>
					<div class="image__text_right">
						<div class="image__text_inner">
							<div class="image__text_info column">
								<div class="image__text_heading">
									<p>BUSINESS vs. LONELINESS</p>
									<h2>Manchester Change Forum</h2>
								</div>
								<div class="image__text_paragraphs">
									<p>
										<b>February 2025</b><br> Manchester, UK </p>
									<p>
										Free in-person changemaker conference with virtual options. Bringing together
										stakeholders from the private, public, and non-profit sectors to explore how
										business can tackle the problem of loneliness by creating mutual value. </p>
									<p>
										With presentations from leading experts, practical case studies, interactive
										sessions, and 'hackathon' opportunities. More details to follow. </p>
									<div class="button-wrapper start">
										<button class="button bg dark call-signup">
											Register Your Interest
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="text__image type-2">
			<div class="container">
				<div class="text__image_wrapper">
					<div class="text__image_info">
						<div class="image__text_heading">
							<h2>Driving Systemic Change, Together</h2>
						</div>
						<div class="image__text_content">
							<p>
								Loneliness is a so-called wicked problem that can't be solved by one industry alone.
								Cross-sector actors must work together to go beyond typical 'solutions' that merely
								treat the symptoms of the issue without addressing the root causes. </p>
							<p>
								With its four partners working across the whole economic system, the Economics of
								Mutuality Alliance is uniquely positioned to help diverse stakeholders find good
								solutions to systemic problems- profitable solutions that are good for business and good
								for society. </p>
							<a
								href="#"
								class="button bg white"
							>Learn more</a>
						</div>
					</div>
					<div class="text__image_item">
						<img
							src="<?php echo THEME_URI ?>/static/img/ti2.svg"
							alt=""
						>
					</div>
				</div>
		</section>
		<section class="discuss">
			<div class="container">
				<div class="discuss__wrapper">
					<div class="discuss__heading">
						<h2 class="h2 terracota">
							Let's Discuss </h2>

						<p>
							If you’d like to explore how the Economics of Mutuality could drive transformation in your
							context, just reach out. We'd be delighted to start a conversation. </p>
					</div>

					<?php echo do_shortcode( '[contact-form-7 id="076c6e5" title="Discuss"]' ) ?>
				</div>
			</div>
		</section>
		<section class="main__video">
			<div class="container">
				<div class="main__video_wrapper">
					<div
						class="embededVideo"
						data-id-vimeo="https://player.vimeo.com/video/936630683?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
					>
						<img
							src="<?php echo THEME_URI ?>/static/img/vid2.jpg"
							alt=""
						>
						<div class="video__desc">
							<p><b>Tackling Loneliness in the Healthcare Sector</b> <br> A Converstion With Professor Pamela Qualter and Pascal Riederer</p>
						</div>
					</div>
					<div class="play"></div>
				</div>
			</div>
		</section>
		<section class="image__text reverse column">
			<div class="container">
				<div class="image__text_wrapper">
					<div class="image__text_left">
						<img
							src="<?php echo THEME_URI ?>/static/img/it3.jpg"
							alt=""
						>
					</div>
					<div class="image__text_right">
						<div class="image__text_inner">
							<div class="image__text_info column">
								<div class="image__text_heading">
									<h2>Be Part of the Solution</h2>
								</div>
								<div class="image__text_paragraphs">
									<p>
										The impact of social isolation on mortality rates rivals that of well-known risk
										factors such as smoking and obesity. In workplaces, lonely employees take more
										sick days, display reduced commitment, and exhibit weaker performance. </p>
									<p>
										Dysfunctional business models have contributed to this problem. But better
										business practices can help solve it. If you'd like to be part of the solution,
										sign up to our BUSINESS vs. LONELINESS mailing list to hear about upcoming
										events, thought leadership pieces, and action initiatives. </p>
									<div class="button-wrapper end">
										<button class="button bg dark call-signup">
											Sign Up
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
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
if( $form ){
	?>
	<div class="modal__wrapper signup-modal" id="modal-lock-1">
		<div class="modal">
			<div class="modal__top">
				<div class="modal__title">
					<?php _e( 'Sign Up', 'eom' ) ?>
				</div>
				<button class="close__button">
					<span></span>
				</button>
			</div>

			<?php echo do_shortcode( $form ) ?>
		</div>
	</div>
	<?php
}

get_footer();

