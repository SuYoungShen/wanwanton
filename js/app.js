/*
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
*/ 

/* ====================================================
                        ANIMATION
   ================================================= */
    $(function () {
        // animate on scroll
        new WOW().init();
    });

/* ====================================================
                        NAVIGATION
   ================================================= */

(function($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 83)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 84
    });

    // Collapse Navbar
    var navbarCollapse = function() {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);

    // Hide navbar when modals trigger
    $('.portfolio-modal').on('show.bs.modal', function(e) {
        $(".navbar").addClass("d-none");
    })
    $('.portfolio-modal').on('hidden.bs.modal', function(e) {
        $(".navbar").removeClass("d-none");
    })

})(jQuery); // End of use strict


/*====================================================
                    TESTIMONIALS
====================================================*/
$(function() {
    $("#testimonial-slider").owlCarousel({
        items: 1,
        smartSpeed: 700,
        autoplay: true,
        loop: true,
        pagination: true,
        slideSpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });
});

/* ====================================================
                       BACK TO TOP
=======================================================*/
  (function($) {

      $(window).scroll(function() {

          if ($(this).scrollTop() < 50) {
              // hide nav
              $("nav").removeClass("ss-top-nav");
              $("#back-to-top").fadeOut();

          } else {
              // show nav
              $("nav").addClass("ss-top-nav");
              $("#back-to-top").fadeIn();
          }
      });
  })(jQuery); // End of use strict