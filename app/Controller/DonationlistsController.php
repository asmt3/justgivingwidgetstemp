<?php

App::uses('AppController', 'Controller');

class DonationlistsController extends AppController {

	function donationlist($charityId = null) {

		// get donations
		$result = $this->jgClient->Charity->Donations($charityId);
		
		$this->set('donations', $result->donations);
		$this->set('charityId', $charityId);
	}

	function donationlistEmbeddableJs($charityId = null, $dummy = '') {

		$this->layout = 'embeddable-js';
		$this->set('target_element_id', 'jg-widget-donationlist-' . $charityId . '-' . $dummy);

		// get donations
		$result = $this->jgClient->Charity->Donations($charityId);
		
		$this->set('donations', $result->donations);
		$this->set('charityId', $charityId);

		$this->render('donationlist');
	}

	function donationlistByRef($ref) {
		// get donations
		$result = $this->jgClient->Donation->ByRef($ref);

		$this->set('donations', $result->donations);	
	}


	function donationlistByRefEmbeddableJs($ref, $dummy = '') {

		$this->layout = 'embeddable-js';
		$this->set('target_element_id', 'jg-widget-donationlistbyref-' . $ref . '-' . $dummy);


		// get donations
		$result = $this->jgClient->Donation->ByRef($ref);

		$this->set('donations', $result->donations);	

		$this->render('donationlist_by_ref');
	}

}

?>