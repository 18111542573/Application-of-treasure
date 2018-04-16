<?php /* Smarty version 3.1.27, created on 2018-03-22 06:55:58
         compiled from "E:\www\711cms\templates\template_005\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:8727884425ab3537e7b18e7_57183917%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38997a33e76d0884823346eb97f48a15a0d39c0e' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_005\\inc_head.php',
      1 => 1500879328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8727884425ab3537e7b18e7_57183917',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3537e7fbc70_26241855',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3537e7fbc70_26241855')) {
function content_5ab3537e7fbc70_26241855 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8727884425ab3537e7b18e7_57183917';
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/common.css" rel="stylesheet"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/common.js"><?php echo '</script'; ?>
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
    function search_app(){
        if($('#search-input').val()!=''){
            window.location = build_url_js('index','search',{'keywords': $('#search-input').val()},undefined,rewrite = $('#search-input').attr('data-rewrite'));
           // window.location = $('#search-input').attr('data-url') + "&keywords=" + $('#search-input').val();
        }
    }
<?php echo '</script'; ?>
>






<?php }
}
?>