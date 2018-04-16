<?php /* Smarty version 3.1.27, created on 2018-03-20 11:47:11
         compiled from "E:\www\711cms\templates\template_003\list_game.php" */ ?>
<?php
/*%%SmartyHeaderCode:189755ab0843f9aae20_95226378%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7150a5005c185be4df8e2923b72abbcecced1ecc' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\list_game.php',
      1 => 1500953873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189755ab0843f9aae20_95226378',
  'variables' => 
  array (
    'cate_id' => 0,
    'row' => 0,
    'setting' => 0,
    'recommend' => 0,
    'appnav' => 0,
    'page' => 0,
    'applist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab0843fa66643_24383855',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab0843fa66643_24383855')) {
function content_5ab0843fa66643_24383855 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_appnav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_pagebar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.pagebar.php';

$_smarty_tpl->properties['nocache_hash'] = '189755ab0843f9aae20_95226378';
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
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>3)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="model">

    <div class="model-title">
        <h3>精品推荐</h3>
    </div>
    <div class="game-s">
        <ul class="game-tab-subnav" id="gameTabSubNav1">
            <li class="current">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>41,'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>41,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="game-tab-app">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="img-radius" alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"
                             title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">
                    </a>

                    <p><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                          title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"><?php echo mb_substr($_smarty_tpl->tpl_vars['recommend']->value['app_title'],0,8,'utf-8');?>
</a></p>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>41,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </li>

        </ul>
        <div class="model-title">
            <h3>游戏分类</h3>
            <a class="model-title-more hide" href="#" target="_blank">更多</a>
        </div>
        <div class="game-list-page">
            <!-- sub-nav -->
            <div class="sub-nav">
                <p>
                    <span>游戏类型：</span>
                    <a <?php if ($_smarty_tpl->tpl_vars['cate_id']->value > 0) {
} else { ?>class="on"<?php }?> href="<?php echo smarty_function_link(array('m'=>'games'),$_smarty_tpl);?>
">不限</a>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>2)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


                    <a <?php if ($_smarty_tpl->tpl_vars['cate_id']->value == $_smarty_tpl->tpl_vars['appnav']->value['cate_id']) {?>class="on"<?php }?> href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>

                    </a>

                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </p>

            </div>

        </div>
        <div class="model-title">
            <h3>综合</h3>
        </div>
        <div class="game-tab-sublist clear" id="gameTabSubList1">

            <ul class="game-tab-subcon current ">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('parent'=>2,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>16)); $_block_repeat=true; echo smarty_block_applist(array('parent'=>2,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>16), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="clear">
                        <div class="game-tab-subcon-icon">
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" class="img-radius"
                                     alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
">
                            </a>
                        </div>
                        <div class="game-tab-subcon-detail clear">
                            <h4 class="f18 font-bold"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</h4>

                            <p><span class="font-gray">游戏大小：</span><span class="font-orange"><?php echo round($_smarty_tpl->tpl_vars['applist']->value['history_size']/1024/1024,2);?>
MB</span>
                            </p>

                            <p><span class="font-gray">游戏类型：</span><?php echo $_smarty_tpl->tpl_vars['applist']->value['cname'];?>
</p>
                            <a class="btn btn-xl btn-style4" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"
                               title="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" target="_blank">游戏下载</a>

                        </div>
                    </div>

                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('parent'=>2,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>16), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>

            <?php echo smarty_function_pagebar(array('name'=>'applist','id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'parent'=>2,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>16),$_smarty_tpl);?>

        </div>
    </div>


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