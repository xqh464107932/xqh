<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/4
 * Time: 19:48
 */
header('content-type:text/html;charset=utf-8');
include_once "./class.php";

$username=$_POST['username'];
$password=$_POST['password'];

if(empty($username) || empty($password)){
    header("location:index_content.php");

}

$where="username='$username' and password='$password'";

$db=new SqlConnect();
$db->table("tt_user");
$db->select($where);
$list=$db->select($where);

if(empty($list)){
    echo "无效登陆！3秒自动跳转到首页面。。。。。";
    header("refresh:3;url=http://localhost/web/index.php");

}else{
    var_dump($list);
    session_start();
    $user_info = array();
    $user_info["username"] = $username;
    $user_info["user_id"] = $list[0]["id"];
    $_SESSION['user_info']= $user_info;
    header("location:center.php");
}