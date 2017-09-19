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
	
	<div class="membership-btn">
		<a href="http://108.162.58.54/onlinebooking/" target="_blank">MAKE RESERVATION</a>
	</div>

	<section id="home-video" class="video-embed">
		<div class="video-container"><?php the_field('home_video'); ?></div>
		<svg class="play-icon svg-icon" viewBox="0 0 100 100" title="Play Video">
			<circle class="circle" cx="50" cy="50" r="42"></circle>
			<path class="triangle" d="M 30,20 L 70,50 L 30,80 Z"></path>
		</svg>
	</section>
	
</article>
