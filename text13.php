<?php
$str='1234567890qwertyuiopasdfghjkzxcvbnmQWERTYUIOASDZXCVBN';
$code.='<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$str{mt_rand(0,strlen($str)-1)}.'</span>';
$code.='<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$str{mt_rand(0,strlen($str)-1)}.'</span>';
$code.='<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$str{mt_rand(0,strlen($str)-1)}.'</span>';
$code.='<span style="color: rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$str{mt_rand(0,strlen($str)-1)}.'</span>';
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h2>注册页面</h2>
<form action="text14.php" method="post">
    <table border="1" cellspacing="0" cellpadding="0" bgcolor="pink" width="80%">
        <tr>
            <td align="right">用户名</td>
            <td><input type="text" name="username" id="" placeholder="请输入合法用户名"/>用户名以字母开始</td>
        </tr>
        <tr>
            <td align="right">密码</td>
            <td><input type="password" name="password" id="" placeholder="请输入密码"/>密码不能为空</td>
        </tr>
        <tr>
            <td align="right">确认密码</td>
            <td><input type="password" name="password1" id="" />两次密码需要一致</td>
        </tr>
        <tr>
            <td align="right">邮箱</td>
            <td><input type="email" name="email" id="" />请输入合法邮箱</td>
        </tr>
        <tr>
            <td align="right">年龄</td>
            <td><input type="number" name="age" id="" />年龄范围1-125</td>
        </tr>
        <tr>
            <td align="right">验证码</td>
            <td><input type="text" name="verify" id="" /><?php echo $code;?></td>
                <input type="hidden" name="verify1" value="<?php echo strip_tags($code);?>"/>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="注册"></td>
        </tr>
    </table>
</form>

</body>
</html>
