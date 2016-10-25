<?php if (!defined('THINK_PATH')) exit();?><div class="single-item">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php if(is_array($banners)): $k = 0; $__LIST__ = $banners;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li data-target="#carousel-example-generic" data-slide-to="<?php echo ($k-1); ?>" <?php if(($k) == "1"): ?>class="active"<?php endif; ?>></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ol>
    <div class="carousel-inner" role="listbox">
    	<?php if(is_array($banners)): $k = 0; $__LIST__ = $banners;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="item <?php if(($k) == "1"): ?>active<?php endif; ?>">
          <a href="<?php echo ($vo["url"]); ?>" title="<?php echo ($vo["title"]); ?>">
             <img width="630" height="350" alt="<?php echo ($vo["title"]); ?>" src="/Uploads/Images/<?php echo ($vo["data"]); ?>" data-holder-rendered="true">
          </a>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="right-images">
  <?php if(is_array($fours)): $i = 0; $__LIST__ = $fours;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["url"]); ?>" title="<?php echo ($vo["title"]); ?>">
        <img src="/Uploads/Images/<?php echo ($vo["data"]); ?>">
        <h4><?php echo ($vo["title"]); ?></h4>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>