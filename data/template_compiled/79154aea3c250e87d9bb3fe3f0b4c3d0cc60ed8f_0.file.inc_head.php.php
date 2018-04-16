<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:30
         compiled from "E:\www\711cms\templates\template_004\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:59635ab08416cd6151_80665602%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79154aea3c250e87d9bb3fe3f0b4c3d0cc60ed8f' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_004\\inc_head.php',
      1 => 1500885667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59635ab08416cd6151_80665602',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab08416cd9fd7_77934136',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab08416cd9fd7_77934136')) {
function content_5ab08416cd9fd7_77934136 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '59635ab08416cd6151_80665602';
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
    function search_app() {
        if ($('#search-input').val() != '') {
            window.location = build_url_js('index','search',{'keywords': $('#search-input').val()},undefined,rewrite = $('#search-input').attr('data-rewrite'));
            //window.location = $('#search-input').attr('data-url') + "&keywords=" + $('#search-input').val();
        }
    }
<?php echo '</script'; ?>
>
<!--[if lte IE 6]>
<?php echo '<script'; ?>
 type="text/javascript" src="http://s6.qhimg.com/static/f54f2caa703115b3/topic.pngfix.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">DD_belatedPNG.fix('#bd,.pngfix')<?php echo '</script'; ?>
>
<![endif]-->




<?php }
}
?>