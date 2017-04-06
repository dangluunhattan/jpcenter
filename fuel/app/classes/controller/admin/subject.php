<?php
class Controller_Admin_Subject extends Controller_Admin
{

	public function action_index()
	{
		$data['subjects'] = Model_Subject::find('all');
		$this->template->title = "Subjects";
		$this->template->content = View::forge('admin/subject/index', $data);

	}

	public function action_view($id = null)
	{
		$data['subject'] = Model_Subject::find($id);

		$this->template->title = "Subject";
		$this->template->content = View::forge('admin/subject/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Subject::validate('create');

			if ($val->run())
			{
				$subject = Model_Subject::forge(array(
					'name' => Input::post('name'),
					'introduce' => Input::post('introduce'),
				));

				if ($subject and $subject->save())
				{
					Session::set_flash('success', e('Added subject #'.$subject->id.'.'));

					Response::redirect('admin/subject');
				}

				else
				{
					Session::set_flash('error', e('Could not save subject.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Subjects";
		$this->template->content = View::forge('admin/subject/create');

	}

	public function action_edit($id = null)
	{
		$subject = Model_Subject::find($id);
		$val = Model_Subject::validate('edit');

		if ($val->run())
		{
			$subject->name = Input::post('name');
			$subject->introduce = Input::post('introduce');

			if ($subject->save())
			{
				Session::set_flash('success', e('Updated subject #' . $id));

				Response::redirect('admin/subject');
			}

			else
			{
				Session::set_flash('error', e('Could not update subject #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$subject->name = $val->validated('name');
				$subject->introduce = $val->validated('introduce');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('subject', $subject, false);
		}

		$this->template->title = "Subjects";
		$this->template->content = View::forge('admin/subject/edit');

	}

	public function action_delete($id = null)
	{
		if ($subject = Model_Subject::find($id))
		{
			$subject->delete();

			Session::set_flash('success', e('Deleted subject #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete subject #'.$id));
		}

		Response::redirect('admin/subject');

	}

}
