<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:41
         compiled from "E:\www\711cms\templates\template_006\inc_menu.php" */ ?>
<?php
/*%%SmartyHeaderCode:103545ab08421981058_10803595%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe2cb42bf48b25c7aace9eaf41940b5b3f630d4b' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_006\\inc_menu.php',
      1 => 1500951331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103545ab08421981058_10803595',
  'variables' => 
  array (
    'navicat' => 0,
    'current_page' => 0,
    'app_type_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab084219a0469_14796196',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab084219a0469_14796196')) {
function content_5ab084219a0469_14796196 ($_smarty_tpl) {
if (!is_callable('smarty_block_navicat')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '103545ab08421981058_10803595';
?>
<div class="menu">
    <div class="m_main">
        <div class="min">
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li <?php if (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 1 && empty($_smarty_tpl->tpl_vars['current_page']->value)) || strpos($_smarty_tpl->tpl_vars['navicat']->value['navicat_url'],$_smarty_tpl->tpl_vars['current_page']->value) > 0) {?>
                    class="min_on"

                <?php } elseif (isset($_smarty_tpl->tpl_vars['app_type_id']->value) && $_smarty_tpl->tpl_vars['app_type_id']->value == $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] && $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] != 'list_service' && $_smarty_tpl->tpl_vars['current_page']->value != 'open_service' && $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] != 'list_packs' && $_smarty_tpl->tpl_vars['current_page']->value != 'open_packs') {?>
                    class="min_on"

                    <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_info' && $_smarty_tpl->tpl_vars['current_page']->value == 'content_info') {?>
                    class="min_on"

                    <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_special' && $_smarty_tpl->tpl_vars['current_page']->value == 'content_special') {?>
                    class="min_on"
                    <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_packs' && $_smarty_tpl->tpl_vars['current_page']->value == 'open_packs') {?>
                    class="min_on"
                    <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_service' && $_smarty_tpl->tpl_vars['current_page']->value == 'open_service') {?>
                    class="min_on"
                    <?php } else { ?>
                    class=""
                    <?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_blank'] == 1) {?>
                    <a  href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
" target="_blank">
                        <?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>

                    </a>
                    <?php } else { ?>
                    <a  href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
">
                        <?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>

                    </a>
                    <?php }?>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
    
            </ul>        
        </div>
    </div>
</div><?php }
}
?>