<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/1/19
 * Time: 19:43
 */

include 'text6.php';
echo '<hr/>';
echo __LINE__;
echo '<hr/>';
echo __FILE__;
echo '<hr/>';
echo __DIR__;
echo '<hr/>';
define('ROOT',__DIR__);
echo ROOT;
echo '<hr/>';
$var=1;
echo ++$var + $var++;
echo $var;
echo '<hr/>';
$var=1;
echo $var++ + ++$var;
echo '<hr/>';
$var=1;
echo $var-- + --$var;
echo $var;
echo '<hr/>';
echo '<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo '<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo '<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';
echo '<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.mt_rand(0,9).'</span>';