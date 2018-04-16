<?php /* Smarty version 3.1.27, created on 2018-03-22 06:55:58
         compiled from "E:\www\711cms\templates\template_005\inc_menu.php" */ ?>
<?php
/*%%SmartyHeaderCode:20183435635ab3537e826c04_89596712%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '421229121f095664678cc0331982d7a5884c0a53' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_005\\inc_menu.php',
      1 => 1500879328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20183435635ab3537e826c04_89596712',
  'variables' => 
  array (
    'navicat' => 0,
    'current_page' => 0,
    'app_type_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3537e836601_35572601',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3537e836601_35572601')) {
function content_5ab3537e836601_35572601 ($_smarty_tpl) {
if (!is_callable('smarty_block_navicat')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '20183435635ab3537e826c04_89596712';
?>

    <!--主导航 begin-->
    <div class="nav">
        <div class="col_nav">
            <div class="Bnav">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<?php echo smarty_function_link(array('m'=>$_smarty_tpl->tpl_vars['navicat']->value['navicat_m']),$_smarty_tpl);?>
"
                <?php if (($_smarty_tpl->tpl_vars['navicat']->value['nav_sort_show'] == 1 && empty($_smarty_tpl->tpl_vars['current_page']->value)) || strpos($_smarty_tpl->tpl_vars['navicat']->value['navicat_url'],$_smarty_tpl->tpl_vars['current_page']->value) > 0) {?>
                class="navItem current"<?php }?> <?php if ($_smarty_tpl->tpl_vars['navicat']->value['navicat_blank'] == 1) {?>target="_blank"
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['app_type_id']->value) && $_smarty_tpl->tpl_vars['app_type_id']->value == $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] && $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] != 'list_service' && $_smarty_tpl->tpl_vars['current_page']->value != 'open_service' && $_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] != 'list_packs' && $_smarty_tpl->tpl_vars['current_page']->value != 'open_packs') {?>
                class="navItem current"
                <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_info' && $_smarty_tpl->tpl_vars['current_page']->value == 'content_info') {?>
                class="navItem current"
                <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_packs' && $_smarty_tpl->tpl_vars['current_page']->value == 'open_packs') {?>
                class="navItem current"
                <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_service' && $_smarty_tpl->tpl_vars['current_page']->value == 'open_service') {?>
                class="navItem current"
                <?php } elseif ($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_special' && $_smarty_tpl->tpl_vars['current_page']->value == 'content_special') {?>
                class="navItem current"
                <?php } else { ?>
                class="navItem"
                <?php }?>><?php echo $_smarty_tpl->tpl_vars['navicat']->value['navicat_name'];?>
</a>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
    </div>
    <!--主导航 end-->
<?php }
}
?>