/*global $, document, window, lightbox, jQuery, setTimeout, initEvents*/
$(document).ready(function () {

    'use strict';


    // ---------------------------------------------- //
    // Navbar Shrinking Behavior
    // ---------------------------------------------- //
    $(window).scroll(function () {
        if ($(window).scrollTop() > 20) {
            $('nav.navbar').addClass('shrink');
        } else {
            $('nav.navbar').removeClass('shrink');
        }
    });

    // ---------------------------------------------- //
    // Menu Section tabs
    // ---------------------------------------------- //
    $('.menu nav a').click(function (e) {
        e.preventDefault();
        $(this).tab('fadeIn');
    });

    // ---------------------------------------------- //
    // OWl Carousel
    // ---------------------------------------------- //
    $('.owl-carousel').owlCarousel({
        loop: false,
        nav: false,
        dots: true,
        navText: [
            "<i class='icon-arrow-left'></i>",
            "<i class='icon-arrow-right'></i>"
        ],
        margin: 15,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            757: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // ---------------------------------------------- //
    // Label color changing on focus
    // ---------------------------------------------- //
    $('input, textarea').focus(function () {
        $(this).parent('label').addClass('active');
    });
    $('input, textarea').blur(function () {
        $(this).parent('label').removeClass('active');
    });

    // ---------------------------------------------- //
    // Date picker initialization
    // ---------------------------------------------- //
    $('#date').datepicker({
        todayButton: new Date()
    });

    // ---------------------------------------------- //
    // Time picker initialization
    // ---------------------------------------------- //
    $('.timepicker').timepicki();

    // ---------------------------------------------- //
    // Time picker initialization
    // ---------------------------------------------- //
    $('body').scrollspy({
        target: '.navbar',
        offset: 80
    });

    // ---------------------------------------------- //
    // Preventing URL update on navigation link click
    // ---------------------------------------------- //
    $('.navbar-nav a, #scroll-down').bind('click', function (e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 1000);
        e.preventDefault();
    });

    // ---------------------------------------------- //
    // Scroll to top button
    // ---------------------------------------------- //
    $('#scrollTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 1000);
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() >= 1500) {
            $('#scrollTop').fadeIn();
        } else {
            $('#scrollTop').fadeOut();
        }
    });

    // ---------------------------------------------- //
    // iframe Modal Opening & Closing
    // ---------------------------------------------- //
    //TODO change id of modal
    $('.open-iframe').click(function (e) {
        e.preventDefault();
        var url_iframe = $(this).data('url');
        $('#placed_iframe').attr('src', url_iframe);
        $('.iframe-overlay').fadeIn();
        $('body').css({'overflow': 'hidden'});

        setTimeout(function () {
            $('#iframe-modal').addClass('is-visible');
        }, 100);

    });

    $('#close').click(function () {
        $('.iframe-overlay').fadeOut();
        setTimeout(function () {
            $('body').css('overflow', 'auto');
        }, 400);
        $('#iframe-modal').removeClass('is-visible');
    });


    // ---------------------------------------------- //
    // Lightbox initialization
    // ---------------------------------------------- //
    lightbox.option({
        'resizeDuration': 400,
        'fadeDuration': 400,
        'alwaysShowNavOnTouchDevices': true
    });

    // ---------------------------------------------- //
    // Hero Carousel initialization
    // ---------------------------------------------- //
    var Page = (function () {
        var $navArrows = $('#nav-arrows'),
            $nav = $('#nav-dots > span'),
            slitslider = $('#slider').slitslider({
                onBeforeChange: function (slide, pos) {
                    $nav.removeClass('nav-dot-current');
                    $nav.eq(pos).addClass('nav-dot-current');
                }
            }),
            init = function () {
                initEvents();
            },
            initEvents = function () {
                // add navigation events
                $navArrows.children(':last').on('click', function () {
                    slitslider.next();
                    return false;
                });
                $navArrows.children(':first').on('click', function () {
                    slitslider.previous();
                    return false;
                });
                $nav.each(function (i) {
                    $(this).on('click', function (event) {
                        var $dot = $(this);
                        if (!slitslider.isActive()) {
                            $nav.removeClass('nav-dot-current');
                            $dot.addClass('nav-dot-current');
                        }
                        slitslider.jump(i + 1);
                        return false;
                    });
                });
            };
        return {init: init};
    })();
    Page.init();


});
