<?php

App::uses('AppController', 'Controller');

class DonationlistsController extends AppController {


	function donationlist($charityId = null) {

		// get donations
		$result = $this->jgClient->Charity->Donations($charityId);
		
		$donations = $result->donations;

		$this->set('donations', $donations);
		$this->set('charityId', $charityId);


		if (count($donations) == 0 ) {
			$this->render('donationlist_empty');
		}
	}

	function donationlistEmbeddableJs($charityId = null, $dummy = '') {

		$this->layout = 'embeddable-js';
		$this->set('target_element_id', 'jg-widget-donationlist-' . $charityId . '-' . $dummy);

		// get donations
		$result = $this->jgClient->Charity->Donations($charityId);
		
		$donations = $result->donations;
		
		$this->set('donations', $donations);
		$this->set('charityId', $charityId);

		if (count($donations) == 0 ) {
			$this->render('donationlist_empty');
		} else {
			$this->render('donationlist');	
		}
		
	}

	function donationlistByRef($charityId, $ref) {
		// get donations
		$result = $this->jgClient->Donation->ByRef($ref);


		$donations = $result->donations;

		$this->set('donations', $donations);
		$this->set('charityId', $charityId);	

		if (count($donations) == 0 ) {
			$this->render('donationlist_by_ref_empty');
		}
	}


	function donationlistByRefEmbeddableJs($charityId, $ref, $dummy = '') {

		$this->layout = 'embeddable-js';
		$this->set('target_element_id', 'jg-widget-donationlistbyref-' . $charityId . '-' . $ref . '-' . $dummy);


		// get donations
		$result = $this->jgClient->Donation->ByRef($ref);

		$donations = $result->donations;

		$this->set('donations', $donations);
		$this->set('charityId', $charityId);

		if (count($donations) == 0 ) {
			$this->render('donationlist_by_ref_empty');
		} else {
			$this->render('donationlist_by_ref');	
		}

		
	}


	function donationlistEmpty($charityId = null) {

		// get donations
		$donations = array();

		$this->set('donations', $donations);
		$this->set('charityId', $charityId);

	}


	function donationlistByRefEmpty($charityId = null, $ref = null) {

		// get donations
		$donations = array();

		$this->set('donations', $donations);
		$this->set('charityId', $charityId);

	}

}

?>