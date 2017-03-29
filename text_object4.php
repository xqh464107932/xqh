<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/8
 * Time: 20:12
 */
header('content-type:text/html;charset=utf-8');
class text{
    public $publicvar='public val';
    protected $protected='protected val';
    private  $private='private val';
    public function __set($proted,$protedval){
        echo "搜保护";
        $this->$proted=$protedval;

    }
    public function __get($proted){
        echo "受保护";
        echo $this->$proted;

    }
}
$p1=new text();
echo $p1->protected;
echo '<hr/>';
$p1->private=231;
echo $p1->private;