<?php /* Smarty version 3.1.27, created on 2018-03-21 02:18:38
         compiled from "E:\www\711cms\templates\template_003\content_app.php" */ ?>
<?php
/*%%SmartyHeaderCode:5085394125ab1c0fe10ac07_53260500%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b04e936776b94d6d299a0c89fb01a5ce9c9c32d4' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\content_app.php',
      1 => 1521598716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5085394125ab1c0fe10ac07_53260500',
  'variables' => 
  array (
    'app' => 0,
    'setting' => 0,
    'row' => 0,
    'imagelist' => 0,
    'comment_code' => 0,
    'tpl_path' => 0,
    'commentlist' => 0,
    'relevant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab1c0fe189b82_05651592',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab1c0fe189b82_05651592')) {
function content_5ab1c0fe189b82_05651592 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_block_imagelist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.imagelist.php';
if (!is_callable('smarty_function_commentcode')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.commentcode.php';
if (!is_callable('smarty_block_commentlist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.commentlist.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_list')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_block_relevant')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.relevant.php';

$_smarty_tpl->properties['nocache_hash'] = '5085394125ab1c0fe10ac07_53260500';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
    <?php if ($_smarty_tpl->tpl_vars['app']->value['app_stitle']) {?>
    <title><?php echo $_smarty_tpl->tpl_vars['app']->value['app_stitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_seokey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_seodesc'];?>
" />
    <?php } else { ?>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
" />
    <?php }?>


    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $(".box").jCarouselLite({
                btnPrev: ".prev",
                btnNext: ".next",
                auto: 40000,//图片停留时间
                scroll: 1,//每次滚动覆盖的图片个数
                speed: 1000, //设置速度，0是不动。其次就是数字越大 ，移动越慢。
                vertical: false,//横向（true），竖向（false）
                visible: 4, //显示的数量
                circular: false //是否循环
            });
            $(".boxImg ul li:not(:first)").hide();
            $(".box ul li").each(function (i) {
                $(this).mouseover(function () {
                    $(".boxImg ul li").hide();
                    $($(".boxImg ul li")[i % ($(".box ul li").length / 3)]).fadeIn("slow");
                })
            })
        });
    <?php echo '</script'; ?>
>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="model crumb">
    <a>您的位置：</a>
    <a href="/">首页</a>
    <span>&gt;</span>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['row']->value['parent_id'] == 1) {?>
    <a href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
">软件</a>
    <span>&gt;</span>
    <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</a>
    <?php } else { ?>
    <a href="<?php echo smarty_function_link(array('m'=>'games'),$_smarty_tpl);?>
">游戏</a>
    <span>&gt;</span>
    <a href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</a>
    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <span>&gt;</span>
    <span class="cur"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</span>
</div>

<div class="gamed model">

    <!-- 游戏基本信息 start -->
    <div class="gamed-app">

        <div class="gamed-app-mes left">
            <div class="gamed-app-icon">
                <img class="icon-app" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['app']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
"
                     title="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
">
            </div>
            <h4 class="f20 font-bold"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</h4>

            <!--  <p class="f14">
                  <i class="icon-start-on"></i>
                  <i class="icon-start-on"></i>
                  <i class="icon-start-on"></i>
                  <i class="icon-start-on"></i>
                  <i class="icon-start-off"></i>
              </p>-->
            <p class="f12 down_padding">大小：<?php echo round($_smarty_tpl->tpl_vars['app']->value['history_size']/1024/1024,2);?>
MB</p>
            <p class="f12 down_padding">下载次数：<?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['app']->value['app_down']),$_smarty_tpl);?>
次</p>
        </div>
        <div class="gamed-app-qr right">
            <div class="left">
                <p class="clear"><a class="mt5 btn btn-style8 btn-xl " href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'type'=>1),$_smarty_tpl);?>
">安卓下载</a></p>
                <p class="clear"><a class="mt5 btn btn-style8 btn-style08 btn-x2" href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'type'=>2),$_smarty_tpl);?>
" target="_blank">苹果下载</a></p>
            </div>
            <div class="gamed-app-qr-code right">
                <p class="f14 tr">扫描二维码下载</p>
                <img class="icon-app mt5" src="<?php echo smarty_function_link(array('m'=>'qrcode','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
"/>
            </div>
        </div>
    </div>
    <!-- 游戏基本信息 start -->

    <!-- 精彩图集 start -->
    <h4 class="gamed-title">精彩图集</h4>
    <!-- 重置slick 样式 -->

    <div class="overflowh pb30">

        <div id="scroll">
            <span class="prev">上一张</span>

            <div class="box">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <img alt="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
" height="320" src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
"
                             title="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
"/>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
            <span class="next">下一张</span>

            <div class="boxImg">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><img alt="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
" height="320" src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
"
                             title="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
"/></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>

    </div>
    <!-- 精彩图集 end -->

    <!-- 游戏详情 start -->
    <h4 class="gamed-title">基本详情</h4>

    <div class="gamed-intro">
        <?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>

    </div>
    <!-- 游戏详情 end -->

    <!--游戏评论 start-->
<!--    <h4 class="gamed-title">评论</h4>-->
<!--    <div class="gamed-intro" style="margin-top:10px;">-->
<!--        <?php if (!empty($_smarty_tpl->tpl_vars['comment_code']->value)) {?>-->
<!--        <?php echo smarty_function_commentcode(array(),$_smarty_tpl);?>
-->
<!--        <?php } else { ?>-->
<!--        <form action="<?php echo smarty_function_link(array('m'=>'comment','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
" method="post" id="commentForm">-->
<!--            <div style="line-height:200%; font-size:14px">网友评论仅供网友表达个人看法，并不表明 <strong>本站</strong> 同意其观点或证实其描述</div>-->
<!--            <div id="star">-->
<!--                <span style="font-size:14px;" >点击星星对应用打分</span>-->
<!--                <ul>-->
<!--                    <li class=""><a href="javascript:;" class="selected">1</a></li>-->
<!--                    <li class=""><a href="javascript:;" class="selected">2</a></li>-->
<!--                    <li class=""><a href="javascript:;" class="selected">3</a></li>-->
<!--                    <li class=""><a href="javascript:;" class="selected">4</a></li>-->
<!--                    <li class=""><a href="javascript:;" class="selected">5</a></li>-->
<!--                </ul>-->
<!--                <span></span>-->
<!--                <p style="display: none; left: 134px;"><em><b>5</b> 分 非常满意</em>强烈推荐</p>-->
<!--            </div>-->
<!--            <div style="margin-top:5px;">-->
<!--                <textarea name="comment" style="width:100%;height:80px;border:1px solid #ccc;font-size:12px;line-height:200%;resize:none;"></textarea>-->
<!--            </div>-->
<!--            <div style="margin-top:10px;height:40px;">-->
<!--                            <span class="comment_l">-->
<!--                                昵称：<input type="text" class="comment_ipt" value="" name="user" />-->
<!--                            </span>-->
<!--                            <span class="comment_l">-->
<!--                                验证码：<input type="text" style="width:60px;" class="comment_ipt" value="" name="xcode" tabindex="4" />-->
<!--                            </span>-->
<!--                            <span class="comment_l">-->
<!--                                <img onclick="this.src='/api.php?c=index&m=xcode&t='+Math.random();" style="width:60px;height:25px;margin:-4px 8px 0 6px;vertical-align: middle;" src="<?php echo smarty_function_link(array('m'=>'xcode'),$_smarty_tpl);?>
" id="chk_code" title="点击更换验证码">-->
<!--                            </span>-->
<!--                            <span class="comment_l">-->
<!--                                <input type="button" style="width:auto;height:26px;" class="comment_ipt" value="发表评论" onclick="send_comment();" id="sub">-->
<!--                            </span>-->
<!--            </div>-->
<!--        </form>-->
<!--        <div class="mod-cmt-list">-->
<!--            <div class="hd clearfix">-->
<!--                <div class="cmt-tab">-->
<!--                    <ul class="clearfix">-->
<!--                        <li class="first selected" id="comment1"> <a href="#comment" name="comment">全部评论</a> </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <ul class="bd listM_box" id="game_rank">-->
<!--                <?php $_smarty_tpl->smarty->_tag_stack[] = array('commentlist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>5)); $_block_repeat=true; echo smarty_block_commentlist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
-->
<!--                <li class="clearfix">-->
<!--                    <a href="javascript:;" class="pic">-->
<!--                        <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/108.jpg"/>-->
<!--                    </a>-->
<!--                    <div class="cmt-info">-->
<!--                        <p class="uname"><?php echo $_smarty_tpl->tpl_vars['commentlist']->value['comment_uname'];?>
</p>-->
<!---->
<!--                        <div class="clearfix">-->
<!---->
<!--                            <div class="cmt">-->
<!--                                <font style="color:#333333;"></font>-->
<!--                                <?php echo $_smarty_tpl->tpl_vars['commentlist']->value['comment_content'];?>
-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <p class="time">-->
<!--                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commentlist']->value['comment_date'],"%Y-%m-%d %H:%M:%S");?>
</p>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_commentlist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
-->
<!--            </ul>-->
<!--            <div class="ft">-->
<!--                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>1)); $_block_repeat=true; echo smarty_block_list(array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
-->
<!--                <a id="more_comment" class="more" style="display: none;"> <span>正在加载最近15条评论...</span>-->
<!--                </a>-->
<!--                <a class="more" id="morePage" style="cursor:pointer;">查看更多评论</a>-->
<!--                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
-->
<!--                <div class="cmt-gotop" id="comment_up">-->
<!--                    <a href="#comment">回评论顶部</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="id_no_comment" class="no_page" style="display: none;">-->
<!--                该应用暂时还没有评论,欢迎您来抢沙发-->
<!--            </div>-->
<!--        </div>-->
<!--        <?php }?>-->
<!--    </div>-->
<!--    <?php echo '<script'; ?>
>-->
<!--        var oStar = document.getElementById("star");-->
<!--        var aLi = oStar.getElementsByTagName("li");-->
<!--        var oUl = oStar.getElementsByTagName("ul")[0];-->
<!--        var oSpan = oStar.getElementsByTagName("span")[1];-->
<!--        var oP = oStar.getElementsByTagName("p")[0];-->
<!--        var i = iScore = iStar = 0;-->
<!--        var aMsg = [-->
<!--            "很不满意|不给力",-->
<!--            "不满意|凑合",-->
<!--            "一般|一般",-->
<!--            "满意|还不错",-->
<!--            "非常满意|强烈推荐"-->
<!--        ]-->
<!--        for (i = 1; i <= aLi.length; i++) {-->
<!--            aLi[i - 1].index = i;-->
<!--            //鼠标移过显示分数-->
<!--            aLi[i - 1].onmouseover = function () {-->
<!--                fnPoint(this.index);-->
<!--                //浮动层显示-->
<!--                oP.style.display = "block";-->
<!--                //计算浮动层位置-->
<!--                oP.style.left = oUl.offsetLeft + this.index * this.offsetWidth - 104 + "px";-->
<!--                //匹配浮动层文字内容-->
<!--                oP.innerHTML = "<em><b>" + this.index + "</b> 分 " + aMsg[this.index - 1].match(/(.+)\|/)[1] + "</em>" + aMsg[this.index - 1].match(/\|(.+)/)[1]-->
<!--            };-->
<!--            //鼠标离开后恢复上次评分-->
<!--            aLi[i - 1].onmouseout = function () {-->
<!--                fnPoint();-->
<!--                //关闭浮动层-->
<!--                oP.style.display = "none"-->
<!--            };-->
<!--            //点击后进行评分处理-->
<!--            aLi[i - 1].onclick = function () {-->
<!--                $("#xx").val($(this).children(".selected").text());-->
<!--                iStar = this.index;-->
<!--                oP.style.display = "none";-->
<!--                oSpan.innerHTML = "<strong>" + (this.index) + " 分</strong> (" + aMsg[this.index - 1].match(/\|(.+)/)[1] + ")"-->
<!--            }-->
<!--        }-->
<!--        //评分处理-->
<!--        function fnPoint(iArg) {-->
<!--            //分数赋值-->
<!--            iScore = iArg || iStar;-->
<!--            for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "pd on" : "";-->
<!--        }-->
<!--        function send_comment() {-->
<!--            $.post($('#commentForm').attr('action'), $('#commentForm').serialize(), function (result) {-->
<!--                if (!result) {-->
<!--                    alert('远程服务器无响应');-->
<!--                    return false;-->
<!--                }-->
<!--                alert(result.msg);-->
<!--            }, 'json');-->
<!--        }-->
<!--        $(".setupextra").hover(-->
<!--            function () {-->
<!--                $(".erweimadiv").show();-->
<!--            },-->
<!--            function () {-->
<!--                $(".erweimadiv").hide();-->
<!--            }-->
<!--        );-->
<!--    <?php echo '</script'; ?>
>-->
<!--    <?php echo '<script'; ?>
 type="text/javascript">-->
<!--        Date.prototype.Format = function (fmt) { //author: meizz-->
<!--            var o = {-->
<!--                "M+": this.getMonth() + 1, //月份-->
<!--                "d+": this.getDate(), //日-->
<!--                "h+": this.getHours(), //小时-->
<!--                "m+": this.getMinutes(), //分-->
<!--                "s+": this.getSeconds(), //秒-->
<!--                "q+": Math.floor((this.getMonth() + 3) / 3), //季度-->
<!--                "S": this.getMilliseconds() //毫秒-->
<!--            };-->
<!--            if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));-->
<!--            for (var k in o)-->
<!--                if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));-->
<!--            return fmt;-->
<!--        }-->
<!--        $(document).ready(function() {-->
<!--            var i = 2;-->
<!--            $("#morePage").click(function() {-->
<!--                $.ajax({-->
<!--                    type: "POST",-->
<!--                    url: "<?php echo smarty_function_link(array('m'=>'commentLoad'),$_smarty_tpl);?>
",-->
<!--                    data: {'page': i++,'appid':<?php echo $_smarty_tpl->tpl_vars['app']->value['app_id'];?>
},-->
<!--                    dataType: 'json',-->
<!--                    success: function (msg) {-->
<!--                        if (msg.status == '1') {-->
<!--                            var game_html = '';-->
<!--                            $.each(msg.list, function (k, v) {-->
<!--                                var datecou = new Date(parseInt(v.comment_date) * 1000).Format("yyyy-MM-dd hh:mm:ss");-->
<!--                                game_html += '<li class="clearfix"><a href="" class="pic" target="_blank"> <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/108.jpg"></a>';-->
<!--                                game_html += ' <div class="cmt-info"> ';-->
<!--                                game_html += ' <p class="uname">' + v.comment_uname +'</p>';-->
<!--                                game_html += ' <div class="clearfix">';-->
<!--                                game_html += ' <div class="cmt"> ';-->
<!--                                game_html += v.comment_content;-->
<!--                                game_html += '</div> ';-->
<!--                                game_html += '</div> ';-->
<!--                                game_html += '<p class="time">'+datecou+'</p>';-->
<!--                                game_html += '</div></li>';-->
<!--                            });-->
<!--                            $("#game_rank").append(game_html);-->
<!--                        }else{-->
<!--                            $("#morePage").html('加载完成');-->
<!--                        }-->
<!--                    }-->
<!--                });-->
<!--            });-->
<!--        });-->
<!--    <?php echo '</script'; ?>
>-->

    <!--游戏评论 end-->

    <!-- 猜你喜欢 start -->
    <h4 class="gamed-title">猜你喜欢</h4>
    <ul class="gamed-related app-qr-ani">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('relevant', array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>8,'order'=>'app_down desc')); $_block_repeat=true; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>8,'order'=>'app_down desc'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li>
            <div class="gamed-related-icon">
                <a class="app-qr-ani-link" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
"
                   title="<?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
" target="_blank">
                    <img class="icon-app" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['relevant']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
">
                </a>
            </div>
            <h5 class="f14"><?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
</h5>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['relevant']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['relevant']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<p class="f12">
                <?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>

            </p><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['relevant']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <a class="btn btn-style2 ml100 ml110 mt5" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
"
               title="下载《<?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
》游戏" target="_blank">下载</a>
        </li>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>8,'order'=>'app_down desc'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
    <!-- 猜你喜欢 end -->

</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</body>
</html>
<?php }
}
?>