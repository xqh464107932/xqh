<?php
header('content-type:text/html;charset=utf-8');
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/1/20
 * Time: 14:07
 */
//date_default_timezone_get();得到当前的魔人时区
//date_default_timezone_set($timezone);
//PRC:中华人民共和国  Asia/Shanghai
echo @date_default_timezone_get();
echo '<hr/>';
date_default_timezone_set( 'PRC');

echo date_default_timezone_get();
echo '<hr/>';
echo date("Y年m月d日：H:i：s");
echo '<hr/>';
echo date('Y');
echo '<hr/>';
echo date("Y/m/d H:i:s",time()+24*3600);
echo '<hr/>';
$date=date('w');

if($date==0):
    $date='星期日';
elseif($date==1):
     $date='星期一';
elseif($date==2):
     $date='星期二';
elseif($date==3):
     $date='星期三';
elseif($date==4):
     $date='星期四';
elseif($date==5):
     $date='星期五';
elseif($date==6):
     $date='星期六';
endif;
$strdate=date("Y/m/d H:i:s").$date;
echo $strdate;