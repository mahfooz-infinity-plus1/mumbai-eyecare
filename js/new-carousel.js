$(document).ready(function () {

    $('.banner-owl').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: false,
        dots: false,
        smartSpeed: 900,


    });


    $(".doctor-carousel").owlCarousel({
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 1,        // very small timeout to avoid initial pause
        smartSpeed: 5000,          // duration of slide transition
        slideTransition: 'linear', // smooth linear movement
        autoplayHoverPause: true,
        dots: false,
        nav: false,
        responsive: {
            0: { items: 1 },
            600: { items: 3 },
            1000: { items: 3 }
        },
    });

    // Start immediately
    $(".doctor-carousel").trigger('play.owl.autoplay', [1]);

});