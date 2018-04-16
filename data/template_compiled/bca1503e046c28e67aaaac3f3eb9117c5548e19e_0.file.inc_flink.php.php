<?php /* Smarty version 3.1.27, created on 2018-03-20 11:47:09
         compiled from "E:\www\711cms\templates\template_003\inc_flink.php" */ ?>
<?php
/*%%SmartyHeaderCode:308415ab0843d929857_04766504%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bca1503e046c28e67aaaac3f3eb9117c5548e19e' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\inc_flink.php',
      1 => 1500953873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308415ab0843d929857_04766504',
  'variables' => 
  array (
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab0843d939269_87908536',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab0843d939269_87908536')) {
function content_5ab0843d939269_87908536 ($_smarty_tpl) {
if (!is_callable('smarty_block_friendlink')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.friendlink.php';

$_smarty_tpl->properties['nocache_hash'] = '308415ab0843d929857_04766504';
?>
<!-- model start -->
<!-- f-link -->
<div class="home-friend-wrap f14 clear">
    <div class="model">
        <span>友情链接:</span>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('friendlink', array('type'=>2)); $_block_repeat=true; echo smarty_block_friendlink(array('type'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if (!$_smarty_tpl->tpl_vars['friendlink']->value['flink_img']) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
">&nbsp;
            <?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
&nbsp;</a>
        <?php } else { ?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
">
            &nbsp; <img style="display: inline-block; position: relative; top:3px;" width="20" height="20" src="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_img'];?>
"/>
            <?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
&nbsp;
        </a>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_friendlink(array('type'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<!-- f-link -->
<!-- model end --><?php }
}
?>