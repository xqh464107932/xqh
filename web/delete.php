<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/10
 * Time: 17:27
 */
header('content-type:text/html;charset=utf-8');

include_once "./class.php";
$id=$_GET['id'];
$where="id=$id";
$db=new SqlConnect();
$db->table('tt_post');
$db->delete($where);
header("location:center.php");


