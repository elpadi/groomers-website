<?php
/**
 * Template Name: Page with Sidebar
 */
if (!have_posts()): include(__DIR__.'/404.php'); else:
get_header(); ?>
	<section>
		<article>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="content">
				<main><?php the_content(); ?></main>
				<?php get_sidebar(); ?>
			</div>
			<?php endwhile;	?>
		</article>
	</section>
<?php get_footer(); endif; ?>
