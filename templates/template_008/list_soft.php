<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>区块链应用宝</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<script>
	       (function (doc, win) {
	            var docEl = doc.documentElement,
	           // orientationchange 事件 用来监听手机屏幕的反转
	            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
	            recalc = function () {
	              var clientWidth = docEl.clientWidth;//(window.innerWidth);UC 或者QQ 安卓4.0 以下原生浏览器下面是没有
	              if (!clientWidth) return;     
	               docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
	            };
	          if (!doc.addEventListener) return;
	          win.addEventListener(resizeEvt, recalc, false);
	          //DOMContentLoaded dom 加载完成，onload 有什么区别 dom css js OK 才执行的
	          doc.addEventListener('DOMContentLoaded', recalc, false);
	        })(document, window);
		</script>
		<link rel="stylesheet" href="<!--{$tpl_path}-->css/appMark.css" />
	</head>
	<style>
		.page {
			height: 0.45rem; }
		.page a {
			color: #333;
			font-size: 0.1rem;
			float: left;
			margin-left: 0.2rem; }
	</style>
	<body>
	<!--{include file="inc_head.php"}-->
		<div class="banner">
			<!--<div class="banner_a">-->
					<!--<span><a href="/">首页</a></span>>&nbsp;<span>应用市场</span>>&nbsp;<span>交易平台</span>-->
			<!--</div>-->
		</div>
		<div class="content">
			<div class="content_l">
				<div class="l_top">应用市场</div>
				<div class="l_bottom">
					<div class="l_b_1">软件分类<img src="<!--{$tpl_path}-->images/JT.png"/></div>
					<div class="l_b_1_box">
						<ul>
							<!--{appnav parent=1}-->
							<li><a href="<!--{link m='softs' cate_id=$appnav.cate_id}-->" ><!--{$appnav.cname}--></a></li>
							<!--{/appnav}-->
						</ul>
					</div>
					<!--<div class="l_2">热门推荐</div>-->
					<!--<div class="l_3">综合评分</div>-->
					<!--<div class="l_4">最新上架</div>-->
				</div>
			</div>
			<div class="content_r">
				<div class="r_top">
					<!--{if $cate_id>0}-->
					<!--{row name='app_category' id=$cate_id}-->
					<!--{$row.cname}-->
					<!--{/row}-->
					<!--{else}-->
					全部软件
					<!--{/if}-->
				</div>
				<div class="r_banner">
					<div class="r_b_1">应用</div>
					<div class="r_b_1" style="margin-left: 0.08rem;">货币交易</div>
				</div>
				<div class="r_contain">
					<ul>
						<!--{applist page=$page order=$order_by parent=1 id=$cate_id  per_page=14}-->
						<a class="r_c_a" href="<!--{link m='app' app_id=$applist.app_id}-->">
							<li>
								<img src="<!--{imageurl url =$applist.app_logo}-->" width="60" height="60" alt="<!--{$applist.app_title}-->">
								<div class="r_c_s_1"><!--{$applist.app_title}--></div>
								<div class="r_c_s_2"><!--{countdown down=$applist.app_down}-->人在用</div>
								<div class="r_c_s_3">详情</div>
							</li>
						</a>
						<!--{/applist}-->
					</ul>
					<!--{pagebar name='applist' parent=1 id=$cate_id order=$order page=$page row=14 per_page=14}-->
				</div>
			</div>
		</div>
		<div class="jiant">
		
		</div>
    <!--{include file="foot.html"}-->
	</body>
	<script type="text/javascript" src="<!--{$tpl_path}-->lib/jquery-1.12.4.min.js" ></script>
	<script type="text/javascript" src="<!--{$tpl_path}-->js/appMark.js" ></script>
</html>
