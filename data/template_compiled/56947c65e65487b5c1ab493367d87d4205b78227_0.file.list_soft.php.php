<?php /* Smarty version 3.1.27, created on 2018-04-16 17:47:45
         compiled from "E:\www\711cms\templates\template_009\list_soft.php" */ ?>
<?php
/*%%SmartyHeaderCode:16883312875ad4714127e4f0_04652995%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56947c65e65487b5c1ab493367d87d4205b78227' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_009\\list_soft.php',
      1 => 1523872063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16883312875ad4714127e4f0_04652995',
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
  'unifunc' => 'content_5ad471412c4a02_89202195',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ad471412c4a02_89202195')) {
function content_5ad471412c4a02_89202195 ($_smarty_tpl) {
if (!is_callable('smarty_block_appnav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_pagebar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.pagebar.php';

$_smarty_tpl->properties['nocache_hash'] = '16883312875ad4714127e4f0_04652995';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>应用市场</title>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/adhibition.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/product.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/index.css"/>
		<link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_627230_qsz431ox1g11nhfr.css"/>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/style.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/tab.js"><?php echo '</script'; ?>
>
	</head>
	<body>
    <!--我是头部-->
        <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<section class="container">
			<!--左边-->
			<div class="bazaar-left">
				<h3>应用市场</h3>
				<div class="list">
					<ul>
						<li>
							<p class="title" id="dj">软件分类</p>
							<ul class='list-se'>
								<p class="title">软件分类</p>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php if ($_smarty_tpl->tpl_vars['appnav']->value['cate_id'] == $_smarty_tpl->tpl_vars['cate_id']->value) {?>
                                <li><p class="act2"><a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</a></p></li>
                                <?php } else { ?>
                                <li><p><a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</a></p></li>
                                <?php }?>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</ul>
						</li>
						<li>
							<p class="title">热门推荐</p>
						</li>
						<li>
							<p class="title">综合评分</p>
						</li>
						<li>
							<p class="title">最新上架</p>
						</li>
						<li>
							<p class="title">应用必备</p>
						</li>
					</ul>
				</div>
			</div>
			<!--右边-->
			<div class="bazaar-right">
				<h3><?php if ($_smarty_tpl->tpl_vars['cate_id']->value > 0) {?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php } else { ?>
                    全部软件
                    <?php }?></h3>
				<div class="tab" js-tab="1">
					<div class="tab-title">
						<a href="javascript:;" class="item item-cur">应用</a>
						<a href="javascript:;" class="item">货币交易</a>
					</div>
					<div class="tab-cont">
						<ul class="tab-cont__wrap">
							<li class="item">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'order'=>$_smarty_tpl->tpl_vars['order_by']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'per_page'=>18)); $_block_repeat=true; echo smarty_block_applist(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'order'=>$_smarty_tpl->tpl_vars['order_by']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'per_page'=>18), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <a class="r_c_a" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
">
                                    <div class="tiem_li">
                                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
"/>
                                        <p> <?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</p>
                                        <p class="star">
                                            <?php if (($_smarty_tpl->tpl_vars['applist']->value['app_grade'] == '1')) {?>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <?php }?>
                                            <?php if (($_smarty_tpl->tpl_vars['applist']->value['app_grade'] == '2')) {?>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <?php }?>
                                            <?php if (($_smarty_tpl->tpl_vars['applist']->value['app_grade'] == '3')) {?>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <?php }?>
                                            <?php if (($_smarty_tpl->tpl_vars['applist']->value['app_grade'] == '4')) {?>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia1"></i>
                                            <?php }?>
                                            <?php if (($_smarty_tpl->tpl_vars['applist']->value['app_grade'] == '5')) {?>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <i class="iconfont icon-pingjia"></i>
                                            <?php }?>
                                        </p>
                                        <button>安装</button>
                                    </div>
                                </a>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'order'=>$_smarty_tpl->tpl_vars['order_by']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'per_page'=>18), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							</li>
							<li class="item">2</li>
						</ul>
					</div>
				</div>
                <?php echo smarty_function_pagebar(array('name'=>'applist','parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'order'=>$_smarty_tpl->tpl_vars['order']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'row'=>14,'per_page'=>14),$_smarty_tpl);?>

									<!--分页-->

			</div>
			
		</section>

		<div class="both">
			
		</div>
    <!--我是底部-->
    <div style="margin-top: 7rem;height: 14rem;background-color: #F2F2F2;">
        <?php echo $_smarty_tpl->getSubTemplate ("footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
		<?php echo '<script'; ?>
 type="text/javascript">
			jQuery(document).ready(function($) 
			{
				$('.list ul li p').clickdown();
			$('.list-se p[class=title]').clickup();
			$('.list>ul>li').ad();
			});
			$(function(){
				$("header").load("header.html")
				$("footer").load("footer.html")
			})
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
            $('.list-se>li>p').on('click',function(){
                if(!$(this).hasClass('act2')){
                    $('.act2').removeClass('act2')
                    $(this).addClass("act2")
                }
            })
		$(function () {
		    $("#dj").trigger('click');
			  /**
				=========== 参数说明 ============
				curDisplay: 当前显示哪张
				mouse: 鼠标事件 (click/over)
				changeMethod: 切换方式 (default/vertical/horizontal/opacity)
				autoPlay: 自动播放 (true/false)
			   */
			
			  // 多个元素同一个变化方式
			  /*$('.tab').each(function () {
				$(this).tab({
				  curDisplay: 5,
				  mouse: 'over',
				  changeMethod: 'vertical'
				});
			  });*/
			
			  // 多个元素不同变化方式（需要在HTML中加入js-tab）
			  $('[js-tab=1]').tab();
			  $('[js-tab=2]').tab({
				curDisplay: 1,
				changeMethod: 'horizontal'
			  });
			});
			$('.list-se>li>p').on('click',function(){
			if(!$(this).hasClass('act2')){
				$('.act2').removeClass('act2')
				$(this).addClass("act2")
			}
		})
		<?php echo '</script'; ?>
>
	</body>
</html>
<?php }
}
?>