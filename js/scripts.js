$(document).ready(function() {

	/***************** Waypoints ******************/

	$('.wp1').waypoint(function() {
		$('.wp1').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.wp2').waypoint(function() {
		$('.wp2').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	$('.wp3').waypoint(function() {
		$('.wp3').addClass('animated fadeInRight');
	}, {
		offset: '75%'
	});
	
	//Fancybox V2
	$(".fancybox-media").fancybox({
	  width: 960,
	  height: 540,
	  autoplay: 1,
	  padding : 0,
	  openEffect	: 'elastic',
	  closeEffect	: 'elastic',
	  hd: 1,
		tpl: {
		closeBtn: '<div title="Close" class="fancybox-item fancybox-close"><i class="fa fa-times-circle-o"></i></div>'
		},
	  helpers: {
		 media: {},
		 overlay : {
				css : {
					'background' : 'rgba(44, 88, 159, 0.7)'
				}
			}
			}
		});

	/***************** Nav Transformicon ******************/

	/* When user clicks the Icon */
	$('.nav-toggle').click(function() {
		$(this).toggleClass('active');
		$('.header-nav').toggleClass('open');
		event.preventDefault();
	});
	/* When user clicks a link */
	$('.header-nav li a').click(function() {
		$('.nav-toggle').toggleClass('active');
		$('.header-nav').toggleClass('open');

	});

	/***************** Header BG Scroll ******************/
	$(function() {
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 20) {
				$('section.navigation').addClass('fixed');
				$('header').css({
					"border-bottom": "none",
					"padding": "35px 0"
				});
				$('header .member-actions').css({
					"top": "30px",
				});
				$('header .navicon').css({
					"top": "30px",
				});
			} else {
				$('section.navigation').removeClass('fixed');
				$('header').css({
					"border-bottom": "solid 1px rgba(255, 255, 255, 0.2)",
					"padding": "50px 0"
				});
				$('header .member-actions').css({
					"top": "41px",
				});
				$('header .navicon').css({
					"top": "48px",
				});
			}
		});
	});
	
	
	/***************** Smooth Scrolling ******************/

	$(function() {

		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top -100
					}, 1000);
					return false;
				
				}
			}
		});
/*		//Seleciona
		$('.menu__list li').click(function(event) {
			event.preventDefault();
	
			var url = $(this).attr('href');
	
			$("li").each(function(index) {
				$(this).removeClass("menu__item--current");
			});
				$(this).addClass("menu__item--current");
		});
	});*/
		
		
		$('.primary-nav li a').click(function(event) {
			event.preventDefault();
	
			var url = $(this).attr('href');
	
			$("a").each(function(index) {
				$(this).removeClass("selected");
			});
				$(this).addClass("selected");
		});
	});

	/************** Parallax Scripts **************/

    var isFirefox = typeof InstallTrigger !== 'undefined';
    var isIE = /*@cc_on!@*/ false || !!document.documentMode;
    var isChrome = !!window.chrome;
    var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
    var prefix;

    if (isFirefox) {
        prefix = '-moz-';
    } else if (isIE) {

    } else if (isChrome || isSafari) {
        prefix = '-webkit-';
    }

    $('.page-header section:first-child').addClass('first-child');

    $('.parallax-background').each(function () {

        if ($(this).closest('section').hasClass('first-child') && !$(this).closest('section').hasClass('slider-fullscreen')) {
            $(this).attr('data-top', prefix + 'transform: translate3d(0px,0px, 0px)');
            $(this).attr('data-top-bottom', prefix + 'transform: translate3d(0px,200px, 0px)');

        } else {
            $(this).attr('data-bottom-top', prefix + 'transform: translate3d(0px,-100px, 0px)');
            $(this).attr('data-center', prefix + 'transform: translate3d(0px,0px, 0px)');
            $(this).attr('data-top-bottom', prefix + 'transform: translate3d(0px,100px, 0px)');
        }

    });

    if (!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)) {
        skrollr.init({
            forceHeight: false
        });

        // Multi Layer Parallax
		$('.hover-background').each(function(){
			$(this).mousemove(function( event ) {
				$(this).find('.background-image-holder').css('transform', 'translate(' + -event.pageX /30 + 'px,' + -event.pageY /45+ 'px)');
				$(this).find('.layer-1').css('transform', 'translate(' + -event.pageX /50 + 'px,' + -event.pageY /50+ 'px)');
				$(this).find('.layer-2').css('transform', 'translate(' + -event.pageX /60 + 'px,' + -event.pageY /60+ 'px)');
			});
		});
    }
	
});

$(window).load(function(){

  "use strict";
	
	// Isotope Projects
	$('.projects-container').isotope({
	  itemSelector: '.project',
	  layoutMode: 'fitRows'
	});
	
	// Isotope contained feature boxes
	$('.contained-features-wrapper').isotope({
	  itemSelector: '.no-pad',
	  layoutMode: 'masonry',
	  masonry: {
		  gutter: 0
		}
	});
	
	// Blog Masonry	
	$('.blog-masonry-container').isotope({
	  itemSelector: '.blog-masonry-item',
	  layoutMode: 'masonry'
	});
	
	$('.blog-filters li').click(function() {

	  var current = $(this);
	  
	  current.siblings('li').removeClass('active');
	  current.addClass('active');
	  
	  var filterValue = current.attr('data-filter');
	  var container = current.closest('.blog-masonry').find('.blog-masonry-container');
	  container.isotope({ filter: filterValue });
	});	

    var hash = window.location.hash.replace('#','');
    if ( hash!="" ) {
        $('.blog-filters li[data-filter=".'+hash+'"]').click();
    }
	
	/*//Video
	var trigger = $("body").find('[data-toggle="modal"]');
	trigger.click(function (e) {
		e.preventDefault();
		var theModal = $(this).data("target"),
			videoSRC = $(this).attr("href"),
			videoSRCauto = videoSRC + "?autoplay=1";
		$(theModal + ' iframe').attr('src', videoSRCauto);
		$(theModal + ' button.close').click(function () {
			$(theModal + ' iframe').attr('src', videoSRC);
		});
	});*/
	
	// Align Elements Vertically
/*	alignVertical();
	alignBottom();
	
	$(window).resize(function(){
		alignVertical();
		alignBottom();
	});*/

});