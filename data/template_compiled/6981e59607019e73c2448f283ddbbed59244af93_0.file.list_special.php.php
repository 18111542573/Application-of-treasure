<?php /* Smarty version 3.1.27, created on 2018-03-20 11:49:02
         compiled from "E:\www\711cms\templates\template_003\list_special.php" */ ?>
<?php
/*%%SmartyHeaderCode:269395ab084ae7d3902_70676274%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6981e59607019e73c2448f283ddbbed59244af93' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\list_special.php',
      1 => 1500953873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269395ab084ae7d3902_70676274',
  'variables' => 
  array (
    'row' => 0,
    'setting' => 0,
    'list' => 0,
    'special' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab084ae850916_33224715',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab084ae850916_33224715')) {
function content_5ab084ae850916_33224715 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_list')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_special')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.special.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';

$_smarty_tpl->properties['nocache_hash'] = '269395ab084ae7d3902_70676274';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>6)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seotitle']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];
}?></title>
    <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seokey']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];
}?>" />
    <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seodesc']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];
}?>" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="model detail-item">
    <ul class="topic-item">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'special')); $_block_repeat=true; echo smarty_block_list(array('name'=>'special'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li class="topic-item-li">
            <div class="special-info">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'special','id'=>$_smarty_tpl->tpl_vars['list']->value['area_id'])); $_block_repeat=true; echo smarty_block_row(array('name'=>'special','id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a class="special-icon" href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['row']->value['area_id']),$_smarty_tpl);?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['area_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['area_title'];?>
">
                </a>

                <div class="special-meta"><span><?php echo $_smarty_tpl->tpl_vars['row']->value['ids_num'];?>
 款应用</span> <a class="see-btn"
                                                                                    href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['row']->value['area_id']),$_smarty_tpl);?>
">查看</a>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'special','id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <ul class="home-recommend app-panel app-qr-ani">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('special', array('id'=>$_smarty_tpl->tpl_vars['list']->value['area_id'],'row'=>4)); $_block_repeat=true; echo smarty_block_special(array('id'=>$_smarty_tpl->tpl_vars['list']->value['area_id'],'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="app-panel-icon">
                            <a class="app-qr-ani-link" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
"
                               target="_blank">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['special']->value['app_logo']),$_smarty_tpl);?>
" class="img-radius"
                                     title="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
">
                            </a>
                        </div>
                        <p class="nowrap f14 lh240"><?php echo mb_substr($_smarty_tpl->tpl_vars['special']->value['app_title'],0,7,'utf-8');?>
</p>

                        <p class="ml15 mr15">
                            <a class="btn btn-style2 btn-sm btn-block "
                               href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
"
                               title="下载《<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
》">免费下载</a>
                        </p>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_special(array('id'=>$_smarty_tpl->tpl_vars['list']->value['area_id'],'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'special'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </li>
    </ul>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


</body>
</html>
<?php }
}
?>