<?php /* Smarty version 3.1.27, created on 2018-03-29 16:48:48
         compiled from "E:\www\711cms\templates\template_008\detail.html" */ ?>
<?php
/*%%SmartyHeaderCode:17933747075abca870855145_83243675%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd1646e153376ba0894866b197e923347753f575' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_008\\detail.html',
      1 => 1522312751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17933747075abca870855145_83243675',
  'variables' => 
  array (
    'tpl_path' => 0,
    'app' => 0,
    'row' => 0,
    'imagelist' => 0,
    'relevant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5abca87088fad0_12212510',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5abca87088fad0_12212510')) {
function content_5abca87088fad0_12212510 ($_smarty_tpl) {
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_imagelist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.imagelist.php';
if (!is_callable('smarty_block_relevant')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.relevant.php';

$_smarty_tpl->properties['nocache_hash'] = '17933747075abca870855145_83243675';
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
css/detail.css" />
	</head>
	<body>
	<?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	<div class="box">
			<div class="banner">
				<div class="banner_a">
						<span>首页</span>><span>应用市场</span>><span><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</span>
				</div>
			</div>
			<div class="d_con">
				<div class="d_con_l">
					<div class="d_img">
						<img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['app']->value['app_logo']),$_smarty_tpl);?>
" width="100" height="100" data-bd-imgshare-binded="1">
					</div>
					<div class="d_txt">
						<p class="p_1"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
</p>
						<!--<p class="p_2">元宝网海外站</p>-->
						<p class="p_2">开发公司：<?php echo $_smarty_tpl->tpl_vars['app']->value['app_company'];?>
</p>
						<p class="p_2"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_down'];?>
次下载  ·  <?php echo $_smarty_tpl->tpl_vars['app']->value['history_size'];?>
M  ·  无广告插件 </p>
						<p class="p_2">分类：<?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>

							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
						<p class="p_3">星级:<?php echo $_smarty_tpl->tpl_vars['app']->value['app_grade'];?>
星级</p>
					</div>
					<div class="d_tt">
						<?php echo $_smarty_tpl->tpl_vars['app']->value['app_recomment'];?>
+
					</div>
				</div>
				<div class="d_con_r">
					<div class="r_l">
						<a href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'type'=>1),$_smarty_tpl);?>
" >
						<div class="r_c">
							<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/anz.png" />
							<span>安卓下载</span>
						</div>
						</a>
						<a href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'type'=>2),$_smarty_tpl);?>
" target="_blank">
						<div class="r_c" style="margin-top: 0.18rem;">
							<img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/ios.png" />
							<span>IOS下载</span>
						</div>
						</a>
					</div>
					<div class="r_r">
						<img src="<?php echo smarty_function_link(array('m'=>'qrcode','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']),$_smarty_tpl);?>
" data-bd-imgshare-binded="1">
					</div>
				</div>
			</div>
			<div class="d_con_1">
				<div class="d_con_1_l">
					<div class="d_1">屏幕截图</div>
					<div class="d_2">移动设备&nbsp;<img style="transform: rotate(90deg);" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/JT.png"/></div>
					<ul class="d_3">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li>
							<img src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
" data-bd-imgshare-binded="1" height="320">
						</li>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
				<div class="d_con_1_r">
					<div class="d_1">应用介绍</div>
					<div class="d_2"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>
</div>
				</div>
			</div>
			<div class="kongbai">
				<span>相关推荐</span>
			</div>
			<div class="d_con_2">
				<ul>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('relevant', array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>6)); $_block_repeat=true; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<a class="de_a" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
">
						<li>
							<img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['relevant']->value['app_logo']),$_smarty_tpl);?>
" width="100" height="100" data-bd-imgshare-binded="1">
							<div class="r_c_s_1"><?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
</div>
							<div class="r_c_s_2"><?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_down'];?>
次下载 </div>
							<div class="r_c_s_3">详情</div>
						</li>
					</a>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
lib/jquery-1.12.4.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/detail.js" ><?php echo '</script'; ?>
>
</html>
<?php }
}
?>