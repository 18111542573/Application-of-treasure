<?php /* Smarty version 3.1.27, created on 2018-03-20 11:03:19
         compiled from "E:\www\711cms\templates\template_001\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:302585ab079f7e714b0_38265907%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12975dc97086bd6b0b358795c1aad396558fe3f5' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_001\\inc_head.php',
      1 => 1510821384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302585ab079f7e714b0_38265907',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab079f7e791b9_31648908',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab079f7e791b9_31648908')) {
function content_5ab079f7e791b9_31648908 ($_smarty_tpl) {
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';

$_smarty_tpl->properties['nocache_hash'] = '302585ab079f7e714b0_38265907';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
<meta name="robots" content="all" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />
<link rel="stylesheet" href="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['tpl_path']->value),$_smarty_tpl);?>
css/common.css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['tpl_path']->value),$_smarty_tpl);?>
js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['tpl_path']->value),$_smarty_tpl);?>
js/responsiveslides.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['tpl_path']->value),$_smarty_tpl);?>
js/slide.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $("#j-nav-btn").click(function(){
            $("#j-head-menu").show();
            $(".mask").show();
        });
    });
    $(function(){
        $(".mask").click(function(){
            $(this).hide();
            $("#j-head-menu").hide();
        });
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
> 
   (function() {
     if (!/*@cc_on!@*/0) return;
     var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video".split(', ');
     var i= e.length;
     while (i--){
         document.createElement(e[i])
     } 
})() 
<?php echo '</script'; ?>
>
<?php }
}
?>