<?php /* Smarty version 3.1.27, created on 2018-03-20 11:53:47
         compiled from "E:\www\711cms\templates\mobile_101\page_search.php" */ ?>
<?php
/*%%SmartyHeaderCode:303005ab085cb45df85_73341866%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93b454be20163fd5ff98ef7301052edd9eab1188' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\mobile_101\\page_search.php',
      1 => 1497319222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303005ab085cb45df85_73341866',
  'variables' => 
  array (
    'setting' => 0,
    'keyword' => 0,
    'show_num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab085cb4b0011_58283845',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab085cb4b0011_58283845')) {
function content_5ab085cb4b0011_58283845 ($_smarty_tpl) {
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_keyword')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.keyword.php';

$_smarty_tpl->properties['nocache_hash'] = '303005ab085cb45df85_73341866';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="data-spm" content="1"/>
    <meta http-equiv="Cache-Control" content="max-age=3600"/>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<div class="header">
    <h2><font style="max-width:68%" class="overcut">搜索</font></h2>
    <a class="back icon-ic_back1-01" href="javascript:history.back();"></a>
</div>
<div class="searchDiv bgGray">
    <table class="search" border="0" cellspacing="0" cellpadding="0">
        <form id="search-form" action="<?php echo smarty_function_link(array('m'=>'search'),$_smarty_tpl);?>
">
            <tr>
                <td class="input">
                    <input type="text" value="乱斗西游" id="search-input" name="keyword"/>
                    <span class="delTxt icon-ic_dele-01"></span>
                </td>
                <td class="sear-btn">
                    <span class="icon-ic_search-01"></span>
                    <input type="button" value="" id="search-btn"/>
                </td>
            </tr>
        </form>
    </table>
</div>
<div class="quan">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('keyword', array('row'=>6)); $_block_repeat=true; echo smarty_block_keyword(array('row'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <a  href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
" class="q<?php echo $_smarty_tpl->tpl_vars['show_num']->value++;?>
 circle"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>
</a>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array('row'=>6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</body>
</html><?php }
}
?>