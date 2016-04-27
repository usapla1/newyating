<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    </script><script type="text/javascript" async="" src="<?php echo C('Base_Url');?>js/conversion.js"></script>
    <script src="<?php echo C('Base_Url');?>js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script>
    <style type="text/css"></style>
    <meta content="no-siteapp" http-equiv="Cache-Control">
    <link  media="handheld" rel="alternate">
    <!-- end 云适配 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>浙江财经大学招聘平台信息系统--管理系统</title>
    <meta content="浙江财经大学招聘平台信息系统--管理系统" name="description">
    <meta content="浙江财经大学招聘平台信息系统--管理系统" name="keywords">
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

    <!-- <div class="web_root"  style="display:none">h</div> -->
    <script type="text/javascript">
        var ctx = "h";
        console.log(1);
    </script>
    <link href="<?php echo C('Base_Url');?>h/images/favicon.ico" rel="Shortcut Icon">
    <link href="<?php echo C('Base_Url');?>css/style.css" type="text/css" rel="stylesheet">
    <link href="<?php echo C('Base_Url');?>css/external.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo C('Base_Url');?>css/popup.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo C('Base_Url');?>js/jquery.1.10.1.min.js"></script>
    <script src="<?php echo C('Base_Url');?>js/jquery.lib.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo C('Base_Url');?>js/ajaxfileupload.js"></script>
    <script src="<?php echo C('Base_Url');?>js/additional-methods.js" type="text/javascript"></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="<?php echo C('Base_Url');?>js/excanvas.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var youdao_conv_id = 271546;
    </script>
    <script src="<?php echo C('Base_Url');?>js/conv.js" type="text/javascript"></script>
    <script src="<?php echo C('Base_Url');?>js/ajaxCross.json" charset="UTF-8"></script>
</head>

<body id="login_bg">
<div class="login_wrapper" >
	<div class="login_header">
		<a href="<?php echo U('Index/index');?>"><img src="<?php echo C('Base_Url');?>images/logo4.png" width="400" height="83" alt="招聘" /></a>
	</div>
	<div class="login_box" style="max-height: 530px; margin-top: -30px;">
		<form id="loginForm" action="<?php echo U('Register/register');?>" method="post">
			<input type="text" id="email" name="email" tabindex="1" placeholder="请输入常用邮箱地址" value=""/>
			<span class="error" style="display:none;" id="beError"></span>
			<input type="password" id="password" name="password" tabindex="2" placeholder="请输入密码" value=""/>
			<input type="password" id="password1" name="repassword" tabindex="3" placeholder="请确认密码" value=""/>
			<input type="text" id="name" name="username" tabindex="5" placeholder="请输入自己的真实姓名" value=""/>
			<input type="text" id="telphone" name="telphone" tabindex="6" placeholder="请输入手机号码" value=""/>
			<input type="text" id="user_date" name="user_date"  value="" placeholder="请输入出生年月如1990/11/09"/>
			<label class="fl registerJianJu" for="checkbox">
				<input type="checkbox" id="checkbox" name="checkbox" checked  class="checkbox valid" />我已阅读并同意<a href="h/privacy.html" target="_blank">《用户协议》</a>
			</label>
			<input type="submit" id="submitLogin" value="注 &nbsp; &nbsp; 册" />
			<input type = "hidden" name = "role" value = "1">
		</form>
		<div class="login_right">
			<div>已有帐号</div>
			<a  href="<?php echo U('Login/index');?>"  class="registor_now">直接登录</a>
		</div>
	</div>
	<div class="login_box_btm"></div>
</div>

<script type="text/javascript">

	$(document).ready(function(e) {
		$('.register_radio li input').click(function(e){
			$(this).parent('li').addClass('current').append('<em></em>').siblings().removeClass('current').find('em').remove();
		});

		$('#email').focus(function(){
			$('#beError').hide();
		});
		//验证表单
		$("#loginForm").validate({
			rules: {
				type:{
					required: true
				},
				email: {
					required: true,
					email: true
				},
				password: {
					required: true,
					rangelength: [6,16]
				},
				repassword: {
					required: true,
					rangelength: [6,16]
				},
				checkbox:{required:true}
			},
			messages: {
				type:{
					required:"请选择使用拉勾的目的"
				},
				email: {
					required: "请输入常用邮箱地址",
					email: "请输入有效的邮箱地址，如：vivi@lagou.com"
				},
				password: {
					required: "请输入密码",
					rangelength: "请输入6-16位密码，字母区分大小写"
				},
				repassword: {
					required: "请输入密码",
					rangelength: "请输入6-16位密码，字母区分大小写"
				},
				checkbox: {
					required: "请接受拉勾用户协议"
				}
			},
			errorPlacement:function(label, element){/*
			 if(element.attr("type") == "radio"){
			 label.insertAfter($(element).parents('ul')).css('marginTop','-20px');
			 }else if(element.attr("type") == "checkbox"){
			 label.inserresult.contenttAfter($(element).parent()).css('clear','left');
			 }else{
			 label.insertAfter(element);
			 } */
				/*modify nancy*/
				if(element.attr("type") == "radio"){
					label.insertAfter($(element).parents('ul')).css('marginTop','-20px');
				}else if(element.attr("type") == "checkbox"){
					label.insertAfter($(element).parent()).css('clear','left');
				}else{
					label.insertAfter(element);
				};
			},
		});
	});
</script>
</body>
</html>