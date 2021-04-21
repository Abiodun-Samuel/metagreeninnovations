(function ($) {
    "use strict";

    // Preloader
      // $(window).on('load', function() {
      //   if ($('#loader').length) {
      //     $('#loader').delay(100).fadeOut('slow', function() {
      //       $(this).remove();
      //     });
      //   }
      // });

// Hide and Show navbar on scroll
  $(document).ready(function() {
  var previousScroll = 0;
  $(window).scroll(function() {
    var currentScroll = $(this).scrollTop();
    if (currentScroll > 0 && currentScroll < $(document).height() - $(window).height()) {

      if (currentScroll > previousScroll) {
        window.setTimeout(hideNav, 300);
      } else {
        window.setTimeout(showNav, 300);
      }
      previousScroll = currentScroll;
    }
  });

  function hideNav() {
    $(".navbar").removeClass("is-visible").addClass("is-hidden");
  }
  function showNav() {
    $(".navbar").removeClass("is-hidden").addClass("is-visible");
  }

});
   
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function () {
        $("html, body").animate(
            {
                scrollTop: 0,
            },
            500,
            "linear"
        );
        return false;
    });

   
   // Animate on scroll Init
  function aos_init() {
    AOS.init({
      once: false
    });
  }
  $(window).on('load', function() {
    aos_init();
  });
   


    // $('.projectgallery').venobox(); 
  $('.venobox').venobox({
    numeratio: true,
    autoplay: true,
    arrowsColor: "#d58943",
    numerationPosition: 'bottom',
    spinner: 'cube-grid',
    spinColor: '#d58943',
    closeColor:'#d58943'
  });
  
})(jQuery);

  var typed = new Typed('#typed', {
    strings: ['Homes.', 'Businesses.', 'Offices.', 'SMEs.','Churches.', 'And More.'],
    smartBackspace: true,
    typeSpeed: 60,
    backSpeed: 30,
    loop: true,
    loopCount: Infinity,
  });

// lazy load for all images 
// let img = document.querySelector(".xyz");
// console.log(img);
// img.loading = "lazy";

