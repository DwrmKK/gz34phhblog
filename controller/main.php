<?php

/* 
    使用SESSION 的流程
        1   开启SESSION
            session_start(); 调用SESSION之前不能有任何输出
        2   开启SESSION之后就可以把它当成一个正常数组来用

*/
//后台页面

//判断用户有没有登入
//判断SESSION 中有没有登入标记
// session_start();
// include('./functions.php');
//验证登入
// check_login();

//加载后台页面
view('index');
