<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/9
 * Time: 20:17
 */
header('content-type:text/html;charset=utf-8');
class A{
    static public $count=0;
    public $test=123;
    public function  __construct(){

    }
    static public function text1(){
        return 'this is text1';
    }
    public function text2(){
        echo self::text1();
        echo "this is text2";
    }
}
class B extends A{
    static  public function text3(){
        echo static::text1();
    }
}
echo A::$count;
echo '<br/>';
echo A::text1();
$P=new A();
echo '<br/>';
echo $P->text2();
echo '<br/>';
B::text3();
