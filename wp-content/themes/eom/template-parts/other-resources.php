<?php

/**
 * Other Resources section.
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $resources = get_field( 'other_resources', 'option' ) ) return;
?>

<div class="resources">
	<div class="resources__wrapper">
		<h2 class="h2 violet"><?php _e( 'Other Resources', 'eom' ) ?></h2>

		<div class="resources__items">
			<?php
			foreach( $resources as $res )
				get_template_part( 'components/cards/resource', null, ['resource' => $res] );
			?>
		</div>
	</div>
</div>

