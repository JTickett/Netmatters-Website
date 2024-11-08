
// Stuff to do once the DOM is ready.
$(document).ready(function(){

    

    $('.carousel-slider').slick({
        autoplay: false,
        autoplaySpeed: 4000,
        slidesToShow: 1,
        arrows: false,
        dots: true,
        adaptiveHeight: true
    });

    $('.logowrapper').slick({
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
                    infinite: true
                }
            },
            {
                breakpoint: 996,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll:1
                }
            }
        ]
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

