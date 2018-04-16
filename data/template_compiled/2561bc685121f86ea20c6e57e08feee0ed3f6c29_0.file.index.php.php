<?php /* Smarty version 3.1.27, created on 2018-03-22 06:56:07
         compiled from "E:\www\711cms\templates\template_005\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:17880492565ab35387e0ca98_12053224%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2561bc685121f86ea20c6e57e08feee0ed3f6c29' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_005\\index.php',
      1 => 1500879328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17880492565ab35387e0ca98_12053224',
  'variables' => 
  array (
    'setting' => 0,
    'ad' => 0,
    'recommend' => 0,
    'appnav' => 0,
    'navicat' => 0,
    'seolist' => 0,
    'tpl_path' => 0,
    'openlist' => 0,
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab35387eb4a37_34180029',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab35387eb4a37_34180029')) {
function content_5ab35387eb4a37_34180029 ($_smarty_tpl) {
if (!is_callable('smarty_block_ad')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.ad.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_countstar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countstar.php';
if (!is_callable('smarty_block_appnav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_block_navicat')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_block_seolist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.seolist.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_openlist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.openlist.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_block_friendlink')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.friendlink.php';

$_smarty_tpl->properties['nocache_hash'] = '17880492565ab35387e0ca98_12053224';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
" />
    
    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<div class="wrapper">
<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!--main-->
<div class="main">
    <div class="wp">
        <!-- banner -->
        <div class="promo">
            <div class="big">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>30)); $_block_repeat=true; echo smarty_block_ad(array('id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['ad']->value['sort_show'] == 1) {?>
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
">
                    <img width="584" height="273" alt="<?php echo $_smarty_tpl->tpl_vars['ad']->value['alt'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
">
                </a>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="small">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>30)); $_block_repeat=true; echo smarty_block_ad(array('id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['ad']->value['sort_show'] != 1 && $_smarty_tpl->tpl_vars['ad']->value['sort_show'] < 6) {?>
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
">
                    <img width="200" height="135" alt="<?php echo $_smarty_tpl->tpl_vars['ad']->value['alt'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
">
                </a>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
        <!-- /banner -->
        <!-- recommend -->
        <div class="module module-recommend">
            <div class="btitle"><h2><i></i>精品推荐</h2></div>
            <div class="bmeta">
                <div class="apkbox">
                    <ul class="clearfix">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>41,'row'=>30)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>41,'row'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <span class="pic">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" width="64" height="64">
                            </span>
                            <span class="name"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                  target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></span>
                            <span class="level"><i <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_grade'];?>
分</i></span>
                            <span class="btn"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                 target="_blank">立即下载</a></span>
                            <span class="layer"></span><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                          target="_blank" class="link"></a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>41,'row'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
        </div>
        <!-- /recommend -->
        <!-- module-game -->
        <div class="module module-game">
            <div class="btitle"><h2><i></i><a href="<?php echo smarty_function_link(array('m'=>'games'),$_smarty_tpl);?>
" target="_blank">游戏</a></h2><a
                    class="more" href="<?php echo smarty_function_link(array('m'=>'games'),$_smarty_tpl);?>
">更多<i></i></a></div>
            <div class="bmeta">
                <div class="category">
                    <h3>游戏分类</h3>

                    <div class="linkbox">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>2)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" target="_blank">
                            <?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>

                        </a>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>
                <div class="apkbox">
                    <ul class="clearfix">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>55,'row'=>24)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>55,'row'=>24), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <span class="pic">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" width="64"
                                     height="64">
                            </span>
                            <span class="name"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                  target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></span>
                            <span class="level"><i <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_grade'];?>
分</i></span>
                            <span class="btn"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                 target="_blank">立即下载</a></span>
                            <span class="layer"></span><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                          target="_blank" class="link"></a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>55,'row'=>24), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
        </div>
        <!-- /module-game -->
        <!-- module-soft -->
        <div class="module module-soft">
            <div class="btitle"><h2><i></i><a href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
" target="_blank">软件</a></h2><a
                    class="more" target="_blank" href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
">更多<i></i></a>
            </div>
            <div class="bmeta">
                <div class="category">
                    <h3>软件分类</h3>

                    <div class="linkbox">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" target="_blank">
                            <?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>

                        </a>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>
                <div class="apkbox">
                    <ul class="clearfix">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>54,'row'=>24)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>54,'row'=>24), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <span class="pic">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" width="64"
                                     height="64">
                            </span>
                            <span class="name"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                  target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></span>
                            <span class="level"><i <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_grade'];?>
分</i></span>
                            <span class="btn"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                 target="_blank">立即下载</a></span>
                            <span class="layer"></span><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                          target="_blank" class="link"></a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>54,'row'=>24), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
            </div>
        </div>
        <!-- /module-soft -->

    </div>
</div>
<!-- /main -->
<!--游戏开服-->
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_service' && $_smarty_tpl->tpl_vars['navicat']->value['navicat_enabled'] == '1')) {?>
            <div class="kf-box">
              <div class="w1000">
                <div class="fl w500">
                    <span class="block-title">游戏开服</span>
                    <div class="table-box">
                        <table class="lk-table">
                            <tbody>
                            <tr>
                                <td width=150>手机网游</td>
                                <td width=80>开服时间</td>
                                <td width=200>服务区名</td>
                                <td width=80>领取礼包</td>
                                <td width=80>游戏下载</td>
                            </tr>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('seolist', array('row'=>8)); $_block_repeat=true; echo smarty_block_seolist(array('row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php if ($_smarty_tpl->tpl_vars['seolist']->value['o_status'] == 2) {?>
                            <tr>
                                <td width=150><?php echo $_smarty_tpl->tpl_vars['seolist']->value['o_apptitle'];?>
</td>
                                <td width=80>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['seolist']->value['o_start_time'],"m-d");?>
<br/>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['seolist']->value['o_start_time'],"h:i");?>

                                </td>
                                <td width=200><?php echo $_smarty_tpl->tpl_vars['seolist']->value['o_region'];?>
</td>
                                <td width=80>
                                    <a href="<?php echo smarty_function_link(array('m'=>'open_service','app_id'=>$_smarty_tpl->tpl_vars['seolist']->value['o_app_id'],'open_name'=>$_smarty_tpl->tpl_vars['seolist']->value['o_region']),$_smarty_tpl);?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/li_bao.jpg">
                                    </a>
                                </td>
                                <td width=80><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['seolist']->value['o_app_id']),$_smarty_tpl);?>
" class="kf-btn">下载</a></td>
                            </tr>
                            <?php }?>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_seolist(array('row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="fr w500">
                    <span class="block-title">疯抢礼包</span>
                    <div class="table-box">
                        <table class="lk-table">
                            <tbody>
                            <tr>
                                <td width=180>手机网游</td>
                                <td width=100>有效时间</td>
                                <td width=80>领取礼包</td>
                                <td width=80>游戏下载</td>
                            </tr>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('openlist', array('row'=>8)); $_block_repeat=true; echo smarty_block_openlist(array('row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php if ($_smarty_tpl->tpl_vars['openlist']->value['o_end_time']-time() > 0 && $_smarty_tpl->tpl_vars['openlist']->value['o_status'] == 2 && $_smarty_tpl->tpl_vars['openlist']->value['open_name'] == $_smarty_tpl->tpl_vars['openlist']->value['o_region']) {?>
                            <tr>
                                <td width=180><?php echo $_smarty_tpl->tpl_vars['openlist']->value['o_apptitle'];?>
<br/>【<?php echo $_smarty_tpl->tpl_vars['openlist']->value['pname'];?>
】</td>
                                <td width=100>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_start_time'],"m-d");?>

                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_start_time'],"h:i");?>
<br/>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_end_time'],"m-d");?>

                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_end_time'],"h:i");?>

                                </td>
                                <td width=80>
                                    <a href="<?php echo smarty_function_link(array('m'=>'open_packs','app_id'=>$_smarty_tpl->tpl_vars['openlist']->value['p_app_id'],'open_name'=>$_smarty_tpl->tpl_vars['openlist']->value['open_name'],'p_id'=>$_smarty_tpl->tpl_vars['openlist']->value['p_id']),$_smarty_tpl);?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/li_bao.jpg">
                                    </a>
                                </td>
                                <td width=80><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['openlist']->value['p_app_id']),$_smarty_tpl);?>
" class="kf-btn">下载</a></td>
                            </tr>
                            <?php }?>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_openlist(array('row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <div><span class="clear clearfix"></span></div>
            </div>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <!--游戏开服结束-->
<!-- ranking -->
<div class="ranking">
    <div class="wp clearfix">
        <div class="item">
            <div class="btitle"><h3 class="bgi-ffa238">热门排行</h3></div>
            <div class="apklist">
                <ul class="clearfix">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>42,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>42,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <span class="ord"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</span>
                        <span class="pic">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" width="48"
                                 height="48">
                        </span>
                        <span class="name"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                              target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></span>
                        <span class="count"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载</span>
                        <span class="layer"></span>
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                           class="link"></a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>42,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <div class="item">
            <div class="btitle"><h3 class="bgi-72c406">最受欢迎</h3></div>
            <div class="apklist">
                <ul class="clearfix">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>30,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>30,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <span class="ord"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</span>
                        <span class="pic">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" width="48"
                                 height="48">
                        </span>
                        <span class="name"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                              target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></span>
                        <span class="count"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载</span>
                        <span class="layer"></span>
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                           class="link"></a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>30,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <div class="item">
            <div class="btitle"><h3 class="bgi-ffa238">上升最快</h3></div>
            <div class="apklist">
                <ul class="clearfix">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>44,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>44,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <span class="ord"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</span>
                        <span class="pic">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" width="48"
                                 height="48">
                        </span>
                        <span class="name"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                              target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></span>
                        <span class="count"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载</span>
                        <span class="layer"></span>
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                           class="link"></a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>44,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                </ul>
            </div>
        </div>
        <div class="item">
            <div class="btitle"><h3 class="bgi-72c406">精品推荐</h3></div>
            <div class="apklist">
                <ul class="clearfix">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>41,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>41,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <span class="ord"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</span>
                        <span class="pic">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" width="48"
                                 height="48">
                        </span>
                        <span class="name"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                              target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></span>
                        <span class="count"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载</span>
                        <span class="layer"></span>
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                           class="link"></a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>41,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <!--友情链接 start-->
        <div class="links_box">
            <div class="links_hd">
                <div class="links_tab">
                    <a class="current" id="yqlj">友情链接</a>
                </div>
            </div>
            <div class="links_bd">
                <div class="links_fren" id="yqlj_mod" style="display: block;">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('friendlink', array('type'=>1)); $_block_repeat=true; echo smarty_block_friendlink(array('type'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php if (!$_smarty_tpl->tpl_vars['friendlink']->value['flink_img']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
</a>
                    <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
">
                        <img width="20" height="20" src="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_img'];?>
" />
                        <?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>

                    </a>
                    <?php }?>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_friendlink(array('type'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
        </div>
        <!--友情链接 end-->

    </div>
</div>
<!-- /ranking -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html>

<?php }
}
?>