<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Srijan_Foundation
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
	<?php
		if ( is_front_page() && is_home() ) : ?>
		<header class="hero-banner">
			<ul class="slider">
			<?php $loop = new WP_Query( array( 'post_type' => 'homeslider', 'posts_per_page' => -1 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
					<li>
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>

						<div class="hero-content page-wrap row">
							<article class="col">
							<h2><span><?php echo get_the_title(); ?></span></h2>
							<?php the_excerpt(); ?>


								<?php 
									$my_meta = get_post_meta( $post->ID, 'cta', true ); 
									if( !empty( $my_meta[0]['link-url'] ) ) 
    								echo '<a href="'.$my_meta[0]['link-url'].'" class="cta-btn">'.$my_meta[0]['link-label'].'</a>'; 
								?>

							</article>
						</div>
					</li>
				
			<?php endwhile; wp_reset_query(); ?>
			</ul>
		</header>

		<section class="feature-boxes page-section">
			<h1 class="section-heading">Areas of Intervention</h1>
			<div class="row page-wrap">
				<?php $loop = new WP_Query( array( 'post_type' => 'homeboxes', 'posts_per_page' => -1 ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
					<article class="col-4 feature-box">
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>
						<div class="box-content">
							<h2><span><?php echo get_the_title(); ?></span></h2>
							<?php the_excerpt(); ?>
							<?php 
									$my_meta = get_post_meta( $post->ID, 'boxlink', true ); 
									if( !empty( $my_meta[0]['page-link'] ) ) 
    								echo '<a href="'.$my_meta[0]['page-link'].'" class="cta-btn">Learn More</a>'; 
							?>
						</div>
					</article>

				<?php endwhile; wp_reset_query(); ?>					
			
			</div>
		</section>


		<?php $loop = new WP_Query( array( 'post_type' => 'featuresections', 'posts_per_page' => -1 ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
					<section class="page-section feature-section">
						<figure class="bg-img">
							<?php the_post_thumbnail(); ?>
						</figure>
						<div class="row page-wrap">
							<div class="col-6 feature-content">
							<h2><span><?php echo get_the_title(); ?></span></h2>
							<?php the_excerpt(); ?>
							<?php 
									$my_meta = get_post_meta( $post->ID, 'pagelinks', true ); 
									if( !empty( $my_meta[0]['link-uri'] ) ) 
    								echo '<a href="'.$my_meta[0]['link-uri'].'" class="cta-btn">'.$my_meta[0]['link-text'].'</a>'; 
							?>
							</div>
							<div class="col-4 image-icon">
								<?php 
									$my_meta = get_post_meta( $post->ID, 'svgcode', true ); 
									if( !empty( $my_meta[0]['icon-code'] ) ) 
    								echo '<img src="'.$my_meta[0]['icon-code'].'" class="large-icon" alt="icon" />'; 
							?>
							</div>
						</div>
					</section>

		<?php endwhile; wp_reset_query(); ?>					
			



	<?php else : ?>
		<header class="page-banner">
			
		</header>
	<?php endif; ?>
	
	<section class="page-section">

		<div class="row page-wrap">
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>

		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
