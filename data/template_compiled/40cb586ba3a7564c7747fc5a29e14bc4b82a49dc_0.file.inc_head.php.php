<?php /* Smarty version 3.1.27, created on 2018-04-16 18:18:41
         compiled from "E:\www\711cms\templates\template_009\inc_head.php" */ ?>
<?php
/*%%SmartyHeaderCode:6192967635ad478811dc1a0_32058299%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40cb586ba3a7564c7747fc5a29e14bc4b82a49dc' => 
    array (
      0 => 'E:\\www\\711cms\\templates\\template_009\\inc_head.php',
      1 => 1523873920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6192967635ad478811dc1a0_32058299',
  'variables' => 
  array (
    'tpl_path' => 0,
    'current_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ad478811fb5b9_30573167',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ad478811fb5b9_30573167')) {
function content_5ad478811fb5b9_30573167 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6192967635ad478811dc1a0_32058299';
?>
<nav class="all-nav">
	<ul class="container">
		<li><a href="/"><img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/logo.png"></a></li>
		<li class="shouye"><a href="/?c=index&m=main" target="headFrame"><span>首页</span></a></li>
		<li class="bazaar"><a href="/?c=index&m=softs"><span>应用市场</span></a></li>
		<li style="position:relative">
			<input class="search" type="search" name="search" id="search" value="" placeholder="搜索app.com" onfocus="this.value='' "/>
			<i class="iconfont icon-sousuo"></i>
			<div class="search-frame">
				<ul>

				</ul>
			</div>
		</li>
	</ul>
</nav>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function() {
        switch ("<?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
") {
            case 'main':
                $('.shouye').addClass('act');
                break;
            case 'softs':
                $('.bazaar').addClass('act');
                break;
            case 'app':
                $('.bazaar').addClass('act');
                break;
        }
        var a = false;
        $(document).on("input propertychange", "#search", function () {
            $(".search-frame ul").html('');
            var keyword = $('#search').val();
            $.post("/api.php?c=Api&m=search",{keyword:keyword},function(data){
                var data2 = JSON.parse( data );
                if(data2.code == 0){
                    var app = data2['msg'];
                    for(var i=0;i<app.length;i++){
                        $(".search-frame ul").append("<a href='/?c=index&m=app&app_id="+app[i]['app_id']+"'><li>"+app[i]['app_title']+"</li></a>");
                    }
                }
            });
            $(".search-frame").slideDown();
            var val = this.value
            if (val == "") {
                $(".search-frame").slideUp()
                a = false;
            } else {
                if (a == false) {
                    $(".search-frame").slideDown();
                    a = true
                }
            }
        });
        $(document).on("blur", "#search", function () {
            $(".search-frame").slideUp()
        })
    })
<?php echo '</script'; ?>
><?php }
}
?>