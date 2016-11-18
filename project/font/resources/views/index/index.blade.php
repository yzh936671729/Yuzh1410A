<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="../css/slick.css" />
		<link rel="stylesheet" type="text/css" href="../css/base.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/all.css"/>
		<link rel="stylesheet" type="text/css" href="../css/swiper.min.css"/>
		<link rel="stylesheet" type="text/css" href="../css/iconfont/iconfont.css" />
		<title>首页</title>
	</head>

	<body>
		<div class="header">
			<span>优智源</span>
			<a href="user-center.html"><span class="user"><i class="iconfont icon-person"></i></span></a>
		</div>
		<!--<div class="banner autoplay">
			<div>
				<a href="#" class="banner-img"><img src="img/banner1.png" alt=""></a>
			</div>
			<div>
				<a href="#" class="banner-img"><img src="img/banner1.png" alt=""></a>
			</div>
			<div>
				<a href="#" class="banner-img"><img src="img/banner1.png" alt=""></a>
			</div>
		</div>-->
		<div class="banner swiper-container">
            <div class="swiper-wrapper">
            <?php foreach($imgsObj as $k=>$v){?>
                <div class="swiper-slide"><a href="javascript:void(0)"><img class="swiper-lazy" data-src="<?=$v['img']?>" alt=""></a></div>
            <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
		<?php include('./nav/nav.html');?>
		<div class="brief">
			<h3 class="brief-tit">校园简介</h3>
			<?php foreach($descObj as $k => $v){?>
			<div class="brirf-content clearfix">
				<div class="bc-left fl">
					<img src="<?=$v['img']?>">
				</div>
				<div class="bc-right fr">
					<?=$v['content']?>
				</div>
			</div>
			<?php } ?>
		</div>
		<dl class="news">
			<dt class="news-tit">校园资讯</dt>
			<?php foreach($consulteObj as $key =>$v){?>
			<dd class="news-content clearfix">
				<div class="nc-left fl">
					<img src="<?=$v['img']?>">
				</div>
				<div class="nc-right fr">
					<a class="ncr-top"><?=$v['title']?>
					</a>
					<span class="nc-time"><?=$v['time']?></span>
				</div>
			</dd>
			<?php } ?>
		</dl>
		<div class="footer">
			<ul class="footer-page clearfix">
				<li class="page-item active">
					<a href="index">
						<i class="iconfont icon-index"></i>
						<p>首页</p>
					</a>
				</li>
				<li class="page-item">
					<a href="entrance">
						<i class="iconfont icon-computer"></i>
						<p>自助入学</p>
					</a>
				</li>
				<li class="page-item">
					<a href="ask">
						<i class="iconfont icon-ask"></i>
						<p>咨询帮助</p>
					</a>
				</li>
				<li class="page-item">
					<a href="user_center">
						<i class="iconfont icon-person1"></i>
						<p>个人中心</p>
					</a>
				</li>
			</ul>
		</div>
		<script src="../js/jquery.min.js"></script>
		<script src="../jquery-1.9.1.min.js"></script>
	    <script src="../js/fastclick.js"></script>
		<script src="../js/slick.min.js"></script>
		
		<script src="../js/rem.js"></script>
		<script src="../js/basic.js"></script>
		<script src="../js/swiper.jquery.min.js"></script>
		<script>
			$(function() {
				$('.autoplay').slick({
				  slidesToScroll: 1,
				  autoplay: true,
				  autoplaySpeed: 2000,
				   dots:true,
				});
			});
		</script>
		<script >
		    $(function () {
		        var banner = new Swiper('.banner',{
		            autoplay: 5000,
		            pagination : '.swiper-pagination',
		            paginationClickable: true,
		            lazyLoading : true,
		            loop:true
		        });		
		    });
		</script>
	</body>
</html>