<?php

/**
 * Header default template.
 *
 * @see Options -> Header.
 *
 * @package WordPress
 * @subpackage eom
 */

global $page, $paged;

$site_desc = get_bloginfo( 'description', 'display' );
?>

<!doctype html>
<html class="no-js" <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Favicon -->
	<!-- /Favicon -->

	<title>
		<?php
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );

		if( $site_desc && ( is_home() || is_front_page() ) ) echo " | $site_desc";

		if( $paged > 1 || $page > 1 ) echo ' | ' . sprintf( __( 'Page %s', 'eom' ), max( $paged, $page ) );
		?>
	</title>

	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
	<?php wp_body_open() ?>

	<div class="wrapper">
		<header class="header color">
			<div class="header-inner" id="menu-lock">
				<?php
				wp_nav_menu( [
					'theme_location'	=> 'header_menu',
					'container'			=> 'nav',
					'container_class'	=> 'header-nav'
				] );
				?>
			</div>
		</header>

