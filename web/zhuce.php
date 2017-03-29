<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/4
 * Time: 17:08
 */
header('content-type:text/html;charset=utf-8');
include_once "./class.php";
$username=$_POST['username'];
$password=$_POST['password'];
$pattern='#^[a-zA-Z]\w+$#';
if(!preg_match($pattern,$username)){
    echo "请已字母开头<br/>";
    echo "<a href='register.php'>重新注册&nbsp</a>&nbsp<a href='index.php'>返回首页</a>";
    die;
}
if(!preg_match('#\d{8}|\d{12}#',$password)){
    echo "请输入8-12位数<br/>";
    echo "<a href='register.php'>重新注册</a>&nbsp<a href='index.php'>返回首页</a>";
    die;
}

$time=time();

$data=array();
$data["username"]=$username;
$data["password"]=$password;
$data["time"]=$time;

$db=new SqlConnect();
$db->table("tt_user");
$db->add($data);

echo "注册成功，3秒自动跳转到登陆页面。。。。。";
header("refresh:3;url=http://localhost/web/login.php");

