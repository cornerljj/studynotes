<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/20
 * Time: 16:31
 */
namespace Common;
class MysqlFactory implements Factory {

    function createDb(){
        // TODO: Implement createDb() method.
        //$db = new Mysql();
        $db = Mysql::getInstance();
        Register::set('db1',$db);//注册到全局
        return $db;
    }
}