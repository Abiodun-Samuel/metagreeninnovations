(function ($) {
    "use strict";

    // Animate on scroll Init
    function aos_init() {
        AOS.init({
            once: false,
            mirror: true,
        });
    }
    $(window).on("load", function () {
        aos_init();
    });

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

    // venobox
    var veno = document.querySelector(".venobox");
    if (veno) {
        $(".venobox").venobox({
            numeratio: true,
            autoplay: true,
            arrowsColor: "#d58943",
            numerationPosition: "bottom",
            spinner: "cube-grid",
            spinColor: "#d58943",
            closeColor: "#d58943",
        });
    }

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

    // Footer Year
    document.getElementById("year").innerHTML = new Date().getFullYear();

})(jQuery);
