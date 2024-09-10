$(document).ready(function(){

    const scrollLimit = 217;
    let lastScroll = 0;
    const header = $('#header-wrapper')

    $(document).on("scroll", function(e){

        const currentScroll = window.scrollY;
        //  Checking if the user is not scrolling (reached the top).
        if (currentScroll <= 0) {
            header.removeClass('sticky-head-down sticky-head-up');
        }
        //  Checking if the user is scrolling down
        else if (currentScroll > scrollLimit && currentScroll > lastScroll) {
            header.removeClass('sticky-head-up');
            header.addClass('sticky-head-down');
        }
        //  Checking if the user is scrolling up
        else if (currentScroll < lastScroll){
            header.addClass('sticky-head-up');
            header.removeClass('sticky-head-down');
        }

        //  Updating the last scroll position
        lastScroll = currentScroll;

    });

});