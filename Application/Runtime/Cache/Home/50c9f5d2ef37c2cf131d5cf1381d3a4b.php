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
<h1>登陆页面</h1>
<form action="<?php echo U('Home/login/logincheck');?>" method="post">
    <table>
        <tr>
            <td>用户名：</td>
            <td><input type="text" name="username" /></td>
        </tr>
        <tr>
            <td>密  码：</td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="登陆"></td>
        </tr>
    </table>
</form>
</body>
</html>