<?php /* Smarty version 3.1.27, created on 2018-03-27 11:04:30
         compiled from "E:\www\711cms\templates\template_006\list_necessary.php" */ ?>
<?php
/*%%SmartyHeaderCode:5738390225ab9b4be2f9383_23322964%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52f79e10e0339bbcc6de45ecb19b7f0e9335d3df' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_006\\list_necessary.php',
      1 => 1500951331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5738390225ab9b4be2f9383_23322964',
  'variables' => 
  array (
    'row' => 0,
    'setting' => 0,
    'list' => 0,
    'necessary_type' => 0,
    'page' => 0,
    'necessary' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab9b4be483c60_24511465',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab9b4be483c60_24511465')) {
function content_5ab9b4be483c60_24511465 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_list')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_block_necessary')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.necessary.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_pagebar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.pagebar.php';

$_smarty_tpl->properties['nocache_hash'] = '5738390225ab9b4be2f9383_23322964';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>4)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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
    <p class="pos">当前位置：<a href="/">首页</a><b>&gt;</b><a href="<?php echo smarty_function_link(array('m'=>'necessaries'),$_smarty_tpl);?>
">装机必备</a></p>
</div>
<!-- 当前位置 -->

<div class="box" style="min-height:690px">
	<div class="tablist">
		<div class="tab_tit">
			<h1>装机必备</h1>
			<ul class="tab_t tab_t2">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'necessary')); $_block_repeat=true; echo smarty_block_list(array('name'=>'necessary'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<a href="<?php echo smarty_function_link(array('m'=>'necessaries','necessary_type'=>$_smarty_tpl->tpl_vars['list']->value['necessary_type']),$_smarty_tpl);?>
">
					<li<?php if ((isset($_smarty_tpl->tpl_vars['necessary_type']->value) && $_smarty_tpl->tpl_vars['necessary_type']->value == $_smarty_tpl->tpl_vars['list']->value['necessary_type']) || ($_smarty_tpl->tpl_vars['necessary_type']->value == 0 && $_smarty_tpl->tpl_vars['list']->value['special_sort_show'] == 1)) {?> class="current"<?php }?>>
					<?php echo $_smarty_tpl->tpl_vars['list']->value['necessary_title'];?>

					</li>
				</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'necessary'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
		<div class="tab_content">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'necessary','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value)); $_block_repeat=true; echo smarty_block_list(array('name'=>'necessary','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<ul class="list_tj">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('necessary', array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>35)); $_block_repeat=true; echo smarty_block_necessary(array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>35), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li class="ly-pic">
					<a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
" class="pic" target="_blank" ><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['necessary']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['necessary']->value['app_title'];?>
" width="72" height="72"></a>
					<p><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['necessary']->value['app_title'];?>
</a></p>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_necessary(array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>35), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'necessary','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php echo smarty_function_pagebar(array('name'=>'necessary_list','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>35),$_smarty_tpl);?>

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