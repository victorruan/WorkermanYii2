<?php
use \Workerman\Worker;

require_once __DIR__ . '/vendor/autoload.php';
require_once(__DIR__ . '/vendor/yiisoft/yii2/Yii.php');
define('DIR_COMMON', __DIR__."/common");
Yii::setAlias("common",DIR_COMMON);

// 自动加载类
$tcp_worker = new Worker();
$tcp_worker->name = 'demo_worker';
$tcp_worker->count = 1;
$tcp_worker->onWorkerStart = function()
{
    $user = new \common\models\User();
    $user->setAttributes(['age'=>5, 'name' => "test",
    ],false);
    $user->save();

    $another = \common\models\User::findOne($user->primaryKey);

    echo "name is ",$another->name," and age is ",$another->age."\n";
};
Worker::runAll();

