<?php /* Smarty version 3.1.27, created on 2018-03-21 03:51:12
         compiled from "E:\www\711cms\templates\template_003\content_info.php" */ ?>
<?php
/*%%SmartyHeaderCode:7891746095ab1d6b0599f67_10036194%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87a4c59f69c160a18add20535fbac666d7a0c448' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\content_info.php',
      1 => 1500953873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7891746095ab1d6b0599f67_10036194',
  'variables' => 
  array (
    'info' => 0,
    'setting' => 0,
    'info_prev' => 0,
    'info_next' => 0,
    'last_cate_id' => 0,
    'infolist' => 0,
    'recommend' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab1d6b05fba19_52990310',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab1d6b05fba19_52990310')) {
function content_5ab1d6b05fba19_52990310 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_infolist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.infolist.php';
if (!is_callable('smarty_block_recommend')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.recommend.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';

$_smarty_tpl->properties['nocache_hash'] = '7891746095ab1d6b0599f67_10036194';
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


<div class="model detail-item">
    <!--  <div class="bread-crumbs w1200">
          <a href="#">首页</a> &gt; <a href="#">游戏中心</a> &gt; <a href="#">网络游戏</a> &gt; 苍穹变
      </div>-->

    <div class="lefts detail-item-l">
        <div class="all-detail-item mb10">
            <div class="all-detail-item-title">
                <h1 class="top-title"><?php echo $_smarty_tpl->tpl_vars['info']->value['info_title'];?>
</h1>

                <div class="top-others">
                    <span>时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['info_update_time'],"%Y-%m-%d");?>
</span>
                    <span>作者：<?php echo $_smarty_tpl->tpl_vars['info']->value['info_author'];?>
</span>
                    <span>来源：<?php echo $_smarty_tpl->tpl_vars['info']->value['info_from'];?>
</span>
                    <span>浏览量：<?php echo $_smarty_tpl->tpl_vars['info']->value['info_visitors'];?>
</span>
                </div>
            </div>
            <div class="all-detail-item-content">
                <?php echo $_smarty_tpl->tpl_vars['info']->value['info_body'];?>

            </div>

            <div class="next-prev-item">
                <?php if ((is_array($_smarty_tpl->tpl_vars['info_prev']->value) && sizeof($_smarty_tpl->tpl_vars['info_prev']->value) > 0)) {?>
                    <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['info_prev']->value['info_id']),$_smarty_tpl);?>
" class="fl">
                        上一篇：<?php echo mb_substr($_smarty_tpl->tpl_vars['info_prev']->value['info_title'],0,20,'utf-8');?>

                    </a>
                <?php }?>
                <?php if ((is_array($_smarty_tpl->tpl_vars['info_next']->value) && sizeof($_smarty_tpl->tpl_vars['info_next']->value) > 0)) {?>
                    <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['info_next']->value['info_id']),$_smarty_tpl);?>
" class="fr">
                        下一篇：<?php echo mb_substr($_smarty_tpl->tpl_vars['info_next']->value['info_title'],0,20,'utf-8');?>

                    </a>
                <?php }?>
            </div>
        </div>
        <div class="ly-art">
            <h2 class="fs16">相关文章<a href="<?php echo smarty_function_link(array('m'=>'infos','last_cate_id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value),$_smarty_tpl);?>
" class="fr"
                                    style="color:#0B99BC">+更多</a></h2>
            <ul class="fs12">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('infolist', array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'row'=>5)); $_block_repeat=true; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'row'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <?php if ($_smarty_tpl->tpl_vars['infolist']->value['info_url']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_url'];?>
" target="_blank"><?php } else { ?>
                    <a href="<?php echo smarty_function_link(array('m'=>'info','info_id'=>$_smarty_tpl->tpl_vars['infolist']->value['info_id']),$_smarty_tpl);?>
"><?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['infolist']->value['info_title'];?>
</a>
                    <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['infolist']->value['info_update_time'],"%Y-%m-%d");?>
</span>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_infolist(array('id'=>$_smarty_tpl->tpl_vars['last_cate_id']->value,'row'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>

    </div>

    <div class="rights">
        <div class="model-title">
            <h3>热门排行榜</h3>
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
                    <a class="btn btn-style2 btn-sm btn-block "
                       href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['recommend']->value['app_id']),$_smarty_tpl);?>
"
                       title="<?php echo $_smarty_tpl->tpl_vars['recommend']->value['app_title'];?>
">免费下载</a>
                </p>
            </li>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_recommend(array('id'=>42,'row'=>9), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <div class="model-title">
            <h3>飙升榜</h3>
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
                    <a class="btn btn-style2 btn-sm btn-block "
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
<?php echo $_smarty_tpl->getSubTemplate ("inc_flink.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


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