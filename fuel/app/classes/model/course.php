<?php
class Model_Course extends \Orm\Model_Soft
{
	protected static $_properties = array(
		'id',
		'subject_id',
		'teacher_id',
		'room_id',
		'start_date',
		'end_date',
		'day_id',
		'time_id',
		'max_student',
		'reg_student',
		'fee',
		'fee_unit',
		'status',
		'introduce',
		'deleted_at',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => true,
		),
	);
        
	protected static $_soft_delete = array(
		'mysql_timestamp' => true,
	);
        
        protected static $_belongs_to = array(
            'classroom' => array(
                'key_from' => 'room_id',
                'model_to' => 'Model_Classroom',
                'key_to' => 'id',
                'cascade_save' => true,
                'cascade_delete' => false,
            ),'teacher' => array(
                'key_from' => 'teacher_id',
                'model_to' => 'Model_Teacher',
                'key_to' => 'id',
                'cascade_save' => true,
                'cascade_delete' => false,
            ),'subject' => array(
                'key_from' => 'subject_id',
                'model_to' => 'Model_Subject',
                'key_to' => 'id',
                'cascade_save' => true,
                'cascade_delete' => false,
            ),'day' => array(
                'key_from' => 'day_id',
                'model_to' => 'Model_Day',
                'key_to' => 'id',
                'cascade_save' => true,
                'cascade_delete' => false,
            ),'time' => array(
                'key_from' => 'time_id',
                'model_to' => 'Model_Time',
                'key_to' => 'id',
                'cascade_save' => true,
                'cascade_delete' => false,
            ),'subject' => array(
                'key_from' => 'subject_id',
                'model_to' => 'Model_Subject',
                'key_to' => 'id',
                'cascade_save' => true,
                'cascade_delete' => false,
            )
        );

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('subject_id', 'Subject Id', 'required|valid_string[numeric]');
		$val->add_field('teacher_id', 'Teacher Id', 'required|valid_string[numeric]');
		$val->add_field('room_id', 'Room Id', 'required|valid_string[numeric]');
		$val->add_field('start_date', 'Start Date', 'required');
		$val->add_field('end_date', 'End Date', 'required');
		$val->add_field('day_id', 'Day Id', 'required|valid_string[numeric]');
		$val->add_field('time_id', 'Time Id', 'required|valid_string[numeric]');
		$val->add_field('max_student', 'Max Student', 'required|valid_string[numeric]');
		$val->add_field('reg_student', 'Reg Student', 'required|valid_string[numeric]');
		$val->add_field('fee', 'Fee', 'required|valid_string[numeric]');

		return $val;
	}

}