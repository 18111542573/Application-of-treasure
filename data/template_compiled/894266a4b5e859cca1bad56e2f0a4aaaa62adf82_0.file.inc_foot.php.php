<?php /* Smarty version 3.1.27, created on 2018-03-20 11:03:20
         compiled from "E:\www\711cms\templates\template_001\inc_foot.php" */ ?>
<?php
/*%%SmartyHeaderCode:289855ab079f8050203_83236631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '894266a4b5e859cca1bad56e2f0a4aaaa62adf82' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_001\\inc_foot.php',
      1 => 1497861920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289855ab079f8050203_83236631',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab079f8057f09_52166691',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab079f8057f09_52166691')) {
function content_5ab079f8057f09_52166691 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.footer.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_countcode')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countcode.php';

$_smarty_tpl->properties['nocache_hash'] = '289855ab079f8050203_83236631';
?>
<div class="footer">
    <div class="copyright">
        <?php echo smarty_function_footer(array(),$_smarty_tpl);?>

        <a href="<?php echo smarty_function_link(array('m'=>'map'),$_smarty_tpl);?>
" class="ly-amap">网站地图</a>
    </div>
</div>
<?php echo smarty_function_countcode(array(),$_smarty_tpl);

}
}
?>