<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/12
 * Time: 16:52
 */
date_default_timezone_set("Asia/Shanghai");
setcookie('username','user',time()+3);
echo $_COOKIE['username'];
$int = 234234;
$str = "34324";


$str1=  "sdfsd";

//$arr = array(1=>$str,"223243"=>new SqlConnect());
$arr[] = "123";
$arr["23434=sdfsd"] = 2343;
$arr["25345"] = "123";
//$t="qwewqrrr";
//$a=12133;
//$t=$a.$t;
$t="qqqq";
$t="12".$t;
$t="$t aaaa";
$a="add=";
$t = "select".$a;
$c=23;
$t=$t.$c;
$arr=array(34=>$t,'ssss'=>'aaaa',3=>array(1,2,3));
$arr=array(array(1,2,3),array(4,5,6),array(7,8,9));
$length=count($arr);
$arr1=array();

//for($i=0;$i<$length;$i++){
//    $length2=count($arr[$i]);
//
//    $arr3=array();
//
//
//    for($j = $length2 -1;$j>=0 ;$j--){
//
//        $arr3[]=$arr[$i][$j];
//
//    }
//    $arr[$i]=$arr4;
//}
//
//$length1=count($arr);
//for($i=0;$i<$length1;$i++){
//    $length3=count($arr[$i]);
//    for($j = 0; $j<$length3;$j++){
//        echo $arr[$i][$j]."&nbsp";
//
//    }
//    echo "<br/>";
//}
//echo "<br/>";
//for($i=0;$i<$length;$i++){
//    $length=count($arr[$i]);
//    for($j = 0; $j<$length;$j++){
//        if($i == $j){
//           $arr[$i][$j]= $arr[$i][$j] + 1;
//        }
//        echo $arr[$i][$j]."&nbsp";
//    }
//    echo "<br/>";
//}
echo "<br/>";
//$a=array(1,2,3);
//for($j = 0; $j<3;$j++){
//    $sum+=$a[$j];
//
//
//    echo "<br/>";
//}
//echo $sum;

//for($i=0;$i<$length;$i++){
//    $length=count($arr[$i]);
//    $sum=0;
//    $arr1=array();
//    for($j = 0; $j<$length;$j++){
//        $sum+=$arr[$i][$j];
//        $arr1[]=$arr[$i][$j];
//
//    }
//    $arr1[]=$sum;
//    $arr[$i]=$arr1;
//
//}
//print_r($arr);
$arr2=array();


for($i=0;$i<$length;$i++){
    $length1=count($arr[$i]);
    $arr1=array();

    for($j=0;$j<$length1;$j++){
        $arr1[]=$arr[$i][$j];
    }
    $arr2=implode(" , ",$arr1);
//    echo $arr2;

    $a=explode(" ",$arr2);
}
$i=0;
while($i<=100){
    if(($i % 2)>0){
        $totle+=$i;
    }else{
        $totle1+=$i;
    }
    $i++;
}
echo $totle."-----".$totle1;
echo "<br/>";


function getWeekT($year)
{
    $firsttime = strtotime("$year/1/1 00:00:00");
    $lasttime = strtotime("$year/12/31 00:00:00");
    $arr=array();
    for ($i = $firsttime; $i <= $lasttime; $i++) {

        switch (date("w", $i)) {
            case 0:
                $arr1[] = date("Y-m-d", $i);
                break;
            case 1:
                $arr2[] = date("Y-m-d", $i);
                break;
            case 2:
                $arr3[] = date("Y-m-d", $i);
                break;
            case 3:
                $arr4[] = date("Y-m-d", $i);
                break;
            case 4:
                $arr5[] = date("Y-m-d", $i);
                break;
            case 5:
                $arr6[] = date("Y-m-d", $i);
                break;
            case 6:
                $arr7[] = date("Y-m-d", $i);
                break;
        }
    }
    $arr['0']=$arr1;
    $arr['1']=$arr2;
    $arr['2']=$arr3;
    $arr['3']=$arr4;
    $arr['4']=$arr5;
    $arr['5']=$arr6;
    $arr['6']=$arr7;
    return $arr;

}
$year=2017;
var_dump(getWeekT($year));



//for($i=0;$i<$length;$i++){
//    $length1=count($arr2[$i]);
//    echo $length1;
//    for($j=0;$j<$length1;$j++){
////        echo $arr2[$i][$j]."&nbsp";
//    }
//}