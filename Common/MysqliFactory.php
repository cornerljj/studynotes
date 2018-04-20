<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/20
 * Time: 16:31
 */
namespace Common;
class MysqliFactory implements Factory {

    function createDb()
    {
        // TODO: Implement createDb() method.
//        $db = new Mysqli();
        $db = Mysqli::getInstance();
        return $db;
    }

}