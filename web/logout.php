<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/10
 * Time: 17:40
 */
header('content-type:text/html;charset=utf-8');
session_start();
$_SESSION['user_info']=null;

header("location:index.php");

