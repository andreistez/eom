<?php

/**
 * Header logotype.
 *
 * @package    WordPress
 * @subpackage eom
 */

$additional_logo = get_field( 'additional_logo' ) ?: '';
?>

<div class="header__logo_wrapper">
	<a href="/" class="logo">
		<div class="logo__inner">
			<?php
			get_template_part( 'components/logo/gears-and-text', null, ['text' => 'Mutual<br/>Value<br/>Labs'] );

			if( $additional_logo ){
				echo '<div class="logo__inner_img">', wp_get_attachment_image( $additional_logo, 'medium' ), '</div>';
			}
			?>
		</div>
	</a>
</div>
