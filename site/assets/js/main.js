$(function () {
	let sandwitch = function () {
		let mainMenu = $('#js-main-menu');

		$('#js-sandwitch').on('click', function () {
			if ($(window).width() < 1100) {
				$(this).toggleClass('sandwitch--active');
				mainMenu.toggleClass('active');
				$('body').toggleClass('fixed');
			}
		});
	};
	sandwitch();

	let mainSlider = function () {
		let slider = $('#js-main-slider');
		slider.slick({
			arrows: false,
			dots: true
		});

		$('.main-slider-arrows .slider-arrow--left').click(function () {
			slider.slick('slickNext');
		});

		$('.main-slider-arrows .slider-arrow--right').click(function () {
			slider.slick('slickPrev');
		});
	};
	mainSlider();


	let ideaSlider = function () {
		$('#js-idea-slider').slick({
			arrows: false,
			// autoplay: true
		});
	};
	ideaSlider();

	let partnersSlider = function () {
		let slider = $('#js-partners-slider');
		slider.slick({
			dots: true,
			arrows: false,
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [
				{
					breakpoint: 1100,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}

			]

		});
		$('.partners-slider-wrap .slider-arrow--left').click(function () {
			slider.slick('slickNext');
		});

		$('.partners-slider-wrap .slider-arrow--right').click(function () {
			slider.slick('slickPrev');
		});
	};
	partnersSlider();

	let showLikes = function () {
		let newsLike = $('.news__like svg');

		newsLike.on('click', function () {
			if ($(this).hasClass('active')) {
				return false;
			}
			$(this).addClass('active');
			$('.news__like-number').html('1');
		});
	};
	showLikes();

	let showAddressString = function () {
		let windowHref = $(location).attr('href');
		$('#js-show-address-string').on('click', function (e) {
			e.preventDefault();
			$('#js-modal-link').fadeIn();
			$('#js-modal-link .modal-link__content').html(windowHref);
		});

		$('.modal-link-close').on('click', function () {
			$('#js-modal-link').fadeOut();
		});
		$('.modal-link-copy').on('click', function () {
			$('#js-modal-link .modal-link__content').select();
			document.execCommand("copy");
		});
	};
	showAddressString();

	let scrollToTop = function () {
		let jsUp = $('#js-up');
		$(document).on('scroll', function () {
			if ($(window).width() < 768) {
				if ($(document).scrollTop() > 800) {
					jsUp.fadeIn();
				} else if ($(document).scrollTop() < 800) {
					jsUp.fadeOut();
				}
			}
		});

		$('#js-up').on('click', function (e) {
			e.preventDefault();


			$('html, body').animate({
				scrollTop: 0
			}, 1500);
		});
	};
	scrollToTop();

	let changeMenuClass = function () {
		let url = location.href;
		if (url.indexOf('/ru/') !== -1) {
			$('.main-menu').addClass('ru');
			$('.main-header-bottom .logo').addClass('ru');
		}
	};
	changeMenuClass();
});
//islands#grayStretchyIcon



