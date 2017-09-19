<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

	<!-- Footer -->
	<footer>
		

		<?php if(is_page('home')) { ?>

			<div class="hr-logo">
			
				<div></div>
			
			</div>

		<?php } else { ?>

			<div class="hr-logo">
		
				<a href="/" class="logo"></a>

			</div>

		<?php } ?>

		<ul class="info">
			<li class="col-1">Questions? Call us at
				<span><a href="tel:203-801-9900">203-801-9900</a></span></li>
			<li class="col-2">6 Elm Street, New Canaan, CT 06840
				<span><a href="https://www.google.com/maps/preview#!q=6+Elm+Street%2C+New+Canaan%2C+CT+06840&data=!4m15!2m14!1m13!1s0x89c2a70d8bdf99d1%3A0x98cd6e0c9b3cabbc!3m8!1m3!1d3562840!2d-82.6692525!3d40.3652775!3m2!1i1626!2i879!4f13.1!4m2!3d41.1469557!4d-73.4924802" target="_blank">GET DIRECTIONS</a></span></li>
			<li class="col-3">
				<!-- Begin MailChimp Signup Form -->
				<form action="http://galbertmensgroomers.us3.list-manage1.com/subscribe/post?u=bda4228a774b0b70aee0ff8e8&amp;id=b04cfbdb81" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<label for="mce-EMAIL"><span>KEEP IN TOUCH</span></label>
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				</form>
			</li>
		</ul>

		<ul class="social">
			<li class="fb"><a href="https://www.facebook.com/pages/G-Albert-Mens-Groomers/359441010808727" target="_blank"></a></li>
			<li class="tw"><a href="https://twitter.com/GAlbertGroomers" target="_blank"></a></li>
			<li class="yp"><a href="http://instagram.com/galbertmensgroomers" target="_blank"></a></li>
			<li class="em"><a href="mailto:galbert@mensgroomers.com" target="_blank"></a></li>
		</ul>

		<div class="copy">
			
			&copy; <?php echo date('Y'); ?> G. Albert. All Rights Reserved. &nbsp;&bull;&nbsp; <a href="/careers">Careers</a> &nbsp;&bull;&nbsp; <a href="/policies">Policies</a> </div>

	</footer>

	<?php wp_footer(); ?>
</body>
</html>