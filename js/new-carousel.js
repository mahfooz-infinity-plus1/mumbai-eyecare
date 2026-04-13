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
        nav: true,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: true
            },
        }
    })

    $('.quick-links-carousel').owlCarousel({
        loop: true,
        items: 3,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplaySpeed: 1500,
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
            1000: {
                items: 5,
                nav: false
            }
        }
    });

    const btn = document.getElementById("scrollTopBtn");
    const circle = document.querySelector(".progress-ring circle");

    const radius = 26;
    const circumference = 2 * Math.PI * radius;

    circle.style.strokeDasharray = circumference;
    circle.style.strokeDashoffset = circumference;

    window.addEventListener("scroll", () => {
        const scrollTop = window.scrollY;
        const docHeight = document.body.scrollHeight - window.innerHeight;
        const progress = scrollTop / docHeight;

        const offset = circumference - progress * circumference;
        circle.style.strokeDashoffset = offset;
    });

    btn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

});