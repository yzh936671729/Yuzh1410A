<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="../css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="../css/base.css"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css"/>
  <link rel="stylesheet" type="text/css" href="../css/iconfont/iconfont.css"/>
  <title>个人信息</title>
	<body>
		<div class="header">
			<span>个人信息</span>
			<a href="user_center" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon">2</span>
    			<p>宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon">3</span>
    			<p>抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="../img/pro-line4.png"></span>
		</div>
		<ul class="dorm-book">
			<li class="upload-head ta-center">
				<span>
					<img src="../img/take-photo.png">
					<input type="file" />
				</span>
				<p>上传头像</p>
			</li>
			<li>
			    <span class="book-tit">姓名</span>
			    <input type="text" name="name" id="name" placeholder="请输入姓名" /> 
			    <div class="sex">
			    	<input type="radio" name="sex" id="sex" value="男">男
			    	<input type="radio" name="sex" id="sex" value="女">女
			    </div>
			</li>
			<li>
				<span class="book-tit">邮箱</span>
		        <input type="text" name="email" id="email" placeholder="请填写您的个人邮箱地址" />  
			</li>
			<li>
				<span class="book-tit">手机</span>
		        <input type="text" name="phone" id="phone" placeholder="请填写您的个人手机号码" />  
			</li>
			<li>
				<span class="book-tit">家庭主机</span>
		        <input type="text" name="family_phone" id="family_phone" placeholder="请填写您的家庭主机号码" />  
			</li>
			<li>
				<span class="book-tit">移动电话</span>
		        <input type="text" name="mobile_phone" id="mobile_phone" placeholder="请填写您的家庭移动电话号码" />  
			</li>
			<!-- <li>
				<div class="show-btn">
					<span class="book-tit">户口迁移</span>
			        <input type="text" name="account_migration" placeholder="请选择户口是否迁移" disabled="disabled" />  
		       </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow">
		        	<p class="checked">是</p>
		        	<p>否</p>
		        </div>
			</li> -->
			<!-- <li>
				<div class="show-btn">
				<span class="book-tit">党员关系</span>
		        <input type="text" name="name" placeholder="请选择您的政治面貌" disabled="disabled" />  
		       </div>
		        <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow">
		        	<p class="checked">群众</p>
		        	<p>团员</p>
		        	<p>党员</p>
		        </div>
			</li> -->
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人1电话</span>
			    <input type="text" name="linkman_phone_one" id="linkman_phone_one" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" name="client_relation_one" id="client_relation_one" placeholder="请填写您与联系人1的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">紧急联系人2电话</span>
			    <input type="text" name="linkman_phone_two" id="linkman_phone_two" placeholder="请输入姓名" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" name="client_relation_two" id="client_relation_two" placeholder="请填写您与联系人2的关系" />  
			</li>
		</ul>
		<ul class="contact-box">
			<li>
			    <span class="book-tit">所在地地址</span>
			    <input type="text" name="address" id="address" placeholder="所在地地址"/> 
			    <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">详细地址</span>
		        <input type="text" name="full_address" id="full_address" placeholder="请填写您的详细地址" />  
			</li>
		</ul>
		<div class="step-btn">
				<a href="dorm_book" class="ta-center db" id="button">下一步</a>
		</div>
  <script src="../js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="../js/basic.js"></script>	
  <script type="text/javascript" src="../js/rem.js"></script>	
	</body>
</html>
<script src="../jsonp.js"></script>
<script>
	$("#button").click(function(){
		var name = $("#name").val();
		var sex = $("#sex").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var family_phone = $("#family_phone").val();
		var mobile_phone = $("#mobile_phone").val();
		var linkman_phone_one = $("#linkman_phone_one").val();
		var client_relation_one = $("#client_relation_one").val();
		var linkman_phone_two = $("#linkman_phone_two").val();
		var client_relation_two = $("#client_relation_two").val();
		var address = $("#address").val();
		var full_address = $("#full_address").val();
		var data = {name:name,sex:sex,email:email,phone:phone,family_phone:family_phone,mobile_phone:mobile_phone,linkman_phone_one:linkman_phone_one,client_relation_one:client_relation_one,linkman_phone_two:linkman_phone_two,client_relation_two:client_relation_two,address:address,full_address:full_address};
		var arr = jsonp('myself_add',data);
	})
</script>