<?php /* Smarty version 3.1.27, created on 2018-03-22 06:58:13
         compiled from "E:\www\711cms\templates\template_006\list_info.php" */ ?>
<?php
/*%%SmartyHeaderCode:12018083205ab354059ead09_25821372%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afffaa0d71893f2ec35ae547229d20ce4fc8e5d6' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_006\\list_info.php',
      1 => 1500951331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12018083205ab354059ead09_25821372',
  'variables' => 
  array (
    'last_cate_id' => 0,
    'row' => 0,
    'setting' => 0,
    'page' => 0,
    'infolist' => 0,
    'tpl_path' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab35405a6fa22_10220458',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab35405a6fa22_10220458')) {
function content_5ab35405a6fa22_10220458 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_infolist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_pagebar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.pagebar.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';

$_smarty_tpl->properties['nocache_hash'] = '12018083205ab354059ead09_25821372';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php if ($_smarty_tpl->tpl_vars['last_cate_id']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>5)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>

<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- 当前位置 -->
<div class="box">
    <p class="pos">当前位置：<a href="/">首页</a><b>&gt;</b><a href="<?php echo smarty_function_link(array('m'=>'infos'),$_smarty_tpl);?>
">资讯</a><?php if ($_smarty_tpl->tpl_vars['last_cate_id']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<b>&gt;</b><a href="<?php echo smarty_function_link(array('m'=>'infos','cate_id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'info_category','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></p>
</div>
<!-- 当前位置 -->

<!-- news_list  recommend_app_list -->
<div class="box">
    <div class="article_main fl">
        <ul class="ar_list">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>8)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <h2><?php if ($_smarty_tpl->tpl_vars['infolist']->value['info_url']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_url'];?>
" target="_blank"><?php } else { ?>
                    <a target="_blank" href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" target="_blank"><?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</a></h2>
                <p><b>浏览次数：<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_visitors'];?>
</b><b>更新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['infolist']->value['info_update_time'],"%Y-%m-%d");?>
</b></p>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
           
        </ul>
        <?php echo smarty_function_pagebar(array('name'=>'infolist','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>8),$_smarty_tpl);?>
    
    </div>
    <div class="article_sub fr">
        <div class="ad_300x250"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/bansub.jpg"></div>
        <span class="pic_gap"></span>
        <div class="tj_app">
            <div class="sub_tit"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>29)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>29), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>29), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>29,'row'=>6)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>29,'row'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a target="_blank" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" width="50" height="50"></a>
                    <div class="app_name"><a target="_blank" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></div>
                    <p><a target="_blank" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="btn_new">下载</a>15.8万+人在玩</p>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>29,'row'=>6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                           
            </ul>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html><?php }
}
?>