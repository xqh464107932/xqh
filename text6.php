<?php
header('content-type:text/html;charset=utf-8');
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/1/17
 * Time: 20:08
 */
//常量
define('USERNAME',徐秋海,true);
echo USERNAME;
echo '<hr/>';
define('AGE',18);
echo AGE;
echo '<hr/>';
echo constant('USERNAME');
echo '<hr/>';
//通过defined函数检测常量名称是否被定义
var_dump(defined('AGE'));
echo '<hr/>';
$name='AAA';
$value=1123456;
if(!defined($name)){
    echo '常量被定义<br/>';
    define($name,$value);
    echo constant($name);
}
else{
    echo constant($name);
}
echo '<hr/>';
const NAME='XUQIUHAI';
echo NAME;




