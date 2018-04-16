<?php /* Smarty version 3.1.27, created on 2018-03-22 06:55:58
         compiled from "E:\www\711cms\templates\template_005\search.php" */ ?>
<?php
/*%%SmartyHeaderCode:13106118515ab3537e767550_08638214%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a8466e7138db9415fe8b1fd67efa098d5d4b07a' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_005\\search.php',
      1 => 1500879328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13106118515ab3537e767550_08638214',
  'variables' => 
  array (
    'setting' => 0,
    'keywords' => 0,
    'applist' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3537e7a5d69_06753914',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3537e7a5d69_06753914')) {
function content_5ab3537e7a5d69_06753914 ($_smarty_tpl) {
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_countstar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countstar.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';

$_smarty_tpl->properties['nocache_hash'] = '13106118515ab3537e767550_08638214';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
" />
    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>
<div class="wrapper">
    <?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<!--main-->
<div class="main">
    <div class="wp">
        <!--游戏/应用分类 begin-->
        <dl class="sort_box">
            <dt>搜索列表</dt>
        </dl>
        <!--游戏/应用分类 end-->
        <!--游戏/应用信息 start-->
        <div class="row row_list">
            <div class="article">
                <!--列表 begin-->
                <div id="Mlist" class="Mlist" style="overflow:visible;" data-keyword="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15)); $_block_repeat=true; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="list_item">
                        <div class="Mimg">
                            <img height="72" width="72" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
"
                                 src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
"/>
                            <span class="layer"></span>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" class="link"
                               target="_blank"></a>
                        </div>
                        <div class="tit_area">
                            <span class="name"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"
                                                  target="_blank"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</a></span>
                            <span class="level_mid"><i <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['applist']->value['app_recomment']),$_smarty_tpl);?>
></i></span>
                        </div>
                        <div class="desc_area">
                            <?php echo $_smarty_tpl->tpl_vars['applist']->value['app_seodesc'];?>
...
                        </div>
                        <div class="prop_area">
                            <span>人气：<?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
</span>
                            <span>大小：<?php echo round($_smarty_tpl->tpl_vars['applist']->value['history_size']/1024/1024,2);?>
MB</span>
                            <span>更新：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['applist']->value['app_update_time'],"%Y-%m-%d");?>
</span>
                        </div>
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                           class="btn">立即下载</a>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                </div>
                <!--列表 end-->
            </div>
        </div>

        <div class="main">
            <div class="wp">
                <!-- recommend -->
                <div class="module module-recommend">
                    <div class="btitle"><h2 class="ly-moreh"><i></i>精品推荐<a href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>41),$_smarty_tpl);?>
" class="ly-more">+更多</a></h2></div>
                    <div class="bmeta">
                        <div class="apkbox">
                            <ul class="clearfix">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>41,'row'=>30)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>41,'row'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <li>
                            <span class="pic">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" width="64" height="64">
                            </span>
                            <span class="name"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                  target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></span>
                                    <span class="level"><i <?php echo smarty_function_countstar(array('star'=>$_smarty_tpl->tpl_vars['recommend']->value['app_recomment']),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_grade'];?>
分</i></span>
                            <span class="btn"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                 target="_blank">立即下载</a></span>
                                    <span class="layer"></span><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                                                  target="_blank" class="link"></a>
                                </li>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>41,'row'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /recommend -->
            </div>
        </div>
        <!--游戏/应用信息 end-->
    </div>
    <!-- /main-->
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('inc_foot.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
>
    $(function () {
        var child_li = $("#Mlist").children("div").index();
        var keyword = $("#Mlist").attr("data-keyword");
        var html = '';
        if (child_li == -1) {
            html = '<div class="ly-searchkou">';
            html += '<p>抱歉，没有找到符合条件的“<span>' + keyword + '</span>”相关内容！</p>';
            html += '</div>';
            $("#Mlist").append(html);
            $("#today_recommend").show();
        }
    });
 <?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>