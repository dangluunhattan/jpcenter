<!--//
//   Created by Phi
//    2017/03/31
//-->

<?php

class Controller_TeachingSchedule extends Controller_Base {

    public $template = 'template';

    /**
     * The index action.
     *
     * @access  public
     * @return  void
     */
    public function action_index() {
        
        $data['day'] = Model_Day::Find('all');
        $data['time'] = Model_Time::Find('all');
        $data['teacher'] = Model_Teacher::Find('all');
        $data['subject'] = Model_Subject::Find('all');
        $data['select']['day'] = 'none';
        $data['select']['time'] = 'none';
        $data['select']['teacher'] = 'none';
        $data['select']['subject'] = 'none';
        $where = array(
            array('end_date', '>', Date::forge()->format("%Y/%m/%d")),
            array('max_student', '>', 'reg_student')
        );
        
        if (Input::get('time') != NULL) {
            $i = 0;
            $whereitem = array();
            foreach (Input::get('time') as $item) {
                if ($i != 0) {
                    $temp = array();
                    array_push($temp, array('time_id', $item));
                    $temp['or'] = $whereitem;
                    $whereitem = $temp;
                } else {
                    array_push($whereitem, array('time_id', $item));
                }
                $data['select']['time'] = Input::get('time');
                $i++;
            }
            array_push($where, $whereitem);
        }
        if (Input::get('day') != NULL) {
            $i = 0;
            $whereitem = array();
            foreach (Input::get('day') as $item) {
                if ($i != 0) {
                    $temp = array();
                    array_push($temp, array('day_id', $item));
                    $temp['or'] = $whereitem;
                    $whereitem = $temp;
                } else {
                    array_push($whereitem, array('day_id', $item));
                }
                $data['select']['day'] = Input::get('day');
                $i++;
            }
            array_push($where, $whereitem);
        }
        if (Input::get('teacher') != NULL) {
            $i = 0;
            $whereitem = array();
            foreach (Input::get('teacher') as $item) {
                if ($i != 0) {
                    $temp = array();
                    array_push($temp, array('teacher_id', $item));
                    $temp['or'] = $whereitem;
                    $whereitem = $temp;
                } else {
                    array_push($whereitem, array('teacher_id', $item));
                }
                $data['select']['teacher'] = Input::get('teacher');
                $i++;
            }
            array_push($where, $whereitem);
        }
        if (Input::get('subject') != NULL) {
            $i = 0;
            $whereitem = array();
            foreach (Input::get('subject') as $item) {
                if ($i != 0) {
                    $temp = array();
                    array_push($temp, array('subject_id', $item));
                    $temp['or'] = $whereitem;
                    $whereitem = $temp;
                } else {
                    array_push($whereitem, array('subject_id', $item));
                }
                $data['select']['subject'] = Input::get('subject');
                $i++;
            }
            array_push($where, $whereitem);
        }
        $courses = Model_Course::Find('all', array(
                    'where' => $where,
                    'order_by' => array('room_id' => 'asc'),
                    'order_by' => array('day_id' => 'asc'),
                    'order_by' => array('time_id' => 'asc'),
        ));

        foreach ($courses as $course) {
            $data['tabletime'][$course->time->id] = $course->time->name;

            $data['coursedetails'][$course->id]['room'] = $course->classroom->name;
            $data['coursedetails'][$course->id]['days'] = $course->day->name;
            $data['coursedetails'][$course->id]['reg_student'] = $course->reg_student;
            $data['coursedetails'][$course->id]['max_student'] = $course->max_student;
            $data['coursedetails'][$course->id]['fee'] = $course->fee;
            $data['coursedetails'][$course->id]['fee_unit'] = $course->fee_unit;
            $data['coursedetails'][$course->id]['introduce'] = $course->introduce;
            $data['coursedetails'][$course->id]['time'] = $course->time->name;
            $data['coursedetails'][$course->id]['subject'] = $course->subject->name;
            $data['coursedetails'][$course->id]['teacher'] = $course->teacher->fullname;
            $data['coursedetails'][$course->id]['start_date'] = $course->start_date;
            $data['coursedetails'][$course->id]['end_date'] = $course->end_date;

            $data['course'][$course->classroom->id]['name'] = $course->classroom->name;
            $data['course'][$course->classroom->id][$course->day->id]['name'] = $course->day->name;
            $data['course'][$course->classroom->id][$course->day->id][$course->time->id]['id'] = $course->id;
            $data['course'][$course->classroom->id][$course->day->id][$course->time->id]['name'] = $course->time->name;
            $data['course'][$course->classroom->id][$course->day->id][$course->time->id]['subject'] = $course->subject->name;
            $data['course'][$course->classroom->id][$course->day->id][$course->time->id]['teacher'] = $course->teacher->fullname;
            $data['course'][$course->classroom->id][$course->day->id][$course->time->id]['start_date'] = $course->start_date;
            $data['course'][$course->classroom->id][$course->day->id][$course->time->id]['end_date'] = $course->end_date;
        }
        $this->template->title = '教授スケジュール';
        $this->template->css = array('schedule.css', 'bootstrap-select.min.css');
        $this->template->js = array('bootstrap-select.js', 'i18n/defaults-jp_jP.js');
        $this->template->content = View::forge('schedule/index', $data);
    }

}

/* End of file teaching_schedule.php */