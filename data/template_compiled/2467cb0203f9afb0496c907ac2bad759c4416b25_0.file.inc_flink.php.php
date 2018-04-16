<?php /* Smarty version 3.1.27, created on 2018-03-22 06:56:30
         compiled from "E:\www\711cms\templates\template_006\inc_flink.php" */ ?>
<?php
/*%%SmartyHeaderCode:14797342675ab3539e8fcf10_62892369%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2467cb0203f9afb0496c907ac2bad759c4416b25' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_006\\inc_flink.php',
      1 => 1500951331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14797342675ab3539e8fcf10_62892369',
  'variables' => 
  array (
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3539e904c19_41812567',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3539e904c19_41812567')) {
function content_5ab3539e904c19_41812567 ($_smarty_tpl) {
if (!is_callable('smarty_block_friendlink')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.friendlink.php';

$_smarty_tpl->properties['nocache_hash'] = '14797342675ab3539e8fcf10_62892369';
?>
<!-- 友情链接 -->
<div class="ftop">
    <div class="box">
        <div class="ft_left">
            <div class="ft_tit">友情链接</div>
            <div class="ft_a">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('friendlink', array('type'=>2)); $_block_repeat=true; echo smarty_block_friendlink(array('type'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (!$_smarty_tpl->tpl_vars['friendlink']->value['flink_img']) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
</a>
                <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
">
                    <img style="display: inline-block; position: relative; top:3px;" width="20" height="20" src="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_img'];?>
" />
                    <?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>

                </a>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_friendlink(array('type'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
    </div>
</div>
<!-- 友情链接 -->
<?php }
}
?>