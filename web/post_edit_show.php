<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/12
 * Time: 15:24
 */

include_once "./class.php";
$id = $_GET['id'];
$where="id = $id";
$db=new SqlConnect();
$db->table('tt_post');
$list=$db->select($where);
$list=$list[0];
include_once "./post_edit.html";