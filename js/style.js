$(document).ready(function(){
    $('#banner-img').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        autoplay: true,
        dots:false,
        arrows: false,
        autoplaySpeed: 7000,
        speed:1000
    });
    $(".vnt-menutop > ul > li").each(function(e){
        if($(this).find('> ul').size() > 0){
            $(this).addClass("hassub");
        }
    });
    $("#do_submit").click(function(e){
        if($(this).parents(".vnt-search").hasClass("active")){
            if($("#keyword").val().trim() == ''){
                $(this).parents(".vnt-search").removeClass("active");
                return false;
            }
        }else{
            $(this).parents(".vnt-search").addClass("active");
            return false;
        }
    });
    $(".vnt-langues .vl-title").click(function(e){
        if(! $(this).parents(".vnt-langues").hasClass("active")){
            $(this).parents(".vnt-langues").addClass("active");
        }else{
            $(this).parents(".vnt-langues").removeClass("active");
        }
    });
    $(".wrap-hotline .hl_title").click(function(){
        if(! $(this).parents(".wrap-hotline").hasClass("active")){
            $(this).parents(".wrap-hotline").addClass("active");
        }else{
            $(this).parents(".wrap-hotline").removeClass("active");
        }
    });
    $(window).bind('click',function(e){
        var $clicked = $(e.target);
        if(! $clicked.parents().hasClass("wrap-hotline")){
            $(".wrap-hotline").removeClass("active");
        }
        if(! $clicked.parents().hasClass("wrap-hotline")){
            $(".wrap-hotline").removeClass("active");
        }
    });
    $('.fixed_menu .linkSocial').tooltipster({
        animation: 'grow',
        position: 'left'
    });
});