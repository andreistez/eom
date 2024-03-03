<?php

/**
 * Template name: ACF Flexible Content
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'text_image', THEME_URI . '/static/css/text_image/text_image.min.css', [], THEME_VERSION );
wp_enqueue_script( 'text_image', THEME_URI . '/static/js/text_image/text_image.min.js', ['jquery'], THEME_VERSION, true );

wp_enqueue_style( 'text_rows', THEME_URI . '/static/css/text_rows/text_rows.min.css', [], THEME_VERSION );
wp_enqueue_script( 'text_rows', THEME_URI . '/static/js/text_rows/text_rows.min.js', ['jquery'], THEME_VERSION, true );

get_header();
?>

<main class="main">
<section class="text__image">
        <div class="container">
            <div class="text__image_wrapper">
                <div class="text__image_info">
                    <div class="image__text_heading">
                        <p>
                            xx
                        </p>
                        <h2 class="h2">
                            Addressing Wicked Problems
                        </h2>
                    </div>
                    <p>
                        Many of the issues we’re facing in society today are so-called ‘wicked’ problems. These complex, systemic issues can’t be solved by one sector alone. They need stakeholders to come together from the public, private, and non-profit spheres. <br>
                        The Economics of Mutuality Alliance is uniquely positioned to orchestrate cross-sector actors to find good solutions to seemingly intractable problems... Profitable solutions that are good for business and good for society.
                    </p>
                </div>
                <div class="text__image_item">
                    <img src="<?php echo THEME_URI ?>/static/img/wicked.svg" alt="">
                </div>
            </div>
        </div>
</section>
<section class="text__rows">
    <div class="container">
        <div class="text__rows_wrapper">
            <div class="image__text_heading">
                <p>
                    OUR APPROACH
                </p>
                <h2 class="h2">
                    Our role and value
                </h2>
            </div>
            <div class="text__rows_blocks">
                <div class="text__rows_block">
                    <p>
                        Investment houses and family offices are charged with a duty to preserve and build wealth. That’s why they value general partners who can deploy and amplify their funds with wisdom and acuity. But that’s only half the story for forward-looking funds managers.
                    </p>
                    <p>
                        In addition to receiving superior returns, they want to put their money to work to achieve long-term positive outcomes for people and for the planet. Because if they don’t solve problems profitably and focus on the future, they - and we - won’t have one.
                    </p>
                </div>
                <div class="text__rows_block">
                    <p>
                        And that’s where we come in. Mutual Value Investments identifies and realizes opportunities for sustainable growth, based on the principle of mutual value creation. We help turn societal problems into profitable opportunities.
                    </p>
                    <p>
                        We create enduring mutual value by identifying opportunities; raising dedicated equity from values-aligned investors; and operationalizing the Economics of Mutuality model to transform the business and improve performance across multiple capitals.
                    </p>
                </div>
            </div>
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
			get_template_part( "acf-flexible-content/{$slug}/{$slug}" );
		}
	}
	?>
</main>

<?php
get_footer();

