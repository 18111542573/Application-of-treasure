<?php /* Smarty version 3.1.27, created on 2018-04-16 18:11:27
         compiled from "E:\www\711cms\templates\template_009\content_app.php" */ ?>
<?php
/*%%SmartyHeaderCode:15207661815ad476cfc53701_64476840%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0493f8c91f4f81dd173686ed94071fe0bb1b54a' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_009\\content_app.php',
      1 => 1523873487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15207661815ad476cfc53701_64476840',
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
  'unifunc' => 'content_5ad476cfc99c17_06223885',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ad476cfc99c17_06223885')) {
function content_5ad476cfc99c17_06223885 ($_smarty_tpl) {
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_imagelist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.imagelist.php';
if (!is_callable('smarty_block_relevant')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.relevant.php';

$_smarty_tpl->properties['nocache_hash'] = '15207661815ad476cfc53701_64476840';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>imDapp应用宝</title>
		<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_627230_qsz431ox1g11nhfr.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/swiper.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/product.css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    </head>
	<body>
		<!--我是头部-->
		<header>
			<?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</header>
		<!--app图标内容-->
		<section class="container ico-particulars">
			<div class="img-left">
				<img class="ico-app" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['app']->value['app_logo']),$_smarty_tpl);?>
"/>
			</div>
			<div class="particulars-right">
				<div class="particulars-top">
					<h2><?php echo $_smarty_tpl->tpl_vars['app']->value['app_title'];?>
<span><?php echo $_smarty_tpl->tpl_vars['app']->value['app_recomment'];?>
+</span></h2>
					<p>分享美好生活</p>
					<p><?php echo $_smarty_tpl->tpl_vars['app']->value['app_company'];?>
</p>
				</div>
				<div class="particulars-bottom">
					<div class="particulars-bottom-left">
						<p>“<?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>

                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
”类</p>
						<p class="star">
                            <?php if (($_smarty_tpl->tpl_vars['app']->value['app_grade'] == '1')) {?>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['app']->value['app_grade'] == '2')) {?>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['app']->value['app_grade'] == '3')) {?>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['app']->value['app_grade'] == '4')) {?>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['app']->value['app_grade'] == '5')) {?>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <?php }?>
						</p>
						<p class="pf"><?php echo $_smarty_tpl->tpl_vars['app']->value['app_grade'];?>
M评分</p>
						<p>免费 提供 App 内购买项目</p>
					</div>
					<div class="particulars-bottom-right">
                        <a href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'type'=>2),$_smarty_tpl);?>
" >
						    <button>苹果下载</button>
                        </a>
                        <a href="<?php echo smarty_function_link(array('m'=>'download','app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'],'type'=>1),$_smarty_tpl);?>
" >
						    <button>安卓下载</button>
                        </a>
					</div>
				</div>
			</div>
		</section>
		<!--我是华丽的分割线-->
		<div class="container fgx" style="margin-top:2.3rem;margin-bottom: 2.3rem;"></div>
		<!--屏幕截图-->
		<section class="container">
			<div class="screenshot">
				<h4>屏幕截图<span>移动设备<i class="iconfont icon-jiantou6"></i></span></h4>
			</div>
			<div class="screenshot-img">
			  <!-- Swiper -->
			  <div class="swiper-container">
			    <div class="swiper-wrapper">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('imagelist', array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id'])); $_block_repeat=true; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			             <div class="swiper-slide"><img src="<?php echo $_smarty_tpl->tpl_vars['imagelist']->value['resource_url'];?>
"/></div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_imagelist(array('app_id'=>$_smarty_tpl->tpl_vars['app']->value['app_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			    </div>
			    <!-- Add Pagination -->
			    <!--<div class="swiper-pagination"></div>-->
			  </div>				
			</div>
		</section>
		<!--我是华丽的分割线-->
		<div class="container fgx" style="margin-top:2.3rem;margin-bottom: 2.3rem;"></div>
		<!--应用简介-->
		<section class="container">
			<div class="Application-profile">
				<h4>应用简介</h4>
                <?php echo $_smarty_tpl->tpl_vars['app']->value['app_desc'];?>

			</div>
			<div class="more">
				<span>更多</span>
			</div>
		</section>
		<!--我是华丽的分割线-->
		<div class="container fgx" style="margin-top:2.3rem;margin-bottom: 2.3rem;"></div>
		<!--新内容-->
		<section class="container">
			<div class="nav-content">
				<h4>新内容</h4>
				<p>修复bug，优化体验</p>
				<p>版本 1.0</p>
			</div>
		</section>
		<!--我是华丽的分割线-->
		<div class="container fgx" style="margin-top:2.3rem;margin-bottom: 2.3rem;"></div>
		<!--信息-->
		<section class="container">
			<div class="message">
				<h4>信息</h4>
				<p>销售商 <?php echo $_smarty_tpl->tpl_vars['app']->value['app_company'];?>
</p>
				<p>大小 <?php echo $_smarty_tpl->tpl_vars['app']->value['history_size'];?>
M</p>
				<p>类別 <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
				<p>兼容性 需要 iOS 8.0 或更高版本。与 iPhone、iPad 和 iPod touch 兼容。</p>
			</div>
		</section>
		<!--我是华丽的分割线-->
		<div class="container fgx" style="margin-top:2.3rem;margin-bottom: 2.3rem;"></div>
		<!--您可能也喜欢-->
		<section class="container">
			<div class="like">
				<div>
					<h4>您也可能喜欢</h4>
					<span>查看全部</span>
				</div>
				<div class="both"></div>
				<ul class="all-like-img">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('relevant', array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>6)); $_block_repeat=true; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <a class="de_a" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['relevant']->value['app_id']),$_smarty_tpl);?>
">
                        <li>
                            <img class="like-img" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['relevant']->value['app_logo']),$_smarty_tpl);?>
"/>
                            <p><?php echo $_smarty_tpl->tpl_vars['relevant']->value['app_title'];?>
</p>
                            <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>

                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
                        </li>
                    </a>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_relevant(array('cid'=>$_smarty_tpl->tpl_vars['app']->value['last_cate_id'],'row'=>6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<div class="both"></div>
				</ul>
			</div>
		</section>
		<!--我是底部-->
		<footer>
            <?php echo $_smarty_tpl->getSubTemplate ("footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </footer>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/swiper.min.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
		<!--滑动函数-->
		<?php echo '<script'; ?>
 type="text/javascript">
		    var swiper = new Swiper('.swiper-container', {
		      slidesPerView: 4,
		      spaceBetween: 20,
		      // init: false,
		      pagination: {
		        el: '.swiper-pagination',
		        clickable: true,
		      },
		      breakpoints: {
		        1024: {
		          slidesPerView: 4,
		          spaceBetween: 40,
		        },
		        768: {
		          slidesPerView: 3,
		          spaceBetween: 30,
		        },
		        640: {
		          slidesPerView: 2,
		          spaceBetween: 20,
		        },
		        320: {
		          slidesPerView: 1,
		          spaceBetween: 10,
		        }
		      }
		    });
	  	<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(document).ready(function(){
//				$("footer").load("footer.html")
//				$("header").load("header.html")
			})
			var h = $(".Application-profile p:nth-child(3)").height()
			$(".more").children().on("click",function(){
				var h = $(".Application-profile p:nth-child(3)").height()
				$(".Application-profile p:nth-child(3)").css("-webkit-line-clamp","initial")
				$(".Application-profile p:nth-child(3)").css("overflow","initial")
			})
		<?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
?>