<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/9
 * Time: 16:14
 */
header('content-type:text/html;charset=utf-8');
class person{
    public $username;
    public $age;
    public function __construct($username,$age){
        $this->username=$username;
        $this->age=$age;
    }
    public function getInfo(){
        return '用户名：'.$this->username.'--年龄：'.$this->age;
    }
    final public function text(){
        return 'Im bad boy!';
    }
}
class stutent extends person{
    public $school;
    public function study(){
        return $this->username.'在家学习php！';
    }

}
class teacher extends person{
    public function getIn(){
       return $t=parent::getInfo();
    }
}
$str=new stutent('king',12);
echo $str->username.'<br/>';
echo $str->getInfo();
echo '<hr/>';
echo $str->study();
echo '<hr/>';
$str1=new teacher('qqq',23);
echo $str1->getIn();
echo '<hr/>';
function text(){
    echo 'this is text';

}
//$str1='text';
//$str1();
call_user_func('text');
$i=0;
while($i<=100){
    echo $i;
    $i++;
}
echo 0;
echo false;
echo true;
echo null;

if(isset($a)){
    echo '是空';
}
echo "<hr/>";
$str2=3;
switch($str2){
    case 1:
        echo $str2;
        break;
    case 2:
        echo 'bushi '.$str2;
        break;
    case 3:
        echo 123;
        break;
    default:
        echo 'ushizhege zhi';

}

