<?php 

App::uses('AppController', 'Controller');

class CharityeventlistsController extends AppController {


	function charityeventlist($charity_id) {


		$result = $this->jgClient->Charity->Events($charity_id);

		$events = $result->events;



		$this->set('events', $events);
		$this->set('charity_id', $charity_id);

		// if there are no events, render a different view
		if (count($events) == 0) {
			$this->render('charityeventlist_empty');
		}
	}

	function charityeventlistEmpty($charity_id) {


		$events = array();

		$this->set('events', $events);
		$this->set('charity_id', $charity_id);
	}

	function charityeventlistEmbeddableJs($charity_id, $dummy = '') {

		$this->layout = 'embeddable-js';
		$this->set('target_element_id', 'jg-widget-charityeventlist-' . $charity_id . '-' . $dummy);

		$result = $this->jgClient->Charity->Events($charity_id);



		$events = $result->events;

		$events[0]->name = ' alan\'s  ';

		$this->set('events', $events);
		$this->set('charity_id', $charity_id);

		

		// if there are no events, render a different view
		if (count($events) == 0) {
			$this->render('charityeventlist_empty');
		} else {
			$this->render('charityeventlist');	
		}

	}


}