<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/8
 * Time: 16:57
 */
header('content-type:text/html;charset=utf-8');
class person{
    public $username='king';
    public $age=25;
    public $sex='男';
    public function __construct($username,$age,$sex){
        echo '我是构造函数<br/>';
        $this->username=$username;
        $this->age=$age;
        $this->sex=$sex;
    }
    public function __destruct(){
        echo 'say goodbye to '.$this->username.'<br/>';
    }
    public function eat(){
        echo 'eat....<br/>';
    }
    public function personinfo(){
        echo '用户名：'.$this->username.'<br/>';
        echo '年龄:'.$this->age.'<br/>';
        echo '性别:'.$this->sex.'<br>';
        $this->eat();
    }
}
$p1=new person('quee',12,'女');
$p1->personinfo();
$p1=null;
$p2=new person('xqh',24,'男');
$p2->personinfo();

echo '销毁对象';
