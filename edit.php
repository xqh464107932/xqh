<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/12
 * Time: 21:22
 */
header('content-type:text/html;charset=utf-8');
$id=$_GET['id'];

$icon=mysql_connect('localhost:3306','root','root');
if(!$icon){
    echo '连接失败！';
}else {
    mysql_select_db('xqh', $icon);
    $result=mysql_query("select * from message WHERE id=$id ");
    $message=mysql_fetch_array($result);

   // $file=file_get_contents("mesage.html");
    include "edit.html";

    //echo $file;


}