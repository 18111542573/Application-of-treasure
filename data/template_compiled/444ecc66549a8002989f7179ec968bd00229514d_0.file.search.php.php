<?php /* Smarty version 3.1.27, created on 2018-03-20 11:53:48
         compiled from "E:\www\711cms\templates\mobile_101\search.php" */ ?>
<?php
/*%%SmartyHeaderCode:75255ab085cca88681_42013557%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '444ecc66549a8002989f7179ec968bd00229514d' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\mobile_101\\search.php',
      1 => 1500535121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75255ab085cca88681_42013557',
  'variables' => 
  array (
    'setting' => 0,
    'keywords' => 0,
    'show_sort_id' => 0,
    'applist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab085ccaea110_47697389',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab085ccaea110_47697389')) {
function content_5ab085ccaea110_47697389 ($_smarty_tpl) {
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';

$_smarty_tpl->properties['nocache_hash'] = '75255ab085cca88681_42013557';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="data-spm" content="1"/>
    <meta http-equiv="Cache-Control" content="max-age=3600"/>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<div class="header">
    <h2><font style="max-width:68%" class="overcut">搜索列表</font></h2>
    <a class="back icon-ic_back1-01" href="javascript:history.back();"></a>
</div>
<div class="searchDiv bgGray">
    <table class="search" border="0" cellspacing="0" cellpadding="0">
        <form id="search-form" action="<?php echo smarty_function_link(array('m'=>'search'),$_smarty_tpl);?>
">
            <tr>
                <td class="input">
                    <input type="text" placeholder="精品应用、海量搜索" id="search-input" data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
" name="keyword"/>
                    <span class="delTxt icon-ic_dele-01"></span>
                </td>
                <td class="sear-btn">
                    <span class="icon-ic_search-01"></span>
                    <input type="button" value="" id="search-btn"/>
                </td>
            </tr>
        </form>
    </table>
</div>
<div class="rank-box-div block list-box">
    <!--列表-->
    <div class="rank-list">
        <ul class="speApp">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15)); $_block_repeat=true; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <span class="num"><?php echo $_smarty_tpl->tpl_vars['show_sort_id']->value++;?>
</span>
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"  class="link">
                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" style="display: block;">

                    <h3><font style="max-width:60%" class="overcut"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</font></h3>

                    <p><?php echo round($_smarty_tpl->tpl_vars['applist']->value['history_size']/1024/1024,2);?>
M <?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
+次下载</p>

                    <p><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_seodesc'];?>
</p>
                </a>
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"  class="download">下载</a>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('search'=>$_smarty_tpl->tpl_vars['keywords']->value,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>

    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</body>
</html><?php }
}
?>