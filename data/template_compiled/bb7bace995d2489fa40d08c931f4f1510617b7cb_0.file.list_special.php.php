<?php /* Smarty version 3.1.27, created on 2018-03-22 06:58:14
         compiled from "E:\www\711cms\templates\template_006\list_special.php" */ ?>
<?php
/*%%SmartyHeaderCode:7266931375ab35406436043_89393380%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb7bace995d2489fa40d08c931f4f1510617b7cb' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_006\\list_special.php',
      1 => 1500951331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7266931375ab35406436043_89393380',
  'variables' => 
  array (
    'row' => 0,
    'setting' => 0,
    'list' => 0,
    'special' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab354064c68e6_61984818',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab354064c68e6_61984818')) {
function content_5ab354064c68e6_61984818 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_list')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_special')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.special.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';

$_smarty_tpl->properties['nocache_hash'] = '7266931375ab35406436043_89393380';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>6)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>6), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seotitle']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>

        <?php }?></title>
    <meta name="keywords"
          content="<?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seokey']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];
}?>"/>
    <meta name="description"
          content="<?php if ($_smarty_tpl->tpl_vars['row']->value['navicat_seodesc']) {
echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];
}?>"/>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>6), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- 当前位置 -->
<div class="box">
    <p class="pos">当前位置：<a href="/">首页</a><b>&gt;</b><a href="<?php echo smarty_function_link(array('m'=>'specials'),$_smarty_tpl);?>
">专题</a></p>
</div>
<!-- 当前位置 -->

<div class="box" style="min-height:690px">
    <div class="box_bg">
        <div class="sub_tit">
            精品专题
        </div>
        <div class="topic_list">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'special')); $_block_repeat=true; echo smarty_block_list(array('name'=>'special'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="tli_box"
                 style="border-top-width: 1px; border-top-style: solid; border-top-color: rgb(241, 241, 241); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(241, 241, 241); background-color: rgb(248, 248, 248); background-position: initial initial; background-repeat: initial initial;">

                <div class="tli_img">
                    <a href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']),$_smarty_tpl);?>
" target="_blank"><img
                            src="<?php echo $_smarty_tpl->tpl_vars['list']->value['area_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['area_title'];?>
" width="240" height="89"></a>

                    <div class="tli_bg"></div>
                    <div class="tli_word"><em><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value['special_time'],"%m-%d");?>
</em><a
                            href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']),$_smarty_tpl);?>
">
                            <?php echo $_smarty_tpl->tpl_vars['list']->value['area_title'];?>
</a></div>
                </div>
                <div class="tli_apps">
                    <ul class="tli_slide" style="width: 900px;">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('special', array('id'=>$_smarty_tpl->tpl_vars['list']->value['area_id'])); $_block_repeat=true; echo smarty_block_special(array('id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['special']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
"
                                     style="opacity: 1;" width="72" height="72">
                            </a>

                            <p><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['special']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                    <?php echo $_smarty_tpl->tpl_vars['special']->value['app_title'];?>
</a></p>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_special(array('id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                </div>
                <div class="tli_prev"></div>
                <div class="tli_nexton"></div>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'special'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html><?php }
}
?>