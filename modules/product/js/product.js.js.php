﻿$(document).ready(function(){
    $("#contentComment").focus(function(){
        $(this).parents(".w_content").find(".content-info").stop().slideDown(700);
    });
    $("#btn-close").click(function(){
        $(this).parents(".w_content").find(".content-info").stop().slideUp(700);
    });
    $('#oh_slider').slick({
        slidesToShow:3,
        slidesToScroll: 3,
        autoplay: true,
        dots:false,
        arrows: true,
        autoplaySpeed: 7000,
        speed:1000
    });
    $('#slider_detail').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        autoplay: true,
        dots:false,
        arrows: true,
        autoplaySpeed: 7000,
        speed:1000
    });
});