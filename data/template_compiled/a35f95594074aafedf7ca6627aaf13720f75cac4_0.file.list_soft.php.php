<?php /* Smarty version 3.1.27, created on 2018-03-22 06:54:18
         compiled from "E:\www\711cms\templates\template_002\list_soft.php" */ ?>
<?php
/*%%SmartyHeaderCode:4281873335ab3531a2c4dc6_22934368%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a35f95594074aafedf7ca6627aaf13720f75cac4' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_002\\list_soft.php',
      1 => 1500461692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4281873335ab3531a2c4dc6_22934368',
  'variables' => 
  array (
    'cate_id' => 0,
    'row' => 0,
    'setting' => 0,
    'appnav' => 0,
    'page' => 0,
    'applist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3531a374a66_63443521',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3531a374a66_63443521')) {
function content_5ab3531a374a66_63443521 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_appnav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_function_countstar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countstar.php';
if (!is_callable('smarty_function_pagebar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.pagebar.php';

$_smarty_tpl->properties['nocache_hash'] = '4281873335ab3531a2c4dc6_22934368';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
        <div class="leibie">
            <div class="clearfix"><p class="leibie_l">软件类别：</p>

                <p class="leibie_r"><a href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['cate_id']->value > 0) {
} else { ?>class="dangqian"<?php }?>><em>全部</em></a>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
"  <?php if ($_smarty_tpl->tpl_vars['cate_id']->value == $_smarty_tpl->tpl_vars['appnav']->value['cate_id']) {?>class="dangqian"<?php }?>><em>  <?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</em></a>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                </p></div>

        </div>
        <div class="box gamebox">
            <ul class="ifenlei clearfix">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'row'=>24,'per_page'=>24)); $_block_repeat=true; echo smarty_block_applist(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'row'=>24,'per_page'=>24), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="ifenlei_list clearfix">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" class="app_90">
                            <i class="app_img_90"></i>
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
">
                        </a>

                        <p class="app_tit_90"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
">
                                <?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</a></p>

                        <div class="app_intro"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
人安装 ·
                            <?php echo round($_smarty_tpl->tpl_vars['applist']->value['history_size']/1024/1024,2);?>
MB
                        </div>
                        <p class="app_star_90"><span class="star bigstar<?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['applist']->value['app_recomment'],'type'=>1),$_smarty_tpl);?>
"></span></p>
                    </div>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'row'=>24,'per_page'=>24), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <?php echo smarty_function_pagebar(array('name'=>'applist','page'=>$_smarty_tpl->tpl_vars['page']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'row'=>24,'per_page'=>24),$_smarty_tpl);?>

        </div>
    </div>
    <!--/ inner -->
    <?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>