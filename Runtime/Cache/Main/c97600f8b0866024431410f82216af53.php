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
        <?php echo W('Ad/topHtml');?>
    </section>
    

    <section class="container news-lists">
        <div class="row">
            
            <div class="col-sm-4 col-sm-3-1">
                <h1>
                    <span class="glyphicon glyphicon-fire"></span>
                    48小时快报
                </h1>
                <div class="border">
                    <?php if(is_array($hots)): $i = 0; $__LIST__ = $hots;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="fast-item">
                            <div class="item-inner">
                                <div class="item-title"><a href="<?php echo U('Main/Article/detail',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a></div>
                                <div style="padding-bottom:10px;">
                                    <a href="<?php echo U('Main/Article/detail',array('id'=>$vo['id']));?>">
                                        <span class="item-time" data-stamp="1477265398"><?php echo (date("H:i",$vo["create_time"])); ?></span>
                                     <span class="item-time" style="margin-left:10px;"><?php echo ($vo["media"]); ?></span>                                </div>
                                    </a>
                                
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="col-sm-4 col-sm-3-2">
                <div class="slider-tags clearfix">
                        <div class="tags-box">
                            <a class="tag" target="blank" href="" style="color:#63bacb;">
                               公告： 创客大家庭 目前在开发阶段                          <span class="tag-icon"></span>
                            </a>
                        </div>
                        
                    </div>
                    <div class="article-list">
                        <?php if(is_array($hots)): $i = 0; $__LIST__ = $hots;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="article-item clearfix" data-id="304865">
                            <div class="item-pic pull-left">
                                <a target="_blank" href="<?php echo U('Main/Article/detail',array('id'=>$vo['id']));?>" title=""><img src="<?php echo get_cover($vo['cover_id'],'path');?>"></a>
                            </div>
                            <div class="item-intro">
                                <a target="_blank" href="<?php echo U('Main/Article/detail',array('id'=>$vo['id']));?>" class="item-title"><?php echo ($vo["title"]); ?></a>
                                <p class="item-desc"><?php echo ($vo["description"]); ?></p>
                                <div class="item-push-info"><?php echo ($vo["media"]); ?> | <span data-time="1477270369"><?php echo (date("Y-m-d",$vo["create_time"])); ?></span></div>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
            </div>
            <div class="col-sm-4 col-sm-3-1">
                <h1>
                    <span class="glyphicon glyphicon-retweet"></span>
                    发现新产品
                </h1>
                <div class="border">
                    <div class="conference-item import">
                        <span class="glyphicon glyphicon-stop"></span>
                        <a target="_blank" class="dot-1" href="">DEMO SPACE融资加速通道</a>
                    </div>
                    <div class="conference-item import">
                        <span class="glyphicon glyphicon-stop"></span>
                        <a target="_blank" class="dot-1" href="">2017年30岁以下创业新贵评选</a>
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
			   <a href="">入驻创投库</a> 
			   </div>
			<div class="copyright com-width">
			<p>Copyright 2007-2016 cyzone.cn All rights reserved 京ICP证070362号 京ICP备08103950号 京公海网安备110108000742号新出发京零字第朝140005号</p>
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