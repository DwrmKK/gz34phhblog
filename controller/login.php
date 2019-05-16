<?php

/* 
    登入功能
        1 使用一个文件保存管理员账号密码
        2 先判断用户有没有登入
            1 登入了就 显示后台
            
            2 未登入就 显示登入页面
                 登入流程 
                    判断账号密码是否正确
                    到保存账号密码文件中查找
                        不正确
                            就提示失败 返回登入页面
                        正确 
                            在$_SESSION中 标记他登入了
                            提示成功  跳转后台页面 

        3 退出原理 删除$_SESSION 标记
            $_SESSION 销毁时间
                1 一直不刷新页面直到过期时间到  (php.ini 中的 session.gc.maxlifetime)
                2 关闭网页
        扩展 加密函数  md5
*/
//加载登入页面
view('login');


