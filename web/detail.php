<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/4
 * Time: 21:19
 */
header('content-type:text/html;charset=utf-8');

include_once "./class.php";
session_start();
$user_id=$_SESSION['username'];

$where="user_id='$user_id'";
$db=new SqlConnect();
$db->table("tt_post");
$list=$db->select($where);
$list=$list['0'];

include_once "./detail.html";
