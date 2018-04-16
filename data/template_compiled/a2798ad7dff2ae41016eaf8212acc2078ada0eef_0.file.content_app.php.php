<?php /* Smarty version 3.1.27, created on 2018-03-22 06:55:40
         compiled from "E:\www\711cms\templates\template_004\content_app.php" */ ?>
<?php
/*%%SmartyHeaderCode:4577791055ab3536c596581_91664849%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2798ad7dff2ae41016eaf8212acc2078ada0eef' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_004\\content_app.php',
      1 => 1521700710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4577791055ab3536c596581_91664849',
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
  'unifunc' => 'content_5ab3536c5f0321_09756206',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3536c5f0321_09756206')) {
function content_5ab3536c5f0321_09756206 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_imagelist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.imagelist.php';
if (!is_callable('smarty_function_commentcode')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.commentcode.php';
if (!is_callable('smarty_block_commentlist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.commentlist.php';
if (!is_callable('smarty_block_list')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_block_relevant')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.relevant.php';

$_smarty_tpl->properties['nocache_hash'] = '4577791055ab3536c596581_91664849';
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


</head>
<body>
<div id="doc4">
    <div id="hd">
        <div class="mod-search-hd-bunny">
            <?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
    </div>

    <div id="bd" class="gx-detail ">
        <div class="crumb">
            <a>您的位置：</a>
            <a href="/">首页</a>
            <span>&gt;</span>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if ($_smarty_tpl->tpl_vars['row']->value['parent_id'] == 1) {?>
            <a href="<?php echo smarty_function_link(array('m'=>'more_soft'),$_smarty_tpl);?>
">软件</a>
            <span>&gt;</span>
            <a href="<?php echo smarty_function_link(array('m'=>'more_soft','cate_id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</a>
            <?php } else { ?>
            <a href="<?php echo smarty_function_link(array('m'=>'more_game'),$_smarty_tpl);?>
">游戏</a>
            <span>&gt;</span>
            <a href="<?php echo smarty_function_link(array('m'=>'more_game','cate_id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</a>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <span>&gt;</span>
            <span class="cur"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</span>
        </div>
        <div class="grid">
            <div class="col9 first">
                <div class="mod-soft-info clearfix" data-desc="detailinfo">
                    <div class="soft-show">
                        <div class="pic">
                            <img class="pngfix" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['app']->value['app_logo']),$_smarty_tpl);?>
"/>
                        </div>
                    </div>
                    <div class="options">
                        <p class="clear"><a class="mt5 btn btn-style8 btn-xl " href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'type'=>1),$_smarty_tpl);?>
">安卓下载</a></p>
                        <p class="clear"><a class="mt5 btn btn-style8 btn-style08 btn-x2" href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'type'=>2),$_smarty_tpl);?>
" target="_blank">苹果下载</a></p>
                        <div class="setupextra">
                            <span class="sep"></span>
                            <a href="javascript:void(0)" >二维码下载</a>
                            <div class="erweimadiv"><img width="150" height="150" src="<?php echo smarty_function_link(array('m'=>'qrcode','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
"><i class="dot"></i></div>
                        </div>
                    </div>
                    <div class="intro">
                        <div class="soft-bc-info clearfix">
                            <h1><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</h1>
                            <span></span>
                        </div>
                        <div class="soft-extra-info">
                            <div class="mod-rate">
                                <!--  <span class="int"> 8 </span>
                                  <span class="point">.</span>
                                  <span class="decimal"> 2 </span>-->
                                <span class="scoretxt"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_grade'];?>
 分</span>
                            </div>
                            <span class="dl-cnt">下载次数：<?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['app']->value['app_down']),$_smarty_tpl);?>
次</span>
                            <span class="update-time">更新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['app']->value['app_update_time'],"%Y-%m-%d");?>
 </span>
                        </div>
                        <p class="other-dl-link">从其他市场下载： 暂无其他来源 </p>
                    </div>
                </div>
                <!--end of app info-->
                <div class="mod-detail-cmt">
                    <div class="hd-s clearfix">
                        <div class="tab">
                            <ul id="nsitem">
                                <li class="selected"><a href="javascript:;">详细信息 </a></li>
                            </ul>
                        </div>
                        <div id="poll-wrap">
                            <div class="mod-vote voteBox" id="poll">
                                <div id="star-wrap">
                                    <div class="data-info">
                                        请您评价：
                                    </div>
                                    <div class="data-sbox">
                                        <ul id="J-stars" class="data-star" style="z-index: 0;">
                                            <li><a class="one-star" title="很差" href="#"></a></li>
                                            <li><a class="two-stars" title="较差" href="#"></a></li>
                                            <li><a class="three-stars" title="一般" href="#"></a></li>
                                            <li><a class="four-stars" title="推荐" href="#"></a></li>
                                            <li><a class="five-stars" title="力荐" href="#"></a></li>
                                        </ul>
                                        <div id="J-rating" class="current-rating data-showstar"></div>
                                    </div>
                                </div>
                                <span class="pollinfo">每天限投一票</span>

                                <form autocomplete="off" style="display:none">
                                    请您评价：
                                    <label for="ipt-vote-good"><input id="ipt-vote-good" type="radio"
                                                                      value="1280398008034080" name="answer"/>很好</label>
                                    <label for="ipt-vote-normal"><input id="ipt-vote-normal" type="radio"
                                                                        value="1280398008034082"
                                                                        name="answer"/>一般</label>
                                    <label for="ipt-vote-bad"><input id="ipt-vote-bad" type="radio"
                                                                     value="1280398008034084" name="answer"/>很差</label>
                                    <input type="button" value="投票" class="formsub btn"/>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end of nstab-->
                    <div class="bd-s">
                        <div class="mod-pro-detail selected">
                            <div class="mod-pro-analysis">

                            </div>
                            <div class="mod-base-info">
                                <ul class="clearfix">
                                    <li>大小：<?php echo round($_smarty_tpl->tpl_vars['app']->value['history_size']/1024/1024,2);?>
MB</li>
                                    <li>版本：<?php echo $_smarty_tpl->tpl_vars['app']->value['history_version'];?>
</li>
                                    <li>系统：<?php echo $_smarty_tpl->tpl_vars['app']->value['history_system'];?>
</li>
                                    <li>分类：<?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>

                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
                                    <li>作者：<?php echo $_smarty_tpl->tpl_vars['app']->value['app_company'];?>
</li>
                                </ul>
                            </div>
                            <div class="mod-extra-info" id="J-desc">

                                <div class="bd" id="J-brief">
                                    <?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>

                                </div>
                                <div class="alldesc" id="J-alldesc">
                                    <?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>

                                </div>
                                <div class="ft" id="J-desc-expand" style="display: block;">
                                    <a href="#" id="J-showall" class="showall">展开</a>
                                    <a href="#" id="J-hideall" class="hideall">收起</a>
                                </div>
                            </div>
                            <div id="scrollbar" class="scroll-cont">
                                <div class="viewport" style="height: 406px;">
                                    <div class="overview" style="width: 1242px; height: 400px; left: 0px;">
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <img _src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
"
                                             style="width: 240px; height: 400px;"/>
                                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    </div>
                                </div>
                                <div class="scrollbar" style="width: 685px; visibility: visible;">
                                    <div class="track" style="width: 685px;">
                                        <div class="thumb" style="left: 0px; width: 377.797906602254px;">
                                            <div class="thumb-star"></div>
                                            <div class="thumb-end"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mod-user-cmt">
                            <div class="info">
                                <h3>用户评价<span></h3>
                            </div>
                            <?php if (!empty($_smarty_tpl->tpl_vars['comment_code']->value)) {?>
                            <?php echo smarty_function_commentcode(array(),$_smarty_tpl);?>

                            <?php } else { ?>
                            <a name="comment"></a>

                            <div class="mod-login" style="display: none;">
                                <div class="bd">
                                    <form id="login_form">
                                        <label>用户</label>
                                        <input id="userName" name="username" type="text" value="" class="ipt"
                                               autocomplete="off"/>
                                        <label>密码</label>
                                        <input name="pwd" id="pwd" type="password" value="" class="ipt"/>
                                        <input type="button" value="登录" class="btn-login" id="login"/>
                                        <label class="save-me"> <input id="isKeepAlive" name="keep_login" value="1"
                                                                       type="checkbox" checked="checked"/>保持登录状态
                                        </label>

                                        <p><span id="err_password"></span> <span id="err_username"></span></p>
                                        <input type="hidden" id="destUrl"
                                               value="http://soft.leidian.com/detail/index/soft_id/77208" name="destUrl"
                                               cmtinstalled="true"/>
                                    </form>
                                </div>
                                <div class="ft">
                                    <a target="_blank" href="http://i.360.cn/findpwd/">忘记密码？</a>
                                    <span>|</span>
                                    <a href="http://i.360.cn/reg?tpl=baoku&amp;src=mobilem&amp;destUrl=http%3A%2F%2Fsoft.leidian.com%2Fdetail%2Findex%2Fsoft_id%2F77208"
                                       id="reg_url">还没有账号？马上注册&gt;&gt;</a>
                                </div>
                            </div>
                            <div class="mod-cmt">
                                <div style="margin-top:10px;">
                                    <form action="<?php echo smarty_function_link(array('m'=>'comment','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
" method="post"
                                          id="commentForm">
                                        <div style="line-height:200%; font-size:14px">网友评论仅供网友表达个人看法，并不表明
                                            <strong>本站</strong> 同意其观点或证实其描述
                                        </div>
                                        <div id="star">
                                            <span style="font-size:14px;">点击星星对应用打分</span>
                                            <ul>
                                                <li class=""><a href="javascript:;" class="selected">1</a></li>
                                                <li class=""><a href="javascript:;" class="selected">2</a></li>
                                                <li class=""><a href="javascript:;" class="selected">3</a></li>
                                                <li class=""><a href="javascript:;" class="selected">4</a></li>
                                                <li class=""><a href="javascript:;" class="selected">5</a></li>
                                            </ul>
                                            <span></span>

                                            <p style="display: none; left: 134px;"><em><b>5</b> 分 非常满意</em>强烈推荐</p>
                                        </div>
                                        <div style="margin-top:5px;">
                                        <textarea name="comment"
                                                  style="width:100%;height:80px;border:1px solid #ccc;font-size:12px;line-height:200%;"></textarea>
                                        </div>
                                        <div style="margin-top:10px;height:40px;">
                                        <span class="comment_l">
                                            昵称：<input type="text" class="comment_ipt" value="" name="user"/>
                                        </span>
                                        <span class="comment_l">
                                            验证码：<input type="text" style="width:60px;" class="comment_ipt" value=""
                                                       name="xcode" tabindex="4"/>
                                        </span>
                                        <span class="comment_l">
                                            <img onclick="this.src='/index.php?c=index&m=xcode&t='+Math.random();"
                                                 style="width:60px;height:25px;margin:-4px 8px 0 6px; display: inline-block;vertical-align: middle;"
                                                 src="<?php echo smarty_function_link(array('m'=>'xcode'),$_smarty_tpl);?>
" id="chk_code" title="点击更换验证码">
                                        </span>
                                        <span class="comment_l">
                                            <input type="button" style="width:auto;height:26px;" class="comment_ipt"
                                                   value="发表评论" onclick="send_comment();" id="sub">
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="mod-cmt-list">
                                <div class="hd clearfix">
                                    <div class="cmt-tab">
                                        <ul class="clearfix">
                                            <li class="first selected" id="comment1"><a style="cursor:pointer;">全部评论</a></li>

                                        </ul>
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
                                                    <font style="color:#333333;"><?php echo $_smarty_tpl->tpl_vars['commentlist']->value['comment_content'];?>
</font>
                                                </div>
                                            </div>
                                            <p class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['commentlist']->value['comment_date'],"%Y-%m-%d %H:%M:%S ");?>
</p>
                                        </div>
                                    </li>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_commentlist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </ul>
                                <div class="ft">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>1)); $_block_repeat=true; echo smarty_block_list(array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <a id="more_comment" class="more" style="display: none;">
                                        <span>正在加载最近15条评论...</span> </a>
                                    <a  class="more" id="morePage" style="cursor:pointer;">查看更多评论</a>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'app_comment','id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'row'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    <div class="cmt-gotop" id="comment_up">
                                        <a href="#comment">回评论顶部</a>
                                    </div>
                                </div>
                                <?php if (empty($_smarty_tpl->tpl_vars['app']->value['app_comments'])) {?>
                                <div id="id_no_comment" class="no_page" style="display: none;">
                                    该应用暂时还没有评论,欢迎您来抢沙发
                                </div>
                                <?php }?>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <!--end of ndlft-->
            <div class="col3">
                <div class="aside">
                    <div class="caret"></div>
                    <div class="mod mod-rank-list" id="detail_reclist" data-desc="apprecommend">
                        <div class="hd">
                            <h3>喜欢这款软件的人还喜欢</h3>
                        </div>
                        <div class="bd">
                            <ul>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('relevant', array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>8,'order'=>'app_down desc')); $_block_repeat=true; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>8,'order'=>'app_down desc'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li>
                                    <div class="soft-info">
                                        <a class="pic" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
"
                                           target="_blank">
                                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['relevant']->value['app_logo']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
"
                                                 class="png"/> </a>

                                        <div class="text">
                                            <h4><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
"
                                                   title="<?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
" target="_blank">
                                                    <?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
 </a></h4>

                                            <p><span class="cnt"> <?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['relevant']->value['app_down']),$_smarty_tpl);?>
人下载 </span>
                                                <span class="score"><?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_grade'];?>
分</span></p>
                                        </div>
                                    </div>
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                                       class="bt-install setup">安装</a>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>8,'order'=>'app_down desc'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end main-->
        <?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<?php echo '<script'; ?>
>
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
    $(".setupextra").hover(
        function () {
            $(".erweimadiv").show();
        },
        function () {
            $(".erweimadiv").hide();
        }
    );
<?php echo '</script'; ?>
>
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
    $(document).ready(function() {
        var i = 2;
        $("#morePage").click(function() {
            $.ajax({
                type: "POST",
                url: "<?php echo smarty_function_link(array('m'=>'commentLoad'),$_smarty_tpl);?>
",
                data: {'page': i++,'appid':<?php echo $_smarty_tpl->tpl_vars['app']->value['app_id'];?>
},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var game_html = '';
                        $.each(msg.list, function (k, v) {
                            var datecou = new Date(parseInt(v.comment_date) * 1000).Format("yyyy-MM-dd hh:mm:ss");
                            game_html += '<li class="clearfix"><a href="" class="pic" target="_blank"> <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/107.jpg"></a>';
                            game_html += ' <div class="cmt-info"> ';
                            game_html += ' <p class="uname">' + v.comment_uname +'</p>';
                            game_html += ' <div class="clearfix">';
                            game_html += ' <div class="cmt"> ';
                            game_html += v.comment_content;
                            game_html += '</div> ';
                            game_html += '</div> ';
                            game_html += '<p class="time">'+datecou+'</p>';
                            game_html += '</div></li>';
                        });
                        $("#game_rank").append(game_html);
                    }else{
                        $("#morePage").html('加载完成');
                    }
                }
            });
        });
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/tinyscrollbar.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/detail.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/bc.js"><?php echo '</script'; ?>
>

</body>
</html>

<?php }
}
?>