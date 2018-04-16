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
		<link rel="stylesheet" href="<!--{$tpl_path}-->css/detail.css" />
	</head>
	<body>
	<!--{include file="inc_head.php"}-->

	<div class="box">
			<div class="banner">
				<div class="banner_a">
						<span>首页</span>><span>应用市场</span>><span><!--{$app.app_title}--></span>
				</div>
			</div>
			<div class="d_con">
				<div class="d_con_l">
					<div class="d_img">
						<img src="<!--{imageurl url =$app.app_logo}-->" width="100" height="100" data-bd-imgshare-binded="1">
					</div>
					<div class="d_txt">
						<p class="p_1"><!--{$app.app_title}--></p>
						<!--<p class="p_2">元宝网海外站</p>-->
						<p class="p_2">开发公司：<!--{$app.app_company}--></p>
						<p class="p_2"><!--{$app.app_down}-->次下载  ·  <!--{$app.history_size}-->M  ·  无广告插件 </p>
						<p class="p_2">分类：<!--{row name='app_category' id=$app.last_cate_id}-->
							<!--{$row.cname}-->
							<!--{/row}--></p>
						<p class="p_3">星级:<!--{$app.app_grade}-->星级</p>
					</div>
					<div class="d_tt">
						<!--{$app.app_recomment}-->+
					</div>
				</div>
				<div class="d_con_r">
					<div class="r_l">
						<a href="<!--{link m='download' app_id=$app.app_id type=1}-->" >
						<div class="r_c">
							<img src="<!--{$tpl_path}-->images/anz.png" />
							<span>安卓下载</span>
						</div>
						</a>
						<a href="<!--{link m='download' app_id=$app.app_id type=2}-->" target="_blank">
						<div class="r_c" style="margin-top: 0.18rem;">
							<img src="<!--{$tpl_path}-->images/ios.png" />
							<span>IOS下载</span>
						</div>
						</a>
					</div>
					<div class="r_r">
						<img src="<!--{link m='qrcode' app_id=$app.app_id}-->" data-bd-imgshare-binded="1">
					</div>
				</div>
			</div>
			<div class="d_con_1">
				<div class="d_con_1_l">
					<div class="d_1">屏幕截图</div>
					<div class="d_2">移动设备&nbsp;<img style="transform: rotate(90deg);" src="<!--{$tpl_path}-->images/JT.png"/></div>
					<ul class="d_3">
							<!--{imagelist app_id=$app.app_id}-->
						<li>
							<img src="<!--{$imagelist.resource_url}-->" alt="<!--{$app.app_title}-->" data-bd-imgshare-binded="1" height="320">
						</li>
							<!--{/imagelist}-->
					</ul>
				</div>
				<div class="d_con_1_r">
					<div class="d_1">应用介绍</div>
					<div class="d_2"><!--{$app.app_desc}--></div>
				</div>
			</div>
			<div class="kongbai">
				<span>相关推荐</span>
			</div>
			<div class="d_con_2">
				<ul>
					<!--{relevant cid=$app.last_cate_id row=6}-->
					<a class="de_a" href="<!--{link m='app' app_id=$relevant.app_id}-->">
						<li>
							<img src="<!--{imageurl url =$relevant.app_logo}-->" width="100" height="100" data-bd-imgshare-binded="1">
							<div class="r_c_s_1"><!--{$relevant.app_title}--></div>
							<div class="r_c_s_2"><!--{$relevant.app_down}-->次下载 </div>
							<div class="r_c_s_3">详情</div>
						</li>
					</a>
					<!--{/relevant}-->
				</ul>
			</div>
		</div>
    <!--{include file="foot.html"}-->
	</body>
	<script>
        function build_url_js(c, m, arg, d, rewrite) {
            var c = c.toLowerCase();
            var url = {};
            var build = '';
            var query = '';
            if (rewrite == 1) {
                var keywords = arg.keywords;
                return "/search2/?keywords=" + encodeURI(keywords);
            }
            if (d != undefined) {
                $.extend(url, {"d": d});
            }
            if (c != undefined) {
                $.extend(url, {"c": c});
            }
            if (m != undefined) {
                $.extend(url, {"m": m});
            }
            if (typeof arg == 'object') {
                $.extend(url, arg);
            }
            query = $.param(url);
            if (query.length > 0) {
                query = '?' + query;
            }
            build = "/index.php" + query;
            return build;
        }
        function search_app() {
            if ($('#search-input').val() != '') {
                window.location = build_url_js('index','search',{'keywords': $('#search-input').val()},undefined,rewrite = $('#search-input').attr('data-rewrite'));
                // window.location = $('#search-input').attr('data-url') + "&keywords=" + $('#search-input').val();
            }
        }
	</script>
	<script type="text/javascript" src="<!--{$tpl_path}-->lib/jquery-1.12.4.min.js" ></script>
	<script type="text/javascript" src="<!--{$tpl_path}-->js/detail.js" ></script>
</html>
