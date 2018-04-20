<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/20
 * Time: 18:04
 */
namespace Common;
class Register{
    protected static $objects;
    static function set($alias,$object)
    {
        self::$objects[$alias] = $object;
    }
    function __unset($alias){
        unset(self::$objects[$alias]);
    }
    static function get($alias){
        return self::$objects[$alias];
    }

}