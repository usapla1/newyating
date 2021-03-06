<?php
/**
 * Created by PhpStorm.
 * User: greatwall
 * Date: 2016/4/11
 * Time: 20:18
 */
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use Home\Common;
use Home\Controller\Base;
class UserController extends BaseController{
	//个人信息首页
	public function index()
	{
		if(empty($_SESSION['userid'])){
			$this->error("对不起，请先登录！",U('Login/index'),1);
		}
		if($_SESSION['role'] != 1 ){
			$this->error("对不起，您没有权限进入该页面！",U('Login/index'),1);
		}
		$map = array();
		$map['userid'] = $_SESSION['userid'];
		$UsersDao = M('Users');
		$list =  $UsersDao->where($map)->find();
		$user = $_SESSION['username'];
		$this->assign('user',$user);
		$this->assign('list',$list);
		$this->display();
	}

	//查看投递的简历
	public function apply()
	{
		if(empty($_SESSION['userid'])){
			$this->error("对不起，请先登录！",U('Login/index'),1);
		}
		if($_SESSION['role'] != 1 ){
			$this->error("对不起，您没有权限进入该页面！",U('Login/index'),1);
		}
		$map = array();
		$map['userid'] = $_SESSION['userid'];
		$SeekDao = M('Seek');
		$list =  $SeekDao->where($map)->select();
		$count = $SeekDao->where($map)->count();
		$user = $_SESSION['username'];
		$this->assign('user',$user);
		$this->assign('list',$list);
		$this->assign('count',$count);
		$this->display();
	}

	//人事反馈
	public function feedback()
	{
		if(empty($_SESSION['userid'])){
			$this->error("对不起，请先登录！",U('Login/index'),1);
		}
		if($_SESSION['role'] != 1 ){
			$this->error("对不起，您没有权限进入该页面！",U('Login/index'),1);
		}
		$userid = $_SESSION['userid'];
		$map = array();
		$map['cb_resume.userid'] = $userid;
		$MailsmsDao = M('Mailsms');
		$list = $MailsmsDao->join('cb_resume ON cb_mailsms.username = cb_resume.username')->where($map)->select();
		$count = $MailsmsDao->join('cb_resume ON cb_mailsms.username = cb_resume.username')->where($map)->count();
		$user = $_SESSION['username'];
		$this->assign('user',$user);
		$this->assign('list',$list);
		$this->assign('count',$count);
		$this->display();
	}

	//人事反馈记录删除
	public function fbdel()
	{
		if(empty($_SESSION['userid'])){
			$this->error("对不起，请先登录！",U('Login/index'),1);
		}
		if($_SESSION['role'] != 1 ){
			$this->error("对不起，您没有权限进入该页面！",U('Login/index'),1);
		}
		$mailsmsid = I('mailsmsid');
		$map = array();
		$map['mailsmsid'] = $mailsmsid;
		$MailsmsDao = M('Mailsms');
		$result = $MailsmsDao->where($map)->delete();
		if(!empty($result)){
			$this->success("删除成功");
		}else{
			$this->error("删除失败");
		}
	}

	//删除求职记录
	public function apdel()
	{
		if(empty($_SESSION['userid'])){
			$this->error("对不起，请先登录！",U('Login/index'),1);
		}
		if($_SESSION['role'] != 1 ){
			$this->error("对不起，您没有权限进入该页面！",U('Login/index'),1);
		}
		$seekid = I('seekid');
		$map = array();
		$map['seekid'] = $seekid;
		$MailsmsDao = M('Seek');
		$result = $MailsmsDao->where($map)->delete();
		if(!empty($result)){
			$this->success("删除成功");
		}else{
			$this->error("删除失败");
		}
	}
	//删除求职记录
	public function uppwd()
	{
		if(empty($_SESSION['userid'])){
			$this->error("对不起，请先登录！",U('Login/index'),1);
		}
		if($_SESSION['role'] != 1 ){
			$this->error("对不起，您没有权限进入该页面！",U('Login/index'),1);
		}
		$repassword = I('repassword');
		$this->assign('repassword',$repassword);
		$this->display();
	}
	//修改密码
	public function updatepwd()
	{
		if(empty($_SESSION['userid'])){
			$this->error("对不起，请先登录！",U('Login/index'),1);
		}
		if($_SESSION['role'] != 1 ){
			$this->error("对不起，您没有权限进入该页面！",U('Login/index'),1);
		}
		$repassword = I('repassword');
		$password = I('password');
		if($repassword != $password){
			$this->error("修改失败");
		}
		$map = array();
		$map['userid'] = $_SESSION['userid'];
		$data = array();
		$UsersDao = M('Users');
		$UsersDao->repassword = $repassword;
		$result = $UsersDao->where($map)->save();
		if(!empty($result)){
			$this->success("修改成功","http://127.0.0.1/newfish/index.php/Home/User/index");
		}else{

		}
	}
}