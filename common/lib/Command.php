<?php
namespace common\lib;
class Command extends \yii\db\Command{
    public function execute()
    {
        try {
            return parent::execute();
        } catch (\yii\db\Exception $e) {
            if ($e->errorInfo[1] == 2006 || $e->errorInfo[1] == 2013) {
                $this->db->close();
                $this->db->open();
                $this->pdoStatement = null ;
                return parent::execute();
            }else{
                throw $e;
            }
        }
    }

    protected function queryInternal($method, $fetchMode = null){
        try {
            return parent::queryInternal($method, $fetchMode);
        } catch (\yii\db\Exception $e) {
            if ($e->errorInfo[1] == 2006 || $e->errorInfo[1] == 2013) {
                $this->db->close();
                $this->db->open();
                $this->pdoStatement = null ;

                return parent::queryInternal($method, $fetchMode);
            }else{
                throw $e;
            }
        }
    }


}