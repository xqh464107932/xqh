
<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/7
 * Time: 18:42
 */
header('content-type:text/html;charset=utf-8');
$icon=mysql_connect('localhost:3306','root','root');
if(!$icon){
    echo "链接失败!";

}else{
    echo "链接成功！<hr/>";
    mysql_select_db("xqh",$icon);
    $result=mysql_query("select * from message");
    //print_r($result);
    //echo "id"."\t"."username"."\t"."title"."\t"."content"."\t"."xinqing";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td width='100'>id</td>";
    echo "<td width='100'>username</td>";
    echo "<td width='100'>title</td>";
    echo "<td width='100'>content</td>";
    echo "<td width='100'>xinqing</td>";
    echo "</tr>";
    while($row=mysql_fetch_array($result)){
        //echo $row['id']."\t".$row['username']."\t".$row['title']."\t".$row['content']."\t".$row['xinqing'];
        echo "<tr>";
        echo "<td width='100'>".$row['id']."</td>";
        echo "<td width='100'>".$row['username']."</td>";
        echo "<td width='100'>".$row['title']."</td>";
        echo "<td width='100'>".$row['content']."</td>";
        echo "<td width='100'><img src='img/".$row['xinqing']."'></td>";
        echo "</tr>";
    }
    echo "</table>";
}