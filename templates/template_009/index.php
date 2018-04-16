<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>imDapp应用宝</title>
    <link rel="icon" href="<!--{$tpl_path}-->img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_627230_qsz431ox1g11nhfr.css"/>
    <link rel="stylesheet" type="text/css" href="<!--{$tpl_path}-->css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<!--{$tpl_path}-->css/product.css"/>
    <link rel="stylesheet" type="text/css" href="<!--{$tpl_path}-->css/index.css"/>
    <script src="<!--{$tpl_path}-->js/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<!--我是头部-->
<header>
    <!--{include file="inc_head.php"}-->
</header>
<!--头部banner-->
<section class="container-fluid bg">
    <div class="download-button">
        <button>苹果下载</button>
        <button>安卓下载</button>
    </div>
</section>
<section class="container">
    <div class="newest-left">
        <div class="newest-top"><p id="zx" class="xhx">最新上架</p><p id="jp">精品推荐</p></div>
        <div class="both"></div>
        <div class="newest-bottom xs">
            <ul>
                <!--{recommend id=70 row=10}-->
                <a href="<!--{link m='app' app_id=$recommend.app_id}-->">
                <li>
                    <img src="<!--{$recommend.app_logo}-->" />
                    <p><!--{$recommend.app_title}--></p>
                    <p class="star">
                        <!--{if ($recommend.app_grade == '1')}-->
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <!--{/if}-->
                        <!--{if ($recommend.app_grade == '2')}-->
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <!--{/if}-->
                        <!--{if ($recommend.app_grade == '3')}-->
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <!--{/if}-->
                        <!--{if ($recommend.app_grade == '4')}-->
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <!--{/if}-->
                        <!--{if ($recommend.app_grade == '5')}-->
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <!--{/if}-->
                    </p>
                    <button>安装</button>
                </li>
                </a>
                <!--{/recommend}-->
            </ul>
        </div>
        <div class="newest-bottom yc">
            <ul>
                <!--{recommend id=41 row=10}-->
                <a href="<!--{link m='app' app_id=$recommend.app_id}-->">
                    <li>
                        <img src="<!--{$recommend.app_logo}-->" />
                        <p><!--{$recommend.app_title}--></p>
                        <p class="star">
                            <!--{if ($recommend.app_grade == '1')}-->
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <!--{/if}-->
                            <!--{if ($recommend.app_grade == '2')}-->
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <!--{/if}-->
                            <!--{if ($recommend.app_grade == '3')}-->
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <!--{/if}-->
                            <!--{if ($recommend.app_grade == '4')}-->
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <!--{/if}-->
                            <!--{if ($recommend.app_grade == '5')}-->
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <!--{/if}-->
                        </p>
                        <button>安装</button>
                    </li>
                </a>
                <!--{/recommend}-->
            </ul>
        </div>
    </div>
    <div class="newest-right">
        <p>应用排行榜</p>
        <ol>
            <!--{recommend id=42 row=10}-->
            <a href="<!--{link m='app' app_id=$recommend.app_id}-->">
            <li>
                <div class="text-left"><span><!--{$recommend.app_id}--></span>&nbsp;&nbsp;&nbsp;<img src="<!--{$recommend.app_logo}-->"/></div>
                <div class="text-right2">
							<span class="text-name">
								<!--{$recommend.app_title}-->
							</span>
                    <span class="text-xz">
								<!--{$recommend.app_down}-->人下载
							</span>
                </div>
                <div class="text-right">
                    <p><!--{$recommend.app_title}--></p>
                    <p class="star">
                        <!--{if ($recommend.app_grade == '1')}-->
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <!--{/if}-->
                        <!--{if ($recommend.app_grade == '2')}-->
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <!--{/if}-->
                        <!--{if ($recommend.app_grade == '3')}-->
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <!--{/if}-->
                        <!--{if ($recommend.app_grade == '4')}-->
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <!--{/if}-->
                        <!--{if ($recommend.app_grade == '5')}-->
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <!--{/if}-->
                    </p>
                    <button>安装</button>
                </div>
            </li>
            </a>
            <!--{/recommend}-->
        </ol>
    </div>
</section>
<!--我是底部-->
<footer>
    <!--{include file="footer.php"}-->
</footer>
<script type="text/javascript">
    $(function(){

//				$("header").load("header.html")`
//        $("footer").load("<!--{$tpl_path}-->footer.php")
    })
    $(".newest-right li").hover(function(){
        $(this).children(".text-right2").hide();
        $(this).children(".text-right").show();
    },function(){
        $(this).children(".text-right").hide();
        $(this).children(".text-right2").show();
    })
    //			console.log(123)

    window.onload=function (){
        $('.shouye').on('click',function(){
            if(!$(this).hasClass('act')){
                $('.act').removeClass('act')
                $(this).addClass("act")
            }
        })
        var userName="123123"
    }
    $('.newest-top p').on('click',function(){
        if(!$(this).hasClass('xhx')){
            $('.xhx').removeClass('xhx')
            $(this).addClass("xhx")
        }
    })
    $("#zx").on("click",function(){
        $(".xs").show()
        $(".yc").hide()
    })
    $("#jp").on("click",function(){
        $(".xs").hide()
        $(".yc").show()
    })
</script>
</body>
</html>
