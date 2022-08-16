jQuery('document').ready(function ($) {

    if($('.wrapper').hasClass('categories')) {
        var catLength = $('.category').length;
        setTimeout(function () {
            $('.category__extra').height($('.category').first().height());
            if(catLength % 3 == 1) {
                // Photo double
                $('.category__extra').css({'width': '66.6%'});
                $('.category__extra_double').css({'display': 'block'});

            } else if (catLength % 3 == 2) {
                // Photo simple
                $('.category__extra').css({'width': '33.3%'});
                $('.category__extra_simple').css({'display': 'block'});
            } else {
                // No photo
                $('.category__extra').css('display', 'none');
            }
        }, 300);

    } else if($('.wrapper').hasClass('escola')) {
        $('.category__extra').height($('.category').first().height());
    }

    $(window).on('resize', function () {
        $('.category__extra').height($('.category').first().height());
    });

});