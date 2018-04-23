<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/23
 * Time: 15:31
 */
namespace Common\Responsibility;
class Chief{
   // protected $top = null;
    protected $type = 3;
    function handle($lev){
        if($lev == $this->type){
           return '总监处理';
        }
    }
}