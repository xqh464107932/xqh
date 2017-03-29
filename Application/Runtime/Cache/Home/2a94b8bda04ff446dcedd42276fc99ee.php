<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <style>
        td,th{
            text-align: left;;
        }
    </style>
</head>
<body>
<h1>首页</h1>
<a href="<?php echo U('Home/login/login');?>">登陆</a>|<a href="<?php echo U('Home/register/register');?>">注册</a>

<br />
最新发布：
<table>
    <tr>
        <th>作者</th>
        <th>标题</th>
        <th>内容</th>
        <th>发布时间</th>
        <th>操作</th>
    </tr>
    <?php $i=0;while($i<count($list)){?>
    <tr>
        <td><?php  echo $list[$i]['user_id']; ?></td>
        <td><?php  echo $list[$i]['title'];?></td>
        <td><?php  echo $list[$i]['content'];?></td>
        <td><?php  echo date('Y-m-d H:i:s',$list[$i]['time']);?></td>
        <td><a href="<?php echo U('Home/center/detail');?>?id=<?php echo $list[$i]['id'];?>">查看</a>&nbsp;</td>
    </tr>
    <?php $i++; }?>
</table>
<td><a href="<?php echo U('Home/index/index?page='.$prepage);?>">上一页</a></td>
<?php
 $prepage = $page - 1; if($prepage < 0){ $prepage = 1; } $lastpage = $page + 1; if($lastpage < $pages){ }else{ $lastpage = $pages; } ?>
<?php for($i=1;$i<=$pages;$i++){?>
<td><a href="<?php echo U('Home/index/index?page='.$i);?>"><?php echo $i;?></a></td>
<?php }?>
<td><a href="<?php echo U('Home/index/index?page='.$lastpage);?>">下一页</a></td>
</body>


</body>
</html>