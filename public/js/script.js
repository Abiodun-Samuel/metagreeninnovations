
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

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
   $('.back-to-top').click(function () {
   
    $('html, body').animate({
      scrollTop: 0
    }, 500, 'linear');
    return false;
  });

})(jQuery);

// Mobile Nav
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');
const navLinks = document.querySelectorAll('.site-navbar a');
const body = document.querySelector('body');

// load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  // nav links click event
  navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open');
   navMenu.classList.toggle('open');
   body.classList.toggle('hide');
}

// navLinkClick function
function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
}
