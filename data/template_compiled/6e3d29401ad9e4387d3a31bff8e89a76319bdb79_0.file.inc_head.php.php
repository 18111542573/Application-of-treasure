<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:07
         compiled from "E:\www\711cms\templates\template_002\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:315015ab083ff4f9041_52330669%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e3d29401ad9e4387d3a31bff8e89a76319bdb79' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_002\\inc_head.php',
      1 => 1497319222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315015ab083ff4f9041_52330669',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab083ff4fcec9_66018479',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab083ff4fcec9_66018479')) {
function content_5ab083ff4fcec9_66018479 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '315015ab083ff4f9041_52330669';
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/common.css" rel="stylesheet"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/android.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery.prettyphoto.js" ><?php echo '</script'; ?>
>
<?php }
}
?>