<?php /* Smarty version 3.1.27, created on 2018-03-20 11:48:48
         compiled from "E:\www\711cms\templates\mobile_101\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:90135ab084a0839e81_58909603%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7353533ba4ca0ebd7131f057501c43312b0f20d' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\mobile_101\\inc_head.php',
      1 => 1511403390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90135ab084a0839e81_58909603',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab084a0841b82_31262030',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab084a0841b82_31262030')) {
function content_5ab084a0841b82_31262030 ($_smarty_tpl) {
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';

$_smarty_tpl->properties['nocache_hash'] = '90135ab084a0839e81_58909603';
?>
<link rel="stylesheet" href="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['tpl_path']->value),$_smarty_tpl);?>
css/common.css" type="text/css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['tpl_path']->value),$_smarty_tpl);?>
js/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['tpl_path']->value),$_smarty_tpl);?>
js/TouchSlide.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function build_url_js(c, m, arg, d, rewrite) {
        var c = c.toLowerCase();
        var url = {};
        var build = '';
        var query = '';
        if (rewrite == 1) {
            var keywords = arg.keywords;
            return "/search/?keywords=" + encodeURI(keywords);
        }
        if (d != undefined) {
            $.extend(url, {"d": d});
        }
        if (c != undefined) {
            $.extend(url, {"c": c});
        }
        if (m != undefined) {
            $.extend(url, {"m": m});
        }
        if (typeof arg == 'object') {
            $.extend(url, arg);
        }
        query = $.param(url);
        if (query.length > 0) {
            query = '?' + query;
        }
        build = "/index.php" + query;
        return build;
    }
    $(function(){
        $('#search-btn').click(function(){
            window.location = build_url_js('index','search',{'keywords': $('#search-input').val()},undefined,rewrite = $('#search-input').attr('data-rewrite'));
            // window.location = $('#search-form').attr('action') + "&keywords=" + $('#search-input').val();
        });
    });
<?php echo '</script'; ?>
>



<?php }
}
?>