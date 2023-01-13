$(document).ready(function () {
  //owl-sponsers
  $(".owl-carousel.owl-sponsers").owlCarousel({
    navigation : true,
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
    navigation : true,
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

  $(document).ready(function () {
    //Initialize tooltips
    $(".nav-tabs > li a[title]").tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on("show.bs.tab", function (e) {
      var $target = $(e.target);

      if ($target.parent().hasClass("disabled")) {
        return false;
      }
    });

    $(".next-step").click(function (e) {
      var $active = $(".wizard .nav-tabs li.active");
      $active.next().removeClass("disabled");
      nextTab($active);
    });
    $(".prev-step").click(function (e) {
      var $active = $(".wizard .nav-tabs li.active");
      prevTab($active);
    });
  });

  function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
  }
  function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
  }


  //counter increament and decreament
  $(".counter__increment, .counter__decrement").click(function(e)
		{
			var $this = $(this);
			var $counter__input = $(this).parent().find(".counter__input");
			var $currentVal = parseInt($(this).parent().find(".counter__input").val());

			//Increment
			if ($currentVal != NaN && $this.hasClass('counter__increment'))
			{
				$counter__input.val($currentVal + 1);
			}
			//Decrement
			else if ($currentVal != NaN && $this.hasClass('counter__decrement'))
			{
				if ($currentVal >= 1) {
					$counter__input.val($currentVal - 1);
				}
			}
		});
  new WOW().init();
});
