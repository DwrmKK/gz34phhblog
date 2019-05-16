<?php

//接收标题
$title =$_GET['title'];

//先读取文章内容
$content =file_get_contents('./data/arts/'.$title);
//显示要修改的表单
view('post-edit');