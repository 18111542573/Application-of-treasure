<?php /* Smarty version 3.1.27, created on 2018-03-22 06:35:39
         compiled from "E:\www\711cms\templates\template_003\search.php" */ ?>
<?php
/*%%SmartyHeaderCode:8524469995ab34ebb1421b5_23561708%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe8abbd816e1bb8a5da413e88c357139ce20950e' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\search.php',
      1 => 1521700529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8524469995ab34ebb1421b5_23561708',
  'variables' => 
  array (
    'setting' => 0,
    'keywords' => 0,
    'applist' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab34ebb19fdc8_32284091',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab34ebb19fdc8_32284091')) {
function content_5ab34ebb19fdc8_32284091 ($_smarty_tpl) {
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';

$_smarty_tpl->properties['nocache_hash'] = '8524469995ab34ebb1421b5_23561708';
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
<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="model">
    <div class="game-s">
        <div class="model-title">
            <h3>搜索列表</h3>
        </div>
        <ul class="app-bb" id="j-wc-rect" data-keyword="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15)); $_block_repeat=true; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <div class="icon-wrap">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" width="68" height="68" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
"
                             class="icon"/>
                    </a>
                </div>
                <div class="app-desc">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"
                       title="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" class="name">
                        <?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>

                    </a>

                    <div class="meta">
                        <span class="install-count"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
人下载</span>
                        <span class="dot">・</span>
                        <span title="<?php echo $_smarty_tpl->tpl_vars['applist']->value['history_size'];?>
"><?php echo round($_smarty_tpl->tpl_vars['applist']->value['history_size']/1024/1024,2);?>
MB</span>
                    </div>
                </div>
                <a class="install-btn" rel="nofollow" style="display:block;"
                   href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
">下载</a>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>

    <div class="model clear" style="display: none;" id="today_recommend">
        <!-- home-recommend start -->
        <div class="submodel-left">
            <div class="model-title">
                <h3>精品推荐</h3>
                <a class="model-title-more" href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>41),$_smarty_tpl);?>
" target="_blank">更多</a>
            </div>
            <ul class="home-recommend app-panel app-qr-ani">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>41,'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>41,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="app-panel-icon">
                        <a class="app-qr-ani-link" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                           target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="img-radius"
                                 title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">
                        </a>
                    </div>
                    <p class="nowrap f14 lh240"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>

                    <p class="ml15 mr15">
                        <a class="btn btn-style2 btn-sm btn-block "
                           href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">免费下载</a>
                    </p>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>41,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <!-- home-recommend end -->

        <!-- home-list start -->
        <div class="submodel-right">
            <div class="model-title">
                <h3>热门排行榜</h3>
                <a class="model-title-more" href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>42),$_smarty_tpl);?>
" target="_blank">更多</a>
            </div>
            <ul class="home-recommend app-panel app-qr-ani">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>42,'row'=>9)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>42,'row'=>9), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="app-panel-icon">
                        <a class="app-qr-ani-link" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                           target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="img-radius"
                                 title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">
                        </a>
                    </div>
                    <p class="nowrap f14 lh240"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>

                    <p class="ml15 mr15">
                        <a class="btn btn-style2 btn-sm btn-block " target="_blank"
                           href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">免费下载</a>
                    </p>
                </li>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>42,'row'=>9), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            </ul>

        </div>
    </div>
</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
>
    $(function(){
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
    });
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
?>