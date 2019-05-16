<?php

//接收文章
var_dump($_POST);

//2 生成文件
file_put_contents('./data/arts/'.$_POST['title'],$_POST['content']);

//3 提示信息 跳转到列表页 
message('提交成功','admin.php?a=artlist');
