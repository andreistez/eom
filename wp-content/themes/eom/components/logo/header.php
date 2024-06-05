<?php

/**
 * Header logotype.
 *
 * @package WordPress
 * @subpackage eom
 */
?>

<div class="header__logo_wrapper">
	<a href="/" class="logo">
		<div class="logo__inner">
			<?php get_template_part( 'components/logo/gears-and-text', null, ['text' => 'Mutual<br/>Value<br/>Labs'] ) ?>
			<div class="logo__inner_img">
				<img src="<?php echo THEME_URI ?>/static/img/logos.png" alt="">
			</div>
		</div>
	</a>
</div>
