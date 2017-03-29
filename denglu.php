<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/17
 * Time: 22:26
 */
header('content-type:text/html;charset=utf-8');
$username=$_POST['username'];
$password=$_POST['password'];

$icon=mysql_connect('localhost:3306','root','root');
if(!$icon){
    echo '连接失败！';
}else {
    mysql_select_db('xqh',$icon);
    $sql="select username,password from zhuce where username='$username' AND password='$password'";
    $result=mysql_query($sql);
    $row=mysql_fetch_array($result);
//    $isLogin=false;
//    while($row=mysql_fetch_array($result)){
//        if($username == $row['username'] && $password == $row['password']){
//            $isLogin=true;
//            break;
//        }
//    }
    if(isset($row) && !empty($row)){
        echo "登陆成功！";
        session_start();
        $_SESSION["username"]=$username;

        echo '<a href="center.php">个人中心<a/>';

    }else{
        echo "无效用户，请注册！";
        $i=file_get_contents('zhuce.html');
        echo $i;

    }


//    if($result===false){
//        echo '输入失败！';
//    }else{
//
//    }
    mysql_close($icon);
}