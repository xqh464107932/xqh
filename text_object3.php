<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/8
 * Time: 17:42
 */
header('content-type:text/html;charset=utf-8');
class Computer{
    private $price=2000;
    public function zuzhuang(){
        $this->buy();
        $this->zuhe();
        $this->baozhuang();
        echo '给你吧<br/>';
    }
    private function buy(){
        echo '我买了材料';
    }
    private function zuhe(){
        echo '组合电脑';
    }
    private function baozhuang(){
        echo '包好了';
    }
    public function getPrice(){
        echo '价格是:'.$this->price*3;
    }
}
$p=new Computer();
$p->zuzhuang();
$p->getPrice();
