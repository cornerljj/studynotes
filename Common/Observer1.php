<?php
/**
 *
 *
 * @author: JerryZhang (zhanghongdong@360.net)
 *
 */
namespace Common;
class Observer1 implements Observer {

	function update($event_info = null){
		echo "observer1逻辑<br/>\n";
	}
}