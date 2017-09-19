<?php
/**
 * Reservations Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article>

	<div class="left">

		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

		<a href="http://108.162.58.54/onlinebooking/" class="reservation-btn">MAKE RESERVATION</a>

	</div>

	<div class="right">

		<?php the_field('need_account'); ?>

		<?php echo do_shortcode( '[contact-form-7 id="4" title="Reservation Page Form"]' ); ?>

	</div>

</article>