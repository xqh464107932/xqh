<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/1
 * Time: 21:43
 */
header('content-type:text/html;charset=utf-8');
$page_size = 4;
$page=$_GET['page'];
$page -= 1;
$begin=$page * 4;

session_start();

if(isset($_SESSION['username'])){
    echo $_SESSION['username']."你好！！";
    $username=$_SESSION['username'];
    $icon=mysql_connect('localhost:3306','root','root');
    if(!$icon){
        echo '连接失败！';
    }else {

        mysql_select_db('xqh', $icon);
        $sql="select * from zhuce limit $begin,$page_size";
        var_dump($sql);
        $result=mysql_query($sql);
    }

    include 'center.html';

    $count=mysql_query("select count(*) from zhuce");
    $count=mysql_fetch_array($count);
    $count = $count[0];
    $pages = $count/$page_size;
    $pages = $count%$page_size > 0 ? $pages + 1 : $pages;
    $i=1;
    for($i=1;$i <= $pages;$i++){

        echo "&nbsp;&nbsp;<a href='center.php?page=$i'>$i<a/>";
    }
}else{
    echo "无权访问！！";
}

