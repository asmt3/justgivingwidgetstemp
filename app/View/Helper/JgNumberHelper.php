<?php


class JgNumberHelper extends AppHelper {
	
	var $helpers = array('Number');

	function donation($value) {
		if ($value < 0.01) { // in case it's a float
			return '<span class="donation-undisclosed">Undisclosed</span>';
		} else {
			return $this->Number->currency($value, 'GBP');
		}
	}

	function giftAid($value) {
		if ($value < 0.01) { // in case it's a float
			return '';
		} else {

			$html = '<div class="estimatedTaxReclaim">+ ';
			$html .= $this->Number->currency($value, 'GBP');
			$html .= '<span class="gift-aid-text">Gift Aid</span></div>';
			
			return $html;
		}	
	}
}
