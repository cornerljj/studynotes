<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/20
 * Time: 14:40
 */
namespace Common;
class Database{
    //单例模式
    private static $instance;
    private function __clone(){}//避免对象克隆
    private function __construct(){}//避免类外直接实例化对象
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function test($name){
       return $name;
    }


//    function where($where){
//        return $this;
//    }
//
//    function order($order){
//        return $this;
//    }
//
//    function limit($limit){
//
//        return $this;
//    }


}