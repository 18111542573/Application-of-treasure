<?php /* Smarty version 3.1.27, created on 2018-04-16 17:32:52
         compiled from "E:\www\711cms\templates\template_009\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:2924777155ad46dc4e42eb9_52582809%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a3bdb622febc2c07bd444e3745d3a38169279eb' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_009\\index.php',
      1 => 1523871166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2924777155ad46dc4e42eb9_52582809',
  'variables' => 
  array (
    'tpl_path' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ad46dc4e816c5_79785285',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ad46dc4e816c5_79785285')) {
function content_5ad46dc4e816c5_79785285 ($_smarty_tpl) {
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '2924777155ad46dc4e42eb9_52582809';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>imDapp应用宝</title>
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="http://at.alicdn.com/t/font_627230_qsz431ox1g11nhfr.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/product.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/index.css"/>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
</head>
<body>
<!--我是头部-->
<header>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</header>
<!--头部banner-->
<section class="container-fluid bg">
    <div class="download-button">
        <button>苹果下载</button>
        <button>安卓下载</button>
    </div>
</section>
<section class="container">
    <div class="newest-left">
        <div class="newest-top"><p id="zx" class="xhx">最新上架</p><p id="jp">精品推荐</p></div>
        <div class="both"></div>
        <div class="newest-bottom xs">
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>70,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>70,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_logo'];?>
" />
                    <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>
                    <p class="star">
                        <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '1')) {?>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '2')) {?>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '3')) {?>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '4')) {?>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '5')) {?>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <?php }?>
                    </p>
                    <button>安装</button>
                </li>
                </a>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>70,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="newest-bottom yc">
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>41,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>41,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                    <li>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_logo'];?>
" />
                        <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>
                        <p class="star">
                            <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '1')) {?>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '2')) {?>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '3')) {?>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '4')) {?>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia1"></i>
                            <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '5')) {?>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <i class="iconfont icon-pingjia"></i>
                            <?php }?>
                        </p>
                        <button>安装</button>
                    </li>
                </a>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>41,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>
    <div class="newest-right">
        <p>应用排行榜</p>
        <ol>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>42,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>42,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
            <li>
                <div class="text-left"><span><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_id'];?>
</span>&nbsp;&nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_logo'];?>
"/></div>
                <div class="text-right2">
							<span class="text-name">
								<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>

							</span>
                    <span class="text-xz">
								<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_down'];?>
人下载
							</span>
                </div>
                <div class="text-right">
                    <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>
                    <p class="star">
                        <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '1')) {?>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '2')) {?>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '3')) {?>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '4')) {?>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia1"></i>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['recommend']->value['app_grade'] == '5')) {?>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <i class="iconfont icon-pingjia"></i>
                        <?php }?>
                    </p>
                    <button>安装</button>
                </div>
            </li>
            </a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>42,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ol>
    </div>
</section>
<!--我是底部-->
<footer>
    <?php echo $_smarty_tpl->getSubTemplate ("footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</footer>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){

//				$("header").load("header.html")`
//        $("footer").load("<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
footer.php")
    })
    $(".newest-right li").hover(function(){
        $(this).children(".text-right2").hide();
        $(this).children(".text-right").show();
    },function(){
        $(this).children(".text-right").hide();
        $(this).children(".text-right2").show();
    })
    //			console.log(123)

    window.onload=function (){
        $('.shouye').on('click',function(){
            if(!$(this).hasClass('act')){
                $('.act').removeClass('act')
                $(this).addClass("act")
            }
        })
        var userName="123123"
    }
    $('.newest-top p').on('click',function(){
        if(!$(this).hasClass('xhx')){
            $('.xhx').removeClass('xhx')
            $(this).addClass("xhx")
        }
    })
    $("#zx").on("click",function(){
        $(".xs").show()
        $(".yc").hide()
    })
    $("#jp").on("click",function(){
        $(".xs").hide()
        $(".yc").show()
    })
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>