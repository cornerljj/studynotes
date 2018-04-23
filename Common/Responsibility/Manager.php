<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/23
 * Time: 15:31
 */
namespace Common\Responsibility;
class Manager{
    //protected $top = 'Chief';
    protected $type = 2;
    function handle($lev){
        if($lev > $this->type){
           // $chief = new $this->top;不支持这种写法
            $chief = new Chief();
            $ret = $chief->handle($lev);
            return $ret;
        }else{
            return '经理处理';
        }
    }
}