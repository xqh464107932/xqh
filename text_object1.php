<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/8
 * Time: 16:11
 */
header('content-type:text/html;charset=utf-8');
class person{
    public $username='king';
    public $age=25;
    public $sex='男';
    public function eat(){
        echo 'eat....<br/>';
    }
    public function personinfo(){
        echo '用户名：'.$this->username.'<br/>';
        $this->eat();
    }
}
$p1=new person();
echo '用户名：'.$p1->username.'<br/>';
echo '年龄：'.$p1->age.'<br/>';
echo '性别：'.$p1->sex.'<br/>';
echo '<hr/>';
$p1->eat();
echo '<hr>';
$p1->personinfo();