(function() {
	var method;
	var noop = function() {};
	var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
		'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
		'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
		'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
	];
	var length = methods.length;
	var console = (window.console = window.console || {});
	while (length--) {
		method = methods[length];
		// Only stub undefined methods.
		if (!console[method]) {
			console[method] = noop;
		}
	}
}());

(function() {
  jQuery.easing.def = "easeOutQuad";

	/**
	 * @Form-erros
	 * Remover as classes de erro adicionadas pela validaçáo
	 */
	formErrors();
	/**
	 * @Styled-select
	 * Aplicar um novo estilo as selects.
	 */
	styledSelect();
	/**
	 * @Links
	 * Setting an active menu item based on the current URL
	 */
	activeMenu();


	if (!!document.querySelector('.slider-for')) {
		$('.slider-for').slick({
			dots: false,
			infinite: false,
			speed: 750,
			slidesToShow: 1,
			adaptiveHeight: true,
			autoplay: false,
			autoplaySpeed: 3500,
			arrows: false,
			fade: true,
			asNavFor: '.slider-nav',
			lazyLoad: 'progressive'
		});
		$('.slider-nav').slick({
			dots: false,
			infinite: false,
			speed: 750,
			slidesToShow: 1,
			adaptiveHeight: true,
			autoplay: false,
			autoplaySpeed: 3500,
			asNavFor: '.slider-for',
			arrows: true,
			prevArrow: '<button class="btn-prev btn-arrow">&#10094;</button>',
			nextArrow: '<button class="btn-next btn-arrow">&#10095;</button>',
			lazyLoad: 'progressive'
		});
	}
	if (!!document.querySelector('.slider')) {
		$('.slider').slick({
			dots: false,
			infinite: false,
			speed: 750,
			slidesToShow: 1,
			adaptiveHeight: true,
			autoplay: false,
			autoplaySpeed: 3500,
			arrows: true,
			prevArrow: '<button class="btn-prev btn-arrow">&#10094;</button>',
			nextArrow: '<button class="btn-next btn-arrow">&#10095;</button>',
			lazyLoad: 'progressive'
		});
	}
	if (!!document.querySelector('.banner')) {
		$('.banner').slick({
			dots: false,
			infinite: false,
			speed: 750,
			fade: true,
			cssEase: 'linear',
			slidesToShow: 1,
			adaptiveHeight: true,
			autoplay: true,
			autoplaySpeed: 4000,
			arrows: true,
			prevArrow: '<button class="btn-prev btn-arrow">&#10094;</button>',
			nextArrow: '<button class="btn-next btn-arrow">&#10095;</button>',
			lazyLoad: 'progressive'
		});
	}
	if (!!document.querySelector('.carousel')) {
		$('.carousel').slick({
			dots: false,
			infinite: false,
			speed: 750,
			slidesToShow: 4,
			adaptiveHeight: true,
			autoplay: true,
			autoplaySpeed: 4500,
			arrows: true,
			prevArrow: '<button class="btn-prev btn-arrow">&#10094;</button>',
			nextArrow: '<button class="btn-next btn-arrow">&#10095;</button>',
			lazyLoad: 'progressive',
			responsive: [{
				breakpoint: 1023,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			}, {
				breakpoint: 640,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}]
		});
	}

	if (!!document.querySelector('#formLogin')) {
		$('#formLogin').validate({
			debug: false,
			errorClass: 'error',
			errorElement: 'div',
			onkeyup: false,
			rules: {
				emailLogin: {
					required: true,
					email: true
				},
				passwordLogin: {
					required: true,
					minlength: 6
				}
			}
		});
	}

	if (!!document.querySelector('.global-header .-search')) {
		$('body .global-header').on('focus', '#search', function() {
			$('#globalHeader').addClass('show-search');
			$('#globalHeader .menu-item--search').addClass('anime-dropdown');
		});
		$('body .global-header').on('click', '#closeSearch', function() {
			$('#globalHeader').removeClass('show-search');
			$('#globalHeader .menu-item--search').removeClass('anime-dropdown');
		});
	}

	if (!!document.querySelector('#dataNascimento')) {
		$("#dataNascimento").mask("99/99/9999");
	}

	if (!!document.querySelector('.carousel-6')) {
		$('.carousel-6').slick({
			dots: false,
			infinite: false,
			speed: 750,
			slidesToShow: 6,
			adaptiveHeight: true,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows: true,
			prevArrow: '<button class="btn-prev btn-arrow">&#10094;</button>',
			nextArrow: '<button class="btn-next btn-arrow">&#10095;</button>',
			lazyLoad: 'progressive',
			responsive: [{
				breakpoint: 1023,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				}
			}, {
				breakpoint: 640,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}]
		});
	}

	if (!!document.querySelector('.carousel-5')) {
		$('.carousel-5').slick({
			dots: false,
			infinite: true,
			speed: 500,
			centerMode: true,
			centerPadding: '4rem',
			slidesToShow: 5,
			adaptiveHeight: true,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows: true,
			prevArrow: '<button class="btn-prev btn-arrow">&#10094;</button>',
			nextArrow: '<button class="btn-next btn-arrow">&#10095;</button>',
			lazyLoad: 'progressive',
			responsive: [{
				breakpoint: 1023,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			}, {
				breakpoint: 640,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			}]
		});
	}

	/**
	 * @Collapse
	 */
	if (!!document.querySelector('[data-collapse-list]')) {
		$('[data-collapse-list] [data-target]').each(function() {
			var target = $('#' + $(this).attr('data-target'));

			if (target.hasClass('in')) {
				$(this).addClass('active');
				target.addClass('in').slideDown(0);
			}

			$(this).click(function() {
				if (target.hasClass('in')) {
					$(this).removeClass('active');
					target.removeClass('in').slideUp(270);
				} else {
					$(this).addClass('active');
					target.addClass('in').slideDown(270);
				}

			});
		});
	}
	/**
	 * @Show More News
	 */
	if (!!document.querySelector('.aside-news')) {
		$('.aside-news li').each(function() {
			$(this).attr('id', 'listItemArticle-' + $(this).index());
			if ($(this).index() > 3) {
				$(this).hide(0).addClass('hidden-element').attr('hidden', 'hidden');
			}
		});
		var hiddenNews = $('.aside-news li.hidden-element');
		var btnClose = $('.btn-hide-news');
		$('.btn-show-more-news').click(function() {
			hiddenNews.fadeIn(300).removeAttr('hidden');
			$(this).hide(0);
			$(this).parent().append(btnClose.show(0));
		});
		$(".aside-news").delegate(".btn-hide-news", "click", function() {
			$(this).hide(0);
			$('.btn-show-more-news').show(0);
			hiddenNews.hide(0).attr('hidden', 'hidden');
		});
	}

	if (!!document.querySelector('.scrollTo')) {
		var $root = $('html, body');

		$('.scrollTo').click(function(event) {
			event.preventDefault();
			var href = $.attr(this, 'href');

      if($('body').hasClass('-affix-header')){
        $root.animate({
          scrollTop: $(href).offset().top - 164
        }, 500);
      } else {
        $root.animate({
          scrollTop: $(href).offset().top
        }, 500);
      }

			return false;
		});
	}
}());
/**
 * @Header Affix
 * Animação da header da página.
 */
function affixHeader() {
	if (!!document.querySelector('#globalHeader')) {
		setTimeout(function() {
			var gb_H = $('#globalHeader').outerHeight();
			animeHeader(gb_H);
			$(window).scroll(function() {
				var gb_H_new = $('#globalHeader').outerHeight();
				animeHeader(gb_H, gb_H_new);
			});
		}, 100);
	} else {
		return;
	}
}

function animeHeader(gb_H, gb_H_new) {
	var scroll = getCurrentScroll();

	if ($('body').is('.-affix-header')) {
		$('#globalHeader').addClass('affix-header');

		if (scroll > $('.hero').outerHeight()) {
			$('#globalHeader').addClass('fixed');
		} else {
			$('#globalHeader').removeClass('fixed');
		}
	}
	// } else {
	//   if (scroll > 5) {
	//     $('#globalHeader').addClass('fixed');
	//     $('.page').css("padding-top", gb_H_new + "px");
	//   } else {
	//     $('#globalHeader').removeClass('fixed');
	//     $('.page').css("padding-top", gb_H + "px");
	//   }
	// }
}

function getCurrentScroll() {
	return window.pageYOffset || document.documentElement.scrollTop;
}

function activeMenu() {
	//var url = location.protocol + '//' + location.hostname + (location.port ? ":" + location.port : "") + location.pathname + (location.search ? location.search : "");
	var href_ = location.pathname.split('/').pop();
	var page = href_.split(".")[0];
	$('li a[href="' + page + '.php"]').addClass('active');
	if (page == 'index' || page === '') {
		page = 'home';
		$('li a[href="index.php"]').addClass('active');
	}
	$('body').attr('data-current-page', page);
}

function initializeMap(id, lat, lng) {
	var mapOptions = {
		center: new google.maps.LatLng(lat, lng),
		zoom: 8,
		scrollwheel: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		draggable: true,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById(id), mapOptions);
}

function styledSelect() {
	if (!!document.querySelector('select')) {
		$('select').each(function() {
			if ($(this).parent().hasClass("styled-select")) {} else {
				classes = {};
				$($(this).attr('class').split(' ')).each(function() {
					if (this !== '') {
						classes[this] = this;
					}
				});
				$(this).wrap('<div class="styled-select" role="presentation"></div>');
				for (var class_name in classes) {
					$(this).closest('.styled-select').addClass(class_name);
				}
			}
		});
	}
}

function formErrors() {
	if (!!document.querySelector('input.error')) {
		$("body").on("focus", "input.error, select.error, textarea.error", function() {
			$(this).removeClass('error');
		});
	}
	if (typeof($('input.success')) !== 'undefined' && $('input.success') !== null) {
		$("body").on("focus", "input.success, select.success, textarea.success",
			function() {
				$(this).removeClass('success');
			});
	}
}
/**
 * @Sticky Footer
 */
setTimeout(function() {
	(function() {
		var header = document.getElementById('globalHeader');
		var main = document.getElementById('mainContent');
		var footer = document.getElementById('globalFooter');
		if (typeof(main) !== 'undefined' && main !== null) {
			var headerH = header.offsetHeight;
			var footerH = footer.offsetHeight;
			var css = '#mainContent {min-height: calc(100vh - ' + (headerH + footerH) +
				'px);}';
			document.body.className += ' sticky-footer';
			createStyleSheet(css, 'cssStickyFooter');
		}
	}());
}, 50);

function createStyleSheet(css, id) {
	var head = document.head || document.getElementsByTagName('head')[0];
	var style = document.createElement('style');
	style.type = 'text/css';
	style.id = id;
	if (style.styleSheet) {
		style.styleSheet.cssText = css;
	} else {
		style.appendChild(document.createTextNode(css));
	}
	head.appendChild(style);
}

function documentHeight() {
	var B = document.body,
		H = document.documentElement,
		height;
	if (typeof document.height !== 'undefined') {
		height = document.height; // For webkit browsers
	} else {
		height = Math.max(B.scrollHeight, B.offsetHeight, H.clientHeight, H.scrollHeight,
			H.offsetHeight);
	}
	return height;
}

(function() {
	$("#html").delegate(".btn-show-dialog", "click", function(e) {
		e.preventDefault();
		target = $(this).attr('href');
		if ($(this).attr('data-status') !== "") {
			showDialog(target);
		} else {
			hideDialog(target);
		}
	});
	$("#html").delegate(".btn-hide-dialog", "click", function(e) {
		e.preventDefault();
		$(this).closest('.overlay').fadeOut(300);
		$(this).closest('.dialog').removeClass('visible').removeClass(status);
	});
}());

function showDialog(target) {
	$(target).closest('.overlay').fadeIn(300);
	$(target).addClass('visible').addClass(status);
}

function hideDialog(target) {
	$(target).closest('.overlay').fadeOut(300);
	$(target).removeClass('visible').removeClass(status);
}
