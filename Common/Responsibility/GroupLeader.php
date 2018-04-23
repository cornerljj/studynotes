<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/23
 * Time: 15:30
 */
namespace Common\Responsibility;
class GroupLeader{
    protected $type = 1;
    function handle($lev){
        if($lev > $this->type){
            $aa = new Manager();
            $ret = $aa->handle($lev);
            return $ret;
        }else{
            return '组长来处理';
        }
    }
}