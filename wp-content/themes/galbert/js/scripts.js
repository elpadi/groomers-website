/*
 * Site: G Albert Spa
 * Author: Jackson Solutions Group
 */

// Self Invoking Function. This runs imediately.
(function($) {

	// Set Variables

	var isMobile = navigator.userAgent.match(/Android|BlackBerry|iPhone|iPod|Opera Mini|IEMobile/i),
		$html = $('html'),
		$body = $('body'),
		$currItem,
		$items; // This is the Body Tag

	var GAlbert = {

		// Rotates the slides. Pass in the available slides, slide length, current slide, and next slide
		rotateSlideshow: function(slides, length, current, next) {

			var $slides = slides,
				k = length,
				$curr = current,
				$next = next,
				$prev = $curr.prev(); // Find the Previous Slide

			// Run this function after (x) seconds
			setTimeout(function(){

				// if there is no previous slide
				if($prev.length == 0) {

					// Previous slide is the last slide
					$prev = $slides.last();

				}

				// If there is no next slide
				if($next.length == 0) {

					// Next slide is the first slide
					$next = $slides.first();

				}

				// Remove the Previous Slides Fade Out Class
				$prev.removeClass('fadeOut');

				// Fade Out the Current Slide
				$curr.addClass('fadeOut').removeClass('fadeIn');

				// Fade In the Next Slide
				$next.addClass('fadeIn');

				// The Current slide is now the Next Slide
				$curr = $next;

				// Find the Next Slide
				$next = $curr.next();

				// Rotate the Slides
				GAlbert.rotateSlideshow($slides, k, $curr, $next);

			}, 6000);

		},

		// Initialize the slideshow
		initSlideShow: function() {

			var $slideshow = $('.slideshow'), // Find the Slideshow Container
				$slides = $('li', $slideshow), // Find the Slides
				k = $slides.length, // Get the Slides Length
				$curr = $slides.first(), // Get the First Slide
				$next = $curr.next(); // Get the Next Slide

			$slides.addClass('animate'); // Add the animate class to all of the slides
			$curr.addClass('fadeIn'); // Fade in the first slide

			// If there is more than one slide
			if (k > 1) {

				// Run the rotateSlideshow function
				this.rotateSlideshow($slides, k, $curr, $next);

			}


		},

		openOverlay: function(overlay, main) {

			var $overlay = overlay, // Overlay
				$img = main; // Main Image

			// Fade In Overlay
			$overlay.addClass('animate fadeIn').removeClass('fadeOut');

			// Set Main Image to Current Image
			$img.attr('src', $('img', $currItem).attr('src'));

			// Size the Main Image
			this.sizeOverlay();

		},

		closeOverlay: function(overlay) {

			// The Overlay
			var $overlay = overlay;

			// Fade out the overlay
			$overlay.addClass('fadeOut').removeClass('fadeIn');

			// Remove Fade Out Class
			setTimeout(function(){

				$overlay.removeClass('fadeOut');

			}, 1500);

		},

		nextOverlayItem: function(main) {

			var $main = main, // Main Image
				$next = $currItem.next(); // Next Image

			// If Next Image Doesn't exist
			if($next.length == 0) {

				// Next image is the first image
				$next = $items.first();

			}

			// Set current image to next image
			$currItem = $next;

			// Change main image source to current image
			$main.attr('src', $('img', $currItem).attr('src'));

		},

		prevOverlayItem: function(main) {

			var $main = main, // Main Image
				$prev = $currItem.prev(); // Previous Image

			// If Previous Image Doesn't Exist
			if($prev.length == 0) {

				// Previous image is the last image
				$prev = $items.last();

			}

			// Set current image to previous image
			$currItem = $prev;

			// Change main image source to current image
			$main.attr('src', $('img', $currItem).attr('src'));

		},

		sizeOverlay: function(){

			var $overlay = $('.overlay'), // The overlay
				$img = $('img', $overlay), // Main image
				imgWidth = parseInt($img.width()), // image width
				imgHeight = parseInt($img.height()); // image height

			// Center Image
			$img.css({'margin-top':'-'+(imgHeight/2)+'px', 'margin-left':'-'+(imgWidth/2)+'px'});

		},

		initOverlay: function() {

			var $gallery = $('ul.gallery'), // The Gallery
				overlayTemplate = "<div class='overlay'><a class='close'></a><a class='next'></a><a class='prev'></a><img src='#'></div>"; // The Overlay Template

			// Get Gallery Items
			$items = $('li', $gallery);

			// Append Overlay to Body
			$body.append(overlayTemplate);

			var $overlay = $('.overlay'), // Overlay
				$main = $('img', $overlay), // Main Image
				$closeBtn = $('.close', $overlay), // Close Button
				$nextBtn = $('.next', $overlay), // Next Button
				$prevBtn = $('.prev', $overlay); // Previous Button

			// Bind click to close button
			$closeBtn.bind('click', function(){

				// Close Overlay
				GAlbert.closeOverlay($overlay);

			});
			
			// Bind click to next button
			$nextBtn.bind('click', function(){

				// Get Next Image
				GAlbert.nextOverlayItem($main);

			});

			// Bind click to close button
			$prevBtn.bind('click', function(){

				// Get Previous Image
				GAlbert.prevOverlayItem($main);

			});

			// For Each Item
			$items.each(function(){

				// Bind a click function to this item
				$(this).bind('click', function(){

					// Set the current item to this item
					$currItem = $(this);

					// Open the overlay
					GAlbert.openOverlay($overlay, $main);

				});

			});

		},

		openMenu: function() {

			// If menu is open
			if($html.hasClass('open')) {

				// Close Menu
				$html.removeClass('open');

			} else {

				// Open Menu
				$html.addClass('open');

			}

		},

		initMenu: function() {

			// Find the menu open button
			var $openMenu = $('header .open a');

			// Bind click event
			$openMenu.bind('click', function(e){

				// Prevent default click
				e.preventDefault();

				// Open Menu
				GAlbert.openMenu();

			});

		},

		// initialize the Hompepage
		initHome: function() {

			// Initialize the Slideshow
			this.initSlideShow();

		},

		initGallery: function() {

			// If this is not a mobile device
			if(!isMobile) {

				// Add overlay functionality
				this.initOverlay();

			}

		},

		init: function() {

			// Init the Responsive Menu functionality
			this.initMenu();

			// If it is the homepage
			if($body.hasClass('home')) {

				// Initialize the homepage
				this.initHome();

			}

			// If it is the gallery
			if($body.hasClass('page-id-14')) {

				// Initialize the homepage
				this.initGallery();

			}

			if (window.Videos && ('init' in Videos)) Videos.init($);

			if ('prettyDropdown' in $.fn) $('select').prettyDropdown({ height: 30 });

		}

	};

	$(document).ready(GAlbert.init.bind(GAlbert));
	

	$(window).resize(function(){

		// If it is a Gallery Page
		if($body.hasClass('page-id-14')) {

			// If the overlay is displayed
			if($(".overlay").hasClass("fadeIn")) {

				// Resize the overlay
				GAlbert.sizeOverlay();

			}

		}

	});

})(jQuery);
