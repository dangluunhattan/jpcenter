<?php

use \Model\Lecturers;

class Controller_Lecturers extends Controller_Template {
	public function action_index() {
		$data = array();
		$this->template->title = "教師のリスト";
		$data['list'] = Model_Lecturers::query()->get();
//		$this->template->css = "~~";
		$this->template->content = View::forge('lecturers/list_new', $data);

	}
}
