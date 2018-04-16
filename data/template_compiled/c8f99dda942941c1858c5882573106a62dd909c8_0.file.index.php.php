<?php /* Smarty version 3.1.27, created on 2018-03-22 07:02:32
         compiled from "E:\www\711cms\templates\template_006\index.php" */ ?>
<?php
/*%%SmartyHeaderCode:17418705095ab35508da3443_16954521%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8f99dda942941c1858c5882573106a62dd909c8' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_006\\index.php',
      1 => 1521702152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17418705095ab35508da3443_16954521',
  'variables' => 
  array (
    'setting' => 0,
    'ad' => 0,
    'infonav' => 0,
    'infolist' => 0,
    'appnav' => 0,
    'row' => 0,
    'recommend' => 0,
    'applist' => 0,
    'tpl_path' => 0,
    'navicat' => 0,
    'seolist' => 0,
    'openlist' => 0,
    'friendlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab35508e28160_47056384',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab35508e28160_47056384')) {
function content_5ab35508e28160_47056384 ($_smarty_tpl) {
if (!is_callable('smarty_block_ad')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.ad.php';
if (!is_callable('smarty_block_infonav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.infonav.php';
if (!is_callable('smarty_block_infolist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_appnav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_block_navicat')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.navicat.php';
if (!is_callable('smarty_block_seolist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.seolist.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_openlist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.openlist.php';
if (!is_callable('smarty_block_friendlink')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.friendlink.php';

$_smarty_tpl->properties['nocache_hash'] = '17418705095ab35508da3443_16954521';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
 
<title><?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_title'];?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_keywords'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['setting']->value['seo_description'];?>
" />
</head>

<body>
    
<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- ad + news-->
<div class="box">
    <div class="focus">
        <ul class="rslides f580x265 rslides1">
           <?php $_smarty_tpl->smarty->_tag_stack[] = array('ad', array('id'=>30)); $_block_repeat=true; echo smarty_block_ad(array('id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li id="rslides1_s0" style="display: none; float: none; position: absolute;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['ad']->value['link'];?>
" target="_blank" >
                    <img src="<?php echo $_smarty_tpl->tpl_vars['ad']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ad']->value['alt'];?>
"  width="580" height="265"/>
                </a>
            </li>
           <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_ad(array('id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
        
        </ul>
        <a href="" class="rslides_nav rslides1_nav prev">Previous</a>
        <a href="" class="rslides_nav rslides1_nav next">Next</a>
    </div>
    <div class="news">
        <div class="sub_tit"><?php $_smarty_tpl->smarty->_tag_stack[] = array('infonav', array('cate_id'=>2)); $_block_repeat=true; echo smarty_block_infonav(array('cate_id'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['infonav']->value['cname'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infonav(array('cate_id'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>2,'row'=>1)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>2,'row'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="headline">
            <div class="head_icon">
                <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" target="_blank" >
                    <img src="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_img'];?>
" width='72' height='72'> 
                </a>
            </div>
            <div class="head_w">
                <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" target="_blank" ><div class="app_name"><?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</div></a>
                <p>
                            <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_desc'];?>

                        </p>
            </div>
        </div>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>2,'row'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <ul class="news_list">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('row'=>4)); $_block_repeat=true; echo smarty_block_infolist(array('row'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><em><a href="<?php echo smarty_function_link(array('m'=>'infos','last_cate_id'=>$_smarty_tpl->tpl_vars['infolist']->value['last_cate_id']),$_smarty_tpl);?>
" ><?php $_smarty_tpl->smarty->_tag_stack[] = array('infonav', array('cate_id'=>$_smarty_tpl->tpl_vars['infolist']->value['last_cate_id'])); $_block_repeat=true; echo smarty_block_infonav(array('cate_id'=>$_smarty_tpl->tpl_vars['infolist']->value['last_cate_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['infonav']->value['cname'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infonav(array('cate_id'=>$_smarty_tpl->tpl_vars['infolist']->value['last_cate_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></em><a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('row'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>
</div>
<!-- ad + news-->

<!-- app category-->
<ul class="hot_list">
<!--    <li class="hot_01">-->
<!--        <div class="hot_tit"><a href="<?php echo smarty_function_link(array('m'=>'games'),$_smarty_tpl);?>
">游戏</a></div>-->
<!--        <div class="hot_tag">-->
<!--            <p>-->
<!--                <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>2,'row'=>12)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>2,'row'=>12), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
-->
<!--                <a href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</a>|-->
<!--                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>2,'row'=>12), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 -->
<!--            </p>-->
<!--        </div>-->
<!--    </li>-->
    <li>
        <div class="hot_tit"><a href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
">软件</a></div>
        <div class="hot_tag">
            <p>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1,'row'=>11)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1,'row'=>11), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</a>|
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1,'row'=>11), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </p>
        </div>
    </li>
</ul>
<!-- app category-->

<!-- 今日热门推荐 装机必备 -->
<div class="box">
    <div class="b_main fl">
        <div class="main_tit"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>29)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>29), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>29), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
        <ul class="list_tj">
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
    <div class="b_sub fr">
        <div class="sub_tit"><a href="<?php echo smarty_function_link(array('m'=>'necessaries'),$_smarty_tpl);?>
" class="more" target="_blank">更多<s></s></a>装机必备</div>
        <ul class="list_rank">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>31,'row'=>7)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>31,'row'=>7), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><span><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['recommend']->value['app_down']),$_smarty_tpl);?>
+人在用</span><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>31,'row'=>7), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
    </div>
</div>
<!-- 今日热门推荐 装机必备 -->

<!-- 安卓软件 -->
<div class="box">
    <div class="b_all">
        <div class="main_tit">
            <a href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
" target="_blank" class="more">更多<s></s></a>推荐软件
        </div>
        <div class="con">
            <div class="con_main">
                <div class="c_hottag">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1,'row'=>11)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1,'row'=>11), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</a>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1,'row'=>11), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
                <ul class="list_jp">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('parent'=>1,'row'=>15)); $_block_repeat=true; echo smarty_block_applist(array('parent'=>1,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" class="pic" target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" width="60" height="60" >
                        </a>
                        <div class="app_name"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</a></div>
                        <p><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
人在玩</p>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('parent'=>1,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                      
                    <li>
                        <a href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/more_green_rj.jpg"></a>
                    </li>
                </ul>
            </div>
            <div class="con_sub">
                <ul class="c_tab">
                    <li class="on"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>44)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>44), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>44), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
                    <li><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>42)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>42), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>42), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
                </ul>
                <div class="c_list">
                    <ul class="list_rank">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>44,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>44,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><span><?php if ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 1) {?>
                            <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 2) {?>
                            <a href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php }?></span><b <?php if ($_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'] < 4) {?>class="num"<?php }?>><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
.</b><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>44,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
         
                    </ul>
                </div>
                <div class="c_list" style="display:none">
                    <ul class="list_rank">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>42,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>42,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><span><?php if ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 1) {?>
                            <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 2) {?>
                            <a href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php }?></span><b <?php if ($_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'] < 4) {?>class="num"<?php }?>><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
.</b><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>42,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
   
                    </ul>
                </div>             
            </div>
        </div>
    </div>
</div>
<!-- 安卓软件 -->

<!-- 安卓游戏 -->
<div class="box">
    <div class="b_all">
        <div class="main_tit">
            <a href="<?php echo smarty_function_link(array('m'=>'games'),$_smarty_tpl);?>
" target="_blank" class="more">更多<s></s></a>热门软件
        </div>
        <div class="con">
            <div class="con_main">
                <div class="c_hottag">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>2,'row'=>11)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>2,'row'=>11), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <a href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</a>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>2,'row'=>11), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
                <ul class="list_jp">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('parent'=>2,'row'=>15)); $_block_repeat=true; echo smarty_block_applist(array('parent'=>2,'row'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" class="pic" target="_blank">
                            <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" width="60" height="60" >
                        </a>
                        <div class="app_name"><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</a></div>
                        <p><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
人在玩</p>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('parent'=>2,'row'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                      
                    <li>
                        <a href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
images/more_green_rj.jpg"></a>
                    </li>                                    
                </ul>
            </div>
            <div class="con_sub">
                <ul class="c_tab">
                    <li class="on"><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>30)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>30), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>30), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
                    <li class=""><?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'recommend','id'=>40)); $_block_repeat=true; echo smarty_block_row(array('name'=>'recommend','id'=>40), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['area_title'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'recommend','id'=>40), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
                </ul>
                <div class="c_list" style="display: block;">
                    <ul class="list_rank">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>30,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>30,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><span><?php if ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 1) {?>
                            <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 2) {?>
                            <a href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php }?></span><b <?php if ($_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'] < 4) {?>class="num"<?php }?>><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
.</b><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>30,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
          
                    </ul>
                </div>
                <div class="c_list" style="display: none;">
                    <ul class="list_rank">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('recommend', array('id'=>40,'row'=>10)); $_block_repeat=true; echo smarty_block_recommend(array('id'=>40,'row'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                        <li><span><?php if ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 1) {?>
                            <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['recommend']->value['parent_id'] == 2) {?>
                            <a href="<?php echo smarty_function_link(array('m'=>'games','cate_id'=>$_smarty_tpl->tpl_vars['recommend']->value['cate_id']),$_smarty_tpl);?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['recommend']->value['cname'];?>
</a>
                            <?php }?></span><b <?php if ($_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'] < 4) {?>class="num"<?php }?>><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_sort_show'];?>
.</b><a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
</a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>40,'row'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 
                    </ul>                              
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 安卓游戏 -->
<!--游戏开服-->
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('navicat', array()); $_block_repeat=true; echo smarty_block_navicat(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (($_smarty_tpl->tpl_vars['navicat']->value['navicat_m'] == 'list_service' && $_smarty_tpl->tpl_vars['navicat']->value['navicat_enabled'] == '1')) {?>
            <div class="kf-box w1000">
                <div class="fl w500">
                    <span class="block-title">游戏开服</span>
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
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['seolist']->value['o_start_time'],"h:i");?>

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
                    <span class="block-title">疯抢礼包</span>
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

                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_start_time'],"h:i");?>
<br/>
                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_end_time'],"m-d");?>

                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['openlist']->value['o_end_time'],"h:i");?>

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
<!-- 友情链接 -->
<div class="ftop">
    <div class="box">
        <div class="ft_left">
            <div class="ft_tit">友情链接</div>
            <div class="ft_a">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('friendlink', array('type'=>1)); $_block_repeat=true; echo smarty_block_friendlink(array('type'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (!$_smarty_tpl->tpl_vars['friendlink']->value['flink_img']) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
</a>
                <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_url'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>
">
                    <img style="display: inline-block; position: relative; top:3px;" width="20" height="20" src="<?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_img'];?>
" />
                    <?php echo $_smarty_tpl->tpl_vars['friendlink']->value['flink_name'];?>

                </a>
                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_friendlink(array('type'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
    </div>
</div>
<!-- 友情链接 -->

<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html><?php }
}
?>