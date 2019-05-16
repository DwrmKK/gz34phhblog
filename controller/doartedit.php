<?php

//接收原标题
$oldtitle =$_POST['oldtitle'];
//接收文章
$title =$_POST['title'];
$content =$_POST['content'];

//获取原来的文件名
file_put_contents('./data/arts/'.$oldtitle,$content);

//修改文件名
rename('./data/arts/'.$oldtitle,'./data/arts/'.$title);

//提示跳转
message('修改成功','admin.php?a=artlist');