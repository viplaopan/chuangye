<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<?php if(!$oneplus_seo_meta){ $oneplus_seo_meta = get_seo_meta($vars,$seo); } ?>
<?php if($oneplus_seo_meta['title']): ?><title><?php echo ($oneplus_seo_meta['title']); ?></title>
    <?php else: ?>
    <title><?php echo C('WEB_SITE_TITLE');?></title><?php endif; ?>
<?php if($oneplus_seo_meta['keywords']): ?><meta name="keywords" content="<?php echo ($oneplus_seo_meta['keywords']); ?>"/><?php endif; ?>
<?php if($oneplus_seo_meta['description']): ?><meta name="description" content="<?php echo ($oneplus_seo_meta['description']); ?>"/><?php endif; ?>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/Public/Main/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/Main/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        <link href="/Public/Main/css/detail.css" rel="stylesheet">
    
<?php echo hook('pageHeader');?>

</head>
<body>
	<!-- 头部 -->
	<div id="global-nav" class="navbar-fixed-top">
        <div class="nav-inner z-clearfix">
            <nav>
                <ul class="top-nav-list">
                    <li class="current"><a href="/">首页</a></li>
                    <li>
                        <a href="">创业资讯</a>
                    </li>
                    <li>
                        <a href="">博客</a>
                    </li>
                </ul>
            </nav>
            
        </div>
    </div>
  
    <nav class="navbar navbar-default main-nav" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img alt="Brand" src="/Public/Main/images/logo.png" height="60px">
          </a>
        </div>
        <form class="my-form" role="search">
            <div class="form-group">
              <input type="text" class="form-control" autocomplete="off" placeholder="搜索">
            </div>
            <button type="submit" class="btn_search glyphicon glyphicon-search"></button>
          </form>
      </div>
    </nav>
	<!-- /头部 -->
	
	<!-- 主体 -->
	
<div id="main-container" class="container">
    <div class="row">
        
        <!-- 左侧 nav
        ================================================== -->
            <div class="span3 bs-docs-sidebar">
                
                <ul class="nav nav-list bs-docs-sidenav">
                    <?php echo W('Category/lists', array($category['id'], ACTION_NAME == 'index'));?>
                </ul>
            </div>
        
        
   <section class="container">
        <div class="row">
            <div id="article" class="col-sm-9">
                <div class="single-item">
                    <div class="article-hd">
                        <h1 class="article-tit"><?php echo ($info["title"]); ?></h1>
                        <div class="clearfix">
                            <div class="author-time pull-left">
                                    <span class="name"><?php echo ($info["media"]); ?></span>
                                <span class="date-time" data-time="1477305393"><?php echo (date("Y-m-d",$info["create_time"])); ?></span>
                            </div>
                            <div class="article-tags pull-right">
                                <span>标签:</span>
                                <a target="_blank" class="tag-link" href="">融资</a>
                                <a target="_blank" class="tag-link" href="">每日融资</a>
                                <a target="_blank" class="tag-link" href="">创业邦</a>              
                            </div>
                        </div>
                    </div>
                    <div class="article-content">
                        <?php echo ($info["content"]); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-24">
                <h1>
                    <span class="pannel-ico"></span>
                    24小时快报
                </h1>
                <div class="border">
                    <div class="fast-item">
                        <div class="item-inner">
                            <div class="item-title">第三方支付全国仅267张牌照，一张炒到5亿</div>
                            <div style="padding-bottom:10px;">
                                <span class="item-time" data-stamp="1477265398">07:29</span>
                                 <span class="item-time" style="margin-left:10px;">每日经济新闻</span>                                </div>
                            <div class="item-info hide">央行自2011年以来陆续发放支付牌照270张，自去年3月至今未再发放过支付牌照，除去3家机构因违规被注销牌照，市场上现存有效支付牌照仅267张。据媒体报道，有支付行业人士表示，“去年支付牌照才几千万，不过价格不稳定，到现在市场价格就5亿左右了。”<a target="_blank" href="http://www.cyzone.cn/a/20161024/304861.html">[详情]</a></div>
                        </div>
                    </div>
                    <div class="fast-item">
                        <div class="item-inner">
                            <div class="item-title">第三方支付全国仅267张牌照，一张炒到5亿</div>
                            <div style="padding-bottom:10px;">
                                <span class="item-time" data-stamp="1477265398">07:29</span>
                                 <span class="item-time" style="margin-left:10px;">每日经济新闻</span>                                </div>
                            <div class="item-info hide">央行自2011年以来陆续发放支付牌照270张，自去年3月至今未再发放过支付牌照，除去3家机构因违规被注销牌照，市场上现存有效支付牌照仅267张。据媒体报道，有支付行业人士表示，“去年支付牌照才几千万，不过价格不稳定，到现在市场价格就5亿左右了。”<a target="_blank" href="http://www.cyzone.cn/a/20161024/304861.html">[详情]</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    </div>
</div>

<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
	<!-- /主体 -->

	<!-- 底部 -->
	<section id="footer" class="footer">
        <div class="footer-content">
			            <div class="website com-width">
			
			<div class="footer-link com-width">
			<a href="">关于我们</a>
			 <a href="">会议活动</a>
			  <a href="">广告与服务</a>
			   <a href="http://www.fk68.net/">肥客联邦</a> 
			   </div>
			<div class="copyright com-width">
			<p>Copyright 2007-2016 www.36eq.com All rights reserved 沪ICP备14005381号-3</p>
			</div>
			</div>
			       </div>

</section>
    
<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "", //当前网站地址
		"APP"    : "", //当前项目地址
		"PUBLIC" : "/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public/Main/js/bootstrap.min.js"></script>
     <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>
	<!-- /底部 -->
</body>
</html>