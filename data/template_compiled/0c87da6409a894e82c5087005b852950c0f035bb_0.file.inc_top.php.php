<?php /* Smarty version 3.1.27, created on 2018-03-22 06:32:08
         compiled from "E:\www\711cms\templates\template_003\inc_top.php" */ ?>
<?php
/*%%SmartyHeaderCode:15520332115ab34de8ccf0a2_49560973%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c87da6409a894e82c5087005b852950c0f035bb' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_003\\inc_top.php',
      1 => 1521700199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15520332115ab34de8ccf0a2_49560973',
  'variables' => 
  array (
    'setting' => 0,
    'keyword' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ab34de8cd6da5_40657689',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ab34de8cd6da5_40657689')) {
function content_5ab34de8cd6da5_40657689 ($_smarty_tpl) {
if (!is_callable('smarty_block_keyword')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\block.keyword.php';
if (!is_callable('smarty_function_link')) require_once 'E:\\www\\711cms\\cms\\libraries\\Template\\plugins\\function.link.php';

$_smarty_tpl->properties['nocache_hash'] = '15520332115ab34de8ccf0a2_49560973';
?>
<div class="top">
    <div class="top-con">
        <ul class="top-link-normal fr">
            <li>
                &nbsp;<span class="font-gray"></span>&nbsp;<a href="javascript:;" onclick="SetHome(this,window.location)" title="设为首页">设为首页</a>
            </li>
            <li>
                &nbsp;<span class="font-gray">|</span>&nbsp;<a href="javascript:;" onclick="AddFavoritee(window.location,document.title)" title="加入收藏">加入收藏</a>
            </li>
        </ul>
    </div>
</div>
<div class="header clear">
    <div class="header-con">
        <div class="header-brand">
            <a class="header-logo" href="#" target="_blank">偶玩</a>
            <span class="header-location">快乐随时随地</span>

            <!-- header-flash start -->
            <div class="header-flash-wrap">
                <div class="header-flash" id="flashContent">
                    <a href="/" title="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_name'];?>
"><img width="300" height="80"
                                                                         src="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_logo'];?>
"
                                                                         alt="<?php echo $_smarty_tpl->tpl_vars['setting']->value['site_name'];?>
"/></a>
                </div>
            </div>
            <!-- header-flash start -->
        </div>
        <div class="header-search">
            <div id="search-form">
                <input class="header-search-input" data-url="/index.php?c=index&m=search" id="search-input" data-rewrite="<?php echo $_smarty_tpl->tpl_vars['setting']->value['is_site_rewrite'];?>
" type="search"
                       placeholder="输入应用或游戏关键词" onkeydown="if(event.keyCode == 13) search_app()">
                <button class="right btn btn-style12 ly-btn" type="button" id="search-btn" onclick="search_app()">
                    <span class="icon-search"></span>
                    <span class="ly-search">搜索</span>
                </button>

            </div>
            <p class="nowrap" style='margin-top:5px;color:#B6B6B6'>
                热门:
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('keyword', array('row'=>3)); $_block_repeat=true; echo smarty_block_keyword(array('row'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<?php echo smarty_function_link(array('m'=>'search','keywords'=>$_smarty_tpl->tpl_vars['keyword']->value['q']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['keyword']->value['q'];?>
</a>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_keyword(array('row'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </p>
            <ul class="header-search-result" id="headerSearchResult">
            </ul>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    function build_url_js(c, m, arg, d, rewrite) {
        var c = c.toLowerCase();
        var url = {};
        var build = '';
        var query = '';
        if (rewrite == 1) {
            var keywords = arg.keywords;
            return "/search/?keywords=" + encodeURI(keywords);
        }
        if (d != undefined) {
            $.extend(url, {"d": d});
        }
        if (c != undefined) {
            $.extend(url, {"c": c});
        }
        if (m != undefined) {
            $.extend(url, {"m": m});
        }
        if (typeof arg == 'object') {
            $.extend(url, arg);
        }
        query = $.param(url);
        if (query.length > 0) {
            query = '?' + query;
        }
        build = "/index.php" + query;
        return build;
    }

    function search_app() {
        if ($('#search-input').val() != '') {
            window.location = build_url_js('index','search',{'keywords': $('#search-input').val()},undefined,rewrite = $('#search-input').attr('data-rewrite'));
            //window.location = $('#search-input').attr('data-url') + "&keywords=" + $('#search-input').val();
        }
    }
    function AddFavoritee(sURL, sTitle) {
        try {
            window.external.addFavorite(sURL, sTitle);
        }
        catch (e) {
            try {
                window.sidebar.addPanel(sTitle, sURL, "");
            }
            catch (e) {
                alert("加入收藏失败，请使用Ctrl+D进行添加");
            }
        }
    }
    function SetHome(obj, vrl) {
        try {
            obj.style.behavior = 'url(#default#homepage)';
            obj.setHomePage(vrl);
        }
        catch (e) {
            if (window.netscape) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                }
                catch (e) {
                    alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
                }
                var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
                prefs.setCharPref('browser.startup.homepage', vrl);
            }
        }
    }
<?php echo '</script'; ?>
><?php }
}
?>