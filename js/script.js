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