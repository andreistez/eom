<?php

/**
 * Single Person content.
 *
 * @package    WordPress
 * @subpackage eom
 */

// If this is NOT single Person page - do nothing.
if( ! is_singular( 'person' ) ) return;

$person_id = get_the_ID();
$position = get_field( 'position' );
$short_desc = get_field( 'short_desc' );
$social_links = get_field( 'social_links' );
?>

<article class="person-single post-<?php echo esc_attr( $person_id ) ?>">
	<div class="container">
		<div class="person-single-content">
			<div class="person-single-top">
				<?php
				if( has_post_thumbnail() ){
					?>
					<div class="person-single-image">
						<?php echo get_the_post_thumbnail( $person_id, 'large' ) ?>
					</div>
					<?php
				}
				?>

				<div class="person-single-info">
					<h1 class="h1"><?php the_title() ?></h1>

					<?php
					if( $position ) echo '<div class="person-position">', $position, '</div>';

					get_template_part( 'components/person-socials', null, ['links' => $social_links] );
					?>
				</div>
			</div>

			<div class="person-single-content-inner">
				<div class="person-single-content-body">
					<?php if( $short_desc ) echo '<div class="person-short">', $short_desc, '</div>' ?>

					<div class="person-paragraphs">
						<?php the_content() ?>
					</div>

					<div class="person-bottom">
						<a href="<?php echo home_url( '/#latest-1' ) ?>" class="back">
							← <?php _e( 'Back', 'eom' ) ?>
						</a>

						<?php get_template_part( 'components/person-socials', null, ['links' => $social_links] ) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</article><!-- .person-single -->

