; (function () {

	'use strict';



	var isMobile = {
		Android: function () {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function () {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function () {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function () {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function () {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function () {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	var fullHeight = function () {

		if (!isMobile.any()) {
			$('.js-fullheight').css('height', $(window).height());
			$(window).resize(function () {
				$('.js-fullheight').css('height', $(window).height());
			});
		}

	};


	var counter = function () {
		$('.js-counter').countTo({
			formatter: function (value, options) {
				return value.toFixed(options.decimals);
			},
		});
	};


	var counterWayPoint = function () {
		if ($('#bt-counter').length > 0) {
			$('#bt-counter').waypoint(function (direction) {

				if (direction === 'down' && !$(this.element).hasClass('animated')) {
					setTimeout(counter, 400);
					$(this.element).addClass('animated');
				}
			}, { offset: '90%' });
		}
	};

	// Animations
	var contentWayPoint = function () {
		var i = 0;
		$('.animate-box').waypoint(function (direction) {

			if (direction === 'down' && !$(this.element).hasClass('animated')) {

				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function () {

					$('body .animate-box.item-animate').each(function (k) {
						var el = $(this);
						setTimeout(function () {
							var effect = el.data('animate-effect');
							if (effect === 'fadeIn') {
								el.addClass('fadeIn animated');
							} else if (effect === 'fadeInLeft') {
								el.addClass('fadeInLeft animated');
							} else if (effect === 'fadeInRight') {
								el.addClass('fadeInRight animated');
							} else {
								el.addClass('fadeInUp animated');
							}

							el.removeClass('item-animate');
						}, k * 200, 'easeInOutExpo');
					});

				}, 100);

			}

		}, { offset: '85%' });
	};


	var burgerMenu = function () {

		$('.js-bt-nav-toggle').on('click', function (event) {
			event.preventDefault();
			var $this = $(this);

			if ($('body').hasClass('offcanvas')) {
				$this.removeClass('active');
				$('body').removeClass('offcanvas');
			} else {
				$this.addClass('active');
				$('body').addClass('offcanvas');
			}
		});



	};

	// Click outside of offcanvass
	var mobileMenuOutsideClick = function () {

		$(document).click(function (e) {
			var container = $("#bt-aside, .js-bt-nav-toggle");
			if (!container.is(e.target) && container.has(e.target).length === 0) {

				if ($('body').hasClass('offcanvas')) {

					$('body').removeClass('offcanvas');
					$('.js-bt-nav-toggle').removeClass('active');

				}

			}
		});

		$(window).scroll(function () {
			if ($('body').hasClass('offcanvas')) {

				$('body').removeClass('offcanvas');
				$('.js-bt-nav-toggle').removeClass('active');

			}
		});

	};

	var sliderMain = function () {

		$('#bt-hero .flexslider, #bt-hp-projects .flexslider').flexslider({
			animation: "fade",
			slideshowSpeed: 8000,
			directionNav: true,
			start: function () {
				setTimeout(function () {
					$('.slider-text').removeClass('animated fadeInLeft'); //fadeInTop
					$('.flex-active-slide').find('.slider-text').addClass('animated fadeInLeft'); //fadeInTop

					// vk 
					$('.overlay-motif').removeClass('animated fadeInRight');
					$('.flex-active-slide').find('.overlay-motif').addClass('animated fadeInRight');
				}, 500);
			},
			before: function () {
				setTimeout(function () {
					$('.slider-text').removeClass('animated fadeInLeft'); //fadeInTop
					$('.flex-active-slide').find('.slider-text').addClass('animated fadeInLeft'); //fadeInTop

					// vk 
					$('.overlay-motif').removeClass('animated fadeInRight');
					$('.flex-active-slide').find('.overlay-motif').addClass('animated fadeInRight')
				}, 500);
			}

		});

	};

	var stickyFunction = function () {

		var h = $('.image-content').outerHeight();

		if ($(window).width() <= 992) {
			$("#sticky_item").trigger("sticky_kit:detach");
		} else {
			$('.sticky-parent').removeClass('stick-detach');
			$("#sticky_item").trigger("sticky_kit:detach");
			$("#sticky_item").trigger("sticky_kit:unstick");
		}

		$(window).resize(function () {
			var h = $('.image-content').outerHeight();
			$('.sticky-parent').css('height', h);


			if ($(window).width() <= 992) {
				$("#sticky_item").trigger("sticky_kit:detach");
			} else {
				$('.sticky-parent').removeClass('stick-detach');
				$("#sticky_item").trigger("sticky_kit:detach");
				$("#sticky_item").trigger("sticky_kit:unstick");

				$("#sticky_item").stick_in_parent();
			}




		});

		$('.sticky-parent').css('height', h);

		$("#sticky_item").stick_in_parent();

	};

	var owlCrouselFeatureSlide = function () {
		$('.owl-carousel').owlCarousel({
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			autoplay: false,
			loop: true,
			margin: 10,
			nav: false,
			dots: true,
			autoHeight: false,
			items: 1
			// navText: [
			// 	"<i class='icon-arrow-left3 owl-direction'></i>",
			// 	"<i class='icon-arrow-right3 owl-direction'></i>"
			// ]
		})
	};

	var reInitOwlCarousel = function () {
		//destroy carousel
		$('.bt-carousel-partners').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
		$('.bt-carousel-partners').find('.owl-stage-outer').children().unwrap();
		//re-init
		$('.bt-carousel-partners').owlCarousel({
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			autoplay: false,
			loop: true,
			margin: 10,
			nav: false,
			dots: true,
			autoHeight: false,
			items: 1
			// navText: [
			// 	"<i class='icon-arrow-left3 owl-direction'></i>",
			// 	"<i class='icon-arrow-right3 owl-direction'></i>"
			// ]
		})
	}

	// page loader 
	var loader = function () {
		$(window).load(function () {
			$('#bt-loader').fadeOut(100);
		});
	};

	// scroll to top
	var scrollToTop = function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() >= 250) {
				$('#scroll-to-top').fadeIn(400);
			} else {
				$('#scroll-to-top').fadeOut(400);
			}
		});

		$("#scroll-to-top").click(function () {
			$("html, body").animate({ scrollTop: 0 }, 800);
			return false;
		});
	};


	//sidebar and mobile nav
	var sidebarNav = function () {
		$("body").on("click", "#bt-main-menu li a, #bt_sm_navbar1 li a", function (e) {
			if ($(this).hasClass('altr')) {
				return;
			} else {
				e.preventDefault();

				var target = $(this).attr('href'),
					targetOffset = $(target).offset().top;
				$('html,body').animate({ scrollTop: targetOffset }, 800);
			}

			// aj 
			$('#bt_sm_navbar1').removeClass('show')
			$('#bt_btn1').removeClass('is-active').removeClass('click')
		});
	};


	var builtechEdgeNav = function () {
		$("body").on("click", ".bt-builtech-edge-wrap .bt-nav-tab .item", function (e) {
			e.preventDefault();

			var target = $(this).attr('href')
			$(this).parents('.bt-nav-tab').find('.active').removeClass('active');
			$(this).addClass('active');
			$('.bt-category-wrap').find(target).show().siblings().hide();

			$('html, body').animate({
				// scrollTop: $(target).offset().top - 70 
				scrollTop: $("#bt-nav-tab").offset().top - 20
			}, 800);

			reInitOwlCarousel();
		});
	};

	var builtechEdgeHomeNav = function () {
		$("body").on("click", ".builtect-edge-pts .bt-feature", function () {

			var item_sel = $(this).attr('data-link');
			localStorage.setItem("bt_category", item_sel);
			// sessionStorage.setItem("bt_category", item_sel);


			window.location.href = 'builtech-edge.php';
		});
	};

	var newPage = function () {
		$("body").on("click", ".btn-bt-edge", function (e) {
			e.preventDefault();
			localStorage.clear();
			window.location.href="builtech-edge.php";
		});
	};

	var nextSection = function () {
		$("body").on("click", ".bt-category-wrap .next-section-wrap .txt-wrap", function () {
			var target = $(this).attr('data-link');

			$(this).parents('.bt-builtech-edge-wrap').find('.bt-nav-tab .active').removeClass('active');
			$(this).parents('.bt-builtech-edge-wrap').find('a[href=' + target + ']').addClass('active');
			$('.bt-category-wrap').find(target).show().siblings().hide();

			$('html, body').animate({
				// scrollTop: $(target).offset().top - 70 
				scrollTop: $("#bt-nav-tab").offset().top - 20
			}, 800);

			reInitOwlCarousel();
		});
	};


	// Document on load.
	$(function () {
		fullHeight();
		counter();
		counterWayPoint();
		contentWayPoint();
		burgerMenu();
		mobileMenuOutsideClick();
		sliderMain();
		stickyFunction();
		owlCrouselFeatureSlide();
		loader();
		scrollToTop();
		sidebarNav();
		builtechEdgeNav();
		builtechEdgeHomeNav();
		nextSection();
		newPage();
	});


}());