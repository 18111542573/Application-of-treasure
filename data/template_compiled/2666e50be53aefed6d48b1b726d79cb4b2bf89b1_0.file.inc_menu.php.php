<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:30
         compiled from "E:\www\711cms\templates\template_004\inc_menu.php" */ ?>
<?php
/*%%SmartyHeaderCode:169615ab08416d08dd8_50711994%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2666e50be53aefed6d48b1b726d79cb4b2bf89b1' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_004\\inc_menu.php',
      1 => 1500885667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169615ab08416d08dd8_50711994',
  'variables' => 
  array (
    'navicat' => 0,
    'current_page' => 0,
    'app_type_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab08416d475e7_34041466',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab08416d475e7_34041466')) {
function content_5ab08416d475e7_34041466 ($_smarty_tpl) {
if (!is_callable('smarty_block_navicat')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '169615ab08416d08dd8_50711994';
?>
<div class="inner clearfix">
    <div class="mod-nav" id="section_1">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_id'] == 4) {?>
                       <span class="install-all">
                           <a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
" id="mod-install" <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_blank'] == 1) {?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</a>
                       </span>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_id'] != 4) {?>
        <a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
"
        <?php if (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 1 && empty($_smarty_tpl->tpl_vars['current_page']->value)) || strpos($_smarty_tpl->tpl_vars['navicat']->value['navicat_url'],$_smarty_tpl->tpl_vars['current_page']->value) > 0) {?>
        id="current"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_blank'] == 1) {?>target="_blank"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_soft') {?>
        class="soft"
        <?php if (isset($_smarty_tpl->tpl_vars['app_type_id']->value) && $_smarty_tpl->tpl_vars['app_type_id']->value == $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] && $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] != 'list_service' && $_smarty_tpl->tpl_vars['current_page']->value != 'open_service' && $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] != 'list_packs' && $_smarty_tpl->tpl_vars['current_page']->value != 'open_packs') {?>
        id="current"
        <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'index') {?>
        class="home"
        <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_game') {?>
        class="game"
        <?php if (isset($_smarty_tpl->tpl_vars['app_type_id']->value) && $_smarty_tpl->tpl_vars['app_type_id']->value == $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] && $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] != 'list_service' && $_smarty_tpl->tpl_vars['current_page']->value != 'open_service' && $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] != 'list_packs' && $_smarty_tpl->tpl_vars['current_page']->value != 'open_packs') {?>
        id="current"
        <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_info') {?>
        class="wallpaper"
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value == 'content_info') {?>
        id="current"
        <?php }?>

        <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_service') {?>
        class="wallpaper"
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value == 'open_service') {?>
        id="current"
        <?php }?>

        <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_packs') {?>
        class="wallpaper"
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value == 'open_packs') {?>
        id="current"
        <?php }?>

        <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_special') {?>
        class="soft"
        <?php if ($_smarty_tpl->tpl_vars['current_page']->value == 'content_special') {?>
        id="current"
        <?php }?>
        <?php } else { ?>
        <?php }?>><i><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</i></a>
        <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_count'] != $_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show']) {?>
        <span class="line"></span>
        <?php }?>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div><?php }
}
?>