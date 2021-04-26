   $(document).ready(function () {
        var previousScroll = 0;
        $(window).scroll(function () {
            var currentScroll = $(this).scrollTop();
            if (
                currentScroll > 0 &&
                currentScroll < $(document).height() - $(window).height()
            ) {
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

    // Animate on scroll Init
    function aos_init() {
        AOS.init({
            once: false,
             mirror:true,
        });
    }
    $(window).on("load", function () {
        aos_init();
    });

     $(".venobox").venobox({
        numeratio: true,
        autoplay: true,
        arrowsColor: "#d58943",
        numerationPosition: "bottom",
        spinner: "cube-grid",
        spinColor: "#d58943",
         closeColor: "#d58943",
     });

 // Hero Carousel
    $(".carousel").carousel({
        interval: 1500,
        pause: false,
        wrap: true,
        keyboard: false,
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

// typed js
    var typed = new Typed("#typed", {
        strings: [
            "Homes.",
            "Hospitals.",
            "Offices.",
            "SMEs.",
            "Churches.",
            "And More.",
        ],
        smartBackspace: true,
        typeSpeed: 60,
        backSpeed: 30,
        loop: true,
        loopCount: Infinity,
    });

// gsap
// gsap.registerPlugin(ScrollTrigger);
var rule = CSSRulePlugin.getRule("#hero h1:after");
var tl = gsap.timeline({ defaults: { duration: 0.6 } });
tl.to(rule, { cssRule: { scaleY: 0 } })
    .from(".anim", { y: 50, stagger: 0.3, opacity: 0 })
    .from(".anim-img", { x: 50, opacity: 0 });

(function($) {
   "use strict";

  // Preloader
//   $(window).on('load', function() {
//     if ($('#loader').length) {
//       $('#loader').delay(100).fadeOut('slow', function() {
//         $(this).remove();
//       });
//     }
//   });


})(jQuery);
