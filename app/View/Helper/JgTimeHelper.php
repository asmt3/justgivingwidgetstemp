<?php


class JgTimeHelper extends AppHelper {
	
	var $helpers = array('Time');

	function nice($str) {
		
		$secondsSinceEpoch = $this->toUnixTimestamp($str);

		return $this->Time->nice($secondsSinceEpoch);
	}

	function timeAgoInWords($str) {
		
		$secondsSinceEpoch = $this->toUnixTimestamp($str);

		return $this->Time->timeAgoInWords($secondsSinceEpoch);
	}

	function toUnixTimestamp($str) {
		$str = str_replace('/Date(', '', $str);
		$str = str_replace(')/', '', $str);
		$parts = explode('+', $str);

		$secondsSinceEpoch = $parts[0]/1000 + $parts[1] * 60 * 60;
		return $secondsSinceEpoch;
	}
}
