<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>文章查看页面</h1>

<h3><?php require_once("detail.php"); echo $list['title'];?></h3>
<br/>
发布时间：<?php require_once("detail.php"); echo $list['time'];?> 作者：<?php require_once("detail.php"); echo $list['user_id'];?>
<hr />
<?php require_once("detail.php"); echo $list['content'];?>


<hr />
<a href="">点赞</a> 您已赞

</body>
</html>