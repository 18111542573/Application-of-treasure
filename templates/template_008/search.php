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
		<link rel="stylesheet" href="<!--{$tpl_path}-->css/server.css" />
	</head>
	<body>
	<!--{include file="inc_head.php"}-->
	<div class="hot_box">
			<span class="s_1">搜索&nbsp;>&nbsp;搜索【<!--{$keywords}-->】结果</span>
		</div>
		<div class="hot_contain">
			<div class="hot_c_l">
				<div class="l_t">搜索结果</div>
				<div class="l_box">
					<ul class="l_u1">
						<!--{applist search=$keywords row=15}-->
						<a class="l_box_a" href="<!--{link m='app' app_id=$applist.app_id}-->">
							<li class="l_l1">
								<img src="<!--{imageurl url =$applist.app_logo}-->" alt="<!--{$applist.app_title}-->" width="72" height="72" />
								<ul class="l_u2">
									<li><!--{$applist.app_title}--></li>
									<li><!--{row name='app_category' id=$applist.last_cate_id}-->
										<!--{$row.cname}-->
										<!--{/row}-->&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;下载<!--{$applist.app_down}-->次</li>
									<li>简介：<!--{$applist.app_desc}--></li>
								</ul>
								<div class="li_biao">详情</div>
							</li>
						</a>
						<!--{/applist}-->

					</ul>
				</div>
			</div>
			<div class="hot_c_r">
				<div class="r_t">
					<!--{row name='recommend' id=29}--><!--{$row.area_title}--><!--{/row}--><span class="t_s"><a style="color: black;" href="/?c=index&m=softs">更多&nbsp;></a></span>
				</div>
				<ul>
					<!--{recommend id=29 row=14}-->
					<a class="hot_a" href="<!--{link m='app' app_id=$recommend.app_id}-->">
						<li>
							<img src="<!--{imageurl url =$recommend.app_logo}-->" alt="<!--{$applist.app_title}-->" width="60" height="60" />
							<span class="box_s1"><!--{$recommend.app_title}--></span>
							<span class="box_s2">下载<!--{$recommend.app_down}-->次</span>
						</li>
					</a>
					<!--{/recommend}-->
				</ul>
			</div>
		</div>

    <!--{include file="foot.html"}-->
	</body>
	<script type="text/javascript" src="<!--{$tpl_path}-->lib/jquery-1.12.4.min.js" ></script>
	<script src="<!--{$tpl_path}-->js/server.js"></script>
</html>
