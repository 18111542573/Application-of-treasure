<?php /* Smarty version 3.1.27, created on 2018-03-20 11:03:19
         compiled from "E:\www\711cms\templates\template_001\inc_menu.php" */ ?>
<?php
/*%%SmartyHeaderCode:94725ab079f7eb79c2_80248920%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34bcf8b1661838b2bafe5e2a64bcd40a2e0fe5be' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_001\\inc_menu.php',
      1 => 1497605184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94725ab079f7eb79c2_80248920',
  'variables' => 
  array (
    'navicat' => 0,
    'current_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab079f7ec73d1_41401999',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab079f7ec73d1_41401999')) {
function content_5ab079f7ec73d1_41401999 ($_smarty_tpl) {
if (!is_callable('smarty_block_navicat')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '94725ab079f7eb79c2_80248920';
?>
<div id="j-head-menu" class="menu-list pc-main-menu">
    <ul class="parent-menu">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class=<?php if (($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == $_smarty_tpl->tpl_vars['current_page']->value)) {?>"nav-item2"<?php } else { ?>"nav-item"<?php }?>>
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
<div class="mask" id="j-mask"></div>
<?php }
}
?>