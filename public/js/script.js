(function ($) {
    "use strict";

    // Preloader
      $(window).on('load', function() {
        if ($('#loader').length) {
          $('#loader').delay(100).fadeOut('slow', function() {
            $(this).remove();
          });
        }
      });

    // Back to top button
    //   $(window).scroll(function() {
    //     if ($(this).scrollTop() > 100) {
    //       $('.back-to-top').fadeIn('slow');
    //     } else {
    //       $('.back-to-top').fadeOut('slow');
    //     }
    //   });
    //   $('.back-to-top').click(function() {
    //     $('html, body').animate({
    //       scrollTop: 0
    //     }, 1500, 'easeInOutExpo');
    //     return false;
    //   });

   //  var nav = $("nav");
   //  var navHeight = nav.outerHeight();

    /*--/ ScrollReveal /Easy scroll animations for web and mobile browsers /--*/
    //   window.sr = ScrollReveal();
    //   sr.reveal('.foo', {
    //     duration: 1000,
    //     delay: 15
    //   });

   
  
})(jQuery);

