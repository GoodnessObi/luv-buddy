//countdown-timer
document.addEventListener('DOMContentLoaded', () => {
	// Unix timestamp (in seconds) to count down to
	var tenMonthsFromNow = new Date().getTime() / 1000 + 3600 * 24 * 7 * 4;

	// Set up FlipDown
	var flipdown = new FlipDown(tenMonthsFromNow)

		// Start the countdown
		.start()

		// Do something when the countdown ends
		.ifEnded(() => {
			console.log('The countdown has ended!');
		});
});

//wow.js
// new WOW().init();

//swiper-mobile
// var swiper = new Swiper('.swiper-container', {
// 	centeredSlides: true,
// 	grabCursor: true,
// 	slidesPerView: 'auto',
// 	loop: true,
// 	navigation: {
// 		nextEl: '.swiper-button-next',
// 		prevEl: '.swiper-button-prev',
// 	},
// 	autoplay: {
// 		delay: 2500,
// 		disableOnInteraction: false,
// 	},
// 	pagination: {
// 		el: '.swiper-pagination',
// 		clickable: true,
// 	},
// });

// Swiper
var swiper = new Swiper('.swiper-container', {
	effect: 'coverflow',
	grabCursor: true,
	centeredSlides: true,
	slidesPerView: 1,
	spaceBetween: 100,
	coverflowEffect: {
		rotate: 0,
		stretch: 0,
		depth: 200,
		modifier: 1,
		slideShadows: false,
	},
	centeredSlides: true,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	loop: true,
	freeMode: true,
	loopedSlides: 6,
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
		// renderBullet: function (index, className) {
		// 	return '<span class="' + className + '">' + (index + 1) + '</span>';
		// },
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
});

// Select all links with hashes
$('a[href*="#"]')
	// Remove links that don't actually link to anything
	.not('[href="#"]')
	.not('[href="#0"]')
	.click(function (event) {
		// On-page links
		if (
			location.pathname.replace(/^\//, '') ==
				this.pathname.replace(/^\//, '') &&
			location.hostname == this.hostname
		) {
			// Figure out element to scroll to
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			// Does a scroll target exist?
			if (target.length) {
				// Only prevent default if animation is actually gonna happen
				event.preventDefault();
				$('html, body').animate(
					{
						scrollTop: target.offset().top,
					},
					1000,
					function () {
						// Callback after animation
						// Must change focus!
						var $target = $(target);
						$target.focus();
						if ($target.is(':focus')) {
							// Checking if the target was focused
							return false;
						} else {
							$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						}
					}
				);
			}
		}
	});
