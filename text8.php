<?php
header('content-type:text/html;charset=utf-8');
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/1/19
 * Time: 20:54
 */
$str1='hello';
$str1.='wolrd';
$str1.='!';
echo $str1;
echo '<hr/>';
$table='<table border="1" width="80%">';
  $table.='<tr>';
     $table.='<td>x</td>';
     $table.='<td>x</td>';
 $table.='</tr>';
$table.='</table>';
echo $table;
echo '<hr/>';
//strlen($string):得到字符串的长度
$string='qwertyuiopasdfghjklzxcvbnm1234567DRGHUJMK';
echo '字符串的长度为：'.strlen($string);
echo '<hr/>';
$char=  '<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string[mt_rand(0,strlen($string)-1)].'</span>';
$char.=  '<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string[mt_rand(0,strlen($string)-1)].'</span>';
$char.=  '<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string[mt_rand(0,strlen($string)-1)].'</span>';
$char.=  '<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string[mt_rand(0,strlen($string)-1)].'</span>';
echo $char;



