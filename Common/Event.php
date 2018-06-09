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
 		echo "Evesssnt1<br/>\n";
 		$this->notify();
    }




 }