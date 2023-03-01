(function ($) {

// timeline slider
$(function () {

    if ($('.builder .timeline--list')) {
        $('.timeline--list').slick({
            arrows: true,
            infinite: false,
            nextArrow: '.timeline--next',
            prevArrow: '.timeline--prev',
            responsive: [
                {
                    breakpoint: 680,
                    settings: {
                        slidesToShow: 1,
                    }
                },
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 4,
                    }
                }
            ],
            slidesToShow: 5,
            slidesToScroll: 1,
            variableWidth: true,           
        });

        $('.timeline--reveal').on('click', function () {
            var parentSlide = $(this).closest('.timeline--item');
            parentSlide.addClass('toggled');
        })
    }

});  

})(jQuery);