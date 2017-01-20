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
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'srijanfn' ); ?></button>
					<div class="main-nav-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
						<ul class="secondary-nav">
							<li class="get-involved"><a href="get-involved">Get Involved</a></li>
							<li class="search"><a href="#search"><i class="fa fa-search"></i></a>
								<div class="search-bar">

									<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
										<label>
											<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
											<input type="search" id="search" class="search-field"
											placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"
											value="<?php echo get_search_query() ?>" name="s"
											title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
										</label>
										<input type="submit" class="search-submit"
										value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
									</form>

								</div>
							</li>
						</ul>
					</div>
				</nav><!-- #site-navigation -->

			</div>

		</header><!-- #masthead -->

		<div id="content" class="site-content">
