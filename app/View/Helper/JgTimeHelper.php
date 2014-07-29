<?php


class JgTimeHelper extends AppHelper {
	
	var $helpers = array('Time');

	function nice($str) {
		
		$secondsSinceEpoch = $this->toUnixTimestamp($str);

		return $this->Time->nice($secondsSinceEpoch);
	}

	function dateWithoutTime($str) {

		$secondsSinceEpoch = $this->toUnixTimestamp($str);

		$d = new DateTime();
		$d->setTimestamp($secondsSinceEpoch);

		return $d->format('D, F jS, Y');
	}

	function timeAgoInWords($str) {
		
		$secondsSinceEpoch = $this->toUnixTimestamp($str);

		// if the time ago is more than 1 month, just return 'more than a month ago'
		if (time() - $secondsSinceEpoch > 60 * 60 * 24 * 31) { // a month
			return 'more than a month ago';
		}
		
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
