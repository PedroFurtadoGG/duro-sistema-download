/**
 * @Mobile Menu
 */
(function() {
  if (typeof($('#mobileMenu')) !== 'undefined' && $('#mobileMenu') !== null) {
    mobileMenu();
  }
}());

function mobileMenu() {
  var overlay = $('<div class="overlay overlay--mobile-menu" hidden></div>').attr('id', 'overlayMobileMenu').insertAfter('#globalHeader');
  var dragTarget = $('<div class="drag-target" hidden></div>').attr('id', 'dragTarget').insertAfter('#mobileMenu');
  if ($('[data-mobilemenu-content]')) {
    $('[data-mobilemenu-content]').each(function() {
      if ($(this).attr('data-mobilemenu-content') == 'top') {
        $('#mobileMenuContainer').prepend($(this).clone());
      } else {
        $('#mobileMenuContainer').append($(this).clone());
      }
    });
  }
  $(document).delegate('a[href="#mobileMenu"]', "click", function(e) {
    $('#mobileMenu').toggleClass('-open');
    $('html').toggleClass('-open');
    $('#overlayMobileMenu').fadeToggle(200);
  });
  $(document).on('keydown', function(e) {
    if (e.keyCode === 27 && $('#mobileMenu').hasClass('-open')) {
      closeMobileMenu();
    }
  });
  //$('#mobileMenuContainer').find('[data-grid]').removeAttr("data-grid");
  //$('#mobileMenuContainer').find('[data-atomic]').removeAttr("data-atomic");
  //$('#mobileMenuContainer').find('.gutter-m, .grid-inline, .grid-va-m').removeClass("gutter-m grid-inline grid-va-m");
  $('#mobileMenu #mobileMenuContainer ul').each(function() {
    $(this).addClass('list-mobile cf');
    if ($(this).children('li').hasClass('mega-menu')) {
      _width = $('.global-header .grid:not(.grid-inline)').outerWidth();
      $(this).find('.dropdown').width(_width);
    }
  });
  /* @Menu interno */
  if (typeof($('#mobileMenu .list-dropdown')) !== 'undefined' && $('#mobileMenu .list-dropdown') !== null) {
    setTimeout(function() {
      mobileMenuInterno();
    }, 1000);
  }
}

function openMobileMenu() {
  $('#mobileMenu').addClass('-open');
  $('html').addClass('-open');
  $('#overlayMobileMenu').fadeIn(260);
}

function closeMobileMenu() {
  $('#mobileMenu').removeClass('-open');
  $('html').removeClass('-open');
  $('#overlayMobileMenu').fadeOut(260);
}

function mobileMenuInterno() {
  $('#mobileMenu .list-dropdown').each(function() {
    var item = $(this);
    var trigger = item.children('a');
    var list = item.children('ul');
    var bc = $('#mobileMenu').attr('data-bc');
    list.wrapAll('<div class="mobile-menu--layer ' + bc + '"></div>').addClass(bc);
    list.addClass('mobile-menu--layer--list').attr('data-atomic', '');
    item.addClass('trigger-layer');
    var layer = list.closest('.mobile-menu--layer');
    var btnBack = $('<div class="mobile-menu--header"><span class="btn-back mobile-menu--layer--btn-back"><i class="fa fa-angle-left" data-atomic="va-b fs-xl mr-xs"></i>Voltar</span></div>').prependTo(layer);
    var back = layer.find('.btn-back');
    trigger.click(function(e) {
      if ($(window).width() < 1024) {
        e.preventDefault();
      }
      layer.addClass('visible');
      $('#mobileMenu').addClass('mobile-menu--layer-visible');
    });
    back.click(function() {
      layer.removeClass('visible');
      $('#mobileMenu').removeClass('mobile-menu--layer-visible');
    });
  });
}
if (typeof($('#asideNav')) !== 'undefined' && $('#asideNav') !== null) {
  var asideNav = $('#asideNav');
  mobileAsideNav();
}

function mobileAsideNav() {
  $('.aside-nav-header').clone().attr('id', 'asideHeader').addClass('aside-clone').prependTo('#asideNav');
  $(document).delegate('[data-href="#asideNav"]', "click", function(e) {
    toggleAsideNav();
  });
  $(document).keyup(function(e) {
    if (e.keyCode == 27 && $('#asideNav') && $('#asideNav').hasClass('aside-nav--open') && !$('#mobileMenu').hasClass('-open')) {
      toggleAsideNav();
    }
  });
}

function toggleAsideNav() {
  asideNav.toggleClass('aside-nav--open');
  $('#overlayMobileMenu').fadeToggle(200);
  $('html').toggleClass('-open');
}

(function() {
  if (typeof($('#mobileMenu')) !== 'undefined' && $('#mobileMenu') !== null) {
    var waitForFinalEvent = function() {
      var b = {};
      return function(c, d, a) {
        a || (a = "I am a banana!");
        b[a] && clearTimeout(b[a]);
        b[a] = setTimeout(c, d);
      };
    }();

    dataViewport();

    $(window).resize(function() {
      waitForFinalEvent(function() {
        dataViewport();
      }, 0);
    });
  }
}());

function dataViewport() {
  if ($(window).width() >= 1024) {
    $('html').attr('data-viewport', 'desktop');
  }
  if ($(window).width() < 1120 && $(window).width() >= 1024) {
    $('html').attr('data-viewport', 'default');
  }
  if ($(window).width() < 1024 && $(window).width() >= 768) {
    $('html').attr('data-viewport', 'tablet');
  }
  if ($(window).width() < 768 && $(window).width() >= 320) {
    $('html').attr('data-viewport', 'mobile');
  }
  if ($(window).width() < 320) {
    $('html').attr('data-viewport', 'mobile-s');
  }
}
