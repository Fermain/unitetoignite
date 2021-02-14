<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/unitetoignite/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/unitetoignite/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/unitetoignite/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/wp-content/themes/unitetoignite/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/wp-content/themes/unitetoignite/images/favicon/safari-pinned-tab.svg" color="#ecd43b">
    <link rel="shortcut icon" href="/wp-content/themes/unitetoignite/images/favicon/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Unite to Ignite">
    <meta name="application-name" content="Unite to Ignite">
    <meta name="msapplication-TileColor" content="#ecd43b">
    <meta name="msapplication-config" content="/wp-content/themes/unitetoignite/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ecd43b">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 

    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }

?>

<div class="site min-vh-100 d-flex flex-column" id="page">
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
    <header id="masthead" class="mb-0 mb-md-4">
        <div class="container">
            <div class="row justify-content-between mt-2 mt-md-4">
                <div class="col col-md-auto">
                    <a href="/">
                        <img src="/wp-content/themes/unitetoignite/images/branding/logo-linear.svg" class="img-fluid w-100"></object>
                    </a>
                </div>
                <div class="col-auto d-flex align-items-center text-primary">
                    <?php get_template_part('partials/social', 'nav'); ?>
                </div>
            </div>
            <?php 
            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => '',
                'container_id'    => 'main-nav',
                'menu_class'      => 'navbar-nav d-flex justify-content-between flex-row flex-wrap',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
    </header>
    
	<div id="content" class="site-content flex-grow-1">
		<!-- <div class="container">
			<div class="row"> -->
                <?php endif; ?>