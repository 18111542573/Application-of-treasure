<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>imDapp应用宝</title>
		<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_627230_qsz431ox1g11nhfr.css"/>
		<link rel="stylesheet" type="text/css" href="<!--{$tpl_path}-->css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="<!--{$tpl_path}-->css/swiper.min.css"/>
		<link rel="stylesheet" type="text/css" href="<!--{$tpl_path}-->css/product.css"/>
        <script src="<!--{$tpl_path}-->js/jquery-3.3.1.min.js"></script>
    </head>
	<body>
		<!--我是头部-->
		<header>
			<!--{include file="inc_head.php"}-->
		</header>
		<!--app图标内容-->
		<section class="container ico-particulars">
			<div class="img-left">
				<img class="ico-app" src="<!--{imageurl url =$app.app_logo}-->"/>
			</div>
			<div class="particulars-right">
				<div class="particulars-top">
					<h2><!--{$app.app_title}--><span><!--{$app.app_recomment}-->+</span></h2>
					<p>分享美好生活</p>
					<p><!--{$app.app_company}--></p>
				</div>
				<div class="particulars-bottom">
					<div class="particulars-bottom-left">
						<p>“<!--{row name='app_category' id=$app.last_cate_id}-->
                            <!--{$row.cname}-->
                            <!--{/row}-->”类</p>
						<p class="star">
                            <!--{if ($app.app_grade == '1')}-->
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <!--{/if}-->
                            <!--{if ($app.app_grade == '2')}-->
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <!--{/if}-->
                            <!--{if ($app.app_grade == '3')}-->
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <!--{/if}-->
                            <!--{if ($app.app_grade == '4')}-->
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <!--{/if}-->
                            <!--{if ($app.app_grade == '5')}-->
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <!--{/if}-->
						</p>
						<p class="pf"><!--{$app.app_grade}-->M评分</p>
						<p>免费 提供 App 内购买项目</p>
					</div>
					<div class="particulars-bottom-right">
                        <a href="<!--{link m='download' app_id=$app.app_id type=2}-->" >
						    <button>苹果下载</button>
                        </a>
                        <a href="<!--{link m='download' app_id=$app.app_id type=1}-->" >
						    <button>安卓下载</button>
                        </a>
					</div>
				</div>
			</div>
		</section>
		<!--我是华丽的分割线-->
		<div class="container fgx" style="margin-top:2.3rem;margin-bottom: 2.3rem;"></div>
		<!--屏幕截图-->
		<section class="container">
			<div class="screenshot">
				<h4>屏幕截图<span>移动设备<i class="iconfont icon-jiantou6"></i></span></h4>
			</div>
			<div class="screenshot-img">
			  <!-- Swiper -->
			  <div class="swiper-container">
			    <div class="swiper-wrapper">
                    <!--{imagelist app_id=$app.app_id}-->
			             <div class="swiper-slide"><img src="<!--{$imagelist.resource_url}-->"/></div>
                    <!--{/imagelist}-->
			    </div>
			    <!-- Add Pagination -->
			    <!--<div class="swiper-pagination"></div>-->
			  </div>				
			</div>
		</section>
		<!--我是华丽的分割线-->
		<div class="container fgx" style="margin-top:2.3rem;margin-bottom: 2.3rem;"></div>
		<!--应用简介-->
		<section class="container">
			<div class="Application-profile">
				<h4>应用简介</h4>
                <!--{$app.app_desc}-->
			</div>
			<div class="more">
				<span>更多</span>
			</div>
		</section>
		<!--我是华丽的分割线-->
		<div class="container fgx" style="margin-top:2.3rem;margin-bottom: 2.3rem;"></div>
		<!--新内容-->
		<section class="container">
			<div class="nav-content">
				<h4>新内容</h4>
				<p>修复bug，优化体验</p>
				<p>版本 1.0</p>
			</div>
		</section>
		<!--我是华丽的分割线-->
		<div class="container fgx" style="margin-top:2.3rem;margin-bottom: 2.3rem;"></div>
		<!--信息-->
		<section class="container">
			<div class="message">
				<h4>信息</h4>
				<p>销售商 <!--{$app.app_company}--></p>
				<p>大小 <!--{$app.history_size}-->M</p>
				<p>类別 <!--{row name='app_category' id=$app.last_cate_id}-->
                    <!--{$row.cname}-->
                    <!--{/row}--></p>
				<p>兼容性 需要 iOS 8.0 或更高版本。与 iPhone、iPad 和 iPod touch 兼容。</p>
			</div>
		</section>
		<!--我是华丽的分割线-->
		<div class="container fgx" style="margin-top:2.3rem;margin-bottom: 2.3rem;"></div>
		<!--您可能也喜欢-->
		<section class="container">
			<div class="like">
				<div>
					<h4>您也可能喜欢</h4>
					<span>查看全部</span>
				</div>
				<div class="both"></div>
				<ul class="all-like-img">
                    <!--{relevant cid=$app.last_cate_id row=6}-->
                    <a class="de_a" href="<!--{link m='app' app_id=$relevant.app_id}-->">
                        <li>
                            <img class="like-img" src="<!--{imageurl url =$relevant.app_logo}-->"/>
                            <p><!--{$relevant.app_title}--></p>
                            <p><!--{row name='app_category' id=$app.last_cate_id}-->
                                <!--{$row.cname}-->
                                <!--{/row}--></p>
                        </li>
                    </a>
                    <!--{/relevant}-->
					<div class="both"></div>
				</ul>
			</div>
		</section>
		<!--我是底部-->
		<footer>
            <!--{include file="footer.php"}-->
        </footer>
		<script src="<!--{$tpl_path}-->js/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="<!--{$tpl_path}-->js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
		<!--滑动函数-->
		<script type="text/javascript">
		    var swiper = new Swiper('.swiper-container', {
		      slidesPerView: 4,
		      spaceBetween: 20,
		      // init: false,
		      pagination: {
		        el: '.swiper-pagination',
		        clickable: true,
		      },
		      breakpoints: {
		        1024: {
		          slidesPerView: 4,
		          spaceBetween: 40,
		        },
		        768: {
		          slidesPerView: 3,
		          spaceBetween: 30,
		        },
		        640: {
		          slidesPerView: 2,
		          spaceBetween: 20,
		        },
		        320: {
		          slidesPerView: 1,
		          spaceBetween: 10,
		        }
		      }
		    });
	  	</script>
		<script type="text/javascript">
			$(document).ready(function(){
//				$("footer").load("footer.html")
//				$("header").load("header.html")
			})
			var h = $(".Application-profile p:nth-child(3)").height()
			$(".more").children().on("click",function(){
				var h = $(".Application-profile p:nth-child(3)").height()
				$(".Application-profile p:nth-child(3)").css("-webkit-line-clamp","initial")
				$(".Application-profile p:nth-child(3)").css("overflow","initial")
			})
		</script>
	</body>
</html>
