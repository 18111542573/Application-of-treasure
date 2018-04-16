<?php /* Smarty version 3.1.27, created on 2018-03-22 06:55:24
         compiled from "E:\www\711cms\templates\template_004\list_soft.php" */ ?>
<?php
/*%%SmartyHeaderCode:5924275895ab3535c8b3990_39364829%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b205af7791c18118397f841aeac2173418d9d4a7' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_004\\list_soft.php',
      1 => 1500885667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5924275895ab3535c8b3990_39364829',
  'variables' => 
  array (
    'cate_id' => 0,
    'row' => 0,
    'setting' => 0,
    'appnav' => 0,
    'recommend' => 0,
    'applist' => 0,
    'list' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab3535c90d728_68161025',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab3535c90d728_68161025')) {
function content_5ab3535c90d728_68161025 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_appnav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_block_list')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.list.php';

$_smarty_tpl->properties['nocache_hash'] = '5924275895ab3535c8b3990_39364829';
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
<div id="doc4">
    <div id="hd">
        <div class="mod-search-hd-bunny">
            <?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
    </div>

<div id="bd">
    <!-- inner-box -->
    <!-- inner-box1 -->
    <div class="grid mt10">
        <div class="col9 co191 first">
            <div class="mod mod-pro js-mod-tab" id="J-cat-recommend">
                <div class="hd clearfix" id="section_3">
                    <ul class="cate-tab js-tabs gx-title">
                        <li class="current">
                            <a class="selected" href="javascript:;">精品推荐</a>
                            <span class="line"></span>
                        </li>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1,'row'=>5)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1,'row'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <a class="selected" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</a>
                            <span class="line"></span>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1,'row'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ul>
                    <a href="<?php echo smarty_function_link(array('m'=>'more_soft'),$_smarty_tpl);?>
" class="more" target="_blank">更多&gt;&gt;</a>
                </div>
                <div class="bd js-views gx-content">
                    <div class="mod-pro-list selected gx-text">
                        <ul class="clearfix">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>58,'row'=>18)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>58,'row'=>18), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank" class="pic">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="pngfix"/>
                                </a>
                                <h4><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                        <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
 </a></h4>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="bt-install"
                                   data-log-type="2" target="_blank">安装</a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>58,'row'=>18), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1,'row'=>5)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1,'row'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <div class="mod-pro-list gx-text">
                        <ul class="clearfix">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id'],'row'=>18)); $_block_repeat=true; echo smarty_block_applist(array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id'],'row'=>18), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank" class="pic">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" class="pngfix"/>
                                </a>
                                <h4><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                        <?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
 </a></h4>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" class="bt-install"
                                   data-log-type="2" target="_blank">安装</a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id'],'row'=>18), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1,'row'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            </div>
        </div>
        <!--end of mlft-->
        <div class="col3 co131 J-rank-wrap J-rank-download" id="section_5">
            <div class="mod mod-rank-list">
                <div class="hd clearfix">
                    <h2>下载排行</h2>
                </div>
                <div class="bd">
                    <ol class="selected">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>60,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>60,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <span
                                class="s<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
 num"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</span>

                            <div class="soft-info">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="pic"
                                   target="_blank"> <img class="png" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
"
                                                         alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"/> </a>

                                <div class="text">
                                    <h4><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" target="_blank">
                                            <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
 </a></h4>
                                </div>
                            </div>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="bt-install" target="_blank">安装</a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>60,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ol>
                </div>
            </div>
        </div>
        <!--end of mrit-->
    </div>
    <!--/ inner-box1 -->
    <!-- inner-box2 -->
    <div class="mod mod-special">
        <div class="hd clearfix" id="section_6">
            <h2><a href="#" target="_blank">精品专题</a></h2>
            <a class="more" href="<?php echo smarty_function_link(array('m'=>'specials'),$_smarty_tpl);?>
" target="_blank">更多&gt;&gt;</a>
        </div>
        <div class="bd">
            <div class="special-list" id="section_7">
                <ul class="clearfix">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'special','row'=>4)); $_block_repeat=true; echo smarty_block_list(array('name'=>'special','row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li class="special-list-li">
                        <div class="topic-info">
                            <a href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']),$_smarty_tpl);?>
" target="_blank">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['area_logo'];?>
" width="207" height="108"
                                     title=" <?php echo $_smarty_tpl->tpl_vars['list']->value['area_title'];?>
" alt=" <?php echo $_smarty_tpl->tpl_vars['list']->value['area_title'];?>
">
                                <span class="name"> <?php echo $_smarty_tpl->tpl_vars['list']->value['area_title'];?>
</span>
                            </a>
                        </div>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'special','row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
    </div>
    <!--/ inner-box2 -->
    <!-- inner-box3 -->

    <div class="grid">
        <div class="col9 co191 first">
            <div class="mod mod-pro mod-new" id="J-cat-recommend">
                <div class="hd clearfix" id="section_3">
                    <h2>时下热门</h2>
                </div>
                <div class="bd js-views gx-content">
                    <div class="mod-pro-list selected gx-text">
                        <ul class="clearfix">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>62,'row'=>21)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>62,'row'=>21), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank" class="pic">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="pngfix"/>
                                </a>
                                <h4><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                        <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
 </a></h4>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="bt-install"
                                   data-log-type="2" target="_blank">安装</a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>62,'row'=>21), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end of mlft-->
        <div class="col3 co131 J-rank-wrap J-rank-download" id="section_5">
            <div class="mod mod-rank-list">
                <div class="hd clearfix">
                    <h2>上升最快</h2>
                </div>
                <div class="bd">
                    <ol class="selected">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>61,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>61,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li>
                            <span
                                class="s<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
 num"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</span>

                            <div class="soft-info">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="pic"
                                   target="_blank"> <img class="png" src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
"
                                                         alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
"/> </a>

                                <div class="text">
                                    <h4><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" target="_blank">
                                            <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
 </a></h4>
                                </div>
                            </div>
                            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" class="bt-install" target="_blank">安装</a>
                        </li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>61,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </ol>
                </div>
            </div>
        </div>
        <!--end of mrit-->
    </div>
    <!--/ inner-box3 -->
    
    <!-- inner-box4 --><!--
    <div class="grid mod-half-pro">
        <div class="col6 first">
            <div class="mod ">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>48)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>48), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="hd clearfix" id="section_104">
                    <h2><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</h2>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>48), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <div class="bd" id="section_105">
                    <div class="mod-pro-list">
                        <ul class="clearfix">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('id'=>48,'row'=>16)); $_block_repeat=true; echo smarty_block_applist(array('id'=>48,'row'=>16), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank" class="pic">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" class="pngfix"/>
                                </a>
                                <h4><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                        <?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
 </a></h4>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" class="bt-install"
                                   data-log-type="2" target="_blank">安装</a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('id'=>48,'row'=>16), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col6 ">
            <div class="mod ">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>49)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>49), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="hd clearfix" id="section_106">
                    <h2><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</h2>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>49), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <div class="bd" id="section_107">
                    <div class="mod-pro-list">
                        <ul class="clearfix">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('id'=>49,'row'=>16)); $_block_repeat=true; echo smarty_block_applist(array('id'=>49,'row'=>16), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li class="">
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank" class="pic">
                                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" class="pngfix"/>
                                </a>
                                <h4><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                                        <?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
 </a></h4>
                                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" class="bt-install"
                                   data-log-type="2" target="_blank">安装</a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('id'=>49,'row'=>16), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
js/bc.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>