<?php

//接收文件标题
$title =$_GET['title'];  //接收第一个文章

//删除文件
unlink('./data/arts/'.$title);
//提示  跳转页面
message('删除成功','admin.php?a=artlist');