<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:30
         compiled from "E:\www\711cms\templates\template_004\inc_foot.php" */ ?>
<?php
/*%%SmartyHeaderCode:132865ab08416eca1c8_86178095%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7435fe3f8c4e2c330ca691a26dfc248dc1faa80b' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_004\\inc_foot.php',
      1 => 1500885667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132865ab08416eca1c8_86178095',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab08416ed1ec7_12365151',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab08416ed1ec7_12365151')) {
function content_5ab08416ed1ec7_12365151 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.footer.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_countcode')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countcode.php';

$_smarty_tpl->properties['nocache_hash'] = '132865ab08416eca1c8_86178095';
?>
<div id="ft">
    <em><?php echo smarty_function_footer(array(),$_smarty_tpl);?>
<a href="<?php echo smarty_function_link(array('m'=>'site_map'),$_smarty_tpl);?>
" class="ly-amap">网站地图</a></em>
</div>
<?php echo smarty_function_countcode(array(),$_smarty_tpl);?>

<?php }
}
?>