<?php


class JgNumberHelper extends AppHelper {
	
	var $helpers = array('Number');

	function donation($value) {
		if ($value < 0.01) { // in case it's a float
			return '<span class="donation-undisclosed">Undisclosed</div>';
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
			$html .= ' Gift Aid</div>';
			
			return $html;
		}	
	}
}
