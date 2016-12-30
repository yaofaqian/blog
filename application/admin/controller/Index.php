<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
class Index extends Controller
{
    public function index()
    {   
    	$usernic = Session::get('usernic');
    	$this->assign('usernic',$usernic);
        return $this->fetch("index");
    }
}
