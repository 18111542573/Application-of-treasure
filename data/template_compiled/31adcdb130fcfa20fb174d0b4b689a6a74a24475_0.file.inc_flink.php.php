<?php /* Smarty version 3.1.27, created on 2018-03-22 06:54:18
         compiled from "E:\www\711cms\templates\template_002\inc_flink.php" */ ?>
<?php
/*%%SmartyHeaderCode:2154948015ab3531a3bedf2_67029048%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31adcdb130fcfa20fb174d0b4b689a6a74a24475' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_002\\inc_flink.php',
      1 => 1497319222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2154948015ab3531a3bedf2_67029048',
  'variables' => 
  array (
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3531a3c6b09_54501031',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3531a3c6b09_54501031')) {
function content_5ab3531a3c6b09_54501031 ($_smarty_tpl) {
if (!is_callable('smarty_block_friendlink')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.friendlink.php';

$_smarty_tpl->properties['nocache_hash'] = '2154948015ab3531a3bedf2_67029048';
?>
<!-- f-link -->
<div class="box">
    <div class="itit">友情链接</div>
    <div class="flink">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('friendlink', array('type'=>2)); $_block_repeat=true; echo smarty_block_friendlink(array('type'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if (!$_smarty_tpl->tpl_vars['friendlink']->value['flink_img']) {?>
        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
">
            <b><?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
</b>
        </a>
        <?php } else { ?>
        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
">
            <img style="display: inline-block; position: relative; top:3px;" width="20" height="20" src="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_img'];?>
"/>
            <b><?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
</b>
        </a>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_friendlink(array('type'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<!-- f-link --><?php }
}
?>