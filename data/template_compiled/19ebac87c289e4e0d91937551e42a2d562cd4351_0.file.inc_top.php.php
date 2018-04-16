<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:41
         compiled from "E:\www\711cms\templates\template_006\inc_top.php" */ ?>
<?php
/*%%SmartyHeaderCode:167655ab0842195ddd8_00787545%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19ebac87c289e4e0d91937551e42a2d562cd4351' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_006\\inc_top.php',
      1 => 1500951331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167655ab0842195ddd8_00787545',
  'variables' => 
  array (
    'setting' => 0,
    'keyword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab0842196d7d3_90182569',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab0842196d7d3_90182569')) {
function content_5ab0842196d7d3_90182569 ($_smarty_tpl) {
if (!is_callable('smarty_block_keyword')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.keyword.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '167655ab0842195ddd8_00787545';
?>
<div class="header">
    <div class="logo">
        <a href="/"><img src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_logo'];?>
" width="150" height="50"></a>
    </div>
    <div class="sear_box">
        <div class="hot_word">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('keyword', array('row'=>2)); $_block_repeat=true; echo smarty_block_keyword(array('row'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <a href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>
</a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array('row'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                                  
        </div>
        <div class="search" id="search-form" >
            <input class="txt_search" type="text"  value="" placeholder="输入应用或游戏关键词" data-url="/index.php?c=index&m=search" data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
" id="search-input" onkeydown="if(event.keyCode == 13) search_app()" />
            <input class="btn_search" type="button" value="搜索"  id="search-btn" onclick="search_app()"/>
        </div>
    </div>
</div>

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
           // window.location = $('#search-input').attr('data-url') + "&keywords=" + $('#search-input').val();
        }
    }
<?php echo '</script'; ?>
>
<?php }
}
?>