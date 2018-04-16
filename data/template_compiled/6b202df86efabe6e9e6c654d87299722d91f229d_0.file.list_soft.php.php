<?php /* Smarty version 3.1.27, created on 2018-03-22 07:03:40
         compiled from "E:\www\711cms\templates\template_006\list_soft.php" */ ?>
<?php
/*%%SmartyHeaderCode:14091640225ab3554c4d4cc9_68493366%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b202df86efabe6e9e6c654d87299722d91f229d' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_006\\list_soft.php',
      1 => 1521702212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14091640225ab3554c4d4cc9_68493366',
  'variables' => 
  array (
    'cate_id' => 0,
    'row' => 0,
    'setting' => 0,
    'recommend' => 0,
    'appnav' => 0,
    'keyword' => 0,
    'order' => 0,
    'page' => 0,
    'order_by' => 0,
    'applist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3554c5328d7_73834884',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3554c5328d7_73834884')) {
function content_5ab3554c5328d7_73834884 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_appnav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_block_keyword')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.keyword.php';
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_function_pagebar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.pagebar.php';

$_smarty_tpl->properties['nocache_hash'] = '14091640225ab3554c4d4cc9_68493366';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php if ($_smarty_tpl->tpl_vars['cate_id']->value) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<title><?php if ($_smarty_tpl->tpl_vars['row']->value['ctitle']) {
echo $_smarty_tpl->tpl_vars['row']->value['ctitle'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];
}?></title>
<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['ckey']) {
echo $_smarty_tpl->tpl_vars['row']->value['ckey'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];
}?>" />
<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['row']->value['cdesc']) {
echo $_smarty_tpl->tpl_vars['row']->value['cdesc'];
} else {
echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];
}?>" />
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>2)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>

<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- 当前位置 推荐位 -->
<div class="box">
    <p class="pos">当前位置：<a href="/">首页</a><b>&gt;</b><a href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
">软件</a><?php if ($_smarty_tpl->tpl_vars['cate_id']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<b>&gt;</b><a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['cate_id']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></p>
</div>
<div class="box">
    <div class="tablist">
        <div class="tab_tit">
            <h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>29)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>29), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>29), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
            <!--
            <ul class="tab_t" id="li_num">        
            </ul>-->
        </div>
        <div class="tab_con">
            <ul class="list_tj" id="li_scroll" style="margin-left: -952px;">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>29,'row'=>12)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>29,'row'=>12), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="pic" target="_blank" ><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" width="72" height="72"></a>
                    <p><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></p>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>29,'row'=>12), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>
</div>
<!-- 当前位置 推荐位 -->

<div class="box">
    <!-- 左侧软件类型、热门标签-->
    <div class="b_sub fl">
        <div class="sub_tit">软件类型</div>
        <div class="sort">
            <a href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['cate_id']->value > 0) {
} else { ?>class="sort_on"<?php }?>>全部</a>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
"  <?php if ($_smarty_tpl->tpl_vars['cate_id']->value == $_smarty_tpl->tpl_vars['appnav']->value['cate_id']) {?>class="sort_on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
        <span class="pic_gap"></span>
        <div class="sub_tit">热门标签</div>
        <div class="hot_label">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('keyword', array()); $_block_repeat=true; echo smarty_block_keyword(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>
</a>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
    
        </div>
        <span class="pic_gap"></span>  
    </div>
    <!-- 左侧软件类型、热门标签-->

    <!-- 右侧软件列表 -->
    <div class="b_main fr">
        <div class="sub_tit">
            <div class="order">
                <a <?php if ($_smarty_tpl->tpl_vars['order']->value == 0) {?> class="order_on" <?php }?> href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
">更新时间<s></s></a>
                <a <?php if ($_smarty_tpl->tpl_vars['order']->value == 1) {?> class="order_on" <?php }?> href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'order'=>1,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
">下载次数<s></s></a>
            </div>
            全部软件
        </div>
        <ul class="app_list" id="app_down">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'order'=>$_smarty_tpl->tpl_vars['order_by']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'per_page'=>18)); $_block_repeat=true; echo smarty_block_applist(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'order'=>$_smarty_tpl->tpl_vars['order_by']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'per_page'=>18), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" class="pic" target="_blank">
                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" width="72" height="72" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
">
                </a>
                <div class="app_name">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</a>
                </div>
                <p><?php echo $_smarty_tpl->tpl_vars['applist']->value['cname'];?>
 / <?php echo round($_smarty_tpl->tpl_vars['applist']->value['history_size']/1024/1024,2);?>
MB</p>
                <p><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
人在用</p>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'order'=>$_smarty_tpl->tpl_vars['order_by']->value,'parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'per_page'=>18), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                  
        </ul>
        <?php echo smarty_function_pagebar(array('name'=>'applist','parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'order'=>$_smarty_tpl->tpl_vars['order']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'row'=>18,'per_page'=>18),$_smarty_tpl);?>

    </div>
    <!-- 右侧软件列表 -->
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