/*  ---------------------------------------------------
    Template Name: Ogani
    Description:  Ogani eCommerce  HTML Template
    Author: Colorlib
    Author URI: https://colorlib.com
    Version: 1.0
    Created: Colorlib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");

        /*------------------
            Gallery filter
        --------------------*/
        $('.featured__controls li').on('click', function () {
            $('.featured__controls li').removeClass('active');
            $(this).addClass('active');
        });
        if ($('.featured__filter').length > 0) {
            var containerEl = document.querySelector('.featured__filter');
            var mixer = mixitup(containerEl);
        }
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Humberger Menu
    $(".humberger__open").on('click', function () {
        $(".humberger__menu__wrapper").addClass("show__humberger__menu__wrapper");
        $(".humberger__menu__overlay").addClass("active");
        $("body").addClass("over_hid");
    });

    $(".humberger__menu__overlay").on('click', function () {
        $(".humberger__menu__wrapper").removeClass("show__humberger__menu__wrapper");
        $(".humberger__menu__overlay").removeClass("active");
        $("body").removeClass("over_hid");
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*-----------------------
        Categories Slider
    ------------------------*/
    $(".categories__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 4,
        dots: false,
        nav: true,
        navText: ["<span class='fa fa-angle-left'><span/>", "<span class='fa fa-angle-right'><span/>"],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {

            0: {
                items: 1,
            },

            480: {
                items: 2,
            },

            768: {
                items: 3,
            },

            992: {
                items: 4,
            }
        }
    });


    $('.hero__categories__all').on('click', function(){
        $('.hero__categories ul').slideToggle(400);
    });

    $('.hero__categories__all1').on('click', function(){
        $('.hero__categories1 ul').slideToggle(400);
    });
    $('.hero__categories__all2').on('click', function(){
        $('.hero__categories2 ul').slideToggle(400);
    });
    $('.hero__categories__all3').on('click', function(){
        $('.hero__categories3 ul').slideToggle(400);
    });
    $('.hero__categories__all4').on('click', function(){
        $('.hero__categories4 ul').slideToggle(400);
    });
    $('.hero__categories__all5').on('click', function(){
        $('.hero__categories5 ul').slideToggle(400);
    });
    $('.hero__categories__all6').on('click', function(){
        $('.hero__categories6 ul').slideToggle(400);
    });
    $('.hero__categories__all7').on('click', function(){
        $('.hero__categories7 ul').slideToggle(400);
    });
    $('.hero__categories__all8').on('click', function(){
        $('.hero__categories8 ul').slideToggle(400);
    });
    $('.hero__categories__all9').on('click', function(){
        $('.hero__categories9 ul').slideToggle(400);
    });
    $('.hero__categories__all10').on('click', function(){
        $('.hero__categories10 ul').slideToggle(400);
    });
    $('.hero__categories__all11').on('click', function(){
        $('.hero__categories11 ul').slideToggle(400);
    });
    $('.hero__categories__all12').on('click', function(){
        $('.hero__categories12 ul').slideToggle(400);
    });
    $('.hero__categories__all13').on('click', function(){
        $('.hero__categories13 ul').slideToggle(400);
    });
    $('.hero__categories__all14').on('click', function(){
        $('.hero__categories14 ul').slideToggle(400);
    });
    $('.hero__categories__all15').on('click', function(){
        $('.hero__categories15 ul').slideToggle(400);
    });
    $('.hero__categories__all16').on('click', function(){
        $('.hero__categories16 ul').slideToggle(400);
    });
    $('.hero__categories__al17').on('click', function(){
        $('.hero__categories17 ul').slideToggle(400);
    });
    $('.hero__categories__all18').on('click', function(){
        $('.hero__categories18 ul').slideToggle(400);
    });
    $('.hero__categories__all19').on('click', function(){
        $('.hero__categories19 ul').slideToggle(400);
    });
    $('.hero__categories__all20').on('click', function(){
        $('.hero__categories20 ul').slideToggle(400);
    });
    $('.hero__categories__all21').on('click', function(){
        $('.hero__categories21 ul').slideToggle(400);
    });
    $('.hero__categories__all22').on('click', function(){
        $('.hero__categories22 ul').slideToggle(400);
    });
    $('.hero__categories__all23').on('click', function(){
        $('.hero__categories23 ul').slideToggle(400);
    });

    $('.hero__categories__all24').on('click', function(){
        $('.hero__categories24 ul').slideToggle(400);
    });
    $('.hero__categories__all25').on('click', function(){
        $('.hero__categories25 ul').slideToggle(400);
    });
    $('.hero__categories__all26').on('click', function(){
        $('.hero__categories26 ul').slideToggle(400);
    });
    $('.hero__categories__al27').on('click', function(){
        $('.hero__categories27 ul').slideToggle(400);
    });
    $('.hero__categories__all28').on('click', function(){
        $('.hero__categories28 ul').slideToggle(400);
    });
    $('.hero__categories__all29').on('click', function(){
        $('.hero__categories29 ul').slideToggle(400);
    });
    $('.hero__categories__all30').on('click', function(){
        $('.hero__categories30 ul').slideToggle(400);
    });
    $('.hero__categories__all31').on('click', function(){
        $('.hero__categories31 ul').slideToggle(400);
    });
    $('.hero__categories__all32').on('click', function(){
        $('.hero__categories32 ul').slideToggle(400);
    });
    $('.hero__categories__all33').on('click', function(){
        $('.hero__categories33 ul').slideToggle(400);
    });



    /*--------------------------
        Latest Product Slider
    ----------------------------*/
    $(".latest-product__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: false,
        nav: true,
        navText: ["<span class='fa fa-angle-left'><span/>", "<span class='fa fa-angle-right'><span/>"],
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true
    });

    /*-----------------------------
        Product Discount Slider
    -------------------------------*/
    $(".product__discount__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 3,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {

            320: {
                items: 1,
            },

            480: {
                items: 2,
            },

            768: {
                items: 2,
            },

            992: {
                items: 3,
            }
        }
    });

    /*---------------------------------
        Product Details Pic Slider
    ----------------------------------*/
    $(".product__details__pic__slider").owlCarousel({
        loop: true,
        margin: 20,
        items: 4,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true
    });

    /*-----------------------
		Price Range Slider
	------------------------ */
    var rangeSlider = $(".price-range"),
        minamount = $("#minamount"),
        maxamount = $("#maxamount"),
        minPrice = rangeSlider.data('min'),
        maxPrice = rangeSlider.data('max');
    rangeSlider.slider({
        range: true,
        min: minPrice,
        max: maxPrice,
        values: [minPrice, maxPrice],
        slide: function (event, ui) {
            minamount.val('$' + ui.values[0]);
            maxamount.val('$' + ui.values[1]);
        }
    });
    minamount.val('$' + rangeSlider.slider("values", 0));
    maxamount.val('$' + rangeSlider.slider("values", 1));

    /*--------------------------
        Select
    ----------------------------*/
    $("select").niceSelect();

    /*------------------
		Single Product
	--------------------*/
    $('.product__details__pic__slider img').on('click', function () {

        var imgurl = $(this).data('imgbigurl');
        var bigImg = $('.product__details__pic__item--large').attr('src');
        if (imgurl != bigImg) {
            $('.product__details__pic__item--large').attr({
                src: imgurl
            });
        }
    });

    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

})(jQuery);