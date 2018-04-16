<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:17
         compiled from "E:\www\711cms\templates\template_003\inc_foot.php" */ ?>
<?php
/*%%SmartyHeaderCode:324535ab08409c8cdc4_50947176%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81dba6b28386aad482cf81f1f596a2408bfc9b4f' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\inc_foot.php',
      1 => 1500953873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324535ab08409c8cdc4_50947176',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab08409c94ac3_16714300',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab08409c94ac3_16714300')) {
function content_5ab08409c94ac3_16714300 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.footer.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_countcode')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countcode.php';

$_smarty_tpl->properties['nocache_hash'] = '324535ab08409c8cdc4_50947176';
?>
<div class="footer-wrap">
    <div class="model footer f14 tl clear">
        <div class="footer-left">
            <p><?php echo smarty_function_footer(array(),$_smarty_tpl);?>
<a href="<?php echo smarty_function_link(array('m'=>'site_map'),$_smarty_tpl);?>
" class="ly-amap">网站地图</a></p>

        </div>
    </div>
</div>
<?php echo smarty_function_countcode(array(),$_smarty_tpl);

}
}
?>