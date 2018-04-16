$(function(){
	$(".top_c ul li").eq(0).addClass("li_bg").siblings().removeClass("li_bg");
	$(".top_c ul li").eq(0).find('a').css("color","white").parent().siblings().find("a").css('color',"black");
	$(".top_c ul li").mouseenter(function(){
		$(this).addClass("li_bg").siblings().removeClass("li_bg");
		$(this).find('a').css("color","white").parent().siblings().find("a").css('color',"black");
	});
	$(".top_c ul").mouseleave(function(){
		$(".top_c ul li").eq(0).addClass("li_bg").siblings().removeClass("li_bg");
		$(".top_c ul li").eq(0).find('a').css("color","white").parent().siblings().find("a").css('color',"black");
	});
	// $(".l_box_1 ul li").click(function(){
	// 	window.location.assign('detail.html');
	// });
	// $(".l_box_2 ul li").click(function(){
	// 	window.location.assign('detail.html');
	// });

})
