<?php

/**
 * Members - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Members
 *
 * @package WordPress
 * @subpackage eom
 */

wp_enqueue_style( 'members', THEME_URI . '/static/css/members/members.min.css', [], THEME_VERSION );
wp_enqueue_script( 'members', THEME_URI . '/static/js/members/members.min.js', ['jquery'], THEME_VERSION, true );

$subtitle		= get_sub_field( 'subtitle' );
$title			= get_sub_field( 'title' );
$title_color	= get_sub_field( 'title_color' );
$text			= get_sub_field( 'text' );
$main_logo_text	= get_sub_field( 'main_logo_text' );
$slogan			= get_sub_field( 'slogan' );
$members		= get_sub_field( 'members' );
$section_id = get_sub_field( 'section_id' ) ?? '';
?>

<section class="members" id="<?php echo esc_attr( $section_id ); ?>">
	<div class="container">
		<div class="members__wrapper">
			<?php
			get_template_part( 'components/h2-box', null, [
				'subtitle'	=> $subtitle,
				'title'		=> $title,
				'text'		=> $text,
				'color'		=> $title_color
			] );
			?>

			<div class="members__items">
				<?php
				if( $main_logo_text ){
					?>
					<div class="members__logo">
						<div class="logo big">
							<div class="logo__inner">
								<?php get_template_part( 'components/logo/gears-and-text', null, ['text' => $main_logo_text] ) ?>
							</div>
						</div>
						<div class="members__logo_lines">
							<span class="horizontal__line"></span>
							<span class="vertical__line"></span>
						</div>
					</div>
					<?php
				}

				if( ! empty( $members ) ){
					?>
					<div class="members__items_wrapper">
						<?php
						foreach( $members as $member )
							get_template_part( 'acf-flexible-content/members/member', null, ['member' => $member] );
						?>
					</div>
					<?php
				}
				?>
			</div>

			<?php
			if( $slogan ){
				?>
				<div class="members__slogan">
					<div class="members__slogan_left">
						<div class="mobile__arrow">
							<img src="<?php echo THEME_URI ?>/static/img/mobile-arr.svg" alt="">
						</div>
						<div class="tab__arrow">
							<img src="<?php echo THEME_URI ?>/static/img/tab-arr.svg" alt="">
						</div>
						<div class="desktop__arrow">
							<img src="<?php echo THEME_URI ?>/static/img/desktop-arr.svg" alt="">
						</div>
					</div>
					<div class="members__slogan_text">
						<?php echo esc_html( $slogan ) ?>
					</div>
					<div class="members__slogan_right">
						<div class="mobile__arrow">
							<img src="<?php echo THEME_URI ?>/static/img/mobile-arr.svg" alt="">
						</div>
						<div class="tab__arrow">
							<img src="<?php echo THEME_URI ?>/static/img/tab-arr.svg" alt="">
						</div>
						<div class="desktop__arrow">
							<img src="<?php echo THEME_URI ?>/static/img/desktop-arr.svg" alt="">
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>

