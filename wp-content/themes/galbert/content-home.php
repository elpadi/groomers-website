<?php
/**
 * Homepage Template
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<?php echo do_shortcode('[home_slideshow]'); ?>

<article>

	<div class="intro">
		<?php the_content(); ?>
	</div>

	<section id="home-video" class="video-embed">
		<h3 class="uppercase"><?php the_field('home_video_title'); ?></h3>
		<div class="video-container"><?php the_field('home_video'); ?></div>
		<svg class="play-icon svg-icon" viewBox="0 0 100 100" title="Play Video">
			<circle class="circle" cx="50" cy="50" r="42"></circle>
			<path class="triangle" d="M 40,27 L 67,50 L 40,73 Z"></path>
		</svg>
	</section>
	
</article>
