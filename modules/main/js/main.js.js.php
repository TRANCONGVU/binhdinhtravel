$(window).load(function(){
	loadText();
});
function loadText(){
	var w = (innerWidth-1170)/2;
	$("#vnt-banner .slick-current .text").css("left", w);
};
$(document).ready(function(){
    $('#vnt-banner').slick({
        slidesToShow:1,
        slidesToScroll: 1,
        autoplay: true,
        dots:true,
        arrows: false,
        fade:true,
        autoplaySpeed: 7000,
        speed:1000
    });
	$('#vnt-banner').on('afterChange', function(event, slick, currentSlide) {
		loadText();
	});
    var check = 0;
    $(window).load(function(){
        var checkfirst = $('#vnt-banner .item:first');
        var x=0,y=0,z=1.1;
        x = getRand(0,25,75,100);
        y = getRand(0,25,75,100);
        var css = {
            "-moz-transform-origin"     : x+"% "+y+"%",
            "-webkit-transform-origin"  : x+"% "+y+"%",
            "-o-transform-origin"       : x+"% "+y+"%",
            "-ms-transform-origin"      : x+"% "+y+"%",
            "transform-origin"          : x+"% "+y+"%"
        };
        checkfirst.css(css);
        TweenMax.to(checkfirst.find(".image img"), 0, {scaleX:1, scaleY:1, ease: Linear.easeNone});
        if(check == 0){
            check = 1 ;
            TweenMax.to(checkfirst.find(".image img"), 8, {scaleX:z, scaleY:z, ease: Linear.easeNone},'start');
        }else{
            check = 0 ;
            TweenMax.from(checkfirst.find(".image img"), 8, {scaleX:z, scaleY:z, ease: Linear.easeNone},'start');
        }
    });
    $('#vnt-banner').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        var checkActive = $(slick.$slides[nextSlide]);
        var checkCurrent = $(slick.$slides[currentSlide]);
        var x=0,y=0,z=1.1;
        x = getRand(0,25,75,100);
        y = getRand(0,25,75,100);
        var css = {
            "-moz-transform-origin"     : x+"% "+y+"%",
            "-webkit-transform-origin"  : x+"% "+y+"%",
            "-o-transform-origin"       : x+"% "+y+"%",
            "-ms-transform-origin"      : x+"% "+y+"%",
            "transform-origin"          : x+"% "+y+"%"
        };
        checkActive.find(".image img").css(css);
        TweenMax.to(checkActive.find(".image img"), 0, {scaleX:1, scaleY:1, ease: Linear.easeNone});
        if(check == 0){
            check = 1 ;
            TweenMax.to(checkActive.find(".image img"), 8, {scaleX:z, scaleY:z, ease: Linear.easeNone},'start');
        }else{
            check = 0 ;
            TweenMax.from(checkActive.find(".image img"), 8, {scaleX:z, scaleY:z, ease: Linear.easeNone},'start');
        }
    });
    $('#slider_news').slick({
        slidesToShow:4,
        slidesToScroll: 4,
        autoplay: true,
        dots:false,
        arrows: true,
        autoplaySpeed: 7000,
        speed:1000
    });
    $(".vnt-news-menu ul li a").click(function(event) {
        if(! $(this).parent().hasClass('active')){
			var mod = $(this).parent().data("name");
			var mydata = "mod="+mod+"&lang="+lang;
            $(".vnt-news-menu ul li a").parent().removeClass('active');
            $(this).parent().addClass('active');
            $.ajax({
                beforeSend : function(){
                    $("#loadAjaxNews").append("<div class='loadding'></div>");
                },
                async: true,
				dataType: 'json',
				url: ROOT+'load_ajax.php?do=ajax_post',
				type: 'POST',
				data: mydata ,
            }).done(function(data) {
                setTimeout(function() {
                    $("#loadAjaxNews").html(data.html);
                }, 600);
            });
        }
        return false;
    });
	linkall = $('.vnt-news-menu li.active a').attr('href');
	$('.link_viewall a').attr('href', linkall);
});
function getRand (min1, max1, min2, max2) {
    var ret = 0;
    var dec = (Math.random()<0.5)? 0 :1;
    if ( dec==1){
        ret = parseInt(Math.random() * (max1-min1+1), 10) + min1;
    }else{
        ret = parseInt(Math.random() * (max2-min2+1), 10) + min2;
    }
    return ret;
}