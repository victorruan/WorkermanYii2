<?php
/**
 * Created by PhpStorm.
 * User: ruanjiajia
 * Date: 2017/4/15
 * Time: 09:22
 */
namespace common\lib;
use common\Factory;

class ActiveRecord extends \yii\db\ActiveRecord{

    public static function getDb(){
        return Factory::getYiiDB();
    }
}