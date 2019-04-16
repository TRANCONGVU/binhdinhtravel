function show_comment(id,lang,p) {
	
	$.ajax({
		type: "GET",
		url: ROOT+'modules/discover/ajax/_show_comment.php',
		data: "id="+id+'&lang='+lang+'&p='+p,
		success: function(html){
			$("#ext_comment").html(html);
		}
	});
}
$(document).ready(function() {
	if($('body, html').find('#datepicker').length>0) {
		$( "#datepicker" ).datepicker({
			dateFormat: "yy/mm/dd",
			onSelect: function(){
				$(this).parents("form").submit();
			}
		});
	}
	if($('.feature_discover').find('.item').length>0) {
		$('.feature_discover').owlCarousel({
			nav : false,
			autoplay : true,
			animateOut: 'fadeOut',
			loop:false,
			items:1,
			dots:false,
		});
	}
	setTimeout(function(){
		$(".feature_discover").find(".second").removeClass("second");
	}, 200);
});