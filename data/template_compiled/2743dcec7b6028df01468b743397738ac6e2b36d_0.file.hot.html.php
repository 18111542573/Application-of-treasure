<?php /* Smarty version 3.1.27, created on 2018-03-29 16:57:14
         compiled from "E:\www\711cms\templates\template_008\hot.html" */ ?>
<?php
/*%%SmartyHeaderCode:9831494035abcaa6aac5e30_34945955%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2743dcec7b6028df01468b743397738ac6e2b36d' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_008\\hot.html',
      1 => 1522313411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9831494035abcaa6aac5e30_34945955',
  'variables' => 
  array (
    'tpl_path' => 0,
    'last_cate_id' => 0,
    'page' => 0,
    'infolist' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5abcaa6ab084c6_07644038',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5abcaa6ab084c6_07644038')) {
function content_5abcaa6ab084c6_07644038 ($_smarty_tpl) {
if (!is_callable('smarty_block_infolist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_pagebar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.pagebar.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '9831494035abcaa6aac5e30_34945955';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
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
css/hot.css" />
	</head>
	<body>
	<?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="hot_box">
			<span class="s_1">首页&nbsp;>&nbsp;热门资讯</span>
		</div>
		<div class="hot_contain">
			<div class="hot_c_l">
				<div class="l_t">热门资讯</div>
				<div class="l_box">
					<ul>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>8)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<a class="l_box_a" href="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_url'];?>
" target="_blank">
							<li>
								<img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['infolist']->value['info_img']),$_smarty_tpl);?>
" width="100" height="100" data-bd-imgshare-binded="1">
								<div class="li_txt">
									<span class="txt_l1"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['infolist']->value['info_update_time'],"%Y-%m-%d");?>
</span>
									<span class="txt_l2">浏览次数：<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_visitors'];?>
</span>
								</div>
								<div class="li_biao"><?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</div>
							</li>
						</a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
					<?php echo smarty_function_pagebar(array('name'=>'infolist','id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>8),$_smarty_tpl);?>

				</div>
			</div>
			<div class="hot_c_r">
				<div class="r_t">
					今日热门推荐<span class="t_s"><a style="color: black;" href="/?c=index&m=softs">更多&nbsp;></a></span>
				</div>
				<ul>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>29,'row'=>12)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>29,'row'=>12), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<a class="hot_a" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
						<li>
							<img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" onclick="detail('<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_id'];?>
')">
							<span class="box_s1"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</span>
							<span class="box_s2">下载<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_down'];?>
次</span>
						</li>
					</a>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>29,'row'=>12), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
		</div>
		<div id="bottom"></div>
	</body>
	<?php echo '<script'; ?>
>
        function build_url_js(c, m, arg, d, rewrite) {
            var c = c.toLowerCase();
            var url = {};
            var build = '';
            var query = '';
            if (rewrite == 1) {
                var keywords = arg.keywords;
                return "/search/?keywords=" + encodeURI(keywords);
            }
            if (d != undefined) {
                $.extend(url, {"d": d});
            }
            if (c != undefined) {
                $.extend(url, {"c": c});
            }
            if (m != undefined) {
                $.extend(url, {"m": m});
            }
            if (typeof arg == 'object') {
                $.extend(url, arg);
            }
            query = $.param(url);
            if (query.length > 0) {
                query = '?' + query;
            }
            build = "/index.php" + query;
            return build;
        }
        function search_app() {
            if ($('#search-input').val() != '') {
                window.location = build_url_js('index','search',{'keywords': $('#search-input').val()},undefined,rewrite = $('#search-input').attr('data-rewrite'));
                // window.location = $('#search-input').attr('data-url') + "&keywords=" + $('#search-input').val();
            }
        }
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
lib/jquery-1.12.4.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/hot.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
?>