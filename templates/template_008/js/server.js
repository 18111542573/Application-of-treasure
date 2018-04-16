$(function(){
	$(".top_c ul li").eq(1).addClass("li_bg").siblings().removeClass("li_bg");
	$(".top_c ul li").eq(1).find('a').css("color","white").parent().siblings().find("a").css('color',"black");
	$(".top_c ul li").mouseenter(function(){
		$(this).addClass("li_bg").siblings().removeClass("li_bg");
		$(this).find('a').css("color","white").parent().siblings().find("a").css('color',"black");
	});
	$(".top_c ul").mouseleave(function(){
		$(".top_c ul li").eq(1).addClass("li_bg").siblings().removeClass("li_bg");
		$(".top_c ul li").eq(1).find('a').css("color","white").parent().siblings().find("a").css('color',"black");
	});
	$(".top_input").focus(function(){
		$(this).attr("placeholder","");
	});
	$(".top_input").blur(function(){
		$(this).attr("placeholder","输入APP名称或类型");
	});
	
})
