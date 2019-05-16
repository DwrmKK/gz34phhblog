<?php
session_start(); //加载SESSION
include('./functions.php');
/* 
    入口文件

    1 项目初始化
        SESSION 
        加载函数库
    2 加载相应的功能模块


*/
// 接收请求 默认是main 页面
$action = isset($_GET['a'])?$_GET['a'] : 'main';

//登入权限验证
$white =['login','dologin']; //不需要登入的地址

if(!in_array($action,$white)){
    check_login();
}

//加载请求页面
include('./controller/'.$action.'.php');


