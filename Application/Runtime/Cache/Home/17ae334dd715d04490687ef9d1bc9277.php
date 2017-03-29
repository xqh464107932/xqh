<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>文章查看页面</h1>

<h3><?php  echo $result['title'];?></h3>
<br/>
发布时间：<?php  echo $result['time'];?> 作者：<?php  echo $result['user_id'];?>
<hr />
<?php echo $result['content'];?>


<hr />
<a href="">点赞</a> 您已赞

</body>
</html>