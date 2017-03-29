<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/17
 * Time: 22:40
 */
header('content-type:text/html;charset=utf-8');
$username=$_POST['username'];
$password=$_POST['password'];
if(!empty($username) && !empty($password)){

}else{
    echo "注册失败！.<a href='zhuce.html'>重新注册<a/>";
    exit;

}
$icon=mysql_connect('localhost:3306','root','root');
if(!$icon){
    echo '连接失败！';
}else {
    mysql_select_db('xqh',$icon);
    $result=mysql_query("INSERT INTO zhuce(username,password) VALUES ('$username','$password')");
    if($result===false ){
        echo '<a href="zhuce.html">重新注册<a/>';
    }else{
        echo '注册成功！请登录！！';
        $file=file_get_contents('denglu.html');
        echo $file;
    }
    mysql_close($icon);
}