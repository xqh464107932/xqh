<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/3/4
 * Time: 16:15
 */
header('content-type:text/html;charset=utf-8');

include_once "./class.php";
$where="";
$db=new SqlConnect();
$db->table('tt_post');
$list=$db->select($where);
echo "<br/>";
$pagesize=5;

$length=count($list);
$count=$length;
$page=$_GET['page'];
if(empty($page)){
    $page=1;
}
$begin= ($page -1) * $pagesize;
$pages = (int)($count / $pagesize);

$pages = $count % $pagesize > 0 ? $pages + 1:$pages;
echo "<br/>";
echo $pages;
$icon = mysql_connect('localhost:3306', 'root', 'root');
if (!$icon) {
    echo '连接失败！';
} else {
    mysql_select_db('xqh', $icon);
    $sql = "select * from tt_post limit $begin,$pagesize";
    $result=mysql_query($sql);
}
include_once "./index_content.html";
$uppage=$page - 1;
if($uppage < 0){
    $uppage = 1;
}
$nextpage=$page + 1;
if($nextpage > $pages){
    $nextpage = $pages;
}
echo "<a href='index.php?page=$uppage'>上一页</a> &nbsp;&nbsp;";
for($i=1;$i<=$pages;$i++){
    echo "<a href='index.php?page=$i'>$i</a> &nbsp;&nbsp;";
}
echo "<a href='index.php?page=$nextpage'>下一页</a> &nbsp;&nbsp;";

