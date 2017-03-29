<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/21
 * Time: 15:27
 */
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller{
   public function register(){
       $this->display();
   }
    public function zhuce(){
        date_default_timezone_set('PRC');
        header('content-type:text/html;charset=utf-8');
        $username=$_POST['username'];
        $password=$_POST['password'];
        $time=time();
        $pattern='#^[a-zA-Z]\w+$#';
        if(!preg_match($pattern,$username)){
            echo "请已字母开头<br/>";
            $i=U('Home/register/register');
            $j=U('Home/index/index');
            echo "<a href='$i'>重新注册&nbsp</a>&nbsp<a href='$j'>返回首页</a>";
            die;
        }
        if(!preg_match('#\d{8}|\d{12}#',$password)){
            echo "请输入8-12位数<br/>";
            $i=U('Home/register/register');
            $j=U('Home/index/index');
            echo "<a href='$i'>重新注册</a>&nbsp<a href='$j'>返回首页</a>";
            die;
        }
        $data=array();
        $data["username"]=$username;
        $data["password"]=$password;
        $data["time"]=$time;

        $User=M('User');
        $result = $User->addUser($data);
        if($result)
            $this->success("注册成功，3秒自动跳转到登陆页面。。。。。", '/index.php/Home/login/login');
        else
            $this->error("注册失败3秒自动跳转到注册页面。。。。。", '/index.php/Home/login/login');
        //redirect('/index.php/Home/login/login',3,'注册成功，3秒自动跳转到登陆页面。。。。。');
    }
}