<?php /* Smarty version 3.1.27, created on 2018-03-20 11:44:42
         compiled from "E:\www\711cms\templates\template_001\inc_top.php" */ ?>
<?php
/*%%SmartyHeaderCode:307755ab083aa2bf358_97200200%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5ad9907fcf889a42467a8440d1d9ce91018b07a' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_001\\inc_top.php',
      1 => 1521517473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307755ab083aa2bf358_97200200',
  'variables' => 
  array (
    'setting' => 0,
    'keyword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab083aa2e6460_76291258',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab083aa2e6460_76291258')) {
function content_5ab083aa2e6460_76291258 ($_smarty_tpl) {
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_keyword')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.keyword.php';

$_smarty_tpl->properties['nocache_hash'] = '307755ab083aa2bf358_97200200';
?>
<div class="header">
    <div class="inner">
        <div class="drawer" id="j-nav-btn"></div>
        <span class="logo-wp">
            <a class="pngFix logo" href="<?php echo smarty_function_link(array('m'=>'index'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_name'];?>
">
                <img width="150" height="40" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['setting']->value['site_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_name'];?>
" />
            </a>
        </span>
        <div class="search-form clearfix" id="search-form" >
            <input class="key-ipt" value="" placeholder="输入应用或游戏关键词" data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
" id="search-input" onkeydown="if(event.keyCode == 13) search_app()" />
            <input type="button" value="搜索" class="submit" id="search-btn" onclick="search_app()"/>
        </div>
        <div class="" style="position: absolute;left: 680px;top:25px;font-size:12px;overflow: hidden">
            热门关键字：
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('keyword', array('row'=>3)); $_block_repeat=true; echo smarty_block_keyword(array('row'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <a href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>
</a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array('row'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    function search_app() {
        var s = $('#search-input').val();
        if(s != '') {
            var url = '';
            var rewrite = $('#search-input').attr('data-rewrite');
            if(rewrite > 0){
                url = 'search/'+encodeURIComponent(s)+'.html';
            }else{
                url = '/?c=index&m=search&keywords='+encodeURIComponent(s);
            }
            window.location = url;
        }
    }
<?php echo '</script'; ?>
>
<?php }
}
?>