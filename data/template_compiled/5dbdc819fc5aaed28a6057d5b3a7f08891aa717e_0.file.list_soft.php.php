<?php /* Smarty version 3.1.27, created on 2018-04-02 13:45:36
         compiled from "E:\www\711cms\templates\template_008\list_soft.php" */ ?>
<?php
/*%%SmartyHeaderCode:14507377215ac1c380b163b8_85015698%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dbdc819fc5aaed28a6057d5b3a7f08891aa717e' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_008\\list_soft.php',
      1 => 1522408167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14507377215ac1c380b163b8_85015698',
  'variables' => 
  array (
    'tpl_path' => 0,
    'appnav' => 0,
    'cate_id' => 0,
    'row' => 0,
    'page' => 0,
    'order_by' => 0,
    'applist' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ac1c380cb4516_04798320',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ac1c380cb4516_04798320')) {
function content_5ac1c380cb4516_04798320 ($_smarty_tpl) {
if (!is_callable('smarty_block_appnav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_function_pagebar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.pagebar.php';

$_smarty_tpl->properties['nocache_hash'] = '14507377215ac1c380b163b8_85015698';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>区块链应用宝</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<?php echo '<script'; ?>
>
	       (function (doc, win) {
	            var docEl = doc.documentElement,
	           // orientationchange 事件 用来监听手机屏幕的反转
	            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
	            recalc = function () {
	              var clientWidth = docEl.clientWidth;//(window.innerWidth);UC 或者QQ 安卓4.0 以下原生浏览器下面是没有
	              if (!clientWidth) return;     
	               docEl.style.fontSize = 100 * (clientWidth / 750) + 'px';
	            };
	          if (!doc.addEventListener) return;
	          win.addEventListener(resizeEvt, recalc, false);
	          //DOMContentLoaded dom 加载完成，onload 有什么区别 dom css js OK 才执行的
	          doc.addEventListener('DOMContentLoaded', recalc, false);
	        })(document, window);
		<?php echo '</script'; ?>
>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/appMark.css" />
	</head>
	<style>
		.page {
			height: 0.45rem; }
		.page a {
			color: #333;
			font-size: 0.1rem;
			float: left;
			margin-left: 0.2rem; }
	</style>
	<body>
	<?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div class="banner">
			<!--<div class="banner_a">-->
					<!--<span><a href="/">首页</a></span>>&nbsp;<span>应用市场</span>>&nbsp;<span>交易平台</span>-->
			<!--</div>-->
		</div>
		<div class="content">
			<div class="content_l">
				<div class="l_top">应用市场</div>
				<div class="l_bottom">
					<div class="l_b_1">软件分类<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/JT.png"/></div>
					<div class="l_b_1_box">
						<ul>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<li><a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</a></li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</ul>
					</div>
					<!--<div class="l_2">热门推荐</div>-->
					<!--<div class="l_3">综合评分</div>-->
					<!--<div class="l_4">最新上架</div>-->
				</div>
			</div>
			<div class="content_r">
				<div class="r_top">
					<?php if ($_smarty_tpl->tpl_vars['cate_id']->value > 0) {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>

					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php } else { ?>
					全部软件
					<?php }?>
				</div>
				<div class="r_banner">
					<div class="r_b_1">应用</div>
					<div class="r_b_1" style="margin-left: 0.08rem;">货币交易</div>
				</div>
				<div class="r_contain">
					<ul>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'order'=>$_smarty_tpl->tpl_vars['order_by']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'per_page'=>14)); $_block_repeat=true; echo smarty_block_applist(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'order'=>$_smarty_tpl->tpl_vars['order_by']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'per_page'=>14), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<a class="r_c_a" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
">
							<li>
								<img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" width="60" height="60" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
">
								<div class="r_c_s_1"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</div>
								<div class="r_c_s_2"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
人在用</div>
								<div class="r_c_s_3">详情</div>
							</li>
						</a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'order'=>$_smarty_tpl->tpl_vars['order_by']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'per_page'=>14), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
					<?php echo smarty_function_pagebar(array('name'=>'applist','parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'order'=>$_smarty_tpl->tpl_vars['order']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'row'=>14,'per_page'=>14),$_smarty_tpl);?>

				</div>
			</div>
		</div>
		<div class="jiant">
		
		</div>
    <?php echo $_smarty_tpl->getSubTemplate ("foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</body>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
lib/jquery-1.12.4.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/appMark.js" ><?php echo '</script'; ?>
>
</html>
<?php }
}
?>