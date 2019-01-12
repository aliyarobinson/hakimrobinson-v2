/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );
} )();

/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isIe = /(trident|msie)/i.test( navigator.userAgent );

	if ( isIe && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
} )();

// "use strict"; 

var HR = HR || {};

(function($){
 var siteHeader = $('.site-header');
 var siteNav = $('.site-nav');
 var mobileBtn = $('.menu-btn');

  HR = {
    pageAreaElem: $('html'),
    sideNavElem: $('.site-nav'),
    siteNavBtnElem: $('.site-nav-btn'), 
    siteNavLinkElem: $('.list-nav a'), 
    clickHandler: ('ontouchstart' in document.documentElement ? "touchstart" : "click"),

    imagesLoaded: function() {
      $('image, img').load(function() {
        console.log('imagesLoaded');
        return true;
      });
    },

    
   
    init: function () {
      console.log('init');

      /**************************************/
      /*   Scroll Event Code
      /***************************************************/
      $(window).scroll(function() {
        HR.addTopLink();
      });

      // $('.top').on('click', function(e){
      //   e.preventDefault();
      //   HR.scrollTo( e, 'html,body');
      // });

      // $('.soft-scroll').on('click', function(e){
      //   e.preventDefault();
      //   var scrollElem = $(this).attr('href');
      //   HR.scrollTo( e, scrollElem);
      // });

      
      /**************************************/
      /*   Video Click image swap
      /***************************************************/
      $(document).on( HR.clickHandler, '.video', function(e) { 
        e.preventDefault();
        console.log('!!!'); 
        var vidID = $(this).attr('id');


        var iframe_url = "https://www.youtube.com/embed/" + vidID + "?rel=0&autoplay=1&autohide=1&showinfo=0";
    
        // The height and width of the iFrame should be the same as parent
        var iframe = $('<iframe/>', {'frameborder': '0', 'allowfullscreen': '', 'src': iframe_url });

        // Replace the YouTube thumbnail with YouTube HTML5 Player
        $(this).append(iframe);

        $('.video-mod').addClass('active');

      });

      $(document).on( HR.clickHandler, '.close', function(e) { 
        e.preventDefault();
        console.log('!!!'); 
        $('.video-mod').removeClass('active');
      });


      /**************************************/
      /*   Site Nav button animation on click
      /***************************************************/
      mobileBtn.on( HR.clickHandler , function(){
        console.log('nav menu btn clicked - ', HR.clickHandler);

        mobileBtn.toggleClass('active');
        siteNav.toggleClass('open');
      }); // end on click .site-nav-btn

      /**************************************/
      /*   Window Load
      /***************************************************/
      window.onload = function (e,afterPages) {

        if(HR.isMobile()){
          siteHeader.addClass('mobile');
        } 
      }

      /**************************************/
      /*   Window Resize
      /***************************************************/
      $(window).on('resize', function() {

        if(HR.isMobile()){
            siteHeader.addClass('mobile');
        } else{
            siteHeader.removeClass('mobile');
        }
      });
    },

    isMobile: function(){
      var mobileWidth = 650;
      var isiPad = navigator.userAgent.match(/iPad/i) != null;

      if (($(window).width() < mobileWidth) || isiPad  ) {
        console.log('is mobile');
        return true;
      } else {
        console.log('not mobile');
        return false;
      }
    },

    isShortMobile: function(){
      console.log('shortMobile called');

      var mobileHeight = 400;

      if (($(window).height() < mobileHeight)) {
      console.log('shortMobile TRUE');

        return true;
      } else {
        return false;
      }
    },

    addTopLink: function(argument) {
      var yPos = -($(window).scrollTop()); 

      if(yPos <= -160){
        // $('.top').removeClass('hidden');
        siteHeader.addClass('small');
      }else{
        // $('.top').addClass('hidden');
        siteHeader.removeClass('small');

      }
    },

    scrollTo: function(e, elem){
     $('html,body').animate({                                                             
          scrollTop: $(elem).offset().top
      }, 1000);
    }
  };
})(jQuery); // end SEF

HR.init();