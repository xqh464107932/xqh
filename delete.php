<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/1/25
 * Time: 18:48
 */
header('content-type:text/html;charset=utf-8');
$id=$_GET['id'];

$icon=mysql_connect('localhost:3306','root','root');
mysql_select_db('xqh',$icon);
$sql="delete from message where id=$id";
$result=mysql_query($sql);

if($result===false){
    echo "删除失败!";
    echo "<a href='list.php'>查看留言</a>";
}else{

    echo "删除成功!";
    header("location:list.php");
}


