<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/20
 * Time: 15:47
 */
namespace Common;
//简单工厂模式，如果需要添加多个数据库类型，就需要修改createDb方法，
//违背了面向对象的开闭原则,扩展是开放的
//class Factory{
//    public static function createDb($type){
//        if($type == 'mysql'){
//            $db = new Mysql();
//        }elseif($type == 'mysqli'){
//            $db = new Mysqli();
//        }
//        return $db;
//    }
//}

/*工厂模式，将工厂类作为接口统一 规定其他数据库工厂的方法
需要增加数据库类型的时候不需要修改createDb，
只需要新增新的数据库工厂，实现了可扩展性*/
Interface Factory{
    function createDb();
}