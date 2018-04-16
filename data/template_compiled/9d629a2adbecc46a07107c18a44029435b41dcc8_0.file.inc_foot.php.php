<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:41
         compiled from "E:\www\711cms\templates\template_006\inc_foot.php" */ ?>
<?php
/*%%SmartyHeaderCode:94115ab08421ae4823_63189573%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d629a2adbecc46a07107c18a44029435b41dcc8' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_006\\inc_foot.php',
      1 => 1500951331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94115ab08421ae4823_63189573',
  'variables' => 
  array (
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab08421af03b9_22446503',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab08421af03b9_22446503')) {
function content_5ab08421af03b9_22446503 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.footer.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_countcode')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countcode.php';

$_smarty_tpl->properties['nocache_hash'] = '94115ab08421ae4823_63189573';
?>
<div class="footer">
    <div class="box">
      <div class="f_right"><?php echo smarty_function_footer(array(),$_smarty_tpl);?>
<a href="<?php echo smarty_function_link(array('m'=>'site_map'),$_smarty_tpl);?>
" style="color:#5CC76C; margin-left:10px;">网站地图</a></div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/hm.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery-1.7.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/lq.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/lightbox.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/jquery.boxy.js"><?php echo '</script'; ?>
>

<div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div>
<div id="hm_t_undefined" class="hm-t-container"><div class="hm-t-go-top" style="display: none;"></div></div>
<?php echo smarty_function_countcode(array(),$_smarty_tpl);?>

<?php }
}
?>