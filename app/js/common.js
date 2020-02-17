$(document).ready(function() {
	//  ========= Variables =========
	var body = $('body'),
			html = body.width(),
			timer; // for disable scroll
	// ========= =========== =========== ===========

	// Disable hover effect when client scrolles the page
	$(window).on('scroll',function() {
		clearTimeout(timer);
		if(!body.hasClass('disable-hover')) {
			body.addClass('disable-hover');
		}

		timer = setTimeout(function() {
			body.removeClass('disable-hover');
		}, 200);
	});


	// ========= Smooth scrolling to the acnhors ===========
	$('.js-smooth-scroll-link').on('click', function (e) {
		e.preventDefault();
		var id = $(this).attr('href'),
			top = $(id).offset().top;

			if($('.js-menu').hasClass('is-opened')) {
				$('.js-menu').removeClass('is-opened');
				$('html').removeClass('is-fixed');
				$('.js-open-menu-btn').removeClass('is-active');
			}

		$('html, body').animate({scrollTop: top}, 'slow');
	});	
	// ========= =========== =========== ===========

	// ========== Scroll-to-top button ==========
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 150) {
			$('.js-go-to-top-btn').fadeIn();
		} else {
			$('.js-go-to-top-btn').fadeOut();
		}
		
	});

	$('.js-go-to-top-btn').on('click', function (e) { 
		e.preventDefault();
		$('body, html').animate({
			scrollTop: 0
		}, 1000);
	});
	// ========= =========== =========== ===========


	// Menu
	$('.js-open-menu-btn').on('click', function(e) {
		e.preventDefault();

		$(this).toggleClass('is-active');
		$('html').toggleClass('is-fixed');

		$('.js-menu').toggleClass('is-opened');
	});

	// Sliders
	var projectsSlider = new Swiper('.js-projects-slider', {
		slidesPerView: 1,
		spaceBetween: 10,
		loop: true,
		navigation: {
			clickable: true,
			nextEl: '.js-projects-slider-btn-next',
    	prevEl: '.js-projects-slider-btn-prev',
		},
		breakpoints: {
			1100: {
				slidesPerView: 3,
				spaceBetween: 50
			},
			640: {
				slidesPerView: 2,
				spaceBetween: 20
			}
		}
	});


});

$(window).on('load', function() {
	$('body').addClass('is-loaded');
});
