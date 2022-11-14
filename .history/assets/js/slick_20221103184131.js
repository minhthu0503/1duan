$(document).ready(function () {
    $(".slick__slider").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        draggable: false,
        autoplay: true,
        autoplayspeed: 2000,
        prevArrow: "<button type='button' class='slick-prev slick-arrow'><i class='fa-solid fa-chevron-left'></i></button>",
        nextArrow: "<button type='button' class='slick-next slick-arrow'><i class='fa-solid fa-chevron-right'></i></button>",
        dots: false,
        responsive: [
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,

                }
            },

            {
                breakpoint: 569,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },

            {
                breakpoint: 359,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },

        ]
    }
    );
});
