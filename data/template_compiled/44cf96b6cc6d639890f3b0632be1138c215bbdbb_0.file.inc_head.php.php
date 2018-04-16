<?php /* Smarty version 3.1.27, created on 2018-03-30 17:57:10
         compiled from "E:\www\711cms\templates\template_008\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:20407359525abe09f6658385_17622441%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44cf96b6cc6d639890f3b0632be1138c215bbdbb' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_008\\inc_head.php',
      1 => 1522403825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20407359525abe09f6658385_17622441',
  'variables' => 
  array (
    'tpl_path' => 0,
    'setting' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5abe09f667b615_36671377',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5abe09f667b615_36671377')) {
function content_5abe09f667b615_36671377 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20407359525abe09f6658385_17622441';
?>
<div id="head">
    <div class="top_c">
        <a href="/"><img class="a" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/logo.png" /></a>
        <ul>
<!--            <li><a href="/">首页</a></li>-->
            <li class="li_bg"><a href="/?c=index&m=softs" style="color: white">应用市场</a></li>
<!--            <li><a href="/?c=index&m=infos2">热门资讯</a></li>-->
<!--            <li><a href="#">应用接入</a></li>-->
        </ul>
        <div class="top_ibox">
            <img class="top_down" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/dwon.png" />
            <input class="top_input" placeholder="输入DAPP名称或类型" data-url="/index.php?c=index&m=search2" data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
" id="search-input" onkeydown="if(event.keyCode == 13) search_app()" />
            <a onclick="search_app()"><img class="top_fa" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/fangda.png" /></a>
        </div>
    </div>
</div>
<style>
    .top_fa{
        transform: rotate(270deg);
    }
    *{
        font-family: '微软雅黑';
    }
</style>
<?php echo '<script'; ?>
>
    function build_url_js(c, m, arg, d, rewrite) {
        var c = c.toLowerCase();
        var url = {};
        var build = '';
        var query = '';
        if (rewrite == 1) {
            var keywords = arg.keywords;
            return "/search2/?keywords=" + encodeURI(keywords);
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
            // window.location = $('#search-input').attr('data-url') + "&keywords=" + $('#search-input').val();
        }
    }
<?php echo '</script'; ?>
><?php }
}
?>