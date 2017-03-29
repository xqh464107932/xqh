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

    <script  type="text/javascript">
        function skip(){
            window.location.href="<?php echo U('Home/center/post');?>";
        }

    </script>
</head>
<body>
<h1>个人中心页面</h1>
你好 <?php session_start();echo $_SESSION['user_info']['username']; ?>
 登陆时间：<?php  echo date('Y-m-d H:i:s',time());?><a href="<?php echo U('Home/center/out');?>">退出登录</a>
<br />
<br />
<input type="button" value="发布文章" onclick="skip()"><br/>
个人发布：
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
        <td><a href="<?php echo U('Home/center/detail');?>?id=<?php echo $list[$i]['id'];?>">查看</a>&nbsp;<a href="<?php echo U('Home/center/update');?>?id=<?php echo $list[$i]['id'];?>">修改</a>&nbsp;<a href="<?php echo U('Home/center/delete');?>?id=<?php echo $list[$i]['id'];?>">删除</a>&nbsp;</a></td>
    </tr>
    <?php $i++; }?>

</table>
<td><a href="<?php echo U('Home/center/center?page='.$prepage);?>">上一页</a></td>
<?php
 $prepage = $page - 1; if($prepage < 0){ $prepage = 1; } $lastpage = $page + 1; if($lastpage < $pages){ }else{ $lastpage = $pages; } ?>
<?php for($i=1;$i<=$pages;$i++){?>
<td><a href="<?php echo U('Home/center/center?page='.$i);?>"><?php echo $i;?></a></td>
<?php }?>
<td><a href="<?php echo U('Home/center/center?page='.$lastpage);?>">下一页</a></td>
</body>
</html>