<?php
/**
 * Created by PhpStorm.
 * User: xqh
 * Date: 2017/1/22
 * Time: 13:50
 */
header('content-type:text/html;charset=utf-8');
$username=$_POST['username'];
$password=$_POST['password'];
$password1=$_POST['password1'];
$email=$_POST['email'];
$age=$_POST['age'];
$verify=$_POST['verify'];
$verify1=$_POST['verify1'];

$uerInfo=compact('username','password');
print_r($uerInfo);

//echo $username,$password,$password1,$email,$age,$verify,$verify1;
$char=$username[0];
$ascii=ord($char);
if($ascii>=97 && $ascii<=122 || $ascii>=65 && $ascii<=90){
    $uselen=strlen($username);
    if($uselen>=0 && $uselen<=10){
        $psdlen=strlen($password);
        if($psdlen>0){
            if($password===$password1){
                if(strpos($email,'@')!==false){
                    if($age>=0 && $age<=125){
                        if($verify=$verify1){
                            echo '注册成功！';
                        }else{
                            echo '验证码不正确！';
                        }
                    }else{
                        echo '年龄不正确！';
                    }
                }else{
                    echo '邮箱不正确！';
                }
            }else{
                echo '两次密码不一致！';
            }
        }else{
            echo '密码不能为空！';
        }
    }else{
        echo '用户名长度不正确！';
    }
}else{
    echo '用户名首字母不正确！';
}