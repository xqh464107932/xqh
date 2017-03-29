<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/4
 * Time: 17:11
 */
header('content-type:text/html;charset=utf-8');
include_once "./class.php";

$id=$_POST["id"];
$str = " * from ";

$title=$_POST['title'];
$content=$_POST['content'];
$where="id = $id";
$data=array('title'=>$title,'content'=>$content);

$db_edit=new SqlConnect();
$db_edit->table('tt_post');
$list=$db_edit->update($data,$where);
header("location:center.php");












