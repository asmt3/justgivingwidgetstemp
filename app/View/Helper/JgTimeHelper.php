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
		// convert the JG timestamp
		// which may of the form /Data(Milliseconds)/
		// OR ISO8601

		if (strpos($str, 'Date') !== FALSE) {
			$secondsSinceEpoch = $this->convertASPTToUnixTimestamp($str);
		} else {
			// assume it's a standard format
			$secondsSinceEpoch = strtotime($str);
		}
		
		return $secondsSinceEpoch;
	}

	function convertASPTToUnixTimestamp($str) {
		preg_match('/(\d{10})(\d{3})([\+\-]\d{4})/', $str, $matches);
		$dt = DateTime::createFromFormat("U.u.O",vsprintf('%2$s.%3$s.%4$s', $matches));
		return $dt->format('U');
	}
}
