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
			<?php
			$my_query = galbert_menus_query();
			$menus = ['carte','packages','memberships'];
			while ($my_query->have_posts()):
				$my_query->the_post();
				get_template_part('partials/menu', $menus[$my_query->current_post]);
			endwhile;
			wp_reset_query();
			printf('<div class="feat-img"><img src="%s" alt=""></div>', get_field('menu_image'));
			?>
			</div> <!-- .right -->
		</article>
	</section>
<?php get_footer();
