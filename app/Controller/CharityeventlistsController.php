<?php 

App::uses('AppController', 'Controller');

class CharityeventlistsController extends AppController {


	function charityeventlist($charity_id) {


		$result = $this->jgClient->Charity->Events($charity_id);

		$this->set('events', $result->events);
		$this->set('charity_id', $charity_id);
	}

	function charityeventlistEmbeddableJs($charity_id, $dummy = '') {

		$this->layout = 'embeddable-js';
		$this->set('target_element_id', 'jg-widget-charityeventlist-' . $charity_id . '-' . $dummy);

		$result = $this->jgClient->Charity->Events($charity_id);

		$this->set('events', $result->events);
		$this->set('charity_id', $charity_id);

		$this->render('charityeventlist');
	}


}