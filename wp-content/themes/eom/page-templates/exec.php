<?php

/**
 * Template name: Exec
 *
 * @package    WordPress
 * @subpackage eom
 */

get_header();

wp_enqueue_style( 'exec', THEME_URI . '/static/css/pages/exec.min.css', [], THEME_VERSION );
wp_enqueue_style( 'exec_items', THEME_URI . '/static/css/exec_items/exec_items.min.css', [], THEME_VERSION );
wp_enqueue_style( 'exec_logos', THEME_URI . '/static/css/exec_logos/exec_logos.min.css', [], THEME_VERSION );
wp_enqueue_style( 'find_out', THEME_URI . '/static/css/find_out/find_out.min.css', [], THEME_VERSION );
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
		if( have_rows( 'flexible_content' ) ){
			while( have_rows( 'flexible_content' ) ){
				the_row();
				$slug = get_row_layout();
				get_template_part( "acf-flexible-content/$slug/$slug" );
			}
		}
		?>

		<section class="exec-items">
			<div class="container">
				<div class="exec-items-wrapper">
					<div class="exec-item">
						<div class="exec-item-inner">
							<div class="exec-item-img">
								<img src="<?php echo THEME_URI ?>/static/img/calend.svg" alt="">
							</div>
							<div class="exec-item-title">
								8 Weeks
							</div>
							<p>
								2 hours live teaching, 1 hour in tutor groups, and 2 hours self-paced learning each week
							</p>
						</div>
					</div>
					<div class="exec-item">
						<div class="exec-item-inner">
							<div class="exec-item-img">
								<img src="<?php echo THEME_URI ?>/static/img/learn.svg" alt="">
							</div>
							<div class="exec-item-title">
								Virtual
							</div>
							<p>
								Rich blend of interactive and individual online learning – accessible from any location
							</p>
						</div>
					</div>
					<div class="exec-item">
						<div class="exec-item-inner">
							<div class="exec-item-img">
								<img src="<?php echo THEME_URI ?>/static/img/cert.svg" alt="">
							</div>
							<div class="exec-item-title">
								Accredited
							</div>
							<p>
								Official certificate issued by Oxford University’s Saïd Business School upon completion of the program
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="exec-logos">
			<div class="container">
				<div class="exec-logos-wrapper">
					<div class="exec-logos-info">
						<h2>Join a Community of Practise</h2>
						<p>
							As well as learning alongside other senior leaders during the program, you will gain access to a global network of more than 300 graduates. The logos below represent a selection of companies that have enrolled thier executives in previous cohorts.
						</p>
					</div>
					<div class="exec-logos-images">
						<div class="exec-logos-img">
							<img src="<?php echo THEME_URI ?>/static/img/logos1.png" alt="">
						</div>
						<div class="exec-logos-img">
							<img src="<?php echo THEME_URI ?>/static/img/logos2.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="find-out">
			<div class="container">
				<div class="find-out-items">
					<div class="find-out-form">
						<h2>Find Out More</h2>
					<?php echo do_shortcode( '[contact-form-7 id="63594d5" title="Exec-form"]' ) ?>
					</div>
					<div class="find-out-img">
						<img src="<?php echo THEME_URI ?>/static/img/exec-form.jpg" alt="">
					</div>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer();

