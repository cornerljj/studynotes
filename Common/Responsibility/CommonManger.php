<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/23
 * Time: 15:30
 */
namespace Common\Responsibility;
class CommonManger extends Manager {
    public function __construct($name){
        parent::__construct($name);
    }

    public function apply(Request $req){
        if($req->requestType == '请假' && $req->num <=2){
             echo "{$this->name}:{$req->requestContent} 数量{$req->num}被批准。<br/>";
        }else{
            if(isset($this->manager)){
               $aa = $this->manager->apply($req);
               return $aa;
            }
        }
    }
}