<?php

//读取arts 目录中的所有文件
$data= scandir('./data/arts'); //读取一个目录下所有文件名

//从数组中删除前两个文件名
unset($data[0]);
unset($data[1]);

//加载页面
view('posts');

