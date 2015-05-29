/*
 * Appica 2 HTML5 Theme v1.1
 * Copyright 2015 8Guild.com
 * All scripts for Android Version
 */


/*Document Ready*//////////////////////////////////////////////////////////////////////////////////////////////////////
jQuery(document).ready(function($) {
	'use strict';
	

	// Cashing variables
	var intro = $('.intro');
	var content = $('.content-wrap');
	var footer = $('.footer');


	// Checking with Modernizr if it is touch device
	// Touch Devices
	if (Modernizr.touch){

		// Window load event
		$(window).load(function() {
			/** Keeping Logo and Phone at the bottom of teh page
			**********************************************************/
			$('.intro .column-wrap').css('height', $(window).height());
		});

		// Window resize event
		$(window).resize(function() {
			/** Keeping Logo and Phone at the bottom of teh page
			**********************************************************/
			$('.intro .column-wrap').css('height', $(window).height());
		});

		/** Sticky Navbar
		*******************************************/
		$(window).on('load', function(){
			if($('.navbar-sticky').length > 0) {
				var sticky = new Waypoint.Sticky({
				  element: $('.navbar-sticky')[0]
				});
			}
		});

		// No-touch Devices
	} else {

		// Window load event
		$(window).load(function() {

			/** Keeping Logo and Phone at the bottom of teh page
			**********************************************************/
			$('.intro .column-wrap').css('height', $(window).height());

			/** Pushing Content down to the height equal to Intro height + height necessary to finish animation
			******************************************************************************************************/
			content.css('margin-top', intro.height());

			/** Content 'margin-bottom' equals footer height to reveal footer
			********************************************************************************/
			if($('.fixed-footer').length > 0) {
				content.css('margin-bottom', footer.outerHeight());
			}
			
			// Animation delay for intro features
			$('.intro-features .icon-block').each(function(){
				var transDelay = $(this).data('transition-delay');
				$(this).css({'transition-delay': transDelay + 'ms'});
			});


			// Detecting various OS / devices / browsers and adding classes to <html>
			Detectizr.detect({detectScreen:false});
		});

		// Window resize event
		$(window).resize(function() {

			/** Keeping Logo and Phone at the bottom of teh page
			**********************************************************/
			$('.intro .column-wrap').css('height', $(window).height());

			/** Pushing Content down to the height equal to Intro section height + height necessary to finish animation
			*************************************************************************************************************/
			content.css('margin-top', intro.height()*1.5);

			/** Content 'margin-bottom' equals footer height to reveal footer
			********************************************************************************/
			if($('.fixed-footer').length > 0) {
				content.css('margin-bottom', footer.outerHeight());
			}

		});


		/** Animating Intro Section
		*********************************/
		$(window).scroll( function() {
	    if ($(window).scrollTop() > 15) {
	      intro.addClass('transformed');
	    } else {
	      intro.removeClass('transformed');
	    }
	  });


		/** Sticky Navbar and Footer
		*******************************************/
		$(window).on('load', function(){
			if($('.navbar-sticky').length > 0) {
				var waypoint = new Waypoint.Sticky({
				  element: $('.navbar-sticky')[0],
			    handler: function(direction) {
				  	if(direction == 'down') {
				      footer.addClass('footer-fixed-bottom');
				      intro.addClass('transparent');
				  	} else {
					    footer.removeClass('footer-fixed-bottom');
					    intro.removeClass('transparent');
				  	}
				  }
				});
			}
		});

	} // Modernizr End

	
	/** Waves Effect (on Buttons)
	*******************************************/
	Waves.init({duration: 600});
	

	/** Material Design Form Controls
	**********************************************************/
	// Material Effect on Inputs
	var $input = $('.form-control input, .form-control textarea');
	$input.on('focus', function(){
		if (this.value == '') {
			$(this).parent().addClass('active');
		}
	});
	$input.on('blur', function(){
		if (this.value == '') {
			$(this).parent().removeClass('active');
		}
	});

	/** Search Form Control
	**********************************************************/
	var $input = $('.form-control input, .form-control textarea');
	$input.on('focus', function(){
		if (this.value == '') {
			$(this).parent().addClass('active');
		}
	});
	$input.on('blur', function(){
		if (this.value == '') {
			$(this).parent().removeClass('active');
		}
	});


	/** Off-Canvas Navigation Open/Close
	*******************************************/
	var openOffcanvas = $('[data-offcanvas="open"]');
	var closeOffcanvas = $('[data-offcanvas="close"]');
	var offcanvasNav = $('.offcanvas-nav');
	openOffcanvas.click(function(){
		offcanvasNav.addClass('open');
		$('body').append('<div class="offcanvas-backdrop"></div>');
	});
	closeOffcanvas.click(function(){
		offcanvasNav.removeClass('open');
		$('.offcanvas-backdrop').remove();
	});
	$(document).on('click', '.offcanvas-backdrop', function(){
		offcanvasNav.removeClass('open');
		$('.offcanvas-backdrop').remove();
	});

	/** Searchbox Expand
	*********************************************************/
	var searchBox = $('.search-box');
	var searchInput = $('.search-box input');
	$('body').on('click', function(){
		if (searchInput.val() == '') {
			searchBox.removeClass('open');
		} else {
			// Do nothing for now
		}
	});
	searchBox.click(function(e){
		e.stopPropagation();
	});
	$('.search-box .search-toggle').click(function(){
		$(this).parent().toggleClass('open');
		setTimeout(function() {
			if ($('#search-field').length > 0) {
			  $('#search-field').focus();
			}
		}, 500);
	});


	/** Sign in / Sign up form switching (in modal)
	*********************************************************/
	$('.form-switch a').click(function(e){
		var form = $(this).attr('href');
		e.preventDefault();
		$(form + '> a').click();
	});


	/** Switch to Sign In/Sign Up Form when Modal open (For separate Sign In/Sign Up button)
	*****************************************************************************************/
	$('[data-modal-form="sign-in"]').click(function(){
		$('#form-2 a').click();
	});
	$('[data-modal-form="sign-up"]').click(function(){
		$('#form-1 a').click();
	});


	/** Feature Tabs (Changing screens of Tablet and Phone)
	*********************************************************/
  $('.feature-tabs .nav-tabs li a').on('click', function() {
	  var currentPhoneSlide = $(this).data("phone");
	  var currentTabletSlide = $(this).data("tablet");
	  $(".devices .phone .screens li").removeClass("active");
	  $(".devices .tablet .screens li").removeClass("active");
	  $(currentPhoneSlide).addClass("active");
	  $(currentTabletSlide).addClass("active");
  });

  /** Feature Tabs Autoswitching
	*********************************************************/
	if($('.feature-tabs .nav-tabs[data-autoswitch]').length > 0) {
    var changeInterval = $('.feature-tabs .nav-tabs').data('interval');
		var tabCarousel = setInterval(function() {
	        var tabs = $('.feature-tabs .nav-tabs > li'),
	            active = tabs.filter('.active'),
	            next = active.next('li'),
	            toClick = next.length ? next.find('a') : tabs.eq(0).find('a');

	        toClick.trigger('click');
	  }, changeInterval);
	}
	

	/** Form Validation
	*********************************************************/
	if($('#signin-form').length > 0) {
		$('#signin-form').validate();
	}
	if($('#signup-form').length > 0) {
		$('#signup-form').validate();
	}
	if($('#comment-form').length > 0) {
		$('#comment-form').validate();
	}
	if($('#form-demo').length > 0) {
		$('#form-demo').validate();
	}

	
	/** Custom Horizontal Scrollbar for Gallery/Blog (Home Page)
	**************************************************************/
  //$(window).load(function(){
  //  $('.scroller').mCustomScrollbar({
	//		axis:"x",
	//		theme:"dark",
	//		scrollInertia: 300,
	//		advanced:{autoExpandHorizontalScroll:true}
  //  });
  //});


	/** Custom Vertical Scrollbar for Off-Canvas Navigation
	**************************************************************/
	var navBodyScroll = $('.nav-body .overflow');
  $(window).load(function(){
  	navBodyScroll.height($(window).height() - $('.nav-head').height()-80);
    navBodyScroll.mCustomScrollbar({
			theme:"dark",
			scrollInertia: 300,
			scrollbarPosition:"outside"
    });
  });
  $(window).resize(function(){
  	navBodyScroll.height($(window).height() - $('.nav-head').height()-80);
  });

    $( '.scrollable' ).bind( 'mousewheel DOMMouseScroll', function ( e ) {
        var e0 = e.originalEvent,
            delta = e0.wheelDelta || -e0.detail;

        this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;
        e.preventDefault();
    });

	/** App Gallery
	*********************************************************/
	if($('.app-gallery a').length > 0) {
		$('.app-gallery a').magnificPopup({ 
		  type: 'image',
		  gallery:{
		    enabled:true
		  },
			removalDelay: 300,
		  mainClass: 'mfp-fade'
		});
	}


	/** Video Popup
	*********************************************************/
	if($('.video-popup').length > 0) {
		$('.video-popup').magnificPopup({
			type:'iframe',
			removalDelay: 300,

		  // Class that is added to popup wrapper and background
		  // apply CSS animations just to this exact popup
		  mainClass: 'mfp-fade'
		});
	}

	
	/** Gallery
	*********************************************************/
	// Images
	if($('.popup-image').length > 0) {
		$('.popup-image').magnificPopup({
			type:'image',
			gallery:{
		    enabled:true
		  },
			removalDelay: 300,
		  mainClass: 'mfp-fade'
		});
	}

	// Video
	if($('.popup-video').length > 0) {
		$('.popup-video').magnificPopup({
			type:'iframe',
			removalDelay: 300,
		  mainClass: 'mfp-fade'
		});
	}


	/** Masony Grid (Isotope) + Filtering
	*********************************************************/
	$(window).load(function(){
		if($('.masonry-grid').length > 0) {
		  $('.masonry-grid').isotope({
			  itemSelector: '.item',
			  masonry: {
			    columnWidth: '.grid-sizer',
			    gutter: '.gutter-sizer'
			  }
		  });
		}
		if($('.filter-grid').length > 0) {
		  var grid = $('.filter-grid');
			$('.nav-filters').on( 'click', 'a', function(e) {
				e.preventDefault();
				$('.nav-filters li').removeClass('active');
				$(this).parent().addClass('active');
			  var filterValue = $(this).attr('data-filter');
			  grid.isotope({ filter: filterValue });
			});
		}
	});


	/** Pagination Slider
	*********************************************************/
	if($('.page-slider input').length > 0) {
		$('.page-slider input').slider({
			formatter: function(value) {
				return value;
			}
		});
	}


	/** Bar Charts
	*********************************************************/
	$(window).load(function(){
		$('.bar-charts .chart').each(function(){
			var percentage = $(this).data('percentage');
			$(this).find('.bar').css('height', percentage + '%');
		});
	});


	///////////////////////////////////////////////////////////////////////
	/////////  INTERNAL ANCHOR LINKS SCROLLING (NAVIGATION)  //////////////
	//////////////////////////////////////////////////////////////////////
	
	$(".scroll").click(function(event){		
		var $elemOffsetTop = $(this).data('offset-top');
		$('html').velocity("scroll", { offset:$(this.hash).offset().top-$elemOffsetTop, duration: 1000, easing:'easeOutExpo'});
		event.preventDefault();
	});
	$('.scrollup').click(function(e){
		e.preventDefault();
		$('html').velocity("scroll", { offset: 0, duration: 1400, mobileHA: false });
	});


	//SCROLL-SPY
	// Cache selectors
	var lastId,
		topMenu = $("#scroll-nav"),
		topMenuHeight = topMenu.outerHeight(),
		// All list items
		menuItems = topMenu.find("a"),
		// Anchors corresponding to menu items
		scrollItems = menuItems.map(function(){
		  var item = $($(this).attr("href"));
		  if (item.length) { return item; }
		});
	
	// Bind to scroll
	$(window).scroll(function(){
	   // Get container scroll position
	   var fromTop = $(this).scrollTop()+topMenuHeight+200;
	   
	   // Get id of current scroll item
	   var cur = scrollItems.map(function(){
		 if ($(this).offset().top < fromTop)
		   return this;
	   });
	   // Get the id of the current element
	   cur = cur[cur.length-1];
	   var id = cur && cur.length ? cur[0].id : "";
	   
	   if (lastId !== id) {
		   lastId = id;
		   // Set/remove active class
		   menuItems
			 .parent().removeClass("active")
			 .end().filter("[href=#"+id+"]").parent().addClass("active");
	   }
	});

});/*Document Ready End*/////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
/////////////////////////  Google Maps  //////////////////////////////
//////////////////////////////////////////////////////////////////////
var geocoder;
var map;
var query = $('.google-map').data('location');
var zoom = $('.google-map').data('zoom');

function initialize() {
	
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(-34.397, 150.644);
	
		var mapOptions = {
			center: latlng,
			zoom: zoom,
			scrollwheel: false,
			disableDefaultUI: true,
			styles: [
                {
                    "featureType": "landscape.man_made",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f7f1df"
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#d0e3b4"
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural.terrain",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi.medical",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#fbd3da"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#bde6ab"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffe15f"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#efd151"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "black"
                        }
                    ]
                },
                {
                    "featureType": "transit.station.airport",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#cfb2db"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#a2daf2"
                        }
                    ]
                }
	]
		};
		
		map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		
		codeAddress();
}

function codeAddress() {
	var image = '/img/map-marker.png';
	var address = query;
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location,
					icon: image,
					title: 'My Office'
			});
		} else {
			alert('Geocode was not successful for the following reason: ' + status);
		}
	});
}

if($('#map-canvas').length > 0) {
	google.maps.event.addDomListener(window, 'load', initialize);
}