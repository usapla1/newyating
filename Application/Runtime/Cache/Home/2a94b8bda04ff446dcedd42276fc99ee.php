<?php if (!defined('THINK_PATH')) exit();?><!-- 页面header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <script id="allmobilize" charset="utf-8" src="<?php echo C('Base_Url');?>js/allmobilize.min.js"></script>
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate" media="handheld"  />
    <!-- end 云适配 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>浙江财经大学招聘平台信息系统</title>
    <meta property="qc:admins" content="23635710066417756375" />
    <meta content="浙江财经大学招聘平台信息系统" name="description">
    <meta content="浙江财经大学招聘平台信息系统" name="keywords">
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

    <!-- <div class="web_root"  style="display:none">h</div> -->
    <script type="text/javascript">
        var ctx = "h";
        console.log(1);
    </script>

    <link rel="Shortcut Icon" href="<?php echo C('Base_Url');?>images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo C('Base_Url');?>css/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo C('Base_Url');?>css/external.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo C('Base_Url');?>css/popup.css"/>
    <script src="<?php echo C('Base_Url');?>js/jquery.1.10.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo C('Base_Url');?>js/jquery.lib.min.js"></script>
    <script src="<?php echo C('Base_Url');?>js/ajaxfileupload.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo C('Base_Url');?>js/additional-methods.js"></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="<?php echo C('Base_Url');?>style/js/excanvas.js"></script>
    <![endif]-->
    <style type="text/css">
        * {
            padding: 0px;
            margin: 0px;
        }
        a {
            text-decoration: none;
        }
        ul {
            list-style: outside none none;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            var length,
                    currentIndex = 0,
                    interval,
                    hasStarted = false, //是否已经开始轮播
                    t = 3000; //轮播时间间隔
            length = $('.slider-panel').length;
            //将除了第一张图片隐藏
            $('.slider-panel:not(:first)').hide();
            //将第一个slider-item设为激活状态
            $('.slider-item:first').addClass('slider-item-selected');
            //隐藏向前、向后翻按钮
            $('.slider-page').hide();
            //鼠标上悬时显示向前、向后翻按钮,停止滑动，鼠标离开时隐藏向前、向后翻按钮，开始滑动
            $('.slider-panel, .slider-pre, .slider-next').hover(function() {
                stop();
                $('.slider-page').show();
            }, function() {
                $('.slider-page').hide();
                start();
            });
            $('.slider-item').hover(function(e) {
                stop();
                var preIndex = $(".slider-item").filter(".slider-item-selected").index();
                currentIndex = $(this).index();
                play(preIndex, currentIndex);
            }, function() {
                start();
            });
            $('.slider-pre').unbind('click');
            $('.slider-pre').bind('click', function() {
                pre();
            });
            $('.slider-next').unbind('click');
            $('.slider-next').bind('click', function() {
                next();
            });
            /**
             * 向前翻页
             */
            function pre() {
                var preIndex = currentIndex;
                currentIndex = (--currentIndex + length) % length;
                play(preIndex, currentIndex);
            }
            /**
             * 向后翻页
             */
            function next() {
                var preIndex = currentIndex;
                currentIndex = ++currentIndex % length;
                play(preIndex, currentIndex);
            }
            /**
             * 从preIndex页翻到currentIndex页
             * preIndex 整数，翻页的起始页
             * currentIndex 整数，翻到的那页
             */
            function play(preIndex, currentIndex) {
                $('.slider-panel').eq(preIndex).fadeOut(500)
                        .parent().children().eq(currentIndex).fadeIn(1000);
                $('.slider-item').removeClass('slider-item-selected');
                $('.slider-item').eq(currentIndex).addClass('slider-item-selected');
            }
            /**
             * 开始轮播
             */
            function start() {
                if(!hasStarted) {
                    hasStarted = true;
                    interval = setInterval(next, t);
                }
            }
            /**
             * 停止轮播
             */
            function stop() {
                clearInterval(interval);
                hasStarted = false;
            }
            //开始轮播
            start();
        });
        
    </script>
    <script type="text/javascript">
        var youdao_conv_id = 271546;
    </script>
    <script type="text/javascript" src="<?php echo C('Base_Url');?>js/conv.js"></script>
</head>

<body>
<div id="body">
	<div id="header">
    	<div class="wrapper">
    		<a  href="<?php echo U('Index/index');?>" class="logo">
    			<img src="<?php echo C('Base_Url');?>images/logo4.png" width="400" height="83" alt="招聘" />
    		</a>
    		<div class="searchBox">
    			<form id="searchForm" name="searchForm" action="http://127.0.0.1/newfish/index.php/Home/Index/search/" method="get">
			        <input type="text" id="search_input" name = "work_title"  tabindex="1" value=""  placeholder="请输入职位名称，如：产品经理,程序员"  />
	                <input type="submit" id="search_button" value="搜索" />
	            </form>
    		</div>
        </div>
    </div><!-- end #header -->
    	    <div class="sliderbar">
	    	<!-- 图片轮播 -->
			 <div class="slider"> 
			  <ul class="slider-main"> 
			   <li class="slider-panel"> 
			    <a href="" target="_blank"><img alt="" title="" src="<?php echo C('Base_Url');?>images/head1.png"></a>
			   </li> 
			   <li class="slider-panel"> 
			    <a href="" target="_blank"><img alt="" title="" src="<?php echo C('Base_Url');?>images/head2.png"></a>
			   </li> 
			  </ul> 
			  <div class="slider-extra"> 
			   <ul class="slider-nav"> 
			    <li class="slider-item">1</li> 
			    <li class="slider-item">2</li> 
			   </ul> 
			   <div class="slider-page"> 
			    <a class="slider-pre" href="javascript:;;"><</a> 
			    <a class="slider-next" href="javascript:;;">></a> 
			   </div> 
			  </div>
			  </div>
	    </div>
	    <!--end -->
	<div id="container" >
		<div class="content">
			<style>
			.ui-autocomplete{width:488px;background:#fafafa !important;position: relative;z-index:10;border: 2px solid #91cebe;}
			.ui-autocomplete-category{font-size:16px;color:#999;width:50px;position: absolute;z-index:11; right: 0px;/*top: 6px; */text-align:center;border-top: 1px dashed #e5e5e5;padding:5px 0;}
			.ui-menu-item{ *width:439px;vertical-align: middle;position: relative;margin: 0px;margin-right: 50px !important;background:#fff;border-right: 1px dashed #ededed;}
			.ui-menu-item a{display:block;overflow:hidden;}
			</style>
			<script type="text/javascript" src="js/search.min.js"></script>
			<dl class="company_center_content">
                <dt>
                    <h1><em></em>最新职位</h1>
                </dt>
                <dd>
			            <ul class="reset my_jobs">
                         <?php if(is_array($lists2)): $i = 0; $__LIST__ = $lists2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form id="searchForm" action="<?php echo U('Resume/sendresume');?>" method="post">
                          <input type="hidden" value="<?php echo ($vo["workid"]); ?>" name="workid">
                          <input type="hidden" value="<?php echo ($vo["work_title"]); ?>" name="work_title">
				            <li data-id="149594">
		                        <h3>
		                            <a target="_blank"  href="http://127.0.0.1/newfish/index.php/Home/Work/workinfo/workid/<?php echo ($vo["workid"]); ?>"><?php echo ($vo["work_title"]); ?></a>
		                            <span>[<?php echo ($vo["workaddress"]); ?>]</span>
		                        </h3>
		                        <span class="receivedResumeNo">
		                            <a href="unHandleResumes.html?positionId=149594">应聘简历(<?php echo ($vo["count"]); ?>)</a>
		                        </span>
		                        <div><?php echo ($vo["positionname"]); ?>/ <?php echo ($vo["salarymin"]); ?>k-<?php echo ($vo["salarymax"]); ?>k / <?php echo ($vo["workyear"]); ?>年 / <?php echo ($vo["education"]); ?>及以上</div>
		                        <div class="c9" style="font-size: 14px;">发布时间： <?php echo ($vo["create_time"]); ?></div>
								<div class="links">
                                 <input type="submit" class="job_del" value="投递">
								</div>
		                    </li>
                    </form><?php endforeach; endif; else: echo "" ;endif; ?>
	                    </ul>
		        </dd>
            </dl>
            <dl class="company_center_content">
                <dt>
                    <h1><em></em>最新简历</h1>
                </dt>
                <dd>
			            <ul class="reset my_jobs">
                         <?php if(is_array($lists2)): $i = 0; $__LIST__ = $lists2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form id="searchForm" action="<?php echo U('Resume/sendresume');?>" method="post">
                          <input type="hidden" value="<?php echo ($vo["workid"]); ?>" name="workid">
                          <input type="hidden" value="<?php echo ($vo["work_title"]); ?>" name="work_title">
				            <li data-id="149594">
		                        <h3>
		                            <a target="_blank"  href="http://127.0.0.1/newfish/index.php/Home/Work/workinfo/workid/<?php echo ($vo["workid"]); ?>"><?php echo ($vo["work_title"]); ?></a>
		                            <span>[<?php echo ($vo["workaddress"]); ?>]</span>
		                        </h3>
		                        <span class="receivedResumeNo">
		                            <a href="unHandleResumes.html?positionId=149594">应聘简历(<?php echo ($vo["count"]); ?>)</a>
		                        </span>
		                        <div><?php echo ($vo["positionname"]); ?>/ <?php echo ($vo["salarymin"]); ?>k-<?php echo ($vo["salarymax"]); ?>k / <?php echo ($vo["workyear"]); ?>年 / <?php echo ($vo["education"]); ?>及以上</div>
		                        <div class="c9" style="font-size: 14px;">发布时间： <?php echo ($vo["create_time"]); ?></div>
								<div class="links">
                                 <input type="submit" class="job_del" value="投递">
								</div>
		                    </li>
                    </form><?php endforeach; endif; else: echo "" ;endif; ?>
	                    </ul>
		        </dd>
            </dl>
	    </div>
	    <div id="sidebar">
			<div class="mainNavs">
				<div class="menu_box">
					<div class="menu_main">
						<a class="sidebarHref" href="<?php echo U('Register/index');?>" title="快速注册"><h2>快速注册<span></span></h2></a>
					</div>
				</div>
				<div class="menu_box">
					<div class="menu_main">
						<a class="sidebarHref" href="<?php echo U('Login/index');?>" title="个人用户登录"><h2>普通用户登录<span></span></h2></a>
					</div>
				</div>
				<div class="menu_box">
					<div class="menu_main">
						<a class="sidebarHref" href="<?php echo U('Login/index');?>" title="企业用户登陆"><h2>管理员登陆<span></span></h2></a>
					</div>
				</div>
			</div>			
			<div class="urgent-block" id="emergencybox">
				<div class="urgent-title clearfix">
					<h4 class="f-left">新闻公告</h4>
					<a href="" class="underline f-right" target="_blank" style="position:relative;right: -100px">更多&gt;&gt;</a>
				</div>
				<ul class="urgent-list">	
					<li class="clearfix">
					    <a href="" class="u-com f-left underline" target="_blank">1.淮南恩杰教育咨询有限公司</a>
					    <a href="" class="u-job f-left underline" title="幼儿教师" target="_blank">幼儿教师</a>
					</li>
					<li class="clearfix">
					    <a href="" class="u-com f-left underline" target="_blank">1.淮南恩杰教育咨询有限公司</a>
					    <a href="" class="u-job f-left underline" title="幼儿教师" target="_blank">幼儿教师</a>
					</li>
					<li class="clearfix">
					    <a href="" class="u-com f-left underline" target="_blank">1.淮南恩杰教育咨询有限公司</a>
					    <a href="" class="u-job f-left underline" title="幼儿教师" target="_blank">幼儿教师</a>
					</li>
					<li class="clearfix">
					    <a href="" class="u-com f-left underline" target="_blank">1.淮南恩杰教育咨询有限公司</a>
					    <a href="" class="u-job f-left underline" title="幼儿教师" target="_blank">幼儿教师</a>
					</li>
					<li class="clearfix">
					    <a href="" class="u-com f-left underline" target="_blank">1.淮南恩杰教育咨询有限公司</a>
					    <a href="" class="u-job f-left underline" title="幼儿教师" target="_blank">幼儿教师</a>
					</li>
					<li class="clearfix">
					    <a href="" class="u-com f-left underline" target="_blank">1.淮南恩杰教育咨询有限公司</a>
					    <a href="" class="u-job f-left underline" title="幼儿教师" target="_blank">幼儿教师</a>
					</li>
				</ul>
			</div>

			<div class="mainNavs" style="margin-top:20px; ">
				<div class="menu_box">
					<div class="menu_main">
						<a class="sidebarHref" title="联系我们"><h2>联系我们</h2></a>
					</div>
				</div>
				<div class="menu_main">
				    <p>浙江财经大学校务处</p>
				    <p>电话：123456789</p>
				    <p>邮箱：123456789@qq.com</p>
					<p>地址：杭州+++++++++ </p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 页面footer -->
<div id="footer">
    <div class="wrapper">
        <a href="#" target="_blank" rel="nofollow">联系我们</a>
        <a href="#" target="_blank">学校首页</a>
        <div class="copyright">&copy;2015-2016 <a target="_blank" href="#">京ICP备11111111号-1</a></div>
    </div>
</div>
<div class="back_to_top" id="back_to_top">
	<div class="back">
		<div style="display: none;">回到顶部</div>
	</div>
</div>
<!-- 返回顶部 -->
<script>
	$(function(){
		//回到顶部组件出现设置
		$(window).scroll(function(){
			if($(window).scrollTop()>200){
				$(".back").fadeIn(400);
			}else{
				$(".back").fadeOut(400);
			}
		})

		//回到顶部hover效果
		$(".back_to_top .back, .steer, .sub").hover(function(){
			$(this).find("div").css("display","block");
		},function(){
			$(this).find("div").css("display","none");
		})

		//设置滚回顶部方法
		$(".back").click(function(){
			$("body,html").animate({scrollTop:0}, 500);
			return false;
		})
	});
</script>
</body>
</html>