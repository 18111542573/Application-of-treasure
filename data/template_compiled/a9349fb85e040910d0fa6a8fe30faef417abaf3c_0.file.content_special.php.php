<?php /* Smarty version 3.1.27, created on 2018-03-21 01:57:34
         compiled from "E:\www\711cms\templates\template_003\content_special.php" */ ?>
<?php
/*%%SmartyHeaderCode:8884779835ab1bc0e927270_72331702%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9349fb85e040910d0fa6a8fe30faef417abaf3c' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\content_special.php',
      1 => 1500953873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8884779835ab1bc0e927270_72331702',
  'variables' => 
  array (
    'special' => 0,
    'setting' => 0,
    'special_id' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab1bc0e9967f0_72855289',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab1bc0e9967f0_72855289')) {
function content_5ab1bc0e9967f0_72855289 ($_smarty_tpl) {
if (!is_callable('smarty_block_special')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.special.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_function_pagebar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.pagebar.php';

$_smarty_tpl->properties['nocache_hash'] = '8884779835ab1bc0e927270_72331702';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php if ($_smarty_tpl->tpl_vars['special']->value['special_seotitle']) {?>
    <title><?php echo $_smarty_tpl->tpl_vars['special']->value['special_seotitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['special']->value['special_seokey'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['special']->value['special_seodesc'];?>
"/>
    <?php } else { ?>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
"/>
    <?php }?>

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
            <h3>应用列表</h3>
        </div>
        <ul class="app-bb">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('special', array('id'=>$_smarty_tpl->tpl_vars['special_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>18)); $_block_repeat=true; echo smarty_block_special(array('id'=>$_smarty_tpl->tpl_vars['special_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>18), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <div class="icon-wrap">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['special']->value['app_logo']),$_smarty_tpl);?>
" width="68" height="68" alt="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
"
                             class="icon"/>
                    </a>
                </div>
                <div class="app-desc">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
"
                       title="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
" class="name">
                        <?php echo mb_substr($_smarty_tpl->tpl_vars['special']->value['app_title'],0,7,'utf-8');?>

                    </a>

                    <div class="meta">
                        <span class="install-count"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['special']->value['app_down']),$_smarty_tpl);?>
人下载</span>
                        <span class="dot">・</span>
                        <span title="<?php echo $_smarty_tpl->tpl_vars['special']->value['history_size'];?>
"><?php echo round($_smarty_tpl->tpl_vars['special']->value['history_size']/1024/1024,2);?>
MB</span>
                    </div>
                </div>
                <a class="install-btn" rel="nofollow" style="display:block;"
                   href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
">下载</a>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_special(array('id'=>$_smarty_tpl->tpl_vars['special_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>18), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <?php echo smarty_function_pagebar(array('name'=>'special_list','id'=>$_smarty_tpl->tpl_vars['special_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>18),$_smarty_tpl);?>

    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</body>
</html><?php }
}
?>