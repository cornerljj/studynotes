<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/20
 * Time: 11:05
 */
namespace Common;
class Object{
    protected $array = array();

    function __set($key,$value){
        $this->array[$key] = $value;
    }
    function __get($key){
        return $this->array[$key];
    }
    function __call($func, $arguments){
        // TODO: Implement __call() method.
        var_dump($func);
        var_dump($arguments);
        return "magic function";
    }
    static function __callStatic($func, $arguments){
        // TODO: Implement __callStatic() method.
        return "magic static function";
    }
    function __toString(){
        // TODO: Implement __toString() method.
        return __CLASS__;
    }
    function __invoke($params){
        // TODO: Implement __invoke() method.
        return $params;
    }

    //    static function test(){
//        echo 'this is object test';
//    }
}