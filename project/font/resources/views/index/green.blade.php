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
		<title>绿色通道</title>
		<body>
			<div class="header">
				<span>绿色通道</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="../img/self-report.png">
			</div>
			<div class="contain">
				<ul class="dorm-book">
					<li class="state-box">
						申请状态：
						<span class="state-img"><img src="../img/state.png"></span>
						<span class="state">审核通过</span>
					</li>
				</ul>
<!-- 				<ul class="dorm-book mt3">
					<li>
						<div class="show-btn">
							<span class="book-tit">申请类型</span>
							<input type="text" name="name" placeholder="请选择您的申请类型" disabled="disabled" />
						</div>
						<div class="checkshow">
							<h4 class="ta-center">申请类型</h4>
							<p class="checked">缓交学费</p>
							<p>助学贷款</p>
							<p>免交学费</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul> -->
				<div class="greenway">
					<ul class="hd clearfix">
						<li class="active">个人信息</li>
						<li>家庭情况</li>
						<li>申请原因</li>
						<li>证明材料</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit">姓名</span>
									<input type="text" name="name" id="name" placeholder="请输入姓名" />
									<div class="sex">
										<input type="radio" name="sex" id="sex" value="男">男
										<input type="radio" name="sex" id="sex" value="女">女
									</div>
								</li>
								<li>
									<span class="book-tit">民族</span>
									<input type="text" name="national" id="national" placeholder="请填写您的民族类别" />
								</li>
								<li>
									<span class="book-tit">手机</span>
									<input type="text" name="phone" id="phone" placeholder="请填写您的个人手机号码" />
								</li>
								<li>
									<span class="book-tit">出生年月</span>
									<input type="text" name="birthday" id="birthday" placeholder="请填写您的出生日期" />
								</li>
								<li>
									<span class="book-tit">身份证号</span>
									<input type="text" name="card" id="card" placeholder="请填写您的身份证号码" />
								</li>
								<li>
									<span class="book-tit">联系手机</span>
									<input type="text" name="phone2" id="phone2" placeholder="请填写您的手机联系号码" />
								</li>
								<!-- <li>
									<div class="show-btn">
										<span class="book-tit">户籍类型</span>
										<input type="text" name="name" placeholder="请选择您的户籍类型" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow">
										<h4 class="ta-center">户籍类型</h4>
										<p class="checked">是</p>
										<p>否</p>
										<span class="close">关闭</span>
									</div>
								</li>
								<li>
									<div class="show-btn">
										<span class="book-tit">政治面貌</span>
										<input type="text" name="name" placeholder="请选择您的政治面貌" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow">
										<p class="checked">群众</p>
										<p>团员</p>
										<p>党员</p>
										<span class="close">关闭</span>
									</div>
								</li> -->
								<li>
									<a>
										<span class="book-tit">居住地址</span>
										<input type="text" name="live_address" id="live_address" placeholder="请所在地地址" />
									</a>
									<span class="goin"><i class="iconfont icon-right"></i></span>
								</li>
								<li>
									<span class="book-tit">详细地址</span>
									<input type="text" name="detailed_address" id="detailed_address" placeholder="请填写您的详细地址" />
								</li>
							</ul>
						</div>
						<div>
							<ul class="dorm-book">
								<li>
									<span class="book-tit house">家庭成员1</span>
									<input type="text" name="family_member_one" id="family_member_one" placeholder="请填写家庭成员1的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="relation_one" id="relation_one" placeholder="请填写您与家庭成员1的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="work_units_one" id="work_units_one" placeholder="请填写家庭成员1的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="year_money_one" id="year_money_one" placeholder="请填写家庭成员1的年收入情况" class="house-input" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员2</span>
									<input type="text" name="family_member_two" id="family_member_two" placeholder="请填写家庭成员2的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="relation_two" id="relation_two" placeholder="请填写您与家庭成员2的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="work_units_two" id="work_units_two" placeholder="请填写家庭成员2的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="year_money_two" id="year_money_two" placeholder="请填写家庭成员2的年收入情况" class="house-input" />
								</li>
							</ul>
							<ul class="dorm-book mt3">
								<li>
									<span class="book-tit house">家庭成员3</span>
									<input type="text" name="family_member_three" id="family_member_three" placeholder="请填写家庭成员3的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="relation_three" id="relation_three" placeholder="请填写您与家庭成员3的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="work_units_three" id="work_units_three" placeholder="请填写家庭成员3的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="year_money_three" id="year_money_three" placeholder="请填写家庭成员3的年收入情况" class="house-input" />
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea name="reason" id="reason" placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
						</div>
						<div class="prove clearfix">
							<p>
							    <span><img src="../img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
								<p>
							    <span><img src="../img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
						</div>
					</div>
				</div>
				</div>
				<div class="step-btn">
					<a href="green" class="ta-center db" id="button">提交</a>
				</div>
			<div class="cover-bg"></div>
			<script src="../js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="../js/basic.js"></script>
			<script type="text/javascript" src="../js/rem.js"></script>
		</body>

</html>
<script src="jquery-1.9.1.min.js"></script>
<script src="../jsonp.js"></script>
<script>
	$("#button").click(function(){
		var name = $("#name").val();
		var sex = $("#sex").val();
		var national = $("#national").val();
		var phone = $("#phone").val();
		var birthday = $("#birthday").val();
		var card = $("#card").val();
		var phone2 = $("#phone2").val();
		var live_address = $("#live_address").val();
		var detailed_address = $("#detailed_address").val();
		var family_member_one = $("#family_member_one").val();
		var relation_one = $("#relation_one").val();
		var work_units_one = $("#work_units_one").val();
		var year_money_one = $("#year_money_one").val();
		var family_member_two = $("#family_member_two").val();
		var relation_two = $("#relation_two").val();
		var work_units_two = $("#work_units_two").val();
		var year_money_two = $("#year_money_two").val();
		var family_member_three = $("#family_member_three").val();
		var relation_three = $("#relation_three").val();
		var work_units_three = $("#work_units_three").val();
		var year_money_three = $("#year_money_three").val();
		var reason = $("#reason").val();
		var data = {name:name,sex:sex,national:national,phone:phone,
				birthday:birthday,card:card,phone2:phone2,live_address:live_address,
				detailed_address:detailed_address,family_member_one:family_member_one,
				relation_one:relation_one,work_units_one:work_units_one,
				year_money_one:year_money_one,family_member_two:family_member_two,
				relation_two:relation_two,work_units_two:work_units_two,
				year_money_two:year_money_two,family_member_three:family_member_three,
				relation_three:relation_three,work_units_three:work_units_three,
				year_money_three:year_money_three,reason:reason};
		var arr = jsonp('information_add',data);
	})
</script>