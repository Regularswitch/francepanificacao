jQuery('document').ready(function ($) {

    $('.menu__burger').on('click', function() {
        $('.menu__burger .burger').toggleClass('opened');
        if($('.menu__burger .burger').hasClass('opened')) {
            // pageYOffset = openPopup();
            $('.menu__mobile').addClass('opened');
            $('body').addClass('noscroll');
            // $('.wrapper').css({
            //     'position': 'fixed',
            //     // 'top': -pageYOffset + 'px',
            //     'overflow-y': 'hidden'
            // });
        } else {
            $('.menu__mobile').removeClass('opened');
            $('body').removeClass('noscroll');
            // $('.wrapper').css({
            //     'position': 'static','overflow-y': 'scroll'
            // });
            // $('.wrapper').scrollTop(pageYOffset);
        }

    });
});