<?php /* Smarty version 3.1.27, created on 2018-03-22 06:55:58
         compiled from "E:\www\711cms\templates\template_005\inc_foot.php" */ ?>
<?php
/*%%SmartyHeaderCode:10301283525ab3537e874e13_41927013%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aa6b1fb8578062b3dccc4b9657deb7732b6ddac' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_005\\inc_foot.php',
      1 => 1500879328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10301283525ab3537e874e13_41927013',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3537e878c94_94277901',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3537e878c94_94277901')) {
function content_5ab3537e878c94_94277901 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.footer.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_countcode')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countcode.php';

$_smarty_tpl->properties['nocache_hash'] = '10301283525ab3537e874e13_41927013';
?>
<div class="footer">
    <div class="web_about">
        <p class="copyright">
            <?php echo smarty_function_footer(array(),$_smarty_tpl);?>
 <a href="<?php echo smarty_function_link(array('m'=>'site_map'),$_smarty_tpl);?>
" class="ly-amap">网站地图</a>
        </p>
    </div>
</div>
<?php echo smarty_function_countcode(array(),$_smarty_tpl);?>

<?php }
}
?>