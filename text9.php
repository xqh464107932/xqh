<?php
header('content-type:text/html;charset=utf-8');
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/1/19
 * Time: 22:06
 */
//strpos($stgring,$search[,$offset]):查找一个字符串是否存在宁一个字符，如果找到显示第一次出现的位置，如果没有返回false
$str='xqhgdas@euc';
echo strpos($str,g);
echo '<hr/>';
echo strpos($str,p);
echo '<hr/>';
if(strpos($str,'@')!==false){
    echo '找到了在第'.strpos($str,'@').'位';}
    else{

        echo '没找到';
    }

echo '<hr/>';
echo 3>1?'true':'false';
echo '<hr/>';
$i=3;
$j=4;
echo $i.'+'.$j.'='.($i+$j);





