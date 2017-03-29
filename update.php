<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/1/25
 * Time: 15:48
 */
header('content-type:text/html;charset=utf-8');
$username=$_POST['username'];
$title=$_POST['title'];
$content=$_POST['content'];
$xinqing=$_POST['xinqing'];
$id=$_GET['id'];
$icon=mysql_connect('localhost:3306','root','root');
mysql_select_db('xqh',$icon);
$result=mysql_query("update message set username='$username',title='$title',content='$content',xinqing='$xinqing' where id=$id");
if($result===false){
    echo ';;;;';
}else{
    echo '更新成功！<a href="list.php">查看留言</a>';
}




