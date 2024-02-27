<?php

/**
 * Person's social links.
 *
 * @package WordPress
 * @subpackage eom
 */

if( ! $social_links = $args['links'] ?? null ) return;
?>

<div class="person-links">
	<?php
	foreach( $social_links as $link ){
	$url = $link['link']['url'];
	$title = $link['link']['title'];
	$target = $link['link']['target'] ? ' target="_blank"' : '';
	?>
	<a href="<?php echo esc_url( $url ) ?>"<?php echo $target ?>>
		<?php echo esc_html( $title ) ?>
	</a>
	<?php
}
?>
</div>

