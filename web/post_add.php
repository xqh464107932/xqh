<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/10
 * Time: 12:21
 */
header('content-type:text/html;charset=utf-8');
include_once "./class.php";
$title=$_POST["title"];
$content=$_POST["content"];
if(empty($title) && empty($content)){
    echo "不能为空！";
    echo "<a href='post_add_show.php'>重新输入</a>";

}else {
    session_start();
    $username = $_SESSION['user_info']['username'];
    $time = time();


    $data = array();
    $data['user_id'] = $username;
    $data['title'] = $title;
    $data['content'] = $content;
    $data['time'] = $time;

    $db = new SqlConnect();
    $db->table("tt_post");
    $db->add($data);


    header("location:center.php");
}