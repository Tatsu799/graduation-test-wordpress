'use strict';

const loadAnime = $('.spinner-box');
$(window).on('load', function() {
    loadAnime.delay(500).fadeOut(600);
});

function stopLoad() {
    loadAnime.delay(500).fadeOut(600);
}
setTimeout('stopLoad()', 1000);

let startPos = 0
let winScrollTop = 0;
$(window).on('scroll', function () {
    winScrollTop = $(this).scrollTop();
    if (winScrollTop >= startPos) {
        $('.header').addClass('hide');
    } else {
        $('.header').removeClass('hide');
    }
    startPos = winScrollTop;
});

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
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
            
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