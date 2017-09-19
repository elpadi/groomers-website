<?php
/**
 * Template Name: Praise
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section>

		<article>

			<div class="content">
				
				<h1><?php the_title(); ?></h1>

				<h3>From Our Patrons...</h3>

				<?php /* Query Press Post Type */
				
				$my_query = new WP_Query('post_type=testimonials');
				if ( have_posts() ) :
				while ($my_query->have_posts()) : $my_query->the_post();
				
				?>

				<?php the_content(); ?>		

				<?php
				endwhile;				
				endif;
				/* Reset the Query */
				wp_reset_query();
				?>
			
			</div>

		</article>
		
	</section>

<?php get_footer(); ?>