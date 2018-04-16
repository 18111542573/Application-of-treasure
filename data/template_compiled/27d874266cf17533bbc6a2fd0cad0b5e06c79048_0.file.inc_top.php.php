<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:30
         compiled from "E:\www\711cms\templates\template_004\inc_top.php" */ ?>
<?php
/*%%SmartyHeaderCode:299925ab08416cf16d8_23444117%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27d874266cf17533bbc6a2fd0cad0b5e06c79048' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_004\\inc_top.php',
      1 => 1500885667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299925ab08416cf16d8_23444117',
  'variables' => 
  array (
    'setting' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab08416cf93d9_47795219',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab08416cf93d9_47795219')) {
function content_5ab08416cf93d9_47795219 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '299925ab08416cf16d8_23444117';
?>
<div class="inner clearfix">
        <div class="mod-search clearfix">
            <a href="/" class="logo">
                <img  width="150" style="width:100%;" height="40" src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_logo'];?>
" id="logo_pc" alt="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_name'];?>
">
            </a>
            <div class="form">
                <div class="input-search">
                    <div class="input-inner">
                        <div id="suggest-align">
                            <input type="text" class="ipt-text" data-url="/index.php?c=index&m=search"
                                   id="search-input" data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
" suggestwidth="492px"
                                   placeholder="搜索手机资源，一键装进手机" autocomplete="off"
                                   onkeydown="if(event.keyCode == 13) search_app()">
                        </div>
                    </div>
                </div>
                <button class="btn-search" id="search-btn" onclick="search_app()">搜索</button>
            </div>
        </div>
</div>







<?php }
}
?>