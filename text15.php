<?php
header('content-type:text/html;charset=utf-8');
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/1/22
 * Time: 16:36
 */
$a=1;
$b=2;
function sub($i,$j){
    $sub=$i+$j;
    return $sub;
}
echo sub($a,$b);
echo '<hr/>';

//echo $date;
function getDate1(){
    $date=@date('w');
    $reach=array(0,1,2,3,4,5,6);
    $day=array('日','一','二','三','四','五','六');
    $day1=str_replace($reach,$day,$date);
    $x='年';
    $y='月';
    $z='日';
    $time1=@date("Y{$x}m{$y}d{$z}",time());
    $time2=$time1.'星期'.$day1;
    echo $date;
    var_dump($date);
    return $time2;
}
echo getDate1();

