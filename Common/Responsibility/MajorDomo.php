<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/23
 * Time: 15:31
 */
namespace Common\Responsibility;
class MajorDomo extends Manager {
    public function __construct($name){
        parent::__construct($name);
    }
    public function apply(Request $req){
        if($req->requestType == '请假' && $req->num <10){
            echo "{$this->name}:{$req->requestContent} 数量{$req->num}被批准。<br/>";
        }else{
            if(isset($this->manger)){
                $this->manager->apply($req);
            }
        }
    }
}