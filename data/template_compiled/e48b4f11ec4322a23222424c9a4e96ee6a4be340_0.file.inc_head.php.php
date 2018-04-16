<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:17
         compiled from "E:\www\711cms\templates\template_003\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:43665ab08409b11ee5_33529600%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e48b4f11ec4322a23222424c9a4e96ee6a4be340' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\inc_head.php',
      1 => 1500953873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43665ab08409b11ee5_33529600',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab08409b15d61_56863191',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab08409b15d61_56863191')) {
function content_5ab08409b15d61_56863191 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '43665ab08409b11ee5_33529600';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta charset="utf-8"/>
<meta name="robots" content="all"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/common.css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/responsiveslides.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/slide.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jcarousellite.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
        $("#j-nav-btn").click(function () {
            $("#j-head-menu").show();
            $(".mask").show();
        });
    });
    $(function () {
        $(".mask").click(function () {
            $(this).hide();
            $("#j-head-menu").hide();
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
?>