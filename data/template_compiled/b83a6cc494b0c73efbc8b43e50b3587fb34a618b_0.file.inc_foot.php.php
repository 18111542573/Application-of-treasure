<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:07
         compiled from "E:\www\711cms\templates\template_002\inc_foot.php" */ ?>
<?php
/*%%SmartyHeaderCode:133285ab083ff670092_28977631%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b83a6cc494b0c73efbc8b43e50b3587fb34a618b' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_002\\inc_foot.php',
      1 => 1497319222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133285ab083ff670092_28977631',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab083ff677d93_57291938',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab083ff677d93_57291938')) {
function content_5ab083ff677d93_57291938 ($_smarty_tpl) {
if (!is_callable('smarty_function_footer')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.footer.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_countcode')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countcode.php';

$_smarty_tpl->properties['nocache_hash'] = '133285ab083ff670092_28977631';
?>
<div id="footer">
    <div class="f_content">
        <div class="f_nav">
            <p class="f_copyright">
                <?php echo smarty_function_footer(array(),$_smarty_tpl);?>

                <a href="<?php echo smarty_function_link(array('m'=>'site_map'),$_smarty_tpl);?>
" class="ly-amap">网站地图</a>
            </p>
        </div>
    </div>
</div>
<?php echo smarty_function_countcode(array(),$_smarty_tpl);?>


</body>
</html>
<?php }
}
?>