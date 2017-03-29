<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/20
 * Time: 15:29
 */

namespace Home\Controller;
use Think\Controller;
use Think\Model;

class LoginController extends Controller{




    public function login(){

        $this->display();

    }
    public function logincheck(){
        header('content-type:text/html;charset=utf-8');
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username) || empty($password)){
            redirect('/index.php/Home/login/login',2,'登陆失败！2秒跳转至登陆页面');

        }

        $options="username='$username' and password='$password'";
        $User=D('User');
        $result=$User->selectUser($options);
        //var_dump($result[0]['id']);
        if($result){
            $this->success("登陆成功，3秒自动跳转到登陆页面。。。。。", '/index.php/Home/center/center');
        }else{
            $this->error("登陆失败，3秒自动跳转到登陆页面。。。。。", '/index.php/Home/login/login');
        }
//        $Model = D('News'); // 这里必须使用D方法 因为命名范围在模型里面定义
//        $Model->scope('normal','latest')->select();

        $user_info=array();
        $user_info['username']=$username;
        $user_info['user_id']=$result[0]['id'];
        $_SESSION['user_info']=$user_info;

    }
}