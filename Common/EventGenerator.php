<?php
/**
 * Created by PhpStorm.
 * User: corner
 * Date: 2018/4/20
 * Time: 16:31
 */
namespace Common;
abstract class EventGenerator{
	private $observers = array();
	function addObserver(Observer $observer){
		$this->observers[] = $observer;
	}
	function notify(){
		foreach ($this->observers as $observer){
			$observer->update();
		}
	}
}