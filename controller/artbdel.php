<?php

//接收数据
$title =$_POST['deltitle'];

//循环每个文章删除
foreach($title as $v){
    unlink('./data/arts/'.$v); 
}

//提示信息 跳转
message('批量删除成功','admin.php?a=artlist');