'use strict';

let windowSize = $(window).width();
$(function () {
    if (windowSize > 769) {
    } else {
    $("header .drawer").click(function () {
        $('body').toggleClass('nav-open');
        $('header .header-wrapper__nav').fadeToggle(200);
    }); 
    $(".header-wrapper__nav__list__item a").click(function () {
        $('body').toggleClass('nav-open');
        $('header .header-wrapper__nav').fadeToggle(200);
    });
    }
});

const loadAnime = $('.spinner-box');
$(window).on('load', function() {
    loadAnime.delay(700).fadeOut(1000);
});

function stopLoad() {
    loadAnime.delay(10000).fadeOut(1000);
}
setTimeout('stopLoad()', 20000);

// slider 
$(function() {
    $(".slider").slick({
        arrows: true, 
        autoplay: true,
        infinite: true,
        adaptiveHeight: true,
        prevArrow: '<div class="prev"></div>',
        nextArrow: '<div class="next"></div>',
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    $('.slider1').slick({
        autoplaySpeed: 2500,
        speed: 1200,
        autoplay: true,       
        autoplaySpeed: 2000,        
        dots: false,          
        arrows: false,        
        infinite: true,       
    });
});

// フェードイン
function fadeIn() {
    $('.fadeUpTrigger').each(function() {
    let scroll = $(window).scrollTop();
    let triTop = $(this).offset().top + 100;
    let winHeight = $(window).height();
    if (scroll >= triTop - winHeight) {
    $(this).addClass('fadeUp');
    }else {
    $(this).removeClass('fadeUp');
    }
});

$('.fadeLeftTrigger').each(function() {
    let scroll = $(window).scrollTop();
    let triTop = $(this).offset().top + 100;
    let winHeight = $(window).height();
    if (scroll >= triTop - winHeight) {
    $(this).addClass('fadeLeft');
    }else {
    $(this).removeClass('fadeLeft');
    }
});

$('.fadeRightTrigger').each(function() {
    let scroll = $(window).scrollTop();
    let triTop = $(this).offset().top + 100;
    let winHeight = $(window).height();
    if (scroll >= triTop - winHeight) {
    $(this).addClass('fadeRight');
    }else {
    $(this).removeClass('fadeRight');
    }
});
}

$(window).scroll(function() {
fadeIn();
});