jQuery('document').ready(function ($) {


    ////////////////////////////////
    /////////  WINDOW INIT /////////
    ////////////////////////////////

    var prevScrollY = 0;
    var offsetY = 0;

    $(document).ready(function () {
        // console.log('Loaded');
        prevScrollY = $(window).scrollTop();


        if($('.wrapper').hasClass('home')) {
            $('.categories').height($('.category').height());
            $('.category__gradient').each(function () {
                // $(this).parent().parent().find('.category__image').height($('.category__image img').height());
                $(this).height($('.category__image img').height());
            });

        } else if($('.wrapper').hasClass('single')) {
            // $('.single__others_item').each(function () {
            //    $(this).find('.item_title').height($(this).find('img').height());
            // });

        } else if($('.wrapper').hasClass('categories')) {
            setTimeout(function () {
                $('.category__gradient').each(function () {
                    // $(this).parent().parent().find('.category__image').height($('.category__image img').height());
                    $(this).height($('.category__image img').height());
                });
            }, 300);
        } else if($('.wrapper').hasClass('contato')) {
            var formReturn = getParams();
            if(formReturn[0] == 'mailSent') {
                if(formReturn[1] == '1') {
                    $('.formSuccess').addClass('show');
                    $('.formError').removeClass('show');
                } else if(formReturn[1] == '0'){
                    $('.formSuccess').removeClass('show');
                    $('.formError').addClass('show');
                }

            }
        } else if($('.wrapper').hasClass('servicos')) {
            setTimeout(function() {
                $('.servicos__intro_text').addClass('show');
            }, 2000);
        }
        if($('.wrapper').hasClass('sobre') || $('.wrapper').hasClass('parceiros') || $('.wrapper').hasClass('contato') || $('.wrapper').hasClass('servicos') || $('.wrapper').hasClass('categories')) {
            var pos = $(this).scrollTop();
            var $header = $('.wrapper__title_bgimg');
            var headerHeight = $header.height();
            if(pos < headerHeight) {
                $header.css('object-position', 'center ' + pos / 2 + 'px');
            } else {
                $header.css('object-position', 'center ' + headerHeight / 2 + 'px');
            }
        }

        setTimeout(function () {
            $('.flip-container ').toggleClass('hover');
            setTimeout(function () {
                $('.flip-container ').toggleClass('hover');
            }, 1800);
        }, 200);
    });

    function getParams() {
        var url = window.location.href;
        var splitted = url.split("?");
        if (splitted.length === 1) {
            return 'null';
        }
        var paramList = decodeURIComponent(splitted[1]).split("&");
        var params = {};
        for (var i = 0; i < paramList.length; i++) {
            var paramTuple = paramList[i].split("=");
            if (paramTuple[0] == 'mailSent') {
                return paramTuple;
            }
        }
        return 'null';
    }

    $(window).on('resize', function () {
        if($('.wrapper').hasClass('home')) {
            $('.categories').height($('.category').height());
        } else if($('.wrapper').hasClass('categories')) {
            $('.category__gradient').each(function () {
                // $(this).parent().parent().find('.category__image').height($('.category__image img').height());
                // console.log($('.category__image img').height());
                $(this).height($('.category__image img').height());
            });

        }
    });

    $(window).on('scroll', function () {
        getHeight = function(jqo) {
            return jqo.height();
        };
        if($('.wrapper').hasClass('home')) {
            var scrollY = $(this).scrollTop();
                // highlightsPosition = $('.highlights').position().top;


            var windowHeight = $(this).height();
            var pos = $(this).scrollTop();

            // Container
            var $element = $('.highlights');
            var top = $element.offset().top;
            var height = getHeight($element);


            // Element to Move
            var $elemMoving = $('.highlights__content'),
                elemMovingHeight = $elemMoving.height(),
                elemMovingTop = $elemMoving.scrollTop();


            var topMin = top - windowHeight + height - elemMovingHeight,
                topMax = top - 300;


            // console.log('top: ' + top);

            // Check if totally above or totally below viewport
            if (pos > topMin && pos < topMax) {
                // console.log('pos: ' + pos);
                // console.log('topMin: ' + topMin);
                // console.log('topMax: ' + topMax);
                // $this.css('backgroundPosition', 'center' + " " + Math.round((firstTop - pos) * 0.1) + "px");
                $('.highlights__content').css({'top': Math.round((top  + 650 + height - pos) * 0.22)});

            }

            // var highlightsBottom = $('.highlights').height() - $('.highlights__content').height() - $('.highlights__content').position().top;
            //
            //
            // // console.log(scrollY, highlightsPosition);
            // if(scrollY > (highlightsPosition - 390) && prevScrollY < scrollY && highlightsBottom < 80) {
            //     // console.log('up');
            //     offsetY = offsetY + 0.8;
            //     $('.highlights__content').css({'bottom': offsetY});
            // } else if(prevScrollY > scrollY && highlightsBottom > 0) {
            //     // console.log('down');
            //     offsetY = offsetY - 0.8;
            //     $('.highlights__content').css({'bottom': offsetY});
            // }
            // prevScrollY = scrollY;
        }
        else if($('.wrapper').hasClass('sobre') || $('.wrapper').hasClass('parceiros') || $('.wrapper').hasClass('contato') || $('.wrapper').hasClass('servicos') || $('.wrapper').hasClass('categories')) {
            var windowHeight = $(this).height();
            var pos = $(this).scrollTop();

            var $header = $('.wrapper__title_bgimg');
            var headerHeight = $header.height();

            if(pos < headerHeight) {
                // console.log(pos);
                // console.log(headerHeight);
                $header.css('object-position', 'center ' + pos / 2 + 'px');
            }
            if($('.wrapper').hasClass('sobre')) {
                $('.sobre__box').addClass('show');
            }

        }

    });

    /////////////////////////
    /////////  MENU /////////
    /////////////////////////

    $('.menu__lang, .menu__lang_show').on('mouseover', function () {
        var heightMenu = '';
        if($('.menu__lang').hasClass('opened')) {
            heightMenu = 16;
        } else {
            if($(window).width() <= 1024) {
                heightMenu = $('.menu__lang ul li').length * 10 + 8;
            } else {
                heightMenu = $('.menu__lang ul li').length * 10 + 8;
            }

        }
        $('.menu__lang').toggleClass('opened');
        $('.menu__lang ul').css({'height': heightMenu});
        $('.menu__lang_show').toggleClass('opened');
    });

    $('.menu__lang ul').on('mouseout', function () {

        var heightMenu = '';
        if($('.menu__lang').hasClass('opened')) {
            heightMenu = 16;
        }

        $('.menu__lang').removeClass('opened');
        $('.menu__lang ul').css({'height': heightMenu});
        $('.menu__lang_show').removeClass('opened');
    });

    $('.menu__cat').on('mouseover', function () {
        var heightMenu = '';
        if($('.menu__cat').hasClass('opened')) {
            heightMenu = 16;
        } else {
            if($(window).width() <= 1024) {
                heightMenu = $('.menu__cat ul li').length * 25 + 30;
            } else {
                heightMenu = $('.menu__cat ul li').length * 25 + 30;
            }

        }
        $('.menu__cat').addClass('opened');
        $('.menu__cat ul').css({'height': heightMenu});
    });

    $('.menu__cat ul').on('mouseout', function () {

        var heightMenu = '';
        if($('.menu__cat').hasClass('opened')) {
            heightMenu = 16;
        }
        $('.menu__cat').removeClass('opened');
        $('.menu__cat ul').css({'height': heightMenu});
    });

    $('.ipadMenu__produtos_action').on('click', function () {
        var heightMenu = '';
        // console.log('on cick');
        if($('.ipadMenu__cat').hasClass('opened')) {
            // console.log('on ferme');
            heightMenu = 16;
        } else {
            // console.log('on ouvre');
            var padding = 5;
            if($(window).width() <= 1024) {
                $('.ipadMenu__cat ul li').each(function () {
                    var temp = parseFloat(heightMenu + 10);
                    heightMenu = parseFloat($(this).height() + temp);
                    // console.log(heightMenu);
                });
                // heightMenu = $('.ipadMenu__cat ul li').length * 20 + 8;
            } else {
                heightMenu = $('.ipadMenu__cat ul li').length * 20 + 8;
            }

        }
        $('.ipadMenu__cat').toggleClass('opened');
        $('.ipadMenu__cat ul').css({'height': heightMenu});
    });

    $('.menu__mobile').on('click', function (e) {
        // console.log(!$(e.target).is('.menu__mobile_wrapper'));
        // console.log(!$(e.target).is($('.menu__mobile_wrapper').find('*')));
        // console.log($(e.target).is('.menu__burger'));
        if(!$(e.target).is('.menu__mobile_wrapper') && !$(e.target).is($('.menu__mobile_wrapper').find('*'))  || $(e.target).is('.menu__burger')) {
// console.log('YOYO');
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
                console.log('YO');
                $('.menu__mobile').removeClass('opened');
                $('body').removeClass('noscroll');
                // $('.wrapper').css({
                //     'position': 'static','overflow-y': 'scroll'
                // });
                // $('.wrapper').scrollTop(pageYOffset);
            }
        }
    });

    ////////////////////////////////
    /////////  NEWSLETTER  /////////
    ////////////////////////////////
    // $('#mc-embedded-subscribe-form').on('submit', function () {
    //     // console.log('Newsletter submit');
    //     setTimeout(function () {
    //         // console.log($('#mce-success-response').text());
    //         // console.log($('#mce-error-response').text());
    //         if($('#mce-success-response').text() != '' || $('#mce-error-response').text() != '') {
    //             $('#mce-responses').css({'display': 'block'});
    //             // console.log('Response');
    //             $('.button1_newsletter').css({'display': 'none'});
    //             $('.button1_newsletter.ok').css({'display': 'block'});
    //         } else {
    //             $('#mce-responses').css({'display': 'none'});
    //             // console.log('No Response');
    //             $('.button1_newsletter').css({'display': 'block'});
    //             $('.button1_newsletter.ok').css({'display': 'none'});
    //         }
    //     }, 1000);
    //
    // });

    $('.button1_newsletter.ok').on('click', function () {
        $('#mce-responses').css({'display': 'none'});
        $('.button1_newsletter').css({'display': 'block'});
        $('.button1_newsletter.ok').css({'display': 'none'});
    });


});
