<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<section>

		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php if ( is_page( 'home' ) ) {
				
				// Homepage
				get_template_part( 'content', 'home' );

			} else if ( is_page('gallery') ) {

				// Gallery Page
				get_template_part( 'content', 'gallerypage' );



			}  else if ( is_page( 'shop' ) ) {

				// Shop Page
				get_template_part( 'content', 'shop' );	

			} else {

				// Default

			?>

				<article>

					<div class="feat-img">

						<?php the_post_thumbnail( 'full' ); ?>

					</div>

					<div class="content">

						<?php the_content(); ?>

						<?php if ( is_page( 'memberships' ) ) { ?>

						<?php } ?>

						<?php if ( is_page( 'reservations' ) ) { ?>

                                                    <a href="http://108.162.58.54/gaob2/#/" class="membership-btn">MAKE RESERVATION</a>

						<?php } ?>

					</div>

				</article>

			<?php } ?>

		<?php endwhile; ?>
		
	</section>

<?php get_footer(); ?>