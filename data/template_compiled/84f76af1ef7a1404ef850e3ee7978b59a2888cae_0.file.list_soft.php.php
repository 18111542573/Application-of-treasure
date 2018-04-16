<?php /* Smarty version 3.1.27, created on 2018-03-22 06:56:12
         compiled from "E:\www\711cms\templates\template_005\list_soft.php" */ ?>
<?php
/*%%SmartyHeaderCode:4805166875ab3538c2af747_71602921%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84f76af1ef7a1404ef850e3ee7978b59a2888cae' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_005\\list_soft.php',
      1 => 1500879328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4805166875ab3538c2af747_71602921',
  'variables' => 
  array (
    'cate_id' => 0,
    'row' => 0,
    'setting' => 0,
    'appnav' => 0,
    'page' => 0,
    'applist' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3538c2fd954_29255575',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3538c2fd954_29255575')) {
function content_5ab3538c2fd954_29255575 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_appnav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countstar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countstar.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_pagebar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.pagebar.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';

$_smarty_tpl->properties['nocache_hash'] = '4805166875ab3538c2af747_71602921';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php if ($_smarty_tpl->tpl_vars['cate_id']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php if ($_smarty_tpl->tpl_vars['row']->value['ctitle']) {
echo $_smarty_tpl->tpl_vars['row']->value['ctitle'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];
}?></title>
    <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['ckey']) {
echo $_smarty_tpl->tpl_vars['row']->value['ckey'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];
}?>" />
    <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['cdesc']) {
echo $_smarty_tpl->tpl_vars['row']->value['cdesc'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];
}?>" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>2)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seotitle']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];
}?></title>
    <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seokey']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];
}?>" />
    <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seodesc']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];
}?>" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

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
        <!--游戏/应用分类 begin-->
        <dl class="sort_box">
            <dt>
                全部软件
            </dt>
            <dd>
                <a href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
" <?php if (empty($_smarty_tpl->tpl_vars['cate_id']->value)) {?>class="current"
                <?php }?>>全部</a>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
"
                <?php if ($_smarty_tpl->tpl_vars['cate_id']->value == $_smarty_tpl->tpl_vars['appnav']->value['cate_id']) {?>class="current"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</a>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </dd>
        </dl>
        <!--游戏/应用分类 end-->
        <!--游戏/应用信息 start-->
        <div class="row row_list">
            <div class="article">
                <!--列表 begin-->
                <div id="Mlist" class="Mlist">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'row'=>10,'per_page'=>10)); $_block_repeat=true; echo smarty_block_applist(array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'row'=>10,'per_page'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="list_item">
                        <div class="Mimg">
                            <img height="72" width="72" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
"
                                 src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
"/>
                            <span class="layer"></span>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" class="link"
                               target="_blank"></a>
                        </div>
                        <div class="tit_area">
                            <span class="name"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"
                                                  target="_blank"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</a></span>
                            <span class="level_mid"><i <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['applist']->value['app_recomment']),$_smarty_tpl);?>
></i></span>
                        </div>
                        <div class="desc_area">
                            <?php echo $_smarty_tpl->tpl_vars['applist']->value['app_seodesc'];?>
...
                        </div>
                        <div class="prop_area">
                            <span>人气：<?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
</span>
                            <span>大小：<?php echo round($_smarty_tpl->tpl_vars['applist']->value['history_size']/1024/1024,2);?>
MB</span>
                            <span>更新：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['applist']->value['app_update_time'],"%Y-%m-%d");?>
</span>
                        </div>
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                           class="btn">立即下载</a>
                    </div>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'row'=>10,'per_page'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
                <!--列表 end-->
                <!--分页 begin-->
                <div class="page" style="text-align: center;">
                    <?php echo smarty_function_pagebar(array('name'=>'applist','parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>10),$_smarty_tpl);?>

                </div>
                <!--分页 end-->
            </div>
            <!--边栏  start-->
            <div class="aside">

                <!--下载排行 begin-->
                <div class="MboxA">
                    <div class="boxA_hd">
                        <h3>下载排行</h3>
                    </div>
                    <div class="boxA_bd">
                        <div class="apklist">
                            <ul class="clearfix">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>60,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>60,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li>
                                    <span class="ord"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</span>
                                    <span class="pic">
                                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                           target="_blank">
                                            <img height="48" width="48" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"
                                                 src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
"/>
                                        </a>
                                    </span>
                                    <span class="name">
                                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                           target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a>
                                    </span>
                                    <span class="count"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
次下载</span>
                                    <span class="layer"></span>
                                    <a class="link" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                       target="_blank"></a>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>60,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                    </div>
                </div>
                <!--下载排行 end-->
            </div>
            <!--边栏  end-->
        </div>
        <!--游戏/应用信息 end-->
        <?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
    <!-- /main-->
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('inc_foot.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html>
<?php }
}
?>