<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/4
 * Time: 20:54
 */
header('content-type:text/html;charset=utf-8');
date_default_timezone_set("Asia/Shanghai");
session_start();
$user_info = $_SESSION['user_info'];
if(empty($user_info)){
    header("location:index.php");
    exit;
}
$user_id = $_SESSION['user_info']['user_id'];
$pagesize = 2;
$page = $_GET['page'];
if(empty($page)){
    $page = 1;
}
$begin = ($page - 1) * $pagesize;

$icon = mysql_connect('localhost:3306', 'root', 'root');


if (!$icon) {
    echo '连接失败！';
} else {
    mysql_select_db('xqh', $icon);
    $count=mysql_query("select count(*) from tt_post where user_id='$user_id'");
    $count=mysql_fetch_array($count);
//var_dump($count);
    $count = $count[0];
    //var_dump($count);
    $pages = (int)($count / $pagesize);
    $pages = $count % $pagesize > 0 ? $pages + 1:$pages;
    //var_dump($pages);

    $user_id = $user_info["user_id"];
    $sql = "select * from tt_post where user_id='$user_id' limit $begin,$pagesize";
    $result= mysql_query($sql);
}
include 'center.html';
$prvpage = $page - 1;
if($prvpage <= 0){
    $prvpage = 1;
}
$nextpage = $page + 1;
if($nextpage >= $pages){
    $nextpage = $pages;
}
echo "<a href='center.php?page=$prvpage'>上一页</a>&nbsp;&nbsp;";
$i=1;
for($i=1;$i <= $pages;$i ++){
    echo "<a href='center.php?page=$i'>$i</a> &nbsp;&nbsp;";
}
echo "<a href='center.php?page=$nextpage'>下一页</a>&nbsp;&nbsp;";
