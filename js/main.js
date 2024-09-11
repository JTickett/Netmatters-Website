
// Stuff to do once the DOM is ready.
$(document).ready(function(){

    

    $('.carousel-slider').slick({
        //autoplay: true,
        //autoplaySpeed: 4000,
        slidesToShow: 1,
        arrows: false,
        dots: true,
        adaptiveHeight: true
    });

    // Variable to track if the menu is open or not. Default is false. 
    let menuOpen = false;

    //$(".burger").click(() => ($(".burger").toggleClass("active")));
    //above arrow function does the same, but I find it less readable.
    $(".burger").click(function(){
        setTimeout(() => {
			$(".burger").toggleClass("active");
            $("#page-wrapper").toggleClass("sidebar-visible");
            $("#sidebar").toggleClass("sidebar-visible");
            menuOpen = true;
		  }, 50);
    });

    $("#page-wrapper").click(function(){

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

