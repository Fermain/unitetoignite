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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="profile" href="http://gmpg.org/xfn/11">
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

<?php
                // wp_nav_menu(array(
                // 'theme_location'    => 'primary',
                // 'container'       => 'div',
                // 'container_id'    => 'main-nav',
                // 'container_class' => 'collapse navbar-collapse justify-content-end',
                // 'menu_id'         => false,
                // 'menu_class'      => 'navbar-nav',
                // 'depth'           => 3,
                // 'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                // 'walker'          => new wp_bootstrap_navwalker()
                // ));
                ?>

<div class="site min-vh-100 d-flex flex-column" id="page">
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
    <header id="masthead" class="sticky-top mb-4">
        <div class="container">
            <div class="row justify-content-between mt-2 mt-md-4">
                <div class="col col-md-auto">
                    <a href="/">
                        <object data="/wp-content/themes/unitetoignite/images/branding/logo-linear.svg" type="image/svg+xml" class="img-fluid w-100"></object>
                    </a>
                </div>
                <div class="col-auto col-md-auto d-flex align-items-center">
                    <nav class="social-nav d-flex flex-column flex-md-row">
                        <a href="#" class="icon m-2 h4">
                            <i class="icofont-facebook"></i>
                        </a>
                        <a href="#" class="icon m-2 h4">
                            <i class="icofont-instagram"></i>
                        </a>
                        <a href="#" class="icon m-2 h4">
                            <i class="icofont-twitter"></i>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-between mt-4">
                <div class="col-auto">
                    <a href="/" class="text-dark h5 font-weight-bold">Home</a>
                </div>
                <div class="col-auto">
                    <a href="#" class="text-dark h5 font-weight-bold">About</a>
                </div>
                <div class="col-auto">
                    <a href="#" class="text-dark h5 font-weight-bold">How it Works</a>
                </div>
                <div class="col-auto">
                    <a href="#" class="text-dark h5 font-weight-bold">The Hub</a>
                </div>
                <div class="col-auto">
                    <a href="#" class="text-dark h5 font-weight-bold">Insight</a>
                </div>
                <div class="col-auto">
                    <a href="#" class="text-dark h5 font-weight-bold">Ignite Now</a>
                </div>
            </div>
        </div>
    </header>
    
	<div id="content" class="site-content flex-grow-1">
		<div class="container">
			<div class="row">
                <?php endif; ?>