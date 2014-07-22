<?php 

App::uses('AppController', 'Controller');

class CharitiesController extends AppController {


	function wizard($charity_id) {
		$this->set(compact('charity_id'));
	}


	// proxy for charities search API
	function search() {
		$this->layout = 'ajax';

		$term = $this->request->query('term');


		// get donations
		$results = $this->jgClient->Charity->Search($term);

		$this->set(compact('results'));
	}

}

?>