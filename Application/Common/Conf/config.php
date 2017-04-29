<?php
return array(
	//'配置项'=>'配置值'
    //设置可访问目录
    'MODULE_ALLOW_LIST'=>array('Home','Admin'),
    //设置默认目录
    'DEFAULT_MODULE'=>'Home',
    //设置默认主题目录
    'DEFAULT_THEME'=>'Default',

    //PDO数据库链接
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'weibo',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'weibo_',    // 数据库表前缀

    //URL模式
    'URL_MODEL'=>2,
);