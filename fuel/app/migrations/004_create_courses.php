<?php

namespace Fuel\Migrations;

class Create_courses
{
	public function up()
	{
		\DBUtil::create_table('courses', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'subject_id' => array('constraint' => 11, 'type' => 'int'),
			'teacher_id' => array('constraint' => 11, 'type' => 'int'),
			'room_id' => array('constraint' => 11, 'type' => 'int'),
			'start_date' => array('type' => 'date'),
			'end_date' => array('type' => 'date'),
			'day_id' => array('constraint' => 11, 'type' => 'int'),
			'time_id' => array('constraint' => 11, 'type' => 'int'),
			'max_student' => array('constraint' => 11, 'type' => 'int'),
			'reg_student' => array('constraint' => 11, 'type' => 'int'),
			'fee' => array('constraint' => 11, 'type' => 'int'),
			'status' => array('constraint' => 11, 'type' => 'int'),
			'introduce' => array('type' => 'text'),
			'created_at' => array('type' => 'date', 'null' => true),
			'updated_at' => array('type' => 'date', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('courses');
	}
}