<?php /* Smarty version 3.1.27, created on 2018-03-31 10:09:47
         compiled from "E:\www\711cms\templates\template_008\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:7866116395abeedebe60229_16825746%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa98a722c5f0eadec6b4dd7836232bf993db64f8' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_008\\index.php',
      1 => 1522405629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7866116395abeedebe60229_16825746',
  'variables' => 
  array (
    'tpl_path' => 0,
    'ad' => 0,
    'row' => 0,
    'recommend' => 0,
    'applist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5abeedec1bdcc9_84722325',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5abeedec1bdcc9_84722325')) {
function content_5abeedec1bdcc9_84722325 ($_smarty_tpl) {
if (!is_callable('smarty_block_ad')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.ad.php';
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';

$_smarty_tpl->properties['nocache_hash'] = '7866116395abeedebe60229_16825746';
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
css/homePage.css" />
	</head>
	<body>
	<?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<div class="banner">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>30)); $_block_repeat=true; echo smarty_block_ad(array('id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ad']->value['alt'];?>
"  width="580" height="265"/>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
		<div class="contain">
			<div class="c_l">
				<div class="l_h_1">
					<div class="d_1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>29)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>29), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>29), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
					<div class="d_2"><a style="color: #c2c2c2;" href='/?c=index&m=softs'>更多&nbsp;></a></div>
				</div>
				<div class="l_box_1">
					<ul>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>29,'row'=>12)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>29,'row'=>12), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="l_box_1_a">
							<li>
								<img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" onclick="detail('<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_id'];?>
')">
								<div class="b_1_d1"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</div>
							</li>
						</a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>29,'row'=>12), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
				<div class="l_h_2">
					<div class="d_1">推荐软件</div>
					<div class="d_2"><a style="color: #c2c2c2;" href='/?c=index&m=softs'>更多&nbsp;></a></div>
				</div>
				<div class="l_box_2">
					<ul>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('parent'=>1,'row'=>10)); $_block_repeat=true; echo smarty_block_applist(array('parent'=>1,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<a class="l_box_2_a" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
">
							<li>
								<img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" width="60" height="60" >
								<div class="b_1_d1"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</div>
								<div class="b_1_d1"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
人在用</div>
							</li>
						</a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('parent'=>1,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
			</div>
			<div class="c_r">
				<div class="l_h_1">
					<div class="d_1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>30)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
					<div class="d_2"><a style="color: #c2c2c2;" href='/?c=index&m=softs'>更多&nbsp;></a></div>
				</div>
				<div class="l_box_1">
					<ul>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>30,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>30,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<a class="r_a" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
							<li>
								<img src="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" width="60" height="60" />
								<div class="b_1_d1"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</div>
								<div class="b_1_d2"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
人在用</div>
							</li>
						</a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>30,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
				<div class="l_h_2">
					<div class="d_1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>31)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>31), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>31), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
					<div class="d_2"><a style="color: #c2c2c2;" href='/?c=index&m=softs'>更多&nbsp;></a></div>
				</div>
				<div class="l_box_2">
					<ul>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>31,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>31,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<a class="r_a" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
							<li>
								<img src="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" width="60" height="60" />
								<div class="b_1_d1"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</div>
								<div class="b_1_d2"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
人在用</div>
							</li>
						</a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>31,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


					</ul>
				</div>
			</div>
		</div>
    <?php echo $_smarty_tpl->getSubTemplate ("foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

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
js/homePage.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
?>