<?php /* Smarty version 3.1.27, created on 2018-03-20 11:53:11
         compiled from "E:\www\711cms\templates\template_003\list_necessary.php" */ ?>
<?php
/*%%SmartyHeaderCode:59365ab085a75193f6_03455941%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6495eab115de58d641685371c75bf2c589c09afb' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\list_necessary.php',
      1 => 1500953873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59365ab085a75193f6_03455941',
  'variables' => 
  array (
    'row' => 0,
    'setting' => 0,
    'list' => 0,
    'necessary_type' => 0,
    'page' => 0,
    'necessary' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab085a75b5829_52821582',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab085a75b5829_52821582')) {
function content_5ab085a75b5829_52821582 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_block_list')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.list.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_necessary')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.necessary.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';
if (!is_callable('smarty_function_pagebar')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.pagebar.php';

$_smarty_tpl->properties['nocache_hash'] = '59365ab085a75193f6_03455941';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>4)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

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
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("inc_top.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("inc_menu.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="model">

    <div class="model-titles">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'necessary')); $_block_repeat=true; echo smarty_block_list(array('name'=>'necessary'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <a href="<?php echo smarty_function_link(array('m'=>'necessaries','necessary_type'=>$_smarty_tpl->tpl_vars['list']->value['necessary_type']),$_smarty_tpl);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['necessary_type']->value) && $_smarty_tpl->tpl_vars['necessary_type']->value == $_smarty_tpl->tpl_vars['list']->value['necessary_type']) || ($_smarty_tpl->tpl_vars['necessary_type']->value == 0 && $_smarty_tpl->tpl_vars['list']->value['special_sort_show'] == 1)) {?> class="current"<?php }?>>
            <?php echo $_smarty_tpl->tpl_vars['list']->value['necessary_title'];?>

        </a>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'necessary'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <div class="game-s">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('list', array('name'=>'necessary','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value)); $_block_repeat=true; echo smarty_block_list(array('name'=>'necessary','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="model-title">
            <h3><?php echo $_smarty_tpl->tpl_vars['list']->value['necessary_title'];?>
</h3>
        </div>
        <ul class="app-bb">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('necessary', array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>15)); $_block_repeat=true; echo smarty_block_necessary(array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <div class="icon-wrap">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
">
                        <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['necessary']->value['app_logo']),$_smarty_tpl);?>
" width="68" height="68"
                             alt="<?php echo $_smarty_tpl->tpl_vars['necessary']->value['app_title'];?>
" class="icon"/>
                    </a>
                </div>
                <div class="app-desc">
                    <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
"
                       title="<?php echo $_smarty_tpl->tpl_vars['necessary']->value['app_title'];?>
" class="name">
                        <?php echo mb_substr($_smarty_tpl->tpl_vars['necessary']->value['app_title'],0,7,'utf-8');?>

                    </a>

                    <div class="meta">
                        <span class="install-count"><?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['necessary']->value['app_down']),$_smarty_tpl);?>
人下载</span>
                        <span class="dot">・</span>
                        <span title="<?php echo $_smarty_tpl->tpl_vars['necessary']->value['history_size'];?>
"><?php echo round($_smarty_tpl->tpl_vars['necessary']->value['history_size']/1024/1024,2);?>
MB</span>
                    </div>
                </div>
                <a class="install-btn" rel="nofollow" style="display:block;"
                   href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['necessary']->value['app_id']),$_smarty_tpl);?>
">下载</a>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_necessary(array('id'=>$_smarty_tpl->tpl_vars['list']->value['necessary_id'],'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <?php echo smarty_function_pagebar(array('name'=>'necessary_list','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>15),$_smarty_tpl);?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_list(array('name'=>'necessary','type'=>$_smarty_tpl->tpl_vars['necessary_type']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

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