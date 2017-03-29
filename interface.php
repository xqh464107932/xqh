<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/9
 * Time: 21:43
 */
header('content-type:text/html;charset=utf-8');
interface DB{
    public function connect();
    public function insert();
    public function update();
    public function delect();
    public function select();
}
class Test implements DB{
    public function connect(){
        echo '1213';
    }
    public function insert(){

    }
    public function update(){

    }
    public function delect(){

    }
    public function select(){

    }
}
$P=new Test();
echo $P->connect();