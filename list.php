<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/2/12
 * Time: 21:00
 */
header('content-type:text/html;charset=utf-8');
$icon=mysql_connect('localhost:3306','root','root');
if(!$icon){
    echo '连接失败！';
}else {
    mysql_select_db('xqh', $icon);
    $result = mysql_query("select * from message");
    echo "<a href='show_add.php'>添加留言</a>";
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td width='100'>编号</td>";
    echo "<td width='100'>留言者</td>";
    echo "<td width='100'>标题</td>";
    echo "<td width='100'>内容</td>";
    echo "<td width='100'>心情</td>";
    echo "<td width='100'>操作</td>";
    echo "</tr>";
    while($row=mysql_fetch_array($result)) {
        echo "<tr>";

        echo "<td width='100'>" . $row['id'] . "</td>";
        echo "<td width='100'>" . $row['username'] . "</td>";
        echo "<td width='100'>" . $row['title'] . "</td>";
        echo "<td width='100'>" . $row['content'] . "</td>";
        echo "<td width='100'><img src='img/" . $row['xinqing'] . "'></td>";
        $i=$row['id'];

        echo "<td width='100'><a href='edit.php?id=".$i."' method='post'>更新</a> | <a href='delete.php?id=".$i."'>删除</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}