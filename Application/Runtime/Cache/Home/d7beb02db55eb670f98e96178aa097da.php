<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>文章页面</h1>

<form action="<?php echo U('Home/center/updateCheck');?>" method="post">
    <table>
        <tr>
            <td>标题：</td>
            <td><input type="text" name="title" value="<?php echo $list['title'];?>"/></td>
        </tr>
        <tr>
            <td>内容：</td>
            <td><textarea name="content" ><?php echo $list['content'];?></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="修改"  ></td>
            <input type="hidden" value="<?php  echo $list['id'];?>" name="id">
        </tr>
    </table>
</form>

</body>
</html>