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
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
	<!-- /Favicon -->

	<title></title>

	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
	<?php wp_body_open() ?>

	<div class="wrapper">
		<header class="header color">
            <div class="container">
                <div class="header__wrapper">
                    <?php get_template_part( 'components/logo/header' ) ?>

                    <button class="burger__button">
                        <span></span>
                    </button>
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
            </div>
		</header>

