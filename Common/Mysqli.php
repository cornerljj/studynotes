<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/20
 * Time: 15:58
 */
namespace Common;
class Mysqli implements Db{

    private static $instance;
    private function __clone(){}//避免对象克隆
    private function __construct(){

    }//避免类外直接实例化对象
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
    function connect(){
        echo '链接上mysqli333';
    }


}