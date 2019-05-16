<?php

//引入函数库
// include('./functions.php');
//1 接受表单数据
$username =$_POST['username'];
$password =$_POST['password'];

//2 判断账号是否正确
$account =file_get_contents('./data/account'); //读取账号
//根据行转成数组
$account =explode("\n",$account);

// var_dump($account);
// exit;
//循环每个账号
foreach($account as $v){
    //拼出账号格式
    $tmp = $username.' '.md5($password);

    $v =trim($v);
    //如果账号相同代表登入成功
    if($tmp==$v){  
        //吧用户名保存到session 中
        $_SESSION['name']=$username;
        //提示消息
        message('登入成功','admin.php');
    }
}

message('账号密码错误','admin.php?a=login');

