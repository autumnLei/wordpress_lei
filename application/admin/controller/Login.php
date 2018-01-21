<?php
namespace app\admin\controller;
use think\View;
use think\Controller;
use app\admin\model\User;
use think\Session;
/**
 *
 */
class Login extends Controller{
  public function index(){
    return view('index/login');
   // $this->fetch('index/login');
  }
  public function login($user_name='',$user_passwd=''){
    $user =  User::get([
        'name' => $user_name,
        'password' => $user_passwd,
    ]);
    if($user){
        Session::set('user', $user_name);
        $this->success('登录成功', "admin/index/index", 1);
    }else{
        $this->error('登录失败',"Login/index", 3);
    }
  }
}