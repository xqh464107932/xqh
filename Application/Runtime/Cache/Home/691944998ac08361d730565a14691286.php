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
<a href="<?php echo U('Home/center/detail');?>">查看个人资料</a> 上次登陆时间：2017-03-01 17:30:23<a href="<?php echo U('Home/center/out');?>">退出登录</a>
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
    <?php while($result){?>
    <tr>
        <td><?php  echo $result['user_id'];?></td>
        <td><?php  echo $result['title'];?></td>
        <td><?php  echo $result['content'];?></td>
        <td><?php  echo date('Y-m-d H:i:s',$result['time']);?></td>
        <td><a href="">查看</a>&nbsp;<a href="">修改</a>&nbsp;<a href="delete.php?id=<?php echo $message['id'];?>">删除</a>&nbsp;</a></td>
    </tr>
    <?php  }?>

</table>




</body>
</html>