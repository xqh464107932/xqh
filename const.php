<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/9
 * Time: 20:29
 */
header('content-type:text/html;charset=utf-8');
class Test{
    const PI=3.14;
    const COUNRY='中国';
    public function testConst(){
        echo self::PI;
    }
}
echo Test::PI;
echo Test::COUNRY;
echo '<hr/>';
$P=new Test();
echo $P->testConst();