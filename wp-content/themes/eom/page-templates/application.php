<?php

/**
 * Template name: Application
 *
 * @package    WordPress
 * @subpackage eom
 */

 
get_header();

wp_enqueue_style( 'application_page', THEME_URI . '/static/css/pages/application.min.css', [], THEME_VERSION );
?>

	<main class="main">
			<section class="html-content">
				<div class="container">
					<div class="html-content-wrapper">
						<h1>Application</h1>
						<h3>Driving Impact Through Mutual Value Creation</h3>
						<p>
							<strong>
							2024 Economics of Mutuality Executive Education Live Virtual Program 
							with Oxford University’s Saïd Business School
							</strong>
						</p>
						<ul class="application-list">
							<li>
								May 2nd - June 20th 2024 (8 weeks)
							</li>
							<li>
								4 hours each week (2 hours live teaching with expert speakers, <br>
								1 hour Oxford-style tutor group, 1 hour self-paced learning)
							</li>
							<li>
								Fees: GBP £5,800 (significant group discounts available)
							</li>
						</ul>
						<p>
							[Note: You can also use this form to apply for the Autumn program taking place September 12th - October 31st 2024 that is suited to Asia-Pacific and European time zones. Just tick the appropriate box.]
						</p>
						<p>
							<i>
								Our Program Director will assess your application and respond promptly to let you know if you meet the program entry criteria. Places are limited, so apply early to avoid disappointment.
							</i> 
						</p>
						<p>
							<i>
								Although the program has no formal educational requirements, admission is a selective process based on your professional experience, organizational responsibilities, and motivations for applying. The following job types are most suited to the program:
							</i> 
						</p>
						<ul class="application-list italic">
							<li>Senior executive in charge of corporate transformation</li>
							<li>Functional leader (e.g., finance, strategy, innovation/business development, transformation, marketing)</li>
							<li>Business unit leader</li>
						</ul>
						<p>Application deadline: <span>12th April 2024</span></p>
					</div>
				</div>
			</section>
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
	</main>

<?php
get_footer();

