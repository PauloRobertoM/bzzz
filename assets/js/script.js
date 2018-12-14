(function($, window) {
    $('#owl-slide').owlCarousel({
        loop: true,
        center: true,
        autoplay: true,
        margin: 30,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('#owl-videos').owlCarousel({
        loop: true,
        center: true,
        autoplay: true,
        margin: 30,
        nav: false,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
})(jQuery, window);