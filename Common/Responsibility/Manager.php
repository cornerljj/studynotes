<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/23
 * Time: 17:50
 */
namespace Common\Responsibility;
abstract class Manager{
    protected $name;
    protected $manager;
    public function __construct($name){
        $this->name = $name;
    }
    public function setHeader(Manager $ma){
        $this->manager = $ma;
    }
    abstract public function apply(Request $req);
}