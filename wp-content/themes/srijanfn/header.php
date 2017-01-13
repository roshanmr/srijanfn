<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Srijan_Foundation
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<style>
	html {
		margin-top: 0 !important;
	}
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'srijanfn' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="row page-wrap">
			<div class="site-branding col-3">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php echo get_template_directory_uri(); ?>/img/srijan-fn-logo.svg" alt="Srijan Foundation"> <span class="visually-hidden"><?php bloginfo( 'name' ); ?></span></a>
					</h1>
				<?php else : ?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php echo get_template_directory_uri(); ?>/img/srijan-fn-logo.svg" alt="Srijan Foundation"> <span class="visually-hidden"><?php bloginfo( 'name' ); ?></span></a>
					</p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation col-9" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'srijanfn' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				<ul class="secondary-nav">
					<li class="get-involved"><a href="get-involved">Get Involved</a></li>
					<li class="search"><a href="#search"><i class="fa fa-search"></i></a></li>
				</ul>
			</nav><!-- #site-navigation -->

		</div>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
