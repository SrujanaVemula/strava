var indexPage = $('#index_page').length;
var productPage = $('.product').length;
var contactPage = $('#contact_page').length;

//====================================functions====================================
var transferHeight = function (source, destination) {
    var sourceH = $(source).outerHeight();
    $(destination).outerHeight(sourceH);
}

var equalHeight = function (target) {
    var setHeight = 0;
    $(target).each(function () {
        var getH = $(this).outerHeight();
        if (setHeight < getH) {
            setHeight = getH;
        }
    });
    $(target).outerHeight(setHeight);
}

//function to check hidden radio buttons in project filter section
var checkHiddenRadio = function (targetParent, clickedElement) {
    $(targetParent).find('.hidden_inputs').prop('checked', false);
    $(clickedElement).find('.hidden_inputs').prop('checked', true);
}

//==========get current year===============
var getCurrentYear = function () {
    var date = new Date();
    var yearVal = date.getFullYear();
    $('.current_year').text(yearVal);
}

//====================================functions ends====================================

//==============global variables=================
var winW = $(window).outerWidth();
var winH = $(window).outerHeight();

//################################### document ready function ###########################################

$(document).ready(function (evt) {

    //==============displaying current year==============
    getCurrentYear();

    //========= wow initialization ==============
    // new WOW().init();

    //========toggle sidebar============
    $('#nav-icon3').click(function () {
        $(this).toggleClass('open');
        $('.sidebar_wrap').toggleClass('open');
    });

    // force click on nav-menu when any link is clicked
    $('.sidebar_wrap .links a').on('click', function () {
        $('#nav-icon3').trigger('click');
    });

    $(".white_cancel").click(function(){
        $(this).parents(".offer_box").css("opacity","0");
    });

    ScrollOut({
        once:true,
        threshold:.2,
    });

    console.log(`window width is ${winW}`);

    //=====================================index page script========================================
    if (indexPage == 1 || productPage == 1) {
        new Glider(document.querySelector('.tab'), {
            slidesToScroll: 1,
            slidesToShow: 'auto',
            responsive: [{
                // screens greater than >= 1024px
                breakpoint: 1024,
                settings: {
                    // Set to `auto` and provide item width to adjust to viewport
                    slidesToScroll: 1,
                    slidesToShow: 'auto',
                    draggable: true,
                }
            }, {
                // screens greater than >= 767px
                breakpoint: 767,
                settings: {
                    // Set to `auto` and provide item width to adjust to viewport
                    slidesToScroll: 1,
                    slidesToShow: 'auto',
                    draggable: true,
                }
            }]
        })
    }

    //=====================================contact page script========================================
    if (contactPage == 1) {

    }

    $(".mobile_navbar").css("top","26px");
});

//################################### window load function ##############################################
$(window).on('load', function () {
    setTimeout(function () {
        $('.loader_overlay').fadeOut(500);
    }, 300);
});

//################################### window scroll function ###########################################
$(window).on('scroll', function (e) {
    var scrollTopPos = $(window).scrollTop();

    //lazy loading images
    //html syntax below
    //<img data-lazy-src="path/to/image" alt="" class="">
    if (winW <= 767) {
        if (scrollTopPos > 100) { // this refers to window
            $(".mobile_navbar").css("top","0");
        }else{
            $(".mobile_navbar").css("top","26px");
        }
    }

    $('img[data-lazy-src]').each(function () {
        var getOffsetTop = $(this).offset().top;
        if (getOffsetTop < (scrollTopPos + (winH * 2))) {
            $(this).attr('src', $(this).attr('data-lazy-src'));
        }
    })

    // $(".section_title").each(function () {
    //     var sectionTop = $(this).parents(".section_title_div").offset().top;
    //     sectionTop = Math.round(sectionTop);
    //     if (scrollTopPos >= sectionTop) {
    //         $(this).addClass("reached-top");
    //     }
    // });
});

//################################### window resize function ###########################################
$(window).on('resize', function () {});

//################### window orientation change function ############################
window.addEventListener("orientationchange", function () {
    location.reload();
});