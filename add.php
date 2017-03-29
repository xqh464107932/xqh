<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/11
 * Time: 22:12
 */
header('content-type:text/html;charset=utf-8');
$username=$_POST['username'];
$title=$_POST['title'];
$content=$_POST['content'];
$xinqing=$_POST['xinqing'];
$icon=mysql_connect('localhost:3306','root','root');
if(!$icon){
    echo '连接失败！';
}else {
    mysql_select_db('xqh',$icon);
    $result=mysql_query("INSERT INTO message(username,title,content,xinqing) VALUES ('$username','$title','$content','$xinqing')");
    if($result===false){
        echo '输入失败！';
    }else{
        //header('location:result.html');
        $file=file_get_contents('result.html');

        echo $file;
    }
    mysql_close($icon);
}