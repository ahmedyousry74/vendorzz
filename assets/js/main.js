$(document).ready(function () {
  //owl-sponsers
  $(".owl-carousel.owl-sponsers").owlCarousel({
    loop: true,
    margin: 10,
    autoplayTimeout: 2000,
    autoplay: true,
    autoplayHoverPause: true,
    center: true,
    nav: false,
    rtl: true,
    responsive: {
      0: {
        items: 2,
      },
      700: {
        items: 3,
      },
      1600: {
        items: 5,
      },
    },
  });

  $(".owl-carousel.owl-testimonials").owlCarousel({
    loop: true,
    center: true,
    margin: 15,
    autoplayTimeout: 3000,
    autoplay: true,
    autoplayHoverPause: true,
    responsiveClass: true,
    nav: false,
    rtl: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      680: {
        items: 2,
        nav: false,
        loop: false,
      },
      1000: {
        items: 3,
        nav: true,
      },
    },
  });

  //Counter
  $(".counter-value").each(function () {
    $(this)
      .prop("Counter", 0)
      .animate(
        {
          Counter: $(this).text(),
        },
        {
          duration: 3500,
          easing: "swing",
          step: function (now) {
            $(this).text(Math.ceil(now));
          },
        }
      );
  });

  new WOW().init();
});
