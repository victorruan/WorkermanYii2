<?php
namespace common;
use yii\db\Connection;

class Factory{

    static private $yii_db;
    static function getYiiDB(){
        if(empty(static::$yii_db)){
            $db_config = require __DIR__.'/../config/db.php';
            static::$yii_db =
                new Connection([
                    'dsn' => 'mysql:host='.$db_config['host'].';port='.$db_config['port'].';dbname='.$db_config['dbname'],
                    'username' => $db_config['username'],
                    'password' => $db_config['password'],
                    'charset' => 'utf8',
                    'commandClass'=>"\\common\\lib\\Command",
                ]);
        }
        return static::$yii_db;
    }
}