<?php

class Controller_Courses extends Controller_Base
{
	public function action_index()
	{
            if(!Auth::check())
             {
                 $error = 'Chua Login';
                 return Response::forge(View::forge('login/index',array('error'=>$error)));
             }
        else{   $userID = Auth::get_user_id();
                $student = Model_Student::find('first',array('where'=> array('user_id' => $userID[1])));
                $registes = Model_Registercourses::find('all',array('where'=>array( 'student_id' => $student->id)));
                
                foreach($registes as $item):
                   $course = Model_Course::find('all',array('where'=>array( 'id'=>$item->course_id)));
                   $courses[] = array_values($course)[0];
                endforeach;
                
                foreach($courses as $item2):
                        $subject = Model_Subject::find('all',array('where'=>array( 'id' => $item2->subject_id)));
                        $subjects[]= array_values($subject)[0];
                        $teacher = Model_Teacher::find('all',array('where'=>array( 'id' => $item2->teacher_id)));
                        $teachers[]= array_values($teacher)[0];
                endforeach;
                $data = array('registes'=>$registes,'courses'=>$courses,'subjects'=>$subjects,'teachers'=>$teachers);
                $this->template->title = 'コースのリスト';
                $this->template->css = '';
                $this->template->content = View::forge('courses/index',$data,false); 
            }
        }
}