<?php
class Controller_News extends Controller_Base
{

	public function action_index()
	{
		$data['news'] = Model_News::find('all');
		$this->template->title = "News";
		$this->template->content = View::forge('news/index', $data);

	}

	public function action_view($id = null)
	{
		$data['news'] = Model_News::find($id);

		$this->template->title = "News";
		$this->template->content = View::forge('news/view', $data);

	}
}
