$(document).ready(function(){
    $("#contentComment").focus(function(){
        $(this).parents(".w_content").find(".content-info").stop().slideDown(700);
    });
    $("#btn-close").click(function(){
        $(this).parents(".w_content").find(".content-info").stop().slideUp(700);
    });
});