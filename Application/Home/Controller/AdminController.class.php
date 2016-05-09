<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016-03-31
 * Time: 22:07
 */
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
use Home\Common;
use Home\Controller\Base;

class AdminController extends BaseController{

    //审核简历操作
    public function checkresume()
    {
        if(empty($_SESSION['userid'])){
            $this->error("亲请先登录",U('Login/index'),1);
        }
        if($_SESSION['role'] != 3 ){
            $this->error("对不起，您没有进入该页面权限",U('Login/index'),1);
        }

        $map = array();
        $map['resumeid'] = I('resumeid');
        $data = array();
        $data['is_pass'] = 1;
        $ResumeDao = M('Resume');
        $result =  $ResumeDao->where($map)->save($data);
        print_r($ResumeDao->getLastSql());
        $user = $_SESSION['username'];
        $this->assign('user',$user);
        if(!empty($result)){
            $this->success("审核成功",U('Admin/index'));
        }else{
            $this->error("审核失败");
        }
    }

    //审核职位操作
    public function checkwork()
    {
        if(empty($_SESSION['userid'])){
            $this->error("亲请先登录",U('Login/index'),1);
        }
        if($_SESSION['role'] != 3 ){
            $this->error("对不起，您没有进入该页面权限",U('Login/index'),1);
        }

        $map = array();
        $map['workid'] = I('workid');
        $data = array();
        $data['is_pass'] = 1;
        $WorkDao = M('Work');
        $result =  $WorkDao->where($map)->save($data);
        $user = $_SESSION['username'];
        $this->assign('user',$user);
        if(!empty($result)){
            $this->success("审核成功",U('Admin/index'));
        }else{
            $this->error("审核失败");
        }
    }

    //管理员首页
    public function index()
    {
        if(empty($_SESSION['userid'])){
            $this->error("亲请先登录",U('Login/index'),1);
        }
        if($_SESSION['role'] != 3 ){
            $this->error("对不起，您没有进入该页面权限",U('Login/index'),1);
        }
        $map = array();
        $map['userid'] = $_SESSION['userid'];
        $NewsDao = M('News');
        $list =  $NewsDao->where($map)->select();
        $user = $_SESSION['username'];
        $this->assign('user',$user);
        $this->assign('list',$list);
        $this->display();
    }
    //增加新闻
    public function create()
    {
        if(empty($_SESSION['userid'])){
            $this->error("亲请先登录",U('Login/index'),1);
        }
        if($_SESSION['role'] != 3 ){
            $this->error("对不起，您没有进入该页面权限",U('Login/index'),1);
        }
        $this->display();
    }
    //简历页
    public function resume()
    {
        if(empty($_SESSION['userid'])){
            $this->error("亲请先登录",U('Login/index'),1);
        }
        if($_SESSION['role'] != 3 ){
            $this->error("对不起，您没有进入该页面权限",U('Login/index'),1);
        }
        $ResumeDao = M('Resume');
        $map = array();
        $map['is_pass'] = 0;
        $list = $ResumeDao->where($map)->select();
        $this->assign('list',$list);
        $this->display();
    }
    //工作页
    public function work()
    {
        if(empty($_SESSION['userid'])){
            $this->error("亲请先登录",U('Login/index'),1);
        }
        if($_SESSION['role'] != 3 ){
            $this->error("对不起，您没有进入该页面权限",U('Login/index'),1);
        }
        $WorkDao = M('Work');
        $map = array();
        $map['is_pass'] = 0;
        $list = $WorkDao->where($map)->select();
        $this->assign('list',$list);
        $this->display();
    }
    //增加新闻操作
    public function addnews()
    {
        if(empty($_SESSION['userid'])){
            $this->error("亲请先登录",U('Login/index'),1);
        }
        if($_SESSION['role'] != 3 ){
            $this->error("对不起，您没有进入该页面权限",U('Login/index'),1);
        }

        $data = array();
        $data['userid'] = $_SESSION['userid'];
        $data['news_title'] = I('post.news_title');
        $data['news_about'] = I('post.news_about');
        $data['news_url'] = I('post.news_url');
        $data['add_time'] = date('Y-m-d H:i:s',time());
        $NewsDao = M('News');
        $result =  $NewsDao->add($data);
        $user = $_SESSION['username'];
        $this->assign('user',$user);
        if(!empty($result)){
            $this->success("新闻发布成功",U('Admin/index'));
        }else{
            $this->error("新闻发布失败");
        }
    }

    //删除新闻
    public function delnews()
    {
        if(empty($_SESSION['userid'])){
            $this->error("亲请先登录",U('Login/index'),1);
        }
        if($_SESSION['role'] != 3 ){
            $this->error("对不起，您没有进入该页面权限",U('Login/index'),1);
        }
        $map = array();
        $map['newsid'] = I('newsid');
        $NewsDao = M('News');
        $result =  $NewsDao->where($map)->delete();
        $user = $_SESSION['username'];
        $this->assign('user',$user);
        if(!empty($result)){
            $this->success("新闻删除成功",U('Admin/index'));
        }else{
            $this->error("新闻删除失败");
        }
    }
}