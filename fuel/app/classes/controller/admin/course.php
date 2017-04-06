<?php
class Controller_Admin_Course extends Controller_Admin
{

	public function action_index()
	{
		$data['courses'] = Model_Course::find('all');
		$this->template->title = "Courses";
		$this->template->content = View::forge('admin/course/index', $data);

	}

	public function action_view($id = null)
	{
		$data['course'] = Model_Course::find($id);

		$this->template->title = "Course";
		$this->template->content = View::forge('admin/course/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Course::validate('create');

			if ($val->run())
			{
				$course = Model_Course::forge(array(
					'subject_id' => Input::post('subject_id'),
					'teacher_id' => Input::post('teacher_id'),
					'room_id' => Input::post('room_id'),
					'start_date' => Input::post('start_date'),
					'end_date' => Input::post('end_date'),
					'day_id' => Input::post('day_id'),
					'time_id' => Input::post('time_id'),
					'max_student' => Input::post('max_student'),
					'reg_student' => Input::post('reg_student'),
					'fee' => Input::post('fee'),
					'status' => Input::post('status'),
					'introduce' => Input::post('introduce'),
				));

				if ($course and $course->save())
				{
					Session::set_flash('success', e('Added course #'.$course->id.'.'));

					Response::redirect('admin/course');
				}

				else
				{
					Session::set_flash('error', e('Could not save course.'));
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Courses";
		$this->template->content = View::forge('admin/course/create');

	}

	public function action_edit($id = null)
	{
		$course = Model_Course::find($id);
		$val = Model_Course::validate('edit');

		if ($val->run())
		{
			$course->subject_id = Input::post('subject_id');
			$course->teacher_id = Input::post('teacher_id');
			$course->room_id = Input::post('room_id');
			$course->start_date = Input::post('start_date');
			$course->end_date = Input::post('end_date');
			$course->day_id = Input::post('day_id');
			$course->time_id = Input::post('time_id');
			$course->max_student = Input::post('max_student');
			$course->reg_student = Input::post('reg_student');
			$course->fee = Input::post('fee');
			$course->status = Input::post('status');
			$course->introduce = Input::post('introduce');

			if ($course->save())
			{
				Session::set_flash('success', e('Updated course #' . $id));

				Response::redirect('admin/course');
			}

			else
			{
				Session::set_flash('error', e('Could not update course #' . $id));
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$course->subject_id = $val->validated('subject_id');
				$course->teacher_id = $val->validated('teacher_id');
				$course->room_id = $val->validated('room_id');
				$course->start_date = $val->validated('start_date');
				$course->end_date = $val->validated('end_date');
				$course->day_id = $val->validated('day_id');
				$course->time_id = $val->validated('time_id');
				$course->max_student = $val->validated('max_student');
				$course->reg_student = $val->validated('reg_student');
				$course->fee = $val->validated('fee');
				$course->status = $val->validated('status');
				$course->introduce = $val->validated('introduce');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('course', $course, false);
		}

		$this->template->title = "Courses";
		$this->template->content = View::forge('admin/course/edit');

	}

	public function action_delete($id = null)
	{
		if ($course = Model_Course::find($id))
		{
			$course->delete();

			Session::set_flash('success', e('Deleted course #'.$id));
		}

		else
		{
			Session::set_flash('error', e('Could not delete course #'.$id));
		}

		Response::redirect('admin/course');

	}

}
