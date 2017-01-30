<?php

namespace Sessions;

class Dto_SessionListItem {
	
	public $date;
	public $participants;
	public $cooks;
	public $dishwashers;
	public $cost;
	
	public function __construct(\Sessions\Model_Session $session) {
		$this->date = $session->date;
		$this->participants = $session->count_participants();
		$this->cost = $session->cost;
		
		foreach($session->get_cook_enrollments() as $cook) {
			$this->cooks .= $cook->user->name . ' ';
		}
		
		foreach($session->get_dishwasher_enrollments() as $dishwasher) {
			$this->dishwashers .= $dishwasher->user->name . ' ';
		}
	}
	
}