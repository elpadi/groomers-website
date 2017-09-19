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

		<div class="right-top">

			<img src="<?php the_field('all_products_featured_image'); ?>" class="prod-img" />

		</div>	

		<div class="left">

			<h1><?php the_field('all_products_title'); ?></h1>

			<p><?php the_field('all_products_text'); ?></p>

			<a href="http://g-albert-mens-groomers.myshopify.com/collections/products" class="prod-btn">VIEW ALL PRODUCTS</a>

		</div>

			<div class="hr">
			
				<div></div>
			
			</div>

		<div class="right-bottom">

			<img src="<?php the_field('gift_cards_featured_image'); ?>" class="gift-img" />

		</div>

		<div class="left">

			<h1><?php the_field('gift_cards_title'); ?></h1>

			<p><?php the_field('gift_cards_text'); ?></p>

			<a href="http://g-albert-mens-groomers.myshopify.com/collections/gift-cards/products/gift-card" class="gift-btn">SHOP GIFT CARDS</a>

		</div>

</article>