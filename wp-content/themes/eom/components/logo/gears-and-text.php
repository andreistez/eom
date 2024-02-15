<?php

/**
 * Logotype gears and text.
 *
 * @package WordPress
 * @subpackage eom
 */

$text = $args['text'] ?? '';
?>

<div class="logo__gears">
	<div class="violet__gear">
		<img src="<?php echo THEME_URI ?>/static/img/violet-gear.svg" alt="">
	</div>
	<div class="red__gear">
		<img src="<?php echo THEME_URI ?>/static/img/red-gear.svg"  alt="">
	</div>
	<div class="green__gear">
		<img src="<?php echo THEME_URI ?>/static/img/green-gear.svg"  alt="">
	</div>
	<div class="blue__gear">
		<img src="<?php echo THEME_URI ?>/static/img/blue-gear.svg"  alt="">
	</div>
</div>

<?php if( $text ) echo '<div class="logo__text">', $text, '</div>' ?>

