<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>应用市场</title>
		<link rel="stylesheet" href="<!--{$tpl_path}-->css/adhibition.css">
		<link rel="stylesheet" type="text/css" href="<!--{$tpl_path}-->css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="<!--{$tpl_path}-->css/product.css"/>
		<link rel="stylesheet" type="text/css" href="<!--{$tpl_path}-->css/index.css"/>
		<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_627230_qsz431ox1g11nhfr.css"/>
		<script src="<!--{$tpl_path}-->js/jquery-3.3.1.min.js"></script>
		<script src="<!--{$tpl_path}-->js/style.js"></script>
		<script src="<!--{$tpl_path}-->js/tab.js"></script>
	</head>
	<body>
    <!--我是头部-->
        <!--{include file="inc_head.php"}-->
		<section class="container">
			<!--左边-->
			<div class="bazaar-left">
				<h3>应用市场</h3>
				<div class="list">
					<ul>
						<li>
							<p class="title" id="dj">软件分类</p>
							<ul class='list-se'>
								<p class="title">软件分类</p>
                                <!--{appnav parent=1}-->
                                <!--{if $appnav.cate_id == $cate_id}-->
                                <li><p class="act2"><a href="<!--{link m='softs' cate_id=$appnav.cate_id}-->" ><!--{$appnav.cname}--></a></p></li>
                                <!--{else}-->
                                <li><p><a href="<!--{link m='softs' cate_id=$appnav.cate_id}-->" ><!--{$appnav.cname}--></a></p></li>
                                <!--{/if}-->
                                <!--{/appnav}-->
							</ul>
						</li>
						<li>
							<p class="title">热门推荐</p>
						</li>
						<li>
							<p class="title">综合评分</p>
						</li>
						<li>
							<p class="title">最新上架</p>
						</li>
						<li>
							<p class="title">应用必备</p>
						</li>
					</ul>
				</div>
			</div>
			<!--右边-->
			<div class="bazaar-right">
				<h3><!--{if $cate_id>0}-->
                    <!--{row name='app_category' id=$cate_id}-->
                    <!--{$row.cname}-->
                    <!--{/row}-->
                    <!--{else}-->
                    全部软件
                    <!--{/if}--></h3>
				<div class="tab" js-tab="1">
					<div class="tab-title">
						<a href="javascript:;" class="item item-cur">应用</a>
						<a href="javascript:;" class="item">货币交易</a>
					</div>
					<div class="tab-cont">
						<ul class="tab-cont__wrap">
							<li class="item">
                                <!--{applist page=$page order=$order_by parent=1 id=$cate_id  per_page=18}-->
                                <a class="r_c_a" href="<!--{link m='app' app_id=$applist.app_id}-->">
                                    <div class="tiem_li">
                                        <img src="<!--{imageurl url =$applist.app_logo}-->"/>
                                        <p> <!--{$applist.app_title}--></p>
                                        <p class="star">
                                            <!--{if ($applist.app_grade == '1')}-->
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <!--{/if}-->
                                            <!--{if ($applist.app_grade == '2')}-->
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <!--{/if}-->
                                            <!--{if ($applist.app_grade == '3')}-->
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <!--{/if}-->
                                            <!--{if ($applist.app_grade == '4')}-->
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <!--{/if}-->
                                            <!--{if ($applist.app_grade == '5')}-->
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <!--{/if}-->
                                        </p>
                                        <button>安装</button>
                                    </div>
                                </a>
                                <!--{/applist}-->
							</li>
							<li class="item">2</li>
						</ul>
					</div>
				</div>
                <!--{pagebar name='applist' parent=1 id=$cate_id order=$order page=$page row=14 per_page=14}-->
									<!--分页-->

			</div>
			
		</section>

		<div class="both">
			
		</div>
    <!--我是底部-->
    <div style="margin-top: 7rem;height: 14rem;background-color: #F2F2F2;">
        <!--{include file="footer.php"}-->
    </div>
		<script type="text/javascript">
			jQuery(document).ready(function($) 
			{
				$('.list ul li p').clickdown();
			$('.list-se p[class=title]').clickup();
			$('.list>ul>li').ad();
			});
			$(function(){
				$("header").load("header.html")
				$("footer").load("footer.html")
			})
		</script>
		<script>
            $('.list-se>li>p').on('click',function(){
                if(!$(this).hasClass('act2')){
                    $('.act2').removeClass('act2')
                    $(this).addClass("act2")
                }
            })
		$(function () {
		    $("#dj").trigger('click');
			  /**
				=========== 参数说明 ============
				curDisplay: 当前显示哪张
				mouse: 鼠标事件 (click/over)
				changeMethod: 切换方式 (default/vertical/horizontal/opacity)
				autoPlay: 自动播放 (true/false)
			   */
			
			  // 多个元素同一个变化方式
			  /*$('.tab').each(function () {
				$(this).tab({
				  curDisplay: 5,
				  mouse: 'over',
				  changeMethod: 'vertical'
				});
			  });*/
			
			  // 多个元素不同变化方式（需要在HTML中加入js-tab）
			  $('[js-tab=1]').tab();
			  $('[js-tab=2]').tab({
				curDisplay: 1,
				changeMethod: 'horizontal'
			  });
			});
			$('.list-se>li>p').on('click',function(){
			if(!$(this).hasClass('act2')){
				$('.act2').removeClass('act2')
				$(this).addClass("act2")
			}
		})
		</script>
	</body>
</html>
