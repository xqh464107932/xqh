<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/9
 * Time: 21:00
 */
header('content-type:text/html;charset=utf-8');
abstract class Shape{
    protected $width;
    protected $height;
    abstract public function getArea();
    abstract public function getPrinter();
    public function __construct($width,$height){
        $this->width=$width;
        $this->height=$height;
    }
}
class Rectange extends Shape{

public function getArea(){
    echo $this->width*$this->height;
}
public function getPrinter(){
    echo ($this->width+$this->height)*2;
}
}
$i=new Rectange(2,2);
echo $i->getArea();
echo '<hr>';
echo $i->getPrinter();