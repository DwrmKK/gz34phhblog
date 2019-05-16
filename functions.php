<?php

//封装函数库

//消息提示函数
function message($mess,$url){
    echo <<<JS
<script>
alert('{$mess}');
location.href='{$url}';
</script>
JS;
exit;
}

//判断是否登入
function check_login(){
    //empty判断一个变量是否为空
    //判断SESSION中有没有一个叫name的键
    if(empty($_SESSION['name']) ){
        message('必须先登入','admin.php?a=login');
        exit;
    }
}

//加载一个静态页
function view($name){
    include('./view/admin/'.$name.'.html');
}