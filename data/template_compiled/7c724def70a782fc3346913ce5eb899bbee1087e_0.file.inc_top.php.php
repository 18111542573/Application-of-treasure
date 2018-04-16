<?php /* Smarty version 3.1.27, created on 2018-03-22 06:55:58
         compiled from "E:\www\711cms\templates\template_005\inc_top.php" */ ?>
<?php
/*%%SmartyHeaderCode:13300404315ab3537e8077f3_21550146%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c724def70a782fc3346913ce5eb899bbee1087e' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_005\\inc_top.php',
      1 => 1500879328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13300404315ab3537e8077f3_21550146',
  'variables' => 
  array (
    'setting' => 0,
    'keyword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3537e8171f1_14156546',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3537e8171f1_14156546')) {
function content_5ab3537e8171f1_14156546 ($_smarty_tpl) {
if (!is_callable('smarty_block_keyword')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.keyword.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '13300404315ab3537e8077f3_21550146';
?>
<div class="header">
    <div class="col_header clearfix">
        <div class="headerLogo"><a href="/" target="_self" title="安卓手机软件"><img src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_logo'];?>
"
                                                                               width="235" height="65"
                                                                               alt="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_name'];?>
"
                                                                               title="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_name'];?>
"></a>
        </div>
        <div class="headerSearch search_box" id="search_box">
            <input id="search-input" data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
" type="text" class="searchInput" data-url="/index.php?c=index&m=search"
                   onkeydown="if(event.keyCode == 13) search_app()">
            <span class="searchBtn serch_btn" onclick="search_app()" id="search-btn">搜索</span>
        </div>
        <p class="headerHotWords">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('keyword', array('row'=>3)); $_block_repeat=true; echo smarty_block_keyword(array('row'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <a href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>
</a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array('row'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </p>
    </div>
</div>
<?php }
}
?>