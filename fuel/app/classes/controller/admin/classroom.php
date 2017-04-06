<?php
class Controller_Admin_Classroom extends Controller_Admin
{

	public function action_index()
	{
		$data['classrooms'] = Model_Classroom::find('all');
		$this->template->title = "Classrooms";
		$this->template->content = View::forge('admin/classroom/index', $data);

	}

	public function action_view($id = null)
	{
		$data['classroom'] = Model_Classroom::find($id);

		$this->template->title = "Classroom";
		$this->template->content = View::forge('admin/classroom/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Classroom::validate('create');

			if ($val->run())
			{
				$classroom = Model_Classroom::forge(array(
					'name' => Input::post('name'),
					'capacity' => Input::post('capacity'),
					'location' => Input::post('location'),
					'note' => Input::post('note'),
				));

				if ($classroom and $classroom->save())
				{
					Session::set_flash('success', e('Added classroom #'.$classroom->id.'.'));

					Response::redirect('admin/classroom');
				}

				else
				{
					Session::set_flash('error', e('Could not save classroom.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Classrooms";
		$this->template->content = View::forge('admin/classroom/create');

	}

	public function action_edit($id = null)
	{
		$classroom = Model_Classroom::find($id);
		$val = Model_Classroom::validate('edit');

		if ($val->run())
		{
			$classroom->name = Input::post('name');
			$classroom->capacity = Input::post('capacity');
			$classroom->location = Input::post('location');
			$classroom->note = Input::post('note');

			if ($classroom->save())
			{
				Session::set_flash('success', e('Updated classroom #' . $id));

				Response::redirect('admin/classroom');
			}

			else
			{
				Session::set_flash('error', e('Could not update classroom #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$classroom->name = $val->validated('name');
				$classroom->capacity = $val->validated('capacity');
				$classroom->location = $val->validated('location');
				$classroom->note = $val->validated('note');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('classroom', $classroom, false);
		}

		$this->template->title = "Classrooms";
		$this->template->content = View::forge('admin/classroom/edit');

	}

	public function action_delete($id = null)
	{
		if ($classroom = Model_Classroom::find($id))
		{
			$classroom->delete();

			Session::set_flash('success', e('Deleted classroom #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete classroom #'.$id));
		}

		Response::redirect('admin/classroom');

	}

}
