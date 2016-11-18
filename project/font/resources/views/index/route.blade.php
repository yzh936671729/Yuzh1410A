<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="../css/slick.css" />
		<link rel="stylesheet" type="text/css" href="../css/base.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/iconfont/iconfont.css" />
		<style type="text/css">
		body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
		#l-map{height:300px;width:100%;}
		#r-result,#r-result table{width:100%;font-size:12px;}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=nWXG1DkZF9XY6OoyYGuuheWXNxncyiLE"></script>
			<style type="text/css">
		#allmap{width: 50%;height: 50%;margin:0;font-family:"微软雅黑";font-size:14px;}
		/* #allmap {width:100%;height:500px;} */
	</style>
			<title>到校路线</title>
		<body style="background: #eee;">
			<div class="header">
				<span>到校路线</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="../img/self-report.png">
			</div>
			<div class="contain">
				<div class="route-box">
					<div class="content-top">
						<ul>
							<li>
								<span class="route-icon"><i class="iconfont icon-map"></i></span>
								<span class="route-word">我的位置：<input type="text" name= "u_zdizhi" id="dizhi"></span>
							</li>
							<li>
								<span class="route-icon"><i class="iconfont icon-zhandian"></i></span>
								<span class="route-word">终点：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="u_zhong" id="zhong"></span>
							</li>
							<li>
								<span class="route-icon"><i class="iconfont icon-tel"></i></span>
								<span class="route-word">站点联系电话：13酒红酒白葡萄酒</span>
							</li>
                            <li>
                        		  <div id="l-map"></div>
								  <div id="r-result"></div>
                            </li>
						</ul>
					</div>
					<!-- <div class="content-bottom">
                         <ul>
							<li>
								<span class="route-icon">线路一：</span>
								<span class="route-word">乘坐31路车在芙蓉路公交v站下再转150路公交在芳菲路口下;</span>
							</li>
							<li>
								<span class="route-icon">线路一：</span>
								<span class="route-word">乘坐31路车在芙蓉路公交v站下再转150路公交在芳菲路口下;</span>
							</li>
							<li>
								<span class="route-icon">线路一：</span>
								<span class="route-word">乘坐31路车在芙蓉路公交v站下再转150路公交在芳菲路口下;</span>
							</li>
							<li>
								<span class="route-icon">线路一：</span>
								<span class="route-word">乘坐31路车在芙蓉路公交v站下再转150路公交在芳菲路口下;</span>
							</li>
							<li>
								<span class="route-icon">线路一：</span>
								<span class="route-word">乘坐31路车在芙蓉路公交v站下再转150路公交在芳菲路口下;</span>
							</li>
						</ul>
					</div> -->
				</div>
			</div>

			<script src="../js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="../js/basic.js"></script>
			<script type="text/javascript" src="../js/rem.js"></script>
			<script type="text/javascript" src="../route.js"></script>
		</body>
</html>