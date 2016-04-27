<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb"><head>
    </script><script type="text/javascript" async="" src="<?php echo C('Base_Url');?>js/conversion.js"></script>
    <script src="<?php echo C('Base_Url');?>js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script><style type="text/css"></style>
    <meta content="no-siteapp" http-equiv="Cache-Control">
    <link  media="handheld" rel="alternate">
    <!-- end 云适配 -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>浙江新安化工集团网上招聘平台信息系统</title>
    <meta property="qc:admins" content="23635710066417756375" />
    <meta content="浙江新安化工集团网上招聘平台信息系统" name="description">
    <meta content="浙江新安化工集团网上招聘平台信息系统" name="keywords">
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

    <!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> -->
    <script type="text/javascript">
        var ctx = "http://www.lagou.com";
        console.log(1);
    </script>
    <link href="<?php echo C('Base_Url');?>/images/favicon.ico" rel="Shortcut Icon">
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
    <style type="text/css">

    </style>
    <link rel="stylesheet" href="<?php echo C('Base_Url');?>css/ui.css"><link rel="stylesheet" href="<?php echo C('Base_Url');?>css/window.css">
</head>
<body>
<div id="body">
	<div id="header">
		<div class="wrapper">
			<a href="index.html" class="logo" style="margin: 10px auto">
                <img src="<?php echo C('Base_Url');?>images/logo4.png" width="400" height="83" alt="招聘" />
            </a>
			<ul id="navheader" class="reset">
				<li><a href="<?php echo U('Index/index');?>">首页</a></li>
				<li class="current"><a rel="nofollow" href="<?php echo U('User/index');?>">个人中心</a></li>
			</ul>
			<dl class="collapsible_menu">
				<dt>
					<span><?php echo ($user); ?>&nbsp;</span>
					<span class="red dn" id="noticeDot-1"></span>
					<i></i>
				</dt>
				<dd><a rel="nofollow" href="Individual.html">我的简历</a></dd>
				<dd style="display: none;"><a href="<?php echo U('Index/index');?>">我要找工作</a></dd>
				<dd class="logout" style="display: none;"><a rel="nofollow" href="<?php echo U('Index/logout');?>">退出</a></dd>
		</div>
	</div><!-- end #header -->
	<div id="container">
		<div class="sidebar">
			<dl class="company_center_aside">
				<dt><h3>个人中心</h3></dt>
				<dd><a href="<?php echo U('User/index');?>">个人信息</a></dd>
				<dd><a href="<?php echo U('Resume/index');?>">我的简历</a></dd>
				<dd><a href="<?php echo U('User/apply');?>">申请记录</a></dd>
				<dd><a href="<?php echo U('User/feedback');?>">人事反馈</a></dd>
			</dl>
		</div><!-- end .sidebar -->
		<div class="content">
			<dl class="company_center_content">
				<dt>
				<h1>
					<em></em>
					我的简历
				</h1>
				</dt>
				<dd>
					<!--表单提交简历-->
					<form action="<?php echo U('Resume/edit');?>" method="post" id="jobForm">
						<input type="hidden" value="" name="id">
						<input type="hidden" value="create" name="preview">
						<input type="hidden" value="25927" name="companyId">
						<input type="hidden" value="c29d4a7c35314180bf3be5eb3f00048f" name="resubmitToken">
						<table class="btm">
							<tbody><tr>
								<td width="25"><span class="redstar">*</span></td>
								<td>姓名</td>
								<td>
									<input type="text" placeholder="5555：男" value="<?php echo ($list["username"]); ?>" name="name" id="tName" readonly>
								</td>
							</tr>
							<tr>
								<td><span class="redstar">*</span></td>
								<td>性别</td>
								<td>
									<input type="text" placeholder="请输入性别，如：男" value="<?php echo ($list["sex"]); ?>" name="sex" id="sex">
								</td>
							</tr>
							<tr>
								<td><span class="redstar">*</span></td>
								<td>民族</td>
								<td>
									<input type="text" placeholder="请输入民族，如：汉族" value="<?php echo ($list["hunyin"]); ?>" name="mingzhu" id="nation">
								</td>
							</tr>
							<tr>
								<td><span class="redstar">*</span></td>
								<td>婚否</td>
								<td>
									<input type="text" placeholder="未婚/已婚" value="<?php echo ($list["hunyin"]); ?>" name="hunyin" id="married">
								</td>
							</tr>
							<tr>
								<td><span class="redstar">*</span></td>
								<td>政治面貌</td>
								<td>
									<input type="text" placeholder="请输入党员/团员/其他" value="<?php echo ($list["shenfen"]); ?>" name="shenfen" id="landscape">
								</td>
							</tr>
							<tr>
								<td><span class="redstar">*</span></td>
								<td>籍贯</td>
								<td>
									<input type="text" placeholder="请输入籍贯，如：浙江杭州" value="<?php echo ($list["jiguan"]); ?>" name="jiguan" id="Birthplace">
								</td>
							</tr>
							<tr>
								<td><span class="redstar">*</span></td>
								<td>现居地</td>
								<td>
									<input type="text" placeholder="请输入现在居住的地址" value="<?php echo ($list["adress"]); ?>" name="adress" id="address">
								</td>
							</tr>
							<tr>
								<td><span class="redstar">*</span></td>
								<td>手机号码</td>
								<td>
									<input type="text" placeholder="请输入手机号码" value="<?php echo ($list["telphone"]); ?>" name="telphone" id="phoneNumber" readonly>
								</td>
							</tr>
							<tr>
								<td><span class="redstar">*</span></td>
								<td>邮箱</td>
								<td>
									<input type="text" placeholder="请输入可用邮箱" value="<?php echo ($list["email"]); ?>" name="email" id="mailaddress" readonly>
								</td>
							</tr>
							</tbody></table>

						<table class="btm">
							<tbody>
							<tr>
								<td><span class="redstar">*</span></td>
								<td>教育经历</td>
								<!--<h3><span>(最高月薪不能大于最低月薪的2倍)</span></h3> -->
								<td>
									<input type="text" placeholder="请输入学校及最高学历，如：浙江财经大学，本科" value="<?php echo ($list["edu"]); ?>" name="edu" id="education">
								</td>
							</tr>
							<tr>
								<td></td>
								<td>获奖情况</td>
								<td>
									<input type="text" placeholder="如：2016/6/6获得优秀毕业设计；多项奖项请使用分号隔开" value="<?php echo ($list["reward"]); ?>" name="reward" id="honors">
								</td>
							</tr>
							</tbody></table>

						<table class="btm">
							<tbody><tr>
								<td width="25"></td>
								<td width="85">工作经历</td>
								<td>
									<input type="text" placeholder="如：2015/6/6~2016/6/6 浙江新安化工集团 会计(实习)；多段工作经历请使用分号隔开" value="<?php echo ($list["work"]); ?>" name="work" id="experience">
								</td>
							</tr>
							<tr>
								<td><span class="redstar">*</span></td>
								<td>掌握技能</td>
								<td>
									<input type="text" placeholder="如：C;C++;Java;Word多段工作经历请使用分号隔开" value="<?php echo ($list["skill"]); ?>" name="skill" id="skill">
								</td>
							</tr>
							</tbody></table>

						<table class="btm">
							<tbody><tr>
								<td width="25"><span class="redstar">*</span></td>
								<td width="85">自我评价</td>
								<td>
									<input type="text" placeholder="20字描述自己的优点" value="<?php echo ($list["selftalk"]); ?>" name="selftalk" class="input_520" id="point">
								</td>
							</tr>
							<tr>
								<td><span class="redstar">*</span></td>
								<td>职业规划</td>
								<td>
									<input type="text" placeholder="描述自己以后的职业目标" value="<?php echo ($list["hopework"]); ?>" name="hopework" class="input_520" id="target">
								</td>
							</tr>
							</tbody></table>

						<table>
							<tbody><tr>
								<td width="25"><span class="redstar">*</span></td>
								<td colspan="2">
									接收简历邮箱：
									<input type="text" value="<?php echo ($list["email"]); ?>" id="receiveEmail" name="email">
								</td>
							</tr>
							<tr>
								<td width="25"></td>
								<td colspan="2">
									同时简历自动发送至邮箱（仅一个）
									<input type="text" value="" id="forwardEmail" name="forwardEmail">
									<!-- <span class="error" id="beError" style="display:none"></span> -->
								</td>
							</tr>
							<tr>
								<td width="25"></td>
								<td colspan="2">
									<input type="submit" value="保存" id="jobPreview" class="btn_32">
								</td>
							</tr>
							</tbody>
						</table>
					</form>
				</dd>
			</dl>
		</div><!-- end .content -->
			<div class="clear"></div>
			<a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
		</div><!-- end #container -->
	</div><!-- end #body -->
<div id="footer">
    <div class="wrapper">
        <a href="#" target="_blank" rel="nofollow">联系我们</a>
        <a href="#" target="_blank">互联网公司导航</a>
        <a href="#" target="_blank" rel="nofollow">新安微博</a>
        <a class="footer_qr" href="#" rel="nofollow">新安微信<i></i></a>
        <div class="copyright">&copy;2015-2016 Xinan <a target="_blank" href="#">京ICP备11111111号-1</a></div>
    </div>
</div>
<script src="<?php echo C('Base_Url');?>js/core.min.js" type="text/javascript"></script>
<script src="<?php echo C('Base_Url');?>js/popup.min.js" type="text/javascript"></script>
<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
    <div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div>
        <div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div>
        <div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div>
            <button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button>
            <button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div>
            <div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div>
    </div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div>
        <div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;">

</div></div></body></html>