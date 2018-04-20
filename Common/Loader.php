<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/20
 * Time: 12:18
 */
namespace Common;
class Loader{

    static function autoload($class){
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';//替换查找\需要转义所以写成\\
    }

}