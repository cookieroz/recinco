<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package recinco
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'recinco' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="row call-top">
			<div class="container">
				<a href="#" class="mobile-nav-link pull-left">&#9776;</a>
				<div class="col-xs-4">
					<h4>Cintas para bandas de correr</h4>
				</div>
				<div class="col-md-6 col-xs-4">
        	<p class="top-contact"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> +34 <?php echo get_theme_mod( 'phone_setting' ); ?></p>
				</div>
				<div class="col-md-2 col-xs-4">
					<div class="social-media-squares">
	          <a href="http://facebook.com/"><i class="fa fa-facebook"></i></a>
	          <a href="http://linkedin.com/"><i class="fa fa-instagram"></i></a>
	          <a href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
        	</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-md-2 col-xs-12">
					<!-- TO DO: Create uploader to upload logo -->
					<div class="logo text-center">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-img">
							<img src="<?php echo esc_url( home_url( '/wp-content/uploads/2015/10/logo1.jpg' ) ); ?>">
						</a>
						<h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
					</div>
				</div>
				<div class="col-md-10 col-xs-12">
					<nav id="site-navigation" class="main-navigation navbar" role="navigation">
						<div class="mobile-menu">Menu</div>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav navbar-nav', ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
