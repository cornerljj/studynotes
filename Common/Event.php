<?php
/**
 *
 *
 * @author: JerryZhang (zhanghongdong@360.net)
 *
 */
 namespace Common;
 class Event extends EventGenerator {

 	function trigger(){
 		echo "Event1<br/>\n";
 		$this->notify();
    }




 }