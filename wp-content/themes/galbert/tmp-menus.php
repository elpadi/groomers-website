<?php
/**
 * Template Name: Menus
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section>

		<article>

			<?php /* Query Press Post Type */
			
			$count = 0;
			$my_query = new WP_Query('post_type=menus&order=ASC&orderby=menu_order');
			if ( have_posts() ) :
			while ($my_query->have_posts()) : $my_query->the_post();
			
			$count++;

			if($count == 1) { ?>

			<div class="left">

				<div class="alacarte">
					
					<h1><?php the_title(); ?></h1>
					
					<?php the_content(); ?>
				</div>

			</div>

			<div class="right">

			<?php }

			if($count == 2) { ?>

				<div class="packages">
					
					<h1><?php the_title(); ?></h1>
					
					<?php the_content(); ?>
				</div>

			<?php }

			if($count == 3) { ?>

				<div class="memberships">
					
					<h1><?php the_title(); ?></h1>
					
					<div class="hr">
						<div></div>
					</div>

					<br>

					<?php the_content(); ?>
				</div>

			</div>

			<?php }
			endwhile;				
			endif;
			/* Reset the Query */
			wp_reset_query(); printf('<div class="feat-img"><img src="%s" alt=""></div>', get_field('menu_image'));
			?>

		</article>
		
	</section>

<?php get_footer(); ?>
