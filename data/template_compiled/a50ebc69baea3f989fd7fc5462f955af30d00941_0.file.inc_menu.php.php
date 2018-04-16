<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:17
         compiled from "E:\www\711cms\templates\template_003\inc_menu.php" */ ?>
<?php
/*%%SmartyHeaderCode:3165ab08409b583f5_65786206%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a50ebc69baea3f989fd7fc5462f955af30d00941' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\inc_menu.php',
      1 => 1500953873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3165ab08409b583f5_65786206',
  'variables' => 
  array (
    'navicat' => 0,
    'current_page' => 0,
    'app_type_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab08409b7f507_51242667',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab08409b7f507_51242667')) {
function content_5ab08409b7f507_51242667 ($_smarty_tpl) {
if (!is_callable('smarty_block_navicat')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '3165ab08409b583f5_65786206';
?>
<div class="nav-wrap">
    <div class="nav" id="globalNav">
        <ul class="nav-con f16" id="menu_select">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li
            <?php if (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 1 && empty($_smarty_tpl->tpl_vars['current_page']->value)) || strpos($_smarty_tpl->tpl_vars['navicat']->value['navicat_url'],$_smarty_tpl->tpl_vars['current_page']->value) > 0) {?>
            class="nav-home"<?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['app_type_id']->value) && $_smarty_tpl->tpl_vars['app_type_id']->value == $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] && $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] != 'list_service' && $_smarty_tpl->tpl_vars['current_page']->value != 'open_service' && $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] != 'list_packs' && $_smarty_tpl->tpl_vars['current_page']->value != 'open_packs') {?>
            class="nav-home"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_info' && $_smarty_tpl->tpl_vars['current_page']->value == 'content_info') {?>
            class="nav-home"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_packs' && $_smarty_tpl->tpl_vars['current_page']->value == 'open_packs') {?>
            class="nav-home"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_service' && $_smarty_tpl->tpl_vars['current_page']->value == 'open_service') {?>
            class="nav-home"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_special' && $_smarty_tpl->tpl_vars['current_page']->value == 'content_special') {?>
            class="nav-home"
            <?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_blank'] == 1) {?>
            <a class="first-link" href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
" target="_blank">
                <span><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</span>
            </a>
            <?php } else { ?>
            <a class="first-link" href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
">
                <span><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</span>
            </a>
            <?php }?>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>
</div>
<?php }
}
?>