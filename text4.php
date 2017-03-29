<?php
header('content-type:text/html;charset=utf-8');
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/1/16
 * Time: 21:55
 */
$title='php';
$contend="学习php数据类型";
$table="
         <table border='1' cellpadding='0' cellspacing='0' width='80%' bgcolor='green'>
              <tr>
                <td>编号</td>
                <td>标题</td>
                <td>内容</td>
              </tr>
               <tr>
                <td>1</td>
                <td>$title</td>
                <td>$contend</td>
              </tr>
               <tr>
                <td>x</td>
                <td>x</td>
                <td>x</td>
              </tr>
         </table>
";
echo $table;

echo '<hr/>';
//定界符HereDoc
$table1=<<<TABLE
      <table border='1' cellpadding='0' cellspacing='0' width='80%' bgcolor='red'>
              <tr>
                <td>x</td>
                <td>x</td>
                <td>x</td>
              </tr>
               <tr>
                <td>x</td>
                <td>x</td>
                <td>x</td>
              </tr>
               <tr>
                <td>x</td>
                <td>x</td>
                <td>x</td>
              </tr>
         </table>
TABLE;
echo $table1;

