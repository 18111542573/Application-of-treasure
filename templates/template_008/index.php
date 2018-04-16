<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
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
		<link rel="stylesheet" href="<!--{$tpl_path}-->css/homePage.css" />
	</head>
	<body>
	<!--{include file="inc_head.php"}-->
		<div class="banner">
			<!--{ad id=30}-->
				<img src="<!--{$ad.image}-->" alt="<!--{$ad.alt}-->"  width="580" height="265"/>
			<!--{/ad}-->
		</div>
		<div class="contain">
			<div class="c_l">
				<div class="l_h_1">
					<div class="d_1"><!--{row name='recommend' id=29}--><!--{$row.area_title}--><!--{/row}--></div>
					<div class="d_2"><a style="color: #c2c2c2;" href='/?c=index&m=softs'>更多&nbsp;></a></div>
				</div>
				<div class="l_box_1">
					<ul>
						<!--{recommend id=29 row=12}-->
						<a href="<!--{link m='app' app_id=$recommend.app_id}-->" class="l_box_1_a">
							<li>
								<img src="<!--{imageurl url = $recommend.app_logo}-->" alt="<!--{$recommend.app_title}-->" onclick="detail('<!--{$recommend.app_id}-->')">
								<div class="b_1_d1"><!--{$recommend.app_title}--></div>
							</li>
						</a>
						<!--{/recommend}-->
					</ul>
				</div>
				<div class="l_h_2">
					<div class="d_1">推荐软件</div>
					<div class="d_2"><a style="color: #c2c2c2;" href='/?c=index&m=softs'>更多&nbsp;></a></div>
				</div>
				<div class="l_box_2">
					<ul>
						<!--{applist  parent=1  row=10}-->
						<a class="l_box_2_a" href="<!--{link m='app' app_id=$applist.app_id}-->">
							<li>
								<img src="<!--{imageurl url =$applist.app_logo}-->" alt="<!--{$applist.app_title}-->" width="60" height="60" >
								<div class="b_1_d1"><!--{$applist.app_title}--></div>
								<div class="b_1_d1"><!--{countdown down=$applist.app_down}-->人在用</div>
							</li>
						</a>
						<!--{/applist}-->
					</ul>
				</div>
			</div>
			<div class="c_r">
				<div class="l_h_1">
					<div class="d_1"><!--{row name='recommend' id=30}--><!--{$row.area_title}--><!--{/row}--></div>
					<div class="d_2"><a style="color: #c2c2c2;" href='/?c=index&m=softs'>更多&nbsp;></a></div>
				</div>
				<div class="l_box_1">
					<ul>
						<!--{recommend id=30 row=10}-->
						<a class="r_a" href="<!--{link m='app' app_id=$recommend.app_id}-->">
							<li>
								<img src="<!--{$recommend.app_logo}-->" alt="<!--{$recommend.app_title}-->" width="60" height="60" />
								<div class="b_1_d1"><!--{$recommend.app_title}--></div>
								<div class="b_1_d2"><!--{countdown down=$applist.app_down}-->人在用</div>
							</li>
						</a>
						<!--{/recommend}-->
					</ul>
				</div>
				<div class="l_h_2">
					<div class="d_1"><!--{row name='recommend' id=31}--><!--{$row.area_title}--><!--{/row}--></div>
					<div class="d_2"><a style="color: #c2c2c2;" href='/?c=index&m=softs'>更多&nbsp;></a></div>
				</div>
				<div class="l_box_2">
					<ul>
						<!--{recommend id=31 row=10}-->
						<a class="r_a" href="<!--{link m='app' app_id=$recommend.app_id}-->">
							<li>
								<img src="<!--{$recommend.app_logo}-->" alt="<!--{$recommend.app_title}-->" width="60" height="60" />
								<div class="b_1_d1"><!--{$recommend.app_title}--></div>
								<div class="b_1_d2"><!--{countdown down=$recommend.app_down}-->人在用</div>
							</li>
						</a>
						<!--{/recommend}-->

					</ul>
				</div>
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
                return "/search/?keywords=" + encodeURI(keywords);
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
	<script src="<!--{$tpl_path}-->lib/jquery-1.12.4.min.js"></script>
	<script src="<!--{$tpl_path}-->js/homePage.js"></script>
</html>
