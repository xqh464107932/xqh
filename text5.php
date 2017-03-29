<?php
header('content-type;text/html;charset=utf-8');
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/1/17
 * Time: 19:27
 */
//隐式转换
$var=0;
$var=1;
$var=0.0;
$var='string';
$var=array();
$var=null;
if($var){
    echo 'this is true';
}
    else{
        echo 'this is false';
    }
//临时转换
echo '<hr/>';
$var=true;
echo intval($var);
echo '<hr/>';
echo floatval($var);
//检测变量是否是整型
echo '<hr/>';
$var=12;
var_dump(is_int($var));
echo '<hr/>';
//检测变量是否是标量
$var=123;
var_dump(is_scalar($var));
echo '<hr/>';
//检测是否是资源
$var=fopen('text3.php','r');
var_dump(is_resource($var));
echo '<hr/>';
//检测是否是对象
$var=new stdClass();
var_dump(is_object($var));
echo '<hr/>';
//检测是否是数值型，或者字符串的数值
$var=1342567.1;
var_dump(is_numeric($var));

