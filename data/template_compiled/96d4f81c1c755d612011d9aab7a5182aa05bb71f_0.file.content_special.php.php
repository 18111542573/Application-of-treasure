<?php /* Smarty version 3.1.27, created on 2018-03-24 16:40:20
         compiled from "E:\www\711cms\templates\template_006\content_special.php" */ ?>
<?php
/*%%SmartyHeaderCode:19809575695ab60ef4f21de9_84142687%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96d4f81c1c755d612011d9aab7a5182aa05bb71f' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_006\\content_special.php',
      1 => 1500951331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19809575695ab60ef4f21de9_84142687',
  'variables' => 
  array (
    'special' => 0,
    'setting' => 0,
    'special_id' => 0,
    'row' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab60ef51b07c8_22554473',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab60ef51b07c8_22554473')) {
function content_5ab60ef51b07c8_22554473 ($_smarty_tpl) {
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_special')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.special.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_pagebar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.pagebar.php';

$_smarty_tpl->properties['nocache_hash'] = '19809575695ab60ef4f21de9_84142687';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php if ($_smarty_tpl->tpl_vars['special']->value['special_seotitle']) {?>
<title><?php echo $_smarty_tpl->tpl_vars['special']->value['special_seotitle'];?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['special']->value['special_seokey'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['special']->value['special_seodesc'];?>
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

<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- 当前位置 -->
<div class="box">
    <p class="pos">当前位置：<a href="/">首页</a><b>&gt;</b><a href="<?php echo smarty_function_link(array('m'=>'specials'),$_smarty_tpl);?>
">专题</a><?php if ($_smarty_tpl->tpl_vars['special_id']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'special','id'=>$_smarty_tpl->tpl_vars['special_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'special','id'=>$_smarty_tpl->tpl_vars['special_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<b>&gt;</b><a><?php echo $_smarty_tpl->tpl_vars['row']->value['area_title'];?>
</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'special','id'=>$_smarty_tpl->tpl_vars['special_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></p>
</div>
<!-- 当前位置 -->

<div class="box" style="min-height:690px">
    <div class="tablist">
        <div class="tab_tit">
            <h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'special','id'=>$_smarty_tpl->tpl_vars['special_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'special','id'=>$_smarty_tpl->tpl_vars['special_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'special','id'=>$_smarty_tpl->tpl_vars['special_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
            <ul class="tab_t" id="li_num">
            </ul>
        </div>
        <div class="tab_content">
            <ul class="list_tj">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('special', array('id'=>$_smarty_tpl->tpl_vars['special_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>28)); $_block_repeat=true; echo smarty_block_special(array('id'=>$_smarty_tpl->tpl_vars['special_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>28), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li class="ly-pic">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
" class="pic" target="_blank" ><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['special']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
" width="72" height="72"></a>
                    <p><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
</a></p>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_special(array('id'=>$_smarty_tpl->tpl_vars['special_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>28), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                                         
            </ul>
            <?php echo smarty_function_pagebar(array('name'=>'special_list','id'=>$_smarty_tpl->tpl_vars['special_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>28),$_smarty_tpl);?>

        </div>
    </div>
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