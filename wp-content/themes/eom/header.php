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
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
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
            <div class="container">
                <div class="header__wrapper">
                    <div class="header__logo_wrapper">
                        <a href="/" class="logo">
                            <div class="logo__inner">
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
                                <div class="logo__text">
                                    <div> Economics</div>
                                    <div>of mutuality</div>
                                    <div>alliance</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="header__inner" id="menu-lock">
                        <?php
                        wp_nav_menu( [
                            'theme_location'	=> 'header_menu',
                            'container'			=> 'nav',
                            'container_class'	=> 'header-nav'
                        ] );
                        ?>
                    </div>
                    <button class="burger__button">
                        <span></span>
                    </button>
                </div>
            </div>
		</header>

