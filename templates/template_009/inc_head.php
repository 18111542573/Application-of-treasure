<nav class="all-nav">
	<ul class="container">
		<li><a href="/"><img class="logo" src="<!--{$tpl_path}-->img/logo.png"></a></li>
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
<script type="text/javascript">
    $(function() {
        switch ("<!--{$current_page}-->") {
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
            var val = this.value;
            if (val == "") {
                $(".search-frame").slideUp();
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
</script>