<?php /* Smarty version 3.1.27, created on 2018-03-29 16:52:38
         compiled from "E:\www\711cms\templates\template_008\search.html" */ ?>
<?php
/*%%SmartyHeaderCode:15133478015abca9560897a3_57715301%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e7d89baf8ecd242b8cbf65270fc92a07b7f75b9' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_008\\search.html',
      1 => 1522313551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15133478015abca9560897a3_57715301',
  'variables' => 
  array (
    'tpl_path' => 0,
    'keywords' => 0,
    'applist' => 0,
    'row' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5abca9560c4133_65462277',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5abca9560c4133_65462277')) {
function content_5abca9560c4133_65462277 ($_smarty_tpl) {
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';

$_smarty_tpl->properties['nocache_hash'] = '15133478015abca9560897a3_57715301';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>搜索</title>
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
css/server.css" />
	</head>
	<body>
	<?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="hot_box">
			<span class="s_1">搜索&nbsp;>&nbsp;搜索【<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
】结果</span>
		</div>
		<div class="hot_contain">
			<div class="hot_c_l">
				<div class="l_t">搜索结果</div>
				<div class="l_box">
					<ul class="l_u1">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15)); $_block_repeat=true; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<a class="l_box_a" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
">
							<li class="l_l1">
								<img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" width="72" height="72" />
								<ul class="l_u2">
									<li><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</li>
									<li><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['applist']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['applist']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										<?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>

										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['applist']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;下载<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_down'];?>
次</li>
									<li>简介：<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_desc'];?>
</li>
								</ul>
								<div class="li_biao">详情</div>
							</li>
						</a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					</ul>
				</div>
			</div>
			<div class="hot_c_r">
				<div class="r_t">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>29)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>29), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>29), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<span class="t_s"><a style="color: black;" href="/?c=index&m=softs">更多&nbsp;></a></span>
				</div>
				<ul>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>29,'row'=>14)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>29,'row'=>14), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<a class="hot_a" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
						<li>
							<img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" width="60" height="60" />
							<span class="box_s1"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</span>
							<span class="box_s2">下载<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_down'];?>
次</span>
						</li>
					</a>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>29,'row'=>14), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
		</div>
		
		<div id="bottom"></div>
	</body>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
lib/jquery-1.12.4.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/server.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
?>