<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--{if $app.app_stitle}-->
    <title><!--{$app.app_stitle}--></title>
    <meta name="keywords" content="<!--{$app.app_seokey}-->" />
    <meta name="description" content="<!--{$app.app_seodesc}-->" />
    <!--{else}-->
    <title><!--{$setting.seo_title}--></title>
    <meta name="keywords" content="<!--{$setting.seo_keywords}-->" />
    <meta name="description" content="<!--{$setting.seo_description}-->" />
    <!--{/if}-->
    <!--{include file="inc_head.php"}-->
</head>
<body>

<!--{include file="inc_top.php"}-->

<!--{include file="inc_menu.php"}-->

<!-- 当前位置 -->
<div class="box">
    <p class="pos">当前位置：
        <a href="/">首页</a><b>&gt;</b>
        <!--{row name='app_category' id=$app.last_cate_id}-->
        <!--{if $row.parent_id ==1}-->
        <a href="<!--{link m='softs'}-->">软件</a>
        <b>&gt;</b>
        <a href="<!--{link m='softs' cate_id=$app.last_cate_id}-->"><!--{$row.cname}--></a>
        <!--{else}-->
        <a href="<!--{link m='games'}-->">游戏</a>
        <b>&gt;</b>
        <a href="<!--{link m='games' cate_id=$app.last_cate_id}-->"><!--{$row.cname}--></a>
        <!--{/if}-->
        <!--{/row}-->
        <b>&gt;</b>
        <span><!--{$app.app_title}--></span>
    </p>
</div>
<!-- 当前位置 -->

<div class="box2">
    <div class="as_main fl">
        <div class="app">
            <div class="app_leftinfo">
                <img src="<!--{imageurl url =$app.app_logo}-->" width="100" height="100" data-bd-imgshare-binded="1">
                <h1><!--{$app.app_title}--></h1>
                <p>大小：<em><!--{round($app.history_size/1024/1024,2)}-->MB</em>更新：<em><!--{$app.app_update_time|date_format:"%Y-%m-%d"}--></em>版本：<em><!--{$app.history_version}--></em></p>
                <p>分类：<!--{row name='app_category' id=$app.last_cate_id}-->
                    <b><a><!--{$row.cname}--></a></b>
                    <!--{/row}-->
                <ul class="app_btn">
                    <li>
                        <a href="<!--{link m='download' app_id=$app.app_id type=1}-->" style="color:#FFF;"><span class="btn_phone" style="background-color: rgb(74, 193, 92);"><i></i>安卓下载</span></a>
                    </li>
                    <li>
                        <a class="btn_velocity" target="_blank" href="<!--{link m='download' app_id=$app.app_id type=2 }-->"><i></i>苹果下载</a>
                    </li>

                </ul>
            </div>
            <div class="app_rightcode">
                <div class="rcode_box">
                    <h2>扫码安装</h2>
                    <div class="rcode_140"><img src="<!--{link m='qrcode' app_id=$app.app_id}-->" data-bd-imgshare-binded="1"></div>
                    <!--<a href="#" target="_blank">扫码工具下载</a>-->
                </div>
                <div class="rcode_tri"></div>
            </div>
            <div class="app_hang">
                <!--<a href="" class="hang_3">电脑版</a>-->
            </div>
        </div>
        <div style="clear:both"></div>
        <div class="ad_728" style="padding-bottom:0px;"></div>
        <div class="app_info">
            <h2><!--{$app.app_title}-->截图</h2>
            <div class="infopic">
                <div class="picbox">
                    <ul class="piclist" style="width: 1860px;">
                        <!--{imagelist app_id=$app.app_id}-->
                        <li style="width: 180px;"><a href="<!--{$imagelist.resource_url}-->" data-lightbox="s1" data-text="<!--{$app.app_title}-->"><img src="<!--{$imagelist.resource_url}-->" alt="<!--{$app.app_title}-->" data-bd-imgshare-binded="1" height="320"></a></li>
                        <!--{/imagelist}-->
                    </ul>
                </div>
                <div class="gn_prev"></div>
                <div class="gn_next"></div>
            </div>
        </div>
        <div class="app_info">
            <h2>官方介绍</h2>
            <div class="p_info"><!--{$app.app_desc}--></div>
            <div class="p_more"><a href="javascript:;">更多...</a></div>
        </div>
        <div class="app_info">
            <div><h2><!--{$app.app_title}-->相关应用</h2></div>
            <ul class="wz_list_double">
                <!--{relevant cid=$app.last_cate_id row=6}-->
                <li>
                    <em><a><!--{row name='app_category' id=$app.last_cate_id}--><!--{$row.cname}--><!--{/row}--></a></em>
                    <a href="<!--{link m='app' app_id=$relevant.app_id}-->" class="wz_tit" target="_blank"><!--{$relevant.app_title}--></a>
                </li>
                <!--{/relevant}-->
            </ul>
        </div>
        <div id="dlode" name="dlode" class="app_info">
            <div><h2>下载<!--{$app.app_title}-->的用户还下载了</h2></div>
            <ul class="cai_list">
                <!--{relevant cid=$app.last_cate_id row=8}-->
                <li>
                    <a href="<!--{link m='app' app_id=$relevant.app_id}-->"><img src="<!--{imageurl url =$relevant.app_logo}-->" title="<!--{$relevant.app_title}-->" data-bd-imgshare-binded="1"></a>
                    <section>
                        <h3><a href="<!--{link m='app' app_id=$relevant.app_id}-->"><!--{$relevant.app_title}--></a></h3>
                        <p>大小: <!--{round($relevant.history_size/1024/1024,2)}-->MB</p>
                        <p><a href="<!--{link m='app' app_id=$relevant.app_id}-->">下载</a></p>
                    </section>
                </li>
                <!--{/relevant}-->
            </ul>
        </div>
    </div>

    <!-- 热门推荐应用 -->
    <div class="as_sub fr">
        <div class="tj_app">
            <div class="sub_tit"><!--{row name='recommend' id=29}--><!--{$row.area_title}--><!--{/row}--></div>
            <ul>
                <!--{recommend id=29 row=10}-->
                <li>
                    <a target="_blank" href="<!--{link m='app' app_id=$recommend.app_id}-->"><img src="<!--{imageurl url = $recommend.app_logo}-->"  width="50" height="50"></a>
                    <div class="app_name"><a target="_blank" href="<!--{link m='app' app_id=$recommend.app_id}-->"><!--{$recommend.app_title}--></a></div>
                    <p><a target="_blank" href="<!--{link m='app' app_id=$recommend.app_id}-->" class="btn_new">下载</a><!--{countdown down=$recommend.app_down}-->+人在玩</p>
                </li>
                <!--{/recommend}-->
            </ul>
        </div>
        <span class="pic_gap"></span>
        <span class="pic_gap"></span>
    </div>
    <!-- 热门推荐应用 -->
</div>
<!--{include file="inc_flink.php"}-->

<!--{include file="inc_foot.php"}-->

<script type="text/javascript">
    Date.prototype.Format = function (fmt) { //author: meizz
        var o = {
            "M+": this.getMonth() + 1, //月份
            "d+": this.getDate(), //日
            "h+": this.getHours(), //小时
            "m+": this.getMinutes(), //分
            "s+": this.getSeconds(), //秒
            "q+": Math.floor((this.getMonth() + 3) / 3), //季度
            "S": this.getMilliseconds() //毫秒
        };
        if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
        for (var k in o)
            if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
        return fmt;
    }
    $(document).ready(function() {
        var i = 2;
        $("#morePage").click(function() {
            $.ajax({
                type: "POST",
                url: "<!--{link m='commentLoad'}-->",
                data: {'page': i++,'appid':<!--{$app.app_id}-->},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var game_html = '';
                        $.each(msg.list, function (k, v) {
                            var datecou = new Date(parseInt(v.comment_date) * 1000).Format("yyyy-MM-dd hh:mm:ss");
                            game_html += '<li class="normal-li">';
                            game_html += ' <p class="first">';
                            game_html += '<a href="" class="pic" target="_blank"> <img src="<!--{$tpl_path}-->images/107.jpg"></a>';
                            game_html += ' <span class="name">'+v.comment_uname+'</span>';
                            game_html += '  <span>'+datecou+'</span>';
                            game_html += ' <div class="cmt"> ';
                            game_html += '</p>';
                            game_html += ' <p class="cmt-content"> ';
                            game_html += '<span>'+v.comment_content+'</span>';
                            game_html += ' </p>';
                            game_html += '</li>';
                        });
                        $("#game_rank").append(game_html);
                    }else{
                        $("#morePage").html('加载完成');
                    }
                }
            });
        });
    });
</script>
</body>
</html>