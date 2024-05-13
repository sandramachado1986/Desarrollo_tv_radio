window.addEventListener('load', () => {

    $(".varios").wrapAll("<div id='varios' class='row col-6 filter hdr-tab' data-filter='varios'></div>");
}, false);

// external js: isotope.pkgd.js

// filter functions
AOS.init();

$(document).ready(main);
var contador = 1;

function main() {
    $('.menu-bar').click(function() {
        //$('nav').toggle();
        if (contador == 1) {
            $('nav').animate({
                left: '0'
            });
            contador = 0;

        } else {
            contador = 1;
            $('nav').animate({
                left: '-100%'
            });
        }
    })
};

/*---------------------acordeon--------------------*/
$('dl dd').hide();
$('dl dt').click(function() {
    if ($(this).hasClass('activo')) {
        $(this).removeClass('activo');
        $(this).next().slideUp();
    } else {
        $('dl dt').removeClass('activo');
        $(this).addClass('activo');
        $('dl dd').slideUp();
        $(this).next().slideDown();
    }
});

/*------------------------swipebox------------------------*/
window.addEventListener('load', () => {
    jQuery(function($) {
        $(".swipebox-video").swipebox();
    });

}, false);
$(document).ready(function() {

    $('.swipebox').swipebox({
        useCSS: true, // false will force the use of jQuery for animations
        useSVG: true, // false to force the use of png for buttons
        initialIndexOnArray: 0, // which image index to init when a array is passed
        hideCloseButtonOnMobile: false, // true will hide the close button on mobile devices
        removeBarsOnMobile: true, // false will show top bar on mobile devices
        hideBarsDelay: 3000, // delay before hiding bars on desktop
        videoMaxWidth: 1140, // videos max width
        beforeOpen: function() {}, // called before opening
        afterOpen: null, // called after opening
        afterClose: function() {}, // called after closing
        loopAtEnd: false // true will return to the first image after the last image is reached
    });

});

/*------------------------caja abrecierra------------------------*/
$("#open-busca").click(function() {
    $("#caja-busca").toggle();
});
window.addEventListener('load', () => {
    var swiper = new Swiper(".Noticias", {
        slidesPerView: 'auto',
        spaceBetween: 30,
        slidesOffsetAfter: -1,
        loop: false,
        centeredSlides: false,
        freeMode: true,
        /*autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },*/
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        }
    });
}, false);

window.addEventListener('load', () => {
    var swiper = new Swiper(".videosMenu", {
        slidesPerView: 'auto',
        spaceBetween: 30,
        slidesOffsetAfter: -1,
        loop: false,
        watchSlidesVisibility: true,
        centeredSlides: false,
        freeMode: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        }
    });
}, false);


var swiper = new Swiper('.swiper-container', {
    effect: 'fade',
    fadeEffect: {
        crossFade: true,
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    speed: 500,
    preloadImages: true,
    loop: true,
    centeredSlides: true,
    /*pagination: '.swiper-pagination',*/
    slidesPerView: 'auto',
    /*nextButton: '.swiper-button-next',*/
    /*prevButton: '.swiper-button-prev',*/
    centeredSlides: true,
    paginationClickable: true

});


$(document).ready(function() {

    /********* boton hacia arriba ***************/
    $('.ir-arriba').click(function() {
        $('body, html').animate({
            scrollTop: '0px'
        }, 1000);
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('.ir-arriba').slideDown(600);
        } else {
            $('.ir-arriba').slideUp(600);
        }
    });

    /*hacia abajo*/
    $('.ir-abajo').click(function() {
        $('body, html').animate({
            scrollTop: '1000px'
        }, 1000);
    });
});

/*------------------------copy clipboard-----------------------*/
$("a[href='#top']").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
});

const playerContainers = document.querySelectorAll(".hoverEffects");
playerContainers.forEach(container => {
    container.addEventListener("mouseover", () => {
        const player = container.querySelector("lottie-player");
        player.setDirection(1);
        player.play();
    });

    container.addEventListener("mouseleave", () => {
        const player = container.querySelector("lottie-player");
        player.setDirection(-1);
        player.play();
    });
});


/*------SALUDO ----*/
var myDate = new Date();
var hrs = myDate.getHours();

var greet;

if (hrs < 11)
    greet = '<i class="fas fa-sun"></i> ¡Buen Día!';
else if (hrs >= 11 && hrs <= 12)
    greet = ' PROGRAMA DE 11 A 12';
else if (hrs >= 12 && hrs <= 13)
    greet = '13 a 14 ';
    else if (hrs >= 14 && hrs <= 14)
    greet = 'programa 13 a 15';
    else if (hrs >= 14 && hrs <= 15)
    greet = '<i class="far fa-moon"></i> ¡Buenas Noches!';
    else if (hrs >= 15 && hrs <= 16)
    greet = '<i class="far fa-moon"></i> ¡Buenas Noches!';

document.getElementById('saludo').innerHTML =
    '<h2 class="_color_blue _bold">' + greet + '</h2>';


document.getElementById('saludo_mobile').innerHTML =
    '<h3 class="_color_blue _bold">' + greet + '</h3>';

$(window).scroll(function() {

    if ($(this).scrollTop() > 20) {
        $('.inscript').fadeOut();
    } else {
        $('.inscript').fadeIn();
    }
});

$(document).ready(function() {
    
    var date = new Date();
    
    var currentDay = date.getDay();
    
    $('#weekly_schedule ul:eq(' + currentDay +')').children().first().addClass('today');    
});


// Instantiate Scrolls
var scroll = new SmoothScroll('a[href*="#"]:not([data-easing])');

if (document.querySelector('[data-easing]')) {
    var linear = new SmoothScroll('[data-easing="linear"]', {
        easing: 'linear'
    });

    var easeInQuad = new SmoothScroll('[data-easing="easeInQuad"]', {
        easing: 'easeInQuad'
    });
    var easeInCubic = new SmoothScroll('[data-easing="easeInCubic"]', {
        easing: 'easeInCubic'
    });
    var easeInQuart = new SmoothScroll('[data-easing="easeInQuart"]', {
        easing: 'easeInQuart'
    });
    var easeInQuint = new SmoothScroll('[data-easing="easeInQuint"]', {
        easing: 'easeInQuint'
    });

    var easeInOutQuad = new SmoothScroll('[data-easing="easeInOutQuad"]', {
        easing: 'easeInOutQuad'
    });
    var easeInOutCubic = new SmoothScroll('[data-easing="easeInOutCubic"]', {
        easing: 'easeInOutCubic'
    });
    var easeInOutQuart = new SmoothScroll('[data-easing="easeInOutQuart"]', {
        easing: 'easeInOutQuart'
    });
    var easeInOutQuint = new SmoothScroll('[data-easing="easeInOutQuint"]', {
        easing: 'easeInOutQuint'
    });

    var easeOutQuad = new SmoothScroll('[data-easing="easeOutQuad"]', {
        easing: 'easeOutQuad'
    });
    var easeOutCubic = new SmoothScroll('[data-easing="easeOutCubic"]', {
        easing: 'easeOutCubic'
    });
    var easeOutQuart = new SmoothScroll('[data-easing="easeOutQuart"]', {
        easing: 'easeOutQuart'
    });
    var easeOutQuint = new SmoothScroll('[data-easing="easeOutQuint"]', {
        easing: 'easeOutQuint'
    });
}


window.addEventListener("load", function() {
    function handleNetworkChange(event) {
        if (navigator.onLine) {
            document.body.classList.remove("offline");
        } else {
            document.body.classList.add("offline");
        }
    }

    window.addEventListener("online", handleNetworkChange);
    window.addEventListener("offline", handleNetworkChange);
});

