<?php /* Smarty version 3.1.27, created on 2018-03-22 06:55:38
         compiled from "E:\www\711cms\templates\template_004\search.php" */ ?>
<?php
/*%%SmartyHeaderCode:9733674965ab3536aa06af4_09711731%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6721528a4caa3bab1581a02998c91853d423301a' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_004\\search.php',
      1 => 1500885667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9733674965ab3536aa06af4_09711731',
  'variables' => 
  array (
    'setting' => 0,
    'keywords' => 0,
    'applist' => 0,
    'recommend' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3536aa39779_72994390',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3536aa39779_72994390')) {
function content_5ab3536aa39779_72994390 ($_smarty_tpl) {
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';

$_smarty_tpl->properties['nocache_hash'] = '9733674965ab3536aa06af4_09711731';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
"/>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<div id="doc4">
    <div id="hd">
        <div class="mod-search-hd-bunny">
            <?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
    </div>

<div id="bd">
    <div class="grid-1 sect-1 clearfix mt10 gx-sec-1">
        <div class="hd-hot clearfix">
            <h2>搜索列表</h2>
        </div>
        <div class="articles">

            <div class="mod-list-app mod-list-apps gx-tab-content gx-content">

                <ul class="clearfix gx-text" id="j-wc-rect" data-keyword="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" style="height: auto;">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15)); $_block_repeat=true; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <a class="pic" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" width="48" height="48">
                        </a>
                        <h4>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"
                               title="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</a>
                        </h4>
                        <a class="bt-install setup" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"
                           target="_blank" data-tab="0">安装</a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
            <div class="grid-1 sect-1 clearfix" id="today_recommend" style="display: none;">
                <div class="hd-hot clearfix">
                    <h2 class="ly-moreh">精品推荐<a href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>41),$_smarty_tpl);?>
" class="ly-more">+ 更多</a></h2>
                </div>
                <div class="articles">
                    <div class="mod-list-app mod-list-apps">
                        <ul class="clearfix">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>41,'row'=>30)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>41,'row'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li>
                                <a class="pic" target="_blank" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="48" height="48"></a>
                                <h4><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"
                                       target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></h4>
                                <a class="bt-install setup" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                   data-tab="0" target="_blank">安装</a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>41,'row'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/bc.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/slides.120313.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function () {
        var child_li = $("#j-wc-rect").children("li").index();
        var keyword = $("#j-wc-rect").attr("data-keyword");
        var html = '';
        if(child_li == -1){
            html = '<div class="ly-searchkou">';
            html += '<p>抱歉，没有找到符合条件的“<span>'+ keyword +'</span>”相关内容！</p>';
            html += '</div>';
            $("#j-wc-rect").append(html);
            $("#today_recommend").show();
        }

        $(".slide .js-roll-list").each(function (i) {
            if ($(this).find('li').length) {

                $(this).jcl({
                    btnNext: ".js-next" + i,
                    btnPrev: ".js-prev" + i,
                    afterEnd: function () {
                        if (window.PicLazyUtil) {
                            PicLazyUtil.pushImgs();
                            PicLazyUtil.testImgs();
                        }
                    },
                    circular: false,
                    scroll: 6,
                    visible: 1,
                    speed: 600

                });
            }

        });

        $("body").delegate(".js-roll-list li", "mouseenter", function () {
            $(this).find(".js-pro-name").hide().siblings(".js-btn").css("display", "inline-block");
        });

        $("body").delegate(".js-roll-list li", "mouseleave", function () {
            $(this).find(".js-pro-name").show().siblings(".js-btn").hide();
        });
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>