<?php /* Smarty version 3.1.27, created on 2018-03-22 06:58:19
         compiled from "E:\www\711cms\templates\template_006\content_info.php" */ ?>
<?php
/*%%SmartyHeaderCode:12569723895ab3540b8abd28_96709965%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed7a1605497ea1ac04a3fdeb4e4c28e0391d138f' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_006\\content_info.php',
      1 => 1500951331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12569723895ab3540b8abd28_96709965',
  'variables' => 
  array (
    'info' => 0,
    'setting' => 0,
    'row' => 0,
    'recommend' => 0,
    'last_cate_id' => 0,
    'infolist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3540b8ee3b4_34114498',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3540b8ee3b4_34114498')) {
function content_5ab3540b8ee3b4_34114498 ($_smarty_tpl) {
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_block_infolist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.infolist.php';

$_smarty_tpl->properties['nocache_hash'] = '12569723895ab3540b8abd28_96709965';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php if ($_smarty_tpl->tpl_vars['info']->value['info_title']) {?>
<title><?php echo $_smarty_tpl->tpl_vars['info']->value['info_title'];?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['info']->value['info_seokey'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['info']->value['info_seodesc'];?>
" />
<?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
" />
<?php }?>
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
    <p class="pos">当前位置：<a href="/">首页</a><b>&gt;</b><a href="<?php echo smarty_function_link(array('m'=>'infos'),$_smarty_tpl);?>
">资讯</a><b>&gt;</b><?php echo $_smarty_tpl->tpl_vars['info']->value['info_title'];?>
</p>
</div>
<!-- 当前位置 -->
 
<div class="box">
	<div class="as_main fl">   
		<div class="wz_box">
			<h1><?php echo $_smarty_tpl->tpl_vars['info']->value['info_title'];?>
</h1>
			<div class="wz_inf"><b>浏览：<?php echo $_smarty_tpl->tpl_vars['info']->value['info_visitors'];?>
</b><b><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['info_update_time'],"%Y-%m-%d");?>
</b></div>
            <div class="wz_con">
                <div>
                    <?php echo $_smarty_tpl->tpl_vars['info']->value['info_body'];?>

	            </div>
			</div>
		</div>	
	</div>
	<div class="as_sub fr">
		<div class="tj_app">
            <div class="sub_tit"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>29)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>29), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>29), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
            <ul>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>29,'row'=>3)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>29,'row'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a target="_blank" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
"  width="50" height="50"></a>
                    <div class="app_name"><a target="_blank" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></div>
                    <p><a target="_blank" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="btn_new">下载</a><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
+人在玩</p>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>29,'row'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                         
            </ul>
        </div>
		<span class="pic_gap"></span>
		<div class="tj_app">
			<div class="sub_tit">相关资讯</div>
			<ul class="list_rank">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'row'=>10)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><?php if ($_smarty_tpl->tpl_vars['infolist']->value['info_url']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_url'];?>
" target="_blank"><?php } else { ?>
                    <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" target="_blank"><?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
         				
		    </ul>
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