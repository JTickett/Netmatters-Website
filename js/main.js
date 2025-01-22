document.addEventListener("DOMContentLoaded", function () {
  $(".carousel-slider").slick({
    autoplay: true,
    autoplaySpeed: 4000,
    slidesToShow: 1,
    arrows: false,
    dots: true,
    adaptiveHeight: true,
  });

  $(".logowrapper").slick({
    arrows: false,
    autoplay: true,
    slidesToShow: 7,
    draggable: false,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 996,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // Variable to track if the menu is open or not. Default is false.
  let menuOpen = false;

  $(".burger").on("click", function () {
    setTimeout(() => {
      $(".burger").toggleClass("active");
      $("#page-wrapper").toggleClass("sidebar-visible");
      $("#sidebar").toggleClass("sidebar-visible");
      menuOpen = true;
    }, 50);
  });

  $("#page-wrapper").on("click", function () {
    if (menuOpen) {
      setTimeout(() => {
        $(".burger").removeClass("active");
        $("#page-wrapper").removeClass("sidebar-visible");
        $("#sidebar").removeClass("sidebar-visible");
        menuOpen = false;
      }, 50);
    }
  });
});
