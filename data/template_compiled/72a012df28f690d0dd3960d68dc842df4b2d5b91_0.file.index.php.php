<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:30
         compiled from "E:\www\711cms\templates\template_004\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:123145ab08416b4f6f7_77819096%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72a012df28f690d0dd3960d68dc842df4b2d5b91' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_004\\index.php',
      1 => 1500885667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123145ab08416b4f6f7_77819096',
  'variables' => 
  array (
    'setting' => 0,
    'ad' => 0,
    'recommend' => 0,
    'appnav' => 0,
    'list' => 0,
    'navicat' => 0,
    'seolist' => 0,
    'tpl_path' => 0,
    'openlist' => 0,
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab08416cb2ec2_92450462',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab08416cb2ec2_92450462')) {
function content_5ab08416cb2ec2_92450462 ($_smarty_tpl) {
if (!is_callable('smarty_block_ad')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.ad.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_appnav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_block_list')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_block_navicat')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_block_seolist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.seolist.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_openlist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.openlist.php';
if (!is_callable('smarty_block_friendlink')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.friendlink.php';

$_smarty_tpl->properties['nocache_hash'] = '123145ab08416b4f6f7_77819096';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
"/>

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
    <div id="bd">
    <!-- top section -->
    <div class="sect-0">
        <div class="focus_holder">
            <a href="javascript:void(0)" data-text="arr_left" data-href="arr_left" id="arr_left"></a>

            <div id="focus">
                <div class="view photos clearfix" id="banner_huodong">
                    <div class="col_a">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>30)); $_block_repeat=true; echo smarty_block_ad(array('id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['ad']->value['sort_show'] == 1) {?>
                        <div class="photo_1">
                            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
">
                            </a>
                        </div>
                        <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                    <div class="col_b">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>30)); $_block_repeat=true; echo smarty_block_ad(array('id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <?php if ($_smarty_tpl->tpl_vars['ad']->value['sort_show'] != 1 && $_smarty_tpl->tpl_vars['ad']->value['sort_show'] < 6) {?>
                        <div class="photo_<?php echo $_smarty_tpl->tpl_vars['ad']->value['sort_show'];?>
">
                            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
"></a>
                        </div>
                        <?php }?>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- top section -->
    <!-- box -->
    <div class="grid-1 sect-1 clearfix">
        <div class="hd-hot clearfix">
            <h2>精品推荐</h2>
        </div>
        <div class="articles">
            <div class="mod-list-app mod-list-apps">
                <ul class="clearfix">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>41,'row'=>30)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>41,'row'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <a class="pic" target="_blank" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="48" height="48"></a>
                        <h4><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"
                               target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></h4>
                        <a class="bt-install setup" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                           data-tab="0" target="_blank">安装</a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>41,'row'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
    </div>
    <!--/ box -->


    <!-- box1 -->
    <div class="ui-section grid-2 sect-soft clearfix">
        <div class="hd">
            <h2 id="section_2"><a href="<?php echo smarty_function_link(array('m'=>'more_soft'),$_smarty_tpl);?>
" target="_blank">软件</a></h2>

            <div class="tabs" id="section_3">
                <strong>软件排行</strong>
            </div>
        </div>
        <div class="article">
            <!-- {{col-1 -->
            <div class="col-1">
                <div class="ui-sect-cate">
                    <div class="bd">
                        <div class="mod-cate-list" id="section_4">
                            <div class="group">
                                <h3>软件类型：</h3>
                                <ul>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <li><a href="<?php echo smarty_function_link(array('m'=>'more_soft','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
"
                                           target="_blank"><span><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</span></a></li>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </ul>
                            </div>
                            <div class="group">
                                 <h3>热门标签：</h3>
                                 <ul>
                                 <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'search','type'=>1,'row'=>10)); $_block_repeat=true; echo smarty_block_list(array('name'=>'search','type'=>1,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <li>
                                        <a href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['list']->value['q']),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['q'];?>
">
                                            <span style="color:"><?php echo $_smarty_tpl->tpl_vars['list']->value['q'];?>
</span>
                                        </a>
                                    </li>
                                 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'search','type'=>1,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                 </ul>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col-1}} -->
            <!-- {{col-2 -->
            <div class="col-2">
                <div class="ui-sect-con" id="section_5">
                    <div class="bd">
                        <div class="mod-list-app">
                            <ul class="clearfix">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>54,'row'=>18)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>54,'row'=>18), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li>
                                    <a class="pic" target="_blank" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="48" height="48">
                                    </a>
                                    <h4>
                                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" target="_blank">
                                            <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>

                                        </a>
                                    </h4>
                                    <a class="bt-install setup" target="_blank" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" data-tab="0">安装</a>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>54,'row'=>18), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- col-2}} -->
        </div>
        <!-- {{aside -->
        <div class="aside">
            <div class="ui-toplist ui-toplist-enable">
                <!-- col3 ui-toplist -->
                <div class="bd views">
                    <div class="view selected">
                        <div class="mod-toplist-app mod-top-app" id="section_6">
                            <ul class="list">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>56,'row'=>8)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>56,'row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li
                                <?php if ($_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'] == 1) {?> class="first"<?php }?>>
                                <span class="ico-num ico-num-<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</span>

                                <div class="all clearfix">
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="img"
                                       target="_blank">
                                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
">
                                    </a>

                                    <div class="detail">
                                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a>
                                    </div>
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down setup"
                                       data-tab="0" target="_blank">安装</a>
                                </div>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>56,'row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- aside}} -->
    </div>
    <!--/ box1 -->

    <!-- box2 -->
    <div class="ui-section grid-2 sect-game clearfix">
        <div class="hd">
            <h2 id="section_2"><a href="<?php echo smarty_function_link(array('m'=>'more_game'),$_smarty_tpl);?>
" target="_blank">游戏</a></h2>

            <div class="tabs" id="section_3">
                <strong>游戏排行</strong>
            </div>
        </div>
        <div class="article">
            <!-- {{col-1 -->
            <div class="col-1">
                <div class="ui-sect-cate">
                    <div class="bd">
                        <div class="mod-cate-list" id="section_4">
                            <div class="group">
                                <h3>游戏类型：</h3>
                                <ul>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>2)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <li><a href="<?php echo smarty_function_link(array('m'=>'more_game','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
"
                                           target="_blank"><span><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</span></a></li>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </ul>
                            </div>
                           <div class="group">
                                <h3>热门标签：</h3>
                                <ul>
                                 <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'search','type'=>2,'row'=>10)); $_block_repeat=true; echo smarty_block_list(array('name'=>'search','type'=>2,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <li>
                                        <a href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['list']->value['q']),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['q'];?>
">
                                            <span style="color:"><?php echo $_smarty_tpl->tpl_vars['list']->value['q'];?>
</span>
                                        </a>
                                    </li>
                                 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'search','type'=>2,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col-1}} -->
            <!-- {{col-2 -->
            <div class="col-2">
                <div class="ui-sect-con" id="section_5">
                    <div class="bd">
                        <div class="mod-list-app">
                            <ul class="clearfix">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>55,'row'=>18)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>55,'row'=>18), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li>
                                    <a class="pic" target="_blank" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="48" height="48">
                                    </a>
                                    <h4>
                                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" target="_blank">
                                            <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>

                                        </a>
                                    </h4>
                                    <a class="bt-install setup" target="_blank"
                                       href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" data-tab="0" target="_blank">安装</a>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>55,'row'=>18), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- col-2}} -->
        </div>
        <!-- {{aside -->
        <div class="aside">
            <div class="ui-toplist ui-toplist-enable">
                <!-- col3 ui-toplist -->
                <div class="bd views">
                    <div class="view selected">
                        <div class="mod-toplist-app mod-top-app" id="section_6">
                            <ul class="list">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>57,'row'=>8)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>57,'row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li
                                <?php if ($_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'] == 1) {?> class="first"<?php }?>>
                                <span class="ico-num ico-num-<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</span>

                                <div class="all clearfix">
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="img"
                                       target="_blank">
                                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
">
                                    </a>

                                    <div class="detail">
                                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a>
                                    </div>
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down setup"
                                       target="_blank" data-tab="0">安装</a>
                                </div>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>57,'row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- aside}} -->
    </div>
    <!--/ box2 -->
        <!--游戏开服-->
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if (($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_service' && $_smarty_tpl->tpl_vars['navicat']->value['navicat_enabled'] == '1')) {?>
        <div class="kf-box">
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
            <div><span class="clear clearfix"></span></div>
        </div>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <!--游戏开服结束-->
    <!-- box3 -->
    <div class="grid-4 gx-grid">
        <!-- b -->
        <div class="aside ui-section">
            <div class="hd">
                <div class="tabs" id="section_3">
                    <strong>装机必备</strong>
                </div>
            </div>
            <div class="ui-toplist ui-toplist-enable">
                <!-- col3 ui-toplist -->
                <div class="bd views">
                    <div class="view selected">
                        <div class="mod-toplist-app mod-top-app" id="section_6">
                            <ul class="list">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>31,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>31,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li
                                <?php if ($_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'] == 1) {?> class="first"<?php }?>>
                                <span class="ico-num ico-num-<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</span>

                                <div class="all clearfix">
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="img"
                                       target="_blank">
                                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
">
                                    </a>

                                    <div class="detail">
                                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a>
                                    </div>
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank" class="down setup"
                                       data-tab="0">安装</a>
                                </div>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>31,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ b -->
        <!-- b -->
        <div class="aside ui-section">
            <div class="hd">
                <div class="tabs" id="section_3">
                    <strong>最受欢迎</strong>
                </div>
            </div>
            <div class="ui-toplist ui-toplist-enable">
                <!-- col3 ui-toplist -->
                <div class="bd views">
                    <div class="view selected">
                        <div class="mod-toplist-app mod-top-app" id="section_6">
                            <ul class="list">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>30,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>30,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li
                                <?php if ($_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'] == 1) {?> class="first"<?php }?>>
                                <span class="ico-num ico-num-<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</span>

                                <div class="all clearfix">
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="img"
                                       target="_blank">
                                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
">
                                    </a>

                                    <div class="detail">
                                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a>
                                    </div>
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down setup"
                                       data-tab="0" target="_blank">安装</a>
                                </div>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>30,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ b -->
        <!-- b -->
        <div class="aside ui-section" style="margin:0; width:326px">
            <div class="hd">
                <div class="tabs" id="section_3">
                    <strong>热门排行</strong>
                </div>
            </div>
            <div class="ui-toplist ui-toplist-enable">
                <!-- col3 ui-toplist -->
                <div class="bd views">
                    <div class="view selected">
                        <div class="mod-toplist-app mod-top-app" id="section_6">

                            <ul class="list">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>42,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>42,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li
                                <?php if ($_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'] == 1) {?> class="first"<?php }?>>
                                <span class="ico-num ico-num-<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</span>

                                <div class="all clearfix">
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="img"
                                       target="_blank">
                                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
">
                                    </a>

                                    <div class="detail">
                                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a>
                                    </div>
                                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="down setup"
                                       data-tab="0" target="_blank">安装</a>
                                </div>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>42,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ b -->
    </div>
    <!-- box3 -->
    <!-- f-link -->
    <div class="f-link">
        <span>友情链接：</span>
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
            <img style="display: inline-block; position: relative; top:3px;" width="20" height="20" src="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_img'];?>
" />
            <?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>

        </a>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_friendlink(array('type'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <!-- f-link -->

</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/bc.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>