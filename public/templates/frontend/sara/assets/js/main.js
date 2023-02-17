(function ($) {
  "use strict";

  /** ------- Pre Loader **/
  $(window).on("load", function () {
    setTimeout(function () {
      $("body").addClass("loaded");
      // Scroll animation init
      window.sr = new scrollReveal();
    }, 1000);

    /* =============== magnificPopup =============== */
    $(".portfolio-lightbox").magnificPopup({
      type: "image",
      gallery: {
        enabled: true,
      },
    });
  });


  var fullHeight = function () {
    $(".js-fullheight").css("height", $(window).height());
    $(window).resize(function () {
      $(".js-fullheight").css("height", $(window).height());
    });
  };
  fullHeight();

  $(".counter-area").glassyWorms({
    colors: ["#c1f1aa"],
  });

  // Tooltip
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });

  /* ================================================= */
  /*	Navbar
  /* ================================================= */

  $('[href*="#"]:not([href="#"])').on("click", function (e) {
    $("html,body").animate(
      {
        scrollTop: $($(this).attr("href")).offset().top,
      },
      600
    );
    e.preventDefault();
  });

  // Mobile Navbar
  $(".openNav, .mobile-menu a").on("click", function () {
    $(".openNav").toggleClass("active");
    $(".mobile-nav").toggleClass("active");
  });

  /* ================================================= */
  /*	Works Area Filter js
  /* ================================================= */

  $(document).on("load", function () {
    if ($("#works")) {
      var $grid = $(".grid").isotope({
        itemSelector: ".grid-item",
        percentPosition: true,
        masonry: {
          columnWidth: ".grid-sizer",
        },
      });
    }
  });

  /* ==================================================== */
  /*	Timer count "Facts Section"
     /* ==================================================== */

  $(".counter").each(function () {
    $(this).appear(
      function () {
        $(this)
          .prop("counter", 0)
          .animate(
            {
              counter: $(this).text(),
            },
            {
              duration: 4e3,
              easing: "swing",
              step: function (now) {
                $(this).text(Math.ceil(now));
              },
            }
          );
      },
      {
        accX: 0,
        accY: 0,
      }
    );
  });

  /* ================================================= */
  /*	Testimonial Slider
  /* ================================================= */
  $(".carousel").on("slid.bs.carousel", function () {
    $(".carousel-indicators2 li").removeClass("active");
    var indicators = $(".carousel-indicators li.active").data("slide-to");
    var a = $(".carousel-indicators2")
      .find("[data-slide-to='" + indicators + "']")
      .addClass("active");
    console.log(indicators);
  });

})(jQuery);
