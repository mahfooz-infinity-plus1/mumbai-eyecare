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


    // $(".doctor-carousel").owlCarousel({
    //     loop: true,
    //     margin: 30,
    //     autoplay: true,
    //     autoplayTimeout: 0,        // Continuous movement
    //     autoplaySpeed: 8000,       // Adjust for flow speed
    //     smartSpeed: 8000,          // Match for constant speed
    //     slideTransition: 'linear', // Required for smooth continuous movement
    //     autoplayHoverPause: false, // Prevents jerky stops on hover
    //     dots: false,
    //     nav: false,
    //     responsive: {
    //         0: { items: 1 },
    //         600: { items: 2 },
    //         1000: { items: 3 }
    //     },
    // });

    // // Start immediately
    // $(".doctor-carousel").trigger('play.owl.autoplay', [1]);

    $('.doctor-carousel').owlCarousel({
        loop: true,
        items: 3,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplaySpeed: 3000,
        smartSpeed: 3000,
        dots: false,
        nav: false,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
        }
    })

});