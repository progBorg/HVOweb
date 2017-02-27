<?php

namespace Stats;

class Controller_Widget extends \Controller_Widget_Base {
	
	public function action_points() {	
		$settleable_points = 0;
		$unsettleable_points = 0;
		
		$user_id = \Auth::get_user_id()[1];
		$settleable_enrollments = \Sessions\Model_Enrollment_Session::get_settleable($user_id);
		$unsettleable_enrollments = \Sessions\Model_Enrollment_Session::get_unsettleable($user_id);
		
		foreach($settleable_enrollments as $enrollment) {
			$settleable_points += $enrollment->get_point_prediction(true);
		}
		
		foreach($unsettleable_enrollments as $enrollment) {
			$unsettleable_points += $enrollment->get_point_prediction();
		}
		
		$count = \Model_User::find($user_id)->points;
		
		$this->template->style = '';
		$this->template->icon = 'fa-balance-scale';
		$this->template->notice = '';
		$this->template->message = $unsettleable_points . ' ' . strtolower(__('session.field.point_plural')) . ' ' . __('stats.widget');
		$this->template->kind = strtolower($count == 1 ? __('session.field.point') : __('session.field.point_plural'));
		$this->template->count = $count + $settleable_points;
		$this->template->details = false;
	}
}