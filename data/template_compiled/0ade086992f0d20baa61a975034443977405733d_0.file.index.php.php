<?php /* Smarty version 3.1.27, created on 2018-03-20 11:46:17
         compiled from "E:\www\711cms\templates\template_003\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:151135ab0840998b494_17104936%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ade086992f0d20baa61a975034443977405733d' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\index.php',
      1 => 1500953873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151135ab0840998b494_17104936',
  'variables' => 
  array (
    'setting' => 0,
    'ad' => 0,
    'recommend' => 0,
    'list' => 0,
    'infonav' => 0,
    'infolist' => 0,
    'navicat' => 0,
    'seolist' => 0,
    'tpl_path' => 0,
    'openlist' => 0,
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab08409aeec64_26899220',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab08409aeec64_26899220')) {
function content_5ab08409aeec64_26899220 ($_smarty_tpl) {
if (!is_callable('smarty_block_ad')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.ad.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_block_list')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_block_infonav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.infonav.php';
if (!is_callable('smarty_block_infolist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_block_navicat')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_block_seolist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.seolist.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_openlist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.openlist.php';
if (!is_callable('smarty_block_friendlink')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.friendlink.php';

$_smarty_tpl->properties['nocache_hash'] = '151135ab0840998b494_17104936';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
"/>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
"/>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="home">
    <!-- home-slider start -->
    <div class="home-slider-wrap">
        <div class="home-slider">
            <div class="home-slider-con" id="homeSliderCon">
                <div class="banner-l">
                    <div class="slide_container">
                        <ul class="rslides" id="slider">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>30)); $_block_repeat=true; echo smarty_block_ad(array('id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ad']->value['alt'];?>
"></a>
                            </li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="home-rank-fengyun"><!--recommend 推荐-->
                <h3 class="home-rank-fengyun-title">今日推荐</h3>
                <ul class="home-rank-fengyun-list" id="homeRankFengyun">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>40,'row'=>8)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>40,'row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li
                    <?php if ($_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'] == 1) {?> class="current"<?php }?>>
                    <i><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
</i>

                    <div class="home-rank-fengyun-icon">
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" width="68" height="68"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">
                        </a>
                    </div>
                    <h4><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</h4>

                    <p> <?php if ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 1) {?>
                        <?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 2) {?>
                        <?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>

                        <?php }?>|<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_down'];?>
</p>
                    <a class="btn btn-style1 btn-sm home-rank-fengyun-list-load" target="_blank"
                       href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
">免费下载</a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>40,'row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
    </div>
    <!-- home-slider end -->

    <!-- model start -->
    <div class="model clear">

        <!-- home-recommend start -->
        <div class="submodel-left">
            <div class="model-title">
                <h3>精品推荐</h3>
                <a class="model-title-more" href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>41),$_smarty_tpl);?>
" target="_blank">更多</a>
            </div>
            <ul class="home-recommend app-panel app-qr-ani">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>41,'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>41,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="app-panel-icon">
                        <a class="app-qr-ani-link" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                           target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="img-radius"
                                 title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">
                        </a>
                    </div>
                    <p class="nowrap f14 lh240"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>

                    <p class="ml15 mr15">
                        <a class="btn btn-style2 btn-sm btn-block "
                           href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"
                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">免费下载</a>
                    </p>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>41,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <!-- home-recommend end -->

        <!-- home-list start -->
        <div class="submodel-right">
            <div class="model-title">
                <h3>热门排行</h3>
                <a class="model-title-more" href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>42),$_smarty_tpl);?>
" target="_blank">更多</a>
            </div>
            <ul class="home-recommend app-panel app-qr-ani">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>42,'row'=>9)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>42,'row'=>9), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="app-panel-icon">
                        <a class="app-qr-ani-link" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                           target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="img-radius"
                                 title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">
                        </a>
                    </div>
                    <p class="nowrap f14 lh240"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>

                    <p class="ml15 mr15">
                        <a class="btn btn-style2 btn-sm btn-block " target="_blank"
                           href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">免费下载</a>
                    </p>
                </li>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>42,'row'=>9), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            </ul>

        </div>
    </div>
    <!-- home-list end -->
</div>
<!-- model end -->

<!-- model start -->
<div class="model clear">

    <div class="submodel-left">

        <div class="model-title">
            <h3>专题</h3>
            <a class="model-title-more" href="<?php echo smarty_function_link(array('m'=>'specials'),$_smarty_tpl);?>
" target="_blank">更多</a>
        </div>

        <div class="home-video">
            <div class="home-video-poster">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'special','row'=>3)); $_block_repeat=true; echo smarty_block_list(array('name'=>'special','row'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']),$_smarty_tpl);?>
" target='_blank'
                   class="home-video-poster<?php echo $_smarty_tpl->tpl_vars['list']->value['special_sort_show'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['list']->value['area_title'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['list']->value['area_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['list']->value['area_title'];?>
">
                </a>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'special','row'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <ul class="home-video-list">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'special','row'=>9,'start'=>4)); $_block_repeat=true; echo smarty_block_list(array('name'=>'special','row'=>9,'start'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a href="<?php echo smarty_function_link(array('m'=>'special','special_id'=>$_smarty_tpl->tpl_vars['list']->value['area_id']),$_smarty_tpl);?>
"
                       title="<?php echo $_smarty_tpl->tpl_vars['list']->value['area_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['list']->value['area_title'];?>
</a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'special','row'=>9,'start'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>

    <div class="submodel-right">

        <div class="model-title">
            <h3 id="homeArticleNav">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('infonav', array('cate_id'=>2)); $_block_repeat=true; echo smarty_block_infonav(array('cate_id'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<span class="current"><?php echo $_smarty_tpl->tpl_vars['infonav']->value['cname'];?>
</span><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infonav(array('cate_id'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('infonav', array('cate_id'=>3)); $_block_repeat=true; echo smarty_block_infonav(array('cate_id'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 <span><?php echo $_smarty_tpl->tpl_vars['infonav']->value['cname'];?>
</span><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infonav(array('cate_id'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('infonav', array('cate_id'=>4)); $_block_repeat=true; echo smarty_block_infonav(array('cate_id'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<span><?php echo $_smarty_tpl->tpl_vars['infonav']->value['cname'];?>
</span><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infonav(array('cate_id'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </h3>

            <div class="model-title-more-wrap" id="homeArticleNavMore">
                <a class="model-title-more current" href="<?php echo smarty_function_link(array('m'=>'infos','last_cate_id'=>2),$_smarty_tpl);?>
"
                   target="_blank">更多</a>
                <a class="model-title-more" href="<?php echo smarty_function_link(array('m'=>'infos','last_cate_id'=>3),$_smarty_tpl);?>
" target="_blank">更多</a>
                <a class="model-title-more" href="<?php echo smarty_function_link(array('m'=>'infos','last_cate_id'=>4),$_smarty_tpl);?>
" target="_blank">更多</a>
            </div>
        </div>

        <div class="home-article f14" id="homeArticleList">
            <!-- 新闻类文章 -->
            <ul class="home-article-con current" id="homeArticle1">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>2,'row'=>4)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>2,'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li class="current">
                    <a class="home-article-link" href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
"
                       title="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
" target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
">
                        <span><?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</span>
                    </a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>2,'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <!--策略类文章-->
            <ul class="home-article-con" id="homeArticle2">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>3,'row'=>4)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>3,'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li class="current">
                    <a class="home-article-link" href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
"
                       title="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
" target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
">
                        <span><?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</span>
                    </a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>3,'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <!--活动类文章-->
            <ul class="home-article-con" id="homeArticle3">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>4,'row'=>4)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>4,'row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li class="current">
                    <a class="home-article-link" href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
"
                       title="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
" target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
">
                        <span><?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</span>
                    </a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>4,'row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>

        </div>

    </div>
</div>

<!-- model start -->
<div class="model clear">

    <!-- home-recommend start -->
    <div class="submodel-left">
        <div class="model-title">
            <h3>最受欢迎</h3>
            <a class="model-title-more" href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>30),$_smarty_tpl);?>
" target="_blank">更多</a>
        </div>

        <ul class="home-recommend app-panel app-qr-ani">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>30,'row'=>15)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>30,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <div class="app-panel-icon">
                    <a class="app-qr-ani-link" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                       target="_blank">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="img-radius"
                             title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">
                    </a>
                </div>
                <p class="nowrap f14 lh240"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>

                <p class="ml15 mr15">
                    <a class="btn btn-style2 btn-sm btn-block " target="_blank"
                       href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                       title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">免费下载</a>
                </p>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>30,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>
    <!-- home-recommend end -->

    <!-- home-gift start -->
    <div class="submodel-right">
        <div class="model-title">
            <h3>下载排行</h3>
            <a class="model-title-more" href="<?php echo smarty_function_link(array('m'=>'recommends','id'=>44),$_smarty_tpl);?>
" target="_blank">更多</a>
        </div>
        <ul class="home-recommend app-panel app-qr-ani">

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>44,'row'=>9)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>44,'row'=>9), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <div class="app-panel-icon">
                    <a class="app-qr-ani-link" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                       target="_blank">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="img-radius"
                             title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">
                    </a>
                </div>
                <p class="nowrap f14 lh240"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>

                <p class="ml15 mr15">
                    <a class="btn btn-style2 btn-sm btn-block " target="_blank"
                       href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                       title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">免费下载</a>
                </p>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>44,'row'=>9), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>

    </div>
</div>
<!--游戏开服-->
<?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if (($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_service' && $_smarty_tpl->tpl_vars['navicat']->value['navicat_enabled'] == '1')) {?>
<div class="kf-box w1000">
    <div class="fl w500">
        <div class="model-title">
            <h3>游戏开服</h3>
        </div>
        <div class="table-box">
            <table class="lk-table">
                <tbody>
                <tr>
                    <td width=150>手机网游</td>
                    <td width=80>开服时间</td>
                    <td width=200>服务区名</td>
                    <td width=80>领取礼包</td>
                    <td width=80>游戏下载</td>
                </tr>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('seolist', array('row'=>8)); $_block_repeat=true; echo smarty_block_seolist(array('row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['seolist']->value['o_status'] == 2) {?>
                <tr>
                    <td width=150><?php echo $_smarty_tpl->tpl_vars['seolist']->value['o_apptitle'];?>
</td>
                    <td width=80>
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['seolist']->value['o_start_time'],"m-d");?>
<br/>
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['seolist']->value['o_start_time'],"H:i");?>

                    </td>
                    <td width=200><?php echo $_smarty_tpl->tpl_vars['seolist']->value['o_region'];?>
</td>
                    <td width=80>
                        <a href="<?php echo smarty_function_link(array('m'=>'open_service','app_id'=>$_smarty_tpl->tpl_vars['seolist']->value['o_app_id'],'open_name'=>$_smarty_tpl->tpl_vars['seolist']->value['o_region']),$_smarty_tpl);?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/li_bao.jpg">
                        </a>
                    </td>
                    <td width=80><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['seolist']->value['o_app_id']),$_smarty_tpl);?>
" class="kf-btn">下载</a></td>
                </tr>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_seolist(array('row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="fr w500">
        <div class="model-title">
            <h3>礼包开服</h3>
        </div>
        <div class="table-box">
            <table class="lk-table">
                <tbody>
                <tr>
                    <td width=180>手机网游</td>
                    <td width=100>有效时间</td>
                    <td width=80>领取礼包</td>
                    <td width=80>游戏下载</td>
                </tr>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('openlist', array('row'=>8)); $_block_repeat=true; echo smarty_block_openlist(array('row'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['openlist']->value['o_end_time']-time() > 0 && $_smarty_tpl->tpl_vars['openlist']->value['o_status'] == 2 && $_smarty_tpl->tpl_vars['openlist']->value['open_name'] == $_smarty_tpl->tpl_vars['openlist']->value['o_region']) {?>
                <tr>
                    <td width=180><?php echo $_smarty_tpl->tpl_vars['openlist']->value['o_apptitle'];?>
<br/>【<?php echo $_smarty_tpl->tpl_vars['openlist']->value['pname'];?>
】</td>
                    <td width=100>
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_start_time'],"m-d");?>

                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_start_time'],"H:i");?>
<br/>
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_end_time'],"m-d");?>

                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_end_time'],"H:i");?>

                    </td>
                    <td width=80>
                        <a href="<?php echo smarty_function_link(array('m'=>'open_packs','app_id'=>$_smarty_tpl->tpl_vars['openlist']->value['p_app_id'],'open_name'=>$_smarty_tpl->tpl_vars['openlist']->value['open_name'],'p_id'=>$_smarty_tpl->tpl_vars['openlist']->value['p_id']),$_smarty_tpl);?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/li_bao.jpg">
                        </a>
                    </td>
                    <td width=80><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['openlist']->value['p_app_id']),$_smarty_tpl);?>
" class="kf-btn">下载</a></td>
                </tr>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_openlist(array('row'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </tbody>
            </table>
        </div>
    </div>
    <div><span class="clear clearfix"></span></div>
</div>
<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_navicat(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<!--游戏开服结束-->
<!-- model start -->
<div class="model clear">

    <div class="submodel">
        <div class="model-title">
            <h3>装机必备</h3>
            <a class="model-title-more" href="<?php echo smarty_function_link(array('m'=>'necessaries'),$_smarty_tpl);?>
" target="_blank">更多</a>
        </div>

        <div class="model-con home-sort clear">
            <ul class="app-qr-ani">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>31,'row'=>18)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>31,'row'=>18), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="home-sort-icon">
                        <a class="app-qr-ani-link" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                           title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
" target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['recommend']->value['app_logo']),$_smarty_tpl);?>
" class="img-radius"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">
                        </a>
                    </div>
                    <p><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</p>
                    <a class="home-sort-down bg-blue" href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                       title="下载《<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
》" target="_blank">下载</a>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>31,'row'=>18), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
    </div>
</div>
<!-- model end -->

<!-- model start -->
<!-- f-link -->
<div class="home-friend-wrap f14 clear">
    <div class="model">
        <span>友情链接:</span>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('friendlink', array('type'=>1)); $_block_repeat=true; echo smarty_block_friendlink(array('type'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php if (!$_smarty_tpl->tpl_vars['friendlink']->value['flink_img']) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
">&nbsp;
            <?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
&nbsp;</a>
        <?php } else { ?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
">
            &nbsp; <img style="display: inline-block; position: relative; top:3px;" width="20" height="20" src="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_img'];?>
"/>
            <?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
&nbsp;
        </a>
        <?php }?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_friendlink(array('type'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
</div>
<!-- f-link -->
<!-- model end -->

<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo '<script'; ?>
 type="text/javascript">


    // 风云榜
    ou.switchList('#homeRankFengyun li', function () {
    });
    // 文章切换
    ou.tab('#homeArticleNav span', '#homeArticleList ul', {},

        function (self, data) {

            var btnMore = '#homeArticleNavMore > a',
                index = $(self).index();

            for (var j = 0; j < $(btnMore).length; j++) {

                if (index !== j) {
                    $(btnMore).eq(j).removeClass(data.activeClass);
                } else {
                    $(btnMore).eq(j).addClass(data.activeClass);
                }

            }
        });

    // 新闻切换
    ou.switchList('#homeArticle1 li');

    // 攻略切换
    ou.switchList('#homeArticle2 li');

    // 活动切换
    ou.switchList('#homeArticle3 li');

    // 公告切换
    ou.switchList('#homeArticle4 li');

    // 测评切换
    ou.switchList('#homeArticle5 li');

    // 关闭PC新版更新海报弹窗
    ou.closeDiv('#btnDialogPc', '#dialogPc');

    // 偶玩客户端弹窗
    ou.dialogWindow({
        dialogId: '#dialogClient',
        btnOpenId: '#btnDialogClientOpen',
        btnCloseId: '#btnDialogClientClose'
    });
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
?>