<div id="head">
    <div class="top_c">
        <a href="/"><img class="a" src="<!--{$tpl_path}-->images/logo.png" /></a>
        <ul>
<!--            <li><a href="/">首页</a></li>-->
            <li class="li_bg"><a href="/?c=index&m=softs" style="color: white">应用市场</a></li>
<!--            <li><a href="/?c=index&m=infos2">热门资讯</a></li>-->
<!--            <li><a href="#">应用接入</a></li>-->
        </ul>
        <div class="top_ibox">
            <img class="top_down" src="<!--{$tpl_path}-->images/dwon.png" />
            <input class="top_input" placeholder="输入DAPP名称或类型" data-url="/index.php?c=index&m=search2" data-rewrite="<!--{$setting.is_site_rewrite}-->" id="search-input" onkeydown="if(event.keyCode == 13) search_app()" />
            <a onclick="search_app()"><img class="top_fa" src="<!--{$tpl_path}-->images/fangda.png" /></a>
        </div>
    </div>
</div>
<style>
    .top_fa{
        transform: rotate(270deg);
    }
    *{
        font-family: '微软雅黑';
    }
</style>
<script>
    function build_url_js(c, m, arg, d, rewrite) {
        var c = c.toLowerCase();
        var url = {};
        var build = '';
        var query = '';
        if (rewrite == 1) {
            var keywords = arg.keywords;
            return "/search2/?keywords=" + encodeURI(keywords);
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
            // window.location = $('#search-input').attr('data-url') + "&keywords=" + $('#search-input').val();
        }
    }
</script>