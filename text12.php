<?php
header('content-type:text/html;charset=utf-8');
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/1/21
 * Time: 12:55
 */
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$op=$_POST['op'];
$sub=$_POST['sub'];
if(isset($sub)) {
   if(is_numeric($num1)&&is_numeric($num2)) {
       if ($op == '+'){
           $str = $num1 + $num2;
        } else if ($op == '-')
           $str = $num1 - $num2;
       else if ($op == '*')
           $str = $num1 * $num2;
       else if ($op == '/')
           $str = $num1 / $num2;
       else if ($op == '%')
           $str = $num1 % $num2;
       echo "{$num1}{$op}{$num2}={$str}";
   } else {
        echo '请输入数值进行运算';
   }
}else {
   echo '请输入数字进行运算';
}

