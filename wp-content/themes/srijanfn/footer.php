<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Srijan_Foundation
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php wp_nav_menu( array( 'theme_location' => 'footer_nav', 'menu_id' => 'footer_menu' ) ); ?>
		<?php 
			//wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'footer_menu' ) ); 
		?>
		<?php wp_nav_menu( array( 'theme_location' => 'social_links', 'menu_id' => 'social_links' ) ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/bx-slider/jquery.bxslider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
</html>
