<?php

namespace Fuel\Migrations;

class Create_classrooms
{
	public function up()
	{
		\DBUtil::create_table('classrooms', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 50, 'type' => 'varchar'),
			'capacity' => array('constraint' => 11, 'type' => 'int'),
			'location' => array('constraint' => 50, 'type' => 'varchar'),
			'note' => array('type' => 'text'),
			'created_at' => array('type' => 'date', 'null' => true),
			'updated_at' => array('type' => 'date', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('classrooms');
	}
}