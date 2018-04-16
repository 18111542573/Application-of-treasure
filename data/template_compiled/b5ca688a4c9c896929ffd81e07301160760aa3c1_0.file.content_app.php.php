<?php /* Smarty version 3.1.27, created on 2018-03-22 06:54:20
         compiled from "E:\www\711cms\templates\template_002\content_app.php" */ ?>
<?php
/*%%SmartyHeaderCode:11899542365ab3531cf11ec6_76730987%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5ca688a4c9c896929ffd81e07301160760aa3c1' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_002\\content_app.php',
      1 => 1521700689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11899542365ab3531cf11ec6_76730987',
  'variables' => 
  array (
    'app' => 0,
    'setting' => 0,
    'row' => 0,
    'imagelist' => 0,
    'relevant' => 0,
    'tpl_path' => 0,
    'comment_code' => 0,
    'commentlist' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3531d02d6e8_13133544',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3531d02d6e8_13133544')) {
function content_5ab3531d02d6e8_13133544 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countstar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countstar.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_imagelist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.imagelist.php';
if (!is_callable('smarty_block_relevant')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.relevant.php';
if (!is_callable('smarty_function_commentcode')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.commentcode.php';
if (!is_callable('smarty_block_commentlist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.commentlist.php';
if (!is_callable('smarty_block_list')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';

$_smarty_tpl->properties['nocache_hash'] = '11899542365ab3531cf11ec6_76730987';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_seokey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_seodesc'];?>
" />
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</head>

<body>
<div id="header">

    <?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="erjinav clearfix">
        <?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
</div>


<div id="main" class="layout">

    <!-- inner -->
    <div class="inner">
        <div id="main" class="layout clearfix">
            <div class="app_content">
                <div class="breadnav"><a href="/" target="_self">首页</a>&gt;
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if ($_smarty_tpl->tpl_vars['row']->value['parent_id'] == 1) {?>
                    <a href="<?php echo smarty_function_link(array('m'=>'list_soft'),$_smarty_tpl);?>
" target="_blank">软件</a>
                    &gt;<a href="<?php echo smarty_function_link(array('m'=>'list_soft','cate_id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']),$_smarty_tpl);?>
" target="_blank">
                        <?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</a>&gt;
                    <?php } else { ?>
                    <a href="<?php echo smarty_function_link(array('m'=>'list_game'),$_smarty_tpl);?>
" target="_blank">游戏</a>
                    &gt;<a href="<?php echo smarty_function_link(array('m'=>'list_game','cate_id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']),$_smarty_tpl);?>
" target="_blank">
                        <?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</a>&gt;
                    <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <a href=""><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</a></div>
                <div class="app_content_intro cbox">

                    <div class="app_content_introbox clearfix">
                        <div class="app_content_introbox1">
                            <div class="app_icon">
                                <i class="app_img_none"></i>
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['app']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
">
                            </div>
                            <?php if (false) {?>
                            <p class="feiyong">
                                <?php if ($_smarty_tpl->tpl_vars['app']->value['app_type'] == 1) {?>免费<?php } else { ?>收费<?php }?>
                            </p>
                            <?php }?>
                        </div>
                        <div class="app_gcon2">
                            <h1><a href=""><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</a></h1>

                            <p class="app_gcon2_pf"><span class="level_big">
                                <i id="pfuc_cur" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['app']->value['app_recomment']),$_smarty_tpl);?>
></i>
                            </span><em><?php echo $_smarty_tpl->tpl_vars['app']->value['app_grade'];?>
</em>(已有<?php echo $_smarty_tpl->tpl_vars['app']->value['app_comments'];?>
人评分)<a
                                    onclick="setTimeout('document.getElementById(\'commentText\').focus()',120); return false;"
                                    href="javascript:void();" class="woyaopingfen">我要评分</a></p>
                            <dl class="clearfix">
                                <dt>版　本：</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['app']->value['history_version'];?>
</dd>
                                <dt>类　型：</dt>
                                <dd><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</dd>
                                <dt>下载量：</dt>
                                <dd><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['app']->value['app_down']),$_smarty_tpl);?>
</dd>
                                <dt>大　小：</dt>
                                <dd><?php echo round($_smarty_tpl->tpl_vars['app']->value['history_size']/1024/1024,2);?>
MB</dd>
                                <dt>时　间：</dt>
                                <dd><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['app']->value['app_update_time'],"%Y-%m-%d");?>
</dd>
                            </dl>
                        </div>
                        <div class="app_gcon3">
                            <div class="erweimaxz_tu"><img src="<?php echo smarty_function_link(array('m'=>'qrcode','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
"></div>
                            <!--二维码图片放到div里面-->
                            <p>扫二维码下载到手机</p>
                            <a href="javascript:void(0)" class="jiucuo"><span>纠错举报</span></a>
                        </div>
                        <div class="jiucuobox">
                            <div class="jiucuo_head"><a href="javascript:void(0)" class="jiucuo_guanbi">关闭</a>纠错举报</div>
                            <div class="jiucuo_con">
                                <form method="post">
                                    <div class="jiucuo_con_tit"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</div>
                                    <ul>
                                        <li><input type="checkbox" value="无法下载" name="reportype[1]"
                                                   id="reportype1"><label for="reportype1">无法下载</label></li>
                                        <li><input type="checkbox" value="无法安装启动" name="reportype[2]"
                                                   id="reportype2"><label for="reportype2">无法安装启动</label></li>
                                        <li><input type="checkbox" value="版本太旧需要更新" name="reportype[3]" id="reportype5"><label
                                                for="reportype5">版本太旧需要更新</label></li>
                                        <li><input type="checkbox" value="恶意扣费" name="reportype[4]"
                                                   id="reportype6"><label for="reportype6">恶意扣费</label></li>
                                        <li><input type="checkbox" value="携带病毒" name="reportype[5]"
                                                   id="reportype7"><label for="reportype7">携带病毒</label></li>
                                        <li><input type="checkbox" value="含有恶意插件" name="reportype[6]"
                                                   id="reportype8"><label for="reportype8">含有恶意插件</label></li>
                                        <li><input type="checkbox" value="侵犯版权" name="reportype[7]"
                                                   id="reportype9"><label for="reportype9">侵犯版权</label></li>
                                    </ul>
                                    <textarea name="jiucuotext" id="jiucuotext"></textarea>
                                    <input type="hidden" name="appid" value="708">
                                    <input type="hidden" name="type" value="2">
                                </form>
                            </div>
                            <div class="jiucuo_foot"><input type="submit" name="jubao" value="提交" class="jiucuo_tj"><a
                                    href="#" class="jiucuo_qx">取消</a></div>

                        </div>
                    </div>
                    <!--判断是有有apk下载包-->
                    <div class="app_content_xiazai clearfix">
                        <div class="app_content_xiazai_b">
                            <p class="clear"><a class="mt5 btn btn-style8 btn-xl " href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'type'=>1),$_smarty_tpl);?>
">安卓下载</a></p>
                            <p class="clear"><a class="mt5 btn btn-style8 btn-style08 btn-x2" href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'type'=>2),$_smarty_tpl);?>
" target="_blank">苹果下载</a></p>
                        </div>
                    </div>
                    <!--判断是有有apk下载包结束-->


                    <div class="app_content_introcon">
                        <h2><a class="zhankai_b" href="javascript:void(0)" style="display: block;">+ 展开全部</a><a
                                class="zhankai_b2"
                                onclick="setTimeout('document.getElementById(\'commentText\').focus()',120); return false;"
                                href="javascript:void();" style="display: none;">- 收起部分</a>《<a href="">
                                <?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</a>》介绍</h2>

                        <div class="app_content_introcon_js" style="display: block; height: 60px;">
                            <?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>
<br>
                        </div>
                        <h2>《<a href=""><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</a>》截图</h2>


                        <div class="infopic">
                            <div class="picbox">
                                <ul class="gallery piclist">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <li style="width: 213px;"><a rel="prettyPhoto[]" target="_blank"><img
                                                src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
"></a></li>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </ul>
                            </div>
                            <div class="pic_prev"></div>
                            <div class="pic_next"></div>
                        </div>

                    </div>
                </div>
                <div class="haixihuan cbox">
                    <h2 class="h2tit">你可能还会喜欢</h2>
                    <ul class="clearfix">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('relevant', array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>6,'order'=>'app_down desc')); $_block_repeat=true; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>6,'order'=>'app_down desc'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="dangge_app">
                            <a href="<?php echo smarty_function_link(array('m'=>'content_app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
" class="app_icon"><i
                                    class="app_img_none"></i><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['relevant']->value['app_logo']),$_smarty_tpl);?>
"
                                                                  alt="<?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
"></a>

                            <div class="app_name"><a href="<?php echo smarty_function_link(array('m'=>'content_app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
</a></div>
            <span class="star level_big">
                <i id="pfuc_cur" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['relevant']->value['app_recomment']),$_smarty_tpl);?>
 ></i>
            </span>
                            <span class="category">类型：<?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</span>

                            <div class="app_xiazaib"><a
                                    href="<?php echo smarty_function_link(array('m'=>'content_app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
">下载</a></div>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>6,'order'=>'app_down desc'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    </ul>
                </div>
                <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery.form.js" type="text/javascript"><?php echo '</script'; ?>
>
                <?php if (!empty($_smarty_tpl->tpl_vars['comment_code']->value)) {?>
                <?php echo smarty_function_commentcode(array(),$_smarty_tpl);?>

                <?php } else { ?>
                <div class="pinglun_con cbox" id="iwanttocomment">
                    <div id="comment">
                        <!-- pl -->
                        <div class="mod-cmt-list">
                            <div class="hd clearfix">
                                <div class="cmt-tab">
                                </div>
                            </div>
                            <ul class="bd listM_box" id="game_rank">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('commentlist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>6)); $_block_repeat=true; echo smarty_block_commentlist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li class="clearfix">
                                    <a href="javascript:;" class="pic">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/107.jpg"/> </a>

                                    <div class="cmt-info">
                                        <p class="uname"><?php echo $_smarty_tpl->tpl_vars['commentlist']->value['comment_uname'];?>
</p>

                                        <div class="clearfix">

                                            <div class="cmt">
                                                <font style="color:#333333;"></font>
                                                <?php echo $_smarty_tpl->tpl_vars['commentlist']->value['comment_content'];?>

                                            </div>
                                        </div>
                                        <p class="time">
                                            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commentlist']->value['comment_date'],"%Y-%m-%d %H:%M:%S");?>
</p>
                                    </div>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_commentlist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                            <div class="ft">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>1)); $_block_repeat=true; echo smarty_block_list(array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <a id="more_comment" class="more" style="display: none;"> <span>正在加载最近15条评论...</span>
                                </a>
                                <a class="more" id="morePage" style="cursor:pointer;">查看更多评论</a>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </div>

                        </div>
                        <!-- pl -->
                    </div>
                </div>
                <div class="pinglun_box cbox">
                    <h2 class="h2tit">发表评论</h2>

                    <div class="post_form clearfix">
                        <div class="post_doing_form">
                            <form id="commentForm" name="quickcommentform"
                                  action="/api.php?c=ajax&m=comment&app_id=<?php echo $_smarty_tpl->tpl_vars['app']->value['app_id'];?>
" method="post" class="quickpost">
                                <div class="input_block">
                                    <div class="pingfeng" id="star"><!--pingfeng开始-->
                                        <div>
                                            <div class="clearfix">

                                                <span>您给应用的评分（鼠标选择星星）：</span>
                                                <ul id="rate">
                                                    <li class=""><a href="javascript:;" class="selected">1</a></li>
                                                    <li class=""><a href="javascript:;" class="selected">2</a></li>
                                                    <li class=""><a href="javascript:;" class="selected">3</a></li>
                                                    <li class=""><a href="javascript:;" class="selected">4</a></li>
                                                    <li class=""><a href="javascript:;" class="selected">5</a></li>
                                                </ul>
                                                <span></span>

                                                <p style="display: none; left: 134px;"><em><b>5</b> 分 非常满意</em>强烈推荐</p>
                                            </div>

                                        </div>
                                        <input type="hidden" id="stars" name="stars" value="3">
                                    </div>
                                    <!--pingfeng结束-->

                                    <textarea id="commentText" name="comment" style="resize:none;"></textarea>

                                    <div style="margin-top:10px;width:410px;height:40px;">
                                        <span class="comment_l">
                                            昵称：<input type="text" class="comment_ipt" value="" name="user"/>
                                        </span>
                                        <span class="comment_l">
                                            验证码：<input type="text" style="width:60px;" class="comment_ipt" value=""
                                                       name="xcode" tabindex="4"/>
                                        </span>
                                        <span class="comment_l">
                                            <img onclick="this.src='/api.php?c=index&m=xcode&t='+Math.random();"
                                                 style="width:60px;height:25px;margin:-4px 8px 0 6px; display: inline-block;vertical-align: middle;"
                                                 src="<?php echo smarty_function_link(array('m'=>'xcode'),$_smarty_tpl);?>
" id="chk_code" title="点击更换验证码">
                                        </span>

                                    </div>

                                </div>
                                <div class="submit_block">
                                    <input type="button" id="sub" name="commentsubmit_btn" class="submit" value="发表评论"
                                           onclick="send_comment();">
                                    <span id="showtips" style="color:Red;"></span>
                                </div>
                                <input type="hidden" name="comnum" value="0">
                                <input type="hidden" name="refer" value="detail.php?n=">
                                <input type="hidden" name="appid" value="708">
                                <input type="hidden" name="id" value="commentid">
                                <input type="hidden" name="commentsubmit" value="true">
                                <span id="__quickcommentform_708"></span>
                                <input type="hidden" name="formhash" value="2a6ed5b0">
                            </form>
                        </div>

                        <div class="tips">
                            <p>小贴士：</p>

                            <p>1、为了让您的评论能够被更多玩家看到请勿恶意灌水。</p>

                            <p>2、谢绝人身攻击、地域歧视、刷屏、广告等恶性言论。</p>

                            <p>3、所有评论均代表玩家本人意见，不代表<a href="/">安卓应用</a>立场。</p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="sidebar">

                <!--广告-->

                <div class="sidebar_tltj cbox">
                    <h2 class="h2tit mb10">同类热门推荐</h2>
                    <ul>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('relevant', array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>8,'order'=>'app_down desc')); $_block_repeat=true; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>8,'order'=>'app_down desc'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="dangge_app">
                            <a href="<?php echo smarty_function_link(array('m'=>'content_app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
" class="app_icon"><i
                                    class="app_img_none"></i><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['relevant']->value['app_logo']),$_smarty_tpl);?>
"
                                                                  alt="<?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
"></a>

                            <div class="app_name"><a href="<?php echo smarty_function_link(array('m'=>'content_app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
</a></div>
             <span class="star level_big">
       <i id="pfuc_cur" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['relevant']->value['app_recomment']),$_smarty_tpl);?>
 ></i>
             </span>
                            <span class="category">类型：<?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</span>

                            <div class="app_xiazaib"><a
                                    href="<?php echo smarty_function_link(array('m'=>'content_app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
">下载</a></div>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>8,'order'=>'app_down desc'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
                <div class="sidebar_tltj cbox">
                    <h2 class="h2tit mb10">下载排行</h2>
                    <ul>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>66,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>66,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li class="dangge_app">
                            <a href="<?php echo smarty_function_link(array('m'=>'content_app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="app_icon"><i
                                    class="app_img_none"></i><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="下载"></a>

                            <div class="app_name"><a href="<?php echo smarty_function_link(array('m'=>'content_app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></div>
            <span class="star level_big">
       <i id="pfuc_cur" <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
 ></i>
             </span>
                            <span class="category">类型：<?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</span>

                            <div class="app_xiazaib"><a href="">下载</a></div>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>66,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--/ inner -->
    <?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>

<?php echo '<script'; ?>
 type="text/javascript">
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
    $(document).ready(function () {
        var i = 2;
        $("#morePage").click(function () {
            $.ajax({
                type: "POST",
                url: "<?php echo smarty_function_link(array('m'=>'commentLoad'),$_smarty_tpl);?>
",
                data: {'page': i++, 'appid':<?php echo $_smarty_tpl->tpl_vars['app']->value['app_id'];?>
},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var game_html = '';
                        $.each(msg.list, function (k, v) {
                            var datecou = new Date(parseInt(v.comment_date) * 1000).Format("yyyy-MM-dd hh:mm:ss");
                            game_html += '<li class="clearfix"><a href="" class="pic" target="_blank"> <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/107.jpg"></a>';
                            game_html += '<div class="cmt-info">';
                            game_html += '<p class="uname">' + v.comment_uname + '</p>';
                            game_html += '<div class="clearfix">';
                            game_html += '<div class="cmt">';
                            game_html += v.comment_content;
                            game_html += '</div>';
                            game_html += '</div>';
                            game_html += '<p class="time">' + datecou + '</p>';
                            game_html += '</div></li>';
                        });
                        $("#game_rank").append(game_html);
                    } else {
                        $("#morePage").html('加载完成');
                    }
                }
            });
        });
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="application/javascript">
    var oStar = document.getElementById("star");
    var aLi = oStar.getElementsByTagName("li");
    var oUl = oStar.getElementsByTagName("ul")[0];
    var oSpan = oStar.getElementsByTagName("span")[1];
    var oP = oStar.getElementsByTagName("p")[0];
    var i = iScore = iStar = 0;
    var aMsg = [
        "很不满意|不给力",
        "不满意|凑合",
        "一般|一般",
        "满意|还不错",
        "非常满意|强烈推荐"
    ]
    for (i = 1; i <= aLi.length; i++) {
        aLi[i - 1].index = i;
        //鼠标移过显示分数
        aLi[i - 1].onmouseover = function () {
            fnPoint(this.index);
            //浮动层显示
            oP.style.display = "block";
            //计算浮动层位置
            oP.style.left = oUl.offsetLeft + this.index * this.offsetWidth - 104 + "px";
            //匹配浮动层文字内容
            oP.innerHTML = "<em><b>" + this.index + "</b> 分 " + aMsg[this.index - 1].match(/(.+)\|/)[1] + "</em>" + aMsg[this.index - 1].match(/\|(.+)/)[1]
        };
        //鼠标离开后恢复上次评分
        aLi[i - 1].onmouseout = function () {
            fnPoint();
            //关闭浮动层
            oP.style.display = "none"
        };
        //点击后进行评分处理
        aLi[i - 1].onclick = function () {
            $("#xx").val($(this).children(".selected").text());
            iStar = this.index;
            oP.style.display = "none";
            oSpan.innerHTML = "<strong>" + (this.index) + " 分</strong> (" + aMsg[this.index - 1].match(/\|(.+)/)[1] + ")"
        }
    }
    //评分处理
    function fnPoint(iArg) {
        //分数赋值
        iScore = iArg || iStar;
        for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "pd on" : "";
    }
    function send_comment() {
        $.post($('#commentForm').attr('action'), $('#commentForm').serialize(), function (result) {
            if (!result) {
                alert('远程服务器无响应');
                return false;
            }
            alert(result.msg);
        }, 'json');
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $(".app_content_tu_list").hover(function () {
            $(this).addClass("app_content_tu_hover");
        }, function () {
            $(this).removeClass("app_content_tu_hover");
        });
    });
    $(document).ready(function () {
        $(".zhankai_b").click(function () {
            $(".zhankai_b").css("display", "none");
            $(".zhankai_b2").css("display", "block");
            $(".app_content_introcon_js").css({
                "display": "block",
                "height": "auto",
            });
        });
    });
    $(document).ready(function () {
        $(".zhankai_b2").click(function () {
            $(".zhankai_b2").css("display", "none");
            $(".zhankai_b").css("display", "block");
            $(".app_content_introcon_js").css({
                "display": "block",
                "height": "60px",
            });
        });
    });


    /*--纠错--*/
    $(document).ready(function () {
        $(".jiucuo").click(function () {
            $(".jiucuobox").css("display", "block");
        });
        $(".jiucuo_guanbi").click(function () {
            $(".jiucuobox").css("display", "none");
        });
        $(".jiucuo_qx").click(function () {
            $(".jiucuobox").css("display", "none");
        });
    });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>