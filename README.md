# WorkermanYii2
对于熟悉使用workerman和yii2 ActiveRecod的人来说，在workerman中使用ActiveRecord是一个问题
这个项目主要解决了在workerman中使用yii2中的ActiveRecord的问题

同时，解决了在命令行下常驻进程mysql gone away的问题

config文件中包含了表结构代码

```php
composer install;
php start.php start;

```

```bash

Workerman[start.php] start in DEBUG mode
----------------------- WORKERMAN -----------------------------
Workerman version:3.4.1          PHP version:7.0.15
------------------------ WORKERS -------------------------------
user          worker        listen        processes status
ruanjiajia    demo_worker   none           1         [OK] 
----------------------------------------------------------------
Press Ctrl-C to quit. Start success.
name is test and age is 5

```

workerman 主页 http://www.workerman.net/
yii2 主页 http://www.yiiframework.com/