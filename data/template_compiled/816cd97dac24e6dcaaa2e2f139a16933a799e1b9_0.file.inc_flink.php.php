<?php /* Smarty version 3.1.27, created on 2018-03-22 06:56:12
         compiled from "E:\www\711cms\templates\template_005\inc_flink.php" */ ?>
<?php
/*%%SmartyHeaderCode:12542257005ab3538c363274_06453198%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '816cd97dac24e6dcaaa2e2f139a16933a799e1b9' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_005\\inc_flink.php',
      1 => 1500879328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12542257005ab3538c363274_06453198',
  'variables' => 
  array (
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3538c36af75_67286387',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3538c36af75_67286387')) {
function content_5ab3538c36af75_67286387 ($_smarty_tpl) {
if (!is_callable('smarty_block_friendlink')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.friendlink.php';

$_smarty_tpl->properties['nocache_hash'] = '12542257005ab3538c363274_06453198';
?>
<!--友情链接 start-->
<div class="links_box">
    <div class="links_hd">
        <div class="links_tab">
            <a class="current" id="yqlj">友情链接</a>
        </div>
    </div>
    <div class="links_bd">
        <div class="links_fren" id="yqlj_mod" style="display: block;">
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
                <img width="20" height="20" src="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_img'];?>
" />
                <?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>

            </a>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_friendlink(array('type'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>
</div>
<!--友情链接 end-->
<?php }
}
?>