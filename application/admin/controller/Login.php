<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Session;
class Login extends Controller
{
    public function login()
    {
       return view("login");
    }
    public function login_In(){
    	$username = $_POST['username'];
    	$userpwd = $_POST['userpwd'];
    	$where['user_name'] = $username;
    	$where['user_pwd'] = $userpwd;
        $result=Db::table('admin')->where($where)->find();
        if($result){
            Session::set('usernic',$result['user_nic'],'think');
           $this->success("登陆成功",'Index/');
        }else{
           $this->error("登陆失败！用户名/密码错误！");	
        }
    }
}
