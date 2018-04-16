<?php /* Smarty version 3.1.27, created on 2018-03-20 11:48:48
         compiled from "E:\www\711cms\templates\mobile_101\list_soft.php" */ ?>
<?php
/*%%SmartyHeaderCode:126525ab084a077e667_00138056%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c94ab721f5658819a2694a9654070ec0f6dd280' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\mobile_101\\list_soft.php',
      1 => 1511403390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126525ab084a077e667_00138056',
  'variables' => 
  array (
    'cate_id' => 0,
    'row' => 0,
    'setting' => 0,
    'appnav' => 0,
    'foo' => 0,
    'applist' => 0,
    'show_sort_id' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab084a081aa83_06319341',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab084a081aa83_06319341')) {
function content_5ab084a081aa83_06319341 ($_smarty_tpl) {
if (!is_callable('smarty_block_row')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.row.php';
if (!is_callable('smarty_function_imageurl')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.imageurl.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';
if (!is_callable('smarty_block_appnav')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.appnav.php';
if (!is_callable('smarty_block_applist')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.applist.php';
if (!is_callable('smarty_function_countdown')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.countdown.php';

$_smarty_tpl->properties['nocache_hash'] = '126525ab084a077e667_00138056';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="data-spm" content="1"/>
    <meta http-equiv="Cache-Control" content="max-age=3600"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <?php if ($_smarty_tpl->tpl_vars['cate_id']->value) {?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value)); $_block_repeat=true; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['ctitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['ckey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['cdesc'];?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'app_category','id'=>$_smarty_tpl->tpl_vars['cate_id']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('row', array('name'=>'navicat','id'=>2)); $_block_repeat=true; echo smarty_block_row(array('name'=>'navicat','id'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <title><?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seotitle'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seokey'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['navicat_seodesc'];?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_row(array('name'=>'navicat','id'=>2), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("inc_head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>
<body>

<div class="header">
    <a href="/"><img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['setting']->value['wap_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_name'];?>
" height="55"/></a>
    <a class="sear icon-ic_search-01" href="<?php echo smarty_function_link(array('m'=>'page_search'),$_smarty_tpl);?>
"></a>
</div>
<div class="pad10 mart14">
    <table width="0" border="0" cellspacing="0" cellpadding="0" class="table">
        <tbody>
        <tr>
            <td><a href="<?php echo smarty_function_link(array('m'=>'softs'),$_smarty_tpl);?>
" title="全部"><span>全部</span></a> </td>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1,'row'=>3,'start'=>0)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1,'row'=>3,'start'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <td>
                <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</span>
                </a>
            </td>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1,'row'=>3,'start'=>0), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </tr>
        <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
        <tr>
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('appnav', array('parent'=>1,'row'=>4,'start'=>$_smarty_tpl->tpl_vars['foo']->value*4-1)); $_block_repeat=true; echo smarty_block_appnav(array('parent'=>1,'row'=>4,'start'=>$_smarty_tpl->tpl_vars['foo']->value*4-1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <td>
                <a href="<?php echo smarty_function_link(array('m'=>'softs','cate_id'=>$_smarty_tpl->tpl_vars['appnav']->value['cate_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['appnav']->value['cname'];?>
</span>
                </a>
            </td>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_appnav(array('parent'=>1,'row'=>4,'start'=>$_smarty_tpl->tpl_vars['foo']->value*4-1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </tr>
        <?php }} ?>

        </tbody>
    </table>
</div>
<div class="rank-box-div block list-box">
    <ul class="rank">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'row'=>3)); $_block_repeat=true; echo smarty_block_applist(array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'row'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <li>
            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"  class="link">
                <span class="num icon-ic_flag-01"><i><?php echo $_smarty_tpl->tpl_vars['show_sort_id']->value++;?>
</i></span>
                <span class="sj-top"></span>
                <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
" style="display: inline-block;">

                <h3><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</h3>

                <p><?php echo $_smarty_tpl->tpl_vars['applist']->value['cname'];?>
 <?php echo round($_smarty_tpl->tpl_vars['applist']->value['history_size']/1024/1024,2);?>
M</p>
            </a>
            <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"  class="download">下载</a>
        </li>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'row'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>

    <!--列表-->
    <div class="rank-list">
        <ul class="speApp" id="categary_hot_soft" data-id="<?php echo $_smarty_tpl->tpl_vars['cate_id']->value;?>
">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('applist', array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'start2'=>3,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>12)); $_block_repeat=true; echo smarty_block_applist(array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'start2'=>3,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>12), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <span class="num"><?php echo $_smarty_tpl->tpl_vars['show_sort_id']->value++;?>
</span>
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"  class="link">
                    <img src="<?php echo smarty_function_imageurl(array('url'=>$_smarty_tpl->tpl_vars['applist']->value['app_logo']),$_smarty_tpl);?>
" style="display: block;">

                    <h3><font style="max-width:60%" class="overcut"><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_title'];?>
</font></h3>

                    <p><?php echo round($_smarty_tpl->tpl_vars['applist']->value['history_size']/1024/1024,2);?>
M <?php echo smarty_function_countdown(array('down'=>$_smarty_tpl->tpl_vars['applist']->value['app_down']),$_smarty_tpl);?>
+次下载</p>

                    <p><?php echo $_smarty_tpl->tpl_vars['applist']->value['app_seodesc'];?>
</p>
                </a>
                <a href="<?php echo smarty_function_link(array('m'=>'app','app_id'=>$_smarty_tpl->tpl_vars['applist']->value['app_id']),$_smarty_tpl);?>
"  class="download">下载</a>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_applist(array('parent'=>1,'id'=>$_smarty_tpl->tpl_vars['cate_id']->value,'start2'=>3,'page'=>$_smarty_tpl->tpl_vars['page']->value,'per_page'=>12), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>

    </div>
</div>
<div class="more-div" id="appMore"><a>更多</a></div>
<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("inc_foot.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
        var i = 2;
        var last_cate_id = $("#categary_hot_soft").attr("data-id");
        $("#appMore").click(function () {
            $.ajax({
                type: "POST",
                url: "api.php?c=ajax&m=apps",
                data: {'page': i++, 'last_cate_id': last_cate_id, 'parent_id':1},
                dataType: 'json',
                success: function (msg) {
                    if (msg.status == '1') {
                        var j = 15*(msg.page-1)+1;
                        var html = '';
                        $.each(msg.list, function (k, v) {

                            html += "<li>";
                            html += '<span class="num">'+ j++ +'</span>';
                            html += '<a href="' + v.app_url + '" class="con"  >';
                            html += '<img src="' + image_url(v.app_logo) + '" class="photo" style="display: block;" />';
                            html += '<h3><font style="max-width:60%" class="overcut">'+ v.app_title +'</font></h3>';
                            html += ' <p>'+ Math.round(v.history_size / 1024 / 1024 * 100) / 100 +'M&nbsp'  + num_down(v.app_down) + '+次下载</p>';
                            html += '<p>'+ v.app_seodesc +'</p>';
                            html += '<a href="' + v.app_url + '"  class="download">下载</a>';
                            html += '</li>';

                        });
                        $("#categary_hot_soft").append(html);
                    } else {
                        $(".more-div").css("display", "none");
                    }
                }
            });
        });
        function num_star(num) {
            var numm = parseInt(num);
            switch (numm) {
                case 1:
                    return 'style="width:20%"';
                    break;
                case 2:
                    return 'style="width:40%"';
                    break;
                case 3:
                    return 'style="width:60%"';
                    break;
                case 4:
                    return 'style="width:80%"';
                    break;
                case 5:
                    return 'style="width:100%"';
                    break;
                default:
                    return 'style="width:100%"';
                    break;
            }
        }
        function num_down(num) {
            var down_umm = parseInt(num);
            if (down_umm >= 10000000) {
                down_umm = Math.round(down_umm / 100000000 * 100) / 100 + '亿';
            }
            if (down_umm >= 10000 && down_umm < 10000000) {
                down_umm = Math.round(down_umm / 10000 * 100) / 100 + '万';
            }
            return down_umm;
        }

        function image_url(url) {

            if(url == '' || url == 'undefined' || url == 'http://cdn.711cms.net/'){
                return '/templates/cates/no_picture.png';
            }
            return url;
        }
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>