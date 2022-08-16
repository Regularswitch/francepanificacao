jQuery('document').ready(function ($) {

    if($('.wrapper').hasClass('single') || $('.wrapper').hasClass('home')) {
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            nextButton: '.swiper-button-next',

            slidesPerView: 'auto',
            spaceBetween: 0,

            loop: true,
            //
            // centeredSlides: true
            autoplay: 5000

        });

        setTimeout(function () {
            $('.swiper-title').text($('.swiper-slide-active').data('title'));
            $('.swiper-title').addClass('show');
        }, 400);

        swiper.on('slideChangeStart', function () {
            // console.log($('.swiper-slide-active').data('title'));
            $('.swiper-title').addClass('leave');
            setTimeout(function () {
                $('.swiper-title').removeClass('leave');
                $('.swiper-title').removeClass('show');
                setTimeout(function () {
                    $('.swiper-title').text($('.swiper-slide-active').data('title'));
                    $('.swiper-title').addClass('show');
                }, 400);
            }, 400);
        });

        if($('.wrapper').hasClass('single')) {
            $('.swiper-container').height($('.swiper-container').width());
        }
        $(window).on('resize', function () {
            if($('.wrapper').hasClass('single')) {
                $('.swiper-container').height($('.swiper-container').width());
            }
        });
    }

});
